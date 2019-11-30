   
                       <div class="row">
                           <div class="col-md-12 card">
                        <div class="card-header-tab card-header">
                                                    <div class="card-header-title">
                                                        <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
                                                       HOME SLIDER
                                                    </div>
                                                </div>
                                    
                                        <div class="card-body col-md-12">
                                           <table class="mb-0 table table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Images</th>
                                                    <th>Title</th>
                                                    <th>Descripton</th>
                                                    <th>Button Text</th>
                                                    <th style="width: 10%;">URL 1</th>
                                                    <th style="width: 10%;">URL 2</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $i=1;foreach ($banner_views as $banner_view) {?>
                                                <tr>
                                                    <th scope="row"><?= $i;$i++;?></th>
                                                    <td><?= $this->Html->image('/img/'.$banner_view->background_image, ['style'=>'width:50px; height:50px;']); ?>
                                                    </td>
                                                    <td><?= @$banner_view->title?></td>
                                                    <td><?= @$banner_view->description?></td>
                                                    <td><span id="sBtn1"><?= @$banner_view->button1_text?></span>&nbsp;|&nbsp;<span id="sBtn2"><?= @$banner_view->button2_text?></span></td>
                                                    <td><p><?= $banner_view->button1_url?></p></td>
                                                    <td><p><?= $banner_view->button2_url?></p></td>
                                                    <td class="actions">

                                                        <?= $this->Html->link(__('<i class="pe-7s-note"></i>'), ['action' => 'edit', $banner_view->id],['class'=>' btn-condensed btn-xs','escape'=>false]) ?>

                                                        <!-- <?= $this->Form->postLink(__('<i class="pe-7s-trash"></i>'), ['action' => 'delete', $banner_view->id], ['confirm' => __('Are you sure you want to Deactive # {0}?'),'class'=>'btn btn-xs green','escape'=>false]) ?> -->
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

                                            
                       
                   