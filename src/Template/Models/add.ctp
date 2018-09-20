<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Model $model
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Models'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Makes'), ['controller' => 'Makes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Make'), ['controller' => 'Makes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cars'), ['controller' => 'Cars', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="models form large-9 medium-8 columns content">
    <?= $this->Form->create($model) ?>
    <fieldset>
        <legend><?= __('Add Model') ?></legend>
        <?php
            echo $this->Form->control('make_id', ['options' => $makes]);
            echo $this->Form->control('model_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
