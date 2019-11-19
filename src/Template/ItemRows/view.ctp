<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemRow $itemRow
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Item Row'), ['action' => 'edit', $itemRow->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Item Row'), ['action' => 'delete', $itemRow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemRow->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Item Rows'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item Row'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Colors'), ['controller' => 'Colors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Color'), ['controller' => 'Colors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sizes'), ['controller' => 'Sizes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Size'), ['controller' => 'Sizes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Item Images'), ['controller' => 'ItemImages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item Image'), ['controller' => 'ItemImages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="itemRows view large-9 medium-8 columns content">
    <h3><?= h($itemRow->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Item') ?></th>
            <td><?= $itemRow->has('item') ? $this->Html->link($itemRow->item->name, ['controller' => 'Items', 'action' => 'view', $itemRow->item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sku') ?></th>
            <td><?= h($itemRow->sku) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= $itemRow->has('color') ? $this->Html->link($itemRow->color->name, ['controller' => 'Colors', 'action' => 'view', $itemRow->color->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Size') ?></th>
            <td><?= $itemRow->has('size') ? $this->Html->link($itemRow->size->name, ['controller' => 'Sizes', 'action' => 'view', $itemRow->size->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Feature Image') ?></th>
            <td><?= h($itemRow->feature_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount') ?></th>
            <td><?= h($itemRow->discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stock') ?></th>
            <td><?= h($itemRow->stock) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($itemRow->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($itemRow->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sale Rate') ?></th>
            <td><?= $this->Number->format($itemRow->sale_rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Print Rate') ?></th>
            <td><?= $this->Number->format($itemRow->print_rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flag') ?></th>
            <td><?= $this->Number->format($itemRow->flag) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Item Images') ?></h4>
        <?php if (!empty($itemRow->item_images)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Item Row Id') ?></th>
                <th scope="col"><?= __('Image Name') ?></th>
                <th scope="col"><?= __('Is Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($itemRow->item_images as $itemImages): ?>
            <tr>
                <td><?= h($itemImages->id) ?></td>
                <td><?= h($itemImages->item_row_id) ?></td>
                <td><?= h($itemImages->image_name) ?></td>
                <td><?= h($itemImages->is_deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ItemImages', 'action' => 'view', $itemImages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ItemImages', 'action' => 'edit', $itemImages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ItemImages', 'action' => 'delete', $itemImages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemImages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
