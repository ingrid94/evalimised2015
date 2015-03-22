<div id="nimekiri">
<h1>Nimekiri!</h1>
	<?php
		$query = $this->db->query('SELECT `Candidate`.`Id`, `Fraction`.`Name`,`Users`.`LastName`, `Users`.`Forename`, `Candidate`.`Description`
		FROM `Users`
		 LEFT JOIN `ev2015`.`Candidate` ON `Users`.`Id` = `Candidate`.`U_Id`
		 LEFT JOIN `ev2015`.`Fraction` ON `Candidate`.`Fr_Id`= `Fraction`.`Id`
		ORDER BY `Candidate`.`Id` ASC');
	?>

<table class="table">
			<thead>
      			<tr>
        			<th>Kandidaadi number</th>
        			<th>Partei nimi</th>
        			<th>Kandidaadi perenimi</th>
					<th>Kandidaadi eesnimi</th>
					<th>Kandidaadi kirjeldus</th>
      			</tr>
    		</thead>
			<tbody>
     			<tr>
					<td>
						olen lahe.
					</td>
					<td>
						olen lahe.
					</td>
					<td>
						olen lahe.
					</td>
					<td>
						olen lahe.
					</td>
					<td>
						olen lahe.
					</td>
				</tr>
  		</table>
</div>
