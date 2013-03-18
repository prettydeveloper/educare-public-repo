<div class="employeeCategories view">
<h2><?php  echo __('Employee Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employeeCategory['EmployeeCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($employeeCategory['EmployeeCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($employeeCategory['EmployeeCategory']['notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee Category'), array('action' => 'edit', $employeeCategory['EmployeeCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee Category'), array('action' => 'delete', $employeeCategory['EmployeeCategory']['id']), null, __('Are you sure you want to delete # %s?', $employeeCategory['EmployeeCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employee Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Employees'); ?></h3>
	<?php if (!empty($employeeCategory['Employee'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Employee Category Id'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th><?php echo __('Manager Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Tax Code'); ?></th>
		<th><?php echo __('Vat Code'); ?></th>
		<th><?php echo __('Job Title'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Date Of Birth'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Zipcode'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Phone Number 1'); ?></th>
		<th><?php echo __('Phone Number 2'); ?></th>
		<th><?php echo __('Phone Number 3'); ?></th>
		<th><?php echo __('Qualification'); ?></th>
		<th><?php echo __('Experience'); ?></th>
		<th><?php echo __('Education'); ?></th>
		<th><?php echo __('Resume'); ?></th>
		<th><?php echo __('Link'); ?></th>
		<th><?php echo __('Resume File Name'); ?></th>
		<th><?php echo __('Resume Content Type'); ?></th>
		<th><?php echo __('Resume Data'); ?></th>
		<th><?php echo __('Resume File Size'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Trashed'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Trashed By'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Is Manager'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employeeCategory['Employee'] as $employee): ?>
		<tr>
			<td><?php echo $employee['id']; ?></td>
			<td><?php echo $employee['employee_category_id']; ?></td>
			<td><?php echo $employee['department_id']; ?></td>
			<td><?php echo $employee['manager_id']; ?></td>
			<td><?php echo $employee['first_name']; ?></td>
			<td><?php echo $employee['last_name']; ?></td>
			<td><?php echo $employee['tax_code']; ?></td>
			<td><?php echo $employee['vat_code']; ?></td>
			<td><?php echo $employee['job_title']; ?></td>
			<td><?php echo $employee['status']; ?></td>
			<td><?php echo $employee['date_of_birth']; ?></td>
			<td><?php echo $employee['address']; ?></td>
			<td><?php echo $employee['zipcode']; ?></td>
			<td><?php echo $employee['city']; ?></td>
			<td><?php echo $employee['state']; ?></td>
			<td><?php echo $employee['phone_number_1']; ?></td>
			<td><?php echo $employee['phone_number_2']; ?></td>
			<td><?php echo $employee['phone_number_3']; ?></td>
			<td><?php echo $employee['qualification']; ?></td>
			<td><?php echo $employee['experience']; ?></td>
			<td><?php echo $employee['education']; ?></td>
			<td><?php echo $employee['resume']; ?></td>
			<td><?php echo $employee['link']; ?></td>
			<td><?php echo $employee['resume_file_name']; ?></td>
			<td><?php echo $employee['resume_content_type']; ?></td>
			<td><?php echo $employee['resume_data']; ?></td>
			<td><?php echo $employee['resume_file_size']; ?></td>
			<td><?php echo $employee['created']; ?></td>
			<td><?php echo $employee['modified']; ?></td>
			<td><?php echo $employee['trashed']; ?></td>
			<td><?php echo $employee['created_by']; ?></td>
			<td><?php echo $employee['modified_by']; ?></td>
			<td><?php echo $employee['trashed_by']; ?></td>
			<td><?php echo $employee['user_id']; ?></td>
			<td><?php echo $employee['is_manager']; ?></td>
			<td><?php echo $employee['notes']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employees', 'action' => 'delete', $employee['id']), null, __('Are you sure you want to delete # %s?', $employee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
