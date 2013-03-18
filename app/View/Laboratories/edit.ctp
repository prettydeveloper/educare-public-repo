<div class="laboratories form">
<?php echo $this->Form->create('Laboratory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Laboratory'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('employee_id_1');
		echo $this->Form->input('employee_id_2');
		echo $this->Form->input('observator');
		echo $this->Form->input('starting_date');
		echo $this->Form->input('finishing_date');
		echo $this->Form->input('trashed');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('trashed_by');
		echo $this->Form->input('note');
		echo $this->Form->input('Grade');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Laboratory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Laboratory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Laboratories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educator'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratory Attendances'), array('controller' => 'laboratory_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory Attendance'), array('controller' => 'laboratory_attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
	</ul>
</div>
