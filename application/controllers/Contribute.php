<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
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
 * controllers/contribute.php
 *
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
