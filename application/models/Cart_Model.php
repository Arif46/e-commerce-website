<?php


class Cart_Model  extends CI_Model{
    public function select_product_info_by_product_id($product_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id',$product_id);
        $query=$this->db->get();
        $result=$query->row();
        return $result;
    }
}
