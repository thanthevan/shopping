<?php

class Thongke_model extends CI_Model
{
   
    function __construct()
    {
        $this->load->database();
    }

    public function getallproduct(){
        $data = array();
        $this->db->select('*'); 
        $this->db->from('products'); 
         $data = $this->db->get()->result_array();
          return $data;
    }
    public function donhang0()
    {
        $data = array();
        $this->db->select('*'); 
        $this->db->from('orders'); 
        $this->db->where('status',0);
        $data = $this->db->get()->result_array();
          return $data;
    }
    public function donhang1()
    {
       $data = array();
        $this->db->select('*'); 
        $this->db->from('orders'); 
        $this->db->where('status',1);
        $data = $this->db->get()->result_array();
          return $data;
    }
    public function nguoisudung()
    {
        $data = array();
        $this->db->select('*'); 
        $this->db->from('customers'); 
        $this->db->where('status',1);
        $data = $this->db->get()->result_array();
        return $data;
    }
    public function sanphamhethang()
    {
        $data = array();
        $this->db->select('*'); 
        $this->db->from('products'); 
        $this->db->where('Quantity',0);
        $data = $this->db->get()->result_array();
        return $data;
    }
   
    function __destruct(){
        $this->db->close();
    }
}