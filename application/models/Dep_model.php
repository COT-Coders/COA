<?php
	
	class Dep_model extends CI_Model {

		function __construct() {
			parent::__construct();
		}

		public function get_records() {
			$query = $this->db->get("Department");
		}

		public function get_dept_name($dept_id) {
			$this->db->select('Dept_Name');
			$this->db->where("Dept_ID", $dept_id);
			return $this->db->get('Department')->result_array();
		}

		public function get_dept_names() {
			$this->db->select('Dept_Name, Dept_ID');
			return $this->db->get('Department')->result_array();
		}
		
		public function get_dept_info($dept_id) {
			$this->db->select();
			$this->db->where("Dept_ID", $dept_id);
			return $this->db->get('Department')->result_array();
		}

		public function get_staff_info($dept_id) {
			$this->db->select();
			$this->db->where("Dept_ID", $dept_id);
			return $this->db->get('Staff')->result_array();
		}
		
		public function get_faculty_info($dept_id) {  //  fetches info. from DB for displaying in faculty_list controller
			//  check of active needs to be applied
			$role = array(3, 4);  //  selecting HOD(considering HOD for testing, else display all faculties of dept. except current HOD), other faculties of the dept.

			//also do sorting such that HOD comes first in the list and then rest of the faculty
			$this->db->select();
			$this->db->where("Dept_ID", $dept_id);
			$this->db->where_in("Role", $role);
			return $this->db->get('Faculty')->result_array();
		}

		public function get_faculty_list() {  //  fetches Faculty_ID and Name for dynamic dropdown for changing HOD
			//  check of active needs to be applied
			$dept_id = $this->input->post('dept_id');
			$role = array(3, 4);  //  selecting HOD(considering HOD for testing, else display all faculties of dept. except current HOD), other faculties of the dept.

			$this->db->select('Faculty_ID, Name');
			$this->db->where("Dept_ID", $dept_id);
			//$this->db->where_in("Role", $role);
			return $this->db->get('Faculty')->result_array();
		}

		public function update_hod()
		{
			$dept_id = $this->input->post('dept_id');
			$fac_id = $this->input->post('fac_id');

			//echo "Dept_ID = ".$dept_id."<br>";
			//echo "Faculty_ID = ".$fac_id."<br>";

			//  finding current HOD of dept_id
			$this->db->select('Faculty_ID, Name');
			$this->db->where("Dept_ID", $dept_id);
			$this->db->where_in("Role", 3);  //  get current HOD of the dept_id selected by Dean
			$current_hod = $this->db->get('Faculty')->result_array();
			print_r($current_hod);

			//  Update role of old(current) HOD from HOD(3) to faculty(4)
			/*$data = array('Role' => ‘4’);  //  
			$this->db->where("Faculty_ID", $current_hod[0]['Faculty_ID']); 
			$this->db->update("Faculty", $data);*/

			//  Update role of new fac_id from faculty(4) to HOD(3)
			/*$data = array('Role' => ‘3’);
			$this->db->where("Faculty_ID", $fac_id); 
			$this->db->update("Faculty", $data);*/
		}

		public function update_dept_info($dept_id)
		{
			$about = $this->input->post('about');
			$vision = $this->input->post('vision');
			$mission = $this->input->post('mission');
			$mandate = $this->input->post('mandate');

			$data = array(
					'History' => $about,
					'Vision' => $vision,
					'Mission' => $mission,
					'Mandate' => $mandate
					);  //  associative array of field value pairs

			//  Update dept. info.
			$this->db->set($data);
			$this->db->where("Dept_ID", $dept_id);
			$this->db->update("Department", $data);
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
	
	} 
?> 