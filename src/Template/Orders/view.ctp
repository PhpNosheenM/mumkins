<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Addresses'), ['controller' => 'CustomerAddresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Address'), ['controller' => 'CustomerAddresses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order Details'), ['controller' => 'OrderDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Detail'), ['controller' => 'OrderDetails', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orders view large-9 medium-8 columns content">
    <h3><?= h($order->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Transaction Order No') ?></th>
            <td><?= h($order->transaction_order_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order No') ?></th>
            <td><?= h($order->order_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $order->has('customer') ? $this->Html->link($order->customer->id, ['controller' => 'Customers', 'action' => 'view', $order->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Address') ?></th>
            <td><?= $order->has('customer_address') ? $this->Html->link($order->customer_address->name, ['controller' => 'CustomerAddresses', 'action' => 'view', $order->customer_address->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Type') ?></th>
            <td><?= h($order->payment_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actual Deliver Time') ?></th>
            <td><?= h($order->actual_deliver_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Time') ?></th>
            <td><?= h($order->delivery_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order Status') ?></th>
            <td><?= h($order->order_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Status') ?></th>
            <td><?= h($order->payment_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order From') ?></th>
            <td><?= h($order->order_from) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cancel From') ?></th>
            <td><?= h($order->cancel_from) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reason Of Cancel') ?></th>
            <td><?= h($order->reason_of_cancel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tracking Id') ?></th>
            <td><?= h($order->tracking_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($order->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount From Promo Code') ?></th>
            <td><?= $this->Number->format($order->amount_from_promo_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Amount') ?></th>
            <td><?= $this->Number->format($order->total_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grand Total') ?></th>
            <td><?= $this->Number->format($order->grand_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pay Amount') ?></th>
            <td><?= $this->Number->format($order->pay_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Online Amount') ?></th>
            <td><?= $this->Number->format($order->online_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Charge') ?></th>
            <td><?= $this->Number->format($order->delivery_charge) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Charge Id') ?></th>
            <td><?= $this->Number->format($order->delivery_charge_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Promo Code Id') ?></th>
            <td><?= $this->Number->format($order->promo_code_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Date') ?></th>
            <td><?= h($order->delivery_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Current Date') ?></th>
            <td><?= h($order->current_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order Date') ?></th>
            <td><?= h($order->order_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cancel Date') ?></th>
            <td><?= h($order->cancel_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Order Time') ?></h4>
        <?= $this->Text->autoParagraph(h($order->order_time)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Order Details') ?></h4>
        <?php if (!empty($order->order_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Item Row Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Rate') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Net Amount') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->order_details as $orderDetails): ?>
            <tr>
                <td><?= h($orderDetails->id) ?></td>
                <td><?= h($orderDetails->order_id) ?></td>
                <td><?= h($orderDetails->item_id) ?></td>
                <td><?= h($orderDetails->item_row_id) ?></td>
                <td><?= h($orderDetails->quantity) ?></td>
                <td><?= h($orderDetails->rate) ?></td>
                <td><?= h($orderDetails->amount) ?></td>
                <td><?= h($orderDetails->net_amount) ?></td>
                <td><?= h($orderDetails->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrderDetails', 'action' => 'view', $orderDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrderDetails', 'action' => 'edit', $orderDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrderDetails', 'action' => 'delete', $orderDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
