<?php
$tdatagroup_member_order_detail = array();
$tdatagroup_member_order_detail[".searchableFields"] = array();
$tdatagroup_member_order_detail[".ShortName"] = "group_member_order_detail";
$tdatagroup_member_order_detail[".OwnerID"] = "";
$tdatagroup_member_order_detail[".OriginalTable"] = "group_member_order_detail";


$tdatagroup_member_order_detail[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagroup_member_order_detail[".originalPagesByType"] = $tdatagroup_member_order_detail[".pagesByType"];
$tdatagroup_member_order_detail[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagroup_member_order_detail[".originalPages"] = $tdatagroup_member_order_detail[".pages"];
$tdatagroup_member_order_detail[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagroup_member_order_detail[".originalDefaultPages"] = $tdatagroup_member_order_detail[".defaultPages"];

//	field labels
$fieldLabelsgroup_member_order_detail = array();
$fieldToolTipsgroup_member_order_detail = array();
$pageTitlesgroup_member_order_detail = array();
$placeHoldersgroup_member_order_detail = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_member_order_detail["English"] = array();
	$fieldToolTipsgroup_member_order_detail["English"] = array();
	$placeHoldersgroup_member_order_detail["English"] = array();
	$pageTitlesgroup_member_order_detail["English"] = array();
	$fieldLabelsgroup_member_order_detail["English"]["group_member_order_detail_id"] = "Group Member Order Detail Id";
	$fieldToolTipsgroup_member_order_detail["English"]["group_member_order_detail_id"] = "";
	$placeHoldersgroup_member_order_detail["English"]["group_member_order_detail_id"] = "";
	$fieldLabelsgroup_member_order_detail["English"]["group_member_order_id"] = "Group Member Order Id";
	$fieldToolTipsgroup_member_order_detail["English"]["group_member_order_id"] = "";
	$placeHoldersgroup_member_order_detail["English"]["group_member_order_id"] = "";
	$fieldLabelsgroup_member_order_detail["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsgroup_member_order_detail["English"]["group_member_id"] = "";
	$placeHoldersgroup_member_order_detail["English"]["group_member_id"] = "";
	$fieldLabelsgroup_member_order_detail["English"]["member_id"] = "Member Id";
	$fieldToolTipsgroup_member_order_detail["English"]["member_id"] = "";
	$placeHoldersgroup_member_order_detail["English"]["member_id"] = "";
	$fieldLabelsgroup_member_order_detail["English"]["group_id"] = "Group Id";
	$fieldToolTipsgroup_member_order_detail["English"]["group_id"] = "";
	$placeHoldersgroup_member_order_detail["English"]["group_id"] = "";
	$fieldLabelsgroup_member_order_detail["English"]["group_product_id"] = "Group Product Id";
	$fieldToolTipsgroup_member_order_detail["English"]["group_product_id"] = "";
	$placeHoldersgroup_member_order_detail["English"]["group_product_id"] = "";
	$fieldLabelsgroup_member_order_detail["English"]["nominal"] = "Nominal";
	$fieldToolTipsgroup_member_order_detail["English"]["nominal"] = "";
	$placeHoldersgroup_member_order_detail["English"]["nominal"] = "";
	$fieldLabelsgroup_member_order_detail["English"]["quantity"] = "Quantity";
	$fieldToolTipsgroup_member_order_detail["English"]["quantity"] = "";
	$placeHoldersgroup_member_order_detail["English"]["quantity"] = "";
	$fieldLabelsgroup_member_order_detail["English"]["total"] = "Total";
	$fieldToolTipsgroup_member_order_detail["English"]["total"] = "";
	$placeHoldersgroup_member_order_detail["English"]["total"] = "";
	$fieldLabelsgroup_member_order_detail["English"]["progress"] = "Progress";
	$fieldToolTipsgroup_member_order_detail["English"]["progress"] = "";
	$placeHoldersgroup_member_order_detail["English"]["progress"] = "";
	if (count($fieldToolTipsgroup_member_order_detail["English"]))
		$tdatagroup_member_order_detail[".isUseToolTips"] = true;
}


	$tdatagroup_member_order_detail[".NCSearch"] = true;



$tdatagroup_member_order_detail[".shortTableName"] = "group_member_order_detail";
$tdatagroup_member_order_detail[".nSecOptions"] = 0;

$tdatagroup_member_order_detail[".mainTableOwnerID"] = "";
$tdatagroup_member_order_detail[".entityType"] = 0;
$tdatagroup_member_order_detail[".connId"] = "notif_basic1_at_localhost";


$tdatagroup_member_order_detail[".strOriginalTableName"] = "group_member_order_detail";

	



$tdatagroup_member_order_detail[".showAddInPopup"] = false;

$tdatagroup_member_order_detail[".showEditInPopup"] = false;

$tdatagroup_member_order_detail[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_member_order_detail[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_member_order_detail[".listAjax"] = false;
//	temporary
$tdatagroup_member_order_detail[".listAjax"] = false;

	$tdatagroup_member_order_detail[".audit"] = false;

	$tdatagroup_member_order_detail[".locking"] = false;


$pages = $tdatagroup_member_order_detail[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_member_order_detail[".edit"] = true;
	$tdatagroup_member_order_detail[".afterEditAction"] = 1;
	$tdatagroup_member_order_detail[".closePopupAfterEdit"] = 1;
	$tdatagroup_member_order_detail[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_member_order_detail[".add"] = true;
$tdatagroup_member_order_detail[".afterAddAction"] = 1;
$tdatagroup_member_order_detail[".closePopupAfterAdd"] = 1;
$tdatagroup_member_order_detail[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_member_order_detail[".list"] = true;
}



$tdatagroup_member_order_detail[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup_member_order_detail[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_member_order_detail[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_member_order_detail[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_member_order_detail[".printFriendly"] = true;
}



$tdatagroup_member_order_detail[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_member_order_detail[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_member_order_detail[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_member_order_detail[".isUseAjaxSuggest"] = true;

$tdatagroup_member_order_detail[".rowHighlite"] = true;





$tdatagroup_member_order_detail[".ajaxCodeSnippetAdded"] = false;

$tdatagroup_member_order_detail[".buttonsAdded"] = false;

$tdatagroup_member_order_detail[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup_member_order_detail[".isUseTimeForSearch"] = false;


$tdatagroup_member_order_detail[".badgeColor"] = "6B8E23";


$tdatagroup_member_order_detail[".allSearchFields"] = array();
$tdatagroup_member_order_detail[".filterFields"] = array();
$tdatagroup_member_order_detail[".requiredSearchFields"] = array();

$tdatagroup_member_order_detail[".googleLikeFields"] = array();
$tdatagroup_member_order_detail[".googleLikeFields"][] = "group_member_order_detail_id";
$tdatagroup_member_order_detail[".googleLikeFields"][] = "group_member_order_id";
$tdatagroup_member_order_detail[".googleLikeFields"][] = "group_member_id";
$tdatagroup_member_order_detail[".googleLikeFields"][] = "member_id";
$tdatagroup_member_order_detail[".googleLikeFields"][] = "group_id";
$tdatagroup_member_order_detail[".googleLikeFields"][] = "group_product_id";
$tdatagroup_member_order_detail[".googleLikeFields"][] = "nominal";
$tdatagroup_member_order_detail[".googleLikeFields"][] = "quantity";
$tdatagroup_member_order_detail[".googleLikeFields"][] = "total";
$tdatagroup_member_order_detail[".googleLikeFields"][] = "progress";



$tdatagroup_member_order_detail[".tableType"] = "list";

$tdatagroup_member_order_detail[".printerPageOrientation"] = 0;
$tdatagroup_member_order_detail[".nPrinterPageScale"] = 100;

$tdatagroup_member_order_detail[".nPrinterSplitRecords"] = 40;

$tdatagroup_member_order_detail[".geocodingEnabled"] = false;










$tdatagroup_member_order_detail[".pageSize"] = 20;

$tdatagroup_member_order_detail[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_member_order_detail[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_member_order_detail[".orderindexes"] = array();


$tdatagroup_member_order_detail[".sqlHead"] = "SELECT group_member_order_detail_id,  	group_member_order_id,  	group_member_id,  	member_id,  	group_id,  	group_product_id,  	nominal,  	quantity,  	total,  	progress";
$tdatagroup_member_order_detail[".sqlFrom"] = "FROM group_member_order_detail";
$tdatagroup_member_order_detail[".sqlWhereExpr"] = "";
$tdatagroup_member_order_detail[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_member_order_detail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_member_order_detail[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_member_order_detail[".highlightSearchResults"] = true;

$tableKeysgroup_member_order_detail = array();
$tableKeysgroup_member_order_detail[] = "group_member_order_detail_id";
$tdatagroup_member_order_detail[".Keys"] = $tableKeysgroup_member_order_detail;


$tdatagroup_member_order_detail[".hideMobileList"] = array();




//	group_member_order_detail_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_member_order_detail_id";
	$fdata["GoodName"] = "group_member_order_detail_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("group_member_order_detail","group_member_order_detail_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_member_order_detail_id";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_member_order_detail["group_member_order_detail_id"] = $fdata;
		$tdatagroup_member_order_detail[".searchableFields"][] = "group_member_order_detail_id";
//	group_member_order_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_member_order_id";
	$fdata["GoodName"] = "group_member_order_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("group_member_order_detail","group_member_order_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_member_order_id";

	
		$fdata["isSQLExpression"] = true;
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "group_member_order";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "group_member_order";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "currency";

	

	
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


	$tdatagroup_member_order_detail["group_member_order_id"] = $fdata;
		$tdatagroup_member_order_detail[".searchableFields"][] = "group_member_order_id";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("group_member_order_detail","group_member_id");
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
	$edata["DisplayField"] = "token_group";

	

	
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


	$tdatagroup_member_order_detail["group_member_id"] = $fdata;
		$tdatagroup_member_order_detail[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("group_member_order_detail","member_id");
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


	$tdatagroup_member_order_detail["member_id"] = $fdata;
		$tdatagroup_member_order_detail[".searchableFields"][] = "member_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("group_member_order_detail","group_id");
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


	$tdatagroup_member_order_detail["group_id"] = $fdata;
		$tdatagroup_member_order_detail[".searchableFields"][] = "group_id";
//	group_product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "group_product_id";
	$fdata["GoodName"] = "group_product_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("group_member_order_detail","group_product_id");
	$fdata["FieldType"] = 20;

	
	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "group_product";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "group_product_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "product_name";

	

	
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


	$tdatagroup_member_order_detail["group_product_id"] = $fdata;
		$tdatagroup_member_order_detail[".searchableFields"][] = "group_product_id";
//	nominal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nominal";
	$fdata["GoodName"] = "nominal";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("group_member_order_detail","nominal");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "nominal";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_member_order_detail["nominal"] = $fdata;
		$tdatagroup_member_order_detail[".searchableFields"][] = "nominal";
//	quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "quantity";
	$fdata["GoodName"] = "quantity";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("group_member_order_detail","quantity");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "quantity";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_member_order_detail["quantity"] = $fdata;
		$tdatagroup_member_order_detail[".searchableFields"][] = "quantity";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("group_member_order_detail","total");
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


	$tdatagroup_member_order_detail["total"] = $fdata;
		$tdatagroup_member_order_detail[".searchableFields"][] = "total";
//	progress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "progress";
	$fdata["GoodName"] = "progress";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("group_member_order_detail","progress");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "progress";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatagroup_member_order_detail["progress"] = $fdata;
		$tdatagroup_member_order_detail[".searchableFields"][] = "progress";


$tables_data["group_member_order_detail"]=&$tdatagroup_member_order_detail;
$field_labels["group_member_order_detail"] = &$fieldLabelsgroup_member_order_detail;
$fieldToolTips["group_member_order_detail"] = &$fieldToolTipsgroup_member_order_detail;
$placeHolders["group_member_order_detail"] = &$placeHoldersgroup_member_order_detail;
$page_titles["group_member_order_detail"] = &$pageTitlesgroup_member_order_detail;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_member_order_detail"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["group_member_order_detail"] = array();



	
				$strOriginalDetailsTable="group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_member_order_detail"][0] = $masterParams;
				$masterTablesData["group_member_order_detail"][0]["masterKeys"] = array();
	$masterTablesData["group_member_order_detail"][0]["masterKeys"][]="group_id";
				$masterTablesData["group_member_order_detail"][0]["detailKeys"] = array();
	$masterTablesData["group_member_order_detail"][0]["detailKeys"][]="group_id";
		
	
				$strOriginalDetailsTable="group_product";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group_product";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group_product";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_member_order_detail"][1] = $masterParams;
				$masterTablesData["group_member_order_detail"][1]["masterKeys"] = array();
	$masterTablesData["group_member_order_detail"][1]["masterKeys"][]="group_product_id";
				$masterTablesData["group_member_order_detail"][1]["detailKeys"] = array();
	$masterTablesData["group_member_order_detail"][1]["detailKeys"][]="group_product_id";
		
	
				$strOriginalDetailsTable="personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_member_order_detail"][2] = $masterParams;
				$masterTablesData["group_member_order_detail"][2]["masterKeys"] = array();
	$masterTablesData["group_member_order_detail"][2]["masterKeys"][]="member_id";
				$masterTablesData["group_member_order_detail"][2]["detailKeys"] = array();
	$masterTablesData["group_member_order_detail"][2]["detailKeys"][]="member_id";
		
	
				$strOriginalDetailsTable="group_member_order";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group_member_order";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group_member_order";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_member_order_detail"][3] = $masterParams;
				$masterTablesData["group_member_order_detail"][3]["masterKeys"] = array();
	$masterTablesData["group_member_order_detail"][3]["masterKeys"][]="group_member_order";
				$masterTablesData["group_member_order_detail"][3]["detailKeys"] = array();
	$masterTablesData["group_member_order_detail"][3]["detailKeys"][]="group_member_order_id";
		
	
				$strOriginalDetailsTable="group_member";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group_member";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group_member";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_member_order_detail"][4] = $masterParams;
				$masterTablesData["group_member_order_detail"][4]["masterKeys"] = array();
	$masterTablesData["group_member_order_detail"][4]["masterKeys"][]="group_member_id";
				$masterTablesData["group_member_order_detail"][4]["detailKeys"] = array();
	$masterTablesData["group_member_order_detail"][4]["detailKeys"][]="group_member_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group_member_order_detail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_member_order_detail_id,  	group_member_order_id,  	group_member_id,  	member_id,  	group_id,  	group_product_id,  	nominal,  	quantity,  	total,  	progress";
$proto0["m_strFrom"] = "FROM group_member_order_detail";
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
	"m_strName" => "group_member_order_detail_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "group_member_order_detail"
));

$proto6["m_sql"] = "group_member_order_detail_id";
$proto6["m_srcTableName"] = "group_member_order_detail";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_order_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "group_member_order_detail"
));

$proto8["m_sql"] = "group_member_order_id";
$proto8["m_srcTableName"] = "group_member_order_detail";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "group_member_order_detail"
));

$proto10["m_sql"] = "group_member_id";
$proto10["m_srcTableName"] = "group_member_order_detail";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "group_member_order_detail"
));

$proto12["m_sql"] = "member_id";
$proto12["m_srcTableName"] = "group_member_order_detail";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "group_member_order_detail"
));

$proto14["m_sql"] = "group_id";
$proto14["m_srcTableName"] = "group_member_order_detail";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "group_product_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "group_member_order_detail"
));

$proto16["m_sql"] = "group_product_id";
$proto16["m_srcTableName"] = "group_member_order_detail";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nominal",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "group_member_order_detail"
));

$proto18["m_sql"] = "nominal";
$proto18["m_srcTableName"] = "group_member_order_detail";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "quantity",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "group_member_order_detail"
));

$proto20["m_sql"] = "quantity";
$proto20["m_srcTableName"] = "group_member_order_detail";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "group_member_order_detail"
));

$proto22["m_sql"] = "total";
$proto22["m_srcTableName"] = "group_member_order_detail";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "progress",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "group_member_order_detail"
));

$proto24["m_sql"] = "progress";
$proto24["m_srcTableName"] = "group_member_order_detail";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "group_member_order_detail";
$proto27["m_srcTableName"] = "group_member_order_detail";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "group_member_order_detail_id";
$proto27["m_columns"][] = "group_member_order_id";
$proto27["m_columns"][] = "group_member_id";
$proto27["m_columns"][] = "member_id";
$proto27["m_columns"][] = "group_id";
$proto27["m_columns"][] = "group_product_id";
$proto27["m_columns"][] = "nominal";
$proto27["m_columns"][] = "quantity";
$proto27["m_columns"][] = "total";
$proto27["m_columns"][] = "progress";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "group_member_order_detail";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "group_member_order_detail";
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
$proto0["m_srcTableName"]="group_member_order_detail";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group_member_order_detail = createSqlQuery_group_member_order_detail();


	
		;

										

$tdatagroup_member_order_detail[".sqlquery"] = $queryData_group_member_order_detail;



$tableEvents["group_member_order_detail"] = new eventsBase;
$tdatagroup_member_order_detail[".hasEvents"] = false;

?>