<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Userlocation {

	private $longitude;
	private $latitude;


	public function __construct($params) {

		$this->CI =& get_instance();

		$this->longitude = $this->prepareGeodata($params['longitude']);
		$this->latitude = $this->prepareGeodata($params['latitude']);

	} //end __contruct()

	private function prepareGeodata($position) {

		// bestimmen ob ein oder zwei stellen vor dem punkt
		$long_charbeforpoint = strpos($position, '.');
		
		// aufbereiten der geodaten und abschneiden zu langer zahlenwert die manchmal übermittelt werden
		$position_temp = substr($position, 0, 8+$long_charbeforpoint);
		
		// auffüllen wenn zu kurz
		$finalposition = str_pad($position_temp, 9+$long_charbeforpoint, "0");

		return $finalposition;

	}

	public function get_longitude() {

		return $this->longitude;
	
	}

	public function get_latitude() {

		return $this->latitude;

	}


}

?>