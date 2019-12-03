    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Mumkins Admin Console</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <meta name="msapplication-tap-highlight" content="no">
        <!-- <link href="dist/styles.imageuploader.css" rel="stylesheet" type="text/css"> -->
        <?php echo $this->Html->css('/dist/styles.imageuploader.css'); ?>
<link href="./main.css" rel="stylesheet">
    </head>
    

<!-- 
                <div class="app-main__outer">
                     <div class="app-main__inner"> -->
                   <div class="row">
                       <div class="col-md-12 card">
                                                <div class="card-header-tab card-header">
                                                    <div class="card-header-title">
                                                        
                                                       UPLOAD SKU IMAGES 
                                                    </div>
                                                    <ul class="nav">
                                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-0" class="active nav-link">Add</a></li>
                                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-1" class="nav-link">View</a></li>
                                                    </ul>
                                                </div>
                                                
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab-eg5-0" role="tabpanel">
                                                            <div class="card-body">
                                            <?= $this->Form->create($item_images,['enctype'=>'multipart/form-data']) ?>

                                                <div class="form-row">
                                                     <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="exampleState" class="">Select Style No.</label><?php
                                                           
                                                             echo $this->Form->control('item_id', ['empty'=>'--select--','options' => $styles,'class'=>'form-control input-sm attribute item_id','label'=>false]); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                            <div class="position-relative form-group"><label for="exampleState" class="">Select SKU No.</label><select class="mb-2 form-control sku" name="item_row_id">
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label>Select Images</label>
                                                <div class="form-row">
                                                    <div class="col-md-12" id="imgup" style="border: 1px solid #ced4da; border-radius: .25rem; margin: 0 0 16px;">
                                                       
                                                      
                                                        <input type="file" name="item_image[]" multiple placeholder="select Image" >
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                <div class=" row form-check">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-warning start js-uploader__submit-button uploader__submit-button hider" style="padding:6px 30px;font-size: 14px;margin-top: 30px;margin-left: -19px;">Submit</button>
                                                    </div>
                                                </div>

                                            
                                    <?= $this->Form->end() ?>
                                         
                                        </div>                                         
                                 </div>
                            

                            

                                        <div class="tab-pane" id="tab-eg5-1" role="tabpanel">
                                            
                                    
                                        <div class="card-body">
                                            <div class="form-row">
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><input name="search" type="text" placeholder="Search" class="form-control"></div>
                                                    </div>
                                                </div>
                                            <table class="mb-0 table table-striped table-hover table-scroll">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Style No.</th>
                                                    <th>SKU</th>
                                                    <th>Images</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>GS1707</td>
                                                    <td>MUM1452</td>
                                                    <td><img src="./assets/images/kidthumb.jpg" width="30px" height="30px"><img src="./assets/images/kidthumb.jpg" width="30px" height="30px"><img src="./assets/images/kidthumb.jpg" width="30px" height="30px"><img src="./assets/images/kidthumb.jpg" width="30px" height="30px"></td>
                                                    <td><span><a href="#"> <i class="pe-7s-note"></i></a></span>          <span><a href="#"><i class="pe-7s-trash"></i></a></span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>GS1707</td>
                                                    <td>MUM2254</td>
                                                    <td><img src="./assets/images/kidthumb.jpg" width="30px" height="30px"><img src="./assets/images/kidthumb.jpg" width="30px" height="30px"><img src="./assets/images/kidthumb.jpg" width="30px" height="30px"><img src="./assets/images/kidthumb.jpg" width="30px" height="30px"></td>
                                                    <td><span><a href="#"> <i class="pe-7s-note"></i></a></span>          <span><a href="#"><i class="pe-7s-trash"></i></a></span></td>
                                                </tr>
                                          </tbody>
                                            </table>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                                </div>
                                <!-- </div>
                            </div> -->
                            </div>
                            </div>


                                        
                   
                    
                <!-- <script type="text/javascript" src="./assets/scripts/main.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <?php echo $this->Html->script('/dist/jquery.imageuploader.js'); ?>
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
            $(document).ready(function() {
        $("#navt").load("navigationtest.html");
        $('.item_id').on('change',function(){
        
            var item_id=$(this).val();
            var url="<?php echo $this->Url->build(['controller'=>'Items','action'=>'findsku']); ?>";
                            url=url+'/'+item_id,
                           // alert(url);
                        $.ajax({
                            url: url,
                        }).done(function(response) {
                           $('.sku').html(response);
                        }); 
        });
    });

    </script>


<!-- <script src="dist/jquery.imageuploader.js"></script>
 -->
<script>
(function(){
            var options = {};
            $('.js-uploader__box').uploader(options);
        }());

</script>
               </html>