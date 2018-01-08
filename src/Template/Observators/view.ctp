<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Observator $observator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Observator'), ['action' => 'edit', $observator->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Observator'), ['action' => 'delete', $observator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $observator->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Observators'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Observator'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="observators view large-9 medium-8 columns content">
    <h3><?= h($observator->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($observator->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notes') ?></th>
            <td><?= h($observator->notes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($observator->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($observator->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($observator->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observation Date') ?></th>
            <td><?= h($observator->observation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($observator->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($observator->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= h($observator->deleted) ?></td>
        </tr>
    </table>
</div>
