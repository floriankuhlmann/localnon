<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authent {

	private $logged_in = FALSE;
	private $CI;


	public function __construct() {

		$this->CI =& get_instance();

		/* setting up area of this local non */	
    	$this->CI->load->library('nonlocation');
	
	} //end __contruct()


	public function authenticate_location_check($longitude = NULL, $latitude= NULL) {	
		// echo $longitude."lat".$latitude;
		if($this->is_logged_in() == "TRUE") {
		
			$logged_in = TRUE;
		
		} else {

			/* setting up userposition in nice little userposition object. go!*/	
			$params = array('longitude' => $longitude, 'latitude' => $latitude);
    		$this->CI->load->library('userlocation', $params);

			// the location-check
			if( $this->CI->nonlocation->get_long_west() < $this->CI->userlocation->get_longitude() && 
				$this->CI->userlocation->get_longitude() < $this->CI->nonlocation->get_long_east() && 
				$this->CI->nonlocation->get_lat_south() < $this->CI->userlocation->get_latitude() && 
				$this->CI->userlocation->get_latitude() < $this->CI->nonlocation->get_lat_north() ) 
			{				
				$logged_in = TRUE;
				$this->CI->session->set_userdata('logged_in', 'TRUE');
			} else {
				$logged_in = FALSE;
				$this->CI->session->set_userdata('logged_in', 'FALSE');
			}

		}
		
		return $logged_in;
		
	}

	public function is_logged_in() {
				
		if($this->CI->session->userdata('logged_in') == "TRUE") {			
			$logged_in = TRUE;			
		} else {				
			$logged_in = FALSE;		
		}
			
		return $logged_in;
			
	}
	
	public function logg_in() {
		$this->CI->session->set_userdata('logged_in', 'TRUE');
	}
	
	public function logg_out() {
		$this->CI->session->set_userdata('logged_in', 'FALSE');
	}	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */