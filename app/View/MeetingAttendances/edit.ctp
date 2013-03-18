<div class="meetingAttendances form">
<?php echo $this->Form->create('MeetingAttendance'); ?>
	<fieldset>
		<legend><?php echo __('Edit Meeting Attendance'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('attendance_date');
		echo $this->Form->input('meeting_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MeetingAttendance.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MeetingAttendance.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Meeting Attendances'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
	</ul>
</div>
