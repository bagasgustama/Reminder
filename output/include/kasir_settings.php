<?php
$tdatakasir = array();
$tdatakasir[".searchableFields"] = array();
$tdatakasir[".ShortName"] = "kasir";
$tdatakasir[".OwnerID"] = "member_id";
$tdatakasir[".OriginalTable"] = "group_member_order";


$tdatakasir[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatakasir[".originalPagesByType"] = $tdatakasir[".pagesByType"];
$tdatakasir[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatakasir[".originalPages"] = $tdatakasir[".pages"];
$tdatakasir[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatakasir[".originalDefaultPages"] = $tdatakasir[".defaultPages"];

//	field labels
$fieldLabelskasir = array();
$fieldToolTipskasir = array();
$pageTitleskasir = array();
$placeHolderskasir = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelskasir["English"] = array();
	$fieldToolTipskasir["English"] = array();
	$placeHolderskasir["English"] = array();
	$pageTitleskasir["English"] = array();
	$fieldLabelskasir["English"]["group_member_order"] = "Group Member Order";
	$fieldToolTipskasir["English"]["group_member_order"] = "";
	$placeHolderskasir["English"]["group_member_order"] = "";
	$fieldLabelskasir["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipskasir["English"]["group_member_id"] = "";
	$placeHolderskasir["English"]["group_member_id"] = "";
	$fieldLabelskasir["English"]["member_id"] = "Member Id";
	$fieldToolTipskasir["English"]["member_id"] = "";
	$placeHolderskasir["English"]["member_id"] = "";
	$fieldLabelskasir["English"]["group_id"] = "Group Id";
	$fieldToolTipskasir["English"]["group_id"] = "";
	$placeHolderskasir["English"]["group_id"] = "";
	$fieldLabelskasir["English"]["order_date"] = "Order Date";
	$fieldToolTipskasir["English"]["order_date"] = "";
	$placeHolderskasir["English"]["order_date"] = "";
	$fieldLabelskasir["English"]["valid"] = "Valid";
	$fieldToolTipskasir["English"]["valid"] = "";
	$placeHolderskasir["English"]["valid"] = "";
	$fieldLabelskasir["English"]["total"] = "Total";
	$fieldToolTipskasir["English"]["total"] = "";
	$placeHolderskasir["English"]["total"] = "";
	$fieldLabelskasir["English"]["currency"] = "Currency";
	$fieldToolTipskasir["English"]["currency"] = "";
	$placeHolderskasir["English"]["currency"] = "";
	$fieldLabelskasir["English"]["review_member"] = "Review Member";
	$fieldToolTipskasir["English"]["review_member"] = "";
	$placeHolderskasir["English"]["review_member"] = "";
	$fieldLabelskasir["English"]["rating_member"] = "Rating Member";
	$fieldToolTipskasir["English"]["rating_member"] = "";
	$placeHolderskasir["English"]["rating_member"] = "";
	$fieldLabelskasir["English"]["payment_status"] = "Payment Status";
	$fieldToolTipskasir["English"]["payment_status"] = "";
	$placeHolderskasir["English"]["payment_status"] = "";
	if (count($fieldToolTipskasir["English"]))
		$tdatakasir[".isUseToolTips"] = true;
}


	$tdatakasir[".NCSearch"] = true;



$tdatakasir[".shortTableName"] = "kasir";
$tdatakasir[".nSecOptions"] = 0;

$tdatakasir[".mainTableOwnerID"] = "member_id";
$tdatakasir[".entityType"] = 1;
$tdatakasir[".connId"] = "notif_basic1_at_localhost";


$tdatakasir[".strOriginalTableName"] = "group_member_order";

	



$tdatakasir[".showAddInPopup"] = false;

$tdatakasir[".showEditInPopup"] = false;

$tdatakasir[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatakasir[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatakasir[".listAjax"] = false;
//	temporary
$tdatakasir[".listAjax"] = false;

	$tdatakasir[".audit"] = false;

	$tdatakasir[".locking"] = false;


$pages = $tdatakasir[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakasir[".edit"] = true;
	$tdatakasir[".afterEditAction"] = 0;
	$tdatakasir[".closePopupAfterEdit"] = 1;
	$tdatakasir[".afterEditActionDetTable"] = "group_member_order_detail";
}

if( $pages[PAGE_ADD] ) {
$tdatakasir[".add"] = true;
$tdatakasir[".afterAddAction"] = 0;
$tdatakasir[".closePopupAfterAdd"] = 1;
$tdatakasir[".afterAddActionDetTable"] = "group_member_order_detail";
}

if( $pages[PAGE_LIST] ) {
	$tdatakasir[".list"] = true;
}



$tdatakasir[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakasir[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakasir[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakasir[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakasir[".printFriendly"] = true;
}



$tdatakasir[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakasir[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakasir[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakasir[".isUseAjaxSuggest"] = true;

$tdatakasir[".rowHighlite"] = true;





$tdatakasir[".ajaxCodeSnippetAdded"] = false;

$tdatakasir[".buttonsAdded"] = false;

$tdatakasir[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakasir[".isUseTimeForSearch"] = false;


$tdatakasir[".badgeColor"] = "6493EA";


$tdatakasir[".allSearchFields"] = array();
$tdatakasir[".filterFields"] = array();
$tdatakasir[".requiredSearchFields"] = array();

$tdatakasir[".googleLikeFields"] = array();
$tdatakasir[".googleLikeFields"][] = "group_member_order";
$tdatakasir[".googleLikeFields"][] = "group_member_id";
$tdatakasir[".googleLikeFields"][] = "member_id";
$tdatakasir[".googleLikeFields"][] = "group_id";
$tdatakasir[".googleLikeFields"][] = "order_date";
$tdatakasir[".googleLikeFields"][] = "valid";
$tdatakasir[".googleLikeFields"][] = "total";
$tdatakasir[".googleLikeFields"][] = "currency";
$tdatakasir[".googleLikeFields"][] = "review_member";
$tdatakasir[".googleLikeFields"][] = "rating_member";
$tdatakasir[".googleLikeFields"][] = "payment_status";



$tdatakasir[".tableType"] = "list";

$tdatakasir[".printerPageOrientation"] = 0;
$tdatakasir[".nPrinterPageScale"] = 100;

$tdatakasir[".nPrinterSplitRecords"] = 40;

$tdatakasir[".geocodingEnabled"] = false;










$tdatakasir[".pageSize"] = 20;

$tdatakasir[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatakasir[".strOrderBy"] = $tstrOrderBy;

$tdatakasir[".orderindexes"] = array();


$tdatakasir[".sqlHead"] = "SELECT group_member_order,  	group_member_id,  	member_id,  	group_id,  	order_date,  	valid,  	total,  	currency,  	review_member,  	rating_member,  	payment_status";
$tdatakasir[".sqlFrom"] = "FROM group_member_order";
$tdatakasir[".sqlWhereExpr"] = "";
$tdatakasir[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "user",
	'nameType' => 'Text',
	'where' => "group_member_order.member_id = ':session.member_id'",
	'showRowCount' => 0,
	'hideEmpty' => 1,
);
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "admin",
	'nameType' => 'Text',
	'where' => "group_id = ':session.group_id'",
	'showRowCount' => 0,
	'hideEmpty' => 1,
);
$tdatakasir[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakasir[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakasir[".arrGroupsPerPage"] = $arrGPP;

$tdatakasir[".highlightSearchResults"] = true;

$tableKeyskasir = array();
$tableKeyskasir[] = "group_member_order";
$tdatakasir[".Keys"] = $tableKeyskasir;


$tdatakasir[".hideMobileList"] = array();




//	group_member_order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_member_order";
	$fdata["GoodName"] = "group_member_order";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("kasir","group_member_order");
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


	$tdatakasir["group_member_order"] = $fdata;
		$tdatakasir[".searchableFields"][] = "group_member_order";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("kasir","group_member_id");
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

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "member_id", "lookup" => "member_id" );

	
	

	
	
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


	$tdatakasir["group_member_id"] = $fdata;
		$tdatakasir[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("kasir","member_id");
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

				$edata["LookupWhere"] = "personal.member_id = ':session.member_id'";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "group_member_id";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "group_id";

	
	
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


	$tdatakasir["member_id"] = $fdata;
		$tdatakasir[".searchableFields"][] = "member_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("kasir","group_id");
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
	$edata["LookupTable"] = "group11";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "group_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "group_name";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "member_id", "lookup" => "member_id" );

	
	

	
	
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


	$tdatakasir["group_id"] = $fdata;
		$tdatakasir[".searchableFields"][] = "group_id";
//	order_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "order_date";
	$fdata["GoodName"] = "order_date";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("kasir","order_date");
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


	$tdatakasir["order_date"] = $fdata;
		$tdatakasir[".searchableFields"][] = "order_date";
//	valid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "valid";
	$fdata["GoodName"] = "valid";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("kasir","valid");
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


	$tdatakasir["valid"] = $fdata;
		$tdatakasir[".searchableFields"][] = "valid";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("kasir","total");
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


	$tdatakasir["total"] = $fdata;
		$tdatakasir[".searchableFields"][] = "total";
//	currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "currency";
	$fdata["GoodName"] = "currency";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("kasir","currency");
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


	$tdatakasir["currency"] = $fdata;
		$tdatakasir[".searchableFields"][] = "currency";
//	review_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "review_member";
	$fdata["GoodName"] = "review_member";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("kasir","review_member");
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


	$tdatakasir["review_member"] = $fdata;
		$tdatakasir[".searchableFields"][] = "review_member";
//	rating_member
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rating_member";
	$fdata["GoodName"] = "rating_member";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("kasir","rating_member");
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


	$tdatakasir["rating_member"] = $fdata;
		$tdatakasir[".searchableFields"][] = "rating_member";
//	payment_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "payment_status";
	$fdata["GoodName"] = "payment_status";
	$fdata["ownerTable"] = "group_member_order";
	$fdata["Label"] = GetFieldLabel("kasir","payment_status");
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


	$tdatakasir["payment_status"] = $fdata;
		$tdatakasir[".searchableFields"][] = "payment_status";


$tables_data["kasir"]=&$tdatakasir;
$field_labels["kasir"] = &$fieldLabelskasir;
$fieldToolTips["kasir"] = &$fieldToolTipskasir;
$placeHolders["kasir"] = &$placeHolderskasir;
$page_titles["kasir"] = &$pageTitleskasir;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["kasir"] = array();
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


		
	$detailsTablesData["kasir"][$dIndex] = $detailsParam;

	
		$detailsTablesData["kasir"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["kasir"][$dIndex]["masterKeys"][]="group_member_order";

				$detailsTablesData["kasir"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["kasir"][$dIndex]["detailKeys"][]="group_member_order_id";

// tables which are master tables for current table (detail)
$masterTablesData["kasir"] = array();



	
				$strOriginalDetailsTable="group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["kasir"][0] = $masterParams;
				$masterTablesData["kasir"][0]["masterKeys"] = array();
	$masterTablesData["kasir"][0]["masterKeys"][]="group_id";
				$masterTablesData["kasir"][0]["detailKeys"] = array();
	$masterTablesData["kasir"][0]["detailKeys"][]="group_id";
		
	
				$strOriginalDetailsTable="group_member";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group_member";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group_member";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["kasir"][1] = $masterParams;
				$masterTablesData["kasir"][1]["masterKeys"] = array();
	$masterTablesData["kasir"][1]["masterKeys"][]="group_member_id";
				$masterTablesData["kasir"][1]["detailKeys"] = array();
	$masterTablesData["kasir"][1]["detailKeys"][]="group_member_id";
		
	
				$strOriginalDetailsTable="personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["kasir"][2] = $masterParams;
				$masterTablesData["kasir"][2]["masterKeys"] = array();
	$masterTablesData["kasir"][2]["masterKeys"][]="member_id";
				$masterTablesData["kasir"][2]["detailKeys"] = array();
	$masterTablesData["kasir"][2]["detailKeys"][]="member_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_kasir()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_member_order,  	group_member_id,  	member_id,  	group_id,  	order_date,  	valid,  	total,  	currency,  	review_member,  	rating_member,  	payment_status";
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
	"m_srcTableName" => "kasir"
));

$proto6["m_sql"] = "group_member_order";
$proto6["m_srcTableName"] = "kasir";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_id",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "kasir"
));

$proto8["m_sql"] = "group_member_id";
$proto8["m_srcTableName"] = "kasir";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "kasir"
));

$proto10["m_sql"] = "member_id";
$proto10["m_srcTableName"] = "kasir";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "kasir"
));

$proto12["m_sql"] = "group_id";
$proto12["m_srcTableName"] = "kasir";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "order_date",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "kasir"
));

$proto14["m_sql"] = "order_date";
$proto14["m_srcTableName"] = "kasir";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "valid",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "kasir"
));

$proto16["m_sql"] = "valid";
$proto16["m_srcTableName"] = "kasir";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "kasir"
));

$proto18["m_sql"] = "total";
$proto18["m_srcTableName"] = "kasir";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "currency",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "kasir"
));

$proto20["m_sql"] = "currency";
$proto20["m_srcTableName"] = "kasir";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "review_member",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "kasir"
));

$proto22["m_sql"] = "review_member";
$proto22["m_srcTableName"] = "kasir";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rating_member",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "kasir"
));

$proto24["m_sql"] = "rating_member";
$proto24["m_srcTableName"] = "kasir";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "payment_status",
	"m_strTable" => "group_member_order",
	"m_srcTableName" => "kasir"
));

$proto26["m_sql"] = "payment_status";
$proto26["m_srcTableName"] = "kasir";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "group_member_order";
$proto29["m_srcTableName"] = "kasir";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "group_member_order";
$proto29["m_columns"][] = "group_member_id";
$proto29["m_columns"][] = "member_id";
$proto29["m_columns"][] = "group_id";
$proto29["m_columns"][] = "order_date";
$proto29["m_columns"][] = "valid";
$proto29["m_columns"][] = "total";
$proto29["m_columns"][] = "currency";
$proto29["m_columns"][] = "review_member";
$proto29["m_columns"][] = "rating_member";
$proto29["m_columns"][] = "payment_status";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "group_member_order";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "kasir";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="kasir";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kasir = createSqlQuery_kasir();


	
		;

											

$tdatakasir[".sqlquery"] = $queryData_kasir;



include_once(getabspath("include/kasir_events.php"));
$tableEvents["kasir"] = new eventclass_kasir;
$tdatakasir[".hasEvents"] = true;

?>