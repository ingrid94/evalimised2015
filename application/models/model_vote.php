<?php
class model_posts extends CI_Model {

	public function getCandidates($region){
	$sql = "SELECT `Candidate`.`Id`AS CandId, `Fraction`.`Name` AS FraNa,`Users`.`LastName` AS LName, `Users`.`Forename`AS FName, `Candidate`.`Description` AS Descript FROM `Users` JOIN `ev2015`.`Candidate` ON `Users`.`Id` = `Candidate`.`U_Id` JOIN `ev2015`.`Fraction` ON `Candidate`.`Fr_Id`= `Fraction`.`Id` WHERE `Candidate`.`Region` = ? ORDER BY `Candidate`.`Id` ASC"
	$query = $this->db->query($sql);
	return $query->result();
	}
}
?>
