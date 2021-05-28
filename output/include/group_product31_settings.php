<?php
$tdatagroup_product31 = array();
$tdatagroup_product31[".searchableFields"] = array();
$tdatagroup_product31[".ShortName"] = "group_product31";
$tdatagroup_product31[".OwnerID"] = "";
$tdatagroup_product31[".OriginalTable"] = "group_product";


$tdatagroup_product31[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagroup_product31[".originalPagesByType"] = $tdatagroup_product31[".pagesByType"];
$tdatagroup_product31[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagroup_product31[".originalPages"] = $tdatagroup_product31[".pages"];
$tdatagroup_product31[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagroup_product31[".originalDefaultPages"] = $tdatagroup_product31[".defaultPages"];

//	field labels
$fieldLabelsgroup_product31 = array();
$fieldToolTipsgroup_product31 = array();
$pageTitlesgroup_product31 = array();
$placeHoldersgroup_product31 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_product31["English"] = array();
	$fieldToolTipsgroup_product31["English"] = array();
	$placeHoldersgroup_product31["English"] = array();
	$pageTitlesgroup_product31["English"] = array();
	$fieldLabelsgroup_product31["English"]["group_product_id"] = "Group Product Id";
	$fieldToolTipsgroup_product31["English"]["group_product_id"] = "";
	$placeHoldersgroup_product31["English"]["group_product_id"] = "";
	$fieldLabelsgroup_product31["English"]["group_id"] = "Group Id";
	$fieldToolTipsgroup_product31["English"]["group_id"] = "";
	$placeHoldersgroup_product31["English"]["group_id"] = "";
	$fieldLabelsgroup_product31["English"]["product_type"] = "Product Type";
	$fieldToolTipsgroup_product31["English"]["product_type"] = "";
	$placeHoldersgroup_product31["English"]["product_type"] = "";
	$fieldLabelsgroup_product31["English"]["product_name"] = "Product Name";
	$fieldToolTipsgroup_product31["English"]["product_name"] = "";
	$placeHoldersgroup_product31["English"]["product_name"] = "";
	$fieldLabelsgroup_product31["English"]["stock_type"] = "Stock Type";
	$fieldToolTipsgroup_product31["English"]["stock_type"] = "";
	$placeHoldersgroup_product31["English"]["stock_type"] = "";
	$fieldLabelsgroup_product31["English"]["stock"] = "Stock";
	$fieldToolTipsgroup_product31["English"]["stock"] = "";
	$placeHoldersgroup_product31["English"]["stock"] = "";
	$fieldLabelsgroup_product31["English"]["order_type"] = "Order Type";
	$fieldToolTipsgroup_product31["English"]["order_type"] = "";
	$placeHoldersgroup_product31["English"]["order_type"] = "";
	$fieldLabelsgroup_product31["English"]["price"] = "Price";
	$fieldToolTipsgroup_product31["English"]["price"] = "";
	$placeHoldersgroup_product31["English"]["price"] = "";
	$fieldLabelsgroup_product31["English"]["curency"] = "Curency";
	$fieldToolTipsgroup_product31["English"]["curency"] = "";
	$placeHoldersgroup_product31["English"]["curency"] = "";
	$fieldLabelsgroup_product31["English"]["image"] = "Image";
	$fieldToolTipsgroup_product31["English"]["image"] = "";
	$placeHoldersgroup_product31["English"]["image"] = "";
	if (count($fieldToolTipsgroup_product31["English"]))
		$tdatagroup_product31[".isUseToolTips"] = true;
}


	$tdatagroup_product31[".NCSearch"] = true;



$tdatagroup_product31[".shortTableName"] = "group_product31";
$tdatagroup_product31[".nSecOptions"] = 0;

$tdatagroup_product31[".mainTableOwnerID"] = "";
$tdatagroup_product31[".entityType"] = 1;
$tdatagroup_product31[".connId"] = "notif_basic1_at_localhost";


$tdatagroup_product31[".strOriginalTableName"] = "group_product";

	



$tdatagroup_product31[".showAddInPopup"] = false;

$tdatagroup_product31[".showEditInPopup"] = false;

$tdatagroup_product31[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_product31[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_product31[".listAjax"] = false;
//	temporary
$tdatagroup_product31[".listAjax"] = false;

	$tdatagroup_product31[".audit"] = false;

	$tdatagroup_product31[".locking"] = false;


$pages = $tdatagroup_product31[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_product31[".edit"] = true;
	$tdatagroup_product31[".afterEditAction"] = 1;
	$tdatagroup_product31[".closePopupAfterEdit"] = 1;
	$tdatagroup_product31[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_product31[".add"] = true;
$tdatagroup_product31[".afterAddAction"] = 1;
$tdatagroup_product31[".closePopupAfterAdd"] = 1;
$tdatagroup_product31[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_product31[".list"] = true;
}



$tdatagroup_product31[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup_product31[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_product31[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_product31[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_product31[".printFriendly"] = true;
}



$tdatagroup_product31[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_product31[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_product31[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_product31[".isUseAjaxSuggest"] = true;

$tdatagroup_product31[".rowHighlite"] = true;





$tdatagroup_product31[".ajaxCodeSnippetAdded"] = false;

$tdatagroup_product31[".buttonsAdded"] = false;

$tdatagroup_product31[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup_product31[".isUseTimeForSearch"] = false;


$tdatagroup_product31[".badgeColor"] = "6493EA";


$tdatagroup_product31[".allSearchFields"] = array();
$tdatagroup_product31[".filterFields"] = array();
$tdatagroup_product31[".requiredSearchFields"] = array();

$tdatagroup_product31[".googleLikeFields"] = array();
$tdatagroup_product31[".googleLikeFields"][] = "group_product_id";
$tdatagroup_product31[".googleLikeFields"][] = "group_id";
$tdatagroup_product31[".googleLikeFields"][] = "product_type";
$tdatagroup_product31[".googleLikeFields"][] = "product_name";
$tdatagroup_product31[".googleLikeFields"][] = "stock_type";
$tdatagroup_product31[".googleLikeFields"][] = "stock";
$tdatagroup_product31[".googleLikeFields"][] = "order_type";
$tdatagroup_product31[".googleLikeFields"][] = "price";
$tdatagroup_product31[".googleLikeFields"][] = "curency";
$tdatagroup_product31[".googleLikeFields"][] = "image";



$tdatagroup_product31[".tableType"] = "list";

$tdatagroup_product31[".printerPageOrientation"] = 0;
$tdatagroup_product31[".nPrinterPageScale"] = 100;

$tdatagroup_product31[".nPrinterSplitRecords"] = 40;

$tdatagroup_product31[".geocodingEnabled"] = false;










$tdatagroup_product31[".pageSize"] = 20;

$tdatagroup_product31[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_product31[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_product31[".orderindexes"] = array();


$tdatagroup_product31[".sqlHead"] = "SELECT group_product.group_product_id,  group_product.group_id,  group_product.product_type,  group_product.product_name,  group_product.stock_type,  group_product.stock,  group_product.order_type,  group_product.price,  group_product.curency,  group_product.image";
$tdatagroup_product31[".sqlFrom"] = "FROM group_product  INNER JOIN `group` ON `group`.group_id = group_product.group_id  INNER JOIN group_member_order ON `group`.group_id = group_member_order.group_id";
$tdatagroup_product31[".sqlWhereExpr"] = "";
$tdatagroup_product31[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_product31[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_product31[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_product31[".highlightSearchResults"] = true;

$tableKeysgroup_product31 = array();
$tableKeysgroup_product31[] = "group_product_id";
$tdatagroup_product31[".Keys"] = $tableKeysgroup_product31;


$tdatagroup_product31[".hideMobileList"] = array();




//	group_product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_product_id";
	$fdata["GoodName"] = "group_product_id";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product31","group_product_id");
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


	$tdatagroup_product31["group_product_id"] = $fdata;
		$tdatagroup_product31[".searchableFields"][] = "group_product_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product31","group_id");
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


	$tdatagroup_product31["group_id"] = $fdata;
		$tdatagroup_product31[".searchableFields"][] = "group_id";
//	product_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "product_type";
	$fdata["GoodName"] = "product_type";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product31","product_type");
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


	$tdatagroup_product31["product_type"] = $fdata;
		$tdatagroup_product31[".searchableFields"][] = "product_type";
//	product_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "product_name";
	$fdata["GoodName"] = "product_name";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product31","product_name");
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


	$tdatagroup_product31["product_name"] = $fdata;
		$tdatagroup_product31[".searchableFields"][] = "product_name";
//	stock_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "stock_type";
	$fdata["GoodName"] = "stock_type";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product31","stock_type");
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


	$tdatagroup_product31["stock_type"] = $fdata;
		$tdatagroup_product31[".searchableFields"][] = "stock_type";
//	stock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "stock";
	$fdata["GoodName"] = "stock";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product31","stock");
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


	$tdatagroup_product31["stock"] = $fdata;
		$tdatagroup_product31[".searchableFields"][] = "stock";
//	order_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "order_type";
	$fdata["GoodName"] = "order_type";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product31","order_type");
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


	$tdatagroup_product31["order_type"] = $fdata;
		$tdatagroup_product31[".searchableFields"][] = "order_type";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product31","price");
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


	$tdatagroup_product31["price"] = $fdata;
		$tdatagroup_product31[".searchableFields"][] = "price";
//	curency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "curency";
	$fdata["GoodName"] = "curency";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product31","curency");
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


	$tdatagroup_product31["curency"] = $fdata;
		$tdatagroup_product31[".searchableFields"][] = "curency";
//	image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "image";
	$fdata["GoodName"] = "image";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product31","image");
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


	$tdatagroup_product31["image"] = $fdata;
		$tdatagroup_product31[".searchableFields"][] = "image";


$tables_data["group_product31"]=&$tdatagroup_product31;
$field_labels["group_product31"] = &$fieldLabelsgroup_product31;
$fieldToolTips["group_product31"] = &$fieldToolTipsgroup_product31;
$placeHolders["group_product31"] = &$placeHoldersgroup_product31;
$page_titles["group_product31"] = &$pageTitlesgroup_product31;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_product31"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["group_product31"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group_product31()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_product.group_product_id,  group_product.group_id,  group_product.product_type,  group_product.product_name,  group_product.stock_type,  group_product.stock,  group_product.order_type,  group_product.price,  group_product.curency,  group_product.image";
$proto0["m_strFrom"] = "FROM group_product  INNER JOIN `group` ON `group`.group_id = group_product.group_id  INNER JOIN group_member_order ON `group`.group_id = group_member_order.group_id";
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
	"m_srcTableName" => "group_product31"
));

$proto6["m_sql"] = "group_product.group_product_id";
$proto6["m_srcTableName"] = "group_product31";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product31"
));

$proto8["m_sql"] = "group_product.group_id";
$proto8["m_srcTableName"] = "group_product31";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "product_type",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product31"
));

$proto10["m_sql"] = "group_product.product_type";
$proto10["m_srcTableName"] = "group_product31";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "product_name",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product31"
));

$proto12["m_sql"] = "group_product.product_name";
$proto12["m_srcTableName"] = "group_product31";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "stock_type",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product31"
));

$proto14["m_sql"] = "group_product.stock_type";
$proto14["m_srcTableName"] = "group_product31";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "stock",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product31"
));

$proto16["m_sql"] = "group_product.stock";
$proto16["m_srcTableName"] = "group_product31";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "order_type",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product31"
));

$proto18["m_sql"] = "group_product.order_type";
$proto18["m_srcTableName"] = "group_product31";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product31"
));

$proto20["m_sql"] = "group_product.price";
$proto20["m_srcTableName"] = "group_product31";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "curency",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product31"
));

$proto22["m_sql"] = "group_product.curency";
$proto22["m_srcTableName"] = "group_product31";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "image",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product31"
));

$proto24["m_sql"] = "group_product.image";
$proto24["m_srcTableName"] = "group_product31";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "group_product";
$proto27["m_srcTableName"] = "group_product31";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "group_product_id";
$proto27["m_columns"][] = "group_id";
$proto27["m_columns"][] = "product_type";
$proto27["m_columns"][] = "product_name";
$proto27["m_columns"][] = "stock_type";
$proto27["m_columns"][] = "stock";
$proto27["m_columns"][] = "order_type";
$proto27["m_columns"][] = "price";
$proto27["m_columns"][] = "curency";
$proto27["m_columns"][] = "image";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "group_product";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "group_product31";
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
												$proto30=array();
$proto30["m_link"] = "SQLL_INNERJOIN";
			$proto31=array();
$proto31["m_strName"] = "group";
$proto31["m_srcTableName"] = "group_product31";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "group_id";
$proto31["m_columns"][] = "group_name";
$proto31["m_columns"][] = "description";
$proto31["m_columns"][] = "logo";
$proto31["m_columns"][] = "token_type";
$proto31["m_columns"][] = "token_group";
$proto31["m_columns"][] = "membership_type";
$proto31["m_columns"][] = "business_type";
$proto31["m_columns"][] = "open_time";
$proto31["m_columns"][] = "close_time";
$proto31["m_columns"][] = "off_day";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "INNER JOIN `group` ON `group`.group_id = group_product.group_id";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "group_product31";
$proto32=array();
$proto32["m_sql"] = "`group`.group_id = group_product.group_id";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group",
	"m_srcTableName" => "group_product31"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= group_product.group_id";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_INNERJOIN";
			$proto35=array();
$proto35["m_strName"] = "group_member_order";
$proto35["m_srcTableName"] = "group_product31";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "group_member_order";
$proto35["m_columns"][] = "group_member_id";
$proto35["m_columns"][] = "member_id";
$proto35["m_columns"][] = "group_id";
$proto35["m_columns"][] = "order_date";
$proto35["m_columns"][] = "valid";
$proto35["m_columns"][] = "total";
$proto35["m_columns"][] = "currency";
$proto35["m_columns"][] = "review_member";
$proto35["m_columns"][] = "rating_member";
$proto35["m_columns"][] = "payment_status";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "INNER JOIN group_member_order ON `group`.group_id = group_member_order.group_id";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "group_product31";
$proto36=array();
$proto36["m_sql"] = "`group`.group_id = group_member_order.group_id";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group",
	"m_srcTableName" => "group_product31"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= group_member_order.group_id";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="group_product31";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group_product31 = createSqlQuery_group_product31();


	
		;

										

$tdatagroup_product31[".sqlquery"] = $queryData_group_product31;



$tableEvents["group_product31"] = new eventsBase;
$tdatagroup_product31[".hasEvents"] = false;

?>