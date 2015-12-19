<div class="employees index">
	<h2><?php echo __('Employees'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('department_id'); ?></th>
			<th><?php echo $this->Paginator->sort('manager_id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_code'); ?></th>
			<th><?php echo $this->Paginator->sort('vat_code'); ?></th>
			<th><?php echo $this->Paginator->sort('job_title'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('address_line1'); ?></th>
			<th><?php echo $this->Paginator->sort('address_line2'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('zip_code'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('home_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_manager'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($employees as $employee): ?>
	<tr>
		<td><?php echo h($employee['Employee']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employee['EmployeeCategory']['name'], array('controller' => 'employee_categories', 'action' => 'view', $employee['EmployeeCategory']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($employee['Department']['name'], array('controller' => 'departments', 'action' => 'view', $employee['Department']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($employee['Manager']['last_name'], array('controller' => 'employees', 'action' => 'view', $employee['Manager']['id'])); ?>
		</td>
		<td><?php echo h($employee['Employee']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['tax_code']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['vat_code']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['job_title']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['status']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['address_line1']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['address_line2']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['city']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['state']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['country_id']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['zip_code']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['mobile_phone']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['home_phone']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['email']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['created']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['modified']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['deleted']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employee['User']['username'], array('controller' => 'users', 'action' => 'view', $employee['User']['id'])); ?>
		</td>
		<td><?php echo h($employee['Employee']['is_manager']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['notes']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employee['Employee']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employee['Employee']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employee['Employee']['id']), null, __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employee Categories'), array('controller' => 'employee_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Category'), array('controller' => 'employee_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manager'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employee Attendances'), array('controller' => 'employee_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Attendance'), array('controller' => 'employee_attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
	</ul>
</div>
