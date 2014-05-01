<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class World extends CI_Controller {
	   
    private $the_local_non;
	private $data;
	private $params = array();
	 
	public function __construct()
    {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('cookie');
				
		$this->data['title'] = "#LocalNonOffLine";
		$this->data['pageclass'] = "page";
		
    	// log_message('info', 'Aktuelle Position des Local Non'.implode(",", $params));
    	$this->load->library('authent');
    		
    }
	 
	public function index()
	{		
		$this->session->sess_destroy();
		$this->load->view('world_index');
	}
	
	public function checking_location() {
				
    	$long = $this->input->post('longitude', TRUE) - 321;
    	$lat = $this->input->post('latitude', TRUE) - 321;
    	
   		
        $this->authent->authenticate_location_check($long,$lat);
        //$this->authent->authenticate_location_check(57.21200000,$lat);
        /*$this->data['longitude'] = $this->authent->get_longitude();
       	$this->data['latitude'] = $this->authent->get_latitude();
       	$this->data['loginstatus'] = $this->authent->is_logged_in();*/
        
        //echo $this->session->userdata('logged_in')."<br>"; 	
       	// print_r($this->session->all_userdata());
        
        if ($this->authent->is_logged_in()) {
        	$this->load->view('local_start_show', $this->data);
        } else {
        	$this->load->library('rb');
			$geodata = R::dispense('geodata');
    		$geodata->longitude = $long;
			$geodata->latitude = $lat;
			$geodata->logindate = date('j.n.Y G:i:s');
    		$id = R::store($geodata);
        	$this->load->view('local_no_show', $this->data);
        }
        	
	}
	
	
}

/* End of file welcome.php */