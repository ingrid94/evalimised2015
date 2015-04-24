<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>E-valimised2015</title>

		<!-- Bootstrap - Selles failis on validatori jaoks mõned asjad välja kommenteeritud-->
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
		<!--Custom CSS - enda kirjutatud css-->
		<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
		<!--Custom JavaScript - enda kirjutatud javascript-->
		<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
		<!--JQuery-->
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.js"></script>
		<!--JQuery tablesorter plugin-->
		<script src="<?php echo base_url(); ?>assets/js/jquery.tablesorter.js"></script>
		<script>
		$(document).ready(function() {		
			$('#nimekiri_tabel').tablesorter();
		});
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
  			<a href="http://ev2015.cs.ut.ee/index.php/site/nimekiri" class="btn btn-default" role="button">Nimekiri</a>
  			<a href="http://ev2015.cs.ut.ee/index.php/site/tulemused" class="btn btn-default" role="button">Tulemused</a>
			<a href="http://ev2015.cs.ut.ee/index.php/site/statistika" class="btn btn-default" role="button">Statistika</a>
			<a href="http://ev2015.cs.ut.ee/index.php/site/haaletamine" class="btn btn-default" role="button">Hääletamine</a>
		</div>
		<?php if($this->session->userdata('is_logged_in') == false) {?>
			<div class="btn-group pull-right" role="group" aria-label="...">
				<a href="http://ev2015.cs.ut.ee/index.php/site/login" class="btn btn-default" role="button">Logi sisse</a>
			</div>
			<div class="btn-group pull-right" role="group" aria-label="...">
				<a href="http://ev2015.cs.ut.ee/index.php/site/registreeri" class="btn btn-default" role="button">Registreeri</a>
			</div>
		<?php } else {?>
			<div class="btn-group pull-right" role="group" aria-label="...">
				<a href="http://ev2015.cs.ut.ee/index.php/site/logout" class="btn btn-default" role="button">Logi välja</a>
			</div>
			<div class="btn-group pull-right" role="group" aria-label="...">
				<a href="http://ev2015.cs.ut.ee/index.php/site/isikuandmed" class="btn btn-default" role="button">isikuandmed</a>
			</div>
		<?php } ?>
		<form action="<?php echo site_url('search/search_keyword');?>" method = "post"> 
			<div class="panel panel-default" id="otsing">
 			<div class="panel-heading">Otsing</div>
				<div class="form-group">
					<label for="Piirkond" class="col-sm-2 control-label">Piirkond</label>
					<select class="form-control" id="Piirkond">
						<option selected="selected">...</option>
						<option value="a1">Piirkond1</option>
						<option value="a2">Piirkond2</option>
						<option value="a3">Piirkond3</option>
						<option value="a4">Piirkond4</option>
					</select>
				</div>
				<div class="form-group">
					<label for="Erakond" class="col-sm-2 control-label">Erakond</label> 
					<select class="form-control" id="Erakond">
						<option selected="selected">...</option>
						<option value="e1">Erakond1</option>
						<option value="e2">Erakond2</option>
						<option value="e3">Erakond3</option>
						<option value="e4">Erakond4</option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" name="Kandidaat" placeholder="Kandidaadi nime järgi:">
					<input type="submit" name="submit" value ="Otsi" class="btn btn-default">
				</div>
			</div>
			</form>
