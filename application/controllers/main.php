	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	
	
	public function index()
	{
		$data['main_content'] = "Main";
		$this->load->view('include/template', $data);
	}

	 public function sign()

	{
		$data['main_content'] = "sign";
		$this->load->view('include/template', $data);
	}

	 public function about()

	{
		$data['main_content'] = "About";
		$this->load->view('include/template', $data);
	}

	public function contact()

	{
		$data['main_content'] = "Contact";
		$this->load->view('include/template', $data);

	}

	public function services()

	{
		$data['main_content'] = "Services";
		$this->load->view('include/template', $data);
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */