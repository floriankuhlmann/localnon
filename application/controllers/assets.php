<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Assets extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->helper('url');	
    }


	public function index()
	{
	
	}
	
	/* frontcss delivery */
	public function frontcss()
	{
		$this->load->view('assets/frontcss');
	}
	
	/* Standard js delivery */
	public function js_init()
	{
		$this->load->view('assets/js_init');
	}

	/* Minimized js delivery */
	public function javascript_min()
	{
		$this->load->view('assets/javascript_min');
	}

	/* sonic js delivery */
	public function js_sonic()
	{
		$this->load->view('assets/js_sonic');
	}

	/* Standard jquery delivery */
	public function jquery()
	{
		$this->load->view('assets/jquery');
	}

		/* Standard css delivery */
	public function foundation()
	{
		$this->load->view('assets/foundation');
	}

}


?>