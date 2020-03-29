<?php
	class About_us extends CI_Controller {
		public function index() {
			$this->load->view('templets/header');
			$this->load->view('about_us');
			$this->load->view('templets/footer');
		}
	}
?>