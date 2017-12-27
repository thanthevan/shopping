<?php

class Login_model extends CI_Model
{
              protected $_countData;
              function __construct()
              {
                  $this->load->database();
              }
              public function check_login($email,$password)
              {
                  
                  $this->db->select('*');
                  $this->db->from('customers');
                  $this->db->where('email',$email);
                  $this->db->where('password',$password);
                  $this->db->where('status',1);
                  $this->_countData=$this->db->get()->row_array();
                  if(count($this->_countData)>0)
                    return TRUE;

                    return FALSE;
              }
              public function get_data_by_cus($email,$password)
              {
                      $data = array();
                      $this->db->select('*');
                      $this->db->from('customers');
                      $this->db->where('email',$email);
                      $this->db->where('password',$password);
                      $this->db->where('status',1);
                      $data= $this->db->get()->row_array();
                      return $data;
              }
          
}

 ?>
