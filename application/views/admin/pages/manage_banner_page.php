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
                        <th>Banner ID</th>
                        <th>Banner name</th>
                        <th>Banner type</th>
                        <th>Banner status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <?php
                foreach ($all_banner as $v_banner)
                    {
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $v_banner->banner_id?></td>
                            <td class="center"><?php echo $v_banner->banner_name?></td>
                            <td class="center"><?php echo $v_banner->banner_type?></td>
                            <td class="center">
                                <?php 
                                if($v_banner->banner_status==1){
                                    echo '<span class="btn btn-success">OFF</span>';
                                }
                               elseif($v_banner->banner_status==0){
                                   echo '<span class="btn btn-danger">ON</span>';
                               }
                                  elseif($v_banner->banner_status==2){
                                      echo '<span class="btn btn-danger">Top</span>';
                                }
                                   elseif($v_banner->banner_status==3){
                                      echo '<span class="btn btn-danger">Middle</span>';
                                }
                                   elseif($v_banner->banner_status==4){
                                      echo '<span class="btn btn-danger">Middle right</span>';
                                }
                                    elseif($v_banner->banner_status==5){
                                      echo '<span class="btn btn-danger">Middle left</span>';
                                }
                                  elseif($v_banner->banner_status==6){
                                      echo '<span class="btn btn-danger">Bottom</span>';
                                }
                                   elseif($v_banner->banner_status==7){
                                      echo '<span class="btn btn-danger">Bottom right</span>';
                                }
                                     elseif($v_banner->banner_status==8){
                                      echo '<span class="btn btn-danger">Bottom left</span>';
                                }
                                ?>
                            </td>
                              <td class="center">
                                  <?php
                                    if($v_banner->banner_status==1)
                                    {
                                  ?>
                                  <a class="btn btn-primary" href="<?php echo base_url()?>Super_Admin/banner_off/<?php echo $v_banner->banner_id?>" role="button">OFF</a>
                                   <?php } else { ?>
                                        <a class="btn btn-primary" href="<?php echo base_url()?>Super_Admin/banner_on/<?php echo $v_banner->banner_id?>" role="button">ON</a>
                                        <a class="btn btn-primary" href="<?php echo base_url()?>Super_Admin/banner_top/<?php echo $v_banner->banner_id?>" role="button">Top</a>                            
                                           <a class="btn btn-primary" href="<?php echo base_url()?>Super_Admin/banner_middle/<?php echo $v_banner->banner_id?>" role="button">Middle</a>                            
                                           <a class="btn btn-primary" href="<?php echo base_url()?>Super_Admin/banner_midddle_right/<?php echo $v_banner->banner_id?>" role="button">M-Right</a>                            
                                           <a class="btn btn-primary" href="<?php echo base_url()?>Super_Admin/banner_middle_left/<?php echo $v_banner->banner_id?>" role="button">M-Left</a>                            
                                           <a class="btn btn-primary" href="<?php echo base_url()?>Super_Admin/banner_bottom/<?php echo $v_banner->banner_id?>" role="button">Bottom</a>                            
                                           <a class="btn btn-primary" href="<?php echo base_url()?>Super_Admin/banner_bottom_right/<?php echo $v_banner->banner_id?>" role="button">B-Right</a>                            
                                           <a class="btn btn-primary" href="<?php echo base_url()?>Super_Admin/banner_bottom_left/<?php echo $v_banner->banner_id?>" role="button">B-Left</a>                            
                                    <?php }?>
                                  
                                  <a class="btn btn-danger" href="<?php echo base_url()?>Super_Admin/banner_delete/<?php echo $v_banner->banner_id ?>"  onclick="return bannerDelete()">
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




