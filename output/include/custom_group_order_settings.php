<?php
$tdatacustom_group_order = array();
$tdatacustom_group_order[".searchableFields"] = array();
$tdatacustom_group_order[".ShortName"] = "custom_group_order";
$tdatacustom_group_order[".OwnerID"] = "";
$tdatacustom_group_order[".OriginalTable"] = "custom_group_order";


$tdatacustom_group_order[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacustom_group_order[".originalPagesByType"] = $tdatacustom_group_order[".pagesByType"];
$tdatacustom_group_order[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacustom_group_order[".originalPages"] = $tdatacustom_group_order[".pages"];
$tdatacustom_group_order[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacustom_group_order[".originalDefaultPages"] = $tdatacustom_group_order[".defaultPages"];

//	field labels
$fieldLabelscustom_group_order = array();
$fieldToolTipscustom_group_order = array();
$pageTitlescustom_group_order = array();
$placeHolderscustom_group_order = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustom_group_order["English"] = array();
	$fieldToolTipscustom_group_order["English"] = array();
	$placeHolderscustom_group_order["English"] = array();
	$pageTitlescustom_group_order["English"] = array();
	$fieldLabelscustom_group_order["English"]["group_member_order"] = "Group Member Order";
	$fieldToolTipscustom_group_order["English"]["group_member_order"] = "";
	$placeHolderscustom_group_order["English"]["group_member_order"] = "";
	$fieldLabelscustom_group_order["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipscustom_group_order["English"]["group_member_id"] = "";
	$placeHolderscustom_group_order["English"]["group_member_id"] = "";
	$fieldLabelscustom_group_order["English"]["member_id"] = "Member Id";
	$fieldToolTipscustom_group_order["English"]["member_id"] = "";
	$placeHolderscustom_group_order["English"]["member_id"] = "";
	$fieldLabelscustom_group_order["English"]["group_id"] = "Group Id";
	$fieldToolTipscustom_group_order["English"]["group_id"] = "";
	$placeHolderscustom_group_order["English"]["group_id"] = "";
	$fieldLabelscustom_group_order["English"]["order_date"] = "Order Date";
	$fieldToolTipscustom_group_order["English"]["order_date"] = "";
	$placeHolderscustom_group_order["English"]["order_date"] = "";
	$fieldLabelscustom_group_order["English"]["valid"] = "Valid";
	$fieldToolTipscustom_group_order["English"]["valid"] = "";
	$placeHolderscustom_group_order["English"]["valid"] = "";
	$fieldLabelscustom_group_order["English"]["total"] = "Total";
	$fieldToolTipscustom_group_order["English"]["total"] = "";
	$placeHolderscustom_group_order["English"]["total"] = "";
	$fieldLabelscustom_group_order["English"]["currency"] = "Currency";
	$fieldToolTipscustom_group_order["English"]["currency"] = "";
	$placeHolderscustom_group_order["English"]["currency"] = "";
	$fieldLabelscustom_group_order["English"]["review_member"] = "Review Member";
	$fieldToolTipscustom_group_order["English"]["review_member"] = "";
	$placeHolderscustom_group_order["English"]["review_member"] = "";
	$fieldLabelscustom_group_order["English"]["rating_member"] = "Rating Member";
	$fieldToolTipscustom_group_order["English"]["rating_member"] = "";
	$placeHolderscustom_group_order["English"]["rating_member"] = "";
	$fieldLabelscustom_group_order["English"]["payment_status"] = "Payment Status";
	$fieldToolTipscustom_group_order["English"]["payment_status"] = "";
	$placeHolderscustom_group_order["English"]["payment_status"] = "";
	$fieldLabelscustom_group_order["English"]["money_received"] = "Money Received";
	$fieldToolTipscustom_group_order["English"]["money_received"] = "";
	$placeHolderscustom_group_order["English"]["money_received"] = "";
	$fieldLabelscustom_group_order["English"]["change_money"] = "Change Money";
	$fieldToolTipscustom_group_order["English"]["change_money"] = "";
	$placeHolderscustom_group_order["English"]["change_money"] = "";
	$fieldLabelscustom_group_order["English"]["group_member_order_detail_id"] = "Group Member Order Detail Id";
	$fieldToolTipscustom_group_order["English"]["group_member_order_detail_id"] = "";
	$placeHolderscustom_group_order["English"]["group_member_order_detail_id"] = "";
	$fieldLabelscustom_group_order["English"]["group_member_order_id"] = "Group Member Order Id";
	$fieldToolTipscustom_group_order["English"]["group_member_order_id"] = "";
	$placeHolderscustom_group_order["English"]["group_member_order_id"] = "";
	$fieldLabelscustom_group_order["English"]["group_member_id1"] = "Group Member Id1";
	$fieldToolTipscustom_group_order["English"]["group_member_id1"] = "";
	$placeHolderscustom_group_order["English"]["group_member_id1"] = "";
	$fieldLabelscustom_group_order["English"]["member_id1"] = "Member Id1";
	$fieldToolTipscustom_group_order["English"]["member_id1"] = "";
	$placeHolderscustom_group_order["English"]["member_id1"] = "";
	$fieldLabelscustom_group_order["English"]["group_id1"] = "Group Id1";
	$fieldToolTipscustom_group_order["English"]["group_id1"] = "";
	$placeHolderscustom_group_order["English"]["group_id1"] = "";
	$fieldLabelscustom_group_order["English"]["group_product_id"] = "Group Product Id";
	$fieldToolTipscustom_group_order["English"]["group_product_id"] = "";
	$placeHolderscustom_group_order["English"]["group_product_id"] = "";
	$fieldLabelscustom_group_order["English"]["nominal"] = "Nominal";
	$fieldToolTipscustom_group_order["English"]["nominal"] = "";
	$placeHolderscustom_group_order["English"]["nominal"] = "";
	$fieldLabelscustom_group_order["English"]["quantity"] = "Quantity";
	$fieldToolTipscustom_group_order["English"]["quantity"] = "";
	$placeHolderscustom_group_order["English"]["quantity"] = "";
	$fieldLabelscustom_group_order["English"]["total1"] = "Total1";
	$fieldToolTipscustom_group_order["English"]["total1"] = "";
	$placeHolderscustom_group_order["English"]["total1"] = "";
	$fieldLabelscustom_group_order["English"]["progress"] = "Progress";
	$fieldToolTipscustom_group_order["English"]["progress"] = "";
	$placeHolderscustom_group_order["English"]["progress"] = "";
	if (count($fieldToolTipscustom_group_order["English"]))
		$tdatacustom_group_order[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelscustom_group_order["Indonesian"] = array();
	$fieldToolTipscustom_group_order["Indonesian"] = array();
	$placeHolderscustom_group_order["Indonesian"] = array();
	$pageTitlescustom_group_order["Indonesian"] = array();
	$fieldLabelscustom_group_order["Indonesian"]["group_member_order"] = "Group Member Order";
	$fieldToolTipscustom_group_order["Indonesian"]["group_member_order"] = "";
	$placeHolderscustom_group_order["Indonesian"]["group_member_order"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["group_member_id"] = "Group Member Id";
	$fieldToolTipscustom_group_order["Indonesian"]["group_member_id"] = "";
	$placeHolderscustom_group_order["Indonesian"]["group_member_id"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["member_id"] = "Member Id";
	$fieldToolTipscustom_group_order["Indonesian"]["member_id"] = "";
	$placeHolderscustom_group_order["Indonesian"]["member_id"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipscustom_group_order["Indonesian"]["group_id"] = "";
	$placeHolderscustom_group_order["Indonesian"]["group_id"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["order_date"] = "Order Date";
	$fieldToolTipscustom_group_order["Indonesian"]["order_date"] = "";
	$placeHolderscustom_group_order["Indonesian"]["order_date"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["valid"] = "Valid";
	$fieldToolTipscustom_group_order["Indonesian"]["valid"] = "";
	$placeHolderscustom_group_order["Indonesian"]["valid"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["total"] = "Total";
	$fieldToolTipscustom_group_order["Indonesian"]["total"] = "";
	$placeHolderscustom_group_order["Indonesian"]["total"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["currency"] = "Currency";
	$fieldToolTipscustom_group_order["Indonesian"]["currency"] = "";
	$placeHolderscustom_group_order["Indonesian"]["currency"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["review_member"] = "Review Member";
	$fieldToolTipscustom_group_order["Indonesian"]["review_member"] = "";
	$placeHolderscustom_group_order["Indonesian"]["review_member"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["rating_member"] = "Rating Member";
	$fieldToolTipscustom_group_order["Indonesian"]["rating_member"] = "";
	$placeHolderscustom_group_order["Indonesian"]["rating_member"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["payment_status"] = "Payment Status";
	$fieldToolTipscustom_group_order["Indonesian"]["payment_status"] = "";
	$placeHolderscustom_group_order["Indonesian"]["payment_status"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["money_received"] = "Money Received";
	$fieldToolTipscustom_group_order["Indonesian"]["money_received"] = "";
	$placeHolderscustom_group_order["Indonesian"]["money_received"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["change_money"] = "Change Money";
	$fieldToolTipscustom_group_order["Indonesian"]["change_money"] = "";
	$placeHolderscustom_group_order["Indonesian"]["change_money"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["group_member_order_detail_id"] = "Group Member Order Detail Id";
	$fieldToolTipscustom_group_order["Indonesian"]["group_member_order_detail_id"] = "";
	$placeHolderscustom_group_order["Indonesian"]["group_member_order_detail_id"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["group_member_order_id"] = "Group Member Order Id";
	$fieldToolTipscustom_group_order["Indonesian"]["group_member_order_id"] = "";
	$placeHolderscustom_group_order["Indonesian"]["group_member_order_id"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["group_member_id1"] = "Group Member Id1";
	$fieldToolTipscustom_group_order["Indonesian"]["group_member_id1"] = "";
	$placeHolderscustom_group_order["Indonesian"]["group_member_id1"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["member_id1"] = "Member Id1";
	$fieldToolTipscustom_group_order["Indonesian"]["member_id1"] = "";
	$placeHolderscustom_group_order["Indonesian"]["member_id1"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["group_id1"] = "Group Id1";
	$fieldToolTipscustom_group_order["Indonesian"]["group_id1"] = "";
	$placeHolderscustom_group_order["Indonesian"]["group_id1"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["group_product_id"] = "Group Product Id";
	$fieldToolTipscustom_group_order["Indonesian"]["group_product_id"] = "";
	$placeHolderscustom_group_order["Indonesian"]["group_product_id"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["nominal"] = "Nominal";
	$fieldToolTipscustom_group_order["Indonesian"]["nominal"] = "";
	$placeHolderscustom_group_order["Indonesian"]["nominal"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["quantity"] = "Quantity";
	$fieldToolTipscustom_group_order["Indonesian"]["quantity"] = "";
	$placeHolderscustom_group_order["Indonesian"]["quantity"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["total1"] = "Total1";
	$fieldToolTipscustom_group_order["Indonesian"]["total1"] = "";
	$placeHolderscustom_group_order["Indonesian"]["total1"] = "";
	$fieldLabelscustom_group_order["Indonesian"]["progress"] = "Progress";
	$fieldToolTipscustom_group_order["Indonesian"]["progress"] = "";
	$placeHolderscustom_group_order["Indonesian"]["progress"] = "";
	if (count($fieldToolTipscustom_group_order["Indonesian"]))
		$tdatacustom_group_order[".isUseToolTips"] = true;
}


	$tdatacustom_group_order[".NCSearch"] = true;



$tdatacustom_group_order[".shortTableName"] = "custom_group_order";
$tdatacustom_group_order[".nSecOptions"] = 0;

$tdatacustom_group_order[".mainTableOwnerID"] = "";
$tdatacustom_group_order[".entityType"] = 6;
$tdatacustom_group_order[".connId"] = "notif_basic1_at_localhost";


$tdatacustom_group_order[".strOriginalTableName"] = "custom_group_order";

	



$tdatacustom_group_order[".showAddInPopup"] = false;

$tdatacustom_group_order[".showEditInPopup"] = false;

$tdatacustom_group_order[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustom_group_order[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustom_group_order[".listAjax"] = false;
//	temporary
$tdatacustom_group_order[".listAjax"] = false;

	$tdatacustom_group_order[".audit"] = false;

	$tdatacustom_group_order[".locking"] = false;


$pages = $tdatacustom_group_order[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustom_group_order[".edit"] = true;
	$tdatacustom_group_order[".afterEditAction"] = 1;
	$tdatacustom_group_order[".closePopupAfterEdit"] = 1;
	$tdatacustom_group_order[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustom_group_order[".add"] = true;
$tdatacustom_group_order[".afterAddAction"] = 1;
$tdatacustom_group_order[".closePopupAfterAdd"] = 1;
$tdatacustom_group_order[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustom_group_order[".list"] = true;
}



$tdatacustom_group_order[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustom_group_order[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustom_group_order[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustom_group_order[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustom_group_order[".printFriendly"] = true;
}



$tdatacustom_group_order[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustom_group_order[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustom_group_order[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustom_group_order[".isUseAjaxSuggest"] = true;

$tdatacustom_group_order[".rowHighlite"] = true;





$tdatacustom_group_order[".ajaxCodeSnippetAdded"] = false;

$tdatacustom_group_order[".buttonsAdded"] = false;

$tdatacustom_group_order[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustom_group_order[".isUseTimeForSearch"] = false;


$tdatacustom_group_order[".badgeColor"] = "9ACD32";


$tdatacustom_group_order[".allSearchFields"] = array();
$tdatacustom_group_order[".filterFields"] = array();
$tdatacustom_group_order[".requiredSearchFields"] = array();

$tdatacustom_group_order[".googleLikeFields"] = array();
$tdatacustom_group_order[".googleLikeFields"][] = "group_member_order";
$tdatacustom_group_order[".googleLikeFields"][] = "group_member_id";
$tdatacustom_group_order[".googleLikeFields"][] = "member_id";
$tdatacustom_group_order[".googleLikeFields"][] = "group_id";
$tdatacustom_group_order[".googleLikeFields"][] = "order_date";
$tdatacustom_group_order[".googleLikeFields"][] = "valid";
$tdatacustom_group_order[".googleLikeFields"][] = "total";
$tdatacustom_group_order[".googleLikeFields"][] = "currency";
$tdatacustom_group_order[".googleLikeFields"][] = "review_member";
$tdatacustom_group_order[".googleLikeFields"][] = "rating_member";
$tdatacustom_group_order[".googleLikeFields"][] = "payment_status";
$tdatacustom_group_order[".googleLikeFields"][] = "money_received";
$tdatacustom_group_order[".googleLikeFields"][] = "change_money";
$tdatacustom_group_order[".googleLikeFields"][] = "group_member_order_detail_id";
$tdatacustom_group_order[".googleLikeFields"][] = "group_member_order_id";
$tdatacustom_group_order[".googleLikeFields"][] = "group_member_id1";
$tdatacustom_group_order[".googleLikeFields"][] = "member_id1";
$tdatacustom_group_order[".googleLikeFields"][] = "group_id1";
$tdatacustom_group_order[".googleLikeFields"][] = "group_product_id";
$tdatacustom_group_order[".googleLikeFields"][] = "nominal";
$tdatacustom_group_order[".googleLikeFields"][] = "quantity";
$tdatacustom_group_order[".googleLikeFields"][] = "total1";
$tdatacustom_group_order[".googleLikeFields"][] = "progress";




$tdatacustom_group_order[".printerPageOrientation"] = 0;
$tdatacustom_group_order[".nPrinterPageScale"] = 100;

$tdatacustom_group_order[".nPrinterSplitRecords"] = 40;

$tdatacustom_group_order[".geocodingEnabled"] = false;










$tdatacustom_group_order[".pageSize"] = 20;

$tdatacustom_group_order[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustom_group_order[".strOrderBy"] = $tstrOrderBy;

$tdatacustom_group_order[".orderindexes"] = array();


$tdatacustom_group_order[".sqlHead"] = "";
$tdatacustom_group_order[".sqlFrom"] = "";
$tdatacustom_group_order[".sqlWhereExpr"] = "";
$tdatacustom_group_order[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustom_group_order[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustom_group_order[".arrGroupsPerPage"] = $arrGPP;

$tdatacustom_group_order[".highlightSearchResults"] = true;

$tableKeyscustom_group_order = array();
$tableKeyscustom_group_order[] = "group_member_order";
$tdatacustom_group_order[".Keys"] = $tableKeyscustom_group_order;


$tdatacustom_group_order[".hideMobileList"] = array();




//	group_member_order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_member_order";
	$fdata["GoodName"] = "group_member_order";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","group_member_order");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_member_order";

	
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


	$tdatacustom_group_order["group_member_order"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "group_member_order";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","group_member_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_member_id";

	
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


	$tdatacustom_group_order["group_member_id"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","member_id");
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


	$tdatacustom_group_order["member_id"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "member_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","group_id");
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


	$tdatacustom_group_order["group_id"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "group_id";
//	order_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "order_date";
	$fdata["GoodName"] = "order_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","order_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "order_date";

	
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


	$tdatacustom_group_order["order_date"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "order_date";
//	valid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "valid";
	$fdata["GoodName"] = "valid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","valid");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "valid";

	
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


	$tdatacustom_group_order["valid"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "valid";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","total");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "total";

	
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


	$tdatacustom_group_order["total"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "total";
//	currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "currency";
	$fdata["GoodName"] = "currency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","currency");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "currency";

	
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


	$tdatacustom_group_order["currency"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "currency";
//	review_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "review_member";
	$fdata["GoodName"] = "review_member";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","review_member");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "review_member";

	
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


	$tdatacustom_group_order["review_member"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "review_member";
//	rating_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rating_member";
	$fdata["GoodName"] = "rating_member";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","rating_member");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "rating_member";

	
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


	$tdatacustom_group_order["rating_member"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "rating_member";
//	payment_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "payment_status";
	$fdata["GoodName"] = "payment_status";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","payment_status");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "payment_status";

	
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


	$tdatacustom_group_order["payment_status"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "payment_status";
//	money_received
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "money_received";
	$fdata["GoodName"] = "money_received";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","money_received");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "money_received";

	
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


	$tdatacustom_group_order["money_received"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "money_received";
//	change_money
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "change_money";
	$fdata["GoodName"] = "change_money";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","change_money");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "change_money";

	
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


	$tdatacustom_group_order["change_money"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "change_money";
//	group_member_order_detail_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "group_member_order_detail_id";
	$fdata["GoodName"] = "group_member_order_detail_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","group_member_order_detail_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_member_order_detail_id";

	
		$fdata["FullName"] = "group_member_order_detail_id";

	
	
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


	$tdatacustom_group_order["group_member_order_detail_id"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "group_member_order_detail_id";
//	group_member_order_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "group_member_order_id";
	$fdata["GoodName"] = "group_member_order_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","group_member_order_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_member_order_id";

	
		$fdata["FullName"] = "group_member_order_id";

	
	
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


	$tdatacustom_group_order["group_member_order_id"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "group_member_order_id";
//	group_member_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "group_member_id1";
	$fdata["GoodName"] = "group_member_id1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","group_member_id1");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_member_id";

	
		$fdata["FullName"] = "group_member_id1";

	
	
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


	$tdatacustom_group_order["group_member_id1"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "group_member_id1";
//	member_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "member_id1";
	$fdata["GoodName"] = "member_id1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","member_id1");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "member_id";

	
		$fdata["FullName"] = "member_id1";

	
	
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


	$tdatacustom_group_order["member_id1"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "member_id1";
//	group_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "group_id1";
	$fdata["GoodName"] = "group_id1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","group_id1");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_id";

	
		$fdata["FullName"] = "group_id1";

	
	
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


	$tdatacustom_group_order["group_id1"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "group_id1";
//	group_product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "group_product_id";
	$fdata["GoodName"] = "group_product_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","group_product_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_product_id";

	
		$fdata["FullName"] = "group_product_id";

	
	
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


	$tdatacustom_group_order["group_product_id"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "group_product_id";
//	nominal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "nominal";
	$fdata["GoodName"] = "nominal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","nominal");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "nominal";

	
		$fdata["FullName"] = "nominal";

	
	
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


	$tdatacustom_group_order["nominal"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "nominal";
//	quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "quantity";
	$fdata["GoodName"] = "quantity";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","quantity");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "quantity";

	
		$fdata["FullName"] = "quantity";

	
	
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


	$tdatacustom_group_order["quantity"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "quantity";
//	total1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "total1";
	$fdata["GoodName"] = "total1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","total1");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "total";

	
		$fdata["FullName"] = "total1";

	
	
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


	$tdatacustom_group_order["total1"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "total1";
//	progress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "progress";
	$fdata["GoodName"] = "progress";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_order","progress");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "progress";

	
		$fdata["FullName"] = "progress";

	
	
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


	$tdatacustom_group_order["progress"] = $fdata;
		$tdatacustom_group_order[".searchableFields"][] = "progress";


$tables_data["custom_group_order"]=&$tdatacustom_group_order;
$field_labels["custom_group_order"] = &$fieldLabelscustom_group_order;
$fieldToolTips["custom_group_order"] = &$fieldToolTipscustom_group_order;
$placeHolders["custom_group_order"] = &$placeHolderscustom_group_order;
$page_titles["custom_group_order"] = &$pageTitlescustom_group_order;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["custom_group_order"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["custom_group_order"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/custom_group_order_ops.php" ) );



	
		;

																							

$tdatacustom_group_order[".sqlquery"] = $queryData_custom_group_order;



include_once(getabspath("include/custom_group_order_events.php"));
$tableEvents["custom_group_order"] = new eventclass_custom_group_order;
$tdatacustom_group_order[".hasEvents"] = true;

?>