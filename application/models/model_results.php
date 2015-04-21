<?php
class model_results extends CI_Model {

	public function getVotesForFraction(){
		$sql = "SELECT `Fraction`.`Name` AS `Partei`, COUNT(`Fraction`.`Name`) AS `Hääli` FROM `Fraction` JOIN `Candidate` ON `Candidate`.`Id` = `Fraction`.`Id` JOIN `Vote` ON `Candidate_Id` = `Candidate`.`Id` GROUP BY `Fraction`.`Name` order by `Hääli` DESC";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function getVotesForCandidate(){
		$sql = "SELECT CONCAT(`Users`.`ForeName`, ' ', `Users`.`LastName`) AS `Kandidaat`, COUNT(`Users`.`Id`) AS `Hääli` FROM `Users` JOIN `Candidate` ON `Users`.`Id` = `Candidate`.`U_Id` JOIN `Vote` ON `Candidate_Id` = `Candidate`.`Id` GROUP BY `Users`.`Id` order by `Hääli` DESC LIMIT 10";
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>
