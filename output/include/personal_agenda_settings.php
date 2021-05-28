<?php
$tdatapersonal_agenda = array();
$tdatapersonal_agenda[".searchableFields"] = array();
$tdatapersonal_agenda[".ShortName"] = "personal_agenda";
$tdatapersonal_agenda[".OwnerID"] = "member_id";
$tdatapersonal_agenda[".OriginalTable"] = "personal_agenda";


$tdatapersonal_agenda[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapersonal_agenda[".originalPagesByType"] = $tdatapersonal_agenda[".pagesByType"];
$tdatapersonal_agenda[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapersonal_agenda[".originalPages"] = $tdatapersonal_agenda[".pages"];
$tdatapersonal_agenda[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapersonal_agenda[".originalDefaultPages"] = $tdatapersonal_agenda[".defaultPages"];

//	field labels
$fieldLabelspersonal_agenda = array();
$fieldToolTipspersonal_agenda = array();
$pageTitlespersonal_agenda = array();
$placeHolderspersonal_agenda = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspersonal_agenda["English"] = array();
	$fieldToolTipspersonal_agenda["English"] = array();
	$placeHolderspersonal_agenda["English"] = array();
	$pageTitlespersonal_agenda["English"] = array();
	$fieldLabelspersonal_agenda["English"]["member_agenda_id"] = "Member Agenda Id";
	$fieldToolTipspersonal_agenda["English"]["member_agenda_id"] = "";
	$placeHolderspersonal_agenda["English"]["member_agenda_id"] = "";
	$fieldLabelspersonal_agenda["English"]["member_id"] = "Member Id";
	$fieldToolTipspersonal_agenda["English"]["member_id"] = "";
	$placeHolderspersonal_agenda["English"]["member_id"] = "";
	$fieldLabelspersonal_agenda["English"]["loop_type"] = "Loop Type";
	$fieldToolTipspersonal_agenda["English"]["loop_type"] = "";
	$placeHolderspersonal_agenda["English"]["loop_type"] = "";
	$fieldLabelspersonal_agenda["English"]["loop_value"] = "Loop Value";
	$fieldToolTipspersonal_agenda["English"]["loop_value"] = "";
	$placeHolderspersonal_agenda["English"]["loop_value"] = "";
	$fieldLabelspersonal_agenda["English"]["message_content"] = "Message Content";
	$fieldToolTipspersonal_agenda["English"]["message_content"] = "";
	$placeHolderspersonal_agenda["English"]["message_content"] = "";
	$fieldLabelspersonal_agenda["English"]["attachment"] = "Attachment";
	$fieldToolTipspersonal_agenda["English"]["attachment"] = "";
	$placeHolderspersonal_agenda["English"]["attachment"] = "";
	$fieldLabelspersonal_agenda["English"]["repeat"] = "Repeat";
	$fieldToolTipspersonal_agenda["English"]["repeat"] = "";
	$placeHolderspersonal_agenda["English"]["repeat"] = "";
	$fieldLabelspersonal_agenda["English"]["repeat_type"] = "Repeat Type";
	$fieldToolTipspersonal_agenda["English"]["repeat_type"] = "";
	$placeHolderspersonal_agenda["English"]["repeat_type"] = "";
	if (count($fieldToolTipspersonal_agenda["English"]))
		$tdatapersonal_agenda[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelspersonal_agenda["Indonesian"] = array();
	$fieldToolTipspersonal_agenda["Indonesian"] = array();
	$placeHolderspersonal_agenda["Indonesian"] = array();
	$pageTitlespersonal_agenda["Indonesian"] = array();
	$fieldLabelspersonal_agenda["Indonesian"]["member_agenda_id"] = "Member Agenda Id";
	$fieldToolTipspersonal_agenda["Indonesian"]["member_agenda_id"] = "";
	$placeHolderspersonal_agenda["Indonesian"]["member_agenda_id"] = "";
	$fieldLabelspersonal_agenda["Indonesian"]["member_id"] = "Member Id";
	$fieldToolTipspersonal_agenda["Indonesian"]["member_id"] = "";
	$placeHolderspersonal_agenda["Indonesian"]["member_id"] = "";
	$fieldLabelspersonal_agenda["Indonesian"]["loop_type"] = "Loop Type";
	$fieldToolTipspersonal_agenda["Indonesian"]["loop_type"] = "";
	$placeHolderspersonal_agenda["Indonesian"]["loop_type"] = "";
	$fieldLabelspersonal_agenda["Indonesian"]["loop_value"] = "Loop Value";
	$fieldToolTipspersonal_agenda["Indonesian"]["loop_value"] = "";
	$placeHolderspersonal_agenda["Indonesian"]["loop_value"] = "";
	$fieldLabelspersonal_agenda["Indonesian"]["message_content"] = "Message Content";
	$fieldToolTipspersonal_agenda["Indonesian"]["message_content"] = "";
	$placeHolderspersonal_agenda["Indonesian"]["message_content"] = "";
	$fieldLabelspersonal_agenda["Indonesian"]["attachment"] = "Attachment";
	$fieldToolTipspersonal_agenda["Indonesian"]["attachment"] = "";
	$placeHolderspersonal_agenda["Indonesian"]["attachment"] = "";
	$fieldLabelspersonal_agenda["Indonesian"]["repeat"] = "Repeat";
	$fieldToolTipspersonal_agenda["Indonesian"]["repeat"] = "";
	$placeHolderspersonal_agenda["Indonesian"]["repeat"] = "";
	$fieldLabelspersonal_agenda["Indonesian"]["repeat_type"] = "Repeat Type";
	$fieldToolTipspersonal_agenda["Indonesian"]["repeat_type"] = "";
	$placeHolderspersonal_agenda["Indonesian"]["repeat_type"] = "";
	if (count($fieldToolTipspersonal_agenda["Indonesian"]))
		$tdatapersonal_agenda[".isUseToolTips"] = true;
}


	$tdatapersonal_agenda[".NCSearch"] = true;



$tdatapersonal_agenda[".shortTableName"] = "personal_agenda";
$tdatapersonal_agenda[".nSecOptions"] = 1;

$tdatapersonal_agenda[".mainTableOwnerID"] = "member_id";
$tdatapersonal_agenda[".entityType"] = 0;
$tdatapersonal_agenda[".connId"] = "notif_basic1_at_localhost";


$tdatapersonal_agenda[".strOriginalTableName"] = "personal_agenda";

	



$tdatapersonal_agenda[".showAddInPopup"] = false;

$tdatapersonal_agenda[".showEditInPopup"] = false;

$tdatapersonal_agenda[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapersonal_agenda[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapersonal_agenda[".listAjax"] = false;
//	temporary
$tdatapersonal_agenda[".listAjax"] = false;

	$tdatapersonal_agenda[".audit"] = false;

	$tdatapersonal_agenda[".locking"] = false;


$pages = $tdatapersonal_agenda[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersonal_agenda[".edit"] = true;
	$tdatapersonal_agenda[".afterEditAction"] = 1;
	$tdatapersonal_agenda[".closePopupAfterEdit"] = 1;
	$tdatapersonal_agenda[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersonal_agenda[".add"] = true;
$tdatapersonal_agenda[".afterAddAction"] = 1;
$tdatapersonal_agenda[".closePopupAfterAdd"] = 1;
$tdatapersonal_agenda[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersonal_agenda[".list"] = true;
}



$tdatapersonal_agenda[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersonal_agenda[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersonal_agenda[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersonal_agenda[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersonal_agenda[".printFriendly"] = true;
}



$tdatapersonal_agenda[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersonal_agenda[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersonal_agenda[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersonal_agenda[".isUseAjaxSuggest"] = true;

$tdatapersonal_agenda[".rowHighlite"] = true;





$tdatapersonal_agenda[".ajaxCodeSnippetAdded"] = false;

$tdatapersonal_agenda[".buttonsAdded"] = false;

$tdatapersonal_agenda[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersonal_agenda[".isUseTimeForSearch"] = false;


$tdatapersonal_agenda[".badgeColor"] = "E67349";


$tdatapersonal_agenda[".allSearchFields"] = array();
$tdatapersonal_agenda[".filterFields"] = array();
$tdatapersonal_agenda[".requiredSearchFields"] = array();

$tdatapersonal_agenda[".googleLikeFields"] = array();
$tdatapersonal_agenda[".googleLikeFields"][] = "member_agenda_id";
$tdatapersonal_agenda[".googleLikeFields"][] = "member_id";
$tdatapersonal_agenda[".googleLikeFields"][] = "loop_type";
$tdatapersonal_agenda[".googleLikeFields"][] = "loop_value";
$tdatapersonal_agenda[".googleLikeFields"][] = "message_content";
$tdatapersonal_agenda[".googleLikeFields"][] = "attachment";
$tdatapersonal_agenda[".googleLikeFields"][] = "repeat";
$tdatapersonal_agenda[".googleLikeFields"][] = "repeat_type";



$tdatapersonal_agenda[".tableType"] = "list";

$tdatapersonal_agenda[".printerPageOrientation"] = 0;
$tdatapersonal_agenda[".nPrinterPageScale"] = 100;

$tdatapersonal_agenda[".nPrinterSplitRecords"] = 40;

$tdatapersonal_agenda[".geocodingEnabled"] = false;










$tdatapersonal_agenda[".pageSize"] = 20;

$tdatapersonal_agenda[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapersonal_agenda[".strOrderBy"] = $tstrOrderBy;

$tdatapersonal_agenda[".orderindexes"] = array();


$tdatapersonal_agenda[".sqlHead"] = "SELECT member_agenda_id,  	member_id,  	loop_type,  	loop_value,  	message_content,  	attachment,  	`repeat`,  	repeat_type";
$tdatapersonal_agenda[".sqlFrom"] = "FROM personal_agenda";
$tdatapersonal_agenda[".sqlWhereExpr"] = "";
$tdatapersonal_agenda[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersonal_agenda[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersonal_agenda[".arrGroupsPerPage"] = $arrGPP;

$tdatapersonal_agenda[".highlightSearchResults"] = true;

$tableKeyspersonal_agenda = array();
$tableKeyspersonal_agenda[] = "member_agenda_id";
$tdatapersonal_agenda[".Keys"] = $tableKeyspersonal_agenda;


$tdatapersonal_agenda[".hideMobileList"] = array();




//	member_agenda_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "member_agenda_id";
	$fdata["GoodName"] = "member_agenda_id";
	$fdata["ownerTable"] = "personal_agenda";
	$fdata["Label"] = GetFieldLabel("personal_agenda","member_agenda_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "member_agenda_id";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatapersonal_agenda["member_agenda_id"] = $fdata;
		$tdatapersonal_agenda[".searchableFields"][] = "member_agenda_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "personal_agenda";
	$fdata["Label"] = GetFieldLabel("personal_agenda","member_id");
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


	$tdatapersonal_agenda["member_id"] = $fdata;
		$tdatapersonal_agenda[".searchableFields"][] = "member_id";
//	loop_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "loop_type";
	$fdata["GoodName"] = "loop_type";
	$fdata["ownerTable"] = "personal_agenda";
	$fdata["Label"] = GetFieldLabel("personal_agenda","loop_type");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "loop_type";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatapersonal_agenda["loop_type"] = $fdata;
		$tdatapersonal_agenda[".searchableFields"][] = "loop_type";
//	loop_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "loop_value";
	$fdata["GoodName"] = "loop_value";
	$fdata["ownerTable"] = "personal_agenda";
	$fdata["Label"] = GetFieldLabel("personal_agenda","loop_value");
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


	$tdatapersonal_agenda["loop_value"] = $fdata;
		$tdatapersonal_agenda[".searchableFields"][] = "loop_value";
//	message_content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "message_content";
	$fdata["GoodName"] = "message_content";
	$fdata["ownerTable"] = "personal_agenda";
	$fdata["Label"] = GetFieldLabel("personal_agenda","message_content");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdatapersonal_agenda["message_content"] = $fdata;
		$tdatapersonal_agenda[".searchableFields"][] = "message_content";
//	attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "attachment";
	$fdata["GoodName"] = "attachment";
	$fdata["ownerTable"] = "personal_agenda";
	$fdata["Label"] = GetFieldLabel("personal_agenda","attachment");
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


	$tdatapersonal_agenda["attachment"] = $fdata;
		$tdatapersonal_agenda[".searchableFields"][] = "attachment";
//	repeat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "repeat";
	$fdata["GoodName"] = "repeat";
	$fdata["ownerTable"] = "personal_agenda";
	$fdata["Label"] = GetFieldLabel("personal_agenda","repeat");
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


	$tdatapersonal_agenda["repeat"] = $fdata;
		$tdatapersonal_agenda[".searchableFields"][] = "repeat";
//	repeat_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "repeat_type";
	$fdata["GoodName"] = "repeat_type";
	$fdata["ownerTable"] = "personal_agenda";
	$fdata["Label"] = GetFieldLabel("personal_agenda","repeat_type");
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


	$tdatapersonal_agenda["repeat_type"] = $fdata;
		$tdatapersonal_agenda[".searchableFields"][] = "repeat_type";


$tables_data["personal_agenda"]=&$tdatapersonal_agenda;
$field_labels["personal_agenda"] = &$fieldLabelspersonal_agenda;
$fieldToolTips["personal_agenda"] = &$fieldToolTipspersonal_agenda;
$placeHolders["personal_agenda"] = &$placeHolderspersonal_agenda;
$page_titles["personal_agenda"] = &$pageTitlespersonal_agenda;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["personal_agenda"] = array();
//	personal_agenda_repeat_date
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="personal_agenda_repeat_date";
		$detailsParam["dOriginalTable"] = "personal_agenda_repeat_date";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "personal_agenda_repeat_date";
	$detailsParam["dCaptionTable"] = GetTableCaption("personal_agenda_repeat_date");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal_agenda"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal_agenda"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal_agenda"][$dIndex]["masterKeys"][]="member_agenda_id";

				$detailsTablesData["personal_agenda"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal_agenda"][$dIndex]["detailKeys"][]="member_agenda_id";

// tables which are master tables for current table (detail)
$masterTablesData["personal_agenda"] = array();



	
				$strOriginalDetailsTable="personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["personal_agenda"][0] = $masterParams;
				$masterTablesData["personal_agenda"][0]["masterKeys"] = array();
	$masterTablesData["personal_agenda"][0]["masterKeys"][]="member_id";
				$masterTablesData["personal_agenda"][0]["detailKeys"] = array();
	$masterTablesData["personal_agenda"][0]["detailKeys"][]="member_id";
		
	
				$strOriginalDetailsTable="loop_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="loop_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "loop_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["personal_agenda"][1] = $masterParams;
				$masterTablesData["personal_agenda"][1]["masterKeys"] = array();
	$masterTablesData["personal_agenda"][1]["masterKeys"][]="id_loop";
				$masterTablesData["personal_agenda"][1]["detailKeys"] = array();
	$masterTablesData["personal_agenda"][1]["detailKeys"][]="loop_type";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_personal_agenda()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "member_agenda_id,  	member_id,  	loop_type,  	loop_value,  	message_content,  	attachment,  	`repeat`,  	repeat_type";
$proto0["m_strFrom"] = "FROM personal_agenda";
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
	"m_strName" => "member_agenda_id",
	"m_strTable" => "personal_agenda",
	"m_srcTableName" => "personal_agenda"
));

$proto6["m_sql"] = "member_agenda_id";
$proto6["m_srcTableName"] = "personal_agenda";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "personal_agenda",
	"m_srcTableName" => "personal_agenda"
));

$proto8["m_sql"] = "member_id";
$proto8["m_srcTableName"] = "personal_agenda";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "loop_type",
	"m_strTable" => "personal_agenda",
	"m_srcTableName" => "personal_agenda"
));

$proto10["m_sql"] = "loop_type";
$proto10["m_srcTableName"] = "personal_agenda";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "loop_value",
	"m_strTable" => "personal_agenda",
	"m_srcTableName" => "personal_agenda"
));

$proto12["m_sql"] = "loop_value";
$proto12["m_srcTableName"] = "personal_agenda";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "message_content",
	"m_strTable" => "personal_agenda",
	"m_srcTableName" => "personal_agenda"
));

$proto14["m_sql"] = "message_content";
$proto14["m_srcTableName"] = "personal_agenda";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "attachment",
	"m_strTable" => "personal_agenda",
	"m_srcTableName" => "personal_agenda"
));

$proto16["m_sql"] = "attachment";
$proto16["m_srcTableName"] = "personal_agenda";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "repeat",
	"m_strTable" => "personal_agenda",
	"m_srcTableName" => "personal_agenda"
));

$proto18["m_sql"] = "`repeat`";
$proto18["m_srcTableName"] = "personal_agenda";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "repeat_type",
	"m_strTable" => "personal_agenda",
	"m_srcTableName" => "personal_agenda"
));

$proto20["m_sql"] = "repeat_type";
$proto20["m_srcTableName"] = "personal_agenda";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "personal_agenda";
$proto23["m_srcTableName"] = "personal_agenda";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "member_agenda_id";
$proto23["m_columns"][] = "member_id";
$proto23["m_columns"][] = "loop_type";
$proto23["m_columns"][] = "loop_value";
$proto23["m_columns"][] = "message_content";
$proto23["m_columns"][] = "attachment";
$proto23["m_columns"][] = "repeat";
$proto23["m_columns"][] = "repeat_type";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "personal_agenda";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "personal_agenda";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="personal_agenda";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_personal_agenda = createSqlQuery_personal_agenda();


	
		;

								

$tdatapersonal_agenda[".sqlquery"] = $queryData_personal_agenda;



include_once(getabspath("include/personal_agenda_events.php"));
$tableEvents["personal_agenda"] = new eventclass_personal_agenda;
$tdatapersonal_agenda[".hasEvents"] = true;

?>