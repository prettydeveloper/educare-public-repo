<div class="employeesMeetings index">
	<h2><?php echo __('Employees Meetings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($employeesMeetings as $employeesMeeting): ?>
	<tr>
		<td><?php echo h($employeesMeeting['EmployeesMeeting']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employeesMeeting['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $employeesMeeting['Employee']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($employeesMeeting['Meeting']['id'], array('controller' => 'meetings', 'action' => 'view', $employeesMeeting['Meeting']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employeesMeeting['EmployeesMeeting']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employeesMeeting['EmployeesMeeting']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employeesMeeting['EmployeesMeeting']['id']), null, __('Are you sure you want to delete # %s?', $employeesMeeting['EmployeesMeeting']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Employees Meeting'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
	</ul>
</div>
