<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_controller {

	function __construct()
	{
		$this->_module = trim(strtolower(__CLASS__)).'detail';
		parent::__construct();
		$this->load->model('product_model');

	}

	public function index()
	{
		$this->_loadHeader();
		$this->_loadMenu();
		$this->load->view('product/index_view');
		$this->_loadFooter();
	}
	public function detail($id=null)
	{   
		$data = array();
		$data['infor']= $this->product_model->getproductbyid($id);
		$this->_loadHeader();
		$this->_loadMenu();
			$this->load->view('product/detail_view',$data);
		$this->_loadFooter();
	}
	public function detailajax()
	{
		if($this->input->is_ajax_request()){
            $id = trim($this->input->post('id'));
            $infoData = $this->product_model->getproductbyid($id);
            $data['info'] = $infoData;
            $this->load->view('detailproduct/index_view',$data);
        }
	}
}