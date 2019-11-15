<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewsletterSection $newsletterSection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Newsletter Sections'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="newsletterSections form large-9 medium-8 columns content">
    <?= $this->Form->create($newsletterSection) ?>
    <fieldset>
        <legend><?= __('Add Newsletter Section') ?></legend>
        <?php
            echo $this->Form->control('news_image');
            echo $this->Form->control('news_url');
            echo $this->Form->control('is_deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
