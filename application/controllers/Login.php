<?php defined('BASEPATH') or exit('No Direct Access Allowed');

/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){
		$this->load->view('login_view');
	}

	function cek(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_message('%s must not empty','required');

		if ($this->form_validation->run() == FALSE){
			redirect('login');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if ($username && $password != 'admin'){
				redirect('login');
			} else {
				redirect('admin');
			}
		}
	}
	function logout(){
		redirect(base_url());
	}
}