<div class="employeeCategories form">
<?php echo $this->Form->create('EmployeeCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Employee Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EmployeeCategory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EmployeeCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employee Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
