<?php

class Members_section extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->is_logged_in();
	}

	public function index() {
		$data = array();
		$this->load->model('Ideas_model');

		if($query = $this->Ideas_model->get_ideas()) {
			$data['ideas'] = $query;
		}

		$data['main_content'] = 'ideas';		
		$this->load->view('includes/template', $data);

	}

	public function is_logged_in() {
		$is_logged_in = $this->session->userdata('is_logged_in');


		if(!isset($is_logged_in) || $is_logged_in != true) {
			redirect('login');
		}
	}

	// add ideas in list
	public function add_idea() {
		$ideaData = array(
			'idea' => $this->input->post('title'),
			'idea_description' => $this->input->post('description'),
			'impact' => $this->input->post('impact'),
			'effort' => $this->input->post('effort'),
			'profitability' => $this->input->post('profitability'),
			'vision' => $this->input->post('vision'),
			'score' => $this->input->post('score'),
			'idea_user_id' => $this->session->userdata('user_id')
		);

		$this->load->model('Ideas_model');
		$this->Ideas_model->add_idea($ideaData);
		redirect('members_section');
	}

	public function delete_idea() {
		$this->load->model('Ideas_model');
		$this->Ideas_model->delete_idea();
		redirect('members_section');

	}


}