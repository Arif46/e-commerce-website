<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">  

            <h2 class="color_dark tt_uppercase m_bottom_25">Shipment Information</h2>
            <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                        <h5 class="fw_medium m_bottom_15">Shipping to</h5>
                        <form action="<?php echo base_url()?>Checkout/save_shipping" method="post">
                            <ul>
                                <li class="m_bottom_15">
                                    <label for="c_name_1" class="d_inline_b m_bottom_5">Shipping Name</label>
                                    <input type="text" id="c_name_1" name="shipping_name" class="r_corners full_width">
                                </li>
                                <li class="m_bottom_15">
                                    <label for="c_name_1" class="d_inline_b m_bottom_5">Shipping email</label>
                                    <input type="email" id="c_name_1" name="shipping_email" class="r_corners full_width">
                                </li>
                                <li class="m_bottom_15">
                                    <label for="c_name_1" class="d_inline_b m_bottom_5">Shipping phone</label>
                                    <input type="text" id="c_name_1" name="shipping_phone" class="r_corners full_width">
                                </li>
                                <li class="m_bottom_15">
                                    <label for="c_name_1" class="d_inline_b m_bottom_5">city </label>
                                    <input type="text" id="c_name_1" name="city" class="r_corners full_width">
                                </li>
                                <li class="m_bottom_15">
                                    <label for="c_name_1" class="d_inline_b m_bottom_5">zip code</label>
                                    <input type="text" id="c_name_1" name="zip_code" class="r_corners full_width">
                                </li>
                                <li class="m_bottom_15">
                                    <label class="d_inline_b m_bottom_5 required">Country</label>
                                    <!--product name select-->
                                    <div class="custom_select relative">
                                        <div class="select_title type_2 r_corners relative color_dark mw_0">Please select</div>
                                        <ul class="select_list d_none"></ul>
                                        <select id="country2" name="country2">
                                         <script type="text/javascript">
//                                                printCountryOptions();
                                                populateCountries("country2");
                                                </script>
                                        </select>
                                    </div>
                                </li>
                                 <li class="m_bottom_15">
                                         <label class="d_inline_b m_bottom_5">Address</label>
                                        <textarea id="notes" name="address" class="r_corners notes full_width"></textarea>
                                    </li>
                                    <br>
                                <li>
                                    <button class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">shipping continue</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


