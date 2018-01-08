<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Observator $observator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Observators'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="observators form large-9 medium-8 columns content">
    <?= $this->Form->create($observator) ?>
    <fieldset>
        <legend><?= __('Add Observator') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('observation_date', ['empty' => true]);
            echo $this->Form->control('created_by');
            echo $this->Form->control('modified_by');
            echo $this->Form->control('deleted', ['empty' => true]);
            echo $this->Form->control('notes');
            echo $this->Form->control('testob');

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
