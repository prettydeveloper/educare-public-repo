<!-- File: /app/View/Attendance/take.ctp -->

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
        if($('#Attendance'+id+'Present').is(':checked')){
            $('#student'+id).css('background-color', '#CCFFCE');
            $('#Attendance'+id+'Absent').attr('checked',false);
            $('#Attendance'+id+'Late').attr('checked',false);
        } else {
            $('#student'+id).css('background-color', '');
        }
    }

    function checkAbsence(id){
        if($('#Attendance'+id+'Absent').is(':checked')){
            $('#student'+id).css('background-color', '#FFCCCC');
            $('#Attendance'+id+'Present').attr('checked',false);
            $('#Attendance'+id+'Late').attr('checked',false);
        }else{
            $('#student'+id).css('background-color', '');
        }
    }

    function checkLate(id){
        if($('#Attendance'+id+'Late').is(':checked')){
            $('#student'+id).css('background-color', '#FFCC99');
            $('#Attendance'+id+'Present').attr('checked',false);
            $('#Attendance'+id+'Absent').attr('checked',false); 
        }else{
            $('#student'+id).css('background-color', '');
        }
    }

    function submitDate(){
        var date = $('#attendance_date').val();
        var grade_id = <?php echo $grade['Grade']['id']?>;
        //alert('attendances/take/'+grade_id+'/'+date);
        var path=<?php echo $this->webroot ?>;
        if(date)
        window.location.href = path+'attendances/take/'+grade_id+'/'+date;
    }

    function showGrades(){
        $('#grades').toggle('slow');
    }
</script>
<?php         // Javascript for AJAX calls
    $this->Js->get('#btn_grade');
    $this->Js->event('click', 
        $this->Js->request(
            array('controller' => 'attendances', 'action' => 'findGrades', $grade['School']['id']),
            array('async' => true, 'update' => '#grades', 'complete' => 'showGrades()')));
?>
<div class="row-fluid">
    <div class="span2"> 
        <h4><?php echo __('Grade') .' '. $grade['Grade']['grade_number'].$grade['Grade']['grade_code'] ?></h4>
        <?php echo $this->Html->link(__('Change grade'),'#', 
            array(  'class' => 'btn btn-small btn-inline', 
                    'id' => 'btn_grade'));
        ?>
    </div>
    <div class="span2">
        <h4><?php echo $grade['School']['name'] ?></h4>
        <?php echo $this->Html->link(__('Change school'), 
            array(  'controller' => 'Attendances', 
                    'action' => 'selectSchool'),
            array(  'class' => 'btn btn-small btn-inline')); ?>
    </div>
</div>
<div class="row-fluid" id="grades">&nbsp;</div>
<div>
<h4><?php echo __('Attendances of the day:');?> 
    <input type="text" name="attendance_date" id="attendance_date" class="datepicker"
        size="12" value="<?php echo $attendance_date ?>">
    <a href="javascript:submitDate()" class="btn btn-small btn-inline">Vai</a>
</h4>
</div>
<!--<?php debug($grade) ?>-->


<?php if(!empty($students)) {

    echo $this->Form->create('Attendance');?>
 
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

            echo $this->Form->hidden('Attendance.'.$i.'.student_id', array('default' => $student['Student']['id']));
            echo $this->Form->hidden('Attendance.'.$i.'.grade_id', array('default' => $student['Student']['grade_id'])); 
            echo $this->Form->hidden('Attendance.'.$i.'.attendance_date', 
                array('default' => date('Y-m-d',strtotime($attendance_date)) )); 
            echo $this->Form->hidden('Attendance.'.$i.'.id', array( 'value' => $attendances[$i]['Attendance']['id'] )); ?>

            <tr <?php echo 'id=student'.$i?> >
                <td><?php echo $student['Student']['first_name']; ?></td>
                <td><?php echo $student['Student']['last_name']; ?></td>
                <td><?php echo $student['Grade']['grade_number'].$student['Grade']['grade_code'] ; ?></td>
                <td class='present'>
                    <?php 
                        $present = 1;
                        if(!empty($attendances[$i])){$present = $attendances[$i]['Attendance']['present'];}
                        echo $this->Form->checkbox('Attendance.'.$i.'.present', 
                        array(  'onClick' => 'javascript:checkPresence(\''.$i.'\')', 
                                'checked' => $present )); ?>
                </td>
                <td class='absent'>
                    <?php echo $this->Form->checkbox('Attendance.'.$i.'.absent', 
                        array(  'onClick' => 'javascript:checkAbsence(\''.$i.'\')', 
                                'checked' => $attendances[$i]['Attendance']['absent'] )); ?>
                </td>
                <td class='late'>
                    <?php echo $this->Form->checkbox('Attendance.'.$i.'.late',
                        array(  'onClick' => 'javascript:checkLate(\''.$i.'\')',
                                'checked' => $attendances[$i]['Attendance']['late'] )); ?>
                </td>
                <td>
                    <?php echo $this->Form->text('Attendance.'.$i.'.reason',
                    array( 'value' => $attendances[$i]['Attendance']['reason'] )); ?>
                </td>
            </tr>
    <?php 
            $i++;
        endforeach; 
    ?>
    </tbody>
</table>
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
