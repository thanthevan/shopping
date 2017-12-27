<?php
 class Product_model extends CI_model
 {
 	private $data= array();
 	function __construct()
 	{
 		$this->load->database();
 	}

 	public function getAllProduct()
 	{


 		$this->db->select('*');

        $this->db->from('products');
        $this->db->where('Status',1);
        $this->data = $this->db->get()->result_array();

        return  $this->data;
 	}
 	public function getNewProduct()
 	{
 		$data = array();

 		$this->db->select('*');
 		$this->db->from('products');
		$this->db->where('PromotionPrice',0);
 		$this->db->where('HotFlag',1);
 		$this->db->where('Status',1);
 		$this->data = $this->db->get()->result_array();
         return  $this->data;
 	}

 	public function getSaleProduct()
 	{
 		

 		$this->db->select('*');
 		$this->db->from('products');
 		$this->db->where('PromotionPrice >',0);
 		$this->db->where('Status',1);
 		$this->data = $this->db->get()->result_array();
        return  $this->data;
 	}
 	public function getproductbyid($id)
 	{
 		
 		$this->db->select('*');
        $this->db->from('products');
        $this->db->where('ProductID',$id);
        $this->db->where('Status',1);
        $this->data[0] = $this->db->get()->row_array();
         return  $this->data;
 	}

    public function getSameProduct($catId)
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('CategoryID',$catId);
        $this->db->order_by('rand()');
        $this->db->where('Status',1);
        $this->db->limit(5);
        $this->data = $this->db->get()->result_array();
        return  $this->data;
    }


    public function addorderst($data)
    {
       
       
        if($this->db->insert('orders',$data))
        {
            return $this->db->insert_id();
        }
        return 0;
    
    }
    public function addorderstdetail($data)
    {
         if($this->db->insert('orderdetails',$data))
        {
            return true;
        }
        return false;
    }
 	 function __destruct(){
        $this->db->close();
    }
 } 
 ?>
 