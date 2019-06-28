<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Tables</a></li>
</ul>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Order id</th>
                        <th>Grand total</th>
                        <th>order activation</th>
                        <th>order time</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($all_order as $v_order) {
                        ?>
                        <tr>
                            <td><?php echo $v_order->order_id?></td>
                           <td><?php  echo $v_order->grand_total?></td>
                              <td class="center">
                                <?php 
                                if($v_order->order_activation =='pending'){
                                    echo '<span class="label label_success">pending</span>';
                                }
                                else{
                                      echo '<span class="label label_success">complete </span>';
                                }
                                ?>
                            </td>
                            <td><?php  echo $v_order->create_date_time?></td>
                            <td class="center">
                                <?php 
                                if($v_order->order_activation=='pending')
                                {
                                    ?>
                                    <a class="btn btn-success" href="<?php echo base_url() ?>Super_Admin/pending_order/<?php echo $v_order->order_id ?>">
                                        <i class="halflings-icon white thumbs-down"></i>  
                                    </a>
                                <?php } else{?>
                                 <a class="btn btn-success" href="<?php echo base_url() ?>Super_Admin/complete_order/<?php echo $v_order->order_id ?>">
                                        <i class="halflings-icon white thumbs-up"></i>  
                                    </a>
                                <?php }?>
                                
                                <a class="btn btn-info" href="<?php echo base_url()?>Super_Admin/view_order/<?php echo $v_order->order_id ?>">
                                    <i class="icon-zoom-in icon-white"></i>  
                                </a>
                                
                                 <a class="btn btn-info" href="<?php echo base_url()?>Super_Admin/create_invoice/<?php echo $v_order->order_id ?>">
                                    <i class="halflings-icon white download"></i>  
                                </a>
                                <a class="btn btn-info" href="<?php echo base_url()?>Super_Admin/create_print/<?php echo $v_order->order_id ?>">
                                    <i class="halflings-icon white print"></i>  
                                </a>
                                
                                <a class="btn btn-danger" href="<?php echo base_url() ?>Super_Admin/invoice_delete/<?php echo $v_order->order_id ?>" onclick="return invoiceDelete()">
                                    <i class="halflings-icon white trash"></i> 
                                </a>
                                
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>





