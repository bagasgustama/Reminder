<?php
$tdataloop_type = array();
$tdataloop_type[".searchableFields"] = array();
$tdataloop_type[".ShortName"] = "loop_type";
$tdataloop_type[".OwnerID"] = "";
$tdataloop_type[".OriginalTable"] = "loop_type";


$tdataloop_type[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataloop_type[".originalPagesByType"] = $tdataloop_type[".pagesByType"];
$tdataloop_type[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataloop_type[".originalPages"] = $tdataloop_type[".pages"];
$tdataloop_type[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataloop_type[".originalDefaultPages"] = $tdataloop_type[".defaultPages"];

//	field labels
$fieldLabelsloop_type = array();
$fieldToolTipsloop_type = array();
$pageTitlesloop_type = array();
$placeHoldersloop_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsloop_type["English"] = array();
	$fieldToolTipsloop_type["English"] = array();
	$placeHoldersloop_type["English"] = array();
	$pageTitlesloop_type["English"] = array();
	$fieldLabelsloop_type["English"]["id_loop"] = "Id Loop";
	$fieldToolTipsloop_type["English"]["id_loop"] = "";
	$placeHoldersloop_type["English"]["id_loop"] = "";
	$fieldLabelsloop_type["English"]["loop_type"] = "Loop Type";
	$fieldToolTipsloop_type["English"]["loop_type"] = "";
	$placeHoldersloop_type["English"]["loop_type"] = "";
	$fieldLabelsloop_type["English"]["desc"] = "Desc";
	$fieldToolTipsloop_type["English"]["desc"] = "";
	$placeHoldersloop_type["English"]["desc"] = "";
	if (count($fieldToolTipsloop_type["English"]))
		$tdataloop_type[".isUseToolTips"] = true;
}


	$tdataloop_type[".NCSearch"] = true;



$tdataloop_type[".shortTableName"] = "loop_type";
$tdataloop_type[".nSecOptions"] = 0;

$tdataloop_type[".mainTableOwnerID"] = "";
$tdataloop_type[".entityType"] = 0;
$tdataloop_type[".connId"] = "notif_basic1_at_localhost";


$tdataloop_type[".strOriginalTableName"] = "loop_type";

	



$tdataloop_type[".showAddInPopup"] = false;

$tdataloop_type[".showEditInPopup"] = false;

$tdataloop_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataloop_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataloop_type[".listAjax"] = false;
//	temporary
$tdataloop_type[".listAjax"] = false;

	$tdataloop_type[".audit"] = false;

	$tdataloop_type[".locking"] = false;


$pages = $tdataloop_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataloop_type[".edit"] = true;
	$tdataloop_type[".afterEditAction"] = 1;
	$tdataloop_type[".closePopupAfterEdit"] = 1;
	$tdataloop_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataloop_type[".add"] = true;
$tdataloop_type[".afterAddAction"] = 1;
$tdataloop_type[".closePopupAfterAdd"] = 1;
$tdataloop_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataloop_type[".list"] = true;
}



$tdataloop_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataloop_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataloop_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataloop_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataloop_type[".printFriendly"] = true;
}



$tdataloop_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataloop_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataloop_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataloop_type[".isUseAjaxSuggest"] = true;

$tdataloop_type[".rowHighlite"] = true;





$tdataloop_type[".ajaxCodeSnippetAdded"] = false;

$tdataloop_type[".buttonsAdded"] = false;

$tdataloop_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdataloop_type[".isUseTimeForSearch"] = false;


$tdataloop_type[".badgeColor"] = "D2AF80";


$tdataloop_type[".allSearchFields"] = array();
$tdataloop_type[".filterFields"] = array();
$tdataloop_type[".requiredSearchFields"] = array();

$tdataloop_type[".googleLikeFields"] = array();
$tdataloop_type[".googleLikeFields"][] = "id_loop";
$tdataloop_type[".googleLikeFields"][] = "loop_type";
$tdataloop_type[".googleLikeFields"][] = "desc";



$tdataloop_type[".tableType"] = "list";

$tdataloop_type[".printerPageOrientation"] = 0;
$tdataloop_type[".nPrinterPageScale"] = 100;

$tdataloop_type[".nPrinterSplitRecords"] = 40;

$tdataloop_type[".geocodingEnabled"] = false;










$tdataloop_type[".pageSize"] = 20;

$tdataloop_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataloop_type[".strOrderBy"] = $tstrOrderBy;

$tdataloop_type[".orderindexes"] = array();


$tdataloop_type[".sqlHead"] = "SELECT id_loop,  	loop_type,  	`desc`";
$tdataloop_type[".sqlFrom"] = "FROM loop_type";
$tdataloop_type[".sqlWhereExpr"] = "";
$tdataloop_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataloop_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataloop_type[".arrGroupsPerPage"] = $arrGPP;

$tdataloop_type[".highlightSearchResults"] = true;

$tableKeysloop_type = array();
$tableKeysloop_type[] = "id_loop";
$tdataloop_type[".Keys"] = $tableKeysloop_type;


$tdataloop_type[".hideMobileList"] = array();




//	id_loop
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_loop";
	$fdata["GoodName"] = "id_loop";
	$fdata["ownerTable"] = "loop_type";
	$fdata["Label"] = GetFieldLabel("loop_type","id_loop");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_loop";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_loop";

	
	
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


	$tdataloop_type["id_loop"] = $fdata;
		$tdataloop_type[".searchableFields"][] = "id_loop";
//	loop_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "loop_type";
	$fdata["GoodName"] = "loop_type";
	$fdata["ownerTable"] = "loop_type";
	$fdata["Label"] = GetFieldLabel("loop_type","loop_type");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "loop_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "loop_type";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataloop_type["loop_type"] = $fdata;
		$tdataloop_type[".searchableFields"][] = "loop_type";
//	desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "desc";
	$fdata["GoodName"] = "desc";
	$fdata["ownerTable"] = "loop_type";
	$fdata["Label"] = GetFieldLabel("loop_type","desc");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "desc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`desc`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdataloop_type["desc"] = $fdata;
		$tdataloop_type[".searchableFields"][] = "desc";


$tables_data["loop_type"]=&$tdataloop_type;
$field_labels["loop_type"] = &$fieldLabelsloop_type;
$fieldToolTips["loop_type"] = &$fieldToolTipsloop_type;
$placeHolders["loop_type"] = &$placeHoldersloop_type;
$page_titles["loop_type"] = &$pageTitlesloop_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["loop_type"] = array();
//	personal_agenda
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="personal_agenda";
		$detailsParam["dOriginalTable"] = "personal_agenda";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "personal_agenda";
	$detailsParam["dCaptionTable"] = GetTableCaption("personal_agenda");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["loop_type"][$dIndex] = $detailsParam;

	
		$detailsTablesData["loop_type"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["loop_type"][$dIndex]["masterKeys"][]="id_loop";

				$detailsTablesData["loop_type"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["loop_type"][$dIndex]["detailKeys"][]="loop_type";
//	group_agenda
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_agenda";
		$detailsParam["dOriginalTable"] = "group_agenda";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_agenda";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_agenda");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["loop_type"][$dIndex] = $detailsParam;

	
		$detailsTablesData["loop_type"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["loop_type"][$dIndex]["masterKeys"][]="id_loop";

				$detailsTablesData["loop_type"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["loop_type"][$dIndex]["detailKeys"][]="loop_id";

// tables which are master tables for current table (detail)
$masterTablesData["loop_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_loop_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_loop,  	loop_type,  	`desc`";
$proto0["m_strFrom"] = "FROM loop_type";
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
	"m_strName" => "id_loop",
	"m_strTable" => "loop_type",
	"m_srcTableName" => "loop_type"
));

$proto6["m_sql"] = "id_loop";
$proto6["m_srcTableName"] = "loop_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "loop_type",
	"m_strTable" => "loop_type",
	"m_srcTableName" => "loop_type"
));

$proto8["m_sql"] = "loop_type";
$proto8["m_srcTableName"] = "loop_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "desc",
	"m_strTable" => "loop_type",
	"m_srcTableName" => "loop_type"
));

$proto10["m_sql"] = "`desc`";
$proto10["m_srcTableName"] = "loop_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "loop_type";
$proto13["m_srcTableName"] = "loop_type";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_loop";
$proto13["m_columns"][] = "loop_type";
$proto13["m_columns"][] = "desc";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "loop_type";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "loop_type";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="loop_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_loop_type = createSqlQuery_loop_type();


	
		;

			

$tdataloop_type[".sqlquery"] = $queryData_loop_type;



$tableEvents["loop_type"] = new eventsBase;
$tdataloop_type[".hasEvents"] = false;

?>