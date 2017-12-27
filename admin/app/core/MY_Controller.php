<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class MY_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
    }
    
    public function upload($file)
    {
    	    $infoFile = array();
    		$config['upload_path'] = IMG_PRODUCT_PATH;
    		$config['allowed_types'] = 'gif|jpg|png';
    		$config['max_size']     = 1000;
    		$config['max_width'] = 1920;
    		$config['max_height'] = 1080;
    		$this->upload->initialize($config);
    		if ($this->upload->do_upload($file))
    		 
              $infoFile = $this->upload->data();
            else
             $infoFile= array('error' => $this->upload->display_errors());

        return $infoFile;
    } 
}