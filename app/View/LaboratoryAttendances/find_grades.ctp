<div class="span12">
	<h4><?php echo __('Select grade:') ?>

	<?php
	foreach($grades as $grade):
	$grade_id = $grade['Grades']['id']; ?>

    <a class="btn btn-small btn-inline" href="#" id="btn_grade_<?php echo $grade_id ?>">
        <?php echo h($grade['Grades']['grade_number']); ?>
        <?php echo h($grade['Grades']['grade_code']); ?>
    </a>

	<?php 
    // Javascript for AJAX calls
    $this->Js->get('#btn_grade_'.$grade_id);
    $this->Js->event('click', 
        $this->Js->request(
            array('controller' => 'laboratoryAttendances', 'action' => 'findLab', $grade_id),
            array('async' => true, 'update' => '#laboratories', 'complete' => 'showLaboratories()')
        )
    );
    endforeach;

    echo $this->Js->writeBuffer(); // Write cached scripts

    ?>
	</h4>
</div>