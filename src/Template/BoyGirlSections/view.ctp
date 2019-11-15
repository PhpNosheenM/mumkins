<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BoyGirlSection $boyGirlSection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Boy Girl Section'), ['action' => 'edit', $boyGirlSection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Boy Girl Section'), ['action' => 'delete', $boyGirlSection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $boyGirlSection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Boy Girl Sections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Boy Girl Section'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="boyGirlSections view large-9 medium-8 columns content">
    <h3><?= h($boyGirlSection->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Bg Image') ?></th>
            <td><?= h($boyGirlSection->bg_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($boyGirlSection->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Deleted') ?></th>
            <td><?= $this->Number->format($boyGirlSection->is_deleted) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Bg Url') ?></h4>
        <?= $this->Text->autoParagraph(h($boyGirlSection->bg_url)); ?>
    </div>
</div>
