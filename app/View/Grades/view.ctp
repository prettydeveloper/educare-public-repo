<div class="grades view">
<h2><?php  echo __('Grade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grade['School']['name'], array('controller' => 'schools', 'action' => 'view', $grade['School']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grade Number'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['grade_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grade Code'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['grade_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course Code'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grade['CourseCode']['value'], array('controller' => 'course_codes', 'action' => 'view', $grade['CourseCode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['trashed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed By'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['trashed_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grade'), array('action' => 'edit', $grade['Grade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grade'), array('action' => 'delete', $grade['Grade']['id']), null, __('Are you sure you want to delete # %s?', $grade['Grade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Codes'), array('controller' => 'course_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Code'), array('controller' => 'course_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendances'), array('controller' => 'attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance'), array('controller' => 'attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Attendances'); ?></h3>
	<?php if (!empty($grade['Attendance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Attendance Date'); ?></th>
		<th><?php echo __('Grade Id'); ?></th>
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
		foreach ($grade['Attendance'] as $attendance): ?>
		<tr>
			<td><?php echo $attendance['id']; ?></td>
			<td><?php echo $attendance['student_id']; ?></td>
			<td><?php echo $attendance['attendance_date']; ?></td>
			<td><?php echo $attendance['grade_id']; ?></td>
			<td><?php echo $attendance['present']; ?></td>
			<td><?php echo $attendance['absent']; ?></td>
			<td><?php echo $attendance['late']; ?></td>
			<td><?php echo $attendance['reason']; ?></td>
			<td><?php echo $attendance['created']; ?></td>
			<td><?php echo $attendance['modified']; ?></td>
			<td><?php echo $attendance['trashed']; ?></td>
			<td><?php echo $attendance['created_by']; ?></td>
			<td><?php echo $attendance['modified_by']; ?></td>
			<td><?php echo $attendance['trashed_by']; ?></td>
			<td><?php echo $attendance['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'attendances', 'action' => 'view', $attendance['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'attendances', 'action' => 'edit', $attendance['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attendances', 'action' => 'delete', $attendance['id']), null, __('Are you sure you want to delete # %s?', $attendance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Attendance'), array('controller' => 'attendances', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Students'); ?></h3>
	<?php if (!empty($grade['Student'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Middle Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Grade Id'); ?></th>
		<th><?php echo __('Date Of Birth'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Zipcode'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Phone Number 1'); ?></th>
		<th><?php echo __('Phone Number 2'); ?></th>
		<th><?php echo __('Phone Number 3'); ?></th>
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
		foreach ($grade['Student'] as $student): ?>
		<tr>
			<td><?php echo $student['id']; ?></td>
			<td><?php echo $student['first_name']; ?></td>
			<td><?php echo $student['middle_name']; ?></td>
			<td><?php echo $student['last_name']; ?></td>
			<td><?php echo $student['grade_id']; ?></td>
			<td><?php echo $student['date_of_birth']; ?></td>
			<td><?php echo $student['address']; ?></td>
			<td><?php echo $student['zipcode']; ?></td>
			<td><?php echo $student['city']; ?></td>
			<td><?php echo $student['state']; ?></td>
			<td><?php echo $student['phone_number_1']; ?></td>
			<td><?php echo $student['phone_number_2']; ?></td>
			<td><?php echo $student['phone_number_3']; ?></td>
			<td><?php echo $student['created']; ?></td>
			<td><?php echo $student['modified']; ?></td>
			<td><?php echo $student['trashed']; ?></td>
			<td><?php echo $student['created_by']; ?></td>
			<td><?php echo $student['modified_by']; ?></td>
			<td><?php echo $student['trashed_by']; ?></td>
			<td><?php echo $student['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'students', 'action' => 'view', $student['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'students', 'action' => 'edit', $student['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'students', 'action' => 'delete', $student['id']), null, __('Are you sure you want to delete # %s?', $student['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
