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
       <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        
    <link href="./main.css" rel="stylesheet"></head>
    
                   <div class="row">
                       <div class="col-md-12 card">
                                                <div class="card-header-tab card-header">
                                                    <div class="card-header-title">
                                                        
                                                       FOOTER SECTION CONTENT
                                                    </div>
                                                    <ul class="nav">
                                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-0" class="active nav-link">Add</a></li>
                                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-1" class="nav-link">View</a></li>
                                                    </ul>
                                                </div>
                                                
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab-eg5-0" role="tabpanel">
                                                            <div class="card-body">
                                             <?= $this->Form->create($footerSection,['enctype'=>'multipart/form-data']) ?>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="example" class="">Description</label>
                                                            <textarea class="ckeditor" id="myEditor" name="description" cols="35" rows="20"></textarea>
                                                             <!-- <textarea id="editor1" name="description" rows="10" cols="135"></textarea> -->
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="form-row">
                                                     <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="exampleState" class="">Show on</label>
                                                    <?php
                                                            $pages = ['Home Page' => 'Home Page', 'Category Page' => 'Category Page', 'Checkout Page' => 'Checkout Page','Product Details Page'=>'Product Details Page','Register Page'=>'Register Page','Shopping Cart Page'=>'Shopping Cart Page','Stores Page'=>'Stores Page','Testimonial Page'=>'Testimonial Page'];
                                                             echo $this->Form->control('show_on', ['empty'=>'--select--','options' => $pages,'class'=>'form-control input-sm attribute show_on','label'=>false]); ?>
                                                    </div>
                                                </div>
                                                </div>
                                                
                                                
                                                <div class=" row form-check">
                                                    <div class="col-md-12">
                                                       <?= $this->Form->button(('Submit'),['class'=>'btn btn-warning','style'=>'padding:6px 30px;font-size: 14px;margin-top: 30px;margin-left: -14px;']) ?>
                                                    </div>
                                                </div>

                                              <?= $this->Form->end() ?>
                                         
                                        </div>                                         
                                 </div>
                            

                            

                                        <div class="tab-pane" id="tab-eg5-1" role="tabpanel">
                                            <div class="col-m-10">
                                    
                                        <div class="card-body">
                                            <table class="mb-0 table table-striped table-hover table-scroll">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Displayed On</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                 <?php $i=1;foreach ($footer_views as $footer) {?>
                                                <tr>
                                                    <th scope="row"><?= $i;$i++;?></th>
                                                    <td><?= $footer->show_on?></td>
                                                    <td><textarea disabled="true" class="form-control" id="message" rows="4" cols="80" placeholder="" ><?= $footer->description?>
                                                      </textarea></td>
                                                    <td> <?= $this->Html->link(__('<i class="pe-7s-note"></i>'), ['action' => 'edit', $footer->id],['class'=>' btn-condensed btn-xs','escape'=>false]) ?>

                                                        <?= $this->Form->postLink(__('<i class="pe-7s-trash"></i>'), ['action' => 'delete', $footer->id], ['confirm' => __('Are you sure you want to Deactive # {0}?'),'class'=>'btn btn-xs green','escape'=>false]) ?></td>
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


                                        
                   
                    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
                <script type="text/javascript" src="./assets/scripts/main.js"></script>
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
        CKEDITOR.replace( 'description' );
    </script>
    <script>
    //     $.get("navigationtest.html", function(data){
    //     $("#nav").replaceWith(data);
    // });

          $(document).ready(function() {
        $("#navt").load("navigationtest.html");
    });
         

    </script>
   <!--  <script>
      var quill = new Quill('#editor1', {
        theme: 'snow'
      });
    </script> -->




           </html>