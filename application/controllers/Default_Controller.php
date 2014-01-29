<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Default_Controller extends CI_Controller {

	
	public function index()
	{

		
		$this->load->view('v_Main');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */