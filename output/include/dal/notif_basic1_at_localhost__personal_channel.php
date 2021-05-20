<?php
$dalTablepersonal_channel = array();
$dalTablepersonal_channel["member_ch_id"] = array("type"=>20,"varname"=>"member_ch_id", "name" => "member_ch_id");
$dalTablepersonal_channel["member_id"] = array("type"=>20,"varname"=>"member_id", "name" => "member_id");
$dalTablepersonal_channel["channel_id"] = array("type"=>16,"varname"=>"channel_id", "name" => "channel_id");
$dalTablepersonal_channel["chat_id"] = array("type"=>200,"varname"=>"chat_id", "name" => "chat_id");
	$dalTablepersonal_channel["member_ch_id"]["key"]=true;

$dal_info["notif_basic1_at_localhost__personal_channel"] = &$dalTablepersonal_channel;
?>