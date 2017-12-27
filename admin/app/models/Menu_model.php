<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class Menu_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    public function getAllAuthor(){
        $data = array();
        $this->db->select('*'); // select *
        $this->db->from('tacgia'); // form tacgia
        $data = $this->db->get()->result_array();
        return $data;
    }

    function __destruct(){
        $this->db->close();
    }
}