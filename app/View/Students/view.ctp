<div class="row-fluid">
	<div id="actions" class="span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit Student'), array('action' => 'edit', $student['Student']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete Student'), array('action' => 'delete', $student['Student']['id']), null, __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Attendances'), array('controller' => 'attendances', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Attendance'), array('controller' => 'attendances', 'action' => 'add')); ?> </li>
		</ul>
	</div>

	<div id="students" class="span5">
	<h2><?php  echo __('Student'); ?></h2>
		<dl class="dl-horizontal">
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($student['Student']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('First Name'); ?></dt>
			<dd>
				<?php echo h($student['Student']['first_name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Last Name'); ?></dt>
			<dd>
				<?php echo h($student['Student']['last_name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Grade'); ?></dt>
			<dd>
				<?php echo $this->Html->link($student['Grade']['grade_name'], array('controller' => 'grades', 'action' => 'view', $student['Grade']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Date Of Birth'); ?></dt>
			<dd>
				<?php echo h($student['Student']['date_of_birth']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Address'); ?></dt>
			<dd>
				<?php echo h($student['Student']['address']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Zipcode'); ?></dt>
			<dd>
				<?php echo h($student['Student']['zipcode']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('City'); ?></dt>
			<dd>
				<?php echo h($student['Student']['city']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('State'); ?></dt>
			<dd>
				<?php echo h($student['Student']['state']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Phone Number 1'); ?></dt>
			<dd>
				<?php echo h($student['Student']['phone_number_1']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Phone Number 2'); ?></dt>
			<dd>
				<?php echo h($student['Student']['phone_number_2']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Phone Number 3'); ?></dt>
			<dd>
				<?php echo h($student['Student']['phone_number_3']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($student['Student']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($student['Student']['modified']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Trashed'); ?></dt>
			<dd>
				<?php echo h($student['Student']['trashed']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created By'); ?></dt>
			<dd>
				<?php echo h($student['Student']['created_by']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified By'); ?></dt>
			<dd>
				<?php echo h($student['Student']['modified_by']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Trashed By'); ?></dt>
			<dd>
				<?php echo h($student['Student']['trashed_by']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Note'); ?></dt>
			<dd>
				<?php echo h($student['Student']['note']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>

	<div id="related" class="span4">
		<h4><?php echo __('Absences'); ?></h4>
		<?php if (!empty($student['Absence'])): ?>
			<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Absence Date'); ?></th>
				<th><?php echo __('Reason'); ?></th>
			</tr>
			<?php
				$i = 0;
				foreach ($student['Absence'] as $attendance): ?>
				<tr>
					<td><?php echo $attendance['attendance_date']; ?></td>
					<td><?php echo $attendance['reason']; ?></td>
				</tr>
			<?php endforeach; ?>
			</table>
		<?php elseif (!empty($student['Late'])): ?>
			<h4><?php echo __('Late'); ?></h4>
			<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __('Late Date'); ?></th>
				<th><?php echo __('Reason'); ?></th>
			</tr>
			<?php
				$i = 0;
				foreach ($student['Late'] as $attendance): ?>
				<tr>
					<td><?php echo $attendance['attendance_date']; ?></td>
					<td><?php echo $attendance['reason']; ?></td>
				</tr>
			<?php endforeach; ?>
			</table>
		<?php else: ?>
			<div class="alert alert-info">
		        <?php echo __('There are no attendances yet associated with this student') ?>
		    </div>
	        	<?php echo $this->Html->link(__('New Attendance'), 
	        		array('controller' => 'attendances', 'action' => 'add'),
	        		array( 'class' => 'btn btn-primary')); ?> 
		<?php endif; ?>
	</div>
</div>
