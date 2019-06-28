<div class="page_content_offset">
    <div class="container">
        <!--banners-->
        <section class="row clearfix">

            <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_50 m_sm_bottom_35">
                <?php
                foreach ($all_banner as $v_banner) {
                    if ($v_banner->banner_status == 4) {
                        ?>
                
                        <a href="#" class="d_block banner animate_ftr wrapper r_corners relative m_xs_bottom_30">
                            <img src="<?php echo base_url() . $v_banner->banner_image ?>" alt="">
                            <span class="banner_caption d_block vc_child t_align_c w_sm_auto">
                                <span class="d_inline_middle">
                                    <span class="d_block color_dark tt_uppercase m_bottom_5 let_s">New Collection!</span>
                                    <span class="d_block divider_type_2 centered_db m_bottom_5"></span>
                                    <span class="d_block color_light tt_uppercase m_bottom_25 m_xs_bottom_10 banner_title"><b>Colored Fashion</b></span>
                                    <span class="button_type_6 bg_scheme_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
                                </span>
                            </span>
                        </a>
                        <?php
                    }
                }
                ?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_50 m_sm_bottom_35">
                <?php
                foreach ($all_banner as $v_banner) {
                    if ($v_banner->banner_status == 5) {
                        ?>
                        <a href="#" class="d_block banner animate_ftr wrapper r_corners type_2 relative">
                            <img src="<?php echo base_url() . $v_banner->banner_image ?>" alt="">
                            <span class="banner_caption d_block vc_child t_align_c w_sm_auto">
                                <span class="d_inline_middle">
                                    <span class="d_block scheme_color banner_title type_2 m_bottom_5 m_mxs_bottom_5"><b>-50%</b></span>
                                    <span class="d_block divider_type_2 centered_db m_bottom_5 d_sm_none"></span>
                                    <span class="d_block color_light tt_uppercase m_bottom_15 banner_title_3 m_md_bottom_5 d_mxs_none">On All<br><b>Sunglasses</b></span>
                                    <span class="button_type_6 bg_dark_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
                                </span>
                            </span>
                        </a>
                        <?php
                    }
                }
                ?>
            </div>
        </section>
        <div class="row clearfix">
            <aside class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                <!--widgets-->
                <figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
                    <figcaption>
                        <h3 class="color_light">Categories</h3>
                    </figcaption>
                    <div class="widget_content">
                        <?php
                        foreach ($all_category as $c_category) {
                            ?>
                            <!--Categories list-->
                            <ul class="categories_list">
                                <li class="active">
                                    <a href="#" class="f_size_large scheme_color d_block relative">
                                        <b><?php echo $c_category->category_name ?></b>
                                        <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                    </a>
                                    <!--second level-->
                            </ul>
                        <?php } ?>
                    </div>
                </figure>




                <!--banner-->
                <?php
                foreach ($all_banner as $v_banner) {
                    if ($v_banner->banner_status == 3) {
                        ?>
                        <a href="#" class="widget animate_ftr d_block r_corners m_bottom_30">
                            <img src="<?php echo base_url() . $v_banner->banner_image ?>" alt="">
                        </a>
                    <?php }
                }
                ?>

                <!--Bestsellers-->
                <figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
                    <figcaption>
                        <h3 class="color_light">Best product</h3>
                    </figcaption>
                    <div class="widget_content">
                        <?php
                        foreach ($best_product as $b_product) {
                            ?>
                            <div class="clearfix m_bottom_15">
                                <img width="90" src="<?php echo base_url() . $b_product->product_image ?>" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                <a href="<?php echo base_url() ?>Welcome/product_details/<?php echo $b_product->product_id ?>/<?php echo $b_product->category_id ?>" class="color_dark d_block bt_link"><?php echo $b_product->product_name ?></a>
                                <!--rating-->
                                <ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                </ul>
                                <p class="scheme_color">Tk.<?php echo $b_product->product_new_price ?></p>
                            </div>
<?php } ?>
                    </div>
                </figure>
                <figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
                    <figcaption>
                        <h3 class="color_light">popular product</h3>
                    </figcaption>
                    <div class="widget_content">
                        <?php
                        foreach ($popular_product as $p_product) {
                            ?>
                            <div class="clearfix m_bottom_15">
                                <img width="90" src="<?php echo base_url() . $p_product->product_image ?>" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                <a href="#" class="color_dark d_block bt_link"><?php echo $p_product->product_name ?></a>
                                <!--rating-->
                                <ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-o empty tr_all_hover"></i>
                                        <i class="fa fa-star active tr_all_hover"></i>
                                    </li>
                                </ul>
                                <p class="scheme_color">Tk<?php echo $p_product->product_new_price ?></p>
                            </div>
<?php } ?>

                    </div>
                </figure>
                <!--tags-->
                <figure class="widget animate_ftr shadow r_corners wrapper">
                    <figcaption>
                        <h3 class="color_light">Tags</h3>
                    </figcaption>
                    <div class="widget_content">
                        <div class="tags_list">
                            <a href="#" class="color_dark d_inline_b v_align_b">accessories,</a>
                            <a href="#" class="color_dark d_inline_b f_size_ex_large v_align_b">bestseller,</a>
                            <a href="#" class="color_dark d_inline_b v_align_b">clothes,</a>
                            <a href="#" class="color_dark d_inline_b f_size_big v_align_b">dresses,</a>
                            <a href="#" class="color_dark d_inline_b v_align_b">fashion,</a>
                            <a href="#" class="color_dark d_inline_b f_size_large v_align_b">men,</a>
                            <a href="#" class="color_dark d_inline_b v_align_b">pants,</a>
                            <a href="#" class="color_dark d_inline_b v_align_b">sale,</a>
                            <a href="#" class="color_dark d_inline_b v_align_b">short,</a>
                            <a href="#" class="color_dark d_inline_b f_size_ex_large v_align_b">skirt,</a>
                            <a href="#" class="color_dark d_inline_b v_align_b">top,</a>
                            <a href="#" class="color_dark d_inline_b f_size_big v_align_b">women</a>
                        </div>
                    </div>
                </figure>
            </aside>
            <section class="col-lg-9 col-md-9 col-sm-9">
                <div class="clearfix">
                    <h2 class="color_dark tt_uppercase f_left m_bottom_15 f_mxs_none heading5 animate_ftr">New Collection</h2>
                    <div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none m_mxs_bottom_5">
                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners nc_prev"><i class="fa fa-angle-left"></i></button>
                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners nc_next"><i class="fa fa-angle-right"></i></button>
                    </div>
                </div>
                <!--bestsellers carousel-->
                <div class="nc_carousel m_bottom_30 m_sm_bottom_20">
                    <?php
                    foreach ($new_product as $n_product) {
                        ?>
                        <figure class="r_corners photoframe animate_ftb long tr_all_hover type_2 t_align_c shadow relative">
                            <!--product preview-->
                            <a href="<?php echo base_url() ?>Welcome/product_details/<?php echo $n_product->product_id ?>/<?php echo $n_product->category_id ?>" class="d_block relative pp_wrap m_bottom_15">
                                <!--hot product-->
                                <span class="hot_stripe type_2"><img src="<?php echo base_url(); ?>asset/front_end/images/hot_product_type_2.png" alt=""></span>
                                <img src="<?php echo base_url() . $n_product->product_image ?>" class="tr_all_hover" alt="">
                                <span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption class="p_vr_0">
                                <h5 class="m_bottom_10"><a href="#" class="color_dark"><?php echo $n_product->product_name ?></a></h5>
                                <div class="clearfix">
                                    <!--rating-->
                                    <ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                    </ul>
                                    <p class="scheme_color f_size_large m_bottom_15">tk.<?php echo $n_product->product_new_price ?></p>
                                </div>
                                <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
                                <div class="clearfix m_bottom_5">
                                    <ul class="horizontal_list d_inline_b l_width_divider">
                                        <li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
                                        <li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
                                    </ul>
                                </div>
                            </figcaption>
                        </figure>
<?php } ?>
                </div>
                <h2 class="tt_uppercase color_dark m_bottom_10 heading5 animate_ftr">Featured All Products</h2>
                <!--products-->
                <section class="products_container a_type_2 category_grid clearfix m_bottom_25">
                    <!--product item-->
                    <?php
                    foreach ($all_product as $v_product) {
                        ?>
                        <div class="product_item hit w_xs_full">
                            <figure class="r_corners photoframe animate_ftb type_2 t_align_c tr_all_hover shadow relative">
                                <!--product preview-->
                                <a href="<?php echo base_url() ?>Welcome/product_details/<?php echo $v_product->product_id ?>/<?php echo $v_product->category_id ?>" class="d_block relative pp_wrap m_bottom_15">
                                    <!--hot product-->
                                    <span class="hot_stripe"><img src="<?php echo base_url(); ?>asset/front_end/images/hot_product.png" alt=""></span>
                                    <img src="<?php echo base_url() . $v_product->product_image ?>" class="tr_all_hover" alt="">
                                    <span role="button"  class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                                </a>
                                <!--description and price of product-->
                                <figcaption>
                                    <h5 class="m_bottom_10"><a href="#" class="color_dark"><?php echo $v_product->product_name ?></a></h5>
                                    <!--rating-->
                                    <ul class="horizontal_list d_inline_b m_bottom_10 clearfix rating_list type_2 tr_all_hover">
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                    </ul>
                                    <p class="scheme_color f_size_large m_bottom_15">TK. <?php echo $v_product->product_new_price ?>  <s class="v_align_b f_size_ex_large">Tk. <?php echo $v_product->product_old_price ?></s></p>	


                                    <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
                                    <div class="clearfix m_bottom_5">
                                        <ul class="horizontal_list d_inline_b l_width_divider">
                                            <li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
                                            <li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
<?php } ?>
                </section>




                <div class="row clearfix m_bottom_15">
                    <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12 m_xs_bottom_10">
                        <p class="d_inline_middle f_size_medium d_xs_block m_xs_bottom_5">Results 1 - 5 of 45</p>
                        <p class="d_inline_middle f_size_medium m_left_20 m_xs_left_0">Show:</p>
                        <!--show items per page select-->
                        <div class="custom_select f_size_medium relative d_inline_middle m_left_5">
                            <div class="select_title r_corners relative color_dark">9</div>
                            <ul class="select_list d_none"></ul>
                            <select name="show">
                                <option value="Manufacture 1">6</option>
                                <option value="Manufacture 2">3</option>
                                <option value="Manufacture 3">1</option>
                            </select>
                        </div>
                        <p class="d_inline_middle f_size_medium m_left_5">items per page</p>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12 t_align_r t_xs_align_l">
                        <!--pagination-->
                        <a role="button" href="#" class="button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-left"></i></a>

                  <?php echo $pagination?>
                        <a role="button" href="#" class="button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>   
                <!--banners-->
                <div class="row clearfix m_bottom_45">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <?php
                        foreach ($all_banner as $v_banner) {
                            if ($v_banner->banner_status == 7) {
                                ?>
                                <a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners red t_align_c tt_uppercase vc_child n_sm_vc_child">
                                    <span class="d_inline_middle">
                                        <img class="d_inline_middle m_md_bottom_5" src="<?php echo base_url() . $v_banner->banner_image ?>" alt="">
                                        <span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
                                            <b>100% Satisfaction</b><br><span class="color_dark">Guaranteed</span>
                                        </span>
                                    </span>
                                </a>
                            <?php }
                        }
                        ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <?php
                        foreach ($all_banner as $v_banner) {
                            if ($v_banner->banner_status == 8) {
                                ?>
                                <a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners green t_align_c tt_uppercase vc_child n_sm_vc_child">
                                    <span class="d_inline_middle">
                                        <img class="d_inline_middle m_md_bottom_5" src="<?php echo base_url() . $v_banner->banner_image ?>" alt="">
                                        <span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
                                            <b>Free<br class="d_none d_sm_block"> Shipping</b><br><span class="color_dark">On All Items</span>
                                        </span>
                                    </span>
                                </a>
    <?php }
} ?>
                    </div>
                </div>

                <!--product brands-->
                <div class="clearfix m_bottom_25 m_sm_bottom_20">
                    <h2 class="tt_uppercase color_dark f_left heading2 animate_fade f_mxs_none m_mxs_bottom_15">Product Brands</h2>
                    <div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none">
                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners pb_prev"><i class="fa fa-angle-left"></i></button>
                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners pb_next"><i class="fa fa-angle-right"></i></button>
                    </div>
                </div>
                <!--product brands carousel-->
                <div class="product_brands with_sidebar m_sm_bottom_35">
                        <?php
                        foreach ($all_manufacture as $m_manufacture) {
                            ?>
                        <a href="#" class="d_block t_align_c animate_fade"><img src="<?php echo base_url() . $m_manufacture->manufacture_image ?>" alt=""></a>
<?php } ?>
                </div>
            </section>
        </div>
    </div>
</div>