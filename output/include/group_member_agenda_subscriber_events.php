<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_group_member_agenda_subscriber  extends eventsBase
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

		$data = array();
$data["agenda_type_id"] = $values["agenda_type_id"];
$rs = DB::Select("group_agenda_type", $data );
while( $record = $rs->fetchAssoc() )
{
    $agenda_type = $record["agenda_type"];
		$group_id = $record["group_id"];
}

$data = array();
$data["group_id"] = $group_id;
$rs = DB::Select("group", $data );
while( $record = $rs->fetchAssoc() )
{
	$group = $record["group_name"];
}

$msg = "Anda telah berlangganan agenda dengan tipe " . $agenda_type . " di " . $group;

$rs = DB::Query("select chat_id from personal_channel
where member_id = '$values[member_id]' AND channel_id = 1");
$dataChannelTele=$rs->fetchAssoc();
if($dataChannelTele)
{
	$data = array();
	$data["chat_id"] = $dataChannelTele["chat_id"];
	$data["out_msg"] = $msg;
	$data["type"] = "msg";
	$data["flag"] = 1;
	$data["tgl"] = NOW();
	DB::Insert("outbox_telegram", $data );
}
else
{
	// if dont exist do something else
}

$rs = DB::Query("select chat_id from personal_channel
where member_id = '$values[member_id]' AND channel_id = 2");
$dataChannelTele=$rs->fetchAssoc();
if($dataChannelTele)
{
	$data = array();
	$data["chat_id"] = $dataChannelTele["chat_id"];
	$data["out_msg"] = $msg;
	$data["type"] = "msg";
	$data["flag"] = 1;
	$data["tgl"] = NOW();
	DB::Insert("outbox_mail_aws", $data );
}
else
{
	// if dont exist do something else
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
