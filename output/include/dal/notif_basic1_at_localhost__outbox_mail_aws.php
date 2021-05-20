<?php
$dalTableoutbox_mail_aws = array();
$dalTableoutbox_mail_aws["id_outbox"] = array("type"=>20,"varname"=>"id_outbox", "name" => "id_outbox");
$dalTableoutbox_mail_aws["chat_id"] = array("type"=>200,"varname"=>"chat_id", "name" => "chat_id");
$dalTableoutbox_mail_aws["out_msg"] = array("type"=>201,"varname"=>"out_msg", "name" => "out_msg");
$dalTableoutbox_mail_aws["type"] = array("type"=>129,"varname"=>"type", "name" => "type");
$dalTableoutbox_mail_aws["flag"] = array("type"=>129,"varname"=>"flag", "name" => "flag");
$dalTableoutbox_mail_aws["tgl"] = array("type"=>135,"varname"=>"tgl", "name" => "tgl");
	$dalTableoutbox_mail_aws["id_outbox"]["key"]=true;

$dal_info["notif_basic1_at_localhost__outbox_mail_aws"] = &$dalTableoutbox_mail_aws;
?>