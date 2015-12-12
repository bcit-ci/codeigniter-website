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
 * controllers/addons.php
 *
 * CodeIgniter website, template driven
 *
 * ------------------------------------------------------------------------
 */
class Addons extends Application {

	function __construct()
	{
		parent::__construct();

		$this->load->model('category_model');
		$this->load->model('addon_model');

		$this->load->helper('date');
		$this->load->helper('url');
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$result = $this->_categories_and_addons();

		$this->data['fluid_layout'] = TRUE;
		$this->data['title'] = "Addons";
		$this->data['pagebody'] = 'addons';
		$this->data['category'] = 'All Addons';

		if (!isset($result['addons']) || empty($result['addons']))
		{
			$this->data['addons'] = $this->parser->parse('theme/_addons_empty', array(), true);
		} else
		{
			$this->data['addons'] = $this->parser->parse('theme/_addons', array('addons' => $result['addons']), true);
		}

		$this->data['categories'] = $this->parser->parse('theme/_categories', array('categories' => $result['categories'], 'total_addons' => count($result['addons'])), true);

		$this->render();
	}

	function category($category_id = 'all')
	{
		if ($category_id == 'all')
		{
			redirect('/addons');
		}

		$result = $this->_categories_and_addons($category_id);

		$category_key = array_search($category_id, array_column($result['categories'], 'category_id'));

		if ($category_key === FALSE)
		{
			return show_404();
		}

		$category = $result['categories'][$category_id - 1];

		$this->data['fluid_layout'] = TRUE;
		$this->data['pagebody'] = 'addons';
		$this->data['title'] = $category['category_title'];
		$this->data['category'] = $category['category_title'];

		if (!isset($category['addons']) || empty($category['addons']))
		{
			$this->data['addons'] = $this->parser->parse('theme/_addons_empty', array(), true);
		} else
		{
			$this->data['addons'] = $this->parser->parse('theme/_addons', array('addons' => $category['addons']), true);
		}

		$this->data['categories'] = $this->parser->parse('theme/_categories', array('categories' => $result['categories'], 'total_addons' => count($result['addons'])), true);

		$this->render();
	}

	function _categories_and_addons($current_category = NULL)
	{
		$ttl = 60 * 60 * 4; // time to live s/b 4 hours
		$categories = $this->category_model->as_array()->set_cache('get_all_categories', $ttl)->with_addons()->get_all();

		// Set the total count of addons per category and their links
		array_walk($categories, 'Addons::_set_addons_count_and_links', $current_category);


		// Instead of querying the db again for addons, we can just pull them from the categories result
		$addons = array_reduce($categories, 'Addons::_reduce_categories_to_addons', array());

		// for date conversion on 'added_at' and 'updated_at'
		array_walk($addons, 'Addons::_set_addon_dates', time());

		return array('categories' => $categories, 'addons' => $addons);
	}

	function _set_addon_dates(&$addon, $index, $now)
	{
		$addon->added = timespan(mysql_to_unix($addon->added_at), $now);
		$addon->updated = timespan(mysql_to_unix($addon->updated_at), $now);
	}

	function _reduce_categories_to_addons($carry, $item)
	{
		$addons = isset($item['addons']) ? $item['addons'] : array();

		return array_merge($carry, $addons);
	}

	function _set_addons_count_and_links(&$category, $index, $current_category)
	{
		$category['addons_count'] = isset($category['addons']) ? count($category['addons']) : 0;
		$category['link'] = site_url(array('addons', 'category', $category['category_id']));
		$category['active'] = $category['category_id'] === $current_category ? 'active' : '';
	}

}
