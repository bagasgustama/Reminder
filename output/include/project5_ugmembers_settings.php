<?php
$tdataproject5_ugmembers = array();
$tdataproject5_ugmembers[".searchableFields"] = array();
$tdataproject5_ugmembers[".ShortName"] = "project5_ugmembers";
$tdataproject5_ugmembers[".OwnerID"] = "";
$tdataproject5_ugmembers[".OriginalTable"] = "project5_ugmembers";


$tdataproject5_ugmembers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataproject5_ugmembers[".originalPagesByType"] = $tdataproject5_ugmembers[".pagesByType"];
$tdataproject5_ugmembers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataproject5_ugmembers[".originalPages"] = $tdataproject5_ugmembers[".pages"];
$tdataproject5_ugmembers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataproject5_ugmembers[".originalDefaultPages"] = $tdataproject5_ugmembers[".defaultPages"];

//	field labels
$fieldLabelsproject5_ugmembers = array();
$fieldToolTipsproject5_ugmembers = array();
$pageTitlesproject5_ugmembers = array();
$placeHoldersproject5_ugmembers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproject5_ugmembers["English"] = array();
	$fieldToolTipsproject5_ugmembers["English"] = array();
	$placeHoldersproject5_ugmembers["English"] = array();
	$pageTitlesproject5_ugmembers["English"] = array();
	$fieldLabelsproject5_ugmembers["English"]["UserName"] = "User Name";
	$fieldToolTipsproject5_ugmembers["English"]["UserName"] = "";
	$placeHoldersproject5_ugmembers["English"]["UserName"] = "";
	$fieldLabelsproject5_ugmembers["English"]["GroupID"] = "Group ID";
	$fieldToolTipsproject5_ugmembers["English"]["GroupID"] = "";
	$placeHoldersproject5_ugmembers["English"]["GroupID"] = "";
	if (count($fieldToolTipsproject5_ugmembers["English"]))
		$tdataproject5_ugmembers[".isUseToolTips"] = true;
}


	$tdataproject5_ugmembers[".NCSearch"] = true;



$tdataproject5_ugmembers[".shortTableName"] = "project5_ugmembers";
$tdataproject5_ugmembers[".nSecOptions"] = 0;

$tdataproject5_ugmembers[".mainTableOwnerID"] = "";
$tdataproject5_ugmembers[".entityType"] = 0;
$tdataproject5_ugmembers[".connId"] = "notif_basic1_at_localhost";


$tdataproject5_ugmembers[".strOriginalTableName"] = "project5_ugmembers";

	



$tdataproject5_ugmembers[".showAddInPopup"] = false;

$tdataproject5_ugmembers[".showEditInPopup"] = false;

$tdataproject5_ugmembers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproject5_ugmembers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproject5_ugmembers[".listAjax"] = false;
//	temporary
$tdataproject5_ugmembers[".listAjax"] = false;

	$tdataproject5_ugmembers[".audit"] = false;

	$tdataproject5_ugmembers[".locking"] = false;


$pages = $tdataproject5_ugmembers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproject5_ugmembers[".edit"] = true;
	$tdataproject5_ugmembers[".afterEditAction"] = 1;
	$tdataproject5_ugmembers[".closePopupAfterEdit"] = 1;
	$tdataproject5_ugmembers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproject5_ugmembers[".add"] = true;
$tdataproject5_ugmembers[".afterAddAction"] = 1;
$tdataproject5_ugmembers[".closePopupAfterAdd"] = 1;
$tdataproject5_ugmembers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproject5_ugmembers[".list"] = true;
}



$tdataproject5_ugmembers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproject5_ugmembers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproject5_ugmembers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproject5_ugmembers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproject5_ugmembers[".printFriendly"] = true;
}



$tdataproject5_ugmembers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproject5_ugmembers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproject5_ugmembers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproject5_ugmembers[".isUseAjaxSuggest"] = true;

$tdataproject5_ugmembers[".rowHighlite"] = true;





$tdataproject5_ugmembers[".ajaxCodeSnippetAdded"] = false;

$tdataproject5_ugmembers[".buttonsAdded"] = false;

$tdataproject5_ugmembers[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproject5_ugmembers[".isUseTimeForSearch"] = false;


$tdataproject5_ugmembers[".badgeColor"] = "4682B4";


$tdataproject5_ugmembers[".allSearchFields"] = array();
$tdataproject5_ugmembers[".filterFields"] = array();
$tdataproject5_ugmembers[".requiredSearchFields"] = array();

$tdataproject5_ugmembers[".googleLikeFields"] = array();
$tdataproject5_ugmembers[".googleLikeFields"][] = "UserName";
$tdataproject5_ugmembers[".googleLikeFields"][] = "GroupID";



$tdataproject5_ugmembers[".tableType"] = "list";

$tdataproject5_ugmembers[".printerPageOrientation"] = 0;
$tdataproject5_ugmembers[".nPrinterPageScale"] = 100;

$tdataproject5_ugmembers[".nPrinterSplitRecords"] = 40;

$tdataproject5_ugmembers[".geocodingEnabled"] = false;










$tdataproject5_ugmembers[".pageSize"] = 20;

$tdataproject5_ugmembers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproject5_ugmembers[".strOrderBy"] = $tstrOrderBy;

$tdataproject5_ugmembers[".orderindexes"] = array();


$tdataproject5_ugmembers[".sqlHead"] = "SELECT UserName,  	GroupID";
$tdataproject5_ugmembers[".sqlFrom"] = "FROM project5_ugmembers";
$tdataproject5_ugmembers[".sqlWhereExpr"] = "";
$tdataproject5_ugmembers[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataproject5_ugmembers[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproject5_ugmembers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproject5_ugmembers[".arrGroupsPerPage"] = $arrGPP;

$tdataproject5_ugmembers[".highlightSearchResults"] = true;

$tableKeysproject5_ugmembers = array();
$tableKeysproject5_ugmembers[] = "UserName";
$tableKeysproject5_ugmembers[] = "GroupID";
$tdataproject5_ugmembers[".Keys"] = $tableKeysproject5_ugmembers;


$tdataproject5_ugmembers[".hideMobileList"] = array();




//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "project5_ugmembers";
	$fdata["Label"] = GetFieldLabel("project5_ugmembers","UserName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "UserName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserName";

	
	
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


	$tdataproject5_ugmembers["UserName"] = $fdata;
		$tdataproject5_ugmembers[".searchableFields"][] = "UserName";
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "project5_ugmembers";
	$fdata["Label"] = GetFieldLabel("project5_ugmembers","GroupID");
	$fdata["FieldType"] = 3;

	
	
	
			

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


	$tdataproject5_ugmembers["GroupID"] = $fdata;
		$tdataproject5_ugmembers[".searchableFields"][] = "GroupID";


$tables_data["project5_ugmembers"]=&$tdataproject5_ugmembers;
$field_labels["project5_ugmembers"] = &$fieldLabelsproject5_ugmembers;
$fieldToolTips["project5_ugmembers"] = &$fieldToolTipsproject5_ugmembers;
$placeHolders["project5_ugmembers"] = &$placeHoldersproject5_ugmembers;
$page_titles["project5_ugmembers"] = &$pageTitlesproject5_ugmembers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["project5_ugmembers"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["project5_ugmembers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_project5_ugmembers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UserName,  	GroupID";
$proto0["m_strFrom"] = "FROM project5_ugmembers";
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
	"m_strName" => "UserName",
	"m_strTable" => "project5_ugmembers",
	"m_srcTableName" => "project5_ugmembers"
));

$proto6["m_sql"] = "UserName";
$proto6["m_srcTableName"] = "project5_ugmembers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "project5_ugmembers",
	"m_srcTableName" => "project5_ugmembers"
));

$proto8["m_sql"] = "GroupID";
$proto8["m_srcTableName"] = "project5_ugmembers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "project5_ugmembers";
$proto11["m_srcTableName"] = "project5_ugmembers";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "UserName";
$proto11["m_columns"][] = "GroupID";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "project5_ugmembers";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "project5_ugmembers";
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
$proto0["m_srcTableName"]="project5_ugmembers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_project5_ugmembers = createSqlQuery_project5_ugmembers();


	
		;

		

$tdataproject5_ugmembers[".sqlquery"] = $queryData_project5_ugmembers;



$tableEvents["project5_ugmembers"] = new eventsBase;
$tdataproject5_ugmembers[".hasEvents"] = false;

?>