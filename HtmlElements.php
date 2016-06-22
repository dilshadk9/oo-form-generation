<?php
/**
 * @author Dilshad.Khan <dilshad.khan.in@gmail.com>
*/

class HtmlElements {

	/**
	 * @todo To generate textbox/password/button field
	 * @method generateTextBoxOrButton
	 * @param array $data
	 * @return string $text
	*/
	public static function generateTextBoxOrButton($data = array()) {

		$text = NULL;

		$text = "<input type='".$data['type']."' 
						name='".$data['name']."' 
						id='".$data['id']."' 
						class='".$data['class']."' 
						value='".$data['value']."' 
						placeholder='".$data['placeholder']."' 
						".$data['required']."/>";

		return $text;
	}

	/**
	 * @todo To generate textarea
	 * @method generateTextArea
	 * @param array $data
	 * @return string $textarea
	*/
	public static function generateTextArea($data = array()) {

		$textarea = NULL;

		$textarea = "<textarea name='".$data['name']."' 
						id='".$data['id']."' 
						rows='".$data['rows']."' 
						cols='".$data['cols']."' 
						class='".$data['class']."' 
						placeholder='".$data['placeholder']."' ".$data['required'].">".$data['value']."</textarea>";

		return $textarea;
	}

	/**
	 * @todo To generate select dropdown
	 * @method generateDropdown
	 * @param array $data
	 * @return string $select
	*/
	public static function generateDropdown($data = array()) {

		$select = NULL;

		$select = "<select 
					name='".$data['name']."' 
					id='".$data['id']."' 
					class='".$data['class']."' ".$data['required'].">";

		$select .= "<option value=''>--Select--</option>";

		if(!empty($data['options'])) {

			foreach($data['options'] as $key => $val) {

				$select .= "<option value='".$key."' ".($data['selected'] == $key ? 'selected' : '').">".$val."</option>";
			}
		}

		$select .= "</select>";

		return $select;
	}

	/**
	 * @todo To generate radio buttons group
	 * @method generateRadioButtonGroup
	 * @param array $data
	 * @return string $radio_checkbox
	*/
	public static function generateRadioButtonOrCheckBoxGroup($data = array()) {
		
		$radio_checkbox = NULL;

		foreach($data['options'] as$key => $val) {
			if($data['label']) {
				$radio_checkbox .= "<label class='".$data['class']."'>";
				$radio_checkbox .= "<input type='".$data['type']."'  
						 name='".$data['name']."' 
						 value='".$key."' 
						 ".(in_array($key, $data['checked'])  ? 'checked' : '') .$data['required']. "/> " . $val;	
				$radio_checkbox .= "</label>";
			}
			else {
				$radio_checkbox .= "<input type='".$data['type']."'  
						 name='".$data['name']."' 
						 type='".$data['type']."' 
						 class='".$data['class']."' 
						 value='".$key."' 
						 ".(in_array($key, $data['checked'])  ? 'checked' : '') .$data['required']. "/> " . $val;
			}
			
	
		}
		
		return $radio_checkbox;				 
	}


	/**
	 * @todo To generate select option group dropdown
	 * @method generateDropdownOptionGroup
	 * @param array $data
	 * @return string $selectGrp
	*/
	public static function generateDropdownOptionGroup($data = array()) {

		$selectGrp = NULL;

		$selectGrp = "<select 
					name='".$data['name']."' 
					id='".$data['id']."' 
					class='".$data['class']."'
					".$data['required'].">";

		$selectGrp .= "<option value=''>--Select--</option>";

		if(!empty($data['optgroup'])) {

			foreach($data['optgroup'] as $key => $options) {

				$selectGrp .= "<optgroup label='".$key."'>";

				foreach ($options as $okey => $oval) {

					$selectGrp .= "<option value='".$key."' ".($data['selected'] == $okey ? 'selected' : '').">".$oval."</option>";	

				}				
			}
		}

		$selectGrp .= "</select>";

		return $selectGrp;
	}	

}