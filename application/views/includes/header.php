<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project Idea</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="screen" charset="utf-8">
</head>
<body>


<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>">
				Projects Ideas
			</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">

				<?php if($this->session->userdata('username')): ?>
				    <li class="dropdown">
				    	<a class="nav-link" href="javascript:;" id="usermenu" data-toggle="dropdown" aria-expanded="true">
				    		Hello <?php echo $this->session->userdata('first_name'); ?>
				    	</a>

				    	<ul class="dropdown-menu" role="menu" aria-labelledby="usermenu">
						  	<li class="drop-link">
								<a href="<?php echo base_url(); ?>members_section">My ideas</a>
							</li>
							<li class="drop-link">
								<a href="<?php echo base_url(); ?>logout">Logout</a>
							</li>
						</ul>

				    </li>

					<li>
						<a class="nav-link" href="#myModal" data-toggle="modal">
							Add New Idea
						</a>
					</li>
				<?php else: ?>
				    <li>
				    	<a href="<?php echo base_url(); ?>login">Login</a>
				    </li>
				<?php endif; ?>

			</ul>
		</div>
	</div>
</nav>