<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Make $make
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $make->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $make->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Makes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cars'), ['controller' => 'Cars', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Models'), ['controller' => 'Models', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Model'), ['controller' => 'Models', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="makes form large-9 medium-8 columns content">
    <?= $this->Form->create($make) ?>
    <fieldset>
        <legend><?= __('Edit Make') ?></legend>
        <?php
            echo $this->Form->control('make_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
