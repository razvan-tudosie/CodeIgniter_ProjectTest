<?php

class Login extends CI_controller {

	public function index() {

		$loggedIn = $this->session->userdata('is_logged_in');

		$data = array(
               'loggedIn' => $loggedIn,
               'main_content' => 'login_form'
          );

		$this->load->view('includes/template', $data);
	}

	public function validate_credentials() {
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();

		//if user credentials validate
		if($query > 0) {
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true,
				'user_id' => $this->membership_model->validate('user_id')
			);

			$this->session->set_userdata($data);
			redirect('members_section');

		} else {
			$this->index();
		}
	}

	public function signup() {
		$data['main_content'] = 'signup_form';
		$this->load->view('includes/template', $data);
	}



	public function create_member() {
		$this->load->library('form_validation');

		// field name, error message, validation rules
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'callback_member_exists', 'trim|required|valid_email');

		$this->form_validation->set_rules('username', 'Username','callback_member_exists', 'trim|required|required|min_lenght[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|max_lenght[32]');
		$this->form_validation->set_rules('passowrd2', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE) {
		
			$this->signup();
		
		} else {
		
			$this->load->model('membership_model');
			
			if($query = $this->membership_model->create_member()) {
				
				$data['main_content'] = "signup_succesful";
				$this->load->view('includes/template', $data);

			} else {

				$this->load->view('signup_form');

			}
		}

	}


	// check user if exists wen creating a new account
	public function member_exists()
	{
		$this->load->model('membership_model');

		if($query = $this->membership_model->member_check()) {
			$this->form_validation->set_message('member_exists', 'The %s field exists');
			return FALSE;
		
		}else{
		
			return TRUE;
		}

	}


}