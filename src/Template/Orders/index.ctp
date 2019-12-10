
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


</head>
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
             <?= $this->Form->create($order) ?>
                <table width="50%" class="table table-condensed">
                    <tbody>
                        <tr>
                            <td width="8%">
                                <label>Order No</label>
                                <?php echo $this->Form->input('order_no', ['label' => false,'class' => 'form-control input-sm','placeholder'=>'Order No','autocomplete'=>'off']); ?>
                            </td>
                            <td width="5%">
                                <label>Customer</label>
                                <?php echo $this->Form->input('customer_id', ['empty'=>'--Customer--','options' => $customers,'label' => false,'class' => 'form-control input-sm select2me','placeholder'=>'Category']); ?>
                            </td>
                           
                            <td width="5%">
                                <label class=" control-label">Status </label>
                                <select name="status" class="form-control select2me input-sm">
                                    <option value="">--Select--</option>
                                    <option value="In Process">In Process</option>
                                    <option value="Packed">Packed</option>
                                    <option value="Dispatch">Dispatch</option>
                                    <option value="Delivered">Delivered</option>
                                </select>
                            </td>
                            <td width="5%">
                                <label>From</label>
                                <input type="text" name="From" class="form-control input-sm date-picker" placeholder="Transaction From"  data-date-format="dd-mm-yyyy" autocomplete="off">
                            </td>   
                            <td width="5%">
                                <label>To</label>
                                <input type="text" name="To" class="form-control input-sm date-picker" placeholder="Transaction To"   data-date-format="dd-mm-yyyy" autocomplete="off">
                            </td>
                            <td width="10%">
                                <button type="submit" class="btn btn-success btn-sm" style="margin-top: 23px !important;"><i class="fa fa-filter"></i> Filter</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?= $this->Form->end() ?>
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
                                    <th>Warehouses</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php $i=1;foreach ($orders as $order) {?>
                                <tr>
                                    <td><?= $i;$i++; ?></td>
                                    <td><?= @$order->order_no ?></td>
                                    <td><?= @$order->customer->name ?></td>
                                    <td><?= @$order->customer->mobile ?></td>
                                    <td><?= @$order->customer_address->name ?></td>
                                    <td><?= @$order->grand_total ?></td>
                                    <td>COD</td>
                                    <td><?= @$order->order_from ?></td>
                                    <td><?= @$order->order_date ?></td>
                                    <td><?= @$order->order_status ?>
                                        <input type="hidden" name="id" class="id" value="<?= $order->id?>">
                                    </td>
                                    <td><?php echo $this->Form->control('warehouses_id', ['empty'=>'--select--','options' =>$warehouses,'class'=>'form-control input-sm attribute warehouses','label'=>false]); ?>
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
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.warehouses').on('change',function(){
            var warehouse_id=$(this).val();
            var id=$(this).closest('tr').find('.id').val();
            //alert(id);
            var url="<?php echo $this->Url->build(['controller'=>'Orders','action'=>'updateWarehouse']); ?>";
                            url=url+'/'+warehouse_id+'/'+id,
                        $.ajax({
                            url: url,
                        }).done(function(response) {
                           alert('Warehouse Assigned');
                        }); 
        });
    });
</script>