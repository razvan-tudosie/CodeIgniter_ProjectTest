<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ideas_model extends CI_model {
	public function get_ideas($user_id_ideas) {
		
		$query = $this->db->get_where('ideas', array('idea_user_id' => $user_id_ideas));
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function add_idea($ideaData) {
		$this->db->insert("ideas", $ideaData);
		return;
	}

	public function update_idea($ideaData) {
		$this->db->where("id", 2);
		$this->db->update("ideas", $ideaData);
	}

	public function delete_idea() {
		$this->db->where("idea_id", $this->uri->segment(3));
		$this->db->delete('ideas');
	}
}