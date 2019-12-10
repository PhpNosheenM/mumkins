<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $order->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer Addresses'), ['controller' => 'CustomerAddresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer Address'), ['controller' => 'CustomerAddresses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order Details'), ['controller' => 'OrderDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Detail'), ['controller' => 'OrderDetails', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orders form large-9 medium-8 columns content">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Edit Order') ?></legend>
        <?php
            echo $this->Form->control('transaction_order_no');
            echo $this->Form->control('order_no');
            echo $this->Form->control('customer_id', ['options' => $customers]);
            echo $this->Form->control('customer_address_id', ['options' => $customerAddresses, 'empty' => true]);
            echo $this->Form->control('amount_from_promo_code');
            echo $this->Form->control('total_amount');
            echo $this->Form->control('grand_total');
            echo $this->Form->control('pay_amount');
            echo $this->Form->control('online_amount');
            echo $this->Form->control('delivery_charge');
            echo $this->Form->control('delivery_charge_id');
            echo $this->Form->control('promo_code_id');
            echo $this->Form->control('payment_type');
            echo $this->Form->control('delivery_date');
            echo $this->Form->control('actual_deliver_time');
            echo $this->Form->control('delivery_time');
            echo $this->Form->control('order_status');
            echo $this->Form->control('current_date');
            echo $this->Form->control('payment_status');
            echo $this->Form->control('order_from');
            echo $this->Form->control('order_date');
            echo $this->Form->control('order_time');
            echo $this->Form->control('cancel_date', ['empty' => true]);
            echo $this->Form->control('cancel_from');
            echo $this->Form->control('reason_of_cancel');
            echo $this->Form->control('tracking_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
