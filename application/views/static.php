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
		<div class="btn-group pull-right" role="group" aria-label="...">
			<button type="button" class="btn btn-default">Logi sisse</button>
		</div>
		<div class="panel panel-default" id="otsing">
 			<div class="panel-heading">Otsing</div>
  				<div class="panel-body">
					<div class="otsing">
						<div class="btn-group">
  							<button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
							Erakonna järgi <span class="caret"></span>
  							</button>
 							<ul class="dropdown-menu" role="menu">
								<li>Erakond1</li>
								<li>Erakond2</li>
  							</ul>
						</div>
						<div class="btn-group">
  							<button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
							Piirkonna järgi <span class="caret"></span>
  							</button>
  							<ul class="dropdown-menu" role="menu">
								<li>Piirkond1</li>
								<li>Piirkond2</li>
  							</ul>
						</div>
						<div class="nimeotsing">
							<div class="input-group">
								<span class="input-group-addon" id="sizing-addon3">Nime järgi</span>
  								<input type="text" class="form-control" placeholder="" aria-describedby="sizing-addon3">
						</div>
					</div>
				</div>
			</div>
		</div>