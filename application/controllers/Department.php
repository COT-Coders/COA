<?php
	
	class Department extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->model('dep_model');
		}

		public function index() {
			$data['dept_names'] = $this->dep_model->get_dept_names();
			//print_r($data);

			$this->load->view('templates/department_header', $data);
			$this->load->view('department', $data);
			$this->load->view('templates/department_footer');
		}

		public function desc($dept_id) {
			$data['records'] = $this->dep_model->get_dept_info($dept_id);
			//print_r($data);

			$this->load->view('templates/department_header', $data);
			$this->load->view('department', $data);
			$this->load->view('templates/department_footer');
		}

		public function program() {
			$this->load->view('templates/department_header');
			$this->load->view('d_programs');
			$this->load->view('templates/department_footer');
		}

		public function faculty() {
			$this->load->view('templates/department_header');
			$this->load->view('facultylist');
			$this->load->view('templates/department_footer');
	  	}

		public function staff() {
			//  passing parameter to the model function to get staff of that particular dept_id only (either by argument to staff() function or by session)
			$data['records'] = $this->dep_model->get_staff_info(1);
			//print_r($data);

			$this->load->view('templates/department_header');
			$this->load->view('stafflist', $data);
			$this->load->view('templates/department_footer');
		}
		  
		public function research() {
			$this->load->view('templates/department_header');
			$this->load->view('research');
			$this->load->view('templates/department_footer');
		}

		public function activities() {
			$this->load->view('templates/department_header');
			$this->load->view('activities');
			$this->load->view('templates/department_footer');
		}
	  
   } 
?>