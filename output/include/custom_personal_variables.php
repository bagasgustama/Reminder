<?php
$strTableName="custom_personal";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="custom_personal";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("custom_personal");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["custom_personal"];

$reportCaseSensitiveGroupFields = false;

?>