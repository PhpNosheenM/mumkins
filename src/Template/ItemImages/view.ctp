<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemImage $itemImage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Item Image'), ['action' => 'edit', $itemImage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Item Image'), ['action' => 'delete', $itemImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemImage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Item Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Item Rows'), ['controller' => 'ItemRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item Row'), ['controller' => 'ItemRows', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="itemImages view large-9 medium-8 columns content">
    <h3><?= h($itemImage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Item Row') ?></th>
            <td><?= $itemImage->has('item_row') ? $this->Html->link($itemImage->item_row->id, ['controller' => 'ItemRows', 'action' => 'view', $itemImage->item_row->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Name') ?></th>
            <td><?= h($itemImage->image_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($itemImage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($itemImage->is_deleted) ?></td>
        </tr>
    </table>
</div>
