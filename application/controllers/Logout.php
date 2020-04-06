<?php

class Logout extends CI_Controller {

	function index() {
		$this->session->sess_destroy();
		//echo "In Logout";
		redirect('/welcome/');  //  redirect to page from where it is called
	}
}
?>