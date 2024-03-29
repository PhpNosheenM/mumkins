<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderDetail $orderDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orderDetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orderDetail->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Order Details'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Item Rows'), ['controller' => 'ItemRows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item Row'), ['controller' => 'ItemRows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderDetails form large-9 medium-8 columns content">
    <?= $this->Form->create($orderDetail) ?>
    <fieldset>
        <legend><?= __('Edit Order Detail') ?></legend>
        <?php
            echo $this->Form->control('order_id', ['options' => $orders]);
            echo $this->Form->control('item_id', ['options' => $items]);
            echo $this->Form->control('item_row_id', ['options' => $itemRows]);
            echo $this->Form->control('quantity');
            echo $this->Form->control('rate');
            echo $this->Form->control('amount');
            echo $this->Form->control('net_amount');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
