<?php
$tdatagroup4 = array();
$tdatagroup4[".searchableFields"] = array();
$tdatagroup4[".ShortName"] = "group4";
$tdatagroup4[".OwnerID"] = "";
$tdatagroup4[".OriginalTable"] = "group";


$tdatagroup4[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagroup4[".originalPagesByType"] = $tdatagroup4[".pagesByType"];
$tdatagroup4[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagroup4[".originalPages"] = $tdatagroup4[".pages"];
$tdatagroup4[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagroup4[".originalDefaultPages"] = $tdatagroup4[".defaultPages"];

//	field labels
$fieldLabelsgroup4 = array();
$fieldToolTipsgroup4 = array();
$pageTitlesgroup4 = array();
$placeHoldersgroup4 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup4["English"] = array();
	$fieldToolTipsgroup4["English"] = array();
	$placeHoldersgroup4["English"] = array();
	$pageTitlesgroup4["English"] = array();
	$fieldLabelsgroup4["English"]["group_id"] = "Group Id";
	$fieldToolTipsgroup4["English"]["group_id"] = "";
	$placeHoldersgroup4["English"]["group_id"] = "";
	$fieldLabelsgroup4["English"]["group_name"] = "Group Name";
	$fieldToolTipsgroup4["English"]["group_name"] = "";
	$placeHoldersgroup4["English"]["group_name"] = "";
	$fieldLabelsgroup4["English"]["description"] = "Description";
	$fieldToolTipsgroup4["English"]["description"] = "";
	$placeHoldersgroup4["English"]["description"] = "";
	$fieldLabelsgroup4["English"]["logo"] = "Logo";
	$fieldToolTipsgroup4["English"]["logo"] = "";
	$placeHoldersgroup4["English"]["logo"] = "";
	$fieldLabelsgroup4["English"]["token_type"] = "Token Type";
	$fieldToolTipsgroup4["English"]["token_type"] = "";
	$placeHoldersgroup4["English"]["token_type"] = "";
	$fieldLabelsgroup4["English"]["token_group"] = "Token Group";
	$fieldToolTipsgroup4["English"]["token_group"] = "";
	$placeHoldersgroup4["English"]["token_group"] = "";
	$fieldLabelsgroup4["English"]["membership_type"] = "Membership Type";
	$fieldToolTipsgroup4["English"]["membership_type"] = "";
	$placeHoldersgroup4["English"]["membership_type"] = "";
	$fieldLabelsgroup4["English"]["business_type"] = "Business Type";
	$fieldToolTipsgroup4["English"]["business_type"] = "";
	$placeHoldersgroup4["English"]["business_type"] = "";
	$fieldLabelsgroup4["English"]["open_time"] = "Open Time";
	$fieldToolTipsgroup4["English"]["open_time"] = "";
	$placeHoldersgroup4["English"]["open_time"] = "";
	$fieldLabelsgroup4["English"]["close_time"] = "Close Time";
	$fieldToolTipsgroup4["English"]["close_time"] = "";
	$placeHoldersgroup4["English"]["close_time"] = "";
	$fieldLabelsgroup4["English"]["off_day"] = "Off Day";
	$fieldToolTipsgroup4["English"]["off_day"] = "";
	$placeHoldersgroup4["English"]["off_day"] = "";
	$fieldLabelsgroup4["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsgroup4["English"]["group_member_id"] = "";
	$placeHoldersgroup4["English"]["group_member_id"] = "";
	if (count($fieldToolTipsgroup4["English"]))
		$tdatagroup4[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsgroup4["Indonesian"] = array();
	$fieldToolTipsgroup4["Indonesian"] = array();
	$placeHoldersgroup4["Indonesian"] = array();
	$pageTitlesgroup4["Indonesian"] = array();
	$fieldLabelsgroup4["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipsgroup4["Indonesian"]["group_id"] = "";
	$placeHoldersgroup4["Indonesian"]["group_id"] = "";
	$fieldLabelsgroup4["Indonesian"]["group_name"] = "Group Name";
	$fieldToolTipsgroup4["Indonesian"]["group_name"] = "";
	$placeHoldersgroup4["Indonesian"]["group_name"] = "";
	$fieldLabelsgroup4["Indonesian"]["description"] = "Description";
	$fieldToolTipsgroup4["Indonesian"]["description"] = "";
	$placeHoldersgroup4["Indonesian"]["description"] = "";
	$fieldLabelsgroup4["Indonesian"]["logo"] = "Logo";
	$fieldToolTipsgroup4["Indonesian"]["logo"] = "";
	$placeHoldersgroup4["Indonesian"]["logo"] = "";
	$fieldLabelsgroup4["Indonesian"]["token_type"] = "Token Type";
	$fieldToolTipsgroup4["Indonesian"]["token_type"] = "";
	$placeHoldersgroup4["Indonesian"]["token_type"] = "";
	$fieldLabelsgroup4["Indonesian"]["token_group"] = "Token Group";
	$fieldToolTipsgroup4["Indonesian"]["token_group"] = "";
	$placeHoldersgroup4["Indonesian"]["token_group"] = "";
	$fieldLabelsgroup4["Indonesian"]["membership_type"] = "Membership Type";
	$fieldToolTipsgroup4["Indonesian"]["membership_type"] = "";
	$placeHoldersgroup4["Indonesian"]["membership_type"] = "";
	$fieldLabelsgroup4["Indonesian"]["business_type"] = "Business Type";
	$fieldToolTipsgroup4["Indonesian"]["business_type"] = "";
	$placeHoldersgroup4["Indonesian"]["business_type"] = "";
	$fieldLabelsgroup4["Indonesian"]["open_time"] = "Open Time";
	$fieldToolTipsgroup4["Indonesian"]["open_time"] = "";
	$placeHoldersgroup4["Indonesian"]["open_time"] = "";
	$fieldLabelsgroup4["Indonesian"]["close_time"] = "Close Time";
	$fieldToolTipsgroup4["Indonesian"]["close_time"] = "";
	$placeHoldersgroup4["Indonesian"]["close_time"] = "";
	$fieldLabelsgroup4["Indonesian"]["off_day"] = "Off Day";
	$fieldToolTipsgroup4["Indonesian"]["off_day"] = "";
	$placeHoldersgroup4["Indonesian"]["off_day"] = "";
	$fieldLabelsgroup4["Indonesian"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsgroup4["Indonesian"]["group_member_id"] = "";
	$placeHoldersgroup4["Indonesian"]["group_member_id"] = "";
	if (count($fieldToolTipsgroup4["Indonesian"]))
		$tdatagroup4[".isUseToolTips"] = true;
}


	$tdatagroup4[".NCSearch"] = true;



$tdatagroup4[".shortTableName"] = "group4";
$tdatagroup4[".nSecOptions"] = 0;

$tdatagroup4[".mainTableOwnerID"] = "";
$tdatagroup4[".entityType"] = 1;
$tdatagroup4[".connId"] = "notif_basic1_at_localhost";


$tdatagroup4[".strOriginalTableName"] = "group";

	



$tdatagroup4[".showAddInPopup"] = false;

$tdatagroup4[".showEditInPopup"] = false;

$tdatagroup4[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup4[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup4[".listAjax"] = false;
//	temporary
$tdatagroup4[".listAjax"] = false;

	$tdatagroup4[".audit"] = false;

	$tdatagroup4[".locking"] = false;


$pages = $tdatagroup4[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup4[".edit"] = true;
	$tdatagroup4[".afterEditAction"] = 1;
	$tdatagroup4[".closePopupAfterEdit"] = 1;
	$tdatagroup4[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup4[".add"] = true;
$tdatagroup4[".afterAddAction"] = 1;
$tdatagroup4[".closePopupAfterAdd"] = 1;
$tdatagroup4[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup4[".list"] = true;
}



$tdatagroup4[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup4[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup4[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup4[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup4[".printFriendly"] = true;
}



$tdatagroup4[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup4[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup4[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup4[".isUseAjaxSuggest"] = true;

$tdatagroup4[".rowHighlite"] = true;





$tdatagroup4[".ajaxCodeSnippetAdded"] = false;

$tdatagroup4[".buttonsAdded"] = false;

$tdatagroup4[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup4[".isUseTimeForSearch"] = true;


$tdatagroup4[".badgeColor"] = "DC143C";


$tdatagroup4[".allSearchFields"] = array();
$tdatagroup4[".filterFields"] = array();
$tdatagroup4[".requiredSearchFields"] = array();

$tdatagroup4[".googleLikeFields"] = array();
$tdatagroup4[".googleLikeFields"][] = "group_id";
$tdatagroup4[".googleLikeFields"][] = "group_name";
$tdatagroup4[".googleLikeFields"][] = "description";
$tdatagroup4[".googleLikeFields"][] = "logo";
$tdatagroup4[".googleLikeFields"][] = "token_type";
$tdatagroup4[".googleLikeFields"][] = "token_group";
$tdatagroup4[".googleLikeFields"][] = "membership_type";
$tdatagroup4[".googleLikeFields"][] = "business_type";
$tdatagroup4[".googleLikeFields"][] = "open_time";
$tdatagroup4[".googleLikeFields"][] = "close_time";
$tdatagroup4[".googleLikeFields"][] = "off_day";
$tdatagroup4[".googleLikeFields"][] = "group_member_id";



$tdatagroup4[".tableType"] = "list";

$tdatagroup4[".printerPageOrientation"] = 0;
$tdatagroup4[".nPrinterPageScale"] = 100;

$tdatagroup4[".nPrinterSplitRecords"] = 40;

$tdatagroup4[".geocodingEnabled"] = false;










$tdatagroup4[".pageSize"] = 20;

$tdatagroup4[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup4[".strOrderBy"] = $tstrOrderBy;

$tdatagroup4[".orderindexes"] = array();


$tdatagroup4[".sqlHead"] = "SELECT `group`.group_id,  `group`.group_name,  `group`.description,  `group`.logo,  `group`.token_type,  `group`.token_group,  `group`.membership_type,  `group`.business_type,  `group`.open_time,  `group`.close_time,  `group`.off_day,  group_member.group_member_id";
$tdatagroup4[".sqlFrom"] = "FROM `group`  LEFT OUTER JOIN group_member ON `group`.group_id = group_member.group_id";
$tdatagroup4[".sqlWhereExpr"] = "";
$tdatagroup4[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup4[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup4[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup4[".highlightSearchResults"] = true;

$tableKeysgroup4 = array();
$tableKeysgroup4[] = "group_id";
$tdatagroup4[".Keys"] = $tableKeysgroup4;


$tdatagroup4[".hideMobileList"] = array();




//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group4","group_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.group_id";

	
	
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


	$tdatagroup4["group_id"] = $fdata;
		$tdatagroup4[".searchableFields"][] = "group_id";
//	group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_name";
	$fdata["GoodName"] = "group_name";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group4","group_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "group_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.group_name";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatagroup4["group_name"] = $fdata;
		$tdatagroup4[".searchableFields"][] = "group_name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group4","description");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.description";

	
	
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


	$tdatagroup4["description"] = $fdata;
		$tdatagroup4[".searchableFields"][] = "description";
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group4","logo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "logo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.logo";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatagroup4["logo"] = $fdata;
		$tdatagroup4[".searchableFields"][] = "logo";
//	token_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "token_type";
	$fdata["GoodName"] = "token_type";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group4","token_type");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "token_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.token_type";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "public";
	$edata["LookupValues"][] = "token";
	$edata["LookupValues"][] = "lookup";
	$edata["LookupValues"][] = "API";

	
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


	$tdatagroup4["token_type"] = $fdata;
		$tdatagroup4[".searchableFields"][] = "token_type";
//	token_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "token_group";
	$fdata["GoodName"] = "token_group";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group4","token_group");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "token_group";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.token_group";

	
	
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


	$tdatagroup4["token_group"] = $fdata;
		$tdatagroup4[".searchableFields"][] = "token_group";
//	membership_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "membership_type";
	$fdata["GoodName"] = "membership_type";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group4","membership_type");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "membership_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.membership_type";

	
	
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
	$edata["LookupTable"] = "membership_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "membership_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "membership_type";

	

	
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


	$tdatagroup4["membership_type"] = $fdata;
		$tdatagroup4[".searchableFields"][] = "membership_type";
//	business_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "business_type";
	$fdata["GoodName"] = "business_type";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group4","business_type");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "business_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.business_type";

	
	
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
	$edata["LookupTable"] = "business_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "business_type_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "business_type";

	

	
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


	$tdatagroup4["business_type"] = $fdata;
		$tdatagroup4[".searchableFields"][] = "business_type";
//	open_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "open_time";
	$fdata["GoodName"] = "open_time";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group4","open_time");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "open_time";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.open_time";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
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


	$tdatagroup4["open_time"] = $fdata;
		$tdatagroup4[".searchableFields"][] = "open_time";
//	close_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "close_time";
	$fdata["GoodName"] = "close_time";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group4","close_time");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "close_time";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.close_time";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
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


	$tdatagroup4["close_time"] = $fdata;
		$tdatagroup4[".searchableFields"][] = "close_time";
//	off_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "off_day";
	$fdata["GoodName"] = "off_day";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group4","off_day");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "off_day";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.off_day";

	
	
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


	$tdatagroup4["off_day"] = $fdata;
		$tdatagroup4[".searchableFields"][] = "off_day";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "group_member";
	$fdata["Label"] = GetFieldLabel("group4","group_member_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_member_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member.group_member_id";

	
	
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


	$tdatagroup4["group_member_id"] = $fdata;
		$tdatagroup4[".searchableFields"][] = "group_member_id";


$tables_data["group4"]=&$tdatagroup4;
$field_labels["group4"] = &$fieldLabelsgroup4;
$fieldToolTips["group4"] = &$fieldToolTipsgroup4;
$placeHolders["group4"] = &$placeHoldersgroup4;
$page_titles["group4"] = &$pageTitlesgroup4;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group4"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["group4"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group4()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`group`.group_id,  `group`.group_name,  `group`.description,  `group`.logo,  `group`.token_type,  `group`.token_group,  `group`.membership_type,  `group`.business_type,  `group`.open_time,  `group`.close_time,  `group`.off_day,  group_member.group_member_id";
$proto0["m_strFrom"] = "FROM `group`  LEFT OUTER JOIN group_member ON `group`.group_id = group_member.group_id";
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
	"m_strName" => "group_id",
	"m_strTable" => "group",
	"m_srcTableName" => "group4"
));

$proto6["m_sql"] = "`group`.group_id";
$proto6["m_srcTableName"] = "group4";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_name",
	"m_strTable" => "group",
	"m_srcTableName" => "group4"
));

$proto8["m_sql"] = "`group`.group_name";
$proto8["m_srcTableName"] = "group4";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "group",
	"m_srcTableName" => "group4"
));

$proto10["m_sql"] = "`group`.description";
$proto10["m_srcTableName"] = "group4";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "group",
	"m_srcTableName" => "group4"
));

$proto12["m_sql"] = "`group`.logo";
$proto12["m_srcTableName"] = "group4";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "token_type",
	"m_strTable" => "group",
	"m_srcTableName" => "group4"
));

$proto14["m_sql"] = "`group`.token_type";
$proto14["m_srcTableName"] = "group4";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "token_group",
	"m_strTable" => "group",
	"m_srcTableName" => "group4"
));

$proto16["m_sql"] = "`group`.token_group";
$proto16["m_srcTableName"] = "group4";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "membership_type",
	"m_strTable" => "group",
	"m_srcTableName" => "group4"
));

$proto18["m_sql"] = "`group`.membership_type";
$proto18["m_srcTableName"] = "group4";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "business_type",
	"m_strTable" => "group",
	"m_srcTableName" => "group4"
));

$proto20["m_sql"] = "`group`.business_type";
$proto20["m_srcTableName"] = "group4";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "open_time",
	"m_strTable" => "group",
	"m_srcTableName" => "group4"
));

$proto22["m_sql"] = "`group`.open_time";
$proto22["m_srcTableName"] = "group4";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "close_time",
	"m_strTable" => "group",
	"m_srcTableName" => "group4"
));

$proto24["m_sql"] = "`group`.close_time";
$proto24["m_srcTableName"] = "group4";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "off_day",
	"m_strTable" => "group",
	"m_srcTableName" => "group4"
));

$proto26["m_sql"] = "`group`.off_day";
$proto26["m_srcTableName"] = "group4";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_id",
	"m_strTable" => "group_member",
	"m_srcTableName" => "group4"
));

$proto28["m_sql"] = "group_member.group_member_id";
$proto28["m_srcTableName"] = "group4";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "group";
$proto31["m_srcTableName"] = "group4";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "group_id";
$proto31["m_columns"][] = "group_name";
$proto31["m_columns"][] = "description";
$proto31["m_columns"][] = "logo";
$proto31["m_columns"][] = "token_type";
$proto31["m_columns"][] = "token_group";
$proto31["m_columns"][] = "membership_type";
$proto31["m_columns"][] = "business_type";
$proto31["m_columns"][] = "open_time";
$proto31["m_columns"][] = "close_time";
$proto31["m_columns"][] = "off_day";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "`group`";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "group4";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_LEFTJOIN";
			$proto35=array();
$proto35["m_strName"] = "group_member";
$proto35["m_srcTableName"] = "group4";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "group_member_id";
$proto35["m_columns"][] = "member_id";
$proto35["m_columns"][] = "group_id";
$proto35["m_columns"][] = "user_type";
$proto35["m_columns"][] = "token_group";
$proto35["m_columns"][] = "identifier_group";
$proto35["m_columns"][] = "token_personal";
$proto35["m_columns"][] = "membership_type";
$proto35["m_columns"][] = "valid";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "LEFT OUTER JOIN group_member ON `group`.group_id = group_member.group_id";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "group4";
$proto36=array();
$proto36["m_sql"] = "`group`.group_id = group_member.group_id";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group",
	"m_srcTableName" => "group4"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= group_member.group_id";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="group4";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group4 = createSqlQuery_group4();


	
		;

												

$tdatagroup4[".sqlquery"] = $queryData_group4;



include_once(getabspath("include/group4_events.php"));
$tableEvents["group4"] = new eventclass_group4;
$tdatagroup4[".hasEvents"] = true;

?>