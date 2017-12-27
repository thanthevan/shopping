<?php

 class Menu_model extends CI_model
 {
 	
 	function __construct()
 	{
 		$this->load->database();
 	}

 	public function getAllData()
 	{
 		$data = array();

 		$this->db->select('*');

        $this->db->from('productcategories');

        $data = $this->db->get()->result_array();

        return $data;
 	}
 } 
 ?>