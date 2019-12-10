           
    <div class="row">
        <div class="col-md-12 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title">
                    <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
                    WAREHOUSES MASTER
                </div>
                <ul class="nav">
                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-0" class="active nav-link">Add</a></li>
                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-1" class="nav-link">View</a></li>
                </ul>
            </div>
                <div class="tab-content">
                
                    <div class="tab-pane active" id="tab-eg5-0" role="tabpanel">
                         <div class="card-body">
                            <?= $this->Form->create($warehouse) ?>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Warehouse Name</label>
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
                                  <!-- <div class="col-m-4">
                                    <input id="myInput" type="text" placeholder="Search.." class="" style="float:right;">
                                  </div> -->
                                    <table class="mb-0 table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Warehouse Name</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id="myTable">
                                        <?php $i=1; foreach ($warehouses as $warehouse): ?>
                                        <tr>
                                            <th scope="row"><?= $i++ ?></th>
                                            <td><p><?= @$warehouse->name ?></p></td>
                                            <td>
                                            
                                                <span>
                                                     <?= $this->Html->link(__('<i class="pe-7s-note"></i>'), ['action' => 'edit', @$warehouse->id],['escape'=>false]) ?>
                                                </span>          
                                                 <span>
                                                    
                                                    <?= $this->Form->postLink('<i class="pe-7s-trash"></i>', ['action' => 'delete', $warehouse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $warehouse->id),'escape'=>false]) ?>
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
 
          






