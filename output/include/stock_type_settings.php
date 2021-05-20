<?php
$tdatastock_type = array();
$tdatastock_type[".searchableFields"] = array();
$tdatastock_type[".ShortName"] = "stock_type";
$tdatastock_type[".OwnerID"] = "";
$tdatastock_type[".OriginalTable"] = "stock_type";


$tdatastock_type[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatastock_type[".originalPagesByType"] = $tdatastock_type[".pagesByType"];
$tdatastock_type[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatastock_type[".originalPages"] = $tdatastock_type[".pages"];
$tdatastock_type[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatastock_type[".originalDefaultPages"] = $tdatastock_type[".defaultPages"];

//	field labels
$fieldLabelsstock_type = array();
$fieldToolTipsstock_type = array();
$pageTitlesstock_type = array();
$placeHoldersstock_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstock_type["English"] = array();
	$fieldToolTipsstock_type["English"] = array();
	$placeHoldersstock_type["English"] = array();
	$pageTitlesstock_type["English"] = array();
	$fieldLabelsstock_type["English"]["stock_type_id"] = "Stock Type Id";
	$fieldToolTipsstock_type["English"]["stock_type_id"] = "";
	$placeHoldersstock_type["English"]["stock_type_id"] = "";
	$fieldLabelsstock_type["English"]["stock_type"] = "Stock Type";
	$fieldToolTipsstock_type["English"]["stock_type"] = "";
	$placeHoldersstock_type["English"]["stock_type"] = "";
	if (count($fieldToolTipsstock_type["English"]))
		$tdatastock_type[".isUseToolTips"] = true;
}


	$tdatastock_type[".NCSearch"] = true;



$tdatastock_type[".shortTableName"] = "stock_type";
$tdatastock_type[".nSecOptions"] = 0;

$tdatastock_type[".mainTableOwnerID"] = "";
$tdatastock_type[".entityType"] = 0;
$tdatastock_type[".connId"] = "notif_basic1_at_localhost";


$tdatastock_type[".strOriginalTableName"] = "stock_type";

	



$tdatastock_type[".showAddInPopup"] = false;

$tdatastock_type[".showEditInPopup"] = false;

$tdatastock_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatastock_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatastock_type[".listAjax"] = false;
//	temporary
$tdatastock_type[".listAjax"] = false;

	$tdatastock_type[".audit"] = false;

	$tdatastock_type[".locking"] = false;


$pages = $tdatastock_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastock_type[".edit"] = true;
	$tdatastock_type[".afterEditAction"] = 1;
	$tdatastock_type[".closePopupAfterEdit"] = 1;
	$tdatastock_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatastock_type[".add"] = true;
$tdatastock_type[".afterAddAction"] = 1;
$tdatastock_type[".closePopupAfterAdd"] = 1;
$tdatastock_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatastock_type[".list"] = true;
}



$tdatastock_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastock_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastock_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastock_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastock_type[".printFriendly"] = true;
}



$tdatastock_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastock_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastock_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastock_type[".isUseAjaxSuggest"] = true;

$tdatastock_type[".rowHighlite"] = true;





$tdatastock_type[".ajaxCodeSnippetAdded"] = false;

$tdatastock_type[".buttonsAdded"] = false;

$tdatastock_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastock_type[".isUseTimeForSearch"] = false;


$tdatastock_type[".badgeColor"] = "778899";


$tdatastock_type[".allSearchFields"] = array();
$tdatastock_type[".filterFields"] = array();
$tdatastock_type[".requiredSearchFields"] = array();

$tdatastock_type[".googleLikeFields"] = array();
$tdatastock_type[".googleLikeFields"][] = "stock_type_id";
$tdatastock_type[".googleLikeFields"][] = "stock_type";



$tdatastock_type[".tableType"] = "list";

$tdatastock_type[".printerPageOrientation"] = 0;
$tdatastock_type[".nPrinterPageScale"] = 100;

$tdatastock_type[".nPrinterSplitRecords"] = 40;

$tdatastock_type[".geocodingEnabled"] = false;










$tdatastock_type[".pageSize"] = 20;

$tdatastock_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastock_type[".strOrderBy"] = $tstrOrderBy;

$tdatastock_type[".orderindexes"] = array();


$tdatastock_type[".sqlHead"] = "SELECT stock_type_id,  	stock_type";
$tdatastock_type[".sqlFrom"] = "FROM stock_type";
$tdatastock_type[".sqlWhereExpr"] = "";
$tdatastock_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastock_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastock_type[".arrGroupsPerPage"] = $arrGPP;

$tdatastock_type[".highlightSearchResults"] = true;

$tableKeysstock_type = array();
$tableKeysstock_type[] = "stock_type_id";
$tdatastock_type[".Keys"] = $tableKeysstock_type;


$tdatastock_type[".hideMobileList"] = array();




//	stock_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "stock_type_id";
	$fdata["GoodName"] = "stock_type_id";
	$fdata["ownerTable"] = "stock_type";
	$fdata["Label"] = GetFieldLabel("stock_type","stock_type_id");
	$fdata["FieldType"] = 16;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "stock_type_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stock_type_id";

	
	
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


	$tdatastock_type["stock_type_id"] = $fdata;
		$tdatastock_type[".searchableFields"][] = "stock_type_id";
//	stock_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "stock_type";
	$fdata["GoodName"] = "stock_type";
	$fdata["ownerTable"] = "stock_type";
	$fdata["Label"] = GetFieldLabel("stock_type","stock_type");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "stock_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stock_type";

	
	
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


	$tdatastock_type["stock_type"] = $fdata;
		$tdatastock_type[".searchableFields"][] = "stock_type";


$tables_data["stock_type"]=&$tdatastock_type;
$field_labels["stock_type"] = &$fieldLabelsstock_type;
$fieldToolTips["stock_type"] = &$fieldToolTipsstock_type;
$placeHolders["stock_type"] = &$placeHoldersstock_type;
$page_titles["stock_type"] = &$pageTitlesstock_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["stock_type"] = array();
//	group_product
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_product";
		$detailsParam["dOriginalTable"] = "group_product";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_product";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_product");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["stock_type"][$dIndex] = $detailsParam;

	
		$detailsTablesData["stock_type"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["stock_type"][$dIndex]["masterKeys"][]="stock_type_id";

				$detailsTablesData["stock_type"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["stock_type"][$dIndex]["detailKeys"][]="stock_type";

// tables which are master tables for current table (detail)
$masterTablesData["stock_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_stock_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "stock_type_id,  	stock_type";
$proto0["m_strFrom"] = "FROM stock_type";
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
	"m_strName" => "stock_type_id",
	"m_strTable" => "stock_type",
	"m_srcTableName" => "stock_type"
));

$proto6["m_sql"] = "stock_type_id";
$proto6["m_srcTableName"] = "stock_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "stock_type",
	"m_strTable" => "stock_type",
	"m_srcTableName" => "stock_type"
));

$proto8["m_sql"] = "stock_type";
$proto8["m_srcTableName"] = "stock_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "stock_type";
$proto11["m_srcTableName"] = "stock_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "stock_type_id";
$proto11["m_columns"][] = "stock_type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "stock_type";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "stock_type";
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
$proto0["m_srcTableName"]="stock_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_stock_type = createSqlQuery_stock_type();


	
		;

		

$tdatastock_type[".sqlquery"] = $queryData_stock_type;



$tableEvents["stock_type"] = new eventsBase;
$tdatastock_type[".hasEvents"] = false;

?>