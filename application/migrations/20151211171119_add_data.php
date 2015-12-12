<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Data extends CI_Migration {

	public function up()
	{
		$categories_data = array(
			array('category_title' => 'Authentication', 'category_description' => ''),
			array('category_title' => 'Administration', 'category_description' => ''),
			array('category_title' => 'Asset Management', 'category_description' => ''),
			array('category_title' => 'Bundles', 'category_description' => ''),
			array('category_title' => 'Content Management', 'category_description' => ''),
			array('category_title' => 'Distributed Integration', 'category_description' => ''),
			array('category_title' => 'Layout', 'category_description' => ''),
			array('category_title' => 'Templating', 'category_description' => ''),
			array('category_title' => 'Shopping Cart', 'category_description' => ''),
			array('category_title' => 'Javascript Management', 'category_description' => ''),
			array('category_title' => 'Social Network Integration', 'category_description' => ''),
			array('category_title' => 'Stater Projects', 'category_description' => ''),
			array('category_title' => 'Modules', 'category_description' => ''),
		);

		$this->db->insert_batch('categories', $categories_data);

		$addons_data = array(
			array(
				'addon_name' => 'Ion Auth 2',
				'addon_description' => 'Simple and Lightweight Auth System for CodeIgniter',
				'author_name' => 'Ben Edmunds',
				'author_email' => '',
				'homepage_url' => 'https://github.com/benedmunds/CodeIgniter-Ion-Auth',
				'download_url' => 'http://github.com/benedmunds/CodeIgniter-Ion-Auth/zipball/2',
				'version' => '2.6.0',
				'github_username' => 'benedmunds',
				'github_repository' => 'CodeIgniter-Ion-Auth',
				'license' => 'MIT',
				'category_id' => 1,
			),
		);

		$this->db->insert_batch('addons', $addons_data);
	}

	public function down()
	{
		$this->db->truncate('addons');
		$this->db->truncate('categories');
	}

}
