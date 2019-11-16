
                   
                       




                       <div class="row">
                           <div class="col-md-12 card">
                        <div class="card-header-tab card-header">
                                                    <div class="card-header-title">
                                                        <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
                                                       HOME SHOW PRODUCTS
                                                    </div>
                                                </div>
                                                
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab-eg5-0" role="tabpanel">
                                                            <div class="card-body">
                                            <?= $this->Form->create($productSection,['enctype'=>'multipart/form-data']) ?>
                                                <label for="example" class="">Select Items to show</label>
                                                <div class="form-row repeatt" style="border: 1px solid #ced4da; border-radius: .25rem; margin: 0 0 16px;">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group" style="margin-top: 10px;">
                                                            <?php echo $this->Form->control('item_id', ['empty'=>'--select--','options' => $items,'class'=>'form-control input-sm attribute']); ?>

                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="position-relative row form-check">
                                                        <div class="col-sm-10">
                                                            <button class="btn btn-warning" style="padding:6px 30px;font-size: 14px;margin-top: 30px;margin-left: -14px;">Submit</button>
                                                        </div>
                                                    </div>
                                           <?= $this->Form->end() ?>
                                        </div>
                                                        </div>