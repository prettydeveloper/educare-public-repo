<div class="gradeCodes form">
<?php echo $this->Form->create('GradeCode'); ?>
	<fieldset>
		<legend><?php echo __('Add Grade Code'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Grade Codes'), array('action' => 'index')); ?></li>
	</ul>
</div>
