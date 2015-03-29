<?php
class model_votes_fraction extends CI_Model {

	public function getVotesForFraction(){
		$sql = "SELECT * FROM `Votes for Fraction`";
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>
