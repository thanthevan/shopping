<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
/**
*
*/
class Orders extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('orders_model');
    }

    public function index(){
       $data= array();
       $listOrders=$this->orders_model->get_list_orders();
       $data['listOrders']=$listOrders;
       $this->load->view('partails/header_view');
       $this->load->view('partails/aside_view');
       $this->load->view('Orders/index_view',$data);
       $this->load->view('partails/footer_view');
    }
    public function handle()
    {
    	if($this->input->is_ajax_request())
    	{
    		$status=$this->input->post('status');
    		$status=in_array($status,array(1,2)) ? $status : 0;
    		$id=$this->input->post('id');
    		$id=is_numeric($id)? $id : 0 ;
    		if($status==0 || $id ==0)
    		{
    			echo "ERR";
    		}
    		else
    		{
    			 if($status==1)
    			 {
    			   $action=$this->orders_model->update_status_order($status,$id);
    			     if($action)
    			  {
    			  	$this->orders_model->insert_detail_orders($id);
    			  }
    		     }
    			elseif ($status==2)
    			{
    			  $action=$this->orders_model->delete_status_order($id);
    			}

    			if($action)
    				echo "OK";
    			else
    				echo "FAIL";
    		
    		}
    	}
    }
}