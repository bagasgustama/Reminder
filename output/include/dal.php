<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers("personal");
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tblnotif_basic1_at_localhost__business_type;
	var $tblnotif_basic1_at_localhost__channel;
	var $tblnotif_basic1_at_localhost__country;
	var $tblnotif_basic1_at_localhost__group;
	var $tblnotif_basic1_at_localhost__group_agenda;
	var $tblnotif_basic1_at_localhost__group_agenda_general_logs;
	var $tblnotif_basic1_at_localhost__group_agenda_private;
	var $tblnotif_basic1_at_localhost__group_agenda_repeat_date;
	var $tblnotif_basic1_at_localhost__group_agenda_type;
	var $tblnotif_basic1_at_localhost__group_member;
	var $tblnotif_basic1_at_localhost__group_member_agenda;
	var $tblnotif_basic1_at_localhost__group_member_agenda_subscriber;
	var $tblnotif_basic1_at_localhost__group_member_checkin;
	var $tblnotif_basic1_at_localhost__group_member_order;
	var $tblnotif_basic1_at_localhost__group_member_order_detail;
	var $tblnotif_basic1_at_localhost__group_operation_off;
	var $tblnotif_basic1_at_localhost__group_product;
	var $tblnotif_basic1_at_localhost__group_user_type;
	var $tblnotif_basic1_at_localhost__lookup_token;
	var $tblnotif_basic1_at_localhost__loop_type;
	var $tblnotif_basic1_at_localhost__membership_type;
	var $tblnotif_basic1_at_localhost__order_type;
	var $tblnotif_basic1_at_localhost__outbox_mail_aws;
	var $tblnotif_basic1_at_localhost__outbox_telegram;
	var $tblnotif_basic1_at_localhost__personal;
	var $tblnotif_basic1_at_localhost__personal_agenda;
	var $tblnotif_basic1_at_localhost__personal_agenda_repeat_date;
	var $tblnotif_basic1_at_localhost__personal_channel;
	var $tblnotif_basic1_at_localhost__product_type;
	var $tblnotif_basic1_at_localhost__project5_uggroups;
	var $tblnotif_basic1_at_localhost__project5_ugmembers;
	var $tblnotif_basic1_at_localhost__project5_ugrights;
	var $tblnotif_basic1_at_localhost__province;
	var $tblnotif_basic1_at_localhost__stock_type;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "business_type", "varname" => "notif_basic1_at_localhost__business_type", "altvarname" => "business_type", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "channel", "varname" => "notif_basic1_at_localhost__channel", "altvarname" => "channel", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "country", "varname" => "notif_basic1_at_localhost__country", "altvarname" => "country", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "group", "varname" => "notif_basic1_at_localhost__group", "altvarname" => "group", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "group_agenda", "varname" => "notif_basic1_at_localhost__group_agenda", "altvarname" => "group_agenda", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "group_agenda_general_logs", "varname" => "notif_basic1_at_localhost__group_agenda_general_logs", "altvarname" => "group_agenda_general_logs", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "group_agenda_private", "varname" => "notif_basic1_at_localhost__group_agenda_private", "altvarname" => "group_agenda_private", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "group_agenda_repeat_date", "varname" => "notif_basic1_at_localhost__group_agenda_repeat_date", "altvarname" => "group_agenda_repeat_date", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "group_agenda_type", "varname" => "notif_basic1_at_localhost__group_agenda_type", "altvarname" => "group_agenda_type", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "group_member", "varname" => "notif_basic1_at_localhost__group_member", "altvarname" => "group_member", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "group_member_agenda", "varname" => "notif_basic1_at_localhost__group_member_agenda", "altvarname" => "group_member_agenda", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "group_member_agenda_subscriber", "varname" => "notif_basic1_at_localhost__group_member_agenda_subscriber", "altvarname" => "group_member_agenda_subscriber", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "group_member_checkin", "varname" => "notif_basic1_at_localhost__group_member_checkin", "altvarname" => "group_member_checkin", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "group_member_order", "varname" => "notif_basic1_at_localhost__group_member_order", "altvarname" => "group_member_order", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "group_member_order_detail", "varname" => "notif_basic1_at_localhost__group_member_order_detail", "altvarname" => "group_member_order_detail", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "group_operation_off", "varname" => "notif_basic1_at_localhost__group_operation_off", "altvarname" => "group_operation_off", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "group_product", "varname" => "notif_basic1_at_localhost__group_product", "altvarname" => "group_product", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "group_user_type", "varname" => "notif_basic1_at_localhost__group_user_type", "altvarname" => "group_user_type", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "lookup_token", "varname" => "notif_basic1_at_localhost__lookup_token", "altvarname" => "lookup_token", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "loop_type", "varname" => "notif_basic1_at_localhost__loop_type", "altvarname" => "loop_type", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "membership_type", "varname" => "notif_basic1_at_localhost__membership_type", "altvarname" => "membership_type", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "order_type", "varname" => "notif_basic1_at_localhost__order_type", "altvarname" => "order_type", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "outbox_mail_aws", "varname" => "notif_basic1_at_localhost__outbox_mail_aws", "altvarname" => "outbox_mail_aws", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "outbox_telegram", "varname" => "notif_basic1_at_localhost__outbox_telegram", "altvarname" => "outbox_telegram", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "personal", "varname" => "notif_basic1_at_localhost__personal", "altvarname" => "personal", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "personal_agenda", "varname" => "notif_basic1_at_localhost__personal_agenda", "altvarname" => "personal_agenda", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "personal_agenda_repeat_date", "varname" => "notif_basic1_at_localhost__personal_agenda_repeat_date", "altvarname" => "personal_agenda_repeat_date", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "personal_channel", "varname" => "notif_basic1_at_localhost__personal_channel", "altvarname" => "personal_channel", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "product_type", "varname" => "notif_basic1_at_localhost__product_type", "altvarname" => "product_type", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "project5_uggroups", "varname" => "notif_basic1_at_localhost__project5_uggroups", "altvarname" => "project5_uggroups", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "project5_ugmembers", "varname" => "notif_basic1_at_localhost__project5_ugmembers", "altvarname" => "project5_ugmembers", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "project5_ugrights", "varname" => "notif_basic1_at_localhost__project5_ugrights", "altvarname" => "project5_ugrights", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "province", "varname" => "notif_basic1_at_localhost__province", "altvarname" => "province", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
		$this->lstTables[] = array("name" => "stock_type", "varname" => "notif_basic1_at_localhost__stock_type", "altvarname" => "stock_type", "connId" => "notif_basic1_at_localhost", "schema" => "", "connName" => "db_notif_basic at localhost");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>