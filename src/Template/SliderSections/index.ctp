   
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
                                                    <th>Image</th>
                                                    <th>Button Text</th>
                                                    <th>URL 1</th>
                                                    <th>URL 2</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $i=1;foreach ($slider_views as $slider_view) {?>
                                                <tr>
                                                    <th scope="row"><?= $i;$i++;?></th>
                                                    <td><?= $this->Html->image('/img/Sliders/'.$slider_view->slider_image, ['style'=>'width:50px; height:50px;']); ?></td>
                                                    <td><p><?= @$slider_view->button_text?> | <?= @$slider_view->button2_text?></p></td>
                                                    <td><p><?= @$slider_view->slider_url?></p></td>
                                                    <td><?= @$slider_view->slider2_url?></p></td>
                                                    <td class="actions">

                                                        <?= $this->Html->link(__('<i class="pe-7s-note"></i>'), ['action' => 'edit', $slider_view->id],['class'=>' btn-condensed btn-xs','escape'=>false]) ?>

                                                        
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

                                            
                       
                   