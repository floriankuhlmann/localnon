<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nonlocation {

	private $local_non = array();


	public function __construct() {

		$this->CI =& get_instance();
		$active_non = 'kirchfeld';

		$this->local_non['longitude_west_border'] = $this->CI->config->item('local_non_longitude_west_border', $active_non);
		$this->local_non['longitude_center'] = $this->CI->config->item('local_non_longitude_center', $active_non);
		$this->local_non['longitude_east_border'] = $this->CI->config->item('local_non_longitude_east_border', $active_non);
		$this->local_non['latitude_south_border'] = $this->CI->config->item('local_non_latitude_south_border', $active_non);
		$this->local_non['latitude_center'] = $this->CI->config->item('local_non_latitude_center', $active_non);
		$this->local_non['latitude_north_border'] = $this->CI->config->item('local_non_latitude_north_border', $active_non);	
		
		//print_r($this->local_non);

	} //end __contruct()

	public function get_long_east() {

		return $this->local_non['longitude_east_border'];
	
	}


	public function get_long_west() {

		return $this->local_non['longitude_west_border'];

	}

	public function get_long_center() {

		return $this->local_non['longitude_center'];

	}


	public function get_lat_north() {

		return $this->local_non['latitude_north_border'];

	}


	public function get_lat_south() {

		return $this->local_non['latitude_south_border'];

	}

	public function get_lat_center() {

		return $this->local_non['latitude_center'];

	}

}

?>