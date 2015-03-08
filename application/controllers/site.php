<?php

class Site extends CI_Controller {

	public function index() {
		$data = array(
            'main_content' => 'index'
            );
		$this->load->view('includes/web-template', $data);
	}
}