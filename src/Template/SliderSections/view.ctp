<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SliderSection $sliderSection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Slider Section'), ['action' => 'edit', $sliderSection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Slider Section'), ['action' => 'delete', $sliderSection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sliderSection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Slider Sections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Slider Section'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sliderSections view large-9 medium-8 columns content">
    <h3><?= h($sliderSection->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Slider Image') ?></th>
            <td><?= h($sliderSection->slider_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sliderSection->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Button Text') ?></th>
            <td><?= $this->Number->format($sliderSection->button_text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($sliderSection->is_deleted) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Slider Url') ?></h4>
        <?= $this->Text->autoParagraph(h($sliderSection->slider_url)); ?>
    </div>
</div>
