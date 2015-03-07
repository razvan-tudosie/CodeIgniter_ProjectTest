<?php

class Site extends CI_Controller {

	public function index() {
		$data = array(
            'main_content' => 'index',
            'template' => 'sitepage'
            );
		$this->load->view('includes/template', $data);
		//$this->parser->parse('includes/template', $data);
	}


	public function styleguide() {
		$data['main_content'] = 'styleguide';
		$this->load->view('includes/template', $data);
	}


}