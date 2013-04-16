<div class="employeeAttendances index">
	<h2><?php echo __('Employee Attendances'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('attendance_date'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_id'); ?></th>
			<th><?php echo $this->Paginator->sort('laboratory_id'); ?></th>
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
	foreach ($employeeAttendances as $employeeAttendance): ?>
	<tr>
		<td><?php echo h($employeeAttendance['EmployeeAttendance']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employeeAttendance['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $employeeAttendance['Employee']['id'])); ?>
		</td>
		<td><?php echo h($employeeAttendance['EmployeeAttendance']['attendance_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employeeAttendance['Meeting']['id'], array('controller' => 'meetings', 'action' => 'view', $employeeAttendance['Meeting']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($employeeAttendance['Laboratory']['name'], array('controller' => 'laboratories', 'action' => 'view', $employeeAttendance['Laboratory']['id'])); ?>
		</td>
		<td><?php echo h($employeeAttendance['EmployeeAttendance']['present']); ?>&nbsp;</td>
		<td><?php echo h($employeeAttendance['EmployeeAttendance']['absent']); ?>&nbsp;</td>
		<td><?php echo h($employeeAttendance['EmployeeAttendance']['late']); ?>&nbsp;</td>
		<td><?php echo h($employeeAttendance['EmployeeAttendance']['reason']); ?>&nbsp;</td>
		<td><?php echo h($employeeAttendance['EmployeeAttendance']['created']); ?>&nbsp;</td>
		<td><?php echo h($employeeAttendance['EmployeeAttendance']['modified']); ?>&nbsp;</td>
		<td><?php echo h($employeeAttendance['EmployeeAttendance']['trashed']); ?>&nbsp;</td>
		<td><?php echo h($employeeAttendance['EmployeeAttendance']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($employeeAttendance['EmployeeAttendance']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($employeeAttendance['EmployeeAttendance']['trashed_by']); ?>&nbsp;</td>
		<td><?php echo h($employeeAttendance['EmployeeAttendance']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employeeAttendance['EmployeeAttendance']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employeeAttendance['EmployeeAttendance']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employeeAttendance['EmployeeAttendance']['id']), null, __('Are you sure you want to delete # %s?', $employeeAttendance['EmployeeAttendance']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Employee Attendance'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratories'), array('controller' => 'laboratories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory'), array('controller' => 'laboratories', 'action' => 'add')); ?> </li>
	</ul>
</div>
