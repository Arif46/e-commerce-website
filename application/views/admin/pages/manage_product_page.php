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
                        <th>ID</th>
                        <th>Product name</th>
                        <th>Product description</th>
                        <th>Product image</th>
                        <th>Product Old price</th>
                        <th>Product New price</th>
                        <th>product Quantity</th>
                        <th>Product sku</th>
                        <th>Product service</th>     
                        <th>Product publication status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <?php
                foreach ($all_product as $v_product) {
                    
                    ?>
                    
                    <tbody>
                        <tr>
                            <td><?php echo $v_product->product_id ?></td>
                            <td class="center"><?php echo $v_product->product_name ?></td>
                            <td class="center"><?php echo $v_product->product_description ?></td>
                            <td class="center"><img width="50" src="<?php echo base_url(). $v_product->product_image ?>"></td>
                            <td class="center"><?php echo $v_product->product_old_price ?></td>
                            <td class="center"><?php echo $v_product->product_new_price ?></td>
                            <td class="center"><?php echo $v_product->product_quantity ?></td>
                            <td class="center"><?php echo $v_product->product_sku ?></td>
                            <td class="center"><?php echo $v_product->product_service ?></td>
                            
                            <td class="center">
                                <?php 
                                if($v_product->product_publication_status==1){
                                    echo '<span class="label label_success">publication</span>';
                                }
                                else{
                                      echo '<span class="label label_success">unpublication</span>';
                                }
                                ?>
                            </td>
                                  
                            <td class="center">
                              <?php 
                              if($v_product->product_publication_status==1)
                              {
                                  ?>
                                <a class="btn btn-danger" href="<?php echo base_url()?>Super_Admin/product_unpublished/<?php echo $v_product->product_id?>">
                                    <i class="halflings-icon white thumbs-up"></i>  
                                </a>
                              <?php } else{?>
                                   
                                 <a class="btn btn-success" href="<?php echo base_url()?>Super_Admin/product_published/<?php echo $v_product->product_id?>">
                                    <i class="halflings-icon white thumbs-down"></i>  
                                </a>
                              <?php }?>
                              
                               
                                
                                <a class="btn btn-info" href="<?php echo base_url()?>Super_Admin/product_edit/<?php  echo $v_product->product_id?>">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <a class="btn btn-danger" href="<?php echo base_url()?>Super_Admin/product_delete/<?php echo $v_product->product_id ?>"  onclick="return productDelete()">
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





                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        