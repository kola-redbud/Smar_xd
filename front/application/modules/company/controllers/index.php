<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends BaseController {
	public function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('index');
	}

    public function detail() {
        $this->load->view('detail');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */