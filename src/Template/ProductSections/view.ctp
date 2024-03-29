<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductSection $productSection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product Section'), ['action' => 'edit', $productSection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product Section'), ['action' => 'delete', $productSection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productSection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Product Sections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Section'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productSections view large-9 medium-8 columns content">
    <h3><?= h($productSection->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productSection->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Item Id') ?></th>
            <td><?= $this->Number->format($productSection->item_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($productSection->is_deleted) ?></td>
        </tr>
    </table>
</div>
