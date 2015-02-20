<?php
//if (!defined('BASEPATH')) exit('No direct script access allowed');

class Members_section extends CI_Controller {

	public function index() {

		if (!$this->session->userdata('username')) {
			redirect('login');
		}

		$data = array();
		$this->load->model('Ideas_model');

		if($query = $this->Ideas_model->get_ideas($this->session->userdata('user_id'))) {
			$data['ideas'] = $query;
		}

		$data['main_content'] = 'ideas';
			
		$this->load->view('includes/template', $data);
	}

	// add ideas in list
	public function add_idea() {
		$ideaData = array(
			'idea_user_id' => $this->session->userdata('user_id'),
			'idea' => $this->input->post('title'),
			'idea_description' => $this->input->post('description'),
			'impact' => $this->input->post('impact'),
			'effort' => $this->input->post('effort'),
			'profitability' => $this->input->post('profitability'),
			'vision' => $this->input->post('vision'),
			'score' => 	$this->input->post('impact') + $this->input->post('effort') + $this->input->post('profitability') + $this->input->post('vision')
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