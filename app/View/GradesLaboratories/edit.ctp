<div class="gradesLaboratories form">
<?php echo $this->Form->create('GradesLaboratory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Grades Laboratory'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('grade_id');
		echo $this->Form->input('laboratory_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GradesLaboratory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('GradesLaboratory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Grades Laboratories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratories'), array('controller' => 'laboratories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory'), array('controller' => 'laboratories', 'action' => 'add')); ?> </li>
	</ul>
</div>
