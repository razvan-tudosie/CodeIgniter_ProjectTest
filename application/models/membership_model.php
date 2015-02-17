<?php

class Membership_model extends CI_model {
	// Login validation
	function validate() {
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));

		$query = $this->db->get('users');	

		if($query->num_rows == 1) {
			return true;
		}
	}


	function create_member() {
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

	function member_check() {
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