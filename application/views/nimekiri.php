<div id="nimekiri" class="sisu">
<h1>Nimekiri!</h1>
<table id="nimekiri_tabel" class="display" cellspacing="0" width="100%">

			<thead>
      			<tr>
        			<th>Kandidaadi number</th>
        			<th>Partei nimi</th>
        			<th>Kandidaadi perenimi</th>
					<th>Kandidaadi eesnimi</th>
					<th>Kandidaadi kirjeldus</th>
      			</tr>
    		</thead>

			<tfoot>
      			<tr>
        			<th>Kandidaadi number</th>
        			<th>Partei nimi</th>
        			<th>Kandidaadi perenimi</th>
					<th>Kandidaadi eesnimi</th>
					<th>Kandidaadi kirjeldus</th>
      			</tr>
    		</tfoot>
			<tbody>
			<?php foreach($query as $row){?>
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
