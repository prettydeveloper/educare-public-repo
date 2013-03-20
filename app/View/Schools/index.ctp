<div class="row-fluid">
	<div id="actions" class="span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('New School'), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		</ul>
	</div>

	<div id="schools" class="span10">
		<h2><?php echo __('Schools'); ?></h2>
		<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('school_code'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_number_1'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php
		foreach ($schools as $school): ?>
		<tr>
			<td><?php echo h($school['School']['name']); ?>&nbsp;</td>
			<td><?php echo h($school['School']['school_code']); ?>&nbsp;</td>
			<td><?php echo h($school['School']['address']); ?>&nbsp;</td>
			<td><?php echo h($school['School']['zipcode']); ?>&nbsp;</td>
			<td><?php echo h($school['School']['city']); ?>&nbsp;</td>
			<td><?php echo h($school['School']['state']); ?>&nbsp;</td>
			<td><?php echo h($school['School']['phone_number_1']); ?>&nbsp;</td>
			<td><?php echo h($school['School']['note']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $school['School']['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $school['School']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $school['School']['id']), null, __('Are you sure you want to delete # %s?', $school['School']['id'])); ?>
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
</div>
