<?php
$tdataadmin_members = array();
$tdataadmin_members[".searchableFields"] = array();
$tdataadmin_members[".ShortName"] = "admin_members";
$tdataadmin_members[".OwnerID"] = "";
$tdataadmin_members[".OriginalTable"] = "personal";


$tdataadmin_members[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataadmin_members[".originalPagesByType"] = $tdataadmin_members[".pagesByType"];
$tdataadmin_members[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataadmin_members[".originalPages"] = $tdataadmin_members[".pages"];
$tdataadmin_members[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataadmin_members[".originalDefaultPages"] = $tdataadmin_members[".defaultPages"];

//	field labels
$fieldLabelsadmin_members = array();
$fieldToolTipsadmin_members = array();
$pageTitlesadmin_members = array();
$placeHoldersadmin_members = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_members["English"] = array();
	$fieldToolTipsadmin_members["English"] = array();
	$placeHoldersadmin_members["English"] = array();
	$pageTitlesadmin_members["English"] = array();
	$fieldLabelsadmin_members["English"]["member_id"] = "Member Id";
	$fieldToolTipsadmin_members["English"]["member_id"] = "";
	$placeHoldersadmin_members["English"]["member_id"] = "";
	$fieldLabelsadmin_members["English"]["name"] = "Name";
	$fieldToolTipsadmin_members["English"]["name"] = "";
	$placeHoldersadmin_members["English"]["name"] = "";
	$fieldLabelsadmin_members["English"]["mail"] = "Mail";
	$fieldToolTipsadmin_members["English"]["mail"] = "";
	$placeHoldersadmin_members["English"]["mail"] = "";
	$fieldLabelsadmin_members["English"]["password"] = "Password";
	$fieldToolTipsadmin_members["English"]["password"] = "";
	$placeHoldersadmin_members["English"]["password"] = "";
	$fieldLabelsadmin_members["English"]["country_id"] = "Country Id";
	$fieldToolTipsadmin_members["English"]["country_id"] = "";
	$placeHoldersadmin_members["English"]["country_id"] = "";
	$fieldLabelsadmin_members["English"]["province_id"] = "Province Id";
	$fieldToolTipsadmin_members["English"]["province_id"] = "";
	$placeHoldersadmin_members["English"]["province_id"] = "";
	if (count($fieldToolTipsadmin_members["English"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsadmin_members["Indonesian"] = array();
	$fieldToolTipsadmin_members["Indonesian"] = array();
	$placeHoldersadmin_members["Indonesian"] = array();
	$pageTitlesadmin_members["Indonesian"] = array();
	$fieldLabelsadmin_members["Indonesian"]["member_id"] = "Member Id";
	$fieldToolTipsadmin_members["Indonesian"]["member_id"] = "";
	$placeHoldersadmin_members["Indonesian"]["member_id"] = "";
	$fieldLabelsadmin_members["Indonesian"]["name"] = "Name";
	$fieldToolTipsadmin_members["Indonesian"]["name"] = "";
	$placeHoldersadmin_members["Indonesian"]["name"] = "";
	$fieldLabelsadmin_members["Indonesian"]["mail"] = "Mail";
	$fieldToolTipsadmin_members["Indonesian"]["mail"] = "";
	$placeHoldersadmin_members["Indonesian"]["mail"] = "";
	$fieldLabelsadmin_members["Indonesian"]["password"] = "Password";
	$fieldToolTipsadmin_members["Indonesian"]["password"] = "";
	$placeHoldersadmin_members["Indonesian"]["password"] = "";
	$fieldLabelsadmin_members["Indonesian"]["country_id"] = "Country Id";
	$fieldToolTipsadmin_members["Indonesian"]["country_id"] = "";
	$placeHoldersadmin_members["Indonesian"]["country_id"] = "";
	$fieldLabelsadmin_members["Indonesian"]["province_id"] = "Province Id";
	$fieldToolTipsadmin_members["Indonesian"]["province_id"] = "";
	$placeHoldersadmin_members["Indonesian"]["province_id"] = "";
	if (count($fieldToolTipsadmin_members["Indonesian"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}


	$tdataadmin_members[".NCSearch"] = true;



$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 0;

$tdataadmin_members[".mainTableOwnerID"] = "";
$tdataadmin_members[".entityType"] = 1;
$tdataadmin_members[".connId"] = "notif_basic1_at_localhost";


$tdataadmin_members[".strOriginalTableName"] = "personal";

	



$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_members[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_members[".listAjax"] = false;
//	temporary
$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = false;

	$tdataadmin_members[".locking"] = false;


$pages = $tdataadmin_members[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadmin_members[".edit"] = true;
	$tdataadmin_members[".afterEditAction"] = 1;
	$tdataadmin_members[".closePopupAfterEdit"] = 1;
	$tdataadmin_members[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadmin_members[".add"] = true;
$tdataadmin_members[".afterAddAction"] = 1;
$tdataadmin_members[".closePopupAfterAdd"] = 1;
$tdataadmin_members[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadmin_members[".list"] = true;
}



$tdataadmin_members[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadmin_members[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadmin_members[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadmin_members[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadmin_members[".printFriendly"] = true;
}



$tdataadmin_members[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadmin_members[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadmin_members[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadmin_members[".isUseAjaxSuggest"] = true;

$tdataadmin_members[".rowHighlite"] = true;





$tdataadmin_members[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_members[".buttonsAdded"] = false;

$tdataadmin_members[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;


$tdataadmin_members[".badgeColor"] = "8FBC8B";


$tdataadmin_members[".allSearchFields"] = array();
$tdataadmin_members[".filterFields"] = array();
$tdataadmin_members[".requiredSearchFields"] = array();

$tdataadmin_members[".googleLikeFields"] = array();
$tdataadmin_members[".googleLikeFields"][] = "member_id";
$tdataadmin_members[".googleLikeFields"][] = "name";
$tdataadmin_members[".googleLikeFields"][] = "mail";
$tdataadmin_members[".googleLikeFields"][] = "password";
$tdataadmin_members[".googleLikeFields"][] = "country_id";
$tdataadmin_members[".googleLikeFields"][] = "province_id";



$tdataadmin_members[".tableType"] = "list";

$tdataadmin_members[".printerPageOrientation"] = 0;
$tdataadmin_members[".nPrinterPageScale"] = 100;

$tdataadmin_members[".nPrinterSplitRecords"] = 40;

$tdataadmin_members[".geocodingEnabled"] = false;










$tdataadmin_members[".pageSize"] = 20;

$tdataadmin_members[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_members[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_members[".orderindexes"] = array();


$tdataadmin_members[".sqlHead"] = "SELECT member_id,  	name,  	mail,  	password,  	country_id,  	province_id";
$tdataadmin_members[".sqlFrom"] = "FROM personal";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_members[".highlightSearchResults"] = true;

$tableKeysadmin_members = array();
$tableKeysadmin_members[] = "member_id";
$tdataadmin_members[".Keys"] = $tableKeysadmin_members;


$tdataadmin_members[".hideMobileList"] = array();




//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("admin_members","member_id");
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


	$tdataadmin_members["member_id"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "member_id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("admin_members","name");
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


	$tdataadmin_members["name"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "name";
//	mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mail";
	$fdata["GoodName"] = "mail";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("admin_members","mail");
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


	$tdataadmin_members["mail"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "mail";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("admin_members","password");
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


	$tdataadmin_members["password"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "password";
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("admin_members","country_id");
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


	$tdataadmin_members["country_id"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "country_id";
//	province_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "province_id";
	$fdata["GoodName"] = "province_id";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("admin_members","province_id");
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


	$tdataadmin_members["province_id"] = $fdata;
		$tdataadmin_members[".searchableFields"][] = "province_id";


$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;
$placeHolders["admin_members"] = &$placeHoldersadmin_members;
$page_titles["admin_members"] = &$pageTitlesadmin_members;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_members"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_admin_members()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "member_id,  	name,  	mail,  	password,  	country_id,  	province_id";
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
	"m_srcTableName" => "admin_members"
));

$proto6["m_sql"] = "member_id";
$proto6["m_srcTableName"] = "admin_members";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "personal",
	"m_srcTableName" => "admin_members"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "admin_members";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mail",
	"m_strTable" => "personal",
	"m_srcTableName" => "admin_members"
));

$proto10["m_sql"] = "mail";
$proto10["m_srcTableName"] = "admin_members";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "personal",
	"m_srcTableName" => "admin_members"
));

$proto12["m_sql"] = "password";
$proto12["m_srcTableName"] = "admin_members";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "personal",
	"m_srcTableName" => "admin_members"
));

$proto14["m_sql"] = "country_id";
$proto14["m_srcTableName"] = "admin_members";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "province_id",
	"m_strTable" => "personal",
	"m_srcTableName" => "admin_members"
));

$proto16["m_sql"] = "province_id";
$proto16["m_srcTableName"] = "admin_members";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "personal";
$proto19["m_srcTableName"] = "admin_members";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "member_id";
$proto19["m_columns"][] = "name";
$proto19["m_columns"][] = "mail";
$proto19["m_columns"][] = "password";
$proto19["m_columns"][] = "country_id";
$proto19["m_columns"][] = "province_id";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "personal";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "admin_members";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="admin_members";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_members = createSqlQuery_admin_members();


	
		;

						

$tdataadmin_members[".sqlquery"] = $queryData_admin_members;



$tableEvents["admin_members"] = new eventsBase;
$tdataadmin_members[".hasEvents"] = false;

?>