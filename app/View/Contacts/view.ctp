<div class="contacts view">
<h2><?php  echo __('Contact'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E Mail'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['e_mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['trashed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed By'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['trashed_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact'), array('action' => 'edit', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact'), array('action' => 'delete', $contact['Contact']['id']), null, __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Schools'); ?></h3>
	<?php if (!empty($contact['School'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('School Code'); ?></th>
		<th><?php echo __('Contact Id'); ?></th>
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
		foreach ($contact['School'] as $school): ?>
		<tr>
			<td><?php echo $school['id']; ?></td>
			<td><?php echo $school['name']; ?></td>
			<td><?php echo $school['school_code']; ?></td>
			<td><?php echo $school['contact_id']; ?></td>
			<td><?php echo $school['created']; ?></td>
			<td><?php echo $school['modified']; ?></td>
			<td><?php echo $school['trashed']; ?></td>
			<td><?php echo $school['created_by']; ?></td>
			<td><?php echo $school['modified_by']; ?></td>
			<td><?php echo $school['trashed_by']; ?></td>
			<td><?php echo $school['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'schools', 'action' => 'view', $school['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'schools', 'action' => 'edit', $school['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'schools', 'action' => 'delete', $school['id']), null, __('Are you sure you want to delete # %s?', $school['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Students'); ?></h3>
	<?php if (!empty($contact['Student'])): ?>
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
		foreach ($contact['Student'] as $student): ?>
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
