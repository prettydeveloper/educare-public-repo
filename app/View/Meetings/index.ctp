<div class="meetings index">
	<h2><?php echo __('Meetings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_date'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_type_id'); ?></th>
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
	foreach ($meetings as $meeting): ?>
	<tr>
		<td><?php echo h($meeting['Meeting']['id']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['meeting_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($meeting['MeetingType']['name'], array('controller' => 'meeting_types', 'action' => 'view', $meeting['MeetingType']['id'])); ?>
		</td>
		<td><?php echo h($meeting['Meeting']['created']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['modified']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['trashed']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['trashed_by']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $meeting['Meeting']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $meeting['Meeting']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $meeting['Meeting']['id']), null, __('Are you sure you want to delete # %s?', $meeting['Meeting']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Meeting'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Meeting Types'), array('controller' => 'meeting_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting Type'), array('controller' => 'meeting_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meeting Attendances'), array('controller' => 'meeting_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting Attendance'), array('controller' => 'meeting_attendances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
