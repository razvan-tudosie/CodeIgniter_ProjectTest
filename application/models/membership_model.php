<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');


class Membership_model extends CI_Model {

	public function get_user($username, $password) {

		$query = $this->db->get_where('users', array('username' => $username));

		if ($query->num_rows() > 0) {
			$query = $query->row_array();

			// assign variable to set in userdata session
			$user_name = $query['username'];
			$user_password = $query['password'];
			$user_id = $query['user_id'];
			$user_email = $query['email_address'];
			

			// second verification for security
			if ($username === strtolower($user_name)) {

				$password = md5($password);
				if ($password != $user_password) {
				
					return false;
				
				} else {
					$userdata = array(
						'username' => $user_name,
						'user_id' => $user_id,
						'user_email' => $user_email
					);
					$this->session->set_userdata($userdata);
					return true;
				}
			}
		} else {
			return false;
		}

	}


	// create new member and add it to database
	public function create_member() {

		$new_member_insert_data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email_address' => $this->input->post('email_address'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$insert = $this->db->insert('users', $new_member_insert_data);
		return $insert;

	}

	// cheack on create if member exists
	public function member_check() {
		$this->db->where('username', $this->input->post('username'));
		$this->db->or_where('email_address', $this->input->post('email_address'));
		
	    $query = $this->db->get('users');
	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}
}