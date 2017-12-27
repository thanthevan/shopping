 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_controller {

	function __construct()
	{
		$this->_module = trim(strtolower(__CLASS__));
		parent::__construct();

	}

	public function index()
	{

		$this->_loadHeader();
		$this->_loadMenu();
		$this->load->view('Blog/index_view');
		$this->_loadFooter();
	}

} 