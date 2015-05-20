<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* page title */
$config['LocalNonAppConfig']['local_non_title'] = "the local non";


/* set the active position 
this is good for debugging or if you do the setup at home or in your studio and not at the final destination
*/
$config['LocalNonAppConfig']['active_position'] = "position3";


/* Example values my office and studio
*/

/* 
				Kirchfeldstraße 112				
				Düsseldorf, Germany
				long 6.78250000		...		long 6.78450000
				lat 51.21300000				lat 51.21300000

						.		 6.7836080			.
						.		51.2124357			.
						.							.
				
				long 6.78250000				long 6.78450000
				lat 51.21100000		...		lat 51.21100000
*/

$config['position1']['location'] = "kirchfeldstr-112";

/*
|--------------------------------------------------------------------------
| local longitude
|--------------------------------------------------------------------------
|
| The location for the local non
|
*/

$config['position1']['local_non_longitude_west_border']	= '6.78250000';
$config['position1']['local_non_longitude_center']		= '6.78350000';
$config['position1']['local_non_longitude_east_border']	= '6.78450000';

/*
|--------------------------------------------------------------------------
| local latitude
|--------------------------------------------------------------------------
|
| The location for the local non
|
*/
$config['position1']['local_non_latitude_south_border']		= '51.21100000';
$config['position1']['local_non_latitude_center']			= '51.21200000';
$config['position1']['local_non_latitude_north_border']		= '51.21300000';



/* Example values my homebase
*/

/* 
				Antoniusstrasse 7				
				long 6.78450000		...		long 6.78823000
				lat 51.21500000				lat 51.21500000

						.		 6.78665260			.
						.		51.21291060			.
						.							.
				
				long 6.78450000				long 6.78823000
				lat 51.21200000		...		lat 51.21200000
*/

$config['position2']['location'] = "antoniusstr-7";

/*
|--------------------------------------------------------------------------
| local longitude
|--------------------------------------------------------------------------
|
| The location for the local non
|
*/

$config['position2']['local_non_longitude_west_border']	= '6.78450000';
$config['position2']['local_non_longitude_center']		= '6.78665260';
$config['position2']['local_non_longitude_east_border']	= '6.78823000';

/*
|--------------------------------------------------------------------------
| local latitude
|--------------------------------------------------------------------------
|
| The location for the local non
|
*/

$config['position2']['local_non_latitude_south_border']		= '51.21100000';
$config['position2']['local_non_latitude_center']		= '51.21291060';
$config['position2']['local_non_latitude_north_border']		= '51.21500000';


$config['position3']['location'] = "athens media art festival 2015";

/*
|--------------------------------------------------------------------------
| local longitude
|--------------------------------------------------------------------------
|
| The location for the local non
|
*/

$config['position3']['local_non_longitude_west_border']	= '23.72340000';
$config['position3']['local_non_longitude_center']		= '23.72440000';
$config['position3']['local_non_longitude_east_border']	= '23.72540000';

/*
|--------------------------------------------------------------------------
| local latitude
|--------------------------------------------------------------------------
|
| The location for the local non
|
*/
$config['position3']['local_non_latitude_south_border']		= '37.97982000';
$config['position3']['local_non_latitude_center']			= '37.98082000';
$config['position3']['local_non_latitude_north_border']		= '37.98182000';
