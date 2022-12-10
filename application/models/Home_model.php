<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends MY_Model 
{
	protected $table	= 'product';
	protected $perPage	= 9;
	public function getValidationRules()
	{
		$validationRules = [];

		return $validationRules;
	}

}

/* End of file Home_model.php */
