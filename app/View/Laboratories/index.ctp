<div class="row-fluid">
	<div id="actions" class="span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('New Laboratory'), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Educator'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		</ul>
	</div>

	<div id="laboratories" class="span10">
		<h2><?php echo __('Laboratories'); ?></h2>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('name'); ?></th>
				<th><?php echo $this->Paginator->sort('description'); ?></th>
				<th><?php echo $this->Paginator->sort('employee_id_1', __('Educator')); ?></th>
				<th><?php echo $this->Paginator->sort('employee_id_2', __('Expert')); ?></th>
				<th><?php echo $this->Paginator->sort('observator'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php
		foreach ($laboratories as $laboratory): ?>
		<tr>
			<td><?php echo h($laboratory['Laboratory']['name']); ?>&nbsp;</td>
			<td><?php echo h($laboratory['Laboratory']['description']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($laboratory['Educator']['first_name'].' '.$laboratory['Educator']['last_name'], 
						array('controller' => 'employees', 'action' => 'view', $laboratory['Educator']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Html->link($laboratory['Expert']['first_name'].' '.$laboratory['Expert']['last_name'], 
						array('controller' => 'employees', 'action' => 'view', $laboratory['Expert']['id'])); ?>
			</td>
			<td><?php echo h($laboratory['Laboratory']['observator']); ?>&nbsp;</td>
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

		
</div>
