<div id="tulemused2" class="sisu">
	<h2>TOP 10 kandidaadid: </h2>
	<table id="table2" class="tablesorter">
		<thead>
      		<tr>
        		<th>Kandidaadi nimi</th>
        		<th>Häälte arv</th>
      		</tr>
    	</thead>
		<tbody>
			<?php foreach($query2 as $row){?>
    			<tr>
         			<td><?php echo $row->Kandidaat;?></td>
         			<td><?php echo $row->Hääli;?></td>
      			</tr>
     		<?php }?>
		</tbody>
	</table>
</div>
