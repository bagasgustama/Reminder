<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_custom_personal_agenda  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["selectList"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List
function selectList($dataSource, $command)
{

		$sql = "SELECT * FROM personal_agenda JOIN loop_type ON personal_agenda.loop_type=loop_type.id_loop JOIN personal_agenda_repeat_date USING(member_agenda_id) WHERE member_id=".$_GET['member_id'];
$preparedSQL = DB::PrepareSQL( $sql );
$result = DB::Query( $preparedSQL );
if( !$result ) {
	$dataSource->setError( DB::LastError() );
	return false;
}
	// filter results, apply search, security & other filters
$result = $dataSource->filterResult( $result, $command->filter );
//	reorder results as requested
$dataSource->reorderResult( $command, $result );
return $result;

;		
} // function selectList

		
		
		
		
		



}
?>
