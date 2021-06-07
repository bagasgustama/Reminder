<?php
$tdatacustom_group_checkin = array();
$tdatacustom_group_checkin[".searchableFields"] = array();
$tdatacustom_group_checkin[".ShortName"] = "custom_group_checkin";
$tdatacustom_group_checkin[".OwnerID"] = "";
$tdatacustom_group_checkin[".OriginalTable"] = "custom_group_checkin";


$tdatacustom_group_checkin[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacustom_group_checkin[".originalPagesByType"] = $tdatacustom_group_checkin[".pagesByType"];
$tdatacustom_group_checkin[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacustom_group_checkin[".originalPages"] = $tdatacustom_group_checkin[".pages"];
$tdatacustom_group_checkin[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacustom_group_checkin[".originalDefaultPages"] = $tdatacustom_group_checkin[".defaultPages"];

//	field labels
$fieldLabelscustom_group_checkin = array();
$fieldToolTipscustom_group_checkin = array();
$pageTitlescustom_group_checkin = array();
$placeHolderscustom_group_checkin = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustom_group_checkin["English"] = array();
	$fieldToolTipscustom_group_checkin["English"] = array();
	$placeHolderscustom_group_checkin["English"] = array();
	$pageTitlescustom_group_checkin["English"] = array();
	$fieldLabelscustom_group_checkin["English"]["group_member_checkin_id"] = "Group Member Checkin Id";
	$fieldToolTipscustom_group_checkin["English"]["group_member_checkin_id"] = "";
	$placeHolderscustom_group_checkin["English"]["group_member_checkin_id"] = "";
	$fieldLabelscustom_group_checkin["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipscustom_group_checkin["English"]["group_member_id"] = "";
	$placeHolderscustom_group_checkin["English"]["group_member_id"] = "";
	$fieldLabelscustom_group_checkin["English"]["member_id"] = "Member Id";
	$fieldToolTipscustom_group_checkin["English"]["member_id"] = "";
	$placeHolderscustom_group_checkin["English"]["member_id"] = "";
	$fieldLabelscustom_group_checkin["English"]["group_id"] = "Group Id";
	$fieldToolTipscustom_group_checkin["English"]["group_id"] = "";
	$placeHolderscustom_group_checkin["English"]["group_id"] = "";
	$fieldLabelscustom_group_checkin["English"]["checkin_date"] = "Checkin Date";
	$fieldToolTipscustom_group_checkin["English"]["checkin_date"] = "";
	$placeHolderscustom_group_checkin["English"]["checkin_date"] = "";
	$fieldLabelscustom_group_checkin["English"]["checkout_date"] = "Checkout Date";
	$fieldToolTipscustom_group_checkin["English"]["checkout_date"] = "";
	$placeHolderscustom_group_checkin["English"]["checkout_date"] = "";
	$fieldLabelscustom_group_checkin["English"]["id_room"] = "Id Room";
	$fieldToolTipscustom_group_checkin["English"]["id_room"] = "";
	$placeHolderscustom_group_checkin["English"]["id_room"] = "";
	$fieldLabelscustom_group_checkin["English"]["valid"] = "Valid";
	$fieldToolTipscustom_group_checkin["English"]["valid"] = "";
	$placeHolderscustom_group_checkin["English"]["valid"] = "";
	$fieldLabelscustom_group_checkin["English"]["review_member"] = "Review Member";
	$fieldToolTipscustom_group_checkin["English"]["review_member"] = "";
	$placeHolderscustom_group_checkin["English"]["review_member"] = "";
	$fieldLabelscustom_group_checkin["English"]["rating_member"] = "Rating Member";
	$fieldToolTipscustom_group_checkin["English"]["rating_member"] = "";
	$placeHolderscustom_group_checkin["English"]["rating_member"] = "";
	if (count($fieldToolTipscustom_group_checkin["English"]))
		$tdatacustom_group_checkin[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelscustom_group_checkin["Indonesian"] = array();
	$fieldToolTipscustom_group_checkin["Indonesian"] = array();
	$placeHolderscustom_group_checkin["Indonesian"] = array();
	$pageTitlescustom_group_checkin["Indonesian"] = array();
	$fieldLabelscustom_group_checkin["Indonesian"]["group_member_checkin_id"] = "Group Member Checkin Id";
	$fieldToolTipscustom_group_checkin["Indonesian"]["group_member_checkin_id"] = "";
	$placeHolderscustom_group_checkin["Indonesian"]["group_member_checkin_id"] = "";
	$fieldLabelscustom_group_checkin["Indonesian"]["group_member_id"] = "Group Member Id";
	$fieldToolTipscustom_group_checkin["Indonesian"]["group_member_id"] = "";
	$placeHolderscustom_group_checkin["Indonesian"]["group_member_id"] = "";
	$fieldLabelscustom_group_checkin["Indonesian"]["member_id"] = "Member Id";
	$fieldToolTipscustom_group_checkin["Indonesian"]["member_id"] = "";
	$placeHolderscustom_group_checkin["Indonesian"]["member_id"] = "";
	$fieldLabelscustom_group_checkin["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipscustom_group_checkin["Indonesian"]["group_id"] = "";
	$placeHolderscustom_group_checkin["Indonesian"]["group_id"] = "";
	$fieldLabelscustom_group_checkin["Indonesian"]["checkin_date"] = "Checkin Date";
	$fieldToolTipscustom_group_checkin["Indonesian"]["checkin_date"] = "";
	$placeHolderscustom_group_checkin["Indonesian"]["checkin_date"] = "";
	$fieldLabelscustom_group_checkin["Indonesian"]["checkout_date"] = "Checkout Date";
	$fieldToolTipscustom_group_checkin["Indonesian"]["checkout_date"] = "";
	$placeHolderscustom_group_checkin["Indonesian"]["checkout_date"] = "";
	$fieldLabelscustom_group_checkin["Indonesian"]["id_room"] = "Id Room";
	$fieldToolTipscustom_group_checkin["Indonesian"]["id_room"] = "";
	$placeHolderscustom_group_checkin["Indonesian"]["id_room"] = "";
	$fieldLabelscustom_group_checkin["Indonesian"]["valid"] = "Valid";
	$fieldToolTipscustom_group_checkin["Indonesian"]["valid"] = "";
	$placeHolderscustom_group_checkin["Indonesian"]["valid"] = "";
	$fieldLabelscustom_group_checkin["Indonesian"]["review_member"] = "Review Member";
	$fieldToolTipscustom_group_checkin["Indonesian"]["review_member"] = "";
	$placeHolderscustom_group_checkin["Indonesian"]["review_member"] = "";
	$fieldLabelscustom_group_checkin["Indonesian"]["rating_member"] = "Rating Member";
	$fieldToolTipscustom_group_checkin["Indonesian"]["rating_member"] = "";
	$placeHolderscustom_group_checkin["Indonesian"]["rating_member"] = "";
	if (count($fieldToolTipscustom_group_checkin["Indonesian"]))
		$tdatacustom_group_checkin[".isUseToolTips"] = true;
}


	$tdatacustom_group_checkin[".NCSearch"] = true;



$tdatacustom_group_checkin[".shortTableName"] = "custom_group_checkin";
$tdatacustom_group_checkin[".nSecOptions"] = 0;

$tdatacustom_group_checkin[".mainTableOwnerID"] = "";
$tdatacustom_group_checkin[".entityType"] = 6;
$tdatacustom_group_checkin[".connId"] = "notif_basic1_at_localhost";


$tdatacustom_group_checkin[".strOriginalTableName"] = "custom_group_checkin";

	



$tdatacustom_group_checkin[".showAddInPopup"] = false;

$tdatacustom_group_checkin[".showEditInPopup"] = false;

$tdatacustom_group_checkin[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustom_group_checkin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustom_group_checkin[".listAjax"] = false;
//	temporary
$tdatacustom_group_checkin[".listAjax"] = false;

	$tdatacustom_group_checkin[".audit"] = false;

	$tdatacustom_group_checkin[".locking"] = false;


$pages = $tdatacustom_group_checkin[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustom_group_checkin[".edit"] = true;
	$tdatacustom_group_checkin[".afterEditAction"] = 1;
	$tdatacustom_group_checkin[".closePopupAfterEdit"] = 1;
	$tdatacustom_group_checkin[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustom_group_checkin[".add"] = true;
$tdatacustom_group_checkin[".afterAddAction"] = 1;
$tdatacustom_group_checkin[".closePopupAfterAdd"] = 1;
$tdatacustom_group_checkin[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustom_group_checkin[".list"] = true;
}



$tdatacustom_group_checkin[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustom_group_checkin[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustom_group_checkin[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustom_group_checkin[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustom_group_checkin[".printFriendly"] = true;
}



$tdatacustom_group_checkin[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustom_group_checkin[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustom_group_checkin[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustom_group_checkin[".isUseAjaxSuggest"] = true;

$tdatacustom_group_checkin[".rowHighlite"] = true;





$tdatacustom_group_checkin[".ajaxCodeSnippetAdded"] = false;

$tdatacustom_group_checkin[".buttonsAdded"] = false;

$tdatacustom_group_checkin[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustom_group_checkin[".isUseTimeForSearch"] = false;


$tdatacustom_group_checkin[".badgeColor"] = "7B68EE";


$tdatacustom_group_checkin[".allSearchFields"] = array();
$tdatacustom_group_checkin[".filterFields"] = array();
$tdatacustom_group_checkin[".requiredSearchFields"] = array();

$tdatacustom_group_checkin[".googleLikeFields"] = array();
$tdatacustom_group_checkin[".googleLikeFields"][] = "group_member_checkin_id";
$tdatacustom_group_checkin[".googleLikeFields"][] = "group_member_id";
$tdatacustom_group_checkin[".googleLikeFields"][] = "member_id";
$tdatacustom_group_checkin[".googleLikeFields"][] = "group_id";
$tdatacustom_group_checkin[".googleLikeFields"][] = "checkin_date";
$tdatacustom_group_checkin[".googleLikeFields"][] = "checkout_date";
$tdatacustom_group_checkin[".googleLikeFields"][] = "id_room";
$tdatacustom_group_checkin[".googleLikeFields"][] = "valid";
$tdatacustom_group_checkin[".googleLikeFields"][] = "review_member";
$tdatacustom_group_checkin[".googleLikeFields"][] = "rating_member";




$tdatacustom_group_checkin[".printerPageOrientation"] = 0;
$tdatacustom_group_checkin[".nPrinterPageScale"] = 100;

$tdatacustom_group_checkin[".nPrinterSplitRecords"] = 40;

$tdatacustom_group_checkin[".geocodingEnabled"] = false;










$tdatacustom_group_checkin[".pageSize"] = 20;

$tdatacustom_group_checkin[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustom_group_checkin[".strOrderBy"] = $tstrOrderBy;

$tdatacustom_group_checkin[".orderindexes"] = array();


$tdatacustom_group_checkin[".sqlHead"] = "";
$tdatacustom_group_checkin[".sqlFrom"] = "";
$tdatacustom_group_checkin[".sqlWhereExpr"] = "";
$tdatacustom_group_checkin[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustom_group_checkin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustom_group_checkin[".arrGroupsPerPage"] = $arrGPP;

$tdatacustom_group_checkin[".highlightSearchResults"] = true;

$tableKeyscustom_group_checkin = array();
$tableKeyscustom_group_checkin[] = "group_member_checkin_id";
$tdatacustom_group_checkin[".Keys"] = $tableKeyscustom_group_checkin;


$tdatacustom_group_checkin[".hideMobileList"] = array();




//	group_member_checkin_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_member_checkin_id";
	$fdata["GoodName"] = "group_member_checkin_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_checkin","group_member_checkin_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_member_checkin_id";

	
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


	$tdatacustom_group_checkin["group_member_checkin_id"] = $fdata;
		$tdatacustom_group_checkin[".searchableFields"][] = "group_member_checkin_id";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_checkin","group_member_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_member_id";

	
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


	$tdatacustom_group_checkin["group_member_id"] = $fdata;
		$tdatacustom_group_checkin[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_checkin","member_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "member_id";

	
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


	$tdatacustom_group_checkin["member_id"] = $fdata;
		$tdatacustom_group_checkin[".searchableFields"][] = "member_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_checkin","group_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_id";

	
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


	$tdatacustom_group_checkin["group_id"] = $fdata;
		$tdatacustom_group_checkin[".searchableFields"][] = "group_id";
//	checkin_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "checkin_date";
	$fdata["GoodName"] = "checkin_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_checkin","checkin_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "checkin_date";

	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatacustom_group_checkin["checkin_date"] = $fdata;
		$tdatacustom_group_checkin[".searchableFields"][] = "checkin_date";
//	checkout_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "checkout_date";
	$fdata["GoodName"] = "checkout_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_checkin","checkout_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "checkout_date";

	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatacustom_group_checkin["checkout_date"] = $fdata;
		$tdatacustom_group_checkin[".searchableFields"][] = "checkout_date";
//	id_room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_room";
	$fdata["GoodName"] = "id_room";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_checkin","id_room");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "id_room";

	
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


	$tdatacustom_group_checkin["id_room"] = $fdata;
		$tdatacustom_group_checkin[".searchableFields"][] = "id_room";
//	valid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "valid";
	$fdata["GoodName"] = "valid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_checkin","valid");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "valid";

	
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


	$tdatacustom_group_checkin["valid"] = $fdata;
		$tdatacustom_group_checkin[".searchableFields"][] = "valid";
//	review_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "review_member";
	$fdata["GoodName"] = "review_member";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_checkin","review_member");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "review_member";

	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatacustom_group_checkin["review_member"] = $fdata;
		$tdatacustom_group_checkin[".searchableFields"][] = "review_member";
//	rating_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rating_member";
	$fdata["GoodName"] = "rating_member";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_checkin","rating_member");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "rating_member";

	
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


	$tdatacustom_group_checkin["rating_member"] = $fdata;
		$tdatacustom_group_checkin[".searchableFields"][] = "rating_member";


$tables_data["custom_group_checkin"]=&$tdatacustom_group_checkin;
$field_labels["custom_group_checkin"] = &$fieldLabelscustom_group_checkin;
$fieldToolTips["custom_group_checkin"] = &$fieldToolTipscustom_group_checkin;
$placeHolders["custom_group_checkin"] = &$placeHolderscustom_group_checkin;
$page_titles["custom_group_checkin"] = &$pageTitlescustom_group_checkin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["custom_group_checkin"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["custom_group_checkin"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/custom_group_checkin_ops.php" ) );



	
		;

										

$tdatacustom_group_checkin[".sqlquery"] = $queryData_custom_group_checkin;



include_once(getabspath("include/custom_group_checkin_events.php"));
$tableEvents["custom_group_checkin"] = new eventclass_custom_group_checkin;
$tdatacustom_group_checkin[".hasEvents"] = true;

?>