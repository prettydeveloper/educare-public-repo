<div class="laboratories form">
<?php echo $this->Form->create('Laboratory'); ?>
	<fieldset>
		<legend><?php echo __('Add Laboratory'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('starting_date');
		echo $this->Form->input('finishing_date');
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

		<li><?php echo $this->Html->link(__('List Laboratories'), array('action' => 'index')); ?></li>
	</ul>
</div>
