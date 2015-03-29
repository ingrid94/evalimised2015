<div id="statistika" class="sisu">
	<h1>Statistika</h1>
	<p>Statistika riigi lõikes: </p>
	<table class="table">
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
