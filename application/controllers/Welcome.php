<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
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
			array('icon' => 'download', 'link' => 'https://github.com/bcit-ci/CodeIgniter/archive/3.1.10.zip',
				'label' => 'Download', 'text' => 'The latest is <b>Version ' . $this->config->item('stable_version') . '</b>'),
			array('icon' => 'book', 'link' => 'https://www.codeigniter.com/user_guide',
				'label' => 'Read the Manual', 'text' => 'Clear documentation'),
			array('icon' => 'user', 'link' => 'http://forum.codeigniter.com',
				'label' => 'View the Forums', 'text' => 'Get Support &amp; Discuss Things'),
			array('icon' => 'random', 'link' => 'https://github.com/bcit-ci/CodeIgniter',
				'label' => 'On GitHub', 'text' => 'Fix Bugs or Add Features'),
		);

		$this->data['features1'] = array(
			array('icon' => 'star-empty', 'label' => 'Framework with a small footprint',
				'text' => 'CodeIgniter 3 has a 2MB download, including the user guide.'),
			array('icon' => 'send', 'label' => 'Simple solutions over complexity',
				'text' => 'CodeIgniter encourages MVC, but does not force it on you.'),
			array('icon' => 'book', 'label' => 'Clear documentation',
				'text' => 'The CodeIgniter User Guide comes with the download. It contains an introduction, tutorial, a number of "how to" guides, and then reference documentation for the components that make up the framework.'),
			//array('icon' => 'hdd', 'label' => 'Compatibility with standard hosting',
			//	'text' => 'CodeIgniter 3 only needs PHP 5.3.7, and plays nicely with almost all shared or dedicated hosting platforms. Many webapps need a database, and CodeIgniter supports the most common, including MySQL.'),
			//array('icon' => 'road', 'label' => 'No restrictive coding rules',
			//	'text' => ' Use your own coding and naming conventions, with only a few caveats that deal with classname conflicts. CodeIgniter looks to empower you, not shackle you.'),
		);

		$this->data['features2'] = array(
			array('icon' => 'dashboard', 'label' => 'Exceptional performance',
				'text' => 'CodeIgniter consistently outperforms most of its competitors.'),
			array('icon' => 'lock', 'label' => 'Strong Security',
				'text' => 'We take security seriously, with built-in protection against CSRF and XSS attacks.'),
			array('icon' => 'list-alt', 'label' => 'Nearly zero configuration',
				'text' => ' Much of the CodeIgniter configuration is done by convention, for instance putting models in a "models" folder. There are still a number of configuration options available, through scripts in the "config" folder.'),
			//array('icon' => 'thumbs-up', 'label' => 'Spend more time away from the computer',
			//	'text' => 'Don\'t we all want it? CodeIgniter is easy to learn and to get proficient with.'),
			//array('icon' => 'leaf', 'label' => 'No need for template language',
			//	'text' => ' CodeIgniter comes with a simple, substitution based, templating tool. Addons/plugins are available for most of the full-blown templating engines, if that is what you are used to.'),
			//array('icon' => 'ok', 'label' => 'No large-scale monolithic libraries',
			//	'text' => 'CodeIgniter is not trying to be all things to all people. It is a lean MVC framework, with enough capabilities to improve your productivity, while providing for third-party addons/plugins for additional functionality.'),
		);

		// Grab our forum information
		$this->data['news'] = $this->forum_news();
		$this->data['posts'] = $this->forum_posts();

		// get the repo stats
		if (!$info = $this->cache->get('repo_info'))
		{
			$info = $this->github_api->get_repo_info('bcit-ci', 'CodeIgniter');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('repo_info', $info, $ttl);
		}

		// Fetch Github info
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
		// get the forum news
		if (!$items = $this->cache->get('bb_news'))
		{
			$items = $this->mybb->getRecentNews(5);
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('bb_news', $items, $ttl);
		}

		if (!empty($items) && is_array($items) && count($items))
		{
			// massage the date formats
			foreach ($items as &$item)
			{
				$item['dateline'] = date('Y.m.d', $item['dateline']);
				$item['mybb_forum_url'] = $this->config->item('mybb_forum_url');
				// escape the subject
				$item['subject'] = htmlentities($item['subject']);
				$item['subject'] = strip_tags($item['subject']); // fix #79
			}
			return $this->parser->parse('forum/_news', array('news' => $items), true);
		} else
			return $this->load->view('forum/_drats', true);
	}

	// Process the latest posts from the forum
	function forum_posts()
	{
		// get the forum posts
		if (!$items = $this->cache->get('bb_posts'))
		{
			$items = $this->mybb->getRecentPosts(5);
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('bb_posts', $items, $ttl);
		}
		if (!empty($items) && is_array($items) && count($items))
		{
			// massage the date formats
			foreach ($items as &$item)
			{
				$item['lastpost'] = date('Y.m.d', $item['lastpost']);
				$item['mybb_forum_url'] = $this->config->item('mybb_forum_url');
				// escape the subject
				$item['subject'] = htmlentities($item['subject']);
				$item['subject'] = strip_tags($item['subject']); // fix #79
			}
			return $this->parser->parse('forum/_posts', array('posts' => $items), true);
		} else
			return $this->load->view('forum/_drats', true);
	}

}
