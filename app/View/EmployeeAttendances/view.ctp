<div class="employeeAttendances view">
<h2><?php  echo __('Employee Attendance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employeeAttendance['EmployeeAttendance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeeAttendance['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $employeeAttendance['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attendance Date'); ?></dt>
		<dd>
			<?php echo h($employeeAttendance['EmployeeAttendance']['attendance_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeeAttendance['Meeting']['id'], array('controller' => 'meetings', 'action' => 'view', $employeeAttendance['Meeting']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Laboratory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeeAttendance['Laboratory']['name'], array('controller' => 'laboratories', 'action' => 'view', $employeeAttendance['Laboratory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Present'); ?></dt>
		<dd>
			<?php echo h($employeeAttendance['EmployeeAttendance']['present']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Absent'); ?></dt>
		<dd>
			<?php echo h($employeeAttendance['EmployeeAttendance']['absent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Late'); ?></dt>
		<dd>
			<?php echo h($employeeAttendance['EmployeeAttendance']['late']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reason'); ?></dt>
		<dd>
			<?php echo h($employeeAttendance['EmployeeAttendance']['reason']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($employeeAttendance['EmployeeAttendance']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($employeeAttendance['EmployeeAttendance']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed'); ?></dt>
		<dd>
			<?php echo h($employeeAttendance['EmployeeAttendance']['trashed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($employeeAttendance['EmployeeAttendance']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($employeeAttendance['EmployeeAttendance']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed By'); ?></dt>
		<dd>
			<?php echo h($employeeAttendance['EmployeeAttendance']['trashed_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($employeeAttendance['EmployeeAttendance']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee Attendance'), array('action' => 'edit', $employeeAttendance['EmployeeAttendance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee Attendance'), array('action' => 'delete', $employeeAttendance['EmployeeAttendance']['id']), null, __('Are you sure you want to delete # %s?', $employeeAttendance['EmployeeAttendance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employee Attendances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Attendance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratories'), array('controller' => 'laboratories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory'), array('controller' => 'laboratories', 'action' => 'add')); ?> </li>
	</ul>
</div>
