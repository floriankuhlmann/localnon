<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*

Tutorial and Info fpr using this RB-Lib on
http://creolab.hr/2011/02/redbean-codeigniter-take-2/


*/


class Rb {
	
	function __construct() {
		// Include database configuration
		include('application/config/database.php');
		
		// Get Redbean
		include('application/third_party/rb.php');
		
		// Database data
		$host = $db[$active_group]['hostname'];
		$user = $db[$active_group]['username'];
		$pass = $db[$active_group]['password'];
		$db = $db[$active_group]['database'];
		
		// Setup DB connection
		R::setup("mysql:host=$host;dbname=$db", $user, $pass);
	} //end __contruct()
} //end Rb

?>