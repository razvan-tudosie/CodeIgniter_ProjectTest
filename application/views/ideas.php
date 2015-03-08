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

		<p>In this matrix, you’ll list your ideas in the left-hand column and then score them on a scale of 1 to 5, with 5 being the highest. Granted, the scoring will be subjective, but since we’re looking for trends, it’s OK to estimate. Score your ideas according to these criteria:</p>
		<p>Rank each item on a scale of 1 to 5 and then add them up in the right-hand column. Remember, you’re looking for trends. If you have to cut one project, cut the lowest one; if you can only take on one project, proceed with the highest one.</p>
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
						<th>
							<span class="info" data-toggle="popover"
							title="Impact"
							data-content="Overall, how much of an impact will this project make on your business and customers?">
								Impact
							</span>
						</th>

						<th>
							<span class="info" data-toggle="popover"
							title="Effort"
							data-content="How much time and work will it take to create the project? (In this case, a lower score indicates more effort, so choose 1 for a project that requires a ton of work and 5 for a project that requires almost no work.)">
								Effort
							</span>

						</th>
						<th>
							<span class="info" data-toggle="popover"
							title="Profitability"
							data-content="Relative to the other ideas, how much money will the project bring in?">
								Profitability
							</span>

						</th>
						<th>
							<span class="info" data-toggle="popover"
							title="Vision"
							data-content="How close of a fit is this project with your overall mission and vision?">
								Vision
							</span>
						</th>
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