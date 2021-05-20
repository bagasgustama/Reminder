<?php
$dalTablegroup_agenda = array();
$dalTablegroup_agenda["group_agenda_id"] = array("type"=>20,"varname"=>"group_agenda_id", "name" => "group_agenda_id");
$dalTablegroup_agenda["group_id"] = array("type"=>20,"varname"=>"group_id", "name" => "group_id");
$dalTablegroup_agenda["agenda_type_id"] = array("type"=>20,"varname"=>"agenda_type_id", "name" => "agenda_type_id");
$dalTablegroup_agenda["loop_id"] = array("type"=>3,"varname"=>"loop_id", "name" => "loop_id");
$dalTablegroup_agenda["loop_value"] = array("type"=>135,"varname"=>"loop_value", "name" => "loop_value");
$dalTablegroup_agenda["agenda_name"] = array("type"=>200,"varname"=>"agenda_name", "name" => "agenda_name");
$dalTablegroup_agenda["message_general"] = array("type"=>16,"varname"=>"message_general", "name" => "message_general");
$dalTablegroup_agenda["message_content"] = array("type"=>201,"varname"=>"message_content", "name" => "message_content");
$dalTablegroup_agenda["send_date"] = array("type"=>135,"varname"=>"send_date", "name" => "send_date");
$dalTablegroup_agenda["attachment"] = array("type"=>200,"varname"=>"attachment", "name" => "attachment");
$dalTablegroup_agenda["repeat"] = array("type"=>16,"varname"=>"repeat", "name" => "repeat");
$dalTablegroup_agenda["repeat_type"] = array("type"=>129,"varname"=>"repeat_type", "name" => "repeat_type");
	$dalTablegroup_agenda["group_agenda_id"]["key"]=true;

$dal_info["notif_basic1_at_localhost__group_agenda"] = &$dalTablegroup_agenda;
?>