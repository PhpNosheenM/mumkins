<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewsletterSection $newsletterSection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Newsletter Section'), ['action' => 'edit', $newsletterSection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Newsletter Section'), ['action' => 'delete', $newsletterSection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newsletterSection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Newsletter Sections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Newsletter Section'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="newsletterSections view large-9 medium-8 columns content">
    <h3><?= h($newsletterSection->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('News Image') ?></th>
            <td><?= h($newsletterSection->news_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($newsletterSection->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($newsletterSection->is_deleted) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('News Url') ?></h4>
        <?= $this->Text->autoParagraph(h($newsletterSection->news_url)); ?>
    </div>
</div>
