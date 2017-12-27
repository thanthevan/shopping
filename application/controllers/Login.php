<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_controller {

	function __construct()
	{
		$this->_module = trim(strtolower(__CLASS__));
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('login_model');

	}

	public function signin()
	{   $bool = false;
		if($this->input->post()){
            
			$this->form_validation->set_rules('txt_email', 'Tài khoản','required');
			$this->form_validation->set_rules('txt_password','Mật khẩu','required');
			$this->form_validation->set_rules('login','Đăng nhập','callback_check_login');
			$this->form_validation->set_message(array(
				'required' => '{field} không được bỏ trống',
				));

			if($this->form_validation->run() === FALSE){
				
				
				redirect(base_url('home?mess=false'));
			}
			else{
				$email = $this->input->post('txt_email');
				$email = $this->security->xss_clean($email);
				$password = $this->input->post('txt_password');
				$password = $this->security->xss_clean($password);
				$dataUser = $this->login_model->get_data_by_cus($email,md5($password));

				if(empty($dataUser)){
					
					redirect(base_url('home/?mess=false'));
				}else{
				
					$this->session->set_userdata('email',$dataUser['email']);
					$this->session->set_userdata('fullname',$dataUser['fullname']);
					$this->session->set_userdata('phone',$dataUser['phone']);
					$this->session->set_userdata('address',$dataUser['address']);
					$this->session->set_userdata('id_customers',$dataUser['id_customers']);
					redirect(base_url('home'));
				}
			}
		}
	}
	public function check_login()
	{   
        $email=$this->input->post('txt_email');
        $password=$this->input->post('txt_password');
		$email= trim(strip_tags($email));
		$pass = trim(strip_tags($password));
		$check = $this->login_model->check_login($email,md5($pass));
		if($check){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_login','Sai email hoặc mật khẩu');
			return FALSE;
		}
	}
	public function signout()
	{
		session_destroy();
		redirect(site_url('home'));
	}
	
}