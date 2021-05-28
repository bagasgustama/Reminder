<?php
$tdatapersonal_channel = array();
$tdatapersonal_channel[".searchableFields"] = array();
$tdatapersonal_channel[".ShortName"] = "personal_channel";
$tdatapersonal_channel[".OwnerID"] = "member_id";
$tdatapersonal_channel[".OriginalTable"] = "personal_channel";


$tdatapersonal_channel[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapersonal_channel[".originalPagesByType"] = $tdatapersonal_channel[".pagesByType"];
$tdatapersonal_channel[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapersonal_channel[".originalPages"] = $tdatapersonal_channel[".pages"];
$tdatapersonal_channel[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapersonal_channel[".originalDefaultPages"] = $tdatapersonal_channel[".defaultPages"];

//	field labels
$fieldLabelspersonal_channel = array();
$fieldToolTipspersonal_channel = array();
$pageTitlespersonal_channel = array();
$placeHolderspersonal_channel = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspersonal_channel["English"] = array();
	$fieldToolTipspersonal_channel["English"] = array();
	$placeHolderspersonal_channel["English"] = array();
	$pageTitlespersonal_channel["English"] = array();
	$fieldLabelspersonal_channel["English"]["member_ch_id"] = "Member Ch Id";
	$fieldToolTipspersonal_channel["English"]["member_ch_id"] = "";
	$placeHolderspersonal_channel["English"]["member_ch_id"] = "";
	$fieldLabelspersonal_channel["English"]["member_id"] = "Member Id";
	$fieldToolTipspersonal_channel["English"]["member_id"] = "";
	$placeHolderspersonal_channel["English"]["member_id"] = "";
	$fieldLabelspersonal_channel["English"]["channel_id"] = "Channel Id";
	$fieldToolTipspersonal_channel["English"]["channel_id"] = "";
	$placeHolderspersonal_channel["English"]["channel_id"] = "";
	$fieldLabelspersonal_channel["English"]["chat_id"] = "Chat Id";
	$fieldToolTipspersonal_channel["English"]["chat_id"] = "";
	$placeHolderspersonal_channel["English"]["chat_id"] = "";
	if (count($fieldToolTipspersonal_channel["English"]))
		$tdatapersonal_channel[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelspersonal_channel["Indonesian"] = array();
	$fieldToolTipspersonal_channel["Indonesian"] = array();
	$placeHolderspersonal_channel["Indonesian"] = array();
	$pageTitlespersonal_channel["Indonesian"] = array();
	$fieldLabelspersonal_channel["Indonesian"]["member_ch_id"] = "Member Ch Id";
	$fieldToolTipspersonal_channel["Indonesian"]["member_ch_id"] = "";
	$placeHolderspersonal_channel["Indonesian"]["member_ch_id"] = "";
	$fieldLabelspersonal_channel["Indonesian"]["member_id"] = "Member Id";
	$fieldToolTipspersonal_channel["Indonesian"]["member_id"] = "";
	$placeHolderspersonal_channel["Indonesian"]["member_id"] = "";
	$fieldLabelspersonal_channel["Indonesian"]["channel_id"] = "Channel Id";
	$fieldToolTipspersonal_channel["Indonesian"]["channel_id"] = "";
	$placeHolderspersonal_channel["Indonesian"]["channel_id"] = "";
	$fieldLabelspersonal_channel["Indonesian"]["chat_id"] = "Chat Id";
	$fieldToolTipspersonal_channel["Indonesian"]["chat_id"] = "";
	$placeHolderspersonal_channel["Indonesian"]["chat_id"] = "";
	if (count($fieldToolTipspersonal_channel["Indonesian"]))
		$tdatapersonal_channel[".isUseToolTips"] = true;
}


	$tdatapersonal_channel[".NCSearch"] = true;



$tdatapersonal_channel[".shortTableName"] = "personal_channel";
$tdatapersonal_channel[".nSecOptions"] = 1;

$tdatapersonal_channel[".mainTableOwnerID"] = "member_id";
$tdatapersonal_channel[".entityType"] = 0;
$tdatapersonal_channel[".connId"] = "notif_basic1_at_localhost";


$tdatapersonal_channel[".strOriginalTableName"] = "personal_channel";

	



$tdatapersonal_channel[".showAddInPopup"] = false;

$tdatapersonal_channel[".showEditInPopup"] = false;

$tdatapersonal_channel[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapersonal_channel[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapersonal_channel[".listAjax"] = false;
//	temporary
$tdatapersonal_channel[".listAjax"] = false;

	$tdatapersonal_channel[".audit"] = false;

	$tdatapersonal_channel[".locking"] = false;


$pages = $tdatapersonal_channel[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersonal_channel[".edit"] = true;
	$tdatapersonal_channel[".afterEditAction"] = 1;
	$tdatapersonal_channel[".closePopupAfterEdit"] = 1;
	$tdatapersonal_channel[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersonal_channel[".add"] = true;
$tdatapersonal_channel[".afterAddAction"] = 1;
$tdatapersonal_channel[".closePopupAfterAdd"] = 1;
$tdatapersonal_channel[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersonal_channel[".list"] = true;
}



$tdatapersonal_channel[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersonal_channel[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersonal_channel[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersonal_channel[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersonal_channel[".printFriendly"] = true;
}



$tdatapersonal_channel[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersonal_channel[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersonal_channel[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersonal_channel[".isUseAjaxSuggest"] = true;

$tdatapersonal_channel[".rowHighlite"] = true;





$tdatapersonal_channel[".ajaxCodeSnippetAdded"] = false;

$tdatapersonal_channel[".buttonsAdded"] = false;

$tdatapersonal_channel[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersonal_channel[".isUseTimeForSearch"] = false;


$tdatapersonal_channel[".badgeColor"] = "CFAE83";


$tdatapersonal_channel[".allSearchFields"] = array();
$tdatapersonal_channel[".filterFields"] = array();
$tdatapersonal_channel[".requiredSearchFields"] = array();

$tdatapersonal_channel[".googleLikeFields"] = array();
$tdatapersonal_channel[".googleLikeFields"][] = "member_ch_id";
$tdatapersonal_channel[".googleLikeFields"][] = "member_id";
$tdatapersonal_channel[".googleLikeFields"][] = "channel_id";
$tdatapersonal_channel[".googleLikeFields"][] = "chat_id";



$tdatapersonal_channel[".tableType"] = "list";

$tdatapersonal_channel[".printerPageOrientation"] = 0;
$tdatapersonal_channel[".nPrinterPageScale"] = 100;

$tdatapersonal_channel[".nPrinterSplitRecords"] = 40;

$tdatapersonal_channel[".geocodingEnabled"] = false;










$tdatapersonal_channel[".pageSize"] = 20;

$tdatapersonal_channel[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapersonal_channel[".strOrderBy"] = $tstrOrderBy;

$tdatapersonal_channel[".orderindexes"] = array();


$tdatapersonal_channel[".sqlHead"] = "SELECT member_ch_id,  	member_id,  	channel_id,  	chat_id";
$tdatapersonal_channel[".sqlFrom"] = "FROM personal_channel";
$tdatapersonal_channel[".sqlWhereExpr"] = "";
$tdatapersonal_channel[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersonal_channel[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersonal_channel[".arrGroupsPerPage"] = $arrGPP;

$tdatapersonal_channel[".highlightSearchResults"] = true;

$tableKeyspersonal_channel = array();
$tableKeyspersonal_channel[] = "member_ch_id";
$tdatapersonal_channel[".Keys"] = $tableKeyspersonal_channel;


$tdatapersonal_channel[".hideMobileList"] = array();




//	member_ch_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "member_ch_id";
	$fdata["GoodName"] = "member_ch_id";
	$fdata["ownerTable"] = "personal_channel";
	$fdata["Label"] = GetFieldLabel("personal_channel","member_ch_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "member_ch_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "member_ch_id";

	
	
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


	$tdatapersonal_channel["member_ch_id"] = $fdata;
		$tdatapersonal_channel[".searchableFields"][] = "member_ch_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "personal_channel";
	$fdata["Label"] = GetFieldLabel("personal_channel","member_id");
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


	$tdatapersonal_channel["member_id"] = $fdata;
		$tdatapersonal_channel[".searchableFields"][] = "member_id";
//	channel_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "channel_id";
	$fdata["GoodName"] = "channel_id";
	$fdata["ownerTable"] = "personal_channel";
	$fdata["Label"] = GetFieldLabel("personal_channel","channel_id");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "channel_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "channel_id";

	
	
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
	$edata["LookupTable"] = "channel";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "channel_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "channel_name";

	

	
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


	$tdatapersonal_channel["channel_id"] = $fdata;
		$tdatapersonal_channel[".searchableFields"][] = "channel_id";
//	chat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "chat_id";
	$fdata["GoodName"] = "chat_id";
	$fdata["ownerTable"] = "personal_channel";
	$fdata["Label"] = GetFieldLabel("personal_channel","chat_id");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "chat_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "chat_id";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatapersonal_channel["chat_id"] = $fdata;
		$tdatapersonal_channel[".searchableFields"][] = "chat_id";


$tables_data["personal_channel"]=&$tdatapersonal_channel;
$field_labels["personal_channel"] = &$fieldLabelspersonal_channel;
$fieldToolTips["personal_channel"] = &$fieldToolTipspersonal_channel;
$placeHolders["personal_channel"] = &$placeHolderspersonal_channel;
$page_titles["personal_channel"] = &$pageTitlespersonal_channel;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["personal_channel"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["personal_channel"] = array();



	
				$strOriginalDetailsTable="channel";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="channel";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "channel";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["personal_channel"][0] = $masterParams;
				$masterTablesData["personal_channel"][0]["masterKeys"] = array();
	$masterTablesData["personal_channel"][0]["masterKeys"][]="channel_id";
				$masterTablesData["personal_channel"][0]["detailKeys"] = array();
	$masterTablesData["personal_channel"][0]["detailKeys"][]="channel_id";
		
	
				$strOriginalDetailsTable="personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["personal_channel"][1] = $masterParams;
				$masterTablesData["personal_channel"][1]["masterKeys"] = array();
	$masterTablesData["personal_channel"][1]["masterKeys"][]="member_id";
				$masterTablesData["personal_channel"][1]["detailKeys"] = array();
	$masterTablesData["personal_channel"][1]["detailKeys"][]="member_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_personal_channel()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "member_ch_id,  	member_id,  	channel_id,  	chat_id";
$proto0["m_strFrom"] = "FROM personal_channel";
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
	"m_strName" => "member_ch_id",
	"m_strTable" => "personal_channel",
	"m_srcTableName" => "personal_channel"
));

$proto6["m_sql"] = "member_ch_id";
$proto6["m_srcTableName"] = "personal_channel";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "personal_channel",
	"m_srcTableName" => "personal_channel"
));

$proto8["m_sql"] = "member_id";
$proto8["m_srcTableName"] = "personal_channel";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "channel_id",
	"m_strTable" => "personal_channel",
	"m_srcTableName" => "personal_channel"
));

$proto10["m_sql"] = "channel_id";
$proto10["m_srcTableName"] = "personal_channel";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "chat_id",
	"m_strTable" => "personal_channel",
	"m_srcTableName" => "personal_channel"
));

$proto12["m_sql"] = "chat_id";
$proto12["m_srcTableName"] = "personal_channel";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "personal_channel";
$proto15["m_srcTableName"] = "personal_channel";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "member_ch_id";
$proto15["m_columns"][] = "member_id";
$proto15["m_columns"][] = "channel_id";
$proto15["m_columns"][] = "chat_id";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "personal_channel";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "personal_channel";
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
$proto0["m_srcTableName"]="personal_channel";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_personal_channel = createSqlQuery_personal_channel();


	
		;

				

$tdatapersonal_channel[".sqlquery"] = $queryData_personal_channel;



$tableEvents["personal_channel"] = new eventsBase;
$tdatapersonal_channel[".hasEvents"] = false;

?>