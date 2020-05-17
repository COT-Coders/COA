<?php
	
	class Login_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}
	
		public function check_login_details() {
			$user_email = $this->input->post('user_email');
			//$password = md5( $this->input->post('password') );
			$password = $this->input->post('password');

			//  later add check whether user is active or not
			$query = $this->db->get_where('Faculty', array('Email' => $user_email, 'Password' => $password) );

			//print_r($query->result());
			$temp = '';
			foreach($query->result() as $row ) {
				$temp = $row->Name;
				break;  //  needs first user_name that matches user_name and password
			}
			if($temp) {
				return 'valid';
			}
			else {
				return 'invalid';
			}
		}

		public function get_user_details($user_email) {  //  get role by unique key, maybe faculty_id/email-id
			$this->db->select('Faculty_ID, Dept_ID, Role');
			$this->db->where("Email", $user_email);
			return $this->db->get('Faculty')->result_array();
		}

		/*public function delete($roll_no) { 
			if ($this->db->delete("stud", "roll_no = ".$roll_no)) { 
				return true; 
			} 
		}*/
	
		/*public function update($data,$old_roll_no) {
			$data = array(
					'roll_no' => ‘1’,
					'name' => ‘Virat’
				);

			$this->db->set($data); 
			$this->db->where("roll_no", $old_roll_no); 
			$this->db->update("stud", $data); 
		}*/

	} 
?> 