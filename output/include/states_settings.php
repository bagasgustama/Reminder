<?php
$tdatastates = array();
$tdatastates[".searchableFields"] = array();
$tdatastates[".ShortName"] = "states";
$tdatastates[".OwnerID"] = "";
$tdatastates[".OriginalTable"] = "states";


$tdatastates[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatastates[".originalPagesByType"] = $tdatastates[".pagesByType"];
$tdatastates[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatastates[".originalPages"] = $tdatastates[".pages"];
$tdatastates[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatastates[".originalDefaultPages"] = $tdatastates[".defaultPages"];

//	field labels
$fieldLabelsstates = array();
$fieldToolTipsstates = array();
$pageTitlesstates = array();
$placeHoldersstates = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstates["English"] = array();
	$fieldToolTipsstates["English"] = array();
	$placeHoldersstates["English"] = array();
	$pageTitlesstates["English"] = array();
	$fieldLabelsstates["English"]["id"] = "Id";
	$fieldToolTipsstates["English"]["id"] = "";
	$placeHoldersstates["English"]["id"] = "";
	$fieldLabelsstates["English"]["name"] = "Name";
	$fieldToolTipsstates["English"]["name"] = "";
	$placeHoldersstates["English"]["name"] = "";
	$fieldLabelsstates["English"]["country_id"] = "Country Id";
	$fieldToolTipsstates["English"]["country_id"] = "";
	$placeHoldersstates["English"]["country_id"] = "";
	if (count($fieldToolTipsstates["English"]))
		$tdatastates[".isUseToolTips"] = true;
}


	$tdatastates[".NCSearch"] = true;



$tdatastates[".shortTableName"] = "states";
$tdatastates[".nSecOptions"] = 0;

$tdatastates[".mainTableOwnerID"] = "";
$tdatastates[".entityType"] = 0;
$tdatastates[".connId"] = "notif_basic1_at_localhost";


$tdatastates[".strOriginalTableName"] = "states";

	



$tdatastates[".showAddInPopup"] = false;

$tdatastates[".showEditInPopup"] = false;

$tdatastates[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatastates[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatastates[".listAjax"] = false;
//	temporary
$tdatastates[".listAjax"] = false;

	$tdatastates[".audit"] = false;

	$tdatastates[".locking"] = false;


$pages = $tdatastates[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastates[".edit"] = true;
	$tdatastates[".afterEditAction"] = 1;
	$tdatastates[".closePopupAfterEdit"] = 1;
	$tdatastates[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatastates[".add"] = true;
$tdatastates[".afterAddAction"] = 1;
$tdatastates[".closePopupAfterAdd"] = 1;
$tdatastates[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatastates[".list"] = true;
}



$tdatastates[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastates[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastates[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastates[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastates[".printFriendly"] = true;
}



$tdatastates[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastates[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastates[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastates[".isUseAjaxSuggest"] = true;

$tdatastates[".rowHighlite"] = true;





$tdatastates[".ajaxCodeSnippetAdded"] = false;

$tdatastates[".buttonsAdded"] = false;

$tdatastates[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastates[".isUseTimeForSearch"] = false;


$tdatastates[".badgeColor"] = "1E90FF";


$tdatastates[".allSearchFields"] = array();
$tdatastates[".filterFields"] = array();
$tdatastates[".requiredSearchFields"] = array();

$tdatastates[".googleLikeFields"] = array();
$tdatastates[".googleLikeFields"][] = "id";
$tdatastates[".googleLikeFields"][] = "name";
$tdatastates[".googleLikeFields"][] = "country_id";



$tdatastates[".tableType"] = "list";

$tdatastates[".printerPageOrientation"] = 0;
$tdatastates[".nPrinterPageScale"] = 100;

$tdatastates[".nPrinterSplitRecords"] = 40;

$tdatastates[".geocodingEnabled"] = false;










$tdatastates[".pageSize"] = 20;

$tdatastates[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastates[".strOrderBy"] = $tstrOrderBy;

$tdatastates[".orderindexes"] = array();


$tdatastates[".sqlHead"] = "SELECT id,  	name,  	country_id";
$tdatastates[".sqlFrom"] = "FROM states";
$tdatastates[".sqlWhereExpr"] = "";
$tdatastates[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastates[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastates[".arrGroupsPerPage"] = $arrGPP;

$tdatastates[".highlightSearchResults"] = true;

$tableKeysstates = array();
$tableKeysstates[] = "id";
$tdatastates[".Keys"] = $tableKeysstates;


$tdatastates[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "states";
	$fdata["Label"] = GetFieldLabel("states","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatastates["id"] = $fdata;
		$tdatastates[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "states";
	$fdata["Label"] = GetFieldLabel("states","name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatastates["name"] = $fdata;
		$tdatastates[".searchableFields"][] = "name";
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "states";
	$fdata["Label"] = GetFieldLabel("states","country_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "country_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_id";

	
	
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
	$edata["LookupTable"] = "countries";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "sortname";

	

	
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


	$tdatastates["country_id"] = $fdata;
		$tdatastates[".searchableFields"][] = "country_id";


$tables_data["states"]=&$tdatastates;
$field_labels["states"] = &$fieldLabelsstates;
$fieldToolTips["states"] = &$fieldToolTipsstates;
$placeHolders["states"] = &$placeHoldersstates;
$page_titles["states"] = &$pageTitlesstates;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["states"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["states"] = array();



	
				$strOriginalDetailsTable="countries";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="countries";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "countries";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["states"][0] = $masterParams;
				$masterTablesData["states"][0]["masterKeys"] = array();
	$masterTablesData["states"][0]["masterKeys"][]="id";
				$masterTablesData["states"][0]["detailKeys"] = array();
	$masterTablesData["states"][0]["detailKeys"][]="country_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_states()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	country_id";
$proto0["m_strFrom"] = "FROM states";
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
	"m_strName" => "id",
	"m_strTable" => "states",
	"m_srcTableName" => "states"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "states";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "states",
	"m_srcTableName" => "states"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "states";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "states",
	"m_srcTableName" => "states"
));

$proto10["m_sql"] = "country_id";
$proto10["m_srcTableName"] = "states";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "states";
$proto13["m_srcTableName"] = "states";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "name";
$proto13["m_columns"][] = "country_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "states";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "states";
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
$proto0["m_srcTableName"]="states";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_states = createSqlQuery_states();


	
		;

			

$tdatastates[".sqlquery"] = $queryData_states;



$tableEvents["states"] = new eventsBase;
$tdatastates[".hasEvents"] = false;

?>