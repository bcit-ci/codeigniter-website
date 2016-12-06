<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Render the current version of the user guide.
 * 
 * CodeIgniter website, template driven
 *
 */
class Docs extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['title'] = "CodeIgniter Documentation";
		$this->data['pagebody'] = 'docs';
		$this->render();
	}

}
