   
                       <div class="row">
                           <div class="col-md-12 card">
                        <div class="card-header-tab card-header">
                                                    <div class="card-header-title">
                                                        <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
                                                       HOME SLIDER
                                                    </div>
                                                </div>
                                                
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab-eg5-0" role="tabpanel">
                                                            <div class="card-body">
                                            <?= $this->Form->create($sliderSection,['enctype'=>'multipart/form-data']) ?>
                                                <div class="form-row">
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Title</label>
                                                         <?= $this->Form->control('title',['class'=>'form-control','label'=>false,'id'=>'exampleName','required']) ?>
                                                         </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Button Text</label>
                                                         <?= $this->Form->control('button_text',['class'=>'form-control','label'=>false,'required','id'=>'exampleName']) ?>
                                                         </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">URL</label>
                                                         <?= $this->Form->control('slider_url',['class'=>'form-control','label'=>false,'required','id'=>'exampleName','placeholder'=>'https://']) ?>
                                                         </div>
                                                    </div>
                                                </div><!-- 
                                                
                                                 <div class="form-row">
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Button Text</label>
                                                         <?= $this->Form->control('button2_text',['class'=>'form-control','label'=>false,'id'=>'exampleName']) ?>
                                                         </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">URL</label>
                                                         <?= $this->Form->control('slider2_url',['class'=>'form-control','label'=>false,'id'=>'exampleName','placeholder'=>'https://']) ?>
                                                         </div>
                                                    </div>
                                                </div> -->

                                                <div class="form-row">
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="example" class="">Description</label>
                                                           <!--  <div id="editor1"></div> -->
                                                             <!-- <?php echo $this->Form->control('description', ['class'=>'form-control input-sm attribute ','label'=>false]); ?> -->
                                                             <textarea rows="4" cols="50"><?= $sliderSection->description?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Select Image</label>
                                                         <?= $this->Form->control('slider_image',['class'=>'file','label'=>false,'type'=>'file','id'=>'exampleFile']) ?>
                                                         <?= $this->Html->image('/img/'.$sliderSection->slider_image, ['style'=>'width:50px; height:50px;','id'=>'img_prev']); ?>
                                                          <small class="form-text text-muted">limit file size to less than 2 MB.</small>
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
                                </div>
                                </div>

                                            
                       
                   