<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Provide some timely updates
 * 
 * CodeIgniter website, template driven
 *
 */
class News extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['title'] = "CodeIgniter News";
		$this->data['pagebody'] = 'news';
		$this->render();
	}

}
