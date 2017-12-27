<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller
{
    private $dt =array();
    function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->library('pagination');
        
        $this->load->model('productcategories_model');

    }

    public function addproductview()
    {
    $data = array( );
    $data['dmsp']=$this->productcategories_model->get_all_categories();
    $this->load->view('partails/header_view');
    $this->load->view('partails/aside_view');
    $this->load->view('product/add_view',$data);
    $this->load->view('partails/footer_view');

    }
    public function addproduct()
    {
        
        if($this->input->post())
        {   
            $code = $this->input->post('txtmsp');
            $name = $this->input->post('txttsp');
            $count = $this->input->post('txtsl');
            $catalog = $this->input->post('txtdmsp');
            $price = $this->input->post('txtgia');
            $promoprice = $this->input->post('txtgiamgia');
            $size = null;
            if(!empty($this->input->post('txtkichcogq')) && !empty($this->input->post('txtkichcoao')))
                $size = $this->input->post('txtkichcogq');
            else if(!empty($this->input->post('txtkichcogq')))
                $size = $this->input->post('txtkichcogq');
            else if(!empty($this->input->post('txtkichcoao')))
                $size = $this->input->post('txtkichcoao');
            $color = $this->input->post('colordata');
            $content = $this->input->post('txtmota');
            $metades = $this->input->post('txtdes');
            $metakey = $this->input->post('txtkey');
            $alias=vn2latin($name);
            $date=date("Y-m-d H:i:s");


             $imgpath = $this->upload('txtfile');
               
          $data= array(
             'ProductCode'=>$code,
             'ProductName'=>$name,
             'Alias'=>$alias,
             'Quantity'=>$count,
             'CategoryID'=>$catalog,
             'ImagesUrl'=>$imgpath['file_name'],
             'Price'=>$price,
             'Size'=>$size,
             'Color'=>$color,
             'PromotionPrice'=>$promoprice,
             'Content'=>$content,
             'ViewCount'=>0,
             'HotFlag'=>1,
             'MetaDescription'=>$metades,
             'MetaKeyword'=>$metakey,
             'Status'=>1,
             'CreateDate'=>$date
            );

           if($this->product_model->add_product($data))
                redirect('product/index');
        
        }
    }
    public function edit_product()
    {
       
    }
    public function Allproduct()
    {
       $this->dt= $this->product_model->get_all_data_product();
       return  $this->dt;
   }
   public function Newproduct()
   {

    $this->dt= $this->product_model->get_new_data_product();
    return $this->dt;
}
public function Saleproduct()
{

   $this->dt = $this->product_model->get_sale_data_product();
   return  $this->dt;
}
public function Emptyproduct()
{

   $this->dt = $this->product_model->get_empty_data_product();
   return  $this->dt;
}

public function index($key=1){
    $check = $key;
    $data =array();
    switch ($check) {
        case 1:
        $data['product']=$this->Allproduct();

        break;
        case 2:
        $data['product']=$this->Newproduct();

        break;
        case 3:
        $data['product']=$this->Saleproduct();

        break;
        case 4:
        $data['product']=$this->Emptyproduct();
        break;
    }
    $config['base_url']   = base_url().'product/index/'.$check ;
    $config['total_rows'] = count($data['product']);
    $config['per_page']   =ROW_LIMIT_PRODUCT;
    $config['uri_segment'] = 4;
    $config['use_page_numbers'] = TRUE;
    $config['use_global_url_suffix'] = TRUE;
        // template bootstrap
    $config['full_tag_open'] = '<div class="pagination cl1"><ul>';
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
    $page = $this->uri->segment(4);
    $page = (isset($page) && $page > 0) ? $page : 1;
    switch ($check){
        case 1:
        $data['dtProduct']= $this->product_model->get_all_data_by_page($config['per_page'],$page);
        $data['select']=1;
        break;
        case 2:
        $data['dtProduct']= $this->product_model->get_new_data_by_page($config['per_page'],$page);
        $data['select']=2;
        break;
        case 3:
        $data['dtProduct']= $this->product_model->get_sale_data_by_page($config['per_page'],$page);
        $data['select']=3;
        break;
        case 4:
        $data['dtProduct']= $this->product_model->get_empty_data_by_page($config['per_page'],$page);
        $data['select']=4;
        break;
    }

    $this->load->view('partails/header_view');
    $this->load->view('partails/aside_view');
    $this->load->view('product/index_view',$data);
    $this->load->view('partails/footer_view');
}


  
}
?>
