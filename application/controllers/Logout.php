<?php

class Logout extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->library('session');
		}

	function index() {
		/*$brow_dept_id = $this->session->userdata('browsing_dept_id');
		echo $brow_dept_id;*/
		
		$this->session->sess_destroy();

		/*echo "Just After destroying session<br>";
		print_r($this->session->userdata);

		echo "Again setting browsing_dept_id";
		$this->session->set_userdata('browsing_dept_id', $brow_dept_id);
		print_r($this->session->userdata);*/

		//echo "In Logout";
		redirect('/welcome/');  //  redirect to page from where it is called
	}
}
?>