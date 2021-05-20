<?php
$tdatagroup_agenda_private = array();
$tdatagroup_agenda_private[".searchableFields"] = array();
$tdatagroup_agenda_private[".ShortName"] = "group_agenda_private";
$tdatagroup_agenda_private[".OwnerID"] = "";
$tdatagroup_agenda_private[".OriginalTable"] = "group_agenda_private";


$tdatagroup_agenda_private[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagroup_agenda_private[".originalPagesByType"] = $tdatagroup_agenda_private[".pagesByType"];
$tdatagroup_agenda_private[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagroup_agenda_private[".originalPages"] = $tdatagroup_agenda_private[".pages"];
$tdatagroup_agenda_private[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagroup_agenda_private[".originalDefaultPages"] = $tdatagroup_agenda_private[".defaultPages"];

//	field labels
$fieldLabelsgroup_agenda_private = array();
$fieldToolTipsgroup_agenda_private = array();
$pageTitlesgroup_agenda_private = array();
$placeHoldersgroup_agenda_private = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_agenda_private["English"] = array();
	$fieldToolTipsgroup_agenda_private["English"] = array();
	$placeHoldersgroup_agenda_private["English"] = array();
	$pageTitlesgroup_agenda_private["English"] = array();
	$fieldLabelsgroup_agenda_private["English"]["group_agenda_private_id"] = "Group Agenda Private Id";
	$fieldToolTipsgroup_agenda_private["English"]["group_agenda_private_id"] = "";
	$placeHoldersgroup_agenda_private["English"]["group_agenda_private_id"] = "";
	$fieldLabelsgroup_agenda_private["English"]["id_group_agenda"] = "Id Group Agenda";
	$fieldToolTipsgroup_agenda_private["English"]["id_group_agenda"] = "";
	$placeHoldersgroup_agenda_private["English"]["id_group_agenda"] = "";
	$fieldLabelsgroup_agenda_private["English"]["id_member"] = "Id Member";
	$fieldToolTipsgroup_agenda_private["English"]["id_member"] = "";
	$placeHoldersgroup_agenda_private["English"]["id_member"] = "";
	$fieldLabelsgroup_agenda_private["English"]["message_content"] = "Message Content";
	$fieldToolTipsgroup_agenda_private["English"]["message_content"] = "";
	$placeHoldersgroup_agenda_private["English"]["message_content"] = "";
	$fieldLabelsgroup_agenda_private["English"]["attachment"] = "Attachment";
	$fieldToolTipsgroup_agenda_private["English"]["attachment"] = "";
	$placeHoldersgroup_agenda_private["English"]["attachment"] = "";
	$fieldLabelsgroup_agenda_private["English"]["date_send"] = "Date Send";
	$fieldToolTipsgroup_agenda_private["English"]["date_send"] = "";
	$placeHoldersgroup_agenda_private["English"]["date_send"] = "";
	if (count($fieldToolTipsgroup_agenda_private["English"]))
		$tdatagroup_agenda_private[".isUseToolTips"] = true;
}


	$tdatagroup_agenda_private[".NCSearch"] = true;



$tdatagroup_agenda_private[".shortTableName"] = "group_agenda_private";
$tdatagroup_agenda_private[".nSecOptions"] = 0;

$tdatagroup_agenda_private[".mainTableOwnerID"] = "";
$tdatagroup_agenda_private[".entityType"] = 0;
$tdatagroup_agenda_private[".connId"] = "notif_basic1_at_localhost";


$tdatagroup_agenda_private[".strOriginalTableName"] = "group_agenda_private";

	



$tdatagroup_agenda_private[".showAddInPopup"] = false;

$tdatagroup_agenda_private[".showEditInPopup"] = false;

$tdatagroup_agenda_private[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_agenda_private[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_agenda_private[".listAjax"] = false;
//	temporary
$tdatagroup_agenda_private[".listAjax"] = false;

	$tdatagroup_agenda_private[".audit"] = false;

	$tdatagroup_agenda_private[".locking"] = false;


$pages = $tdatagroup_agenda_private[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_agenda_private[".edit"] = true;
	$tdatagroup_agenda_private[".afterEditAction"] = 1;
	$tdatagroup_agenda_private[".closePopupAfterEdit"] = 1;
	$tdatagroup_agenda_private[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_agenda_private[".add"] = true;
$tdatagroup_agenda_private[".afterAddAction"] = 1;
$tdatagroup_agenda_private[".closePopupAfterAdd"] = 1;
$tdatagroup_agenda_private[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_agenda_private[".list"] = true;
}



$tdatagroup_agenda_private[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup_agenda_private[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_agenda_private[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_agenda_private[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_agenda_private[".printFriendly"] = true;
}



$tdatagroup_agenda_private[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_agenda_private[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_agenda_private[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_agenda_private[".isUseAjaxSuggest"] = true;

$tdatagroup_agenda_private[".rowHighlite"] = true;





$tdatagroup_agenda_private[".ajaxCodeSnippetAdded"] = false;

$tdatagroup_agenda_private[".buttonsAdded"] = false;

$tdatagroup_agenda_private[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup_agenda_private[".isUseTimeForSearch"] = false;


$tdatagroup_agenda_private[".badgeColor"] = "9ACD32";


$tdatagroup_agenda_private[".allSearchFields"] = array();
$tdatagroup_agenda_private[".filterFields"] = array();
$tdatagroup_agenda_private[".requiredSearchFields"] = array();

$tdatagroup_agenda_private[".googleLikeFields"] = array();
$tdatagroup_agenda_private[".googleLikeFields"][] = "group_agenda_private_id";
$tdatagroup_agenda_private[".googleLikeFields"][] = "id_group_agenda";
$tdatagroup_agenda_private[".googleLikeFields"][] = "id_member";
$tdatagroup_agenda_private[".googleLikeFields"][] = "message_content";
$tdatagroup_agenda_private[".googleLikeFields"][] = "attachment";
$tdatagroup_agenda_private[".googleLikeFields"][] = "date_send";



$tdatagroup_agenda_private[".tableType"] = "list";

$tdatagroup_agenda_private[".printerPageOrientation"] = 0;
$tdatagroup_agenda_private[".nPrinterPageScale"] = 100;

$tdatagroup_agenda_private[".nPrinterSplitRecords"] = 40;

$tdatagroup_agenda_private[".geocodingEnabled"] = false;










$tdatagroup_agenda_private[".pageSize"] = 20;

$tdatagroup_agenda_private[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_agenda_private[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_agenda_private[".orderindexes"] = array();


$tdatagroup_agenda_private[".sqlHead"] = "SELECT group_agenda_private_id,  	id_group_agenda,  	id_member,  	message_content,  	attachment,  	date_send";
$tdatagroup_agenda_private[".sqlFrom"] = "FROM group_agenda_private";
$tdatagroup_agenda_private[".sqlWhereExpr"] = "";
$tdatagroup_agenda_private[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_agenda_private[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_agenda_private[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_agenda_private[".highlightSearchResults"] = true;

$tableKeysgroup_agenda_private = array();
$tableKeysgroup_agenda_private[] = "group_agenda_private_id";
$tdatagroup_agenda_private[".Keys"] = $tableKeysgroup_agenda_private;


$tdatagroup_agenda_private[".hideMobileList"] = array();




//	group_agenda_private_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_agenda_private_id";
	$fdata["GoodName"] = "group_agenda_private_id";
	$fdata["ownerTable"] = "group_agenda_private";
	$fdata["Label"] = GetFieldLabel("group_agenda_private","group_agenda_private_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_agenda_private_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_agenda_private_id";

	
	
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


	$tdatagroup_agenda_private["group_agenda_private_id"] = $fdata;
		$tdatagroup_agenda_private[".searchableFields"][] = "group_agenda_private_id";
//	id_group_agenda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_group_agenda";
	$fdata["GoodName"] = "id_group_agenda";
	$fdata["ownerTable"] = "group_agenda_private";
	$fdata["Label"] = GetFieldLabel("group_agenda_private","id_group_agenda");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_group_agenda";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_group_agenda";

	
	
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
	$edata["LookupTable"] = "group_agenda";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "group_agenda_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "agenda_name";

	

	
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


	$tdatagroup_agenda_private["id_group_agenda"] = $fdata;
		$tdatagroup_agenda_private[".searchableFields"][] = "id_group_agenda";
//	id_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_member";
	$fdata["GoodName"] = "id_member";
	$fdata["ownerTable"] = "group_agenda_private";
	$fdata["Label"] = GetFieldLabel("group_agenda_private","id_member");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_member";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_member";

	
	
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


	$tdatagroup_agenda_private["id_member"] = $fdata;
		$tdatagroup_agenda_private[".searchableFields"][] = "id_member";
//	message_content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "message_content";
	$fdata["GoodName"] = "message_content";
	$fdata["ownerTable"] = "group_agenda_private";
	$fdata["Label"] = GetFieldLabel("group_agenda_private","message_content");
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


	$tdatagroup_agenda_private["message_content"] = $fdata;
		$tdatagroup_agenda_private[".searchableFields"][] = "message_content";
//	attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "attachment";
	$fdata["GoodName"] = "attachment";
	$fdata["ownerTable"] = "group_agenda_private";
	$fdata["Label"] = GetFieldLabel("group_agenda_private","attachment");
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatagroup_agenda_private["attachment"] = $fdata;
		$tdatagroup_agenda_private[".searchableFields"][] = "attachment";
//	date_send
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "date_send";
	$fdata["GoodName"] = "date_send";
	$fdata["ownerTable"] = "group_agenda_private";
	$fdata["Label"] = GetFieldLabel("group_agenda_private","date_send");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "date_send";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_send";

	
	
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


	$tdatagroup_agenda_private["date_send"] = $fdata;
		$tdatagroup_agenda_private[".searchableFields"][] = "date_send";


$tables_data["group_agenda_private"]=&$tdatagroup_agenda_private;
$field_labels["group_agenda_private"] = &$fieldLabelsgroup_agenda_private;
$fieldToolTips["group_agenda_private"] = &$fieldToolTipsgroup_agenda_private;
$placeHolders["group_agenda_private"] = &$placeHoldersgroup_agenda_private;
$page_titles["group_agenda_private"] = &$pageTitlesgroup_agenda_private;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_agenda_private"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["group_agenda_private"] = array();



	
				$strOriginalDetailsTable="personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_agenda_private"][0] = $masterParams;
				$masterTablesData["group_agenda_private"][0]["masterKeys"] = array();
	$masterTablesData["group_agenda_private"][0]["masterKeys"][]="member_id";
				$masterTablesData["group_agenda_private"][0]["detailKeys"] = array();
	$masterTablesData["group_agenda_private"][0]["detailKeys"][]="id_member";
		
	
				$strOriginalDetailsTable="group_agenda";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group_agenda";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group_agenda";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_agenda_private"][1] = $masterParams;
				$masterTablesData["group_agenda_private"][1]["masterKeys"] = array();
	$masterTablesData["group_agenda_private"][1]["masterKeys"][]="group_agenda_id";
				$masterTablesData["group_agenda_private"][1]["detailKeys"] = array();
	$masterTablesData["group_agenda_private"][1]["detailKeys"][]="id_group_agenda";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group_agenda_private()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_agenda_private_id,  	id_group_agenda,  	id_member,  	message_content,  	attachment,  	date_send";
$proto0["m_strFrom"] = "FROM group_agenda_private";
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
	"m_strName" => "group_agenda_private_id",
	"m_strTable" => "group_agenda_private",
	"m_srcTableName" => "group_agenda_private"
));

$proto6["m_sql"] = "group_agenda_private_id";
$proto6["m_srcTableName"] = "group_agenda_private";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_group_agenda",
	"m_strTable" => "group_agenda_private",
	"m_srcTableName" => "group_agenda_private"
));

$proto8["m_sql"] = "id_group_agenda";
$proto8["m_srcTableName"] = "group_agenda_private";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_member",
	"m_strTable" => "group_agenda_private",
	"m_srcTableName" => "group_agenda_private"
));

$proto10["m_sql"] = "id_member";
$proto10["m_srcTableName"] = "group_agenda_private";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "message_content",
	"m_strTable" => "group_agenda_private",
	"m_srcTableName" => "group_agenda_private"
));

$proto12["m_sql"] = "message_content";
$proto12["m_srcTableName"] = "group_agenda_private";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "attachment",
	"m_strTable" => "group_agenda_private",
	"m_srcTableName" => "group_agenda_private"
));

$proto14["m_sql"] = "attachment";
$proto14["m_srcTableName"] = "group_agenda_private";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "date_send",
	"m_strTable" => "group_agenda_private",
	"m_srcTableName" => "group_agenda_private"
));

$proto16["m_sql"] = "date_send";
$proto16["m_srcTableName"] = "group_agenda_private";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "group_agenda_private";
$proto19["m_srcTableName"] = "group_agenda_private";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "group_agenda_private_id";
$proto19["m_columns"][] = "id_group_agenda";
$proto19["m_columns"][] = "id_member";
$proto19["m_columns"][] = "message_content";
$proto19["m_columns"][] = "attachment";
$proto19["m_columns"][] = "date_send";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "group_agenda_private";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "group_agenda_private";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="group_agenda_private";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group_agenda_private = createSqlQuery_group_agenda_private();


	
		;

						

$tdatagroup_agenda_private[".sqlquery"] = $queryData_group_agenda_private;



include_once(getabspath("include/group_agenda_private_events.php"));
$tableEvents["group_agenda_private"] = new eventclass_group_agenda_private;
$tdatagroup_agenda_private[".hasEvents"] = true;

$query = &$queryData_group_agenda_private;
$table = "group_agenda_private";
// here goes EVENT_INIT_TABLE event
$rs = DB::Query("select chat_id from personal_channel
where member_id = '$values[id_member]' AND channel_id = 1");
$dataChannelTele=$rs->fetchAssoc();
if($dataChannelTele)
{
	$data = array();
	$data["chat_id"] = $dataChannelTele["chat_id"];
	$data["out_msg"] = $values["message_content"];
	$data["type"] = "msg";
	$data["flag"] = 1;
	$data["tgl"] = $values["date_send"];
	DB::Insert("outbox_telegram", $data );
}
else
{
	// if dont exist do something else
}

$rs = DB::Query("select chat_id from personal_channel
where member_id = '$values[id_member]' AND channel_id = 2");
$dataChannelTele=$rs->fetchAssoc();
if($dataChannelTele)
{
	$data = array();
	$data["chat_id"] = $dataChannelTele["chat_id"];
	$data["out_msg"] = $values["message_content"];
	$data["type"] = "msg";
	$data["flag"] = 1;
	$data["tgl"] = $values["date_send"];
	DB::Insert("outbox_mail_aws", $data );
}
else
{
	// if dont exist do something else
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>