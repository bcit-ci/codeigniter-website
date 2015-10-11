<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2015, British Columbia Institute of Technology
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
 * @copyright	Copyright (c) 2014-2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * controllers/welcome.php
 *
 * Present the homepage.
 * 
 * CodeIgniter website, template driven
 *
 */
class Welcome extends Application {

	function __construct()
	{
		parent::__construct();
		$this->load->library('Github_api');
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->load->model('mybb');

		$this->data['title'] = '';
		$this->data['pagetitle'] = 'CodeIgniter Web Framework';
		$this->data['pagebody'] = 'welcome';

		$this->data['biglinks'] = array(
			array('icon' => 'download', 'link' => 'https://github.com/bcit-ci/CodeIgniter/archive/3.0.2.zip',
				'label' => 'Download', 'text' => 'The latest is <b>Version ' . $this->config->item('stable_version') . '</b>'),
			array('icon' => 'book', 'link' => 'http://www.codeigniter.com/user_guide',
				'label' => 'Read the Manual', 'text' => 'Clear documentation'),
			array('icon' => 'user', 'link' => 'http://forum.codeigniter.com',
				'label' => 'View the Forums', 'text' => 'Get Support &amp; Discuss Things'),
			array('icon' => 'random', 'link' => 'https://github.com/bcit-ci/CodeIgniter',
				'label' => 'On GitHub', 'text' => 'Fix Bugs or Add Features'),
		);

		$this->data['features1'] = array(
			array('icon' => 'star-empty', 'label' => 'Framework with a small footprint',
				'text' => 'CodeIgniter 3 has a 2MB download, including the user guide.'),
			array('icon' => 'book', 'label' => 'Clear documentation',
				'text' => 'The CodeIgniter User Guide comes with the download. It contains an introduction, tutorial, a number of "how to" guides, and then reference documentation for the components that make up the framework.'),
			array('icon' => 'hdd', 'label' => 'Compatibility with standard hosting',
				'text' => 'CodeIgniter 3 only needs PHP 5.2.4, and plays nicely with almost all shared or dedicated hosting platforms. Many webapps need a database, and CodeIgniter supports the most common, including MySQL.'),
			array('icon' => 'road', 'label' => 'No restrictive coding rules',
				'text' => ' Use your own coding and naming conventions, with only a few caveats that deal with classname conflicts. CodeIgniter looks to empower you, not shackle you.'),
			array('icon' => 'send', 'label' => 'Simple solutions over complexity',
				'text' => 'CodeIgniter encourages MVC, but does not force it on you.'),
		);

		$this->data['features2'] = array(
			array('icon' => 'dashboard', 'label' => 'Exceptional performance',
				'text' => 'CodeIgniter consistently outperforms most of its competitors.'),
			array('icon' => 'ok', 'label' => 'No large-scale monolithic libraries',
				'text' => 'CodeIgniter is not trying to be all things to all people. It is a lean MVC framework, with enough capabilities to improve your productivity, while providing for third-party addons/plugins for additional functionality.'),
			array('icon' => 'list-alt', 'label' => 'Nearly zero configuration',
				'text' => ' Much of the CodeIgniter configuration is done by convention, for instance putting models in a "models" folder. There are still a number of configuration options available, through scripts in the "config" folder.'),
			array('icon' => 'leaf', 'label' => 'No need for template language',
				'text' => ' CodeIgniter comes with a simple, substitution based, templating tool. Addons/plugins are available for most of the full-blown templating engines, if that is what you are used to.'),
			array('icon' => 'thumbs-up', 'label' => 'Spend more time away from the computer',
				'text' => 'Don\'t we all want it? CodeIgniter is easy to learn and to get proficient with.'),
		);

		// Grab our forum information
		$this->data['news'] = $this->forum_news();
		$this->data['posts'] = $this->forum_posts();

		// Fetch Github info
		$info = $this->github_api->get_repo_info('bcit-ci', 'CodeIgniter');
		if (!empty($info))
		{
			$parms = array(
				'html_url' => $info['html_url'],
				'stargazers_count' => number_format($info['stargazers_count']),
				'forks_count' => number_format($info['forks_count'])
			);
			$fragment = $this->parser->parse('theme/_github_widget', $parms, true);
		} else
		{
			$fragment = '';
		}
		$this->data['github_widget'] = $fragment;

		$this->render();
	}

	// Process the latest news from the forum
	function forum_news()
	{
		$items = $this->mybb->getRecentNews(5);
		if (!empty($items) && is_array($items) && count($items))
		{
			// massage the date formats
			foreach ($items as &$item)
			{
				$item['dateline'] = date('Y.m.d', $item['dateline']);
				$item['mybb_forum_url'] = $this->config->item('mybb_forum_url');
			}
			return $this->parser->parse('forum/_news', array('news' => $items), true);
		} else
			return $this->load->view('forum/_drats', true);
	}

	// Process the latest posts from the forum
	function forum_posts()
	{
		$items = $this->mybb->getRecentPosts(5);
		if (!empty($items) && is_array($items) && count($items))
		{
			// massage the date formats
			foreach ($items as &$item)
			{
				$item['lastpost'] = date('Y.m.d', $item['lastpost']);
				$item['mybb_forum_url'] = $this->config->item('mybb_forum_url');
			}
			return $this->parser->parse('forum/_posts', array('posts' => $items), true);
		} else
			return $this->load->view('forum/_drats', true);
	}

}
