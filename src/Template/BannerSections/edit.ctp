        
                       <div class="row">
                           <div class="col-md-12 card">
                        <div class="card-header-tab card-header">
                                                    <div class="card-header-title">
                                                        <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
                                                       HOME BANNER SECTION
                                                    </div>
                                                </div>
                                                
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab-eg5-0" role="tabpanel">
                                                            <div class="card-body">
                                           <?= $this->Form->create($bannerSection,['enctype'=>'multipart/form-data']) ?>
                                                <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Select Background Image</label>
                                                    <div class="col-sm-10">
                                                        <?= $this->Form->input('background_image',['type'=>'file','label'=>false]) ?>
                                                        <?= $this->Html->image('/img/Banners/'.$bannerSection->background_image, ['style'=>'width:50px; height:50px;','id'=>'img_prev']); ?>
                                                        <small class="form-text text-muted">Image to display behind the hero image,limit size to less than 2 MB. </small>
                                                    </div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Select Hero Image</label>
                                                    <div class="col-sm-10">
                                                        <?= $this->Form->input('hero_image',['type'=>'file','label'=>false]) ?>
                                                        <?= $this->Html->image('/img/Banners/'.$bannerSection->hero_image, ['style'=>'width:50px; height:50px;','id'=>'hero_image']); ?>
                                                        <small class="form-text text-muted"></small>
                                                    </div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Button Alignment</label>
                                                        <div class="col-sm-10">
                                                            <div class="custom-radio custom-control custom-control-inline"><input type="radio" id="exampleCustomRadio" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio">Align Left</label></div>
                                                            <div class="custom-radio custom-control custom-control-inline"><input type="radio" id="exampleCustomRadio2" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio2">Align Right</label></div>
                                                            <small class="form-text text-muted">Select any one to align buttons & hero image will align to opposite side.</small>
                                                        </div>
                                                    </div>
                                                 <div class="position-relative row form-group"><label for="exampleSubject" class="col-sm-2 col-form-label">Button 1 Text</label>
                                                    <div class="col-sm-10">
                                                         <?= $this->Form->control('button1_text',['class'=>'form-control','label'=>false,'required','id'=>'exampleName']) ?>
                                                             
                                                    </div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="exampleSubject" class="col-sm-2 col-form-label">Button 2 Text</label>
                                                    <div class="col-sm-10">
                                                         <?= $this->Form->control('button2_text',['class'=>'form-control','label'=>false,'required','id'=>'exampleName']) ?>
                                                    </div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="exampleURL" class="col-sm-2 col-form-label"> Button 1 URL</label>
                                                    <div class="col-sm-10">
                                                         <?= $this->Form->control('button1_url',['class'=>'form-control','label'=>false,'required','id'=>'exampleName','placeholder'=>'https://']) ?>
                                                    </div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="exampleURL" class="col-sm-2 col-form-label"> Button 2 URL</label>
                                                    <div class="col-sm-10">
                                                         <?= $this->Form->control('button2_url',['class'=>'form-control','label'=>false,'required','id'=>'exampleName','placeholder'=>'https://']) ?>
                                                    </div>
                                                </div>
                                                
                                                <div class="position-relative row form-check">
                                                        <div class="col-sm-10">
                                                             <?= $this->Form->button(('Submit'),['class'=>'btn btn-warning','style'=>'padding:6px 30px;font-size: 14px;margin-top: 30px;margin-left: -14px;']) ?>
                                                        </div>
                                                    </div>
                                            <?= $this->Form->end() ?>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                </div>
