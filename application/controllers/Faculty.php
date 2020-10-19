<?php 
	class Faculty extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->model('faculty_model');
			$this->load->helper(array('form'));
		}

		public function index() {
			if( $this->session->userdata('logged_in') == 'true' ) {
				//echo $this->session->userdata('fac_id');
				$data['details'] = $this->faculty_model->get_fac_details($this->session->userdata('fac_id'));
				//print_r($data);

				$this->load->view('templates/department_header');
				$this->load->view('faculty', $data);
				$this->load->view('templates/department_footer');
			}
			else {
				redirect(site_url());
			}
		}

		/*public function index() {
			$this->load->view('templates/department_header');
			//  if not logged in, redirect to home page. Flow will be: Home -> Dept. index -> login -> faculty home page
			if( $this->session->userdata('logged_in') == 'true' ) {
				//echo $this->session->userdata('fac_id');
				$data['details'] = $this->faculty_model->get_fac_details($this->session->userdata('fac_id'));
				//print_r($data);
				$this->load->view('faculty', $data);
			}
			else {
				$this->load->helper('form');
				$this->load->view('login');
			}
			$this->load->view('templates/department_footer');
		}*/


		public function add_staff() {
			if( $this->session->userdata('logged_in') == 'true' )
				$this->load->view('add_staff');
			else
				redirect(site_url());
		}

		public function staff_form_check() {
			if(!$this->session->userdata('logged_in')) {  //  if faculty is not looged in, redirect to faculty home/index page
				redirect(site_url());
			}
			else {  //  faculty should be logged in
				$this->load->library('form_validation');
				$this->form_validation->set_rules('staff_name', 'Staff Name', 'trim|min_length[5]|required|htmlspecialchars');
				$this->form_validation->set_rules('staff_desig', 'Staff Designation', 'trim|min_length[5]|required|htmlspecialchars');
				$this->form_validation->set_rules('staff_info', 'Staff Personal Info', 'trim|min_length[5]|required|htmlspecialchars');
				$this->form_validation->set_rules('staff_address', 'Staff Address', 'trim|min_length[5]|required|htmlspecialchars');
				$this->form_validation->set_rules('staff_ph_no', 'Staff Phone Number', 'numeric|min_length[10]|required|is_unique[Staff.Phone]');  //  Phone no. of staff will be of atleast 10 digits

				/*
				Note - Check for duplicate entries of mobile no., mobile no. is getting changed after entering and inserting into database
				*/

				if($this->form_validation->run() == false) {
					//$data['user_logged_in'] = 'false';
					//$data['title'] = 'Login';
					//$data['invalid_login_class'] = 'hidden';

					//$this->load->view('templates/header', $data);
					$this->load->view('add_staff');
					//$this->load->view('templates/footer');
				}
				else {  //  form validation is true
					echo "Form validated";
					//  insert values in staff table

					$status = $this->faculty_model->insert_staff();
					echo $status;
					sleep(5);
					redirect('/faculty/');
				}  //  end of else checking from validation
			}  //  end of else checking logged_in
		}  //  end of staff_form_check function

		public function courses() {
			$this->load->view('templates/department_header');
			$this->load->view('courses'); 
			$this->load->view('templates/department_footer');
		}
		
		
		public function fcourses() {
			$this->load->view('templates/department_header');
			$this->load->view('faculty_courses'); 
			$this->load->view('templates/department_footer');
		}
		
		public function fpublications() {
			if( $this->session->userdata('logged_in') == 'true' ) {
				$data['details'] = $this->faculty_model->get_fac_details($this->session->userdata('fac_id'));
				$data['pub_info'] = $this->faculty_model->get_publication_info($this->session->userdata('fac_id'));
				//print_r($data['pub_info']);

				$this->load->view('templates/department_header');
				$this->load->view('faculty_publications', $data);
				$this->load->view('templates/department_footer');
			}
			else
				redirect(site_url());
		}

		public function add_publication() {
			if(!$this->session->userdata('logged_in')) {  //  if faculty is not looged in, redirect to faculty home/index page
				redirect('/faculty/');
			}
			else {  //  faculty should be logged in
				$this->load->library('form_validation');
				$this->form_validation->set_rules('pub_title', 'Publication Title', 'trim|min_length[5]|required|htmlspecialchars');
				$this->form_validation->set_rules('pub_abs', 'Publication Abstract', 'trim|min_length[20]|required|htmlspecialchars');
				$this->form_validation->set_rules('pub_name', 'Publication Name', 'trim|min_length[5]|required|htmlspecialchars');
				$this->form_validation->set_rules('pub_date', 'Publication Date', 'required');
				//$this->form_validation->set_rules('pub_link', 'Publication Link', 'trim|min_length[10]|required|htmlspecialchars');

				if($this->form_validation->run() == false) {
					$data['details'] = $this->faculty_model->get_fac_details($this->session->userdata('fac_id'));
					$this->load->view('templates/department_header');
					$this->load->view('faculty_publications', $data);
					$this->load->view('templates/department_footer');
				}
				else {  //  form validation is true
					echo "Form validated";
					//  insert values in publication table

					$status = $this->faculty_model->insert_publication();
					echo $status;
					sleep(5);
					redirect('/faculty/');
				}  //  end of else checking from validation
			}  //  end of else checking logged_in
		}  //  end of add_publication function

		public function fresearch() { 
			$this->load->helper('url');
			$this->load->view('templates/department_header');
			$this->load->view('faculty_research'); 
			$this->load->view('templates/department_footer');
		} 

		public function fmeetings() { 
			$this->load->helper('url');
			$this->load->view('templates/department_header');
			$this->load->view('faculty_meetings'); 
			$this->load->view('templates/department_footer');
		} 
	} 
?>
