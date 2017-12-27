<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    protected $_module;
    function __construct()
    {
        parent::__construct();
        $this->load->model('about_model');
    } 
     protected function _About()
    {   
        return $this->about_model->get_about();

    }
    protected function _loadHeader($data = array()){
        $header = array();

        $header['fullname'] = $this->session->userdata('fullname');
        $header['checkUser']= $this->session->userdata('id_customers');
        $header['title'] = isset($data['title']) ? $data['title'] : '';
        $header['content'] = isset($data['content']) ? $data['content'] : '';
        $header['module'] = $this->_module;
        $header['about']= $this->_About();
        $header['countCart'] =$this->session->userdata('countCart');
        // $header['carts']=$this->session->userdata('carts');
        $this->load->view('Partials/header_view',$header);

    }

    protected function _loadBanner(){
        $data['banner']=$this->about_model->get_banner();
        $data['slide']=$this->about_model->get_slide();
        $this->load->view('Partials/banner_view',$data);
    }

    protected function _loadMenu(){
        $this->load->model('Menu_model');
        $data = array();
        $data['data'] = $this->Menu_model->getAllData();
        $this->load->view('Partials/menu_view',$data);
          if($this->_module != 'cart' && $this->_module !='blog' && $this->_module !='login' && $this->_module!='productdetail' ){
            $this->_loadBanner();
        }
    }
    
    protected function _loadFooter(){
       
        $this->load->view('Partials/footer_view');
    }

    protected function get_session_username(){
        $username = $this->session->userdata('username');
        return (empty($username)) ? '' : $username;
    }

    protected function get_session_fullname(){
        $fullname = $this->session->userdata('fullname');
        return (empty($fullname)) ? '' : $fullname;
    }

    protected function get_session_email(){
        $email = $this->session->userdata('email');
        return (empty($email)) ? '' : $email;
    }

    protected function get_session_phone(){
        $phone = $this->session->userdata('phone');
        return (empty($phone)) ? '' : $phone;
    }

    protected function get_session_address(){
        $addess = $this->session->userdata('address');
        return (empty($addess)) ? '' : $addess;
    }
}