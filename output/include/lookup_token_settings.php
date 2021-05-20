<?php
$tdatalookup_token = array();
$tdatalookup_token[".searchableFields"] = array();
$tdatalookup_token[".ShortName"] = "lookup_token";
$tdatalookup_token[".OwnerID"] = "";
$tdatalookup_token[".OriginalTable"] = "lookup_token";


$tdatalookup_token[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalookup_token[".originalPagesByType"] = $tdatalookup_token[".pagesByType"];
$tdatalookup_token[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalookup_token[".originalPages"] = $tdatalookup_token[".pages"];
$tdatalookup_token[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalookup_token[".originalDefaultPages"] = $tdatalookup_token[".defaultPages"];

//	field labels
$fieldLabelslookup_token = array();
$fieldToolTipslookup_token = array();
$pageTitleslookup_token = array();
$placeHolderslookup_token = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslookup_token["English"] = array();
	$fieldToolTipslookup_token["English"] = array();
	$placeHolderslookup_token["English"] = array();
	$pageTitleslookup_token["English"] = array();
	$fieldLabelslookup_token["English"]["id_lookup"] = "Id Lookup";
	$fieldToolTipslookup_token["English"]["id_lookup"] = "";
	$placeHolderslookup_token["English"]["id_lookup"] = "";
	$fieldLabelslookup_token["English"]["id_group"] = "Id Group";
	$fieldToolTipslookup_token["English"]["id_group"] = "";
	$placeHolderslookup_token["English"]["id_group"] = "";
	$fieldLabelslookup_token["English"]["group_identifier"] = "Group Identifier";
	$fieldToolTipslookup_token["English"]["group_identifier"] = "";
	$placeHolderslookup_token["English"]["group_identifier"] = "";
	$fieldLabelslookup_token["English"]["token"] = "Token";
	$fieldToolTipslookup_token["English"]["token"] = "";
	$placeHolderslookup_token["English"]["token"] = "";
	if (count($fieldToolTipslookup_token["English"]))
		$tdatalookup_token[".isUseToolTips"] = true;
}


	$tdatalookup_token[".NCSearch"] = true;



$tdatalookup_token[".shortTableName"] = "lookup_token";
$tdatalookup_token[".nSecOptions"] = 0;

$tdatalookup_token[".mainTableOwnerID"] = "";
$tdatalookup_token[".entityType"] = 0;
$tdatalookup_token[".connId"] = "notif_basic1_at_localhost";


$tdatalookup_token[".strOriginalTableName"] = "lookup_token";

	



$tdatalookup_token[".showAddInPopup"] = false;

$tdatalookup_token[".showEditInPopup"] = false;

$tdatalookup_token[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalookup_token[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalookup_token[".listAjax"] = false;
//	temporary
$tdatalookup_token[".listAjax"] = false;

	$tdatalookup_token[".audit"] = false;

	$tdatalookup_token[".locking"] = false;


$pages = $tdatalookup_token[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalookup_token[".edit"] = true;
	$tdatalookup_token[".afterEditAction"] = 1;
	$tdatalookup_token[".closePopupAfterEdit"] = 1;
	$tdatalookup_token[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalookup_token[".add"] = true;
$tdatalookup_token[".afterAddAction"] = 1;
$tdatalookup_token[".closePopupAfterAdd"] = 1;
$tdatalookup_token[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalookup_token[".list"] = true;
}



$tdatalookup_token[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalookup_token[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalookup_token[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalookup_token[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalookup_token[".printFriendly"] = true;
}



$tdatalookup_token[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalookup_token[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalookup_token[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalookup_token[".isUseAjaxSuggest"] = true;

$tdatalookup_token[".rowHighlite"] = true;





$tdatalookup_token[".ajaxCodeSnippetAdded"] = false;

$tdatalookup_token[".buttonsAdded"] = false;

$tdatalookup_token[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalookup_token[".isUseTimeForSearch"] = false;


$tdatalookup_token[".badgeColor"] = "D2AF80";


$tdatalookup_token[".allSearchFields"] = array();
$tdatalookup_token[".filterFields"] = array();
$tdatalookup_token[".requiredSearchFields"] = array();

$tdatalookup_token[".googleLikeFields"] = array();
$tdatalookup_token[".googleLikeFields"][] = "id_lookup";
$tdatalookup_token[".googleLikeFields"][] = "id_group";
$tdatalookup_token[".googleLikeFields"][] = "group_identifier";
$tdatalookup_token[".googleLikeFields"][] = "token";



$tdatalookup_token[".tableType"] = "list";

$tdatalookup_token[".printerPageOrientation"] = 0;
$tdatalookup_token[".nPrinterPageScale"] = 100;

$tdatalookup_token[".nPrinterSplitRecords"] = 40;

$tdatalookup_token[".geocodingEnabled"] = false;










$tdatalookup_token[".pageSize"] = 20;

$tdatalookup_token[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalookup_token[".strOrderBy"] = $tstrOrderBy;

$tdatalookup_token[".orderindexes"] = array();


$tdatalookup_token[".sqlHead"] = "SELECT id_lookup,  	id_group,  	group_identifier,  	token";
$tdatalookup_token[".sqlFrom"] = "FROM lookup_token";
$tdatalookup_token[".sqlWhereExpr"] = "";
$tdatalookup_token[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalookup_token[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalookup_token[".arrGroupsPerPage"] = $arrGPP;

$tdatalookup_token[".highlightSearchResults"] = true;

$tableKeyslookup_token = array();
$tableKeyslookup_token[] = "id_lookup";
$tdatalookup_token[".Keys"] = $tableKeyslookup_token;


$tdatalookup_token[".hideMobileList"] = array();




//	id_lookup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_lookup";
	$fdata["GoodName"] = "id_lookup";
	$fdata["ownerTable"] = "lookup_token";
	$fdata["Label"] = GetFieldLabel("lookup_token","id_lookup");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_lookup";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_lookup";

	
	
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


	$tdatalookup_token["id_lookup"] = $fdata;
		$tdatalookup_token[".searchableFields"][] = "id_lookup";
//	id_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_group";
	$fdata["GoodName"] = "id_group";
	$fdata["ownerTable"] = "lookup_token";
	$fdata["Label"] = GetFieldLabel("lookup_token","id_group");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_group";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_group";

	
	
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


	$tdatalookup_token["id_group"] = $fdata;
		$tdatalookup_token[".searchableFields"][] = "id_group";
//	group_identifier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "group_identifier";
	$fdata["GoodName"] = "group_identifier";
	$fdata["ownerTable"] = "lookup_token";
	$fdata["Label"] = GetFieldLabel("lookup_token","group_identifier");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "group_identifier";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_identifier";

	
	
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
			$edata["EditParams"].= " maxlength=32";

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


	$tdatalookup_token["group_identifier"] = $fdata;
		$tdatalookup_token[".searchableFields"][] = "group_identifier";
//	token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "token";
	$fdata["GoodName"] = "token";
	$fdata["ownerTable"] = "lookup_token";
	$fdata["Label"] = GetFieldLabel("lookup_token","token");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "token";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "token";

	
	
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
			$edata["EditParams"].= " maxlength=32";

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


	$tdatalookup_token["token"] = $fdata;
		$tdatalookup_token[".searchableFields"][] = "token";


$tables_data["lookup_token"]=&$tdatalookup_token;
$field_labels["lookup_token"] = &$fieldLabelslookup_token;
$fieldToolTips["lookup_token"] = &$fieldToolTipslookup_token;
$placeHolders["lookup_token"] = &$placeHolderslookup_token;
$page_titles["lookup_token"] = &$pageTitleslookup_token;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lookup_token"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["lookup_token"] = array();



	
				$strOriginalDetailsTable="group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["lookup_token"][0] = $masterParams;
				$masterTablesData["lookup_token"][0]["masterKeys"] = array();
	$masterTablesData["lookup_token"][0]["masterKeys"][]="group_id";
				$masterTablesData["lookup_token"][0]["detailKeys"] = array();
	$masterTablesData["lookup_token"][0]["detailKeys"][]="id_group";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lookup_token()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_lookup,  	id_group,  	group_identifier,  	token";
$proto0["m_strFrom"] = "FROM lookup_token";
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
	"m_strName" => "id_lookup",
	"m_strTable" => "lookup_token",
	"m_srcTableName" => "lookup_token"
));

$proto6["m_sql"] = "id_lookup";
$proto6["m_srcTableName"] = "lookup_token";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_group",
	"m_strTable" => "lookup_token",
	"m_srcTableName" => "lookup_token"
));

$proto8["m_sql"] = "id_group";
$proto8["m_srcTableName"] = "lookup_token";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "group_identifier",
	"m_strTable" => "lookup_token",
	"m_srcTableName" => "lookup_token"
));

$proto10["m_sql"] = "group_identifier";
$proto10["m_srcTableName"] = "lookup_token";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "token",
	"m_strTable" => "lookup_token",
	"m_srcTableName" => "lookup_token"
));

$proto12["m_sql"] = "token";
$proto12["m_srcTableName"] = "lookup_token";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "lookup_token";
$proto15["m_srcTableName"] = "lookup_token";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_lookup";
$proto15["m_columns"][] = "id_group";
$proto15["m_columns"][] = "group_identifier";
$proto15["m_columns"][] = "token";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "lookup_token";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "lookup_token";
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
$proto0["m_srcTableName"]="lookup_token";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lookup_token = createSqlQuery_lookup_token();


	
		;

				

$tdatalookup_token[".sqlquery"] = $queryData_lookup_token;



$tableEvents["lookup_token"] = new eventsBase;
$tdatalookup_token[".hasEvents"] = false;

?>