<?php 
   class Department extends CI_Controller { 
	
      public function index() { 
         $this->load->helper('url');
         $this->load->view('templets/department_header');
         $this->load->view('department'); 
         $this->load->view('templets/department_footer');

      } 

      public function program() { 
         $this->load->helper('url');
         $this->load->view('templets/department_header');
         $this->load->view('program'); 
         $this->load->view('templets/department_footer');
      }

      public function faculty() { 
         $this->load->helper('url');
         $this->load->view('templets/department_header');
         $this->load->view('facultylist'); 
         $this->load->view('templets/department_footer');
      }
      
     
   } 
?>