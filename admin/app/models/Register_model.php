<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class Register_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    function __destruct(){
        $this->db->close();
    }

    public function add_user_model($data){
        $id = 0;
        if($this->db->insert('taikhoan',$data)){
            $id = $this->db->insert_id();
        }

        return $id;
    }

    public function get_info_user($id){
        $data = array();
        $this->db->select('*');
        $this->db->from('taikhoan');
        $this->db->where('id_tk',$id);
        $data = $this->db->get()->row_array();
        return $data;
    }

    public function update_user($id){
        $data = array(
            'Trang_thai' => 1
        );
        $this->db->where('id_tk', $id);
        if($this->db->update('taikhoan', $data)){
            return TRUE;
        }
        return FALSE;
    }
}
