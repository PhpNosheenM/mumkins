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
            <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
                        <div class="app-header header-shadow">
                        <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="app-header__content">
                            <center>Mumkins Admin Console</center>
                                            <div class="app-header-right">
                            <div class="header-btn-lg pr-0">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                           <!--  <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <div class="widget-heading">
                                        Options
                                    </div>
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div> -->
                                            <div class="btn-group">
                                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                    <div class="widget-heading" style="font-size:14px; ">Options
                                                    <i class="fa fa-angle-down ml-2 opacity-8"></i></div>
                                                    
                                                </a>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                    <button type="button" tabindex="0" class="dropdown-item">Change Password</button>
                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                    <a href="login.html" type="button" tabindex="0" class="dropdown-item">Log Out</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>
                    </div>
                 </div>
        <div class="app-main">
                        <div class="app-sidebar sidebar-shadow" id="navt">
                            <div class="app-header__logo">
                                <div class="logo-src"></div>
                                <div class="header__pane ml-auto">
                                    <div>
                                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                            <span class="hamburger-box">
                                                <span class="hamburger-inner"></span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="app-header__mobile-menu">
                                <div>
                                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="app-header__menu">
                                <span>
                                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                        <span class="btn-icon-wrapper">
                                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                                        </span>
                                    </button>
                                </span>
                            </div>    
                        </div>
                   
                       




                    <div class="app-main__outer">
                         <div class="app-main__inner">
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
                                            <form class="">
                                                <label for="example" class="">Select Items to show</label>
                                                <div class="form-row repeatt" style="border: 1px solid #ced4da; border-radius: .25rem; margin: 0 0 16px;">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group" style="margin-top: 10px;">
                                                            <select class="mb-2 form-control">
                                                        <option>Default Select</option>
                                                        <option>It no- 732 | Boys</option>
                                                        <option>It no- 432 | Girls Top</option>
                                                    </select>
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
                                                    <th>Item Name</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td><p>It no- 732 | Boys</p></td>
                                                    <td><span><a href="#"> <i class="pe-7s-note"></i></a></span><span><a href="#"><i class="pe-7s-trash"></i></a></span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td><p>It no- 432 | Girls Top</p></td>
                                                    <td><span><a href="#"> <i class="pe-7s-note"></i></a></span><span><a href="#"><i class="pe-7s-trash"></i></a></span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td><p>It no- 712 | Boys</p></td>
                                                    <td><span><a href="#"> <i class="pe-7s-note"></i></a></span><span><a href="#"><i class="pe-7s-trash"></i></a></span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td><p>It no- 322 | Baby</p></td>
                                                    <td><span><a href="#"> <i class="pe-7s-note"></i></a></span><span><a href="#"><i class="pe-7s-trash"></i></a></span></td>
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
        <script type="text/javascript">
            $('.addert').click(function(e) {

    $(".repeatt").append(
        '<div class="col-md-12 adderow" ><div class="col-md-6" style="margin-left: -15px;"><div class="position-relative form-group" style="margin-top: 10px;margin-right: -26px;"><select class="mb-2 form-control"><option>Default Select</option><option>It no- 732 | Boys</option><option>It no- 432 | Girls Top</option></select></div></div><div class=""><div class="position-relative form-group"><a class="btn btn-danger remover" style="color: white; float: right;margin-top: -45px;"><i class=" fa fa-trash"></i></a></div></div></div>');
});

// Remove parent of 'remove' link when link is clicked.
    $("body").on("click",".remover",function(e){
       $(this).parents('.adderow').remove();
});
        </script>




               </html>