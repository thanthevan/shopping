<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class Product_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    function __destruct(){
        $this->db->close();
    }
    public function add_product($data)
    {  
         if($this->db->insert('products',$data))
            return true;
        return false;
    }
    public function get_all_data_product(){
        $data = array();
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('productcategories','products.CategoryID = productcategories.CategoryID');
        $data = $this->db->get()->result_array();

        return $data;
    }
    public function get_new_data_product(){
        $data = array();
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('productcategories','products.CategoryID = productcategories.CategoryID');
        $this->db->where('HotFlag',1);
        $data = $this->db->get()->result_array();
        return $data;
    }
    public function get_sale_data_product(){
        $data = array();
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('productcategories','products.CategoryID = productcategories.CategoryID');
        $this->db->where('PromotionPrice >',0);
        $data = $this->db->get()->result_array();
        return $data;
    }
    public function get_empty_data_product(){
        $data = array();
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('productcategories','products.CategoryID = productcategories.CategoryID');
        $this->db->where('Quantity',0);
        $data = $this->db->get()->result_array();

        return $data;
    }
    public function get_all_data_by_page($limit, $start)
    {   
        $starts = ($start-1) * $limit;
        $data = array();

        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('productcategories','products.CategoryID = productcategories.CategoryID');
        $this->db->order_by("CreateDate", "DESC");
        $this->db->limit($limit, $starts);
        $data = $this->db->get()->result_array();

        return $data;
    }
    public function get_new_data_by_page($limit, $start)
    {   
        $starts = ($start-1) * $limit;
        $data = array();
        $this->db->order_by("CreateDate", "DESC");
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('productcategories','products.CategoryID = productcategories.CategoryID');
        
         $this->db->limit($limit, $starts);
        $data = $this->db->get()->result_array();
        return $data;
    }
    public function get_sale_data_by_page($limit, $start)
    {   
        $starts = ($start-1) * $limit;
        $data = array();
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('productcategories','products.CategoryID = productcategories.CategoryID');
        $this->db->where('PromotionPrice >',0);
         $this->db->limit($limit, $starts);
        $data = $this->db->get()->result_array();
        return $data;
    }
    public function get_empty_data_by_page($limit,$start)
    {   
        $starts = ($start-1) * $limit;
        $data = array();
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('productcategories','products.CategoryID = productcategories.CategoryID');
        $this->db->where('Quantity',0);
        $this->db->limit($limit, $starts);
        $data = $this->db->get()->result_array();
        return $data;
    }
}