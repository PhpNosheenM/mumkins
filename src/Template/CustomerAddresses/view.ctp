<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerAddress $customerAddress
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer Address'), ['action' => 'edit', $customerAddress->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer Address'), ['action' => 'delete', $customerAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerAddress->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customer Addresses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Address'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customerAddresses view large-9 medium-8 columns content">
    <h3><?= h($customerAddress->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($customerAddress->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile Number') ?></th>
            <td><?= h($customerAddress->mobile_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $customerAddress->has('state') ? $this->Html->link($customerAddress->state->name, ['controller' => 'States', 'action' => 'view', $customerAddress->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= $customerAddress->has('city') ? $this->Html->link($customerAddress->city->name, ['controller' => 'Cities', 'action' => 'view', $customerAddress->city->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $customerAddress->has('customer') ? $this->Html->link($customerAddress->customer->id, ['controller' => 'Customers', 'action' => 'view', $customerAddress->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customerAddress->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pincode') ?></th>
            <td><?= $this->Number->format($customerAddress->pincode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Default') ?></th>
            <td><?= $this->Number->format($customerAddress->is_default) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($customerAddress->is_deleted) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($customerAddress->address)); ?>
    </div>
</div>
