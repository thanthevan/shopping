<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MY_controller {


   function __construct()
   {
    $this->_module = trim(strtolower(__CLASS__));
    parent::__construct();
    $this->load->library('cart');
    $this->load->model('Product_model');
    $this->session->unset_userdata('site_module');
    $this->session->set_userdata('site_module',$this->_module);
    $this->session->set_userdata('countCart',count($this->cart->contents()));
}

public function index()
{


    $header = array();
    $header['title']='Giỏ hàng || Trang hana shop ';
    $header['content']='giỏ hàng';
    $header['metades']='';
    $header['metakey']='quần áo , giầy dép , dây lưng, túi da';
    $data['carts']=$this->cart->contents();
    $this->_loadHeader($header);
    $this->_loadMenu();
    $this->load->view('cart/index_view',$data);
    $this->_loadFooter();

}
public function addcartajax()
{
      
 if($this->input->is_ajax_request()){
    $id = strip_tags($this->input->post('id'));
    $id  = is_numeric($id) ? $id : 0;
    $infoProduct= $this->Product_model->getproductbyid($id);
    if(empty($infoProduct)){
        show_404();
    }
    else
    {   
        $qty = $this->input->post('qty');
        $qty = is_numeric($qty) ? $qty : 1;
        $color=$this->input->post('color');
        $size = $this->input->post('size');
        $data['cartproduct'] = array(
            'id'      => $id,
            'qty'     => $qty,
            'price'   => ($infoProduct[0]['PromotionPrice'] == 0 ? $infoProduct[0]['Price'] : $infoProduct[0]['PromotionPrice']),
          
            'name'    => $infoProduct[0]['ProductName'],
            'option'=>array(
            'image'  => $infoProduct[0]['ImagesUrl'],
            'color' => $color,
            'size' => $size)
            );
    }
    if($this->cart->insert($data['cartproduct'])){

       $data['content']=array_reverse($this->cart->contents());
       echo json_encode($data['content']);die();
     
    }
    else{
        redirect(site_url('home/index/error'));
    }
}
}
public function updatecartajax()
{
    if($this->input->is_ajax_request()){

         $id =strip_tags($this->input->post('id'));
         $qty=is_numeric(qty)?$qty:1;
         $data=$this->cart->contents();
        foreach($data as $item){
            if($item['rowid'] == $id){
                $item['qty'] = $qty;
                $delOne = array("rowid" => $item['rowid'], "qty" => $item['qty']);
            }
        }
        if($this->cart->update($delOne)){
            $data['content']=array_reverse($this->cart->contents());
             echo json_encode($data['content']);die();
        }
    }
}
public function removecartajax()
{
    if($this->input->is_ajax_request()){

         $id =strip_tags($this->input->post('id'));
         $data=$this->cart->contents();
        foreach($data as $item){
            if($item['rowid'] == $id){
                $item['qty'] = 0;
                $delOne = array("rowid" => $item['rowid'], "qty" => $item['qty']);
            }
        }
        if($this->cart->update($delOne)){
            $data['content']=array_reverse($this->cart->contents());
             echo json_encode($data['content']);die();
        }
    }
}

public function loadorders()
{
   
        $data['carts']=$this->cart->contents();
        $this->load->view('orders/index_view',$data);
}

}
