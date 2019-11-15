<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BoyGirlSection $boyGirlSection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Boy Girl Sections'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="boyGirlSections form large-9 medium-8 columns content">
    <?= $this->Form->create($boyGirlSection) ?>
    <fieldset>
        <legend><?= __('Add Boy Girl Section') ?></legend>
        <?php
            echo $this->Form->control('bg_image');
            echo $this->Form->control('bg_url');
            echo $this->Form->control('is_deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
