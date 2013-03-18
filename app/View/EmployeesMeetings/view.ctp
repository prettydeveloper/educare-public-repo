<div class="employeesMeetings view">
<h2><?php  echo __('Employees Meeting'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employeesMeeting['EmployeesMeeting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeesMeeting['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $employeesMeeting['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeesMeeting['Meeting']['id'], array('controller' => 'meetings', 'action' => 'view', $employeesMeeting['Meeting']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employees Meeting'), array('action' => 'edit', $employeesMeeting['EmployeesMeeting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employees Meeting'), array('action' => 'delete', $employeesMeeting['EmployeesMeeting']['id']), null, __('Are you sure you want to delete # %s?', $employeesMeeting['EmployeesMeeting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees Meetings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employees Meeting'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
	</ul>
</div>
