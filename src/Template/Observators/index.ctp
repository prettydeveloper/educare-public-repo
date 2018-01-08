<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Observator[]|\Cake\Collection\CollectionInterface $observators
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Observator'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="observators index large-9 medium-8 columns content">
    <h3><?= __('Observators') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observation_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($observators as $observator): ?>
            <tr>
                <td><?= $this->Number->format($observator->id) ?></td>
                <td><?= h($observator->name) ?></td>
                <td><?= h($observator->observation_date) ?></td>
                <td><?= h($observator->created) ?></td>
                <td><?= h($observator->modified) ?></td>
                <td><?= $this->Number->format($observator->created_by) ?></td>
                <td><?= $this->Number->format($observator->modified_by) ?></td>
                <td><?= h($observator->deleted) ?></td>
                <td><?= h($observator->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $observator->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $observator->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $observator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $observator->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
