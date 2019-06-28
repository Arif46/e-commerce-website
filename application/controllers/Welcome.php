<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $data = array();
        $data['title'] = "Home Page";
        $data['slider']=TRUE;
        //$data['all_product']=$this->Welcome_Model->select_all_product_info();
        $data['new_product']=$this->Welcome_Model->select_new_product_info();
        $data['best_product']=$this->Welcome_Model->select_best_product_info();
        $data['popular_product']=$this->Welcome_Model->select_popular_product_info();
         /*
         * Start Pagination
         */
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'Welcome/index/';
        $config['total_rows'] = $this->db->count_all('tbl_product');
        $config['per_page'] =6;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['full_tag_open'] = '<ul class="pagination horizontal_list clearfix d_inline_middle f_size_medium m_left_10">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li class="m_right_10" style="font-size:20px">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev m_right_10" style="font-size:20px">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="m_right_10" >';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="m_right_10" >';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active m_right_10" style="font-size:20px"><a href="#" class="color_dark" style="font-size:20px">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li style="font-size:20px">';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['all_product'] = $this->Welcome_Model->select_all_product($config['per_page'], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
        /*
         * End Pagination
         */
        
        $data['all_manufacture']=$this->Welcome_Model->select_all_manufacture_info();
        $data['all_sliders']=$this->Welcome_Model->select_all_sliders_info();
        $data['all_category']=$this->Welcome_Model->select_all_category_info();
        $data['all_banner']=$this->Welcome_Model->select_all_banner_info();
        $data['main_content'] = $this->load->view('pages/home_page', $data, TRUE);
        $data['all_category']=$this->Welcome_Model->select_all_cateory();
        $this->load->view('master', $data);
    }
    public function product_details($product_id,$category_id){
         $data = array();
        $data['title'] = "product details Page";
        $data['slider']=FALSE;
        $data['select_product']=$this->Welcome_Model->select_product_info_by_product_id($product_id);
         $hit_count=$data['select_product']->product_hit_count +1;
        $this->Welcome_Model->update_product_hit_count($hit_count,$product_id);
        $data['category_product']=$this->Welcome_Model->select_product_info_by_category_id($category_id);
        $data['main_content'] = $this->load->view('pages/product_details_page', $data, TRUE);
        $data['all_category']=$this->Welcome_Model->select_all_cateory();
        $this->load->view('master', $data);
    }

    public function contact() {
        $data = array();
        $data['title'] = "Contact Page";
        $data['slider'] = FALSE;
        $data['main_content'] = $this->load->view('pages/contact_page', '', TRUE);
        $this->load->view('master', $data);
    }

}
