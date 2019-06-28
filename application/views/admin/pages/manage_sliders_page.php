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
                        <th>sliders name</th>
                        <th>publication status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <?php
                foreach ($all_sliders as $v_sliders) {
                    
                    ?>
                    
                    <tbody>
                        <tr>
                            <td><?php echo $v_sliders->sliders_id?></td>
                            <td class="center"><?php echo $v_sliders->sliders_name?></td>
                            <td class="center">
                                <?php 
                                if($v_sliders->publication_status==1){
                                    echo '<span class="label label_success">publication</span>';
                                }
                                else{
                                      echo '<span class="label label_success">unpublication</span>';
                                }
                                ?>
                            </td>
                                  
                            <td class="center">
                              <?php 
                              if($v_sliders->publication_status==1)
                              {
                                  ?>
                                <a class="btn btn-danger" href="<?php echo base_url()?>Super_Admin/sliders_unpublished/<?php echo $v_sliders->sliders_id?>">
                                    <i class="halflings-icon white thumbs-up"></i>  
                                </a>
                              <?php } else{?>
                                   
                                 <a class="btn btn-success" href="<?php echo base_url()?>Super_Admin/sliders_published/<?php echo $v_sliders->sliders_id?>">
                                    <i class="halflings-icon white thumbs-down"></i>  
                                </a>
                              <?php }?>
                              
                               
                                
                                <a class="btn btn-info" href="<?php echo base_url()?>Super_Admin/sliders_edit/<?php  echo $v_sliders->sliders_id?>">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <a class="btn btn-danger" href="<?php echo base_url()?>Super_Admin/sliders_delete/<?php echo $v_sliders->sliders_id ?>"  onclick="return productDelete()">
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


                       
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                       