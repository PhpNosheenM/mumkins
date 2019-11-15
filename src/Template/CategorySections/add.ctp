<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategorySection $categorySection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Category Sections'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="categorySections form large-9 medium-8 columns content">
    <?= $this->Form->create($categorySection) ?>
    <fieldset>
        <legend><?= __('Add Category Section') ?></legend>
        <?php
            echo $this->Form->control('category_image');
            echo $this->Form->control('category_url');
            echo $this->Form->control('is_deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
