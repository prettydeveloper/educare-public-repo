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

    function checkLaboratoryPresence(id, type){
        if(type == 'present') {
            if($('#LaboratoryAttendance'+id+'Present').is(':checked')){
                $('#student'+id).css('background-color', '#CCFFCE');
                $('#LaboratoryAttendance'+id+'Absent').attr('checked',false);
                $('#LaboratoryAttendance'+id+'Late').attr('checked',false);
            } else {
                $('#student'+id).css('background-color', '');
            }
        } else if (type == 'absent') {
            if($('#LaboratoryAttendance'+id+'Absent').is(':checked')){
                $('#student'+id).css('background-color', '#FFCCCC');
                $('#LaboratoryAttendance'+id+'Present').attr('checked',false);
                $('#LaboratoryAttendance'+id+'Late').attr('checked',false);
            }else{
                $('#student'+id).css('background-color', '');
            }
        } else if (type == 'late') {
            if($('#LaboratoryAttendance'+id+'Late').is(':checked')){
                $('#student'+id).css('background-color', '#FFCC99');
                $('#LaboratoryAttendance'+id+'Present').attr('checked',false);
                $('#LaboratoryAttendance'+id+'Absent').attr('checked',false); 
            }else{
                $('#student'+id).css('background-color', '');
            }
        }
    }

    function checkEducatorPresence(type){
        if(type == 'present') {
            if($('#EducatorAttendancePresent').is(':checked')){
                $('#EducatorAttendanceAbsent').attr('checked',false);
            }
        } else if (type == 'absent') {
            if($('#EducatorAttendanceAbsent').is(':checked')){
                $('#EducatorAttendancePresent').attr('checked',false);
            }
        }
    }

    function checkExpertPresence(type){
        if(type == 'present') {
            if($('#ExpertAttendancePresent').is(':checked')){
                $('#ExpertAttendanceAbsent').attr('checked',false);
            }
        } else if (type == 'absent') {
            if($('#ExpertAttendanceAbsent').is(':checked')){
                $('#ExpertAttendancePresent').attr('checked',false);
            }
        }
    }

    function submitDate(){
        var date = $('#attendance_date').val();
        var grade_id = <?php echo $grade['Grade']['id']?>;
        var laboratory_id = <?php echo $laboratory['Laboratory']['id']?>;
        //alert('attendances/take/'+grade_id+'/'+date);
        var path='<?php echo $this->webroot ?>';
        if(date)
        window.location.href = path+'laboratoryAttendances/take/'+grade_id+'/'+laboratory_id+'/'+date;
    }

    function showGrades(){
        $('#grades').show('slow');
        $('#laboratories').hide('slow');
    }

    function showLaboratories(){
        $('#laboratories').show('slow');
        $('#grades').hide('slow');
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
    <div class="span4 well">
        <div class="row-fluid">
            <div class="span12"> 
                <h5><?php echo $laboratory['Laboratory']['name'] ?></h5>
                <?php echo $this->Html->link(__('Change'),'#', 
                    array(  'class' => 'btn btn-small btn-inline', 
                            'id' => 'btn_lab')); ?>
            </div>
        </div>
        <div id="laboratories" class="row-fluid" style="display:none"></div>
        <div class="row-fluid">
            <div class="span12"> 
                <h5><?php echo __('Grade') .' '. $grade['Grade']['grade_number'].$grade['Grade']['grade_code'] ?></h5>
                <?php echo $this->Html->link(__('Change'),'#', 
                    array(  'class' => 'btn btn-small btn-inline', 
                            'id' => 'btn_grade')); ?>
            </div>
        </div>
        <div id="grades" class="row-fluid">&nbsp;</div>
        <div class="row-fluid">
            <div class="span12"> 
                <h5><?php echo $grade['School']['name'] ?></h5>
                <?php echo $this->Html->link(__('Change'), 
                    array(  'controller' => 'LaboratoryAttendances', 
                            'action' => 'selectSchool'),
                    array(  'class' => 'btn btn-small btn-inline')); ?>
            </div>
        </div>
    </div>
    <div class="span8 well">
        <h4><?php echo __('Attendances of the day:');?> 
            <input type="text" name="attendance_date" id="attendance_date" class="datepicker"
                size="12" value="<?php echo $attendance_date ?>">
            <a href="javascript:submitDate()" class="btn btn-small btn-inline">Vai</a>
        </h4>
    
<!--<?php debug($grade) ?>-->

<?php if(!empty($students)) {

    echo $this->Form->create('LaboratoryAttendance');

    /* hidden fields for eployees attendances*/
    echo $this->Form->hidden('EducatorAttendance.employee_id', array('default' => $laboratory['Educator']['id'])); 
    echo $this->Form->hidden('EducatorAttendance.laboratory_id', array('default' => $laboratory['Laboratory']['id']));
    echo $this->Form->hidden('EducatorAttendance.attendance_date', array('default' => date('Y-m-d',strtotime($attendance_date)) )); 
    echo $this->Form->hidden('EducatorAttendance.id', array( 'value' => $educator_attendance['EmployeeAttendance']['id'] ));

    echo $this->Form->hidden('ExpertAttendance.employee_id', array('default' => $laboratory['Expert']['id'])); 
    echo $this->Form->hidden('ExpertAttendance.laboratory_id', array('default' => $laboratory['Laboratory']['id']));
    echo $this->Form->hidden('ExpertAttendance.attendance_date', array('default' => date('Y-m-d',strtotime($attendance_date)) )); 
    echo $this->Form->hidden('ExpertAttendance.id', array( 'value' => $expert_attendance['EmployeeAttendance']['id'] ));

    echo $this->Form->hidden('Observator.laboratory_id', array('default' => $laboratory['Laboratory']['id']));
    echo $this->Form->hidden('Observator.observation_date', array('default' => date('Y-m-d',strtotime($attendance_date)) )); 
    echo $this->Form->hidden('Observator.id', array('default' => $observator['Observator']['id']));
?>
        <table>
            <tr>
                <td><strong><?php echo __('Eudcator:') ?></strong></td>
                <td>
                    <?php echo $this->Html->link($laboratory['Educator']['first_name'].' '.$laboratory['Educator']['last_name'], 
                        array('controller' => 'Employees', 'action' => 'view', $laboratory['Educator']['id'])); ?>
                </td>
                <td>
                    <?php echo '&nbsp;'.__('present');
                    echo $this->Form->checkbox('EducatorAttendance.present', 
                                    array(  'checked' => $educator_attendance['EmployeeAttendance']['present'],
                                            'onClick' => 'javascript:checkEducatorPresence(\'present\')' ));?>
                </td>
                <td>
                    <?php echo '&nbsp;'.__('absent');
                    echo $this->Form->checkbox('EducatorAttendance.absent', 
                                    array(  'checked' => $educator_attendance['EmployeeAttendance']['absent'],
                                            'onClick' => 'javascript:checkEducatorPresence(\'absent\')' ));?>
                </td>
            </tr>
            <tr>
                <td><strong><?php echo __('Expert:') ?></strong> </td>
                <td>
                    <?php echo $this->Html->link($laboratory['Expert']['first_name'].' '.$laboratory['Expert']['last_name'], 
                        array('controller' => 'Employees', 'action' => 'view', $laboratory['Expert']['id'])); ?>
                </td>
                <td>
                    <?php echo '&nbsp;'.__('present');
                    echo $this->Form->checkbox('ExpertAttendance.present', 
                                    array(  'checked' => $expert_attendance['EmployeeAttendance']['present'],
                                            'onClick' => 'javascript:checkExpertPresence(\'present\')'));?>
                </td>
                <td>
                    <?php echo '&nbsp;'.__('absent');
                    echo $this->Form->checkbox('ExpertAttendance.absent', 
                                    array(  'checked' => $expert_attendance['EmployeeAttendance']['absent'],
                                            'onClick' => 'javascript:checkExpertPresence(\'absent\')' ));?>
                </td>
            </tr>
            <tr>
                <td><strong><?php echo __('Observator:') ?></strong> </td>
                <td colspan="3"><?php echo $this->Form->text('Observator.name', array('type' => 'text', 'value' => $observator['Observator']['name'])) ?></td>
            </tr>
        </table>
    </div>

</div>

<div class="row-fluid">
    <div class="span12">
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
                                array(  'onClick' => 'javascript:checkLaboratoryPresence(\''.$i.'\',\'present\')', 
                                        'checked' => $present )); ?>
                        </td>
                        <td class='absent'>
                            <?php echo $this->Form->checkbox('LaboratoryAttendance.'.$i.'.absent', 
                                array(  'onClick' => 'javascript:checkLaboratoryPresence(\''.$i.'\',\'absent\')', 
                                        'checked' => $attendances[$i]['LaboratoryAttendance']['absent'] )); ?>
                        </td>
                        <td class='late'>
                            <?php echo $this->Form->checkbox('LaboratoryAttendance.'.$i.'.late',
                                array(  'onClick' => 'javascript:checkLaboratoryPresence(\''.$i.'\',\'late\')',
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
</div>
