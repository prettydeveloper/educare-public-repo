<div class="row-fluid">
	<div id="actions" class="span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Student.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Student.id'))); ?></li>
			<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Attendances'), array('controller' => 'attendances', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Attendance'), array('controller' => 'attendances', 'action' => 'add')); ?> </li>
		</ul>
	</div>

	<div id="students" class="span10">
	<?php echo $this->Form->create('Student'); ?>
		<fieldset>
			<legend><?php echo __('Edit Student'); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('first_name');
			echo $this->Form->input('last_name');
			echo $this->Form->input('grade_id');
			echo $this->Form->input('date_of_birth', 
				array(	'dateFormat' => 'DMY',
						'minYear' => date('Y') - 30,
						'maxYear' => date('Y') - 6,));
			echo $this->Form->input('address');
			echo $this->Form->input('zipcode');
			echo $this->Form->input('city');
			echo $this->Form->input('state');
			echo $this->Form->input('phone_number_1');
			echo $this->Form->input('phone_number_2');
			echo $this->Form->input('phone_number_3');
			echo $this->Form->input('note');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
