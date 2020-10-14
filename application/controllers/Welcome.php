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
		$this->load->view('templates/header_home_new', $data);
		$this->load->view('college_home'); 
		$this->load->view('templates/footer_new');
	}

	public function about()
	{
		$data['dept_names'] = $this->dep_model->get_dept_names();
		$this->load->view('templates/header_common', $data);
		$this->load->view('about_us'); 
		$this->load->view('templates/footer_new');
	}

	public function collage_activities()
	{
		$data['dept_names'] = $this->dep_model->get_dept_names();
		$this->load->view('templates/header_common', $data);
		$this->load->view('collage_activities'); 
		$this->load->view('templates/footer_new');
	}

	public function event_details()
	{
		$data['dept_names'] = $this->dep_model->get_dept_names();
		$this->load->view('templates/header_common', $data);
		$this->load->view('collage_activity_details'); 
		$this->load->view('templates/footer_new');
	}

	public function departments_list()
	{
		$this->load->model('dep_model');
		$data['dept_names'] = $this->dep_model->get_dept_names();
		sort($data['dept_names']);
		//print_r($data);
		$this->load->view('templates/header_common', $data);
		$this->load->view('college_departments'); 
		$this->load->view('templates/footer_new');
	}

	public function ug_programs()
	{
		$this->load->model('dep_model');
		//$data['dept_names'] = $this->dep_model->get_dept_names();
		$this->load->view('templates/header_common', $data);
		//$this->load->view('collage_activity_details'); 
		$this->load->view('templates/footer_new');
	}

	public function pg_programs()
	{
		$this->load->model('dep_model');
		$data['dept_names'] = $this->dep_model->get_dept_names();
		$this->load->view('templates/header_common', $data);
		//$this->load->view('collage_activity_details'); 
		$this->load->view('templates/footer_new');
	}
}
