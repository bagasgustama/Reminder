<?php
$tdatacustom_group_member = array();
$tdatacustom_group_member[".searchableFields"] = array();
$tdatacustom_group_member[".ShortName"] = "custom_group_member";
$tdatacustom_group_member[".OwnerID"] = "";
$tdatacustom_group_member[".OriginalTable"] = "custom_group_member";


$tdatacustom_group_member[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacustom_group_member[".originalPagesByType"] = $tdatacustom_group_member[".pagesByType"];
$tdatacustom_group_member[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacustom_group_member[".originalPages"] = $tdatacustom_group_member[".pages"];
$tdatacustom_group_member[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacustom_group_member[".originalDefaultPages"] = $tdatacustom_group_member[".defaultPages"];

//	field labels
$fieldLabelscustom_group_member = array();
$fieldToolTipscustom_group_member = array();
$pageTitlescustom_group_member = array();
$placeHolderscustom_group_member = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustom_group_member["English"] = array();
	$fieldToolTipscustom_group_member["English"] = array();
	$placeHolderscustom_group_member["English"] = array();
	$pageTitlescustom_group_member["English"] = array();
	$fieldLabelscustom_group_member["English"]["group_id"] = "Group Id";
	$fieldToolTipscustom_group_member["English"]["group_id"] = "";
	$placeHolderscustom_group_member["English"]["group_id"] = "";
	$fieldLabelscustom_group_member["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipscustom_group_member["English"]["group_member_id"] = "";
	$placeHolderscustom_group_member["English"]["group_member_id"] = "";
	$fieldLabelscustom_group_member["English"]["member_id"] = "Member Id";
	$fieldToolTipscustom_group_member["English"]["member_id"] = "";
	$placeHolderscustom_group_member["English"]["member_id"] = "";
	$fieldLabelscustom_group_member["English"]["user_type"] = "User Type";
	$fieldToolTipscustom_group_member["English"]["user_type"] = "";
	$placeHolderscustom_group_member["English"]["user_type"] = "";
	$fieldLabelscustom_group_member["English"]["token_group"] = "Token Group";
	$fieldToolTipscustom_group_member["English"]["token_group"] = "";
	$placeHolderscustom_group_member["English"]["token_group"] = "";
	$fieldLabelscustom_group_member["English"]["identifier_group"] = "Identifier Group";
	$fieldToolTipscustom_group_member["English"]["identifier_group"] = "";
	$placeHolderscustom_group_member["English"]["identifier_group"] = "";
	$fieldLabelscustom_group_member["English"]["token_personal"] = "Token Personal";
	$fieldToolTipscustom_group_member["English"]["token_personal"] = "";
	$placeHolderscustom_group_member["English"]["token_personal"] = "";
	$fieldLabelscustom_group_member["English"]["membership_type"] = "Membership Type";
	$fieldToolTipscustom_group_member["English"]["membership_type"] = "";
	$placeHolderscustom_group_member["English"]["membership_type"] = "";
	$fieldLabelscustom_group_member["English"]["valid"] = "Valid";
	$fieldToolTipscustom_group_member["English"]["valid"] = "";
	$placeHolderscustom_group_member["English"]["valid"] = "";
	$fieldLabelscustom_group_member["English"]["group_name"] = "Group Name";
	$fieldToolTipscustom_group_member["English"]["group_name"] = "";
	$placeHolderscustom_group_member["English"]["group_name"] = "";
	$fieldLabelscustom_group_member["English"]["description"] = "Description";
	$fieldToolTipscustom_group_member["English"]["description"] = "";
	$placeHolderscustom_group_member["English"]["description"] = "";
	$fieldLabelscustom_group_member["English"]["logo"] = "Logo";
	$fieldToolTipscustom_group_member["English"]["logo"] = "";
	$placeHolderscustom_group_member["English"]["logo"] = "";
	$fieldLabelscustom_group_member["English"]["token_type"] = "Token Type";
	$fieldToolTipscustom_group_member["English"]["token_type"] = "";
	$placeHolderscustom_group_member["English"]["token_type"] = "";
	$fieldLabelscustom_group_member["English"]["token_group1"] = "Token Group1";
	$fieldToolTipscustom_group_member["English"]["token_group1"] = "";
	$placeHolderscustom_group_member["English"]["token_group1"] = "";
	$fieldLabelscustom_group_member["English"]["membership_type1"] = "Membership Type1";
	$fieldToolTipscustom_group_member["English"]["membership_type1"] = "";
	$placeHolderscustom_group_member["English"]["membership_type1"] = "";
	$fieldLabelscustom_group_member["English"]["business_type"] = "Business Type";
	$fieldToolTipscustom_group_member["English"]["business_type"] = "";
	$placeHolderscustom_group_member["English"]["business_type"] = "";
	$fieldLabelscustom_group_member["English"]["open_time"] = "Open Time";
	$fieldToolTipscustom_group_member["English"]["open_time"] = "";
	$placeHolderscustom_group_member["English"]["open_time"] = "";
	$fieldLabelscustom_group_member["English"]["close_time"] = "Close Time";
	$fieldToolTipscustom_group_member["English"]["close_time"] = "";
	$placeHolderscustom_group_member["English"]["close_time"] = "";
	$fieldLabelscustom_group_member["English"]["off_day"] = "Off Day";
	$fieldToolTipscustom_group_member["English"]["off_day"] = "";
	$placeHolderscustom_group_member["English"]["off_day"] = "";
	if (count($fieldToolTipscustom_group_member["English"]))
		$tdatacustom_group_member[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelscustom_group_member["Indonesian"] = array();
	$fieldToolTipscustom_group_member["Indonesian"] = array();
	$placeHolderscustom_group_member["Indonesian"] = array();
	$pageTitlescustom_group_member["Indonesian"] = array();
	$fieldLabelscustom_group_member["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipscustom_group_member["Indonesian"]["group_id"] = "";
	$placeHolderscustom_group_member["Indonesian"]["group_id"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["group_member_id"] = "Group Member Id";
	$fieldToolTipscustom_group_member["Indonesian"]["group_member_id"] = "";
	$placeHolderscustom_group_member["Indonesian"]["group_member_id"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["member_id"] = "Member Id";
	$fieldToolTipscustom_group_member["Indonesian"]["member_id"] = "";
	$placeHolderscustom_group_member["Indonesian"]["member_id"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["user_type"] = "User Type";
	$fieldToolTipscustom_group_member["Indonesian"]["user_type"] = "";
	$placeHolderscustom_group_member["Indonesian"]["user_type"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["token_group"] = "Token Group";
	$fieldToolTipscustom_group_member["Indonesian"]["token_group"] = "";
	$placeHolderscustom_group_member["Indonesian"]["token_group"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["identifier_group"] = "Identifier Group";
	$fieldToolTipscustom_group_member["Indonesian"]["identifier_group"] = "";
	$placeHolderscustom_group_member["Indonesian"]["identifier_group"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["token_personal"] = "Token Personal";
	$fieldToolTipscustom_group_member["Indonesian"]["token_personal"] = "";
	$placeHolderscustom_group_member["Indonesian"]["token_personal"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["membership_type"] = "Membership Type";
	$fieldToolTipscustom_group_member["Indonesian"]["membership_type"] = "";
	$placeHolderscustom_group_member["Indonesian"]["membership_type"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["valid"] = "Valid";
	$fieldToolTipscustom_group_member["Indonesian"]["valid"] = "";
	$placeHolderscustom_group_member["Indonesian"]["valid"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["group_name"] = "Group Name";
	$fieldToolTipscustom_group_member["Indonesian"]["group_name"] = "";
	$placeHolderscustom_group_member["Indonesian"]["group_name"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["description"] = "Description";
	$fieldToolTipscustom_group_member["Indonesian"]["description"] = "";
	$placeHolderscustom_group_member["Indonesian"]["description"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["logo"] = "Logo";
	$fieldToolTipscustom_group_member["Indonesian"]["logo"] = "";
	$placeHolderscustom_group_member["Indonesian"]["logo"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["token_type"] = "Token Type";
	$fieldToolTipscustom_group_member["Indonesian"]["token_type"] = "";
	$placeHolderscustom_group_member["Indonesian"]["token_type"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["token_group1"] = "Token Group1";
	$fieldToolTipscustom_group_member["Indonesian"]["token_group1"] = "";
	$placeHolderscustom_group_member["Indonesian"]["token_group1"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["membership_type1"] = "Membership Type1";
	$fieldToolTipscustom_group_member["Indonesian"]["membership_type1"] = "";
	$placeHolderscustom_group_member["Indonesian"]["membership_type1"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["business_type"] = "Business Type";
	$fieldToolTipscustom_group_member["Indonesian"]["business_type"] = "";
	$placeHolderscustom_group_member["Indonesian"]["business_type"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["open_time"] = "Open Time";
	$fieldToolTipscustom_group_member["Indonesian"]["open_time"] = "";
	$placeHolderscustom_group_member["Indonesian"]["open_time"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["close_time"] = "Close Time";
	$fieldToolTipscustom_group_member["Indonesian"]["close_time"] = "";
	$placeHolderscustom_group_member["Indonesian"]["close_time"] = "";
	$fieldLabelscustom_group_member["Indonesian"]["off_day"] = "Off Day";
	$fieldToolTipscustom_group_member["Indonesian"]["off_day"] = "";
	$placeHolderscustom_group_member["Indonesian"]["off_day"] = "";
	if (count($fieldToolTipscustom_group_member["Indonesian"]))
		$tdatacustom_group_member[".isUseToolTips"] = true;
}


	$tdatacustom_group_member[".NCSearch"] = true;



$tdatacustom_group_member[".shortTableName"] = "custom_group_member";
$tdatacustom_group_member[".nSecOptions"] = 0;

$tdatacustom_group_member[".mainTableOwnerID"] = "";
$tdatacustom_group_member[".entityType"] = 6;
$tdatacustom_group_member[".connId"] = "notif_basic1_at_localhost";


$tdatacustom_group_member[".strOriginalTableName"] = "custom_group_member";

	



$tdatacustom_group_member[".showAddInPopup"] = false;

$tdatacustom_group_member[".showEditInPopup"] = false;

$tdatacustom_group_member[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustom_group_member[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustom_group_member[".listAjax"] = false;
//	temporary
$tdatacustom_group_member[".listAjax"] = false;

	$tdatacustom_group_member[".audit"] = false;

	$tdatacustom_group_member[".locking"] = false;


$pages = $tdatacustom_group_member[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustom_group_member[".edit"] = true;
	$tdatacustom_group_member[".afterEditAction"] = 1;
	$tdatacustom_group_member[".closePopupAfterEdit"] = 1;
	$tdatacustom_group_member[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustom_group_member[".add"] = true;
$tdatacustom_group_member[".afterAddAction"] = 1;
$tdatacustom_group_member[".closePopupAfterAdd"] = 1;
$tdatacustom_group_member[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustom_group_member[".list"] = true;
}



$tdatacustom_group_member[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustom_group_member[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustom_group_member[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustom_group_member[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustom_group_member[".printFriendly"] = true;
}



$tdatacustom_group_member[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustom_group_member[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustom_group_member[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustom_group_member[".isUseAjaxSuggest"] = true;

$tdatacustom_group_member[".rowHighlite"] = true;





$tdatacustom_group_member[".ajaxCodeSnippetAdded"] = false;

$tdatacustom_group_member[".buttonsAdded"] = false;

$tdatacustom_group_member[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustom_group_member[".isUseTimeForSearch"] = false;


$tdatacustom_group_member[".badgeColor"] = "008B8B";


$tdatacustom_group_member[".allSearchFields"] = array();
$tdatacustom_group_member[".filterFields"] = array();
$tdatacustom_group_member[".requiredSearchFields"] = array();

$tdatacustom_group_member[".googleLikeFields"] = array();
$tdatacustom_group_member[".googleLikeFields"][] = "group_id";
$tdatacustom_group_member[".googleLikeFields"][] = "group_member_id";
$tdatacustom_group_member[".googleLikeFields"][] = "member_id";
$tdatacustom_group_member[".googleLikeFields"][] = "user_type";
$tdatacustom_group_member[".googleLikeFields"][] = "token_group";
$tdatacustom_group_member[".googleLikeFields"][] = "identifier_group";
$tdatacustom_group_member[".googleLikeFields"][] = "token_personal";
$tdatacustom_group_member[".googleLikeFields"][] = "membership_type";
$tdatacustom_group_member[".googleLikeFields"][] = "valid";
$tdatacustom_group_member[".googleLikeFields"][] = "group_name";
$tdatacustom_group_member[".googleLikeFields"][] = "description";
$tdatacustom_group_member[".googleLikeFields"][] = "logo";
$tdatacustom_group_member[".googleLikeFields"][] = "token_type";
$tdatacustom_group_member[".googleLikeFields"][] = "token_group1";
$tdatacustom_group_member[".googleLikeFields"][] = "membership_type1";
$tdatacustom_group_member[".googleLikeFields"][] = "business_type";
$tdatacustom_group_member[".googleLikeFields"][] = "open_time";
$tdatacustom_group_member[".googleLikeFields"][] = "close_time";
$tdatacustom_group_member[".googleLikeFields"][] = "off_day";




$tdatacustom_group_member[".printerPageOrientation"] = 0;
$tdatacustom_group_member[".nPrinterPageScale"] = 100;

$tdatacustom_group_member[".nPrinterSplitRecords"] = 40;

$tdatacustom_group_member[".geocodingEnabled"] = false;










$tdatacustom_group_member[".pageSize"] = 20;

$tdatacustom_group_member[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustom_group_member[".strOrderBy"] = $tstrOrderBy;

$tdatacustom_group_member[".orderindexes"] = array();


$tdatacustom_group_member[".sqlHead"] = "";
$tdatacustom_group_member[".sqlFrom"] = "";
$tdatacustom_group_member[".sqlWhereExpr"] = "";
$tdatacustom_group_member[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustom_group_member[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustom_group_member[".arrGroupsPerPage"] = $arrGPP;

$tdatacustom_group_member[".highlightSearchResults"] = true;

$tableKeyscustom_group_member = array();
$tableKeyscustom_group_member[] = "group_member_id";
$tdatacustom_group_member[".Keys"] = $tableKeyscustom_group_member;


$tdatacustom_group_member[".hideMobileList"] = array();




//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","group_id");
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


	$tdatacustom_group_member["group_id"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "group_id";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","group_member_id");
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


	$tdatacustom_group_member["group_member_id"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","member_id");
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


	$tdatacustom_group_member["member_id"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "member_id";
//	user_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user_type";
	$fdata["GoodName"] = "user_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","user_type");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "user_type";

	
		$fdata["FullName"] = "user_type";

	
	
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


	$tdatacustom_group_member["user_type"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "user_type";
//	token_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "token_group";
	$fdata["GoodName"] = "token_group";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","token_group");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "token_group";

	
		$fdata["FullName"] = "token_group";

	
	
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


	$tdatacustom_group_member["token_group"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "token_group";
//	identifier_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "identifier_group";
	$fdata["GoodName"] = "identifier_group";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","identifier_group");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "identifier_group";

	
		$fdata["FullName"] = "identifier_group";

	
	
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


	$tdatacustom_group_member["identifier_group"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "identifier_group";
//	token_personal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "token_personal";
	$fdata["GoodName"] = "token_personal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","token_personal");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "token_personal";

	
		$fdata["FullName"] = "token_personal";

	
	
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


	$tdatacustom_group_member["token_personal"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "token_personal";
//	membership_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "membership_type";
	$fdata["GoodName"] = "membership_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","membership_type");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "membership_type";

	
		$fdata["FullName"] = "membership_type";

	
	
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


	$tdatacustom_group_member["membership_type"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "membership_type";
//	valid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "valid";
	$fdata["GoodName"] = "valid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","valid");
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


	$tdatacustom_group_member["valid"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "valid";
//	group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "group_name";
	$fdata["GoodName"] = "group_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","group_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "group_name";

	
		$fdata["FullName"] = "group_name";

	
	
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


	$tdatacustom_group_member["group_name"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "group_name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","description");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "description";

	
		$fdata["FullName"] = "description";

	
	
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


	$tdatacustom_group_member["description"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "description";
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","logo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "logo";

	
		$fdata["FullName"] = "logo";

	
	
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


	$tdatacustom_group_member["logo"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "logo";
//	token_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "token_type";
	$fdata["GoodName"] = "token_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","token_type");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "token_type";

	
		$fdata["FullName"] = "token_type";

	
	
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


	$tdatacustom_group_member["token_type"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "token_type";
//	token_group1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "token_group1";
	$fdata["GoodName"] = "token_group1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","token_group1");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "token_group";

	
		$fdata["FullName"] = "token_group1";

	
	
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


	$tdatacustom_group_member["token_group1"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "token_group1";
//	membership_type1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "membership_type1";
	$fdata["GoodName"] = "membership_type1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","membership_type1");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "membership_type";

	
		$fdata["FullName"] = "membership_type1";

	
	
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


	$tdatacustom_group_member["membership_type1"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "membership_type1";
//	business_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "business_type";
	$fdata["GoodName"] = "business_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","business_type");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "business_type";

	
		$fdata["FullName"] = "business_type";

	
	
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


	$tdatacustom_group_member["business_type"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "business_type";
//	open_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "open_time";
	$fdata["GoodName"] = "open_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","open_time");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "open_time";

	
		$fdata["FullName"] = "open_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatacustom_group_member["open_time"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "open_time";
//	close_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "close_time";
	$fdata["GoodName"] = "close_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","close_time");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "close_time";

	
		$fdata["FullName"] = "close_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatacustom_group_member["close_time"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "close_time";
//	off_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "off_day";
	$fdata["GoodName"] = "off_day";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_member","off_day");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "off_day";

	
		$fdata["FullName"] = "off_day";

	
	
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


	$tdatacustom_group_member["off_day"] = $fdata;
		$tdatacustom_group_member[".searchableFields"][] = "off_day";


$tables_data["custom_group_member"]=&$tdatacustom_group_member;
$field_labels["custom_group_member"] = &$fieldLabelscustom_group_member;
$fieldToolTips["custom_group_member"] = &$fieldToolTipscustom_group_member;
$placeHolders["custom_group_member"] = &$placeHolderscustom_group_member;
$page_titles["custom_group_member"] = &$pageTitlescustom_group_member;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["custom_group_member"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["custom_group_member"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/custom_group_member_ops.php" ) );



	
		;

																			

$tdatacustom_group_member[".sqlquery"] = $queryData_custom_group_member;



include_once(getabspath("include/custom_group_member_events.php"));
$tableEvents["custom_group_member"] = new eventclass_custom_group_member;
$tdatacustom_group_member[".hasEvents"] = true;

?>