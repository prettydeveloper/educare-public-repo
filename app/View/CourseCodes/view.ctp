<div class="courseCodes view">
<h2><?php  echo __('Course Code'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($courseCode['CourseCode']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($courseCode['CourseCode']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($courseCode['CourseCode']['value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course Code'), array('action' => 'edit', $courseCode['CourseCode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course Code'), array('action' => 'delete', $courseCode['CourseCode']['id']), null, __('Are you sure you want to delete # %s?', $courseCode['CourseCode']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Course Codes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course Code'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Grades'); ?></h3>
	<?php if (!empty($courseCode['Grade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('School Id'); ?></th>
		<th><?php echo __('Grade Number'); ?></th>
		<th><?php echo __('Grade Code'); ?></th>
		<th><?php echo __('Course Code Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Trashed'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Trashed By'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($courseCode['Grade'] as $grade): ?>
		<tr>
			<td><?php echo $grade['id']; ?></td>
			<td><?php echo $grade['school_id']; ?></td>
			<td><?php echo $grade['grade_number']; ?></td>
			<td><?php echo $grade['grade_code']; ?></td>
			<td><?php echo $grade['course_code_id']; ?></td>
			<td><?php echo $grade['created']; ?></td>
			<td><?php echo $grade['modified']; ?></td>
			<td><?php echo $grade['trashed']; ?></td>
			<td><?php echo $grade['created_by']; ?></td>
			<td><?php echo $grade['modified_by']; ?></td>
			<td><?php echo $grade['trashed_by']; ?></td>
			<td><?php echo $grade['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'grades', 'action' => 'view', $grade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'grades', 'action' => 'edit', $grade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'grades', 'action' => 'delete', $grade['id']), null, __('Are you sure you want to delete # %s?', $grade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
