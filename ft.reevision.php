<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *  GD Reevision
 *
 * @package		ExpressionEngine
 * @subpackage	Fieldtypes
 * @category	Fieldtypes
 * @author      GDmac
 * @copyright   Copyright (c) 2011 grdalenoort
 * @version     1.0.1
 * @license     http://creativecommons.org/licenses/by-sa/3.0/ Attribution-Share Alike 3.0 Unported
 */

class Reevision_ft extends EE_Fieldtype {

	var $info = array(
		'name'		=> 'Reevision (counter)',
		'version'	=> '1.0.1'
	);
	var $has_array_data = FALSE;

	// --------------------------------------------------------------------
	function __construct()
	{
		parent::EE_Fieldtype();
	}

	// --------------------------------------------------------------------
	function display_field($data)
	{
		$this->EE->javascript->set_global('publish.hidden_fields', array($this->field_id => $this->field_name));
		return "<div class=\"reevision\">$data</div>" . form_hidden($this->field_name, $data+1);
	}

	// --------------------------------------------------------------------
	function replace_tag($data, $params = '', $tagdata = FALSE)
	{
		return $data;
	}

	// --------------------------------------------------------------------
	function display_settings($data)
	{
		$this->EE->table->add_row( 'Reevision', 'a simple counter which increments every time an entry is saved. 
		Useful for instance for iCalendar where SEQUENCE:X denotes the revision. 
		The field just outputs how many times the entry was saved. 
		
		You can hide the field from the layout if you want. 
		For safecracker set in CSS: .reevision { display:none; }' );
	}


} // END Reevision_Ft class
