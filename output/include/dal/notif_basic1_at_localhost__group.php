<?php
$dalTablegroup = array();
$dalTablegroup["group_id"] = array("type"=>20,"varname"=>"group_id", "name" => "group_id");
$dalTablegroup["group_name"] = array("type"=>200,"varname"=>"group_name", "name" => "group_name");
$dalTablegroup["description"] = array("type"=>201,"varname"=>"description", "name" => "description");
$dalTablegroup["logo"] = array("type"=>200,"varname"=>"logo", "name" => "logo");
$dalTablegroup["token_type"] = array("type"=>129,"varname"=>"token_type", "name" => "token_type");
$dalTablegroup["token_group"] = array("type"=>200,"varname"=>"token_group", "name" => "token_group");
$dalTablegroup["membership_type"] = array("type"=>16,"varname"=>"membership_type", "name" => "membership_type");
$dalTablegroup["business_type"] = array("type"=>16,"varname"=>"business_type", "name" => "business_type");
$dalTablegroup["open_time"] = array("type"=>134,"varname"=>"open_time", "name" => "open_time");
$dalTablegroup["close_time"] = array("type"=>134,"varname"=>"close_time", "name" => "close_time");
$dalTablegroup["off_day"] = array("type"=>200,"varname"=>"off_day", "name" => "off_day");
	$dalTablegroup["group_id"]["key"]=true;

$dal_info["notif_basic1_at_localhost__group"] = &$dalTablegroup;
?>