<!-- File: /app/View/Attendance/take.ctp -->

<!-- 
    GESTIONE DELLE ASSENZE
    Created 2/2013 by Lucia Moreno 
-->

<div id="schools">
    <h3><?php echo __('Select School') ?></h3>

    <?php
        foreach ($schools as $school): 
            
           $school_id = $school['Schools']['id']; ?>

            <a class="btn" href="#" id="btn_<?php echo $school_id ?>">
                <?php echo h($school['Schools']['name']); ?> - 
                <?php echo h($school['Schools']['school_code']); ?>&nbsp;Circolo
            </a>

            <?php // Javascript for AJAX calls

            $this->Js->get('#btn_'.$school_id);
            $this->Js->event('click', 
                $this->Js->request(
                    array('controller' => 'attendances', 'action' => 'findGrades', $school_id),
                    array('async' => true, 'update' => '#grades')
                )
            ) ;

        endforeach; ?>
</div>

<div id="grades"></div>
<div id="students"></div>

<?php 
    echo $this->Js->writeBuffer(); // Write cached scripts
?>

<?php unset($school); ?>
