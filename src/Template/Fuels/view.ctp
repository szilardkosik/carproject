<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fuel $fuel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fuel'), ['action' => 'edit', $fuel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fuel'), ['action' => 'delete', $fuel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fuel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fuels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fuel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cars'), ['controller' => 'Cars', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fuels view large-9 medium-8 columns content">
    <h3><?= h($fuel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fuel Name') ?></th>
            <td><?= h($fuel->fuel_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fuel->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cars') ?></h4>
        <?php if (!empty($fuel->cars)): ?>
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
            <?php foreach ($fuel->cars as $cars): ?>
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
</div>
