<?php 
	class Faculty extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->model('faculty_model');
		}

		public function index() {
			$this->load->view('templets/department_header');
			if( $this->session->userdata('logged_in') == 'true' ) {
				echo $this->session->userdata('fac_id');
				$data['details'] = $this->faculty_model->get_fac_details($this->session->userdata('fac_id'));
				print_r($data);
				$this->load->view('faculty', $data);
			}
			else {
				$this->load->helper('form');
				$this->load->view('login');
			}
			$this->load->view('templets/department_footer');
		} 

		public function courses() {
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