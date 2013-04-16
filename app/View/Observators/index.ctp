<div class="observators index">
	<h2><?php echo __('Observators'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('observation_date'); ?></th>
			<th><?php echo $this->Paginator->sort('laboratory_id'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($observators as $observator): ?>
	<tr>
		<td><?php echo h($observator['Observator']['id']); ?>&nbsp;</td>
		<td><?php echo h($observator['Observator']['observation_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($observator['Laboratory']['name'], array('controller' => 'laboratories', 'action' => 'view', $observator['Laboratory']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($observator['Meeting']['id'], array('controller' => 'meetings', 'action' => 'view', $observator['Meeting']['id'])); ?>
		</td>
		<td><?php echo h($observator['Observator']['name']); ?>&nbsp;</td>
		<td><?php echo h($observator['Observator']['notes']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $observator['Observator']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $observator['Observator']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $observator['Observator']['id']), null, __('Are you sure you want to delete # %s?', $observator['Observator']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Observator'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Laboratories'), array('controller' => 'laboratories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory'), array('controller' => 'laboratories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
	</ul>
</div>
