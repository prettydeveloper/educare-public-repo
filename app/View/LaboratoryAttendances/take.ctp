<!-- File: /app/View/LaboratoryAttendance/take.ctp -->

<!-- 
    GESTIONE DELLE ASSENZE
    Created 10/2012 by Lucia Moreno 
-->

<script type="text/javascript">
    
    $(document).ready(function() {
        for (var i = $('input:checked').length - 1; i >= 0; i--) {
            var curr_check = $('input:checked')[i];
            //alert(curr_check.id);
            if($('#'+curr_check.id).parent().hasClass('late'))
                $('#'+curr_check.id).parent().parent().css('background-color', '#FFCC99')
            else if($('#'+curr_check.id).parent().hasClass('absent'))
                $('#'+curr_check.id).parent().parent().css('background-color', '#FFCCCC')
            else if($('#'+curr_check.id).parent().hasClass('present'))
                $('#'+curr_check.id).parent().parent().css('background-color', '#CCFFCE')
        };

        // enabling datepicker
        $('.datepicker').datepicker({ format:'dd-mm-yyyy', language:'it' });
        $('#grades').hide();

    });

    function checkPresence(id){
        if($('#LaboratoryAttendance'+id+'Present').is(':checked')){
            $('#student'+id).css('background-color', '#CCFFCE');
            $('#LaboratoryAttendance'+id+'Absent').attr('checked',false);
            $('#LaboratoryAttendance'+id+'Late').attr('checked',false);
        } else {
            $('#student'+id).css('background-color', '');
        }
    }

    function checkAbsence(id){
        if($('#LaboratoryAttendance'+id+'Absent').is(':checked')){
            $('#student'+id).css('background-color', '#FFCCCC');
            $('#LaboratoryAttendance'+id+'Present').attr('checked',false);
            $('#LaboratoryAttendance'+id+'Late').attr('checked',false);
        }else{
            $('#student'+id).css('background-color', '');
        }
    }

    function checkLate(id){
        if($('#LaboratoryAttendance'+id+'Late').is(':checked')){
            $('#student'+id).css('background-color', '#FFCC99');
            $('#LaboratoryAttendance'+id+'Present').attr('checked',false);
            $('#LaboratoryAttendance'+id+'Absent').attr('checked',false); 
        }else{
            $('#student'+id).css('background-color', '');
        }
    }

    function submitDate(){
        var date = $('#attendance_date').val();
        var grade_id = <?php echo $grade['Grade']['id']?>;
        var laboratory_id = <?php echo $laboratory['Laboratory']['id']?>;
        //alert('attendances/take/'+grade_id+'/'+date);
        var path=<?php echo $this->webroot ?>;
        if(date)
        window.location.href = path+'laboratoryAttendances/take/'+grade_id+'/'+laboratory_id+'/'+date;
    }

    function showGrades(){
        $('#grades').show('slow');
        $('#laboratories').hide('slow');
    }

    function showLaboratories(){
        $('#laboratories').show('slow');
    }

</script>
<?php         // Javascript for AJAX calls
    $this->Js->get('#btn_grade');
    $this->Js->event('click', 
        $this->Js->request(
            array('controller' => 'LaboratoryAttendances', 'action' => 'findGrades', $grade['School']['id']),
            array('async' => true, 'update' => '#grades', 'complete' => 'showGrades()')));

    // Javascript for AJAX calls
    $this->Js->get('#btn_lab');
    $this->Js->event('click', 
        $this->Js->request(
            array('controller' => 'laboratoryAttendances', 'action' => 'findLab', $grade['Grade']['id']),
            array('async' => true, 'update' => '#laboratories', 'complete' => 'showLaboratories()')
        )
    );
?>
<div class="row-fluid">    
    <div class="span2"> 
        <h4><?php echo $laboratory['Laboratory']['name'] ?></h4>
        <?php echo $this->Html->link(__('Change'),'#', 
            array(  'class' => 'btn btn-small btn-inline', 
                    'id' => 'btn_lab'));
        ?>
    </div>
    <div class="span2"> 
        <h4><?php echo __('Grade') .' '. $grade['Grade']['grade_number'].$grade['Grade']['grade_code'] ?></h4>
        <?php echo $this->Html->link(__('Change'),'#', 
            array(  'class' => 'btn btn-small btn-inline', 
                    'id' => 'btn_grade'));
        ?>
    </div>
    <div class="span2">
        <h4><?php echo $grade['School']['name'] ?></h4>
        <?php echo $this->Html->link(__('Change'), 
            array(  'controller' => 'LaboratoryAttendances', 
                    'action' => 'selectSchool'),
            array(  'class' => 'btn btn-small btn-inline')); ?>
    </div>
</div> 
<div id="grades" class="row-fluid">&nbsp;</div>
<div id="laboratories" class="row-fluid" style="display:none"></div>
<div class="row-fluid">
    <div class="span4">
        <p><strong><?php echo __('Eudcator:') ?></strong> 
            <?php echo $this->Html->link($laboratory['Educator']['first_name'].' '.$laboratory['Educator']['last_name'], 
                array('controller' => 'Employees', 'action' => 'view', $laboratory['Educator']['id'])); ?>
        </p>
        <p><strong><?php echo __('Expert:') ?></strong> 
            <?php echo $this->Html->link($laboratory['Expert']['first_name'].' '.$laboratory['Expert']['last_name'], 
                array('controller' => 'Employees', 'action' => 'view', $laboratory['Expert']['id'])); ?>
        </p>
        <p><strong><?php echo __('Observator:') ?></strong> <?php echo $laboratory['Laboratory']['observator'] ?></p>
    </div>
</div>
<div class="row-fluid">
<h4><?php echo __('Laboratory attendances of the day:');?> 
    <input type="text" name="attendance_date" id="attendance_date" class="datepicker"
        size="12" value="<?php echo $attendance_date ?>">
    <a href="javascript:submitDate()" class="btn btn-small btn-inline">Vai</a>
</h4>
</div>
<!--<?php debug($grade) ?>-->

<div class="row-fluid
<?php if(!empty($students)) {

    echo $this->Form->create('LaboratoryAttendance');?>
 
<table>
    <thead>
    <tr>    
        <th><?php echo __('First Name');?></th>
        <th><?php echo __('Last Name');?></th>
        <th><?php echo __('Grade');?></th>
        <th><?php echo __('Present');?></th>
        <th><?php echo __('Absent');?></th>
        <th><?php echo __('Late');?></th>
        <th><?php echo __('Reason');?></th>
    </tr>
    </thead>
    <tbody>
    <?php 
        //debug($attendances);
        $i = 0;
        foreach ($students as $student):

            // campi nascosti per salvare l'id dello studente e la data
            echo $this->Form->hidden('LaboratoryAttendance.'.$i.'.student_id', array('default' => $student['Student']['id'])); 
            echo $this->Form->hidden('LaboratoryAttendance.'.$i.'.laboratory_id', array('default' => $laboratory['Laboratory']['id'])); 
            echo $this->Form->hidden('LaboratoryAttendance.'.$i.'.attendance_date', 
                array('default' => date('Y-m-d',strtotime($attendance_date)) )); 
            echo $this->Form->hidden('LaboratoryAttendance.'.$i.'.id', array( 'value' => $attendances[$i]['LaboratoryAttendance']['id'] )); ?>

            <tr <?php echo 'id=student'.$i?> >
                <td><?php echo $student['Student']['first_name']; ?></td>
                <td><?php echo $student['Student']['last_name']; ?></td>
                <td><?php echo $student['Grade']['grade_number'].$student['Grade']['grade_code'] ; ?></td>
                <td class='present'>
                    <?php 
                        $present = 1;
                        if(!empty($attendances[$i])){$present = $attendances[$i]['LaboratoryAttendance']['present'];}
                        echo $this->Form->checkbox('LaboratoryAttendance.'.$i.'.present', 
                        array(  'onClick' => 'javascript:checkPresence(\''.$i.'\')', 
                                'checked' => $present )); ?>
                </td>
                <td class='absent'>
                    <?php echo $this->Form->checkbox('LaboratoryAttendance.'.$i.'.absent', 
                        array(  'onClick' => 'javascript:checkAbsence(\''.$i.'\')', 
                                'checked' => $attendances[$i]['LaboratoryAttendance']['absent'] )); ?>
                </td>
                <td class='late'>
                    <?php echo $this->Form->checkbox('LaboratoryAttendance.'.$i.'.late',
                        array(  'onClick' => 'javascript:checkLate(\''.$i.'\')',
                                'checked' => $attendances[$i]['LaboratoryAttendance']['late'] )); ?>
                </td>
                <td>
                    <?php echo $this->Form->text('LaboratoryAttendance.'.$i.'.reason',
                    array( 'value' => $attendances[$i]['LaboratoryAttendance']['reason'] )); ?>
                </td>
            </tr>
    <?php 
            $i++;
        endforeach; 
    ?>
    </tbody>
</table>
</div>
<?php 
        echo $this->Form->end('Salva');
        unset($student); 
    } else {
        echo '<div class="alert alert-info">';
        echo __('There are no students yet in this grade');
        echo '</div>';
        echo $this->Html->link(__('Add Student'), array('controller' => 'Students', 'action' => 'add'),
            array(  'class' => 'btn btn-primary'));
    }

    echo $this->Js->writeBuffer(); // Write cached scripts
?>
