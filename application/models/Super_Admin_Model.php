<?php


class Super_Admin_Model  extends CI_Model{
    
    
    //start category
    public function save_category_info($data){
        $this->db->insert('tbl_category',$data);
    }
    
       public function select_all_category_info(){
           $this->db->select('*');
           $this->db->from('tbl_category');
           $query=$this->db->get();
           $result=$query->result();
           return $result;
    }
    
        public function delete_category_by_category_id($category_id){
            $this->db->where('category_id',$category_id);
            $this->db->delete('tbl_category');
        }
        public function unpublished_category_by_category_id($category_id){
            $this->db->set('publication_status',0);
            $this->db->where('category_id',$category_id);
            $this->db->update('tbl_category');
        }
           public function published_category_by_category_id($category_id){
            $this->db->set('publication_status',1);
            $this->db->where('category_id',$category_id);
            $this->db->update('tbl_category');
        }
        public function select_category_by_category_id($category_id){
          $this->db->select('*');
           $this->db->from('tbl_category');
           $this->db->where('category_id',$category_id);
           $query=$this->db->get();
           $result=$query->row();
           return $result;
        }
        public function  update_category_info($data,$category_id)
                {
            $this->db->where('category_id',$category_id);
            $this->db->update('tbl_category',$data);
        }
   
     public function save_manufacture_info($data){
         $this->db->insert('tbl_manufacture',$data);
     }
     public function select_all_manufacture_info(){
         $this->db->select('*');
         $this->db->from('tbl_manufacture');
         $query=$this->db->get();
         $result=$query->result();
         return $result;
     }
     public function delete_manufacture_by_manufacture_id($manufacture_id){
         $this->db->where('manufacture_id',$manufacture_id);
         $this->db->delete('tbl_manufacture');
     }
public function unpublished_manufacture_by_manufacture_id($manufacture_id){
    $this->db->set('publication_status',0);
    $this->db->where('manufacture_id',$manufacture_id);
    $this->db->update('tbl_manufacture');
}
public function published_manufacture_by_manufacture_id($manufacture_id){
    $this->db->set('publication_status',1);
    $this->db->where('manufacture_id',$manufacture_id);
    $this->db->update('tbl_manufacture');
}
public function select_manufacture_by_manufacture_id($manufacture_id){
    $this->db->select('*');
    $this->db->from('tbl_manufacture');
    $this->db->where('manufacture_id',$manufacture_id);
    $query=$this->db->get();
    $result=$query->row();
    return $result;
}
public function update_manufacture_info($data,$manufacture_id){
        $this->db->where('manufacture_id',$manufacture_id);
            $this->db->update('tbl_manufacture',$data);
}
//-------start Product
public function select_all_category(){
      $this->db->select('*');
    $this->db->from('tbl_category');
    $this->db->where('publication_status',1);
    $query=$this->db->get();
    $result=$query->result();
    return $result;
}
public function select_all_manufacture(){
      $this->db->select('*');
    $this->db->from('tbl_manufacture');
    $this->db->where('publication_status',1);
    $query=$this->db->get();
    $result=$query->result();
    return $result;
}
public function save_product_info($data){
    $this->db->insert('tbl_product',$data);
}
public function select_all_product_info(){
    $this->db->select('*');
    $this->db->from('tbl_product');
    $query=$this->db->get();
    $result=$query->result();
    return $result;
}
public function delete_product_by_product_id($product_id){
    $this->db->where('product_id',$product_id);
    $this->db->delete('tbl_product');
}
public function unpublished_product_by_product_id($product_id){
      $this->db->set('product_publication_status',0);
      $this->db->where('product_id',$product_id);
      $this->db->update('tbl_product');
}
public function published_product_by_product_id($product_id){
    $this->db->set('product_publication_status',1);
    $this->db->where('product_id',$product_id);
    $this->db->update('tbl_product');
}
public function select_product_by_product_id($product_id){
    $this->db->select('*');
    $this->db->from('tbl_product');
    $this->db->where('product_id',$product_id);
    $query=$this->db->get();
    $result=$query->row();
    return $result;
}
public function update_product_info($data,$product_id){
    $this->db->where('product_id',$product_id);
    $this->db->update('tbl_product',$data);
}

 //--------End product
//-----star sliders



public function save_sliders_info($data){
    $this->db->insert('tbl_sliders',$data);
}
public function select_all_sliders_info(){
       $this->db->select('*');
     $this->db->from('tbl_sliders');
     $query=$this->db->get();
     $result=$query->result();
     return $result;
}
public function delete_sliders_by_silders_id($sliders_id){
    $this->db->where('sliders_id',$sliders_id);
    $this->db->delete('tbl_sliders');
}
public function unpublished_sliders_by_sliders($sliders_id){
    $this->db->set('publication_status',0);
      $this->db->where('sliders_id',$sliders_id);
    $this->db->update('tbl_sliders');
}
public function published_sliders_by_sliders($sliders_id){
    $this->db->set('publication_status',1);
    $this->db->where('sliders_id',$sliders_id);
    $this->db->update('tbl_sliders');
}
public function select_sliders_by_sliders_id($sliders_id){
    $this->db->select('*');
    $this->db->from('tbl_sliders');
    $this->db->where('sliders_id',$sliders_id);
    $query=$this->db->get();
      $result=$query->row();
      return $result;
}
public function update_sliders_info($data,$sliders_id){
   
    $this->db->where('sliders_id',$sliders_id);
    $this->db->update('tbl_sliders',$data);
}

//end sliders
//start order

public function select_all_order_info()
{
    $this->db->select('*'); //query active+table er all colum select korar jnno
    $this->db->from('tbl_order');//tbl_name er jnno use kora hoi
    $query=$this->db->get();// tbl_oder sob data call korar jnno
    $result=$query->result();//all data use korar jnno
    return $result;
}
public function complete_order_by_complete($order_id)
  {
      $this->db->set('order_activation','pending');
      $this->db->where('order_id',$order_id);
     $this->db->update('tbl_order');
    
}
public function pending_order_by_pending($order_id)
{
    $this->db->set('order_activation','complete');
    $this->db->where('order_id',$order_id);
    $this->db->update('tbl_order');
}
   public function select_order_info_by_id($order_id)
   {
       $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->where('order_id',$order_id);
        $query=$this->db->get();
        $result=$query->row();
        return $result; 
   }
 public function select_customer_info_by_id($customer_id)
   {
       $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('customer_id',$customer_id);
        $query=$this->db->get();
        $result=$query->row();
        return $result; 
   }
   public function select_shipping_info_by_id($shipping_id)
   {
       $this->db->select('*');
        $this->db->from('tbl_shipping');
        $this->db->where('shipping_id',$shipping_id);
        $query=$this->db->get();
        $result=$query->row();
        return $result; 
   }
   public function select_order_details_info($order_id)
   {
       $this->db->select('*');
        $this->db->from('tbl_order_details');
        $this->db->where('order_id',$order_id);
        $query=$this->db->get();
        $result=$query->result();   
//        echo '<pre>';
//        print_r($result);
//        exit();
        return $result; 
   }
   public function save_banner_info($data)
   {
       $this->db->insert('tbl_banner',$data);
   }
   public function select_all_banner_info()
   {
       $this->db->select('*');
       $this->db->from('tbl_banner');
       $query=$this->db->get();
       $result=$query->result();
       return $result;
   }
   public function off_banner_by_banner($banner_id)
   {
       $this->db->set('banner_status',0);
       $this->db->where('banner_id',$banner_id);
       $this->db->update('tbl_banner');
   }
   public function on_banner_by_banner($banner_id)
   {
       $this->db->set('banner_status',1);
         $this->db->where('banner_id',$banner_id);
       $this->db->update('tbl_banner');
   }
   public function banner_top_by_banner($banner_id)
   {
       $this->db->set('banner_status',2);
       $this->db->where('banner_id',$banner_id);
       $this->db->update('tbl_banner');
   }
   public function banner_middle_by_banner($banner_id)
   {
       $this->db->set('banner_status',3);
       $this->db->where('banner_id',$banner_id);
       $this->db->update('tbl_banner');
   }
   public function banner_middle_right_by_banner($banner_id)
   {
       $this->db->set('banner_status',4);
       $this->db->where('banner_id',$banner_id);
       $this->db->update('tbl_banner');
   }
   public function banner_middle_left_by_banner($banner_id)
   {
       $this->db->set('banner_status',5);
       $this->db->where('banner_id',$banner_id);
       $this->db->update('tbl_banner');
   }
   public function banner_bottom_by_banner($banner_id)
   {
         $this->db->set('banner_status',6);
       $this->db->where('banner_id',$banner_id);
       $this->db->update('tbl_banner');
   }
   public function banner_bottom_right_by_banner($banner_id)
   {
            $this->db->set('banner_status',7);
       $this->db->where('banner_id',$banner_id);
       $this->db->update('tbl_banner');
   }
   public function banner_bottom_left_by_banner($banner_id)
   {
       $this->db->set('banner_status',8);
       $this->db->where('banner_id',$banner_id);
       $this->db->update('tbl_banner');  
   }
   public function delete_banner_by_banner_id($banner_id)
   {
        $this->db->where('banner_id',$banner_id);
    $this->db->delete('tbl_banner');
   }
   public function delete_invoice_by_invoice_id($order_id)
   {
       $this->db->where('order_id',$order_id);
       $this->db->delete('tbl_order');
   }





//end order
}

