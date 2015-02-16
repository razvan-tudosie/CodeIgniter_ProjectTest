<?php

class Site extends CI_Controller {

	public function index() {
		$data['main_content'] = 'index';
		$this->load->view('includes/template', $data);
	}

	public function logout() {
	    $this->session->unset_userdata('is_logged_in');
	    session_destroy();
	    redirect('login');
	}


}