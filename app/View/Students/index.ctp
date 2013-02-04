<div class="students index">
	<h2><?php echo __('Students'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
<!--			<th><?php echo $this->Paginator->sort('id'); ?></th> -->
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
<!--			<th><?php echo $this->Paginator->sort('middle_name'); ?></th> -->
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('grade_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_number_1'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_number_2'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_number_3'); ?></th>
<!--			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('trashed'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('trashed_by'); ?></th> -->
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($students as $student): ?>
	<tr>
<!--		<td><?php echo h($student['Student']['id']); ?>&nbsp;</td> -->
		<td><?php echo h($student['Student']['first_name']); ?>&nbsp;</td>
<!--		<td><?php echo h($student['Student']['middle_name']); ?>&nbsp;</td> -->
		<td><?php echo h($student['Student']['last_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($student['Grade']['id'], array('controller' => 'grades', 'action' => 'view', $student['Grade']['id'])); ?>
		</td>
		<td><?php echo h($student['Student']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['address']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['zipcode']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['city']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['state']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['phone_number_1']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['phone_number_2']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['phone_number_3']); ?>&nbsp;</td>
<!--		<td><?php echo h($student['Student']['created']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['modified']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['trashed']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['trashed_by']); ?>&nbsp;</td> -->
		<td><?php echo h($student['Student']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $student['Student']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $student['Student']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $student['Student']['id']), null, __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendances'), array('controller' => 'attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance'), array('controller' => 'attendances', 'action' => 'add')); ?> </li>
	</ul>
</div>
