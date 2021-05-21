<?php
require_once getabspath('classes/controls/TextControl.php');
class TextAreaField extends TextControl
{
	function __construct($field, $pageObject, $id, $connection)
	{
		EditControl::__construct($field, $pageObject, $id, $connection);
		$this->format = EDIT_FORMAT_TEXT_AREA;
	}

	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);

		$nHeight = $this->pageObject->pSetEdit->getNRows($this->field);
		if($this->pageObject->pSetEdit->isUseRTE($this->field))
		{
			$value = $this->RTESafe($value);
		}
		else
		{
			$classString = "";
			$style = 'height: '.$nHeight.'px;';
			if( $this->pageObject->isBootstrap() )
			{
				$classString = " class=\"form-control\"";
			}
			echo '<textarea '.$this->getPlaceholderAttr().' id="'.$this->cfield.'" '.$classString.' alt="' .$this->strLabel . '" name="'.$this->cfield.'" style="' . $style . '">'.runner_htmlspecialchars($value).'</textarea>';
		}

		$this->buildControlEnd($validate, $mode);
	}

	function getFirstElementId()
	{
		return $this->cfield;
	}
	
	/**
	 * returns safe code for preloading in the RTE
	 * @intellisense
	 * @param String text
	 * @return String
	 */
	protected function RTESafe($text)
	{
		$tmpString = trim($text);
		if(!$tmpString)
			return "";

		//	convert all types of single quotes
		$tmpString = str_replace("'", "&#39;", $tmpString);

		//	replace carriage returns & line feeds
		$tmpString = str_replace( chr(10), " ", $tmpString );
		$tmpString = str_replace( chr(13), " ", $tmpString );

		return $tmpString;
	}

	/**
	 * @intellisense
	 */
	protected function CreateCKeditor($value)
	{
		echo '<div id="disabledCKE_'.$this->cfield.'">'
			.'<textarea id="'.$this->cfield.'" name="'.$this->cfield.'" rows="8" cols="60">'
				.runner_htmlspecialchars($value)
			.'</textarea>'
			.'</div>';
	}
}
?>