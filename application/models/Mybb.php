<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
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
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Mybb
 *
 * Implements helper functions for grabbing information from
 * the MyBB install.
 *
 * Can be configured by modifying application/config/mybb.php
 */
class Mybb extends CI_Model {

	/**
	 * Are we running in mock mode? 
	 * If so, fake database results.
	 * @var boolean
	 */
	protected $mock = false;

	/**
	 * Are we running in mock mode? 
	 * If so, fake database results.
	 * @var array
	 */
	protected $mockData = array(
		/**
		 * Bogus news items for testing.
		 */
		'bogus_news' => array(
			array('subject' => 'Authentication, enough already!', 'username' => 'jlp', 'dateline' => '1415388160', 'tid' => '396'),
			array('subject' => 'CodeIgniter Translations', 'username' => 'jlp', 'dateline' => '1415387207', 'tid' => '376'),
			array('subject' => 'Upgraded forum software to MyBB 1.8', 'username' => 'jlp', 'dateline' => '1415140912', 'tid' => '254'),
			array('subject' => 'Spammers, blech', 'username' => 'ciadmin', 'dateline' => '1415138797', 'tid' => '202'),
			array('subject' => 'Help Wanted: Wiki', 'username' => 'jlp', 'dateline' => '1414737566', 'tid' => '1769'),
		),
		/**
		 * Bogus posts for testing.
		 */
		'bogus_posts' => array(
			array('subject' => 'Multi Table Select (Active Records)', 'username' => 'Han Solo', 'lastpost' => '1414567370', 'tid' => '407'),
			array('subject' => 'unexpected end of file', 'username' => 'Yoda', 'lastpost' => '1414567370', 'tid' => '413'),
			array('subject' => 'Status Enable & Disable Not Working', 'username' => 'Luke Skywalker', 'lastpost' => '1414567370', 'tid' => '403'),
			array('subject' => 'waiting for CI3.0 version', 'username' => 'Princess Leia', 'lastpost' => '1414567370', 'tid' => '4'),
			array('subject' => 'How i can select most common value with codeigniter', 'username' => 'Obi Wan Kenobi', 'lastpost' => '1414567370', 'tid' => '414'),
		)
	);

	//--------------------------------------------------------------------

	/**
	 * Constructor.
	 * Establish database connection, if appropriate.
	 */
	public function __construct()
	{
		parent::__construct();

		// If not running in production, nothing further to do
		$this->mock = ENVIRONMENT != 'production';
		if ($this->mock)
			return;

		$this->load->database('mybb');
	}

	//--------------------------------------------------------------------

	/**
	 * Retrieves the latest X posts. The posts must be in the forum specified in
	 * $config['mybb_forum_id'], have a replyto=0, username in the $config['mybb_news_usernames'] array,
	 * and visible=1.
	 *
	 * @param int $limit Number of the posts to retrieve
	 * @param str $order Direction to order results by. Either 'asc' or 'desc'
	 * @return null
	 */
	public function getRecentNews($limit = 5, $order = 'desc')
	{
		// If not running in production, return the mock data
		if ($this->mock)
			return $this->mockData['bogus_news'];

		$where = array(
			'replyto' => 0,
			'visible' => 1,
			'fid' => $this->config->item('mybb_news_forum_id')
		);

		$query = $this->db->select('subject, username, dateline, tid')
				->where_in('username', $this->config->item('mybb_news_usernames'))
				->where($where)
				->limit($limit, 0)
				->order_by('dateline', $order)
				->get('mybb_posts');

		return (!$query->num_rows()) ? null : $query->result_array();
	}

	//--------------------------------------------------------------------

	/**
	 * Grabs the most recently active threads from the forums.
	 *
	 * @param int $limit
	 * @param string $order
	 * @return null
	 */
	public function getRecentPosts($limit = 5, $order = 'desc')
	{
		// If not running in production, return the mock data
		if ($this->mock)
			return $this->mockData['bogus_posts'];

		$where = array(
			'visible' => 1,
			'deletetime' => 0
		);

		$query = $this->db->select('tid, subject, username, lastpost, lastposter')
				->where($where)
				->limit($limit, 0)
				->order_by('lastpost', $order)
				->get('mybb_threads');

		return (!$query->num_rows()) ? null : $query->result_array();
	}

	//--------------------------------------------------------------------
}
