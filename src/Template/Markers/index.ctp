<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marker[]|\Cake\Collection\CollectionInterface $markers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Marker'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="markers index large-9 medium-8 columns content">
    <h3><?= __('Markers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dayweek') ?></th>
                <th scope="col"><?= $this->Paginator->sort('departuretime') ?></th>
                <th scope="col"><?= $this->Paginator->sort('returntime') ?></th>
                <th scope="col"><?= $this->Paginator->sort('destiny') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($markers as $marker): ?>
            <tr>
                <td><?= $this->Number->format($marker->id) ?></td>
                <td><?= h($marker->name) ?></td>
                <td><?= h($marker->address) ?></td>
                <td><?= h($marker->dayweek) ?></td>
                <td><?= h($marker->departuretime) ?></td>
                <td><?= h($marker->returntime) ?></td>
                <td><?= h($marker->destiny) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $marker->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $marker->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $marker->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marker->id)]) ?>
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