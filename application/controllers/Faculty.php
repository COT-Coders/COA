<?php 
   class Faculty extends CI_Controller { 
	
      public function index() { 
         $this->load->helper('url');
         $this->load->view('templets/header');
         $this->load->view('faculty'); 
         $this->load->view('templets/footer');
      } 
   } 
?>