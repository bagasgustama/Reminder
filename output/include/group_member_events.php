<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_group_member  extends eventsBase
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
$keyvalues = array();
$data["user_type"] = 3;
$data["membership_type"] = 3;
$data["valid"] = 1;
$keyvalues["group_member_id"] = $values["group_member_id"];
DB::Update("group_member", $data , $keyvalues);

$data = array();
$data["group_id"] = $values['group_id'];
$rs = DB::Select("group", $data );
while( $record = $rs->fetchAssoc() )
{
	$group = $record["group_name"];
}

$msg = "Anda telah bergabung dengan group " . $group;

$rs = DB::Query("select chat_id from personal_channel
where member_id = '$_SESSION[member_id]' AND channel_id = 1");
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
where member_id = '$_SESSION[member_id]' AND channel_id = 2");
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