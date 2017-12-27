<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
/**
*
*/
class Login extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('login_model');
	}

	public function index(){
		$this->load->view('login/index_view');
	}

	public function check_username($userName){
		$check = $this->login_model->check_username_model($userName);
		if($check){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_username','Tài khoản hoặc mật khẩu sai');
			return FALSE;
		}
	}

	public function check_password($password){
		$check = $this->login_model->check_password_model(md5($password));
		if($check){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_password','Tài khoản hoặc mật khẩu sai');
			return FALSE;
		}
	}

	public function handle(){
		if($this->input->post()){

			$this->form_validation->set_rules('txtusername', 'Tài khoản','required|callback_check_username');
			$this->form_validation->set_rules('txtpassword','Mật khẩu','required|callback_check_password');

			$this->form_validation->set_message(array(
				'required' => '{field} không được bỏ trống',
				));

			if($this->form_validation->run() === FALSE){
				$this->index();
			}else{
				$username = $this->input->post('txtusername');
				$username = $this->security->xss_clean($username);

				$password = $this->input->post('txtpassword');
				$password = $this->security->xss_clean($password);

				$dataUser = $this->login_model->get_data_by_user($username, md5($password));

				if(empty($dataUser)){
					redirect(site_url('login'));
				}else{
					$this->session->set_userdata('UserName',$dataUser['UserName']);
					$this->session->set_userdata('Email',$dataUser['Email']);
					$this->session->set_userdata('FullName',$dataUser['FullName']);
					$this->session->set_userdata('PhoneNo',$dataUser['PhoneNo']);
					$this->session->set_userdata('Address',$dataUser['Address']);
					$this->session->set_userdata('Gender',$dataUser['Gender']);
					$this->session->set_userdata('UserId',$dataUser['UserId']);
					redirect(site_url('dashboard'));
				}
			}
		}
	}

	public function out(){
		$this->session->unset_userdata('UserName');
		$this->session->unset_userdata('Email');
		$this->session->unset_userdata('FullName');
		$this->session->unset_userdata('Gender');
		$this->session->unset_userdata('PhoneNo');
		$this->session->unset_userdata('Address');
		$this->session->unset_userdata('UserId');
		redirect(site_url('login/index'));
	}
}