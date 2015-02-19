<?php

class Logout extends CI_controller {

	public function index()
	{
	    $this->session->unset_userdata('is_logged_in');
	    $this->session->unset_userdata('username');
	    $this->session->unset_userdata('user_id');
	    session_destroy();
	    
	    redirect('site');
	}
}