<?php
$tdatagroup_agenda_general_logs = array();
$tdatagroup_agenda_general_logs[".searchableFields"] = array();
$tdatagroup_agenda_general_logs[".ShortName"] = "group_agenda_general_logs";
$tdatagroup_agenda_general_logs[".OwnerID"] = "";
$tdatagroup_agenda_general_logs[".OriginalTable"] = "group_agenda_general_logs";


$tdatagroup_agenda_general_logs[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagroup_agenda_general_logs[".originalPagesByType"] = $tdatagroup_agenda_general_logs[".pagesByType"];
$tdatagroup_agenda_general_logs[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagroup_agenda_general_logs[".originalPages"] = $tdatagroup_agenda_general_logs[".pages"];
$tdatagroup_agenda_general_logs[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagroup_agenda_general_logs[".originalDefaultPages"] = $tdatagroup_agenda_general_logs[".defaultPages"];

//	field labels
$fieldLabelsgroup_agenda_general_logs = array();
$fieldToolTipsgroup_agenda_general_logs = array();
$pageTitlesgroup_agenda_general_logs = array();
$placeHoldersgroup_agenda_general_logs = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_agenda_general_logs["English"] = array();
	$fieldToolTipsgroup_agenda_general_logs["English"] = array();
	$placeHoldersgroup_agenda_general_logs["English"] = array();
	$pageTitlesgroup_agenda_general_logs["English"] = array();
	$fieldLabelsgroup_agenda_general_logs["English"]["id_logs"] = "Id Logs";
	$fieldToolTipsgroup_agenda_general_logs["English"]["id_logs"] = "";
	$placeHoldersgroup_agenda_general_logs["English"]["id_logs"] = "";
	$fieldLabelsgroup_agenda_general_logs["English"]["member_id"] = "Member Id";
	$fieldToolTipsgroup_agenda_general_logs["English"]["member_id"] = "";
	$placeHoldersgroup_agenda_general_logs["English"]["member_id"] = "";
	$fieldLabelsgroup_agenda_general_logs["English"]["id_group_agenda"] = "Id Group Agenda";
	$fieldToolTipsgroup_agenda_general_logs["English"]["id_group_agenda"] = "";
	$placeHoldersgroup_agenda_general_logs["English"]["id_group_agenda"] = "";
	$fieldLabelsgroup_agenda_general_logs["English"]["date_send"] = "Date Send";
	$fieldToolTipsgroup_agenda_general_logs["English"]["date_send"] = "";
	$placeHoldersgroup_agenda_general_logs["English"]["date_send"] = "";
	if (count($fieldToolTipsgroup_agenda_general_logs["English"]))
		$tdatagroup_agenda_general_logs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsgroup_agenda_general_logs["Indonesian"] = array();
	$fieldToolTipsgroup_agenda_general_logs["Indonesian"] = array();
	$placeHoldersgroup_agenda_general_logs["Indonesian"] = array();
	$pageTitlesgroup_agenda_general_logs["Indonesian"] = array();
	$fieldLabelsgroup_agenda_general_logs["Indonesian"]["id_logs"] = "Id Logs";
	$fieldToolTipsgroup_agenda_general_logs["Indonesian"]["id_logs"] = "";
	$placeHoldersgroup_agenda_general_logs["Indonesian"]["id_logs"] = "";
	$fieldLabelsgroup_agenda_general_logs["Indonesian"]["member_id"] = "Member Id";
	$fieldToolTipsgroup_agenda_general_logs["Indonesian"]["member_id"] = "";
	$placeHoldersgroup_agenda_general_logs["Indonesian"]["member_id"] = "";
	$fieldLabelsgroup_agenda_general_logs["Indonesian"]["id_group_agenda"] = "Id Group Agenda";
	$fieldToolTipsgroup_agenda_general_logs["Indonesian"]["id_group_agenda"] = "";
	$placeHoldersgroup_agenda_general_logs["Indonesian"]["id_group_agenda"] = "";
	$fieldLabelsgroup_agenda_general_logs["Indonesian"]["date_send"] = "Date Send";
	$fieldToolTipsgroup_agenda_general_logs["Indonesian"]["date_send"] = "";
	$placeHoldersgroup_agenda_general_logs["Indonesian"]["date_send"] = "";
	if (count($fieldToolTipsgroup_agenda_general_logs["Indonesian"]))
		$tdatagroup_agenda_general_logs[".isUseToolTips"] = true;
}


	$tdatagroup_agenda_general_logs[".NCSearch"] = true;



$tdatagroup_agenda_general_logs[".shortTableName"] = "group_agenda_general_logs";
$tdatagroup_agenda_general_logs[".nSecOptions"] = 0;

$tdatagroup_agenda_general_logs[".mainTableOwnerID"] = "";
$tdatagroup_agenda_general_logs[".entityType"] = 0;
$tdatagroup_agenda_general_logs[".connId"] = "notif_basic1_at_localhost";


$tdatagroup_agenda_general_logs[".strOriginalTableName"] = "group_agenda_general_logs";

	



$tdatagroup_agenda_general_logs[".showAddInPopup"] = false;

$tdatagroup_agenda_general_logs[".showEditInPopup"] = false;

$tdatagroup_agenda_general_logs[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_agenda_general_logs[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_agenda_general_logs[".listAjax"] = false;
//	temporary
$tdatagroup_agenda_general_logs[".listAjax"] = false;

	$tdatagroup_agenda_general_logs[".audit"] = false;

	$tdatagroup_agenda_general_logs[".locking"] = false;


$pages = $tdatagroup_agenda_general_logs[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_agenda_general_logs[".edit"] = true;
	$tdatagroup_agenda_general_logs[".afterEditAction"] = 1;
	$tdatagroup_agenda_general_logs[".closePopupAfterEdit"] = 1;
	$tdatagroup_agenda_general_logs[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_agenda_general_logs[".add"] = true;
$tdatagroup_agenda_general_logs[".afterAddAction"] = 1;
$tdatagroup_agenda_general_logs[".closePopupAfterAdd"] = 1;
$tdatagroup_agenda_general_logs[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_agenda_general_logs[".list"] = true;
}



$tdatagroup_agenda_general_logs[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup_agenda_general_logs[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_agenda_general_logs[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_agenda_general_logs[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_agenda_general_logs[".printFriendly"] = true;
}



$tdatagroup_agenda_general_logs[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_agenda_general_logs[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_agenda_general_logs[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_agenda_general_logs[".isUseAjaxSuggest"] = true;

$tdatagroup_agenda_general_logs[".rowHighlite"] = true;





$tdatagroup_agenda_general_logs[".ajaxCodeSnippetAdded"] = false;

$tdatagroup_agenda_general_logs[".buttonsAdded"] = false;

$tdatagroup_agenda_general_logs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup_agenda_general_logs[".isUseTimeForSearch"] = false;


$tdatagroup_agenda_general_logs[".badgeColor"] = "EDCA00";


$tdatagroup_agenda_general_logs[".allSearchFields"] = array();
$tdatagroup_agenda_general_logs[".filterFields"] = array();
$tdatagroup_agenda_general_logs[".requiredSearchFields"] = array();

$tdatagroup_agenda_general_logs[".googleLikeFields"] = array();
$tdatagroup_agenda_general_logs[".googleLikeFields"][] = "id_logs";
$tdatagroup_agenda_general_logs[".googleLikeFields"][] = "member_id";
$tdatagroup_agenda_general_logs[".googleLikeFields"][] = "id_group_agenda";
$tdatagroup_agenda_general_logs[".googleLikeFields"][] = "date_send";



$tdatagroup_agenda_general_logs[".tableType"] = "list";

$tdatagroup_agenda_general_logs[".printerPageOrientation"] = 0;
$tdatagroup_agenda_general_logs[".nPrinterPageScale"] = 100;

$tdatagroup_agenda_general_logs[".nPrinterSplitRecords"] = 40;

$tdatagroup_agenda_general_logs[".geocodingEnabled"] = false;










$tdatagroup_agenda_general_logs[".pageSize"] = 20;

$tdatagroup_agenda_general_logs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_agenda_general_logs[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_agenda_general_logs[".orderindexes"] = array();


$tdatagroup_agenda_general_logs[".sqlHead"] = "SELECT id_logs,  	member_id,  	id_group_agenda,  	date_send";
$tdatagroup_agenda_general_logs[".sqlFrom"] = "FROM group_agenda_general_logs";
$tdatagroup_agenda_general_logs[".sqlWhereExpr"] = "";
$tdatagroup_agenda_general_logs[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_agenda_general_logs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_agenda_general_logs[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_agenda_general_logs[".highlightSearchResults"] = true;

$tableKeysgroup_agenda_general_logs = array();
$tableKeysgroup_agenda_general_logs[] = "id_logs";
$tdatagroup_agenda_general_logs[".Keys"] = $tableKeysgroup_agenda_general_logs;


$tdatagroup_agenda_general_logs[".hideMobileList"] = array();




//	id_logs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_logs";
	$fdata["GoodName"] = "id_logs";
	$fdata["ownerTable"] = "group_agenda_general_logs";
	$fdata["Label"] = GetFieldLabel("group_agenda_general_logs","id_logs");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_logs";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_logs";

	
	
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


	$tdatagroup_agenda_general_logs["id_logs"] = $fdata;
		$tdatagroup_agenda_general_logs[".searchableFields"][] = "id_logs";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "group_agenda_general_logs";
	$fdata["Label"] = GetFieldLabel("group_agenda_general_logs","member_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "member_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "member_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "personal";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "member_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatagroup_agenda_general_logs["member_id"] = $fdata;
		$tdatagroup_agenda_general_logs[".searchableFields"][] = "member_id";
//	id_group_agenda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_group_agenda";
	$fdata["GoodName"] = "id_group_agenda";
	$fdata["ownerTable"] = "group_agenda_general_logs";
	$fdata["Label"] = GetFieldLabel("group_agenda_general_logs","id_group_agenda");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_group_agenda";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_group_agenda";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "group_agenda";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "group_agenda_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "agenda_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatagroup_agenda_general_logs["id_group_agenda"] = $fdata;
		$tdatagroup_agenda_general_logs[".searchableFields"][] = "id_group_agenda";
//	date_send
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "date_send";
	$fdata["GoodName"] = "date_send";
	$fdata["ownerTable"] = "group_agenda_general_logs";
	$fdata["Label"] = GetFieldLabel("group_agenda_general_logs","date_send");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "date_send";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_send";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatagroup_agenda_general_logs["date_send"] = $fdata;
		$tdatagroup_agenda_general_logs[".searchableFields"][] = "date_send";


$tables_data["group_agenda_general_logs"]=&$tdatagroup_agenda_general_logs;
$field_labels["group_agenda_general_logs"] = &$fieldLabelsgroup_agenda_general_logs;
$fieldToolTips["group_agenda_general_logs"] = &$fieldToolTipsgroup_agenda_general_logs;
$placeHolders["group_agenda_general_logs"] = &$placeHoldersgroup_agenda_general_logs;
$page_titles["group_agenda_general_logs"] = &$pageTitlesgroup_agenda_general_logs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_agenda_general_logs"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["group_agenda_general_logs"] = array();



	
				$strOriginalDetailsTable="personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_agenda_general_logs"][0] = $masterParams;
				$masterTablesData["group_agenda_general_logs"][0]["masterKeys"] = array();
	$masterTablesData["group_agenda_general_logs"][0]["masterKeys"][]="member_id";
				$masterTablesData["group_agenda_general_logs"][0]["detailKeys"] = array();
	$masterTablesData["group_agenda_general_logs"][0]["detailKeys"][]="member_id";
		
	
				$strOriginalDetailsTable="group_agenda";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group_agenda";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group_agenda";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_agenda_general_logs"][1] = $masterParams;
				$masterTablesData["group_agenda_general_logs"][1]["masterKeys"] = array();
	$masterTablesData["group_agenda_general_logs"][1]["masterKeys"][]="group_agenda_id";
				$masterTablesData["group_agenda_general_logs"][1]["detailKeys"] = array();
	$masterTablesData["group_agenda_general_logs"][1]["detailKeys"][]="id_group_agenda";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group_agenda_general_logs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_logs,  	member_id,  	id_group_agenda,  	date_send";
$proto0["m_strFrom"] = "FROM group_agenda_general_logs";
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
	"m_strName" => "id_logs",
	"m_strTable" => "group_agenda_general_logs",
	"m_srcTableName" => "group_agenda_general_logs"
));

$proto6["m_sql"] = "id_logs";
$proto6["m_srcTableName"] = "group_agenda_general_logs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "group_agenda_general_logs",
	"m_srcTableName" => "group_agenda_general_logs"
));

$proto8["m_sql"] = "member_id";
$proto8["m_srcTableName"] = "group_agenda_general_logs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_group_agenda",
	"m_strTable" => "group_agenda_general_logs",
	"m_srcTableName" => "group_agenda_general_logs"
));

$proto10["m_sql"] = "id_group_agenda";
$proto10["m_srcTableName"] = "group_agenda_general_logs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "date_send",
	"m_strTable" => "group_agenda_general_logs",
	"m_srcTableName" => "group_agenda_general_logs"
));

$proto12["m_sql"] = "date_send";
$proto12["m_srcTableName"] = "group_agenda_general_logs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "group_agenda_general_logs";
$proto15["m_srcTableName"] = "group_agenda_general_logs";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_logs";
$proto15["m_columns"][] = "member_id";
$proto15["m_columns"][] = "id_group_agenda";
$proto15["m_columns"][] = "date_send";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "group_agenda_general_logs";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "group_agenda_general_logs";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="group_agenda_general_logs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group_agenda_general_logs = createSqlQuery_group_agenda_general_logs();


	
		;

				

$tdatagroup_agenda_general_logs[".sqlquery"] = $queryData_group_agenda_general_logs;



$tableEvents["group_agenda_general_logs"] = new eventsBase;
$tdatagroup_agenda_general_logs[".hasEvents"] = false;

?>