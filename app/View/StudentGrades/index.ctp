<div class="studentGrades index">
	<h2><?php echo __('Student Grades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('value'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('student_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
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
	foreach ($studentGrades as $studentGrade): ?>
	<tr>
		<td><?php echo h($studentGrade['StudentGrade']['id']); ?>&nbsp;</td>
		<td><?php echo h($studentGrade['StudentGrade']['value']); ?>&nbsp;</td>
		<td><?php echo h($studentGrade['StudentGrade']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($studentGrade['Student']['student_name'], array('controller' => 'students', 'action' => 'view', $studentGrade['Student']['id'])); ?>
		</td>
		<td><?php echo h($studentGrade['StudentGrade']['date']); ?>&nbsp;</td>
		<td><?php echo h($studentGrade['StudentGrade']['created']); ?>&nbsp;</td>
		<td><?php echo h($studentGrade['StudentGrade']['modified']); ?>&nbsp;</td>
		<td><?php echo h($studentGrade['StudentGrade']['trashed']); ?>&nbsp;</td>
		<td><?php echo h($studentGrade['StudentGrade']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($studentGrade['StudentGrade']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($studentGrade['StudentGrade']['trashed_by']); ?>&nbsp;</td>
		<td><?php echo h($studentGrade['StudentGrade']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $studentGrade['StudentGrade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $studentGrade['StudentGrade']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $studentGrade['StudentGrade']['id']), null, __('Are you sure you want to delete # %s?', $studentGrade['StudentGrade']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Student Grade'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
