<?php
	
	class Login_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}
	
		public function check_login_details() {
			$user_name = $this->input->post('user_name');
			//$password = md5( $this->input->post('password') );
			$password = $this->input->post('password');
			$query = $this->db->get_where('Faculty', array('Name' => $user_name, 'Password' => $password) );  //  Name needs to change according to DB field(maybe Email ID)

			print_r($query->result());
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

		public function get_role($user_name) {  //  get role by unique key, maybe faculty_id/email-id
			$query = $this->db->get_where('Faculty', array('Name' => $user_name, 'Password' => $password) );  //  Name needs to change according to DB field(maybe Email ID)

			$temp = '';
			foreach($query->result() as $row ) {
				$temp = $row->Name;
			}
			if($temp) {
				return 'valid';
			}
			else {
				return 'invalid';
			}
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