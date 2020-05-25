<?php
	
	class Department extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->model('dep_model');
			$this->load->library('session');
			$this->load->helper(array('form'));
		}

		public function index() {
			//$data['dept_names'] = $this->dep_model->get_dept_names();
			//print_r($data);
			//print_r($this->session->userdata);

			$brow_dept_id = $this->session->userdata('browsing_dept_id');
			//echo "Recieved from session".$brow_dept_id;

			if($brow_dept_id)
				$dept_id = $brow_dept_id;
			else
				$dept_id = $this->session->userdata('fac_dept_id');

			if(!$dept_id) {
				//echo "Neither browsing, not faculty dept. id is set in department/index";
				$this->session->set_userdata('browsing_dept_id', 1);
				$dept_id = $this->session->userdata('browsing_dept_id');
				//echo "Setting default browsing id to: ".$dept_id;
			}

			$data['records'] = $this->dep_model->get_dept_info($dept_id);
			//$dept_id = $this->input->post('dept_id');
			//echo "Department ID from button in dept. list".$dept_id;
			$this->load->view('templates/department_header', $data);
			$this->load->view('department', $data);
			$this->load->view('templates/department_footer');
		}

		public function desc() {
			$id = $this->uri->segment(3);
			echo "URI".$id;
			$this->session->set_userdata('browsing_dept_id', $id);

			redirect('/department/');
			/*$dept_id = $id;
			$data['records'] = $this->dep_model->get_dept_info($dept_id);
			//print_r($data);

			$this->load->view('templates/department_header', $data);
			$this->load->view('department', $data);
			$this->load->view('templates/department_footer');*/
		}

		public function program() {
			$this->load->view('templates/department_header');
			$this->load->view('d_programs');
			$this->load->view('templates/department_footer');
		}

		public function faculty_list() {
			if( ($this->session->userdata('logged_in') == 'true') && $this->session->userdata('fac_dept_id'))
				$dept_id = $this->session->userdata('fac_dept_id');
			else
				$dept_id = $this->session->userdata('browsing_dept_id');

			if(!$dept_id) {
				//echo "Neither browsing, not faculty dept. id is set in department/faculty_list";
				$this->session->set_userdata('browsing_dept_id', 1);
				$dept_id = $this->session->userdata('browsing_dept_id');
				//echo "Setting default browsing id to: ".$dept_id;
			}

			$data['records'] = $this->dep_model->get_faculty_info($dept_id);
			//print_r($data);

			$this->load->view('templates/department_header');
			$this->load->view('facultylist', $data);
			$this->load->view('templates/department_footer');
	  	}

		public function staff() {
			//  passing parameter to the model function to get staff of that particular dept_id only (either by argument to staff() function or by session)
			$data['records'] = $this->dep_model->get_staff_info(1);  //  Hard coded as of now
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