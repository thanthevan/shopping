<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
* 
*/
class Orders extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
    $this->load->model('Product_model');
	}

	 public function orders(){
        if($this->input->post()){
            $fullName = $this->input->post('fullname');
            $phone    = $this->input->post('phone');
            $email    = $this->input->post('email');
            $address  = $this->input->post('address');
            $note     = $this->input->post('note');

            if(!empty($this->cart->contents()))
            {
                $checkAdd = FALSE;
                $data = array(
                          'fullname' => $fullName,
                          'email' => $email,
                          'address' => $address,
                          'phone' => $phone,
                          'note' => $note,
                          'created' => date('Y-m-d H:i:s'),
                          'status' => 0
                    );
                $idordest = $this->Product_model->addorderst($data);
                if( $idordest>0){
                foreach ($this->cart->contents() as $k => $val)
                {    
                    $idsp  = $val['id'];
                    $qtysp = $val['qty'];
                    $money   = $val['subtotal'];
                    $size = $val['option']['size'];
                    $color=$val['option']['color'];
                    $data1 = array(
                          'id_orders' => $idordest,
                          'id_products' => $idsp,
                          'quantity' => $qtysp,
                          'price' => $money,
                          'size' => $size,
                          'color'=>$color
                    );
                    $add = $this->Product_model->addorderstdetail($data1);
                    if($add){
                        $checkAdd = TRUE;
                        $this->cart->destroy();
                        $this->session->set_userdata('countCart',0);
                        redirect(site_url('home?status=true'));
                    }
                } 
                 
                // if($checkAdd){
                //     redirect(site_url('cart/index?state=success'));
                // }else{
                //     redirect(site_url('cart/index?state=fail'));
                // }
            }
            // else{
            //     redirect(site_url('cart/index?state=err'));
            // }
        }
    }
}
}