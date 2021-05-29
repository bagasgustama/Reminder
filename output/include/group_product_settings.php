<?php
$tdatagroup_product = array();
$tdatagroup_product[".searchableFields"] = array();
$tdatagroup_product[".ShortName"] = "group_product";
$tdatagroup_product[".OwnerID"] = "";
$tdatagroup_product[".OriginalTable"] = "group_product";


$tdatagroup_product[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagroup_product[".originalPagesByType"] = $tdatagroup_product[".pagesByType"];
$tdatagroup_product[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagroup_product[".originalPages"] = $tdatagroup_product[".pages"];
$tdatagroup_product[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagroup_product[".originalDefaultPages"] = $tdatagroup_product[".defaultPages"];

//	field labels
$fieldLabelsgroup_product = array();
$fieldToolTipsgroup_product = array();
$pageTitlesgroup_product = array();
$placeHoldersgroup_product = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_product["English"] = array();
	$fieldToolTipsgroup_product["English"] = array();
	$placeHoldersgroup_product["English"] = array();
	$pageTitlesgroup_product["English"] = array();
	$fieldLabelsgroup_product["English"]["group_product_id"] = "Product Id";
	$fieldToolTipsgroup_product["English"]["group_product_id"] = "";
	$placeHoldersgroup_product["English"]["group_product_id"] = "";
	$fieldLabelsgroup_product["English"]["group_id"] = "Group Name";
	$fieldToolTipsgroup_product["English"]["group_id"] = "";
	$placeHoldersgroup_product["English"]["group_id"] = "";
	$fieldLabelsgroup_product["English"]["product_type"] = "Product Type";
	$fieldToolTipsgroup_product["English"]["product_type"] = "";
	$placeHoldersgroup_product["English"]["product_type"] = "";
	$fieldLabelsgroup_product["English"]["product_name"] = "Product Name";
	$fieldToolTipsgroup_product["English"]["product_name"] = "";
	$placeHoldersgroup_product["English"]["product_name"] = "";
	$fieldLabelsgroup_product["English"]["stock_type"] = "Stock Type";
	$fieldToolTipsgroup_product["English"]["stock_type"] = "";
	$placeHoldersgroup_product["English"]["stock_type"] = "";
	$fieldLabelsgroup_product["English"]["stock"] = "Stock";
	$fieldToolTipsgroup_product["English"]["stock"] = "";
	$placeHoldersgroup_product["English"]["stock"] = "";
	$fieldLabelsgroup_product["English"]["order_type"] = "Order Type";
	$fieldToolTipsgroup_product["English"]["order_type"] = "";
	$placeHoldersgroup_product["English"]["order_type"] = "";
	$fieldLabelsgroup_product["English"]["price"] = "Price";
	$fieldToolTipsgroup_product["English"]["price"] = "";
	$placeHoldersgroup_product["English"]["price"] = "";
	$fieldLabelsgroup_product["English"]["curency"] = "Curency";
	$fieldToolTipsgroup_product["English"]["curency"] = "";
	$placeHoldersgroup_product["English"]["curency"] = "";
	$fieldLabelsgroup_product["English"]["image"] = "Image";
	$fieldToolTipsgroup_product["English"]["image"] = "";
	$placeHoldersgroup_product["English"]["image"] = "";
	if (count($fieldToolTipsgroup_product["English"]))
		$tdatagroup_product[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsgroup_product["Indonesian"] = array();
	$fieldToolTipsgroup_product["Indonesian"] = array();
	$placeHoldersgroup_product["Indonesian"] = array();
	$pageTitlesgroup_product["Indonesian"] = array();
	$fieldLabelsgroup_product["Indonesian"]["group_product_id"] = "Product Id";
	$fieldToolTipsgroup_product["Indonesian"]["group_product_id"] = "";
	$placeHoldersgroup_product["Indonesian"]["group_product_id"] = "";
	$fieldLabelsgroup_product["Indonesian"]["group_id"] = "Group Name";
	$fieldToolTipsgroup_product["Indonesian"]["group_id"] = "";
	$placeHoldersgroup_product["Indonesian"]["group_id"] = "";
	$fieldLabelsgroup_product["Indonesian"]["product_type"] = "Product Type";
	$fieldToolTipsgroup_product["Indonesian"]["product_type"] = "";
	$placeHoldersgroup_product["Indonesian"]["product_type"] = "";
	$fieldLabelsgroup_product["Indonesian"]["product_name"] = "Product Name";
	$fieldToolTipsgroup_product["Indonesian"]["product_name"] = "";
	$placeHoldersgroup_product["Indonesian"]["product_name"] = "";
	$fieldLabelsgroup_product["Indonesian"]["stock_type"] = "Stock Type";
	$fieldToolTipsgroup_product["Indonesian"]["stock_type"] = "";
	$placeHoldersgroup_product["Indonesian"]["stock_type"] = "";
	$fieldLabelsgroup_product["Indonesian"]["stock"] = "Stock";
	$fieldToolTipsgroup_product["Indonesian"]["stock"] = "";
	$placeHoldersgroup_product["Indonesian"]["stock"] = "";
	$fieldLabelsgroup_product["Indonesian"]["order_type"] = "Order Type";
	$fieldToolTipsgroup_product["Indonesian"]["order_type"] = "";
	$placeHoldersgroup_product["Indonesian"]["order_type"] = "";
	$fieldLabelsgroup_product["Indonesian"]["price"] = "Price";
	$fieldToolTipsgroup_product["Indonesian"]["price"] = "";
	$placeHoldersgroup_product["Indonesian"]["price"] = "";
	$fieldLabelsgroup_product["Indonesian"]["curency"] = "Curency";
	$fieldToolTipsgroup_product["Indonesian"]["curency"] = "";
	$placeHoldersgroup_product["Indonesian"]["curency"] = "";
	$fieldLabelsgroup_product["Indonesian"]["image"] = "Image";
	$fieldToolTipsgroup_product["Indonesian"]["image"] = "";
	$placeHoldersgroup_product["Indonesian"]["image"] = "";
	if (count($fieldToolTipsgroup_product["Indonesian"]))
		$tdatagroup_product[".isUseToolTips"] = true;
}


	$tdatagroup_product[".NCSearch"] = true;



$tdatagroup_product[".shortTableName"] = "group_product";
$tdatagroup_product[".nSecOptions"] = 0;

$tdatagroup_product[".mainTableOwnerID"] = "";
$tdatagroup_product[".entityType"] = 0;
$tdatagroup_product[".connId"] = "notif_basic1_at_localhost";


$tdatagroup_product[".strOriginalTableName"] = "group_product";

	



$tdatagroup_product[".showAddInPopup"] = false;

$tdatagroup_product[".showEditInPopup"] = false;

$tdatagroup_product[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_product[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_product[".listAjax"] = false;
//	temporary
$tdatagroup_product[".listAjax"] = false;

	$tdatagroup_product[".audit"] = false;

	$tdatagroup_product[".locking"] = false;


$pages = $tdatagroup_product[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_product[".edit"] = true;
	$tdatagroup_product[".afterEditAction"] = 1;
	$tdatagroup_product[".closePopupAfterEdit"] = 1;
	$tdatagroup_product[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_product[".add"] = true;
$tdatagroup_product[".afterAddAction"] = 1;
$tdatagroup_product[".closePopupAfterAdd"] = 1;
$tdatagroup_product[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_product[".list"] = true;
}



$tdatagroup_product[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup_product[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_product[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_product[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_product[".printFriendly"] = true;
}



$tdatagroup_product[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_product[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_product[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_product[".isUseAjaxSuggest"] = true;

$tdatagroup_product[".rowHighlite"] = true;





$tdatagroup_product[".ajaxCodeSnippetAdded"] = false;

$tdatagroup_product[".buttonsAdded"] = false;

$tdatagroup_product[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup_product[".isUseTimeForSearch"] = false;


$tdatagroup_product[".badgeColor"] = "3CB371";


$tdatagroup_product[".allSearchFields"] = array();
$tdatagroup_product[".filterFields"] = array();
$tdatagroup_product[".requiredSearchFields"] = array();

$tdatagroup_product[".googleLikeFields"] = array();
$tdatagroup_product[".googleLikeFields"][] = "group_product_id";
$tdatagroup_product[".googleLikeFields"][] = "group_id";
$tdatagroup_product[".googleLikeFields"][] = "product_type";
$tdatagroup_product[".googleLikeFields"][] = "product_name";
$tdatagroup_product[".googleLikeFields"][] = "stock_type";
$tdatagroup_product[".googleLikeFields"][] = "stock";
$tdatagroup_product[".googleLikeFields"][] = "order_type";
$tdatagroup_product[".googleLikeFields"][] = "price";
$tdatagroup_product[".googleLikeFields"][] = "curency";
$tdatagroup_product[".googleLikeFields"][] = "image";



$tdatagroup_product[".tableType"] = "list";

$tdatagroup_product[".printerPageOrientation"] = 0;
$tdatagroup_product[".nPrinterPageScale"] = 100;

$tdatagroup_product[".nPrinterSplitRecords"] = 40;

$tdatagroup_product[".geocodingEnabled"] = false;










$tdatagroup_product[".pageSize"] = 20;

$tdatagroup_product[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_product[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_product[".orderindexes"] = array();


$tdatagroup_product[".sqlHead"] = "SELECT group_product_id,  	group_id,  	product_type,  	product_name,  	stock_type,  	stock,  	order_type,  	price,  	curency,  	image";
$tdatagroup_product[".sqlFrom"] = "FROM group_product";
$tdatagroup_product[".sqlWhereExpr"] = "";
$tdatagroup_product[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "group_id = ':session.group_id'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatagroup_product[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_product[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_product[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_product[".highlightSearchResults"] = true;

$tableKeysgroup_product = array();
$tableKeysgroup_product[] = "group_product_id";
$tdatagroup_product[".Keys"] = $tableKeysgroup_product;


$tdatagroup_product[".hideMobileList"] = array();




//	group_product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_product_id";
	$fdata["GoodName"] = "group_product_id";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product","group_product_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_product_id";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_product["group_product_id"] = $fdata;
		$tdatagroup_product[".searchableFields"][] = "group_product_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product","group_id");
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


	$tdatagroup_product["group_id"] = $fdata;
		$tdatagroup_product[".searchableFields"][] = "group_id";
//	product_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "product_type";
	$fdata["GoodName"] = "product_type";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product","product_type");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "product_type";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_product["product_type"] = $fdata;
		$tdatagroup_product[".searchableFields"][] = "product_type";
//	product_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "product_name";
	$fdata["GoodName"] = "product_name";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product","product_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "product_name";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_product["product_name"] = $fdata;
		$tdatagroup_product[".searchableFields"][] = "product_name";
//	stock_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "stock_type";
	$fdata["GoodName"] = "stock_type";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product","stock_type");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "stock_type";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_product["stock_type"] = $fdata;
		$tdatagroup_product[".searchableFields"][] = "stock_type";
//	stock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "stock";
	$fdata["GoodName"] = "stock";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product","stock");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "stock";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_product["stock"] = $fdata;
		$tdatagroup_product[".searchableFields"][] = "stock";
//	order_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "order_type";
	$fdata["GoodName"] = "order_type";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product","order_type");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "order_type";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_product["order_type"] = $fdata;
		$tdatagroup_product[".searchableFields"][] = "order_type";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product","price");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "price";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_product["price"] = $fdata;
		$tdatagroup_product[".searchableFields"][] = "price";
//	curency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "curency";
	$fdata["GoodName"] = "curency";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product","curency");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "curency";

	
		$fdata["isSQLExpression"] = true;
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "IDR";
	$edata["LookupValues"][] = "USD";

	
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


	$tdatagroup_product["curency"] = $fdata;
		$tdatagroup_product[".searchableFields"][] = "curency";
//	image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "image";
	$fdata["GoodName"] = "image";
	$fdata["ownerTable"] = "group_product";
	$fdata["Label"] = GetFieldLabel("group_product","image");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "image";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "image";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 200;
	$vdata["ImageHeight"] = 150;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatagroup_product["image"] = $fdata;
		$tdatagroup_product[".searchableFields"][] = "image";


$tables_data["group_product"]=&$tdatagroup_product;
$field_labels["group_product"] = &$fieldLabelsgroup_product;
$fieldToolTips["group_product"] = &$fieldToolTipsgroup_product;
$placeHolders["group_product"] = &$placeHoldersgroup_product;
$page_titles["group_product"] = &$pageTitlesgroup_product;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_product"] = array();
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


		
	$detailsTablesData["group_product"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_product"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_product"][$dIndex]["masterKeys"][]="group_product_id";

				$detailsTablesData["group_product"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_product"][$dIndex]["detailKeys"][]="group_product_id";
//	update_order_progess
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="update_order_progess";
		$detailsParam["dOriginalTable"] = "group_member_order_detail";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "update_order_progess";
	$detailsParam["dCaptionTable"] = GetTableCaption("update_order_progess");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["group_product"][$dIndex] = $detailsParam;

	
		$detailsTablesData["group_product"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["group_product"][$dIndex]["masterKeys"][]="group_product_id";

				$detailsTablesData["group_product"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["group_product"][$dIndex]["detailKeys"][]="group_product_id";

// tables which are master tables for current table (detail)
$masterTablesData["group_product"] = array();



	
				$strOriginalDetailsTable="group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_product"][0] = $masterParams;
				$masterTablesData["group_product"][0]["masterKeys"] = array();
	$masterTablesData["group_product"][0]["masterKeys"][]="group_id";
				$masterTablesData["group_product"][0]["detailKeys"] = array();
	$masterTablesData["group_product"][0]["detailKeys"][]="group_id";
		
	
				$strOriginalDetailsTable="order_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="order_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "order_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_product"][1] = $masterParams;
				$masterTablesData["group_product"][1]["masterKeys"] = array();
	$masterTablesData["group_product"][1]["masterKeys"][]="order_type_id";
				$masterTablesData["group_product"][1]["detailKeys"] = array();
	$masterTablesData["group_product"][1]["detailKeys"][]="order_type";
		
	
				$strOriginalDetailsTable="product_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="product_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "product_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_product"][2] = $masterParams;
				$masterTablesData["group_product"][2]["masterKeys"] = array();
	$masterTablesData["group_product"][2]["masterKeys"][]="id_product_type";
				$masterTablesData["group_product"][2]["detailKeys"] = array();
	$masterTablesData["group_product"][2]["detailKeys"][]="product_type";
		
	
				$strOriginalDetailsTable="stock_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="stock_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "stock_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_product"][3] = $masterParams;
				$masterTablesData["group_product"][3]["masterKeys"] = array();
	$masterTablesData["group_product"][3]["masterKeys"][]="stock_type_id";
				$masterTablesData["group_product"][3]["detailKeys"] = array();
	$masterTablesData["group_product"][3]["detailKeys"][]="stock_type";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group_product()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_product_id,  	group_id,  	product_type,  	product_name,  	stock_type,  	stock,  	order_type,  	price,  	curency,  	image";
$proto0["m_strFrom"] = "FROM group_product";
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
	"m_srcTableName" => "group_product"
));

$proto6["m_sql"] = "group_product_id";
$proto6["m_srcTableName"] = "group_product";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product"
));

$proto8["m_sql"] = "group_id";
$proto8["m_srcTableName"] = "group_product";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "product_type",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product"
));

$proto10["m_sql"] = "product_type";
$proto10["m_srcTableName"] = "group_product";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "product_name",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product"
));

$proto12["m_sql"] = "product_name";
$proto12["m_srcTableName"] = "group_product";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "stock_type",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product"
));

$proto14["m_sql"] = "stock_type";
$proto14["m_srcTableName"] = "group_product";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "stock",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product"
));

$proto16["m_sql"] = "stock";
$proto16["m_srcTableName"] = "group_product";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "order_type",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product"
));

$proto18["m_sql"] = "order_type";
$proto18["m_srcTableName"] = "group_product";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product"
));

$proto20["m_sql"] = "price";
$proto20["m_srcTableName"] = "group_product";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "curency",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product"
));

$proto22["m_sql"] = "curency";
$proto22["m_srcTableName"] = "group_product";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "image",
	"m_strTable" => "group_product",
	"m_srcTableName" => "group_product"
));

$proto24["m_sql"] = "image";
$proto24["m_srcTableName"] = "group_product";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "group_product";
$proto27["m_srcTableName"] = "group_product";
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
$proto26["m_srcTableName"] = "group_product";
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
$proto0["m_srcTableName"]="group_product";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group_product = createSqlQuery_group_product();


	
		;

										

$tdatagroup_product[".sqlquery"] = $queryData_group_product;



$tableEvents["group_product"] = new eventsBase;
$tdatagroup_product[".hasEvents"] = false;

?>