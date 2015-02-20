<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_controller {

	public function index() {	
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === false) {

			$data = array(
	           'main_content' => 'login_form',
	        );
			$this->load->view('includes/template', $data);
		
		} else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('membership_model');
			$result = $this->membership_model->get_user($username, $password);

			if ($result === true) {
		
				redirect('members_section');
		
			} else {
				
				$data = array(
		           'main_content' => 'login_form',
		           'error_message' => 'Invalid Username and Passowrd'
		        );
				$this->load->view('includes/template', $data);

			}

		}

	}
}