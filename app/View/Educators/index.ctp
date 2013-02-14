<div class="educators index">
	<h2><?php echo __('Educators'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_number_1'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_number_2'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_number_3'); ?></th>
			<th><?php echo $this->Paginator->sort('qualification'); ?></th>
			<th><?php echo $this->Paginator->sort('experience'); ?></th>
			<th><?php echo $this->Paginator->sort('education'); ?></th>
			<th><?php echo $this->Paginator->sort('resume'); ?></th>
			<th><?php echo $this->Paginator->sort('link'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('trashed'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('trashed_by'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($educators as $educator): ?>
	<tr>
		<td><?php echo h($educator['Educator']['id']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['middle_name']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['address']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['zipcode']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['city']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['state']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['phone_number_1']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['phone_number_2']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['phone_number_3']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['qualification']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['experience']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['education']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['resume']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['link']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['created']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['modified']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['trashed']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['trashed_by']); ?>&nbsp;</td>
		<td><?php echo h($educator['Educator']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $educator['Educator']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $educator['Educator']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $educator['Educator']['id']), null, __('Are you sure you want to delete # %s?', $educator['Educator']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Educator'), array('action' => 'add')); ?></li>
	</ul>
</div>
