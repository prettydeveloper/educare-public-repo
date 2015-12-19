<div class="gradesLaboratories view">
<h2><?php  echo __('Grades Laboratory'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gradesLaboratory['GradesLaboratory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gradesLaboratory['Grade']['grade_name'], array('controller' => 'grades', 'action' => 'view', $gradesLaboratory['Grade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Laboratory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gradesLaboratory['Laboratory']['name'], array('controller' => 'laboratories', 'action' => 'view', $gradesLaboratory['Laboratory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grades Laboratory'), array('action' => 'edit', $gradesLaboratory['GradesLaboratory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grades Laboratory'), array('action' => 'delete', $gradesLaboratory['GradesLaboratory']['id']), null, __('Are you sure you want to delete # %s?', $gradesLaboratory['GradesLaboratory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grades Laboratories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grades Laboratory'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratories'), array('controller' => 'laboratories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory'), array('controller' => 'laboratories', 'action' => 'add')); ?> </li>
	</ul>
</div>
