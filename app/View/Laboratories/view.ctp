<div class="row-fluid">
	<div id="actions" class="span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit Laboratory'), array('action' => 'edit', $laboratory['Laboratory']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete Laboratory'), array('action' => 'delete', $laboratory['Laboratory']['id']), null, __('Are you sure you want to delete # %s?', $laboratory['Laboratory']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List Laboratories'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Laboratory'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		</ul>
	</div>

	<div id="laboratories" class="span4">
	<h2><?php  echo __('Laboratory'); ?></h2>
		<dl class="dl-horizontal">
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($laboratory['Laboratory']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Description'); ?></dt>
			<dd>
				<?php echo h($laboratory['Laboratory']['description']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Educator'); ?></dt>
			<dd>
				<?php echo $this->Html->link($laboratory['Educator']['first_name'].' '.$laboratory['Educator']['last_name'], 
					array('controller' => 'employees', 'action' => 'view', $laboratory['Educator']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Expert'); ?></dt>
			<dd>
				<?php echo $this->Html->link($laboratory['Expert']['first_name'].' '.$laboratory['Expert']['last_name'], 
					array('controller' => 'employees', 'action' => 'view', $laboratory['Expert']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Observator'); ?></dt>
			<dd>
				<?php echo h($laboratory['Laboratory']['observator']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Starting Date'); ?></dt>
			<dd>
				<?php echo h($laboratory['Laboratory']['starting_date']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Finishing Date'); ?></dt>
			<dd>
				<?php echo h($laboratory['Laboratory']['finishing_date']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($laboratory['Laboratory']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($laboratory['Laboratory']['modified']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created By'); ?></dt>
			<dd>
				<?php echo h($laboratory['Laboratory']['created_by']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified By'); ?></dt>
			<dd>
				<?php echo h($laboratory['Laboratory']['modified_by']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Note'); ?></dt>
			<dd>
				<?php echo h($laboratory['Laboratory']['note']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
			
	<div id="related" class="span6">
		
		<h3><?php echo __('Related Grades'); ?></h3>
		<?php if (!empty($laboratory['Grade'])): ?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php echo __('School Id'); ?></th>
			<th><?php echo __('Grade'); ?></th>
			<th><?php echo __('Course Code Id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($laboratory['Grade'] as $grade): ?>
			<tr>
				<td><?php echo $grade['school_id']; ?></td>
				<td><?php echo $grade['grade_number'].$grade['grade_code']; ?></td>
				<td><?php echo $grade['course_code_id']; ?></td>
				<td><?php echo $this->Html->link(__('Take Laboratory Attendance'), 
					array('controller' => 'laboratory_attendances', 'action' => 'take', $grade['id'], $laboratory['Laboratory']['id'], date('d-m-Y')),
					array('class' => 'btn btn-small')); ?> </li>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>
</div>
