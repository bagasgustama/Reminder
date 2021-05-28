<?php
$tdatagroup_member_checkin = array();
$tdatagroup_member_checkin[".searchableFields"] = array();
$tdatagroup_member_checkin[".ShortName"] = "group_member_checkin";
$tdatagroup_member_checkin[".OwnerID"] = "";
$tdatagroup_member_checkin[".OriginalTable"] = "group_member_checkin";


$tdatagroup_member_checkin[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagroup_member_checkin[".originalPagesByType"] = $tdatagroup_member_checkin[".pagesByType"];
$tdatagroup_member_checkin[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagroup_member_checkin[".originalPages"] = $tdatagroup_member_checkin[".pages"];
$tdatagroup_member_checkin[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagroup_member_checkin[".originalDefaultPages"] = $tdatagroup_member_checkin[".defaultPages"];

//	field labels
$fieldLabelsgroup_member_checkin = array();
$fieldToolTipsgroup_member_checkin = array();
$pageTitlesgroup_member_checkin = array();
$placeHoldersgroup_member_checkin = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_member_checkin["English"] = array();
	$fieldToolTipsgroup_member_checkin["English"] = array();
	$placeHoldersgroup_member_checkin["English"] = array();
	$pageTitlesgroup_member_checkin["English"] = array();
	$fieldLabelsgroup_member_checkin["English"]["group_member_checkin_id"] = "Group Member Checkin Id";
	$fieldToolTipsgroup_member_checkin["English"]["group_member_checkin_id"] = "";
	$placeHoldersgroup_member_checkin["English"]["group_member_checkin_id"] = "";
	$fieldLabelsgroup_member_checkin["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsgroup_member_checkin["English"]["group_member_id"] = "";
	$placeHoldersgroup_member_checkin["English"]["group_member_id"] = "";
	$fieldLabelsgroup_member_checkin["English"]["member_id"] = "Member Id";
	$fieldToolTipsgroup_member_checkin["English"]["member_id"] = "";
	$placeHoldersgroup_member_checkin["English"]["member_id"] = "";
	$fieldLabelsgroup_member_checkin["English"]["group_id"] = "Group Id";
	$fieldToolTipsgroup_member_checkin["English"]["group_id"] = "";
	$placeHoldersgroup_member_checkin["English"]["group_id"] = "";
	$fieldLabelsgroup_member_checkin["English"]["checkin_date"] = "Checkin Date";
	$fieldToolTipsgroup_member_checkin["English"]["checkin_date"] = "";
	$placeHoldersgroup_member_checkin["English"]["checkin_date"] = "";
	$fieldLabelsgroup_member_checkin["English"]["checkout_date"] = "Checkout Date";
	$fieldToolTipsgroup_member_checkin["English"]["checkout_date"] = "";
	$placeHoldersgroup_member_checkin["English"]["checkout_date"] = "";
	$fieldLabelsgroup_member_checkin["English"]["id_room"] = "Id Room";
	$fieldToolTipsgroup_member_checkin["English"]["id_room"] = "";
	$placeHoldersgroup_member_checkin["English"]["id_room"] = "";
	$fieldLabelsgroup_member_checkin["English"]["valid"] = "Valid";
	$fieldToolTipsgroup_member_checkin["English"]["valid"] = "";
	$placeHoldersgroup_member_checkin["English"]["valid"] = "";
	$fieldLabelsgroup_member_checkin["English"]["review_member"] = "Review Member";
	$fieldToolTipsgroup_member_checkin["English"]["review_member"] = "";
	$placeHoldersgroup_member_checkin["English"]["review_member"] = "";
	$fieldLabelsgroup_member_checkin["English"]["rating_member"] = "Rating Member";
	$fieldToolTipsgroup_member_checkin["English"]["rating_member"] = "";
	$placeHoldersgroup_member_checkin["English"]["rating_member"] = "";
	if (count($fieldToolTipsgroup_member_checkin["English"]))
		$tdatagroup_member_checkin[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsgroup_member_checkin["Indonesian"] = array();
	$fieldToolTipsgroup_member_checkin["Indonesian"] = array();
	$placeHoldersgroup_member_checkin["Indonesian"] = array();
	$pageTitlesgroup_member_checkin["Indonesian"] = array();
	$fieldLabelsgroup_member_checkin["Indonesian"]["group_member_checkin_id"] = "Group Member Checkin Id";
	$fieldToolTipsgroup_member_checkin["Indonesian"]["group_member_checkin_id"] = "";
	$placeHoldersgroup_member_checkin["Indonesian"]["group_member_checkin_id"] = "";
	$fieldLabelsgroup_member_checkin["Indonesian"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsgroup_member_checkin["Indonesian"]["group_member_id"] = "";
	$placeHoldersgroup_member_checkin["Indonesian"]["group_member_id"] = "";
	$fieldLabelsgroup_member_checkin["Indonesian"]["member_id"] = "Member Id";
	$fieldToolTipsgroup_member_checkin["Indonesian"]["member_id"] = "";
	$placeHoldersgroup_member_checkin["Indonesian"]["member_id"] = "";
	$fieldLabelsgroup_member_checkin["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipsgroup_member_checkin["Indonesian"]["group_id"] = "";
	$placeHoldersgroup_member_checkin["Indonesian"]["group_id"] = "";
	$fieldLabelsgroup_member_checkin["Indonesian"]["checkin_date"] = "Checkin Date";
	$fieldToolTipsgroup_member_checkin["Indonesian"]["checkin_date"] = "";
	$placeHoldersgroup_member_checkin["Indonesian"]["checkin_date"] = "";
	$fieldLabelsgroup_member_checkin["Indonesian"]["checkout_date"] = "Checkout Date";
	$fieldToolTipsgroup_member_checkin["Indonesian"]["checkout_date"] = "";
	$placeHoldersgroup_member_checkin["Indonesian"]["checkout_date"] = "";
	$fieldLabelsgroup_member_checkin["Indonesian"]["id_room"] = "Id Room";
	$fieldToolTipsgroup_member_checkin["Indonesian"]["id_room"] = "";
	$placeHoldersgroup_member_checkin["Indonesian"]["id_room"] = "";
	$fieldLabelsgroup_member_checkin["Indonesian"]["valid"] = "Valid";
	$fieldToolTipsgroup_member_checkin["Indonesian"]["valid"] = "";
	$placeHoldersgroup_member_checkin["Indonesian"]["valid"] = "";
	$fieldLabelsgroup_member_checkin["Indonesian"]["review_member"] = "Review Member";
	$fieldToolTipsgroup_member_checkin["Indonesian"]["review_member"] = "";
	$placeHoldersgroup_member_checkin["Indonesian"]["review_member"] = "";
	$fieldLabelsgroup_member_checkin["Indonesian"]["rating_member"] = "Rating Member";
	$fieldToolTipsgroup_member_checkin["Indonesian"]["rating_member"] = "";
	$placeHoldersgroup_member_checkin["Indonesian"]["rating_member"] = "";
	if (count($fieldToolTipsgroup_member_checkin["Indonesian"]))
		$tdatagroup_member_checkin[".isUseToolTips"] = true;
}


	$tdatagroup_member_checkin[".NCSearch"] = true;



$tdatagroup_member_checkin[".shortTableName"] = "group_member_checkin";
$tdatagroup_member_checkin[".nSecOptions"] = 0;

$tdatagroup_member_checkin[".mainTableOwnerID"] = "";
$tdatagroup_member_checkin[".entityType"] = 0;
$tdatagroup_member_checkin[".connId"] = "notif_basic1_at_localhost";


$tdatagroup_member_checkin[".strOriginalTableName"] = "group_member_checkin";

	



$tdatagroup_member_checkin[".showAddInPopup"] = false;

$tdatagroup_member_checkin[".showEditInPopup"] = false;

$tdatagroup_member_checkin[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_member_checkin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_member_checkin[".listAjax"] = false;
//	temporary
$tdatagroup_member_checkin[".listAjax"] = false;

	$tdatagroup_member_checkin[".audit"] = false;

	$tdatagroup_member_checkin[".locking"] = false;


$pages = $tdatagroup_member_checkin[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_member_checkin[".edit"] = true;
	$tdatagroup_member_checkin[".afterEditAction"] = 0;
	$tdatagroup_member_checkin[".closePopupAfterEdit"] = 1;
	$tdatagroup_member_checkin[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_member_checkin[".add"] = true;
$tdatagroup_member_checkin[".afterAddAction"] = 0;
$tdatagroup_member_checkin[".closePopupAfterAdd"] = 1;
$tdatagroup_member_checkin[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_member_checkin[".list"] = true;
}



$tdatagroup_member_checkin[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup_member_checkin[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_member_checkin[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_member_checkin[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_member_checkin[".printFriendly"] = true;
}



$tdatagroup_member_checkin[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_member_checkin[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_member_checkin[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_member_checkin[".isUseAjaxSuggest"] = true;

$tdatagroup_member_checkin[".rowHighlite"] = true;





$tdatagroup_member_checkin[".ajaxCodeSnippetAdded"] = false;

$tdatagroup_member_checkin[".buttonsAdded"] = false;

$tdatagroup_member_checkin[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup_member_checkin[".isUseTimeForSearch"] = true;


$tdatagroup_member_checkin[".badgeColor"] = "778899";


$tdatagroup_member_checkin[".allSearchFields"] = array();
$tdatagroup_member_checkin[".filterFields"] = array();
$tdatagroup_member_checkin[".requiredSearchFields"] = array();

$tdatagroup_member_checkin[".googleLikeFields"] = array();
$tdatagroup_member_checkin[".googleLikeFields"][] = "group_member_checkin_id";
$tdatagroup_member_checkin[".googleLikeFields"][] = "group_member_id";
$tdatagroup_member_checkin[".googleLikeFields"][] = "member_id";
$tdatagroup_member_checkin[".googleLikeFields"][] = "group_id";
$tdatagroup_member_checkin[".googleLikeFields"][] = "checkin_date";
$tdatagroup_member_checkin[".googleLikeFields"][] = "checkout_date";
$tdatagroup_member_checkin[".googleLikeFields"][] = "id_room";
$tdatagroup_member_checkin[".googleLikeFields"][] = "valid";
$tdatagroup_member_checkin[".googleLikeFields"][] = "review_member";
$tdatagroup_member_checkin[".googleLikeFields"][] = "rating_member";



$tdatagroup_member_checkin[".tableType"] = "list";

$tdatagroup_member_checkin[".printerPageOrientation"] = 0;
$tdatagroup_member_checkin[".nPrinterPageScale"] = 100;

$tdatagroup_member_checkin[".nPrinterSplitRecords"] = 40;

$tdatagroup_member_checkin[".geocodingEnabled"] = false;










$tdatagroup_member_checkin[".pageSize"] = 20;

$tdatagroup_member_checkin[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_member_checkin[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_member_checkin[".orderindexes"] = array();


$tdatagroup_member_checkin[".sqlHead"] = "SELECT group_member_checkin_id,  	group_member_id,  	member_id,  	group_id,  	checkin_date,  	checkout_date,  	id_room,  	valid,  	review_member,  	rating_member";
$tdatagroup_member_checkin[".sqlFrom"] = "FROM group_member_checkin";
$tdatagroup_member_checkin[".sqlWhereExpr"] = "";
$tdatagroup_member_checkin[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "group_id = ':session.group_id'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatagroup_member_checkin[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_member_checkin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_member_checkin[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_member_checkin[".highlightSearchResults"] = true;

$tableKeysgroup_member_checkin = array();
$tableKeysgroup_member_checkin[] = "group_member_checkin_id";
$tdatagroup_member_checkin[".Keys"] = $tableKeysgroup_member_checkin;


$tdatagroup_member_checkin[".hideMobileList"] = array();




//	group_member_checkin_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_member_checkin_id";
	$fdata["GoodName"] = "group_member_checkin_id";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("group_member_checkin","group_member_checkin_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_member_checkin_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_checkin_id";

	
	
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


	$tdatagroup_member_checkin["group_member_checkin_id"] = $fdata;
		$tdatagroup_member_checkin[".searchableFields"][] = "group_member_checkin_id";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("group_member_checkin","group_member_id");
	$fdata["FieldType"] = 20;

	
	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "group_member11";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "group_member_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "group_member_id";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "group_id", "lookup" => "group_id" );

	
	

	
	
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


	$tdatagroup_member_checkin["group_member_id"] = $fdata;
		$tdatagroup_member_checkin[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("group_member_checkin","member_id");
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
	$edata["LookupTable"] = "personal11";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "member_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "group_id", "lookup" => "group_id" );

	
	

	
	
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


	$tdatagroup_member_checkin["member_id"] = $fdata;
		$tdatagroup_member_checkin[".searchableFields"][] = "member_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("group_member_checkin","group_id");
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

				$edata["LookupWhere"] = "group_id = ':session.group_id'";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "group_member_id";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "member_id";

	
	
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


	$tdatagroup_member_checkin["group_id"] = $fdata;
		$tdatagroup_member_checkin[".searchableFields"][] = "group_id";
//	checkin_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "checkin_date";
	$fdata["GoodName"] = "checkin_date";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("group_member_checkin","checkin_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "checkin_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "checkin_date";

	
	
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

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatagroup_member_checkin["checkin_date"] = $fdata;
		$tdatagroup_member_checkin[".searchableFields"][] = "checkin_date";
//	checkout_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "checkout_date";
	$fdata["GoodName"] = "checkout_date";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("group_member_checkin","checkout_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "checkout_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "checkout_date";

	
	
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

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatagroup_member_checkin["checkout_date"] = $fdata;
		$tdatagroup_member_checkin[".searchableFields"][] = "checkout_date";
//	id_room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_room";
	$fdata["GoodName"] = "id_room";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("group_member_checkin","id_room");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "id_room";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_room";

	
	
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


	$tdatagroup_member_checkin["id_room"] = $fdata;
		$tdatagroup_member_checkin[".searchableFields"][] = "id_room";
//	valid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "valid";
	$fdata["GoodName"] = "valid";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("group_member_checkin","valid");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "valid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valid";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatagroup_member_checkin["valid"] = $fdata;
		$tdatagroup_member_checkin[".searchableFields"][] = "valid";
//	review_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "review_member";
	$fdata["GoodName"] = "review_member";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("group_member_checkin","review_member");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "review_member";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "review_member";

	
	
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


	$tdatagroup_member_checkin["review_member"] = $fdata;
		$tdatagroup_member_checkin[".searchableFields"][] = "review_member";
//	rating_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rating_member";
	$fdata["GoodName"] = "rating_member";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("group_member_checkin","rating_member");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "rating_member";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rating_member";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatagroup_member_checkin["rating_member"] = $fdata;
		$tdatagroup_member_checkin[".searchableFields"][] = "rating_member";


$tables_data["group_member_checkin"]=&$tdatagroup_member_checkin;
$field_labels["group_member_checkin"] = &$fieldLabelsgroup_member_checkin;
$fieldToolTips["group_member_checkin"] = &$fieldToolTipsgroup_member_checkin;
$placeHolders["group_member_checkin"] = &$placeHoldersgroup_member_checkin;
$page_titles["group_member_checkin"] = &$pageTitlesgroup_member_checkin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_member_checkin"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["group_member_checkin"] = array();



	
				$strOriginalDetailsTable="group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_member_checkin"][0] = $masterParams;
				$masterTablesData["group_member_checkin"][0]["masterKeys"] = array();
	$masterTablesData["group_member_checkin"][0]["masterKeys"][]="group_id";
				$masterTablesData["group_member_checkin"][0]["detailKeys"] = array();
	$masterTablesData["group_member_checkin"][0]["detailKeys"][]="group_id";
		
	
				$strOriginalDetailsTable="group_member";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group_member";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group_member";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_member_checkin"][1] = $masterParams;
				$masterTablesData["group_member_checkin"][1]["masterKeys"] = array();
	$masterTablesData["group_member_checkin"][1]["masterKeys"][]="group_member_id";
				$masterTablesData["group_member_checkin"][1]["detailKeys"] = array();
	$masterTablesData["group_member_checkin"][1]["detailKeys"][]="group_member_id";
		
	
				$strOriginalDetailsTable="personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_member_checkin"][2] = $masterParams;
				$masterTablesData["group_member_checkin"][2]["masterKeys"] = array();
	$masterTablesData["group_member_checkin"][2]["masterKeys"][]="member_id";
				$masterTablesData["group_member_checkin"][2]["detailKeys"] = array();
	$masterTablesData["group_member_checkin"][2]["detailKeys"][]="member_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group_member_checkin()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_member_checkin_id,  	group_member_id,  	member_id,  	group_id,  	checkin_date,  	checkout_date,  	id_room,  	valid,  	review_member,  	rating_member";
$proto0["m_strFrom"] = "FROM group_member_checkin";
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
	"m_strName" => "group_member_checkin_id",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "group_member_checkin"
));

$proto6["m_sql"] = "group_member_checkin_id";
$proto6["m_srcTableName"] = "group_member_checkin";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_id",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "group_member_checkin"
));

$proto8["m_sql"] = "group_member_id";
$proto8["m_srcTableName"] = "group_member_checkin";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "group_member_checkin"
));

$proto10["m_sql"] = "member_id";
$proto10["m_srcTableName"] = "group_member_checkin";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "group_member_checkin"
));

$proto12["m_sql"] = "group_id";
$proto12["m_srcTableName"] = "group_member_checkin";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "checkin_date",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "group_member_checkin"
));

$proto14["m_sql"] = "checkin_date";
$proto14["m_srcTableName"] = "group_member_checkin";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "checkout_date",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "group_member_checkin"
));

$proto16["m_sql"] = "checkout_date";
$proto16["m_srcTableName"] = "group_member_checkin";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_room",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "group_member_checkin"
));

$proto18["m_sql"] = "id_room";
$proto18["m_srcTableName"] = "group_member_checkin";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "valid",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "group_member_checkin"
));

$proto20["m_sql"] = "valid";
$proto20["m_srcTableName"] = "group_member_checkin";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "review_member",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "group_member_checkin"
));

$proto22["m_sql"] = "review_member";
$proto22["m_srcTableName"] = "group_member_checkin";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rating_member",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "group_member_checkin"
));

$proto24["m_sql"] = "rating_member";
$proto24["m_srcTableName"] = "group_member_checkin";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "group_member_checkin";
$proto27["m_srcTableName"] = "group_member_checkin";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "group_member_checkin_id";
$proto27["m_columns"][] = "group_member_id";
$proto27["m_columns"][] = "member_id";
$proto27["m_columns"][] = "group_id";
$proto27["m_columns"][] = "checkin_date";
$proto27["m_columns"][] = "checkout_date";
$proto27["m_columns"][] = "id_room";
$proto27["m_columns"][] = "valid";
$proto27["m_columns"][] = "review_member";
$proto27["m_columns"][] = "rating_member";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "group_member_checkin";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "group_member_checkin";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="group_member_checkin";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group_member_checkin = createSqlQuery_group_member_checkin();


	
		;

										

$tdatagroup_member_checkin[".sqlquery"] = $queryData_group_member_checkin;



include_once(getabspath("include/group_member_checkin_events.php"));
$tableEvents["group_member_checkin"] = new eventclass_group_member_checkin;
$tdatagroup_member_checkin[".hasEvents"] = true;

?>