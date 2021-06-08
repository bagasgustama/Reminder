<?php
$tdatacustom_group_agenda = array();
$tdatacustom_group_agenda[".searchableFields"] = array();
$tdatacustom_group_agenda[".ShortName"] = "custom_group_agenda";
$tdatacustom_group_agenda[".OwnerID"] = "";
$tdatacustom_group_agenda[".OriginalTable"] = "custom_group_agenda";


$tdatacustom_group_agenda[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacustom_group_agenda[".originalPagesByType"] = $tdatacustom_group_agenda[".pagesByType"];
$tdatacustom_group_agenda[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacustom_group_agenda[".originalPages"] = $tdatacustom_group_agenda[".pages"];
$tdatacustom_group_agenda[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacustom_group_agenda[".originalDefaultPages"] = $tdatacustom_group_agenda[".defaultPages"];

//	field labels
$fieldLabelscustom_group_agenda = array();
$fieldToolTipscustom_group_agenda = array();
$pageTitlescustom_group_agenda = array();
$placeHolderscustom_group_agenda = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustom_group_agenda["English"] = array();
	$fieldToolTipscustom_group_agenda["English"] = array();
	$placeHolderscustom_group_agenda["English"] = array();
	$pageTitlescustom_group_agenda["English"] = array();
	$fieldLabelscustom_group_agenda["English"]["group_agenda_id"] = "Group Agenda Id";
	$fieldToolTipscustom_group_agenda["English"]["group_agenda_id"] = "";
	$placeHolderscustom_group_agenda["English"]["group_agenda_id"] = "";
	$fieldLabelscustom_group_agenda["English"]["group_id"] = "Group Id";
	$fieldToolTipscustom_group_agenda["English"]["group_id"] = "";
	$placeHolderscustom_group_agenda["English"]["group_id"] = "";
	$fieldLabelscustom_group_agenda["English"]["loop_id"] = "Loop Id";
	$fieldToolTipscustom_group_agenda["English"]["loop_id"] = "";
	$placeHolderscustom_group_agenda["English"]["loop_id"] = "";
	$fieldLabelscustom_group_agenda["English"]["loop_value"] = "Loop Value";
	$fieldToolTipscustom_group_agenda["English"]["loop_value"] = "";
	$placeHolderscustom_group_agenda["English"]["loop_value"] = "";
	$fieldLabelscustom_group_agenda["English"]["agenda_name"] = "Agenda Name";
	$fieldToolTipscustom_group_agenda["English"]["agenda_name"] = "";
	$placeHolderscustom_group_agenda["English"]["agenda_name"] = "";
	$fieldLabelscustom_group_agenda["English"]["message_general"] = "Message General";
	$fieldToolTipscustom_group_agenda["English"]["message_general"] = "";
	$placeHolderscustom_group_agenda["English"]["message_general"] = "";
	$fieldLabelscustom_group_agenda["English"]["message_content"] = "Message Content";
	$fieldToolTipscustom_group_agenda["English"]["message_content"] = "";
	$placeHolderscustom_group_agenda["English"]["message_content"] = "";
	$fieldLabelscustom_group_agenda["English"]["send_date"] = "Send Date";
	$fieldToolTipscustom_group_agenda["English"]["send_date"] = "";
	$placeHolderscustom_group_agenda["English"]["send_date"] = "";
	$fieldLabelscustom_group_agenda["English"]["attachment"] = "Attachment";
	$fieldToolTipscustom_group_agenda["English"]["attachment"] = "";
	$placeHolderscustom_group_agenda["English"]["attachment"] = "";
	$fieldLabelscustom_group_agenda["English"]["repeat"] = "Repeat";
	$fieldToolTipscustom_group_agenda["English"]["repeat"] = "";
	$placeHolderscustom_group_agenda["English"]["repeat"] = "";
	$fieldLabelscustom_group_agenda["English"]["repeat_type"] = "Repeat Type";
	$fieldToolTipscustom_group_agenda["English"]["repeat_type"] = "";
	$placeHolderscustom_group_agenda["English"]["repeat_type"] = "";
	if (count($fieldToolTipscustom_group_agenda["English"]))
		$tdatacustom_group_agenda[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelscustom_group_agenda["Indonesian"] = array();
	$fieldToolTipscustom_group_agenda["Indonesian"] = array();
	$placeHolderscustom_group_agenda["Indonesian"] = array();
	$pageTitlescustom_group_agenda["Indonesian"] = array();
	$fieldLabelscustom_group_agenda["Indonesian"]["group_agenda_id"] = "Group Agenda Id";
	$fieldToolTipscustom_group_agenda["Indonesian"]["group_agenda_id"] = "";
	$placeHolderscustom_group_agenda["Indonesian"]["group_agenda_id"] = "";
	$fieldLabelscustom_group_agenda["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipscustom_group_agenda["Indonesian"]["group_id"] = "";
	$placeHolderscustom_group_agenda["Indonesian"]["group_id"] = "";
	$fieldLabelscustom_group_agenda["Indonesian"]["loop_id"] = "Loop Id";
	$fieldToolTipscustom_group_agenda["Indonesian"]["loop_id"] = "";
	$placeHolderscustom_group_agenda["Indonesian"]["loop_id"] = "";
	$fieldLabelscustom_group_agenda["Indonesian"]["loop_value"] = "Loop Value";
	$fieldToolTipscustom_group_agenda["Indonesian"]["loop_value"] = "";
	$placeHolderscustom_group_agenda["Indonesian"]["loop_value"] = "";
	$fieldLabelscustom_group_agenda["Indonesian"]["agenda_name"] = "Agenda Name";
	$fieldToolTipscustom_group_agenda["Indonesian"]["agenda_name"] = "";
	$placeHolderscustom_group_agenda["Indonesian"]["agenda_name"] = "";
	$fieldLabelscustom_group_agenda["Indonesian"]["message_general"] = "Message General";
	$fieldToolTipscustom_group_agenda["Indonesian"]["message_general"] = "";
	$placeHolderscustom_group_agenda["Indonesian"]["message_general"] = "";
	$fieldLabelscustom_group_agenda["Indonesian"]["message_content"] = "Message Content";
	$fieldToolTipscustom_group_agenda["Indonesian"]["message_content"] = "";
	$placeHolderscustom_group_agenda["Indonesian"]["message_content"] = "";
	$fieldLabelscustom_group_agenda["Indonesian"]["send_date"] = "Send Date";
	$fieldToolTipscustom_group_agenda["Indonesian"]["send_date"] = "";
	$placeHolderscustom_group_agenda["Indonesian"]["send_date"] = "";
	$fieldLabelscustom_group_agenda["Indonesian"]["attachment"] = "Attachment";
	$fieldToolTipscustom_group_agenda["Indonesian"]["attachment"] = "";
	$placeHolderscustom_group_agenda["Indonesian"]["attachment"] = "";
	$fieldLabelscustom_group_agenda["Indonesian"]["repeat"] = "Repeat";
	$fieldToolTipscustom_group_agenda["Indonesian"]["repeat"] = "";
	$placeHolderscustom_group_agenda["Indonesian"]["repeat"] = "";
	$fieldLabelscustom_group_agenda["Indonesian"]["repeat_type"] = "Repeat Type";
	$fieldToolTipscustom_group_agenda["Indonesian"]["repeat_type"] = "";
	$placeHolderscustom_group_agenda["Indonesian"]["repeat_type"] = "";
	if (count($fieldToolTipscustom_group_agenda["Indonesian"]))
		$tdatacustom_group_agenda[".isUseToolTips"] = true;
}


	$tdatacustom_group_agenda[".NCSearch"] = true;



$tdatacustom_group_agenda[".shortTableName"] = "custom_group_agenda";
$tdatacustom_group_agenda[".nSecOptions"] = 0;

$tdatacustom_group_agenda[".mainTableOwnerID"] = "";
$tdatacustom_group_agenda[".entityType"] = 6;
$tdatacustom_group_agenda[".connId"] = "notif_basic1_at_localhost";


$tdatacustom_group_agenda[".strOriginalTableName"] = "custom_group_agenda";

	



$tdatacustom_group_agenda[".showAddInPopup"] = false;

$tdatacustom_group_agenda[".showEditInPopup"] = false;

$tdatacustom_group_agenda[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustom_group_agenda[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustom_group_agenda[".listAjax"] = false;
//	temporary
$tdatacustom_group_agenda[".listAjax"] = false;

	$tdatacustom_group_agenda[".audit"] = false;

	$tdatacustom_group_agenda[".locking"] = false;


$pages = $tdatacustom_group_agenda[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustom_group_agenda[".edit"] = true;
	$tdatacustom_group_agenda[".afterEditAction"] = 1;
	$tdatacustom_group_agenda[".closePopupAfterEdit"] = 1;
	$tdatacustom_group_agenda[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustom_group_agenda[".add"] = true;
$tdatacustom_group_agenda[".afterAddAction"] = 1;
$tdatacustom_group_agenda[".closePopupAfterAdd"] = 1;
$tdatacustom_group_agenda[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustom_group_agenda[".list"] = true;
}



$tdatacustom_group_agenda[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustom_group_agenda[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustom_group_agenda[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustom_group_agenda[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustom_group_agenda[".printFriendly"] = true;
}



$tdatacustom_group_agenda[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustom_group_agenda[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustom_group_agenda[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustom_group_agenda[".isUseAjaxSuggest"] = true;

$tdatacustom_group_agenda[".rowHighlite"] = true;





$tdatacustom_group_agenda[".ajaxCodeSnippetAdded"] = false;

$tdatacustom_group_agenda[".buttonsAdded"] = false;

$tdatacustom_group_agenda[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustom_group_agenda[".isUseTimeForSearch"] = false;


$tdatacustom_group_agenda[".badgeColor"] = "4169E1";


$tdatacustom_group_agenda[".allSearchFields"] = array();
$tdatacustom_group_agenda[".filterFields"] = array();
$tdatacustom_group_agenda[".requiredSearchFields"] = array();

$tdatacustom_group_agenda[".googleLikeFields"] = array();
$tdatacustom_group_agenda[".googleLikeFields"][] = "group_agenda_id";
$tdatacustom_group_agenda[".googleLikeFields"][] = "group_id";
$tdatacustom_group_agenda[".googleLikeFields"][] = "loop_id";
$tdatacustom_group_agenda[".googleLikeFields"][] = "loop_value";
$tdatacustom_group_agenda[".googleLikeFields"][] = "agenda_name";
$tdatacustom_group_agenda[".googleLikeFields"][] = "message_general";
$tdatacustom_group_agenda[".googleLikeFields"][] = "message_content";
$tdatacustom_group_agenda[".googleLikeFields"][] = "send_date";
$tdatacustom_group_agenda[".googleLikeFields"][] = "attachment";
$tdatacustom_group_agenda[".googleLikeFields"][] = "repeat";
$tdatacustom_group_agenda[".googleLikeFields"][] = "repeat_type";




$tdatacustom_group_agenda[".printerPageOrientation"] = 0;
$tdatacustom_group_agenda[".nPrinterPageScale"] = 100;

$tdatacustom_group_agenda[".nPrinterSplitRecords"] = 40;

$tdatacustom_group_agenda[".geocodingEnabled"] = false;










$tdatacustom_group_agenda[".pageSize"] = 20;

$tdatacustom_group_agenda[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustom_group_agenda[".strOrderBy"] = $tstrOrderBy;

$tdatacustom_group_agenda[".orderindexes"] = array();


$tdatacustom_group_agenda[".sqlHead"] = "";
$tdatacustom_group_agenda[".sqlFrom"] = "";
$tdatacustom_group_agenda[".sqlWhereExpr"] = "";
$tdatacustom_group_agenda[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustom_group_agenda[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustom_group_agenda[".arrGroupsPerPage"] = $arrGPP;

$tdatacustom_group_agenda[".highlightSearchResults"] = true;

$tableKeyscustom_group_agenda = array();
$tableKeyscustom_group_agenda[] = "group_agenda_id";
$tdatacustom_group_agenda[".Keys"] = $tableKeyscustom_group_agenda;


$tdatacustom_group_agenda[".hideMobileList"] = array();




//	group_agenda_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_agenda_id";
	$fdata["GoodName"] = "group_agenda_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_agenda","group_agenda_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_agenda_id";

	
		$fdata["FullName"] = "group_agenda_id";

	
	
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


	$tdatacustom_group_agenda["group_agenda_id"] = $fdata;
		$tdatacustom_group_agenda[".searchableFields"][] = "group_agenda_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_agenda","group_id");
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


	$tdatacustom_group_agenda["group_id"] = $fdata;
		$tdatacustom_group_agenda[".searchableFields"][] = "group_id";
//	loop_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "loop_id";
	$fdata["GoodName"] = "loop_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_agenda","loop_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "loop_id";

	
		$fdata["FullName"] = "loop_id";

	
	
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


	$tdatacustom_group_agenda["loop_id"] = $fdata;
		$tdatacustom_group_agenda[".searchableFields"][] = "loop_id";
//	loop_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "loop_value";
	$fdata["GoodName"] = "loop_value";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_agenda","loop_value");
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


	$tdatacustom_group_agenda["loop_value"] = $fdata;
		$tdatacustom_group_agenda[".searchableFields"][] = "loop_value";
//	agenda_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "agenda_name";
	$fdata["GoodName"] = "agenda_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_agenda","agenda_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agenda_name";

	
		$fdata["FullName"] = "agenda_name";

	
	
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


	$tdatacustom_group_agenda["agenda_name"] = $fdata;
		$tdatacustom_group_agenda[".searchableFields"][] = "agenda_name";
//	message_general
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "message_general";
	$fdata["GoodName"] = "message_general";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_agenda","message_general");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "message_general";

	
		$fdata["FullName"] = "message_general";

	
	
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


	$tdatacustom_group_agenda["message_general"] = $fdata;
		$tdatacustom_group_agenda[".searchableFields"][] = "message_general";
//	message_content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "message_content";
	$fdata["GoodName"] = "message_content";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_agenda","message_content");
	$fdata["FieldType"] = 201;

	
	
	
			

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


	$tdatacustom_group_agenda["message_content"] = $fdata;
		$tdatacustom_group_agenda[".searchableFields"][] = "message_content";
//	send_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "send_date";
	$fdata["GoodName"] = "send_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_agenda","send_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "send_date";

	
		$fdata["FullName"] = "send_date";

	
	
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


	$tdatacustom_group_agenda["send_date"] = $fdata;
		$tdatacustom_group_agenda[".searchableFields"][] = "send_date";
//	attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "attachment";
	$fdata["GoodName"] = "attachment";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_agenda","attachment");
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


	$tdatacustom_group_agenda["attachment"] = $fdata;
		$tdatacustom_group_agenda[".searchableFields"][] = "attachment";
//	repeat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "repeat";
	$fdata["GoodName"] = "repeat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_agenda","repeat");
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


	$tdatacustom_group_agenda["repeat"] = $fdata;
		$tdatacustom_group_agenda[".searchableFields"][] = "repeat";
//	repeat_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "repeat_type";
	$fdata["GoodName"] = "repeat_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_agenda","repeat_type");
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


	$tdatacustom_group_agenda["repeat_type"] = $fdata;
		$tdatacustom_group_agenda[".searchableFields"][] = "repeat_type";


$tables_data["custom_group_agenda"]=&$tdatacustom_group_agenda;
$field_labels["custom_group_agenda"] = &$fieldLabelscustom_group_agenda;
$fieldToolTips["custom_group_agenda"] = &$fieldToolTipscustom_group_agenda;
$placeHolders["custom_group_agenda"] = &$placeHolderscustom_group_agenda;
$page_titles["custom_group_agenda"] = &$pageTitlescustom_group_agenda;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["custom_group_agenda"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["custom_group_agenda"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/custom_group_agenda_ops.php" ) );



	
		;

											

$tdatacustom_group_agenda[".sqlquery"] = $queryData_custom_group_agenda;



include_once(getabspath("include/custom_group_agenda_events.php"));
$tableEvents["custom_group_agenda"] = new eventclass_custom_group_agenda;
$tdatacustom_group_agenda[".hasEvents"] = true;

?>