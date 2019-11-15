  <?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categories index large-9 medium-8 columns content">
    <h3><?= __('Categories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php //foreach ($categories as $category): ?>
            <tr>
                <td><?= $this->Number->format($category->id) ?></td>
                <td><?= $category->has('parent_category') ? $this->Html->link($category->parent_category->name, ['controller' => 'Categories', 'action' => 'view', $category->parent_category->id]) : '' ?></td>
                <td><?= h($category->name) ?></td>
                <td><?= h($category->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $category->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
                </td>
            </tr>
            <?php //endforeach; ?>
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
</div>-->                  
    <div class="row">
        <div class="col-md-12 card">
            <div class="card-header-tab card-header">
				<div class="card-header-title">
					<i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
					CATEGORY MASTER
				</div>
				<ul class="nav">
					<li class="nav-item"><a data-toggle="tab" href="#tab-eg5-0" class="active nav-link">Add</a></li>
					<li class="nav-item"><a data-toggle="tab" href="#tab-eg5-1" class="nav-link">View</a></li>
				</ul>
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
					
                        <div class="tab-pane" id="tab-eg5-1" role="tabpanel">
                            <div class="col-m-10">
                               
								<div class="card-body">
								  <div class="col-m-4">
									<input id="myInput" type="text" placeholder="Search.." class="" style="float:right;">
								  </div>
									<table class="mb-0 table table-striped table-hover">
										<thead>
										<tr>
											<th>#</th>
											<th>Category Name</th>
											<th>Action</th>
										</tr>
										</thead>
										<tbody id="myTable">
										<?php $i=1; foreach ($categories as $category1): ?>
										<tr>
											<th scope="row"><?= $i++ ?></th>
											<td><p><?= $category1->name ?></p></td>
											<td>
											
												<span>
													 <?= $this->Html->link(__('<i class="pe-7s-note"></i>'), ['action' => 'edit', $category1->id],['escape'=>false]) ?>
												</span>          
												<span>
													
													<?= $this->Form->postLink('<i class="pe-7s-trash"></i>', ['action' => 'delete', $category1->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category1->id),'escape'=>false]) ?>
												</span>
											
											</td>
										</tr>
									   <?php endforeach; ?>
										</tbody>
									</table>
								</div>
                            </div>
                        </div>
                </div>
        </div>
    </div>
 
          






