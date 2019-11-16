<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Item Rows'), ['controller' => 'ItemRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item Row'), ['controller' => 'ItemRows', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Product Sections'), ['controller' => 'ProductSections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Section'), ['controller' => 'ProductSections', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="items view large-9 medium-8 columns content">
    <h3><?= h($item->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $item->has('category') ? $this->Html->link($item->category->name, ['controller' => 'Categories', 'action' => 'view', $item->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Style No') ?></th>
            <td><?= h($item->style_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($item->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material Type') ?></th>
            <td><?= h($item->material_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($item->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($item->is_deleted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($item->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edited By') ?></th>
            <td><?= $this->Number->format($item->edited_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($item->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edited On') ?></th>
            <td><?= h($item->edited_on) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($item->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Specification') ?></h4>
        <?= $this->Text->autoParagraph(h($item->specification)); ?>
    </div>
    <div class="row">
        <h4><?= __('Item Keyword') ?></h4>
        <?= $this->Text->autoParagraph(h($item->item_keyword)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Item Rows') ?></h4>
        <?php if (!empty($item->item_rows)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Sku') ?></th>
                <th scope="col"><?= __('Color Id') ?></th>
                <th scope="col"><?= __('Size Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Sale Rate') ?></th>
                <th scope="col"><?= __('Print Rate') ?></th>
                <th scope="col"><?= __('Feature Image') ?></th>
                <th scope="col"><?= __('Flag') ?></th>
                <th scope="col"><?= __('Discount') ?></th>
                <th scope="col"><?= __('Stock') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($item->item_rows as $itemRows): ?>
            <tr>
                <td><?= h($itemRows->id) ?></td>
                <td><?= h($itemRows->item_id) ?></td>
                <td><?= h($itemRows->sku) ?></td>
                <td><?= h($itemRows->color_id) ?></td>
                <td><?= h($itemRows->size_id) ?></td>
                <td><?= h($itemRows->quantity) ?></td>
                <td><?= h($itemRows->sale_rate) ?></td>
                <td><?= h($itemRows->print_rate) ?></td>
                <td><?= h($itemRows->feature_image) ?></td>
                <td><?= h($itemRows->flag) ?></td>
                <td><?= h($itemRows->discount) ?></td>
                <td><?= h($itemRows->stock) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ItemRows', 'action' => 'view', $itemRows->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ItemRows', 'action' => 'edit', $itemRows->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ItemRows', 'action' => 'delete', $itemRows->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemRows->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Product Sections') ?></h4>
        <?php if (!empty($item->product_sections)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Is Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($item->product_sections as $productSections): ?>
            <tr>
                <td><?= h($productSections->id) ?></td>
                <td><?= h($productSections->item_id) ?></td>
                <td><?= h($productSections->is_deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductSections', 'action' => 'view', $productSections->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductSections', 'action' => 'edit', $productSections->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductSections', 'action' => 'delete', $productSections->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productSections->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
