<div id="tulemused" class="sisu">
	<h1>Tulemused reaalajas</h1>
	<h2>Riigi lõikes: </h2>
	<table id="table" class="tablesorter">
		<thead>
      		<tr>
        		<th>Erakonna nimi</th>
        		<th>Häälte arv</th>
      		</tr>
    	</thead>
		<tbody>
			<?php foreach($query as $row){?>
    			<tr>
         			<td><?php echo $row->Partei;?></td>
         			<td><?php echo $row->Hääli;?></td>
      			</tr>     
     		<?php }?>
		</tbody>
	</table>
</div>
