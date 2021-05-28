<?php
$tdataproject5_uggroups = array();
$tdataproject5_uggroups[".searchableFields"] = array();
$tdataproject5_uggroups[".ShortName"] = "project5_uggroups";
$tdataproject5_uggroups[".OwnerID"] = "";
$tdataproject5_uggroups[".OriginalTable"] = "project5_uggroups";


$tdataproject5_uggroups[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataproject5_uggroups[".originalPagesByType"] = $tdataproject5_uggroups[".pagesByType"];
$tdataproject5_uggroups[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataproject5_uggroups[".originalPages"] = $tdataproject5_uggroups[".pages"];
$tdataproject5_uggroups[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataproject5_uggroups[".originalDefaultPages"] = $tdataproject5_uggroups[".defaultPages"];

//	field labels
$fieldLabelsproject5_uggroups = array();
$fieldToolTipsproject5_uggroups = array();
$pageTitlesproject5_uggroups = array();
$placeHoldersproject5_uggroups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproject5_uggroups["English"] = array();
	$fieldToolTipsproject5_uggroups["English"] = array();
	$placeHoldersproject5_uggroups["English"] = array();
	$pageTitlesproject5_uggroups["English"] = array();
	$fieldLabelsproject5_uggroups["English"]["GroupID"] = "Group ID";
	$fieldToolTipsproject5_uggroups["English"]["GroupID"] = "";
	$placeHoldersproject5_uggroups["English"]["GroupID"] = "";
	$fieldLabelsproject5_uggroups["English"]["Label"] = "Label";
	$fieldToolTipsproject5_uggroups["English"]["Label"] = "";
	$placeHoldersproject5_uggroups["English"]["Label"] = "";
	if (count($fieldToolTipsproject5_uggroups["English"]))
		$tdataproject5_uggroups[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsproject5_uggroups["Indonesian"] = array();
	$fieldToolTipsproject5_uggroups["Indonesian"] = array();
	$placeHoldersproject5_uggroups["Indonesian"] = array();
	$pageTitlesproject5_uggroups["Indonesian"] = array();
	$fieldLabelsproject5_uggroups["Indonesian"]["GroupID"] = "Group ID";
	$fieldToolTipsproject5_uggroups["Indonesian"]["GroupID"] = "";
	$placeHoldersproject5_uggroups["Indonesian"]["GroupID"] = "";
	$fieldLabelsproject5_uggroups["Indonesian"]["Label"] = "Label";
	$fieldToolTipsproject5_uggroups["Indonesian"]["Label"] = "";
	$placeHoldersproject5_uggroups["Indonesian"]["Label"] = "";
	if (count($fieldToolTipsproject5_uggroups["Indonesian"]))
		$tdataproject5_uggroups[".isUseToolTips"] = true;
}


	$tdataproject5_uggroups[".NCSearch"] = true;



$tdataproject5_uggroups[".shortTableName"] = "project5_uggroups";
$tdataproject5_uggroups[".nSecOptions"] = 0;

$tdataproject5_uggroups[".mainTableOwnerID"] = "";
$tdataproject5_uggroups[".entityType"] = 0;
$tdataproject5_uggroups[".connId"] = "notif_basic1_at_localhost";


$tdataproject5_uggroups[".strOriginalTableName"] = "project5_uggroups";

	



$tdataproject5_uggroups[".showAddInPopup"] = false;

$tdataproject5_uggroups[".showEditInPopup"] = false;

$tdataproject5_uggroups[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproject5_uggroups[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproject5_uggroups[".listAjax"] = false;
//	temporary
$tdataproject5_uggroups[".listAjax"] = false;

	$tdataproject5_uggroups[".audit"] = false;

	$tdataproject5_uggroups[".locking"] = false;


$pages = $tdataproject5_uggroups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproject5_uggroups[".edit"] = true;
	$tdataproject5_uggroups[".afterEditAction"] = 1;
	$tdataproject5_uggroups[".closePopupAfterEdit"] = 1;
	$tdataproject5_uggroups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproject5_uggroups[".add"] = true;
$tdataproject5_uggroups[".afterAddAction"] = 1;
$tdataproject5_uggroups[".closePopupAfterAdd"] = 1;
$tdataproject5_uggroups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproject5_uggroups[".list"] = true;
}



$tdataproject5_uggroups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproject5_uggroups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproject5_uggroups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproject5_uggroups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproject5_uggroups[".printFriendly"] = true;
}



$tdataproject5_uggroups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproject5_uggroups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproject5_uggroups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproject5_uggroups[".isUseAjaxSuggest"] = true;

$tdataproject5_uggroups[".rowHighlite"] = true;





$tdataproject5_uggroups[".ajaxCodeSnippetAdded"] = false;

$tdataproject5_uggroups[".buttonsAdded"] = false;

$tdataproject5_uggroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproject5_uggroups[".isUseTimeForSearch"] = false;


$tdataproject5_uggroups[".badgeColor"] = "4169E1";


$tdataproject5_uggroups[".allSearchFields"] = array();
$tdataproject5_uggroups[".filterFields"] = array();
$tdataproject5_uggroups[".requiredSearchFields"] = array();

$tdataproject5_uggroups[".googleLikeFields"] = array();
$tdataproject5_uggroups[".googleLikeFields"][] = "GroupID";
$tdataproject5_uggroups[".googleLikeFields"][] = "Label";



$tdataproject5_uggroups[".tableType"] = "list";

$tdataproject5_uggroups[".printerPageOrientation"] = 0;
$tdataproject5_uggroups[".nPrinterPageScale"] = 100;

$tdataproject5_uggroups[".nPrinterSplitRecords"] = 40;

$tdataproject5_uggroups[".geocodingEnabled"] = false;










$tdataproject5_uggroups[".pageSize"] = 20;

$tdataproject5_uggroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproject5_uggroups[".strOrderBy"] = $tstrOrderBy;

$tdataproject5_uggroups[".orderindexes"] = array();


$tdataproject5_uggroups[".sqlHead"] = "SELECT GroupID,  	`Label`";
$tdataproject5_uggroups[".sqlFrom"] = "FROM project5_uggroups";
$tdataproject5_uggroups[".sqlWhereExpr"] = "";
$tdataproject5_uggroups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproject5_uggroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproject5_uggroups[".arrGroupsPerPage"] = $arrGPP;

$tdataproject5_uggroups[".highlightSearchResults"] = true;

$tableKeysproject5_uggroups = array();
$tableKeysproject5_uggroups[] = "GroupID";
$tdataproject5_uggroups[".Keys"] = $tableKeysproject5_uggroups;


$tdataproject5_uggroups[".hideMobileList"] = array();




//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "project5_uggroups";
	$fdata["Label"] = GetFieldLabel("project5_uggroups","GroupID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "GroupID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GroupID";

	
	
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


	$tdataproject5_uggroups["GroupID"] = $fdata;
		$tdataproject5_uggroups[".searchableFields"][] = "GroupID";
//	Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Label";
	$fdata["GoodName"] = "Label";
	$fdata["ownerTable"] = "project5_uggroups";
	$fdata["Label"] = GetFieldLabel("project5_uggroups","Label");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Label";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Label`";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdataproject5_uggroups["Label"] = $fdata;
		$tdataproject5_uggroups[".searchableFields"][] = "Label";


$tables_data["project5_uggroups"]=&$tdataproject5_uggroups;
$field_labels["project5_uggroups"] = &$fieldLabelsproject5_uggroups;
$fieldToolTips["project5_uggroups"] = &$fieldToolTipsproject5_uggroups;
$placeHolders["project5_uggroups"] = &$placeHoldersproject5_uggroups;
$page_titles["project5_uggroups"] = &$pageTitlesproject5_uggroups;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["project5_uggroups"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["project5_uggroups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_project5_uggroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GroupID,  	`Label`";
$proto0["m_strFrom"] = "FROM project5_uggroups";
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
	"m_strName" => "GroupID",
	"m_strTable" => "project5_uggroups",
	"m_srcTableName" => "project5_uggroups"
));

$proto6["m_sql"] = "GroupID";
$proto6["m_srcTableName"] = "project5_uggroups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "project5_uggroups",
	"m_srcTableName" => "project5_uggroups"
));

$proto8["m_sql"] = "`Label`";
$proto8["m_srcTableName"] = "project5_uggroups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "project5_uggroups";
$proto11["m_srcTableName"] = "project5_uggroups";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "GroupID";
$proto11["m_columns"][] = "Label";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "project5_uggroups";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "project5_uggroups";
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
$proto0["m_srcTableName"]="project5_uggroups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_project5_uggroups = createSqlQuery_project5_uggroups();


	
		;

		

$tdataproject5_uggroups[".sqlquery"] = $queryData_project5_uggroups;



$tableEvents["project5_uggroups"] = new eventsBase;
$tdataproject5_uggroups[".hasEvents"] = false;

?>