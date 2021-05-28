<?php
$tdatacountry = array();
$tdatacountry[".searchableFields"] = array();
$tdatacountry[".ShortName"] = "country";
$tdatacountry[".OwnerID"] = "";
$tdatacountry[".OriginalTable"] = "country";


$tdatacountry[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacountry[".originalPagesByType"] = $tdatacountry[".pagesByType"];
$tdatacountry[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacountry[".originalPages"] = $tdatacountry[".pages"];
$tdatacountry[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacountry[".originalDefaultPages"] = $tdatacountry[".defaultPages"];

//	field labels
$fieldLabelscountry = array();
$fieldToolTipscountry = array();
$pageTitlescountry = array();
$placeHolderscountry = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscountry["English"] = array();
	$fieldToolTipscountry["English"] = array();
	$placeHolderscountry["English"] = array();
	$pageTitlescountry["English"] = array();
	$fieldLabelscountry["English"]["country_id"] = "Country Id";
	$fieldToolTipscountry["English"]["country_id"] = "";
	$placeHolderscountry["English"]["country_id"] = "";
	$fieldLabelscountry["English"]["country_name"] = "Country Name";
	$fieldToolTipscountry["English"]["country_name"] = "";
	$placeHolderscountry["English"]["country_name"] = "";
	$fieldLabelscountry["English"]["sortname"] = "Sortname";
	$fieldToolTipscountry["English"]["sortname"] = "";
	$placeHolderscountry["English"]["sortname"] = "";
	$fieldLabelscountry["English"]["phonecode"] = "Phonecode";
	$fieldToolTipscountry["English"]["phonecode"] = "";
	$placeHolderscountry["English"]["phonecode"] = "";
	if (count($fieldToolTipscountry["English"]))
		$tdatacountry[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelscountry["Indonesian"] = array();
	$fieldToolTipscountry["Indonesian"] = array();
	$placeHolderscountry["Indonesian"] = array();
	$pageTitlescountry["Indonesian"] = array();
	$fieldLabelscountry["Indonesian"]["country_id"] = "Country Id";
	$fieldToolTipscountry["Indonesian"]["country_id"] = "";
	$placeHolderscountry["Indonesian"]["country_id"] = "";
	$fieldLabelscountry["Indonesian"]["country_name"] = "Country Name";
	$fieldToolTipscountry["Indonesian"]["country_name"] = "";
	$placeHolderscountry["Indonesian"]["country_name"] = "";
	$fieldLabelscountry["Indonesian"]["sortname"] = "Sortname";
	$fieldToolTipscountry["Indonesian"]["sortname"] = "";
	$placeHolderscountry["Indonesian"]["sortname"] = "";
	$fieldLabelscountry["Indonesian"]["phonecode"] = "Phonecode";
	$fieldToolTipscountry["Indonesian"]["phonecode"] = "";
	$placeHolderscountry["Indonesian"]["phonecode"] = "";
	if (count($fieldToolTipscountry["Indonesian"]))
		$tdatacountry[".isUseToolTips"] = true;
}


	$tdatacountry[".NCSearch"] = true;



$tdatacountry[".shortTableName"] = "country";
$tdatacountry[".nSecOptions"] = 0;

$tdatacountry[".mainTableOwnerID"] = "";
$tdatacountry[".entityType"] = 0;
$tdatacountry[".connId"] = "notif_basic1_at_localhost";


$tdatacountry[".strOriginalTableName"] = "country";

	



$tdatacountry[".showAddInPopup"] = false;

$tdatacountry[".showEditInPopup"] = false;

$tdatacountry[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacountry[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacountry[".listAjax"] = false;
//	temporary
$tdatacountry[".listAjax"] = false;

	$tdatacountry[".audit"] = false;

	$tdatacountry[".locking"] = false;


$pages = $tdatacountry[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacountry[".edit"] = true;
	$tdatacountry[".afterEditAction"] = 1;
	$tdatacountry[".closePopupAfterEdit"] = 1;
	$tdatacountry[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacountry[".add"] = true;
$tdatacountry[".afterAddAction"] = 1;
$tdatacountry[".closePopupAfterAdd"] = 1;
$tdatacountry[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacountry[".list"] = true;
}



$tdatacountry[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacountry[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacountry[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacountry[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacountry[".printFriendly"] = true;
}



$tdatacountry[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacountry[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacountry[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacountry[".isUseAjaxSuggest"] = true;

$tdatacountry[".rowHighlite"] = true;





$tdatacountry[".ajaxCodeSnippetAdded"] = false;

$tdatacountry[".buttonsAdded"] = false;

$tdatacountry[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacountry[".isUseTimeForSearch"] = false;


$tdatacountry[".badgeColor"] = "D2AF80";


$tdatacountry[".allSearchFields"] = array();
$tdatacountry[".filterFields"] = array();
$tdatacountry[".requiredSearchFields"] = array();

$tdatacountry[".googleLikeFields"] = array();
$tdatacountry[".googleLikeFields"][] = "country_id";
$tdatacountry[".googleLikeFields"][] = "country_name";
$tdatacountry[".googleLikeFields"][] = "sortname";
$tdatacountry[".googleLikeFields"][] = "phonecode";



$tdatacountry[".tableType"] = "list";

$tdatacountry[".printerPageOrientation"] = 0;
$tdatacountry[".nPrinterPageScale"] = 100;

$tdatacountry[".nPrinterSplitRecords"] = 40;

$tdatacountry[".geocodingEnabled"] = false;










$tdatacountry[".pageSize"] = 20;

$tdatacountry[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacountry[".strOrderBy"] = $tstrOrderBy;

$tdatacountry[".orderindexes"] = array();


$tdatacountry[".sqlHead"] = "SELECT country_id,  	country_name,  	sortname,  	phonecode";
$tdatacountry[".sqlFrom"] = "FROM country";
$tdatacountry[".sqlWhereExpr"] = "";
$tdatacountry[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacountry[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacountry[".arrGroupsPerPage"] = $arrGPP;

$tdatacountry[".highlightSearchResults"] = true;

$tableKeyscountry = array();
$tableKeyscountry[] = "country_id";
$tdatacountry[".Keys"] = $tableKeyscountry;


$tdatacountry[".hideMobileList"] = array();




//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "country";
	$fdata["Label"] = GetFieldLabel("country","country_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "country_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_id";

	
	
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


	$tdatacountry["country_id"] = $fdata;
		$tdatacountry[".searchableFields"][] = "country_id";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "country";
	$fdata["Label"] = GetFieldLabel("country","country_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "country_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_name";

	
	
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


	$tdatacountry["country_name"] = $fdata;
		$tdatacountry[".searchableFields"][] = "country_name";
//	sortname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sortname";
	$fdata["GoodName"] = "sortname";
	$fdata["ownerTable"] = "country";
	$fdata["Label"] = GetFieldLabel("country","sortname");
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


	$tdatacountry["sortname"] = $fdata;
		$tdatacountry[".searchableFields"][] = "sortname";
//	phonecode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "phonecode";
	$fdata["GoodName"] = "phonecode";
	$fdata["ownerTable"] = "country";
	$fdata["Label"] = GetFieldLabel("country","phonecode");
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


	$tdatacountry["phonecode"] = $fdata;
		$tdatacountry[".searchableFields"][] = "phonecode";


$tables_data["country"]=&$tdatacountry;
$field_labels["country"] = &$fieldLabelscountry;
$fieldToolTips["country"] = &$fieldToolTipscountry;
$placeHolders["country"] = &$placeHolderscountry;
$page_titles["country"] = &$pageTitlescountry;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["country"] = array();
//	province
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="province";
		$detailsParam["dOriginalTable"] = "province";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "province";
	$detailsParam["dCaptionTable"] = GetTableCaption("province");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["country"][$dIndex] = $detailsParam;

	
		$detailsTablesData["country"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["country"][$dIndex]["masterKeys"][]="country_id";

				$detailsTablesData["country"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["country"][$dIndex]["detailKeys"][]="country_id";
//	personal
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="personal";
		$detailsParam["dOriginalTable"] = "personal";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "personal";
	$detailsParam["dCaptionTable"] = GetTableCaption("personal");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["country"][$dIndex] = $detailsParam;

	
		$detailsTablesData["country"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["country"][$dIndex]["masterKeys"][]="country_id";

				$detailsTablesData["country"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["country"][$dIndex]["detailKeys"][]="country_id";

// tables which are master tables for current table (detail)
$masterTablesData["country"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_country()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "country_id,  	country_name,  	sortname,  	phonecode";
$proto0["m_strFrom"] = "FROM country";
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
	"m_strName" => "country_id",
	"m_strTable" => "country",
	"m_srcTableName" => "country"
));

$proto6["m_sql"] = "country_id";
$proto6["m_srcTableName"] = "country";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "country",
	"m_srcTableName" => "country"
));

$proto8["m_sql"] = "country_name";
$proto8["m_srcTableName"] = "country";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sortname",
	"m_strTable" => "country",
	"m_srcTableName" => "country"
));

$proto10["m_sql"] = "sortname";
$proto10["m_srcTableName"] = "country";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "phonecode",
	"m_strTable" => "country",
	"m_srcTableName" => "country"
));

$proto12["m_sql"] = "phonecode";
$proto12["m_srcTableName"] = "country";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "country";
$proto15["m_srcTableName"] = "country";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "country_id";
$proto15["m_columns"][] = "country_name";
$proto15["m_columns"][] = "sortname";
$proto15["m_columns"][] = "phonecode";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "country";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "country";
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
$proto0["m_srcTableName"]="country";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_country = createSqlQuery_country();


	
		;

				

$tdatacountry[".sqlquery"] = $queryData_country;



$tableEvents["country"] = new eventsBase;
$tdatacountry[".hasEvents"] = false;

?>