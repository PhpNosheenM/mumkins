<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategorySection $categorySection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category Section'), ['action' => 'edit', $categorySection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category Section'), ['action' => 'delete', $categorySection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorySection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Category Sections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category Section'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categorySections view large-9 medium-8 columns content">
    <h3><?= h($categorySection->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category Image') ?></th>
            <td><?= h($categorySection->category_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categorySection->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($categorySection->is_deleted) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Category Url') ?></h4>
        <?= $this->Text->autoParagraph(h($categorySection->category_url)); ?>
    </div>
</div>
