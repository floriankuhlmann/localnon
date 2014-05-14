<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
this controller is managing the local views, when authentication was successfull.
*/

class Local extends CI_Controller {

public function __construct()
 
    {
		parent::__construct();
		$this->load->helper('url');
    	$this->load->library('authent');	
		
		$this->data['title'] = $this->config->item('local_non_title', 'LocalNonAppConfig');
		$this->data['pageclass'] = "page";

    }

	public function index()
	{
		if ($this->authent->is_logged_in()) {
			
			/* some standard setup for the page views */
			$this->data['pagetitle'] = $this->config->item('local_non_title', 'LocalNonAppConfig');
			$this->data['artistname'] = "";
			$this->data['pageclass'] = "localnonoffline";		
			
			/* taking the last part of the url and decide what top show
			example http://www.domain.com/local/florian_kuhlmann is mapped on the view-file named florian_kuhlmann.php in /views/local/ 
			*/	

			$go = 'local/'.$this->uri->segment(2);
			$this->load->view($go, $this->data);
		
		} else {
		
			/* user not authenticated */
        	$this->load->view('local_no_show', $this->data);
			
		}
	}


}


?>