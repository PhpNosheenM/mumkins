
                   
                       




                       <div class="row">
                           <div class="col-md-12 card">
                        <div class="card-header-tab card-header">
                                                    <div class="card-header-title">
                                                        <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
                                                       HOME SHOW PRODUCTS
                                                    </div>
                                                    <ul class="nav">
                                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-0" class="active nav-link">Add</a></li>
                                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-1" class="nav-link">View</a></li>
                                                    </ul>
                                                </div>
                                                
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab-eg5-0" role="tabpanel">
                                                            <div class="card-body">
                                            <?= $this->Form->create($productSection,['enctype'=>'multipart/form-data']) ?>
                                                <label for="example" class="">Select Items to show</label>
                                                <div  class="form-row repeatt" style="border: 1px solid #ced4da; border-radius: .25rem; margin: 0 0 16px;">
                                                    <div class="col-md-6 adderow" id="sub-body">
                                                        <div class="position-relative form-group" style="margin-top: 10px;">
                                                            <?php echo $this->Form->control('product_section[0][item_id]', ['empty'=>'--select--','options' => $items,'class'=>'form-control input-sm attribute item2','label'=>false]); ?>
                                                            <a class="btn btn-success remover" style="color: white; float: right;margin-top: 15px;"><i class=" fa fa-minus"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group">
                                                           <a class="btn btn-success addert" style="color: white; float: right;margin-top: 15px;"><i class=" fa fa-plus"></i></a>
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
                                                        <div class="tab-pane" id="tab-eg5-1" role="tabpanel">
                                                            <div class="col-m-10">
                                    
                                        <div class="card-body">
                                            <table class="mb-0 table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Item Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $i=1;foreach ($product_views as $product_view) {?>
                                                <tr>
                                                    <th scope="row"><?= $i;$i++;?></th>
                                                    <td><p><?= $product_view->item->name?></p></td>
                                                     <td class="actions">

                                                        <?= $this->Html->link(__('<i class="pe-7s-note"></i>'), ['action' => 'edit', $product_view->id],['class'=>' btn-condensed btn-xs','escape'=>false]) ?>

                                                        <?= $this->Form->postLink(__('<i class="pe-7s-trash"></i>'), ['action' => 'delete', $product_view->id], ['confirm' => __('Are you sure you want to Deactive # {0}?'),'class'=>'btn btn-xs green','escape'=>false]) ?>
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
            $("#navt").load("navigationtest.html");
        });

        </script>
        <script type="text/javascript">
             var i=1;
             $('.remover').hide();
    function rename_row()
      {
      
       
        $('#sub-body').each(function()
        {
              $('.remover').show();
           
            //alert(i);
            $(this).find('.item2').attr('name','product_section['+i+'][item_id]');
            i++;
          });
          
       }
    function add_row()
    {

      var tr = $('#sub-body').clone();
      $('.repeatt').append(tr);
      rename_row();
    }
            $('.addert').click(function(e) {
                add_row();
    // $(".repeatt").append(
    //     '<div class="col-md-12 adderow" ><div class="col-md-6" style="margin-left: -15px;"><div class="position-relative form-group" style="margin-top: 10px;margin-right: -26px;"><select class="mb-2 form-control"><option>Default Select</option><option>It no- 732 | Boys</option><option>It no- 432 | Girls Top</option></select></div></div><div class=""><div class="position-relative form-group"><a class="btn btn-danger remover" style="color: white; float: right;margin-top: -45px;"><i class=" fa fa-trash"></i></a></div></div></div>');

   
});


// Remove parent of 'remove' link when link is clicked.
    $(document).on("click",".remover",function(e){
       $(this).parents('.adderow').remove();
});
        </script>




               </html>