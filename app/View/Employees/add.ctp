<div class="employees form">
<?php echo $this->Form->create('Employee'); ?>
	<fieldset>
		<legend><?php echo __('Add Employee'); ?></legend>
	<?php
		echo $this->Form->input('employee_category_id');
		echo $this->Form->input('department_id');
		echo $this->Form->input('manager_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('tax_code');
		echo $this->Form->input('vat_code');
		echo $this->Form->input('job_title');
		echo $this->Form->input('status');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('address_line1');
		echo $this->Form->input('address_line2');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('country_id');
		echo $this->Form->input('zip_code');
		echo $this->Form->input('mobile_phone');
		echo $this->Form->input('home_phone');
		echo $this->Form->input('email');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('deleted');
		echo $this->Form->input('user_id');
		echo $this->Form->input('is_manager');
		echo $this->Form->input('notes');
		echo $this->Form->input('Meeting');
		echo $this->Form->input('School');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?></li>
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
