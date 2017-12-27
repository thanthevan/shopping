<?php
/**
 *
 */
class Login_model extends CI_Model
{

              function __construct()
              {
                  $this->load->database();
              }
              public function check_username_model($username)
              {
                  $value = false;
                  $this->db->select('*');
                  $this->db->from('user');
                  $this->db->where('UserName',$username);
                  $countData=$this->db->get()->row_array();
                  if(count($countData)>0)
                    $value=true;

               return $value;
              }
              public function check_password_model($password)
              {
                  $value = false;
                  $this->db->select('*');
                  $this->db->from('user');
                  $this->db->where('Password',$password);
                  $countData=$this->db->get()->row_array();
                  if(count($countData)>0)
                    $value=true;

               return $value;
              }
              public function get_data_by_user($username,$password)
              {
                      $data = array();
                      $this->db->select('*');
                      $this->db->from('user');
                      $this->db->where('UserName',$username);
                      $this->db->where('Password',$password);
                      $this->db->where('Status',1);
                      $data= $this->db->get()->row_array();
                      return $data;
              }
}

 ?>
