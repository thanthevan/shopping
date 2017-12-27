<?php
/**
 *
 */
class User_model extends CI_Model
{

              function __construct()
              {
                  $this->load->database();
              }
              
              public function get_info_user_by_id($id)
              {
                      $data = array();
                      $this->db->select('*');
                      $this->db->from('user');
                      $this->db->where('UserId',$id);
                      $this->db->where('Status',1);
                      $data= $this->db->get()->row_array();
                      return $data;
              }
}

 ?>
