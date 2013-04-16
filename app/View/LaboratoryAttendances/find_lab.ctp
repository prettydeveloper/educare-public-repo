<div class="span12">
	<?php if(!empty($laboratories)) { ?>
		<h5><?php echo __('Select laboratory:') ?>
		<?php
		foreach($laboratories as $laboratory):
		$laboratory_id = $laboratory['id']; ?>
	    <a class="btn btn-small btn-inline" 
	    	href="<?php echo $this->Html->url(array('controller'=>'laboratoryAttendances','action'=>'take', $grade_id, $laboratory_id, date('d-m-Y')));?>" 
	    	id="btn_<?php echo $laboratory_id ?>">
	        <?php echo h($laboratory['name']); ?>
	    </a>
		<?php endforeach; ?>
		</h5>
	<?php } else { ?>
		<div class="alert alert-info">
        	<?php echo __('There are no laboratories yet associated with this grade') ?>
        </div>
        <?php echo $this->Html->link(__('Add Laboratory'), 
        		array('controller' => 'Laboratories', 'action' => 'add'),
        		array(  'class' => 'btn btn-primary'));
    } ?>
</div>