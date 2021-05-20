<?php
$tdatamembership_type = array();
$tdatamembership_type[".searchableFields"] = array();
$tdatamembership_type[".ShortName"] = "membership_type";
$tdatamembership_type[".OwnerID"] = "";
$tdatamembership_type[".OriginalTable"] = "membership_type";


$tdatamembership_type[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamembership_type[".originalPagesByType"] = $tdatamembership_type[".pagesByType"];
$tdatamembership_type[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamembership_type[".originalPages"] = $tdatamembership_type[".pages"];
$tdatamembership_type[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamembership_type[".originalDefaultPages"] = $tdatamembership_type[".defaultPages"];

//	field labels
$fieldLabelsmembership_type = array();
$fieldToolTipsmembership_type = array();
$pageTitlesmembership_type = array();
$placeHoldersmembership_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmembership_type["English"] = array();
	$fieldToolTipsmembership_type["English"] = array();
	$placeHoldersmembership_type["English"] = array();
	$pageTitlesmembership_type["English"] = array();
	$fieldLabelsmembership_type["English"]["membership_id"] = "Membership Id";
	$fieldToolTipsmembership_type["English"]["membership_id"] = "";
	$placeHoldersmembership_type["English"]["membership_id"] = "";
	$fieldLabelsmembership_type["English"]["membership_type"] = "Membership Type";
	$fieldToolTipsmembership_type["English"]["membership_type"] = "";
	$placeHoldersmembership_type["English"]["membership_type"] = "";
	if (count($fieldToolTipsmembership_type["English"]))
		$tdatamembership_type[".isUseToolTips"] = true;
}


	$tdatamembership_type[".NCSearch"] = true;



$tdatamembership_type[".shortTableName"] = "membership_type";
$tdatamembership_type[".nSecOptions"] = 0;

$tdatamembership_type[".mainTableOwnerID"] = "";
$tdatamembership_type[".entityType"] = 0;
$tdatamembership_type[".connId"] = "notif_basic1_at_localhost";


$tdatamembership_type[".strOriginalTableName"] = "membership_type";

	



$tdatamembership_type[".showAddInPopup"] = false;

$tdatamembership_type[".showEditInPopup"] = false;

$tdatamembership_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamembership_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamembership_type[".listAjax"] = false;
//	temporary
$tdatamembership_type[".listAjax"] = false;

	$tdatamembership_type[".audit"] = false;

	$tdatamembership_type[".locking"] = false;


$pages = $tdatamembership_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamembership_type[".edit"] = true;
	$tdatamembership_type[".afterEditAction"] = 1;
	$tdatamembership_type[".closePopupAfterEdit"] = 1;
	$tdatamembership_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamembership_type[".add"] = true;
$tdatamembership_type[".afterAddAction"] = 1;
$tdatamembership_type[".closePopupAfterAdd"] = 1;
$tdatamembership_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamembership_type[".list"] = true;
}



$tdatamembership_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamembership_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamembership_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamembership_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamembership_type[".printFriendly"] = true;
}



$tdatamembership_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamembership_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamembership_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamembership_type[".isUseAjaxSuggest"] = true;

$tdatamembership_type[".rowHighlite"] = true;





$tdatamembership_type[".ajaxCodeSnippetAdded"] = false;

$tdatamembership_type[".buttonsAdded"] = false;

$tdatamembership_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamembership_type[".isUseTimeForSearch"] = false;


$tdatamembership_type[".badgeColor"] = "EDCA00";


$tdatamembership_type[".allSearchFields"] = array();
$tdatamembership_type[".filterFields"] = array();
$tdatamembership_type[".requiredSearchFields"] = array();

$tdatamembership_type[".googleLikeFields"] = array();
$tdatamembership_type[".googleLikeFields"][] = "membership_id";
$tdatamembership_type[".googleLikeFields"][] = "membership_type";



$tdatamembership_type[".tableType"] = "list";

$tdatamembership_type[".printerPageOrientation"] = 0;
$tdatamembership_type[".nPrinterPageScale"] = 100;

$tdatamembership_type[".nPrinterSplitRecords"] = 40;

$tdatamembership_type[".geocodingEnabled"] = false;










$tdatamembership_type[".pageSize"] = 20;

$tdatamembership_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamembership_type[".strOrderBy"] = $tstrOrderBy;

$tdatamembership_type[".orderindexes"] = array();


$tdatamembership_type[".sqlHead"] = "SELECT membership_id,  	membership_type";
$tdatamembership_type[".sqlFrom"] = "FROM membership_type";
$tdatamembership_type[".sqlWhereExpr"] = "";
$tdatamembership_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamembership_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamembership_type[".arrGroupsPerPage"] = $arrGPP;

$tdatamembership_type[".highlightSearchResults"] = true;

$tableKeysmembership_type = array();
$tableKeysmembership_type[] = "membership_id";
$tdatamembership_type[".Keys"] = $tableKeysmembership_type;


$tdatamembership_type[".hideMobileList"] = array();




//	membership_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "membership_id";
	$fdata["GoodName"] = "membership_id";
	$fdata["ownerTable"] = "membership_type";
	$fdata["Label"] = GetFieldLabel("membership_type","membership_id");
	$fdata["FieldType"] = 16;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "membership_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "membership_id";

	
	
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


	$tdatamembership_type["membership_id"] = $fdata;
		$tdatamembership_type[".searchableFields"][] = "membership_id";
//	membership_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "membership_type";
	$fdata["GoodName"] = "membership_type";
	$fdata["ownerTable"] = "membership_type";
	$fdata["Label"] = GetFieldLabel("membership_type","membership_type");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "membership_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "membership_type";

	
	
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


	$tdatamembership_type["membership_type"] = $fdata;
		$tdatamembership_type[".searchableFields"][] = "membership_type";


$tables_data["membership_type"]=&$tdatamembership_type;
$field_labels["membership_type"] = &$fieldLabelsmembership_type;
$fieldToolTips["membership_type"] = &$fieldToolTipsmembership_type;
$placeHolders["membership_type"] = &$placeHoldersmembership_type;
$page_titles["membership_type"] = &$pageTitlesmembership_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["membership_type"] = array();
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


		
	$detailsTablesData["membership_type"][$dIndex] = $detailsParam;

	
		$detailsTablesData["membership_type"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["membership_type"][$dIndex]["masterKeys"][]="membership_id";

				$detailsTablesData["membership_type"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["membership_type"][$dIndex]["detailKeys"][]="membership_type";
//	group_member
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member";
		$detailsParam["dOriginalTable"] = "group_member";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["membership_type"][$dIndex] = $detailsParam;

	
		$detailsTablesData["membership_type"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["membership_type"][$dIndex]["masterKeys"][]="membership_id";

				$detailsTablesData["membership_type"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["membership_type"][$dIndex]["detailKeys"][]="membership_type";

// tables which are master tables for current table (detail)
$masterTablesData["membership_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_membership_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "membership_id,  	membership_type";
$proto0["m_strFrom"] = "FROM membership_type";
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
	"m_strName" => "membership_id",
	"m_strTable" => "membership_type",
	"m_srcTableName" => "membership_type"
));

$proto6["m_sql"] = "membership_id";
$proto6["m_srcTableName"] = "membership_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "membership_type",
	"m_strTable" => "membership_type",
	"m_srcTableName" => "membership_type"
));

$proto8["m_sql"] = "membership_type";
$proto8["m_srcTableName"] = "membership_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "membership_type";
$proto11["m_srcTableName"] = "membership_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "membership_id";
$proto11["m_columns"][] = "membership_type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "membership_type";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "membership_type";
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
$proto0["m_srcTableName"]="membership_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_membership_type = createSqlQuery_membership_type();


	
		;

		

$tdatamembership_type[".sqlquery"] = $queryData_membership_type;



$tableEvents["membership_type"] = new eventsBase;
$tdatamembership_type[".hasEvents"] = false;

?>