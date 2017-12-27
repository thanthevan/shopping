<?php
 class About_model extends CI_model
 {
 	private $data= array();
 	function __construct()
 	{
 		$this->load->database();
 	}

 	public function get_about()
 	{
 		
 		$this->db->select('*');

        $this->db->from('about');
        
        $this->data = $this->db->get()->result_array();

        return $this->data;
 	}
     public function get_banner()
     {
     	$this->db->select('*');

        $this->db->from('banner');
        $this->db->where('status',1);
        $this->data = $this->db->get()->result_array();

        return $this->data;
     }
 	public function get_slide()
 	{
 	
 		$this->db->select('*');

        $this->db->from('slide');
        $this->db->where('status',1);
        $this->data = $this->db->get()->result_array();

        return $this->data;
 	}
 	 function __destruct(){
        $this->db->close();
    }
 } 
 ?>