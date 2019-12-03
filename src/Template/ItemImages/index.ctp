<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemImage[]|\Cake\Collection\CollectionInterface $itemImages
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Item Image'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Item Rows'), ['controller' => 'ItemRows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item Row'), ['controller' => 'ItemRows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="itemImages index large-9 medium-8 columns content">
    <h3><?= __('Item Images') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_row_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($itemImages as $itemImage): ?>
            <tr>
                <td><?= $this->Number->format($itemImage->id) ?></td>
                <td><?= $itemImage->has('item_row') ? $this->Html->link($itemImage->item_row->id, ['controller' => 'ItemRows', 'action' => 'view', $itemImage->item_row->id]) : '' ?></td>
                <td><?= h($itemImage->image_name) ?></td>
                <td><?= $this->Number->format($itemImage->is_deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $itemImage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itemImage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itemImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemImage->id)]) ?>
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
