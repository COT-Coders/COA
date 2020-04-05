<?php
	
	class Department extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->model('dep_model');
		}

		public function index() {
			$this->load->view('templets/department_header', $data);
			$this->load->view('department', $data);
			$this->load->view('templets/department_footer');
		}

		public function desc($index) {
			$data['records'] = $this->dep_model->get_dept_info($index);
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

		public function staff() {
			$this->load->view('templets/department_header');
			$this->load->view('stafflist');
			$this->load->view('templets/department_footer');
		}
		  
		public function research() {
			$this->load->view('templets/department_header');
			$this->load->view('research');
			$this->load->view('templets/department_footer');
		}

		public function activities() {
			$this->load->view('templets/department_header');
			$this->load->view('activities');
			$this->load->view('templets/department_footer');
		}
	  
   } 
?>