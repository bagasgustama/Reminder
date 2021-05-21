<?php
$tdataupdate_order_progess = array();
$tdataupdate_order_progess[".searchableFields"] = array();
$tdataupdate_order_progess[".ShortName"] = "update_order_progess";
$tdataupdate_order_progess[".OwnerID"] = "";
$tdataupdate_order_progess[".OriginalTable"] = "group_member_order_detail";


$tdataupdate_order_progess[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataupdate_order_progess[".originalPagesByType"] = $tdataupdate_order_progess[".pagesByType"];
$tdataupdate_order_progess[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataupdate_order_progess[".originalPages"] = $tdataupdate_order_progess[".pages"];
$tdataupdate_order_progess[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataupdate_order_progess[".originalDefaultPages"] = $tdataupdate_order_progess[".defaultPages"];

//	field labels
$fieldLabelsupdate_order_progess = array();
$fieldToolTipsupdate_order_progess = array();
$pageTitlesupdate_order_progess = array();
$placeHoldersupdate_order_progess = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsupdate_order_progess["English"] = array();
	$fieldToolTipsupdate_order_progess["English"] = array();
	$placeHoldersupdate_order_progess["English"] = array();
	$pageTitlesupdate_order_progess["English"] = array();
	$fieldLabelsupdate_order_progess["English"]["group_member_order_detail_id"] = "Group Member Order Detail Id";
	$fieldToolTipsupdate_order_progess["English"]["group_member_order_detail_id"] = "";
	$placeHoldersupdate_order_progess["English"]["group_member_order_detail_id"] = "";
	$fieldLabelsupdate_order_progess["English"]["group_member_order_id"] = "Group Member Order Id";
	$fieldToolTipsupdate_order_progess["English"]["group_member_order_id"] = "";
	$placeHoldersupdate_order_progess["English"]["group_member_order_id"] = "";
	$fieldLabelsupdate_order_progess["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsupdate_order_progess["English"]["group_member_id"] = "";
	$placeHoldersupdate_order_progess["English"]["group_member_id"] = "";
	$fieldLabelsupdate_order_progess["English"]["member_id"] = "Member Id";
	$fieldToolTipsupdate_order_progess["English"]["member_id"] = "";
	$placeHoldersupdate_order_progess["English"]["member_id"] = "";
	$fieldLabelsupdate_order_progess["English"]["group_id"] = "Group Id";
	$fieldToolTipsupdate_order_progess["English"]["group_id"] = "";
	$placeHoldersupdate_order_progess["English"]["group_id"] = "";
	$fieldLabelsupdate_order_progess["English"]["group_product_id"] = "Group Product Id";
	$fieldToolTipsupdate_order_progess["English"]["group_product_id"] = "";
	$placeHoldersupdate_order_progess["English"]["group_product_id"] = "";
	$fieldLabelsupdate_order_progess["English"]["nominal"] = "Nominal";
	$fieldToolTipsupdate_order_progess["English"]["nominal"] = "";
	$placeHoldersupdate_order_progess["English"]["nominal"] = "";
	$fieldLabelsupdate_order_progess["English"]["quantity"] = "Quantity";
	$fieldToolTipsupdate_order_progess["English"]["quantity"] = "";
	$placeHoldersupdate_order_progess["English"]["quantity"] = "";
	$fieldLabelsupdate_order_progess["English"]["total"] = "Total";
	$fieldToolTipsupdate_order_progess["English"]["total"] = "";
	$placeHoldersupdate_order_progess["English"]["total"] = "";
	$fieldLabelsupdate_order_progess["English"]["progress"] = "Progress";
	$fieldToolTipsupdate_order_progess["English"]["progress"] = "";
	$placeHoldersupdate_order_progess["English"]["progress"] = "";
	$fieldLabelsupdate_order_progess["English"]["valid"] = "Valid";
	$fieldToolTipsupdate_order_progess["English"]["valid"] = "";
	$placeHoldersupdate_order_progess["English"]["valid"] = "";
	if (count($fieldToolTipsupdate_order_progess["English"]))
		$tdataupdate_order_progess[".isUseToolTips"] = true;
}


	$tdataupdate_order_progess[".NCSearch"] = true;



$tdataupdate_order_progess[".shortTableName"] = "update_order_progess";
$tdataupdate_order_progess[".nSecOptions"] = 0;

$tdataupdate_order_progess[".mainTableOwnerID"] = "";
$tdataupdate_order_progess[".entityType"] = 1;
$tdataupdate_order_progess[".connId"] = "notif_basic1_at_localhost";


$tdataupdate_order_progess[".strOriginalTableName"] = "group_member_order_detail";

	



$tdataupdate_order_progess[".showAddInPopup"] = false;

$tdataupdate_order_progess[".showEditInPopup"] = false;

$tdataupdate_order_progess[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataupdate_order_progess[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataupdate_order_progess[".listAjax"] = false;
//	temporary
$tdataupdate_order_progess[".listAjax"] = false;

	$tdataupdate_order_progess[".audit"] = false;

	$tdataupdate_order_progess[".locking"] = false;


$pages = $tdataupdate_order_progess[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataupdate_order_progess[".edit"] = true;
	$tdataupdate_order_progess[".afterEditAction"] = 0;
	$tdataupdate_order_progess[".closePopupAfterEdit"] = 1;
	$tdataupdate_order_progess[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataupdate_order_progess[".add"] = true;
$tdataupdate_order_progess[".afterAddAction"] = 1;
$tdataupdate_order_progess[".closePopupAfterAdd"] = 1;
$tdataupdate_order_progess[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataupdate_order_progess[".list"] = true;
}



$tdataupdate_order_progess[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataupdate_order_progess[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataupdate_order_progess[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataupdate_order_progess[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataupdate_order_progess[".printFriendly"] = true;
}



$tdataupdate_order_progess[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataupdate_order_progess[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataupdate_order_progess[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataupdate_order_progess[".isUseAjaxSuggest"] = true;

$tdataupdate_order_progess[".rowHighlite"] = true;





$tdataupdate_order_progess[".ajaxCodeSnippetAdded"] = false;

$tdataupdate_order_progess[".buttonsAdded"] = false;

$tdataupdate_order_progess[".addPageEvents"] = false;

// use timepicker for search panel
$tdataupdate_order_progess[".isUseTimeForSearch"] = false;


$tdataupdate_order_progess[".badgeColor"] = "D2691E";


$tdataupdate_order_progess[".allSearchFields"] = array();
$tdataupdate_order_progess[".filterFields"] = array();
$tdataupdate_order_progess[".requiredSearchFields"] = array();

$tdataupdate_order_progess[".googleLikeFields"] = array();
$tdataupdate_order_progess[".googleLikeFields"][] = "group_member_order_detail_id";
$tdataupdate_order_progess[".googleLikeFields"][] = "group_member_order_id";
$tdataupdate_order_progess[".googleLikeFields"][] = "group_member_id";
$tdataupdate_order_progess[".googleLikeFields"][] = "member_id";
$tdataupdate_order_progess[".googleLikeFields"][] = "group_id";
$tdataupdate_order_progess[".googleLikeFields"][] = "group_product_id";
$tdataupdate_order_progess[".googleLikeFields"][] = "nominal";
$tdataupdate_order_progess[".googleLikeFields"][] = "quantity";
$tdataupdate_order_progess[".googleLikeFields"][] = "total";
$tdataupdate_order_progess[".googleLikeFields"][] = "progress";
$tdataupdate_order_progess[".googleLikeFields"][] = "valid";



$tdataupdate_order_progess[".tableType"] = "list";

$tdataupdate_order_progess[".printerPageOrientation"] = 0;
$tdataupdate_order_progess[".nPrinterPageScale"] = 100;

$tdataupdate_order_progess[".nPrinterSplitRecords"] = 40;

$tdataupdate_order_progess[".geocodingEnabled"] = false;










$tdataupdate_order_progess[".pageSize"] = 20;

$tdataupdate_order_progess[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataupdate_order_progess[".strOrderBy"] = $tstrOrderBy;

$tdataupdate_order_progess[".orderindexes"] = array();


$tdataupdate_order_progess[".sqlHead"] = "SELECT group_member_order_detail.group_member_order_detail_id,  group_member_order_detail.group_member_order_id,  group_member_order_detail.group_member_id,  group_member_order_detail.member_id,  group_member_order_detail.group_id,  group_member_order_detail.group_product_id,  group_member_order_detail.nominal,  group_member_order_detail.quantity,  group_member_order_detail.total,  group_member_order_detail.progress,  group_member_order.valid";
$tdataupdate_order_progess[".sqlFrom"] = "FROM group_member_order_detail  INNER JOIN group_member_order ON group_member_order_detail.group_member_order_id = group_member_order.group_member_order";
$tdataupdate_order_progess[".sqlWhereExpr"] = "";
$tdataupdate_order_progess[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "group_member_order_detail.group_id = ':session.group_id' and valid = 1 and group_member_order_detail.progress = 0",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataupdate_order_progess[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataupdate_order_progess[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataupdate_order_progess[".arrGroupsPerPage"] = $arrGPP;

$tdataupdate_order_progess[".highlightSearchResults"] = true;

$tableKeysupdate_order_progess = array();
$tableKeysupdate_order_progess[] = "group_member_order_detail_id";
$tdataupdate_order_progess[".Keys"] = $tableKeysupdate_order_progess;


$tdataupdate_order_progess[".hideMobileList"] = array();




//	group_member_order_detail_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_member_order_detail_id";
	$fdata["GoodName"] = "group_member_order_detail_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("update_order_progess","group_member_order_detail_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_member_order_detail_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_order_detail.group_member_order_detail_id";

	
	
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


	$tdataupdate_order_progess["group_member_order_detail_id"] = $fdata;
		$tdataupdate_order_progess[".searchableFields"][] = "group_member_order_detail_id";
//	group_member_order_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_member_order_id";
	$fdata["GoodName"] = "group_member_order_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("update_order_progess","group_member_order_id");
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
	$edata["DisplayField"] = "group_member_order";

	

	
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


	$tdataupdate_order_progess["group_member_order_id"] = $fdata;
		$tdataupdate_order_progess[".searchableFields"][] = "group_member_order_id";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("update_order_progess","group_member_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_member_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_order_detail.group_member_id";

	
	
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


	$tdataupdate_order_progess["group_member_id"] = $fdata;
		$tdataupdate_order_progess[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("update_order_progess","member_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "member_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_order_detail.member_id";

	
	
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


	$tdataupdate_order_progess["member_id"] = $fdata;
		$tdataupdate_order_progess[".searchableFields"][] = "member_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("update_order_progess","group_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_order_detail.group_id";

	
	
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


	$tdataupdate_order_progess["group_id"] = $fdata;
		$tdataupdate_order_progess[".searchableFields"][] = "group_id";
//	group_product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "group_product_id";
	$fdata["GoodName"] = "group_product_id";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("update_order_progess","group_product_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_product_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_order_detail.group_product_id";

	
	
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


	$tdataupdate_order_progess["group_product_id"] = $fdata;
		$tdataupdate_order_progess[".searchableFields"][] = "group_product_id";
//	nominal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nominal";
	$fdata["GoodName"] = "nominal";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("update_order_progess","nominal");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "nominal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_order_detail.nominal";

	
	
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


	$tdataupdate_order_progess["nominal"] = $fdata;
		$tdataupdate_order_progess[".searchableFields"][] = "nominal";
//	quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "quantity";
	$fdata["GoodName"] = "quantity";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("update_order_progess","quantity");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "quantity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_order_detail.quantity";

	
	
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


	$tdataupdate_order_progess["quantity"] = $fdata;
		$tdataupdate_order_progess[".searchableFields"][] = "quantity";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("update_order_progess","total");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "total";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_order_detail.total";

	
	
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


	$tdataupdate_order_progess["total"] = $fdata;
		$tdataupdate_order_progess[".searchableFields"][] = "total";
//	progress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "progress";
	$fdata["GoodName"] = "progress";
	$fdata["ownerTable"] = "group_member_order_detail";
	$fdata["Label"] = GetFieldLabel("update_order_progess","progress");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "progress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_order_detail.progress";

	
	
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


	$tdataupdate_order_progess["progress"] = $fdata;
		$tdataupdate_order_progess[".searchableFields"][] = "progress";
//	valid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "valid";
	$fdata["GoodName"] = "valid";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("update_order_progess","valid");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "valid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_order.valid";

	
	
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


	$tdataupdate_order_progess["valid"] = $fdata;
		$tdataupdate_order_progess[".searchableFields"][] = "valid";


$tables_data["update_order_progess"]=&$tdataupdate_order_progess;
$field_labels["update_order_progess"] = &$fieldLabelsupdate_order_progess;
$fieldToolTips["update_order_progess"] = &$fieldToolTipsupdate_order_progess;
$placeHolders["update_order_progess"] = &$placeHoldersupdate_order_progess;
$page_titles["update_order_progess"] = &$pageTitlesupdate_order_progess;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["update_order_progess"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["update_order_progess"] = array();



	
				$strOriginalDetailsTable="group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["update_order_progess"][0] = $masterParams;
				$masterTablesData["update_order_progess"][0]["masterKeys"] = array();
	$masterTablesData["update_order_progess"][0]["masterKeys"][]="group_id";
				$masterTablesData["update_order_progess"][0]["detailKeys"] = array();
	$masterTablesData["update_order_progess"][0]["detailKeys"][]="group_id";
		
	
				$strOriginalDetailsTable="group_member";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group_member";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group_member";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["update_order_progess"][1] = $masterParams;
				$masterTablesData["update_order_progess"][1]["masterKeys"] = array();
	$masterTablesData["update_order_progess"][1]["masterKeys"][]="group_member_id";
				$masterTablesData["update_order_progess"][1]["detailKeys"] = array();
	$masterTablesData["update_order_progess"][1]["detailKeys"][]="group_member_id";
		
	
				$strOriginalDetailsTable="group_product";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group_product";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group_product";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["update_order_progess"][2] = $masterParams;
				$masterTablesData["update_order_progess"][2]["masterKeys"] = array();
	$masterTablesData["update_order_progess"][2]["masterKeys"][]="group_product_id";
				$masterTablesData["update_order_progess"][2]["detailKeys"] = array();
	$masterTablesData["update_order_progess"][2]["detailKeys"][]="group_product_id";
		
	
				$strOriginalDetailsTable="personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["update_order_progess"][3] = $masterParams;
				$masterTablesData["update_order_progess"][3]["masterKeys"] = array();
	$masterTablesData["update_order_progess"][3]["masterKeys"][]="member_id";
				$masterTablesData["update_order_progess"][3]["detailKeys"] = array();
	$masterTablesData["update_order_progess"][3]["detailKeys"][]="member_id";
		
	
				$strOriginalDetailsTable="group_member_order";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group_member_order";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group_member_order";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["update_order_progess"][4] = $masterParams;
				$masterTablesData["update_order_progess"][4]["masterKeys"] = array();
	$masterTablesData["update_order_progess"][4]["masterKeys"][]="group_member_order";
				$masterTablesData["update_order_progess"][4]["detailKeys"] = array();
	$masterTablesData["update_order_progess"][4]["detailKeys"][]="group_member_order_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_update_order_progess()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_member_order_detail.group_member_order_detail_id,  group_member_order_detail.group_member_order_id,  group_member_order_detail.group_member_id,  group_member_order_detail.member_id,  group_member_order_detail.group_id,  group_member_order_detail.group_product_id,  group_member_order_detail.nominal,  group_member_order_detail.quantity,  group_member_order_detail.total,  group_member_order_detail.progress,  group_member_order.valid";
$proto0["m_strFrom"] = "FROM group_member_order_detail  INNER JOIN group_member_order ON group_member_order_detail.group_member_order_id = group_member_order.group_member_order";
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
	"m_srcTableName" => "update_order_progess"
));

$proto6["m_sql"] = "group_member_order_detail.group_member_order_detail_id";
$proto6["m_srcTableName"] = "update_order_progess";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_order_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "update_order_progess"
));

$proto8["m_sql"] = "group_member_order_detail.group_member_order_id";
$proto8["m_srcTableName"] = "update_order_progess";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "update_order_progess"
));

$proto10["m_sql"] = "group_member_order_detail.group_member_id";
$proto10["m_srcTableName"] = "update_order_progess";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "update_order_progess"
));

$proto12["m_sql"] = "group_member_order_detail.member_id";
$proto12["m_srcTableName"] = "update_order_progess";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "update_order_progess"
));

$proto14["m_sql"] = "group_member_order_detail.group_id";
$proto14["m_srcTableName"] = "update_order_progess";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "group_product_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "update_order_progess"
));

$proto16["m_sql"] = "group_member_order_detail.group_product_id";
$proto16["m_srcTableName"] = "update_order_progess";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nominal",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "update_order_progess"
));

$proto18["m_sql"] = "group_member_order_detail.nominal";
$proto18["m_srcTableName"] = "update_order_progess";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "quantity",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "update_order_progess"
));

$proto20["m_sql"] = "group_member_order_detail.quantity";
$proto20["m_srcTableName"] = "update_order_progess";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "update_order_progess"
));

$proto22["m_sql"] = "group_member_order_detail.total";
$proto22["m_srcTableName"] = "update_order_progess";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "progress",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "update_order_progess"
));

$proto24["m_sql"] = "group_member_order_detail.progress";
$proto24["m_srcTableName"] = "update_order_progess";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "valid",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "update_order_progess"
));

$proto26["m_sql"] = "group_member_order.valid";
$proto26["m_srcTableName"] = "update_order_progess";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "group_member_order_detail";
$proto29["m_srcTableName"] = "update_order_progess";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "group_member_order_detail_id";
$proto29["m_columns"][] = "group_member_order_id";
$proto29["m_columns"][] = "group_member_id";
$proto29["m_columns"][] = "member_id";
$proto29["m_columns"][] = "group_id";
$proto29["m_columns"][] = "group_product_id";
$proto29["m_columns"][] = "nominal";
$proto29["m_columns"][] = "quantity";
$proto29["m_columns"][] = "total";
$proto29["m_columns"][] = "progress";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "group_member_order_detail";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "update_order_progess";
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
$proto32["m_link"] = "SQLL_INNERJOIN";
			$proto33=array();
$proto33["m_strName"] = "group_member_order";
$proto33["m_srcTableName"] = "update_order_progess";
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
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "INNER JOIN group_member_order ON group_member_order_detail.group_member_order_id = group_member_order.group_member_order";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "update_order_progess";
$proto34=array();
$proto34["m_sql"] = "group_member_order_detail.group_member_order_id = group_member_order.group_member_order";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "group_member_order_id",
	"m_strTable" => "group_member_order_detail",
	"m_srcTableName" => "update_order_progess"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= group_member_order.group_member_order";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="update_order_progess";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_update_order_progess = createSqlQuery_update_order_progess();


	
		;

											

$tdataupdate_order_progess[".sqlquery"] = $queryData_update_order_progess;



include_once(getabspath("include/update_order_progess_events.php"));
$tableEvents["update_order_progess"] = new eventclass_update_order_progess;
$tdataupdate_order_progess[".hasEvents"] = true;

?>