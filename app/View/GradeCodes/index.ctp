<div class="gradeCodes index">
	<h2><?php echo __('Grade Codes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('value'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($gradeCodes as $gradeCode): ?>
	<tr>
		<td><?php echo h($gradeCode['GradeCode']['id']); ?>&nbsp;</td>
		<td><?php echo h($gradeCode['GradeCode']['code']); ?>&nbsp;</td>
		<td><?php echo h($gradeCode['GradeCode']['value']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $gradeCode['GradeCode']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gradeCode['GradeCode']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $gradeCode['GradeCode']['id']), null, __('Are you sure you want to delete # %s?', $gradeCode['GradeCode']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Grade Code'), array('action' => 'add')); ?></li>
	</ul>
</div>
