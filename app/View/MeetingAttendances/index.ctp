<div class="meetingAttendances index">
	<h2><?php echo __('Meeting Attendances'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('attendance_date'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_id'); ?></th>
			<th><?php echo $this->Paginator->sort('present'); ?></th>
			<th><?php echo $this->Paginator->sort('absent'); ?></th>
			<th><?php echo $this->Paginator->sort('late'); ?></th>
			<th><?php echo $this->Paginator->sort('reason'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('trashed'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('trashed_by'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($meetingAttendances as $meetingAttendance): ?>
	<tr>
		<td><?php echo h($meetingAttendance['MeetingAttendance']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($meetingAttendance['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $meetingAttendance['Employee']['id'])); ?>
		</td>
		<td><?php echo h($meetingAttendance['MeetingAttendance']['attendance_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($meetingAttendance['Meeting']['id'], array('controller' => 'meetings', 'action' => 'view', $meetingAttendance['Meeting']['id'])); ?>
		</td>
		<td><?php echo h($meetingAttendance['MeetingAttendance']['present']); ?>&nbsp;</td>
		<td><?php echo h($meetingAttendance['MeetingAttendance']['absent']); ?>&nbsp;</td>
		<td><?php echo h($meetingAttendance['MeetingAttendance']['late']); ?>&nbsp;</td>
		<td><?php echo h($meetingAttendance['MeetingAttendance']['reason']); ?>&nbsp;</td>
		<td><?php echo h($meetingAttendance['MeetingAttendance']['created']); ?>&nbsp;</td>
		<td><?php echo h($meetingAttendance['MeetingAttendance']['modified']); ?>&nbsp;</td>
		<td><?php echo h($meetingAttendance['MeetingAttendance']['trashed']); ?>&nbsp;</td>
		<td><?php echo h($meetingAttendance['MeetingAttendance']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($meetingAttendance['MeetingAttendance']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($meetingAttendance['MeetingAttendance']['trashed_by']); ?>&nbsp;</td>
		<td><?php echo h($meetingAttendance['MeetingAttendance']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $meetingAttendance['MeetingAttendance']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $meetingAttendance['MeetingAttendance']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $meetingAttendance['MeetingAttendance']['id']), null, __('Are you sure you want to delete # %s?', $meetingAttendance['MeetingAttendance']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Meeting Attendance'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
	</ul>
</div>
