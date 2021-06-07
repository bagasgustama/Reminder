<?php
$tdatacustom_personal_agenda = array();
$tdatacustom_personal_agenda[".searchableFields"] = array();
$tdatacustom_personal_agenda[".ShortName"] = "custom_personal_agenda";
$tdatacustom_personal_agenda[".OwnerID"] = "";
$tdatacustom_personal_agenda[".OriginalTable"] = "custom_personal_agenda";


$tdatacustom_personal_agenda[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacustom_personal_agenda[".originalPagesByType"] = $tdatacustom_personal_agenda[".pagesByType"];
$tdatacustom_personal_agenda[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacustom_personal_agenda[".originalPages"] = $tdatacustom_personal_agenda[".pages"];
$tdatacustom_personal_agenda[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacustom_personal_agenda[".originalDefaultPages"] = $tdatacustom_personal_agenda[".defaultPages"];

//	field labels
$fieldLabelscustom_personal_agenda = array();
$fieldToolTipscustom_personal_agenda = array();
$pageTitlescustom_personal_agenda = array();
$placeHolderscustom_personal_agenda = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustom_personal_agenda["English"] = array();
	$fieldToolTipscustom_personal_agenda["English"] = array();
	$placeHolderscustom_personal_agenda["English"] = array();
	$pageTitlescustom_personal_agenda["English"] = array();
	$fieldLabelscustom_personal_agenda["English"]["member_agenda_id"] = "Member Agenda Id";
	$fieldToolTipscustom_personal_agenda["English"]["member_agenda_id"] = "";
	$placeHolderscustom_personal_agenda["English"]["member_agenda_id"] = "";
	$fieldLabelscustom_personal_agenda["English"]["member_id"] = "Member Id";
	$fieldToolTipscustom_personal_agenda["English"]["member_id"] = "";
	$placeHolderscustom_personal_agenda["English"]["member_id"] = "";
	$fieldLabelscustom_personal_agenda["English"]["loop_type"] = "Loop Type";
	$fieldToolTipscustom_personal_agenda["English"]["loop_type"] = "";
	$placeHolderscustom_personal_agenda["English"]["loop_type"] = "";
	$fieldLabelscustom_personal_agenda["English"]["loop_value"] = "Loop Value";
	$fieldToolTipscustom_personal_agenda["English"]["loop_value"] = "";
	$placeHolderscustom_personal_agenda["English"]["loop_value"] = "";
	$fieldLabelscustom_personal_agenda["English"]["message_content"] = "Message Content";
	$fieldToolTipscustom_personal_agenda["English"]["message_content"] = "";
	$placeHolderscustom_personal_agenda["English"]["message_content"] = "";
	$fieldLabelscustom_personal_agenda["English"]["attachment"] = "Attachment";
	$fieldToolTipscustom_personal_agenda["English"]["attachment"] = "";
	$placeHolderscustom_personal_agenda["English"]["attachment"] = "";
	$fieldLabelscustom_personal_agenda["English"]["repeat"] = "Repeat";
	$fieldToolTipscustom_personal_agenda["English"]["repeat"] = "";
	$placeHolderscustom_personal_agenda["English"]["repeat"] = "";
	$fieldLabelscustom_personal_agenda["English"]["repeat_type"] = "Repeat Type";
	$fieldToolTipscustom_personal_agenda["English"]["repeat_type"] = "";
	$placeHolderscustom_personal_agenda["English"]["repeat_type"] = "";
	if (count($fieldToolTipscustom_personal_agenda["English"]))
		$tdatacustom_personal_agenda[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelscustom_personal_agenda["Indonesian"] = array();
	$fieldToolTipscustom_personal_agenda["Indonesian"] = array();
	$placeHolderscustom_personal_agenda["Indonesian"] = array();
	$pageTitlescustom_personal_agenda["Indonesian"] = array();
	$fieldLabelscustom_personal_agenda["Indonesian"]["member_agenda_id"] = "Member Agenda Id";
	$fieldToolTipscustom_personal_agenda["Indonesian"]["member_agenda_id"] = "";
	$placeHolderscustom_personal_agenda["Indonesian"]["member_agenda_id"] = "";
	$fieldLabelscustom_personal_agenda["Indonesian"]["member_id"] = "Member Id";
	$fieldToolTipscustom_personal_agenda["Indonesian"]["member_id"] = "";
	$placeHolderscustom_personal_agenda["Indonesian"]["member_id"] = "";
	$fieldLabelscustom_personal_agenda["Indonesian"]["loop_type"] = "Loop Type";
	$fieldToolTipscustom_personal_agenda["Indonesian"]["loop_type"] = "";
	$placeHolderscustom_personal_agenda["Indonesian"]["loop_type"] = "";
	$fieldLabelscustom_personal_agenda["Indonesian"]["loop_value"] = "Loop Value";
	$fieldToolTipscustom_personal_agenda["Indonesian"]["loop_value"] = "";
	$placeHolderscustom_personal_agenda["Indonesian"]["loop_value"] = "";
	$fieldLabelscustom_personal_agenda["Indonesian"]["message_content"] = "Message Content";
	$fieldToolTipscustom_personal_agenda["Indonesian"]["message_content"] = "";
	$placeHolderscustom_personal_agenda["Indonesian"]["message_content"] = "";
	$fieldLabelscustom_personal_agenda["Indonesian"]["attachment"] = "Attachment";
	$fieldToolTipscustom_personal_agenda["Indonesian"]["attachment"] = "";
	$placeHolderscustom_personal_agenda["Indonesian"]["attachment"] = "";
	$fieldLabelscustom_personal_agenda["Indonesian"]["repeat"] = "Repeat";
	$fieldToolTipscustom_personal_agenda["Indonesian"]["repeat"] = "";
	$placeHolderscustom_personal_agenda["Indonesian"]["repeat"] = "";
	$fieldLabelscustom_personal_agenda["Indonesian"]["repeat_type"] = "Repeat Type";
	$fieldToolTipscustom_personal_agenda["Indonesian"]["repeat_type"] = "";
	$placeHolderscustom_personal_agenda["Indonesian"]["repeat_type"] = "";
	if (count($fieldToolTipscustom_personal_agenda["Indonesian"]))
		$tdatacustom_personal_agenda[".isUseToolTips"] = true;
}


	$tdatacustom_personal_agenda[".NCSearch"] = true;



$tdatacustom_personal_agenda[".shortTableName"] = "custom_personal_agenda";
$tdatacustom_personal_agenda[".nSecOptions"] = 0;

$tdatacustom_personal_agenda[".mainTableOwnerID"] = "";
$tdatacustom_personal_agenda[".entityType"] = 6;
$tdatacustom_personal_agenda[".connId"] = "notif_basic1_at_localhost";


$tdatacustom_personal_agenda[".strOriginalTableName"] = "custom_personal_agenda";

	



$tdatacustom_personal_agenda[".showAddInPopup"] = false;

$tdatacustom_personal_agenda[".showEditInPopup"] = false;

$tdatacustom_personal_agenda[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustom_personal_agenda[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustom_personal_agenda[".listAjax"] = false;
//	temporary
$tdatacustom_personal_agenda[".listAjax"] = false;

	$tdatacustom_personal_agenda[".audit"] = false;

	$tdatacustom_personal_agenda[".locking"] = false;


$pages = $tdatacustom_personal_agenda[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustom_personal_agenda[".edit"] = true;
	$tdatacustom_personal_agenda[".afterEditAction"] = 1;
	$tdatacustom_personal_agenda[".closePopupAfterEdit"] = 1;
	$tdatacustom_personal_agenda[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustom_personal_agenda[".add"] = true;
$tdatacustom_personal_agenda[".afterAddAction"] = 1;
$tdatacustom_personal_agenda[".closePopupAfterAdd"] = 1;
$tdatacustom_personal_agenda[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustom_personal_agenda[".list"] = true;
}



$tdatacustom_personal_agenda[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustom_personal_agenda[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustom_personal_agenda[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustom_personal_agenda[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustom_personal_agenda[".printFriendly"] = true;
}



$tdatacustom_personal_agenda[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustom_personal_agenda[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustom_personal_agenda[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustom_personal_agenda[".isUseAjaxSuggest"] = true;

$tdatacustom_personal_agenda[".rowHighlite"] = true;





$tdatacustom_personal_agenda[".ajaxCodeSnippetAdded"] = false;

$tdatacustom_personal_agenda[".buttonsAdded"] = false;

$tdatacustom_personal_agenda[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustom_personal_agenda[".isUseTimeForSearch"] = false;


$tdatacustom_personal_agenda[".badgeColor"] = "9ACD32";


$tdatacustom_personal_agenda[".allSearchFields"] = array();
$tdatacustom_personal_agenda[".filterFields"] = array();
$tdatacustom_personal_agenda[".requiredSearchFields"] = array();

$tdatacustom_personal_agenda[".googleLikeFields"] = array();
$tdatacustom_personal_agenda[".googleLikeFields"][] = "member_agenda_id";
$tdatacustom_personal_agenda[".googleLikeFields"][] = "member_id";
$tdatacustom_personal_agenda[".googleLikeFields"][] = "loop_type";
$tdatacustom_personal_agenda[".googleLikeFields"][] = "loop_value";
$tdatacustom_personal_agenda[".googleLikeFields"][] = "message_content";
$tdatacustom_personal_agenda[".googleLikeFields"][] = "attachment";
$tdatacustom_personal_agenda[".googleLikeFields"][] = "repeat";
$tdatacustom_personal_agenda[".googleLikeFields"][] = "repeat_type";




$tdatacustom_personal_agenda[".printerPageOrientation"] = 0;
$tdatacustom_personal_agenda[".nPrinterPageScale"] = 100;

$tdatacustom_personal_agenda[".nPrinterSplitRecords"] = 40;

$tdatacustom_personal_agenda[".geocodingEnabled"] = false;










$tdatacustom_personal_agenda[".pageSize"] = 20;

$tdatacustom_personal_agenda[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustom_personal_agenda[".strOrderBy"] = $tstrOrderBy;

$tdatacustom_personal_agenda[".orderindexes"] = array();


$tdatacustom_personal_agenda[".sqlHead"] = "";
$tdatacustom_personal_agenda[".sqlFrom"] = "";
$tdatacustom_personal_agenda[".sqlWhereExpr"] = "";
$tdatacustom_personal_agenda[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustom_personal_agenda[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustom_personal_agenda[".arrGroupsPerPage"] = $arrGPP;

$tdatacustom_personal_agenda[".highlightSearchResults"] = true;

$tableKeyscustom_personal_agenda = array();
$tdatacustom_personal_agenda[".Keys"] = $tableKeyscustom_personal_agenda;


$tdatacustom_personal_agenda[".hideMobileList"] = array();




//	member_agenda_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "member_agenda_id";
	$fdata["GoodName"] = "member_agenda_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal_agenda","member_agenda_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "member_agenda_id";

	
		$fdata["FullName"] = "member_agenda_id";

	
	
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


	$tdatacustom_personal_agenda["member_agenda_id"] = $fdata;
		$tdatacustom_personal_agenda[".searchableFields"][] = "member_agenda_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal_agenda","member_id");
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


	$tdatacustom_personal_agenda["member_id"] = $fdata;
		$tdatacustom_personal_agenda[".searchableFields"][] = "member_id";
//	loop_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "loop_type";
	$fdata["GoodName"] = "loop_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal_agenda","loop_type");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "loop_type";

	
		$fdata["FullName"] = "loop_type";

	
	
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


	$tdatacustom_personal_agenda["loop_type"] = $fdata;
		$tdatacustom_personal_agenda[".searchableFields"][] = "loop_type";
//	loop_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "loop_value";
	$fdata["GoodName"] = "loop_value";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal_agenda","loop_value");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "loop_value";

	
		$fdata["FullName"] = "loop_value";

	
	
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


	$tdatacustom_personal_agenda["loop_value"] = $fdata;
		$tdatacustom_personal_agenda[".searchableFields"][] = "loop_value";
//	message_content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "message_content";
	$fdata["GoodName"] = "message_content";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal_agenda","message_content");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "message_content";

	
		$fdata["FullName"] = "message_content";

	
	
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


	$tdatacustom_personal_agenda["message_content"] = $fdata;
		$tdatacustom_personal_agenda[".searchableFields"][] = "message_content";
//	attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "attachment";
	$fdata["GoodName"] = "attachment";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal_agenda","attachment");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "attachment";

	
		$fdata["FullName"] = "attachment";

	
	
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


	$tdatacustom_personal_agenda["attachment"] = $fdata;
		$tdatacustom_personal_agenda[".searchableFields"][] = "attachment";
//	repeat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "repeat";
	$fdata["GoodName"] = "repeat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal_agenda","repeat");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "repeat";

	
		$fdata["FullName"] = "repeat";

	
	
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


	$tdatacustom_personal_agenda["repeat"] = $fdata;
		$tdatacustom_personal_agenda[".searchableFields"][] = "repeat";
//	repeat_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "repeat_type";
	$fdata["GoodName"] = "repeat_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_personal_agenda","repeat_type");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "repeat_type";

	
		$fdata["FullName"] = "repeat_type";

	
	
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


	$tdatacustom_personal_agenda["repeat_type"] = $fdata;
		$tdatacustom_personal_agenda[".searchableFields"][] = "repeat_type";


$tables_data["custom_personal_agenda"]=&$tdatacustom_personal_agenda;
$field_labels["custom_personal_agenda"] = &$fieldLabelscustom_personal_agenda;
$fieldToolTips["custom_personal_agenda"] = &$fieldToolTipscustom_personal_agenda;
$placeHolders["custom_personal_agenda"] = &$placeHolderscustom_personal_agenda;
$page_titles["custom_personal_agenda"] = &$pageTitlescustom_personal_agenda;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["custom_personal_agenda"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["custom_personal_agenda"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/custom_personal_agenda_ops.php" ) );



	
		;

								

$tdatacustom_personal_agenda[".sqlquery"] = $queryData_custom_personal_agenda;



include_once(getabspath("include/custom_personal_agenda_events.php"));
$tableEvents["custom_personal_agenda"] = new eventclass_custom_personal_agenda;
$tdatacustom_personal_agenda[".hasEvents"] = true;

?>