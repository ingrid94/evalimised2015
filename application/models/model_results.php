<?php
class model_results extends CI_Model {

	public function getVotesForFraction(){
		$sql = "select `Fraction`.`Name` AS `Partei`,count(`Fraction`.`Name`) AS `Hääli` from ((`Fraction` join `Candidate` on((`Fraction`.`Id` = `Candidate`.`Fr_Id`))) join `Users` on((`Candidate`.`Id` = `Users`.`Vote`))) group by `Fraction`.`Name` order by count(`Fraction`.`Name`) desc";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	//TODO: päring on vale
	public function getVotesForCandidate(){
		$sql = "select `Fraction`.`Name` AS `Partei`,count(`Fraction`.`Name`) AS `Hääli` from ((`Fraction` join `Candidate` on((`Fraction`.`Id` = `Candidate`.`Fr_Id`))) join `Users` on((`Candidate`.`Id` = `Users`.`Vote`))) group by `Fraction`.`Name` order by count(`Fraction`.`Name`) desc";
		$query = $this->db->query($sql);
		return $query->result();
	}
		
}
?>
