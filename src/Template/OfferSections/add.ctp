<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OfferSection $offerSection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Offer Sections'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="offerSections form large-9 medium-8 columns content">
    <?= $this->Form->create($offerSection) ?>
    <fieldset>
        <legend><?= __('Add Offer Section') ?></legend>
        <?php
            echo $this->Form->control('offer_image');
            echo $this->Form->control('offer_url');
            echo $this->Form->control('is_deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
