<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		/*if(!isset($_SESSION)){
			session_start();
		}*/
	}
	
	public function index()
	{
		if(isset($_SESSION['username'])){
			redirect('welcome');
		}
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('senha', 'senha', 'required|min_length[3]');
		
		if( $this->form_validation->run() !== false){
			$this->load->model('admin_model');
			$res = $this->admin_model->verify_user($this->input->post('email'), $this->input->post('senha'));
			
			if($res !== false){
				$_SESSION['username'] = $this->input->post('email');
				redirect('welcome');
			}
		}
		
		$this->load->view('login_header');
		$this->load->view('login_view');
		
	}
	
	public function logout()
		{
			session_destroy();
			redirect('admin');
		}
	
}
