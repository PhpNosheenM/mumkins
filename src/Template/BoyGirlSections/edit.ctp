
                       <div class="row">
                           <div class="col-md-12 card">
                        <div class="card-header-tab card-header">
                                                    <div class="card-header-title">
                                                        <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
                                                       HOME BOY & GIRL
                                                    </div>
                                                </div>
                                                
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab-eg5-0" role="tabpanel">
                                                            <div class="card-body">
                                            <?= $this->Form->create($boyGirlSection,['enctype'=>'multipart/form-data']) ?>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="form-group"><label>Select Image</label>
                                                        <?= $this->Form->input('bg_image',['type'=>'file','label'=>false]) ?>
                                                        <?= $this->Html->image('/img/BG/'.$boyGirlSection->bg_image, ['style'=>'width:50px; height:50px;','id'=>'img_prev']); ?>
                                                          <small class="form-text text-muted">limit file size to less than 2 MB.</small>
                                                         </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">URL</label>
                                                         <?= $this->Form->control('bg_url',['class'=>'form-control','label'=>false,'required','id'=>'exampleName','placeholder'=>'https://']) ?>
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
                                </div>
                                    </div>
                                    </div>

                                            
                       
                   