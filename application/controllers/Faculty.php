<?php 
   class Faculty extends CI_Controller { 
	
      public function index() { 
         $this->load->helper('url');
         $this->load->view('templets/department_header');
         $this->load->view('faculty'); 
         $this->load->view('templets/department_footer');

      } 

      public function courses() { 
         $this->load->helper('url');
         $this->load->view('templets/department_header');
         $this->load->view('courses'); 
         $this->load->view('templets/department_footer');
      }
      
      
      public function fcourses() { 
         $this->load->helper('url');
         $this->load->view('templets/department_header');
         $this->load->view('faculty_courses'); 
         $this->load->view('templets/department_footer');
      }
      
      public function fpublications() { 
         $this->load->helper('url');
         $this->load->view('templets/department_header');
         $this->load->view('faculty_publications'); 
         $this->load->view('templets/department_footer');
      } 

      public function fresearch() { 
         $this->load->helper('url');
         $this->load->view('templets/department_header');
         $this->load->view('faculty_research'); 
         $this->load->view('templets/department_footer');
      } 

      public function fmeetings() { 
         $this->load->helper('url');
         $this->load->view('templets/department_header');
         $this->load->view('faculty_meetings'); 
         $this->load->view('templets/department_footer');
      } 
   } 
?>