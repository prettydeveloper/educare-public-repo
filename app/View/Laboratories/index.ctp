<div class="laboratories index">
	<h2><?php echo __('Laboratories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id_1'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id_2'); ?></th>
			<th><?php echo $this->Paginator->sort('observator'); ?></th>
			<th><?php echo $this->Paginator->sort('starting_date'); ?></th>
			<th><?php echo $this->Paginator->sort('finishing_date'); ?></th>
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
	foreach ($laboratories as $laboratory): ?>
	<tr>
		<td><?php echo h($laboratory['Laboratory']['id']); ?>&nbsp;</td>
		<td><?php echo h($laboratory['Laboratory']['name']); ?>&nbsp;</td>
		<td><?php echo h($laboratory['Laboratory']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($laboratory['Educatore']['id'], array('controller' => 'employees', 'action' => 'view', $laboratory['Educatore']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($laboratory['Esperto']['id'], array('controller' => 'employees', 'action' => 'view', $laboratory['Esperto']['id'])); ?>
		</td>
		<td><?php echo h($laboratory['Laboratory']['observator']); ?>&nbsp;</td>
		<td><?php echo h($laboratory['Laboratory']['starting_date']); ?>&nbsp;</td>
		<td><?php echo h($laboratory['Laboratory']['finishing_date']); ?>&nbsp;</td>
		<td><?php echo h($laboratory['Laboratory']['created']); ?>&nbsp;</td>
		<td><?php echo h($laboratory['Laboratory']['modified']); ?>&nbsp;</td>
		<td><?php echo h($laboratory['Laboratory']['trashed']); ?>&nbsp;</td>
		<td><?php echo h($laboratory['Laboratory']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($laboratory['Laboratory']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($laboratory['Laboratory']['trashed_by']); ?>&nbsp;</td>
		<td><?php echo h($laboratory['Laboratory']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $laboratory['Laboratory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $laboratory['Laboratory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $laboratory['Laboratory']['id']), null, __('Are you sure you want to delete # %s?', $laboratory['Laboratory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Laboratory'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educatore'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratory Attendances'), array('controller' => 'laboratory_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory Attendance'), array('controller' => 'laboratory_attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
	</ul>
</div>
