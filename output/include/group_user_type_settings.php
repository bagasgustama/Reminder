<?php
$tdatagroup_user_type = array();
$tdatagroup_user_type[".searchableFields"] = array();
$tdatagroup_user_type[".ShortName"] = "group_user_type";
$tdatagroup_user_type[".OwnerID"] = "";
$tdatagroup_user_type[".OriginalTable"] = "group_user_type";


$tdatagroup_user_type[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagroup_user_type[".originalPagesByType"] = $tdatagroup_user_type[".pagesByType"];
$tdatagroup_user_type[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagroup_user_type[".originalPages"] = $tdatagroup_user_type[".pages"];
$tdatagroup_user_type[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagroup_user_type[".originalDefaultPages"] = $tdatagroup_user_type[".defaultPages"];

//	field labels
$fieldLabelsgroup_user_type = array();
$fieldToolTipsgroup_user_type = array();
$pageTitlesgroup_user_type = array();
$placeHoldersgroup_user_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_user_type["English"] = array();
	$fieldToolTipsgroup_user_type["English"] = array();
	$placeHoldersgroup_user_type["English"] = array();
	$pageTitlesgroup_user_type["English"] = array();
	$fieldLabelsgroup_user_type["English"]["id_user_type"] = "Id User Type";
	$fieldToolTipsgroup_user_type["English"]["id_user_type"] = "";
	$placeHoldersgroup_user_type["English"]["id_user_type"] = "";
	$fieldLabelsgroup_user_type["English"]["user_type"] = "User Type";
	$fieldToolTipsgroup_user_type["English"]["user_type"] = "";
	$placeHoldersgroup_user_type["English"]["user_type"] = "";
	if (count($fieldToolTipsgroup_user_type["English"]))
		$tdatagroup_user_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsgroup_user_type["Indonesian"] = array();
	$fieldToolTipsgroup_user_type["Indonesian"] = array();
	$placeHoldersgroup_user_type["Indonesian"] = array();
	$pageTitlesgroup_user_type["Indonesian"] = array();
	$fieldLabelsgroup_user_type["Indonesian"]["id_user_type"] = "Id User Type";
	$fieldToolTipsgroup_user_type["Indonesian"]["id_user_type"] = "";
	$placeHoldersgroup_user_type["Indonesian"]["id_user_type"] = "";
	$fieldLabelsgroup_user_type["Indonesian"]["user_type"] = "User Type";
	$fieldToolTipsgroup_user_type["Indonesian"]["user_type"] = "";
	$placeHoldersgroup_user_type["Indonesian"]["user_type"] = "";
	if (count($fieldToolTipsgroup_user_type["Indonesian"]))
		$tdatagroup_user_type[".isUseToolTips"] = true;
}


	$tdatagroup_user_type[".NCSearch"] = true;



$tdatagroup_user_type[".shortTableName"] = "group_user_type";
$tdatagroup_user_type[".nSecOptions"] = 0;

$tdatagroup_user_type[".mainTableOwnerID"] = "";
$tdatagroup_user_type[".entityType"] = 0;
$tdatagroup_user_type[".connId"] = "notif_basic1_at_localhost";


$tdatagroup_user_type[".strOriginalTableName"] = "group_user_type";

	



$tdatagroup_user_type[".showAddInPopup"] = false;

$tdatagroup_user_type[".showEditInPopup"] = false;

$tdatagroup_user_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_user_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_user_type[".listAjax"] = false;
//	temporary
$tdatagroup_user_type[".listAjax"] = false;

	$tdatagroup_user_type[".audit"] = false;

	$tdatagroup_user_type[".locking"] = false;


$pages = $tdatagroup_user_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_user_type[".edit"] = true;
	$tdatagroup_user_type[".afterEditAction"] = 1;
	$tdatagroup_user_type[".closePopupAfterEdit"] = 1;
	$tdatagroup_user_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_user_type[".add"] = true;
$tdatagroup_user_type[".afterAddAction"] = 1;
$tdatagroup_user_type[".closePopupAfterAdd"] = 1;
$tdatagroup_user_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_user_type[".list"] = true;
}



$tdatagroup_user_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup_user_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_user_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_user_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_user_type[".printFriendly"] = true;
}



$tdatagroup_user_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_user_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_user_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_user_type[".isUseAjaxSuggest"] = true;

$tdatagroup_user_type[".rowHighlite"] = true;





$tdatagroup_user_type[".ajaxCodeSnippetAdded"] = false;

$tdatagroup_user_type[".buttonsAdded"] = false;

$tdatagroup_user_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup_user_type[".isUseTimeForSearch"] = false;


$tdatagroup_user_type[".badgeColor"] = "3CB371";


$tdatagroup_user_type[".allSearchFields"] = array();
$tdatagroup_user_type[".filterFields"] = array();
$tdatagroup_user_type[".requiredSearchFields"] = array();

$tdatagroup_user_type[".googleLikeFields"] = array();
$tdatagroup_user_type[".googleLikeFields"][] = "id_user_type";
$tdatagroup_user_type[".googleLikeFields"][] = "user_type";



$tdatagroup_user_type[".tableType"] = "list";

$tdatagroup_user_type[".printerPageOrientation"] = 0;
$tdatagroup_user_type[".nPrinterPageScale"] = 100;

$tdatagroup_user_type[".nPrinterSplitRecords"] = 40;

$tdatagroup_user_type[".geocodingEnabled"] = false;










$tdatagroup_user_type[".pageSize"] = 20;

$tdatagroup_user_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_user_type[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_user_type[".orderindexes"] = array();


$tdatagroup_user_type[".sqlHead"] = "SELECT id_user_type,  	user_type";
$tdatagroup_user_type[".sqlFrom"] = "FROM group_user_type";
$tdatagroup_user_type[".sqlWhereExpr"] = "";
$tdatagroup_user_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_user_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_user_type[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_user_type[".highlightSearchResults"] = true;

$tableKeysgroup_user_type = array();
$tableKeysgroup_user_type[] = "id_user_type";
$tdatagroup_user_type[".Keys"] = $tableKeysgroup_user_type;


$tdatagroup_user_type[".hideMobileList"] = array();




//	id_user_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_user_type";
	$fdata["GoodName"] = "id_user_type";
	$fdata["ownerTable"] = "group_user_type";
	$fdata["Label"] = GetFieldLabel("group_user_type","id_user_type");
	$fdata["FieldType"] = 16;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_user_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_user_type";

	
	
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


	$tdatagroup_user_type["id_user_type"] = $fdata;
		$tdatagroup_user_type[".searchableFields"][] = "id_user_type";
//	user_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_type";
	$fdata["GoodName"] = "user_type";
	$fdata["ownerTable"] = "group_user_type";
	$fdata["Label"] = GetFieldLabel("group_user_type","user_type");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "user_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_type";

	
	
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


	$tdatagroup_user_type["user_type"] = $fdata;
		$tdatagroup_user_type[".searchableFields"][] = "user_type";


$tables_data["group_user_type"]=&$tdatagroup_user_type;
$field_labels["group_user_type"] = &$fieldLabelsgroup_user_type;
$fieldToolTips["group_user_type"] = &$fieldToolTipsgroup_user_type;
$placeHolders["group_user_type"] = &$placeHoldersgroup_user_type;
$page_titles["group_user_type"] = &$pageTitlesgroup_user_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_user_type"] = array();
//	group_member
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member";
		$detailsParam["dOriginalTable"] = "group_member";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group_user_type"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_user_type"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_user_type"][$dIndex]["masterKeys"][]="id_user_type";

				$detailsTablesData["group_user_type"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_user_type"][$dIndex]["detailKeys"][]="user_type";

// tables which are master tables for current table (detail)
$masterTablesData["group_user_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group_user_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_user_type,  	user_type";
$proto0["m_strFrom"] = "FROM group_user_type";
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
	"m_strName" => "id_user_type",
	"m_strTable" => "group_user_type",
	"m_srcTableName" => "group_user_type"
));

$proto6["m_sql"] = "id_user_type";
$proto6["m_srcTableName"] = "group_user_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_type",
	"m_strTable" => "group_user_type",
	"m_srcTableName" => "group_user_type"
));

$proto8["m_sql"] = "user_type";
$proto8["m_srcTableName"] = "group_user_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "group_user_type";
$proto11["m_srcTableName"] = "group_user_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_user_type";
$proto11["m_columns"][] = "user_type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "group_user_type";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "group_user_type";
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
$proto0["m_srcTableName"]="group_user_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group_user_type = createSqlQuery_group_user_type();


	
		;

		

$tdatagroup_user_type[".sqlquery"] = $queryData_group_user_type;



$tableEvents["group_user_type"] = new eventsBase;
$tdatagroup_user_type[".hasEvents"] = false;

?>