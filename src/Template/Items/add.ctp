
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Mumkins Admin Console</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <meta name="msapplication-tap-highlight" content="no">
       <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <link rel="stylesheet" href="./assets/css/choices.css">
    <link href="./main.css" rel="stylesheet"></head>
    <script src="./assets/scripts/choices.min.js"></script>



                   <div class="row">
                       <div class="col-md-12 card">
                                                <div class="card-header-tab card-header">
                                                    <div class="card-header-title">
                                                        
                                                       ITEMS
                                                    </div>
                                                    <ul class="nav">
                                                        <!-- <li class="nav-item"><a class="mb-2 mr-2 btn btn-warning" href="#" style="background-color: #309b04;border-color: #309b04;"><i class="fa fa-file-excel"></i>&nbsp;&nbsp;Upload</a></li> -->

                                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-0" class="active nav-link">Add</a></li>
                                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-1" class="nav-link">View</a></li>

                                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-2" class="nav-link"><i class="fa fa-file-excel"></i>&nbsp;&nbsp;Upload</a></li>

                                                    </ul>
                                                </div>
                                                
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab-eg5-0" role="tabpanel">
                                                            <div class="card-body">
                                               <?= $this->Form->create($item,['enctype'=>'multipart/form-data']) ?>
                                                <div class="form-row">
                                                     <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleState" class="">Select Item Category</label>
                                                             <?php echo $this->Form->control('category_id', ['empty'=>'--select--','options' => $categories,'class'=>'form-control input-sm attribute category','label'=>false]); ?>
                                                    </div>
                                                </div>
                                                <!--  -->
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label class="">Style No.</label>
                                                            <?php echo $this->Form->control('style_no', ['class'=>'form-control input-sm attribute style','label'=>false]); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Item Name</label><?php echo $this->Form->control('name', ['class'=>'form-control input-sm attribute name','label'=>false]); ?></div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleState" class="">Material Type</label> 
                                                            <?php
                                                            $material = ['Cotton' => 'Cotton', 'Wool' => 'Wool', 'Polyester' => 'Polyester'];
                                                             echo $this->Form->control('material_type', ['empty'=>'--select--','options' => $material,'class'=>'form-control input-sm attribute material_type','label'=>false]); ?>
                                                    </div>
                                                </div>

                                                </div>
                                             
                                                <div class="form-row">
                                                 
                                                    
                                                
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="example" class="">Description</label>
                                                           <!--  <div id="editor1"></div> -->
                                                           <?=  $this->Form->control('description', ['class'=>'form-control input-sm description','label'=>false,'id'=>'editor1']); ?>
                                                    </div>
                                                    </div>
                                                    
                                                
                                                
                                                
                                                </div>
                                                
                                                <div class="form-row">
                                                <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="example" class="">Specification</label>
                                                           <?php echo $this->Form->control('specification', ['class'=>'form-control input-sm attribute specification','label'=>false]); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label class="">Item Tags</label>
                                                            <?php echo $this->Form->control('item_keyword', ['class'=>'form-control input-sm attribute item_keyword','label'=>false]); ?>
                                                        </div>
                                                    </div>
                                                    
                                            </div>
                                              <div class="form-row">
                                                    <div class="col-md-12">
                                                        <a class="btn btn-success apAddRow" style="color: white; float: right; cursor:pointer;"><i class="fa fa-plus"></i> ADD ROW</a>
                                                    </div>
                                                </div>
                                                <hr>
                                            <div class="new" id="sub-body">
                                            <div class="form-row">
                                               <div class="col-md-2">
                                                        <div class="position-relative form-group"><label class="">SKU</label>
                                                            <?php
                                                           
                                                             echo $this->Form->control('sku', ['class'=>'form-control input-sm attribute sku','label'=>false]); ?>
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label>Color</label>
                                                    <?php
                                                           
                                                             echo $this->Form->control('color_id', ['empty'=>'--select--','options' => $colors,'class'=>'form-control input-sm attribute color_id','label'=>false]); ?>

                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                        <div class="position-relative form-group"><label for="exampleState" class="">Size</label><?php
                                                           
                                                             echo $this->Form->control('size_id', ['empty'=>'--select--','options' => $sizes,'class'=>'form-control input-sm attribute size_id','label'=>false]); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                        <div class="position-relative form-group"><label class="">Quantity</label> <?php
                                                           
                                                             echo $this->Form->control('quantity', ['class'=>'form-control input-sm attribute quantity','label'=>false]); ?></div>
                                                    </div>
                                            <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="example" class="">Sale Rate</label>
                                                            <?php
                                                           
                                                             echo $this->Form->control('sale_rate', ['class'=>'form-control input-sm attribute sale_rate','label'=>false,'placeholder'=>'₹']); ?>
                                                        </div>
                                                    </div>


                                            </div>
                                             <label>Select Images</label>
                                                <div class="form-row"  >
                                                    <div class="col-md-6" style="border: 1px solid #ced4da; border-radius: .25rem; margin: 0 0 16px;">
                                                        <div class="position-relative form-group" style="margin-top: 10px;">
                                                             <?php
                                                           
                                                             echo $this->Form->control('feature_image', ['class'=>'form-control input-sm attribute feature_image','label'=>false,'type'=>'file']); ?>
                                                        <small class="form-text text-muted">Select Display Image. | Limit file size to less than 1 MB.</small>
                                                    </div>
                                                    
                                                    </div>

                                                    <div class="col-md-6">
                                                        
                                                    </div>

                                                    </div>
                                                </div>
                                                
                                                <hr>
                                                <div class="repeatt1"> </div> 
                                                 
                                               
                                                <div class=" row form-check">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-warning" style="padding:6px 30px;font-size: 14px;margin-top: 30px;margin-left: -19px;">Submit</button>
                                                        <button class="btn btn-secondary" style="padding:6px 30px;font-size: 14px;margin-top: 30px;margin-left: 20px;">Reset</button>
                                                    </div>
                                                </div>

                                               <?= $this->Form->end() ?>
                                         
                                        </div>                                         
                                 </div>
                            

                                        <div class="tab-pane" id="tab-eg5-1" role="tabpanel">
                                            <div class="col-m-10">
                                    
                                        <div class="card-body">
                                            <table class="mb-0 table table-striped table-hover table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Item Name</th>
                                                    <th>SKU</th>
                                                    <th>Sale Rate</th>
                                                    <th>Discount</th>
                                                    <th>Description</th>
                                                    <th>Material Care Inst.</th>
                                                    <th>Specification</th>
                                                    <th>Size</th>
                                                    <th>Images</th>
                                                    <th>Color</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="4" cols="100" placeholder="Fashion Seeds White & Yellow Party wear Set for Boys prop" ></textarea></td>
                                                    <td>5</td>
                                                    <td>1500</td>
                                                    <td>300</td>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="4" cols="100" placeholder="Fashion Seeds White & Yellow Party wear Set for Boys prop"></textarea></td>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="4" cols="100" placeholder="Fashion Seeds White & Yellow Party wear Set for Boys prop"></textarea></td>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="4" cols="100" placeholder="Fashion Seeds White & Yellow Party wear Set for Boys prop"></textarea></td>
                                                    <td><p>06 Months/14in</p></td>
                                                    <td><img src="./assets/images/logo2.png" width="30px" height="30px"><img src="./assets/images/logo-2.png" width="30px" height="30px"><img src="./assets/images/logo-2.png" width="30px" height="30px"></td>
                                                    <td><p>Tangerine & Blue</p></td>
                                                    <td><span><a href="#"> <i class="pe-7s-note"></i></a></span>          <span><a href="#"><i class="pe-7s-trash"></i></a></span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="4" cols="100" placeholder="Fashion Seeds White & Yellow Party wear Set for Boys prop" ></textarea></td>
                                                    <td>5</td>
                                                    <td>1500</td>
                                                    <td>300</td>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="4" cols="100" placeholder="Fashion Seeds White & Yellow Party wear Set for Boys prop"></textarea></td>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="4" cols="100" placeholder="Fashion Seeds White & Yellow Party wear Set for Boys prop"></textarea></td>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="4" cols="100" placeholder="Fashion Seeds White & Yellow Party wear Set for Boys prop"></textarea></td>
                                                    <td><p>06 Months/14in</p></td>
                                                    <td><img src="./assets/images/logo2.png" width="30px" height="30px"><img src="./assets/images/logo-2.png" width="30px" height="30px"><img src="./assets/images/logo-2.png" width="30px" height="30px"></td>
                                                    <td><p>Tangerine & Blue</p></td>
                                                    <td><span><a href="#"> <i class="pe-7s-note"></i></a></span>          <span><a href="#"><i class="pe-7s-trash"></i></a></span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="4" cols="100" placeholder="Fashion Seeds White & Yellow Party wear Set for Boys prop" ></textarea></td>
                                                    <td>5</td>
                                                    <td>1500</td>
                                                    <td>300</td>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="4" cols="100" placeholder="Fashion Seeds White & Yellow Party wear Set for Boys prop"></textarea></td>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="4" cols="100" placeholder="Fashion Seeds White & Yellow Party wear Set for Boys prop"></textarea></td>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="4" cols="100" placeholder="Fashion Seeds White & Yellow Party wear Set for Boys prop"></textarea></td>
                                                    <td><p>06 Months/14in</p></td>
                                                    <td><img src="./assets/images/logo-2.png" width="30px" height="30px"><img src="./assets/images/logo-2.png" width="30px" height="30px"><img src="./assets/images/logo-2.png" width="30px" height="30px"></td>
                                                    <td><p>Tangerine & Blue</p></td>
                                                    <td><span><a href="#"> <i class="pe-7s-note"></i></a></span>          <span><a href="#"><i class="pe-7s-trash"></i></a></span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="4" cols="100" placeholder="Fashion Seeds White & Yellow Party wear Set for Boys prop" ></textarea></td>
                                                    <td>5</td>
                                                    <td>1500</td>
                                                    <td>300</td>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="4" cols="100" placeholder="Fashion Seeds White & Yellow Party wear Set for Boys prop"></textarea></td>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="4" cols="100" placeholder="Fashion Seeds White & Yellow Party wear Set for Boys prop"></textarea></td>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="4" cols="100" placeholder="Fashion Seeds White & Yellow Party wear Set for Boys prop"></textarea></td>
                                                    <td><p>06 Months/14in</p></td>
                                                    <td><img src="./assets/images/logo-2.png" width="30px" height="30px"><img src="./assets/images/logo-2.png" width="30px" height="30px"><img src="./assets/images/logo-2.png" width="30px" height="30px"></td>
                                                    <td><p>Tangerine & Blue</p></td>
                                                    <td><span><a href="#"> <i class="pe-7s-note"></i></a></span>          <span><a href="#"><i class="pe-7s-trash"></i></a></span></td>
                                                </tr>
                                          </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                     <div class="tab-pane" id="tab-eg5-2" role="tabpanel">
                                        <div class="card-body">
                                            <form class="">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                        <div class="position-relative form-group" style="margin-top: 10px;">
                                                            <input id="fileselect" type="file" class="form-control-file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                                                        <small class="form-text text-muted">Select Excel File | Make sure rows & coloumns are in exact order else problem may occur.</small>
                                                    </div>
                                                    
                                                    </div>
                                                    <div class="col-md-12">
                                                    <button class="btn btn-warning" style="padding:6px 30px;font-size: 14px;margin-top: 30px;margin-left: -19px;">Upload</button></div>
                                            </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            </div>


                                        
                   
                    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
               <!--  <script type="text/javascript" src="./assets/scripts/main.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
            </body>
            <script>
        // $.get("headertest.html", function(data){
        // $("#head").replaceWith(data);
        // });

        $(document).ready(function() {
        $('#headt').load("headertest.html");

        
    });
    </script>
    <script>
    //     $.get("navigationtest.html", function(data){
    //     $("#nav").replaceWith(data);
    // });

          $(document).ready(function() {
        $("#navt").load("navigationtest.html");
    });

    </script>
    <script>
      var quill = new Quill('#editor1', {
        theme: 'snow'
      });
    </script>
      <script>
      var quill = new Quill('#editor2', {
        theme: 'snow'
      });
    </script>



<script>
            $('.apAddRow').click(function(e) {

    $(".repeatt1").append(
        '<div class="addersku"><div class="form-row"><div class="col-md-2"><div class="position-relative form-group"><label class="">SKU</label><input name="SKU" id="SKU" type="text" class="form-control"></div></div><div class="col-md-3"><div class="position-relative form-group"><label>Color</label><select class="mb-2 form-control"><option>Default Select</option><option>White & Yellow</option><option>Tangerine & Blue</option></select></div></div><div class="col-md-2"><div class="position-relative form-group"><label for="exampleState" class="">Size</label><select class="mb-2 form-control"><option>Default Select</option><option>6 Months-14in</option><option>1 Year-16 to 18in</option></select></div></div><div class="col-md-2"><div class="position-relative form-group"><label class="">Quantity</label><input name="qty" class="form-control" type="number"></div></div><div class="col-md-3"><div class="position-relative form-group"><label for="example" class="">Sale Rate</label><input name="city" id="exampleCity" type="text" placeholder="₹" class="form-control"></div></div></div><label>Select Images</label><div class="form-row"><div class="col-md-6" style="border: 1px solid #ced4da; border-radius: .25rem; margin: 0 0 16px;"><div class="position-relative form-group" style="margin-top: 10px;"><input name="file" id="exampleFile" type="file" class="form-control-file"><small class="form-text text-muted">Select Display Image. | Limit file size to less than 1 MB.</small></div></div><div class="col-md-6"><a class="rhov btn remover1" style="float:right;"><i class="fa fa-trash"></i>Remove</a></div><hr></div>');
});

// Remove parent of 'remove' link when link is clicked.
    $("body").on("click",".remover1",function(e){
       $(this).parents('.addersku').remove();
});
        </script>

        <script>
            var firstElement = document.getElementById('tagmark');
var choices1 = new Choices(firstElement, {
    delimiter: ',',
    editItems: true,
    maxItems: 5,
    removeButton: true
});
        </script>



           </html>