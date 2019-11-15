<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Size $size
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $size->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $size->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sizes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sizes form large-9 medium-8 columns content">
    <?= $this->Form->create($size) ?>
    <fieldset>
        <legend><?= __('Edit Size') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('flag');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>-->


<div class="row">
        <div class="col-md-12 card">
            <div class="card-header-tab card-header">
				<div class="card-header-title">
					<i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
					CLOTHING ITEM SIZE
				</div>
				
            </div>
                <div class="tab-content">
				
                    <div class="tab-pane active" id="tab-eg5-0" role="tabpanel">
						 <div class="card-body">
							<?= $this->Form->create($size) ?>
								
								<div class="position-relative row form-group">
								<label for="exampleURL" class="col-sm-2 col-form-label">Enter Size</label>
									<div class="col-sm-10">
										 <?= $this->Form->control('name',['class'=>'form-control','label'=>false,'required']) ?>
									</div>
								</div>
								 
								
								<div class="position-relative row form-check">
										<div class="col-sm-10">
											<button type="submit" class="btn btn-warning" style="padding:6px 30px;font-size: 14px;margin-top: 30px;margin-left: -14px;">Submit</button>
										</div>
									</div>
							 <?= $this->Form->end() ?>
						</div>
                    </div>
					
                       
                </div>
        </div>
    </div>
