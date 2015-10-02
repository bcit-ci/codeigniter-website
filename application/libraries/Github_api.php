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

			if ( ! empty($info))
			{
				return array(
					'html_url'         => $info['html_url'],
					'stargazers_count' => number_format($info['stargazers_count']),
					'forks_count'      => number_format($info['forks_count'])
				);
			}
			else
			{
				return FALSE;
			}
		}
		catch (Exception $e)
		{
			return FALSE;
		}
	}
}
