<?php
$tdataorder_type = array();
$tdataorder_type[".searchableFields"] = array();
$tdataorder_type[".ShortName"] = "order_type";
$tdataorder_type[".OwnerID"] = "";
$tdataorder_type[".OriginalTable"] = "order_type";


$tdataorder_type[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataorder_type[".originalPagesByType"] = $tdataorder_type[".pagesByType"];
$tdataorder_type[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataorder_type[".originalPages"] = $tdataorder_type[".pages"];
$tdataorder_type[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataorder_type[".originalDefaultPages"] = $tdataorder_type[".defaultPages"];

//	field labels
$fieldLabelsorder_type = array();
$fieldToolTipsorder_type = array();
$pageTitlesorder_type = array();
$placeHoldersorder_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsorder_type["English"] = array();
	$fieldToolTipsorder_type["English"] = array();
	$placeHoldersorder_type["English"] = array();
	$pageTitlesorder_type["English"] = array();
	$fieldLabelsorder_type["English"]["order_type_id"] = "Order Type Id";
	$fieldToolTipsorder_type["English"]["order_type_id"] = "";
	$placeHoldersorder_type["English"]["order_type_id"] = "";
	$fieldLabelsorder_type["English"]["order_type"] = "Order Type";
	$fieldToolTipsorder_type["English"]["order_type"] = "";
	$placeHoldersorder_type["English"]["order_type"] = "";
	if (count($fieldToolTipsorder_type["English"]))
		$tdataorder_type[".isUseToolTips"] = true;
}


	$tdataorder_type[".NCSearch"] = true;



$tdataorder_type[".shortTableName"] = "order_type";
$tdataorder_type[".nSecOptions"] = 0;

$tdataorder_type[".mainTableOwnerID"] = "";
$tdataorder_type[".entityType"] = 0;
$tdataorder_type[".connId"] = "notif_basic1_at_localhost";


$tdataorder_type[".strOriginalTableName"] = "order_type";

	



$tdataorder_type[".showAddInPopup"] = false;

$tdataorder_type[".showEditInPopup"] = false;

$tdataorder_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataorder_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataorder_type[".listAjax"] = false;
//	temporary
$tdataorder_type[".listAjax"] = false;

	$tdataorder_type[".audit"] = false;

	$tdataorder_type[".locking"] = false;


$pages = $tdataorder_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataorder_type[".edit"] = true;
	$tdataorder_type[".afterEditAction"] = 1;
	$tdataorder_type[".closePopupAfterEdit"] = 1;
	$tdataorder_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataorder_type[".add"] = true;
$tdataorder_type[".afterAddAction"] = 1;
$tdataorder_type[".closePopupAfterAdd"] = 1;
$tdataorder_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataorder_type[".list"] = true;
}



$tdataorder_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataorder_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataorder_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataorder_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataorder_type[".printFriendly"] = true;
}



$tdataorder_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataorder_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataorder_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataorder_type[".isUseAjaxSuggest"] = true;

$tdataorder_type[".rowHighlite"] = true;





$tdataorder_type[".ajaxCodeSnippetAdded"] = false;

$tdataorder_type[".buttonsAdded"] = false;

$tdataorder_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdataorder_type[".isUseTimeForSearch"] = false;


$tdataorder_type[".badgeColor"] = "CD853F";


$tdataorder_type[".allSearchFields"] = array();
$tdataorder_type[".filterFields"] = array();
$tdataorder_type[".requiredSearchFields"] = array();

$tdataorder_type[".googleLikeFields"] = array();
$tdataorder_type[".googleLikeFields"][] = "order_type_id";
$tdataorder_type[".googleLikeFields"][] = "order_type";



$tdataorder_type[".tableType"] = "list";

$tdataorder_type[".printerPageOrientation"] = 0;
$tdataorder_type[".nPrinterPageScale"] = 100;

$tdataorder_type[".nPrinterSplitRecords"] = 40;

$tdataorder_type[".geocodingEnabled"] = false;










$tdataorder_type[".pageSize"] = 20;

$tdataorder_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataorder_type[".strOrderBy"] = $tstrOrderBy;

$tdataorder_type[".orderindexes"] = array();


$tdataorder_type[".sqlHead"] = "SELECT order_type_id,  	order_type";
$tdataorder_type[".sqlFrom"] = "FROM order_type";
$tdataorder_type[".sqlWhereExpr"] = "";
$tdataorder_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataorder_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataorder_type[".arrGroupsPerPage"] = $arrGPP;

$tdataorder_type[".highlightSearchResults"] = true;

$tableKeysorder_type = array();
$tableKeysorder_type[] = "order_type_id";
$tdataorder_type[".Keys"] = $tableKeysorder_type;


$tdataorder_type[".hideMobileList"] = array();




//	order_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "order_type_id";
	$fdata["GoodName"] = "order_type_id";
	$fdata["ownerTable"] = "order_type";
	$fdata["Label"] = GetFieldLabel("order_type","order_type_id");
	$fdata["FieldType"] = 16;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "order_type_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "order_type_id";

	
	
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


	$tdataorder_type["order_type_id"] = $fdata;
		$tdataorder_type[".searchableFields"][] = "order_type_id";
//	order_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "order_type";
	$fdata["GoodName"] = "order_type";
	$fdata["ownerTable"] = "order_type";
	$fdata["Label"] = GetFieldLabel("order_type","order_type");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "order_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "order_type";

	
	
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


	$tdataorder_type["order_type"] = $fdata;
		$tdataorder_type[".searchableFields"][] = "order_type";


$tables_data["order_type"]=&$tdataorder_type;
$field_labels["order_type"] = &$fieldLabelsorder_type;
$fieldToolTips["order_type"] = &$fieldToolTipsorder_type;
$placeHolders["order_type"] = &$placeHoldersorder_type;
$page_titles["order_type"] = &$pageTitlesorder_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["order_type"] = array();
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


		
	$detailsTablesData["order_type"][$dIndex] = $detailsParam;

	
		$detailsTablesData["order_type"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["order_type"][$dIndex]["masterKeys"][]="order_type_id";

				$detailsTablesData["order_type"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["order_type"][$dIndex]["detailKeys"][]="order_type";

// tables which are master tables for current table (detail)
$masterTablesData["order_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_order_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "order_type_id,  	order_type";
$proto0["m_strFrom"] = "FROM order_type";
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
	"m_strName" => "order_type_id",
	"m_strTable" => "order_type",
	"m_srcTableName" => "order_type"
));

$proto6["m_sql"] = "order_type_id";
$proto6["m_srcTableName"] = "order_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "order_type",
	"m_strTable" => "order_type",
	"m_srcTableName" => "order_type"
));

$proto8["m_sql"] = "order_type";
$proto8["m_srcTableName"] = "order_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "order_type";
$proto11["m_srcTableName"] = "order_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "order_type_id";
$proto11["m_columns"][] = "order_type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "order_type";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "order_type";
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
$proto0["m_srcTableName"]="order_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_order_type = createSqlQuery_order_type();


	
		;

		

$tdataorder_type[".sqlquery"] = $queryData_order_type;



$tableEvents["order_type"] = new eventsBase;
$tdataorder_type[".hasEvents"] = false;

?>