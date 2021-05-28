<?php
$tdatamember_checkin = array();
$tdatamember_checkin[".searchableFields"] = array();
$tdatamember_checkin[".ShortName"] = "member_checkin";
$tdatamember_checkin[".OwnerID"] = "";
$tdatamember_checkin[".OriginalTable"] = "group_member_checkin";


$tdatamember_checkin[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamember_checkin[".originalPagesByType"] = $tdatamember_checkin[".pagesByType"];
$tdatamember_checkin[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamember_checkin[".originalPages"] = $tdatamember_checkin[".pages"];
$tdatamember_checkin[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamember_checkin[".originalDefaultPages"] = $tdatamember_checkin[".defaultPages"];

//	field labels
$fieldLabelsmember_checkin = array();
$fieldToolTipsmember_checkin = array();
$pageTitlesmember_checkin = array();
$placeHoldersmember_checkin = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmember_checkin["English"] = array();
	$fieldToolTipsmember_checkin["English"] = array();
	$placeHoldersmember_checkin["English"] = array();
	$pageTitlesmember_checkin["English"] = array();
	$fieldLabelsmember_checkin["English"]["group_member_checkin_id"] = "Checkin Id";
	$fieldToolTipsmember_checkin["English"]["group_member_checkin_id"] = "";
	$placeHoldersmember_checkin["English"]["group_member_checkin_id"] = "";
	$fieldLabelsmember_checkin["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsmember_checkin["English"]["group_member_id"] = "";
	$placeHoldersmember_checkin["English"]["group_member_id"] = "";
	$fieldLabelsmember_checkin["English"]["member_id"] = "Member Name";
	$fieldToolTipsmember_checkin["English"]["member_id"] = "";
	$placeHoldersmember_checkin["English"]["member_id"] = "";
	$fieldLabelsmember_checkin["English"]["group_id"] = "Group Name";
	$fieldToolTipsmember_checkin["English"]["group_id"] = "";
	$placeHoldersmember_checkin["English"]["group_id"] = "";
	$fieldLabelsmember_checkin["English"]["checkin_date"] = "Checkin Date";
	$fieldToolTipsmember_checkin["English"]["checkin_date"] = "";
	$placeHoldersmember_checkin["English"]["checkin_date"] = "";
	$fieldLabelsmember_checkin["English"]["checkout_date"] = "Checkout Date";
	$fieldToolTipsmember_checkin["English"]["checkout_date"] = "";
	$placeHoldersmember_checkin["English"]["checkout_date"] = "";
	$fieldLabelsmember_checkin["English"]["id_room"] = "Id Room";
	$fieldToolTipsmember_checkin["English"]["id_room"] = "";
	$placeHoldersmember_checkin["English"]["id_room"] = "";
	$fieldLabelsmember_checkin["English"]["valid"] = "Valid";
	$fieldToolTipsmember_checkin["English"]["valid"] = "";
	$placeHoldersmember_checkin["English"]["valid"] = "";
	$fieldLabelsmember_checkin["English"]["review_member"] = "Review Member";
	$fieldToolTipsmember_checkin["English"]["review_member"] = "";
	$placeHoldersmember_checkin["English"]["review_member"] = "";
	$fieldLabelsmember_checkin["English"]["rating_member"] = "Rating Member";
	$fieldToolTipsmember_checkin["English"]["rating_member"] = "";
	$placeHoldersmember_checkin["English"]["rating_member"] = "";
	if (count($fieldToolTipsmember_checkin["English"]))
		$tdatamember_checkin[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsmember_checkin["Indonesian"] = array();
	$fieldToolTipsmember_checkin["Indonesian"] = array();
	$placeHoldersmember_checkin["Indonesian"] = array();
	$pageTitlesmember_checkin["Indonesian"] = array();
	$fieldLabelsmember_checkin["Indonesian"]["group_member_checkin_id"] = "Checkin Id";
	$fieldToolTipsmember_checkin["Indonesian"]["group_member_checkin_id"] = "";
	$placeHoldersmember_checkin["Indonesian"]["group_member_checkin_id"] = "";
	$fieldLabelsmember_checkin["Indonesian"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsmember_checkin["Indonesian"]["group_member_id"] = "";
	$placeHoldersmember_checkin["Indonesian"]["group_member_id"] = "";
	$fieldLabelsmember_checkin["Indonesian"]["member_id"] = "Member Name";
	$fieldToolTipsmember_checkin["Indonesian"]["member_id"] = "";
	$placeHoldersmember_checkin["Indonesian"]["member_id"] = "";
	$fieldLabelsmember_checkin["Indonesian"]["group_id"] = "Group Name";
	$fieldToolTipsmember_checkin["Indonesian"]["group_id"] = "";
	$placeHoldersmember_checkin["Indonesian"]["group_id"] = "";
	$fieldLabelsmember_checkin["Indonesian"]["checkin_date"] = "Checkin Date";
	$fieldToolTipsmember_checkin["Indonesian"]["checkin_date"] = "";
	$placeHoldersmember_checkin["Indonesian"]["checkin_date"] = "";
	$fieldLabelsmember_checkin["Indonesian"]["checkout_date"] = "Checkout Date";
	$fieldToolTipsmember_checkin["Indonesian"]["checkout_date"] = "";
	$placeHoldersmember_checkin["Indonesian"]["checkout_date"] = "";
	$fieldLabelsmember_checkin["Indonesian"]["id_room"] = "Id Room";
	$fieldToolTipsmember_checkin["Indonesian"]["id_room"] = "";
	$placeHoldersmember_checkin["Indonesian"]["id_room"] = "";
	$fieldLabelsmember_checkin["Indonesian"]["valid"] = "Valid";
	$fieldToolTipsmember_checkin["Indonesian"]["valid"] = "";
	$placeHoldersmember_checkin["Indonesian"]["valid"] = "";
	$fieldLabelsmember_checkin["Indonesian"]["review_member"] = "Review Member";
	$fieldToolTipsmember_checkin["Indonesian"]["review_member"] = "";
	$placeHoldersmember_checkin["Indonesian"]["review_member"] = "";
	$fieldLabelsmember_checkin["Indonesian"]["rating_member"] = "Rating Member";
	$fieldToolTipsmember_checkin["Indonesian"]["rating_member"] = "";
	$placeHoldersmember_checkin["Indonesian"]["rating_member"] = "";
	if (count($fieldToolTipsmember_checkin["Indonesian"]))
		$tdatamember_checkin[".isUseToolTips"] = true;
}


	$tdatamember_checkin[".NCSearch"] = true;



$tdatamember_checkin[".shortTableName"] = "member_checkin";
$tdatamember_checkin[".nSecOptions"] = 0;

$tdatamember_checkin[".mainTableOwnerID"] = "";
$tdatamember_checkin[".entityType"] = 1;
$tdatamember_checkin[".connId"] = "notif_basic1_at_localhost";


$tdatamember_checkin[".strOriginalTableName"] = "group_member_checkin";

	



$tdatamember_checkin[".showAddInPopup"] = false;

$tdatamember_checkin[".showEditInPopup"] = false;

$tdatamember_checkin[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamember_checkin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamember_checkin[".listAjax"] = false;
//	temporary
$tdatamember_checkin[".listAjax"] = false;

	$tdatamember_checkin[".audit"] = false;

	$tdatamember_checkin[".locking"] = false;


$pages = $tdatamember_checkin[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamember_checkin[".edit"] = true;
	$tdatamember_checkin[".afterEditAction"] = 0;
	$tdatamember_checkin[".closePopupAfterEdit"] = 1;
	$tdatamember_checkin[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatamember_checkin[".add"] = true;
$tdatamember_checkin[".afterAddAction"] = 0;
$tdatamember_checkin[".closePopupAfterAdd"] = 1;
$tdatamember_checkin[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatamember_checkin[".list"] = true;
}



$tdatamember_checkin[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamember_checkin[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamember_checkin[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamember_checkin[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamember_checkin[".printFriendly"] = true;
}



$tdatamember_checkin[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamember_checkin[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamember_checkin[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamember_checkin[".isUseAjaxSuggest"] = true;

$tdatamember_checkin[".rowHighlite"] = true;





$tdatamember_checkin[".ajaxCodeSnippetAdded"] = false;

$tdatamember_checkin[".buttonsAdded"] = false;

$tdatamember_checkin[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamember_checkin[".isUseTimeForSearch"] = true;


$tdatamember_checkin[".badgeColor"] = "6493EA";


$tdatamember_checkin[".allSearchFields"] = array();
$tdatamember_checkin[".filterFields"] = array();
$tdatamember_checkin[".requiredSearchFields"] = array();

$tdatamember_checkin[".googleLikeFields"] = array();
$tdatamember_checkin[".googleLikeFields"][] = "group_member_checkin_id";
$tdatamember_checkin[".googleLikeFields"][] = "group_member_id";
$tdatamember_checkin[".googleLikeFields"][] = "member_id";
$tdatamember_checkin[".googleLikeFields"][] = "group_id";
$tdatamember_checkin[".googleLikeFields"][] = "checkin_date";
$tdatamember_checkin[".googleLikeFields"][] = "checkout_date";
$tdatamember_checkin[".googleLikeFields"][] = "id_room";
$tdatamember_checkin[".googleLikeFields"][] = "valid";
$tdatamember_checkin[".googleLikeFields"][] = "review_member";
$tdatamember_checkin[".googleLikeFields"][] = "rating_member";



$tdatamember_checkin[".tableType"] = "list";

$tdatamember_checkin[".printerPageOrientation"] = 0;
$tdatamember_checkin[".nPrinterPageScale"] = 100;

$tdatamember_checkin[".nPrinterSplitRecords"] = 40;

$tdatamember_checkin[".geocodingEnabled"] = false;










$tdatamember_checkin[".pageSize"] = 20;

$tdatamember_checkin[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamember_checkin[".strOrderBy"] = $tstrOrderBy;

$tdatamember_checkin[".orderindexes"] = array();


$tdatamember_checkin[".sqlHead"] = "SELECT group_member_checkin_id,  	group_member_id,  	member_id,  	group_id,  	checkin_date,  	checkout_date,  	id_room,  	valid,  	review_member,  	rating_member";
$tdatamember_checkin[".sqlFrom"] = "FROM group_member_checkin";
$tdatamember_checkin[".sqlWhereExpr"] = "";
$tdatamember_checkin[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "member_id = ':session.member_id'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatamember_checkin[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamember_checkin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamember_checkin[".arrGroupsPerPage"] = $arrGPP;

$tdatamember_checkin[".highlightSearchResults"] = true;

$tableKeysmember_checkin = array();
$tableKeysmember_checkin[] = "group_member_checkin_id";
$tdatamember_checkin[".Keys"] = $tableKeysmember_checkin;


$tdatamember_checkin[".hideMobileList"] = array();




//	group_member_checkin_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_member_checkin_id";
	$fdata["GoodName"] = "group_member_checkin_id";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("member_checkin","group_member_checkin_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_member_checkin_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_checkin_id";

	
	
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


	$tdatamember_checkin["group_member_checkin_id"] = $fdata;
		$tdatamember_checkin[".searchableFields"][] = "group_member_checkin_id";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("member_checkin","group_member_id");
	$fdata["FieldType"] = 20;

	
	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "group_member11";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "group_member_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "group_member_id";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "group_id", "lookup" => "group_id" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "member_id";

	
	
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


	$tdatamember_checkin["group_member_id"] = $fdata;
		$tdatamember_checkin[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("member_checkin","member_id");
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
	$edata["LookupTable"] = "personal1";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "member_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "group_member_id", "lookup" => "group_member_id" );

	
	

	
	
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


	$tdatamember_checkin["member_id"] = $fdata;
		$tdatamember_checkin[".searchableFields"][] = "member_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("member_checkin","group_id");
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
	$edata["LookupTable"] = "group4";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "group_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "group_name";

				$edata["LookupWhere"] = "group_member.member_id = ':session.member_id'";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "group_member_id";

	
	
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


	$tdatamember_checkin["group_id"] = $fdata;
		$tdatamember_checkin[".searchableFields"][] = "group_id";
//	checkin_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "checkin_date";
	$fdata["GoodName"] = "checkin_date";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("member_checkin","checkin_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "checkin_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "checkin_date";

	
	
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

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatamember_checkin["checkin_date"] = $fdata;
		$tdatamember_checkin[".searchableFields"][] = "checkin_date";
//	checkout_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "checkout_date";
	$fdata["GoodName"] = "checkout_date";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("member_checkin","checkout_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "checkout_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "checkout_date";

	
	
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

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatamember_checkin["checkout_date"] = $fdata;
		$tdatamember_checkin[".searchableFields"][] = "checkout_date";
//	id_room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_room";
	$fdata["GoodName"] = "id_room";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("member_checkin","id_room");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "id_room";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_room";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatamember_checkin["id_room"] = $fdata;
		$tdatamember_checkin[".searchableFields"][] = "id_room";
//	valid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "valid";
	$fdata["GoodName"] = "valid";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("member_checkin","valid");
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


	$tdatamember_checkin["valid"] = $fdata;
		$tdatamember_checkin[".searchableFields"][] = "valid";
//	review_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "review_member";
	$fdata["GoodName"] = "review_member";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("member_checkin","review_member");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "review_member";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "review_member";

	
	
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


	$tdatamember_checkin["review_member"] = $fdata;
		$tdatamember_checkin[".searchableFields"][] = "review_member";
//	rating_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rating_member";
	$fdata["GoodName"] = "rating_member";
	$fdata["ownerTable"] = "group_member_checkin";
	$fdata["Label"] = GetFieldLabel("member_checkin","rating_member");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "rating_member";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rating_member";

	
	
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


	$tdatamember_checkin["rating_member"] = $fdata;
		$tdatamember_checkin[".searchableFields"][] = "rating_member";


$tables_data["member checkin"]=&$tdatamember_checkin;
$field_labels["member_checkin"] = &$fieldLabelsmember_checkin;
$fieldToolTips["member_checkin"] = &$fieldToolTipsmember_checkin;
$placeHolders["member_checkin"] = &$placeHoldersmember_checkin;
$page_titles["member_checkin"] = &$pageTitlesmember_checkin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["member checkin"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["member checkin"] = array();



	
				$strOriginalDetailsTable="group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["member checkin"][0] = $masterParams;
				$masterTablesData["member checkin"][0]["masterKeys"] = array();
	$masterTablesData["member checkin"][0]["masterKeys"][]="group_id";
				$masterTablesData["member checkin"][0]["detailKeys"] = array();
	$masterTablesData["member checkin"][0]["detailKeys"][]="group_id";
		
	
				$strOriginalDetailsTable="group_member";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group_member";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group_member";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["member checkin"][1] = $masterParams;
				$masterTablesData["member checkin"][1]["masterKeys"] = array();
	$masterTablesData["member checkin"][1]["masterKeys"][]="group_member_id";
				$masterTablesData["member checkin"][1]["detailKeys"] = array();
	$masterTablesData["member checkin"][1]["detailKeys"][]="group_member_id";
		
	
				$strOriginalDetailsTable="personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["member checkin"][2] = $masterParams;
				$masterTablesData["member checkin"][2]["masterKeys"] = array();
	$masterTablesData["member checkin"][2]["masterKeys"][]="member_id";
				$masterTablesData["member checkin"][2]["detailKeys"] = array();
	$masterTablesData["member checkin"][2]["detailKeys"][]="member_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_member_checkin()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_member_checkin_id,  	group_member_id,  	member_id,  	group_id,  	checkin_date,  	checkout_date,  	id_room,  	valid,  	review_member,  	rating_member";
$proto0["m_strFrom"] = "FROM group_member_checkin";
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
	"m_strName" => "group_member_checkin_id",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "member checkin"
));

$proto6["m_sql"] = "group_member_checkin_id";
$proto6["m_srcTableName"] = "member checkin";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_id",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "member checkin"
));

$proto8["m_sql"] = "group_member_id";
$proto8["m_srcTableName"] = "member checkin";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "member checkin"
));

$proto10["m_sql"] = "member_id";
$proto10["m_srcTableName"] = "member checkin";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "member checkin"
));

$proto12["m_sql"] = "group_id";
$proto12["m_srcTableName"] = "member checkin";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "checkin_date",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "member checkin"
));

$proto14["m_sql"] = "checkin_date";
$proto14["m_srcTableName"] = "member checkin";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "checkout_date",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "member checkin"
));

$proto16["m_sql"] = "checkout_date";
$proto16["m_srcTableName"] = "member checkin";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_room",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "member checkin"
));

$proto18["m_sql"] = "id_room";
$proto18["m_srcTableName"] = "member checkin";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "valid",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "member checkin"
));

$proto20["m_sql"] = "valid";
$proto20["m_srcTableName"] = "member checkin";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "review_member",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "member checkin"
));

$proto22["m_sql"] = "review_member";
$proto22["m_srcTableName"] = "member checkin";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rating_member",
	"m_strTable" => "group_member_checkin",
	"m_srcTableName" => "member checkin"
));

$proto24["m_sql"] = "rating_member";
$proto24["m_srcTableName"] = "member checkin";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "group_member_checkin";
$proto27["m_srcTableName"] = "member checkin";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "group_member_checkin_id";
$proto27["m_columns"][] = "group_member_id";
$proto27["m_columns"][] = "member_id";
$proto27["m_columns"][] = "group_id";
$proto27["m_columns"][] = "checkin_date";
$proto27["m_columns"][] = "checkout_date";
$proto27["m_columns"][] = "id_room";
$proto27["m_columns"][] = "valid";
$proto27["m_columns"][] = "review_member";
$proto27["m_columns"][] = "rating_member";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "group_member_checkin";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "member checkin";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="member checkin";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_member_checkin = createSqlQuery_member_checkin();


	
		;

										

$tdatamember_checkin[".sqlquery"] = $queryData_member_checkin;



include_once(getabspath("include/member_checkin_events.php"));
$tableEvents["member checkin"] = new eventclass_member_checkin;
$tdatamember_checkin[".hasEvents"] = true;

?>