<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equation $equation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Equation'), ['action' => 'edit', $equation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equation'), ['action' => 'delete', $equation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Equations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Results'), ['controller' => 'Results', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Result'), ['controller' => 'Results', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="equations view large-9 medium-8 columns content">
    <h3><?= h($equation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Token') ?></th>
            <td><?= h($equation->token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($equation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Result Id') ?></th>
            <td><?= $this->Number->format($equation->result_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('A') ?></th>
            <td><?= $this->Number->format($equation->a) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('B') ?></th>
            <td><?= $this->Number->format($equation->b) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C') ?></th>
            <td><?= $this->Number->format($equation->c) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Results') ?></h4>
        <?php if (!empty($equation->results)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Result Type Id') ?></th>
                <th scope="col"><?= __('Equation Id') ?></th>
                <th scope="col"><?= __('X1') ?></th>
                <th scope="col"><?= __('X2') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col"><?= __('Count') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($equation->results as $results): ?>
            <tr>
                <td><?= h($results->id) ?></td>
                <td><?= h($results->result_type_id) ?></td>
                <td><?= h($results->equation_id) ?></td>
                <td><?= h($results->x1) ?></td>
                <td><?= h($results->x2) ?></td>
                <td><?= h($results->message) ?></td>
                <td><?= h($results->count) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Results', 'action' => 'view', $results->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Results', 'action' => 'edit', $results->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Results', 'action' => 'delete', $results->id], ['confirm' => __('Are you sure you want to delete # {0}?', $results->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
