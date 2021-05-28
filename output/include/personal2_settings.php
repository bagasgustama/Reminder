<?php
$tdatapersonal2 = array();
$tdatapersonal2[".searchableFields"] = array();
$tdatapersonal2[".ShortName"] = "personal2";
$tdatapersonal2[".OwnerID"] = "member_id";
$tdatapersonal2[".OriginalTable"] = "personal";


$tdatapersonal2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapersonal2[".originalPagesByType"] = $tdatapersonal2[".pagesByType"];
$tdatapersonal2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapersonal2[".originalPages"] = $tdatapersonal2[".pages"];
$tdatapersonal2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapersonal2[".originalDefaultPages"] = $tdatapersonal2[".defaultPages"];

//	field labels
$fieldLabelspersonal2 = array();
$fieldToolTipspersonal2 = array();
$pageTitlespersonal2 = array();
$placeHolderspersonal2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspersonal2["English"] = array();
	$fieldToolTipspersonal2["English"] = array();
	$placeHolderspersonal2["English"] = array();
	$pageTitlespersonal2["English"] = array();
	$fieldLabelspersonal2["English"]["member_id"] = "Member Id";
	$fieldToolTipspersonal2["English"]["member_id"] = "";
	$placeHolderspersonal2["English"]["member_id"] = "";
	$fieldLabelspersonal2["English"]["name"] = "Name";
	$fieldToolTipspersonal2["English"]["name"] = "";
	$placeHolderspersonal2["English"]["name"] = "";
	$fieldLabelspersonal2["English"]["mail"] = "Mail";
	$fieldToolTipspersonal2["English"]["mail"] = "";
	$placeHolderspersonal2["English"]["mail"] = "";
	$fieldLabelspersonal2["English"]["password"] = "Password";
	$fieldToolTipspersonal2["English"]["password"] = "";
	$placeHolderspersonal2["English"]["password"] = "";
	$fieldLabelspersonal2["English"]["country_id"] = "Country Id";
	$fieldToolTipspersonal2["English"]["country_id"] = "";
	$placeHolderspersonal2["English"]["country_id"] = "";
	$fieldLabelspersonal2["English"]["province_id"] = "Province Id";
	$fieldToolTipspersonal2["English"]["province_id"] = "";
	$placeHolderspersonal2["English"]["province_id"] = "";
	$fieldLabelspersonal2["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipspersonal2["English"]["group_member_id"] = "";
	$placeHolderspersonal2["English"]["group_member_id"] = "";
	if (count($fieldToolTipspersonal2["English"]))
		$tdatapersonal2[".isUseToolTips"] = true;
}


	$tdatapersonal2[".NCSearch"] = true;



$tdatapersonal2[".shortTableName"] = "personal2";
$tdatapersonal2[".nSecOptions"] = 1;

$tdatapersonal2[".mainTableOwnerID"] = "member_id";
$tdatapersonal2[".entityType"] = 1;
$tdatapersonal2[".connId"] = "notif_basic1_at_localhost";


$tdatapersonal2[".strOriginalTableName"] = "personal";

	



$tdatapersonal2[".showAddInPopup"] = false;

$tdatapersonal2[".showEditInPopup"] = false;

$tdatapersonal2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapersonal2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapersonal2[".listAjax"] = false;
//	temporary
$tdatapersonal2[".listAjax"] = false;

	$tdatapersonal2[".audit"] = false;

	$tdatapersonal2[".locking"] = false;


$pages = $tdatapersonal2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersonal2[".edit"] = true;
	$tdatapersonal2[".afterEditAction"] = 1;
	$tdatapersonal2[".closePopupAfterEdit"] = 1;
	$tdatapersonal2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersonal2[".add"] = true;
$tdatapersonal2[".afterAddAction"] = 1;
$tdatapersonal2[".closePopupAfterAdd"] = 1;
$tdatapersonal2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersonal2[".list"] = true;
}



$tdatapersonal2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersonal2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersonal2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersonal2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersonal2[".printFriendly"] = true;
}



$tdatapersonal2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersonal2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersonal2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersonal2[".isUseAjaxSuggest"] = true;

$tdatapersonal2[".rowHighlite"] = true;





$tdatapersonal2[".ajaxCodeSnippetAdded"] = false;

$tdatapersonal2[".buttonsAdded"] = false;

$tdatapersonal2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersonal2[".isUseTimeForSearch"] = false;


$tdatapersonal2[".badgeColor"] = "6DA5C8";


$tdatapersonal2[".allSearchFields"] = array();
$tdatapersonal2[".filterFields"] = array();
$tdatapersonal2[".requiredSearchFields"] = array();

$tdatapersonal2[".googleLikeFields"] = array();
$tdatapersonal2[".googleLikeFields"][] = "member_id";
$tdatapersonal2[".googleLikeFields"][] = "name";
$tdatapersonal2[".googleLikeFields"][] = "mail";
$tdatapersonal2[".googleLikeFields"][] = "password";
$tdatapersonal2[".googleLikeFields"][] = "country_id";
$tdatapersonal2[".googleLikeFields"][] = "province_id";
$tdatapersonal2[".googleLikeFields"][] = "group_member_id";



$tdatapersonal2[".tableType"] = "list";

$tdatapersonal2[".printerPageOrientation"] = 0;
$tdatapersonal2[".nPrinterPageScale"] = 100;

$tdatapersonal2[".nPrinterSplitRecords"] = 40;

$tdatapersonal2[".geocodingEnabled"] = false;










$tdatapersonal2[".pageSize"] = 20;

$tdatapersonal2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapersonal2[".strOrderBy"] = $tstrOrderBy;

$tdatapersonal2[".orderindexes"] = array();


$tdatapersonal2[".sqlHead"] = "SELECT personal.member_id,  personal.name,  personal.mail,  personal.password,  personal.country_id,  personal.province_id,  group_member.group_member_id";
$tdatapersonal2[".sqlFrom"] = "FROM personal  LEFT OUTER JOIN group_member ON personal.member_id = group_member.member_id";
$tdatapersonal2[".sqlWhereExpr"] = "";
$tdatapersonal2[".sqlTail"] = "";

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
$tdatapersonal2[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersonal2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersonal2[".arrGroupsPerPage"] = $arrGPP;

$tdatapersonal2[".highlightSearchResults"] = true;

$tableKeyspersonal2 = array();
$tableKeyspersonal2[] = "member_id";
$tdatapersonal2[".Keys"] = $tableKeyspersonal2;


$tdatapersonal2[".hideMobileList"] = array();




//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal2","member_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "member_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "personal.member_id";

	
	
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


	$tdatapersonal2["member_id"] = $fdata;
		$tdatapersonal2[".searchableFields"][] = "member_id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal2","name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "personal.name";

	
	
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


	$tdatapersonal2["name"] = $fdata;
		$tdatapersonal2[".searchableFields"][] = "name";
//	mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mail";
	$fdata["GoodName"] = "mail";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal2","mail");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mail";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "personal.mail";

	
	
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


	$tdatapersonal2["mail"] = $fdata;
		$tdatapersonal2[".searchableFields"][] = "mail";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal2","password");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "personal.password";

	
	
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


	$tdatapersonal2["password"] = $fdata;
		$tdatapersonal2[".searchableFields"][] = "password";
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal2","country_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "country_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "personal.country_id";

	
	
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


	$tdatapersonal2["country_id"] = $fdata;
		$tdatapersonal2[".searchableFields"][] = "country_id";
//	province_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "province_id";
	$fdata["GoodName"] = "province_id";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal2","province_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "province_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "personal.province_id";

	
	
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


	$tdatapersonal2["province_id"] = $fdata;
		$tdatapersonal2[".searchableFields"][] = "province_id";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "group_member";
	$fdata["Label"] = GetFieldLabel("personal2","group_member_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_member_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member.group_member_id";

	
	
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


	$tdatapersonal2["group_member_id"] = $fdata;
		$tdatapersonal2[".searchableFields"][] = "group_member_id";


$tables_data["personal2"]=&$tdatapersonal2;
$field_labels["personal2"] = &$fieldLabelspersonal2;
$fieldToolTips["personal2"] = &$fieldToolTipspersonal2;
$placeHolders["personal2"] = &$placeHolderspersonal2;
$page_titles["personal2"] = &$pageTitlespersonal2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["personal2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["personal2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_personal2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "personal.member_id,  personal.name,  personal.mail,  personal.password,  personal.country_id,  personal.province_id,  group_member.group_member_id";
$proto0["m_strFrom"] = "FROM personal  LEFT OUTER JOIN group_member ON personal.member_id = group_member.member_id";
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
	"m_srcTableName" => "personal2"
));

$proto6["m_sql"] = "personal.member_id";
$proto6["m_srcTableName"] = "personal2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal2"
));

$proto8["m_sql"] = "personal.name";
$proto8["m_srcTableName"] = "personal2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mail",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal2"
));

$proto10["m_sql"] = "personal.mail";
$proto10["m_srcTableName"] = "personal2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal2"
));

$proto12["m_sql"] = "personal.password";
$proto12["m_srcTableName"] = "personal2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal2"
));

$proto14["m_sql"] = "personal.country_id";
$proto14["m_srcTableName"] = "personal2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "province_id",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal2"
));

$proto16["m_sql"] = "personal.province_id";
$proto16["m_srcTableName"] = "personal2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_id",
	"m_strTable" => "group_member",
	"m_srcTableName" => "personal2"
));

$proto18["m_sql"] = "group_member.group_member_id";
$proto18["m_srcTableName"] = "personal2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "personal";
$proto21["m_srcTableName"] = "personal2";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "member_id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "mail";
$proto21["m_columns"][] = "password";
$proto21["m_columns"][] = "country_id";
$proto21["m_columns"][] = "province_id";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "personal";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "personal2";
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
												$proto24=array();
$proto24["m_link"] = "SQLL_LEFTJOIN";
			$proto25=array();
$proto25["m_strName"] = "group_member";
$proto25["m_srcTableName"] = "personal2";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "group_member_id";
$proto25["m_columns"][] = "member_id";
$proto25["m_columns"][] = "group_id";
$proto25["m_columns"][] = "user_type";
$proto25["m_columns"][] = "token_group";
$proto25["m_columns"][] = "identifier_group";
$proto25["m_columns"][] = "token_personal";
$proto25["m_columns"][] = "membership_type";
$proto25["m_columns"][] = "valid";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "LEFT OUTER JOIN group_member ON personal.member_id = group_member.member_id";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "personal2";
$proto26=array();
$proto26["m_sql"] = "personal.member_id = group_member.member_id";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal2"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= group_member.member_id";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="personal2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_personal2 = createSqlQuery_personal2();


	
		;

							

$tdatapersonal2[".sqlquery"] = $queryData_personal2;



$tableEvents["personal2"] = new eventsBase;
$tdatapersonal2[".hasEvents"] = false;

?>