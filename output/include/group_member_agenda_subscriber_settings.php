<?php
$tdatagroup_member_agenda_subscriber = array();
$tdatagroup_member_agenda_subscriber[".searchableFields"] = array();
$tdatagroup_member_agenda_subscriber[".ShortName"] = "group_member_agenda_subscriber";
$tdatagroup_member_agenda_subscriber[".OwnerID"] = "";
$tdatagroup_member_agenda_subscriber[".OriginalTable"] = "group_member_agenda_subscriber";


$tdatagroup_member_agenda_subscriber[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagroup_member_agenda_subscriber[".originalPagesByType"] = $tdatagroup_member_agenda_subscriber[".pagesByType"];
$tdatagroup_member_agenda_subscriber[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagroup_member_agenda_subscriber[".originalPages"] = $tdatagroup_member_agenda_subscriber[".pages"];
$tdatagroup_member_agenda_subscriber[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagroup_member_agenda_subscriber[".originalDefaultPages"] = $tdatagroup_member_agenda_subscriber[".defaultPages"];

//	field labels
$fieldLabelsgroup_member_agenda_subscriber = array();
$fieldToolTipsgroup_member_agenda_subscriber = array();
$pageTitlesgroup_member_agenda_subscriber = array();
$placeHoldersgroup_member_agenda_subscriber = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_member_agenda_subscriber["English"] = array();
	$fieldToolTipsgroup_member_agenda_subscriber["English"] = array();
	$placeHoldersgroup_member_agenda_subscriber["English"] = array();
	$pageTitlesgroup_member_agenda_subscriber["English"] = array();
	$fieldLabelsgroup_member_agenda_subscriber["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsgroup_member_agenda_subscriber["English"]["group_member_id"] = "";
	$placeHoldersgroup_member_agenda_subscriber["English"]["group_member_id"] = "";
	$fieldLabelsgroup_member_agenda_subscriber["English"]["member_id"] = "Member Id";
	$fieldToolTipsgroup_member_agenda_subscriber["English"]["member_id"] = "";
	$placeHoldersgroup_member_agenda_subscriber["English"]["member_id"] = "";
	$fieldLabelsgroup_member_agenda_subscriber["English"]["agenda_type_id"] = "Agenda Type Id";
	$fieldToolTipsgroup_member_agenda_subscriber["English"]["agenda_type_id"] = "";
	$placeHoldersgroup_member_agenda_subscriber["English"]["agenda_type_id"] = "";
	if (count($fieldToolTipsgroup_member_agenda_subscriber["English"]))
		$tdatagroup_member_agenda_subscriber[".isUseToolTips"] = true;
}


	$tdatagroup_member_agenda_subscriber[".NCSearch"] = true;



$tdatagroup_member_agenda_subscriber[".shortTableName"] = "group_member_agenda_subscriber";
$tdatagroup_member_agenda_subscriber[".nSecOptions"] = 0;

$tdatagroup_member_agenda_subscriber[".mainTableOwnerID"] = "";
$tdatagroup_member_agenda_subscriber[".entityType"] = 0;
$tdatagroup_member_agenda_subscriber[".connId"] = "notif_basic1_at_localhost";


$tdatagroup_member_agenda_subscriber[".strOriginalTableName"] = "group_member_agenda_subscriber";

	



$tdatagroup_member_agenda_subscriber[".showAddInPopup"] = false;

$tdatagroup_member_agenda_subscriber[".showEditInPopup"] = false;

$tdatagroup_member_agenda_subscriber[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_member_agenda_subscriber[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_member_agenda_subscriber[".listAjax"] = false;
//	temporary
$tdatagroup_member_agenda_subscriber[".listAjax"] = false;

	$tdatagroup_member_agenda_subscriber[".audit"] = false;

	$tdatagroup_member_agenda_subscriber[".locking"] = false;


$pages = $tdatagroup_member_agenda_subscriber[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_member_agenda_subscriber[".edit"] = true;
	$tdatagroup_member_agenda_subscriber[".afterEditAction"] = 1;
	$tdatagroup_member_agenda_subscriber[".closePopupAfterEdit"] = 1;
	$tdatagroup_member_agenda_subscriber[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_member_agenda_subscriber[".add"] = true;
$tdatagroup_member_agenda_subscriber[".afterAddAction"] = 1;
$tdatagroup_member_agenda_subscriber[".closePopupAfterAdd"] = 1;
$tdatagroup_member_agenda_subscriber[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_member_agenda_subscriber[".list"] = true;
}



$tdatagroup_member_agenda_subscriber[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup_member_agenda_subscriber[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_member_agenda_subscriber[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_member_agenda_subscriber[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_member_agenda_subscriber[".printFriendly"] = true;
}



$tdatagroup_member_agenda_subscriber[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_member_agenda_subscriber[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_member_agenda_subscriber[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_member_agenda_subscriber[".isUseAjaxSuggest"] = true;

$tdatagroup_member_agenda_subscriber[".rowHighlite"] = true;





$tdatagroup_member_agenda_subscriber[".ajaxCodeSnippetAdded"] = false;

$tdatagroup_member_agenda_subscriber[".buttonsAdded"] = false;

$tdatagroup_member_agenda_subscriber[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup_member_agenda_subscriber[".isUseTimeForSearch"] = false;


$tdatagroup_member_agenda_subscriber[".badgeColor"] = "9ACD32";


$tdatagroup_member_agenda_subscriber[".allSearchFields"] = array();
$tdatagroup_member_agenda_subscriber[".filterFields"] = array();
$tdatagroup_member_agenda_subscriber[".requiredSearchFields"] = array();

$tdatagroup_member_agenda_subscriber[".googleLikeFields"] = array();
$tdatagroup_member_agenda_subscriber[".googleLikeFields"][] = "group_member_id";
$tdatagroup_member_agenda_subscriber[".googleLikeFields"][] = "member_id";
$tdatagroup_member_agenda_subscriber[".googleLikeFields"][] = "agenda_type_id";



$tdatagroup_member_agenda_subscriber[".tableType"] = "list";

$tdatagroup_member_agenda_subscriber[".printerPageOrientation"] = 0;
$tdatagroup_member_agenda_subscriber[".nPrinterPageScale"] = 100;

$tdatagroup_member_agenda_subscriber[".nPrinterSplitRecords"] = 40;

$tdatagroup_member_agenda_subscriber[".geocodingEnabled"] = false;










$tdatagroup_member_agenda_subscriber[".pageSize"] = 20;

$tdatagroup_member_agenda_subscriber[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_member_agenda_subscriber[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_member_agenda_subscriber[".orderindexes"] = array();


$tdatagroup_member_agenda_subscriber[".sqlHead"] = "SELECT group_member_id,  	member_id,  	agenda_type_id";
$tdatagroup_member_agenda_subscriber[".sqlFrom"] = "FROM group_member_agenda_subscriber";
$tdatagroup_member_agenda_subscriber[".sqlWhereExpr"] = "";
$tdatagroup_member_agenda_subscriber[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "member_id = ':session.member_id'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatagroup_member_agenda_subscriber[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_member_agenda_subscriber[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_member_agenda_subscriber[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_member_agenda_subscriber[".highlightSearchResults"] = true;

$tableKeysgroup_member_agenda_subscriber = array();
$tableKeysgroup_member_agenda_subscriber[] = "group_member_id";
$tdatagroup_member_agenda_subscriber[".Keys"] = $tableKeysgroup_member_agenda_subscriber;


$tdatagroup_member_agenda_subscriber[".hideMobileList"] = array();




//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "group_member_agenda_subscriber";
	$fdata["Label"] = GetFieldLabel("group_member_agenda_subscriber","group_member_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_member_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_id";

	
	
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


	$tdatagroup_member_agenda_subscriber["group_member_id"] = $fdata;
		$tdatagroup_member_agenda_subscriber[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "group_member_agenda_subscriber";
	$fdata["Label"] = GetFieldLabel("group_member_agenda_subscriber","member_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "member_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "member_id";

	
	
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
	$edata["LookupTable"] = "personal";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "member_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "name";

				$edata["LookupWhere"] = "member_id = ':session.member_id'";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "agenda_type_id";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatagroup_member_agenda_subscriber["member_id"] = $fdata;
		$tdatagroup_member_agenda_subscriber[".searchableFields"][] = "member_id";
//	agenda_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "agenda_type_id";
	$fdata["GoodName"] = "agenda_type_id";
	$fdata["ownerTable"] = "group_member_agenda_subscriber";
	$fdata["Label"] = GetFieldLabel("group_member_agenda_subscriber","agenda_type_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "agenda_type_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agenda_type_id";

	
	
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
	$edata["LookupTable"] = "group_agenda_type1";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "agenda_type_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "agenda_type";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "member_id", "lookup" => "member_id" );

	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatagroup_member_agenda_subscriber["agenda_type_id"] = $fdata;
		$tdatagroup_member_agenda_subscriber[".searchableFields"][] = "agenda_type_id";


$tables_data["group_member_agenda_subscriber"]=&$tdatagroup_member_agenda_subscriber;
$field_labels["group_member_agenda_subscriber"] = &$fieldLabelsgroup_member_agenda_subscriber;
$fieldToolTips["group_member_agenda_subscriber"] = &$fieldToolTipsgroup_member_agenda_subscriber;
$placeHolders["group_member_agenda_subscriber"] = &$placeHoldersgroup_member_agenda_subscriber;
$page_titles["group_member_agenda_subscriber"] = &$pageTitlesgroup_member_agenda_subscriber;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_member_agenda_subscriber"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["group_member_agenda_subscriber"] = array();



	
				$strOriginalDetailsTable="personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_member_agenda_subscriber"][0] = $masterParams;
				$masterTablesData["group_member_agenda_subscriber"][0]["masterKeys"] = array();
	$masterTablesData["group_member_agenda_subscriber"][0]["masterKeys"][]="member_id";
				$masterTablesData["group_member_agenda_subscriber"][0]["detailKeys"] = array();
	$masterTablesData["group_member_agenda_subscriber"][0]["detailKeys"][]="member_id";
		
	
				$strOriginalDetailsTable="group_agenda";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group_agenda";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group_agenda";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_member_agenda_subscriber"][1] = $masterParams;
				$masterTablesData["group_member_agenda_subscriber"][1]["masterKeys"] = array();
	$masterTablesData["group_member_agenda_subscriber"][1]["masterKeys"][]="group_agenda_id";
				$masterTablesData["group_member_agenda_subscriber"][1]["detailKeys"] = array();
	$masterTablesData["group_member_agenda_subscriber"][1]["detailKeys"][]="agenda_type_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group_member_agenda_subscriber()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_member_id,  	member_id,  	agenda_type_id";
$proto0["m_strFrom"] = "FROM group_member_agenda_subscriber";
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
	"m_strName" => "group_member_id",
	"m_strTable" => "group_member_agenda_subscriber",
	"m_srcTableName" => "group_member_agenda_subscriber"
));

$proto6["m_sql"] = "group_member_id";
$proto6["m_srcTableName"] = "group_member_agenda_subscriber";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "group_member_agenda_subscriber",
	"m_srcTableName" => "group_member_agenda_subscriber"
));

$proto8["m_sql"] = "member_id";
$proto8["m_srcTableName"] = "group_member_agenda_subscriber";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "agenda_type_id",
	"m_strTable" => "group_member_agenda_subscriber",
	"m_srcTableName" => "group_member_agenda_subscriber"
));

$proto10["m_sql"] = "agenda_type_id";
$proto10["m_srcTableName"] = "group_member_agenda_subscriber";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "group_member_agenda_subscriber";
$proto13["m_srcTableName"] = "group_member_agenda_subscriber";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "group_member_id";
$proto13["m_columns"][] = "member_id";
$proto13["m_columns"][] = "agenda_type_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "group_member_agenda_subscriber";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "group_member_agenda_subscriber";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="group_member_agenda_subscriber";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group_member_agenda_subscriber = createSqlQuery_group_member_agenda_subscriber();


	
		;

			

$tdatagroup_member_agenda_subscriber[".sqlquery"] = $queryData_group_member_agenda_subscriber;



include_once(getabspath("include/group_member_agenda_subscriber_events.php"));
$tableEvents["group_member_agenda_subscriber"] = new eventclass_group_member_agenda_subscriber;
$tdatagroup_member_agenda_subscriber[".hasEvents"] = true;

?>