<div class="laboratoryAttendances view">
<h2><?php  echo __('Laboratory Attendance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($laboratoryAttendance['LaboratoryAttendance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($laboratoryAttendance['Student']['student_name'], array('controller' => 'students', 'action' => 'view', $laboratoryAttendance['Student']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attendance Date'); ?></dt>
		<dd>
			<?php echo h($laboratoryAttendance['LaboratoryAttendance']['attendance_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Laboratory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($laboratoryAttendance['Laboratory']['name'], array('controller' => 'laboratories', 'action' => 'view', $laboratoryAttendance['Laboratory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Present'); ?></dt>
		<dd>
			<?php echo h($laboratoryAttendance['LaboratoryAttendance']['present']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Absent'); ?></dt>
		<dd>
			<?php echo h($laboratoryAttendance['LaboratoryAttendance']['absent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Late'); ?></dt>
		<dd>
			<?php echo h($laboratoryAttendance['LaboratoryAttendance']['late']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reason'); ?></dt>
		<dd>
			<?php echo h($laboratoryAttendance['LaboratoryAttendance']['reason']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($laboratoryAttendance['LaboratoryAttendance']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($laboratoryAttendance['LaboratoryAttendance']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed'); ?></dt>
		<dd>
			<?php echo h($laboratoryAttendance['LaboratoryAttendance']['trashed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($laboratoryAttendance['LaboratoryAttendance']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($laboratoryAttendance['LaboratoryAttendance']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed By'); ?></dt>
		<dd>
			<?php echo h($laboratoryAttendance['LaboratoryAttendance']['trashed_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($laboratoryAttendance['LaboratoryAttendance']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Laboratory Attendance'), array('action' => 'edit', $laboratoryAttendance['LaboratoryAttendance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Laboratory Attendance'), array('action' => 'delete', $laboratoryAttendance['LaboratoryAttendance']['id']), null, __('Are you sure you want to delete # %s?', $laboratoryAttendance['LaboratoryAttendance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratory Attendances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory Attendance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratories'), array('controller' => 'laboratories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory'), array('controller' => 'laboratories', 'action' => 'add')); ?> </li>
	</ul>
</div>
