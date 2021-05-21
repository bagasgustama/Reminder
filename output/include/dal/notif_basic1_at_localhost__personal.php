<?php
$dalTablepersonal = array();
$dalTablepersonal["member_id"] = array("type"=>3,"varname"=>"member_id", "name" => "member_id");
$dalTablepersonal["name"] = array("type"=>200,"varname"=>"name", "name" => "name");
$dalTablepersonal["mail"] = array("type"=>200,"varname"=>"mail", "name" => "mail");
$dalTablepersonal["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTablepersonal["country_id"] = array("type"=>20,"varname"=>"country_id", "name" => "country_id");
$dalTablepersonal["province_id"] = array("type"=>20,"varname"=>"province_id", "name" => "province_id");
	$dalTablepersonal["member_id"]["key"]=true;

$dal_info["notif_basic1_at_localhost__personal"] = &$dalTablepersonal;
?>