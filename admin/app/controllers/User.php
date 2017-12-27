<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
       
    }
    public function index()
    {
    	
    	$this->load->view('partails/header_view');
        $this->load->view('partails/aside_view');
        $this->load->view('user/index_view');
        $this->load->view('partails/footer_view');
    }
}