<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->helper('form');

		//$this->load->view('templets/header');
		/*if($this->session->userdata('logged_in')) {  //  if user(faculty) is logged in, then redirect to his/her home page
			redirect('/logout/');
			//redirect('/welcome/');
		}
		else {*/  //  if session is not set(i.e., user is not logged in, then redirect him to login page to enter login credentials)
			$this->load->view('login');
		//}
		//$this->load->view('templets/footer');
	}

	public function form_check() {
		if($this->session->userdata('logged_in')) {  //  ideally if a user is logged in, control should not come here
			redirect('/logout/');
			//redirect('/welcome/');
		}
		else {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('user_name', 'User Name', 'trim|min_length[5]|encode_php_tags|required|htmlspecialchars');
			$this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]|encode_php_tags|required|htmlspecialchars');

			if($this->form_validation->run() == false) {
				//$data['user_logged_in'] = 'false';
				//$data['title'] = 'Login';
				//$data['invalid_login_class'] = 'hidden';

				//$this->load->view('templates/header', $data);
				$this->load->view('login');  //  redirect back to login form
				//$this->load->view('templates/footer');
			}
			else {  //  form validation is true
				echo "Form validated";
				$this->load->model('login_model');
				$check_login_details = $this->login_model->check_login_details();

				if($check_login_details == 'valid') {  //  user id and password matches
					echo "Valid";

					//$user_name = $this->login_model->get_user_name($user_name);  //  to get full name corresponding to login/user id
					//$user_email = $this->login_model->get_user_email($user_id);

					$newdata = array(
						//'username' => $user_name,
						//'email' => $user_email,
						'logged_in' => 'true',
						'fac_id' => '1',  //  hard coding as of now
						'dept_id' => '1'
					);
					$this->session->set_userdata($newdata);

					echo "session set";

					redirect('/faculty/');
					/*
					user_roles:
						1 - admin
						2 - dean
						3 - hod
						4 - other faculty
					*/
					/*if($user_role==1)
						redirect('/student/');  //  role=1 asigned to student
					else if($user_role==2)
						redirect('/secretary/');  //  role=2 asigned to secretary*/
				}
				else if($check_login_details == 'invalid') {
					echo "Invalid";
					//$data['user_logged_in'] = 'false';
					//$data['title'] = 'Login';
					//$data['invalid_login_class'] = 'show';

					//$this->load->view('templates/header', $data);
					$this->load->view('login');
					//$this->load->view('templates/footer');
				}
			}  //  end of else checking from validation
		}  //  end of else
	}  //  end of index function


	/*public function forget_password(){

		if( $this->session->userdata('logged_in')=='true' ){

			$data['user_logged_in'] = 'true';
			$data['title'] = "Forget password";
		}
		else{

			$data['user_logged_in'] = 'false';

			$data['title'] = "Forget password";
		}
		$this->load->view('templates/header', $data);
		$this->load->view('pages/forget_pass');
		$this->load->view('templates/footer');
	}*/

}  //  end of login controller class
?>