<?php
class model_vote extends CI_Model {

	public function getCandidates($VoteRegion){
		$sql = "SELECT `Candidate`.`Id`AS CandId, `Fraction`.`Name` AS FraNa,`Users`.`LastName` AS LName, `Users`.`Forename`AS FName, `Candidate`.`Description` AS Descript\n"
    		. "	FROM `Users`\n"
    		. "	JOIN `ev2015`.`Candidate` ON `Users`.`Id` = `Candidate`.`U_Id`\n"
    		. "	JOIN `ev2015`.`Fraction` ON `Candidate`.`Fr_Id`= `Fraction`.`Id` Where `Candidate`.`Region` = ? ORDER BY `Candidate`.`Id` ASC";
		$query = $this->db->query($sql, $VoteRegion);
		return $query->result();
	}
}
?>
