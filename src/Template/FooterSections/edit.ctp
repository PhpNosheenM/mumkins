<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FooterSection $footerSection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $footerSection->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $footerSection->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Footer Sections'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="footerSections form large-9 medium-8 columns content">
    <?= $this->Form->create($footerSection) ?>
    <fieldset>
        <legend><?= __('Edit Footer Section') ?></legend>
        <?php
            echo $this->Form->control('show_on');
            echo $this->Form->control('description');
            echo $this->Form->control('is_deleted');
            echo $this->Form->control('created_on');
            echo $this->Form->control('created_by');
            echo $this->Form->control('edited_on');
            echo $this->Form->control('edited_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
