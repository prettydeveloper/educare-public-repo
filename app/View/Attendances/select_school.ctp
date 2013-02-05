<!-- File: /app/View/Attendance/take.ctp -->

<!-- 
    GESTIONE DELLE ASSENZE
    Created 2/2013 by Lucia Moreno 
-->

<h2><?php echo __('Select School') ?></h2>

<?php
    foreach ($schools as $school): ?>
        <a class="btn" href=>
            <?php echo h($school['Schools']['name']); ?> - 
            <?php echo h($school['Schools']['school_code']); ?>&nbsp;Circolo
        </a>
<?php endforeach; ?>

<?php unset($school); ?>
