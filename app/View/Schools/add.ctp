<div class="row-fluid">
	<div id="actions" class="span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List Schools'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?></li>
		</ul>
	</div>

	<div id="schools" class="span10">
	<?php echo $this->Form->create('School'); ?>
		<fieldset>
			<legend><?php echo __('Add School'); ?></legend>
		<?php
			echo $this->Form->input('name');
			echo $this->Form->input('school_code');
			echo $this->Form->input('address');
			echo $this->Form->input('zipcode');
			echo $this->Form->input('city');
			echo $this->Form->input('state');
			echo $this->Form->input('phone_number_1');
			echo $this->Form->input('phone_number_2');
			echo $this->Form->input('note', array('type' => 'textarea'));
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>

</div>

