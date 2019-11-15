<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BannerSection $bannerSection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Banner Sections'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bannerSections form large-9 medium-8 columns content">
    <?= $this->Form->create($bannerSection) ?>
    <fieldset>
        <legend><?= __('Add Banner Section') ?></legend>
        <?php
            echo $this->Form->control('background_image');
            echo $this->Form->control('hero_image');
            echo $this->Form->control('button_alignment');
            echo $this->Form->control('button1_text');
            echo $this->Form->control('button2_text');
            echo $this->Form->control('button1_url');
            echo $this->Form->control('button2_url');
            echo $this->Form->control('is_deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
