<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class Productcategories_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    function __destruct(){
        $this->db->close();
    }

    public function get_all_categories(){
        $data = array();
        $this->db->select('*');
        $this->db->from('productcategories'); 
        $data = $this->db->get()->result_array();
        return $data;
    }
    public function add_data($data)
    {
       if($this->db->insert('productcategories',$data))
          return true;

      return false;
    }

    public function remove_data($data)
    {
      if($this->db->delete('productcategories',$data))
          return true;

      return false;
    }
}