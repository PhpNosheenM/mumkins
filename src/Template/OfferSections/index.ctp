
                       <div class="row">
                           <div class="col-md-12 card">
                        <div class="card-header-tab card-header">
                                                    <div class="card-header-title">
                                                        <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
                                                       HOME OFFER IMAGE SECTION
                                                    </div>
                                                    <ul class="nav">
                                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-0" class="active nav-link">Add</a></li>
                                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-1" class="nav-link">View</a></li>
                                                    </ul>
                                                </div>
                                                
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab-eg5-0" role="tabpanel">
                                                            <div class="card-body">
                                            <?= $this->Form->create($offerSection,['enctype'=>'multipart/form-data']) ?>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="form-group"><label>Select Image</label>
                                                        <?= $this->Form->input('offer_image',['type'=>'file','label'=>false]) ?>
                                                          <small class="form-text text-muted">limit file size to less than 2 MB.</small>
                                                         </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">URL</label>
                                                         <?= $this->Form->control('offer_url',['class'=>'form-control','label'=>false,'required','id'=>'exampleName','placeholder'=>'https://']) ?>
                                                         </div>
                                                    </div>

                                                    
                                                </div>
                                                
                                                <div class="position-relative row form-check">
                                                        <div class="col-sm-10">
                                                                <?= $this->Form->button(__('Save'),['class'=>'btn btn-warning']) ?>
                                                        </div>
                                                    </div>
                                             <?= $this->Form->end() ?>
                                        </div>
                                                        </div>
                                                        <div class="tab-pane" id="tab-eg5-1" role="tabpanel">
                                                            <div class="col-m-10">
                                    
                                        <div class="card-body">
                                            <table class="mb-0 table table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>URL</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $i=1;foreach ($offer_views as $offer_view) {?>
                                                <tr>
                                                    <th scope="row"><?= $i;$i++;?></th>
                                                    <td><?= $this->Html->image('/img/offers/'.$offer_view->offer_image, ['style'=>'width:50px; height:50px;']); ?></td>
                                                    <td><p><?= $offer_view->offer_url?></p></td>
                                                    <td class="actions">

                                                        <?= $this->Html->link(__('<i class="pe-7s-note"></i>'), ['action' => 'edit', $offer_view->id],['class'=>' btn-condensed btn-xs','escape'=>false]) ?>

                                                        <?= $this->Form->postLink(__('<i class="pe-7s-trash"></i>'), ['action' => 'delete', $offer_view->id], ['confirm' => __('Are you sure you want to Deactive # {0}?'),'class'=>'btn btn-xs green','escape'=>false]) ?>
                                                </tr>
                                            <?php } ?>
                                          </tbody>
                                            </table>
                                        </div>
                                </div>
                        </div>
                                </div>
                                    </div>
                                    </div>

                                            
                       
                   