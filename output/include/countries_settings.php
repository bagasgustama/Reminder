<?php
$tdatacountries = array();
$tdatacountries[".searchableFields"] = array();
$tdatacountries[".ShortName"] = "countries";
$tdatacountries[".OwnerID"] = "";
$tdatacountries[".OriginalTable"] = "countries";


$tdatacountries[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacountries[".originalPagesByType"] = $tdatacountries[".pagesByType"];
$tdatacountries[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacountries[".originalPages"] = $tdatacountries[".pages"];
$tdatacountries[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacountries[".originalDefaultPages"] = $tdatacountries[".defaultPages"];

//	field labels
$fieldLabelscountries = array();
$fieldToolTipscountries = array();
$pageTitlescountries = array();
$placeHolderscountries = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscountries["English"] = array();
	$fieldToolTipscountries["English"] = array();
	$placeHolderscountries["English"] = array();
	$pageTitlescountries["English"] = array();
	$fieldLabelscountries["English"]["id"] = "Id";
	$fieldToolTipscountries["English"]["id"] = "";
	$placeHolderscountries["English"]["id"] = "";
	$fieldLabelscountries["English"]["sortname"] = "Sortname";
	$fieldToolTipscountries["English"]["sortname"] = "";
	$placeHolderscountries["English"]["sortname"] = "";
	$fieldLabelscountries["English"]["name"] = "Name";
	$fieldToolTipscountries["English"]["name"] = "";
	$placeHolderscountries["English"]["name"] = "";
	$fieldLabelscountries["English"]["phonecode"] = "Phonecode";
	$fieldToolTipscountries["English"]["phonecode"] = "";
	$placeHolderscountries["English"]["phonecode"] = "";
	if (count($fieldToolTipscountries["English"]))
		$tdatacountries[".isUseToolTips"] = true;
}


	$tdatacountries[".NCSearch"] = true;



$tdatacountries[".shortTableName"] = "countries";
$tdatacountries[".nSecOptions"] = 0;

$tdatacountries[".mainTableOwnerID"] = "";
$tdatacountries[".entityType"] = 0;
$tdatacountries[".connId"] = "notif_basic1_at_localhost";


$tdatacountries[".strOriginalTableName"] = "countries";

	



$tdatacountries[".showAddInPopup"] = false;

$tdatacountries[".showEditInPopup"] = false;

$tdatacountries[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacountries[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacountries[".listAjax"] = false;
//	temporary
$tdatacountries[".listAjax"] = false;

	$tdatacountries[".audit"] = false;

	$tdatacountries[".locking"] = false;


$pages = $tdatacountries[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacountries[".edit"] = true;
	$tdatacountries[".afterEditAction"] = 1;
	$tdatacountries[".closePopupAfterEdit"] = 1;
	$tdatacountries[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacountries[".add"] = true;
$tdatacountries[".afterAddAction"] = 1;
$tdatacountries[".closePopupAfterAdd"] = 1;
$tdatacountries[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacountries[".list"] = true;
}



$tdatacountries[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacountries[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacountries[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacountries[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacountries[".printFriendly"] = true;
}



$tdatacountries[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacountries[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacountries[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacountries[".isUseAjaxSuggest"] = true;

$tdatacountries[".rowHighlite"] = true;





$tdatacountries[".ajaxCodeSnippetAdded"] = false;

$tdatacountries[".buttonsAdded"] = false;

$tdatacountries[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacountries[".isUseTimeForSearch"] = false;


$tdatacountries[".badgeColor"] = "D2691E";


$tdatacountries[".allSearchFields"] = array();
$tdatacountries[".filterFields"] = array();
$tdatacountries[".requiredSearchFields"] = array();

$tdatacountries[".googleLikeFields"] = array();
$tdatacountries[".googleLikeFields"][] = "id";
$tdatacountries[".googleLikeFields"][] = "sortname";
$tdatacountries[".googleLikeFields"][] = "name";
$tdatacountries[".googleLikeFields"][] = "phonecode";



$tdatacountries[".tableType"] = "list";

$tdatacountries[".printerPageOrientation"] = 0;
$tdatacountries[".nPrinterPageScale"] = 100;

$tdatacountries[".nPrinterSplitRecords"] = 40;

$tdatacountries[".geocodingEnabled"] = false;










$tdatacountries[".pageSize"] = 20;

$tdatacountries[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacountries[".strOrderBy"] = $tstrOrderBy;

$tdatacountries[".orderindexes"] = array();


$tdatacountries[".sqlHead"] = "SELECT id,  	sortname,  	name,  	phonecode";
$tdatacountries[".sqlFrom"] = "FROM countries";
$tdatacountries[".sqlWhereExpr"] = "";
$tdatacountries[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacountries[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacountries[".arrGroupsPerPage"] = $arrGPP;

$tdatacountries[".highlightSearchResults"] = true;

$tableKeyscountries = array();
$tableKeyscountries[] = "id";
$tdatacountries[".Keys"] = $tableKeyscountries;


$tdatacountries[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "countries";
	$fdata["Label"] = GetFieldLabel("countries","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatacountries["id"] = $fdata;
		$tdatacountries[".searchableFields"][] = "id";
//	sortname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sortname";
	$fdata["GoodName"] = "sortname";
	$fdata["ownerTable"] = "countries";
	$fdata["Label"] = GetFieldLabel("countries","sortname");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sortname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sortname";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdatacountries["sortname"] = $fdata;
		$tdatacountries[".searchableFields"][] = "sortname";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "countries";
	$fdata["Label"] = GetFieldLabel("countries","name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatacountries["name"] = $fdata;
		$tdatacountries[".searchableFields"][] = "name";
//	phonecode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "phonecode";
	$fdata["GoodName"] = "phonecode";
	$fdata["ownerTable"] = "countries";
	$fdata["Label"] = GetFieldLabel("countries","phonecode");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "phonecode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phonecode";

	
	
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


	$tdatacountries["phonecode"] = $fdata;
		$tdatacountries[".searchableFields"][] = "phonecode";


$tables_data["countries"]=&$tdatacountries;
$field_labels["countries"] = &$fieldLabelscountries;
$fieldToolTips["countries"] = &$fieldToolTipscountries;
$placeHolders["countries"] = &$placeHolderscountries;
$page_titles["countries"] = &$pageTitlescountries;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["countries"] = array();
//	states
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="states";
		$detailsParam["dOriginalTable"] = "states";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "states";
	$detailsParam["dCaptionTable"] = GetTableCaption("states");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["countries"][$dIndex] = $detailsParam;

	
		$detailsTablesData["countries"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["countries"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["countries"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["countries"][$dIndex]["detailKeys"][]="country_id";

// tables which are master tables for current table (detail)
$masterTablesData["countries"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_countries()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	sortname,  	name,  	phonecode";
$proto0["m_strFrom"] = "FROM countries";
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
	"m_strName" => "id",
	"m_strTable" => "countries",
	"m_srcTableName" => "countries"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "countries";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sortname",
	"m_strTable" => "countries",
	"m_srcTableName" => "countries"
));

$proto8["m_sql"] = "sortname";
$proto8["m_srcTableName"] = "countries";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "countries",
	"m_srcTableName" => "countries"
));

$proto10["m_sql"] = "name";
$proto10["m_srcTableName"] = "countries";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "phonecode",
	"m_strTable" => "countries",
	"m_srcTableName" => "countries"
));

$proto12["m_sql"] = "phonecode";
$proto12["m_srcTableName"] = "countries";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "countries";
$proto15["m_srcTableName"] = "countries";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "sortname";
$proto15["m_columns"][] = "name";
$proto15["m_columns"][] = "phonecode";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "countries";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "countries";
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
$proto0["m_srcTableName"]="countries";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_countries = createSqlQuery_countries();


	
		;

				

$tdatacountries[".sqlquery"] = $queryData_countries;



$tableEvents["countries"] = new eventsBase;
$tdatacountries[".hasEvents"] = false;

?>