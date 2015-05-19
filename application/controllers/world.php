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
    	$this->load->helper('directory');				
		$this->data['title'] = "#LocalNonOffLine";
		$this->data['pageclass'] = "page";
		
    	// log_message('info', 'Aktuelle Position des Local Non'.implode(",", $params));
    	$this->load->library('authent');
    	$this->load->library('nonlocation');
        $this->data['long_east'] = $this->nonlocation->get_long_east();
        $this->data['long_west'] = $this->nonlocation->get_long_west();
        $this->data['long_center'] = $this->nonlocation->get_long_center();
        $this->data['lat_north'] = $this->nonlocation->get_lat_north();
        $this->data['lat_south'] = $this->nonlocation->get_lat_south();
        $this->data['lat_center'] = $this->nonlocation->get_lat_center(); 
	
    }
	 
	public function index()
	{		
		$this->session->sess_destroy();

        /* the following helps to make it a little bit more difficult to hack the js geolocation
        but of course its no real help against someone with a little codeknowledge of js/html/php */
        //$this->data['lalorand'] = rand(5, 15);
        //$this->session->set_userdata('lalorand', $this->data['lalorand']);
        //print_r($this->session->all_userdata());
        $this->load->view('world_index', $this->data);
	}
	
	public function checking_location() {
				
    	$long = $this->input->post('longitude', TRUE) - 321;
    	$lat = $this->input->post('latitude', TRUE) - 321;

   		
        $this->authent->authenticate_location_check($long,$lat);

		$this->data['map'] = directory_map('assets/artwork/',3);
		// print_r($this->data['map']);
        //echo $this->session->userdata('logged_in')."<br>"; 	
       	// print_r($this->session->all_userdata());
        //$this->load->view('local_start_show', $this->data);
        if ($this->authent->is_logged_in()) {
        	$this->load->view('local_start_show', $this->data);
        } else {
        	/*$this->load->library('rb');
			$geodata = R::dispense('geodata');
    		$geodata->longitude = $long;
			$geodata->latitude = $lat;
			$geodata->logindate = date('j.n.Y G:i:s');
    		$id = R::store($geodata);*/
        	$this->load->view('local_no_show', $this->data);
        }
        	
	}
	
	public function sneakpreview() {

		
		$this->authent->logg_in();
		$this->data['map'] = directory_map('assets/artwork/',3);
		$this->load->view('local_start_show', $this->data);
	}
	
	
}

/* End of file welcome.php */