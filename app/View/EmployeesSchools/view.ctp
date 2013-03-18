<div class="employeesSchools view">
<h2><?php  echo __('Employees School'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employeesSchool['EmployeesSchool']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeesSchool['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $employeesSchool['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeesSchool['School']['name'], array('controller' => 'schools', 'action' => 'view', $employeesSchool['School']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employees School'), array('action' => 'edit', $employeesSchool['EmployeesSchool']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employees School'), array('action' => 'delete', $employeesSchool['EmployeesSchool']['id']), null, __('Are you sure you want to delete # %s?', $employeesSchool['EmployeesSchool']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees Schools'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employees School'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
