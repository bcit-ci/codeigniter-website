<?php

/**
 * Class Mybb
 *
 * Implements helper functions for grabbing information from
 * the MyBB install.
 *
 * Can be configured by modifying application/config/mybb.php
 */
class Mybb extends CI_Model {

    /**
     * Stores connection the mybb database table.
     * Database details stored in database config, mybb group.
     * @var
     */
    protected $dbMybb;

    /**
     * Are we running in mock mode? 
     * If so, fake database results.
     * @var boolean
     */
    protected $mock = false;

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

	// Get our database instance
	$this->dbMybb = $this->load->database('mybb', TRUE);
    }

    //--------------------------------------------------------------------

    /**
     * Retrieves the latest X posts. The posts must be in the forum specified in
     * $config['forum_id'], have a replyto=0, username in the $config['news_usernames'] array,
     * and visible=1.
     *
     * @param int $limit Number of the posts to retrieve
     * @param str $order Direction to order results by. Either 'asc' or 'desc'
     * @return null
     */
    public function getRecentNews($limit = 5, $order = 'desc')
    {
	// If not running in production, return the mock data
	if ($this->mock)
	    return $this->config->item('bogus_news', 'mybb_config');

	$where = array(
	    'replyto' => 0,
	    'visible' => 1,
	    'fid' => $this->config->item('news_forum_id', 'mybb_config')
	);

	$query = $this->dbMybb->select('subject, username, dateline, tid')
		->where_in('username', $this->config->item('news_usernames', 'mybb_config'))
		->where($where)
		->limit($limit, 0)
		->order_by('dateline', $order)
		->get('mybb_posts');

	return (!$query->num_rows()) ? null : $query->result_array();
    }

    //--------------------------------------------------------------------

    /**
     * Grabs the most recently active threads from the forums.
     *
     * @param int $limit
     * @param string $order
     * @return null
     */
    public function getRecentPosts($limit = 5, $order = 'desc')
    {
	// If not running in production, return the mock data
	if ($this->mock)
	    return $this->config->item('bogus_posts','mybb_config');

	$where = array(
	    'visible' => 1,
	    'deletetime' => 0
	);

	$query = $this->dbMybb->select('tid, subject, username, lastpost, lastposter')
		->where($where)
		->limit($limit, 0)
		->order_by('lastpost', $order)
		->get('mybb_threads');

	return (!$query->num_rows()) ? null : $query->result_array();
    }

    //--------------------------------------------------------------------
}
