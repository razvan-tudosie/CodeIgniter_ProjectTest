<?php

class Ideas_model extends CI_model {
	public function get_ideas() {
		$query = $this->db->get('ideas');
		return $query->result();
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
		$this->db->where("id", $this->uri->segment(3));
		$this->db->delete('ideas');
	}
}