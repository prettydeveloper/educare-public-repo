<h4><?php echo __('Select grade:') ?>
<?php foreach($grades as $grade):

	$grade_id = $grade['Grades']['id']; ?>

    <a class="btn btn-small btn-inline" 
    	href="<?php echo $this->Html->url(array('controller'=>'attendances','action'=>'take', $grade_id, date('d-m-Y')));?>" 
    	id="btn_<?php echo $grade_id ?>">
        <?php echo h($grade['Grades']['grade_number']); ?>
        <?php echo h($grade['Grades']['grade_code']); ?>
    </a>

    <?php 
endforeach; ?>
</h4>