<div class="meetings form">
<?php echo $this->Form->create('Meeting'); ?>
	<fieldset>
		<legend><?php echo __('Add Meeting'); ?></legend>
	<?php
		echo $this->Form->input('meeting_date');
		echo $this->Form->input('meeting_type_id');
		echo $this->Form->input('trashed');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('trashed_by');
		echo $this->Form->input('note');
		echo $this->Form->input('Employee');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Meetings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Meeting Types'), array('controller' => 'meeting_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting Type'), array('controller' => 'meeting_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meeting Attendances'), array('controller' => 'meeting_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting Attendance'), array('controller' => 'meeting_attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
