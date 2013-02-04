<div class="gradeCodes view">
<h2><?php  echo __('Grade Code'); ?></h2>
	<dl class="dl-horizontal">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gradeCode['GradeCode']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($gradeCode['GradeCode']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($gradeCode['GradeCode']['value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grade Code'), array('action' => 'edit', $gradeCode['GradeCode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grade Code'), array('action' => 'delete', $gradeCode['GradeCode']['id']), null, __('Are you sure you want to delete # %s?', $gradeCode['GradeCode']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grade Codes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade Code'), array('action' => 'add')); ?> </li>
	</ul>
</div>
