<?php

class Model_users extends CI_Model {
	
	public function can_log_in() {
		$this->db->where('Username', $this->input->post('Username'));
		$this->db->where('Password', md5($this->input->post('Password')));
		$query = $this->db->get('Authentication');
		
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}
}