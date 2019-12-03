<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemImage $itemImage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Item Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Item Rows'), ['controller' => 'ItemRows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item Row'), ['controller' => 'ItemRows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="itemImages form large-9 medium-8 columns content">
    <?= $this->Form->create($itemImage) ?>
    <fieldset>
        <legend><?= __('Add Item Image') ?></legend>
        <?php
            echo $this->Form->control('item_row_id', ['options' => $itemRows]);
            echo $this->Form->control('image_name');
            echo $this->Form->control('is_deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
