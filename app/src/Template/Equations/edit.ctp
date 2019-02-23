<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equation $equation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $equation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $equation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Equations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Results'), ['controller' => 'Results', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Result'), ['controller' => 'Results', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equations form large-9 medium-8 columns content">
    <?= $this->Form->create($equation) ?>
    <fieldset>
        <legend><?= __('Edit Equation') ?></legend>
        <?php
            echo $this->Form->control('result_id');
            echo $this->Form->control('token');
            echo $this->Form->control('a');
            echo $this->Form->control('b');
            echo $this->Form->control('c');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
