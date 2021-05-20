-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 06:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notif_basic1`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_type`
--

CREATE TABLE `business_type` (
  `business_type_id` tinyint(4) NOT NULL,
  `business_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `business_type`
--

INSERT INTO `business_type` (`business_type_id`, `business_type`) VALUES
(1, 'university'),
(2, 'school'),
(3, 'hotel'),
(4, 'restaurant'),
(5, 'toko online');

-- --------------------------------------------------------

--
-- Table structure for table `channel`
--

CREATE TABLE `channel` (
  `channel_id` tinyint(4) NOT NULL,
  `channel_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `channel`
--

INSERT INTO `channel` (`channel_id`, `channel_name`) VALUES
(1, 'telegram'),
(2, 'email'),
(3, 'whatsapp'),
(4, 'line');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` bigint(20) NOT NULL,
  `country_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'indonesia'),
(2, 'singapore'),
(3, 'australia'),
(4, 'china'),
(5, 'usa');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `group_id` bigint(20) NOT NULL,
  `group_name` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `token_type` enum('public','token','lookup','API') DEFAULT NULL COMMENT '0=public/tanpa token, 1 =private/dengan token 3. api token dr sistem eksternal',
  `token_group` varchar(50) DEFAULT NULL,
  `membership_type` tinyint(4) DEFAULT NULL,
  `business_type` tinyint(4) DEFAULT NULL,
  `open_time` time DEFAULT NULL,
  `close_time` time DEFAULT NULL,
  `off_day` varchar(50) DEFAULT NULL COMMENT 'holiday and sunday'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`group_id`, `group_name`, `description`, `logo`, `token_type`, `token_group`, `membership_type`, `business_type`, `open_time`, `close_time`, `off_day`) VALUES
(1, 'TI Udayana', 'Jurusan Teknologi Informasi Fakultas Teknik Universitas Udayana. Dapatkan informasi pendaftaran mahasiswa baru, kegiatan rutin dan info bea siswa. Terbuka untuk member internal  dengan menunjukkan NIM/NIP dan member eksternal/masyarakat umum', 'c:/logo.jpg', 'public', '0', 3, 1, '07:06:48', '08:06:50', 'holiday'),
(2, 'UI', 'Universitas Indonesia. Dapatkan informasi pendaftaran mahasiswa baru, kegiatan rutin dan info bea siswa. Terbuka untuk member internal  maupun external', 'c:/logo.jpg', 'public', '0', 3, 1, '03:11:40', '07:11:46', 'holiday'),
(3, 'UNHI', 'Universitas Hindu Indonesia. Dapatkan Infromasi Internal Seperti Infromasi Rapat, Info Magang dan lain-lain. Terbuka hanya untuk member internal', 'c:/logo.jpg', 'token', '6123', 1, 1, '01:12:39', '03:12:48', 'holiday'),
(4, 'Ilkom Udayana', 'Jurusan Ilmu Komputer Universitas Udayana. Dapatkan informasi seputar jurusan Ilmu Komputer Fmipa. Terbuka untuk member eksternal/masyarakat umum', 'c:/logo.jpg', 'public', '0', 2, 1, '08:07:44', '22:07:47', 'holiday'),
(5, 'KOBOLG', 'KOBOLG. Dapatkan Info Diskon dan promo promo menrarik lainnya.', 'c:/logo.jpg', 'public', '0', 2, 5, '00:07:52', '23:07:55', 'holiday');

-- --------------------------------------------------------

--
-- Table structure for table `group_agenda`
--

CREATE TABLE `group_agenda` (
  `group_agenda_id` bigint(20) NOT NULL,
  `group_id` bigint(20) DEFAULT NULL,
  `agenda_type_id` bigint(20) DEFAULT NULL,
  `loop_id` int(11) DEFAULT NULL,
  `loop_value` datetime DEFAULT NULL COMMENT 'berlaku utk semua pesan general, jika private dicek dr field  date_send',
  `agenda_name` varchar(225) DEFAULT NULL COMMENT 'title',
  `message_general` tinyint(4) DEFAULT NULL COMMENT '1: general (sama utk semua member) 2: private(tiap member punya pesan beda2 spt info utang)',
  `message_content` text DEFAULT NULL COMMENT 'kalo pesan general maka pesannya ditulis disini',
  `send_date` datetime DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `repeat` tinyint(1) DEFAULT NULL COMMENT '1 (yes), 2(no',
  `repeat_type` enum('daily','weekly','monthly','yearly','bydate') DEFAULT NULL COMMENT 'jika bydate cek ke tabel detail group agenda_repeat_date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_agenda`
--

INSERT INTO `group_agenda` (`group_agenda_id`, `group_id`, `agenda_type_id`, `loop_id`, `loop_value`, `agenda_name`, `message_general`, `message_content`, `send_date`, `attachment`, `repeat`, `repeat_type`) VALUES
(1, 1, 3, 1, '2021-05-04 07:26:38', 'Opening ITCC 2021', 1, 'Telah Dimulai, Lomba Terbesar di Jurusan Teknologi Fakultas Teknik Universitas Udayana, ITCC 2021. Jangan Sampai Kelewatan Daftarkan diri sekarang', '2021-05-04 07:29:47', NULL, 1, 'yearly'),
(2, 2, 2, 1, NULL, 'Diskon Baju BURSA', 1, 'Jangan sampai kelewatan! Diskon Bursa Hari Ini!', '2021-07-12 07:33:07', NULL, 1, 'bydate'),
(3, 3, 1, 1, '2021-05-04 07:43:56', 'Info Lowongan Magang', 1, 'Lowongan Magang Sudah Tersedia DIbulan Ini!', '2021-05-04 07:36:32', NULL, 0, NULL),
(4, 5, 3, 1, NULL, 'Reminder Pembayaran Order yang belum di bayar', 0, 'Segera Bayar Pesanan Yang belum Lunas Agar dapat melanjutkan transaksi anda', '2021-05-04 08:37:59', NULL, 0, NULL),
(5, 5, 3, 1, NULL, 'Reminder Pembayaran Kabolg Pay Later', 0, 'Tagihan Kabolg Pay Later anda akan jatuh tempo, silahkan lunasi tagihan agar dapat terus menikmati layanan.', '2021-05-04 08:50:38', NULL, 0, NULL),
(6, 1, 3, 1, NULL, 'Rimender Rapat ITCC 2021 ', 1, 'Rapat umum ITCC 2021', '2021-05-10 19:14:53', NULL, 1, 'bydate'),
(7, 1, 3, 1, NULL, 'Rimender Rapat IT-ESEGA 2021 ', 1, 'Rapat umum IT ESEGA 2021', '2021-05-15 19:16:43', NULL, 1, 'bydate'),
(8, 1, 3, 1, '2021-05-20 00:00:00', 'ass', 2, 'zzzzz', '2021-05-20 00:00:00', 'a', 1, 'daily'),
(9, 2, 3, 1, '2021-05-20 00:00:00', 'aa', 2, 'zzzzzz', '2021-05-20 00:00:00', 'msg', 1, 'monthly'),
(10, 2, 3, 1, '2021-05-20 00:00:00', 'a', 2, 'zaza', '2021-05-20 00:00:00', 'msg', 1, 'daily'),
(11, 2, 3, 1, '2021-05-20 00:00:00', 'aa', 2, 'xazax', '2021-05-20 00:00:00', 'msg', 1, 'daily'),
(12, 3, 3, 1, '2021-05-20 00:00:00', 'asas', 2, 'asdasdasd', '2021-05-20 00:00:00', 'as', 1, 'daily'),
(13, 3, 3, 1, '2021-05-20 00:00:00', 'a', 2, 'asda', '2021-05-20 00:00:00', 'a', 1, 'daily'),
(14, 1, 3, 1, '2021-05-20 00:00:00', 'as', 1, 'asd', '2021-05-20 00:00:00', 'as', 1, 'daily'),
(15, 1, 3, 1, '2021-05-20 00:00:00', 'a', 1, 'asda', '2021-05-20 00:00:00', 'a', 1, 'daily'),
(16, 2, 3, 1, '2021-05-20 00:00:00', 'aa', 1, 'qwer', '2021-05-20 00:00:00', 'asda', 1, 'daily');

-- --------------------------------------------------------

--
-- Table structure for table `group_agenda_general_logs`
--

CREATE TABLE `group_agenda_general_logs` (
  `id_logs` int(11) NOT NULL,
  `member_id` bigint(20) NOT NULL DEFAULT 0,
  `id_group_agenda` bigint(20) DEFAULT NULL,
  `date_send` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_agenda_general_logs`
--

INSERT INTO `group_agenda_general_logs` (`id_logs`, `member_id`, `id_group_agenda`, `date_send`) VALUES
(1, 5, 5, '2021-05-15 19:21:41'),
(2, 1, 1, '2021-05-05 19:21:59'),
(3, 2, 2, '2021-05-20 19:22:11'),
(4, 3, 1, '2021-05-20 19:22:27'),
(5, 4, 2, '2021-05-05 19:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `group_agenda_private`
--

CREATE TABLE `group_agenda_private` (
  `group_agenda_private_id` bigint(20) NOT NULL,
  `id_group_agenda` bigint(20) DEFAULT NULL,
  `id_member` bigint(20) DEFAULT NULL,
  `message_content` text DEFAULT NULL COMMENT 'bisa berbeda beda antara member',
  `attachment` varchar(100) DEFAULT NULL COMMENT 'bisa berbeda beda antara member',
  `date_send` datetime DEFAULT NULL COMMENT 'jika kososng akan diambil nilainya dari loop value di tabel group agenda'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_agenda_private`
--

INSERT INTO `group_agenda_private` (`group_agenda_private_id`, `id_group_agenda`, `id_member`, `message_content`, `attachment`, `date_send`) VALUES
(1, 4, 1, 'Hallo Wayan Segera Bayar Pesananmu Agar dapat melanjut kan transaksi', NULL, '2021-05-04 08:40:21'),
(2, 4, 4, 'Hallo Irmansyah Segera Bayar Pesananmu Agar dapat melanjut kan transaksi', NULL, '2021-06-04 08:48:13'),
(3, 4, 2, 'Hallo Andre Segera Bayar Pesananmu Agar dapat melanjut kan transaksi', NULL, '2021-12-04 08:49:00'),
(4, 5, 3, 'Hallo Komang, Tagihan KOBOLG Pay Later akan jatuh tempo. Silahkah lunasi tagihan agar dapat teus menikmati layanan.', NULL, '2021-05-04 08:52:12'),
(5, 4, 5, 'Hallo TomoTagihan KOBOLG Pay Later akan jatuh tempo. Silahkah lunasi tagihan agar dapat teus menikmati layanan.', NULL, '2021-10-04 08:52:34'),
(7, NULL, 5, 'zzzzz', 'a', '2021-05-20 00:00:00'),
(8, 9, 5, 'zzzzzz', 'msg', '2021-05-20 00:00:00'),
(9, 10, 5, 'zaza', 'msg', '2021-05-20 00:00:00'),
(10, 11, 5, 'xazax', 'msg', '2021-05-20 00:00:00'),
(11, 4, 5, 'asdsadsa', 'sda', '2021-05-20 00:00:00'),
(12, 12, 5, 'asdasdasd', 'as', '2021-05-20 00:00:00'),
(13, 13, 5, 'asda', 'a', '2021-05-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `group_agenda_repeat_date`
--

CREATE TABLE `group_agenda_repeat_date` (
  `id_group_repeat` bigint(20) NOT NULL,
  `group_agenda_id` bigint(20) DEFAULT NULL,
  `dodate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_agenda_repeat_date`
--

INSERT INTO `group_agenda_repeat_date` (`id_group_repeat`, `group_agenda_id`, `dodate`) VALUES
(1, 2, '2021-01-04 10:00:22'),
(2, 7, '2021-05-20 19:17:15'),
(3, 6, '2021-05-17 19:17:34');

-- --------------------------------------------------------

--
-- Table structure for table `group_agenda_type`
--

CREATE TABLE `group_agenda_type` (
  `agenda_type_id` bigint(20) NOT NULL,
  `group_id` bigint(20) DEFAULT NULL,
  `agenda_type` varchar(225) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `group_requested` bigint(20) DEFAULT NULL COMMENT 'siapa yg request',
  `valid` tinyint(1) DEFAULT NULL COMMENT 'jika belum divalid belum bisa dipakai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_agenda_type`
--

INSERT INTO `group_agenda_type` (`agenda_type_id`, `group_id`, `agenda_type`, `description`, `group_requested`, `valid`) VALUES
(1, 1, 'lowongan kerja', 'Broadcast Lowongan Kerja', NULL, NULL),
(2, 1, 'diskon produk', 'Diskon Product Bursa', NULL, NULL),
(3, 1, 'reminder', 'Reminder Umum', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_member`
--

CREATE TABLE `group_member` (
  `group_member_id` bigint(20) NOT NULL,
  `member_id` bigint(20) DEFAULT NULL,
  `group_id` bigint(20) DEFAULT NULL,
  `user_type` tinyint(4) DEFAULT NULL COMMENT 'sa(pemilik/pembuat group), admin, user (bisa request atau didaftarkan oleh admin, user berhak nolak)',
  `token_group` varchar(30) DEFAULT NULL COMMENT 'dipakai saat register utk memastikan orangnya punya hak join utk private group. bisa dilookup dr token di tabel group atau  by api dgn pemilik saham',
  `identifier_group` varchar(30) DEFAULT NULL COMMENT 'bisa berupa nip, nim atau no anggota lainnya di aorganisasi tersebut khusus untuk jenis member internal(lookup dan API)',
  `token_personal` varchar(30) DEFAULT NULL COMMENT 'token personal pasangan NIP (lookup dan API)',
  `membership_type` tinyint(4) DEFAULT NULL,
  `valid` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_member`
--

INSERT INTO `group_member` (`group_member_id`, `member_id`, `group_id`, `user_type`, `token_group`, `identifier_group`, `token_personal`, `membership_type`, `valid`) VALUES
(1, 3, 1, 3, '6123', NULL, NULL, 3, 1),
(2, 1, 1, 3, '6123', NULL, NULL, 3, 1),
(3, 5, 2, 3, NULL, NULL, NULL, 1, 1),
(4, 4, 3, 3, NULL, NULL, NULL, 2, 1),
(5, 2, 3, 3, NULL, NULL, NULL, 2, 1),
(6, 1, 2, 2, NULL, NULL, NULL, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `group_member_agenda`
--

CREATE TABLE `group_member_agenda` (
  `group_member_agenda_id` bigint(20) NOT NULL,
  `group_member_id` bigint(20) DEFAULT NULL,
  `member_id` bigint(20) DEFAULT NULL,
  `group_agenda_id` bigint(20) DEFAULT NULL COMMENT 'mencatat seorang member langganan apa di group tsbt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_member_agenda`
--

INSERT INTO `group_member_agenda` (`group_member_agenda_id`, `group_member_id`, `member_id`, `group_agenda_id`) VALUES
(1, 3, 5, 2),
(2, 1, 3, 1),
(3, 2, 2, 4),
(4, 4, 4, 3),
(6, 5, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `group_member_agenda_subscriber`
--

CREATE TABLE `group_member_agenda_subscriber` (
  `group_member_id` bigint(20) NOT NULL,
  `member_id` bigint(20) DEFAULT NULL,
  `agenda_type_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_member_agenda_subscriber`
--

INSERT INTO `group_member_agenda_subscriber` (`group_member_id`, `member_id`, `agenda_type_id`) VALUES
(1, 2, 2),
(2, 4, 3),
(3, 3, 1),
(4, 1, 2),
(5, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `group_member_checkin`
--

CREATE TABLE `group_member_checkin` (
  `group_member_checkin_id` bigint(20) NOT NULL,
  `group_member_id` bigint(20) DEFAULT NULL,
  `member_id` bigint(20) DEFAULT NULL,
  `group_id` bigint(20) DEFAULT NULL COMMENT 'mencatat seorang member langganan apa di group tsbt',
  `checkin_date` datetime DEFAULT NULL,
  `checkout_date` datetime DEFAULT NULL,
  `id_room` varchar(10) DEFAULT NULL COMMENT 'np meja. kamar',
  `valid` tinyint(1) DEFAULT NULL,
  `review_member` text DEFAULT NULL,
  `rating_member` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_member_checkin`
--

INSERT INTO `group_member_checkin` (`group_member_checkin_id`, `group_member_id`, `member_id`, `group_id`, `checkin_date`, `checkout_date`, `id_room`, `valid`, `review_member`, `rating_member`) VALUES
(1, 1, 3, 1, '2021-05-04 11:35:08', '2021-06-04 11:35:09', '#RM001', 1, 'kamar sangat bagus dan puas', 5),
(2, 5, 2, 4, '2021-05-04 14:04:37', '2021-06-04 14:04:39', '#RM002', 1, 'kamar bagus', 2),
(3, 2, 1, 4, '2021-04-04 14:06:37', '2021-04-05 14:06:45', '#RM003', 1, 'kamar biasa saja', 3),
(4, 4, 4, 5, '2021-05-04 14:09:18', '2021-06-04 14:09:20', '#RM004', 1, 'kamar kurang layak dihuni', 1),
(5, 3, 5, 3, '2021-05-04 14:10:13', '2021-06-04 14:10:14', '#RM004', 1, 'kamar jelek', 1),
(6, NULL, 1, NULL, '2021-05-17 00:00:00', '2021-05-18 00:00:00', NULL, NULL, 'mantap', 5),
(7, 6, 1, 2, '2021-05-17 00:00:00', '2021-05-18 00:00:00', '8', 0, 'mantal', 5),
(8, 6, 3, 2, '2021-05-17 00:00:00', '2021-05-18 00:00:00', NULL, 0, NULL, NULL),
(9, 6, 5, 2, '2021-05-17 00:00:00', '2021-05-18 00:00:00', '8', 0, NULL, NULL),
(10, 6, 5, 2, '2021-05-18 00:00:00', '2021-05-20 00:00:00', '8', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_member_order`
--

CREATE TABLE `group_member_order` (
  `group_member_order` bigint(20) NOT NULL,
  `group_member_id` bigint(20) DEFAULT NULL,
  `member_id` bigint(20) DEFAULT NULL,
  `group_id` bigint(20) DEFAULT NULL COMMENT 'mencatat seorang member langganan apa di group tsbt',
  `order_date` datetime DEFAULT NULL,
  `valid` tinyint(1) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `currency` char(5) DEFAULT NULL,
  `review_member` text DEFAULT NULL,
  `rating_member` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_member_order`
--

INSERT INTO `group_member_order` (`group_member_order`, `group_member_id`, `member_id`, `group_id`, `order_date`, `valid`, `total`, `currency`, `review_member`, `rating_member`) VALUES
(45, 3, 5, 2, '2021-05-17 03:02:06', 0, 20000, 'IDR', NULL, NULL),
(46, 3, 5, 2, '2021-05-17 03:04:39', 0, 4000, 'IDR', NULL, NULL),
(47, 3, 5, 2, '2021-05-17 03:05:27', 0, 88000, 'IDR', NULL, NULL),
(48, 3, 5, 2, '2021-05-17 03:10:44', 0, 4000, 'IDR', NULL, NULL),
(49, 3, 5, 2, '2021-05-17 03:11:07', 0, 20000, 'IDR', NULL, NULL),
(50, 3, 5, 2, '2021-05-17 22:16:12', 0, 20000, 'IDR', NULL, NULL),
(51, 3, 5, 2, '2021-05-17 22:16:37', 0, 28000, 'IDR', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_member_order_detail`
--

CREATE TABLE `group_member_order_detail` (
  `group_member_order_detail_id` bigint(20) NOT NULL,
  `group_member_order_id` bigint(20) DEFAULT NULL,
  `group_member_id` bigint(20) DEFAULT NULL,
  `member_id` bigint(20) DEFAULT NULL,
  `group_id` bigint(20) DEFAULT NULL COMMENT 'mencatat seorang member langganan apa di group tsbt',
  `group_product_id` bigint(20) DEFAULT NULL,
  `nominal` double DEFAULT NULL,
  `quantity` tinyint(4) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `progress` tinyint(4) DEFAULT NULL COMMENT 'order,on progress, ready'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_member_order_detail`
--

INSERT INTO `group_member_order_detail` (`group_member_order_detail_id`, `group_member_order_id`, `group_member_id`, `member_id`, `group_id`, `group_product_id`, `nominal`, `quantity`, `total`, `progress`) VALUES
(53, 45, 3, 5, 2, 6, 4000, 5, 20000, 1),
(56, 48, 3, 5, 2, 6, 4000, 1, 4000, 0),
(57, 49, 3, 5, 2, 6, 4000, 5, 20000, 0),
(58, 50, 3, 5, 2, 6, 4000, 5, 20000, 0),
(59, 51, 3, 5, 2, 6, 4000, 7, 28000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `group_operation_off`
--

CREATE TABLE `group_operation_off` (
  `operation_id` bigint(20) NOT NULL,
  `group_id` bigint(20) DEFAULT NULL,
  `day_off` date DEFAULT NULL,
  `desc` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_operation_off`
--

INSERT INTO `group_operation_off` (`operation_id`, `group_id`, `day_off`, `desc`) VALUES
(1, 1, '2021-03-07', 'nyepi'),
(2, 2, '2021-03-07', 'nyepi'),
(3, 3, '2021-05-12', 'Idul fitri'),
(4, 4, '2021-05-12', 'Idul fitri'),
(5, 5, '2021-02-26', 'Hari raya waisak');

-- --------------------------------------------------------

--
-- Table structure for table `group_product`
--

CREATE TABLE `group_product` (
  `group_product_id` bigint(20) NOT NULL,
  `group_id` bigint(20) DEFAULT NULL,
  `product_type` tinyint(4) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `stock_type` tinyint(4) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `order_type` tinyint(4) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `curency` char(5) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_product`
--

INSERT INTO `group_product` (`group_product_id`, `group_id`, `product_type`, `product_name`, `stock_type`, `stock`, `order_type`, `price`, `curency`, `image`) VALUES
(1, 1, 1, 'Fired Rice', 2, 12, 1, 12000, 'IDR', NULL),
(2, 5, 1, 'Salad', 2, 5, 2, 8000, 'IDR', NULL),
(3, 4, 1, 'Fried Chiken', 2, 11, 1, 15000, 'IDR', NULL),
(4, 5, 2, 'Coca Cola', 2, 20, 1, 7000, 'IDR', NULL),
(5, 5, 2, 'Sprite', 2, 22, 1, 7000, 'IDR', NULL),
(6, 2, 2, 'rere', 2, 12, 1, 4000, 'IDR', NULL),
(7, 1, 2, 'rere', 2, 12, 1, 4000, 'IDR', NULL),
(8, 2, 6, 'ini room', 2, NULL, 2, 120000, 'IDR', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_user_type`
--

CREATE TABLE `group_user_type` (
  `id_user_type` tinyint(4) NOT NULL,
  `user_type` varchar(100) DEFAULT NULL COMMENT 'admin bisa kelola group spt add member, reject, agenda'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_user_type`
--

INSERT INTO `group_user_type` (`id_user_type`, `user_type`) VALUES
(1, 'super admin/owner'),
(2, 'admin group'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `lookup_token`
--

CREATE TABLE `lookup_token` (
  `id_lookup` bigint(20) NOT NULL,
  `id_group` bigint(20) DEFAULT NULL,
  `group_identifier` varchar(32) DEFAULT NULL COMMENT 'nip',
  `token` varbinary(32) DEFAULT NULL COMMENT 'token pasangan NIP'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lookup_token`
--

INSERT INTO `lookup_token` (`id_lookup`, `id_group`, `group_identifier`, `token`) VALUES
(1, 1, 'nim', NULL),
(2, 2, 'nip/nim', NULL),
(3, 3, 'nim', 0x36313233),
(4, 4, 'nim/nip', NULL),
(5, 5, 'nip', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loop_type`
--

CREATE TABLE `loop_type` (
  `id_loop` int(11) NOT NULL,
  `loop_type` varchar(20) DEFAULT NULL,
  `desc` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loop_type`
--

INSERT INTO `loop_type` (`id_loop`, `loop_type`, `desc`) VALUES
(1, 'on date', 'dikirim sesuai tanggal  dan jam yang di set di loop value '),
(2, 'real time', 'dikirim saat disimpan, loop value gak perlu');

-- --------------------------------------------------------

--
-- Table structure for table `membership_type`
--

CREATE TABLE `membership_type` (
  `membership_id` tinyint(4) NOT NULL,
  `membership_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_type`
--

INSERT INTO `membership_type` (`membership_id`, `membership_type`) VALUES
(1, 'internal (punya No anggota spt perusahaan/kampus)'),
(2, 'eksternal (seperti simpatisan,misal calon mhs baru, calon pelanggan indomaret(internal pegawai)'),
(3, 'internal & external');

-- --------------------------------------------------------

--
-- Table structure for table `order_type`
--

CREATE TABLE `order_type` (
  `order_type_id` tinyint(4) NOT NULL,
  `order_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_type`
--

INSERT INTO `order_type` (`order_type_id`, `order_type`) VALUES
(1, 'public'),
(2, 'member'),
(3, 'member check in');

-- --------------------------------------------------------

--
-- Table structure for table `outbox_mail_aws`
--

CREATE TABLE `outbox_mail_aws` (
  `id_outbox` bigint(20) NOT NULL,
  `chat_id` varchar(100) DEFAULT NULL,
  `out_msg` text DEFAULT NULL,
  `type` enum('msg','file','loc','img') DEFAULT 'msg',
  `flag` enum('1','2') DEFAULT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outbox_mail_aws`
--

INSERT INTO `outbox_mail_aws` (`id_outbox`, `chat_id`, `out_msg`, `type`, `flag`, `tgl`) VALUES
(1, 'komang@komang.com', 'hallo komang hari ini pendaftaran terakhir', 'msg', '1', '2021-05-05 12:56:54'),
(2, 'komang@komang.com', 'Rimender. sekarang ada rapat', 'msg', '2', '2021-05-12 12:57:16'),
(3, 'komang@komang.com', 'Diskon Akan berakhir jam 12 malam besok!', 'msg', '1', '2021-05-07 12:58:14'),
(4, 'komang@komang.com', 'Rimender. sekarang ada rapat IT ESEGA', 'msg', '1', '2021-05-09 12:58:35'),
(5, 'komang@komang.com', 'Seminar Nasional, jangan kelewatan!', 'msg', '2', '2021-05-01 12:59:19'),
(6, 'tomo@tomo.com', 'xzzzz', 'msg', '1', '2021-05-19 16:00:00'),
(7, 'tomo@tomo.com', 'asdsadsa', 'msg', '1', '2021-05-19 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `outbox_telegram`
--

CREATE TABLE `outbox_telegram` (
  `id_outbox` bigint(20) NOT NULL,
  `chat_id` varchar(100) DEFAULT NULL,
  `out_msg` text DEFAULT NULL,
  `type` enum('msg','file','loc','img') DEFAULT 'msg',
  `flag` enum('1','2') DEFAULT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outbox_telegram`
--

INSERT INTO `outbox_telegram` (`id_outbox`, `chat_id`, `out_msg`, `type`, `flag`, `tgl`) VALUES
(1, '@wayan', 'Wayan, Diskon akan segera berakhir, segara berbelanja', 'msg', '1', '2021-05-01 13:02:35'),
(2, '@tomo', 'Rimender. Ada rapat ITCC hari ini', 'msg', '2', '2021-05-05 13:05:50'),
(3, '@andre', 'Rimender. Ada Rapat It ESEGA hari ini', 'msg', '2', '2021-05-05 13:05:56'),
(4, '@wayan', 'Rimender. Ada rapat ITCC hari ini', 'msg', '1', '2021-05-05 13:06:35'),
(5, '@wayan', 'Hari Ini pedaftaran terakhir, ayo daftar sejarang', 'msg', '1', '2021-05-07 13:06:33'),
(6, '@tomo', 'aaaaa', 'msg', '1', '2021-05-19 16:00:00'),
(7, '@tomo', 'ababa', 'msg', '1', '2021-05-19 16:00:00'),
(8, '@tomo', 'xzzzz', 'msg', '1', '2021-05-19 16:00:00'),
(9, '@tomo', 'asdsadsa', 'msg', '1', '2021-05-19 16:00:00'),
(10, '@tomo', 'asda', 'msg', '', '2021-05-19 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `member_id` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `mail` varchar(40) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `country_id` bigint(20) DEFAULT NULL,
  `province_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`member_id`, `name`, `mail`, `password`, `country_id`, `province_id`) VALUES
(1, 'Wayan', 'wayan@wayan.com', '123123', 1, 1),
(2, 'Andre', 'andre@andre.com', '123123', 1, 2),
(3, 'komang', 'komang@komang.com', '123123', 1, 1),
(4, 'Irmansyah', 'irmansyah@irmansyah.com', '123123', 1, 3),
(5, 'tomo', 'toomo@gmail.com', '123123', 1, 4),
(6, 'manjyo', 'manjyo@gmail.com', '123123', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_agenda`
--

CREATE TABLE `personal_agenda` (
  `member_agenda_id` bigint(20) NOT NULL,
  `member_id` bigint(20) DEFAULT NULL,
  `loop_type` int(11) DEFAULT NULL COMMENT 'real time, on date',
  `loop_value` datetime DEFAULT NULL,
  `message_content` varchar(225) DEFAULT NULL COMMENT 'pesan yang akan dikirim',
  `attachment` varchar(255) DEFAULT NULL,
  `repeat` tinyint(1) DEFAULT NULL,
  `repeat_type` enum('daily','weekly','monthly','yearly','bydate') DEFAULT NULL COMMENT 'jika bydate cek tabel personal_agenda_repeatdate'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal_agenda`
--

INSERT INTO `personal_agenda` (`member_agenda_id`, `member_id`, `loop_type`, `loop_value`, `message_content`, `attachment`, `repeat`, `repeat_type`) VALUES
(1, 1, 1, '2021-05-05 12:21:04', 'hallo, ada rapat hari ini', NULL, 1, 'weekly'),
(2, 2, 1, NULL, 'hallo, ada diskon nih hari ni jangan sampai kelewatan', NULL, 1, 'bydate'),
(3, 3, 1, NULL, 'hey komang, ada promo khusus hari ini segera daftarkan diri', NULL, 1, 'bydate'),
(4, 4, 1, '2021-05-05 12:24:21', 'hallo, ada rapat hari ini', NULL, 1, 'weekly'),
(5, 5, 1, NULL, 'hallo, ada diskon nih hari ni jangan sampai kelewatan', NULL, 1, 'bydate'),
(6, 3, 1, NULL, 'batas terakhir pendaftaran seminggu lagi, ayo segera daftaran diri anda', NULL, 1, 'bydate'),
(7, 5, 1, NULL, 'batas terakhir pendaftaran seminggu lagi, ayo segera daftaran diri anda', NULL, 1, 'bydate'),
(8, 5, 1, '2021-05-20 00:00:00', 'aaaaaaaaaaaaa', 'aa', 1, 'daily'),
(9, 5, 1, '2021-05-20 00:00:00', 'aaaaa', 'aa', 1, 'weekly'),
(10, 5, 1, '2021-05-20 00:00:00', 'aaaaa', 'a', 1, 'daily'),
(11, 5, 1, '2021-05-20 00:00:00', 'ababa', 'a', 1, 'daily'),
(12, 5, 1, '2021-05-20 00:00:00', 'xzzzz', 'a', 1, 'daily');

-- --------------------------------------------------------

--
-- Table structure for table `personal_agenda_repeat_date`
--

CREATE TABLE `personal_agenda_repeat_date` (
  `id_group_repeat` bigint(20) NOT NULL,
  `member_agenda_id` bigint(20) DEFAULT NULL,
  `dodate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal_agenda_repeat_date`
--

INSERT INTO `personal_agenda_repeat_date` (`id_group_repeat`, `member_agenda_id`, `dodate`) VALUES
(1, 2, '2021-05-07 12:27:27'),
(2, 3, '2021-05-10 12:27:56'),
(3, 5, '2021-05-13 12:28:18'),
(4, 6, '2021-05-15 12:28:28'),
(5, 7, '2021-05-15 12:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `personal_channel`
--

CREATE TABLE `personal_channel` (
  `member_ch_id` bigint(20) NOT NULL,
  `member_id` bigint(20) DEFAULT NULL,
  `channel_id` tinyint(4) DEFAULT NULL,
  `chat_id` varchar(50) DEFAULT NULL COMMENT 'username, email, idline'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal_channel`
--

INSERT INTO `personal_channel` (`member_ch_id`, `member_id`, `channel_id`, `chat_id`) VALUES
(1, 1, 1, '@wayan'),
(2, 2, 1, '@andre'),
(3, 3, 2, 'komang@komang.com'),
(4, 4, 4, 'Irmansyah12'),
(5, 5, 1, '@tomo'),
(6, 5, 2, 'tomo@tomo.com');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id_product_type` tinyint(4) NOT NULL,
  `product_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id_product_type`, `product_type`) VALUES
(1, 'food'),
(2, 'drink'),
(3, 'tailor'),
(4, 'motorcycle service'),
(5, 'car service'),
(6, 'room');

-- --------------------------------------------------------

--
-- Table structure for table `project5_uggroups`
--

CREATE TABLE `project5_uggroups` (
  `GroupID` int(11) NOT NULL,
  `Label` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project5_uggroups`
--

INSERT INTO `project5_uggroups` (`GroupID`, `Label`) VALUES
(1, 'Personal'),
(2, 'Admin Group');

-- --------------------------------------------------------

--
-- Table structure for table `project5_ugmembers`
--

CREATE TABLE `project5_ugmembers` (
  `UserName` varchar(300) NOT NULL,
  `GroupID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project5_ugmembers`
--

INSERT INTO `project5_ugmembers` (`UserName`, `GroupID`) VALUES
('a', -1),
('aa', 2),
('andre@andre.com', -1);

-- --------------------------------------------------------

--
-- Table structure for table `project5_ugrights`
--

CREATE TABLE `project5_ugrights` (
  `TableName` varchar(300) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `AccessMask` varchar(10) DEFAULT NULL,
  `Page` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project5_ugrights`
--

INSERT INTO `project5_ugrights` (`TableName`, `GroupID`, `AccessMask`, `Page`) VALUES
('Add New Order', -1, 'ADESPIM', NULL),
('Add Order Review', -1, 'ADESPIM', NULL),
('add_checkin_review', -1, 'ADESPIM', NULL),
('add_new_checkin', -1, 'ADESPIM', NULL),
('admin_members', -1, 'ADESPIM', NULL),
('admin_rights', -1, 'ADESPIM', NULL),
('admin_users', -1, 'ADESPIM', NULL),
('business_type', -1, 'ADESPIM', NULL),
('channel', -1, 'AEDSPI', ''),
('country', -1, 'ADESPIM', NULL),
('group', -3, 'S', ''),
('group', -2, 'S', ''),
('group', -1, 'AEDSPI', ''),
('group', 1, 'S', ''),
('group', 2, 'AEDSPI', ''),
('Group as AdminView', -1, 'ADESPIM', NULL),
('group_agenda', -1, 'AEDSPI', ''),
('group_agenda', 2, 'AEDSPI', ''),
('group_agenda_general_logs', -1, 'AEDSPI', ''),
('group_agenda_general_logs', 2, 'ESPI', ''),
('group_agenda_private', -1, 'AEDSPI', ''),
('group_agenda_private', 2, 'AEDSPI', ''),
('group_agenda_repeat_date', -1, 'AEDSPI', ''),
('group_agenda_repeat_date', 2, 'AEDSPI', ''),
('group_agenda_type', -1, 'AEDSPI', ''),
('group_agenda_type', 2, 'AEDSPI', ''),
('group_joined_view', -1, 'ADESPIM', NULL),
('group_member', -1, 'AEDSPI', ''),
('group_member', 2, 'AEDSPI', ''),
('group_member_agenda', -1, 'AEDSPI', ''),
('group_member_agenda', 2, 'AEDSPI', ''),
('group_member_agenda_subscriber', -1, 'AEDSPI', ''),
('group_member_agenda_subscriber', 2, 'AEDSPI', ''),
('group_member_checkin', -1, 'AEDSPI', ''),
('group_member_checkin', 2, 'AEDSPI', ''),
('group_member_order', -1, 'AEDSPI', ''),
('group_member_order', 2, 'AEDSPI', ''),
('group_member_order_detail', -1, 'AEDSPI', ''),
('group_member_order_detail', 2, 'AEDSPI', ''),
('group_operation_off', -1, 'AEDSPI', ''),
('group_operation_off', 2, 'AEDSPI', ''),
('group_product', -1, 'AEDSPI', ''),
('group_product', 2, 'AEDSPI', ''),
('group_product_view', -1, 'ADESPIM', NULL),
('group_room_view', -1, 'ADESPIM', NULL),
('group_user_type', -1, 'AEDSPI', ''),
('group_user_type', 2, 'AEDSPI', ''),
('lookup_token', -1, 'AEDSPI', ''),
('loop_type', -1, 'AEDSPI', ''),
('membership_type', -1, 'AEDSPI', ''),
('membership_type', 2, 'AEDSPI', ''),
('not_reviewed_checkin_view', -1, 'ADESPIM', NULL),
('not_reviewed_order_view', -1, 'ADESPIM', NULL),
('not_yet_valid_order', -1, 'ADESPIM', NULL),
('order_type', -1, 'AEDSPI', ''),
('outbox_mail_aws', -1, 'AEDSPI', ''),
('outbox_telegram', -1, 'AEDSPI', ''),
('personal', -2, 'E', ''),
('personal', -1, 'ADESPIM', NULL),
('personal', 1, 'ESPIM', ''),
('personal_agenda', -2, 'AEDSPI', ''),
('personal_agenda', 1, 'AEDSPIM', ''),
('personal_agenda_repeat_date', -2, 'AEDSPI', ''),
('personal_agenda_repeat_date', 1, 'S', ''),
('personal_channel', -2, 'AEDSPI', ''),
('personal_channel', -1, 'AEDSPI', ''),
('personal_channel', 1, 'AEDSPI', ''),
('product_type', -1, 'AEDSPI', ''),
('product_type', 1, 'AEDSPI', ''),
('product_type', 2, 'AEDSPI', ''),
('project5_uggroups', -1, 'AEDSPI', ''),
('project5_ugmembers', -1, 'AEDSPI', ''),
('project5_ugrights', -1, 'AEDSPI', ''),
('province', -1, 'ADESPIM', NULL),
('Room View', -1, 'ADESPIM', NULL),
('stock_type', -1, 'AEDSPI', '');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` bigint(20) NOT NULL,
  `country_id` bigint(20) DEFAULT NULL,
  `province_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `country_id`, `province_name`) VALUES
(1, 1, 'Bali'),
(2, 1, 'Jawa Tengah'),
(3, 1, 'Banten'),
(4, 1, 'Lampung'),
(5, 1, 'Aceh');

-- --------------------------------------------------------

--
-- Table structure for table `stock_type`
--

CREATE TABLE `stock_type` (
  `stock_type_id` tinyint(4) NOT NULL,
  `stock_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock_type`
--

INSERT INTO `stock_type` (`stock_type_id`, `stock_type`) VALUES
(1, 'defined'),
(2, 'always_ready'),
(3, 'API');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_type`
--
ALTER TABLE `business_type`
  ADD PRIMARY KEY (`business_type_id`);

--
-- Indexes for table `channel`
--
ALTER TABLE `channel`
  ADD PRIMARY KEY (`channel_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `business_type` (`business_type`),
  ADD KEY `membership_type` (`membership_type`);

--
-- Indexes for table `group_agenda`
--
ALTER TABLE `group_agenda`
  ADD PRIMARY KEY (`group_agenda_id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `agenda_type_id` (`agenda_type_id`),
  ADD KEY `loop_id` (`loop_id`);

--
-- Indexes for table `group_agenda_general_logs`
--
ALTER TABLE `group_agenda_general_logs`
  ADD PRIMARY KEY (`id_logs`),
  ADD KEY `FK_logs_personal` (`member_id`),
  ADD KEY `FK_logs_group_agenda` (`id_group_agenda`);

--
-- Indexes for table `group_agenda_private`
--
ALTER TABLE `group_agenda_private`
  ADD PRIMARY KEY (`group_agenda_private_id`),
  ADD KEY `FK_group_agenda_private_group_agenda` (`id_group_agenda`),
  ADD KEY `FK_group_agenda_private_personal` (`id_member`);

--
-- Indexes for table `group_agenda_repeat_date`
--
ALTER TABLE `group_agenda_repeat_date`
  ADD PRIMARY KEY (`id_group_repeat`),
  ADD KEY `FK_group_agenda_repeat_date_group_agenda` (`group_agenda_id`);

--
-- Indexes for table `group_agenda_type`
--
ALTER TABLE `group_agenda_type`
  ADD PRIMARY KEY (`agenda_type_id`),
  ADD KEY `FK_group_agenda_type_group` (`group_id`);

--
-- Indexes for table `group_member`
--
ALTER TABLE `group_member`
  ADD PRIMARY KEY (`group_member_id`),
  ADD KEY `FK_group_member_personal` (`member_id`),
  ADD KEY `FK_group_member_membership_type` (`membership_type`),
  ADD KEY `FK_group_member_group_user_type` (`user_type`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `group_member_agenda`
--
ALTER TABLE `group_member_agenda`
  ADD PRIMARY KEY (`group_member_agenda_id`),
  ADD KEY `FK_group_member_agenda_group_member` (`group_member_id`),
  ADD KEY `FK_group_member_agenda_personal` (`member_id`),
  ADD KEY `FK_group_member_agenda_group_agenda` (`group_agenda_id`);

--
-- Indexes for table `group_member_agenda_subscriber`
--
ALTER TABLE `group_member_agenda_subscriber`
  ADD PRIMARY KEY (`group_member_id`),
  ADD KEY `FK_group_member_agenda_subscriber_personal` (`member_id`),
  ADD KEY `FK_group_member_agenda_subscriber_group_agenda` (`agenda_type_id`);

--
-- Indexes for table `group_member_checkin`
--
ALTER TABLE `group_member_checkin`
  ADD PRIMARY KEY (`group_member_checkin_id`),
  ADD KEY `FK_group_member_checkin_personal` (`member_id`),
  ADD KEY `FK_group_member_checkin_group_member` (`group_member_id`),
  ADD KEY `FK_group_member_checkin_group` (`group_id`);

--
-- Indexes for table `group_member_order`
--
ALTER TABLE `group_member_order`
  ADD PRIMARY KEY (`group_member_order`),
  ADD KEY `FK_group_member_order_group_member` (`group_member_id`),
  ADD KEY `FK_group_member_order_personal` (`member_id`),
  ADD KEY `FK_group_member_order_group` (`group_id`);

--
-- Indexes for table `group_member_order_detail`
--
ALTER TABLE `group_member_order_detail`
  ADD PRIMARY KEY (`group_member_order_detail_id`),
  ADD KEY `FK_group_member_order_detail_group_member_order` (`group_member_order_id`),
  ADD KEY `FK_group_member_order_detail_personal` (`member_id`),
  ADD KEY `FK_group_member_order_detail_group_member` (`group_member_id`),
  ADD KEY `FK_group_member_order_detail_group` (`group_id`),
  ADD KEY `FK_group_member_order_detail_group_product` (`group_product_id`);

--
-- Indexes for table `group_operation_off`
--
ALTER TABLE `group_operation_off`
  ADD PRIMARY KEY (`operation_id`),
  ADD KEY `FK_group_operation_off_group` (`group_id`);

--
-- Indexes for table `group_product`
--
ALTER TABLE `group_product`
  ADD PRIMARY KEY (`group_product_id`),
  ADD KEY `FK_group_product_group` (`group_id`),
  ADD KEY `FK_group_product_product_type` (`product_type`),
  ADD KEY `FK_group_product_stock_type` (`stock_type`),
  ADD KEY `FK_group_product_order_type` (`order_type`);

--
-- Indexes for table `group_user_type`
--
ALTER TABLE `group_user_type`
  ADD PRIMARY KEY (`id_user_type`);

--
-- Indexes for table `lookup_token`
--
ALTER TABLE `lookup_token`
  ADD PRIMARY KEY (`id_lookup`),
  ADD KEY `FK_lookup_token_group` (`id_group`);

--
-- Indexes for table `loop_type`
--
ALTER TABLE `loop_type`
  ADD PRIMARY KEY (`id_loop`);

--
-- Indexes for table `membership_type`
--
ALTER TABLE `membership_type`
  ADD PRIMARY KEY (`membership_id`);

--
-- Indexes for table `order_type`
--
ALTER TABLE `order_type`
  ADD PRIMARY KEY (`order_type_id`);

--
-- Indexes for table `outbox_mail_aws`
--
ALTER TABLE `outbox_mail_aws`
  ADD PRIMARY KEY (`id_outbox`);

--
-- Indexes for table `outbox_telegram`
--
ALTER TABLE `outbox_telegram`
  ADD PRIMARY KEY (`id_outbox`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `FK_personal_country` (`country_id`),
  ADD KEY `FK_personal_province` (`province_id`);

--
-- Indexes for table `personal_agenda`
--
ALTER TABLE `personal_agenda`
  ADD PRIMARY KEY (`member_agenda_id`),
  ADD KEY `FK_personal_agenda_personal` (`member_id`),
  ADD KEY `FK_personal_agenda_loop_type` (`loop_type`);

--
-- Indexes for table `personal_agenda_repeat_date`
--
ALTER TABLE `personal_agenda_repeat_date`
  ADD PRIMARY KEY (`id_group_repeat`),
  ADD KEY `FK_personal_agenda_repeat_date_personal_agenda` (`member_agenda_id`);

--
-- Indexes for table `personal_channel`
--
ALTER TABLE `personal_channel`
  ADD PRIMARY KEY (`member_ch_id`),
  ADD KEY `FK_personal_channel_personal` (`member_id`),
  ADD KEY `FK_personal_channel_channel` (`channel_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id_product_type`);

--
-- Indexes for table `project5_uggroups`
--
ALTER TABLE `project5_uggroups`
  ADD PRIMARY KEY (`GroupID`);

--
-- Indexes for table `project5_ugmembers`
--
ALTER TABLE `project5_ugmembers`
  ADD PRIMARY KEY (`UserName`(50),`GroupID`);

--
-- Indexes for table `project5_ugrights`
--
ALTER TABLE `project5_ugrights`
  ADD PRIMARY KEY (`TableName`(50),`GroupID`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_id`),
  ADD KEY `FK_province_province` (`country_id`);

--
-- Indexes for table `stock_type`
--
ALTER TABLE `stock_type`
  ADD PRIMARY KEY (`stock_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_type`
--
ALTER TABLE `business_type`
  MODIFY `business_type_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `channel`
--
ALTER TABLE `channel`
  MODIFY `channel_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `group_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `group_agenda`
--
ALTER TABLE `group_agenda`
  MODIFY `group_agenda_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `group_agenda_general_logs`
--
ALTER TABLE `group_agenda_general_logs`
  MODIFY `id_logs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `group_agenda_private`
--
ALTER TABLE `group_agenda_private`
  MODIFY `group_agenda_private_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `group_agenda_repeat_date`
--
ALTER TABLE `group_agenda_repeat_date`
  MODIFY `id_group_repeat` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `group_agenda_type`
--
ALTER TABLE `group_agenda_type`
  MODIFY `agenda_type_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `group_member`
--
ALTER TABLE `group_member`
  MODIFY `group_member_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `group_member_agenda`
--
ALTER TABLE `group_member_agenda`
  MODIFY `group_member_agenda_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `group_member_agenda_subscriber`
--
ALTER TABLE `group_member_agenda_subscriber`
  MODIFY `group_member_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `group_member_checkin`
--
ALTER TABLE `group_member_checkin`
  MODIFY `group_member_checkin_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `group_member_order`
--
ALTER TABLE `group_member_order`
  MODIFY `group_member_order` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `group_member_order_detail`
--
ALTER TABLE `group_member_order_detail`
  MODIFY `group_member_order_detail_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `group_operation_off`
--
ALTER TABLE `group_operation_off`
  MODIFY `operation_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `group_product`
--
ALTER TABLE `group_product`
  MODIFY `group_product_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `group_user_type`
--
ALTER TABLE `group_user_type`
  MODIFY `id_user_type` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lookup_token`
--
ALTER TABLE `lookup_token`
  MODIFY `id_lookup` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loop_type`
--
ALTER TABLE `loop_type`
  MODIFY `id_loop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `membership_type`
--
ALTER TABLE `membership_type`
  MODIFY `membership_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_type`
--
ALTER TABLE `order_type`
  MODIFY `order_type_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `outbox_mail_aws`
--
ALTER TABLE `outbox_mail_aws`
  MODIFY `id_outbox` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `outbox_telegram`
--
ALTER TABLE `outbox_telegram`
  MODIFY `id_outbox` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `member_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_agenda`
--
ALTER TABLE `personal_agenda`
  MODIFY `member_agenda_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_agenda_repeat_date`
--
ALTER TABLE `personal_agenda_repeat_date`
  MODIFY `id_group_repeat` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_channel`
--
ALTER TABLE `personal_channel`
  MODIFY `member_ch_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id_product_type` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project5_uggroups`
--
ALTER TABLE `project5_uggroups`
  MODIFY `GroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stock_type`
--
ALTER TABLE `stock_type`
  MODIFY `stock_type_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `group`
--
ALTER TABLE `group`
  ADD CONSTRAINT `bussines_type` FOREIGN KEY (`business_type`) REFERENCES `business_type` (`business_type_id`),
  ADD CONSTRAINT `membership_type` FOREIGN KEY (`membership_type`) REFERENCES `membership_type` (`membership_id`);

--
-- Constraints for table `group_agenda`
--
ALTER TABLE `group_agenda`
  ADD CONSTRAINT `agenda_type_id` FOREIGN KEY (`agenda_type_id`) REFERENCES `group_agenda_type` (`agenda_type_id`),
  ADD CONSTRAINT `group_id` FOREIGN KEY (`group_id`) REFERENCES `group` (`group_id`),
  ADD CONSTRAINT `loop_id` FOREIGN KEY (`loop_id`) REFERENCES `loop_type` (`id_loop`);

--
-- Constraints for table `group_agenda_general_logs`
--
ALTER TABLE `group_agenda_general_logs`
  ADD CONSTRAINT `FK_logs_group_agenda` FOREIGN KEY (`id_group_agenda`) REFERENCES `group_agenda` (`group_agenda_id`),
  ADD CONSTRAINT `FK_logs_personal` FOREIGN KEY (`member_id`) REFERENCES `personal` (`member_id`);

--
-- Constraints for table `group_agenda_private`
--
ALTER TABLE `group_agenda_private`
  ADD CONSTRAINT `FK_group_agenda_private_group_agenda` FOREIGN KEY (`id_group_agenda`) REFERENCES `group_agenda` (`group_agenda_id`),
  ADD CONSTRAINT `FK_group_agenda_private_personal` FOREIGN KEY (`id_member`) REFERENCES `personal` (`member_id`);

--
-- Constraints for table `group_agenda_repeat_date`
--
ALTER TABLE `group_agenda_repeat_date`
  ADD CONSTRAINT `FK_group_agenda_repeat_date_group_agenda` FOREIGN KEY (`group_agenda_id`) REFERENCES `group_agenda` (`group_agenda_id`);

--
-- Constraints for table `group_agenda_type`
--
ALTER TABLE `group_agenda_type`
  ADD CONSTRAINT `FK_group_agenda_type_group` FOREIGN KEY (`group_id`) REFERENCES `group` (`group_id`);

--
-- Constraints for table `group_member`
--
ALTER TABLE `group_member`
  ADD CONSTRAINT `FK_group_member_group_user_type` FOREIGN KEY (`user_type`) REFERENCES `group_user_type` (`id_user_type`),
  ADD CONSTRAINT `FK_group_member_membership_type` FOREIGN KEY (`membership_type`) REFERENCES `membership_type` (`membership_id`),
  ADD CONSTRAINT `FK_group_member_personal` FOREIGN KEY (`member_id`) REFERENCES `personal` (`member_id`),
  ADD CONSTRAINT `group_member_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group` (`group_id`);

--
-- Constraints for table `group_member_agenda`
--
ALTER TABLE `group_member_agenda`
  ADD CONSTRAINT `FK_group_member_agenda_group_agenda` FOREIGN KEY (`group_agenda_id`) REFERENCES `group_agenda` (`group_agenda_id`),
  ADD CONSTRAINT `FK_group_member_agenda_group_member` FOREIGN KEY (`group_member_id`) REFERENCES `group_member` (`group_member_id`),
  ADD CONSTRAINT `FK_group_member_agenda_personal` FOREIGN KEY (`member_id`) REFERENCES `personal` (`member_id`);

--
-- Constraints for table `group_member_agenda_subscriber`
--
ALTER TABLE `group_member_agenda_subscriber`
  ADD CONSTRAINT `FK_group_member_agenda_subscriber_group_agenda` FOREIGN KEY (`agenda_type_id`) REFERENCES `group_agenda` (`group_agenda_id`),
  ADD CONSTRAINT `FK_group_member_agenda_subscriber_personal` FOREIGN KEY (`member_id`) REFERENCES `personal` (`member_id`);

--
-- Constraints for table `group_member_checkin`
--
ALTER TABLE `group_member_checkin`
  ADD CONSTRAINT `FK_group_member_checkin_group` FOREIGN KEY (`group_id`) REFERENCES `group` (`group_id`),
  ADD CONSTRAINT `FK_group_member_checkin_group_member` FOREIGN KEY (`group_member_id`) REFERENCES `group_member` (`group_member_id`),
  ADD CONSTRAINT `FK_group_member_checkin_personal` FOREIGN KEY (`member_id`) REFERENCES `personal` (`member_id`);

--
-- Constraints for table `group_member_order`
--
ALTER TABLE `group_member_order`
  ADD CONSTRAINT `FK_group_member_order_group` FOREIGN KEY (`group_id`) REFERENCES `group` (`group_id`),
  ADD CONSTRAINT `FK_group_member_order_group_member` FOREIGN KEY (`group_member_id`) REFERENCES `group_member` (`group_member_id`),
  ADD CONSTRAINT `FK_group_member_order_personal` FOREIGN KEY (`member_id`) REFERENCES `personal` (`member_id`);

--
-- Constraints for table `group_member_order_detail`
--
ALTER TABLE `group_member_order_detail`
  ADD CONSTRAINT `FK_group_member_order_detail_group` FOREIGN KEY (`group_id`) REFERENCES `group` (`group_id`),
  ADD CONSTRAINT `FK_group_member_order_detail_group_member` FOREIGN KEY (`group_member_id`) REFERENCES `group_member` (`group_member_id`),
  ADD CONSTRAINT `FK_group_member_order_detail_group_member_order` FOREIGN KEY (`group_member_order_id`) REFERENCES `group_member_order` (`group_member_order`),
  ADD CONSTRAINT `FK_group_member_order_detail_group_product` FOREIGN KEY (`group_product_id`) REFERENCES `group_product` (`group_product_id`),
  ADD CONSTRAINT `FK_group_member_order_detail_personal` FOREIGN KEY (`member_id`) REFERENCES `personal` (`member_id`);

--
-- Constraints for table `group_operation_off`
--
ALTER TABLE `group_operation_off`
  ADD CONSTRAINT `FK_group_operation_off_group` FOREIGN KEY (`group_id`) REFERENCES `group` (`group_id`);

--
-- Constraints for table `group_product`
--
ALTER TABLE `group_product`
  ADD CONSTRAINT `FK_group_product_group` FOREIGN KEY (`group_id`) REFERENCES `group` (`group_id`),
  ADD CONSTRAINT `FK_group_product_order_type` FOREIGN KEY (`order_type`) REFERENCES `order_type` (`order_type_id`),
  ADD CONSTRAINT `FK_group_product_product_type` FOREIGN KEY (`product_type`) REFERENCES `product_type` (`id_product_type`),
  ADD CONSTRAINT `FK_group_product_stock_type` FOREIGN KEY (`stock_type`) REFERENCES `stock_type` (`stock_type_id`);

--
-- Constraints for table `lookup_token`
--
ALTER TABLE `lookup_token`
  ADD CONSTRAINT `FK_lookup_token_group` FOREIGN KEY (`id_group`) REFERENCES `group` (`group_id`);

--
-- Constraints for table `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `FK_personal_country` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`),
  ADD CONSTRAINT `FK_personal_province` FOREIGN KEY (`province_id`) REFERENCES `province` (`province_id`);

--
-- Constraints for table `personal_agenda`
--
ALTER TABLE `personal_agenda`
  ADD CONSTRAINT `FK_personal_agenda_loop_type` FOREIGN KEY (`loop_type`) REFERENCES `loop_type` (`id_loop`),
  ADD CONSTRAINT `FK_personal_agenda_personal` FOREIGN KEY (`member_id`) REFERENCES `personal` (`member_id`);

--
-- Constraints for table `personal_agenda_repeat_date`
--
ALTER TABLE `personal_agenda_repeat_date`
  ADD CONSTRAINT `FK_personal_agenda_repeat_date_personal_agenda` FOREIGN KEY (`member_agenda_id`) REFERENCES `personal_agenda` (`member_agenda_id`);

--
-- Constraints for table `personal_channel`
--
ALTER TABLE `personal_channel`
  ADD CONSTRAINT `FK_personal_channel_channel` FOREIGN KEY (`channel_id`) REFERENCES `channel` (`channel_id`),
  ADD CONSTRAINT `FK_personal_channel_personal` FOREIGN KEY (`member_id`) REFERENCES `personal` (`member_id`);

--
-- Constraints for table `province`
--
ALTER TABLE `province`
  ADD CONSTRAINT `FK_province_province` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
