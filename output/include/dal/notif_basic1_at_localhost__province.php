<?php
$dalTableprovince = array();
$dalTableprovince["province_id"] = array("type"=>20,"varname"=>"province_id", "name" => "province_id");
$dalTableprovince["country_id"] = array("type"=>20,"varname"=>"country_id", "name" => "country_id");
$dalTableprovince["province_name"] = array("type"=>200,"varname"=>"province_name", "name" => "province_name");
	$dalTableprovince["province_id"]["key"]=true;

$dal_info["notif_basic1_at_localhost__province"] = &$dalTableprovince;
?>