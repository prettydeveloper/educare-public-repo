<div class="laboratoryAttendances form">
<?php echo $this->Form->create('LaboratoryAttendance'); ?>
	<fieldset>
		<legend><?php echo __('Edit Laboratory Attendance'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('student_id');
		echo $this->Form->input('attendance_date');
		echo $this->Form->input('laboratory_id');
		echo $this->Form->input('present');
		echo $this->Form->input('absent');
		echo $this->Form->input('late');
		echo $this->Form->input('reason');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LaboratoryAttendance.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('LaboratoryAttendance.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Laboratory Attendances'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratories'), array('controller' => 'laboratories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory'), array('controller' => 'laboratories', 'action' => 'add')); ?> </li>
	</ul>
</div>
