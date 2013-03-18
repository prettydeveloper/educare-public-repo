<div class="employeesSchools index">
	<h2><?php echo __('Employees Schools'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('school_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($employeesSchools as $employeesSchool): ?>
	<tr>
		<td><?php echo h($employeesSchool['EmployeesSchool']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employeesSchool['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $employeesSchool['Employee']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($employeesSchool['School']['name'], array('controller' => 'schools', 'action' => 'view', $employeesSchool['School']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employeesSchool['EmployeesSchool']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employeesSchool['EmployeesSchool']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employeesSchool['EmployeesSchool']['id']), null, __('Are you sure you want to delete # %s?', $employeesSchool['EmployeesSchool']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Employees School'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
