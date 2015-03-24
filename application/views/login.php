<div id="login" class="sisu">
	<h1>Login</h1>
	
	<?php
	
	echo form_open('site/login_validation');
	
	echo validation_errors();
	
	echo "<p>Username: ";
	echo form_input('Username');
	echo "</p>";
	
	echo "<p>Password: ";
	echo form_password('Password');
	echo "</p>";
	
	echo "<p>";
	echo form_submit('login_submit', 'Login');
	echo "</p>";
	
	echo form_close();
	
	?>

</div>