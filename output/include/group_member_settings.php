<?php
$tdatagroup_member = array();
$tdatagroup_member[".searchableFields"] = array();
$tdatagroup_member[".ShortName"] = "group_member";
$tdatagroup_member[".OwnerID"] = "";
$tdatagroup_member[".OriginalTable"] = "group_member";


$tdatagroup_member[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagroup_member[".originalPagesByType"] = $tdatagroup_member[".pagesByType"];
$tdatagroup_member[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagroup_member[".originalPages"] = $tdatagroup_member[".pages"];
$tdatagroup_member[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagroup_member[".originalDefaultPages"] = $tdatagroup_member[".defaultPages"];

//	field labels
$fieldLabelsgroup_member = array();
$fieldToolTipsgroup_member = array();
$pageTitlesgroup_member = array();
$placeHoldersgroup_member = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_member["English"] = array();
	$fieldToolTipsgroup_member["English"] = array();
	$placeHoldersgroup_member["English"] = array();
	$pageTitlesgroup_member["English"] = array();
	$fieldLabelsgroup_member["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsgroup_member["English"]["group_member_id"] = "";
	$placeHoldersgroup_member["English"]["group_member_id"] = "";
	$fieldLabelsgroup_member["English"]["member_id"] = "Member Id";
	$fieldToolTipsgroup_member["English"]["member_id"] = "";
	$placeHoldersgroup_member["English"]["member_id"] = "";
	$fieldLabelsgroup_member["English"]["group_id"] = "Group Id";
	$fieldToolTipsgroup_member["English"]["group_id"] = "";
	$placeHoldersgroup_member["English"]["group_id"] = "";
	$fieldLabelsgroup_member["English"]["user_type"] = "User Type";
	$fieldToolTipsgroup_member["English"]["user_type"] = "";
	$placeHoldersgroup_member["English"]["user_type"] = "";
	$fieldLabelsgroup_member["English"]["token_group"] = "Token Group";
	$fieldToolTipsgroup_member["English"]["token_group"] = "";
	$placeHoldersgroup_member["English"]["token_group"] = "";
	$fieldLabelsgroup_member["English"]["identifier_group"] = "Identifier Group";
	$fieldToolTipsgroup_member["English"]["identifier_group"] = "";
	$placeHoldersgroup_member["English"]["identifier_group"] = "";
	$fieldLabelsgroup_member["English"]["token_personal"] = "Token Personal";
	$fieldToolTipsgroup_member["English"]["token_personal"] = "";
	$placeHoldersgroup_member["English"]["token_personal"] = "";
	$fieldLabelsgroup_member["English"]["membership_type"] = "Membership Type";
	$fieldToolTipsgroup_member["English"]["membership_type"] = "";
	$placeHoldersgroup_member["English"]["membership_type"] = "";
	$fieldLabelsgroup_member["English"]["valid"] = "Valid";
	$fieldToolTipsgroup_member["English"]["valid"] = "";
	$placeHoldersgroup_member["English"]["valid"] = "";
	if (count($fieldToolTipsgroup_member["English"]))
		$tdatagroup_member[".isUseToolTips"] = true;
}


	$tdatagroup_member[".NCSearch"] = true;



$tdatagroup_member[".shortTableName"] = "group_member";
$tdatagroup_member[".nSecOptions"] = 0;

$tdatagroup_member[".mainTableOwnerID"] = "";
$tdatagroup_member[".entityType"] = 0;
$tdatagroup_member[".connId"] = "notif_basic1_at_localhost";


$tdatagroup_member[".strOriginalTableName"] = "group_member";

	



$tdatagroup_member[".showAddInPopup"] = false;

$tdatagroup_member[".showEditInPopup"] = false;

$tdatagroup_member[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_member[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_member[".listAjax"] = false;
//	temporary
$tdatagroup_member[".listAjax"] = false;

	$tdatagroup_member[".audit"] = false;

	$tdatagroup_member[".locking"] = false;


$pages = $tdatagroup_member[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_member[".edit"] = true;
	$tdatagroup_member[".afterEditAction"] = 1;
	$tdatagroup_member[".closePopupAfterEdit"] = 1;
	$tdatagroup_member[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_member[".add"] = true;
$tdatagroup_member[".afterAddAction"] = 1;
$tdatagroup_member[".closePopupAfterAdd"] = 1;
$tdatagroup_member[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_member[".list"] = true;
}



$tdatagroup_member[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup_member[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_member[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_member[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_member[".printFriendly"] = true;
}



$tdatagroup_member[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_member[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_member[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_member[".isUseAjaxSuggest"] = true;

$tdatagroup_member[".rowHighlite"] = true;





$tdatagroup_member[".ajaxCodeSnippetAdded"] = false;

$tdatagroup_member[".buttonsAdded"] = false;

$tdatagroup_member[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup_member[".isUseTimeForSearch"] = false;


$tdatagroup_member[".badgeColor"] = "6493EA";


$tdatagroup_member[".allSearchFields"] = array();
$tdatagroup_member[".filterFields"] = array();
$tdatagroup_member[".requiredSearchFields"] = array();

$tdatagroup_member[".googleLikeFields"] = array();
$tdatagroup_member[".googleLikeFields"][] = "group_member_id";
$tdatagroup_member[".googleLikeFields"][] = "member_id";
$tdatagroup_member[".googleLikeFields"][] = "group_id";
$tdatagroup_member[".googleLikeFields"][] = "user_type";
$tdatagroup_member[".googleLikeFields"][] = "token_group";
$tdatagroup_member[".googleLikeFields"][] = "identifier_group";
$tdatagroup_member[".googleLikeFields"][] = "token_personal";
$tdatagroup_member[".googleLikeFields"][] = "membership_type";
$tdatagroup_member[".googleLikeFields"][] = "valid";



$tdatagroup_member[".tableType"] = "list";

$tdatagroup_member[".printerPageOrientation"] = 0;
$tdatagroup_member[".nPrinterPageScale"] = 100;

$tdatagroup_member[".nPrinterSplitRecords"] = 40;

$tdatagroup_member[".geocodingEnabled"] = false;










$tdatagroup_member[".pageSize"] = 20;

$tdatagroup_member[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_member[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_member[".orderindexes"] = array();


$tdatagroup_member[".sqlHead"] = "SELECT group_member_id,  	member_id,  	group_id,  	user_type,  	token_group,  	identifier_group,  	token_personal,  	membership_type,  	valid";
$tdatagroup_member[".sqlFrom"] = "FROM group_member";
$tdatagroup_member[".sqlWhereExpr"] = "";
$tdatagroup_member[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_member[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_member[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_member[".highlightSearchResults"] = true;

$tableKeysgroup_member = array();
$tableKeysgroup_member[] = "group_member_id";
$tdatagroup_member[".Keys"] = $tableKeysgroup_member;


$tdatagroup_member[".hideMobileList"] = array();




//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "group_member";
	$fdata["Label"] = GetFieldLabel("group_member","group_member_id");
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


	$tdatagroup_member["group_member_id"] = $fdata;
		$tdatagroup_member[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "group_member";
	$fdata["Label"] = GetFieldLabel("group_member","member_id");
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


	$tdatagroup_member["member_id"] = $fdata;
		$tdatagroup_member[".searchableFields"][] = "member_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_member";
	$fdata["Label"] = GetFieldLabel("group_member","group_id");
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


	$tdatagroup_member["group_id"] = $fdata;
		$tdatagroup_member[".searchableFields"][] = "group_id";
//	user_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user_type";
	$fdata["GoodName"] = "user_type";
	$fdata["ownerTable"] = "group_member";
	$fdata["Label"] = GetFieldLabel("group_member","user_type");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "user_type";

	
		$fdata["isSQLExpression"] = true;
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "group_user_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_user_type";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "user_type";

	

	
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


	$tdatagroup_member["user_type"] = $fdata;
		$tdatagroup_member[".searchableFields"][] = "user_type";
//	token_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "token_group";
	$fdata["GoodName"] = "token_group";
	$fdata["ownerTable"] = "group_member";
	$fdata["Label"] = GetFieldLabel("group_member","token_group");
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


	$tdatagroup_member["token_group"] = $fdata;
		$tdatagroup_member[".searchableFields"][] = "token_group";
//	identifier_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "identifier_group";
	$fdata["GoodName"] = "identifier_group";
	$fdata["ownerTable"] = "group_member";
	$fdata["Label"] = GetFieldLabel("group_member","identifier_group");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "identifier_group";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_member["identifier_group"] = $fdata;
		$tdatagroup_member[".searchableFields"][] = "identifier_group";
//	token_personal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "token_personal";
	$fdata["GoodName"] = "token_personal";
	$fdata["ownerTable"] = "group_member";
	$fdata["Label"] = GetFieldLabel("group_member","token_personal");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "token_personal";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_member["token_personal"] = $fdata;
		$tdatagroup_member[".searchableFields"][] = "token_personal";
//	membership_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "membership_type";
	$fdata["GoodName"] = "membership_type";
	$fdata["ownerTable"] = "group_member";
	$fdata["Label"] = GetFieldLabel("group_member","membership_type");
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


	$tdatagroup_member["membership_type"] = $fdata;
		$tdatagroup_member[".searchableFields"][] = "membership_type";
//	valid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "valid";
	$fdata["GoodName"] = "valid";
	$fdata["ownerTable"] = "group_member";
	$fdata["Label"] = GetFieldLabel("group_member","valid");
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


	$tdatagroup_member["valid"] = $fdata;
		$tdatagroup_member[".searchableFields"][] = "valid";


$tables_data["group_member"]=&$tdatagroup_member;
$field_labels["group_member"] = &$fieldLabelsgroup_member;
$fieldToolTips["group_member"] = &$fieldToolTipsgroup_member;
$placeHolders["group_member"] = &$placeHoldersgroup_member;
$page_titles["group_member"] = &$pageTitlesgroup_member;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_member"] = array();
//	group_member_agenda
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_agenda";
		$detailsParam["dOriginalTable"] = "group_member_agenda";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_agenda";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_agenda");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group_member"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_member"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["masterKeys"][]="group_member_id";

				$detailsTablesData["group_member"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["detailKeys"][]="group_member_id";
//	group_member_order
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_order";
		$detailsParam["dOriginalTable"] = "group_member_order";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_order";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_order");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group_member"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_member"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["masterKeys"][]="group_member_id";

				$detailsTablesData["group_member"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["detailKeys"][]="group_member_id";
//	group_member_order_detail
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_order_detail";
		$detailsParam["dOriginalTable"] = "group_member_order_detail";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_order_detail";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_order_detail");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group_member"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_member"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["masterKeys"][]="group_member_id";

				$detailsTablesData["group_member"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["detailKeys"][]="group_member_id";
//	group_member_checkin
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_checkin";
		$detailsParam["dOriginalTable"] = "group_member_checkin";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_checkin";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_checkin");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group_member"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_member"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["masterKeys"][]="group_member_id";

				$detailsTablesData["group_member"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["detailKeys"][]="group_member_id";
//	validate_checkin
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="validate_checkin";
		$detailsParam["dOriginalTable"] = "group_member_checkin";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "validate_checkin";
	$detailsParam["dCaptionTable"] = GetTableCaption("validate_checkin");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group_member"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_member"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["masterKeys"][]="group_member_id";

				$detailsTablesData["group_member"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["detailKeys"][]="group_member_id";
//	validate_order
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="validate_order";
		$detailsParam["dOriginalTable"] = "group_member_order";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "validate_order";
	$detailsParam["dCaptionTable"] = GetTableCaption("validate_order");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group_member"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_member"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["masterKeys"][]="group_member_id";

				$detailsTablesData["group_member"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["detailKeys"][]="group_member_id";
//	review_order
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="review_order";
		$detailsParam["dOriginalTable"] = "group_member_order";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "review_order";
	$detailsParam["dCaptionTable"] = GetTableCaption("review_order");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group_member"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_member"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["masterKeys"][]="group_member_id";

				$detailsTablesData["group_member"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["detailKeys"][]="group_member_id";
//	review_checkin
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="review_checkin";
		$detailsParam["dOriginalTable"] = "group_member_checkin";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "review_checkin";
	$detailsParam["dCaptionTable"] = GetTableCaption("review_checkin");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group_member"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_member"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["masterKeys"][]="group_member_id";

				$detailsTablesData["group_member"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["detailKeys"][]="group_member_id";
//	update_order_progess
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="update_order_progess";
		$detailsParam["dOriginalTable"] = "group_member_order_detail";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "update_order_progess";
	$detailsParam["dCaptionTable"] = GetTableCaption("update_order_progess");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group_member"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_member"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["masterKeys"][]="group_member_id";

				$detailsTablesData["group_member"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_member"][$dIndex]["detailKeys"][]="group_member_id";

// tables which are master tables for current table (detail)
$masterTablesData["group_member"] = array();



	
				$strOriginalDetailsTable="group_user_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group_user_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group_user_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_member"][0] = $masterParams;
				$masterTablesData["group_member"][0]["masterKeys"] = array();
	$masterTablesData["group_member"][0]["masterKeys"][]="id_user_type";
				$masterTablesData["group_member"][0]["detailKeys"] = array();
	$masterTablesData["group_member"][0]["detailKeys"][]="user_type";
		
	
				$strOriginalDetailsTable="membership_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="membership_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "membership_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_member"][1] = $masterParams;
				$masterTablesData["group_member"][1]["masterKeys"] = array();
	$masterTablesData["group_member"][1]["masterKeys"][]="membership_id";
				$masterTablesData["group_member"][1]["detailKeys"] = array();
	$masterTablesData["group_member"][1]["detailKeys"][]="membership_type";
		
	
				$strOriginalDetailsTable="personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_member"][2] = $masterParams;
				$masterTablesData["group_member"][2]["masterKeys"] = array();
	$masterTablesData["group_member"][2]["masterKeys"][]="member_id";
				$masterTablesData["group_member"][2]["detailKeys"] = array();
	$masterTablesData["group_member"][2]["detailKeys"][]="member_id";
		
	
				$strOriginalDetailsTable="group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_member"][3] = $masterParams;
				$masterTablesData["group_member"][3]["masterKeys"] = array();
	$masterTablesData["group_member"][3]["masterKeys"][]="group_id";
				$masterTablesData["group_member"][3]["detailKeys"] = array();
	$masterTablesData["group_member"][3]["detailKeys"][]="group_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group_member()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_member_id,  	member_id,  	group_id,  	user_type,  	token_group,  	identifier_group,  	token_personal,  	membership_type,  	valid";
$proto0["m_strFrom"] = "FROM group_member";
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
	"m_strTable" => "group_member",
	"m_srcTableName" => "group_member"
));

$proto6["m_sql"] = "group_member_id";
$proto6["m_srcTableName"] = "group_member";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "group_member",
	"m_srcTableName" => "group_member"
));

$proto8["m_sql"] = "member_id";
$proto8["m_srcTableName"] = "group_member";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_member",
	"m_srcTableName" => "group_member"
));

$proto10["m_sql"] = "group_id";
$proto10["m_srcTableName"] = "group_member";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user_type",
	"m_strTable" => "group_member",
	"m_srcTableName" => "group_member"
));

$proto12["m_sql"] = "user_type";
$proto12["m_srcTableName"] = "group_member";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "token_group",
	"m_strTable" => "group_member",
	"m_srcTableName" => "group_member"
));

$proto14["m_sql"] = "token_group";
$proto14["m_srcTableName"] = "group_member";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "identifier_group",
	"m_strTable" => "group_member",
	"m_srcTableName" => "group_member"
));

$proto16["m_sql"] = "identifier_group";
$proto16["m_srcTableName"] = "group_member";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "token_personal",
	"m_strTable" => "group_member",
	"m_srcTableName" => "group_member"
));

$proto18["m_sql"] = "token_personal";
$proto18["m_srcTableName"] = "group_member";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "membership_type",
	"m_strTable" => "group_member",
	"m_srcTableName" => "group_member"
));

$proto20["m_sql"] = "membership_type";
$proto20["m_srcTableName"] = "group_member";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "valid",
	"m_strTable" => "group_member",
	"m_srcTableName" => "group_member"
));

$proto22["m_sql"] = "valid";
$proto22["m_srcTableName"] = "group_member";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "group_member";
$proto25["m_srcTableName"] = "group_member";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "group_member_id";
$proto25["m_columns"][] = "member_id";
$proto25["m_columns"][] = "group_id";
$proto25["m_columns"][] = "user_type";
$proto25["m_columns"][] = "token_group";
$proto25["m_columns"][] = "identifier_group";
$proto25["m_columns"][] = "token_personal";
$proto25["m_columns"][] = "membership_type";
$proto25["m_columns"][] = "valid";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "group_member";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "group_member";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="group_member";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group_member = createSqlQuery_group_member();


	
		;

									

$tdatagroup_member[".sqlquery"] = $queryData_group_member;



$tableEvents["group_member"] = new eventsBase;
$tdatagroup_member[".hasEvents"] = false;

?>