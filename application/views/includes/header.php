<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="screen" charset="utf-8">
</head>
<body>

<header class="row">
	<nav>

		<div class="span3 brand">
			<a class="brand" href="<?php echo base_url(); ?>">
				<h1>My Project Idea</h1>
				<h2>The best way to keep your ideas</h2>
			</a>
		</div>


		<ul class="topNav">
			<?php if($this->session->userdata('username')): ?>
				<li>
					<a class="sectionLink" href="<?php echo base_url(); ?>site/styleguide">Styleguide</a>
				</li>
				<li>
					<a class="sectionLink" href="<?php echo base_url(); ?>members_section">My ideas</a>
				</li>
			    <li>
			    	Salut <?php echo $this->session->userdata('first_name'); ?> <a href="<?php echo base_url(); ?>logout">Logout</a>
			    </li>
				<li>
					<a class="btn round addIdea" href="javascript:;">
						<img src="<?php echo base_url(); ?>assets/images/bt_speed_dial_2x.png" alt="add idea">
					</a>
				</li>
			<?php else: ?>
			    <li><a class="sectionLink" href="<?php echo base_url(); ?>login">Login</a></li>
			<?php endif; ?>
		
		</ul>
	</nav>
	
</header>

<div class="container">


