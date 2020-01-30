<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/status
	 *	- or -
	 * 		http://example.com/index.php/status/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function bottles($revenue=0)
	{	
		$this->load->helper('url');
		$this->load->view('status');
	}
}
