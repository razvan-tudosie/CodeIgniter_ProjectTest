<?php
// echo '<pre>';
// print_r($this->session->userdata);
// echo '</pre>';
?>

<?php // echo validation_errors(); ?>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			
		<h1>My ideas</h1>
		<br />

			<?php if(isset($ideas)) : ?> 
			<table class="table table-striped table-hover">
				<thead>
					<tr>
					<!-- 				
						<th>Idea ID</th>
						<th>User ID</th>
					 -->					
		 				<th>Idea</th>
						<th>Description</th>
						<th>Impact</th>
						<th>Effort</th>
						<th>Profitability</th>
						<th>Vision</th>
						<th>Score</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($ideas as $idea) : ?>
						<tr>
						<!-- 					
							<td><?php echo $idea->idea_id; ?></td>
							<td><?php echo $idea->idea_user_id; ?></td>
						 -->					
		 					<td><?php echo $idea->idea; ?></td>
							<td><?php echo $idea->idea_description; ?></td>
							<td><?php echo $idea->impact; ?></td>
							<td><?php echo $idea->effort; ?></td>
							<td><?php echo $idea->profitability; ?></td>
							<td><?php echo $idea->vision; ?></td>
							<td>
								<?php echo $idea->score; ?>
							</td>
							<td>
								<?php echo anchor("members_section/delete_idea/$idea->idea_id", 'delete idea'); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

			<?php else : ?>

				<h2>Nu ai idei</h2>

			<?php endif;?>
		</div>
	</div>
</div>