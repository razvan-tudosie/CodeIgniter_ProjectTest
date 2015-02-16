<?php

class Logout extends CI_controller {

	public function index()
	{
	    $this->session->unset_userdata('is_logged_in');
	    session_destroy();
	    
	    redirect('site');
	}
}