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
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($student['Student']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($student['Student']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zipcode'); ?></dt>
		<dd>
			<?php echo h($student['Student']['zipcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($student['Student']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($student['Student']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number 1'); ?></dt>
		<dd>
			<?php echo h($student['Student']['phone_number_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number 2'); ?></dt>
		<dd>
			<?php echo h($student['Student']['phone_number_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number 3'); ?></dt>
		<dd>
			<?php echo h($student['Student']['phone_number_3']); ?>
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
		<li><?php echo $this->Html->link(__('New Attendance'), array('controller' => 'attendances', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Attendances'); ?></h3>
	<?php if (!empty($student['Attendance'])): ?>
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
		foreach ($student['Attendance'] as $attendance): ?>
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
