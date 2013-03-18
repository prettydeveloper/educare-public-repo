<div class="span12">
	<h4><?php echo __('Select laboratory:') ?>
	<?php
	foreach($laboratories as $laboratory):
	$laboratory_id = $laboratory['id']; ?>
    <a class="btn btn-small btn-inline" 
    	href="<?php echo $this->Html->url(array('controller'=>'laboratoryAttendances','action'=>'take', $laboratory_id, date('d-m-Y')));?>" 
    	id="btn_<?php echo $laboratory_id ?>">
        <?php echo h($laboratory['name']); ?>
    </a>
	<?php endforeach; ?>
	</h4>
    <?php echo $this->element('sql_dump'); ?>
</div>