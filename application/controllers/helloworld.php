<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class HelloWorld extends CI_Controller {

	
	

	public function index()
	{
		$data['sample1'] = "Hello World";

		$data['var1'] = 1;
		$data['var2'] = 2;



		$this->load->model("m_addition");

		$data['sum'] = $this->m_addition->add($data['var1'],$data['var2']);



		$this->load->view('secondview', $data);	
	}

}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */