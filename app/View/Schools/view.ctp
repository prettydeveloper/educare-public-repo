<div class="schools view">
<h2><?php  echo __('School'); ?></h2>
	<dl class="dl-horizontal">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($school['School']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($school['School']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School Code'); ?></dt>
		<dd>
			<?php echo h($school['School']['school_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($school['School']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zipcode'); ?></dt>
		<dd>
			<?php echo h($school['School']['zipcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($school['School']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($school['School']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number 1'); ?></dt>
		<dd>
			<?php echo h($school['School']['phone_number_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number 2'); ?></dt>
		<dd>
			<?php echo h($school['School']['phone_number_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($school['School']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($school['School']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed'); ?></dt>
		<dd>
			<?php echo h($school['School']['trashed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($school['School']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($school['School']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed By'); ?></dt>
		<dd>
			<?php echo h($school['School']['trashed_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($school['School']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit School'), array('action' => 'edit', $school['School']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete School'), array('action' => 'delete', $school['School']['id']), null, __('Are you sure you want to delete # %s?', $school['School']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Grades'); ?></h3>
	<?php if (!empty($school['Grade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('School Id'); ?></th>
		<th><?php echo __('Grade Number'); ?></th>
		<th><?php echo __('Grade Code'); ?></th>
		<th><?php echo __('Course Code'); ?></th>
<!--		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Trashed'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Trashed By'); ?></th> -->
		<th><?php echo __('Note'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($school['Grade'] as $grade): ?>
		<tr>
			<td><?php echo $grade['id']; ?></td>
			<td><?php echo $grade['school_id']; ?></td>
			<td><?php echo $grade['grade_number']; ?></td>
			<td><?php echo $grade['grade_code']; ?></td>
			<td><?php echo $grade['CourseCode']['value']; ?></td>
<!--			<td><?php echo $grade['created']; ?></td>
			<td><?php echo $grade['modified']; ?></td>
			<td><?php echo $grade['trashed']; ?></td>
			<td><?php echo $grade['created_by']; ?></td>
			<td><?php echo $grade['modified_by']; ?></td>
			<td><?php echo $grade['trashed_by']; ?></td> -->
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
