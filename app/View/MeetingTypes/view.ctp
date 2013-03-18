<div class="meetingTypes view">
<h2><?php  echo __('Meeting Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($meetingType['MeetingType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($meetingType['MeetingType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($meetingType['MeetingType']['notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Meeting Type'), array('action' => 'edit', $meetingType['MeetingType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Meeting Type'), array('action' => 'delete', $meetingType['MeetingType']['id']), null, __('Are you sure you want to delete # %s?', $meetingType['MeetingType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Meeting Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Meetings'); ?></h3>
	<?php if (!empty($meetingType['Meeting'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Meeting Date'); ?></th>
		<th><?php echo __('Meeting Type Id'); ?></th>
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
		foreach ($meetingType['Meeting'] as $meeting): ?>
		<tr>
			<td><?php echo $meeting['id']; ?></td>
			<td><?php echo $meeting['meeting_date']; ?></td>
			<td><?php echo $meeting['meeting_type_id']; ?></td>
			<td><?php echo $meeting['created']; ?></td>
			<td><?php echo $meeting['modified']; ?></td>
			<td><?php echo $meeting['trashed']; ?></td>
			<td><?php echo $meeting['created_by']; ?></td>
			<td><?php echo $meeting['modified_by']; ?></td>
			<td><?php echo $meeting['trashed_by']; ?></td>
			<td><?php echo $meeting['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'meetings', 'action' => 'view', $meeting['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'meetings', 'action' => 'edit', $meeting['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'meetings', 'action' => 'delete', $meeting['id']), null, __('Are you sure you want to delete # %s?', $meeting['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
