<div id="hääletamine" class="sisu">
	<h1>Hääletamine</h1>
	<p>Hääletamiseks märgi sobiva kandidaadi ees ring</p>
	<table id="haaletamine_tabel" class="display" cellspacing="0" width="100%">
		<thead>
      	<tr>
			<th>Vali!</th>
        	<th>Kandidaadi number</th>
        	<th>Partei nimi</th>
       		<th>Kandidaadi perenimi</th>
			<th>Kandidaadi eesnimi</th>
			<th>Kandidaadi kirjeldus</th>
      	</tr>
   	</thead>

	<tbody><form>
		<?php foreach($region as $row){?>
			<tr>
				<td><input type="radio" name="vali" value="<?php echo $row->CandId;?>"></td>
				<td><?php echo $row->CandId;?></td>
				<td><?php echo $row->FraNa;?></td>
				<td><?php echo $row->LName;?></td>
				<td><?php echo $row->FName;?></td>
				<td><?php echo $row->Descript;?></td>
			</tr>     
		<?php }?>
	</form></tbody>
</table>
</div>
