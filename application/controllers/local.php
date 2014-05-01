<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Local extends CI_Controller {

public function __construct()
 
    {
		parent::__construct();
		$this->load->helper('url');
    	$this->load->library('authent');	
		
		$this->data['title'] = $this->config->item('local_non_title', 'LocalNonApp');
		$this->data['pageclass'] = "page";

    }

	public function index()
	{
		if ($this->authent->is_logged_in()) {
			$this->data['pagetitle'] = $this->config->item('local_non_title', 'LocalNonApp');
			$this->data['artistname'] = "";
			$this->data['pageclass'] = "localnonoffline";		
			$go = 'local/'.$this->uri->segment(2);
		
			$this->load->view($go, $this->data);
		
		} else {
		
        	$this->load->view('local_no_show', $this->data);
			
		}
	}


}


?>