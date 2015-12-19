<div class="row-fluid">
	<div id="actions" class="span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List Laboratories'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		</ul>
	</div>

	<div id="laboratories" class="span10">
	<?php echo $this->Form->create('Laboratory'); ?>
		<fieldset>
			<legend><?php echo __('Add Laboratory'); ?></legend>
		<?php
			echo $this->Form->input('name');
			echo $this->Form->input('description');
			echo $this->Form->input('employee_id_1');
			echo $this->Form->input('employee_id_2');
			echo $this->Form->input('observator');
			//echo $this->Form->input('starting_date');
			//echo $this->Form->input('finishing_date');
			echo $this->Form->input('note', array('type' => 'textarea'));
			echo $this->Form->input('Grade');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>
