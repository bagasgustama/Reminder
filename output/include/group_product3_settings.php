<?php
$tdatagroup_product3 = array();
$tdatagroup_product3[".searchableFields"] = array();
$tdatagroup_product3[".ShortName"] = "group_product3";
$tdatagroup_product3[".OwnerID"] = "";
$tdatagroup_product3[".OriginalTable"] = "group_product";


$tdatagroup_product3[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagroup_product3[".originalPagesByType"] = $tdatagroup_product3[".pagesByType"];
$tdatagroup_product3[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagroup_product3[".originalPages"] = $tdatagroup_product3[".pages"];
$tdatagroup_product3[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagroup_product3[".originalDefaultPages"] = $tdatagroup_product3[".defaultPages"];

//	field labels
$fieldLabelsgroup_product3 = array();
$fieldToolTipsgroup_product3 = array();
$pageTitlesgroup_product3 = array();
$placeHoldersgroup_product3 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_product3["English"] = array();
	$fieldToolTipsgroup_product3["English"] = array();
	$placeHoldersgroup_product3["English"] = array();
	$pageTitlesgroup_product3["English"] = array();
	$fieldLabelsgroup_product3["English"]["group_product_id"] = "Group Product Id";
	$fieldToolTipsgroup_product3["English"]["group_product_id"] = "";
	$placeHoldersgroup_product3["English"]["group_product_id"] = "";
	$fieldLabelsgroup_product3["English"]["group_id"] = "Group Id";
	$fieldToolTipsgroup_product3["English"]["group_id"] = "";
	$placeHoldersgroup_product3["English"]["group_id"] = "";
	$fieldLabelsgroup_product3["English"]["product_type"] = "Product Type";
	$fieldToolTipsgroup_product3["English"]["product_type"] = "";
	$placeHoldersgroup_product3["English"]["product_type"] = "";
	$fieldLabelsgroup_product3["English"]["product_name"] = "Product Name";
	$fieldToolTipsgroup_product3["English"]["product_name"] = "";
	$placeHoldersgroup_product3["English"]["product_name"] = "";
	$fieldLabelsgroup_product3["English"]["stock_type"] = "Stock Type";
	$fieldToolTipsgroup_product3["English"]["stock_type"] = "";
	$placeHoldersgroup_product3["English"]["stock_type"] = "";
	$fieldLabelsgroup_product3["English"]["stock"] = "Stock";
	$fieldToolTipsgroup_product3["English"]["stock"] = "";
	$placeHoldersgroup_product3["English"]["stock"] = "";
	$fieldLabelsgroup_product3["English"]["order_type"] = "Order Type";
	$fieldToolTipsgroup_product3["English"]["order_type"] = "";
	$placeHoldersgroup_product3["English"]["order_type"] = "";
	$fieldLabelsgroup_product3["English"]["price"] = "Price";
	$fieldToolTipsgroup_product3["English"]["price"] = "";
	$placeHoldersgroup_product3["English"]["price"] = "";
	$fieldLabelsgroup_product3["English"]["curency"] = "Curency";
	$fieldToolTipsgroup_product3["English"]["curency"] = "";
	$placeHoldersgroup_product3["English"]["curency"] = "";
	$fieldLabelsgroup_product3["English"]["image"] = "Image";
	$fieldToolTipsgroup_product3["English"]["image"] = "";
	$placeHoldersgroup_product3["English"]["image"] = "";
	$fieldLabelsgroup_product3["English"]["group_member_order_id"] = "Group Member Order Id";
	$fieldToolTipsgroup_product3["English"]["group_member_order_id"] = "";
	$placeHoldersgroup_product3["English"]["group_member_order_id"] = "";
	if (count($fieldToolTipsgroup_product3["English"]))
		$tdatagroup_product3[".isUseToolTips"] = true;
}


	$tdatagroup_product3[".NCSearch"] = true;



$tdatagroup_product3[".shortTableName"] = "group_product3";
$tdatagroup_product3[".nSecOptions"] = 0;

$tdatagroup_product3[".mainTableOwnerID"] = "";
$tdatagroup_product3[".entityType"] = 1;
$tdatagroup_product3[".connId"] = "notif_basic1_at_localhost";


$tdatagroup_product3[".strOriginalTableName"] = "group_product";

	



$tdatagroup_product3[".showAddInPopup"] = false;

$tdatagroup_product3[".showEditInPopup"] = false;

$tdatagroup_product3[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_product3[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_product3[".listAjax"] = false;
//	temporary
$tdatagroup_product3[".listAjax"] = false;

	$tdatagroup_product3[".audit"] = false;

	$tdatagroup_product3[".locking"] = false;


$pages = $tdatagroup_product3[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_product3[".edit"] = true;
	$tdatagroup_product3[".afterEditAction"] = 1;
	$tdatagroup_product3[".closePopupAfterEdit"] = 1;
	$tdatagroup_product3[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_product3[".add"] = true;
$tdatagroup_product3[".afterAddAction"] = 1;
$tdatagroup_product3[".closePopupAfterAdd"] = 1;
$tdatagroup_product3[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_product3[".list"] = true;
}



$tdatagroup_product3[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup_product3[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_product3[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_product3[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_product3[".printFriendly"] = true;
}



$tdatagroup_product3[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_product3[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_product3[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_product3[".isUseAjaxSuggest"] = true;

$tdatagroup_product3[".rowHighlite"] = true;





$tdatagroup_product3[".ajaxCodeSnippetAdded"] = false;

$tdatagroup_product3[".buttonsAdded"] = false;

$tdatagroup_product3[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup_product3[".isUseTimeForSearch"] = false;


$tdatagroup_product3[".badgeColor"] = "E67349";


$tdatagroup_product3[".allSearchFields"] = array();
$tdatagroup_product3[".filterFields"] = array();
$tdatagroup_product3[".requiredSearchFields"] = array();

$tdatagroup_product3[".googleLikeFields"] = array();
$tdatagroup_product3[".googleLikeFields"][] = "group_product_id";
$tdatagroup_product3[".googleLikeFields"][] = "group_id";
$tdatagroup_product3[".googleLikeFields"][] = "product_type";
$tdatagroup_product3[".googleLikeFields"][] = "product_name";
$tdatagroup_product3[".googleLikeFields"][] = "stock_type";
$tdatagroup_product3[".googleLikeFields"][] = "stock";
$tdatagroup_product3[".googleLikeFields"][] = "order_type";
$tdatagroup_product3[".googleLikeFields"][] = "price";
$tdatagroup_product3[".googleLikeFields"][] = "curency";
$tdatagroup_product3[".googleLikeFields"][] = "image";
$tdatagroup_product3[".googleLikeFields"][] = "group_member_order_id";



$tdatagroup_product3[".tableType"] = "list";

$tdatagroup_product3[".printerPageOrientation"] = 0;
$tdatagroup_product3[".nPrinterPageScale"] = 100;

$tdatagroup_product3[".nPrinterSplitRecords"] = 40;

$tdatagroup_product3[".geocodingEnabled"] = false;










$tdatagroup_product3[".pageSize"] = 20;

$tdatagroup_product3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_product3[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_product3[".orderindexes"] = array();


$tdatagroup_product3[".sqlHead"] = "SELECT group_product.group_product_id,  group_product.group_id,  group_product.product_type,  group_product.product_name,  group_product.stock_type,  group_product.stock,  group_product.order_type,  group_product.price,  group_product.curency,  group_product.image,  group_member_order_detail.group_member_order_id";
$tdatagroup_product3[".sqlFrom"] = "FROM group_product  LEFT OUTER JOIN group_member_order_detail ON group_product.group_product_id = group_member_order_detail.group_product_id";
$tdatagroup_product3[".sqlWhereExpr"] = "";
$tdatagroup_product3[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_product3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_product3[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_product3[".highlightSearchResults"] = true;

$tableKeysgroup_product3 = array();
$tableKeysgroup_product3[] = "group_product_id";
$tdatagroup_product3[".Keys"] = $tableKeysgroup_product3;


$tdatagroup_product3[".hideMobileList"] = array();




//	group_product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_product_id";
	$fdata["GoodName"] = "group_product_id";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product3","group_product_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_product_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_product.group_product_id";

	
	
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


	$tdatagroup_product3["group_product_id"] = $fdata;
		$tdatagroup_product3[".searchableFields"][] = "group_product_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product3","group_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_product.group_id";

	
	
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


	$tdatagroup_product3["group_id"] = $fdata;
		$tdatagroup_product3[".searchableFields"][] = "group_id";
//	product_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "product_type";
	$fdata["GoodName"] = "product_type";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product3","product_type");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "product_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_product.product_type";

	
	
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
	$edata["LookupTable"] = "product_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_product_type";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "product_type";

	

	
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


	$tdatagroup_product3["product_type"] = $fdata;
		$tdatagroup_product3[".searchableFields"][] = "product_type";
//	product_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "product_name";
	$fdata["GoodName"] = "product_name";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product3","product_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "product_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_product.product_name";

	
	
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


	$tdatagroup_product3["product_name"] = $fdata;
		$tdatagroup_product3[".searchableFields"][] = "product_name";
//	stock_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "stock_type";
	$fdata["GoodName"] = "stock_type";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product3","stock_type");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "stock_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_product.stock_type";

	
	
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
	$edata["LookupTable"] = "stock_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "stock_type_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "stock_type";

	

	
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


	$tdatagroup_product3["stock_type"] = $fdata;
		$tdatagroup_product3[".searchableFields"][] = "stock_type";
//	stock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "stock";
	$fdata["GoodName"] = "stock";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product3","stock");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "stock";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_product.stock";

	
	
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


	$tdatagroup_product3["stock"] = $fdata;
		$tdatagroup_product3[".searchableFields"][] = "stock";
//	order_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "order_type";
	$fdata["GoodName"] = "order_type";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product3","order_type");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "order_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_product.order_type";

	
	
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
	$edata["LookupTable"] = "order_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "order_type_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "order_type";

	

	
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


	$tdatagroup_product3["order_type"] = $fdata;
		$tdatagroup_product3[".searchableFields"][] = "order_type";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product3","price");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "price";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_product.price";

	
	
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


	$tdatagroup_product3["price"] = $fdata;
		$tdatagroup_product3[".searchableFields"][] = "price";
//	curency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "curency";
	$fdata["GoodName"] = "curency";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product3","curency");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "curency";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_product.curency";

	
	
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


	$tdatagroup_product3["curency"] = $fdata;
		$tdatagroup_product3[".searchableFields"][] = "curency";
//	image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "image";
	$fdata["GoodName"] = "image";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product3","image");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "image";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_product.image";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatagroup_product3["image"] = $fdata;
		$tdatagroup_product3[".searchableFields"][] = "image";
//	group_member_order_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "group_member_order_id";
	$fdata["GoodName"] = "group_member_order_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("group_product3","group_member_order_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_member_order_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_order_detail.group_member_order_id";

	
	
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


	$tdatagroup_product3["group_member_order_id"] = $fdata;
		$tdatagroup_product3[".searchableFields"][] = "group_member_order_id";


$tables_data["group_product3"]=&$tdatagroup_product3;
$field_labels["group_product3"] = &$fieldLabelsgroup_product3;
$fieldToolTips["group_product3"] = &$fieldToolTipsgroup_product3;
$placeHolders["group_product3"] = &$placeHoldersgroup_product3;
$page_titles["group_product3"] = &$pageTitlesgroup_product3;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_product3"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["group_product3"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group_product3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_product.group_product_id,  group_product.group_id,  group_product.product_type,  group_product.product_name,  group_product.stock_type,  group_product.stock,  group_product.order_type,  group_product.price,  group_product.curency,  group_product.image,  group_member_order_detail.group_member_order_id";
$proto0["m_strFrom"] = "FROM group_product  LEFT OUTER JOIN group_member_order_detail ON group_product.group_product_id = group_member_order_detail.group_product_id";
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
	"m_strName" => "group_product_id",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product3"
));

$proto6["m_sql"] = "group_product.group_product_id";
$proto6["m_srcTableName"] = "group_product3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product3"
));

$proto8["m_sql"] = "group_product.group_id";
$proto8["m_srcTableName"] = "group_product3";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "product_type",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product3"
));

$proto10["m_sql"] = "group_product.product_type";
$proto10["m_srcTableName"] = "group_product3";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "product_name",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product3"
));

$proto12["m_sql"] = "group_product.product_name";
$proto12["m_srcTableName"] = "group_product3";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "stock_type",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product3"
));

$proto14["m_sql"] = "group_product.stock_type";
$proto14["m_srcTableName"] = "group_product3";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "stock",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product3"
));

$proto16["m_sql"] = "group_product.stock";
$proto16["m_srcTableName"] = "group_product3";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "order_type",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product3"
));

$proto18["m_sql"] = "group_product.order_type";
$proto18["m_srcTableName"] = "group_product3";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product3"
));

$proto20["m_sql"] = "group_product.price";
$proto20["m_srcTableName"] = "group_product3";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "curency",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product3"
));

$proto22["m_sql"] = "group_product.curency";
$proto22["m_srcTableName"] = "group_product3";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "image",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product3"
));

$proto24["m_sql"] = "group_product.image";
$proto24["m_srcTableName"] = "group_product3";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_order_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "group_product3"
));

$proto26["m_sql"] = "group_member_order_detail.group_member_order_id";
$proto26["m_srcTableName"] = "group_product3";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "group_product";
$proto29["m_srcTableName"] = "group_product3";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "group_product_id";
$proto29["m_columns"][] = "group_id";
$proto29["m_columns"][] = "product_type";
$proto29["m_columns"][] = "product_name";
$proto29["m_columns"][] = "stock_type";
$proto29["m_columns"][] = "stock";
$proto29["m_columns"][] = "order_type";
$proto29["m_columns"][] = "price";
$proto29["m_columns"][] = "curency";
$proto29["m_columns"][] = "image";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "group_product";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "group_product3";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_LEFTJOIN";
			$proto33=array();
$proto33["m_strName"] = "group_member_order_detail";
$proto33["m_srcTableName"] = "group_product3";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "group_member_order_detail_id";
$proto33["m_columns"][] = "group_member_order_id";
$proto33["m_columns"][] = "group_member_id";
$proto33["m_columns"][] = "member_id";
$proto33["m_columns"][] = "group_id";
$proto33["m_columns"][] = "group_product_id";
$proto33["m_columns"][] = "nominal";
$proto33["m_columns"][] = "quantity";
$proto33["m_columns"][] = "total";
$proto33["m_columns"][] = "progress";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "LEFT OUTER JOIN group_member_order_detail ON group_product.group_product_id = group_member_order_detail.group_product_id";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "group_product3";
$proto34=array();
$proto34["m_sql"] = "group_product.group_product_id = group_member_order_detail.group_product_id";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "group_product_id",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product3"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= group_member_order_detail.group_product_id";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="group_product3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group_product3 = createSqlQuery_group_product3();


	
		;

											

$tdatagroup_product3[".sqlquery"] = $queryData_group_product3;



$tableEvents["group_product3"] = new eventsBase;
$tdatagroup_product3[".hasEvents"] = false;

?>