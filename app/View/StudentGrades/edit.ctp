<div class="studentGrades form">
<?php echo $this->Form->create('StudentGrade'); ?>
	<fieldset>
		<legend><?php echo __('Edit Student Grade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('value');
		echo $this->Form->input('description');
		echo $this->Form->input('student_id');
		echo $this->Form->input('date');
		echo $this->Form->input('trashed');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('trashed_by');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StudentGrade.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('StudentGrade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Student Grades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
