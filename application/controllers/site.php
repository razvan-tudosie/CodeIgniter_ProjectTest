<?php

class Site extends CI_Controller {

	public function index() {
		$data['main_content'] = 'index';
		$this->load->view('includes/template', $data);
	}


	public function styleguide() {
		$data['main_content'] = 'styleguide';
		$this->load->view('includes/template', $data);
	}


}