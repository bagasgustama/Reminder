<?php
$tdatacustom_group_product = array();
$tdatacustom_group_product[".searchableFields"] = array();
$tdatacustom_group_product[".ShortName"] = "custom_group_product";
$tdatacustom_group_product[".OwnerID"] = "";
$tdatacustom_group_product[".OriginalTable"] = "custom_group_product";


$tdatacustom_group_product[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacustom_group_product[".originalPagesByType"] = $tdatacustom_group_product[".pagesByType"];
$tdatacustom_group_product[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacustom_group_product[".originalPages"] = $tdatacustom_group_product[".pages"];
$tdatacustom_group_product[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacustom_group_product[".originalDefaultPages"] = $tdatacustom_group_product[".defaultPages"];

//	field labels
$fieldLabelscustom_group_product = array();
$fieldToolTipscustom_group_product = array();
$pageTitlescustom_group_product = array();
$placeHolderscustom_group_product = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustom_group_product["English"] = array();
	$fieldToolTipscustom_group_product["English"] = array();
	$placeHolderscustom_group_product["English"] = array();
	$pageTitlescustom_group_product["English"] = array();
	$fieldLabelscustom_group_product["English"]["group_product_id"] = "Group Product Id";
	$fieldToolTipscustom_group_product["English"]["group_product_id"] = "";
	$placeHolderscustom_group_product["English"]["group_product_id"] = "";
	$fieldLabelscustom_group_product["English"]["group_id"] = "Group Id";
	$fieldToolTipscustom_group_product["English"]["group_id"] = "";
	$placeHolderscustom_group_product["English"]["group_id"] = "";
	$fieldLabelscustom_group_product["English"]["product_type"] = "Product Type";
	$fieldToolTipscustom_group_product["English"]["product_type"] = "";
	$placeHolderscustom_group_product["English"]["product_type"] = "";
	$fieldLabelscustom_group_product["English"]["product_name"] = "Product Name";
	$fieldToolTipscustom_group_product["English"]["product_name"] = "";
	$placeHolderscustom_group_product["English"]["product_name"] = "";
	$fieldLabelscustom_group_product["English"]["stock_type"] = "Stock Type";
	$fieldToolTipscustom_group_product["English"]["stock_type"] = "";
	$placeHolderscustom_group_product["English"]["stock_type"] = "";
	$fieldLabelscustom_group_product["English"]["stock"] = "Stock";
	$fieldToolTipscustom_group_product["English"]["stock"] = "";
	$placeHolderscustom_group_product["English"]["stock"] = "";
	$fieldLabelscustom_group_product["English"]["order_type"] = "Order Type";
	$fieldToolTipscustom_group_product["English"]["order_type"] = "";
	$placeHolderscustom_group_product["English"]["order_type"] = "";
	$fieldLabelscustom_group_product["English"]["price"] = "Price";
	$fieldToolTipscustom_group_product["English"]["price"] = "";
	$placeHolderscustom_group_product["English"]["price"] = "";
	$fieldLabelscustom_group_product["English"]["curency"] = "Curency";
	$fieldToolTipscustom_group_product["English"]["curency"] = "";
	$placeHolderscustom_group_product["English"]["curency"] = "";
	$fieldLabelscustom_group_product["English"]["image"] = "Image";
	$fieldToolTipscustom_group_product["English"]["image"] = "";
	$placeHolderscustom_group_product["English"]["image"] = "";
	if (count($fieldToolTipscustom_group_product["English"]))
		$tdatacustom_group_product[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelscustom_group_product["Indonesian"] = array();
	$fieldToolTipscustom_group_product["Indonesian"] = array();
	$placeHolderscustom_group_product["Indonesian"] = array();
	$pageTitlescustom_group_product["Indonesian"] = array();
	$fieldLabelscustom_group_product["Indonesian"]["group_product_id"] = "Group Product Id";
	$fieldToolTipscustom_group_product["Indonesian"]["group_product_id"] = "";
	$placeHolderscustom_group_product["Indonesian"]["group_product_id"] = "";
	$fieldLabelscustom_group_product["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipscustom_group_product["Indonesian"]["group_id"] = "";
	$placeHolderscustom_group_product["Indonesian"]["group_id"] = "";
	$fieldLabelscustom_group_product["Indonesian"]["product_type"] = "Product Type";
	$fieldToolTipscustom_group_product["Indonesian"]["product_type"] = "";
	$placeHolderscustom_group_product["Indonesian"]["product_type"] = "";
	$fieldLabelscustom_group_product["Indonesian"]["product_name"] = "Product Name";
	$fieldToolTipscustom_group_product["Indonesian"]["product_name"] = "";
	$placeHolderscustom_group_product["Indonesian"]["product_name"] = "";
	$fieldLabelscustom_group_product["Indonesian"]["stock_type"] = "Stock Type";
	$fieldToolTipscustom_group_product["Indonesian"]["stock_type"] = "";
	$placeHolderscustom_group_product["Indonesian"]["stock_type"] = "";
	$fieldLabelscustom_group_product["Indonesian"]["stock"] = "Stock";
	$fieldToolTipscustom_group_product["Indonesian"]["stock"] = "";
	$placeHolderscustom_group_product["Indonesian"]["stock"] = "";
	$fieldLabelscustom_group_product["Indonesian"]["order_type"] = "Order Type";
	$fieldToolTipscustom_group_product["Indonesian"]["order_type"] = "";
	$placeHolderscustom_group_product["Indonesian"]["order_type"] = "";
	$fieldLabelscustom_group_product["Indonesian"]["price"] = "Price";
	$fieldToolTipscustom_group_product["Indonesian"]["price"] = "";
	$placeHolderscustom_group_product["Indonesian"]["price"] = "";
	$fieldLabelscustom_group_product["Indonesian"]["curency"] = "Curency";
	$fieldToolTipscustom_group_product["Indonesian"]["curency"] = "";
	$placeHolderscustom_group_product["Indonesian"]["curency"] = "";
	$fieldLabelscustom_group_product["Indonesian"]["image"] = "Image";
	$fieldToolTipscustom_group_product["Indonesian"]["image"] = "";
	$placeHolderscustom_group_product["Indonesian"]["image"] = "";
	if (count($fieldToolTipscustom_group_product["Indonesian"]))
		$tdatacustom_group_product[".isUseToolTips"] = true;
}


	$tdatacustom_group_product[".NCSearch"] = true;



$tdatacustom_group_product[".shortTableName"] = "custom_group_product";
$tdatacustom_group_product[".nSecOptions"] = 0;

$tdatacustom_group_product[".mainTableOwnerID"] = "";
$tdatacustom_group_product[".entityType"] = 6;
$tdatacustom_group_product[".connId"] = "notif_basic1_at_localhost";


$tdatacustom_group_product[".strOriginalTableName"] = "custom_group_product";

	



$tdatacustom_group_product[".showAddInPopup"] = false;

$tdatacustom_group_product[".showEditInPopup"] = false;

$tdatacustom_group_product[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustom_group_product[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustom_group_product[".listAjax"] = false;
//	temporary
$tdatacustom_group_product[".listAjax"] = false;

	$tdatacustom_group_product[".audit"] = false;

	$tdatacustom_group_product[".locking"] = false;


$pages = $tdatacustom_group_product[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustom_group_product[".edit"] = true;
	$tdatacustom_group_product[".afterEditAction"] = 1;
	$tdatacustom_group_product[".closePopupAfterEdit"] = 1;
	$tdatacustom_group_product[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustom_group_product[".add"] = true;
$tdatacustom_group_product[".afterAddAction"] = 1;
$tdatacustom_group_product[".closePopupAfterAdd"] = 1;
$tdatacustom_group_product[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustom_group_product[".list"] = true;
}



$tdatacustom_group_product[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustom_group_product[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustom_group_product[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustom_group_product[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustom_group_product[".printFriendly"] = true;
}



$tdatacustom_group_product[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustom_group_product[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustom_group_product[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustom_group_product[".isUseAjaxSuggest"] = true;

$tdatacustom_group_product[".rowHighlite"] = true;





$tdatacustom_group_product[".ajaxCodeSnippetAdded"] = false;

$tdatacustom_group_product[".buttonsAdded"] = false;

$tdatacustom_group_product[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustom_group_product[".isUseTimeForSearch"] = false;


$tdatacustom_group_product[".badgeColor"] = "778899";


$tdatacustom_group_product[".allSearchFields"] = array();
$tdatacustom_group_product[".filterFields"] = array();
$tdatacustom_group_product[".requiredSearchFields"] = array();

$tdatacustom_group_product[".googleLikeFields"] = array();
$tdatacustom_group_product[".googleLikeFields"][] = "group_product_id";
$tdatacustom_group_product[".googleLikeFields"][] = "group_id";
$tdatacustom_group_product[".googleLikeFields"][] = "product_type";
$tdatacustom_group_product[".googleLikeFields"][] = "product_name";
$tdatacustom_group_product[".googleLikeFields"][] = "stock_type";
$tdatacustom_group_product[".googleLikeFields"][] = "stock";
$tdatacustom_group_product[".googleLikeFields"][] = "order_type";
$tdatacustom_group_product[".googleLikeFields"][] = "price";
$tdatacustom_group_product[".googleLikeFields"][] = "curency";
$tdatacustom_group_product[".googleLikeFields"][] = "image";




$tdatacustom_group_product[".printerPageOrientation"] = 0;
$tdatacustom_group_product[".nPrinterPageScale"] = 100;

$tdatacustom_group_product[".nPrinterSplitRecords"] = 40;

$tdatacustom_group_product[".geocodingEnabled"] = false;










$tdatacustom_group_product[".pageSize"] = 20;

$tdatacustom_group_product[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustom_group_product[".strOrderBy"] = $tstrOrderBy;

$tdatacustom_group_product[".orderindexes"] = array();


$tdatacustom_group_product[".sqlHead"] = "";
$tdatacustom_group_product[".sqlFrom"] = "";
$tdatacustom_group_product[".sqlWhereExpr"] = "";
$tdatacustom_group_product[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustom_group_product[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustom_group_product[".arrGroupsPerPage"] = $arrGPP;

$tdatacustom_group_product[".highlightSearchResults"] = true;

$tableKeyscustom_group_product = array();
$tdatacustom_group_product[".Keys"] = $tableKeyscustom_group_product;


$tdatacustom_group_product[".hideMobileList"] = array();




//	group_product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_product_id";
	$fdata["GoodName"] = "group_product_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_product","group_product_id");
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


	$tdatacustom_group_product["group_product_id"] = $fdata;
		$tdatacustom_group_product[".searchableFields"][] = "group_product_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_product","group_id");
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


	$tdatacustom_group_product["group_id"] = $fdata;
		$tdatacustom_group_product[".searchableFields"][] = "group_id";
//	product_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "product_type";
	$fdata["GoodName"] = "product_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_product","product_type");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "product_type";

	
		$fdata["FullName"] = "product_type";

	
	
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


	$tdatacustom_group_product["product_type"] = $fdata;
		$tdatacustom_group_product[".searchableFields"][] = "product_type";
//	product_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "product_name";
	$fdata["GoodName"] = "product_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_product","product_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "product_name";

	
		$fdata["FullName"] = "product_name";

	
	
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


	$tdatacustom_group_product["product_name"] = $fdata;
		$tdatacustom_group_product[".searchableFields"][] = "product_name";
//	stock_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "stock_type";
	$fdata["GoodName"] = "stock_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_product","stock_type");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "stock_type";

	
		$fdata["FullName"] = "stock_type";

	
	
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


	$tdatacustom_group_product["stock_type"] = $fdata;
		$tdatacustom_group_product[".searchableFields"][] = "stock_type";
//	stock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "stock";
	$fdata["GoodName"] = "stock";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_product","stock");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "stock";

	
		$fdata["FullName"] = "stock";

	
	
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


	$tdatacustom_group_product["stock"] = $fdata;
		$tdatacustom_group_product[".searchableFields"][] = "stock";
//	order_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "order_type";
	$fdata["GoodName"] = "order_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_product","order_type");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "order_type";

	
		$fdata["FullName"] = "order_type";

	
	
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


	$tdatacustom_group_product["order_type"] = $fdata;
		$tdatacustom_group_product[".searchableFields"][] = "order_type";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_product","price");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "price";

	
		$fdata["FullName"] = "price";

	
	
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


	$tdatacustom_group_product["price"] = $fdata;
		$tdatacustom_group_product[".searchableFields"][] = "price";
//	curency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "curency";
	$fdata["GoodName"] = "curency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_product","curency");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "curency";

	
		$fdata["FullName"] = "curency";

	
	
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


	$tdatacustom_group_product["curency"] = $fdata;
		$tdatacustom_group_product[".searchableFields"][] = "curency";
//	image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "image";
	$fdata["GoodName"] = "image";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("custom_group_product","image");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "image";

	
		$fdata["FullName"] = "image";

	
	
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


	$tdatacustom_group_product["image"] = $fdata;
		$tdatacustom_group_product[".searchableFields"][] = "image";


$tables_data["custom_group_product"]=&$tdatacustom_group_product;
$field_labels["custom_group_product"] = &$fieldLabelscustom_group_product;
$fieldToolTips["custom_group_product"] = &$fieldToolTipscustom_group_product;
$placeHolders["custom_group_product"] = &$placeHolderscustom_group_product;
$page_titles["custom_group_product"] = &$pageTitlescustom_group_product;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["custom_group_product"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["custom_group_product"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/custom_group_product_ops.php" ) );



	
		;

										

$tdatacustom_group_product[".sqlquery"] = $queryData_custom_group_product;



include_once(getabspath("include/custom_group_product_events.php"));
$tableEvents["custom_group_product"] = new eventclass_custom_group_product;
$tdatacustom_group_product[".hasEvents"] = true;

?>