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
			$staff_address = $this->input->post('staff_address');
			$staff_ph_no = $this->input->post('staff_ph_no');

			$data = array(
					'Staff_Name' => $staff_name,
					'Dept_ID' => $this->session->userdata('dept_id'),  //  hard coded in login controller
					'Designation' => $designation,
					'Personal_Info' => $personal_info,
					'Address' => $staff_address,
					'Phone' => $staff_ph_no
					);  //  associative array of field value pairs
			if ($this->db->insert("Staff", $data))
				return true;
			else
				return false;
		}

		public function get_publication_info($fac_id) {
			$this->db->select();
			$this->db->where("Faculty_ID", $fac_id);
			return $this->db->get('Publication')->result_array();
		}

		public function insert_publication() {
			$pub_title = $this->input->post('pub_title');
			$pub_abs = $this->input->post('pub_abs');
			$pub_name = $this->input->post('pub_name');
			$pub_date = $this->input->post('pub_date');

			$data = array(
					'Faculty_ID' => $this->session->userdata('fac_id'),
					'Dept_ID' => $this->session->userdata('fac_dept_id'),
					'Title' => $pub_title,
					'Abstract' => $pub_abs,
					'Publication_Name' => $pub_name,
					'Date' => $pub_date
					);  //  associative array of field value pairs
			if ($this->db->insert("Publication", $data))
				return true;
			else
				return false;
		}

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