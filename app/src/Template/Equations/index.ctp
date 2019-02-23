<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equation[]|\Cake\Collection\CollectionInterface $equations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Equation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Results'), ['controller' => 'Results', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Result'), ['controller' => 'Results', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equations index large-9 medium-8 columns content">
    <h3><?= __('Equations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('result_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('token') ?></th>
                <th scope="col"><?= $this->Paginator->sort('a') ?></th>
                <th scope="col"><?= $this->Paginator->sort('b') ?></th>
                <th scope="col"><?= $this->Paginator->sort('c') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equations as $equation): ?>
            <tr>
                <td><?= $this->Number->format($equation->id) ?></td>
                <td><?= $this->Number->format($equation->result_id) ?></td>
                <td><?= h($equation->token) ?></td>
                <td><?= $this->Number->format($equation->a) ?></td>
                <td><?= $this->Number->format($equation->b) ?></td>
                <td><?= $this->Number->format($equation->c) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $equation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equation->id)]) ?>
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
