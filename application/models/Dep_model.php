<?php
	
	class Dep_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}

		public function get_records() {
			$query = $this->db->get("Department");
		}

		public function get_dept_names() {
			$this->db->select('Dept_Name, Dept_ID');
			return $this->db->get('Department')->result_array();
		}
		
		public function get_dept_info($dept_id) {
			$this->db->select();
			$this->db->where("Dept_ID", $dept_id+1);
			return $this->db->get('Department')->result_array();
		}

		public function get_staff_info($dept_id) {
			$this->db->select();
			$this->db->where("Dept_ID", $dept_id);
			return $this->db->get('Staff')->result_array();
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