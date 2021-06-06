<?php

class API {
	public static function sendError( $text, $responseCode = 500 ) {
		API::sendResponse( false, array(
			"error" => $text
		), $responseCode );
	}

	public static function sendResponse( $success, $data, $responseCode = 0 ) {
		if( !$responseCode ) {
			$responseCode = $success ? 200 : 500;
		}
		http_response_code( $responseCode );
		$data["success"] = $success;
		echo my_json_encode( $data );
		exit();
	}

	//	read result into array of records
	public static function readResult( $result ) {
		$ret = array();
		while( $data = $result->fetchAssoc() ) {
			$ret[] = $data;
		}
		return $ret;
	}

	public static function login() {
		if( !Security::hasLogin() ) {
			return true;
		}
		$authType = GetGlobalData("restAuth");
		if( $authType == REST_BASIC ) {
			//	Authorization: Basic <base64_encode(username:password)>
			$loginHeader = getHttpHeader('Authorization') . "";
			if( substr( $loginHeader, 0, 6 ) !== 'Basic ' ) {
				header( 'WWW-Authenticate: Basic realm="REST API"');
				return false;
			}
			$token = base64_decode( substr( $loginHeader, 6) );
			$colonPos = strpos( $token, ':' );
			if( $colonPos === false ) {
				return false;
			}
			$username = substr( $token, 0, $colonPos );
			$password = substr( $token, $colonPos + 1 );
			return Security::login( $username, $password, true );
		}
		return false;
	}

	public static function keysFromRequest( $pSet ) {
		$keys = array();
		foreach( $pSet->getTableKeys() as $i => $k ) {
			$keys[ $k ] = postvalue( "editid" . ( $i + 1 ) );
		}
		return $keys;
	}
	public static function valuesFromRequest( $pSet ) {
		$values = array();
		foreach( $pSet->getFieldsList() as $f ) {
			if( isset( $_POST[ $f ] ) ) {
				$values[ $f ] = $_POST[ $f ];
			}
		}
		return $values;
	}


}


?>