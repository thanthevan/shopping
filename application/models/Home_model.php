<?php
 class Home_model extends CI_model
 {
 	
 	function __construct()
 	{
 		$this->load->database();
 	}

 	public function getAllDataByPage($limit, $start){
        $starts = ($start-1) * $limit;
        $data = array();
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('Status',1);
        $this->db->limit($limit, $starts);
        $data = $this->db->get()->result_array();
        return $data;
    }
     function __destruct(){
        $this->db->close();
    }
 } 
 ?>