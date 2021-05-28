<?php
$tdatabusiness_type = array();
$tdatabusiness_type[".searchableFields"] = array();
$tdatabusiness_type[".ShortName"] = "business_type";
$tdatabusiness_type[".OwnerID"] = "";
$tdatabusiness_type[".OriginalTable"] = "business_type";


$tdatabusiness_type[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabusiness_type[".originalPagesByType"] = $tdatabusiness_type[".pagesByType"];
$tdatabusiness_type[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabusiness_type[".originalPages"] = $tdatabusiness_type[".pages"];
$tdatabusiness_type[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabusiness_type[".originalDefaultPages"] = $tdatabusiness_type[".defaultPages"];

//	field labels
$fieldLabelsbusiness_type = array();
$fieldToolTipsbusiness_type = array();
$pageTitlesbusiness_type = array();
$placeHoldersbusiness_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbusiness_type["English"] = array();
	$fieldToolTipsbusiness_type["English"] = array();
	$placeHoldersbusiness_type["English"] = array();
	$pageTitlesbusiness_type["English"] = array();
	$fieldLabelsbusiness_type["English"]["business_type_id"] = "Business Type Id";
	$fieldToolTipsbusiness_type["English"]["business_type_id"] = "";
	$placeHoldersbusiness_type["English"]["business_type_id"] = "";
	$fieldLabelsbusiness_type["English"]["business_type"] = "Business Type";
	$fieldToolTipsbusiness_type["English"]["business_type"] = "";
	$placeHoldersbusiness_type["English"]["business_type"] = "";
	if (count($fieldToolTipsbusiness_type["English"]))
		$tdatabusiness_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsbusiness_type["Indonesian"] = array();
	$fieldToolTipsbusiness_type["Indonesian"] = array();
	$placeHoldersbusiness_type["Indonesian"] = array();
	$pageTitlesbusiness_type["Indonesian"] = array();
	$fieldLabelsbusiness_type["Indonesian"]["business_type_id"] = "Business Type Id";
	$fieldToolTipsbusiness_type["Indonesian"]["business_type_id"] = "";
	$placeHoldersbusiness_type["Indonesian"]["business_type_id"] = "";
	$fieldLabelsbusiness_type["Indonesian"]["business_type"] = "Business Type";
	$fieldToolTipsbusiness_type["Indonesian"]["business_type"] = "";
	$placeHoldersbusiness_type["Indonesian"]["business_type"] = "";
	if (count($fieldToolTipsbusiness_type["Indonesian"]))
		$tdatabusiness_type[".isUseToolTips"] = true;
}


	$tdatabusiness_type[".NCSearch"] = true;



$tdatabusiness_type[".shortTableName"] = "business_type";
$tdatabusiness_type[".nSecOptions"] = 0;

$tdatabusiness_type[".mainTableOwnerID"] = "";
$tdatabusiness_type[".entityType"] = 0;
$tdatabusiness_type[".connId"] = "notif_basic1_at_localhost";


$tdatabusiness_type[".strOriginalTableName"] = "business_type";

	



$tdatabusiness_type[".showAddInPopup"] = false;

$tdatabusiness_type[".showEditInPopup"] = false;

$tdatabusiness_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabusiness_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabusiness_type[".listAjax"] = false;
//	temporary
$tdatabusiness_type[".listAjax"] = false;

	$tdatabusiness_type[".audit"] = false;

	$tdatabusiness_type[".locking"] = false;


$pages = $tdatabusiness_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabusiness_type[".edit"] = true;
	$tdatabusiness_type[".afterEditAction"] = 1;
	$tdatabusiness_type[".closePopupAfterEdit"] = 1;
	$tdatabusiness_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabusiness_type[".add"] = true;
$tdatabusiness_type[".afterAddAction"] = 1;
$tdatabusiness_type[".closePopupAfterAdd"] = 1;
$tdatabusiness_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabusiness_type[".list"] = true;
}



$tdatabusiness_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabusiness_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabusiness_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabusiness_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabusiness_type[".printFriendly"] = true;
}



$tdatabusiness_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabusiness_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabusiness_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabusiness_type[".isUseAjaxSuggest"] = true;

$tdatabusiness_type[".rowHighlite"] = true;





$tdatabusiness_type[".ajaxCodeSnippetAdded"] = false;

$tdatabusiness_type[".buttonsAdded"] = false;

$tdatabusiness_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabusiness_type[".isUseTimeForSearch"] = false;


$tdatabusiness_type[".badgeColor"] = "8FBC8B";


$tdatabusiness_type[".allSearchFields"] = array();
$tdatabusiness_type[".filterFields"] = array();
$tdatabusiness_type[".requiredSearchFields"] = array();

$tdatabusiness_type[".googleLikeFields"] = array();
$tdatabusiness_type[".googleLikeFields"][] = "business_type_id";
$tdatabusiness_type[".googleLikeFields"][] = "business_type";



$tdatabusiness_type[".tableType"] = "list";

$tdatabusiness_type[".printerPageOrientation"] = 0;
$tdatabusiness_type[".nPrinterPageScale"] = 100;

$tdatabusiness_type[".nPrinterSplitRecords"] = 40;

$tdatabusiness_type[".geocodingEnabled"] = false;










$tdatabusiness_type[".pageSize"] = 20;

$tdatabusiness_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabusiness_type[".strOrderBy"] = $tstrOrderBy;

$tdatabusiness_type[".orderindexes"] = array();


$tdatabusiness_type[".sqlHead"] = "SELECT business_type_id,  	business_type";
$tdatabusiness_type[".sqlFrom"] = "FROM business_type";
$tdatabusiness_type[".sqlWhereExpr"] = "";
$tdatabusiness_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabusiness_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabusiness_type[".arrGroupsPerPage"] = $arrGPP;

$tdatabusiness_type[".highlightSearchResults"] = true;

$tableKeysbusiness_type = array();
$tableKeysbusiness_type[] = "business_type_id";
$tdatabusiness_type[".Keys"] = $tableKeysbusiness_type;


$tdatabusiness_type[".hideMobileList"] = array();




//	business_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "business_type_id";
	$fdata["GoodName"] = "business_type_id";
	$fdata["ownerTable"] = "business_type";
	$fdata["Label"] = GetFieldLabel("business_type","business_type_id");
	$fdata["FieldType"] = 16;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "business_type_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "business_type_id";

	
	
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


	$tdatabusiness_type["business_type_id"] = $fdata;
		$tdatabusiness_type[".searchableFields"][] = "business_type_id";
//	business_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "business_type";
	$fdata["GoodName"] = "business_type";
	$fdata["ownerTable"] = "business_type";
	$fdata["Label"] = GetFieldLabel("business_type","business_type");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "business_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "business_type";

	
	
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


	$tdatabusiness_type["business_type"] = $fdata;
		$tdatabusiness_type[".searchableFields"][] = "business_type";


$tables_data["business_type"]=&$tdatabusiness_type;
$field_labels["business_type"] = &$fieldLabelsbusiness_type;
$fieldToolTips["business_type"] = &$fieldToolTipsbusiness_type;
$placeHolders["business_type"] = &$placeHoldersbusiness_type;
$page_titles["business_type"] = &$pageTitlesbusiness_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["business_type"] = array();
//	group
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group";
		$detailsParam["dOriginalTable"] = "group";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group";
	$detailsParam["dCaptionTable"] = GetTableCaption("group");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["business_type"][$dIndex] = $detailsParam;

	
		$detailsTablesData["business_type"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["business_type"][$dIndex]["masterKeys"][]="business_type_id";

				$detailsTablesData["business_type"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["business_type"][$dIndex]["detailKeys"][]="business_type";

// tables which are master tables for current table (detail)
$masterTablesData["business_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_business_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "business_type_id,  	business_type";
$proto0["m_strFrom"] = "FROM business_type";
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
	"m_strName" => "business_type_id",
	"m_strTable" => "business_type",
	"m_srcTableName" => "business_type"
));

$proto6["m_sql"] = "business_type_id";
$proto6["m_srcTableName"] = "business_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "business_type",
	"m_strTable" => "business_type",
	"m_srcTableName" => "business_type"
));

$proto8["m_sql"] = "business_type";
$proto8["m_srcTableName"] = "business_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "business_type";
$proto11["m_srcTableName"] = "business_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "business_type_id";
$proto11["m_columns"][] = "business_type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "business_type";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "business_type";
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
$proto0["m_srcTableName"]="business_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_business_type = createSqlQuery_business_type();


	
		;

		

$tdatabusiness_type[".sqlquery"] = $queryData_business_type;



$tableEvents["business_type"] = new eventsBase;
$tdatabusiness_type[".hasEvents"] = false;

?>