<div class="grades view">
<h2><?php  echo __('Grade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grade['School']['name'], array('controller' => 'schools', 'action' => 'view', $grade['School']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grade Number'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['grade_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grade Code'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['grade_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course Code'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['course_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['trashed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed By'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['trashed_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($grade['Grade']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grade'), array('action' => 'edit', $grade['Grade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grade'), array('action' => 'delete', $grade['Grade']['id']), null, __('Are you sure you want to delete # %s?', $grade['Grade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Students'); ?></h3>
	<?php if (!empty($grade['Student'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Middle Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Grade Id'); ?></th>
		<th><?php echo __('Contact Id'); ?></th>
		<th><?php echo __('Date Of Birth'); ?></th>
		<th><?php echo __('Contact 1 Id'); ?></th>
		<th><?php echo __('Contact 2 Id'); ?></th>
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
		foreach ($grade['Student'] as $student): ?>
		<tr>
			<td><?php echo $student['id']; ?></td>
			<td><?php echo $student['first_name']; ?></td>
			<td><?php echo $student['middle_name']; ?></td>
			<td><?php echo $student['last_name']; ?></td>
			<td><?php echo $student['grade_id']; ?></td>
			<td><?php echo $student['contact_id']; ?></td>
			<td><?php echo $student['date_of_birth']; ?></td>
			<td><?php echo $student['contact_1_id']; ?></td>
			<td><?php echo $student['contact_2_id']; ?></td>
			<td><?php echo $student['created']; ?></td>
			<td><?php echo $student['modified']; ?></td>
			<td><?php echo $student['trashed']; ?></td>
			<td><?php echo $student['created_by']; ?></td>
			<td><?php echo $student['modified_by']; ?></td>
			<td><?php echo $student['trashed_by']; ?></td>
			<td><?php echo $student['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'students', 'action' => 'view', $student['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'students', 'action' => 'edit', $student['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'students', 'action' => 'delete', $student['id']), null, __('Are you sure you want to delete # %s?', $student['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
