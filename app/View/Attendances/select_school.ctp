<!-- File: /app/View/Attendance/take.ctp -->

<!-- 
    GESTIONE DELLE ASSENZE
    Created 2/2013 by Lucia Moreno 
-->

<h2>__('Select School')</h2>
<?php 

    foreach ($schools as $school): ?>
        <h4><?php echo h($school['School']['name']); ?>&nbsp;</h4>
        <h4><?php echo h($school['School']['school_code']); ?>&nbsp;Circolo</h4>
    <?php endforeach; ?>

    <?php unset($school); ?>
</table>