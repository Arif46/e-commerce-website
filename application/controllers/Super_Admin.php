<?php

class Super_Admin extends CI_Controller {

//put your code here

public function __construct() {
parent::__construct();
$admin_id = $this->session->userdata('admin_id');
if ($admin_id == NULL) {
redirect('Admin', 'refresh');
}
}

public function index() {
$data = array();
$data['admin_maincontent'] = $this->load->view('admin/pages/dashboard_page', '', TRUE);
$this->load->view('admin/admin_master', $data);
}

//---------------------------start category
public function add_category() {
$data = array();
$data['admin_maincontent'] = $this->load->view('admin/pages/add_category_page', ' ', TRUE);
$this->load->view('admin/admin_master', $data);
}

public function save_category() {
$data = array();
$data['category_name'] = $this->input->post('category_name', TRUE);
$data['category_description'] = $this->input->post('category_description', TRUE);
$data['publication_status'] = $this->input->post('publication_status', TRUE);
//print_r($data);
$this->Super_Admin_Model->save_category_info($data);
$sdata = array();
$sdata['msg'] = "category information save succesfully";
$this->session->set_userdata($sdata);
redirect('Super_Admin/add_category');
}

public function manage_category() {
$data = array();
$data['all_category'] = $this->Super_Admin_Model->select_all_category_info();
$data['admin_maincontent'] = $this->load->view('admin/pages/manage_category_page', $data, TRUE);
$this->load->view('admin/admin_master', $data);
}

//-------------------------------end category
public function category_delete($category_id) {
$this->Super_Admin_Model->delete_category_by_category_id($category_id);
redirect('Super_Admin/manage_category');
}

public function category_unpublished($category_id) {
$this->Super_Admin_Model->unpublished_category_by_category_id($category_id);
redirect('Super_Admin/manage_category');
}

public function category_published($category_id) {
$this->Super_Admin_Model->published_category_by_category_id($category_id);
redirect('Super_Admin/manage_category');
}

public function category_edit($category_id) {
$data = array();
$data['select_category'] = $this->Super_Admin_Model->select_category_by_category_id($category_id);
$data['admin_maincontent'] = $this->load->view('admin/pages/edit_category_page', $data, TRUE);
$this->load->view('admin/admin_master', $data);
}

public function update_category() {
$category_id = $this->input->post('category_id', TRUE);
$data = array();
$data['category_name'] = $this->input->post('category_name', TRUE);
$data['category_description'] = $this->input->post('category_description', TRUE);
$data['publication_status'] = $this->input->post('publication_status', TRUE);
$this->Super_Admin_Model->update_category_info($data, $category_id);
redirect("Super_Admin/manage_category");
}

//--------end category
//-----start manufacture
public function add_manufacture() {
$data = array();
$data['admin_maincontent'] = $this->load->view('admin/pages/add_manufacture_page', '', TRUE);
$this->load->view('admin/admin_master', $data);
}
public function save_manufacture()
{
$data = array();
$data['manufacture_name'] = $this->input->post('manufacture_name', TRUE);
$data['manufacture_description'] = $this->input->post('manufacture_description', TRUE);
$data['publication_status'] = $this->input->post('publication_status', TRUE);

/*
 * Start File Upload
 */
$config['upload_path'] = 'asset/back_end/manufacture_image/';
$config['allowed_types'] = 'gif|jpg|png|jpeg/';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
$this->load->library('upload', $config);
$this->upload->initialize($config);
$error = '';
$fdata = array();

if (!$this->upload->do_upload('manufacture_image')) {
$error = $this->upload->display_errors();
$sdata = array();
$sdata['message'] = $error;
$this->session->set_userdata($sdata);
redirect("Super_Admin/add_manufacture");
} else {
$fdata = $this->upload->data();
$data['manufacture_image'] = $config['upload_path'] . $fdata['file_name'];
}

/*
 * End File Upload
 */

$this->Super_Admin_Model->save_manufacture_info($data);
$sdata = array();
$sdata['msg'] = "Manufacture Information Save Successfully";
$this->session->set_userdata($sdata);
redirect("Super_Admin/add_manufacture");
}
public function manage_manufacture(){
    $data=array();
    $data['all_manufacture']=$this->Super_Admin_Model->select_all_manufacture_info();
    $data['admin_maincontent']=$this->load->view('admin/pages/manage_manufacture_page',$data,TRUE);
   $this->load->view('admin/admin_master',$data);
}
public function manufacture_delete($manufacture_id){
    $this->Super_Admin_Model->delete_manufacture_by_manufacture_id($manufacture_id);
    redirect("Super_Admin/manage_manufacture");
}
public function manufacture_unpublished($manufacture_id){
    $this->Super_Admin_Model->unpublished_manufacture_by_manufacture_id($manufacture_id);
    redirect("Super_Admin/manage_manufacture");
}
public function manufacture_published($manufacture_id){
    $this->Super_Admin_Model->published_manufacture_by_manufacture_id($manufacture_id);
    redirect("Super_Admin/manage_manufacture");
}
public function manufacture_edit($manufacture_id){
    $data=array();
    $data['select_manufacture']=$this->Super_Admin_Model->select_manufacture_by_manufacture_id($manufacture_id);
    $data['admin_maincontent']=$this->load->view('admin/pages/edit_manufacture_page',$data, TRUE);
    $this->load->view('admin/admin_master',$data);
}
public function update_manufacture(){
    $sliders_id=$this->input->post('manufacture_id',TRUE);
    $data=array();
    $data['manufacture_name']=$this->input->post('manufacture_name',TRUE);
    $data['manufacture_description']=$this->input->post('manufacture_description',TRUE);
    $data['publication_status']=$this->input->post('publication_status',TRUE);
    
    $this->Super_Admin_Model->update_manufacture_info($data,$sliders_id);
    redirect("Super_Admin/manage_manufacture");
}




//------end manufacture
//--------------add product
public function add_product(){
    $data = array();
    $data['all_category']=$this->Super_Admin_Model->select_all_category();
    $data['all_manufacture']=$this->Super_Admin_Model->select_all_manufacture_info();
    $data['all_product']=$this->Super_Admin_Model->select_all_product_info();
  $data['admin_maincontent'] = $this->load->view('admin/pages/add_product_page', $data, TRUE);
$this->load->view('admin/admin_master', $data);
}
public function save_product(){
    $data = array();
$data['category_id'] = $this->input->post('category_id', TRUE);
$data['manufacture_id'] = $this->input->post('manufacture_id', TRUE);
$data['product_name'] = $this->input->post('product_name', TRUE);
$data['product_description'] = $this->input->post('product_description', TRUE);
$data['product_old_price'] = $this->input->post('product_old_price', TRUE);
$data['product_new_price'] = $this->input->post('product_new_price', TRUE);
$data['product_quantity'] = $this->input->post('product_quantity', TRUE);
$data['product_sku'] = $this->input->post('product_sku', TRUE);

$data['product_publication_status'] = $this->input->post('product_publication_status', TRUE);

/*
 * Start File Upload
 */
$config['upload_path'] = 'asset/back_end/product_image/';
$config['allowed_types'] = 'gif|jpg|png|jpeg/';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
$this->load->library('upload', $config);
$this->upload->initialize($config);
$error = '';
$fdata = array();

if (!$this->upload->do_upload('product_image')) {
$error = $this->upload->display_errors();
$sdata = array();
$sdata['message'] = $error;
$this->session->set_userdata($sdata);
redirect("Super_Admin/add_product");
} else {
$fdata = $this->upload->data();
$data['product_image'] = $config['upload_path'] . $fdata['file_name'];
}

/*
 * End File Upload
 */

$this->Super_Admin_Model->save_product_info($data);
$sdata = array();
$sdata['msg1'] = "product Information Save Successfully";
$this->session->set_userdata($sdata);
redirect("Super_Admin/add_product");
}
public function manage_product(){
    $data=array();
    $data['all_product']=$this->Super_Admin_Model->select_all_product_info();
    $data['admin_maincontent']=$this->load->view('admin/pages/manage_product_page',$data,TRUE);
    $this->load->view('admin/admin_master',$data);
}
public function product_delete($product_id){
    $this->Super_Admin_Model->delete_product_by_product_id($product_id);
    redirect('Super_Admin/manage_product');
}
public function product_unpublished($product_id){
    $this->Super_Admin_Model->unpublished_product_by_product_id($product_id);
    redirect('Super_Admin/manage_product');
    
}
public function product_published($product_id){
    $this->Super_Admin_Model->published_product_by_product_id($product_id);
    redirect('Super_Admin/manage_product');
}
public function product_edit($product_id){
   $data=array();
   $data['select_product']=$this->Super_Admin_Model->select_product_by_product_id($product_id);
   $data['admin_maincontent']=$this->load->view('admin/pages/edit_product_page',$data,TRUE);
   $this->load->view('admin/admin_master',$data);
   
}
public function update_product(){
    $product_id=$this->input->post('product_id',TRUE);
    $data=array();
    $data['product_name']=$this->input->post('product_name',TRUE);
    $data['product_description']=$this->input->post('product_description',TRUE);
    $data['product_image']=$this->input->post('product_image',TRUE);
    $data['product_old_price']=$this->input->post('product_old_price',TRUE);
    $data['product_new_price']=$this->input->post('product_new_price',TRUE);
    $data['product_quantity']=$this->input->post('product_quantity',TRUE);
    $data['product_sku']=$this->input->post('product_sku',TRUE);
    $data['product_service']=$this->input->post('product_service',TRUE);
    $data['product_publication_status']=$this->input->post('product_publication_status',TRUE);
    
    $this->Super_Admin_Model->update_product_info($data,$product_id);
    redirect('Super_Admin/manage_product');
    
}





//-------end product
//-------------start sliders
public function  add_sliders(){
    $data=array();
    $data['admin_maincontent']=$this->load->view('admin/pages/add_sliders_page',' ',TRUE);
     $this->load->view('admin/admin_master',$data);   

}
public function save_silders(){
    $data=array();
   $data['sliders_name']=$this->input->post('sliders_name',TRUE);
   $data['publication_status']=$this->input->post('publication_status',TRUE);
 
    /*
 * Start File Upload
 */
$config['upload_path'] = 'asset/back_end/sliders_image/';
$config['allowed_types'] = 'gif|jpg|png|jpeg/';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
$this->load->library('upload', $config);
$this->upload->initialize($config);
$error = '';
$fdata = array();

if (!$this->upload->do_upload('sliders_image')) {
$error = $this->upload->display_errors();
$sdata = array();
$sdata['message'] = $error;
$this->session->set_userdata($sdata);
redirect("Super_Admin/add_sliders");
} else {
$fdata = $this->upload->data();
$data['sliders_image'] = $config['upload_path'] . $fdata['file_name'];
}

/*
 * End File Upload
 */

$this->Super_Admin_Model->save_sliders_info($data);
$sdata = array();
$sdata['msg'] = "sliders Information Save Successfully";
$this->session->set_userdata($sdata);
redirect("Super_Admin/add_sliders");

}
public function manage_sliders(){
    $data=array();
    $data['all_sliders']=$this->Super_Admin_Model->select_all_sliders_info();
    $data['admin_maincontent']=$this->load->view('admin/pages/manage_sliders_page',$data,TRUE);
    $this->load->view('admin/admin_master',$data);
}
public function sliders_delete($sliders_id){
    $this->Super_Admin_Model->delete_sliders_by_silders_id($sliders_id);
    redirect("Super_Admin/manage_sliders");
}
public function sliders_unpublished($sliders_id){
    $this->Super_Admin_Model->unpublished_sliders_by_sliders($sliders_id);
    redirect("Super_Admin/manage_sliders");
}
public function sliders_published($sliders_id){
    $this->Super_Admin_Model->published_sliders_by_sliders($sliders_id);
    redirect("Super_Admin/manage_sliders");
}
public function sliders_edit($sliders_id){
    $data=array();
    $data['select_sliders']=$this->Super_Admin_Model->select_sliders_by_sliders_id($sliders_id);
    $data['admin_maincontent']=$this->load->view('admin/pages/edit_sliders_page',$data,TRUE);
    $this->load->view('admin/admin_master',$data);
}
public function update_silders(){
    $sliders_id=$this->input->post('sliders_id',TRUE);
    $data=array();
    $data['sliders_name']=$this->input->post('sliders_name',TRUE);
    $data['publication_status']=$this->input->post('publication_status',TRUE);
    $this->Super_Admin_Model->update_sliders_info($data,$sliders_id);
    redirect("Super_Admin/manage_sliders");
}

//----------- end sliders


public function admin_logout() {
$this->session->unset_userdata('admin_id');
$this->session->unset_userdata('admin_name');
$data = array();
$data['message'] = "You Successfully Logout";
$this->session->set_userdata($data);
redirect('Admin');
}
//start order

public function manage_order()
{
    $data=array();
    $data['all_order']=$this->Super_Admin_Model->select_all_order_info();
    $data['admin_maincontent']=$this->load->view('admin/pages/manage_order_page',$data,TRUE);
    $this->load->view('admin/admin_master',$data);
}
public function complete_order($order_id)
{
    $this->Super_Admin_Model->complete_order_by_complete($order_id);
    redirect("Super_Admin/manage_order");
}
public function pending_order($order_id)
{
    $this->Super_Admin_Model->pending_order_by_pending($order_id);
    redirect("Super_Admin/manage_order");
}
public function view_order($order_id)
    {
        $data=array();
        $data['order_info']=$this->Super_Admin_Model->select_order_info_by_id($order_id);
        $customer_id=$data['order_info']->customer_id;
        $shipping_id=$data['order_info']->shipping_id;
        $data['customer_info']=$this->Super_Admin_Model->select_customer_info_by_id($customer_id);
        $data['shipping_info']=$this->Super_Admin_Model->select_shipping_info_by_id($shipping_id);
        $data['order_details_info']=$this->Super_Admin_Model->select_order_details_info($order_id);
        $data['admin_maincontent']=$this->load->view('admin/pages/invoice',$data,TRUE);
        $this->load->view('admin/admin_master',$data);
    }
    public function create_print($order_id)
    {
        $data=array();
        $data['order_info']=$this->Super_Admin_Model->select_order_info_by_id($order_id);
        $customer_id=$data['order_info']->customer_id;
        $shipping_id=$data['order_info']->shipping_id;
        $data['customer_info']=$this->Super_Admin_Model->select_customer_info_by_id($customer_id);
        $data['shipping_info']=$this->Super_Admin_Model->select_shipping_info_by_id($shipping_id);
        $data['order_details_info']=$this->Super_Admin_Model->select_order_details_info($order_id);
        $data['admin_maincontent']=$this->load->view('admin/pages/print_invoice',$data,TRUE);
        $this->load->view('admin/admin_master',$data);
    }
    public function create_invoice($order_id) {

        $data = array();
        $data['order_info'] = $this->Super_Admin_Model->select_order_info_by_id($order_id);
        $customer_id = $data['order_info']->customer_id;
        $shipping_id = $data['order_info']->shipping_id;
        $data['customer_info'] = $this->Super_Admin_Model->select_customer_info_by_id($customer_id);
        $data['shipping_info'] = $this->Super_Admin_Model->select_shipping_info_by_id($shipping_id);
        $data['order_details_info'] = $this->Super_Admin_Model->select_order_details_info($order_id);

//        $this->load->library('dompdf');
//        $view_file = $this->load->view('admin/pages/invoice',$data, TRUE);
//        $file_name = pdf_create($view_file, 'inv-00' . $order_id);
//        echo $file_name;
//        $this->load->view('admin/pages/invoice',$data,TRUE);
 // Get output html
//        $html = $this->output->get_output();
        
        // Load pdf library
        $this->load->library('pdf');
        
        // Load HTML content
        $this->dompdf->loadHtml($this->load->view('admin/pages/invoice',$data,TRUE));
        
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A4','Portrait');
        
        // Render the HTML as PDF
        $this->dompdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("Welcome.pdf", array("Attachment"=>0));
        
    
    }
    public function invoice_delete($order_id)
    {
       $this->Super_Admin_Model->delete_invoice_by_invoice_id($order_id);
      redirect("Super_Admin/invoice"); 
    }

//end order
//-----------------------------start banner
public function add_banner()
{
 $data=array();
 $data['admin_maincontent'] = $this->load->view('admin/pages/add_banner_page', ' ', TRUE);
$this->load->view('admin/admin_master', $data);
    
}
public function save_banner()
{
    $data=array();
    $data['banner_name']=$this->input->post('banner_name',TRUE);
    $data['banner_type']=$this->input->post('banner_type',TRUE);
    $data['banner_status']=$this->input->post('banner_status',TRUE);
  /*
 * Start File Upload
 */
$config['upload_path'] = 'asset/back_end/banner_image/';
$config['allowed_types'] = 'gif|jpg|png|jpeg/';
//        $config['max_size']= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
$this->load->library('upload', $config);
$this->upload->initialize($config);
$error = '';
$fdata = array();

if (!$this->upload->do_upload('banner_image')) {
$error = $this->upload->display_errors();
$sdata = array();
$sdata['message'] = $error;
$this->session->set_userdata($sdata);
redirect("Super_Admin/add_banner");

} else {
$fdata = $this->upload->data();
$data['banner_image'] = $config['upload_path'] . $fdata['file_name'];
}

$this->Super_Admin_Model->save_banner_info($data);
$sdata = array();
$sdata['msg'] = "banner  Information Save Successfully";
$this->session->set_userdata($sdata);
redirect("Super_Admin/add_banner");

/*
 * End File Upload
 */

}
public function manage_banner()
{
    $data=array();
   $data['all_banner']=$this->Super_Admin_Model->select_all_banner_info();
    $data['admin_maincontent']=$this->load->view('admin/pages/manage_banner_page',$data,TRUE);
    $this->load->view('admin/admin_master',$data);
}
public function banner_off($banner_id)
{
    $this->Super_Admin_Model->off_banner_by_banner($banner_id);
    redirect("Super_Admin/manage_banner");
}
public function banner_on($banner_id)
{
    $this->Super_Admin_Model->on_banner_by_banner($banner_id);
    redirect("Super_Admin/manage_banner");
}
public function banner_top($banner_id)
{
   $this->Super_Admin_Model->banner_top_by_banner($banner_id);
   redirect("Super_Admin/manage_banner");
}
public function banner_middle($banner_id)
{
   $this->Super_Admin_Model->banner_middle_by_banner($banner_id);
   redirect("Super_Admin/manage_banner");
}
public function banner_midddle_right($banner_id)
{
    $this->Super_Admin_Model->banner_middle_right_by_banner($banner_id);
    redirect("Super_Admin/manage_banner");
}
public function banner_middle_left($banner_id)
{
    $this->Super_Admin_Model->banner_middle_left_by_banner($banner_id);
    redirect("Super_Admin/manage_banner");
}
public function banner_bottom($banner_id)
{
    $this->Super_Admin_Model->banner_bottom_by_banner($banner_id);
    redirect("Super_Admin/manage_banner");
}
public function banner_bottom_right($banner_id)
 {
      $this->Super_Admin_Model->banner_bottom_right_by_banner($banner_id);
    redirect("Super_Admin/manage_banner");
}
public function banner_bottom_left($banner_id)
{
     $this->Super_Admin_Model->banner_bottom_left_by_banner($banner_id);
    redirect("Super_Admin/manage_banner");
}
public function banner_delete($banner_id)
{
    $this->Super_Admin_Model->delete_banner_by_banner_id($banner_id);
    redirect("Super_Admin/manage_banner"); 
}
// --------------------------------End banner

}
