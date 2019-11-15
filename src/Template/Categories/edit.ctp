<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>

<div class="row">
        <div class="col-md-12 card">
            <div class="card-header-tab card-header">
				<div class="card-header-title">
					<i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
					CATEGORY MASTER EDIT
				</div>
				
            </div>
                <div class="tab-content">
				
                    <div class="tab-pane active" id="tab-eg5-0" role="tabpanel">
						 <div class="card-body">
							<?= $this->Form->create($category) ?>
								<div class="form-row">
									<div class="col-md-12">
										<div class="position-relative form-group"><label for="exampleEmail11" class="">Category Name</label>
										  <?= $this->Form->control('name',['class'=>'form-control','label'=>false,'required']) ?>
										</div>
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
