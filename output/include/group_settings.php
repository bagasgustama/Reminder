<?php
$tdatagroup = array();
$tdatagroup[".searchableFields"] = array();
$tdatagroup[".ShortName"] = "group";
$tdatagroup[".OwnerID"] = "";
$tdatagroup[".OriginalTable"] = "group";


$tdatagroup[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagroup[".originalPagesByType"] = $tdatagroup[".pagesByType"];
$tdatagroup[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagroup[".originalPages"] = $tdatagroup[".pages"];
$tdatagroup[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagroup[".originalDefaultPages"] = $tdatagroup[".defaultPages"];

//	field labels
$fieldLabelsgroup = array();
$fieldToolTipsgroup = array();
$pageTitlesgroup = array();
$placeHoldersgroup = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup["English"] = array();
	$fieldToolTipsgroup["English"] = array();
	$placeHoldersgroup["English"] = array();
	$pageTitlesgroup["English"] = array();
	$fieldLabelsgroup["English"]["group_id"] = "Group Id";
	$fieldToolTipsgroup["English"]["group_id"] = "";
	$placeHoldersgroup["English"]["group_id"] = "";
	$fieldLabelsgroup["English"]["group_name"] = "Group Name";
	$fieldToolTipsgroup["English"]["group_name"] = "";
	$placeHoldersgroup["English"]["group_name"] = "";
	$fieldLabelsgroup["English"]["description"] = "Description";
	$fieldToolTipsgroup["English"]["description"] = "";
	$placeHoldersgroup["English"]["description"] = "";
	$fieldLabelsgroup["English"]["logo"] = "Logo";
	$fieldToolTipsgroup["English"]["logo"] = "";
	$placeHoldersgroup["English"]["logo"] = "";
	$fieldLabelsgroup["English"]["token_type"] = "Token Type";
	$fieldToolTipsgroup["English"]["token_type"] = "";
	$placeHoldersgroup["English"]["token_type"] = "";
	$fieldLabelsgroup["English"]["token_group"] = "Token Group";
	$fieldToolTipsgroup["English"]["token_group"] = "";
	$placeHoldersgroup["English"]["token_group"] = "";
	$fieldLabelsgroup["English"]["membership_type"] = "Membership Type";
	$fieldToolTipsgroup["English"]["membership_type"] = "";
	$placeHoldersgroup["English"]["membership_type"] = "";
	$fieldLabelsgroup["English"]["business_type"] = "Business Type";
	$fieldToolTipsgroup["English"]["business_type"] = "";
	$placeHoldersgroup["English"]["business_type"] = "";
	$fieldLabelsgroup["English"]["open_time"] = "Open Time";
	$fieldToolTipsgroup["English"]["open_time"] = "";
	$placeHoldersgroup["English"]["open_time"] = "";
	$fieldLabelsgroup["English"]["close_time"] = "Close Time";
	$fieldToolTipsgroup["English"]["close_time"] = "";
	$placeHoldersgroup["English"]["close_time"] = "";
	$fieldLabelsgroup["English"]["off_day"] = "Off Day";
	$fieldToolTipsgroup["English"]["off_day"] = "";
	$placeHoldersgroup["English"]["off_day"] = "";
	if (count($fieldToolTipsgroup["English"]))
		$tdatagroup[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsgroup["Indonesian"] = array();
	$fieldToolTipsgroup["Indonesian"] = array();
	$placeHoldersgroup["Indonesian"] = array();
	$pageTitlesgroup["Indonesian"] = array();
	$fieldLabelsgroup["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipsgroup["Indonesian"]["group_id"] = "";
	$placeHoldersgroup["Indonesian"]["group_id"] = "";
	$fieldLabelsgroup["Indonesian"]["group_name"] = "Group Name";
	$fieldToolTipsgroup["Indonesian"]["group_name"] = "";
	$placeHoldersgroup["Indonesian"]["group_name"] = "";
	$fieldLabelsgroup["Indonesian"]["description"] = "Description";
	$fieldToolTipsgroup["Indonesian"]["description"] = "";
	$placeHoldersgroup["Indonesian"]["description"] = "";
	$fieldLabelsgroup["Indonesian"]["logo"] = "Logo";
	$fieldToolTipsgroup["Indonesian"]["logo"] = "";
	$placeHoldersgroup["Indonesian"]["logo"] = "";
	$fieldLabelsgroup["Indonesian"]["token_type"] = "Token Type";
	$fieldToolTipsgroup["Indonesian"]["token_type"] = "";
	$placeHoldersgroup["Indonesian"]["token_type"] = "";
	$fieldLabelsgroup["Indonesian"]["token_group"] = "Token Group";
	$fieldToolTipsgroup["Indonesian"]["token_group"] = "";
	$placeHoldersgroup["Indonesian"]["token_group"] = "";
	$fieldLabelsgroup["Indonesian"]["membership_type"] = "Membership Type";
	$fieldToolTipsgroup["Indonesian"]["membership_type"] = "";
	$placeHoldersgroup["Indonesian"]["membership_type"] = "";
	$fieldLabelsgroup["Indonesian"]["business_type"] = "Business Type";
	$fieldToolTipsgroup["Indonesian"]["business_type"] = "";
	$placeHoldersgroup["Indonesian"]["business_type"] = "";
	$fieldLabelsgroup["Indonesian"]["open_time"] = "Open Time";
	$fieldToolTipsgroup["Indonesian"]["open_time"] = "";
	$placeHoldersgroup["Indonesian"]["open_time"] = "";
	$fieldLabelsgroup["Indonesian"]["close_time"] = "Close Time";
	$fieldToolTipsgroup["Indonesian"]["close_time"] = "";
	$placeHoldersgroup["Indonesian"]["close_time"] = "";
	$fieldLabelsgroup["Indonesian"]["off_day"] = "Off Day";
	$fieldToolTipsgroup["Indonesian"]["off_day"] = "";
	$placeHoldersgroup["Indonesian"]["off_day"] = "";
	if (count($fieldToolTipsgroup["Indonesian"]))
		$tdatagroup[".isUseToolTips"] = true;
}


	$tdatagroup[".NCSearch"] = true;



$tdatagroup[".shortTableName"] = "group";
$tdatagroup[".nSecOptions"] = 0;

$tdatagroup[".mainTableOwnerID"] = "";
$tdatagroup[".entityType"] = 0;
$tdatagroup[".connId"] = "notif_basic1_at_localhost";


$tdatagroup[".strOriginalTableName"] = "group";

	



$tdatagroup[".showAddInPopup"] = false;

$tdatagroup[".showEditInPopup"] = false;

$tdatagroup[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup[".listAjax"] = false;
//	temporary
$tdatagroup[".listAjax"] = false;

	$tdatagroup[".audit"] = false;

	$tdatagroup[".locking"] = false;


$pages = $tdatagroup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup[".edit"] = true;
	$tdatagroup[".afterEditAction"] = 1;
	$tdatagroup[".closePopupAfterEdit"] = 1;
	$tdatagroup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup[".add"] = true;
$tdatagroup[".afterAddAction"] = 1;
$tdatagroup[".closePopupAfterAdd"] = 1;
$tdatagroup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup[".list"] = true;
}



$tdatagroup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup[".printFriendly"] = true;
}



$tdatagroup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup[".isUseAjaxSuggest"] = true;

$tdatagroup[".rowHighlite"] = true;





$tdatagroup[".ajaxCodeSnippetAdded"] = false;

$tdatagroup[".buttonsAdded"] = false;

$tdatagroup[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup[".isUseTimeForSearch"] = true;


$tdatagroup[".badgeColor"] = "BC8F8F";


$tdatagroup[".allSearchFields"] = array();
$tdatagroup[".filterFields"] = array();
$tdatagroup[".requiredSearchFields"] = array();

$tdatagroup[".googleLikeFields"] = array();
$tdatagroup[".googleLikeFields"][] = "group_id";
$tdatagroup[".googleLikeFields"][] = "group_name";
$tdatagroup[".googleLikeFields"][] = "description";
$tdatagroup[".googleLikeFields"][] = "logo";
$tdatagroup[".googleLikeFields"][] = "token_type";
$tdatagroup[".googleLikeFields"][] = "token_group";
$tdatagroup[".googleLikeFields"][] = "membership_type";
$tdatagroup[".googleLikeFields"][] = "business_type";
$tdatagroup[".googleLikeFields"][] = "open_time";
$tdatagroup[".googleLikeFields"][] = "close_time";
$tdatagroup[".googleLikeFields"][] = "off_day";



$tdatagroup[".tableType"] = "list";

$tdatagroup[".printerPageOrientation"] = 0;
$tdatagroup[".nPrinterPageScale"] = 100;

$tdatagroup[".nPrinterSplitRecords"] = 40;

$tdatagroup[".geocodingEnabled"] = false;










$tdatagroup[".pageSize"] = 20;

$tdatagroup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup[".strOrderBy"] = $tstrOrderBy;

$tdatagroup[".orderindexes"] = array();


$tdatagroup[".sqlHead"] = "SELECT group_id,  	group_name,  	description,  	logo,  	token_type,  	token_group,  	membership_type,  	business_type,  	open_time,  	close_time,  	off_day";
$tdatagroup[".sqlFrom"] = "FROM `group`";
$tdatagroup[".sqlWhereExpr"] = "";
$tdatagroup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup[".highlightSearchResults"] = true;

$tableKeysgroup = array();
$tableKeysgroup[] = "group_id";
$tdatagroup[".Keys"] = $tableKeysgroup;


$tdatagroup[".hideMobileList"] = array();




//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group","group_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatagroup["group_id"] = $fdata;
		$tdatagroup[".searchableFields"][] = "group_id";
//	group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_name";
	$fdata["GoodName"] = "group_name";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group","group_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "group_name";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup["group_name"] = $fdata;
		$tdatagroup[".searchableFields"][] = "group_name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group","description");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup["description"] = $fdata;
		$tdatagroup[".searchableFields"][] = "description";
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group","logo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "logo";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup["logo"] = $fdata;
		$tdatagroup[".searchableFields"][] = "logo";
//	token_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "token_type";
	$fdata["GoodName"] = "token_type";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group","token_type");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "token_type";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup["token_type"] = $fdata;
		$tdatagroup[".searchableFields"][] = "token_type";
//	token_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "token_group";
	$fdata["GoodName"] = "token_group";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group","token_group");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "token_group";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup["token_group"] = $fdata;
		$tdatagroup[".searchableFields"][] = "token_group";
//	membership_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "membership_type";
	$fdata["GoodName"] = "membership_type";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group","membership_type");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "membership_type";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup["membership_type"] = $fdata;
		$tdatagroup[".searchableFields"][] = "membership_type";
//	business_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "business_type";
	$fdata["GoodName"] = "business_type";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group","business_type");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "business_type";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup["business_type"] = $fdata;
		$tdatagroup[".searchableFields"][] = "business_type";
//	open_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "open_time";
	$fdata["GoodName"] = "open_time";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group","open_time");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "open_time";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup["open_time"] = $fdata;
		$tdatagroup[".searchableFields"][] = "open_time";
//	close_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "close_time";
	$fdata["GoodName"] = "close_time";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group","close_time");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "close_time";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup["close_time"] = $fdata;
		$tdatagroup[".searchableFields"][] = "close_time";
//	off_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "off_day";
	$fdata["GoodName"] = "off_day";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group","off_day");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "off_day";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup["off_day"] = $fdata;
		$tdatagroup[".searchableFields"][] = "off_day";


$tables_data["group"]=&$tdatagroup;
$field_labels["group"] = &$fieldLabelsgroup;
$fieldToolTips["group"] = &$fieldToolTipsgroup;
$placeHolders["group"] = &$placeHoldersgroup;
$page_titles["group"] = &$pageTitlesgroup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group"] = array();
//	lookup_token
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lookup_token";
		$detailsParam["dOriginalTable"] = "lookup_token";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lookup_token";
	$detailsParam["dCaptionTable"] = GetTableCaption("lookup_token");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="id_group";
//	group_operation_off
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_operation_off";
		$detailsParam["dOriginalTable"] = "group_operation_off";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_operation_off";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_operation_off");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";
//	group_product
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_product";
		$detailsParam["dOriginalTable"] = "group_product";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_product";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_product");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";
//	group_member_order_detail
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_order_detail";
		$detailsParam["dOriginalTable"] = "group_member_order_detail";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_order_detail";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_order_detail");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";
//	group_member_order
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_order";
		$detailsParam["dOriginalTable"] = "group_member_order";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_order";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_order");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";
//	group_member
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member";
		$detailsParam["dOriginalTable"] = "group_member";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";
//	group_agenda
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_agenda";
		$detailsParam["dOriginalTable"] = "group_agenda";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_agenda";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_agenda");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";
//	group_member_checkin
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_checkin";
		$detailsParam["dOriginalTable"] = "group_member_checkin";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_checkin";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_checkin");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";
//	group_agenda_type
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_agenda_type";
		$detailsParam["dOriginalTable"] = "group_agenda_type";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_agenda_type";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_agenda_type");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";
//	validate_checkin
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="validate_checkin";
		$detailsParam["dOriginalTable"] = "group_member_checkin";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "validate_checkin";
	$detailsParam["dCaptionTable"] = GetTableCaption("validate_checkin");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";
//	validate_order
	
	

		$dIndex = 10;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="validate_order";
		$detailsParam["dOriginalTable"] = "group_member_order";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "validate_order";
	$detailsParam["dCaptionTable"] = GetTableCaption("validate_order");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";
//	review_order
	
	

		$dIndex = 11;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="review_order";
		$detailsParam["dOriginalTable"] = "group_member_order";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "review_order";
	$detailsParam["dCaptionTable"] = GetTableCaption("review_order");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";
//	review_checkin
	
	

		$dIndex = 12;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="review_checkin";
		$detailsParam["dOriginalTable"] = "group_member_checkin";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "review_checkin";
	$detailsParam["dCaptionTable"] = GetTableCaption("review_checkin");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";
//	update_order_progess
	
	

		$dIndex = 13;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="update_order_progess";
		$detailsParam["dOriginalTable"] = "group_member_order_detail";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "update_order_progess";
	$detailsParam["dCaptionTable"] = GetTableCaption("update_order_progess");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";
//	member checkin
	
	

		$dIndex = 14;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="member checkin";
		$detailsParam["dOriginalTable"] = "group_member_checkin";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "member_checkin";
	$detailsParam["dCaptionTable"] = GetTableCaption("member_checkin");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";
//	payment
	
	

		$dIndex = 15;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="payment";
		$detailsParam["dOriginalTable"] = "group_member_order";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "payment";
	$detailsParam["dCaptionTable"] = GetTableCaption("payment");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group"][$dIndex]["detailKeys"][]="group_id";

// tables which are master tables for current table (detail)
$masterTablesData["group"] = array();



	
				$strOriginalDetailsTable="business_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="business_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "business_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group"][0] = $masterParams;
				$masterTablesData["group"][0]["masterKeys"] = array();
	$masterTablesData["group"][0]["masterKeys"][]="business_type_id";
				$masterTablesData["group"][0]["detailKeys"] = array();
	$masterTablesData["group"][0]["detailKeys"][]="business_type";
		
	
				$strOriginalDetailsTable="membership_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="membership_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "membership_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group"][1] = $masterParams;
				$masterTablesData["group"][1]["masterKeys"] = array();
	$masterTablesData["group"][1]["masterKeys"][]="membership_id";
				$masterTablesData["group"][1]["detailKeys"] = array();
	$masterTablesData["group"][1]["detailKeys"][]="membership_type";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_id,  	group_name,  	description,  	logo,  	token_type,  	token_group,  	membership_type,  	business_type,  	open_time,  	close_time,  	off_day";
$proto0["m_strFrom"] = "FROM `group`";
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
	"m_srcTableName" => "group"
));

$proto6["m_sql"] = "group_id";
$proto6["m_srcTableName"] = "group";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_name",
	"m_strTable" => "group",
	"m_srcTableName" => "group"
));

$proto8["m_sql"] = "group_name";
$proto8["m_srcTableName"] = "group";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "group",
	"m_srcTableName" => "group"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "group";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "group",
	"m_srcTableName" => "group"
));

$proto12["m_sql"] = "logo";
$proto12["m_srcTableName"] = "group";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "token_type",
	"m_strTable" => "group",
	"m_srcTableName" => "group"
));

$proto14["m_sql"] = "token_type";
$proto14["m_srcTableName"] = "group";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "token_group",
	"m_strTable" => "group",
	"m_srcTableName" => "group"
));

$proto16["m_sql"] = "token_group";
$proto16["m_srcTableName"] = "group";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "membership_type",
	"m_strTable" => "group",
	"m_srcTableName" => "group"
));

$proto18["m_sql"] = "membership_type";
$proto18["m_srcTableName"] = "group";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "business_type",
	"m_strTable" => "group",
	"m_srcTableName" => "group"
));

$proto20["m_sql"] = "business_type";
$proto20["m_srcTableName"] = "group";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "open_time",
	"m_strTable" => "group",
	"m_srcTableName" => "group"
));

$proto22["m_sql"] = "open_time";
$proto22["m_srcTableName"] = "group";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "close_time",
	"m_strTable" => "group",
	"m_srcTableName" => "group"
));

$proto24["m_sql"] = "close_time";
$proto24["m_srcTableName"] = "group";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "off_day",
	"m_strTable" => "group",
	"m_srcTableName" => "group"
));

$proto26["m_sql"] = "off_day";
$proto26["m_srcTableName"] = "group";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "group";
$proto29["m_srcTableName"] = "group";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "group_id";
$proto29["m_columns"][] = "group_name";
$proto29["m_columns"][] = "description";
$proto29["m_columns"][] = "logo";
$proto29["m_columns"][] = "token_type";
$proto29["m_columns"][] = "token_group";
$proto29["m_columns"][] = "membership_type";
$proto29["m_columns"][] = "business_type";
$proto29["m_columns"][] = "open_time";
$proto29["m_columns"][] = "close_time";
$proto29["m_columns"][] = "off_day";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "`group`";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "group";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="group";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group = createSqlQuery_group();


	
		;

											

$tdatagroup[".sqlquery"] = $queryData_group;



include_once(getabspath("include/group_events.php"));
$tableEvents["group"] = new eventclass_group;
$tdatagroup[".hasEvents"] = true;

?>