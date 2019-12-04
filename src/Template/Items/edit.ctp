
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

                                                        <!-- li class="nav-item"><a data-toggle="tab" href="#tab-eg5-0" class="active nav-link">Add</a></li>
                                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-1" class="nav-link">View</a></li> -->

                                                        <!-- <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-2" class="nav-link"><i class="fa fa-file-excel"></i>&nbsp;&nbsp;Upload</a></li> -->

                                                    </ul>
                                                </div>
                                                
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab-eg5-0" role="tabpanel">
                                                            <div class="card-body">
                                               <?= $this->Form->create($item,['enctype'=>'multipart/form-data']) ?>
                                                <div class="form-row">
                                                     <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="exampleState" class="">Select Item Category</label>
                                                             <?php echo $this->Form->control('category_id', ['empty'=>'--select--','options' => $catsub,'class'=>'form-control input-sm attribute category','label'=>false]); ?>
                                                        </div>
                                                </div>
                                                <!--  -->
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label class="">Style No.</label>
                                                            <?php echo $this->Form->control('style_no', ['class'=>'form-control input-sm attribute','label'=>false]); ?>
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
                                                           <textarea class="ckeditor" id="myEditor" name="description" cols="35" rows="20"><?= $item->description?></textarea>
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
                                                        <div class="position-relative form-group"><label class="">Item Keywords</label>
                                                            <?php echo $this->Form->control('item_keyword', ['class'=>'form-control input-sm attribute item_keyword','label'=>false]); ?>
                                                        </div>
                                                         <div class="position-relative form-group"><label class="">Item Tags</label>
                                                            <?php 
                                                             $tag = ['Hot' => 'Hot', 'New' => 'New'];
                                                            echo $this->Form->control('item_tag', ['empty'=>'--Select--','class'=>'form-control input-sm attribute item_tag','label'=>false,'options'=>$tag,'value'=>$item->item_tag]); ?>
                                                        </div>
                                                    </div>
                                                    
                                            </div>
                                              <div class="form-row">
                                                    <div class="col-md-12">
                                                        <a class="btn btn-success apAddRow" style="color: white; float: right; cursor:pointer;"><i class="fa fa-plus"></i> ADD ROW</a>
                                                    </div>
                                                </div>
                                                <hr>
                                        <?php $i=0;
                                      
                                        foreach ($item_row as $row) {?>
                                        <div class="new addersku len" id="sub-body">
                                            <div class="form-row">
                                               <div class="col-md-2">
                                                        <div class="position-relative form-group"><label>SKU</label>
                                                           <input type="text" name="item_rows[<?= $i ?>][id]" value="<?= $row->id ?>" id="item_row_id" class="item_row_id">

                                                            <?php
                                                             echo $this->Form->control('item_rows['.$i.'][sku]', ['class'=>'form-control input-sm attribute sku','label'=>false,'value'=>@$row->sku]); ?>
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-group"><label>Color</label>
                                                    <?php
                                                           
                                                             echo $this->Form->control('item_rows['.$i.'][color_id]', ['empty'=>'--select--','options' => $colors,'class'=>'form-control input-sm attribute color_id','label'=>false,'value'=>@$row->color_id]); ?>

                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                        <div class="position-relative form-group"><label for="exampleState" class="">Size</label><?php
                                                           
                                                             echo $this->Form->control('item_rows['.$i.'][size_id]', ['empty'=>'--select--','options' => $sizes,'class'=>'form-control input-sm attribute size_id','label'=>false,'value'=>@$row->size_id]); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                        <div class="position-relative form-group"><label class="">Quantity</label> <?php
                                                           
                                                             echo $this->Form->control('item_rows['.$i.'][quantity]', ['class'=>'form-control input-sm attribute quantity','label'=>false,'value'=>@$row->quantity,'type'=>'number']); ?></div>
                                                    </div>
                                            <div class="col-md-3">
                                                        <div class="position-relative form-group"><label for="example" class="">Sale Rate</label>
                                                            <?php
                                                           
                                                             echo $this->Form->control('item_rows['.$i.'][sale_rate]', ['class'=>'form-control input-sm attribute sale_rate','label'=>false,'placeholder'=>'₹','value'=>@$row->sale_rate,'type'=>'number']); ?>
                                                        </div>
                                                    </div>


                                            </div>
                                             <label>Select Images</label>
                                                <div class="form-row"  >
                                                    <div class="col-md-6" style="border: 1px solid #ced4da; border-radius: .25rem; margin: 0 0 16px;">
                                                        <div class="position-relative form-group" style="margin-top: 10px;">
                                                             <?php
                                                           
                                                            //echo $this->Form->control('item_rows['.$i.'][feature_image]', ['class'=>'form-control input-sm attribute feature_image','label'=>false,'type'=>'file']); ?>

                                                             <input type="file" onchange="readURL(this);" id="exampleInputFile" name="item_rows[<?=$i ?>][feature_image]" class="feature_image">

                                                        <small class="form-text text-muted">Select Display Image. | Limit file size to less than 1 MB.</small>
                                                    <input type="hidden" name="item_rows[<?= $i?>][image_hide]" value="<?= @$row->feature_image?>" class="image_hide">
                                                    <?=  $this->Html->image('/img/'.$row->feature_image, array('alt' => 'CakePHP','height'=>'80px','width'=>'130px','class'=>'show_image')); ?> 
                                                    </div>
                                                    
                                                    </div>
                                                    <!-- <div class="col-md-6 minnus">
                                                    </div> -->

                                                    </div>
                                                
                                                <hr>
                                                
                                            </div> 
                                        <?php $i++;} ?>

                                     <input type="hidden" class="loop" value="<?= $i ?>"> 
                                           
                                               <div class="repeatt1"><div class="col-md-6 minnus">
                                                    </div> </div> 
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
                                           <table class="table table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Category</th>
                                                    <th>Item Name</th>
                                                    <th>Style No.</th>
                                                    <th>Material Type</th>
                                                    <th>Specification</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=1;foreach ($item_views as $item_view) {?>
                                                <tr>
                                                    <th scope="row"><?= $i;$i++;?></th>
                                                    <td><?= $item_view->category->name?></td>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="2" value=""><?= $item_view->name?></textarea></td>
                                                    <td>
                                                        <input type="hidden" class="item_id" value="<?= $item_view->id ?>">
                                                        <a data-toggle="modal" data-target="#accSKU" href="#" class="style"><?= $item_view->style_no?><i class="pe-7s-angle-down" style="vertical-align: middle;"></i></a></td>
                                                    <td><?= $item_view->material_type?></td>
                                                    <td><?= $item_view->specification?></td>
                                                    <td><label class="switch">
                                                        <?php if($item_view->is_deleted == 0)
                                                        {?>
                                                        <input type="checkbox" checked class="check">
                                                    <?php } if($item_view->is_deleted == 1)
                                                    {?>
                                                        <input type="checkbox" class="check">
                                                    <?php } ?>

                                                        <span class="slider round"></span></label></td>
                                                    <td><span>
                                                     <?= $this->Html->link(__('<i class="pe-7s-note"></i>'), ['action' => 'edit', $item_view->id],['class'=>' btn-condensed btn-xs','escape'=>false]) ?></span></td>
                                                </tr>
                                                <?php } ?>
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
 <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

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
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function (e) {
$('#img_prev')
.attr('src', e.target.result)
.width(170)
.height(180);
};

reader.readAsDataURL(input.files[0]);
}
}
function readURL1(input) {
if (input.files && input.files[0]) {
var reader1 = new FileReader();

reader1.onload = function (e) {
$('#img_prev1')
.attr('src', e.target.result)
.width(170)
.height(180);
};

reader1.readAsDataURL(input.files[0]);
}
}
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
        CKEDITOR.replace( 'description' );
    </script>


<script>

 $(document).ready(function() {
 //$('.remover1').hide();
 $('.item_row_id').hide();
 var j=$('.loop').val();
 //alert(j);
    //rename_row()
    function rename_row()
      {
      
        $('#sub-body').each(function()
        {
           //alert(j);
            
            $(this).find('.item_row_id').attr('name','item_rows['+j+'][id]');
            $(this).find('.image_hide').attr('name','item_rows['+j+'][image_hide]');
            $(this).find('.sku').attr('name','item_rows['+j+'][sku]');
            $(this).find('.color_id').attr('name','item_rows['+j+'][color_id]');
            $(this).find('.size_id').attr('name','item_rows['+j+'][size_id]');
            $(this).find('.quantity').attr('name','item_rows['+j+'][quantity]');
            $(this).find('.sale_rate').attr('name','item_rows['+j+'][sale_rate]');
            $(this).find('.feature_image').attr('name','item_rows['+j+'][feature_image]');
            j++;
          });
          
          
       }
    function add_row()
    {
       // alert("xs");
      var tr = $('#sub-body').clone().find("input:text,select,file,hidden").val("").end()
                          .appendTo('#sub-body:last');
    // $('.repeatt1').append('<a class="rhov btn remover1" style="float:right;"><i class="fa fa-trash"></i>Remove</a>');
      $('.repeatt1').append(tr);
      $('.repeatt1').find('.show_image').hide();
     
      rename_row();
    }
            $('.apAddRow').click(function(e) {
                add_row();

    // $(".repeatt1").append(
    //     '<div class="addersku"><div class="form-row"><div class="col-md-2"><div class="position-relative form-group"><label class="">SKU</label><input name="SKU" id="SKU" type="text" class="form-control"></div></div><div class="col-md-3"><div class="position-relative form-group"><label>Color</label><select class="mb-2 form-control"><option>Default Select</option><option>White & Yellow</option><option>Tangerine & Blue</option></select></div></div><div class="col-md-2"><div class="position-relative form-group"><label for="exampleState" class="">Size</label><select class="mb-2 form-control"><option>Default Select</option><option>6 Months-14in</option><option>1 Year-16 to 18in</option></select></div></div><div class="col-md-2"><div class="position-relative form-group"><label class="">Quantity</label><input name="qty" class="form-control" type="number"></div></div><div class="col-md-3"><div class="position-relative form-group"><label for="example" class="">Sale Rate</label><input name="city" id="exampleCity" type="text" placeholder="₹" class="form-control"></div></div></div><label>Select Images</label><div class="form-row"><div class="col-md-6" style="border: 1px solid #ced4da; border-radius: .25rem; margin: 0 0 16px;"><div class="position-relative form-group" style="margin-top: 10px;"><input name="file" id="exampleFile" type="file" class="form-control-file"><small class="form-text text-muted">Select Display Image. | Limit file size to less than 1 MB.</small></div></div><div class="col-md-6"><a class="rhov btn remover1" style="float:right;"><i class="fa fa-trash"></i>Remove</a></div><hr></div>');
});

// Remove parent of 'remove' link when link is clicked.
    $(document).on("click",".remover1",function(e){

       rename_row();
       $(this).parent('.repeatt1').remove();
});
});
        </script>

<script>
     $('.check').on('change',function(){
         var item_id=$(this).closest('tr').find('.item_id').val();
                    if($(this).prop("checked") == true){
                        var url="<?php echo $this->Url->build(['controller'=>'Items','action'=>'Active']); ?>";
                            url=url+'/'+item_id,
                        $.ajax({
                            url: url,
                        }).done(function(response) {
                           alert("Item has been Active");
                        }); 
                    }
                    else if($(this).prop("checked") == false){
                        var url="<?php echo $this->Url->build(['controller'=>'Items','action'=>'Delete']); ?>";
                            url=url+'/'+item_id,
                        $.ajax({
                            url: url,
                        }).done(function(response) {
                           alert("Item has been Deactive");
                        }); 
                    }
                });

    $(document).on("click",".closebtn",function(e){
        $(".modal").hide();
    });
        $(document).on("click",".style",function(e){
          var item_id=$(this).closest('tr').find('.item_id').val();
          $("#result_ajax").html('<div align="center"><?php echo $this->Html->image('/img/wait.gif', ['alt' => 'wait']); ?> Loading</div>');
            var url="<?php echo $this->Url->build(['controller'=>'Items','action'=>'skuList']); ?>";
            url=url+'/'+item_id,
            //alert(url);
             $("#myModal1").show();
        $.ajax({
            url: url,
        }).done(function(response) {
            //alert(response);
            $("#result_ajax").html(response);
           
        });
        });

            var firstElement = document.getElementById('tagmark');
var choices1 = new Choices(firstElement, {
    delimiter: ',',
    editItems: true,
    maxItems: 5,
    removeButton: true
});
        </script>



           </html>

<div class="modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="passTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="passTitle">SKU DETAILS</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-md-12" >
                        <table class="table table-striped table-hover" style="table-layout: auto;" >
                            <thead>
                            <tr>
                                <th>SKU No.</th>
                                <th>Item Size</th>
                                <th>Color</th>
                                <th>Quantity</th>
                                <th>Sale Rate</th>
                            </tr>
                            </thead>
                            <tbody id="result_ajax" >
                                
                            
                            
                            </tbody>
                        </table>
                    </div>
                </div>
                            

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary closebtn" style="margin: 0 auto;padding: 8px 68px;">Close</button>
               
            </div>
        </div>
    </div>
</div>