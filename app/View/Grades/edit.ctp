<div class="row-fluid">
	<div id="actions" class="span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Grade.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Grade.id'))); ?></li>
			<li><?php echo $this->Html->link(__('List Grades'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		</ul>
	</div>

	<div id="grades" class="span10">
	<?php echo $this->Form->create('Grade'); ?>
		<fieldset>
			<legend><?php echo __('Edit Grade'); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('school_id');
			echo $this->Form->input('grade_number');
			echo $this->Form->input('grade_code');
			echo $this->Form->input('course_code_id');
			echo $this->Form->input('note');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>