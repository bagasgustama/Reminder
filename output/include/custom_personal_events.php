<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_custom_personal  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["selectOne"]=true;

		$this->events["selectList"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Single
function selectOne($dataSource, $command)
{

		$sql = "SELECT * FROM `personal` WHERE mail='".$_SERVER['PHP_AUTH_USER']."' AND password='".$_SERVER['PHP_AUTH_PW']."'";
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
} // function selectOne

		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List
function selectList($dataSource, $command)
{

		$sql = "SELECT * FROM `personal` WHERE mail='".$_SERVER['PHP_AUTH_USER']."' AND password='".$_SERVER['PHP_AUTH_PW']."'";
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
