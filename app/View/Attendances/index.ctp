<div class="attendances index">
	<h2><?php echo __('Attendances'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('student_id'); ?></th>
			<th><?php echo $this->Paginator->sort('attendance_date'); ?></th>
			<th><?php echo $this->Paginator->sort('grade_id'); ?></th>
			<th><?php echo $this->Paginator->sort('present'); ?></th>
			<th><?php echo $this->Paginator->sort('absent'); ?></th>
			<th><?php echo $this->Paginator->sort('late'); ?></th>
			<th><?php echo $this->Paginator->sort('reason'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('trashed'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('trashed_by'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($attendances as $attendance): ?>
	<tr>
		<td><?php echo h($attendance['Attendance']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($attendance['Student']['id'], array('controller' => 'students', 'action' => 'view', $attendance['Student']['id'])); ?>
		</td>
		<td><?php echo h($attendance['Attendance']['attendance_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($attendance['Grade']['id'], array('controller' => 'grades', 'action' => 'view', $attendance['Grade']['id'])); ?>
		</td>
		<td><?php echo h($attendance['Attendance']['present']); ?>&nbsp;</td>
		<td><?php echo h($attendance['Attendance']['absent']); ?>&nbsp;</td>
		<td><?php echo h($attendance['Attendance']['late']); ?>&nbsp;</td>
		<td><?php echo h($attendance['Attendance']['reason']); ?>&nbsp;</td>
		<td><?php echo h($attendance['Attendance']['created']); ?>&nbsp;</td>
		<td><?php echo h($attendance['Attendance']['modified']); ?>&nbsp;</td>
		<td><?php echo h($attendance['Attendance']['trashed']); ?>&nbsp;</td>
		<td><?php echo h($attendance['Attendance']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($attendance['Attendance']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($attendance['Attendance']['trashed_by']); ?>&nbsp;</td>
		<td><?php echo h($attendance['Attendance']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $attendance['Attendance']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $attendance['Attendance']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $attendance['Attendance']['id']), null, __('Are you sure you want to delete # %s?', $attendance['Attendance']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Attendance'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
	</ul>
</div>
