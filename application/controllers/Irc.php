<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Provide some timely updates
 * 
 * CodeIgniter website, template driven
 *
 */
class Irc extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['title'] = "CodeIgniter IRC Channel";
		$this->data['pagebody'] = 'irc';
		$this->render();
	}

}
