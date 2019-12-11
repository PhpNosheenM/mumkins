<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\State $state
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit State'), ['action' => 'edit', $state->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete State'), ['action' => 'delete', $state->id], ['confirm' => __('Are you sure you want to delete # {0}?', $state->id)]) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Addresses'), ['controller' => 'CustomerAddresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Address'), ['controller' => 'CustomerAddresses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="states view large-9 medium-8 columns content">
    <h3><?= h($state->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($state->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delete Status') ?></th>
            <td><?= $this->Number->format($state->delete_status) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('State Code') ?></h4>
        <?= $this->Text->autoParagraph(h($state->state_code)); ?>
    </div>
    <div class="row">
        <h4><?= __('State Name') ?></h4>
        <?= $this->Text->autoParagraph(h($state->state_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Country Code') ?></h4>
        <?= $this->Text->autoParagraph(h($state->country_code)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cities') ?></h4>
        <?php if (!empty($state->cities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('City Name') ?></th>
                <th scope="col"><?= __('City Code') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('Delete Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($state->cities as $cities): ?>
            <tr>
                <td><?= h($cities->id) ?></td>
                <td><?= h($cities->city_name) ?></td>
                <td><?= h($cities->city_code) ?></td>
                <td><?= h($cities->state_id) ?></td>
                <td><?= h($cities->delete_status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cities', 'action' => 'view', $cities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cities', 'action' => 'edit', $cities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cities', 'action' => 'delete', $cities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Customer Addresses') ?></h4>
        <?php if (!empty($state->customer_addresses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Mobile Number') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('City Id') ?></th>
                <th scope="col"><?= __('Pincode') ?></th>
                <th scope="col"><?= __('Is Default') ?></th>
                <th scope="col"><?= __('Created On') ?></th>
                <th scope="col"><?= __('Edited On') ?></th>
                <th scope="col"><?= __('Is Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($state->customer_addresses as $customerAddresses): ?>
            <tr>
                <td><?= h($customerAddresses->id) ?></td>
                <td><?= h($customerAddresses->customer_id) ?></td>
                <td><?= h($customerAddresses->name) ?></td>
                <td><?= h($customerAddresses->mobile_number) ?></td>
                <td><?= h($customerAddresses->address) ?></td>
                <td><?= h($customerAddresses->state_id) ?></td>
                <td><?= h($customerAddresses->city_id) ?></td>
                <td><?= h($customerAddresses->pincode) ?></td>
                <td><?= h($customerAddresses->is_default) ?></td>
                <td><?= h($customerAddresses->created_on) ?></td>
                <td><?= h($customerAddresses->edited_on) ?></td>
                <td><?= h($customerAddresses->is_deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CustomerAddresses', 'action' => 'view', $customerAddresses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CustomerAddresses', 'action' => 'edit', $customerAddresses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CustomerAddresses', 'action' => 'delete', $customerAddresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerAddresses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
