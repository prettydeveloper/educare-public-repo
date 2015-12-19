<div class="meetings view">
<h2><?php  echo __('Meeting'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Date'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['meeting_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meeting['MeetingType']['name'], array('controller' => 'meeting_types', 'action' => 'view', $meeting['MeetingType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['trashed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed By'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['trashed_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Meeting'), array('action' => 'edit', $meeting['Meeting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Meeting'), array('action' => 'delete', $meeting['Meeting']['id']), null, __('Are you sure you want to delete # %s?', $meeting['Meeting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meeting Types'), array('controller' => 'meeting_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting Type'), array('controller' => 'meeting_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meeting Attendances'), array('controller' => 'meeting_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting Attendance'), array('controller' => 'meeting_attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Meeting Attendances'); ?></h3>
	<?php if (!empty($meeting['MeetingAttendance'])): ?>
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
		foreach ($meeting['MeetingAttendance'] as $meetingAttendance): ?>
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
	<h3><?php echo __('Related Employees'); ?></h3>
	<?php if (!empty($meeting['Employee'])): ?>
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
		foreach ($meeting['Employee'] as $employee): ?>
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
