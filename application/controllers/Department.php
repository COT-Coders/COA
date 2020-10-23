<?php
	
	class Department extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->model('dep_model');
			$this->load->library('session');
			$this->load->helper(array('form'));
		}

		public function get_active_dept_id() {
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
			return $dept_id;
		}

		public function index() {
			//$data['dept_names'] = $this->dep_model->get_dept_names();
			//print_r($data);

			$dept_id = $this->get_active_dept_id();
			$data['records'] = $this->dep_model->get_dept_info($dept_id);

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
			*/
		}

		public function program() {
			$dept_id = $this->get_active_dept_id();
			$dept_name['records'] = $this->dep_model->get_dept_name($dept_id);

			$this->load->view('templates/department_header', $dept_name);
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

			$dept_name['records'] = $this->dep_model->get_dept_name($dept_id);
			$data['records'] = $this->dep_model->get_faculty_info($dept_id);
			
			$this->load->view('templates/department_header', $dept_name);
			//print_r($data);			
			$this->load->view('facultylist', $data);
			$this->load->view('templates/department_footer');
		}

		public function staff() {
			//  passing parameter to the model function to get staff of that particular dept_id only (either by argument to staff() function or by session)
			$dept_id = $this->get_active_dept_id();
			$dept_name['records'] = $this->dep_model->get_dept_name($dept_id);
			$data['records'] = $this->dep_model->get_staff_info(1);  //  Hard coded as of now
			//print_r($data);

			$this->load->view('templates/department_header', $dept_name);
			$this->load->view('stafflist', $data);
			$this->load->view('templates/department_footer');
		}

		public function update_hod() {
			if( ($this->session->userdata('logged_in') == 'true') && ($this->session->userdata('role') == 2) ) {  //  Only Dean can update HOD of dept.
				$data['records'] = $this->dep_model->get_dept_names();
				sort($data['records']);
				//print_r($data);

				$data1['records'] = array(0 => "Select");
				foreach($data['records'] as $rec) {
					$data1['records'][$rec['Dept_ID']] = $rec['Dept_Name'];
				}
				//print_r($data1);

				$dept_id = $this->get_active_dept_id();
				$dept_name['records'] = $this->dep_model->get_dept_name($dept_id);
				$this->load->view('templates/department_header', $dept_name);
				$this->load->view('update_hod', $data1);
			}
			else if($this->session->userdata('logged_in') == 'true')
				echo "Sorry. You don't have permissions.";
			else
				redirect(site_url());
		}

		public function update_hod_form() {
			if(!$this->session->userdata('logged_in'))  //  if faculty(dean) is not looged in, redirecting to home page
				redirect(site_url());
			else if($this->session->userdata('role') != 2)  //  faculty is logged in but is not Dean
				redirect(site_url('faculty'));
			else {  //  faculty is logged in as Dean

				// Form validation not required as fields are selected from drop-down
				$status = $this->dep_model->update_hod();
				echo "Status =".$status;
			}  //  end of else checking logged_in as Dean
		}  //  end of update_hod_form

		public function get_faculty_list() {
			$data['faculty'] = $this->dep_model->get_faculty_list();
			//print_r($dept_id);
			//print_r($data['faculty']);
			echo json_encode($data['faculty']);
		}

		public function update_dept_info() {
			if( ($this->session->userdata('logged_in') == 'true') && ($this->session->userdata('role') == 3) ) {  //  Only HOD can update his/her dept. info.

				$dept_id = $this->session->userdata('fac_dept_id');
				$data['records'] = $this->dep_model->get_dept_info($dept_id);
				$this->load->view('templates/department_header', $data);
				$this->load->view('update_dept_info', $data);
				$this->load->view('templates/department_footer');
			}
			else if($this->session->userdata('logged_in') == 'true')
				echo "Sorry. You don't have permissions.";
			else
				redirect(site_url());
		}

		public function update_dept_info_form() {
			if(!$this->session->userdata('logged_in'))  //  if faculty(HOD) is not looged in, redirecting to home page
				redirect(site_url());
			else if($this->session->userdata('role') != 3)  //  faculty is logged in but is not HOD
				redirect(site_url('faculty'));
			else {  //  faculty is logged in as HOD
				$this->load->library('form_validation');
				$this->form_validation->set_rules('about', 'About', 'trim|min_length[10]|required|htmlspecialchars');
				$this->form_validation->set_rules('vision', 'Vision', 'trim|min_length[10]|required|htmlspecialchars');
				$this->form_validation->set_rules('mission', 'Mission', 'trim|min_length[10]|required|htmlspecialchars');
				$this->form_validation->set_rules('mandate', 'mandate', 'trim|min_length[10]|required|htmlspecialchars');

				if($this->form_validation->run() == false) {
					echo validation_errors();
					/*$dept_id = $this->session->userdata('fac_dept_id');
					$data['records'] = $this->dep_model->get_dept_info($dept_id);
					$this->load->view('templates/header', $data);
					$this->load->view('update_dept_info');
					$this->load->view('templates/footer');*/
				}
				else {  //  form validation is true
					echo "Form validated";
					
					//  update values in department table
					$dept_id = $this->session->userdata('fac_dept_id');
					$status = $this->dep_model->update_dept_info($dept_id);
					echo $status;
					sleep(5);
					redirect(site_url('faculty'));  //  to be changed to department when option for navigating to his/her profile for faculty is added
				}  //  end of else checking from validation
			}  //  end of else checking logged_in as HOD
		}  //  end of update_dept_info_form

		public function research() {
			$dept_id = $this->get_active_dept_id();
			$dept_name['records'] = $this->dep_model->get_dept_name($dept_id);

			$this->load->view('templates/department_header', $dept_name);
			$this->load->view('research');
			$this->load->view('templates/department_footer');
		}

		public function activities() {
			$dept_id = $this->get_active_dept_id();
			$dept_name['records'] = $this->dep_model->get_dept_name($dept_id);

			$this->load->view('templates/department_header', $dept_name);
			$this->load->view('activities');
			$this->load->view('templates/department_footer');
		}
	  
   } 
?>