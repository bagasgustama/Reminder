<?php
$tdatagroup_agenda_type = array();
$tdatagroup_agenda_type[".searchableFields"] = array();
$tdatagroup_agenda_type[".ShortName"] = "group_agenda_type";
$tdatagroup_agenda_type[".OwnerID"] = "";
$tdatagroup_agenda_type[".OriginalTable"] = "group_agenda_type";


$tdatagroup_agenda_type[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagroup_agenda_type[".originalPagesByType"] = $tdatagroup_agenda_type[".pagesByType"];
$tdatagroup_agenda_type[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagroup_agenda_type[".originalPages"] = $tdatagroup_agenda_type[".pages"];
$tdatagroup_agenda_type[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagroup_agenda_type[".originalDefaultPages"] = $tdatagroup_agenda_type[".defaultPages"];

//	field labels
$fieldLabelsgroup_agenda_type = array();
$fieldToolTipsgroup_agenda_type = array();
$pageTitlesgroup_agenda_type = array();
$placeHoldersgroup_agenda_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_agenda_type["English"] = array();
	$fieldToolTipsgroup_agenda_type["English"] = array();
	$placeHoldersgroup_agenda_type["English"] = array();
	$pageTitlesgroup_agenda_type["English"] = array();
	$fieldLabelsgroup_agenda_type["English"]["agenda_type_id"] = "Agenda Type Id";
	$fieldToolTipsgroup_agenda_type["English"]["agenda_type_id"] = "";
	$placeHoldersgroup_agenda_type["English"]["agenda_type_id"] = "";
	$fieldLabelsgroup_agenda_type["English"]["group_id"] = "Group Id";
	$fieldToolTipsgroup_agenda_type["English"]["group_id"] = "";
	$placeHoldersgroup_agenda_type["English"]["group_id"] = "";
	$fieldLabelsgroup_agenda_type["English"]["agenda_type"] = "Agenda Type";
	$fieldToolTipsgroup_agenda_type["English"]["agenda_type"] = "";
	$placeHoldersgroup_agenda_type["English"]["agenda_type"] = "";
	$fieldLabelsgroup_agenda_type["English"]["description"] = "Description";
	$fieldToolTipsgroup_agenda_type["English"]["description"] = "";
	$placeHoldersgroup_agenda_type["English"]["description"] = "";
	$fieldLabelsgroup_agenda_type["English"]["group_requested"] = "Group Requested";
	$fieldToolTipsgroup_agenda_type["English"]["group_requested"] = "";
	$placeHoldersgroup_agenda_type["English"]["group_requested"] = "";
	$fieldLabelsgroup_agenda_type["English"]["valid"] = "Valid";
	$fieldToolTipsgroup_agenda_type["English"]["valid"] = "";
	$placeHoldersgroup_agenda_type["English"]["valid"] = "";
	if (count($fieldToolTipsgroup_agenda_type["English"]))
		$tdatagroup_agenda_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsgroup_agenda_type["Indonesian"] = array();
	$fieldToolTipsgroup_agenda_type["Indonesian"] = array();
	$placeHoldersgroup_agenda_type["Indonesian"] = array();
	$pageTitlesgroup_agenda_type["Indonesian"] = array();
	$fieldLabelsgroup_agenda_type["Indonesian"]["agenda_type_id"] = "Agenda Type Id";
	$fieldToolTipsgroup_agenda_type["Indonesian"]["agenda_type_id"] = "";
	$placeHoldersgroup_agenda_type["Indonesian"]["agenda_type_id"] = "";
	$fieldLabelsgroup_agenda_type["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipsgroup_agenda_type["Indonesian"]["group_id"] = "";
	$placeHoldersgroup_agenda_type["Indonesian"]["group_id"] = "";
	$fieldLabelsgroup_agenda_type["Indonesian"]["agenda_type"] = "Agenda Type";
	$fieldToolTipsgroup_agenda_type["Indonesian"]["agenda_type"] = "";
	$placeHoldersgroup_agenda_type["Indonesian"]["agenda_type"] = "";
	$fieldLabelsgroup_agenda_type["Indonesian"]["description"] = "Description";
	$fieldToolTipsgroup_agenda_type["Indonesian"]["description"] = "";
	$placeHoldersgroup_agenda_type["Indonesian"]["description"] = "";
	$fieldLabelsgroup_agenda_type["Indonesian"]["group_requested"] = "Group Requested";
	$fieldToolTipsgroup_agenda_type["Indonesian"]["group_requested"] = "";
	$placeHoldersgroup_agenda_type["Indonesian"]["group_requested"] = "";
	$fieldLabelsgroup_agenda_type["Indonesian"]["valid"] = "Valid";
	$fieldToolTipsgroup_agenda_type["Indonesian"]["valid"] = "";
	$placeHoldersgroup_agenda_type["Indonesian"]["valid"] = "";
	if (count($fieldToolTipsgroup_agenda_type["Indonesian"]))
		$tdatagroup_agenda_type[".isUseToolTips"] = true;
}


	$tdatagroup_agenda_type[".NCSearch"] = true;



$tdatagroup_agenda_type[".shortTableName"] = "group_agenda_type";
$tdatagroup_agenda_type[".nSecOptions"] = 0;

$tdatagroup_agenda_type[".mainTableOwnerID"] = "";
$tdatagroup_agenda_type[".entityType"] = 0;
$tdatagroup_agenda_type[".connId"] = "notif_basic1_at_localhost";


$tdatagroup_agenda_type[".strOriginalTableName"] = "group_agenda_type";

	



$tdatagroup_agenda_type[".showAddInPopup"] = false;

$tdatagroup_agenda_type[".showEditInPopup"] = false;

$tdatagroup_agenda_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_agenda_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_agenda_type[".listAjax"] = false;
//	temporary
$tdatagroup_agenda_type[".listAjax"] = false;

	$tdatagroup_agenda_type[".audit"] = false;

	$tdatagroup_agenda_type[".locking"] = false;


$pages = $tdatagroup_agenda_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_agenda_type[".edit"] = true;
	$tdatagroup_agenda_type[".afterEditAction"] = 1;
	$tdatagroup_agenda_type[".closePopupAfterEdit"] = 1;
	$tdatagroup_agenda_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_agenda_type[".add"] = true;
$tdatagroup_agenda_type[".afterAddAction"] = 1;
$tdatagroup_agenda_type[".closePopupAfterAdd"] = 1;
$tdatagroup_agenda_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_agenda_type[".list"] = true;
}



$tdatagroup_agenda_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup_agenda_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_agenda_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_agenda_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_agenda_type[".printFriendly"] = true;
}



$tdatagroup_agenda_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_agenda_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_agenda_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_agenda_type[".isUseAjaxSuggest"] = true;

$tdatagroup_agenda_type[".rowHighlite"] = true;





$tdatagroup_agenda_type[".ajaxCodeSnippetAdded"] = false;

$tdatagroup_agenda_type[".buttonsAdded"] = false;

$tdatagroup_agenda_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup_agenda_type[".isUseTimeForSearch"] = false;


$tdatagroup_agenda_type[".badgeColor"] = "BC8F8F";


$tdatagroup_agenda_type[".allSearchFields"] = array();
$tdatagroup_agenda_type[".filterFields"] = array();
$tdatagroup_agenda_type[".requiredSearchFields"] = array();

$tdatagroup_agenda_type[".googleLikeFields"] = array();
$tdatagroup_agenda_type[".googleLikeFields"][] = "agenda_type_id";
$tdatagroup_agenda_type[".googleLikeFields"][] = "group_id";
$tdatagroup_agenda_type[".googleLikeFields"][] = "agenda_type";
$tdatagroup_agenda_type[".googleLikeFields"][] = "description";
$tdatagroup_agenda_type[".googleLikeFields"][] = "group_requested";
$tdatagroup_agenda_type[".googleLikeFields"][] = "valid";



$tdatagroup_agenda_type[".tableType"] = "list";

$tdatagroup_agenda_type[".printerPageOrientation"] = 0;
$tdatagroup_agenda_type[".nPrinterPageScale"] = 100;

$tdatagroup_agenda_type[".nPrinterSplitRecords"] = 40;

$tdatagroup_agenda_type[".geocodingEnabled"] = false;










$tdatagroup_agenda_type[".pageSize"] = 20;

$tdatagroup_agenda_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_agenda_type[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_agenda_type[".orderindexes"] = array();


$tdatagroup_agenda_type[".sqlHead"] = "SELECT agenda_type_id,  	group_id,  	agenda_type,  	description,  	group_requested,  	valid";
$tdatagroup_agenda_type[".sqlFrom"] = "FROM group_agenda_type";
$tdatagroup_agenda_type[".sqlWhereExpr"] = "";
$tdatagroup_agenda_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_agenda_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_agenda_type[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_agenda_type[".highlightSearchResults"] = true;

$tableKeysgroup_agenda_type = array();
$tableKeysgroup_agenda_type[] = "agenda_type_id";
$tdatagroup_agenda_type[".Keys"] = $tableKeysgroup_agenda_type;


$tdatagroup_agenda_type[".hideMobileList"] = array();




//	agenda_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "agenda_type_id";
	$fdata["GoodName"] = "agenda_type_id";
	$fdata["ownerTable"] = "group_agenda_type";
	$fdata["Label"] = GetFieldLabel("group_agenda_type","agenda_type_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatagroup_agenda_type["agenda_type_id"] = $fdata;
		$tdatagroup_agenda_type[".searchableFields"][] = "agenda_type_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_agenda_type";
	$fdata["Label"] = GetFieldLabel("group_agenda_type","group_id");
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


	$tdatagroup_agenda_type["group_id"] = $fdata;
		$tdatagroup_agenda_type[".searchableFields"][] = "group_id";
//	agenda_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "agenda_type";
	$fdata["GoodName"] = "agenda_type";
	$fdata["ownerTable"] = "group_agenda_type";
	$fdata["Label"] = GetFieldLabel("group_agenda_type","agenda_type");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agenda_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agenda_type";

	
	
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


	$tdatagroup_agenda_type["agenda_type"] = $fdata;
		$tdatagroup_agenda_type[".searchableFields"][] = "agenda_type";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "group_agenda_type";
	$fdata["Label"] = GetFieldLabel("group_agenda_type","description");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdatagroup_agenda_type["description"] = $fdata;
		$tdatagroup_agenda_type[".searchableFields"][] = "description";
//	group_requested
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "group_requested";
	$fdata["GoodName"] = "group_requested";
	$fdata["ownerTable"] = "group_agenda_type";
	$fdata["Label"] = GetFieldLabel("group_agenda_type","group_requested");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_requested";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_requested";

	
	
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


	$tdatagroup_agenda_type["group_requested"] = $fdata;
		$tdatagroup_agenda_type[".searchableFields"][] = "group_requested";
//	valid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "valid";
	$fdata["GoodName"] = "valid";
	$fdata["ownerTable"] = "group_agenda_type";
	$fdata["Label"] = GetFieldLabel("group_agenda_type","valid");
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


	$tdatagroup_agenda_type["valid"] = $fdata;
		$tdatagroup_agenda_type[".searchableFields"][] = "valid";


$tables_data["group_agenda_type"]=&$tdatagroup_agenda_type;
$field_labels["group_agenda_type"] = &$fieldLabelsgroup_agenda_type;
$fieldToolTips["group_agenda_type"] = &$fieldToolTipsgroup_agenda_type;
$placeHolders["group_agenda_type"] = &$placeHoldersgroup_agenda_type;
$page_titles["group_agenda_type"] = &$pageTitlesgroup_agenda_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_agenda_type"] = array();
//	group_agenda
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_agenda";
		$detailsParam["dOriginalTable"] = "group_agenda";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_agenda";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_agenda");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group_agenda_type"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_agenda_type"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_agenda_type"][$dIndex]["masterKeys"][]="agenda_type_id";

				$detailsTablesData["group_agenda_type"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_agenda_type"][$dIndex]["detailKeys"][]="agenda_type_id";

// tables which are master tables for current table (detail)
$masterTablesData["group_agenda_type"] = array();



	
				$strOriginalDetailsTable="group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_agenda_type"][0] = $masterParams;
				$masterTablesData["group_agenda_type"][0]["masterKeys"] = array();
	$masterTablesData["group_agenda_type"][0]["masterKeys"][]="group_id";
				$masterTablesData["group_agenda_type"][0]["detailKeys"] = array();
	$masterTablesData["group_agenda_type"][0]["detailKeys"][]="group_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group_agenda_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "agenda_type_id,  	group_id,  	agenda_type,  	description,  	group_requested,  	valid";
$proto0["m_strFrom"] = "FROM group_agenda_type";
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
	"m_strName" => "agenda_type_id",
	"m_strTable" => "group_agenda_type",
	"m_srcTableName" => "group_agenda_type"
));

$proto6["m_sql"] = "agenda_type_id";
$proto6["m_srcTableName"] = "group_agenda_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_agenda_type",
	"m_srcTableName" => "group_agenda_type"
));

$proto8["m_sql"] = "group_id";
$proto8["m_srcTableName"] = "group_agenda_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "agenda_type",
	"m_strTable" => "group_agenda_type",
	"m_srcTableName" => "group_agenda_type"
));

$proto10["m_sql"] = "agenda_type";
$proto10["m_srcTableName"] = "group_agenda_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "group_agenda_type",
	"m_srcTableName" => "group_agenda_type"
));

$proto12["m_sql"] = "description";
$proto12["m_srcTableName"] = "group_agenda_type";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "group_requested",
	"m_strTable" => "group_agenda_type",
	"m_srcTableName" => "group_agenda_type"
));

$proto14["m_sql"] = "group_requested";
$proto14["m_srcTableName"] = "group_agenda_type";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "valid",
	"m_strTable" => "group_agenda_type",
	"m_srcTableName" => "group_agenda_type"
));

$proto16["m_sql"] = "valid";
$proto16["m_srcTableName"] = "group_agenda_type";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "group_agenda_type";
$proto19["m_srcTableName"] = "group_agenda_type";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "agenda_type_id";
$proto19["m_columns"][] = "group_id";
$proto19["m_columns"][] = "agenda_type";
$proto19["m_columns"][] = "description";
$proto19["m_columns"][] = "group_requested";
$proto19["m_columns"][] = "valid";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "group_agenda_type";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "group_agenda_type";
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
$proto0["m_srcTableName"]="group_agenda_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group_agenda_type = createSqlQuery_group_agenda_type();


	
		;

						

$tdatagroup_agenda_type[".sqlquery"] = $queryData_group_agenda_type;



$tableEvents["group_agenda_type"] = new eventsBase;
$tdatagroup_agenda_type[".hasEvents"] = false;

?>