<?php
$dalTablegroup_member = array();
$dalTablegroup_member["group_member_id"] = array("type"=>20,"varname"=>"group_member_id", "name" => "group_member_id");
$dalTablegroup_member["member_id"] = array("type"=>20,"varname"=>"member_id", "name" => "member_id");
$dalTablegroup_member["group_id"] = array("type"=>20,"varname"=>"group_id", "name" => "group_id");
$dalTablegroup_member["user_type"] = array("type"=>16,"varname"=>"user_type", "name" => "user_type");
$dalTablegroup_member["token_group"] = array("type"=>200,"varname"=>"token_group", "name" => "token_group");
$dalTablegroup_member["identifier_group"] = array("type"=>200,"varname"=>"identifier_group", "name" => "identifier_group");
$dalTablegroup_member["token_personal"] = array("type"=>200,"varname"=>"token_personal", "name" => "token_personal");
$dalTablegroup_member["membership_type"] = array("type"=>16,"varname"=>"membership_type", "name" => "membership_type");
$dalTablegroup_member["valid"] = array("type"=>16,"varname"=>"valid", "name" => "valid");
	$dalTablegroup_member["group_member_id"]["key"]=true;

$dal_info["notif_basic1_at_localhost__group_member"] = &$dalTablegroup_member;
?>