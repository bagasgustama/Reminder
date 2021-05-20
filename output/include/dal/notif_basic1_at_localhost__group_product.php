<?php
$dalTablegroup_product = array();
$dalTablegroup_product["group_product_id"] = array("type"=>20,"varname"=>"group_product_id", "name" => "group_product_id");
$dalTablegroup_product["group_id"] = array("type"=>20,"varname"=>"group_id", "name" => "group_id");
$dalTablegroup_product["product_type"] = array("type"=>16,"varname"=>"product_type", "name" => "product_type");
$dalTablegroup_product["product_name"] = array("type"=>200,"varname"=>"product_name", "name" => "product_name");
$dalTablegroup_product["stock_type"] = array("type"=>16,"varname"=>"stock_type", "name" => "stock_type");
$dalTablegroup_product["stock"] = array("type"=>3,"varname"=>"stock", "name" => "stock");
$dalTablegroup_product["order_type"] = array("type"=>16,"varname"=>"order_type", "name" => "order_type");
$dalTablegroup_product["price"] = array("type"=>5,"varname"=>"price", "name" => "price");
$dalTablegroup_product["curency"] = array("type"=>200,"varname"=>"curency", "name" => "curency");
$dalTablegroup_product["image"] = array("type"=>200,"varname"=>"image", "name" => "image");
	$dalTablegroup_product["group_product_id"]["key"]=true;

$dal_info["notif_basic1_at_localhost__group_product"] = &$dalTablegroup_product;
?>