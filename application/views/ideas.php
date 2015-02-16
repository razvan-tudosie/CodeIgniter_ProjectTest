<?php
echo '<pre>';
print_r($this->session->userdata);
echo '</pre>';
?>

<br /><br /><br /><br />

<div style="width:45%; float:left; margin-right:10%">
	<h1>My ideas</h1>
	<?php if(isset($ideas)) : ?> 
	<table>
		<thead>
			<tr>
				<th>Idea ID</th>
				<th>User ID</th>
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
					<td><?php echo $idea->id; ?></td>
					<td><?php echo $idea->user_id; ?></td>
					<td><?php echo $idea->idea; ?></td>
					<td><?php echo $idea->idea_description; ?></td>
					<td><?php echo $idea->impact; ?></td>
					<td><?php echo $idea->effort; ?></td>
					<td><?php echo $idea->profitability; ?></td>
					<td><?php echo $idea->vision; ?></td>
					<td><?php echo $idea->score; ?></td>
					<td>
						<?php echo anchor("members_section/delete_idea/$idea->id", 'delete idea'); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>


	<?php else : ?>

		<h2>Nu ai idei</h2>

	<?php endif;?>
</div>

<div style="width:45%; float:left;">
	<h2>Add ideea</h2>

	<?php echo form_open('members_section/add_idea'); ?>

	<p>
		<label for="title">Title</label>
		<input type="text" name="title" id="title">
	</p>

	<p>
		<label for="description">Description</label>
		<textarea name="description" id="description" cols="30" rows="10"></textarea>
	</p>

	<p>
		<label for="impact">impact</label>
		<input type="text" name="impact" id="impact">
	</p>

	<p>
		<label for="effort">effort</label>
		<input type="text" name="effort" id="effort">
	</p>

	<p>
		<label for="profitability">profitability</label>
		<input type="text" name="profitability" id="profitability">
	</p>
	<p>
		<label for="vision">vision</label>
		<input type="text" name="vision" id="vision">
	</p>

	<input type="submit" value="submit">

	<?php echo form_close(); ?>
</div>