<div class="attendances view">
<h2><?php  echo __('Attendance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attendance['Student']['id'], array('controller' => 'students', 'action' => 'view', $attendance['Student']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attendance Date'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['attendance_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attendance['Grade']['id'], array('controller' => 'grades', 'action' => 'view', $attendance['Grade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Present'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['present']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Absent'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['absent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Late'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['late']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reason'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['reason']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['trashed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed By'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['trashed_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($attendance['Attendance']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Attendance'), array('action' => 'edit', $attendance['Attendance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attendance'), array('action' => 'delete', $attendance['Attendance']['id']), null, __('Are you sure you want to delete # %s?', $attendance['Attendance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
	</ul>
</div>
