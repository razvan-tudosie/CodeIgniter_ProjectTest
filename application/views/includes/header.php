<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="screen" charset="utf-8">
</head>
<body>

<nav>
	<ul>

		<li><a href="<?php echo base_url(); ?>">home</a></li>
		<li>
			<a href="<?php echo base_url(); ?>members_section">Members area</a>
			
		</li>

		<?php if($this->session->userdata('username')): ?>
		    <li>Salut <?php echo $this->session->userdata('first_name'); ?> <a href="<?php echo base_url(); ?>logout">Logout</a></li>
		<?php else: ?>
		    <li><a href="<?php echo base_url(); ?>login">Login</a></li>
		<?php endif; ?>
	
	</ul>
</nav>

<div class="content">