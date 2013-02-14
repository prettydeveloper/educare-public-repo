<div class="educators form">
<?php echo $this->Form->create('Educator'); ?>
	<fieldset>
		<legend><?php echo __('Add Educator'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('middle_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('address');
		echo $this->Form->input('zipcode');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('phone_number_1');
		echo $this->Form->input('phone_number_2');
		echo $this->Form->input('phone_number_3');
		echo $this->Form->input('qualification');
		echo $this->Form->input('experience');
		echo $this->Form->input('education');
		echo $this->Form->input('resume');
		echo $this->Form->input('link');
		echo $this->Form->input('trashed');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('trashed_by');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Educators'), array('action' => 'index')); ?></li>
	</ul>
</div>
