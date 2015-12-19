<div class="observators form">
<?php echo $this->Form->create('Observator'); ?>
	<fieldset>
		<legend><?php echo __('Edit Observator'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('observation_date');
		echo $this->Form->input('laboratory_id');
		echo $this->Form->input('meeting_id');
		echo $this->Form->input('name');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Observator.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Observator.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Observators'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Laboratories'), array('controller' => 'laboratories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory'), array('controller' => 'laboratories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
	</ul>
</div>
