<div class="studentGrades view">
<h2><?php  echo __('Student Grade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($studentGrade['StudentGrade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($studentGrade['StudentGrade']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($studentGrade['StudentGrade']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentGrade['Student']['student_name'], array('controller' => 'students', 'action' => 'view', $studentGrade['Student']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($studentGrade['StudentGrade']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($studentGrade['StudentGrade']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($studentGrade['StudentGrade']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed'); ?></dt>
		<dd>
			<?php echo h($studentGrade['StudentGrade']['trashed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($studentGrade['StudentGrade']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($studentGrade['StudentGrade']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed By'); ?></dt>
		<dd>
			<?php echo h($studentGrade['StudentGrade']['trashed_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($studentGrade['StudentGrade']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student Grade'), array('action' => 'edit', $studentGrade['StudentGrade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student Grade'), array('action' => 'delete', $studentGrade['StudentGrade']['id']), null, __('Are you sure you want to delete # %s?', $studentGrade['StudentGrade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Grades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Grade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
