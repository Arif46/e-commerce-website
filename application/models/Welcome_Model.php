<?php


class Welcome_Model extends CI_Model {
              public function select_all_cateory(){
                  $this->db->select('*');
                  $this->db->from('tbl_category');
                  $this->db->where('publication_status',1);
                  $query=$this->db->get();
                  $result=$query->result();
                  return $result;
              }  
              public function select_all_product_info()
             {
                  $this->db->select('*');
                  $this->db->from('tbl_product');
                  $this->db->where('product_publication_status',1);
                  $query=$this->db->get();
                  $result=$query->result();
                  return $result;
              }
              public function select_all_product($per_page,$offset)
    {
        if($offset==NULL)
        {
            $offset=0;
        }
//        $sql="SELECT * FROM tbl_product WHERE  product_publication_status=1 LIMIT $offset,$per_page ";
//        $query_result = $this->db->query($sql);
//        $result = $query_result->result();
//        return $result;
        
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_publication_status',1);
//        $this->db->order_by('product_id','asec');
        $this->db->order_by('product_id','desc');
        $this->db->limit($per_page,$offset);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }

              public function select_product_info_by_product_id($product_id)
             {
                  $this->db->select('*');
                  $this->db->from('tbl_product','tbl_manufacture');
                  $this->db->where('product_id',$product_id);
                  $this->db->join('tbl_manufacture','tbl_product.manufacture_id=tbl_manufacture.manufacture_id');
                  $query=$this->db->get();
                  $result=$query->row();
                  return $result;
              }
               public function select_product_info_by_category_id($category_id){
                  $this->db->select('*');
                  $this->db->from('tbl_product');
                  $this->db->where('category_id',$category_id);
                  $query=$this->db->get();
                  $result=$query->result();
                  return $result;
              }
              public function select_all_manufacture_info(){
                  $this->db->select('*');
                  $this->db->from('tbl_manufacture');
                  $this->db->where('publication_status',1);
                  $query=$this->db->get();
                  $result=$query->result();
                  return $result;
              }
             public function select_all_sliders_info(){
                 $this->db->select('*');
                 $this->db->from('tbl_sliders');
                 $this->db->where('publication_status',1);
                 $query=$this->db->get();
                 $result=$query->result();
                 return $result;
             }
             public function select_all_category_info(){
                 $this->db->select('*');
                 $this->db->from('tbl_category');
                 $this->db->where('publication_status',1);
                 $query=$this->db->get();
                 $result=$query->result();
                 return $result;
             }
             public function select_new_product_info()
             {
                 $this->db->select('*');
                 $this->db->from('tbl_product');
                 $this->db->where('product_publication_status',1);
                 $this->db->order_by('product_id','desc');
                 $this->db->limit(10);
                 $query=$this->db->get();
                 $result=$query->result();
                 return $result; 
             }
             public function update_product_hit_count($hit_count,$product_id)
             {
                 $this->db->set('product_hit_count',$hit_count);
                 $this->db->where('product_id',$product_id);
                 $this->db->update('tbl_product');
             }
             public function select_best_product_info()
             {
                  $this->db->select('*');
                 $this->db->from('tbl_product');
                 $this->db->where('product_publication_status',1);
                 $this->db->order_by('product_hit_count','desc');
                 $this->db->limit(3);
                 $query=$this->db->get();
                 $result=$query->result();
                 return $result; 
             }
             public function select_popular_product_info()
             {
                   $this->db->select('*');
                 $this->db->from('tbl_product');
                 $this->db->where('product_publication_status',1);
                 $this->db->order_by('product_id','aesc');
                 $this->db->limit(5);
                 $query=$this->db->get();
                 $result=$query->result();
                 return $result;  
             }
             public function select_all_banner_info()
             {
                 $this->db->select('*');
                 $this->db->from('tbl_banner');
               //  $this->db->where('banner_status',0);
                 $query=$this->db->get();
                 $result=$query->result();
                 return $result;
             }
}
