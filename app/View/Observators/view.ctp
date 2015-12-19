<div class="observators view">
<h2><?php  echo __('Observator'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($observator['Observator']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observation Date'); ?></dt>
		<dd>
			<?php echo h($observator['Observator']['observation_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Laboratory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($observator['Laboratory']['name'], array('controller' => 'laboratories', 'action' => 'view', $observator['Laboratory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($observator['Meeting']['id'], array('controller' => 'meetings', 'action' => 'view', $observator['Meeting']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($observator['Observator']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($observator['Observator']['notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Observator'), array('action' => 'edit', $observator['Observator']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Observator'), array('action' => 'delete', $observator['Observator']['id']), null, __('Are you sure you want to delete # %s?', $observator['Observator']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Observators'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Observator'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratories'), array('controller' => 'laboratories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory'), array('controller' => 'laboratories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
	</ul>
</div>
