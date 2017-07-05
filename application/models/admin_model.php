<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
		function __construct()
		{
			
		}
		public function verify_user($email, $password)
		{
			$q = $this
				->db
				->where('email', $email)
				->where('password', $password)
				->limit(1)
				->get('users');
				
				/*var_dump($q->row());
				
				echo "here";*/
				
			if( $q->row() !== NULL ) {

				return $q->row();

			}
			return false;
		}
}	
