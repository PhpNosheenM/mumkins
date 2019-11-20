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

               <div class="row">
                   <div class="col-md-12 card">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title">
                                                    <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
                                                   CUSTOMER DETAILS
                                                </div>
                                            </div>
                                            
                                                <div class="tab-content">
                                                    <div>
                                                        <div class="col-m-10">
                                
                                    <div class="card-body">
                                       <table class="mb-0 table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Mobile No</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1;foreach ($customer_views as $customer_view) {?>
                                            <tr>
                                                <th scope="row"><?= $i;$i++;?></th>
                                                <td><span id=""><?= $customer_view->first_name?></span>&nbsp;<span id=""><?= $customer_view->last_name?></span></td>
                                                <td><?= $customer_view->email?></td>
                                                <td><?= $customer_view->mobile?></td>
                                                <td>
                                                    <?= $this->Html->link(__('<i class="pe-7s-note"></i>'), ['action' => 'addresses', $customer_view->id],['class'=>' btn-condensed btn-xs','escape'=>false]) ?></td>
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
                </div>
            
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
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
    $(function(){
    var current = location.pathname;
    $('#navemenut li a').each(function(){
        var $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1){
            $this.addClass('mm-active');
        }
    })
});
</script>


<script>
 $('.apAddRow').click(function(e) {

    $(".repeatt1").append(
        '<div class="adder"><hr><div class="form-row"><div class="col-md-6"><div class="position-relative form-group"><label for="exampleEmail11" class="">Address Line 1</label><input name="address" id="exampleaddress" type="address" class="form-control" required="true"></div></div><div class="col-md-6"><div class="position-relative form-group"><label for="examplePassword11" class="">Address Line 2</label><input name="address" id="exampleaddress" type="address" class="form-control"></div></div></div><div class="form-row"><div class="col-md-6"><div class="position-relative form-group"><label for="exampleState" class="">Select State</label><select class="mb-2 form-control"><option>Default Select</option><option>Rajasthan</option><option>Maharastra</option></select></div></div><div class="col-md-6"><div class="position-relative form-group"><label for="exampleState" class="">Select City</label><select class="mb-2 form-control"><option>Default Select</option><option>Udaipur</option><option>Jaipur</option><option>Mumbai</option></select></div></div></div><div class="form-row"><div class="col-md-6"><div class="position-relative form-group"><label for="examplePincode" class="">Enter Pincode</label><input name="pincode" id="examplePincode" type="string" maxlength="6" placeholder="Ex:313001" class="form-control"></div></div><div class="col-md-6"><a class="rhov btn remover1" style=" margin-top: 24px; color: white; float: right; cursor:pointer;"><i class="fa fa-trash"></i>REMOVE</a></div></div></div>');
});

// Remove parent of 'remove' link when link is clicked.
    $("body").on("click",".remover1",function(e){
       $(this).parents('.adder').remove();
});
        </script>

<!-- <script type="text/javascript">
    var base = "customer.html"
   jQuery.address.change(function(event) {
    if (event.value) {
        // remove active class on all nav links
        $("#navet li a").removeClass("mm-active");
        // get current link and add active class to it
        $("nav ul li a").each(function() {
            var dataPath = jQuery(this).attr("href").replace(
                base, '');
            $(this).attr("data-path", dataPath);
            if (dataPath == (event.value)) {
                $(this).addClass("mm-active");
            }
        });
    }
});
</script> -->

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