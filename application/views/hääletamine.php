<div id="hääletamine" class="sisu">
	<h1>Hääletamine</h1>
	<p>Hääletamiseks märgi sobiva kandidaadi ees ring</p>
	<table>
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
		<?php foreach($region as $row){?>
			<tr>
				<td><?php echo $row->CandId;?></td>
				<td><?php echo $row->FraNa;?></td>
				<td><?php echo $row->LName;?></td>
				<td><?php echo $row->FName;?></td>
				<td><?php echo $row->Descript;?></td>
			</tr>     
		<?php }?>
	</tbody>
</table>
</div>
