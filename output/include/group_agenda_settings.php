<?php
$tdatagroup_agenda = array();
$tdatagroup_agenda[".searchableFields"] = array();
$tdatagroup_agenda[".ShortName"] = "group_agenda";
$tdatagroup_agenda[".OwnerID"] = "";
$tdatagroup_agenda[".OriginalTable"] = "group_agenda";


$tdatagroup_agenda[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagroup_agenda[".originalPagesByType"] = $tdatagroup_agenda[".pagesByType"];
$tdatagroup_agenda[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagroup_agenda[".originalPages"] = $tdatagroup_agenda[".pages"];
$tdatagroup_agenda[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagroup_agenda[".originalDefaultPages"] = $tdatagroup_agenda[".defaultPages"];

//	field labels
$fieldLabelsgroup_agenda = array();
$fieldToolTipsgroup_agenda = array();
$pageTitlesgroup_agenda = array();
$placeHoldersgroup_agenda = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_agenda["English"] = array();
	$fieldToolTipsgroup_agenda["English"] = array();
	$placeHoldersgroup_agenda["English"] = array();
	$pageTitlesgroup_agenda["English"] = array();
	$fieldLabelsgroup_agenda["English"]["group_agenda_id"] = "Group Agenda Id";
	$fieldToolTipsgroup_agenda["English"]["group_agenda_id"] = "";
	$placeHoldersgroup_agenda["English"]["group_agenda_id"] = "";
	$fieldLabelsgroup_agenda["English"]["group_id"] = "Group Id";
	$fieldToolTipsgroup_agenda["English"]["group_id"] = "";
	$placeHoldersgroup_agenda["English"]["group_id"] = "";
	$fieldLabelsgroup_agenda["English"]["agenda_type_id"] = "Agenda Type Id";
	$fieldToolTipsgroup_agenda["English"]["agenda_type_id"] = "";
	$placeHoldersgroup_agenda["English"]["agenda_type_id"] = "";
	$fieldLabelsgroup_agenda["English"]["loop_id"] = "Loop Id";
	$fieldToolTipsgroup_agenda["English"]["loop_id"] = "";
	$placeHoldersgroup_agenda["English"]["loop_id"] = "";
	$fieldLabelsgroup_agenda["English"]["loop_value"] = "Loop Value";
	$fieldToolTipsgroup_agenda["English"]["loop_value"] = "";
	$placeHoldersgroup_agenda["English"]["loop_value"] = "";
	$fieldLabelsgroup_agenda["English"]["agenda_name"] = "Agenda Name";
	$fieldToolTipsgroup_agenda["English"]["agenda_name"] = "";
	$placeHoldersgroup_agenda["English"]["agenda_name"] = "";
	$fieldLabelsgroup_agenda["English"]["message_general"] = "Message General";
	$fieldToolTipsgroup_agenda["English"]["message_general"] = "";
	$placeHoldersgroup_agenda["English"]["message_general"] = "";
	$fieldLabelsgroup_agenda["English"]["message_content"] = "Message Content";
	$fieldToolTipsgroup_agenda["English"]["message_content"] = "";
	$placeHoldersgroup_agenda["English"]["message_content"] = "";
	$fieldLabelsgroup_agenda["English"]["send_date"] = "Send Date";
	$fieldToolTipsgroup_agenda["English"]["send_date"] = "";
	$placeHoldersgroup_agenda["English"]["send_date"] = "";
	$fieldLabelsgroup_agenda["English"]["attachment"] = "Attachment";
	$fieldToolTipsgroup_agenda["English"]["attachment"] = "";
	$placeHoldersgroup_agenda["English"]["attachment"] = "";
	$fieldLabelsgroup_agenda["English"]["repeat"] = "Repeat";
	$fieldToolTipsgroup_agenda["English"]["repeat"] = "";
	$placeHoldersgroup_agenda["English"]["repeat"] = "";
	$fieldLabelsgroup_agenda["English"]["repeat_type"] = "Repeat Type";
	$fieldToolTipsgroup_agenda["English"]["repeat_type"] = "";
	$placeHoldersgroup_agenda["English"]["repeat_type"] = "";
	if (count($fieldToolTipsgroup_agenda["English"]))
		$tdatagroup_agenda[".isUseToolTips"] = true;
}


	$tdatagroup_agenda[".NCSearch"] = true;



$tdatagroup_agenda[".shortTableName"] = "group_agenda";
$tdatagroup_agenda[".nSecOptions"] = 0;

$tdatagroup_agenda[".mainTableOwnerID"] = "";
$tdatagroup_agenda[".entityType"] = 0;
$tdatagroup_agenda[".connId"] = "notif_basic1_at_localhost";


$tdatagroup_agenda[".strOriginalTableName"] = "group_agenda";

	



$tdatagroup_agenda[".showAddInPopup"] = false;

$tdatagroup_agenda[".showEditInPopup"] = false;

$tdatagroup_agenda[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_agenda[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_agenda[".listAjax"] = false;
//	temporary
$tdatagroup_agenda[".listAjax"] = false;

	$tdatagroup_agenda[".audit"] = false;

	$tdatagroup_agenda[".locking"] = false;


$pages = $tdatagroup_agenda[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_agenda[".edit"] = true;
	$tdatagroup_agenda[".afterEditAction"] = 1;
	$tdatagroup_agenda[".closePopupAfterEdit"] = 1;
	$tdatagroup_agenda[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_agenda[".add"] = true;
$tdatagroup_agenda[".afterAddAction"] = 1;
$tdatagroup_agenda[".closePopupAfterAdd"] = 1;
$tdatagroup_agenda[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_agenda[".list"] = true;
}



$tdatagroup_agenda[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup_agenda[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_agenda[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_agenda[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_agenda[".printFriendly"] = true;
}



$tdatagroup_agenda[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_agenda[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_agenda[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_agenda[".isUseAjaxSuggest"] = true;

$tdatagroup_agenda[".rowHighlite"] = true;





$tdatagroup_agenda[".ajaxCodeSnippetAdded"] = false;

$tdatagroup_agenda[".buttonsAdded"] = false;

$tdatagroup_agenda[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup_agenda[".isUseTimeForSearch"] = false;


$tdatagroup_agenda[".badgeColor"] = "5F9EA0";


$tdatagroup_agenda[".allSearchFields"] = array();
$tdatagroup_agenda[".filterFields"] = array();
$tdatagroup_agenda[".requiredSearchFields"] = array();

$tdatagroup_agenda[".googleLikeFields"] = array();
$tdatagroup_agenda[".googleLikeFields"][] = "group_agenda_id";
$tdatagroup_agenda[".googleLikeFields"][] = "group_id";
$tdatagroup_agenda[".googleLikeFields"][] = "agenda_type_id";
$tdatagroup_agenda[".googleLikeFields"][] = "loop_id";
$tdatagroup_agenda[".googleLikeFields"][] = "loop_value";
$tdatagroup_agenda[".googleLikeFields"][] = "agenda_name";
$tdatagroup_agenda[".googleLikeFields"][] = "message_general";
$tdatagroup_agenda[".googleLikeFields"][] = "message_content";
$tdatagroup_agenda[".googleLikeFields"][] = "send_date";
$tdatagroup_agenda[".googleLikeFields"][] = "attachment";
$tdatagroup_agenda[".googleLikeFields"][] = "repeat";
$tdatagroup_agenda[".googleLikeFields"][] = "repeat_type";



$tdatagroup_agenda[".tableType"] = "list";

$tdatagroup_agenda[".printerPageOrientation"] = 0;
$tdatagroup_agenda[".nPrinterPageScale"] = 100;

$tdatagroup_agenda[".nPrinterSplitRecords"] = 40;

$tdatagroup_agenda[".geocodingEnabled"] = false;










$tdatagroup_agenda[".pageSize"] = 20;

$tdatagroup_agenda[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_agenda[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_agenda[".orderindexes"] = array();


$tdatagroup_agenda[".sqlHead"] = "SELECT group_agenda_id,  	group_id,  	agenda_type_id,  	loop_id,  	loop_value,  	agenda_name,  	message_general,  	message_content,  	send_date,  	attachment,  	`repeat`,  	repeat_type";
$tdatagroup_agenda[".sqlFrom"] = "FROM group_agenda";
$tdatagroup_agenda[".sqlWhereExpr"] = "";
$tdatagroup_agenda[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_agenda[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_agenda[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_agenda[".highlightSearchResults"] = true;

$tableKeysgroup_agenda = array();
$tableKeysgroup_agenda[] = "group_agenda_id";
$tdatagroup_agenda[".Keys"] = $tableKeysgroup_agenda;


$tdatagroup_agenda[".hideMobileList"] = array();




//	group_agenda_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_agenda_id";
	$fdata["GoodName"] = "group_agenda_id";
	$fdata["ownerTable"] = "group_agenda";
	$fdata["Label"] = GetFieldLabel("group_agenda","group_agenda_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_agenda_id";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_agenda["group_agenda_id"] = $fdata;
		$tdatagroup_agenda[".searchableFields"][] = "group_agenda_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_agenda";
	$fdata["Label"] = GetFieldLabel("group_agenda","group_id");
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


	$tdatagroup_agenda["group_id"] = $fdata;
		$tdatagroup_agenda[".searchableFields"][] = "group_id";
//	agenda_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "agenda_type_id";
	$fdata["GoodName"] = "agenda_type_id";
	$fdata["ownerTable"] = "group_agenda";
	$fdata["Label"] = GetFieldLabel("group_agenda","agenda_type_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "agenda_type_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agenda_type_id";

	
	
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
	$edata["LookupTable"] = "group_agenda_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "agenda_type_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "agenda_type";

	

	
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


	$tdatagroup_agenda["agenda_type_id"] = $fdata;
		$tdatagroup_agenda[".searchableFields"][] = "agenda_type_id";
//	loop_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "loop_id";
	$fdata["GoodName"] = "loop_id";
	$fdata["ownerTable"] = "group_agenda";
	$fdata["Label"] = GetFieldLabel("group_agenda","loop_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "loop_id";

	
		$fdata["isSQLExpression"] = true;
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "loop_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_loop";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "loop_type";

	

	
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


	$tdatagroup_agenda["loop_id"] = $fdata;
		$tdatagroup_agenda[".searchableFields"][] = "loop_id";
//	loop_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "loop_value";
	$fdata["GoodName"] = "loop_value";
	$fdata["ownerTable"] = "group_agenda";
	$fdata["Label"] = GetFieldLabel("group_agenda","loop_value");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "loop_value";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_agenda["loop_value"] = $fdata;
		$tdatagroup_agenda[".searchableFields"][] = "loop_value";
//	agenda_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "agenda_name";
	$fdata["GoodName"] = "agenda_name";
	$fdata["ownerTable"] = "group_agenda";
	$fdata["Label"] = GetFieldLabel("group_agenda","agenda_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agenda_name";

	
		$fdata["isSQLExpression"] = true;
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
			$edata["EditParams"].= " maxlength=225";

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


	$tdatagroup_agenda["agenda_name"] = $fdata;
		$tdatagroup_agenda[".searchableFields"][] = "agenda_name";
//	message_general
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "message_general";
	$fdata["GoodName"] = "message_general";
	$fdata["ownerTable"] = "group_agenda";
	$fdata["Label"] = GetFieldLabel("group_agenda","message_general");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "message_general";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_agenda["message_general"] = $fdata;
		$tdatagroup_agenda[".searchableFields"][] = "message_general";
//	message_content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "message_content";
	$fdata["GoodName"] = "message_content";
	$fdata["ownerTable"] = "group_agenda";
	$fdata["Label"] = GetFieldLabel("group_agenda","message_content");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "message_content";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_agenda["message_content"] = $fdata;
		$tdatagroup_agenda[".searchableFields"][] = "message_content";
//	send_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "send_date";
	$fdata["GoodName"] = "send_date";
	$fdata["ownerTable"] = "group_agenda";
	$fdata["Label"] = GetFieldLabel("group_agenda","send_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "send_date";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_agenda["send_date"] = $fdata;
		$tdatagroup_agenda[".searchableFields"][] = "send_date";
//	attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "attachment";
	$fdata["GoodName"] = "attachment";
	$fdata["ownerTable"] = "group_agenda";
	$fdata["Label"] = GetFieldLabel("group_agenda","attachment");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "attachment";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_agenda["attachment"] = $fdata;
		$tdatagroup_agenda[".searchableFields"][] = "attachment";
//	repeat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "repeat";
	$fdata["GoodName"] = "repeat";
	$fdata["ownerTable"] = "group_agenda";
	$fdata["Label"] = GetFieldLabel("group_agenda","repeat");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "repeat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`repeat`";

	
	
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


	$tdatagroup_agenda["repeat"] = $fdata;
		$tdatagroup_agenda[".searchableFields"][] = "repeat";
//	repeat_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "repeat_type";
	$fdata["GoodName"] = "repeat_type";
	$fdata["ownerTable"] = "group_agenda";
	$fdata["Label"] = GetFieldLabel("group_agenda","repeat_type");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "repeat_type";

	
		$fdata["isSQLExpression"] = true;
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "daily";
	$edata["LookupValues"][] = "weekly";
	$edata["LookupValues"][] = "monthly";
	$edata["LookupValues"][] = "yearly";
	$edata["LookupValues"][] = "bydate";

	
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


	$tdatagroup_agenda["repeat_type"] = $fdata;
		$tdatagroup_agenda[".searchableFields"][] = "repeat_type";


$tables_data["group_agenda"]=&$tdatagroup_agenda;
$field_labels["group_agenda"] = &$fieldLabelsgroup_agenda;
$fieldToolTips["group_agenda"] = &$fieldToolTipsgroup_agenda;
$placeHolders["group_agenda"] = &$placeHoldersgroup_agenda;
$page_titles["group_agenda"] = &$pageTitlesgroup_agenda;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_agenda"] = array();
//	group_agenda_general_logs
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_agenda_general_logs";
		$detailsParam["dOriginalTable"] = "group_agenda_general_logs";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_agenda_general_logs";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_agenda_general_logs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group_agenda"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_agenda"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_agenda"][$dIndex]["masterKeys"][]="group_agenda_id";

				$detailsTablesData["group_agenda"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_agenda"][$dIndex]["detailKeys"][]="id_group_agenda";
//	group_agenda_private
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_agenda_private";
		$detailsParam["dOriginalTable"] = "group_agenda_private";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_agenda_private";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_agenda_private");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group_agenda"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_agenda"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_agenda"][$dIndex]["masterKeys"][]="group_agenda_id";

				$detailsTablesData["group_agenda"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_agenda"][$dIndex]["detailKeys"][]="id_group_agenda";
//	group_member_agenda
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_agenda";
		$detailsParam["dOriginalTable"] = "group_member_agenda";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_agenda";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_agenda");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group_agenda"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_agenda"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_agenda"][$dIndex]["masterKeys"][]="group_agenda_id";

				$detailsTablesData["group_agenda"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_agenda"][$dIndex]["detailKeys"][]="group_agenda_id";
//	group_member_agenda_subscriber
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_agenda_subscriber";
		$detailsParam["dOriginalTable"] = "group_member_agenda_subscriber";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_agenda_subscriber";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_agenda_subscriber");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group_agenda"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_agenda"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_agenda"][$dIndex]["masterKeys"][]="group_agenda_id";

				$detailsTablesData["group_agenda"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_agenda"][$dIndex]["detailKeys"][]="agenda_type_id";
//	group_agenda_repeat_date
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_agenda_repeat_date";
		$detailsParam["dOriginalTable"] = "group_agenda_repeat_date";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_agenda_repeat_date";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_agenda_repeat_date");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group_agenda"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_agenda"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_agenda"][$dIndex]["masterKeys"][]="group_agenda_id";

				$detailsTablesData["group_agenda"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_agenda"][$dIndex]["detailKeys"][]="group_agenda_id";

// tables which are master tables for current table (detail)
$masterTablesData["group_agenda"] = array();



	
				$strOriginalDetailsTable="group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_agenda"][0] = $masterParams;
				$masterTablesData["group_agenda"][0]["masterKeys"] = array();
	$masterTablesData["group_agenda"][0]["masterKeys"][]="group_id";
				$masterTablesData["group_agenda"][0]["detailKeys"] = array();
	$masterTablesData["group_agenda"][0]["detailKeys"][]="group_id";
		
	
				$strOriginalDetailsTable="loop_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="loop_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "loop_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_agenda"][1] = $masterParams;
				$masterTablesData["group_agenda"][1]["masterKeys"] = array();
	$masterTablesData["group_agenda"][1]["masterKeys"][]="id_loop";
				$masterTablesData["group_agenda"][1]["detailKeys"] = array();
	$masterTablesData["group_agenda"][1]["detailKeys"][]="loop_id";
		
	
				$strOriginalDetailsTable="group_agenda_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group_agenda_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group_agenda_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_agenda"][2] = $masterParams;
				$masterTablesData["group_agenda"][2]["masterKeys"] = array();
	$masterTablesData["group_agenda"][2]["masterKeys"][]="agenda_type_id";
				$masterTablesData["group_agenda"][2]["detailKeys"] = array();
	$masterTablesData["group_agenda"][2]["detailKeys"][]="agenda_type_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group_agenda()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_agenda_id,  	group_id,  	agenda_type_id,  	loop_id,  	loop_value,  	agenda_name,  	message_general,  	message_content,  	send_date,  	attachment,  	`repeat`,  	repeat_type";
$proto0["m_strFrom"] = "FROM group_agenda";
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
	"m_strName" => "group_agenda_id",
	"m_strTable" => "group_agenda",
	"m_srcTableName" => "group_agenda"
));

$proto6["m_sql"] = "group_agenda_id";
$proto6["m_srcTableName"] = "group_agenda";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_agenda",
	"m_srcTableName" => "group_agenda"
));

$proto8["m_sql"] = "group_id";
$proto8["m_srcTableName"] = "group_agenda";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "agenda_type_id",
	"m_strTable" => "group_agenda",
	"m_srcTableName" => "group_agenda"
));

$proto10["m_sql"] = "agenda_type_id";
$proto10["m_srcTableName"] = "group_agenda";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "loop_id",
	"m_strTable" => "group_agenda",
	"m_srcTableName" => "group_agenda"
));

$proto12["m_sql"] = "loop_id";
$proto12["m_srcTableName"] = "group_agenda";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "loop_value",
	"m_strTable" => "group_agenda",
	"m_srcTableName" => "group_agenda"
));

$proto14["m_sql"] = "loop_value";
$proto14["m_srcTableName"] = "group_agenda";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "agenda_name",
	"m_strTable" => "group_agenda",
	"m_srcTableName" => "group_agenda"
));

$proto16["m_sql"] = "agenda_name";
$proto16["m_srcTableName"] = "group_agenda";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "message_general",
	"m_strTable" => "group_agenda",
	"m_srcTableName" => "group_agenda"
));

$proto18["m_sql"] = "message_general";
$proto18["m_srcTableName"] = "group_agenda";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "message_content",
	"m_strTable" => "group_agenda",
	"m_srcTableName" => "group_agenda"
));

$proto20["m_sql"] = "message_content";
$proto20["m_srcTableName"] = "group_agenda";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "send_date",
	"m_strTable" => "group_agenda",
	"m_srcTableName" => "group_agenda"
));

$proto22["m_sql"] = "send_date";
$proto22["m_srcTableName"] = "group_agenda";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "attachment",
	"m_strTable" => "group_agenda",
	"m_srcTableName" => "group_agenda"
));

$proto24["m_sql"] = "attachment";
$proto24["m_srcTableName"] = "group_agenda";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "repeat",
	"m_strTable" => "group_agenda",
	"m_srcTableName" => "group_agenda"
));

$proto26["m_sql"] = "`repeat`";
$proto26["m_srcTableName"] = "group_agenda";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "repeat_type",
	"m_strTable" => "group_agenda",
	"m_srcTableName" => "group_agenda"
));

$proto28["m_sql"] = "repeat_type";
$proto28["m_srcTableName"] = "group_agenda";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "group_agenda";
$proto31["m_srcTableName"] = "group_agenda";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "group_agenda_id";
$proto31["m_columns"][] = "group_id";
$proto31["m_columns"][] = "agenda_type_id";
$proto31["m_columns"][] = "loop_id";
$proto31["m_columns"][] = "loop_value";
$proto31["m_columns"][] = "agenda_name";
$proto31["m_columns"][] = "message_general";
$proto31["m_columns"][] = "message_content";
$proto31["m_columns"][] = "send_date";
$proto31["m_columns"][] = "attachment";
$proto31["m_columns"][] = "repeat";
$proto31["m_columns"][] = "repeat_type";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "group_agenda";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "group_agenda";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="group_agenda";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group_agenda = createSqlQuery_group_agenda();


	
		;

												

$tdatagroup_agenda[".sqlquery"] = $queryData_group_agenda;



include_once(getabspath("include/group_agenda_events.php"));
$tableEvents["group_agenda"] = new eventclass_group_agenda;
$tdatagroup_agenda[".hasEvents"] = true;

?>