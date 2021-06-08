<?php
$tdatacustom_group = array();
$tdatacustom_group[".searchableFields"] = array();
$tdatacustom_group[".ShortName"] = "custom_group";
$tdatacustom_group[".OwnerID"] = "";
$tdatacustom_group[".OriginalTable"] = "custom_group";


$tdatacustom_group[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacustom_group[".originalPagesByType"] = $tdatacustom_group[".pagesByType"];
$tdatacustom_group[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacustom_group[".originalPages"] = $tdatacustom_group[".pages"];
$tdatacustom_group[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacustom_group[".originalDefaultPages"] = $tdatacustom_group[".defaultPages"];

//	field labels
$fieldLabelscustom_group = array();
$fieldToolTipscustom_group = array();
$pageTitlescustom_group = array();
$placeHolderscustom_group = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustom_group["English"] = array();
	$fieldToolTipscustom_group["English"] = array();
	$placeHolderscustom_group["English"] = array();
	$pageTitlescustom_group["English"] = array();
	$fieldLabelscustom_group["English"]["group_id"] = "Group Id";
	$fieldToolTipscustom_group["English"]["group_id"] = "";
	$placeHolderscustom_group["English"]["group_id"] = "";
	$fieldLabelscustom_group["English"]["group_name"] = "Group Name";
	$fieldToolTipscustom_group["English"]["group_name"] = "";
	$placeHolderscustom_group["English"]["group_name"] = "";
	$fieldLabelscustom_group["English"]["description"] = "Description";
	$fieldToolTipscustom_group["English"]["description"] = "";
	$placeHolderscustom_group["English"]["description"] = "";
	$fieldLabelscustom_group["English"]["logo"] = "Logo";
	$fieldToolTipscustom_group["English"]["logo"] = "";
	$placeHolderscustom_group["English"]["logo"] = "";
	$fieldLabelscustom_group["English"]["token_type"] = "Token Type";
	$fieldToolTipscustom_group["English"]["token_type"] = "";
	$placeHolderscustom_group["English"]["token_type"] = "";
	$fieldLabelscustom_group["English"]["token_group"] = "Token Group";
	$fieldToolTipscustom_group["English"]["token_group"] = "";
	$placeHolderscustom_group["English"]["token_group"] = "";
	$fieldLabelscustom_group["English"]["membership_type"] = "Membership Type";
	$fieldToolTipscustom_group["English"]["membership_type"] = "";
	$placeHolderscustom_group["English"]["membership_type"] = "";
	$fieldLabelscustom_group["English"]["business_type"] = "Business Type";
	$fieldToolTipscustom_group["English"]["business_type"] = "";
	$placeHolderscustom_group["English"]["business_type"] = "";
	$fieldLabelscustom_group["English"]["open_time"] = "Open Time";
	$fieldToolTipscustom_group["English"]["open_time"] = "";
	$placeHolderscustom_group["English"]["open_time"] = "";
	$fieldLabelscustom_group["English"]["close_time"] = "Close Time";
	$fieldToolTipscustom_group["English"]["close_time"] = "";
	$placeHolderscustom_group["English"]["close_time"] = "";
	$fieldLabelscustom_group["English"]["off_day"] = "Off Day";
	$fieldToolTipscustom_group["English"]["off_day"] = "";
	$placeHolderscustom_group["English"]["off_day"] = "";
	if (count($fieldToolTipscustom_group["English"]))
		$tdatacustom_group[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelscustom_group["Indonesian"] = array();
	$fieldToolTipscustom_group["Indonesian"] = array();
	$placeHolderscustom_group["Indonesian"] = array();
	$pageTitlescustom_group["Indonesian"] = array();
	$fieldLabelscustom_group["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipscustom_group["Indonesian"]["group_id"] = "";
	$placeHolderscustom_group["Indonesian"]["group_id"] = "";
	$fieldLabelscustom_group["Indonesian"]["group_name"] = "Group Name";
	$fieldToolTipscustom_group["Indonesian"]["group_name"] = "";
	$placeHolderscustom_group["Indonesian"]["group_name"] = "";
	$fieldLabelscustom_group["Indonesian"]["description"] = "Description";
	$fieldToolTipscustom_group["Indonesian"]["description"] = "";
	$placeHolderscustom_group["Indonesian"]["description"] = "";
	$fieldLabelscustom_group["Indonesian"]["logo"] = "Logo";
	$fieldToolTipscustom_group["Indonesian"]["logo"] = "";
	$placeHolderscustom_group["Indonesian"]["logo"] = "";
	$fieldLabelscustom_group["Indonesian"]["token_type"] = "Token Type";
	$fieldToolTipscustom_group["Indonesian"]["token_type"] = "";
	$placeHolderscustom_group["Indonesian"]["token_type"] = "";
	$fieldLabelscustom_group["Indonesian"]["token_group"] = "Token Group";
	$fieldToolTipscustom_group["Indonesian"]["token_group"] = "";
	$placeHolderscustom_group["Indonesian"]["token_group"] = "";
	$fieldLabelscustom_group["Indonesian"]["membership_type"] = "Membership Type";
	$fieldToolTipscustom_group["Indonesian"]["membership_type"] = "";
	$placeHolderscustom_group["Indonesian"]["membership_type"] = "";
	$fieldLabelscustom_group["Indonesian"]["business_type"] = "Business Type";
	$fieldToolTipscustom_group["Indonesian"]["business_type"] = "";
	$placeHolderscustom_group["Indonesian"]["business_type"] = "";
	$fieldLabelscustom_group["Indonesian"]["open_time"] = "Open Time";
	$fieldToolTipscustom_group["Indonesian"]["open_time"] = "";
	$placeHolderscustom_group["Indonesian"]["open_time"] = "";
	$fieldLabelscustom_group["Indonesian"]["close_time"] = "Close Time";
	$fieldToolTipscustom_group["Indonesian"]["close_time"] = "";
	$placeHolderscustom_group["Indonesian"]["close_time"] = "";
	$fieldLabelscustom_group["Indonesian"]["off_day"] = "Off Day";
	$fieldToolTipscustom_group["Indonesian"]["off_day"] = "";
	$placeHolderscustom_group["Indonesian"]["off_day"] = "";
	if (count($fieldToolTipscustom_group["Indonesian"]))
		$tdatacustom_group[".isUseToolTips"] = true;
}


	$tdatacustom_group[".NCSearch"] = true;



$tdatacustom_group[".shortTableName"] = "custom_group";
$tdatacustom_group[".nSecOptions"] = 0;

$tdatacustom_group[".mainTableOwnerID"] = "";
$tdatacustom_group[".entityType"] = 6;
$tdatacustom_group[".connId"] = "notif_basic1_at_localhost";


$tdatacustom_group[".strOriginalTableName"] = "custom_group";

	



$tdatacustom_group[".showAddInPopup"] = false;

$tdatacustom_group[".showEditInPopup"] = false;

$tdatacustom_group[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustom_group[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustom_group[".listAjax"] = false;
//	temporary
$tdatacustom_group[".listAjax"] = false;

	$tdatacustom_group[".audit"] = false;

	$tdatacustom_group[".locking"] = false;


$pages = $tdatacustom_group[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustom_group[".edit"] = true;
	$tdatacustom_group[".afterEditAction"] = 1;
	$tdatacustom_group[".closePopupAfterEdit"] = 1;
	$tdatacustom_group[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustom_group[".add"] = true;
$tdatacustom_group[".afterAddAction"] = 1;
$tdatacustom_group[".closePopupAfterAdd"] = 1;
$tdatacustom_group[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustom_group[".list"] = true;
}



$tdatacustom_group[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustom_group[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustom_group[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustom_group[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustom_group[".printFriendly"] = true;
}



$tdatacustom_group[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustom_group[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustom_group[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustom_group[".isUseAjaxSuggest"] = true;

$tdatacustom_group[".rowHighlite"] = true;





$tdatacustom_group[".ajaxCodeSnippetAdded"] = false;

$tdatacustom_group[".buttonsAdded"] = false;

$tdatacustom_group[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustom_group[".isUseTimeForSearch"] = false;


$tdatacustom_group[".badgeColor"] = "6493EA";


$tdatacustom_group[".allSearchFields"] = array();
$tdatacustom_group[".filterFields"] = array();
$tdatacustom_group[".requiredSearchFields"] = array();

$tdatacustom_group[".googleLikeFields"] = array();
$tdatacustom_group[".googleLikeFields"][] = "group_id";
$tdatacustom_group[".googleLikeFields"][] = "group_name";
$tdatacustom_group[".googleLikeFields"][] = "description";
$tdatacustom_group[".googleLikeFields"][] = "logo";
$tdatacustom_group[".googleLikeFields"][] = "token_type";
$tdatacustom_group[".googleLikeFields"][] = "token_group";
$tdatacustom_group[".googleLikeFields"][] = "membership_type";
$tdatacustom_group[".googleLikeFields"][] = "business_type";
$tdatacustom_group[".googleLikeFields"][] = "open_time";
$tdatacustom_group[".googleLikeFields"][] = "close_time";
$tdatacustom_group[".googleLikeFields"][] = "off_day";




$tdatacustom_group[".printerPageOrientation"] = 0;
$tdatacustom_group[".nPrinterPageScale"] = 100;

$tdatacustom_group[".nPrinterSplitRecords"] = 40;

$tdatacustom_group[".geocodingEnabled"] = false;










$tdatacustom_group[".pageSize"] = 20;

$tdatacustom_group[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustom_group[".strOrderBy"] = $tstrOrderBy;

$tdatacustom_group[".orderindexes"] = array();


$tdatacustom_group[".sqlHead"] = "";
$tdatacustom_group[".sqlFrom"] = "";
$tdatacustom_group[".sqlWhereExpr"] = "";
$tdatacustom_group[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustom_group[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustom_group[".arrGroupsPerPage"] = $arrGPP;

$tdatacustom_group[".highlightSearchResults"] = true;

$tableKeyscustom_group = array();
$tableKeyscustom_group[] = "group_id";
$tdatacustom_group[".Keys"] = $tableKeyscustom_group;


$tdatacustom_group[".hideMobileList"] = array();




//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group","group_id");
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


	$tdatacustom_group["group_id"] = $fdata;
		$tdatacustom_group[".searchableFields"][] = "group_id";
//	group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_name";
	$fdata["GoodName"] = "group_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group","group_name");
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


	$tdatacustom_group["group_name"] = $fdata;
		$tdatacustom_group[".searchableFields"][] = "group_name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group","description");
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


	$tdatacustom_group["description"] = $fdata;
		$tdatacustom_group[".searchableFields"][] = "description";
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group","logo");
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


	$tdatacustom_group["logo"] = $fdata;
		$tdatacustom_group[".searchableFields"][] = "logo";
//	token_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "token_type";
	$fdata["GoodName"] = "token_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group","token_type");
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


	$tdatacustom_group["token_type"] = $fdata;
		$tdatacustom_group[".searchableFields"][] = "token_type";
//	token_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "token_group";
	$fdata["GoodName"] = "token_group";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group","token_group");
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


	$tdatacustom_group["token_group"] = $fdata;
		$tdatacustom_group[".searchableFields"][] = "token_group";
//	membership_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "membership_type";
	$fdata["GoodName"] = "membership_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group","membership_type");
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


	$tdatacustom_group["membership_type"] = $fdata;
		$tdatacustom_group[".searchableFields"][] = "membership_type";
//	business_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "business_type";
	$fdata["GoodName"] = "business_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group","business_type");
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


	$tdatacustom_group["business_type"] = $fdata;
		$tdatacustom_group[".searchableFields"][] = "business_type";
//	open_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "open_time";
	$fdata["GoodName"] = "open_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group","open_time");
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


	$tdatacustom_group["open_time"] = $fdata;
		$tdatacustom_group[".searchableFields"][] = "open_time";
//	close_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "close_time";
	$fdata["GoodName"] = "close_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group","close_time");
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


	$tdatacustom_group["close_time"] = $fdata;
		$tdatacustom_group[".searchableFields"][] = "close_time";
//	off_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "off_day";
	$fdata["GoodName"] = "off_day";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group","off_day");
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


	$tdatacustom_group["off_day"] = $fdata;
		$tdatacustom_group[".searchableFields"][] = "off_day";


$tables_data["custom_group"]=&$tdatacustom_group;
$field_labels["custom_group"] = &$fieldLabelscustom_group;
$fieldToolTips["custom_group"] = &$fieldToolTipscustom_group;
$placeHolders["custom_group"] = &$placeHolderscustom_group;
$page_titles["custom_group"] = &$pageTitlescustom_group;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["custom_group"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["custom_group"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/custom_group_ops.php" ) );



	
		;

											

$tdatacustom_group[".sqlquery"] = $queryData_custom_group;



include_once(getabspath("include/custom_group_events.php"));
$tableEvents["custom_group"] = new eventclass_custom_group;
$tdatacustom_group[".hasEvents"] = true;

?>