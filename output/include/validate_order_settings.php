<?php
$tdatavalidate_order = array();
$tdatavalidate_order[".searchableFields"] = array();
$tdatavalidate_order[".ShortName"] = "validate_order";
$tdatavalidate_order[".OwnerID"] = "";
$tdatavalidate_order[".OriginalTable"] = "group_member_order";


$tdatavalidate_order[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavalidate_order[".originalPagesByType"] = $tdatavalidate_order[".pagesByType"];
$tdatavalidate_order[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavalidate_order[".originalPages"] = $tdatavalidate_order[".pages"];
$tdatavalidate_order[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavalidate_order[".originalDefaultPages"] = $tdatavalidate_order[".defaultPages"];

//	field labels
$fieldLabelsvalidate_order = array();
$fieldToolTipsvalidate_order = array();
$pageTitlesvalidate_order = array();
$placeHoldersvalidate_order = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvalidate_order["English"] = array();
	$fieldToolTipsvalidate_order["English"] = array();
	$placeHoldersvalidate_order["English"] = array();
	$pageTitlesvalidate_order["English"] = array();
	$fieldLabelsvalidate_order["English"]["group_member_order"] = "Order Id";
	$fieldToolTipsvalidate_order["English"]["group_member_order"] = "";
	$placeHoldersvalidate_order["English"]["group_member_order"] = "";
	$fieldLabelsvalidate_order["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsvalidate_order["English"]["group_member_id"] = "";
	$placeHoldersvalidate_order["English"]["group_member_id"] = "";
	$fieldLabelsvalidate_order["English"]["member_id"] = "Member Name";
	$fieldToolTipsvalidate_order["English"]["member_id"] = "";
	$placeHoldersvalidate_order["English"]["member_id"] = "";
	$fieldLabelsvalidate_order["English"]["group_id"] = "Group Name";
	$fieldToolTipsvalidate_order["English"]["group_id"] = "";
	$placeHoldersvalidate_order["English"]["group_id"] = "";
	$fieldLabelsvalidate_order["English"]["order_date"] = "Order Date";
	$fieldToolTipsvalidate_order["English"]["order_date"] = "";
	$placeHoldersvalidate_order["English"]["order_date"] = "";
	$fieldLabelsvalidate_order["English"]["valid"] = "Valid";
	$fieldToolTipsvalidate_order["English"]["valid"] = "";
	$placeHoldersvalidate_order["English"]["valid"] = "";
	$fieldLabelsvalidate_order["English"]["total"] = "Total";
	$fieldToolTipsvalidate_order["English"]["total"] = "";
	$placeHoldersvalidate_order["English"]["total"] = "";
	$fieldLabelsvalidate_order["English"]["currency"] = "Currency";
	$fieldToolTipsvalidate_order["English"]["currency"] = "";
	$placeHoldersvalidate_order["English"]["currency"] = "";
	$fieldLabelsvalidate_order["English"]["review_member"] = "Review Member";
	$fieldToolTipsvalidate_order["English"]["review_member"] = "";
	$placeHoldersvalidate_order["English"]["review_member"] = "";
	$fieldLabelsvalidate_order["English"]["rating_member"] = "Rating Member";
	$fieldToolTipsvalidate_order["English"]["rating_member"] = "";
	$placeHoldersvalidate_order["English"]["rating_member"] = "";
	$fieldLabelsvalidate_order["English"]["payment_status"] = "Payment Status";
	$fieldToolTipsvalidate_order["English"]["payment_status"] = "";
	$placeHoldersvalidate_order["English"]["payment_status"] = "";
	$fieldLabelsvalidate_order["English"]["money_received"] = "Money Received";
	$fieldToolTipsvalidate_order["English"]["money_received"] = "";
	$placeHoldersvalidate_order["English"]["money_received"] = "";
	$fieldLabelsvalidate_order["English"]["change_money"] = "Change Money";
	$fieldToolTipsvalidate_order["English"]["change_money"] = "";
	$placeHoldersvalidate_order["English"]["change_money"] = "";
	if (count($fieldToolTipsvalidate_order["English"]))
		$tdatavalidate_order[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsvalidate_order["Indonesian"] = array();
	$fieldToolTipsvalidate_order["Indonesian"] = array();
	$placeHoldersvalidate_order["Indonesian"] = array();
	$pageTitlesvalidate_order["Indonesian"] = array();
	$fieldLabelsvalidate_order["Indonesian"]["group_member_order"] = "Order Id";
	$fieldToolTipsvalidate_order["Indonesian"]["group_member_order"] = "";
	$placeHoldersvalidate_order["Indonesian"]["group_member_order"] = "";
	$fieldLabelsvalidate_order["Indonesian"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsvalidate_order["Indonesian"]["group_member_id"] = "";
	$placeHoldersvalidate_order["Indonesian"]["group_member_id"] = "";
	$fieldLabelsvalidate_order["Indonesian"]["member_id"] = "Member Name";
	$fieldToolTipsvalidate_order["Indonesian"]["member_id"] = "";
	$placeHoldersvalidate_order["Indonesian"]["member_id"] = "";
	$fieldLabelsvalidate_order["Indonesian"]["group_id"] = "Group Name";
	$fieldToolTipsvalidate_order["Indonesian"]["group_id"] = "";
	$placeHoldersvalidate_order["Indonesian"]["group_id"] = "";
	$fieldLabelsvalidate_order["Indonesian"]["order_date"] = "Order Date";
	$fieldToolTipsvalidate_order["Indonesian"]["order_date"] = "";
	$placeHoldersvalidate_order["Indonesian"]["order_date"] = "";
	$fieldLabelsvalidate_order["Indonesian"]["valid"] = "Valid";
	$fieldToolTipsvalidate_order["Indonesian"]["valid"] = "";
	$placeHoldersvalidate_order["Indonesian"]["valid"] = "";
	$fieldLabelsvalidate_order["Indonesian"]["total"] = "Total";
	$fieldToolTipsvalidate_order["Indonesian"]["total"] = "";
	$placeHoldersvalidate_order["Indonesian"]["total"] = "";
	$fieldLabelsvalidate_order["Indonesian"]["currency"] = "Currency";
	$fieldToolTipsvalidate_order["Indonesian"]["currency"] = "";
	$placeHoldersvalidate_order["Indonesian"]["currency"] = "";
	$fieldLabelsvalidate_order["Indonesian"]["review_member"] = "Review Member";
	$fieldToolTipsvalidate_order["Indonesian"]["review_member"] = "";
	$placeHoldersvalidate_order["Indonesian"]["review_member"] = "";
	$fieldLabelsvalidate_order["Indonesian"]["rating_member"] = "Rating Member";
	$fieldToolTipsvalidate_order["Indonesian"]["rating_member"] = "";
	$placeHoldersvalidate_order["Indonesian"]["rating_member"] = "";
	$fieldLabelsvalidate_order["Indonesian"]["payment_status"] = "Payment Status";
	$fieldToolTipsvalidate_order["Indonesian"]["payment_status"] = "";
	$placeHoldersvalidate_order["Indonesian"]["payment_status"] = "";
	$fieldLabelsvalidate_order["Indonesian"]["money_received"] = "Money Received";
	$fieldToolTipsvalidate_order["Indonesian"]["money_received"] = "";
	$placeHoldersvalidate_order["Indonesian"]["money_received"] = "";
	$fieldLabelsvalidate_order["Indonesian"]["change_money"] = "Change Money";
	$fieldToolTipsvalidate_order["Indonesian"]["change_money"] = "";
	$placeHoldersvalidate_order["Indonesian"]["change_money"] = "";
	if (count($fieldToolTipsvalidate_order["Indonesian"]))
		$tdatavalidate_order[".isUseToolTips"] = true;
}


	$tdatavalidate_order[".NCSearch"] = true;



$tdatavalidate_order[".shortTableName"] = "validate_order";
$tdatavalidate_order[".nSecOptions"] = 0;

$tdatavalidate_order[".mainTableOwnerID"] = "";
$tdatavalidate_order[".entityType"] = 1;
$tdatavalidate_order[".connId"] = "notif_basic1_at_localhost";


$tdatavalidate_order[".strOriginalTableName"] = "group_member_order";

	



$tdatavalidate_order[".showAddInPopup"] = false;

$tdatavalidate_order[".showEditInPopup"] = false;

$tdatavalidate_order[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavalidate_order[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavalidate_order[".listAjax"] = false;
//	temporary
$tdatavalidate_order[".listAjax"] = false;

	$tdatavalidate_order[".audit"] = false;

	$tdatavalidate_order[".locking"] = false;


$pages = $tdatavalidate_order[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavalidate_order[".edit"] = true;
	$tdatavalidate_order[".afterEditAction"] = 0;
	$tdatavalidate_order[".closePopupAfterEdit"] = 1;
	$tdatavalidate_order[".afterEditActionDetTable"] = "group_member_order_detail";
}

if( $pages[PAGE_ADD] ) {
$tdatavalidate_order[".add"] = true;
$tdatavalidate_order[".afterAddAction"] = 1;
$tdatavalidate_order[".closePopupAfterAdd"] = 1;
$tdatavalidate_order[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavalidate_order[".list"] = true;
}



$tdatavalidate_order[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavalidate_order[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavalidate_order[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavalidate_order[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavalidate_order[".printFriendly"] = true;
}



$tdatavalidate_order[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavalidate_order[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavalidate_order[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavalidate_order[".isUseAjaxSuggest"] = true;

$tdatavalidate_order[".rowHighlite"] = true;





$tdatavalidate_order[".ajaxCodeSnippetAdded"] = false;

$tdatavalidate_order[".buttonsAdded"] = false;

$tdatavalidate_order[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavalidate_order[".isUseTimeForSearch"] = false;


$tdatavalidate_order[".badgeColor"] = "7B68EE";


$tdatavalidate_order[".allSearchFields"] = array();
$tdatavalidate_order[".filterFields"] = array();
$tdatavalidate_order[".requiredSearchFields"] = array();

$tdatavalidate_order[".googleLikeFields"] = array();
$tdatavalidate_order[".googleLikeFields"][] = "group_member_order";
$tdatavalidate_order[".googleLikeFields"][] = "group_member_id";
$tdatavalidate_order[".googleLikeFields"][] = "member_id";
$tdatavalidate_order[".googleLikeFields"][] = "group_id";
$tdatavalidate_order[".googleLikeFields"][] = "order_date";
$tdatavalidate_order[".googleLikeFields"][] = "valid";
$tdatavalidate_order[".googleLikeFields"][] = "total";
$tdatavalidate_order[".googleLikeFields"][] = "currency";
$tdatavalidate_order[".googleLikeFields"][] = "review_member";
$tdatavalidate_order[".googleLikeFields"][] = "rating_member";
$tdatavalidate_order[".googleLikeFields"][] = "payment_status";
$tdatavalidate_order[".googleLikeFields"][] = "money_received";
$tdatavalidate_order[".googleLikeFields"][] = "change_money";



$tdatavalidate_order[".tableType"] = "list";

$tdatavalidate_order[".printerPageOrientation"] = 0;
$tdatavalidate_order[".nPrinterPageScale"] = 100;

$tdatavalidate_order[".nPrinterSplitRecords"] = 40;

$tdatavalidate_order[".geocodingEnabled"] = false;










$tdatavalidate_order[".pageSize"] = 20;

$tdatavalidate_order[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavalidate_order[".strOrderBy"] = $tstrOrderBy;

$tdatavalidate_order[".orderindexes"] = array();


$tdatavalidate_order[".sqlHead"] = "SELECT group_member_order,  	group_member_id,  	member_id,  	group_id,  	order_date,  	valid,  	total,  	currency,  	review_member,  	rating_member,  	payment_status,  	money_received,  	change_money";
$tdatavalidate_order[".sqlFrom"] = "FROM group_member_order";
$tdatavalidate_order[".sqlWhereExpr"] = "";
$tdatavalidate_order[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "group_id = ':session.group_id' and valid = 0",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatavalidate_order[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavalidate_order[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavalidate_order[".arrGroupsPerPage"] = $arrGPP;

$tdatavalidate_order[".highlightSearchResults"] = true;

$tableKeysvalidate_order = array();
$tableKeysvalidate_order[] = "group_member_order";
$tdatavalidate_order[".Keys"] = $tableKeysvalidate_order;


$tdatavalidate_order[".hideMobileList"] = array();




//	group_member_order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_member_order";
	$fdata["GoodName"] = "group_member_order";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("validate_order","group_member_order");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_member_order";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_order";

	
	
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


	$tdatavalidate_order["group_member_order"] = $fdata;
		$tdatavalidate_order[".searchableFields"][] = "group_member_order";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("validate_order","group_member_id");
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
	$edata["LookupTable"] = "group_member";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "group_member_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "group_member_id";

	

	
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


	$tdatavalidate_order["group_member_id"] = $fdata;
		$tdatavalidate_order[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("validate_order","member_id");
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


	$tdatavalidate_order["member_id"] = $fdata;
		$tdatavalidate_order[".searchableFields"][] = "member_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("validate_order","group_id");
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


	$tdatavalidate_order["group_id"] = $fdata;
		$tdatavalidate_order[".searchableFields"][] = "group_id";
//	order_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "order_date";
	$fdata["GoodName"] = "order_date";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("validate_order","order_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "order_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "order_date";

	
	
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


	$tdatavalidate_order["order_date"] = $fdata;
		$tdatavalidate_order[".searchableFields"][] = "order_date";
//	valid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "valid";
	$fdata["GoodName"] = "valid";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("validate_order","valid");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

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


	$tdatavalidate_order["valid"] = $fdata;
		$tdatavalidate_order[".searchableFields"][] = "valid";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("validate_order","total");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "total";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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


	$tdatavalidate_order["total"] = $fdata;
		$tdatavalidate_order[".searchableFields"][] = "total";
//	currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "currency";
	$fdata["GoodName"] = "currency";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("validate_order","currency");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "currency";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "currency";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatavalidate_order["currency"] = $fdata;
		$tdatavalidate_order[".searchableFields"][] = "currency";
//	review_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "review_member";
	$fdata["GoodName"] = "review_member";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("validate_order","review_member");
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


	$tdatavalidate_order["review_member"] = $fdata;
		$tdatavalidate_order[".searchableFields"][] = "review_member";
//	rating_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rating_member";
	$fdata["GoodName"] = "rating_member";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("validate_order","rating_member");
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


	$tdatavalidate_order["rating_member"] = $fdata;
		$tdatavalidate_order[".searchableFields"][] = "rating_member";
//	payment_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "payment_status";
	$fdata["GoodName"] = "payment_status";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("validate_order","payment_status");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "payment_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payment_status";

	
	
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
	$edata["LookupValues"][] = "paid";
	$edata["LookupValues"][] = "not_paid";

	
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


	$tdatavalidate_order["payment_status"] = $fdata;
		$tdatavalidate_order[".searchableFields"][] = "payment_status";
//	money_received
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "money_received";
	$fdata["GoodName"] = "money_received";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("validate_order","money_received");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "money_received";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "money_received";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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


	$tdatavalidate_order["money_received"] = $fdata;
		$tdatavalidate_order[".searchableFields"][] = "money_received";
//	change_money
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "change_money";
	$fdata["GoodName"] = "change_money";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("validate_order","change_money");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "change_money";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "change_money";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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


	$tdatavalidate_order["change_money"] = $fdata;
		$tdatavalidate_order[".searchableFields"][] = "change_money";


$tables_data["validate_order"]=&$tdatavalidate_order;
$field_labels["validate_order"] = &$fieldLabelsvalidate_order;
$fieldToolTips["validate_order"] = &$fieldToolTipsvalidate_order;
$placeHolders["validate_order"] = &$placeHoldersvalidate_order;
$page_titles["validate_order"] = &$pageTitlesvalidate_order;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["validate_order"] = array();
//	group_member_order_detail
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_order_detail";
		$detailsParam["dOriginalTable"] = "group_member_order_detail";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_order_detail";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_order_detail");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["validate_order"][$dIndex] = $detailsParam;

	
		$detailsTablesData["validate_order"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["validate_order"][$dIndex]["masterKeys"][]="group_member_order";

				$detailsTablesData["validate_order"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["validate_order"][$dIndex]["detailKeys"][]="group_member_order_id";

// tables which are master tables for current table (detail)
$masterTablesData["validate_order"] = array();



	
				$strOriginalDetailsTable="group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["validate_order"][0] = $masterParams;
				$masterTablesData["validate_order"][0]["masterKeys"] = array();
	$masterTablesData["validate_order"][0]["masterKeys"][]="group_id";
				$masterTablesData["validate_order"][0]["detailKeys"] = array();
	$masterTablesData["validate_order"][0]["detailKeys"][]="group_id";
		
	
				$strOriginalDetailsTable="group_member";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group_member";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group_member";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["validate_order"][1] = $masterParams;
				$masterTablesData["validate_order"][1]["masterKeys"] = array();
	$masterTablesData["validate_order"][1]["masterKeys"][]="group_member_id";
				$masterTablesData["validate_order"][1]["detailKeys"] = array();
	$masterTablesData["validate_order"][1]["detailKeys"][]="group_member_id";
		
	
				$strOriginalDetailsTable="personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["validate_order"][2] = $masterParams;
				$masterTablesData["validate_order"][2]["masterKeys"] = array();
	$masterTablesData["validate_order"][2]["masterKeys"][]="member_id";
				$masterTablesData["validate_order"][2]["detailKeys"] = array();
	$masterTablesData["validate_order"][2]["detailKeys"][]="member_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_validate_order()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_member_order,  	group_member_id,  	member_id,  	group_id,  	order_date,  	valid,  	total,  	currency,  	review_member,  	rating_member,  	payment_status,  	money_received,  	change_money";
$proto0["m_strFrom"] = "FROM group_member_order";
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
	"m_strName" => "group_member_order",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "validate_order"
));

$proto6["m_sql"] = "group_member_order";
$proto6["m_srcTableName"] = "validate_order";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_id",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "validate_order"
));

$proto8["m_sql"] = "group_member_id";
$proto8["m_srcTableName"] = "validate_order";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "validate_order"
));

$proto10["m_sql"] = "member_id";
$proto10["m_srcTableName"] = "validate_order";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "validate_order"
));

$proto12["m_sql"] = "group_id";
$proto12["m_srcTableName"] = "validate_order";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "order_date",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "validate_order"
));

$proto14["m_sql"] = "order_date";
$proto14["m_srcTableName"] = "validate_order";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "valid",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "validate_order"
));

$proto16["m_sql"] = "valid";
$proto16["m_srcTableName"] = "validate_order";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "validate_order"
));

$proto18["m_sql"] = "total";
$proto18["m_srcTableName"] = "validate_order";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "currency",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "validate_order"
));

$proto20["m_sql"] = "currency";
$proto20["m_srcTableName"] = "validate_order";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "review_member",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "validate_order"
));

$proto22["m_sql"] = "review_member";
$proto22["m_srcTableName"] = "validate_order";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rating_member",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "validate_order"
));

$proto24["m_sql"] = "rating_member";
$proto24["m_srcTableName"] = "validate_order";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "payment_status",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "validate_order"
));

$proto26["m_sql"] = "payment_status";
$proto26["m_srcTableName"] = "validate_order";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "money_received",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "validate_order"
));

$proto28["m_sql"] = "money_received";
$proto28["m_srcTableName"] = "validate_order";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "change_money",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "validate_order"
));

$proto30["m_sql"] = "change_money";
$proto30["m_srcTableName"] = "validate_order";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "group_member_order";
$proto33["m_srcTableName"] = "validate_order";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "group_member_order";
$proto33["m_columns"][] = "group_member_id";
$proto33["m_columns"][] = "member_id";
$proto33["m_columns"][] = "group_id";
$proto33["m_columns"][] = "order_date";
$proto33["m_columns"][] = "valid";
$proto33["m_columns"][] = "total";
$proto33["m_columns"][] = "currency";
$proto33["m_columns"][] = "review_member";
$proto33["m_columns"][] = "rating_member";
$proto33["m_columns"][] = "payment_status";
$proto33["m_columns"][] = "money_received";
$proto33["m_columns"][] = "change_money";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "group_member_order";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "validate_order";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="validate_order";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_validate_order = createSqlQuery_validate_order();


	
		;

													

$tdatavalidate_order[".sqlquery"] = $queryData_validate_order;



include_once(getabspath("include/validate_order_events.php"));
$tableEvents["validate_order"] = new eventclass_validate_order;
$tdatavalidate_order[".hasEvents"] = true;

?>