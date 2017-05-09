<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Describe the community.
 * 
 * CodeIgniter website, template driven
 *
 * ------------------------------------------------------------------------
 */
class Community extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['title'] = "CodeIgniter Community";
		$this->data['pagebody'] = 'community';
		$this->render();
	}

}
