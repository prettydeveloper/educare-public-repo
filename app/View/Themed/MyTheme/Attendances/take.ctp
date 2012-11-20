<!-- File: /app/View/Attendance/take.ctp -->

<!-- 
    GESTIONE DELLE ASSENZE
    Created 10/2012 by Lucia Moreno 
-->

<h1>Assenze del giorno: <?php echo date('d/m/y');?></h1>
<!--<?php echo $this->Html->link('Aggiungi Studente', array('controller' => 'students', 'action' => 'add')); ?>-->
<?php 
    echo $this->Form->create('Attendance');
?>
<table>
    <tr>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Classe</th>
        <th>Assente</th>
        <th>Ritardo</th>
        <th>Motivo</th>
    </tr>

    <?php 
        $i = $j = 0; 
        foreach ($students as $student):
            // campi nascosti per salvare l'id dello studente e la data
            echo $this->Form->hidden('Attendance.'.$i.'.student_id', array('default' => $student['Student']['id'])); 
            echo $this->Form->hidden('Attendance.'.$i.'.grade_id', array('default' => $student['Student']['grade_id'])); 
            echo $this->Form->hidden('Attendance.'.$i.'.month_date', array('default' => date('Y-m-d') )); 
            echo $this->Form->hidden('Attendance.'.$i.'.id'); ?>
            <tr>
                <td><?php echo $student['Student']['first_name']; ?></td>
                <td><?php echo $student['Student']['last_name']; ?></td>
                <td><?php echo $student['Grade']['descrizione'].' '.$student['Grade']['numero'].$student['Grade']['sezione'] ; ?></td>
                <td>
                    <?php echo $this->Form->checkbox('Attendance.'.$i.'.absent') ?>
                </td>
                <td>
                    <?php echo $this->Form->checkbox('Attendance.'.$i.'.late') ?>
                </td>
                <td>
                    <?php echo $this->Form->text('Attendance.'.$i.'.reason') ?>
                </td>
            </tr>
    <?php 
            $i++;
        endforeach; 
    ?>

<?php echo $this->Form->end('Salva'); ?>


    <?php unset($student); ?>
</table>