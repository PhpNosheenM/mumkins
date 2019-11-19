<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemRow[]|\Cake\Collection\CollectionInterface $itemRows
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Item Row'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Colors'), ['controller' => 'Colors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Color'), ['controller' => 'Colors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sizes'), ['controller' => 'Sizes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Size'), ['controller' => 'Sizes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Item Images'), ['controller' => 'ItemImages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item Image'), ['controller' => 'ItemImages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="itemRows index large-9 medium-8 columns content">
    <h3><?= __('Item Rows') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sku') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('size_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sale_rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('print_rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('feature_image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('flag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stock') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($itemRows as $itemRow): ?>
            <tr>
                <td><?= $this->Number->format($itemRow->id) ?></td>
                <td><?= $itemRow->has('item') ? $this->Html->link($itemRow->item->name, ['controller' => 'Items', 'action' => 'view', $itemRow->item->id]) : '' ?></td>
                <td><?= h($itemRow->sku) ?></td>
                <td><?= $itemRow->has('color') ? $this->Html->link($itemRow->color->name, ['controller' => 'Colors', 'action' => 'view', $itemRow->color->id]) : '' ?></td>
                <td><?= $itemRow->has('size') ? $this->Html->link($itemRow->size->name, ['controller' => 'Sizes', 'action' => 'view', $itemRow->size->id]) : '' ?></td>
                <td><?= $this->Number->format($itemRow->quantity) ?></td>
                <td><?= $this->Number->format($itemRow->sale_rate) ?></td>
                <td><?= $this->Number->format($itemRow->print_rate) ?></td>
                <td><?= h($itemRow->feature_image) ?></td>
                <td><?= $this->Number->format($itemRow->flag) ?></td>
                <td><?= h($itemRow->discount) ?></td>
                <td><?= h($itemRow->stock) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $itemRow->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itemRow->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itemRow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemRow->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
