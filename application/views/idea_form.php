<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Idea</h4>
			</div>
			<div class="modal-body">
				<div id="validation-error"></div>

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
	</div>
</div>