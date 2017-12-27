<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productcategories extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('productcategories_model');
        
    
    }

     public function index(){
       $data= array();
        $data['productcategories']=$this->productcategories_model->get_all_categories();
       $this->load->view('partails/header_view');
       $this->load->view('partails/aside_view');
       $this->load->view('productcategories/index_view',$data);
       $this->load->view('partails/footer_view');
    }
    public function add($id)
    {
      if($this->input->post())
      { 
        $parentid = $id;

        $name = $this->input->post('txtname');
        $name = $this->security->xss_clean($name);

        $des = $this->input->post('txtdes');
        $des = $this->security->xss_clean($des);
        $key = $this->input->post('txtkey');
        $key = $this->security->xss_clean($key);
        $data=array('CategoryID'=> null,
                   'CategoryName'=>$name,
                   'ParentID'=>$parentid,
                   'Display'=>1,
                   'MetaDescription'=>$des,
                   'MetaKeyword'=>$key,
                   'Status'=>1, );
        $flag = $this->productcategories_model->add_data($data);
        if($flag)
        {
          redirect('productcategories/index');
        }
      }

      
    }
    public function update($id)
    {
      
    }
    public function remove($id)
    {
      $data = array('CategoryID'=>$id);
      $flag = $this->productcategories_model->remove_data($data);
       if($flag)
        {
          redirect('productcategories/index');
        }
    }
  
}
?>
