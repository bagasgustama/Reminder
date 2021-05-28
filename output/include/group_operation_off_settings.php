<?php
$tdatagroup_operation_off = array();
$tdatagroup_operation_off[".searchableFields"] = array();
$tdatagroup_operation_off[".ShortName"] = "group_operation_off";
$tdatagroup_operation_off[".OwnerID"] = "";
$tdatagroup_operation_off[".OriginalTable"] = "group_operation_off";


$tdatagroup_operation_off[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagroup_operation_off[".originalPagesByType"] = $tdatagroup_operation_off[".pagesByType"];
$tdatagroup_operation_off[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagroup_operation_off[".originalPages"] = $tdatagroup_operation_off[".pages"];
$tdatagroup_operation_off[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagroup_operation_off[".originalDefaultPages"] = $tdatagroup_operation_off[".defaultPages"];

//	field labels
$fieldLabelsgroup_operation_off = array();
$fieldToolTipsgroup_operation_off = array();
$pageTitlesgroup_operation_off = array();
$placeHoldersgroup_operation_off = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_operation_off["English"] = array();
	$fieldToolTipsgroup_operation_off["English"] = array();
	$placeHoldersgroup_operation_off["English"] = array();
	$pageTitlesgroup_operation_off["English"] = array();
	$fieldLabelsgroup_operation_off["English"]["operation_id"] = "Operation Id";
	$fieldToolTipsgroup_operation_off["English"]["operation_id"] = "";
	$placeHoldersgroup_operation_off["English"]["operation_id"] = "";
	$fieldLabelsgroup_operation_off["English"]["group_id"] = "Group Id";
	$fieldToolTipsgroup_operation_off["English"]["group_id"] = "";
	$placeHoldersgroup_operation_off["English"]["group_id"] = "";
	$fieldLabelsgroup_operation_off["English"]["day_off"] = "Day Off";
	$fieldToolTipsgroup_operation_off["English"]["day_off"] = "";
	$placeHoldersgroup_operation_off["English"]["day_off"] = "";
	$fieldLabelsgroup_operation_off["English"]["desc"] = "Desc";
	$fieldToolTipsgroup_operation_off["English"]["desc"] = "";
	$placeHoldersgroup_operation_off["English"]["desc"] = "";
	if (count($fieldToolTipsgroup_operation_off["English"]))
		$tdatagroup_operation_off[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsgroup_operation_off["Indonesian"] = array();
	$fieldToolTipsgroup_operation_off["Indonesian"] = array();
	$placeHoldersgroup_operation_off["Indonesian"] = array();
	$pageTitlesgroup_operation_off["Indonesian"] = array();
	$fieldLabelsgroup_operation_off["Indonesian"]["operation_id"] = "Operation Id";
	$fieldToolTipsgroup_operation_off["Indonesian"]["operation_id"] = "";
	$placeHoldersgroup_operation_off["Indonesian"]["operation_id"] = "";
	$fieldLabelsgroup_operation_off["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipsgroup_operation_off["Indonesian"]["group_id"] = "";
	$placeHoldersgroup_operation_off["Indonesian"]["group_id"] = "";
	$fieldLabelsgroup_operation_off["Indonesian"]["day_off"] = "Day Off";
	$fieldToolTipsgroup_operation_off["Indonesian"]["day_off"] = "";
	$placeHoldersgroup_operation_off["Indonesian"]["day_off"] = "";
	$fieldLabelsgroup_operation_off["Indonesian"]["desc"] = "Desc";
	$fieldToolTipsgroup_operation_off["Indonesian"]["desc"] = "";
	$placeHoldersgroup_operation_off["Indonesian"]["desc"] = "";
	if (count($fieldToolTipsgroup_operation_off["Indonesian"]))
		$tdatagroup_operation_off[".isUseToolTips"] = true;
}


	$tdatagroup_operation_off[".NCSearch"] = true;



$tdatagroup_operation_off[".shortTableName"] = "group_operation_off";
$tdatagroup_operation_off[".nSecOptions"] = 0;

$tdatagroup_operation_off[".mainTableOwnerID"] = "";
$tdatagroup_operation_off[".entityType"] = 0;
$tdatagroup_operation_off[".connId"] = "notif_basic1_at_localhost";


$tdatagroup_operation_off[".strOriginalTableName"] = "group_operation_off";

	



$tdatagroup_operation_off[".showAddInPopup"] = false;

$tdatagroup_operation_off[".showEditInPopup"] = false;

$tdatagroup_operation_off[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_operation_off[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_operation_off[".listAjax"] = false;
//	temporary
$tdatagroup_operation_off[".listAjax"] = false;

	$tdatagroup_operation_off[".audit"] = false;

	$tdatagroup_operation_off[".locking"] = false;


$pages = $tdatagroup_operation_off[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_operation_off[".edit"] = true;
	$tdatagroup_operation_off[".afterEditAction"] = 1;
	$tdatagroup_operation_off[".closePopupAfterEdit"] = 1;
	$tdatagroup_operation_off[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_operation_off[".add"] = true;
$tdatagroup_operation_off[".afterAddAction"] = 1;
$tdatagroup_operation_off[".closePopupAfterAdd"] = 1;
$tdatagroup_operation_off[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_operation_off[".list"] = true;
}



$tdatagroup_operation_off[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup_operation_off[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_operation_off[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_operation_off[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_operation_off[".printFriendly"] = true;
}



$tdatagroup_operation_off[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_operation_off[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_operation_off[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_operation_off[".isUseAjaxSuggest"] = true;

$tdatagroup_operation_off[".rowHighlite"] = true;





$tdatagroup_operation_off[".ajaxCodeSnippetAdded"] = false;

$tdatagroup_operation_off[".buttonsAdded"] = false;

$tdatagroup_operation_off[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup_operation_off[".isUseTimeForSearch"] = false;


$tdatagroup_operation_off[".badgeColor"] = "8FBC8B";


$tdatagroup_operation_off[".allSearchFields"] = array();
$tdatagroup_operation_off[".filterFields"] = array();
$tdatagroup_operation_off[".requiredSearchFields"] = array();

$tdatagroup_operation_off[".googleLikeFields"] = array();
$tdatagroup_operation_off[".googleLikeFields"][] = "operation_id";
$tdatagroup_operation_off[".googleLikeFields"][] = "group_id";
$tdatagroup_operation_off[".googleLikeFields"][] = "day_off";
$tdatagroup_operation_off[".googleLikeFields"][] = "desc";



$tdatagroup_operation_off[".tableType"] = "list";

$tdatagroup_operation_off[".printerPageOrientation"] = 0;
$tdatagroup_operation_off[".nPrinterPageScale"] = 100;

$tdatagroup_operation_off[".nPrinterSplitRecords"] = 40;

$tdatagroup_operation_off[".geocodingEnabled"] = false;










$tdatagroup_operation_off[".pageSize"] = 20;

$tdatagroup_operation_off[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_operation_off[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_operation_off[".orderindexes"] = array();


$tdatagroup_operation_off[".sqlHead"] = "SELECT operation_id,  	group_id,  	day_off,  	`desc`";
$tdatagroup_operation_off[".sqlFrom"] = "FROM group_operation_off";
$tdatagroup_operation_off[".sqlWhereExpr"] = "";
$tdatagroup_operation_off[".sqlTail"] = "";

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
$tdatagroup_operation_off[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_operation_off[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_operation_off[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_operation_off[".highlightSearchResults"] = true;

$tableKeysgroup_operation_off = array();
$tableKeysgroup_operation_off[] = "operation_id";
$tdatagroup_operation_off[".Keys"] = $tableKeysgroup_operation_off;


$tdatagroup_operation_off[".hideMobileList"] = array();




//	operation_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "operation_id";
	$fdata["GoodName"] = "operation_id";
	$fdata["ownerTable"] = "group_operation_off";
	$fdata["Label"] = GetFieldLabel("group_operation_off","operation_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "operation_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "operation_id";

	
	
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


	$tdatagroup_operation_off["operation_id"] = $fdata;
		$tdatagroup_operation_off[".searchableFields"][] = "operation_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_operation_off";
	$fdata["Label"] = GetFieldLabel("group_operation_off","group_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "group";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "group_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "group_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatagroup_operation_off["group_id"] = $fdata;
		$tdatagroup_operation_off[".searchableFields"][] = "group_id";
//	day_off
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "day_off";
	$fdata["GoodName"] = "day_off";
	$fdata["ownerTable"] = "group_operation_off";
	$fdata["Label"] = GetFieldLabel("group_operation_off","day_off");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "day_off";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "day_off";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatagroup_operation_off["day_off"] = $fdata;
		$tdatagroup_operation_off[".searchableFields"][] = "day_off";
//	desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "desc";
	$fdata["GoodName"] = "desc";
	$fdata["ownerTable"] = "group_operation_off";
	$fdata["Label"] = GetFieldLabel("group_operation_off","desc");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "desc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`desc`";

	
	
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


	$tdatagroup_operation_off["desc"] = $fdata;
		$tdatagroup_operation_off[".searchableFields"][] = "desc";


$tables_data["group_operation_off"]=&$tdatagroup_operation_off;
$field_labels["group_operation_off"] = &$fieldLabelsgroup_operation_off;
$fieldToolTips["group_operation_off"] = &$fieldToolTipsgroup_operation_off;
$placeHolders["group_operation_off"] = &$placeHoldersgroup_operation_off;
$page_titles["group_operation_off"] = &$pageTitlesgroup_operation_off;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_operation_off"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["group_operation_off"] = array();



	
				$strOriginalDetailsTable="group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_operation_off"][0] = $masterParams;
				$masterTablesData["group_operation_off"][0]["masterKeys"] = array();
	$masterTablesData["group_operation_off"][0]["masterKeys"][]="group_id";
				$masterTablesData["group_operation_off"][0]["detailKeys"] = array();
	$masterTablesData["group_operation_off"][0]["detailKeys"][]="group_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group_operation_off()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "operation_id,  	group_id,  	day_off,  	`desc`";
$proto0["m_strFrom"] = "FROM group_operation_off";
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
	"m_strName" => "operation_id",
	"m_strTable" => "group_operation_off",
	"m_srcTableName" => "group_operation_off"
));

$proto6["m_sql"] = "operation_id";
$proto6["m_srcTableName"] = "group_operation_off";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_operation_off",
	"m_srcTableName" => "group_operation_off"
));

$proto8["m_sql"] = "group_id";
$proto8["m_srcTableName"] = "group_operation_off";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "day_off",
	"m_strTable" => "group_operation_off",
	"m_srcTableName" => "group_operation_off"
));

$proto10["m_sql"] = "day_off";
$proto10["m_srcTableName"] = "group_operation_off";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "desc",
	"m_strTable" => "group_operation_off",
	"m_srcTableName" => "group_operation_off"
));

$proto12["m_sql"] = "`desc`";
$proto12["m_srcTableName"] = "group_operation_off";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "group_operation_off";
$proto15["m_srcTableName"] = "group_operation_off";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "operation_id";
$proto15["m_columns"][] = "group_id";
$proto15["m_columns"][] = "day_off";
$proto15["m_columns"][] = "desc";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "group_operation_off";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "group_operation_off";
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
$proto0["m_srcTableName"]="group_operation_off";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group_operation_off = createSqlQuery_group_operation_off();


	
		;

				

$tdatagroup_operation_off[".sqlquery"] = $queryData_group_operation_off;



$tableEvents["group_operation_off"] = new eventsBase;
$tdatagroup_operation_off[".hasEvents"] = false;

?>