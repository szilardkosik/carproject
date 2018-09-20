<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Car'), ['action' => 'edit', $car->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Car'), ['action' => 'delete', $car->id], ['confirm' => __('Are you sure you want to delete # {0}?', $car->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cars'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Car'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cars view large-9 medium-8 columns content">
    <h3><?= h($car->make->make_name.' '.$car->model->model_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Lp Number') ?></th>
            <td><?= h($car->lp_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $car->has('user') ? $this->Html->link($car->user->name, ['controller' => 'Users', 'action' => 'view', $car->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($car->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Make') ?></th>
            <td><?= $car->make->make_name ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Model') ?></th>
            <td><?= $car->model->model_name ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fuel') ?></th>
            <td><?= $car->fuel->fuel_name ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($car->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ceated') ?></th>
            <td><?= h($car->ceated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($car->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Comments') ?></h4>
        <?php if (!empty($car->comments)): ?>
        
            <?php foreach ($car->comments as $comment): ?>
            <div class="row comment">
                
                <div class="row comment_text"><q><?= h($comment->comment) ?></q></div>                
                <div class="row comment_ts"><?= h($comment->created) ?></div>
                
                
            </div>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>

        <?= $this->Form->create(null, [
            'url' => ['controller' => 'Comments', 'action' => 'add']
        ]) ?>
        <fieldset>
            <legend><?= __('Add Comment') ?></legend>
            <?php
                echo $this->Form->hidden('car_id', ['value' => $car->id]); 
                echo $this->Form->control('comment', ['value' => '']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>

    </div>
    
</div>
