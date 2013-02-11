<!-- File: /app/View/Attendance/take.ctp -->

<!-- 
    GESTIONE DELLE ASSENZE
    Created 10/2012 by Lucia Moreno 
-->

<h2>Assenze del giorno: <?php echo date('d/m/y');?></h2>
<!--<?php echo $this->Html->link('Aggiungi Studente', array('controller' => 'students', 'action' => 'add')); ?>-->
<?php 
    echo $this->Form->create('Attendance');
?>

<script type="text/javascript">
    
    $(document).ready(function() {
        for (var i = $('input:checked').length - 1; i >= 0; i--) {
            var curr_check = $('input:checked')[i];
            //alert(curr_check.id);
            if($('#'+curr_check.id).parent().hasClass('late'))
                $('#'+curr_check.id).parent().parent().css('background-color', '#FFCC99')
            else if($('#'+curr_check.id).parent().hasClass('absent'))
                $('#'+curr_check.id).parent().parent().css('background-color', '#FFCCCC')
        };
    });

    function checkAbsence(id){
        if($('#Attendance'+id+'Absent').is(':checked'))
            $('#student'+id).css('background-color', '#FFCCCC');
        else
            $('#student'+id).css('background-color', '');
    }
    function checkLate(id){
        if($('#Attendance'+id+'Late').is(':checked'))
            $('#student'+id).css('background-color', '#FFCC99');
        else
            $('#student'+id).css('background-color', '');
    }
);

</script>
 
<table>
    <thead>
    <tr>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Classe</th>
        <th>Assenza</th>
        <th>Ritardo</th>
        <th>Motivo</th>
    </tr>
    </thead>
    <tbody>
    <?php 
        //debug($[students]);
        $i = $j = 0; 
        foreach ($students as $student):

            // campi nascosti per salvare l'id dello studente e la data
            echo $this->Form->hidden('Attendance.'.$i.'.student_id', array('default' => $student['Student']['id'])); 
            echo $this->Form->hidden('Attendance.'.$i.'.grade_id', array('default' => $student['Student']['grade_id'])); 
            echo $this->Form->hidden('Attendance.'.$i.'.month_date', array('default' => date('Y-m-d') )); 
            echo $this->Form->hidden('Attendance.'.$i.'.id',
                    array( 'value' => $student['TodayAttendance']['id'] )); ?>

            <tr <?php echo 'id=student'.$i?> >
                <td><?php echo $student['Student']['first_name']; ?></td>
                <td><?php echo $student['Student']['last_name']; ?></td>
                <td><?php echo $student['Grade']['grade_number'].$student['Grade']['grade_code'] ; ?></td>
                <td class='absent'>
                    <?php echo $this->Form->checkbox('Attendance.'.$i.'.absent', 
                        array(  'onClick' => 'javascript:checkAbsence(\''.$i.'\')', 
                                'checked' => $student['TodayAttendance']['absent'] )); ?>
                </td>
                <td class='late'>
                    <?php echo $this->Form->checkbox('Attendance.'.$i.'.late',
                        array(  'onClick' => 'javascript:checkLate(\''.$i.'\')',
                                'checked' => $student['TodayAttendance']['late'] )); ?>
                </td>
                <td>
                    <?php echo $this->Form->text('Attendance.'.$i.'.reason',
                    array( 'value' => $student['TodayAttendance']['reason'] )); ?>
                </td>
            </tr>
    <?php 
            $i++;
        endforeach; 
    ?>
    </tbody>
    
    <?php echo $this->Form->end('Salva'); ?>

    <?php unset($student); ?>
</table>