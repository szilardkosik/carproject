<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Make $make
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Make'), ['action' => 'edit', $make->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Make'), ['action' => 'delete', $make->id], ['confirm' => __('Are you sure you want to delete # {0}?', $make->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Makes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Make'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cars'), ['controller' => 'Cars', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Models'), ['controller' => 'Models', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Model'), ['controller' => 'Models', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="makes view large-9 medium-8 columns content">
    <h3><?= h($make->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Make Name') ?></th>
            <td><?= h($make->make_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($make->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cars') ?></h4>
        <?php if (!empty($make->cars)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Make Id') ?></th>
                <th scope="col"><?= __('Model Id') ?></th>
                <th scope="col"><?= __('Fuel Id') ?></th>
                <th scope="col"><?= __('Lp Number') ?></th>
                <th scope="col"><?= __('Year') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Ceated') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($make->cars as $cars): ?>
            <tr>
                <td><?= h($cars->id) ?></td>
                <td><?= h($cars->make_id) ?></td>
                <td><?= h($cars->model_id) ?></td>
                <td><?= h($cars->fuel_id) ?></td>
                <td><?= h($cars->lp_number) ?></td>
                <td><?= h($cars->year) ?></td>
                <td><?= h($cars->user_id) ?></td>
                <td><?= h($cars->ceated) ?></td>
                <td><?= h($cars->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cars', 'action' => 'view', $cars->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cars', 'action' => 'edit', $cars->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cars', 'action' => 'delete', $cars->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cars->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Models') ?></h4>
        <?php if (!empty($make->models)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Make Id') ?></th>
                <th scope="col"><?= __('Model Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($make->models as $models): ?>
            <tr>
                <td><?= h($models->id) ?></td>
                <td><?= h($models->make_id) ?></td>
                <td><?= h($models->model_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Models', 'action' => 'view', $models->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Models', 'action' => 'edit', $models->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Models', 'action' => 'delete', $models->id], ['confirm' => __('Are you sure you want to delete # {0}?', $models->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
