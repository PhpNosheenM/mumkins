<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomerAddress $customerAddress
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Customer Addresses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerAddresses form large-9 medium-8 columns content">
    <?= $this->Form->create($customerAddress) ?>
    <fieldset>
        <legend><?= __('Add Customer Address') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('mobile_number');
            echo $this->Form->control('address');
            echo $this->Form->control('state_id', ['options' => $states]);
            echo $this->Form->control('city_id', ['options' => $cities]);
            echo $this->Form->control('pincode');
            echo $this->Form->control('is_default');
            echo $this->Form->control('is_deleted');
            echo $this->Form->control('customer_id', ['options' => $customers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
