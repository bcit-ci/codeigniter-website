<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Explain how to contribute
 * 
 * CodeIgniter website, template driven
 *
 * ------------------------------------------------------------------------
 */
class Contribute extends Application {

	private $astar = '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>';

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['title'] = "Contribute to CodeIgniter";
		$this->data['pagebody'] = 'contribute';

		// get the framework heros
		if (!$info = $this->cache->get('fw_heros'))
		{
			$info = $this->github_api->get_contributors('bcit-ci', 'CodeIgniter');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('fw_heros', $info, $ttl);
		}
		$this->data['fw_heros'] = $this->hitparade($info);

		// get the CodeIgniter4 heros
		if (!$info = $this->cache->get('ci4_heros'))
		{
			$info = $this->github_api->get_contributors('bcit-ci', 'CodeIgniter4');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('ci4_heros', $info, $ttl);
		}
		$this->data['ci4_heros'] = $this->hitparade($info);

		// get the website heros
		if (!$info = $this->cache->get('web_heros'))
		{
			$info = $this->github_api->get_contributors('bcit-ci', 'codeigniter-website');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('web_heros', $info, $ttl);
		}
		$this->data['web_heros'] = $this->hitparade($info);

		// get the translation heros
		if (!$info = $this->cache->get('trans_heros'))
		{
			$info = $this->github_api->get_contributors('bcit-ci', 'codeigniter3-translations');
			$ttl = 60 * 60 * 4; // time to live s/b 4 hours
			$this->cache->save('trans_heros', $info, $ttl);
		}
		$this->data['trans_heros'] = $this->hitparade($info);

		$this->render();
	}

	// present our responsible disclosure page
	function responsible()
	{
		$this->data['title'] = "Responsible Disclosure";
		$this->data['pagebody'] = 'responsible';

		$this->render();
	}

	// build the hit parade for this group of contributors
	function hitparade($info)
	{
		$heros = array();
		if (!empty($info))
		{
			foreach ($info as $val)
			{
				$heros[] = array(
					'avatar' => $val['avatar_url'],
					'name' => $val['login'],
					'url' => $val['html_url'],
					'stars' => $this->stars($val['contributions'])
				);
			}
			return $this->parser->parse('theme/_heros', array('heros' => $heros), true);
		} else
			return '';
	}

	// determine how many stars a contributor earns
	function stars($contributions)
	{
		$result = $this->astar;
		while ($contributions > 9)
		{
			$result .= $this->astar;
			$contributions /= 10;
		}
		return $result;
	}

}
