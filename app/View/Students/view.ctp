<div class="students view">
<h2><?php  echo __('Student'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($student['Student']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($student['Student']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Name'); ?></dt>
		<dd>
			<?php echo h($student['Student']['middle_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($student['Student']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($student['Grade']['id'], array('controller' => 'grades', 'action' => 'view', $student['Grade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Id'); ?></dt>
		<dd>
			<?php echo h($student['Student']['contact_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($student['Student']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact 1 Id'); ?></dt>
		<dd>
			<?php echo h($student['Student']['contact_1_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact 2 Id'); ?></dt>
		<dd>
			<?php echo h($student['Student']['contact_2_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($student['Student']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($student['Student']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed'); ?></dt>
		<dd>
			<?php echo h($student['Student']['trashed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($student['Student']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($student['Student']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed By'); ?></dt>
		<dd>
			<?php echo h($student['Student']['trashed_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($student['Student']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student'), array('action' => 'edit', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student'), array('action' => 'delete', $student['Student']['id']), null, __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendances'), array('controller' => 'attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Today Attendance'), array('controller' => 'attendances', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Attendances'); ?></h3>
	<?php if (!empty($student['TodayAttendance'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $student['TodayAttendance']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Student Id'); ?></dt>
		<dd>
	<?php echo $student['TodayAttendance']['student_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Attendance Date'); ?></dt>
		<dd>
	<?php echo $student['TodayAttendance']['attendance_date']; ?>
&nbsp;</dd>
		<dt><?php echo __('Grade Id'); ?></dt>
		<dd>
	<?php echo $student['TodayAttendance']['grade_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Present'); ?></dt>
		<dd>
	<?php echo $student['TodayAttendance']['present']; ?>
&nbsp;</dd>
		<dt><?php echo __('Absent'); ?></dt>
		<dd>
	<?php echo $student['TodayAttendance']['absent']; ?>
&nbsp;</dd>
		<dt><?php echo __('Late'); ?></dt>
		<dd>
	<?php echo $student['TodayAttendance']['late']; ?>
&nbsp;</dd>
		<dt><?php echo __('Reason'); ?></dt>
		<dd>
	<?php echo $student['TodayAttendance']['reason']; ?>
&nbsp;</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
	<?php echo $student['TodayAttendance']['created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
	<?php echo $student['TodayAttendance']['modified']; ?>
&nbsp;</dd>
		<dt><?php echo __('Trashed'); ?></dt>
		<dd>
	<?php echo $student['TodayAttendance']['trashed']; ?>
&nbsp;</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
	<?php echo $student['TodayAttendance']['created_by']; ?>
&nbsp;</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
	<?php echo $student['TodayAttendance']['modified_by']; ?>
&nbsp;</dd>
		<dt><?php echo __('Trashed By'); ?></dt>
		<dd>
	<?php echo $student['TodayAttendance']['trashed_by']; ?>
&nbsp;</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
	<?php echo $student['TodayAttendance']['note']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Today Attendance'), array('controller' => 'attendances', 'action' => 'edit', $student['TodayAttendance']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Attendances'); ?></h3>
	<?php if (!empty($student['TotalAttendances'])): ?>
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
		foreach ($student['TotalAttendances'] as $totalAttendances): ?>
		<tr>
			<td><?php echo $totalAttendances['id']; ?></td>
			<td><?php echo $totalAttendances['student_id']; ?></td>
			<td><?php echo $totalAttendances['attendance_date']; ?></td>
			<td><?php echo $totalAttendances['grade_id']; ?></td>
			<td><?php echo $totalAttendances['present']; ?></td>
			<td><?php echo $totalAttendances['absent']; ?></td>
			<td><?php echo $totalAttendances['late']; ?></td>
			<td><?php echo $totalAttendances['reason']; ?></td>
			<td><?php echo $totalAttendances['created']; ?></td>
			<td><?php echo $totalAttendances['modified']; ?></td>
			<td><?php echo $totalAttendances['trashed']; ?></td>
			<td><?php echo $totalAttendances['created_by']; ?></td>
			<td><?php echo $totalAttendances['modified_by']; ?></td>
			<td><?php echo $totalAttendances['trashed_by']; ?></td>
			<td><?php echo $totalAttendances['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'attendances', 'action' => 'view', $totalAttendances['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'attendances', 'action' => 'edit', $totalAttendances['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attendances', 'action' => 'delete', $totalAttendances['id']), null, __('Are you sure you want to delete # %s?', $totalAttendances['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Total Attendances'), array('controller' => 'attendances', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
