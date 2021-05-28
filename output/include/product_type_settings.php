<?php
$tdataproduct_type = array();
$tdataproduct_type[".searchableFields"] = array();
$tdataproduct_type[".ShortName"] = "product_type";
$tdataproduct_type[".OwnerID"] = "";
$tdataproduct_type[".OriginalTable"] = "product_type";


$tdataproduct_type[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataproduct_type[".originalPagesByType"] = $tdataproduct_type[".pagesByType"];
$tdataproduct_type[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataproduct_type[".originalPages"] = $tdataproduct_type[".pages"];
$tdataproduct_type[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataproduct_type[".originalDefaultPages"] = $tdataproduct_type[".defaultPages"];

//	field labels
$fieldLabelsproduct_type = array();
$fieldToolTipsproduct_type = array();
$pageTitlesproduct_type = array();
$placeHoldersproduct_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproduct_type["English"] = array();
	$fieldToolTipsproduct_type["English"] = array();
	$placeHoldersproduct_type["English"] = array();
	$pageTitlesproduct_type["English"] = array();
	$fieldLabelsproduct_type["English"]["id_product_type"] = "Id Product Type";
	$fieldToolTipsproduct_type["English"]["id_product_type"] = "";
	$placeHoldersproduct_type["English"]["id_product_type"] = "";
	$fieldLabelsproduct_type["English"]["product_type"] = "Product Type";
	$fieldToolTipsproduct_type["English"]["product_type"] = "";
	$placeHoldersproduct_type["English"]["product_type"] = "";
	if (count($fieldToolTipsproduct_type["English"]))
		$tdataproduct_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsproduct_type["Indonesian"] = array();
	$fieldToolTipsproduct_type["Indonesian"] = array();
	$placeHoldersproduct_type["Indonesian"] = array();
	$pageTitlesproduct_type["Indonesian"] = array();
	$fieldLabelsproduct_type["Indonesian"]["id_product_type"] = "Id Product Type";
	$fieldToolTipsproduct_type["Indonesian"]["id_product_type"] = "";
	$placeHoldersproduct_type["Indonesian"]["id_product_type"] = "";
	$fieldLabelsproduct_type["Indonesian"]["product_type"] = "Product Type";
	$fieldToolTipsproduct_type["Indonesian"]["product_type"] = "";
	$placeHoldersproduct_type["Indonesian"]["product_type"] = "";
	if (count($fieldToolTipsproduct_type["Indonesian"]))
		$tdataproduct_type[".isUseToolTips"] = true;
}


	$tdataproduct_type[".NCSearch"] = true;



$tdataproduct_type[".shortTableName"] = "product_type";
$tdataproduct_type[".nSecOptions"] = 0;

$tdataproduct_type[".mainTableOwnerID"] = "";
$tdataproduct_type[".entityType"] = 0;
$tdataproduct_type[".connId"] = "notif_basic1_at_localhost";


$tdataproduct_type[".strOriginalTableName"] = "product_type";

	



$tdataproduct_type[".showAddInPopup"] = false;

$tdataproduct_type[".showEditInPopup"] = false;

$tdataproduct_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproduct_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproduct_type[".listAjax"] = false;
//	temporary
$tdataproduct_type[".listAjax"] = false;

	$tdataproduct_type[".audit"] = false;

	$tdataproduct_type[".locking"] = false;


$pages = $tdataproduct_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproduct_type[".edit"] = true;
	$tdataproduct_type[".afterEditAction"] = 1;
	$tdataproduct_type[".closePopupAfterEdit"] = 1;
	$tdataproduct_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproduct_type[".add"] = true;
$tdataproduct_type[".afterAddAction"] = 1;
$tdataproduct_type[".closePopupAfterAdd"] = 1;
$tdataproduct_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproduct_type[".list"] = true;
}



$tdataproduct_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproduct_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproduct_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproduct_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproduct_type[".printFriendly"] = true;
}



$tdataproduct_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproduct_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproduct_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproduct_type[".isUseAjaxSuggest"] = true;

$tdataproduct_type[".rowHighlite"] = true;





$tdataproduct_type[".ajaxCodeSnippetAdded"] = false;

$tdataproduct_type[".buttonsAdded"] = false;

$tdataproduct_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproduct_type[".isUseTimeForSearch"] = false;


$tdataproduct_type[".badgeColor"] = "E07878";


$tdataproduct_type[".allSearchFields"] = array();
$tdataproduct_type[".filterFields"] = array();
$tdataproduct_type[".requiredSearchFields"] = array();

$tdataproduct_type[".googleLikeFields"] = array();
$tdataproduct_type[".googleLikeFields"][] = "id_product_type";
$tdataproduct_type[".googleLikeFields"][] = "product_type";



$tdataproduct_type[".tableType"] = "list";

$tdataproduct_type[".printerPageOrientation"] = 0;
$tdataproduct_type[".nPrinterPageScale"] = 100;

$tdataproduct_type[".nPrinterSplitRecords"] = 40;

$tdataproduct_type[".geocodingEnabled"] = false;










$tdataproduct_type[".pageSize"] = 20;

$tdataproduct_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproduct_type[".strOrderBy"] = $tstrOrderBy;

$tdataproduct_type[".orderindexes"] = array();


$tdataproduct_type[".sqlHead"] = "SELECT id_product_type,  	product_type";
$tdataproduct_type[".sqlFrom"] = "FROM product_type";
$tdataproduct_type[".sqlWhereExpr"] = "";
$tdataproduct_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproduct_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproduct_type[".arrGroupsPerPage"] = $arrGPP;

$tdataproduct_type[".highlightSearchResults"] = true;

$tableKeysproduct_type = array();
$tableKeysproduct_type[] = "id_product_type";
$tdataproduct_type[".Keys"] = $tableKeysproduct_type;


$tdataproduct_type[".hideMobileList"] = array();




//	id_product_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_product_type";
	$fdata["GoodName"] = "id_product_type";
	$fdata["ownerTable"] = "product_type";
	$fdata["Label"] = GetFieldLabel("product_type","id_product_type");
	$fdata["FieldType"] = 16;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_product_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_product_type";

	
	
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


	$tdataproduct_type["id_product_type"] = $fdata;
		$tdataproduct_type[".searchableFields"][] = "id_product_type";
//	product_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "product_type";
	$fdata["GoodName"] = "product_type";
	$fdata["ownerTable"] = "product_type";
	$fdata["Label"] = GetFieldLabel("product_type","product_type");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "product_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_type";

	
	
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


	$tdataproduct_type["product_type"] = $fdata;
		$tdataproduct_type[".searchableFields"][] = "product_type";


$tables_data["product_type"]=&$tdataproduct_type;
$field_labels["product_type"] = &$fieldLabelsproduct_type;
$fieldToolTips["product_type"] = &$fieldToolTipsproduct_type;
$placeHolders["product_type"] = &$placeHoldersproduct_type;
$page_titles["product_type"] = &$pageTitlesproduct_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["product_type"] = array();
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


		
	$detailsTablesData["product_type"][$dIndex] = $detailsParam;

	
		$detailsTablesData["product_type"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["product_type"][$dIndex]["masterKeys"][]="id_product_type";

				$detailsTablesData["product_type"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["product_type"][$dIndex]["detailKeys"][]="product_type";

// tables which are master tables for current table (detail)
$masterTablesData["product_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_product_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_product_type,  	product_type";
$proto0["m_strFrom"] = "FROM product_type";
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
	"m_strName" => "id_product_type",
	"m_strTable" => "product_type",
	"m_srcTableName" => "product_type"
));

$proto6["m_sql"] = "id_product_type";
$proto6["m_srcTableName"] = "product_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "product_type",
	"m_strTable" => "product_type",
	"m_srcTableName" => "product_type"
));

$proto8["m_sql"] = "product_type";
$proto8["m_srcTableName"] = "product_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "product_type";
$proto11["m_srcTableName"] = "product_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_product_type";
$proto11["m_columns"][] = "product_type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "product_type";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "product_type";
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
$proto0["m_srcTableName"]="product_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_product_type = createSqlQuery_product_type();


	
		;

		

$tdataproduct_type[".sqlquery"] = $queryData_product_type;



$tableEvents["product_type"] = new eventsBase;
$tdataproduct_type[".hasEvents"] = false;

?>