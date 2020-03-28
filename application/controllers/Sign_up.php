<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
class Sign_up extends CI_Controller {

	public function index() {
		if(isset($this->session->userdata['logged_in'])) {
			redirect('/logout/');
		}
		else {
			$this->form_validation->set_rules('user_roll', 'Roll Number', 'trim|is_unique[student.roll_number]|required|min_length[9]|max_length[9]|xss_clean|encode_php_tags');
			$this->form_validation->set_rules('user_fname', 'First Name', 'trim|required|min_length[3]|max_length[30]|xss_clean|encode_php_tags');
			$this->form_validation->set_rules('user_lname', 'Last Name', 'trim|required|min_length[3]|max_length[30]|xss_clean|encode_php_tags');
			$this->form_validation->set_rules('user_mother_name', 'Mother\'s Name', 'trim|required|min_length[3]|max_length[30]|xss_clean|encode_php_tags');
			$this->form_validation->set_rules('user_father_name', 'Father\'s Name', 'trim|required|min_length[3]|max_length[30]|xss_clean|encode_php_tags');
			
			$this->form_validation->set_rules('user_add', 'Address', 'trim|required|min_length[10]|max_length[100]|xss_clean|encode_php_tags');
			$this->form_validation->set_rules('user_dob', 'Date of Birth', 'trim|required|xss_clean|encode_php_tags');

			$this->form_validation->set_rules('user_email', 'Email', 'trim|is_unique[student.email]|required|valid_email|min_length[5]|max_length[30]|xss_clean|encode_php_tags');
			$this->form_validation->set_rules('user_phone', 'Phone number', 'trim|is_unique[student.phone_number]|required|min_length[10]|max_length[15]|xss_clean|encode_php_tags');

			$this->form_validation->set_rules('user_degree', 'Degree', 'trim|required|min_length[5]|max_length[25]|xss_clean|encode_php_tags');
			//$this->form_validation->set_rules('user_id', 'User ID', 'trim|is_unique[login.user_id]|required|min_length[5]|max_length[15]|xss_clean|encode_php_tags');

			$this->form_validation->set_rules('user_pass1', 'Password', 'trim|required|min_length[5]|max_length[30]|xss_clean|encode_php_tags');
			$this->form_validation->set_rules('user_pass2', 'Confirm Password', 'trim|required|min_length[5]|matches[user_pass1]|max_length[30]|xss_clean|encode_php_tags');

			if($this->form_validation->run() == false) {
				$data['user_logged_in'] = 'false';
				$data['title'] = 'Registration';

				//$this->load->view('templates/header', $data);
				$this->load->view('templates/header');
				$this->load->view('signup');//$this->load->view('account/user-signup');
				$this->load->view('templates/footer');
			}
			else {
				$this->load->model('signup_model');
				$this->load->model('login_model');

				echo "Validation true";

				$after_register = $this->signup_model->register_user();
				echo $after_register;

				if($after_register=='done') {
					$user_email = $this->input->post('user_email');
					$user_name = $this->login_model->get_user_name($user_email);  //  get_user_name takes user id(user_id is same as user_email) as input
					$roll_number = $this->input->post('user_roll');

					$newdata = array(
						'username' => $user_name,
						'email' => $user_email,
						'roll_number' => $roll_number,
						'role' => 1,
						'semester' => 0,
						'logged_in' => 'true'
					);

					$this->session->set_userdata($newdata);

					$data['user_logged_in'] = 'true';
					$data['title'] = 'Success';
					$data['user_name'] = $this->session->userdata('username');

					//$this->load->view('templates/header', $data);
					echo "Success";
					redirect('/student/');
					//$this->load->view('student_home');
					//$this->load->view('pages/success_msg/success_registration');
					$this->load->view('templates/footer');
				}
				else {
					echo "Error";
					$data['user_logged_in'] = 'false';
					$data['title'] = 'Registration';

					//$this->load->view('templates/header', $data);
					$this->load->view('signup');
					$this->load->view('templates/footer');
				}
			}

		}
	}
}
?>