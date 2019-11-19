<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemRow $itemRow
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Item Rows'), ['action' => 'index']) ?></li>
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
<div class="itemRows form large-9 medium-8 columns content">
    <?= $this->Form->create($itemRow) ?>
    <fieldset>
        <legend><?= __('Add Item Row') ?></legend>
        <?php
            echo $this->Form->control('item_id', ['options' => $items]);
            echo $this->Form->control('sku');
            echo $this->Form->control('color_id', ['options' => $colors]);
            echo $this->Form->control('size_id', ['options' => $sizes]);
            echo $this->Form->control('quantity');
            echo $this->Form->control('sale_rate');
            echo $this->Form->control('print_rate');
            echo $this->Form->control('feature_image');
            echo $this->Form->control('flag');
            echo $this->Form->control('discount');
            echo $this->Form->control('stock');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
