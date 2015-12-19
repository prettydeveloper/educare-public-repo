<div class="employees view">
<h2><?php  echo __('Employee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employee['EmployeeCategory']['name'], array('controller' => 'employee_categories', 'action' => 'view', $employee['EmployeeCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employee['Department']['name'], array('controller' => 'departments', 'action' => 'view', $employee['Department']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manager'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employee['Manager']['id'], array('controller' => 'employees', 'action' => 'view', $employee['Manager']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Code'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['tax_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vat Code'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['vat_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Title'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['job_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zipcode'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['zipcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number 1'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['phone_number_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number 2'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['phone_number_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number 3'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['phone_number_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qualification'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['qualification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Experience'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['experience']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Education'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['education']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resume'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['resume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resume File Name'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['resume_file_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resume Content Type'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['resume_content_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resume Data'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['resume_data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resume File Size'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['resume_file_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['trashed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed By'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['trashed_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employee['User']['id'], array('controller' => 'users', 'action' => 'view', $employee['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Manager'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['is_manager']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $employee['Employee']['id']), null, __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employee Categories'), array('controller' => 'employee_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee Category'), array('controller' => 'employee_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manager'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meeting Attendances'), array('controller' => 'meeting_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting Attendance'), array('controller' => 'meeting_attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Meeting Attendances'); ?></h3>
	<?php if (!empty($employee['MeetingAttendance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Attendance Date'); ?></th>
		<th><?php echo __('Meeting Id'); ?></th>
		<th><?php echo __('Present'); ?></th>
		<th><?php echo __('Absent'); ?></th>
		<th><?php echo __('Late'); ?></th>
		<th><?php echo __('Reason'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Trashed'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Trashed By'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['MeetingAttendance'] as $meetingAttendance): ?>
		<tr>
			<td><?php echo $meetingAttendance['id']; ?></td>
			<td><?php echo $meetingAttendance['employee_id']; ?></td>
			<td><?php echo $meetingAttendance['attendance_date']; ?></td>
			<td><?php echo $meetingAttendance['meeting_id']; ?></td>
			<td><?php echo $meetingAttendance['present']; ?></td>
			<td><?php echo $meetingAttendance['absent']; ?></td>
			<td><?php echo $meetingAttendance['late']; ?></td>
			<td><?php echo $meetingAttendance['reason']; ?></td>
			<td><?php echo $meetingAttendance['created']; ?></td>
			<td><?php echo $meetingAttendance['modified']; ?></td>
			<td><?php echo $meetingAttendance['trashed']; ?></td>
			<td><?php echo $meetingAttendance['created_by']; ?></td>
			<td><?php echo $meetingAttendance['modified_by']; ?></td>
			<td><?php echo $meetingAttendance['trashed_by']; ?></td>
			<td><?php echo $meetingAttendance['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'meeting_attendances', 'action' => 'view', $meetingAttendance['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'meeting_attendances', 'action' => 'edit', $meetingAttendance['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'meeting_attendances', 'action' => 'delete', $meetingAttendance['id']), null, __('Are you sure you want to delete # %s?', $meetingAttendance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Meeting Attendance'), array('controller' => 'meeting_attendances', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Meetings'); ?></h3>
	<?php if (!empty($employee['Meeting'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Meeting Date'); ?></th>
		<th><?php echo __('Meeting Type Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Trashed'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Trashed By'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['Meeting'] as $meeting): ?>
		<tr>
			<td><?php echo $meeting['id']; ?></td>
			<td><?php echo $meeting['meeting_date']; ?></td>
			<td><?php echo $meeting['meeting_type_id']; ?></td>
			<td><?php echo $meeting['created']; ?></td>
			<td><?php echo $meeting['modified']; ?></td>
			<td><?php echo $meeting['trashed']; ?></td>
			<td><?php echo $meeting['created_by']; ?></td>
			<td><?php echo $meeting['modified_by']; ?></td>
			<td><?php echo $meeting['trashed_by']; ?></td>
			<td><?php echo $meeting['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'meetings', 'action' => 'view', $meeting['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'meetings', 'action' => 'edit', $meeting['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'meetings', 'action' => 'delete', $meeting['id']), null, __('Are you sure you want to delete # %s?', $meeting['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Schools'); ?></h3>
	<?php if (!empty($employee['School'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('School Code'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Zipcode'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Phone Number 1'); ?></th>
		<th><?php echo __('Phone Number 2'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Trashed'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Trashed By'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($employee['School'] as $school): ?>
		<tr>
			<td><?php echo $school['id']; ?></td>
			<td><?php echo $school['name']; ?></td>
			<td><?php echo $school['school_code']; ?></td>
			<td><?php echo $school['address']; ?></td>
			<td><?php echo $school['zipcode']; ?></td>
			<td><?php echo $school['city']; ?></td>
			<td><?php echo $school['state']; ?></td>
			<td><?php echo $school['phone_number_1']; ?></td>
			<td><?php echo $school['phone_number_2']; ?></td>
			<td><?php echo $school['created']; ?></td>
			<td><?php echo $school['modified']; ?></td>
			<td><?php echo $school['trashed']; ?></td>
			<td><?php echo $school['created_by']; ?></td>
			<td><?php echo $school['modified_by']; ?></td>
			<td><?php echo $school['trashed_by']; ?></td>
			<td><?php echo $school['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'schools', 'action' => 'view', $school['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'schools', 'action' => 'edit', $school['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'schools', 'action' => 'delete', $school['id']), null, __('Are you sure you want to delete # %s?', $school['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
