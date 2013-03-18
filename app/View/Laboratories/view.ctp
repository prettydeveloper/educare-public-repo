<div class="laboratories view">
<h2><?php  echo __('Laboratory'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($laboratory['Laboratory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($laboratory['Laboratory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($laboratory['Laboratory']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Educatore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($laboratory['Educatore']['id'], array('controller' => 'employees', 'action' => 'view', $laboratory['Educatore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Esperto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($laboratory['Esperto']['id'], array('controller' => 'employees', 'action' => 'view', $laboratory['Esperto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observator'); ?></dt>
		<dd>
			<?php echo h($laboratory['Laboratory']['observator']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Starting Date'); ?></dt>
		<dd>
			<?php echo h($laboratory['Laboratory']['starting_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Finishing Date'); ?></dt>
		<dd>
			<?php echo h($laboratory['Laboratory']['finishing_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($laboratory['Laboratory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($laboratory['Laboratory']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed'); ?></dt>
		<dd>
			<?php echo h($laboratory['Laboratory']['trashed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($laboratory['Laboratory']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($laboratory['Laboratory']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed By'); ?></dt>
		<dd>
			<?php echo h($laboratory['Laboratory']['trashed_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($laboratory['Laboratory']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Laboratory'), array('action' => 'edit', $laboratory['Laboratory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Laboratory'), array('action' => 'delete', $laboratory['Laboratory']['id']), null, __('Are you sure you want to delete # %s?', $laboratory['Laboratory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educatore'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratory Attendances'), array('controller' => 'laboratory_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory Attendance'), array('controller' => 'laboratory_attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Laboratory Attendances'); ?></h3>
	<?php if (!empty($laboratory['LaboratoryAttendance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Attendance Date'); ?></th>
		<th><?php echo __('Laboratory Id'); ?></th>
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
		foreach ($laboratory['LaboratoryAttendance'] as $laboratoryAttendance): ?>
		<tr>
			<td><?php echo $laboratoryAttendance['id']; ?></td>
			<td><?php echo $laboratoryAttendance['student_id']; ?></td>
			<td><?php echo $laboratoryAttendance['attendance_date']; ?></td>
			<td><?php echo $laboratoryAttendance['laboratory_id']; ?></td>
			<td><?php echo $laboratoryAttendance['present']; ?></td>
			<td><?php echo $laboratoryAttendance['absent']; ?></td>
			<td><?php echo $laboratoryAttendance['late']; ?></td>
			<td><?php echo $laboratoryAttendance['reason']; ?></td>
			<td><?php echo $laboratoryAttendance['created']; ?></td>
			<td><?php echo $laboratoryAttendance['modified']; ?></td>
			<td><?php echo $laboratoryAttendance['trashed']; ?></td>
			<td><?php echo $laboratoryAttendance['created_by']; ?></td>
			<td><?php echo $laboratoryAttendance['modified_by']; ?></td>
			<td><?php echo $laboratoryAttendance['trashed_by']; ?></td>
			<td><?php echo $laboratoryAttendance['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'laboratory_attendances', 'action' => 'view', $laboratoryAttendance['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'laboratory_attendances', 'action' => 'edit', $laboratoryAttendance['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'laboratory_attendances', 'action' => 'delete', $laboratoryAttendance['id']), null, __('Are you sure you want to delete # %s?', $laboratoryAttendance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Laboratory Attendance'), array('controller' => 'laboratory_attendances', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Grades'); ?></h3>
	<?php if (!empty($laboratory['Grade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('School Id'); ?></th>
		<th><?php echo __('Grade Number'); ?></th>
		<th><?php echo __('Grade Code'); ?></th>
		<th><?php echo __('Course Code Id'); ?></th>
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
		foreach ($laboratory['Grade'] as $grade): ?>
		<tr>
			<td><?php echo $grade['id']; ?></td>
			<td><?php echo $grade['school_id']; ?></td>
			<td><?php echo $grade['grade_number']; ?></td>
			<td><?php echo $grade['grade_code']; ?></td>
			<td><?php echo $grade['course_code_id']; ?></td>
			<td><?php echo $grade['created']; ?></td>
			<td><?php echo $grade['modified']; ?></td>
			<td><?php echo $grade['trashed']; ?></td>
			<td><?php echo $grade['created_by']; ?></td>
			<td><?php echo $grade['modified_by']; ?></td>
			<td><?php echo $grade['trashed_by']; ?></td>
			<td><?php echo $grade['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'grades', 'action' => 'view', $grade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'grades', 'action' => 'edit', $grade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'grades', 'action' => 'delete', $grade['id']), null, __('Are you sure you want to delete # %s?', $grade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
