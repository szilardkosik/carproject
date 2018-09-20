<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fuel $fuel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fuel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fuel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fuels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cars'), ['controller' => 'Cars', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fuels form large-9 medium-8 columns content">
    <?= $this->Form->create($fuel) ?>
    <fieldset>
        <legend><?= __('Edit Fuel') ?></legend>
        <?php
            echo $this->Form->control('fuel_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
