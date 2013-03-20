<div class="row-fluid">
	<div id="actions" class="span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit Grade'), array('action' => 'edit', $grade['Grade']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete Grade'), array('action' => 'delete', $grade['Grade']['id']), null, __('Are you sure you want to delete # %s?', $grade['Grade']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List Grades'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Grade'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Take Attendances'), array('controller' => 'attendances', 'action' => 'take', $grade['Grade']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		</ul>
	</div>

<div id="grades" class="span5">
	<h2><?php  echo __('Grade') .' '. $grade['Grade']['grade_number']. $grade['Grade']['grade_code']; ?></h2>
		<dl class="dl-horizontal">
			<dt><?php echo __('School'); ?></dt>
			<dd>
				<?php echo $this->Html->link($grade['School']['name'], array('controller' => 'schools', 'action' => 'view', $grade['School']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Course Code'); ?></dt>
			<dd>
				<?php echo $this->Html->link($grade['CourseCode']['value'], array('controller' => 'course_codes', 'action' => 'view', $grade['CourseCode']['id'])); ?>
				&nbsp;
			</dd>
	<!--		<dt><?php echo __('Created'); ?></dt>
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
			</dd> -->
			<dt><?php echo __('Note'); ?></dt>
			<dd>
				<?php echo h($grade['Grade']['note']); ?>
				&nbsp;
			</dd> 
		</dl>
	</div>

	<div id="related" class="span4">
		<h3><?php echo __('Related Students'); ?></h3>
		<?php if (!empty($grade['Student'])): ?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php echo __('Name'); ?></th>
			<th><?php echo __('Date Of Birth'); ?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($grade['Student'] as $student): ?>
			<tr>
				<td><?php echo $this->Html->link($student['first_name'].' '.$student['last_name'], 
					array('controller' => 'students', 'action' => 'view', $student['id'])); ?></td>
				<td><?php echo $student['date_of_birth']; ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php else: ?>
		<div class="alert alert-info">
        	<?php echo __('There are no students yet associated with this grade') ?>
        </div>
        <?php echo $this->Html->link(__('Add Student'), 
        		array('controller' => 'Students', 'action' => 'add'),
        		array( 'class' => 'btn btn-primary'));
        endif; ?>

	</div>
</div>

