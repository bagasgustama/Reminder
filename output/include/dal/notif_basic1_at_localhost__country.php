<?php
$dalTablecountry = array();
$dalTablecountry["country_id"] = array("type"=>20,"varname"=>"country_id", "name" => "country_id");
$dalTablecountry["country_name"] = array("type"=>200,"varname"=>"country_name", "name" => "country_name");
$dalTablecountry["sortname"] = array("type"=>200,"varname"=>"sortname", "name" => "sortname");
$dalTablecountry["phonecode"] = array("type"=>3,"varname"=>"phonecode", "name" => "phonecode");
	$dalTablecountry["country_id"]["key"]=true;

$dal_info["notif_basic1_at_localhost__country"] = &$dalTablecountry;
?>