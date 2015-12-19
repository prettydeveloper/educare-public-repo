<div class="laboratoryAttendances index">
	<h2><?php echo __('Laboratory Attendances'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('student_id'); ?></th>
			<th><?php echo $this->Paginator->sort('attendance_date'); ?></th>
			<th><?php echo $this->Paginator->sort('laboratory_id'); ?></th>
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
	foreach ($laboratoryAttendances as $laboratoryAttendance): ?>
	<tr>
		<td><?php echo h($laboratoryAttendance['LaboratoryAttendance']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($laboratoryAttendance['Student']['student_name'], array('controller' => 'students', 'action' => 'view', $laboratoryAttendance['Student']['id'])); ?>
		</td>
		<td><?php echo h($laboratoryAttendance['LaboratoryAttendance']['attendance_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($laboratoryAttendance['Laboratory']['name'], array('controller' => 'laboratories', 'action' => 'view', $laboratoryAttendance['Laboratory']['id'])); ?>
		</td>
		<td><?php echo h($laboratoryAttendance['LaboratoryAttendance']['present']); ?>&nbsp;</td>
		<td><?php echo h($laboratoryAttendance['LaboratoryAttendance']['absent']); ?>&nbsp;</td>
		<td><?php echo h($laboratoryAttendance['LaboratoryAttendance']['late']); ?>&nbsp;</td>
		<td><?php echo h($laboratoryAttendance['LaboratoryAttendance']['reason']); ?>&nbsp;</td>
		<td><?php echo h($laboratoryAttendance['LaboratoryAttendance']['created']); ?>&nbsp;</td>
		<td><?php echo h($laboratoryAttendance['LaboratoryAttendance']['modified']); ?>&nbsp;</td>
		<td><?php echo h($laboratoryAttendance['LaboratoryAttendance']['trashed']); ?>&nbsp;</td>
		<td><?php echo h($laboratoryAttendance['LaboratoryAttendance']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($laboratoryAttendance['LaboratoryAttendance']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($laboratoryAttendance['LaboratoryAttendance']['trashed_by']); ?>&nbsp;</td>
		<td><?php echo h($laboratoryAttendance['LaboratoryAttendance']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $laboratoryAttendance['LaboratoryAttendance']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $laboratoryAttendance['LaboratoryAttendance']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $laboratoryAttendance['LaboratoryAttendance']['id']), null, __('Are you sure you want to delete # %s?', $laboratoryAttendance['LaboratoryAttendance']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Laboratory Attendance'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratories'), array('controller' => 'laboratories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory'), array('controller' => 'laboratories', 'action' => 'add')); ?> </li>
	</ul>
</div>
