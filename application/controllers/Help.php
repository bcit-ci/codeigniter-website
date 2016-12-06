<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Provide help topics for the footer.
 * 
 * CodeIgniter website, template driven
 *
 */
class Help extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['title'] = "Policies";
		$this->data['pagebody'] = 'help';
		$this->render();
	}

	function about()
	{
		$this->data['title'] = "About CodeIgniter";
		$this->data['pagebody'] = 'about';

		$this->data['council'] = array(
			array('name' => 'Andrey Andreev', 'from' => 'Bulgaria',
				'avatar' => 'andrey.jpeg', 'roles' => 'Codebase gatekeeper, CI4',
				'description' => '',
				'badges' => array(
					array('badge' => 'twitter', 'handle' => 'narfbg'),
					array('badge' => 'github', 'handle' => 'narfbg')
				),
			),
			array('name' => 'Ben Edmunds', 'from' => 'USA',
				'avatar' => 'ben.jpg', 'roles' => 'Security',
				'description' => 'CTO of an awesome company you\'ve never heard of. PHP Town Hall podcast co-host. Creator of Ion Auth.',
				'badges' => array(
					array('badge' => 'twitter', 'handle' => 'benedmunds'),
					array('badge' => 'github', 'handle' => 'benedmunds')
				),
			),
			array('name' => 'Jim Parry', 'from' => 'Canada',
				'avatar' => 'jlp.jpg', 'roles' => 'Project lead, website',
				'description' => 'Educator, web developer',
				'badges' => array(
					array('badge' => 'twitter', 'handle' => 'codeigniter'),
					array('badge' => 'github', 'handle' => 'jim-parry')
				),
			),
			array('name' => 'Lonnie Ezell', 'from' => 'USA',
				'avatar' => 'lonnie.jpg', 'roles' => 'CI4',
				'description' => 'Web Mechanic, Author, Musician, Creator of Bonfire.',
				'badges' => array(
					array('badge' => 'twitter', 'handle' => 'lonnieezell'),
					array('badge' => 'github', 'handle' => 'lonnieezell')
				),
			),
			array('name' => 'Mat Whitney', 'from' => 'USA',
				'avatar' => 'mat.jpeg', 'roles' => 'CI4',
				'description' => 'Open source contributor, Author',
				'badges' => array(
					array('badge' => 'github', 'handle' => 'mwhitneysdsu')
				),
			),
		);

		$this->render();
	}

	function legal()
	{
		$this->data['title'] = "The Fine Print";
		$this->data['pagebody'] = 'legal';
		$this->render();
	}

}
