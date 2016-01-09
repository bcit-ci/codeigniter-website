<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	CodeIgniter Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014-2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * controllers/help.php
 *
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
