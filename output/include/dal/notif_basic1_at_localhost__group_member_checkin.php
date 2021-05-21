<?php
$dalTablegroup_member_checkin = array();
$dalTablegroup_member_checkin["group_member_checkin_id"] = array("type"=>20,"varname"=>"group_member_checkin_id", "name" => "group_member_checkin_id");
$dalTablegroup_member_checkin["group_member_id"] = array("type"=>20,"varname"=>"group_member_id", "name" => "group_member_id");
$dalTablegroup_member_checkin["member_id"] = array("type"=>3,"varname"=>"member_id", "name" => "member_id");
$dalTablegroup_member_checkin["group_id"] = array("type"=>20,"varname"=>"group_id", "name" => "group_id");
$dalTablegroup_member_checkin["checkin_date"] = array("type"=>135,"varname"=>"checkin_date", "name" => "checkin_date");
$dalTablegroup_member_checkin["checkout_date"] = array("type"=>135,"varname"=>"checkout_date", "name" => "checkout_date");
$dalTablegroup_member_checkin["id_room"] = array("type"=>200,"varname"=>"id_room", "name" => "id_room");
$dalTablegroup_member_checkin["valid"] = array("type"=>16,"varname"=>"valid", "name" => "valid");
$dalTablegroup_member_checkin["review_member"] = array("type"=>201,"varname"=>"review_member", "name" => "review_member");
$dalTablegroup_member_checkin["rating_member"] = array("type"=>16,"varname"=>"rating_member", "name" => "rating_member");
	$dalTablegroup_member_checkin["group_member_checkin_id"]["key"]=true;

$dal_info["notif_basic1_at_localhost__group_member_checkin"] = &$dalTablegroup_member_checkin;
?>