<?php

class Logout extends CI_controller {

	public function index()
	{
	    $this->session->sess_destroy();	    
	    redirect('/');
	}
}