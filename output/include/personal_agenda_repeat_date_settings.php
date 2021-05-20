<?php
$tdatapersonal_agenda_repeat_date = array();
$tdatapersonal_agenda_repeat_date[".searchableFields"] = array();
$tdatapersonal_agenda_repeat_date[".ShortName"] = "personal_agenda_repeat_date";
$tdatapersonal_agenda_repeat_date[".OwnerID"] = "";
$tdatapersonal_agenda_repeat_date[".OriginalTable"] = "personal_agenda_repeat_date";


$tdatapersonal_agenda_repeat_date[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapersonal_agenda_repeat_date[".originalPagesByType"] = $tdatapersonal_agenda_repeat_date[".pagesByType"];
$tdatapersonal_agenda_repeat_date[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapersonal_agenda_repeat_date[".originalPages"] = $tdatapersonal_agenda_repeat_date[".pages"];
$tdatapersonal_agenda_repeat_date[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapersonal_agenda_repeat_date[".originalDefaultPages"] = $tdatapersonal_agenda_repeat_date[".defaultPages"];

//	field labels
$fieldLabelspersonal_agenda_repeat_date = array();
$fieldToolTipspersonal_agenda_repeat_date = array();
$pageTitlespersonal_agenda_repeat_date = array();
$placeHolderspersonal_agenda_repeat_date = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspersonal_agenda_repeat_date["English"] = array();
	$fieldToolTipspersonal_agenda_repeat_date["English"] = array();
	$placeHolderspersonal_agenda_repeat_date["English"] = array();
	$pageTitlespersonal_agenda_repeat_date["English"] = array();
	$fieldLabelspersonal_agenda_repeat_date["English"]["id_group_repeat"] = "Id Group Repeat";
	$fieldToolTipspersonal_agenda_repeat_date["English"]["id_group_repeat"] = "";
	$placeHolderspersonal_agenda_repeat_date["English"]["id_group_repeat"] = "";
	$fieldLabelspersonal_agenda_repeat_date["English"]["member_agenda_id"] = "Member Agenda Id";
	$fieldToolTipspersonal_agenda_repeat_date["English"]["member_agenda_id"] = "";
	$placeHolderspersonal_agenda_repeat_date["English"]["member_agenda_id"] = "";
	$fieldLabelspersonal_agenda_repeat_date["English"]["dodate"] = "Dodate";
	$fieldToolTipspersonal_agenda_repeat_date["English"]["dodate"] = "";
	$placeHolderspersonal_agenda_repeat_date["English"]["dodate"] = "";
	if (count($fieldToolTipspersonal_agenda_repeat_date["English"]))
		$tdatapersonal_agenda_repeat_date[".isUseToolTips"] = true;
}


	$tdatapersonal_agenda_repeat_date[".NCSearch"] = true;



$tdatapersonal_agenda_repeat_date[".shortTableName"] = "personal_agenda_repeat_date";
$tdatapersonal_agenda_repeat_date[".nSecOptions"] = 0;

$tdatapersonal_agenda_repeat_date[".mainTableOwnerID"] = "";
$tdatapersonal_agenda_repeat_date[".entityType"] = 0;
$tdatapersonal_agenda_repeat_date[".connId"] = "notif_basic1_at_localhost";


$tdatapersonal_agenda_repeat_date[".strOriginalTableName"] = "personal_agenda_repeat_date";

	



$tdatapersonal_agenda_repeat_date[".showAddInPopup"] = false;

$tdatapersonal_agenda_repeat_date[".showEditInPopup"] = false;

$tdatapersonal_agenda_repeat_date[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapersonal_agenda_repeat_date[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapersonal_agenda_repeat_date[".listAjax"] = false;
//	temporary
$tdatapersonal_agenda_repeat_date[".listAjax"] = false;

	$tdatapersonal_agenda_repeat_date[".audit"] = false;

	$tdatapersonal_agenda_repeat_date[".locking"] = false;


$pages = $tdatapersonal_agenda_repeat_date[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersonal_agenda_repeat_date[".edit"] = true;
	$tdatapersonal_agenda_repeat_date[".afterEditAction"] = 1;
	$tdatapersonal_agenda_repeat_date[".closePopupAfterEdit"] = 1;
	$tdatapersonal_agenda_repeat_date[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersonal_agenda_repeat_date[".add"] = true;
$tdatapersonal_agenda_repeat_date[".afterAddAction"] = 1;
$tdatapersonal_agenda_repeat_date[".closePopupAfterAdd"] = 1;
$tdatapersonal_agenda_repeat_date[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersonal_agenda_repeat_date[".list"] = true;
}



$tdatapersonal_agenda_repeat_date[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersonal_agenda_repeat_date[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersonal_agenda_repeat_date[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersonal_agenda_repeat_date[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersonal_agenda_repeat_date[".printFriendly"] = true;
}



$tdatapersonal_agenda_repeat_date[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersonal_agenda_repeat_date[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersonal_agenda_repeat_date[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersonal_agenda_repeat_date[".isUseAjaxSuggest"] = true;

$tdatapersonal_agenda_repeat_date[".rowHighlite"] = true;





$tdatapersonal_agenda_repeat_date[".ajaxCodeSnippetAdded"] = false;

$tdatapersonal_agenda_repeat_date[".buttonsAdded"] = false;

$tdatapersonal_agenda_repeat_date[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersonal_agenda_repeat_date[".isUseTimeForSearch"] = false;


$tdatapersonal_agenda_repeat_date[".badgeColor"] = "7B68EE";


$tdatapersonal_agenda_repeat_date[".allSearchFields"] = array();
$tdatapersonal_agenda_repeat_date[".filterFields"] = array();
$tdatapersonal_agenda_repeat_date[".requiredSearchFields"] = array();

$tdatapersonal_agenda_repeat_date[".googleLikeFields"] = array();
$tdatapersonal_agenda_repeat_date[".googleLikeFields"][] = "id_group_repeat";
$tdatapersonal_agenda_repeat_date[".googleLikeFields"][] = "member_agenda_id";
$tdatapersonal_agenda_repeat_date[".googleLikeFields"][] = "dodate";



$tdatapersonal_agenda_repeat_date[".tableType"] = "list";

$tdatapersonal_agenda_repeat_date[".printerPageOrientation"] = 0;
$tdatapersonal_agenda_repeat_date[".nPrinterPageScale"] = 100;

$tdatapersonal_agenda_repeat_date[".nPrinterSplitRecords"] = 40;

$tdatapersonal_agenda_repeat_date[".geocodingEnabled"] = false;










$tdatapersonal_agenda_repeat_date[".pageSize"] = 20;

$tdatapersonal_agenda_repeat_date[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapersonal_agenda_repeat_date[".strOrderBy"] = $tstrOrderBy;

$tdatapersonal_agenda_repeat_date[".orderindexes"] = array();


$tdatapersonal_agenda_repeat_date[".sqlHead"] = "SELECT id_group_repeat,  	member_agenda_id,  	dodate";
$tdatapersonal_agenda_repeat_date[".sqlFrom"] = "FROM personal_agenda_repeat_date";
$tdatapersonal_agenda_repeat_date[".sqlWhereExpr"] = "";
$tdatapersonal_agenda_repeat_date[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersonal_agenda_repeat_date[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersonal_agenda_repeat_date[".arrGroupsPerPage"] = $arrGPP;

$tdatapersonal_agenda_repeat_date[".highlightSearchResults"] = true;

$tableKeyspersonal_agenda_repeat_date = array();
$tableKeyspersonal_agenda_repeat_date[] = "id_group_repeat";
$tdatapersonal_agenda_repeat_date[".Keys"] = $tableKeyspersonal_agenda_repeat_date;


$tdatapersonal_agenda_repeat_date[".hideMobileList"] = array();




//	id_group_repeat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_group_repeat";
	$fdata["GoodName"] = "id_group_repeat";
	$fdata["ownerTable"] = "personal_agenda_repeat_date";
	$fdata["Label"] = GetFieldLabel("personal_agenda_repeat_date","id_group_repeat");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_group_repeat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_group_repeat";

	
	
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


	$tdatapersonal_agenda_repeat_date["id_group_repeat"] = $fdata;
		$tdatapersonal_agenda_repeat_date[".searchableFields"][] = "id_group_repeat";
//	member_agenda_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "member_agenda_id";
	$fdata["GoodName"] = "member_agenda_id";
	$fdata["ownerTable"] = "personal_agenda_repeat_date";
	$fdata["Label"] = GetFieldLabel("personal_agenda_repeat_date","member_agenda_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "member_agenda_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "member_agenda_id";

	
	
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
	$edata["LookupTable"] = "personal_agenda";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "member_agenda_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "message_content";

	

	
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


	$tdatapersonal_agenda_repeat_date["member_agenda_id"] = $fdata;
		$tdatapersonal_agenda_repeat_date[".searchableFields"][] = "member_agenda_id";
//	dodate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dodate";
	$fdata["GoodName"] = "dodate";
	$fdata["ownerTable"] = "personal_agenda_repeat_date";
	$fdata["Label"] = GetFieldLabel("personal_agenda_repeat_date","dodate");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "dodate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dodate";

	
	
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


	$tdatapersonal_agenda_repeat_date["dodate"] = $fdata;
		$tdatapersonal_agenda_repeat_date[".searchableFields"][] = "dodate";


$tables_data["personal_agenda_repeat_date"]=&$tdatapersonal_agenda_repeat_date;
$field_labels["personal_agenda_repeat_date"] = &$fieldLabelspersonal_agenda_repeat_date;
$fieldToolTips["personal_agenda_repeat_date"] = &$fieldToolTipspersonal_agenda_repeat_date;
$placeHolders["personal_agenda_repeat_date"] = &$placeHolderspersonal_agenda_repeat_date;
$page_titles["personal_agenda_repeat_date"] = &$pageTitlespersonal_agenda_repeat_date;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["personal_agenda_repeat_date"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["personal_agenda_repeat_date"] = array();



	
				$strOriginalDetailsTable="personal_agenda";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal_agenda";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal_agenda";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["personal_agenda_repeat_date"][0] = $masterParams;
				$masterTablesData["personal_agenda_repeat_date"][0]["masterKeys"] = array();
	$masterTablesData["personal_agenda_repeat_date"][0]["masterKeys"][]="member_agenda_id";
				$masterTablesData["personal_agenda_repeat_date"][0]["detailKeys"] = array();
	$masterTablesData["personal_agenda_repeat_date"][0]["detailKeys"][]="member_agenda_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_personal_agenda_repeat_date()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_group_repeat,  	member_agenda_id,  	dodate";
$proto0["m_strFrom"] = "FROM personal_agenda_repeat_date";
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
	"m_strName" => "id_group_repeat",
	"m_strTable" => "personal_agenda_repeat_date",
	"m_srcTableName" => "personal_agenda_repeat_date"
));

$proto6["m_sql"] = "id_group_repeat";
$proto6["m_srcTableName"] = "personal_agenda_repeat_date";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "member_agenda_id",
	"m_strTable" => "personal_agenda_repeat_date",
	"m_srcTableName" => "personal_agenda_repeat_date"
));

$proto8["m_sql"] = "member_agenda_id";
$proto8["m_srcTableName"] = "personal_agenda_repeat_date";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dodate",
	"m_strTable" => "personal_agenda_repeat_date",
	"m_srcTableName" => "personal_agenda_repeat_date"
));

$proto10["m_sql"] = "dodate";
$proto10["m_srcTableName"] = "personal_agenda_repeat_date";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "personal_agenda_repeat_date";
$proto13["m_srcTableName"] = "personal_agenda_repeat_date";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_group_repeat";
$proto13["m_columns"][] = "member_agenda_id";
$proto13["m_columns"][] = "dodate";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "personal_agenda_repeat_date";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "personal_agenda_repeat_date";
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
$proto0["m_srcTableName"]="personal_agenda_repeat_date";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_personal_agenda_repeat_date = createSqlQuery_personal_agenda_repeat_date();


	
		;

			

$tdatapersonal_agenda_repeat_date[".sqlquery"] = $queryData_personal_agenda_repeat_date;



$tableEvents["personal_agenda_repeat_date"] = new eventsBase;
$tdatapersonal_agenda_repeat_date[".hasEvents"] = false;

?>