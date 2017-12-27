<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_controller {

   
     function __construct()
    {
        $this->_module = trim(strtolower(__CLASS__));
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('Product_model');
        $this->load->model('Home_model');
        $this->session->unset_userdata('site_module');
        $this->session->set_userdata('site_module',$this->_module);
    }

	public function index()
	{
		$data['dataProduct'] = $this->Product_model->getAllProduct();
		$config['base_url']   = base_url().'home/index';
        $config['total_rows'] = count($data['dataProduct']);
        $config['per_page']   =ROW_LIMIT;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['use_global_url_suffix'] = TRUE;
        // template bootstrap
        $config['full_tag_open'] = '<div class="pagination"><ul>';
        $config['full_tag_close'] = '</ul></div><!--pagination-->';
        $config['first_link'] = '&laquo;';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = '&raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '&rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&larr;';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['links_paginations'] = $this->pagination->create_links();
        $page = $this->uri->segment(3);
        $page = (isset($page) && $page > 0) ? $page : 1;
        $data['pnProduct']= $this->Home_model->getAllDataByPage($config['per_page'],$page);
        $data['newProduct']=$this->Product_model->getNewProduct();
        $data['saleProduct']=$this->Product_model->getSaleProduct();
        $header = array();
        $header['title']='Trang hana shop || Thời trang hiện đại';
        $header['content']='trang chính sản phẩm';
        $header['metades']='';
        $header['metakey']='quần áo , giầy dép , dây lưng, túi da';
		$this->_loadHeader($header);
		$this->_loadMenu();
		$this->load->view('Home/index_view',$data);
		$this->_loadFooter();

	}
}
