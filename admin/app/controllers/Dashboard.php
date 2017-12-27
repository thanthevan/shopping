<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard
 extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('thongke_model');
    }

    public function index(){
        $data['usertk']=$this->thongke_model->nguoisudung();
        $data['producttk']=$this->thongke_model->getallproduct();
        $data['donhang0']=$this->thongke_model->donhang0();
        $data['donhang1']=$this->thongke_model->donhang1();
        $data['sanphamhethang']=$this->thongke_model->sanphamhethang();
        $this->load->view('partails/header_view');
        $this->load->view('partails/aside_view');
        $this->load->view('dashboard/index_view',$data);
        $this->load->view('partails/footer_view');
    }
}