<?php
// echo '<pre>';
// print_r($this->session->userdata);
// echo '</pre>';
?>


<?php // echo validation_errors(); ?>

<div class="ideaForm" style="display:none;">

<div id="validation-error"></div>

	<h2>Add ideea</h2>

	<?php echo form_open('members_section/add_idea', array('id'=>'ideaForm')) ; ?>
	
	<p>
		<?php
			echo form_label('Title', 'title');
			echo form_input('title');
		?>
	</p>

	<p>
		<?php
			echo form_label('Description', 'description');
			echo form_textarea('description');
		?>
	</p>


	<p>
		<?php
			echo form_label('Impact', 'impact');
			echo form_input('impact');
		?>
	</p>

	<p>
		<?php
			echo form_label('Effort', 'effort');
			echo form_input('effort');
		?>
	</p>

	<p>
		<?php
			echo form_label('Profitability', 'profitability');
			echo form_input('profitability');
		?>
	</p>

	<p>
		<?php
			echo form_label('Vision', 'vision');
			echo form_input('vision');
		?>
	</p>

	<?php echo form_submit('submint', 'Submit'); ?>

	<?php echo form_close(); ?>
</div>

<div class="row">
	<div class="span12 card">
		<div class="card-content">
			
		<h1>My ideas</h1>
		<br />

		<?php if(isset($ideas)) : ?> 
			<table>
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
						<th>Total</th>
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


<br /><br /><br /><br /><br />


