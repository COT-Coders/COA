<?php
	
	class Department extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->helper('url');
		}

		public function index() {
			$query = $this->db->get("Department");
			$data['records'] = $query->result();
			//print_r($data);

			$this->load->view('templets/department_header', $data);
			$this->load->view('department', $data);
			$this->load->view('templets/department_footer');
		}

		public function program() {
			$this->load->view('templets/department_header');
			$this->load->view('d_programs');
			$this->load->view('templets/department_footer');
		}

		public function faculty() {
			$this->load->view('templets/department_header');
			$this->load->view('facultylist');
			$this->load->view('templets/department_footer');
	  }
	  
   } 
?>