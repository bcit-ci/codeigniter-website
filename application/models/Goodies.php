<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Encapsulation of the addins data, however it is stored.
 */
class Goodies extends CI_Model {

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
			['code' => 'auth', 'name' => 'Authentication'],
			['code' => 'temp', 'name' => 'Templating'],
			['code' => 'asst', 'name' => 'Asset management'],
			['code' => 'strt', 'name' => 'Starters'],
		),
		/**
		 * Bogus posts for testing.
		 */
		'bogus_addins' => array(
			'123' => ['id'=>123, 'name' => 'Caboose', 'desc' => 'This is the most wonderful yada yada thing since sliced bread', 'icon' => 'abc.png', 'main' => 'asst', 'others' => 'strt', 'link' => '', 'version' => '', 'kind' => ''],
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

//		$this->load->database('mybb');
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
			$stuff = $this->mockData['bogus_addins'];
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
			return $this->mockData['bogus_addins'][$id];
	}

}
