<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FooterSection[]|\Cake\Collection\CollectionInterface $footerSections
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Footer Section'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="footerSections index large-9 medium-8 columns content">
    <h3><?= __('Footer Sections') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('show_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('edited_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('edited_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($footerSections as $footerSection): ?>
            <tr>
                <td><?= $this->Number->format($footerSection->id) ?></td>
                <td><?= h($footerSection->show_on) ?></td>
                <td><?= $this->Number->format($footerSection->is_deleted) ?></td>
                <td><?= h($footerSection->created_on) ?></td>
                <td><?= $this->Number->format($footerSection->created_by) ?></td>
                <td><?= h($footerSection->edited_on) ?></td>
                <td><?= $this->Number->format($footerSection->edited_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $footerSection->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $footerSection->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $footerSection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $footerSection->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
