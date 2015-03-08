<div class="container">

		<div class="form-signin">
			<h1>Login form</h1>
			<?php

				if (!empty($error_message)) {
					echo '<span style="color:red;">' .$error_message. '</span>';
				};

				echo form_open('login');
			?>

			<input type="text" name="username" value="" placeholder="Username" class="form-control" required autofocus>
			<?php echo form_error('username');?>
			<input type="password" name="password" value="" placeholder="Password" class="form-control" required>
			<?php echo form_error('password'); ?>

			<br />

			<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

			<?php
				echo anchor('signup', 'Create Account');
			?>
		</div>

</div>