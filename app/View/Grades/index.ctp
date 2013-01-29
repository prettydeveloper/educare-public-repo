<div class="grades index">
	<h2><?php echo __('Grades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('school_id'); ?></th>
			<th><?php echo $this->Paginator->sort('grade_number'); ?></th>
			<th><?php echo $this->Paginator->sort('grade_code'); ?></th>
			<th><?php echo $this->Paginator->sort('course_code_id'); ?></th>
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
	foreach ($grades as $grade): ?>
	<tr>
		<td><?php echo h($grade['Grade']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grade['School']['name'], array('controller' => 'schools', 'action' => 'view', $grade['School']['id'])); ?>
		</td>
		<td><?php echo h($grade['Grade']['grade_number']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['grade_code']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($grade['CourseCode']['value'], array('controller' => 'course_codes', 'action' => 'view', $grade['CourseCode']['id'])); ?>
		</td>
		<td><?php echo h($grade['Grade']['created']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['modified']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['trashed']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['trashed_by']); ?>&nbsp;</td>
		<td><?php echo h($grade['Grade']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $grade['Grade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $grade['Grade']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $grade['Grade']['id']), null, __('Are you sure you want to delete # %s?', $grade['Grade']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Grade'), array('action' => 'add')); ?></li>
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
