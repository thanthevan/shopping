<?php
/**
*
*/
class MY_Form_validation extends CI_Form_validation
{

    function __construct()
    {
        parent::__construct();
    }

    public function is_unique($str, $field)
    {
        $CI =& get_instance(); // $this
        $CI->load->database();

        sscanf($field, '%[^.].%[^.]', $table, $field);
        return isset($CI->db)
            ? ($CI->db->limit(1)->get_where($table, array($field => $str))->num_rows() === 0)
            : FALSE;
    }
}