<div class="gradesLaboratories index">
	<h2><?php echo __('Grades Laboratories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('grade_id'); ?></th>
			<th><?php echo $this->Paginator->sort('laboratory_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($gradesLaboratories as $gradesLaboratory): ?>
	<tr>
		<td><?php echo h($gradesLaboratory['GradesLaboratory']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($gradesLaboratory['Grade']['grade_name'], array('controller' => 'grades', 'action' => 'view', $gradesLaboratory['Grade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($gradesLaboratory['Laboratory']['name'], array('controller' => 'laboratories', 'action' => 'view', $gradesLaboratory['Laboratory']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $gradesLaboratory['GradesLaboratory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gradesLaboratory['GradesLaboratory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $gradesLaboratory['GradesLaboratory']['id']), null, __('Are you sure you want to delete # %s?', $gradesLaboratory['GradesLaboratory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Grades Laboratory'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratories'), array('controller' => 'laboratories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory'), array('controller' => 'laboratories', 'action' => 'add')); ?> </li>
	</ul>
</div>
