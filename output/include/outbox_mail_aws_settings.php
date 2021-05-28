<?php
$tdataoutbox_mail_aws = array();
$tdataoutbox_mail_aws[".searchableFields"] = array();
$tdataoutbox_mail_aws[".ShortName"] = "outbox_mail_aws";
$tdataoutbox_mail_aws[".OwnerID"] = "";
$tdataoutbox_mail_aws[".OriginalTable"] = "outbox_mail_aws";


$tdataoutbox_mail_aws[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataoutbox_mail_aws[".originalPagesByType"] = $tdataoutbox_mail_aws[".pagesByType"];
$tdataoutbox_mail_aws[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataoutbox_mail_aws[".originalPages"] = $tdataoutbox_mail_aws[".pages"];
$tdataoutbox_mail_aws[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataoutbox_mail_aws[".originalDefaultPages"] = $tdataoutbox_mail_aws[".defaultPages"];

//	field labels
$fieldLabelsoutbox_mail_aws = array();
$fieldToolTipsoutbox_mail_aws = array();
$pageTitlesoutbox_mail_aws = array();
$placeHoldersoutbox_mail_aws = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoutbox_mail_aws["English"] = array();
	$fieldToolTipsoutbox_mail_aws["English"] = array();
	$placeHoldersoutbox_mail_aws["English"] = array();
	$pageTitlesoutbox_mail_aws["English"] = array();
	$fieldLabelsoutbox_mail_aws["English"]["id_outbox"] = "Id Outbox";
	$fieldToolTipsoutbox_mail_aws["English"]["id_outbox"] = "";
	$placeHoldersoutbox_mail_aws["English"]["id_outbox"] = "";
	$fieldLabelsoutbox_mail_aws["English"]["chat_id"] = "Chat Id";
	$fieldToolTipsoutbox_mail_aws["English"]["chat_id"] = "";
	$placeHoldersoutbox_mail_aws["English"]["chat_id"] = "";
	$fieldLabelsoutbox_mail_aws["English"]["out_msg"] = "Out Msg";
	$fieldToolTipsoutbox_mail_aws["English"]["out_msg"] = "";
	$placeHoldersoutbox_mail_aws["English"]["out_msg"] = "";
	$fieldLabelsoutbox_mail_aws["English"]["type"] = "Type";
	$fieldToolTipsoutbox_mail_aws["English"]["type"] = "";
	$placeHoldersoutbox_mail_aws["English"]["type"] = "";
	$fieldLabelsoutbox_mail_aws["English"]["flag"] = "Flag";
	$fieldToolTipsoutbox_mail_aws["English"]["flag"] = "";
	$placeHoldersoutbox_mail_aws["English"]["flag"] = "";
	$fieldLabelsoutbox_mail_aws["English"]["tgl"] = "Tgl";
	$fieldToolTipsoutbox_mail_aws["English"]["tgl"] = "";
	$placeHoldersoutbox_mail_aws["English"]["tgl"] = "";
	if (count($fieldToolTipsoutbox_mail_aws["English"]))
		$tdataoutbox_mail_aws[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsoutbox_mail_aws["Indonesian"] = array();
	$fieldToolTipsoutbox_mail_aws["Indonesian"] = array();
	$placeHoldersoutbox_mail_aws["Indonesian"] = array();
	$pageTitlesoutbox_mail_aws["Indonesian"] = array();
	$fieldLabelsoutbox_mail_aws["Indonesian"]["id_outbox"] = "Id Outbox";
	$fieldToolTipsoutbox_mail_aws["Indonesian"]["id_outbox"] = "";
	$placeHoldersoutbox_mail_aws["Indonesian"]["id_outbox"] = "";
	$fieldLabelsoutbox_mail_aws["Indonesian"]["chat_id"] = "Chat Id";
	$fieldToolTipsoutbox_mail_aws["Indonesian"]["chat_id"] = "";
	$placeHoldersoutbox_mail_aws["Indonesian"]["chat_id"] = "";
	$fieldLabelsoutbox_mail_aws["Indonesian"]["out_msg"] = "Out Msg";
	$fieldToolTipsoutbox_mail_aws["Indonesian"]["out_msg"] = "";
	$placeHoldersoutbox_mail_aws["Indonesian"]["out_msg"] = "";
	$fieldLabelsoutbox_mail_aws["Indonesian"]["type"] = "Type";
	$fieldToolTipsoutbox_mail_aws["Indonesian"]["type"] = "";
	$placeHoldersoutbox_mail_aws["Indonesian"]["type"] = "";
	$fieldLabelsoutbox_mail_aws["Indonesian"]["flag"] = "Flag";
	$fieldToolTipsoutbox_mail_aws["Indonesian"]["flag"] = "";
	$placeHoldersoutbox_mail_aws["Indonesian"]["flag"] = "";
	$fieldLabelsoutbox_mail_aws["Indonesian"]["tgl"] = "Tgl";
	$fieldToolTipsoutbox_mail_aws["Indonesian"]["tgl"] = "";
	$placeHoldersoutbox_mail_aws["Indonesian"]["tgl"] = "";
	if (count($fieldToolTipsoutbox_mail_aws["Indonesian"]))
		$tdataoutbox_mail_aws[".isUseToolTips"] = true;
}


	$tdataoutbox_mail_aws[".NCSearch"] = true;



$tdataoutbox_mail_aws[".shortTableName"] = "outbox_mail_aws";
$tdataoutbox_mail_aws[".nSecOptions"] = 0;

$tdataoutbox_mail_aws[".mainTableOwnerID"] = "";
$tdataoutbox_mail_aws[".entityType"] = 0;
$tdataoutbox_mail_aws[".connId"] = "notif_basic1_at_localhost";


$tdataoutbox_mail_aws[".strOriginalTableName"] = "outbox_mail_aws";

	



$tdataoutbox_mail_aws[".showAddInPopup"] = false;

$tdataoutbox_mail_aws[".showEditInPopup"] = false;

$tdataoutbox_mail_aws[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataoutbox_mail_aws[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataoutbox_mail_aws[".listAjax"] = false;
//	temporary
$tdataoutbox_mail_aws[".listAjax"] = false;

	$tdataoutbox_mail_aws[".audit"] = false;

	$tdataoutbox_mail_aws[".locking"] = false;


$pages = $tdataoutbox_mail_aws[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoutbox_mail_aws[".edit"] = true;
	$tdataoutbox_mail_aws[".afterEditAction"] = 1;
	$tdataoutbox_mail_aws[".closePopupAfterEdit"] = 1;
	$tdataoutbox_mail_aws[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoutbox_mail_aws[".add"] = true;
$tdataoutbox_mail_aws[".afterAddAction"] = 1;
$tdataoutbox_mail_aws[".closePopupAfterAdd"] = 1;
$tdataoutbox_mail_aws[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoutbox_mail_aws[".list"] = true;
}



$tdataoutbox_mail_aws[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoutbox_mail_aws[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoutbox_mail_aws[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoutbox_mail_aws[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoutbox_mail_aws[".printFriendly"] = true;
}



$tdataoutbox_mail_aws[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoutbox_mail_aws[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoutbox_mail_aws[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoutbox_mail_aws[".isUseAjaxSuggest"] = true;

$tdataoutbox_mail_aws[".rowHighlite"] = true;





$tdataoutbox_mail_aws[".ajaxCodeSnippetAdded"] = false;

$tdataoutbox_mail_aws[".buttonsAdded"] = false;

$tdataoutbox_mail_aws[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoutbox_mail_aws[".isUseTimeForSearch"] = false;


$tdataoutbox_mail_aws[".badgeColor"] = "DAA520";


$tdataoutbox_mail_aws[".allSearchFields"] = array();
$tdataoutbox_mail_aws[".filterFields"] = array();
$tdataoutbox_mail_aws[".requiredSearchFields"] = array();

$tdataoutbox_mail_aws[".googleLikeFields"] = array();
$tdataoutbox_mail_aws[".googleLikeFields"][] = "id_outbox";
$tdataoutbox_mail_aws[".googleLikeFields"][] = "chat_id";
$tdataoutbox_mail_aws[".googleLikeFields"][] = "out_msg";
$tdataoutbox_mail_aws[".googleLikeFields"][] = "type";
$tdataoutbox_mail_aws[".googleLikeFields"][] = "flag";
$tdataoutbox_mail_aws[".googleLikeFields"][] = "tgl";



$tdataoutbox_mail_aws[".tableType"] = "list";

$tdataoutbox_mail_aws[".printerPageOrientation"] = 0;
$tdataoutbox_mail_aws[".nPrinterPageScale"] = 100;

$tdataoutbox_mail_aws[".nPrinterSplitRecords"] = 40;

$tdataoutbox_mail_aws[".geocodingEnabled"] = false;










$tdataoutbox_mail_aws[".pageSize"] = 20;

$tdataoutbox_mail_aws[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataoutbox_mail_aws[".strOrderBy"] = $tstrOrderBy;

$tdataoutbox_mail_aws[".orderindexes"] = array();


$tdataoutbox_mail_aws[".sqlHead"] = "SELECT id_outbox,  	chat_id,  	out_msg,  	`type`,  	flag,  	tgl";
$tdataoutbox_mail_aws[".sqlFrom"] = "FROM outbox_mail_aws";
$tdataoutbox_mail_aws[".sqlWhereExpr"] = "";
$tdataoutbox_mail_aws[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataoutbox_mail_aws[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoutbox_mail_aws[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoutbox_mail_aws[".arrGroupsPerPage"] = $arrGPP;

$tdataoutbox_mail_aws[".highlightSearchResults"] = true;

$tableKeysoutbox_mail_aws = array();
$tableKeysoutbox_mail_aws[] = "id_outbox";
$tdataoutbox_mail_aws[".Keys"] = $tableKeysoutbox_mail_aws;


$tdataoutbox_mail_aws[".hideMobileList"] = array();




//	id_outbox
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_outbox";
	$fdata["GoodName"] = "id_outbox";
	$fdata["ownerTable"] = "outbox_mail_aws";
	$fdata["Label"] = GetFieldLabel("outbox_mail_aws","id_outbox");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_outbox";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_outbox";

	
	
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


	$tdataoutbox_mail_aws["id_outbox"] = $fdata;
		$tdataoutbox_mail_aws[".searchableFields"][] = "id_outbox";
//	chat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "chat_id";
	$fdata["GoodName"] = "chat_id";
	$fdata["ownerTable"] = "outbox_mail_aws";
	$fdata["Label"] = GetFieldLabel("outbox_mail_aws","chat_id");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "chat_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "chat_id";

	
	
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


	$tdataoutbox_mail_aws["chat_id"] = $fdata;
		$tdataoutbox_mail_aws[".searchableFields"][] = "chat_id";
//	out_msg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "out_msg";
	$fdata["GoodName"] = "out_msg";
	$fdata["ownerTable"] = "outbox_mail_aws";
	$fdata["Label"] = GetFieldLabel("outbox_mail_aws","out_msg");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "out_msg";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "out_msg";

	
	
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


	$tdataoutbox_mail_aws["out_msg"] = $fdata;
		$tdataoutbox_mail_aws[".searchableFields"][] = "out_msg";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "outbox_mail_aws";
	$fdata["Label"] = GetFieldLabel("outbox_mail_aws","type");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";

	
	
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
	$edata["LookupValues"][] = "msg";
	$edata["LookupValues"][] = "file";
	$edata["LookupValues"][] = "loc";
	$edata["LookupValues"][] = "img";

	
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


	$tdataoutbox_mail_aws["type"] = $fdata;
		$tdataoutbox_mail_aws[".searchableFields"][] = "type";
//	flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "flag";
	$fdata["GoodName"] = "flag";
	$fdata["ownerTable"] = "outbox_mail_aws";
	$fdata["Label"] = GetFieldLabel("outbox_mail_aws","flag");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "flag";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag";

	
	
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
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";

	
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


	$tdataoutbox_mail_aws["flag"] = $fdata;
		$tdataoutbox_mail_aws[".searchableFields"][] = "flag";
//	tgl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tgl";
	$fdata["GoodName"] = "tgl";
	$fdata["ownerTable"] = "outbox_mail_aws";
	$fdata["Label"] = GetFieldLabel("outbox_mail_aws","tgl");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "tgl";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tgl";

	
	
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


	$tdataoutbox_mail_aws["tgl"] = $fdata;
		$tdataoutbox_mail_aws[".searchableFields"][] = "tgl";


$tables_data["outbox_mail_aws"]=&$tdataoutbox_mail_aws;
$field_labels["outbox_mail_aws"] = &$fieldLabelsoutbox_mail_aws;
$fieldToolTips["outbox_mail_aws"] = &$fieldToolTipsoutbox_mail_aws;
$placeHolders["outbox_mail_aws"] = &$placeHoldersoutbox_mail_aws;
$page_titles["outbox_mail_aws"] = &$pageTitlesoutbox_mail_aws;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["outbox_mail_aws"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["outbox_mail_aws"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_outbox_mail_aws()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_outbox,  	chat_id,  	out_msg,  	`type`,  	flag,  	tgl";
$proto0["m_strFrom"] = "FROM outbox_mail_aws";
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
	"m_strName" => "id_outbox",
	"m_strTable" => "outbox_mail_aws",
	"m_srcTableName" => "outbox_mail_aws"
));

$proto6["m_sql"] = "id_outbox";
$proto6["m_srcTableName"] = "outbox_mail_aws";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "chat_id",
	"m_strTable" => "outbox_mail_aws",
	"m_srcTableName" => "outbox_mail_aws"
));

$proto8["m_sql"] = "chat_id";
$proto8["m_srcTableName"] = "outbox_mail_aws";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "out_msg",
	"m_strTable" => "outbox_mail_aws",
	"m_srcTableName" => "outbox_mail_aws"
));

$proto10["m_sql"] = "out_msg";
$proto10["m_srcTableName"] = "outbox_mail_aws";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "outbox_mail_aws",
	"m_srcTableName" => "outbox_mail_aws"
));

$proto12["m_sql"] = "`type`";
$proto12["m_srcTableName"] = "outbox_mail_aws";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "flag",
	"m_strTable" => "outbox_mail_aws",
	"m_srcTableName" => "outbox_mail_aws"
));

$proto14["m_sql"] = "flag";
$proto14["m_srcTableName"] = "outbox_mail_aws";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tgl",
	"m_strTable" => "outbox_mail_aws",
	"m_srcTableName" => "outbox_mail_aws"
));

$proto16["m_sql"] = "tgl";
$proto16["m_srcTableName"] = "outbox_mail_aws";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "outbox_mail_aws";
$proto19["m_srcTableName"] = "outbox_mail_aws";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id_outbox";
$proto19["m_columns"][] = "chat_id";
$proto19["m_columns"][] = "out_msg";
$proto19["m_columns"][] = "type";
$proto19["m_columns"][] = "flag";
$proto19["m_columns"][] = "tgl";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "outbox_mail_aws";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "outbox_mail_aws";
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
$proto0["m_srcTableName"]="outbox_mail_aws";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_outbox_mail_aws = createSqlQuery_outbox_mail_aws();


	
		;

						

$tdataoutbox_mail_aws[".sqlquery"] = $queryData_outbox_mail_aws;



$tableEvents["outbox_mail_aws"] = new eventsBase;
$tdataoutbox_mail_aws[".hasEvents"] = false;

?>