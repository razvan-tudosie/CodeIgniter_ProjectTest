<div class="ideaForm modal" style="display:none;">
	<div class="modal-content">

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
</div>