<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_group_agenda  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		
if($values["message_general"] == 1)
{

	$data = array();
	$data["group_id"] = $values[group_id];
	$rs = DB::Select("group_member", $data );

	while( $record = $rs->fetchAssoc() )
	{
		
		$gId = $values["group_id"];
		$id = $record["member_id"];
		$data = array();
		$data["member_id"] = $id;
		$data["id_group_agenda"] = $values["group_agenda_id"];
		$data["date_send"] = $values["loop_value"];
		DB::Insert("group_agenda_general_logs", $data );

		$rs1 = DB::Query("select chat_id from personal_channel
		where member_id = '$id' AND channel_id = 1");
		$dataChannelTele=$rs1->fetchAssoc();
		if($dataChannelTele)
		{
			$data = array();
			$data["chat_id"] = $dataChannelTele["chat_id"];
			$data["out_msg"] = $values["message_content"];
			$data["type"] = "msg";
			$data["flag"] = 1;
			$data["tgl"] = $values["loop_value"];
			DB::Insert("outbox_telegram", $data );
		}
		else
		{
			// if dont exist do something else
		}

		$rs2 = DB::Query("select chat_id from personal_channel
		where member_id = '$id' AND channel_id = 2");
		$dataChannelTele=$rs2->fetchAssoc();
		if($dataChannelTele)
		{
			$data = array();
			$data["chat_id"] = $dataChannelTele["chat_id"];
			$data["out_msg"] = $values["message_content"];
			$data["type"] = "msg";
			$data["flag"] = 1;
			$data["tgl"] = $values["loop_value"];
			DB::Insert("outbox_mail_aws", $data );
		}
		else
		{
			// if dont exist do something else
		}

		$rs3 = DB::Query("select group_member_id from group_member
		where member_id = '$id' AND group_id = '$gId'");
		$dataIdgm=$rs3->fetchAssoc();
		if($dataIdgm)
		{
			$data = array();
			$data["group_member_id"] = $dataIdgm["group_member_id"];
			$data["member_id"] = $id;
			$data["group_agenda_id"] = $values['group_agenda_id'];
			DB::Insert("group_member_agenda", $data );
		}
		else
		{

		}
	}

}
else if ($values["message_general"] == 2)
{
	$id = 5;
	$data = array();
	$data["id_group_agenda"] = $values["group_agenda_id"];
	$data["id_member"] = $id;
	$data["message_content"] = $values["message_content"];
	$data["attachment"] = $values["attachment"];
	$data["date_send"] = $values["send_date"];
	DB::Insert("group_agenda_private", $data );

	$rs1 = DB::Query("select chat_id from personal_channel
		where member_id = '$id' AND channel_id = 1");
		$dataChannelTele=$rs1->fetchAssoc();
		if($dataChannelTele)
		{
			$data = array();
			$data["chat_id"] = $dataChannelTele["chat_id"];
			$data["out_msg"] = $values["message_content"];
			$data["type"] = "msg";
			$data["flag"] = 1;
			$data["tgl"] = $values["loop_value"];
			DB::Insert("outbox_telegram", $data );
		}
		else
		{
			// if dont exist do something else
		}

	$rs2 = DB::Query("select chat_id from personal_channel
		where member_id = '$id' AND channel_id = 2");
		$dataChannelTele=$rs2->fetchAssoc();
		if($dataChannelTele)
		{
			$data = array();
			$data["chat_id"] = $dataChannelTele["chat_id"];
			$data["out_msg"] = $values["message_content"];
			$data["type"] = "msg";
			$data["flag"] = 1;
			$data["tgl"] = $values["loop_value"];
			DB::Insert("outbox_mail_aws", $data );
		}
		else
		{
			// if dont exist do something else
		}
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
