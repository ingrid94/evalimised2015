<!DOCTYPE html>
<html lang="en" manifest="<?php echo base_url(); ?>manifest.appcache">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>E-valimised2015</title>

		<!--Bootstrap - Selles failis on validatori jaoks mõned asjad välja kommenteeritud-->
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
		<!--DataTables CSS-->
		<link href="<?php echo base_url(); ?>assets/css/jquery.dataTables.css" rel="stylesheet">
		<!--Custom CSS - enda kirjutatud css-->
		<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
		<!--Custom JavaScript - enda kirjutatud javascript-->
		<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
		
		<!--JQuery-->
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.js"></script>
		
		
		<!--JQuery tablesorter plugin-->
		<!--<script src="<?php echo base_url(); ?>assets/js/jquery.tablesorter.js"></script>-->
  
		<!--JQuery DataTables plugin-->
		<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>

		<script>
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#nimekiri_tabel tfoot th').each( function () {
        var title = $('#nimekiri_tabel thead th').eq( $(this).index() ).text();
        $(this).html( '<input type="text" placeholder="'+title+'">' );
    } );
 
    // DataTable
    var table = $('table.display').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            that
                .search( this.value )
                .draw();
        } );
    } );
} );
		</script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="page-header">
  			<h1>E-valimised 2015 <small>Veebirakenduste projekt</small></h1>
		</div>

		<div class="btn-group" role="group" aria-label="...">
  			<a href="http://ev2015.cs.ut.ee/" class="btn btn-default" role="button">Esileht</a>
  			<a href="http://ev2015.cs.ut.ee/site/nimekiri" class="btn btn-default" role="button">Nimekiri</a>
  			<a href="http://ev2015.cs.ut.ee/site/tulemused" class="btn btn-default" role="button">Tulemused</a>
			<a href="http://ev2015.cs.ut.ee/site/statistika" class="btn btn-default" role="button">Statistika</a>
			<a href="http://ev2015.cs.ut.ee/site/haaletamine" class="btn btn-default" role="button">Hääletamine</a>
		</div>
		<?php if($this->session->userdata('is_logged_in') == false) {?>
			<div class="btn-group pull-right" role="group" aria-label="...">
				<a href="http://ev2015.cs.ut.ee/site/login" class="btn btn-default" role="button">Logi sisse</a>
			</div>
			<div class="btn-group pull-right" role="group" aria-label="...">
				<a href="http://ev2015.cs.ut.ee/site/registreeri" class="btn btn-default" role="button">Registreeri</a>
			</div>
		<?php } else {?>
			<div class="btn-group pull-right" role="group" aria-label="...">
				<a href="http://ev2015.cs.ut.ee/site/logout" class="btn btn-default" role="button">Logi välja</a>
			</div>
			<div class="btn-group pull-right" role="group" aria-label="...">
				<a href="http://ev2015.cs.ut.ee/site/isikuandmed" class="btn btn-default" role="button">Isikuandmed</a>
			</div>
		<?php } ?>


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
	<div class="validaatorid">
			<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fev2015.cs.ut.ee%2F">
			<img src="<?php echo base_url(); ?>assets/images/HTML5_1Color_Black.png" width="63" height="64" alt="HTML5 Powered" title="HTML5 Powered">
			</a>
			<a href="https://jigsaw.w3.org/css-validator/validator?uri=ev2015.cs.ut.ee">
			<img src="<?php echo base_url(); ?>assets/images/CSS3logo.png" width="63" height="64" alt="CSS3 Powered" title="CSS3 Powered">
			</a>
		</div>
	</body>
