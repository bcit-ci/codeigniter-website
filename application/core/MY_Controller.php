<?php


defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Base controller for webapp.
 *
 */
class Application extends CI_Controller {

	protected $data = array(); // parameters for view components
	protected $id;   // identifier for our content

	/**
	 * Constructor.
	 * Establish view parameters & set a couple up
	 */

	function __construct()
	{
		parent::__construct();
		$this->data = array();
		$this->data['title'] = 'CodeIgniter Web Framework';
		$this->data['mybb_forum_url'] = $this->config->item('mybb_forum_url');
		$this->errors = array();
		
		$this->load->library('Github_api');
		$this->load->driver('cache');

		// Prevent some security threats, per Kevin
		// Turn on IE8-IE9 XSS prevention tools
		$this->output->set_header('X-XSS-Protection: 1; mode=block');
		// Don't allow any pages to be framed - Defends against CSRF
		$this->output->set_header('X-Frame-Options: DENY');
		// prevent mime based attacks
		$this->output->set_header('X-Content-Type-Options: nosniff');		
	}

	/**
	 * Render this page
	 */
	function render()
	{
		if (!isset($this->data['pagetitle']))
			$this->data['pagetitle'] = $this->data['title'];

		// Massage the menubar
		$choices = $this->config->item('menu_choices');
		foreach ($choices['menudata'] as &$menuitem)
		{
			$menuitem['active'] = (ltrim($menuitem['link'], '/ ') == uri_string()) ? 'active' : '';
		}
		$this->data['menubar'] = $this->parser->parse('theme/menubar', $choices, true);

		$choices = $this->config->item('footer_choices');
		foreach ($choices['menudata'] as &$menuitem)
		{
			$menuitem['active'] = (ltrim($menuitem['link'], '/ ') == uri_string()) ? 'active' : '';
		}
		$this->data['footerbar'] = $this->parser->parse('theme/menubar', $choices, true);
		$this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);

		// title for all but the homepage
		$layout = empty($this->data['title']) ? 'jumbotitle' : 'title';
		$this->data['titleblock'] = $this->parser->parse('theme/' . $layout, $this->data, true);

		// finally, build the browser page!
		$this->data['data'] = &$this->data;
		$this->parser->parse('theme/template', $this->data);
	}

}
