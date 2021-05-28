<?php
$tdatachannel = array();
$tdatachannel[".searchableFields"] = array();
$tdatachannel[".ShortName"] = "channel";
$tdatachannel[".OwnerID"] = "";
$tdatachannel[".OriginalTable"] = "channel";


$tdatachannel[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatachannel[".originalPagesByType"] = $tdatachannel[".pagesByType"];
$tdatachannel[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatachannel[".originalPages"] = $tdatachannel[".pages"];
$tdatachannel[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatachannel[".originalDefaultPages"] = $tdatachannel[".defaultPages"];

//	field labels
$fieldLabelschannel = array();
$fieldToolTipschannel = array();
$pageTitleschannel = array();
$placeHolderschannel = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelschannel["English"] = array();
	$fieldToolTipschannel["English"] = array();
	$placeHolderschannel["English"] = array();
	$pageTitleschannel["English"] = array();
	$fieldLabelschannel["English"]["channel_id"] = "Channel Id";
	$fieldToolTipschannel["English"]["channel_id"] = "";
	$placeHolderschannel["English"]["channel_id"] = "";
	$fieldLabelschannel["English"]["channel_name"] = "Channel Name";
	$fieldToolTipschannel["English"]["channel_name"] = "";
	$placeHolderschannel["English"]["channel_name"] = "";
	if (count($fieldToolTipschannel["English"]))
		$tdatachannel[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelschannel["Indonesian"] = array();
	$fieldToolTipschannel["Indonesian"] = array();
	$placeHolderschannel["Indonesian"] = array();
	$pageTitleschannel["Indonesian"] = array();
	$fieldLabelschannel["Indonesian"]["channel_id"] = "Channel Id";
	$fieldToolTipschannel["Indonesian"]["channel_id"] = "";
	$placeHolderschannel["Indonesian"]["channel_id"] = "";
	$fieldLabelschannel["Indonesian"]["channel_name"] = "Channel Name";
	$fieldToolTipschannel["Indonesian"]["channel_name"] = "";
	$placeHolderschannel["Indonesian"]["channel_name"] = "";
	if (count($fieldToolTipschannel["Indonesian"]))
		$tdatachannel[".isUseToolTips"] = true;
}


	$tdatachannel[".NCSearch"] = true;



$tdatachannel[".shortTableName"] = "channel";
$tdatachannel[".nSecOptions"] = 0;

$tdatachannel[".mainTableOwnerID"] = "";
$tdatachannel[".entityType"] = 0;
$tdatachannel[".connId"] = "notif_basic1_at_localhost";


$tdatachannel[".strOriginalTableName"] = "channel";

	



$tdatachannel[".showAddInPopup"] = false;

$tdatachannel[".showEditInPopup"] = false;

$tdatachannel[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatachannel[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatachannel[".listAjax"] = false;
//	temporary
$tdatachannel[".listAjax"] = false;

	$tdatachannel[".audit"] = false;

	$tdatachannel[".locking"] = false;


$pages = $tdatachannel[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatachannel[".edit"] = true;
	$tdatachannel[".afterEditAction"] = 1;
	$tdatachannel[".closePopupAfterEdit"] = 1;
	$tdatachannel[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatachannel[".add"] = true;
$tdatachannel[".afterAddAction"] = 1;
$tdatachannel[".closePopupAfterAdd"] = 1;
$tdatachannel[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatachannel[".list"] = true;
}



$tdatachannel[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatachannel[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatachannel[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatachannel[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatachannel[".printFriendly"] = true;
}



$tdatachannel[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatachannel[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatachannel[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatachannel[".isUseAjaxSuggest"] = true;

$tdatachannel[".rowHighlite"] = true;





$tdatachannel[".ajaxCodeSnippetAdded"] = false;

$tdatachannel[".buttonsAdded"] = false;

$tdatachannel[".addPageEvents"] = false;

// use timepicker for search panel
$tdatachannel[".isUseTimeForSearch"] = false;


$tdatachannel[".badgeColor"] = "4682B4";


$tdatachannel[".allSearchFields"] = array();
$tdatachannel[".filterFields"] = array();
$tdatachannel[".requiredSearchFields"] = array();

$tdatachannel[".googleLikeFields"] = array();
$tdatachannel[".googleLikeFields"][] = "channel_id";
$tdatachannel[".googleLikeFields"][] = "channel_name";



$tdatachannel[".tableType"] = "list";

$tdatachannel[".printerPageOrientation"] = 0;
$tdatachannel[".nPrinterPageScale"] = 100;

$tdatachannel[".nPrinterSplitRecords"] = 40;

$tdatachannel[".geocodingEnabled"] = false;










$tdatachannel[".pageSize"] = 20;

$tdatachannel[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatachannel[".strOrderBy"] = $tstrOrderBy;

$tdatachannel[".orderindexes"] = array();


$tdatachannel[".sqlHead"] = "SELECT channel_id,  	channel_name";
$tdatachannel[".sqlFrom"] = "FROM channel";
$tdatachannel[".sqlWhereExpr"] = "";
$tdatachannel[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachannel[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachannel[".arrGroupsPerPage"] = $arrGPP;

$tdatachannel[".highlightSearchResults"] = true;

$tableKeyschannel = array();
$tableKeyschannel[] = "channel_id";
$tdatachannel[".Keys"] = $tableKeyschannel;


$tdatachannel[".hideMobileList"] = array();




//	channel_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "channel_id";
	$fdata["GoodName"] = "channel_id";
	$fdata["ownerTable"] = "channel";
	$fdata["Label"] = GetFieldLabel("channel","channel_id");
	$fdata["FieldType"] = 16;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "channel_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "channel_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatachannel["channel_id"] = $fdata;
		$tdatachannel[".searchableFields"][] = "channel_id";
//	channel_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "channel_name";
	$fdata["GoodName"] = "channel_name";
	$fdata["ownerTable"] = "channel";
	$fdata["Label"] = GetFieldLabel("channel","channel_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "channel_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "channel_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatachannel["channel_name"] = $fdata;
		$tdatachannel[".searchableFields"][] = "channel_name";


$tables_data["channel"]=&$tdatachannel;
$field_labels["channel"] = &$fieldLabelschannel;
$fieldToolTips["channel"] = &$fieldToolTipschannel;
$placeHolders["channel"] = &$placeHolderschannel;
$page_titles["channel"] = &$pageTitleschannel;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["channel"] = array();
//	personal_channel
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="personal_channel";
		$detailsParam["dOriginalTable"] = "personal_channel";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "personal_channel";
	$detailsParam["dCaptionTable"] = GetTableCaption("personal_channel");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["channel"][$dIndex] = $detailsParam;

	
		$detailsTablesData["channel"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["channel"][$dIndex]["masterKeys"][]="channel_id";

				$detailsTablesData["channel"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["channel"][$dIndex]["detailKeys"][]="channel_id";

// tables which are master tables for current table (detail)
$masterTablesData["channel"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_channel()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "channel_id,  	channel_name";
$proto0["m_strFrom"] = "FROM channel";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "channel_id",
	"m_strTable" => "channel",
	"m_srcTableName" => "channel"
));

$proto6["m_sql"] = "channel_id";
$proto6["m_srcTableName"] = "channel";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "channel_name",
	"m_strTable" => "channel",
	"m_srcTableName" => "channel"
));

$proto8["m_sql"] = "channel_name";
$proto8["m_srcTableName"] = "channel";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "channel";
$proto11["m_srcTableName"] = "channel";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "channel_id";
$proto11["m_columns"][] = "channel_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "channel";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "channel";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="channel";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_channel = createSqlQuery_channel();


	
		;

		

$tdatachannel[".sqlquery"] = $queryData_channel;



$tableEvents["channel"] = new eventsBase;
$tdatachannel[".hasEvents"] = false;

?>