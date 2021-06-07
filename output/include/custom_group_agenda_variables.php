<?php
$strTableName="custom_group_agenda";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="custom_group_agenda";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("custom_group_agenda");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["custom_group_agenda"];

$reportCaseSensitiveGroupFields = false;

?>