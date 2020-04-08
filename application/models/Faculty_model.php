<?php
	
	class Faculty_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}

		public function get_fac_details($fac_id) {
			//$query = $this->db->get("Faculty");
			//return $query;

			$this->db->select();
			$this->db->where("Faculty_ID", $fac_id);
			return $this->db->get('Faculty')->result_array();
		}

		public function get_dept_names() {
			$this->db->select('Dept_Name');
			return $this->db->get('Department')->result_array();
		}
		
		public function get_dept_info($index) {
			$this->db->select();
			$this->db->where("Dept_ID", $index+1);
			return $this->db->get('Department')->result_array();
		}
		
		public function insert_staff() {
			$staff_name = $this->input->post('staff_name');
			$designation = $this->input->post('staff_desig');
			$personal_info = $this->input->post('staff_info');

			$data = array(
					'Staff_Name' => $staff_name,
					'Dept_ID' => $this->session->userdata('dept_id'),
					'Designation' => $designation,
					'Personal_Info' => $personal_info
					);  //  associative array of field value pairs
			if ($this->db->insert("Staff", $data))
				return true;
			else
				return false;
		}
		/*public function insert($data) {
			$data = array(
					'Dept_Name' => ‘1’,
					'HOD' => ‘Virat’,
					'Vision' => ,
					'Mission' => ,
					'History' => ,
					'Mandate' =>
					);  //  associative array of field value pairs
			if ($this->db->insert("department", $data)) { 
				return true; 
			}

			$data = array(
					'roll_no' => ‘1’,
					'name' => ‘Virat’
					);  //  associative array of field value pairs
			$this->db->insert("stud", $data);
		}*/

		/*public function delete($roll_no) { 
			if ($this->db->delete("stud", "roll_no = ".$roll_no)) { // can have table's string or array
				return true; 
			} 
		}*/
	
		/*public function update($data,$old_roll_no) {
			$data = array(
					'roll_no' => ‘1’,
					'name' => ‘Virat’
					);  //  associative array of field value pairs

			$this->db->set($data); 
			$this->db->where("roll_no", $old_roll_no); 
			$this->db->update("stud", $data); 
		}*/

	} 
?>