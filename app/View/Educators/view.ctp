<div class="educators view">
<h2><?php  echo __('Educator'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Name'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['middle_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zipcode'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['zipcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number 1'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['phone_number_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number 2'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['phone_number_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number 3'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['phone_number_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qualification'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['qualification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Experience'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['experience']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Education'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['education']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resume'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['resume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['trashed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trashed By'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['trashed_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($educator['Educator']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Educator'), array('action' => 'edit', $educator['Educator']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Educator'), array('action' => 'delete', $educator['Educator']['id']), null, __('Are you sure you want to delete # %s?', $educator['Educator']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Educators'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educator'), array('action' => 'add')); ?> </li>
	</ul>
</div>
