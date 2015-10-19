<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Github_api {

	/**
	 * Github API Client Singleton
	 *
	 * @var object
	 */
	private $client;

	/**
	 * Class constructor
	 *
	 * Loads the Github API library with cache enabled by default.
	 * Returns false on failures.
	 *
	 * @uses \Github\Client
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->client = new \Github\Client(
				new \Github\HttpClient\CachedHttpClient(array('cache_dir' => '/tmp/github-api-cache'))
		);
	}

	/**
	 * Retrieves extended information about a repository given its username and repository name
	 *
	 * @param string    the username
	 * @param string	the repository name
	 * @return array    repository information
	 */
	public function get_repo_info($username, $repository)
	{
		try
		{
			$info = $this->client->api('repo')->show($username, $repository);
			return (!empty($info)) ? $info : FALSE;
		} catch (Exception $e)
		{
			return FALSE;
		}
	}

	/**
	 * Retrieves extended information about the tags (releases) in a repository 
	 * given its username and repository name.
	 * 
	 * This returns an empty array, the same as attempts from browser :(
	 *
	 * @param string    the username
	 * @param string	the repository name
	 * @return array    releases information
	 */
	public function get_repo_releases($username, $repository)
	{
		try
		{
			$info = $this->client->api('repo')->releases()->all($username, $repository);
			return (!empty($info)) ? $info : FALSE;
		} catch (Exception $e)
		{
			return FALSE;
		}
	}

	/**
	 * Retrieves contributors information for a repository given its username and repository name
	 *
	 * @param string    the username
	 * @param string	the repository name
	 * @return array    contributor information
	 */
	public function get_contributors($username, $repository)
	{
		try
		{
			$info = $this->client->api('repo')->contributors($username, $repository);
			return (!empty($info)) ? $info : FALSE;
		} catch (Exception $e)
		{
			return FALSE;
		}
	}

}
