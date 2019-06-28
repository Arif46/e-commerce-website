<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix"> 
            <form action="<?php echo base_url()?>Checkout/confirm_order" method="post">
            <h2 class="tt_uppercase color_dark m_bottom_30">Payment</h2>
            <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
                <figure class="block_select clearfix relative m_bottom_15">
                    <input type="radio" checked name="payment_method" value="cash_on_delivery" class="d_none">
                    <img src="<?php echo base_url()?>asset/front_end/images/cash.png" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
                    <figcaption class="d_table d_sm_block">
                        <div class="d_table_cell d_sm_block p_sm_right_0 p_right_45 m_mxs_bottom_5">
                            <h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Cash on Delivery</h5>
                            <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turp. Donec sit amet eros. </p>
                        </div>
                    </figcaption>
                </figure>
                <hr class="m_bottom_20">
                <figure class="block_select clearfix relative">
                    <input type="radio" name="payment_method" value="paypal" class="d_none">
                    <img src="<?php echo base_url()?>asset/front_end/images/paypal.png" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10">
                    <figcaption>
                        <h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Paypal</h5>
                        <p>Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. Mauris fermentum dictum magna. 
                            Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.</p>
                    </figcaption>
                </figure>
            </div>
            <button type="submit" class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Payment Submit</button>
        </form>
        </div>
    </div>
</div>
