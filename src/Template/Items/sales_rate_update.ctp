        <!doctype html>
        <html lang="en">

        <head>
            
            <meta name="msapplication-tap-highlight" content="no">
           <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
            <link rel="stylesheet" href="./assets/scripts/date-jqueryui.css">
        <link href="./main.css" rel="stylesheet"></head>
        
     
                       <div class="row">
                           <div class="col-md-12 card">
                                                    <div class="card-header-tab card-header">
                                                        <div class="card-header-title">
                                                            
                                                           SALES RATE UPDATE
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                              <form method="GET">
                                               <div class="form-row">

                                                        <div class="col-md-4">
                                                            <div class="position-relative form-group"><label for="exampleState" class=""> Category</label>
                                                                <?php echo $this->Form->control('category_id', ['empty'=>'--select--','options' => $catsub,'class'=>'form-control input-sm attribute category','label'=>false]); ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                                <div class="position-relative form-group"><label for="exampleState" class="">Select Item</label> <?php echo $this->Form->control('item_id', ['empty'=>'--select--','options' => $items_list,'class'=>'form-control input-sm attribute','label'=>false]); ?>
                                                            </div>
                                                        </div>
                                                </div>

                                                    <div class="form-row">
                                                        <div class="col-md-4">
                                                            <button class="btn btn-success" style="padding: 6px 30px;font-size: 14px;">Search</button>
                                                            <small class="form-text text-muted">Select specific items or a whole category to search & update accordingly.</small>
                                                        </div>
                                                    </div>
                                                    <hr style="border-top: none;">
                                                </form>
                                        <?php if(!empty($items)){?>
                                        <?= $this->Form->create($item_rows,['id'=>'form_sample_3']) ?>    
                                        <div class="col-m-12">
                                            <table class="mb-0 table table-striped table-hover">
                                                    <thead>
                                                    <tr>
                                                    <th>#</th>
                                                    <th>Category</th>
                                                    <th>Sub Category</th>
                                                    <th>Item Name</th>
                                                    <th>SKU</th>
                                                    <th>Print Rate</th>
                                                    <th>Discount</th>
                                                    <th>Sale Rate</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $i=1;foreach ($items as $item_row) {?>
                                                <tr>
                                                    <th scope="row"><?= $i;?>
                                                        <?php echo  $this->Form->control('item_rows['.$i.'][id]',['class'=>'form-control input-sm','value'=>$item_row->id,'type'=>'hidden']); ?></td>
                                                    </th>
                                                    <td><?= $item_row->item->category->parent_category->name ?></td>
                                                    <td><?= $item_row->item->category->name ?></td>
                                                    <td><?= $item_row->item->name ?></td>
                                                    <td><?= $item_row->sku ?></td>
                                                    <td>
                                                        <!-- <input name="print_rate" id="example" type="Name" class="form-control" style="margin: 8px -20px;font-size: 14px;" placeholder="₹"> -->
                                                         <?php echo $this->Form->control('item_rows['.$i.'][print_rate]',[
                                                            'label' => false,'class'=>'form-control ','placeholder'=>'₹','type'=>'number','style'=>'margin: 8px -20px;font-size: 14px;','value'=>@$item_row->print_rate]);?>
                                                    </td>
                                                    <td> <?php echo $this->Form->control('item_rows['.$i.'][discount]',[
                                                            'label' => false,'class'=>'form-control ','placeholder'=>'₹','type'=>'number','style'=>'margin: 8px -20px;font-size: 14px;','value'=>@$item_row->discount]);?></td>
                                                    <td> <?php echo $this->Form->control('item_rows['.$i.'][sale_rate]',[
                                                            'label' => false,'class'=>'form-control rate ','placeholder'=>'₹','type'=>'number','style'=>'margin: 8px -20px;font-size: 14px;','value'=>@$item_row->sale_rate]);?></td>
                                                    
                                                    <td>
                                                        
                                                        <label class="switch">
                                                             <?php echo  $this->Form->control('item_rows['.$i.'][stock]',['class'=>'form-control input-sm stock','type'=>'hidden','value'=>@$item_row->stock]); ?>
                                                        <?php if($item_row->stock == "Yes"){?>
                                                           
                                                         <input type="checkbox" checked name="check" class="check">
                                                     <?php } ?>
                                                     <?php if($item_row->stock == "No"){?>

                                                         <input type="checkbox" name="check" class="check">
                                                     <?php } ?>
                                                        
                                                        <!-- <?php echo $this->Form->input('item_rows['.$i.'][stock]',[
                                                            'label' => false,'class'=>'form-control ','placeholder'=>'₹','type'=>'number','style'=>'margin: 8px -20px;font-size: 14px;','type'=>'checkbox','checked'=>true]);?> -->
                                                        <span class="slider round"></span></label>
                                                    </td>
                                                </tr>
                                                <?php $i++;} ?>
                                                
                                              </tbody>
                                                </table>
                                            </div>
                                        <?php } ?>
                                            <div class=" row form-check">
                                                    <div class="col-md-12">
                                                        <!-- <button class="btn btn-warning" style="padding:6px 30px;font-size: 14px;margin-top: 30px;margin-left: -19px;">Update</button> -->
                                                        <?php echo $this->Form->button('Update',['class'=>'btn  btn-warning','style'=>'padding:6px 30px;font-size: 14px;margin-top: 30px;margin-left: -19px;']); ?>

                                                    </div>
                                            </div>
                                        </div>
                                          <?= $this->Form->end() ?>

                            


                                            
                       
                        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
                    <script type="text/javascript" src="./assets/scripts/main.js"></script>

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
                 // $('.category').on('change',function(){
                 //    var category_id=$(this).val();
                 //    //alert(category_id);
                 //      var url="<?php echo $this->Url->build(['controller'=>'Items','action'=>'getSubcategory']); ?>";
                 //        url=url+'/'+category_id,
                 //    $.ajax({
                 //        url: url,
                 //    }).done(function(response) {
                 //        //alert(response);
                 //        $(".subcategory").html(response);
                       
                 //    });
                 //             });
                $('.check').on('change',function(){
                     //alert($('.stock').val());
                    if($(this).prop("checked") == true){
                        var check='Yes';
                        $(this).closest('tr').find('.stock').val(check);
                    }
                    else if($(this).prop("checked") == false){
                        var uncheck='No';
                       $(this).closest('tr').find('.stock').val(uncheck);
                    }
                });
            $("#navt").load("navigationtest.html");
        });

        </script>
        <script>
          var quill = new Quill('#editor1', {
            theme: 'snow'
          });
        </script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
      $( function() {
        $( "#datepicker1,#datepicker2" ).datepicker();
      } );
      </script>



               </html>