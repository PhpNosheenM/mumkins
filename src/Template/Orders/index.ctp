
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
                                                        
                                                       Orders
                                                    </div>
                                                    <ul class="nav">
                                                        <!-- <li class="nav-item"><a class="mb-2 mr-2 btn btn-warning" href="#" style="background-color: #309b04;border-color: #309b04;"><i class="fa fa-file-excel"></i>&nbsp;&nbsp;Upload</a></li> -->

                                                       <!--  <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-0" class="active nav-link">Add</a></li>
                                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-1" class="nav-link">View</a></li>
 -->
                                                        <!-- <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-2" class="nav-link"><i class="fa fa-file-excel"></i>&nbsp;&nbsp;Upload</a></li> -->

                                                    </ul>
                                                </div>
                                                
                                                    <div class="tab-content">
                                                     
                            

                                        <div class="tab-pane active" id="tab-eg5-1" role="tabpanel">
                                            <div class="col-m-10">
                                    
                                        <div class="card-body">
                                           <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Order No</th>
                                                        <th>Customer</th>
                                                        <th>Mobile</th>
                                                        <th>Address</th>
                                                        <th>Grand Total</th>
                                                        <th>Mode Of Payment</th>
                                                        <th>Order From</th>
                                                        <th>Order Date</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php $i=1;foreach ($orders as $order) {?>
                                                        <td><?= $i;$i++; ?></td>
                                                        <td><?= @$order->order_no ?></td>
                                                        <td><?= @$order->customer->name ?></td>
                                                        <td><?= @$order->customer->mobile ?></td>
                                                        <td><?= @$order->customer_address->name ?></td>
                                                        <td><?= @$order->grand_total ?></td>
                                                        <td>COD</td>
                                                        <td><?= @$order->order_from ?></td>
                                                        <td><?= @$order->order_date ?></td>
                                                        <td><?= @$order->order_status ?></td>
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
