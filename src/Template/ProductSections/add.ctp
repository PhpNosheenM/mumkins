<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductSection $productSection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Product Sections'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="productSections form large-9 medium-8 columns content">
    <?= $this->Form->create($productSection) ?>
    <fieldset>
        <legend><?= __('Add Product Section') ?></legend>
        <?php
            echo $this->Form->control('item_id');
            echo $this->Form->control('is_deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
