<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Encapsulation of the addins data, however it is stored.
 */
class Goodies extends CI_Model
{

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
//FIXME Need "real" mock data
	protected $mockData = array(
		/**
		 * Bogus categories
		 */
		'bogus_categories' => array(
			['code' => 'asset', 'name' => 'Asset management', 'description' => 'Asset & media management'],
			['code' => 'auth', 'name' => 'Authentication', 'description' => 'Authentication addins, including Oauth'],
			['code' => 'cli', 'name' => 'CLI tools', 'description' => 'Command line tools'],
			['code' => 'data', 'name' => 'Storgae', 'description' => 'Database or storage adapters & ORM'],
			['code' => 'misc', 'name' => 'Miscellaneous', 'description' => 'Stuff that won\'t fit anywhere else'],
			['code' => 'shop', 'name' => 'E-Commerce', 'description' => 'E-commerce or shopping cart'],
			['code' => 'start', 'name' => 'Starters', 'description' => 'Bundles intended for use as project starters'],
			['code' => 'templ', 'name' => 'Templating', 'description' => 'View templating engines'],
			['code' => 'test', 'name' => 'Testing', 'description' => 'Testing & debugging tools'],
		),
		/**
		 * Bogus addins for testing.
		 */
		'bogus_addins' => array(
			'123' => [
				'id' => 123,
				'name' => 'Caboose',
				'desc' => 'This is the most wonderful yada yada thing since sliced bread',
				'version' => '',
				'asof' => '',
				'icon' => 'caboose.png',
				'main' => 'asset',
				'others' => '',
				'link' => '',
				'home' => '',
				'docs' => '',
				'author' => '',
				'version' => '',
				'kind' => '',
				'license' => '',
			],
		),
		/**
		 * Bogus versions for testing.
		 */
		'bogus_versions' => array(
			'3' => ['version' => 3, 'latest' => '3.1.4', 'asof' => '', 'download' => ''],
			'4' => ['version' => 4, 'latest' => '4.0.0alpha', 'asof' => '', 'download' => ''],
		),
		/**
		 * Bogus addin kinds for testing.
		 */
		'bogus_kinds' => array(
			['kind' => 'comp', 'name' => 'Composer', 'description' => 'Composer-installed addin'],
			['kind' => 'pkg', 'name' => 'Package', 'description' => 'CodeIgniter package'],
			['kind' => 'source', 'name' => 'Source', 'description' => 'Source code provided'],
		),
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

//		$this->load->database('mybb

		');
	}

	//--------------------------------------------------------------------

	/**
	 * Retrieves all of the addin categories
	 *
	 * @return array
	 */
	public function categories()
	{
		// If not running in production, return the mock data
		if ($this->mock)
			
		$stuff = $this->mockData['bogus_categories'];
		else
		{
			// retrieve the real data
		}

		asort($stuff);
		return $stuff;
	}

	//--------------------------------------------------------------------

	/**
	 * Retrieve all the addins in a specified category (default to all)
	 *
	 * @param string $catcode
	 * @return null
	 */
	public function addins($catcode = null)
	{
		// If not running in production, return the mock data
		if ($this->mock)
			$st
		uff = $this->mockData['bogus_addins

		'];
		else
		{
			// retrieve the real data
		}

		asort($stuff); // sort by addin name?
		return $stuff;
	}

	//--------------------------------------------------------------------

	/**
	 * Retrieve an addin record
	 *
	 * @param string $id
	 * @return null
	 */
	public function details($id = null)
	{
		// If not running in production, return the mock data
		if ($this->mock)
			ret
		urn $this->mockData['bogus_addins

		'][$id];
	}

}
