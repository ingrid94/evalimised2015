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
	public function get_UserID($username) {
		$this->db->where('Username', $username);
		$query = $this->db->get('Authentication');
		$data = $query->row()->A_Id;
		return $data;
	}
	public function get_user_Region($userID) {
		$this->db->where('Id', $userID);
		$query = $this->db->get('Users');
		$data = $query->row()->Region;
		return $data;
	}
	public function del_user_settings($id){
		$this->db->where('Id', $id);
		$this->db->delete('Users');
	}
	public function show_user_settings(){
		$sql = "SELECT `Users`.`Forename` AS `Eesnimi`, `Users`.`Lastname` AS `Perenimi`, `Users`.`Region` AS `Piirkond`, `Users`.`Birthday` AS `Sünnipäev` FROM `Users` ORDER BY `Users`.`Id`ASC";
		$query = $this->db->query($sql);
		return $query;
	}
	public function del_candidate_settings($id) {
		$this->db->where('U_Id', $id);
		$this->db->delete('Candidate');
	}
}
