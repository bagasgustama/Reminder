<?php
$tdatapersonal = array();
$tdatapersonal[".searchableFields"] = array();
$tdatapersonal[".ShortName"] = "personal";
$tdatapersonal[".OwnerID"] = "member_id";
$tdatapersonal[".OriginalTable"] = "personal";


$tdatapersonal[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapersonal[".originalPagesByType"] = $tdatapersonal[".pagesByType"];
$tdatapersonal[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapersonal[".originalPages"] = $tdatapersonal[".pages"];
$tdatapersonal[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapersonal[".originalDefaultPages"] = $tdatapersonal[".defaultPages"];

//	field labels
$fieldLabelspersonal = array();
$fieldToolTipspersonal = array();
$pageTitlespersonal = array();
$placeHolderspersonal = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspersonal["English"] = array();
	$fieldToolTipspersonal["English"] = array();
	$placeHolderspersonal["English"] = array();
	$pageTitlespersonal["English"] = array();
	$fieldLabelspersonal["English"]["member_id"] = "Member Id";
	$fieldToolTipspersonal["English"]["member_id"] = "";
	$placeHolderspersonal["English"]["member_id"] = "";
	$fieldLabelspersonal["English"]["name"] = "Name";
	$fieldToolTipspersonal["English"]["name"] = "";
	$placeHolderspersonal["English"]["name"] = "";
	$fieldLabelspersonal["English"]["mail"] = "Mail";
	$fieldToolTipspersonal["English"]["mail"] = "";
	$placeHolderspersonal["English"]["mail"] = "";
	$fieldLabelspersonal["English"]["password"] = "Password";
	$fieldToolTipspersonal["English"]["password"] = "";
	$placeHolderspersonal["English"]["password"] = "";
	$fieldLabelspersonal["English"]["country_id"] = "Country Id";
	$fieldToolTipspersonal["English"]["country_id"] = "";
	$placeHolderspersonal["English"]["country_id"] = "";
	$fieldLabelspersonal["English"]["province_id"] = "Province Id";
	$fieldToolTipspersonal["English"]["province_id"] = "";
	$placeHolderspersonal["English"]["province_id"] = "";
	$fieldLabelspersonal["English"]["apikey"] = "Apikey";
	$fieldToolTipspersonal["English"]["apikey"] = "";
	$placeHolderspersonal["English"]["apikey"] = "";
	if (count($fieldToolTipspersonal["English"]))
		$tdatapersonal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelspersonal["Indonesian"] = array();
	$fieldToolTipspersonal["Indonesian"] = array();
	$placeHolderspersonal["Indonesian"] = array();
	$pageTitlespersonal["Indonesian"] = array();
	$fieldLabelspersonal["Indonesian"]["member_id"] = "Member Id";
	$fieldToolTipspersonal["Indonesian"]["member_id"] = "";
	$placeHolderspersonal["Indonesian"]["member_id"] = "";
	$fieldLabelspersonal["Indonesian"]["name"] = "Name";
	$fieldToolTipspersonal["Indonesian"]["name"] = "";
	$placeHolderspersonal["Indonesian"]["name"] = "";
	$fieldLabelspersonal["Indonesian"]["mail"] = "Mail";
	$fieldToolTipspersonal["Indonesian"]["mail"] = "";
	$placeHolderspersonal["Indonesian"]["mail"] = "";
	$fieldLabelspersonal["Indonesian"]["password"] = "Password";
	$fieldToolTipspersonal["Indonesian"]["password"] = "";
	$placeHolderspersonal["Indonesian"]["password"] = "";
	$fieldLabelspersonal["Indonesian"]["country_id"] = "Country Id";
	$fieldToolTipspersonal["Indonesian"]["country_id"] = "";
	$placeHolderspersonal["Indonesian"]["country_id"] = "";
	$fieldLabelspersonal["Indonesian"]["province_id"] = "Province Id";
	$fieldToolTipspersonal["Indonesian"]["province_id"] = "";
	$placeHolderspersonal["Indonesian"]["province_id"] = "";
	$fieldLabelspersonal["Indonesian"]["apikey"] = "Apikey";
	$fieldToolTipspersonal["Indonesian"]["apikey"] = "";
	$placeHolderspersonal["Indonesian"]["apikey"] = "";
	if (count($fieldToolTipspersonal["Indonesian"]))
		$tdatapersonal[".isUseToolTips"] = true;
}


	$tdatapersonal[".NCSearch"] = true;



$tdatapersonal[".shortTableName"] = "personal";
$tdatapersonal[".nSecOptions"] = 1;

$tdatapersonal[".mainTableOwnerID"] = "member_id";
$tdatapersonal[".entityType"] = 0;
$tdatapersonal[".connId"] = "notif_basic1_at_localhost";


$tdatapersonal[".strOriginalTableName"] = "personal";

	



$tdatapersonal[".showAddInPopup"] = false;

$tdatapersonal[".showEditInPopup"] = false;

$tdatapersonal[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapersonal[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapersonal[".listAjax"] = false;
//	temporary
$tdatapersonal[".listAjax"] = false;

	$tdatapersonal[".audit"] = false;

	$tdatapersonal[".locking"] = false;


$pages = $tdatapersonal[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersonal[".edit"] = true;
	$tdatapersonal[".afterEditAction"] = 1;
	$tdatapersonal[".closePopupAfterEdit"] = 1;
	$tdatapersonal[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersonal[".add"] = true;
$tdatapersonal[".afterAddAction"] = 1;
$tdatapersonal[".closePopupAfterAdd"] = 1;
$tdatapersonal[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersonal[".list"] = true;
}



$tdatapersonal[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersonal[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersonal[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersonal[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersonal[".printFriendly"] = true;
}



$tdatapersonal[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersonal[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersonal[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersonal[".isUseAjaxSuggest"] = true;

$tdatapersonal[".rowHighlite"] = true;





$tdatapersonal[".ajaxCodeSnippetAdded"] = false;

$tdatapersonal[".buttonsAdded"] = false;

$tdatapersonal[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersonal[".isUseTimeForSearch"] = false;


$tdatapersonal[".badgeColor"] = "5F9EA0";


$tdatapersonal[".allSearchFields"] = array();
$tdatapersonal[".filterFields"] = array();
$tdatapersonal[".requiredSearchFields"] = array();

$tdatapersonal[".googleLikeFields"] = array();
$tdatapersonal[".googleLikeFields"][] = "member_id";
$tdatapersonal[".googleLikeFields"][] = "name";
$tdatapersonal[".googleLikeFields"][] = "mail";
$tdatapersonal[".googleLikeFields"][] = "password";
$tdatapersonal[".googleLikeFields"][] = "country_id";
$tdatapersonal[".googleLikeFields"][] = "province_id";
$tdatapersonal[".googleLikeFields"][] = "apikey";



$tdatapersonal[".tableType"] = "list";

$tdatapersonal[".printerPageOrientation"] = 0;
$tdatapersonal[".nPrinterPageScale"] = 100;

$tdatapersonal[".nPrinterSplitRecords"] = 40;

$tdatapersonal[".geocodingEnabled"] = false;










$tdatapersonal[".pageSize"] = 20;

$tdatapersonal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapersonal[".strOrderBy"] = $tstrOrderBy;

$tdatapersonal[".orderindexes"] = array();


$tdatapersonal[".sqlHead"] = "SELECT member_id,  	name,  	mail,  	password,  	country_id,  	province_id,  	apikey";
$tdatapersonal[".sqlFrom"] = "FROM personal";
$tdatapersonal[".sqlWhereExpr"] = "";
$tdatapersonal[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatapersonal[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersonal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersonal[".arrGroupsPerPage"] = $arrGPP;

$tdatapersonal[".highlightSearchResults"] = true;

$tableKeyspersonal = array();
$tableKeyspersonal[] = "member_id";
$tdatapersonal[".Keys"] = $tableKeyspersonal;


$tdatapersonal[".hideMobileList"] = array();




//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal","member_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatapersonal["member_id"] = $fdata;
		$tdatapersonal[".searchableFields"][] = "member_id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal","name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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


	$tdatapersonal["name"] = $fdata;
		$tdatapersonal[".searchableFields"][] = "name";
//	mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mail";
	$fdata["GoodName"] = "mail";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal","mail");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mail";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mail";

	
	
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
			$edata["EditParams"].= " maxlength=40";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
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


	$tdatapersonal["mail"] = $fdata;
		$tdatapersonal[".searchableFields"][] = "mail";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal","password");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
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


	$tdatapersonal["password"] = $fdata;
		$tdatapersonal[".searchableFields"][] = "password";
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal","country_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "country_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_id";

	
	
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
	$edata["LookupTable"] = "country";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "country_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "country_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "province_id";

	
	
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


	$tdatapersonal["country_id"] = $fdata;
		$tdatapersonal[".searchableFields"][] = "country_id";
//	province_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "province_id";
	$fdata["GoodName"] = "province_id";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal","province_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "province_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "province_id";

	
	
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
	$edata["LookupTable"] = "province";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "province_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "province_name";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "country_id", "lookup" => "country_id" );

	
	

	
	
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


	$tdatapersonal["province_id"] = $fdata;
		$tdatapersonal[".searchableFields"][] = "province_id";
//	apikey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "apikey";
	$fdata["GoodName"] = "apikey";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal","apikey");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "apikey";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apikey";

	
	
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


	$tdatapersonal["apikey"] = $fdata;
		$tdatapersonal[".searchableFields"][] = "apikey";


$tables_data["personal"]=&$tdatapersonal;
$field_labels["personal"] = &$fieldLabelspersonal;
$fieldToolTips["personal"] = &$fieldToolTipspersonal;
$placeHolders["personal"] = &$placeHolderspersonal;
$page_titles["personal"] = &$pageTitlespersonal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["personal"] = array();
//	personal_agenda
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="personal_agenda";
		$detailsParam["dOriginalTable"] = "personal_agenda";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "personal_agenda";
	$detailsParam["dCaptionTable"] = GetTableCaption("personal_agenda");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="member_id";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="member_id";
//	personal_channel
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="personal_channel";
		$detailsParam["dOriginalTable"] = "personal_channel";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "personal_channel";
	$detailsParam["dCaptionTable"] = GetTableCaption("personal_channel");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="member_id";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="member_id";
//	group_member_order_detail
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_order_detail";
		$detailsParam["dOriginalTable"] = "group_member_order_detail";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_order_detail";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_order_detail");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="member_id";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="member_id";
//	group_member_order
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_order";
		$detailsParam["dOriginalTable"] = "group_member_order";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_order";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_order");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="member_id";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="member_id";
//	group_member_agenda
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_agenda";
		$detailsParam["dOriginalTable"] = "group_member_agenda";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_agenda";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_agenda");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="member_id";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="member_id";
//	group_member_agenda_subscriber
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_agenda_subscriber";
		$detailsParam["dOriginalTable"] = "group_member_agenda_subscriber";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_agenda_subscriber";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_agenda_subscriber");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="member_id";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="member_id";
//	group_member
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member";
		$detailsParam["dOriginalTable"] = "group_member";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="member_id";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="member_id";
//	group_agenda_private
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_agenda_private";
		$detailsParam["dOriginalTable"] = "group_agenda_private";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_agenda_private";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_agenda_private");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="member_id";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="id_member";
//	group_agenda_general_logs
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_agenda_general_logs";
		$detailsParam["dOriginalTable"] = "group_agenda_general_logs";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_agenda_general_logs";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_agenda_general_logs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="member_id";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="member_id";
//	group_member_checkin
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_checkin";
		$detailsParam["dOriginalTable"] = "group_member_checkin";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_checkin";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_checkin");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="member_id";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="member_id";
//	validate_checkin
	
	

		$dIndex = 10;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="validate_checkin";
		$detailsParam["dOriginalTable"] = "group_member_checkin";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "validate_checkin";
	$detailsParam["dCaptionTable"] = GetTableCaption("validate_checkin");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="member_id";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="member_id";
//	validate_order
	
	

		$dIndex = 11;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="validate_order";
		$detailsParam["dOriginalTable"] = "group_member_order";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "validate_order";
	$detailsParam["dCaptionTable"] = GetTableCaption("validate_order");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="member_id";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="member_id";
//	review_order
	
	

		$dIndex = 12;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="review_order";
		$detailsParam["dOriginalTable"] = "group_member_order";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "review_order";
	$detailsParam["dCaptionTable"] = GetTableCaption("review_order");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="member_id";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="member_id";
//	review_checkin
	
	

		$dIndex = 13;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="review_checkin";
		$detailsParam["dOriginalTable"] = "group_member_checkin";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "review_checkin";
	$detailsParam["dCaptionTable"] = GetTableCaption("review_checkin");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="member_id";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="member_id";
//	update_order_progess
	
	

		$dIndex = 14;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="update_order_progess";
		$detailsParam["dOriginalTable"] = "group_member_order_detail";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "update_order_progess";
	$detailsParam["dCaptionTable"] = GetTableCaption("update_order_progess");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="member_id";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="member_id";
//	member checkin
	
	

		$dIndex = 15;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="member checkin";
		$detailsParam["dOriginalTable"] = "group_member_checkin";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "member_checkin";
	$detailsParam["dCaptionTable"] = GetTableCaption("member_checkin");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="member_id";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="member_id";
//	payment
	
	

		$dIndex = 16;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="payment";
		$detailsParam["dOriginalTable"] = "group_member_order";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "payment";
	$detailsParam["dCaptionTable"] = GetTableCaption("payment");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="member_id";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="member_id";

// tables which are master tables for current table (detail)
$masterTablesData["personal"] = array();



	
				$strOriginalDetailsTable="country";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="country";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "country";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["personal"][0] = $masterParams;
				$masterTablesData["personal"][0]["masterKeys"] = array();
	$masterTablesData["personal"][0]["masterKeys"][]="country_id";
				$masterTablesData["personal"][0]["detailKeys"] = array();
	$masterTablesData["personal"][0]["detailKeys"][]="country_id";
		
	
				$strOriginalDetailsTable="province";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="province";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "province";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["personal"][1] = $masterParams;
				$masterTablesData["personal"][1]["masterKeys"] = array();
	$masterTablesData["personal"][1]["masterKeys"][]="province_id";
				$masterTablesData["personal"][1]["detailKeys"] = array();
	$masterTablesData["personal"][1]["detailKeys"][]="province_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_personal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "member_id,  	name,  	mail,  	password,  	country_id,  	province_id,  	apikey";
$proto0["m_strFrom"] = "FROM personal";
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
	"m_strName" => "member_id",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal"
));

$proto6["m_sql"] = "member_id";
$proto6["m_srcTableName"] = "personal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "personal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mail",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal"
));

$proto10["m_sql"] = "mail";
$proto10["m_srcTableName"] = "personal";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal"
));

$proto12["m_sql"] = "password";
$proto12["m_srcTableName"] = "personal";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal"
));

$proto14["m_sql"] = "country_id";
$proto14["m_srcTableName"] = "personal";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "province_id",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal"
));

$proto16["m_sql"] = "province_id";
$proto16["m_srcTableName"] = "personal";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "apikey",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal"
));

$proto18["m_sql"] = "apikey";
$proto18["m_srcTableName"] = "personal";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "personal";
$proto21["m_srcTableName"] = "personal";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "member_id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "mail";
$proto21["m_columns"][] = "password";
$proto21["m_columns"][] = "country_id";
$proto21["m_columns"][] = "province_id";
$proto21["m_columns"][] = "apikey";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "personal";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "personal";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="personal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_personal = createSqlQuery_personal();


	
		;

							

$tdatapersonal[".sqlquery"] = $queryData_personal;



$tableEvents["personal"] = new eventsBase;
$tdatapersonal[".hasEvents"] = false;

?>