<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class autores extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
	}
	
public function index()
	{
		if ( isset($_SESSION['username']) ){
			$this->load->view('welcome_header');
		} else {
			$this->load->view('header');
		}
		$this->load->view('autores');
		

		/*uma alteracao qualquer*/

}
}
