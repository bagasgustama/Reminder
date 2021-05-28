<?php
$tdataproject5_ugrights = array();
$tdataproject5_ugrights[".searchableFields"] = array();
$tdataproject5_ugrights[".ShortName"] = "project5_ugrights";
$tdataproject5_ugrights[".OwnerID"] = "";
$tdataproject5_ugrights[".OriginalTable"] = "project5_ugrights";


$tdataproject5_ugrights[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataproject5_ugrights[".originalPagesByType"] = $tdataproject5_ugrights[".pagesByType"];
$tdataproject5_ugrights[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataproject5_ugrights[".originalPages"] = $tdataproject5_ugrights[".pages"];
$tdataproject5_ugrights[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataproject5_ugrights[".originalDefaultPages"] = $tdataproject5_ugrights[".defaultPages"];

//	field labels
$fieldLabelsproject5_ugrights = array();
$fieldToolTipsproject5_ugrights = array();
$pageTitlesproject5_ugrights = array();
$placeHoldersproject5_ugrights = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproject5_ugrights["English"] = array();
	$fieldToolTipsproject5_ugrights["English"] = array();
	$placeHoldersproject5_ugrights["English"] = array();
	$pageTitlesproject5_ugrights["English"] = array();
	$fieldLabelsproject5_ugrights["English"]["TableName"] = "Table Name";
	$fieldToolTipsproject5_ugrights["English"]["TableName"] = "";
	$placeHoldersproject5_ugrights["English"]["TableName"] = "";
	$fieldLabelsproject5_ugrights["English"]["GroupID"] = "Group ID";
	$fieldToolTipsproject5_ugrights["English"]["GroupID"] = "";
	$placeHoldersproject5_ugrights["English"]["GroupID"] = "";
	$fieldLabelsproject5_ugrights["English"]["AccessMask"] = "Access Mask";
	$fieldToolTipsproject5_ugrights["English"]["AccessMask"] = "";
	$placeHoldersproject5_ugrights["English"]["AccessMask"] = "";
	$fieldLabelsproject5_ugrights["English"]["Page"] = "Page";
	$fieldToolTipsproject5_ugrights["English"]["Page"] = "";
	$placeHoldersproject5_ugrights["English"]["Page"] = "";
	if (count($fieldToolTipsproject5_ugrights["English"]))
		$tdataproject5_ugrights[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsproject5_ugrights["Indonesian"] = array();
	$fieldToolTipsproject5_ugrights["Indonesian"] = array();
	$placeHoldersproject5_ugrights["Indonesian"] = array();
	$pageTitlesproject5_ugrights["Indonesian"] = array();
	$fieldLabelsproject5_ugrights["Indonesian"]["TableName"] = "Table Name";
	$fieldToolTipsproject5_ugrights["Indonesian"]["TableName"] = "";
	$placeHoldersproject5_ugrights["Indonesian"]["TableName"] = "";
	$fieldLabelsproject5_ugrights["Indonesian"]["GroupID"] = "Group ID";
	$fieldToolTipsproject5_ugrights["Indonesian"]["GroupID"] = "";
	$placeHoldersproject5_ugrights["Indonesian"]["GroupID"] = "";
	$fieldLabelsproject5_ugrights["Indonesian"]["AccessMask"] = "Access Mask";
	$fieldToolTipsproject5_ugrights["Indonesian"]["AccessMask"] = "";
	$placeHoldersproject5_ugrights["Indonesian"]["AccessMask"] = "";
	$fieldLabelsproject5_ugrights["Indonesian"]["Page"] = "Page";
	$fieldToolTipsproject5_ugrights["Indonesian"]["Page"] = "";
	$placeHoldersproject5_ugrights["Indonesian"]["Page"] = "";
	if (count($fieldToolTipsproject5_ugrights["Indonesian"]))
		$tdataproject5_ugrights[".isUseToolTips"] = true;
}


	$tdataproject5_ugrights[".NCSearch"] = true;



$tdataproject5_ugrights[".shortTableName"] = "project5_ugrights";
$tdataproject5_ugrights[".nSecOptions"] = 0;

$tdataproject5_ugrights[".mainTableOwnerID"] = "";
$tdataproject5_ugrights[".entityType"] = 1;
$tdataproject5_ugrights[".connId"] = "notif_basic1_at_localhost";


$tdataproject5_ugrights[".strOriginalTableName"] = "project5_ugrights";

	



$tdataproject5_ugrights[".showAddInPopup"] = false;

$tdataproject5_ugrights[".showEditInPopup"] = false;

$tdataproject5_ugrights[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproject5_ugrights[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproject5_ugrights[".listAjax"] = false;
//	temporary
$tdataproject5_ugrights[".listAjax"] = false;

	$tdataproject5_ugrights[".audit"] = false;

	$tdataproject5_ugrights[".locking"] = false;


$pages = $tdataproject5_ugrights[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproject5_ugrights[".edit"] = true;
	$tdataproject5_ugrights[".afterEditAction"] = 1;
	$tdataproject5_ugrights[".closePopupAfterEdit"] = 1;
	$tdataproject5_ugrights[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproject5_ugrights[".add"] = true;
$tdataproject5_ugrights[".afterAddAction"] = 1;
$tdataproject5_ugrights[".closePopupAfterAdd"] = 1;
$tdataproject5_ugrights[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproject5_ugrights[".list"] = true;
}



$tdataproject5_ugrights[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproject5_ugrights[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproject5_ugrights[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproject5_ugrights[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproject5_ugrights[".printFriendly"] = true;
}



$tdataproject5_ugrights[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproject5_ugrights[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproject5_ugrights[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproject5_ugrights[".isUseAjaxSuggest"] = true;

$tdataproject5_ugrights[".rowHighlite"] = true;





$tdataproject5_ugrights[".ajaxCodeSnippetAdded"] = false;

$tdataproject5_ugrights[".buttonsAdded"] = false;

$tdataproject5_ugrights[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproject5_ugrights[".isUseTimeForSearch"] = false;


$tdataproject5_ugrights[".badgeColor"] = "008B8B";


$tdataproject5_ugrights[".allSearchFields"] = array();
$tdataproject5_ugrights[".filterFields"] = array();
$tdataproject5_ugrights[".requiredSearchFields"] = array();

$tdataproject5_ugrights[".googleLikeFields"] = array();
$tdataproject5_ugrights[".googleLikeFields"][] = "TableName";
$tdataproject5_ugrights[".googleLikeFields"][] = "GroupID";
$tdataproject5_ugrights[".googleLikeFields"][] = "AccessMask";
$tdataproject5_ugrights[".googleLikeFields"][] = "Page";



$tdataproject5_ugrights[".tableType"] = "list";

$tdataproject5_ugrights[".printerPageOrientation"] = 0;
$tdataproject5_ugrights[".nPrinterPageScale"] = 100;

$tdataproject5_ugrights[".nPrinterSplitRecords"] = 40;

$tdataproject5_ugrights[".geocodingEnabled"] = false;










$tdataproject5_ugrights[".pageSize"] = 20;

$tdataproject5_ugrights[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproject5_ugrights[".strOrderBy"] = $tstrOrderBy;

$tdataproject5_ugrights[".orderindexes"] = array();


$tdataproject5_ugrights[".sqlHead"] = "SELECT TableName,  	GroupID,  	AccessMask,  	Page";
$tdataproject5_ugrights[".sqlFrom"] = "FROM project5_ugrights";
$tdataproject5_ugrights[".sqlWhereExpr"] = "";
$tdataproject5_ugrights[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproject5_ugrights[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproject5_ugrights[".arrGroupsPerPage"] = $arrGPP;

$tdataproject5_ugrights[".highlightSearchResults"] = true;

$tableKeysproject5_ugrights = array();
$tableKeysproject5_ugrights[] = "TableName";
$tableKeysproject5_ugrights[] = "GroupID";
$tdataproject5_ugrights[".Keys"] = $tableKeysproject5_ugrights;


$tdataproject5_ugrights[".hideMobileList"] = array();




//	TableName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TableName";
	$fdata["GoodName"] = "TableName";
	$fdata["ownerTable"] = "project5_ugrights";
	$fdata["Label"] = GetFieldLabel("project5_ugrights","TableName");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TableName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TableName";

	
	
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


	$tdataproject5_ugrights["TableName"] = $fdata;
		$tdataproject5_ugrights[".searchableFields"][] = "TableName";
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "project5_ugrights";
	$fdata["Label"] = GetFieldLabel("project5_ugrights","GroupID");
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


	$tdataproject5_ugrights["GroupID"] = $fdata;
		$tdataproject5_ugrights[".searchableFields"][] = "GroupID";
//	AccessMask
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccessMask";
	$fdata["GoodName"] = "AccessMask";
	$fdata["ownerTable"] = "project5_ugrights";
	$fdata["Label"] = GetFieldLabel("project5_ugrights","AccessMask");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "AccessMask";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccessMask";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdataproject5_ugrights["AccessMask"] = $fdata;
		$tdataproject5_ugrights[".searchableFields"][] = "AccessMask";
//	Page
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Page";
	$fdata["GoodName"] = "Page";
	$fdata["ownerTable"] = "project5_ugrights";
	$fdata["Label"] = GetFieldLabel("project5_ugrights","Page");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Page";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Page";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataproject5_ugrights["Page"] = $fdata;
		$tdataproject5_ugrights[".searchableFields"][] = "Page";


$tables_data["project5_ugrights"]=&$tdataproject5_ugrights;
$field_labels["project5_ugrights"] = &$fieldLabelsproject5_ugrights;
$fieldToolTips["project5_ugrights"] = &$fieldToolTipsproject5_ugrights;
$placeHolders["project5_ugrights"] = &$placeHoldersproject5_ugrights;
$page_titles["project5_ugrights"] = &$pageTitlesproject5_ugrights;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["project5_ugrights"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["project5_ugrights"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_project5_ugrights()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TableName,  	GroupID,  	AccessMask,  	Page";
$proto0["m_strFrom"] = "FROM project5_ugrights";
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
	"m_strName" => "TableName",
	"m_strTable" => "project5_ugrights",
	"m_srcTableName" => "project5_ugrights"
));

$proto6["m_sql"] = "TableName";
$proto6["m_srcTableName"] = "project5_ugrights";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "project5_ugrights",
	"m_srcTableName" => "project5_ugrights"
));

$proto8["m_sql"] = "GroupID";
$proto8["m_srcTableName"] = "project5_ugrights";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccessMask",
	"m_strTable" => "project5_ugrights",
	"m_srcTableName" => "project5_ugrights"
));

$proto10["m_sql"] = "AccessMask";
$proto10["m_srcTableName"] = "project5_ugrights";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Page",
	"m_strTable" => "project5_ugrights",
	"m_srcTableName" => "project5_ugrights"
));

$proto12["m_sql"] = "Page";
$proto12["m_srcTableName"] = "project5_ugrights";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "project5_ugrights";
$proto15["m_srcTableName"] = "project5_ugrights";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "TableName";
$proto15["m_columns"][] = "GroupID";
$proto15["m_columns"][] = "AccessMask";
$proto15["m_columns"][] = "Page";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "project5_ugrights";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "project5_ugrights";
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
$proto0["m_srcTableName"]="project5_ugrights";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_project5_ugrights = createSqlQuery_project5_ugrights();


	
		;

				

$tdataproject5_ugrights[".sqlquery"] = $queryData_project5_ugrights;



$tableEvents["project5_ugrights"] = new eventsBase;
$tdataproject5_ugrights[".hasEvents"] = false;

?>