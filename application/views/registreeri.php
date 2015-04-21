<div id="registreeri" class="sisu">
	<h1>Registreeri!</h1>
	<?php
	
	echo form_open('site/signup_validation');
	
	echo "<p>Kasutaja: ";
	echo form_input('Username');
	echo "<p>";
	
	echo "<p>Parool: ";
	echo form_password('Password');
	echo "<p>";
	
	echo "<p>Kinnita parool: ";
	echo form_password('cPassword');
	echo "<p>";
	
	echo "<p>";
	echo form_submit('Signup_submit', 'Registreeri');
	echo "<p>";
	
	echo form_close();
	
	?>
</div>