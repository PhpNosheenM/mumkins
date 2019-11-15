<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BannerSection $bannerSection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Banner Section'), ['action' => 'edit', $bannerSection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Banner Section'), ['action' => 'delete', $bannerSection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bannerSection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Banner Sections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banner Section'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bannerSections view large-9 medium-8 columns content">
    <h3><?= h($bannerSection->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Background Image') ?></th>
            <td><?= h($bannerSection->background_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hero Image') ?></th>
            <td><?= h($bannerSection->hero_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Button Alignment') ?></th>
            <td><?= h($bannerSection->button_alignment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Button1 Text') ?></th>
            <td><?= h($bannerSection->button1_text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Button2 Text') ?></th>
            <td><?= h($bannerSection->button2_text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bannerSection->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($bannerSection->is_deleted) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Button1 Url') ?></h4>
        <?= $this->Text->autoParagraph(h($bannerSection->button1_url)); ?>
    </div>
    <div class="row">
        <h4><?= __('Button2 Url') ?></h4>
        <?= $this->Text->autoParagraph(h($bannerSection->button2_url)); ?>
    </div>
</div>
