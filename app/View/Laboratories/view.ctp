<div class="laboratories view">
<h2><?php  echo __('Laboratory'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($laboratory['Laboratory']['id']); ?>
			&nbsp;
		</dd>
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
		<dt><?php echo __('Trashed'); ?></dt>
		<dd>
			<?php echo h($laboratory['Laboratory']['trashed']); ?>
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
		<dt><?php echo __('Trashed By'); ?></dt>
		<dd>
			<?php echo h($laboratory['Laboratory']['trashed_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($laboratory['Laboratory']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Laboratory'), array('action' => 'edit', $laboratory['Laboratory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Laboratory'), array('action' => 'delete', $laboratory['Laboratory']['id']), null, __('Are you sure you want to delete # %s?', $laboratory['Laboratory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Laboratories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory'), array('action' => 'add')); ?> </li>
	</ul>
</div>
