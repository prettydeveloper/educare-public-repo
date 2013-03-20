<div class="row-fluid">
	<div id="actions" class="span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit School'), array('action' => 'edit', $school['School']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete School'), array('action' => 'delete', $school['School']['id']), null, __('Are you sure you want to delete # %s?', $school['School']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List Schools'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New School'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		</ul>
	</div>

	<!--<?php debug('modified_by') ?>-->
	<div id="schools" class="span5">
	<h2><?php echo h($school['School']['name']); ?></h2>
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
			<dt><?php echo __('Created By'); ?></dt>
			<dd>
				<?php echo h($created_by['User']['username']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified By'); ?></dt>
			<dd>
				<?php echo h($modified_by['User']['username']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Note'); ?></dt>
			<dd>
				<?php echo h($school['School']['note']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div id="related" class="span4">
		<h4><?php echo __('Related Grades'); ?></h4>
		<?php if (!empty($grades)) { ?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php echo __('Grade'); ?></th>
			<th><?php echo __('Course Code'); ?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($grades as $grade): ?>
			<tr>	
				<td><?php echo $this->Html->link($grade['Grade']['grade_number'].$grade['Grade']['grade_code'], 
					array('controller' => 'grades', 'action' => 'view', $grade['Grade']['id'])); ?>
				</td>
				<td><?php echo $grade['CourseCode']['value']; ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php } else { ?>
		<div class="alert alert-info">
        	<?php echo __('There are no grades yet associated with this school') ?>
        </div>
        <?php echo $this->Html->link(__('Add Grade'), 
        		array('controller' => 'Grades', 'action' => 'add'),
        		array( 'class' => 'btn btn-primary'));
        } ?>
	</div>
</div>
