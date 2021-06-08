<?php
$tdatacustom_personal = array();
$tdatacustom_personal[".searchableFields"] = array();
$tdatacustom_personal[".ShortName"] = "custom_personal";
$tdatacustom_personal[".OwnerID"] = "";
$tdatacustom_personal[".OriginalTable"] = "custom_personal";


$tdatacustom_personal[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacustom_personal[".originalPagesByType"] = $tdatacustom_personal[".pagesByType"];
$tdatacustom_personal[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacustom_personal[".originalPages"] = $tdatacustom_personal[".pages"];
$tdatacustom_personal[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacustom_personal[".originalDefaultPages"] = $tdatacustom_personal[".defaultPages"];

//	field labels
$fieldLabelscustom_personal = array();
$fieldToolTipscustom_personal = array();
$pageTitlescustom_personal = array();
$placeHolderscustom_personal = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustom_personal["English"] = array();
	$fieldToolTipscustom_personal["English"] = array();
	$placeHolderscustom_personal["English"] = array();
	$pageTitlescustom_personal["English"] = array();
	$fieldLabelscustom_personal["English"]["member_id"] = "Member Id";
	$fieldToolTipscustom_personal["English"]["member_id"] = "";
	$placeHolderscustom_personal["English"]["member_id"] = "";
	$fieldLabelscustom_personal["English"]["name"] = "Name";
	$fieldToolTipscustom_personal["English"]["name"] = "";
	$placeHolderscustom_personal["English"]["name"] = "";
	$fieldLabelscustom_personal["English"]["mail"] = "Mail";
	$fieldToolTipscustom_personal["English"]["mail"] = "";
	$placeHolderscustom_personal["English"]["mail"] = "";
	$fieldLabelscustom_personal["English"]["password"] = "Password";
	$fieldToolTipscustom_personal["English"]["password"] = "";
	$placeHolderscustom_personal["English"]["password"] = "";
	$fieldLabelscustom_personal["English"]["country_id"] = "Country Id";
	$fieldToolTipscustom_personal["English"]["country_id"] = "";
	$placeHolderscustom_personal["English"]["country_id"] = "";
	$fieldLabelscustom_personal["English"]["province_id"] = "Province Id";
	$fieldToolTipscustom_personal["English"]["province_id"] = "";
	$placeHolderscustom_personal["English"]["province_id"] = "";
	$fieldLabelscustom_personal["English"]["apikey"] = "Apikey";
	$fieldToolTipscustom_personal["English"]["apikey"] = "";
	$placeHolderscustom_personal["English"]["apikey"] = "";
	if (count($fieldToolTipscustom_personal["English"]))
		$tdatacustom_personal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelscustom_personal["Indonesian"] = array();
	$fieldToolTipscustom_personal["Indonesian"] = array();
	$placeHolderscustom_personal["Indonesian"] = array();
	$pageTitlescustom_personal["Indonesian"] = array();
	$fieldLabelscustom_personal["Indonesian"]["member_id"] = "Member Id";
	$fieldToolTipscustom_personal["Indonesian"]["member_id"] = "";
	$placeHolderscustom_personal["Indonesian"]["member_id"] = "";
	$fieldLabelscustom_personal["Indonesian"]["name"] = "Name";
	$fieldToolTipscustom_personal["Indonesian"]["name"] = "";
	$placeHolderscustom_personal["Indonesian"]["name"] = "";
	$fieldLabelscustom_personal["Indonesian"]["mail"] = "Mail";
	$fieldToolTipscustom_personal["Indonesian"]["mail"] = "";
	$placeHolderscustom_personal["Indonesian"]["mail"] = "";
	$fieldLabelscustom_personal["Indonesian"]["password"] = "Password";
	$fieldToolTipscustom_personal["Indonesian"]["password"] = "";
	$placeHolderscustom_personal["Indonesian"]["password"] = "";
	$fieldLabelscustom_personal["Indonesian"]["country_id"] = "Country Id";
	$fieldToolTipscustom_personal["Indonesian"]["country_id"] = "";
	$placeHolderscustom_personal["Indonesian"]["country_id"] = "";
	$fieldLabelscustom_personal["Indonesian"]["province_id"] = "Province Id";
	$fieldToolTipscustom_personal["Indonesian"]["province_id"] = "";
	$placeHolderscustom_personal["Indonesian"]["province_id"] = "";
	$fieldLabelscustom_personal["Indonesian"]["apikey"] = "Apikey";
	$fieldToolTipscustom_personal["Indonesian"]["apikey"] = "";
	$placeHolderscustom_personal["Indonesian"]["apikey"] = "";
	if (count($fieldToolTipscustom_personal["Indonesian"]))
		$tdatacustom_personal[".isUseToolTips"] = true;
}


	$tdatacustom_personal[".NCSearch"] = true;



$tdatacustom_personal[".shortTableName"] = "custom_personal";
$tdatacustom_personal[".nSecOptions"] = 0;

$tdatacustom_personal[".mainTableOwnerID"] = "";
$tdatacustom_personal[".entityType"] = 6;
$tdatacustom_personal[".connId"] = "notif_basic1_at_localhost";


$tdatacustom_personal[".strOriginalTableName"] = "custom_personal";

	



$tdatacustom_personal[".showAddInPopup"] = false;

$tdatacustom_personal[".showEditInPopup"] = false;

$tdatacustom_personal[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustom_personal[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustom_personal[".listAjax"] = false;
//	temporary
$tdatacustom_personal[".listAjax"] = false;

	$tdatacustom_personal[".audit"] = false;

	$tdatacustom_personal[".locking"] = false;


$pages = $tdatacustom_personal[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustom_personal[".edit"] = true;
	$tdatacustom_personal[".afterEditAction"] = 1;
	$tdatacustom_personal[".closePopupAfterEdit"] = 1;
	$tdatacustom_personal[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustom_personal[".add"] = true;
$tdatacustom_personal[".afterAddAction"] = 1;
$tdatacustom_personal[".closePopupAfterAdd"] = 1;
$tdatacustom_personal[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustom_personal[".list"] = true;
}



$tdatacustom_personal[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustom_personal[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustom_personal[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustom_personal[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustom_personal[".printFriendly"] = true;
}



$tdatacustom_personal[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustom_personal[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustom_personal[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustom_personal[".isUseAjaxSuggest"] = true;

$tdatacustom_personal[".rowHighlite"] = true;





$tdatacustom_personal[".ajaxCodeSnippetAdded"] = false;

$tdatacustom_personal[".buttonsAdded"] = false;

$tdatacustom_personal[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustom_personal[".isUseTimeForSearch"] = false;


$tdatacustom_personal[".badgeColor"] = "DC143C";


$tdatacustom_personal[".allSearchFields"] = array();
$tdatacustom_personal[".filterFields"] = array();
$tdatacustom_personal[".requiredSearchFields"] = array();

$tdatacustom_personal[".googleLikeFields"] = array();
$tdatacustom_personal[".googleLikeFields"][] = "member_id";
$tdatacustom_personal[".googleLikeFields"][] = "name";
$tdatacustom_personal[".googleLikeFields"][] = "mail";
$tdatacustom_personal[".googleLikeFields"][] = "password";
$tdatacustom_personal[".googleLikeFields"][] = "country_id";
$tdatacustom_personal[".googleLikeFields"][] = "province_id";
$tdatacustom_personal[".googleLikeFields"][] = "apikey";




$tdatacustom_personal[".printerPageOrientation"] = 0;
$tdatacustom_personal[".nPrinterPageScale"] = 100;

$tdatacustom_personal[".nPrinterSplitRecords"] = 40;

$tdatacustom_personal[".geocodingEnabled"] = false;










$tdatacustom_personal[".pageSize"] = 20;

$tdatacustom_personal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustom_personal[".strOrderBy"] = $tstrOrderBy;

$tdatacustom_personal[".orderindexes"] = array();


$tdatacustom_personal[".sqlHead"] = "";
$tdatacustom_personal[".sqlFrom"] = "";
$tdatacustom_personal[".sqlWhereExpr"] = "";
$tdatacustom_personal[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustom_personal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustom_personal[".arrGroupsPerPage"] = $arrGPP;

$tdatacustom_personal[".highlightSearchResults"] = true;

$tableKeyscustom_personal = array();
$tableKeyscustom_personal[] = "member_id";
$tdatacustom_personal[".Keys"] = $tableKeyscustom_personal;


$tdatacustom_personal[".hideMobileList"] = array();




//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal","member_id");
	$fdata["FieldType"] = 3;

	
	
	
			

	
		$fdata["sourceSingle"] = "member_id";

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


	$tdatacustom_personal["member_id"] = $fdata;
		$tdatacustom_personal[".searchableFields"][] = "member_id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal","name");
	$fdata["FieldType"] = 200;

	
	
	
			

	
		$fdata["sourceSingle"] = "name";

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


	$tdatacustom_personal["name"] = $fdata;
		$tdatacustom_personal[".searchableFields"][] = "name";
//	mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mail";
	$fdata["GoodName"] = "mail";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal","mail");
	$fdata["FieldType"] = 200;

	
	
	
			

	
		$fdata["sourceSingle"] = "mail";

		$fdata["FullName"] = "mail";

	
	
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


	$tdatacustom_personal["mail"] = $fdata;
		$tdatacustom_personal[".searchableFields"][] = "mail";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal","password");
	$fdata["FieldType"] = 200;

	
	
	
			

	
		$fdata["sourceSingle"] = "password";

		$fdata["FullName"] = "password";

	
	
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


	$tdatacustom_personal["password"] = $fdata;
		$tdatacustom_personal[".searchableFields"][] = "password";
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal","country_id");
	$fdata["FieldType"] = 3;

	
	
	
			

	
		$fdata["sourceSingle"] = "country_id";

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


	$tdatacustom_personal["country_id"] = $fdata;
		$tdatacustom_personal[".searchableFields"][] = "country_id";
//	province_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "province_id";
	$fdata["GoodName"] = "province_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal","province_id");
	$fdata["FieldType"] = 3;

	
	
	
			

	
		$fdata["sourceSingle"] = "province_id";

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


	$tdatacustom_personal["province_id"] = $fdata;
		$tdatacustom_personal[".searchableFields"][] = "province_id";
//	apikey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "apikey";
	$fdata["GoodName"] = "apikey";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal","apikey");
	$fdata["FieldType"] = 200;

	
	
	
			

	
		$fdata["sourceSingle"] = "apikey";

		$fdata["FullName"] = "apikey";

	
	
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


	$tdatacustom_personal["apikey"] = $fdata;
		$tdatacustom_personal[".searchableFields"][] = "apikey";


$tables_data["custom_personal"]=&$tdatacustom_personal;
$field_labels["custom_personal"] = &$fieldLabelscustom_personal;
$fieldToolTips["custom_personal"] = &$fieldToolTipscustom_personal;
$placeHolders["custom_personal"] = &$placeHolderscustom_personal;
$page_titles["custom_personal"] = &$pageTitlescustom_personal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["custom_personal"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["custom_personal"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/custom_personal_ops.php" ) );



	
		;

							

$tdatacustom_personal[".sqlquery"] = $queryData_custom_personal;



include_once(getabspath("include/custom_personal_events.php"));
$tableEvents["custom_personal"] = new eventclass_custom_personal;
$tdatacustom_personal[".hasEvents"] = true;

?>