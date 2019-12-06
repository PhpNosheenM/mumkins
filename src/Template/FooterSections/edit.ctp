 

    <head>
        
       <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        
    <link href="./main.css" rel="stylesheet"></head>
   
                   <div class="row">
                       <div class="col-md-12 card">
                                                <div class="card-header-tab card-header">
                                                    <div class="card-header-title">
                                                        
                                                       FOOTER SECTION CONTENT
                                                    </div>
                                                </div>
                                                
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab-eg5-0" role="tabpanel">
                                                            <div class="card-body">
                                           <?= $this->Form->create($footerSection,['enctype'=>'multipart/form-data']) ?>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="example" class="">Description</label>
                                                             <!-- <textarea id="editor1" name="description" rows="10" cols="135"><?= @$footerSection->description ?></textarea> -->
                                                              <div id="editor1">
                                                                 <textarea class="ckeditor" id="myEditor" name="description" cols="35" rows="20"><?= $footerSection->description?></textarea>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="form-row">
                                                     <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="exampleState" class="">Show on</label>
                                                    <?php
                                                            $pages = ['Home Page' => 'Home Page', 'Category Page' => 'Category Page', 'Checkout Page' => 'Checkout Page','Product Details Page'=>'Product Details Page','Register Page'=>'Register Page','Shopping Cart Page'=>'Shopping Cart Page','Stores Page'=>'Stores Page','Testimonial Page'=>'Testimonial Page','Wishlist Page'=>'Wishlist Page'];
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
    //     $.get("navigationtest.html", function(data){
    //     $("#nav").replaceWith(data);
    // });

          $(document).ready(function() {

        $("#navt").load("navigationtest.html");
    });

            $("#editor1").val($("#editor1").Editor("getText"));
       

    </script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>




           </html>