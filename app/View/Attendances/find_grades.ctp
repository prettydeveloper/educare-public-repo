<h2><?php echo __('Select Class') ?></h2>

<?php foreach($grades as $grade):

	$grade_id = $grade['Grades']['id']; ?>

    <a class="btn" 
    	href="<?php echo $this->Html->url(array('controller'=>'attendances','action'=>'take', $grade_id));?>" 
    	id="btn_<?php echo $grade_id ?>">
        <?php echo h($grade['Grades']['grade_number']); ?>
        <?php echo h($grade['Grades']['grade_code']); ?>
    </a>

    <?php 
endforeach; ?>