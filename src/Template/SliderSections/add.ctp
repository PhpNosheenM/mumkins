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
        <link href="./main.css" rel="stylesheet"></head>
        <body>
            <div class="app-main__outer">
                         <div class="app-main__inner">
                       <div class="row">
                           <div class="col-md-12 card">
                        <div class="card-header-tab card-header">
                                                    <div class="card-header-title">
                                                        <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
                                                       HOME SLIDER
                                                    </div>
                                                    <ul class="nav">
                                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-0" class="active nav-link">Add</a></li>
                                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-1" class="nav-link">View</a></li>
                                                    </ul>
                                                </div>
                                                
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab-eg5-0" role="tabpanel">
                                                            <div class="card-body">
                                            <form class="">
                                                <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Select Image</label>
                                                    <div class="col-sm-10"><input name="file" id="exampleFile" type="file" class="form-control-file">
                                                        <small class="form-text text-muted">limit file size to less than 2 MB.</small>
                                                    </div>
                                                </div>
                                                    <div class="form-row">
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">Button Text</label><input name="URL" id="exampleName" type="text" class="form-control" required="true"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group"><label for="examplePassword11" class="">Enter URL</label><input name="URL" id="exampleName" type="url" placeholder="https://" class="form-control"></div>
                                                    </div>
                                                
                                                <div class="col-md-4">
                                                        <div class="position-relative form-group">
                                                           <a class="btn btn-success addert" style="color: white; float: right;margin-top: 21px;"><i class="fa fa-plus"></i></a>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="repeatt"></div>


                                                    <!-- <div class="custom-checkbox custom-control custom-control-inline"><input type="checkbox" id="exampleCustomInline" class="custom-control-input" data-toggle="collapse" href="#showoffer"><label class="custom-control-label" for="exampleCustomInline">Show Offer Image</label>
                                                            </div> -->
                                                
                                                <!-- <div class="form-row collapse" id="showoffer">
                                                    <div class="col-md-12">
                                                    <div class="position-relative form-group">
                                                        <div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative form-group" style="margin-top: 10px;">
                                                            <input name="file" id="exampleFile" type="file" class="form-control-file">
                                                        <small class="form-text text-muted">file size should not exceed 2 MB.</small>
                                                    </div>
                                                    </div>
                                                </div> -->
                                                
                                                <div class="position-relative row form-check">
                                                        <div class="col-sm-10">
                                                            <button class="btn btn-warning" style="padding:6px 30px;font-size: 14px;margin-top: 30px;margin-left: -14px;">Submit</button>
                                                        </div>
                                                    </div>
                                            </form>
                                        </div>
                                                        </div>
                                                        <div class="tab-pane" id="tab-eg5-1" role="tabpanel">
                                                            <div class="col-m-10">
                                    
                                        <div class="card-body">
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
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td><img src="\assets\images/logo-2.png" width="30px" height="30px"></td>
                                                    <td><p>For Girl | For Boy</p></td>
                                                    <td><p>www.google.com/images</p></td>
                                                    <td><p>www.google.com/images</p></td>
                                                    <td><span><a href="null"> <i class="pe-7s-note"></i></a></span>          <span><a href="null"><i class="pe-7s-trash"></i></a></span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td><img src="\assets\images/logo-2.png" width="30px" height="30px"></td>
                                                    <td><p>For Girl | Click Here</p></td>
                                                    <td><p>www.google.com/images</p></td>
                                                    <td><p>www.google.com/images</p></td>
                                                    <td><span><a href="null"> <i class="pe-7s-note"></i></a></span>          <span><a href="null"><i class="pe-7s-trash"></i></a></span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td><img src="\assets\images/logo-2.png" width="30px" height="30px"></td>
                                                    <td><p>Limited Availability</p></td>
                                                    <td><p>www.google.com/images</p></td>
                                                    <td><p>www.google.com/images</p></td>
                                                    <td><span><a href="#"> <i class="pe-7s-note"></i></a></span>          <span><a href="#"><i class="pe-7s-trash"></i></a></span></td>
                                                </tr>
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

      <!--   <script type="text/javascript">
            $("#adder").click(function () {
  $("#repeat").append('<div class="col-md-4"><div class="position-relative form-group"><label for="exampleEmail11" class="">Button Text</label><input name="URL" id="exampleName" type="text" class="form-control" required="true"></div></div><div class="col-md-4"><div class="position-relative form-group"><label for="examplePassword11" class="">Enter URL</label><input name="URL" id="exampleName" type="url" placeholder="https://" class="form-control"></div></div><div class="col-md-4"><div class="position-relative form-group"><a class="btn btn-success" style="color: white; float: right;margin-top: 21px;" id="remover"><i class="fa fa-trash"></i></a>');
});
</script> -->
<script type="text/javascript">
            $('.addert').click(function(e) {

    $(".repeatt").append(
        '<div class="form-row adderow"><div class="col-md-4"><div class="position-relative form-group"><label for="exampleEmail11" class="">Button Text</label><input name="URL" id="exampleName" type="text" class="form-control" required="true"></div></div><div class="col-md-4"><div class="position-relative form-group"><label for="examplePassword11" class="">Enter URL</label><input name="URL" id="exampleName" type="url" placeholder="https://" class="form-control"></div></div><div class="col-md-4"><div class="position-relative form-group"><a class="btn btn-danger remover" style="color: white; float: right;margin-top: 21px;"><i class="fa fa-trash"></i></a></div>');
});

// Remove parent of 'remove' link when link is clicked.
    $("body").on("click",".remover",function(e){
       $(this).parents('.adderow').remove();
});
        </script>




               </html>