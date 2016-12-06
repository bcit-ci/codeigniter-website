<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Describe the framework.
 * 
 * CodeIgniter website, template driven
 *
 */
class Info extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['title'] = "CodeIgniter Is Right for You if…";
		$this->data['pagebody'] = 'info';
		$this->render();
	}

}
