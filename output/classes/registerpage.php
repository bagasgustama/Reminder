<?php
class RegisterPage extends RunnerPage
{
	public $pwdStrong = false;

	public $action;
	
	protected $regValues = array();
	
	protected $registerSuccess = false;
	
	protected $strUsername;
	protected $strPassword;
	protected $strEmail;
	
	protected $passwordFiled;
	protected $usernameFiled;
	protected $emailFiled;
	
	protected $prepActivationCode = "";
	
	protected $sendActivationLink = false;
	
	protected $sendActivationLinkFailedMessage = "";
	
	function __construct(&$params = "")
	{
		parent::__construct($params);

		$this->passwordFiled = GetPasswordField();
		$this->usernameFiled = GetUserNameField();
		$this->emailFiled = GetEmailField();

		
		// fill global password settings
		$this->pwdStrong = GetGlobalData("pwdStrong", false);
		if( $this->pwdStrong )
		{
			$this->settingsMap["globalSettings"]["pwdLen"] = GetGlobalData("pwdLen", 0);
			$this->settingsMap["globalSettings"]["pwdUnique"] = GetGlobalData("pwdUnique", 0);
			$this->settingsMap["globalSettings"]["pwdDigits"] = GetGlobalData("pwdDigits", 0);
			$this->settingsMap["globalSettings"]["pwdStrong"] = true;
			$this->settingsMap["globalSettings"]["pwdUpperLower"] = GetGlobalData("pwdUpperLower", false);
		}

		if( $this->getLayoutVersion() === PD_BS_LAYOUT ) 
		{
			$this->headerForms = array( "top" );
			$this->footerForms = array( "below-grid" );
			
			if ( $this->isMultistepped() ) 
				$this->bodyForms = array( "above-grid", "steps" );
			else				
				$this->bodyForms = array( "above-grid", "grid" );
		} 
		else
		{
			$this->formBricks["header"] = "regheader";
			$this->formBricks["footer"] = "regbuttons";
			$this->assignFormFooterAndHeaderBricks( true );
		}
	}

	/**
	 * Set the connection property
	 */
	protected function setTableConnection()
	{
		global $cman;
		$this->connection = $cman->getForLogin();
	}
	
	/**
	 * Set the 'cipherer' property
	 */
	protected function assignCipherer()
	{
		$this->cipherer = new RunnerCipherer( $this->tName );
	}	

	
	/**
	 *
	 */
	public function process()
	{
		global $globalEvents;
		
		//	Before Process event
		if( $globalEvents->exists("BeforeProcessRegister") )
			$globalEvents->BeforeProcessRegister( $this );


		if( $this->action == "Register" )
		{
			$this->registerSuccess = $this->registerNewUser();
			$this->doAfterRegistrationEvent();
				
		
			if( !$this->registerSuccess && $this->mode == REGISTER_POPUP  )
			{
				$returnJSON = array();
				$returnJSON['success'] = false;
				
				if( strlen( $this->message ) )
				{
					$returnJSON['wrongCaptchaFieldName'] = $this->getCaptchaFieldName();
					$returnJSON['message'] = $this->message;
				}	
				
				echo printJSON($returnJSON);
				exit();
			}
		}
	
		// proccess captcha
		if( $this->captchaExists() )
			$this->displayCaptcha();

		if( !$this->registerSuccess )
		{		
			$this->prepareEditControls();	
			$this->prepareSteps();
			$this->prepareReadonlyFields();		
		}		
	
		if( $this->registerSuccess && !$this->sendActivationLink || !$this->registerSuccess )
		{
			$this->addCommonJs();
			$this->fillSetCntrlMaps();
			$this->addButtonHandlers();		
		}
		
		if( $this->registerSuccess ) 
		{
			$this->pageName = $this->pSet->getDefaultPage( $this->successPageType() );
			$this->pSet = new ProjectSettings( $this->tName, $this->pageType, $this->pageName, GLOBAL_PAGES );			
			$this->xt->assign("supertop_block", true);
			$this->pageData["buttons"] = array_merge( $this->pageData["buttons"], $this->pSet->buttons() );
			foreach( $this->pSet->buttons() as $b ) {
				$this->AddJSFile( "include/button_".$b.".js" );
			}			
		}
		
		$this->doCommonAssignments();
		
		$this->showPage();
	}

	/**
	 * Run after registration event
	 */
	protected function doAfterRegistrationEvent()
	{
		global $globalEvents;
		
		if( $this->registerSuccess && $globalEvents->exists("AfterSuccessfulRegistration") )
			$globalEvents->AfterSuccessfulRegistration( $this->regValues, $this );			
		
		if( !$this->registerSuccess && $globalEvents->exists("AfterUnsuccessfulRegistration") )
			$globalEvents->AfterUnsuccessfulRegistration( $this->regValues, $this->message, $this );		
	}


	
	
	
	/**
	 *
	 */
	protected function registerNewUser()
	{
		global $globalEvents;
		
		$allow_registration = true;
		
		if ( !$this->checkCaptcha() )
			$allow_registration = false;

		$values = array();		
		$blobfields = array();
		$filename_values = array();
		foreach( $this->pSet->getPageFields() as $uf )
		{
			$_control = $this->getControl( $uf, $this->id );;
			$_control->readWebValue($values, $blobfields, NULL, NULL, $filename_values);;
		}

		//	add filenames to values
		foreach( $filename_values as $key => $value )
		{
			$values[ $key ] = $value;
		}		

		
		$this->strUsername = $values["mail"];
		$this->strPassword = $values["password"];
		
		if( !$this->checkRegisterData( $this->strUsername, $this->strPassword, $this->strEmail ) )
			$allow_registration = false;

		$retval = $allow_registration;
		if( $retval && $globalEvents->exists("BeforeRegister") )
			$retval = $globalEvents->BeforeRegister($values, $this->message, $this);
		
		if( !$retval ) 			
			return false;
			
		$passwordHash = md5( $values["password"] );
		$originalpassword = $values["password"];

		$retval = DoInsertRecord("personal", $values, $blobfields, $this);
		
		$values["password"] = $originalpassword;

		$this->regValues = $values;
		
		return $retval;
	}

	/**
	 * Check if the registration data is valid
	 * @param String strUsername
	 * @param String strPassword
	 * @param String strEmail
	 * @return Boolean
	 */
	protected function checkRegisterData( $strUsername, $strPassword, $strEmail )
	{
		$ret = true;
		
		//	check if entered username already exists
		if( !strlen($strUsername) )
		{
			$this->jsSettings['tableSettings'][ $this->tName ]['msg_userError'] = mlang_message("USER_NOEMPTY");
			$ret = false;
		}	
		else if( !$this->checkIfUsernameUnique( $strUsername ) )
		{		
			$this->jsSettings['tableSettings'][ $this->tName ]['msg_userError'] = mlang_message("USERNAME_EXISTS1")." <i>".runner_htmlspecialchars( $strUsername )."</i> ".mlang_message("USERNAME_EXISTS2");
			$ret = false;
		}

		
		if( $this->pwdStrong )
		{
			if( !checkpassword( $strPassword ) )
			{
				$this->jsSettings['tableSettings'][ $this->tName ]['msg_passwordError'] = $this->getPwdStrongFailedMessage();
				$ret = false;
			}
		}
		
		return $ret;
	}
	
	
	/**
	 * @return String
	 */
	protected function getPwdStrongFailedMessage()
	{
		$msg = "";
		$pwdLen = GetGlobalData("pwdLen", 0);
		if($pwdLen)
		{
			$fmt = mlang_message("SEC_PWD_LEN");
			$fmt = str_replace("%%", "".$pwdLen, $fmt);
			$msg.= "<br>".$fmt;
		}
		$pwdUnique = GetGlobalData("pwdUnique", 0);
		if($pwdUnique)
		{
			$fmt = mlang_message("SEC_PWD_UNIQUE");
			$fmt = str_replace("%%", "".$pwdUnique, $fmt);
			$msg.= "<br>".$fmt;
		}
		$pwdDigits = GetGlobalData("pwdDigits", 0);
		if($pwdDigits)
		{
			$fmt = mlang_message("SEC_PWD_DIGIT");
			$fmt = str_replace("%%", "".$pwdDigits, $fmt);
			$msg.= "<br>".$fmt;
		}
		if(GetGlobalData("pwdUpperLower", false))
		{
			$fmt = mlang_message("SEC_PWD_CASE");
			$msg.= "<br>".$fmt;
		}
		
		if($msg)
			$msg = substr($msg, 4);

		return $msg;		
	}
	
	/**
	 * @param String strUsername
	 * @return Boolean
	 */
	protected function checkIfUsernameUnique( $strUsername )
	{
		if( $this->cipherer->isFieldEncrypted("mail") )
			$sUsername = $this->cipherer->MakeDBValue("mail", $strUsername, "", true);	
		else 
			$sUsername = add_db_quotes("mail", $strUsername);
			
		$strSQL = "select count(*) from ". $this->connection->addTableWrappers( "personal" ) 
			. " where " . 
			$this->connection->comparisonSQL( 
				$this->getFieldSQLDecrypt("mail"), 
				$sUsername,
				$this->pSet->isCaseInsensitiveUsername()
			);
			
		$data = $this->connection->query( $strSQL )->fetchNumeric();
		return $data[0] == 0;
	}
	
	/**
	 * @param String strEmail
	 * @return Boolean
	 */
	protected function checkIfEmailUnique( $strEmail )
	{
		if( $this->cipherer->isFieldEncrypted("") )
			$sEmail = $this->cipherer->MakeDBValue("", $strEmail, "", true);	
		else 
			$sEmail = add_db_quotes("", $strEmail);
			
		$strSQL = "select count(*) from ". $this->connection->addTableWrappers( "personal" ) 
			." where ".
			$this->connection->comparisonSQL( 
				$this->getFieldSQLDecrypt(""), 
				$sEmail,
				true
			);
			
		$data = $this->connection->query( $strSQL )->fetchNumeric();
		return $data[0] == 0;	
	}
	
	/**
	 * Set values for the page's controls
	 */
	protected function prepareEditControls()
	{
		$regFields = $this->pSet->getPageFields();
			
		if( !count($this->regValues) )
		{
			foreach( $regFields as $f )
			{
				$defaultValue = GetDefaultValue($f, PAGE_REGISTER);
				if( strlen($defaultValue) )
					$this->regValues[ $f ] = $defaultValue;
			}
		}

		foreach($regFields as $fName)
		{
			$gfName = GoodFieldName($fName);
			
			$parameters = array();
			$parameters["id"] = $this->id;
			$parameters["mode"] = "add";
			$parameters["field"] = $fName;
			$parameters["value"] = $this->regValues[ $fName ];
			$parameters["pageObj"] = $this;
			$parameters["suggest"] = ($fName == $this->passwordFiled || $fName == $this->usernameFiled || $fName == $this->emailFiled);
				
			if( $this->pSet->getEditFormat($fName) == 'Time' )
				$this->fillTimePickSettings( $fName, @$this->regValues[ $fName ] );
			
			if( $fName == $this->passwordFiled )
			{
				$parameters["extraParams"] = array();
				$parameters["extraParams"]["getConrirmFieldCtrl"] = true;
				$this->jsSettings['tableSettings'][ $this->tName ]['passFieldName'] = $fName;
			}
			
			if( $fName == $this->usernameFiled )
				$this->jsSettings['tableSettings'][ $this->tName ]['userFieldName'] = $fName;
				
			if( $fName == $this->emailFiled )
				$this->jsSettings['tableSettings'][ $this->tName ]['emailFieldName'] = $fName;
				
			// Add validation
			if( $fName == $this->usernameFiled || $fName == $this->passwordFiled || $fName == $this->emailFiled )
				$parameters["validate"] = Array('basicValidate' => Array ( 'IsRequired' )); 
			else 
				$parameters["validate"] = $this->pSet->getValidation( $fName );
				
			$controls = array('controls' => array());
			$controls["controls"]["id"] = $this->id;
			$controls["controls"]["mode"] = "add";
			$controls["controls"]["ctrlInd"] = 0;
			$controls["controls"]['suggest'] = $parameters["suggest"];
			$controls["controls"]['fieldName'] = $fName;
				
			if( $this->is508 && !$this->isBootstrap() )
				$this->xt->assign_section($gfName."_label", "<label for=\"".$this->getInputElementId($fName)."\">", "</label>");
			
			$this->xt->assign($gfName."_fieldblock", true);
			$this->xt->assign($gfName."_tabfieldblock", true);

			if ( $this->isBootstrap() )
			{			
				$firstElementId = $this->getControl($fName, $this->id)->getFirstElementId();
				if ( $firstElementId )
				{
					$this->xt->assign("labelfor_" . goodFieldName($fName), $firstElementId);
				}
			}
				
			$this->xt->assign_function($gfName."_editcontrol", "xt_buildeditcontrol", $parameters );

			$preload = $this->fillPreload($fName, $regFields, $this->regValues);
			if( $preload !== false)
				$controls["controls"]['preloadData'] = $preload;
			
			$this->fillControlsMap( $controls );
			$this->fillFieldToolTips( $fName );
			$this->fillControlFlags( $fName, $fName == $this->usernameFiled || $fName == $this->passwordFiled || $fName == $this->emailFiled );
			
			// Confirm field for re-enter password
			if( $fName == $this->passwordFiled && $this->passwordFiled != $this->usernameFiled)
			{
				$parameters = array();
				$parameters["id"] = $this->id;
				$parameters["mode"] = "add";
				$parameters["field"] = "confirm";
				$parameters["format"] = "Password";
				$parameters["suggest"] = true;
				$parameters["pageObj"] = $this;
				$parameters["validate"] = array( 'basicValidate' => array('IsRequired'));
						
				$parameters["extraParams"] = array();
				$parameters["extraParams"]["isConfirm"] = true;
				$parameters["extraParams"]["getConrirmFieldCtrl"] = true;
						
				$controls = array('controls' => array());
				$controls["controls"]['id'] = $this->id;
				$controls["controls"]['mode'] = "add";
				$controls["controls"]['ctrlInd'] = 0;
				$controls["controls"]['suggest'] = true;
				$controls["controls"]['fieldName'] = "confirm";
						
				$this->xt->assign("confirm_label", true);
				if( $this->is508 )
					$this->xt->assign_section("confirm_label", "<label for=\"value_confirm_".$this->id."\">", "</label>");
					
				if ( $this->isBootstrap() )
				{			
					$this->xt->assign("labelfor_" . goodFieldName($fName) . "_confirm", "value_confirm_".$this->id);
				}

				$this->xt->assign_function("confirm_editcontrol1", "xt_buildeditcontrol", $parameters );
				$this->xt->assign("confirm_block", true);
				$this->xt->assign("confirm_fieldblock", true);
				
				$this->fillControlsMap( $controls );
				$this->fillControlFlags( "confirm", true );
			}
		}	
	}
	
	/**
	 *
	 */
	protected function prepareReadonlyFields()
	{
		//	show readonly fields
		foreach( $this->pSet->getPageFields() as $uf )
		{
			if( $this->pSet->getEditFormat( $uf ) == EDIT_FORMAT_READONLY )
				$this->readOnlyFields[ $uf ] = $this->showDBValue( $uf , $this->regValues );
		}
	}
	
	/**
	 * Check is captcha exists on current page
	 *
	 * @intellisense
	 */
	function captchaExists()
	{
		return $this->pSet->hasCaptcha();
	}

	/**
	 * Get captcha field name
	 *
	 * @intellisense
	 */
	function getCaptchaFieldName()
	{		
		return "_register_captcha";
	}

	function getCaptchaId() 
	{
		return "register";
	}

	/**
	 *
	 */
	public function setDatabaseError( $messageText )
	{
		//global $strMessage;
		$this->message = $messageText;
	}
	
	/**
	 *
	 */
	protected function doCommonAssignments()
	{
		$this->xt->assign("id", $this->id);
		$this->xt->assign("legend", true);
		
		$this->xt->assign("buttons_block", true);

		$this->xt->assign("message_block", true);
		if ( strlen($this->message) )
		{
			if ( $this->isBootstrap() )
			{	
				$messageClass = "alert-danger";
				if ( $this->registerSuccess )
				{
					$messageClass = "alert-success";
				}

				$this->xt->assign("message_class", $messageClass );
				$this->xt->assign("message", $this->message);
			}
			else
			{
				$this->xt->assign("message", "<div class='message rnr-error'>" . $this->message . "</div>" );
			}
		}
		else
			$this->hideElement("message");	
		
		$addStyle = "";
		if ( $this->isMultistepped() )
			$addStyle = " style=\"display: none;\"";
		
		$this->xt->assign("submit_attrs", "id=\"saveButton".$this->id."\"" . $addStyle);		
		
		if( $this->registerSuccess )
		{
			$this->xt->assign("registered_block", true);
			$this->xt->assign("loginlink_attrs","onclick=\"document.forms.loginform.submit();return false;\" id=\"ProceedToLogin\"");
			if( $this->mode == REGISTER_POPUP )
			{
				$this->xt->assign("close_win_btn", true);
				$this->xt->assign("closewindow_attrs", 'id="closeWindowRegister"');
			}
		}
		
		if( $this->mode == REGISTER_POPUP )
			$this->xt->assign("backlink_attrs", 'style="display:none"');
		if( $this->mode == REGISTER_SIMPLE )
			$this->assignBody();
	}
	
	/**
	 *
	 */
	protected function assignBody()
	{
		if( $this->registerSuccess )
		{
			$this->body["begin"].= GetBaseScriptsForPage( false )
				."<form method=\"POST\" action=\"".GetTableLink("login")."\" name=\"loginform\">
					<input type=\"Hidden\" name=username value=\"".runner_htmlspecialchars($this->strUsername)."\">".
					"<input type=\"Hidden\" name=password value=\"".runner_htmlspecialchars($this->strPassword)."\"></form>";

			
			$this->body['end'] = XTempl::create_method_assignment("assignBodyEnd", $this);
			$this->xt->assign("body", $this->body);			
			return;
		}
		
		parent::assignBody();		
	}
	
	/**
	 *
	 */
	protected function showPage()
	{
		global $globalEvents;
		
		if( $this->registerSuccess )
		{
			$this->switchToSuccessPage();
			$this->bodyForms = array( "above-grid", "grid" );			
				}
		
		if( $globalEvents->exists("BeforeShowRegister") )
			$globalEvents->BeforeShowRegister($this->xt, $this->templatefile, $this);
			
		if ( $this->mode == REGISTER_POPUP ) 
		{
			$this->xt->assign("footer", false);
			$this->xt->assign("header", false);
			$this->xt->assign("body",  $this->body); //?  true fore register success ?
			
			$this->displayAJAX($this->templatefile, $this->id + 1);
			exit();
		}
						
		$this->display( $this->templatefile );
		return;				
	}
	
	/**
	 * @return Number
	 */
	public static function readRegisterModeFromRequest()
	{		
		if( postvalue("onFly") == 1 ) //fix it
			return REGISTER_POPUP;
			
		return REGISTER_SIMPLE;
	}
	
	/**
	 * @return String
	 */
	public static function readActionFromRequest()
	{	
		if( @$_POST["btnSubmit"] )
			return @$_POST["btnSubmit"];
			
		return postvalue("a");
	}

	function element2Item( $name ) {
		if( $name == "message" ) {
			return array( "register_message" );
		}
		return parent::element2Item( $name );
	}

}
?>