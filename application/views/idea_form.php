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
						echo form_input('title','',"placeholder='Title'");
					?>
				</p>

				<p>
					<?php
						echo form_textarea('description','',"placeholder='Description'");
					?>
				</p>


				<p>
					<?php
						echo form_input('impact','',"placeholder='Impact'");
					?>
				</p>

				<p>
					<?php
						echo form_input('effort','',"placeholder='Effort'");
					?>
				</p>

				<p>
					<?php
						echo form_input('profitability','',"placeholder='Profitability'");
					?>
				</p>

				<p>
					<?php
						echo form_input('vision','',"placeholder='Vision'");
					?>
				</p>

				<?php echo form_submit('submint', 'Submit',"class='btn'"); ?>

				<?php echo form_close(); ?>

			</div>
		</div>
	</div>
</div>