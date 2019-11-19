<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FooterSection $footerSection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Footer Section'), ['action' => 'edit', $footerSection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Footer Section'), ['action' => 'delete', $footerSection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $footerSection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Footer Sections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Footer Section'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="footerSections view large-9 medium-8 columns content">
    <h3><?= h($footerSection->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Show On') ?></th>
            <td><?= h($footerSection->show_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($footerSection->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($footerSection->is_deleted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($footerSection->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edited By') ?></th>
            <td><?= $this->Number->format($footerSection->edited_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($footerSection->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edited On') ?></th>
            <td><?= h($footerSection->edited_on) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($footerSection->description)); ?>
    </div>
</div>
