<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tools extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->input->is_cli_request()
				or exit('Execute via command line: php index.php tools');
	}

	public function migrate()
	{
		$this->load->library('migration');

		if ($this->migration->current() === FALSE)
		{
			show_error($this->migration->error_string());
		}
	}

}
