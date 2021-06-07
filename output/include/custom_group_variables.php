<?php
$strTableName="custom_group";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="custom_group";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("custom_group");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["custom_group"];

$reportCaseSensitiveGroupFields = false;

?>