<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
        $this->load->helper('language');
		$this->lang->load('settings', 'english');
    }

	public function index()
	{
		
		$this->load->view('dashboard');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */