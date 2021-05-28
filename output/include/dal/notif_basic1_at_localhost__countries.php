<?php
$dalTablecountries = array();
$dalTablecountries["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecountries["sortname"] = array("type"=>200,"varname"=>"sortname", "name" => "sortname");
$dalTablecountries["name"] = array("type"=>200,"varname"=>"name", "name" => "name");
$dalTablecountries["phonecode"] = array("type"=>3,"varname"=>"phonecode", "name" => "phonecode");
	$dalTablecountries["id"]["key"]=true;

$dal_info["notif_basic1_at_localhost__countries"] = &$dalTablecountries;
?>