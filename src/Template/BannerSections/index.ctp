        
                       <div class="row">
                           <div class="col-md-12 card">
                        <div class="card-header-tab card-header">
                                                    <div class="card-header-title">
                                                        <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
                                                       HOME BANNER SECTION
                                                    </div>
                                                    <ul class="nav">
                                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-0" class="active nav-link">Add</a></li>
                                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-1" class="nav-link">View</a></li>
                                                    </ul>
                                                </div>
                                                
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab-eg5-0" role="tabpanel">
                                                            <div class="card-body">
                                           <?= $this->Form->create($bannerSection,['enctype'=>'multipart/form-data']) ?>
                                                <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Select Background Image</label>
                                                    <div class="col-sm-10">
                                                        <?= $this->Form->input('background_image',['type'=>'file','label'=>false]) ?>
                                                        <small class="form-text text-muted">Image to display behind the hero image,limit size to less than 2 MB. </small>
                                                    </div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Select Hero Image</label>
                                                    <div class="col-sm-10">
                                                        <?= $this->Form->input('hero_image',['type'=>'file','label'=>false]) ?>
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
                                                        <div class="tab-pane" id="tab-eg5-1" role="tabpanel">
                                                            <div class="col-m-10">
                                    
                                        <div class="card-body">
                                            <table class="mb-0 table table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Images</th>
                                                    <th>Button Text</th>
                                                    <th>URL 1</th>
                                                    <th>URL 2</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $i=1;foreach ($banner_views as $banner_view) {?>
                                                <tr>
                                                    <th scope="row"><?= $i;$i++;?></th>
                                                    <td><?= $this->Html->image('/img/'.$banner_view->background_image, ['style'=>'width:50px; height:50px;']); ?>
                                                        <?= $this->Html->image('/img/'.$banner_view->hero_image, ['style'=>'width:50px; height:50px;']); ?>
                                                    </td>
                                                    <td><span id="sBtn1"><?= @$banner_view->button1_text?></span>&nbsp;|&nbsp;<span id="sBtn2"><?= @$banner_view->button2_text?></span></td>
                                                    <td><p><?= $banner_view->button1_url?></p></td>
                                                    <td><p><?= $banner_view->button2_url?></p></td>
                                                    <td class="actions">

                                                        <?= $this->Html->link(__('<i class="pe-7s-note"></i>'), ['action' => 'edit', $banner_view->id],['class'=>' btn-condensed btn-xs','escape'=>false]) ?>

                                                        <?= $this->Form->postLink(__('<i class="pe-7s-trash"></i>'), ['action' => 'delete', $banner_view->id], ['confirm' => __('Are you sure you want to Deactive # {0}?'),'class'=>'btn btn-xs green','escape'=>false]) ?>
                                                    </td>
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
                                </div>
                                </div>
                                </div>
