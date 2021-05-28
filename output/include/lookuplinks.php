<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["membership_type"] ) ) {
			$lookupTableLinks["membership_type"] = array();
		}
		if( !isset( $lookupTableLinks["membership_type"]["group.membership_type"] )) {
			$lookupTableLinks["membership_type"]["group.membership_type"] = array();
		}
		$lookupTableLinks["membership_type"]["group.membership_type"]["edit"] = array("table" => "group", "field" => "membership_type", "page" => "edit");
		if( !isset( $lookupTableLinks["business_type"] ) ) {
			$lookupTableLinks["business_type"] = array();
		}
		if( !isset( $lookupTableLinks["business_type"]["group.business_type"] )) {
			$lookupTableLinks["business_type"]["group.business_type"] = array();
		}
		$lookupTableLinks["business_type"]["group.business_type"]["edit"] = array("table" => "group", "field" => "business_type", "page" => "edit");
		if( !isset( $lookupTableLinks["country"] ) ) {
			$lookupTableLinks["country"] = array();
		}
		if( !isset( $lookupTableLinks["country"]["province.country_id"] )) {
			$lookupTableLinks["country"]["province.country_id"] = array();
		}
		$lookupTableLinks["country"]["province.country_id"]["edit"] = array("table" => "province", "field" => "country_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["personal_channel.member_id"] )) {
			$lookupTableLinks["personal"]["personal_channel.member_id"] = array();
		}
		$lookupTableLinks["personal"]["personal_channel.member_id"]["edit"] = array("table" => "personal_channel", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["channel"] ) ) {
			$lookupTableLinks["channel"] = array();
		}
		if( !isset( $lookupTableLinks["channel"]["personal_channel.channel_id"] )) {
			$lookupTableLinks["channel"]["personal_channel.channel_id"] = array();
		}
		$lookupTableLinks["channel"]["personal_channel.channel_id"]["edit"] = array("table" => "personal_channel", "field" => "channel_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal_agenda"] ) ) {
			$lookupTableLinks["personal_agenda"] = array();
		}
		if( !isset( $lookupTableLinks["personal_agenda"]["personal_agenda_repeat_date.member_agenda_id"] )) {
			$lookupTableLinks["personal_agenda"]["personal_agenda_repeat_date.member_agenda_id"] = array();
		}
		$lookupTableLinks["personal_agenda"]["personal_agenda_repeat_date.member_agenda_id"]["edit"] = array("table" => "personal_agenda_repeat_date", "field" => "member_agenda_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["personal_agenda.member_id"] )) {
			$lookupTableLinks["personal"]["personal_agenda.member_id"] = array();
		}
		$lookupTableLinks["personal"]["personal_agenda.member_id"]["edit"] = array("table" => "personal_agenda", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["loop_type"] ) ) {
			$lookupTableLinks["loop_type"] = array();
		}
		if( !isset( $lookupTableLinks["loop_type"]["personal_agenda.loop_type"] )) {
			$lookupTableLinks["loop_type"]["personal_agenda.loop_type"] = array();
		}
		$lookupTableLinks["loop_type"]["personal_agenda.loop_type"]["edit"] = array("table" => "personal_agenda", "field" => "loop_type", "page" => "edit");
		if( !isset( $lookupTableLinks["country"] ) ) {
			$lookupTableLinks["country"] = array();
		}
		if( !isset( $lookupTableLinks["country"]["personal.country_id"] )) {
			$lookupTableLinks["country"]["personal.country_id"] = array();
		}
		$lookupTableLinks["country"]["personal.country_id"]["edit"] = array("table" => "personal", "field" => "country_id", "page" => "edit");
		if( !isset( $lookupTableLinks["province"] ) ) {
			$lookupTableLinks["province"] = array();
		}
		if( !isset( $lookupTableLinks["province"]["personal.province_id"] )) {
			$lookupTableLinks["province"]["personal.province_id"] = array();
		}
		$lookupTableLinks["province"]["personal.province_id"]["edit"] = array("table" => "personal", "field" => "province_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["lookup_token.id_group"] )) {
			$lookupTableLinks["group"]["lookup_token.id_group"] = array();
		}
		$lookupTableLinks["group"]["lookup_token.id_group"]["edit"] = array("table" => "lookup_token", "field" => "id_group", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["group_operation_off.group_id"] )) {
			$lookupTableLinks["group"]["group_operation_off.group_id"] = array();
		}
		$lookupTableLinks["group"]["group_operation_off.group_id"]["edit"] = array("table" => "group_operation_off", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["group_product.group_id"] )) {
			$lookupTableLinks["group"]["group_product.group_id"] = array();
		}
		$lookupTableLinks["group"]["group_product.group_id"]["edit"] = array("table" => "group_product", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["product_type"] ) ) {
			$lookupTableLinks["product_type"] = array();
		}
		if( !isset( $lookupTableLinks["product_type"]["group_product.product_type"] )) {
			$lookupTableLinks["product_type"]["group_product.product_type"] = array();
		}
		$lookupTableLinks["product_type"]["group_product.product_type"]["edit"] = array("table" => "group_product", "field" => "product_type", "page" => "edit");
		if( !isset( $lookupTableLinks["stock_type"] ) ) {
			$lookupTableLinks["stock_type"] = array();
		}
		if( !isset( $lookupTableLinks["stock_type"]["group_product.stock_type"] )) {
			$lookupTableLinks["stock_type"]["group_product.stock_type"] = array();
		}
		$lookupTableLinks["stock_type"]["group_product.stock_type"]["edit"] = array("table" => "group_product", "field" => "stock_type", "page" => "edit");
		if( !isset( $lookupTableLinks["order_type"] ) ) {
			$lookupTableLinks["order_type"] = array();
		}
		if( !isset( $lookupTableLinks["order_type"]["group_product.order_type"] )) {
			$lookupTableLinks["order_type"]["group_product.order_type"] = array();
		}
		$lookupTableLinks["order_type"]["group_product.order_type"]["edit"] = array("table" => "group_product", "field" => "order_type", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member_order"] ) ) {
			$lookupTableLinks["group_member_order"] = array();
		}
		if( !isset( $lookupTableLinks["group_member_order"]["group_member_order_detail.group_member_order_id"] )) {
			$lookupTableLinks["group_member_order"]["group_member_order_detail.group_member_order_id"] = array();
		}
		$lookupTableLinks["group_member_order"]["group_member_order_detail.group_member_order_id"]["edit"] = array("table" => "group_member_order_detail", "field" => "group_member_order_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member"] ) ) {
			$lookupTableLinks["group_member"] = array();
		}
		if( !isset( $lookupTableLinks["group_member"]["group_member_order_detail.group_member_id"] )) {
			$lookupTableLinks["group_member"]["group_member_order_detail.group_member_id"] = array();
		}
		$lookupTableLinks["group_member"]["group_member_order_detail.group_member_id"]["edit"] = array("table" => "group_member_order_detail", "field" => "group_member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["group_member_order_detail.member_id"] )) {
			$lookupTableLinks["personal"]["group_member_order_detail.member_id"] = array();
		}
		$lookupTableLinks["personal"]["group_member_order_detail.member_id"]["edit"] = array("table" => "group_member_order_detail", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group3"] ) ) {
			$lookupTableLinks["group3"] = array();
		}
		if( !isset( $lookupTableLinks["group3"]["group_member_order_detail.group_id"] )) {
			$lookupTableLinks["group3"]["group_member_order_detail.group_id"] = array();
		}
		$lookupTableLinks["group3"]["group_member_order_detail.group_id"]["edit"] = array("table" => "group_member_order_detail", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_product1"] ) ) {
			$lookupTableLinks["group_product1"] = array();
		}
		if( !isset( $lookupTableLinks["group_product1"]["group_member_order_detail.group_product_id"] )) {
			$lookupTableLinks["group_product1"]["group_member_order_detail.group_product_id"] = array();
		}
		$lookupTableLinks["group_product1"]["group_member_order_detail.group_product_id"]["edit"] = array("table" => "group_member_order_detail", "field" => "group_product_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member"] ) ) {
			$lookupTableLinks["group_member"] = array();
		}
		if( !isset( $lookupTableLinks["group_member"]["group_member_order.group_member_id"] )) {
			$lookupTableLinks["group_member"]["group_member_order.group_member_id"] = array();
		}
		$lookupTableLinks["group_member"]["group_member_order.group_member_id"]["edit"] = array("table" => "group_member_order", "field" => "group_member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["group_member_order.member_id"] )) {
			$lookupTableLinks["personal"]["group_member_order.member_id"] = array();
		}
		$lookupTableLinks["personal"]["group_member_order.member_id"]["edit"] = array("table" => "group_member_order", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group11"] ) ) {
			$lookupTableLinks["group11"] = array();
		}
		if( !isset( $lookupTableLinks["group11"]["group_member_order.group_id"] )) {
			$lookupTableLinks["group11"]["group_member_order.group_id"] = array();
		}
		$lookupTableLinks["group11"]["group_member_order.group_id"]["edit"] = array("table" => "group_member_order", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["group_member_agenda_subscriber.member_id"] )) {
			$lookupTableLinks["personal"]["group_member_agenda_subscriber.member_id"] = array();
		}
		$lookupTableLinks["personal"]["group_member_agenda_subscriber.member_id"]["edit"] = array("table" => "group_member_agenda_subscriber", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_agenda_type1"] ) ) {
			$lookupTableLinks["group_agenda_type1"] = array();
		}
		if( !isset( $lookupTableLinks["group_agenda_type1"]["group_member_agenda_subscriber.agenda_type_id"] )) {
			$lookupTableLinks["group_agenda_type1"]["group_member_agenda_subscriber.agenda_type_id"] = array();
		}
		$lookupTableLinks["group_agenda_type1"]["group_member_agenda_subscriber.agenda_type_id"]["edit"] = array("table" => "group_member_agenda_subscriber", "field" => "agenda_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member"] ) ) {
			$lookupTableLinks["group_member"] = array();
		}
		if( !isset( $lookupTableLinks["group_member"]["group_member_agenda.group_member_id"] )) {
			$lookupTableLinks["group_member"]["group_member_agenda.group_member_id"] = array();
		}
		$lookupTableLinks["group_member"]["group_member_agenda.group_member_id"]["edit"] = array("table" => "group_member_agenda", "field" => "group_member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["group_member_agenda.member_id"] )) {
			$lookupTableLinks["personal"]["group_member_agenda.member_id"] = array();
		}
		$lookupTableLinks["personal"]["group_member_agenda.member_id"]["edit"] = array("table" => "group_member_agenda", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_agenda"] ) ) {
			$lookupTableLinks["group_agenda"] = array();
		}
		if( !isset( $lookupTableLinks["group_agenda"]["group_member_agenda.group_agenda_id"] )) {
			$lookupTableLinks["group_agenda"]["group_member_agenda.group_agenda_id"] = array();
		}
		$lookupTableLinks["group_agenda"]["group_member_agenda.group_agenda_id"]["edit"] = array("table" => "group_member_agenda", "field" => "group_agenda_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["group_member.member_id"] )) {
			$lookupTableLinks["personal"]["group_member.member_id"] = array();
		}
		$lookupTableLinks["personal"]["group_member.member_id"]["edit"] = array("table" => "group_member", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["group_member.group_id"] )) {
			$lookupTableLinks["group"]["group_member.group_id"] = array();
		}
		$lookupTableLinks["group"]["group_member.group_id"]["edit"] = array("table" => "group_member", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_user_type"] ) ) {
			$lookupTableLinks["group_user_type"] = array();
		}
		if( !isset( $lookupTableLinks["group_user_type"]["group_member.user_type"] )) {
			$lookupTableLinks["group_user_type"]["group_member.user_type"] = array();
		}
		$lookupTableLinks["group_user_type"]["group_member.user_type"]["edit"] = array("table" => "group_member", "field" => "user_type", "page" => "edit");
		if( !isset( $lookupTableLinks["membership_type"] ) ) {
			$lookupTableLinks["membership_type"] = array();
		}
		if( !isset( $lookupTableLinks["membership_type"]["group_member.membership_type"] )) {
			$lookupTableLinks["membership_type"]["group_member.membership_type"] = array();
		}
		$lookupTableLinks["membership_type"]["group_member.membership_type"]["edit"] = array("table" => "group_member", "field" => "membership_type", "page" => "edit");
		if( !isset( $lookupTableLinks["group_agenda"] ) ) {
			$lookupTableLinks["group_agenda"] = array();
		}
		if( !isset( $lookupTableLinks["group_agenda"]["group_agenda_private.id_group_agenda"] )) {
			$lookupTableLinks["group_agenda"]["group_agenda_private.id_group_agenda"] = array();
		}
		$lookupTableLinks["group_agenda"]["group_agenda_private.id_group_agenda"]["edit"] = array("table" => "group_agenda_private", "field" => "id_group_agenda", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["group_agenda_private.id_member"] )) {
			$lookupTableLinks["personal"]["group_agenda_private.id_member"] = array();
		}
		$lookupTableLinks["personal"]["group_agenda_private.id_member"]["edit"] = array("table" => "group_agenda_private", "field" => "id_member", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["group_agenda_general_logs.member_id"] )) {
			$lookupTableLinks["personal"]["group_agenda_general_logs.member_id"] = array();
		}
		$lookupTableLinks["personal"]["group_agenda_general_logs.member_id"]["edit"] = array("table" => "group_agenda_general_logs", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_agenda"] ) ) {
			$lookupTableLinks["group_agenda"] = array();
		}
		if( !isset( $lookupTableLinks["group_agenda"]["group_agenda_general_logs.id_group_agenda"] )) {
			$lookupTableLinks["group_agenda"]["group_agenda_general_logs.id_group_agenda"] = array();
		}
		$lookupTableLinks["group_agenda"]["group_agenda_general_logs.id_group_agenda"]["edit"] = array("table" => "group_agenda_general_logs", "field" => "id_group_agenda", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["group_agenda.group_id"] )) {
			$lookupTableLinks["group"]["group_agenda.group_id"] = array();
		}
		$lookupTableLinks["group"]["group_agenda.group_id"]["edit"] = array("table" => "group_agenda", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_agenda_type"] ) ) {
			$lookupTableLinks["group_agenda_type"] = array();
		}
		if( !isset( $lookupTableLinks["group_agenda_type"]["group_agenda.agenda_type_id"] )) {
			$lookupTableLinks["group_agenda_type"]["group_agenda.agenda_type_id"] = array();
		}
		$lookupTableLinks["group_agenda_type"]["group_agenda.agenda_type_id"]["edit"] = array("table" => "group_agenda", "field" => "agenda_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["loop_type"] ) ) {
			$lookupTableLinks["loop_type"] = array();
		}
		if( !isset( $lookupTableLinks["loop_type"]["group_agenda.loop_id"] )) {
			$lookupTableLinks["loop_type"]["group_agenda.loop_id"] = array();
		}
		$lookupTableLinks["loop_type"]["group_agenda.loop_id"]["edit"] = array("table" => "group_agenda", "field" => "loop_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_agenda"] ) ) {
			$lookupTableLinks["group_agenda"] = array();
		}
		if( !isset( $lookupTableLinks["group_agenda"]["group_agenda_repeat_date.group_agenda_id"] )) {
			$lookupTableLinks["group_agenda"]["group_agenda_repeat_date.group_agenda_id"] = array();
		}
		$lookupTableLinks["group_agenda"]["group_agenda_repeat_date.group_agenda_id"]["edit"] = array("table" => "group_agenda_repeat_date", "field" => "group_agenda_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member11"] ) ) {
			$lookupTableLinks["group_member11"] = array();
		}
		if( !isset( $lookupTableLinks["group_member11"]["group_member_checkin.group_member_id"] )) {
			$lookupTableLinks["group_member11"]["group_member_checkin.group_member_id"] = array();
		}
		$lookupTableLinks["group_member11"]["group_member_checkin.group_member_id"]["edit"] = array("table" => "group_member_checkin", "field" => "group_member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal11"] ) ) {
			$lookupTableLinks["personal11"] = array();
		}
		if( !isset( $lookupTableLinks["personal11"]["group_member_checkin.member_id"] )) {
			$lookupTableLinks["personal11"]["group_member_checkin.member_id"] = array();
		}
		$lookupTableLinks["personal11"]["group_member_checkin.member_id"]["edit"] = array("table" => "group_member_checkin", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["group_member_checkin.group_id"] )) {
			$lookupTableLinks["group"]["group_member_checkin.group_id"] = array();
		}
		$lookupTableLinks["group"]["group_member_checkin.group_id"]["edit"] = array("table" => "group_member_checkin", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["group_agenda_type.group_id"] )) {
			$lookupTableLinks["group"]["group_agenda_type.group_id"] = array();
		}
		$lookupTableLinks["group"]["group_agenda_type.group_id"]["edit"] = array("table" => "group_agenda_type", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member"] ) ) {
			$lookupTableLinks["group_member"] = array();
		}
		if( !isset( $lookupTableLinks["group_member"]["validate_checkin.group_member_id"] )) {
			$lookupTableLinks["group_member"]["validate_checkin.group_member_id"] = array();
		}
		$lookupTableLinks["group_member"]["validate_checkin.group_member_id"]["edit"] = array("table" => "validate_checkin", "field" => "group_member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["validate_checkin.member_id"] )) {
			$lookupTableLinks["personal"]["validate_checkin.member_id"] = array();
		}
		$lookupTableLinks["personal"]["validate_checkin.member_id"]["edit"] = array("table" => "validate_checkin", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["validate_checkin.group_id"] )) {
			$lookupTableLinks["group"]["validate_checkin.group_id"] = array();
		}
		$lookupTableLinks["group"]["validate_checkin.group_id"]["edit"] = array("table" => "validate_checkin", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member"] ) ) {
			$lookupTableLinks["group_member"] = array();
		}
		if( !isset( $lookupTableLinks["group_member"]["validate_order.group_member_id"] )) {
			$lookupTableLinks["group_member"]["validate_order.group_member_id"] = array();
		}
		$lookupTableLinks["group_member"]["validate_order.group_member_id"]["edit"] = array("table" => "validate_order", "field" => "group_member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["validate_order.member_id"] )) {
			$lookupTableLinks["personal"]["validate_order.member_id"] = array();
		}
		$lookupTableLinks["personal"]["validate_order.member_id"]["edit"] = array("table" => "validate_order", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["validate_order.group_id"] )) {
			$lookupTableLinks["group"]["validate_order.group_id"] = array();
		}
		$lookupTableLinks["group"]["validate_order.group_id"]["edit"] = array("table" => "validate_order", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member"] ) ) {
			$lookupTableLinks["group_member"] = array();
		}
		if( !isset( $lookupTableLinks["group_member"]["review_order.group_member_id"] )) {
			$lookupTableLinks["group_member"]["review_order.group_member_id"] = array();
		}
		$lookupTableLinks["group_member"]["review_order.group_member_id"]["edit"] = array("table" => "review_order", "field" => "group_member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["review_order.member_id"] )) {
			$lookupTableLinks["personal"]["review_order.member_id"] = array();
		}
		$lookupTableLinks["personal"]["review_order.member_id"]["edit"] = array("table" => "review_order", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["review_order.group_id"] )) {
			$lookupTableLinks["group"]["review_order.group_id"] = array();
		}
		$lookupTableLinks["group"]["review_order.group_id"]["edit"] = array("table" => "review_order", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member"] ) ) {
			$lookupTableLinks["group_member"] = array();
		}
		if( !isset( $lookupTableLinks["group_member"]["review_checkin.group_member_id"] )) {
			$lookupTableLinks["group_member"]["review_checkin.group_member_id"] = array();
		}
		$lookupTableLinks["group_member"]["review_checkin.group_member_id"]["edit"] = array("table" => "review_checkin", "field" => "group_member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["review_checkin.member_id"] )) {
			$lookupTableLinks["personal"]["review_checkin.member_id"] = array();
		}
		$lookupTableLinks["personal"]["review_checkin.member_id"]["edit"] = array("table" => "review_checkin", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["review_checkin.group_id"] )) {
			$lookupTableLinks["group"]["review_checkin.group_id"] = array();
		}
		$lookupTableLinks["group"]["review_checkin.group_id"]["edit"] = array("table" => "review_checkin", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member_order"] ) ) {
			$lookupTableLinks["group_member_order"] = array();
		}
		if( !isset( $lookupTableLinks["group_member_order"]["update_order_progess.group_member_order_id"] )) {
			$lookupTableLinks["group_member_order"]["update_order_progess.group_member_order_id"] = array();
		}
		$lookupTableLinks["group_member_order"]["update_order_progess.group_member_order_id"]["edit"] = array("table" => "update_order_progess", "field" => "group_member_order_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member"] ) ) {
			$lookupTableLinks["group_member"] = array();
		}
		if( !isset( $lookupTableLinks["group_member"]["update_order_progess.group_member_id"] )) {
			$lookupTableLinks["group_member"]["update_order_progess.group_member_id"] = array();
		}
		$lookupTableLinks["group_member"]["update_order_progess.group_member_id"]["edit"] = array("table" => "update_order_progess", "field" => "group_member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["update_order_progess.member_id"] )) {
			$lookupTableLinks["personal"]["update_order_progess.member_id"] = array();
		}
		$lookupTableLinks["personal"]["update_order_progess.member_id"]["edit"] = array("table" => "update_order_progess", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["update_order_progess.group_id"] )) {
			$lookupTableLinks["group"]["update_order_progess.group_id"] = array();
		}
		$lookupTableLinks["group"]["update_order_progess.group_id"]["edit"] = array("table" => "update_order_progess", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_product"] ) ) {
			$lookupTableLinks["group_product"] = array();
		}
		if( !isset( $lookupTableLinks["group_product"]["update_order_progess.group_product_id"] )) {
			$lookupTableLinks["group_product"]["update_order_progess.group_product_id"] = array();
		}
		$lookupTableLinks["group_product"]["update_order_progess.group_product_id"]["edit"] = array("table" => "update_order_progess", "field" => "group_product_id", "page" => "edit");
		if( !isset( $lookupTableLinks["membership_type"] ) ) {
			$lookupTableLinks["membership_type"] = array();
		}
		if( !isset( $lookupTableLinks["membership_type"]["group1.membership_type"] )) {
			$lookupTableLinks["membership_type"]["group1.membership_type"] = array();
		}
		$lookupTableLinks["membership_type"]["group1.membership_type"]["edit"] = array("table" => "group1", "field" => "membership_type", "page" => "edit");
		if( !isset( $lookupTableLinks["business_type"] ) ) {
			$lookupTableLinks["business_type"] = array();
		}
		if( !isset( $lookupTableLinks["business_type"]["group1.business_type"] )) {
			$lookupTableLinks["business_type"]["group1.business_type"] = array();
		}
		$lookupTableLinks["business_type"]["group1.business_type"]["edit"] = array("table" => "group1", "field" => "business_type", "page" => "edit");
		if( !isset( $lookupTableLinks["membership_type"] ) ) {
			$lookupTableLinks["membership_type"] = array();
		}
		if( !isset( $lookupTableLinks["membership_type"]["group2.membership_type"] )) {
			$lookupTableLinks["membership_type"]["group2.membership_type"] = array();
		}
		$lookupTableLinks["membership_type"]["group2.membership_type"]["edit"] = array("table" => "group2", "field" => "membership_type", "page" => "edit");
		if( !isset( $lookupTableLinks["business_type"] ) ) {
			$lookupTableLinks["business_type"] = array();
		}
		if( !isset( $lookupTableLinks["business_type"]["group2.business_type"] )) {
			$lookupTableLinks["business_type"]["group2.business_type"] = array();
		}
		$lookupTableLinks["business_type"]["group2.business_type"]["edit"] = array("table" => "group2", "field" => "business_type", "page" => "edit");
		if( !isset( $lookupTableLinks["membership_type"] ) ) {
			$lookupTableLinks["membership_type"] = array();
		}
		if( !isset( $lookupTableLinks["membership_type"]["group21.membership_type"] )) {
			$lookupTableLinks["membership_type"]["group21.membership_type"] = array();
		}
		$lookupTableLinks["membership_type"]["group21.membership_type"]["edit"] = array("table" => "group21", "field" => "membership_type", "page" => "edit");
		if( !isset( $lookupTableLinks["business_type"] ) ) {
			$lookupTableLinks["business_type"] = array();
		}
		if( !isset( $lookupTableLinks["business_type"]["group21.business_type"] )) {
			$lookupTableLinks["business_type"]["group21.business_type"] = array();
		}
		$lookupTableLinks["business_type"]["group21.business_type"]["edit"] = array("table" => "group21", "field" => "business_type", "page" => "edit");
		if( !isset( $lookupTableLinks["membership_type"] ) ) {
			$lookupTableLinks["membership_type"] = array();
		}
		if( !isset( $lookupTableLinks["membership_type"]["group211.membership_type"] )) {
			$lookupTableLinks["membership_type"]["group211.membership_type"] = array();
		}
		$lookupTableLinks["membership_type"]["group211.membership_type"]["edit"] = array("table" => "group211", "field" => "membership_type", "page" => "edit");
		if( !isset( $lookupTableLinks["business_type"] ) ) {
			$lookupTableLinks["business_type"] = array();
		}
		if( !isset( $lookupTableLinks["business_type"]["group211.business_type"] )) {
			$lookupTableLinks["business_type"]["group211.business_type"] = array();
		}
		$lookupTableLinks["business_type"]["group211.business_type"]["edit"] = array("table" => "group211", "field" => "business_type", "page" => "edit");
		if( !isset( $lookupTableLinks["membership_type"] ) ) {
			$lookupTableLinks["membership_type"] = array();
		}
		if( !isset( $lookupTableLinks["membership_type"]["group212.membership_type"] )) {
			$lookupTableLinks["membership_type"]["group212.membership_type"] = array();
		}
		$lookupTableLinks["membership_type"]["group212.membership_type"]["edit"] = array("table" => "group212", "field" => "membership_type", "page" => "edit");
		if( !isset( $lookupTableLinks["business_type"] ) ) {
			$lookupTableLinks["business_type"] = array();
		}
		if( !isset( $lookupTableLinks["business_type"]["group212.business_type"] )) {
			$lookupTableLinks["business_type"]["group212.business_type"] = array();
		}
		$lookupTableLinks["business_type"]["group212.business_type"]["edit"] = array("table" => "group212", "field" => "business_type", "page" => "edit");
		if( !isset( $lookupTableLinks["membership_type"] ) ) {
			$lookupTableLinks["membership_type"] = array();
		}
		if( !isset( $lookupTableLinks["membership_type"]["group2121.membership_type"] )) {
			$lookupTableLinks["membership_type"]["group2121.membership_type"] = array();
		}
		$lookupTableLinks["membership_type"]["group2121.membership_type"]["edit"] = array("table" => "group2121", "field" => "membership_type", "page" => "edit");
		if( !isset( $lookupTableLinks["business_type"] ) ) {
			$lookupTableLinks["business_type"] = array();
		}
		if( !isset( $lookupTableLinks["business_type"]["group2121.business_type"] )) {
			$lookupTableLinks["business_type"]["group2121.business_type"] = array();
		}
		$lookupTableLinks["business_type"]["group2121.business_type"]["edit"] = array("table" => "group2121", "field" => "business_type", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["group_member1.member_id"] )) {
			$lookupTableLinks["personal"]["group_member1.member_id"] = array();
		}
		$lookupTableLinks["personal"]["group_member1.member_id"]["edit"] = array("table" => "group_member1", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["group_member1.group_id"] )) {
			$lookupTableLinks["group"]["group_member1.group_id"] = array();
		}
		$lookupTableLinks["group"]["group_member1.group_id"]["edit"] = array("table" => "group_member1", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_user_type"] ) ) {
			$lookupTableLinks["group_user_type"] = array();
		}
		if( !isset( $lookupTableLinks["group_user_type"]["group_member1.user_type"] )) {
			$lookupTableLinks["group_user_type"]["group_member1.user_type"] = array();
		}
		$lookupTableLinks["group_user_type"]["group_member1.user_type"]["edit"] = array("table" => "group_member1", "field" => "user_type", "page" => "edit");
		if( !isset( $lookupTableLinks["membership_type"] ) ) {
			$lookupTableLinks["membership_type"] = array();
		}
		if( !isset( $lookupTableLinks["membership_type"]["group_member1.membership_type"] )) {
			$lookupTableLinks["membership_type"]["group_member1.membership_type"] = array();
		}
		$lookupTableLinks["membership_type"]["group_member1.membership_type"]["edit"] = array("table" => "group_member1", "field" => "membership_type", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["group_member11.member_id"] )) {
			$lookupTableLinks["personal"]["group_member11.member_id"] = array();
		}
		$lookupTableLinks["personal"]["group_member11.member_id"]["edit"] = array("table" => "group_member11", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["group_member11.group_id"] )) {
			$lookupTableLinks["group"]["group_member11.group_id"] = array();
		}
		$lookupTableLinks["group"]["group_member11.group_id"]["edit"] = array("table" => "group_member11", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_user_type"] ) ) {
			$lookupTableLinks["group_user_type"] = array();
		}
		if( !isset( $lookupTableLinks["group_user_type"]["group_member11.user_type"] )) {
			$lookupTableLinks["group_user_type"]["group_member11.user_type"] = array();
		}
		$lookupTableLinks["group_user_type"]["group_member11.user_type"]["edit"] = array("table" => "group_member11", "field" => "user_type", "page" => "edit");
		if( !isset( $lookupTableLinks["membership_type"] ) ) {
			$lookupTableLinks["membership_type"] = array();
		}
		if( !isset( $lookupTableLinks["membership_type"]["group_member11.membership_type"] )) {
			$lookupTableLinks["membership_type"]["group_member11.membership_type"] = array();
		}
		$lookupTableLinks["membership_type"]["group_member11.membership_type"]["edit"] = array("table" => "group_member11", "field" => "membership_type", "page" => "edit");
		if( !isset( $lookupTableLinks["membership_type"] ) ) {
			$lookupTableLinks["membership_type"] = array();
		}
		if( !isset( $lookupTableLinks["membership_type"]["group3.membership_type"] )) {
			$lookupTableLinks["membership_type"]["group3.membership_type"] = array();
		}
		$lookupTableLinks["membership_type"]["group3.membership_type"]["edit"] = array("table" => "group3", "field" => "membership_type", "page" => "edit");
		if( !isset( $lookupTableLinks["business_type"] ) ) {
			$lookupTableLinks["business_type"] = array();
		}
		if( !isset( $lookupTableLinks["business_type"]["group3.business_type"] )) {
			$lookupTableLinks["business_type"]["group3.business_type"] = array();
		}
		$lookupTableLinks["business_type"]["group3.business_type"]["edit"] = array("table" => "group3", "field" => "business_type", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["group_agenda1.group_id"] )) {
			$lookupTableLinks["group"]["group_agenda1.group_id"] = array();
		}
		$lookupTableLinks["group"]["group_agenda1.group_id"]["edit"] = array("table" => "group_agenda1", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_agenda_type"] ) ) {
			$lookupTableLinks["group_agenda_type"] = array();
		}
		if( !isset( $lookupTableLinks["group_agenda_type"]["group_agenda1.agenda_type_id"] )) {
			$lookupTableLinks["group_agenda_type"]["group_agenda1.agenda_type_id"] = array();
		}
		$lookupTableLinks["group_agenda_type"]["group_agenda1.agenda_type_id"]["edit"] = array("table" => "group_agenda1", "field" => "agenda_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["loop_type"] ) ) {
			$lookupTableLinks["loop_type"] = array();
		}
		if( !isset( $lookupTableLinks["loop_type"]["group_agenda1.loop_id"] )) {
			$lookupTableLinks["loop_type"]["group_agenda1.loop_id"] = array();
		}
		$lookupTableLinks["loop_type"]["group_agenda1.loop_id"]["edit"] = array("table" => "group_agenda1", "field" => "loop_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["group_agenda_type1.group_id"] )) {
			$lookupTableLinks["group"]["group_agenda_type1.group_id"] = array();
		}
		$lookupTableLinks["group"]["group_agenda_type1.group_id"]["edit"] = array("table" => "group_agenda_type1", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["group_agenda_type11.group_id"] )) {
			$lookupTableLinks["group"]["group_agenda_type11.group_id"] = array();
		}
		$lookupTableLinks["group"]["group_agenda_type11.group_id"]["edit"] = array("table" => "group_agenda_type11", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["country"] ) ) {
			$lookupTableLinks["country"] = array();
		}
		if( !isset( $lookupTableLinks["country"]["personal1.country_id"] )) {
			$lookupTableLinks["country"]["personal1.country_id"] = array();
		}
		$lookupTableLinks["country"]["personal1.country_id"]["edit"] = array("table" => "personal1", "field" => "country_id", "page" => "edit");
		if( !isset( $lookupTableLinks["province"] ) ) {
			$lookupTableLinks["province"] = array();
		}
		if( !isset( $lookupTableLinks["province"]["personal1.province_id"] )) {
			$lookupTableLinks["province"]["personal1.province_id"] = array();
		}
		$lookupTableLinks["province"]["personal1.province_id"]["edit"] = array("table" => "personal1", "field" => "province_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member11"] ) ) {
			$lookupTableLinks["group_member11"] = array();
		}
		if( !isset( $lookupTableLinks["group_member11"]["member_checkin.group_member_id"] )) {
			$lookupTableLinks["group_member11"]["member_checkin.group_member_id"] = array();
		}
		$lookupTableLinks["group_member11"]["member_checkin.group_member_id"]["edit"] = array("table" => "member checkin", "field" => "group_member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal1"] ) ) {
			$lookupTableLinks["personal1"] = array();
		}
		if( !isset( $lookupTableLinks["personal1"]["member_checkin.member_id"] )) {
			$lookupTableLinks["personal1"]["member_checkin.member_id"] = array();
		}
		$lookupTableLinks["personal1"]["member_checkin.member_id"]["edit"] = array("table" => "member checkin", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group4"] ) ) {
			$lookupTableLinks["group4"] = array();
		}
		if( !isset( $lookupTableLinks["group4"]["member_checkin.group_id"] )) {
			$lookupTableLinks["group4"]["member_checkin.group_id"] = array();
		}
		$lookupTableLinks["group4"]["member_checkin.group_id"]["edit"] = array("table" => "member checkin", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["membership_type"] ) ) {
			$lookupTableLinks["membership_type"] = array();
		}
		if( !isset( $lookupTableLinks["membership_type"]["group4.membership_type"] )) {
			$lookupTableLinks["membership_type"]["group4.membership_type"] = array();
		}
		$lookupTableLinks["membership_type"]["group4.membership_type"]["edit"] = array("table" => "group4", "field" => "membership_type", "page" => "edit");
		if( !isset( $lookupTableLinks["business_type"] ) ) {
			$lookupTableLinks["business_type"] = array();
		}
		if( !isset( $lookupTableLinks["business_type"]["group4.business_type"] )) {
			$lookupTableLinks["business_type"]["group4.business_type"] = array();
		}
		$lookupTableLinks["business_type"]["group4.business_type"]["edit"] = array("table" => "group4", "field" => "business_type", "page" => "edit");
		if( !isset( $lookupTableLinks["membership_type"] ) ) {
			$lookupTableLinks["membership_type"] = array();
		}
		if( !isset( $lookupTableLinks["membership_type"]["group11.membership_type"] )) {
			$lookupTableLinks["membership_type"]["group11.membership_type"] = array();
		}
		$lookupTableLinks["membership_type"]["group11.membership_type"]["edit"] = array("table" => "group11", "field" => "membership_type", "page" => "edit");
		if( !isset( $lookupTableLinks["business_type"] ) ) {
			$lookupTableLinks["business_type"] = array();
		}
		if( !isset( $lookupTableLinks["business_type"]["group11.business_type"] )) {
			$lookupTableLinks["business_type"]["group11.business_type"] = array();
		}
		$lookupTableLinks["business_type"]["group11.business_type"]["edit"] = array("table" => "group11", "field" => "business_type", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["group_product1.group_id"] )) {
			$lookupTableLinks["group"]["group_product1.group_id"] = array();
		}
		$lookupTableLinks["group"]["group_product1.group_id"]["edit"] = array("table" => "group_product1", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["product_type"] ) ) {
			$lookupTableLinks["product_type"] = array();
		}
		if( !isset( $lookupTableLinks["product_type"]["group_product1.product_type"] )) {
			$lookupTableLinks["product_type"]["group_product1.product_type"] = array();
		}
		$lookupTableLinks["product_type"]["group_product1.product_type"]["edit"] = array("table" => "group_product1", "field" => "product_type", "page" => "edit");
		if( !isset( $lookupTableLinks["stock_type"] ) ) {
			$lookupTableLinks["stock_type"] = array();
		}
		if( !isset( $lookupTableLinks["stock_type"]["group_product1.stock_type"] )) {
			$lookupTableLinks["stock_type"]["group_product1.stock_type"] = array();
		}
		$lookupTableLinks["stock_type"]["group_product1.stock_type"]["edit"] = array("table" => "group_product1", "field" => "stock_type", "page" => "edit");
		if( !isset( $lookupTableLinks["order_type"] ) ) {
			$lookupTableLinks["order_type"] = array();
		}
		if( !isset( $lookupTableLinks["order_type"]["group_product1.order_type"] )) {
			$lookupTableLinks["order_type"]["group_product1.order_type"] = array();
		}
		$lookupTableLinks["order_type"]["group_product1.order_type"]["edit"] = array("table" => "group_product1", "field" => "order_type", "page" => "edit");
		if( !isset( $lookupTableLinks["group_member"] ) ) {
			$lookupTableLinks["group_member"] = array();
		}
		if( !isset( $lookupTableLinks["group_member"]["payment.group_member_id"] )) {
			$lookupTableLinks["group_member"]["payment.group_member_id"] = array();
		}
		$lookupTableLinks["group_member"]["payment.group_member_id"]["edit"] = array("table" => "payment", "field" => "group_member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["personal"] ) ) {
			$lookupTableLinks["personal"] = array();
		}
		if( !isset( $lookupTableLinks["personal"]["payment.member_id"] )) {
			$lookupTableLinks["personal"]["payment.member_id"] = array();
		}
		$lookupTableLinks["personal"]["payment.member_id"]["edit"] = array("table" => "payment", "field" => "member_id", "page" => "edit");
		if( !isset( $lookupTableLinks["group"] ) ) {
			$lookupTableLinks["group"] = array();
		}
		if( !isset( $lookupTableLinks["group"]["payment.group_id"] )) {
			$lookupTableLinks["group"]["payment.group_id"] = array();
		}
		$lookupTableLinks["group"]["payment.group_id"]["edit"] = array("table" => "payment", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["country"] ) ) {
			$lookupTableLinks["country"] = array();
		}
		if( !isset( $lookupTableLinks["country"]["personal11.country_id"] )) {
			$lookupTableLinks["country"]["personal11.country_id"] = array();
		}
		$lookupTableLinks["country"]["personal11.country_id"]["edit"] = array("table" => "personal11", "field" => "country_id", "page" => "edit");
		if( !isset( $lookupTableLinks["province"] ) ) {
			$lookupTableLinks["province"] = array();
		}
		if( !isset( $lookupTableLinks["province"]["personal11.province_id"] )) {
			$lookupTableLinks["province"]["personal11.province_id"] = array();
		}
		$lookupTableLinks["province"]["personal11.province_id"]["edit"] = array("table" => "personal11", "field" => "province_id", "page" => "edit");
}

?>