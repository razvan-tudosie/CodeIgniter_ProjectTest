<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project Idea</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.fancybox.css" />
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="...">
      </a>
    </div>
  </div>
</nav>

<header class="row">
	<nav>
		<div class="span3 brand">
			<a class="brand" href="<?php echo base_url(); ?>">
				<span style="font-size:18px;"><strong>Project Idea</strong></span>
				<p>The best way to keep your ideas</p>
			</a>
		</div>


		<ul class="topNav">
			<li>
				<a class="btn firstButton" href="<?php echo base_url(); ?>site/styleguide">Styleguide</a>
			</li>

			<?php if($this->session->userdata('username')): ?>
			    <li class="dropdown user-account">
			    	<a href="javascript:;" class="btn">
			    		Hello <?php echo $this->session->userdata('first_name'); ?>
			    	</a>
					<ul class="dropdown-menu">
						<li class="drop-link">
							<a href="<?php echo base_url(); ?>members_section">My ideas</a>
						</li>
						<li class="drop-link">
							<a href="<?php echo base_url(); ?>logout">Logout</a>
						</li>
					</ul>
			    </li>
				<li>
					<a class="btn round addIdea" href="javascript:;">
						<img src="<?php echo base_url(); ?>assets/images/bt_speed_dial_2x.png" alt="add idea">
					</a>
				</li>
			<?php else: ?>
			    <li>
			    	<a class="btn" href="<?php echo base_url(); ?>login">Login</a>
			    </li>
			<?php endif; ?>
		
		</ul>
	</nav>
	
</header>

<div class="container">


