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

 <?php echo $this->Html->css('/assets/main.css'); ?>
 <style>
 .error-message{
	 color: darkred
 }
 div.message{
	text-align: center;
	cursor: pointer;
	display: block;
	font-weight: normal;
	padding: 0 1.5rem 0 1.5rem;
	transition: height 300ms ease-out 0s;
	background-color: #a0d3e8;
	color: #626262;
	top: 15px;
	right: 15px;
	z-index: 999;
	overflow: hidden;
	height: 50px;
	line-height: 2.5em;
}

div.message.error {
    background-color: #C3232D;
    color: #FFF;
}
 </style>
</head>
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
                                                    <!--<button type="button" tabindex="0" class="dropdown-item"  data-toggle="modal" data-target="#changePass">Change Password</button>-->
                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                    <a href="<?= $this->Url->build(['controller'=>'Users','action' =>'logout'])?>" type="" tabindex="0" class="dropdown-item">Log Out</a>
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
			
                <div class="app-sidebar sidebar-shadow navt" id="navt">
				
				  <?= $this->element('menu'); ?>
                    <!--<div class="app-header__logo">
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
                    </div> -->   
                </div>
				<div class="app-main__outer">
					 <div class="app-main__inner">
						<div class="row flash_message" style="z-index: 9; position: absolute;margin-top: -27px;right: 30px;">
						 <?php echo $this->Flash->render() ?>
						</div> 
						 <?= $this->fetch('content') ?>
					 </div>
				 </div>
			</div>
        </div>
		<?php echo $this->Html->script('/assets/scripts/main.js'); ?>
		
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous">
  </script>
  <script>
	var delayInMilliseconds = 5000; //1 second

	setTimeout(function() { 
		$('.flash_message').hide();
		$('.error-message').hide();
	}, delayInMilliseconds);
	
	$(document).ready(function(){ 
	  $("#myInput").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#myTable tr").filter(function() {
		  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	  });
	});
	</script>
        </body>
  
        </html>

			<div class="modal fade" id="changePass" tabindex="-1" role="dialog" aria-labelledby="passTitle" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="passTitle">Change Password</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-row">
											 <div class="col-md-12">
												<div class="position-relative form-group" style="font-weight: 600;"><label for="oldPassword11" class="">Old Password</label><input name="OldPassword" id="OldPass" type="Password" class="form-control"></div>
											</div>
										</div>
										<div class="form-row">
											 <div class="col-md-12">
												<div class="position-relative form-group" style="font-weight: 600;"><label for="newPassword11" class="">New Password</label><input name="NewPassword" id="newPass" type="Password" class="form-control"></div>
											</div>
										</div>
										<div class="form-row">
											 <div class="col-md-12">
												<div class="position-relative form-group" style="font-weight: 600;"><label for="newPassword11" class="">Re-Enter New Password</label><input name="ReNewPassword" id="renewPass" type="Password" class="form-control"></div>
											</div>
										</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-warning">Save changes</button>
						</div>
					</div>
				</div>
			</div>
		
		
		
		
		
		
		
		
				
				
				
				
				