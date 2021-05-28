<?php
$tdataprovince = array();
$tdataprovince[".searchableFields"] = array();
$tdataprovince[".ShortName"] = "province";
$tdataprovince[".OwnerID"] = "";
$tdataprovince[".OriginalTable"] = "province";


$tdataprovince[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataprovince[".originalPagesByType"] = $tdataprovince[".pagesByType"];
$tdataprovince[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataprovince[".originalPages"] = $tdataprovince[".pages"];
$tdataprovince[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataprovince[".originalDefaultPages"] = $tdataprovince[".defaultPages"];

//	field labels
$fieldLabelsprovince = array();
$fieldToolTipsprovince = array();
$pageTitlesprovince = array();
$placeHoldersprovince = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprovince["English"] = array();
	$fieldToolTipsprovince["English"] = array();
	$placeHoldersprovince["English"] = array();
	$pageTitlesprovince["English"] = array();
	$fieldLabelsprovince["English"]["province_id"] = "Province Id";
	$fieldToolTipsprovince["English"]["province_id"] = "";
	$placeHoldersprovince["English"]["province_id"] = "";
	$fieldLabelsprovince["English"]["country_id"] = "Country Id";
	$fieldToolTipsprovince["English"]["country_id"] = "";
	$placeHoldersprovince["English"]["country_id"] = "";
	$fieldLabelsprovince["English"]["province_name"] = "Province Name";
	$fieldToolTipsprovince["English"]["province_name"] = "";
	$placeHoldersprovince["English"]["province_name"] = "";
	if (count($fieldToolTipsprovince["English"]))
		$tdataprovince[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsprovince["Indonesian"] = array();
	$fieldToolTipsprovince["Indonesian"] = array();
	$placeHoldersprovince["Indonesian"] = array();
	$pageTitlesprovince["Indonesian"] = array();
	$fieldLabelsprovince["Indonesian"]["province_id"] = "Province Id";
	$fieldToolTipsprovince["Indonesian"]["province_id"] = "";
	$placeHoldersprovince["Indonesian"]["province_id"] = "";
	$fieldLabelsprovince["Indonesian"]["country_id"] = "Country Id";
	$fieldToolTipsprovince["Indonesian"]["country_id"] = "";
	$placeHoldersprovince["Indonesian"]["country_id"] = "";
	$fieldLabelsprovince["Indonesian"]["province_name"] = "Province Name";
	$fieldToolTipsprovince["Indonesian"]["province_name"] = "";
	$placeHoldersprovince["Indonesian"]["province_name"] = "";
	if (count($fieldToolTipsprovince["Indonesian"]))
		$tdataprovince[".isUseToolTips"] = true;
}


	$tdataprovince[".NCSearch"] = true;



$tdataprovince[".shortTableName"] = "province";
$tdataprovince[".nSecOptions"] = 0;

$tdataprovince[".mainTableOwnerID"] = "";
$tdataprovince[".entityType"] = 0;
$tdataprovince[".connId"] = "notif_basic1_at_localhost";


$tdataprovince[".strOriginalTableName"] = "province";

	



$tdataprovince[".showAddInPopup"] = false;

$tdataprovince[".showEditInPopup"] = false;

$tdataprovince[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprovince[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprovince[".listAjax"] = false;
//	temporary
$tdataprovince[".listAjax"] = false;

	$tdataprovince[".audit"] = false;

	$tdataprovince[".locking"] = false;


$pages = $tdataprovince[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprovince[".edit"] = true;
	$tdataprovince[".afterEditAction"] = 1;
	$tdataprovince[".closePopupAfterEdit"] = 1;
	$tdataprovince[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprovince[".add"] = true;
$tdataprovince[".afterAddAction"] = 1;
$tdataprovince[".closePopupAfterAdd"] = 1;
$tdataprovince[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprovince[".list"] = true;
}



$tdataprovince[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprovince[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprovince[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprovince[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprovince[".printFriendly"] = true;
}



$tdataprovince[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprovince[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprovince[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprovince[".isUseAjaxSuggest"] = true;

$tdataprovince[".rowHighlite"] = true;





$tdataprovince[".ajaxCodeSnippetAdded"] = false;

$tdataprovince[".buttonsAdded"] = false;

$tdataprovince[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprovince[".isUseTimeForSearch"] = false;


$tdataprovince[".badgeColor"] = "DB7093";


$tdataprovince[".allSearchFields"] = array();
$tdataprovince[".filterFields"] = array();
$tdataprovince[".requiredSearchFields"] = array();

$tdataprovince[".googleLikeFields"] = array();
$tdataprovince[".googleLikeFields"][] = "province_id";
$tdataprovince[".googleLikeFields"][] = "country_id";
$tdataprovince[".googleLikeFields"][] = "province_name";



$tdataprovince[".tableType"] = "list";

$tdataprovince[".printerPageOrientation"] = 0;
$tdataprovince[".nPrinterPageScale"] = 100;

$tdataprovince[".nPrinterSplitRecords"] = 40;

$tdataprovince[".geocodingEnabled"] = false;










$tdataprovince[".pageSize"] = 20;

$tdataprovince[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprovince[".strOrderBy"] = $tstrOrderBy;

$tdataprovince[".orderindexes"] = array();


$tdataprovince[".sqlHead"] = "SELECT province_id,  	country_id,  	province_name";
$tdataprovince[".sqlFrom"] = "FROM province";
$tdataprovince[".sqlWhereExpr"] = "";
$tdataprovince[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprovince[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprovince[".arrGroupsPerPage"] = $arrGPP;

$tdataprovince[".highlightSearchResults"] = true;

$tableKeysprovince = array();
$tableKeysprovince[] = "province_id";
$tdataprovince[".Keys"] = $tableKeysprovince;


$tdataprovince[".hideMobileList"] = array();




//	province_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "province_id";
	$fdata["GoodName"] = "province_id";
	$fdata["ownerTable"] = "province";
	$fdata["Label"] = GetFieldLabel("province","province_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "province_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "province_id";

	
	
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


	$tdataprovince["province_id"] = $fdata;
		$tdataprovince[".searchableFields"][] = "province_id";
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "province";
	$fdata["Label"] = GetFieldLabel("province","country_id");
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
	$edata["LookupTable"] = "country";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "country_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "country_name";

	

	
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


	$tdataprovince["country_id"] = $fdata;
		$tdataprovince[".searchableFields"][] = "country_id";
//	province_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "province_name";
	$fdata["GoodName"] = "province_name";
	$fdata["ownerTable"] = "province";
	$fdata["Label"] = GetFieldLabel("province","province_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "province_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "province_name";

	
	
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


	$tdataprovince["province_name"] = $fdata;
		$tdataprovince[".searchableFields"][] = "province_name";


$tables_data["province"]=&$tdataprovince;
$field_labels["province"] = &$fieldLabelsprovince;
$fieldToolTips["province"] = &$fieldToolTipsprovince;
$placeHolders["province"] = &$placeHoldersprovince;
$page_titles["province"] = &$pageTitlesprovince;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["province"] = array();
//	personal
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="personal";
		$detailsParam["dOriginalTable"] = "personal";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "personal";
	$detailsParam["dCaptionTable"] = GetTableCaption("personal");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["province"][$dIndex] = $detailsParam;

	
		$detailsTablesData["province"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["province"][$dIndex]["masterKeys"][]="province_id";

				$detailsTablesData["province"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["province"][$dIndex]["detailKeys"][]="province_id";

// tables which are master tables for current table (detail)
$masterTablesData["province"] = array();



	
				$strOriginalDetailsTable="country";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="country";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "country";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["province"][0] = $masterParams;
				$masterTablesData["province"][0]["masterKeys"] = array();
	$masterTablesData["province"][0]["masterKeys"][]="country_id";
				$masterTablesData["province"][0]["detailKeys"] = array();
	$masterTablesData["province"][0]["detailKeys"][]="country_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_province()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "province_id,  	country_id,  	province_name";
$proto0["m_strFrom"] = "FROM province";
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
	"m_strName" => "province_id",
	"m_strTable" => "province",
	"m_srcTableName" => "province"
));

$proto6["m_sql"] = "province_id";
$proto6["m_srcTableName"] = "province";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "province",
	"m_srcTableName" => "province"
));

$proto8["m_sql"] = "country_id";
$proto8["m_srcTableName"] = "province";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "province_name",
	"m_strTable" => "province",
	"m_srcTableName" => "province"
));

$proto10["m_sql"] = "province_name";
$proto10["m_srcTableName"] = "province";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "province";
$proto13["m_srcTableName"] = "province";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "province_id";
$proto13["m_columns"][] = "country_id";
$proto13["m_columns"][] = "province_name";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "province";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "province";
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
$proto0["m_srcTableName"]="province";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_province = createSqlQuery_province();


	
		;

			

$tdataprovince[".sqlquery"] = $queryData_province;



$tableEvents["province"] = new eventsBase;
$tdataprovince[".hasEvents"] = false;

?>