<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authent {

	private $logged_in = FALSE;
	private $longitude; 
	private $latitude;

	private $local_non_longitude_min_range;
	private $local_non_longitude_max_range;
	private $local_non_latitude_min_range; 
	private $local_non_latitude_max_range;

	private $CI;

	public function __construct() {

		$this->CI =& get_instance();
		$active_non = 'kirchfeld';
		//$active_non = 'antonius';
		/* setting up area of this local non */	
		$this->local_non_longitude_min_range = $this->CI->config->item('local_non_longitude_east_border', $active_non);
		$this->local_non_longitude_max_range = $this->CI->config->item('local_non_longitude_west_border', $active_non);
		$this->local_non_latitude_min_range = $this->CI->config->item('local_non_latitude_south_border', $active_non);
		$this->local_non_latitude_max_range = $this->CI->config->item('local_non_latitude_north_border', $active_non);	

		/*if($this->is_logged_in() == "TRUE") {
			$this->logged_in = TRUE;
			//echo "Authent true";
		} else {
			$this->logged_in = FALSE;
			//echo "Authent false";
		};
		
		print_r($this->CI->session->all_userdata());*/
	
	} //end __contruct()


	public function authenticate_location_check($longitude = NULL, $latitude= NULL) {	
		
		if($this->is_logged_in() == "TRUE") {
		
			$logged_in = TRUE;
		
		} else {

			// bestimmen ob ein oder zwei stellen vor dem punkt
			$long_charbeforpoint = strpos($longitude, '.');
			$lat_charbeforpoint = strpos($latitude, '.');
		
			// aufbereiten der geodaten und abschneiden zu langer zahlenwert die manchmal übermittelt werden
			$longited_temp = substr($longitude, 0, 8+$long_charbeforpoint);
			$latitude_temp = substr($latitude, 0, 8+$lat_charbeforpoint);
		
			// auffüllen wenn zu kurz
			$this->longitude = str_pad($longited_temp, 9+$long_charbeforpoint, "0");
			$this->latitude = str_pad($latitude_temp, 9+$lat_charbeforpoint, "0");

			// the location-check
			if ( $this->local_non_longitude_min_range < $this->longitude && $this->longitude < $this->local_non_longitude_max_range && 
				$this->local_non_latitude_min_range < $this->latitude && $this->latitude < $this->local_non_latitude_max_range ) 
			{				
				$logged_in = TRUE;
				$this->CI->session->set_userdata('logged_in', 'TRUE');
			} else {
				$logged_in = FALSE;
				$this->CI->session->set_userdata('logged_in', 'FALSE');
			}
			//print_r($this->CI->session->all_userdata());
		}
		
		return $logged_in;
		
	}


	public function is_authenticated() {
		
		$status = false;
		
		if ($this->logged_in == TRUE) {
			$status = true;
		} else {
			$status = false;	
		}
		
		return $status;
		
	}
	
	public function is_logged_in() {
		
			//echo $this->CI->session->userdata('logged_in');
			
			if($this->CI->session->userdata('logged_in') == "TRUE") {
				$logged_in = TRUE;
			} else {
				$logged_in = FALSE;
			}
			return $logged_in;
			
	}

	public function get_longitude () {
			return $this->longitude;
	}

	public function get_latitude () {
			return $this->latitude;
	}
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */