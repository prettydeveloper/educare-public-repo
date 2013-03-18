<!-- File: /app/View/Attendance/select_school.ctp -->

<!-- 
    Selezione scuole
    Created 2/2013 by Lucia Moreno 
-->
<script type="text/javascript">
    function showGrades(){
        $('#grades').show('slow');
        $('#laboratories').hide('slow');
    }

    function showLaboratories(){
        $('#laboratories').show('slow');
    }
</script>
<div id="schools" class="row-fluid">
    <div class="span12">
        <h3><?php echo __('Select School') ?></h3>

        <?php
            foreach ($schools as $school): 
                
               $school_id = $school['Schools']['id']; ?>

                <a class="btn" href="#" id="btn_<?php echo $school_id ?>">
                    <?php echo h($school['Schools']['name']); ?> - 
                    <?php echo h($school['Schools']['school_code']); ?>&nbsp;Circolo
                </a>

                <?php
                // Javascript for AJAX calls
                $this->Js->get('#btn_'.$school_id);
                $this->Js->event('click', 
                    $this->Js->request(
                        array('controller' => 'laboratoryAttendances', 'action' => 'findGrades', $school_id),
                        array('async' => true, 'update' => '#grades', 'complete' => 'showGrades()')
                    )
                );
            endforeach; 
        ?>
    </div>
</div>

<div id="grades" class="row-fluid" style="display:none"></div>
<div id="laboratories" class="row-fluid" style="display:none"></div>

<?php 
    echo $this->Js->writeBuffer(); // Write cached scripts
?>

<?php unset($school); ?>
