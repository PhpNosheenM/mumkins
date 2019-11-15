<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OfferSection $offerSection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Offer Section'), ['action' => 'edit', $offerSection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Offer Section'), ['action' => 'delete', $offerSection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offerSection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Offer Sections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offer Section'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="offerSections view large-9 medium-8 columns content">
    <h3><?= h($offerSection->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Offer Image') ?></th>
            <td><?= h($offerSection->offer_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($offerSection->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($offerSection->is_deleted) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Offer Url') ?></h4>
        <?= $this->Text->autoParagraph(h($offerSection->offer_url)); ?>
    </div>
</div>
