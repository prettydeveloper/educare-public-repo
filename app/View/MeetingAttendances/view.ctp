<div class="meetingAttendances view">
<h2><?php  echo __('Meeting Attendance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($meetingAttendance['MeetingAttendance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meetingAttendance['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $meetingAttendance['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attendance Date'); ?></dt>
		<dd>
			<?php echo h($meetingAttendance['MeetingAttendance']['attendance_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meetingAttendance['Meeting']['id'], array('controller' => 'meetings', 'action' => 'view', $meetingAttendance['Meeting']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Present'); ?></dt>
		<dd>
			<?php echo h($meetingAttendance['MeetingAttendance']['present']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Absent'); ?></dt>
		<dd>
			<?php echo h($meetingAttendance['MeetingAttendance']['absent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Late'); ?></dt>
		<dd>
			<?php echo h($meetingAttendance['MeetingAttendance']['late']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reason'); ?></dt>
		<dd>
			<?php echo h($meetingAttendance['MeetingAttendance']['reason']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($meetingAttendance['MeetingAttendance']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($meetingAttendance['MeetingAttendance']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed'); ?></dt>
		<dd>
			<?php echo h($meetingAttendance['MeetingAttendance']['trashed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($meetingAttendance['MeetingAttendance']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($meetingAttendance['MeetingAttendance']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed By'); ?></dt>
		<dd>
			<?php echo h($meetingAttendance['MeetingAttendance']['trashed_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($meetingAttendance['MeetingAttendance']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Meeting Attendance'), array('action' => 'edit', $meetingAttendance['MeetingAttendance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Meeting Attendance'), array('action' => 'delete', $meetingAttendance['MeetingAttendance']['id']), null, __('Are you sure you want to delete # %s?', $meetingAttendance['MeetingAttendance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Meeting Attendances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting Attendance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
	</ul>
</div>
