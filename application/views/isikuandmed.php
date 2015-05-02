<div id="isikuandmed" class="sisu">
	<h1>Isikuandmed</h1>
	<p>
	Eesnimi: <?php echo $row->Eesnimi;?><br>
	Perenimi: <?php echo $row->Perenimi;?><br>
	Piirkond: <?php echo $row->Piirkond;?><br>
	Sünnipäev: <?php echo $row->Sünnipäev;?><br>

	<p>
	Muuda isikuandmed (kõik väljad on kohustuslikud).
	</p>
	
	<?php
	echo form_open('site/user_settings_validation');
	
	echo validation_errors();
	
	echo "<p>Eesnimi: ";
	echo form_input('Forename');
	echo "<p>";
	
	echo "<p>Perenimi: ";
	echo form_input('LastName');
	echo "<p>";
	
	echo "<p>Piirkond: ";
	echo form_input('Region');
	echo "<p>";
	
	echo "<p>Sünnipäev (yyyy-mm-dd): ";
	echo form_input('Birthday');
	echo "<p>";
	
	echo "<p>";
	echo form_submit('Signup_submit', 'Muuda andmed');
	echo "<p>";
	
	echo form_close();
	
	?>
	<a href="http://ev2015.cs.ut.ee/index.php/site/kandidaat" class="btn btn-default" role="button">Lisa kandidaatiks</a>
</div>
