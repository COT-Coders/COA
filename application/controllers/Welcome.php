<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {
		parent::__construct();
		$this->load->model('dep_model');
	}
	
	public function index()
	{
		$data['dept_names'] = $this->dep_model->get_dept_names();
		//print_r($data);
		$this->load->view('templates/header_home', $data);
		$this->load->view('college/college_home'); 
		$this->load->view('templates/footer');
	}

	public function about()
	{
		$data['dept_names'] = $this->dep_model->get_dept_names();
		$this->load->view('templates/header_common', $data);
		$this->load->view('college/about_us'); 
		$this->load->view('templates/footer');
	}

	public function college_activities()
	{
		$data['dept_names'] = $this->dep_model->get_dept_names();
		$this->load->view('templates/header_common', $data);
		$this->load->view('college/college_activities'); 
		$this->load->view('templates/footer');
	}

	public function event_details()
	{
		$data['dept_names'] = $this->dep_model->get_dept_names();
		$this->load->view('templates/header_common', $data);
		$this->load->view('college/college_activity_details'); 
		$this->load->view('templates/footer');
	}

	public function departments_list()
	{
		$this->load->model('dep_model');
		$data['dept_names'] = $this->dep_model->get_dept_names();
		sort($data['dept_names']);
		//print_r($data);
		$this->load->view('templates/header_common');
		$this->load->view('college/college_departments', $data); 
		$this->load->view('templates/footer');
	}

	public function programs()
	{
		$this->load->model('dep_model');
		$data['dept_names'] = $this->dep_model->get_dept_names();
		$this->load->view('templates/header_common', $data);
		$this->load->view('college/college_programs'); 
		$this->load->view('templates/footer');
	}

	
}
