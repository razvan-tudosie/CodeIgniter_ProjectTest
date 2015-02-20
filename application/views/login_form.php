<div id="login_form">
	<h1>Login form</h1>
	<?php

		if (!empty($error_message)) {
			echo '<span style="color:red;">' .$error_message. '</span>';
		};

		echo form_open('login');

		echo form_input('username', 'Username');
		echo form_error('username');

		echo form_password('password', 'Password');
		echo form_error('password');

		echo form_submit('submint', 'Login');
		echo anchor('signup', 'Create Account');

	?>
</div>