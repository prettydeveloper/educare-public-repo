<div class="schools form">
<?php echo $this->Form->create('School'); ?>
	<fieldset>
		<legend><?php echo __('Edit School'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('school_code');
		echo $this->Form->input('contact_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('School.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('School.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Schools'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
	</ul>
</div>
