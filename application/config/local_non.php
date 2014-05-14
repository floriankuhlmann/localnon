<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$config['LocalNonApp']['local_non_title'] = "the local non";



/* Example values */

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

$config['kirchfeld']['location'] = "kirchfeldstr-7";

/*
|--------------------------------------------------------------------------
| local longitude
|--------------------------------------------------------------------------
|
| The location for the local non
|
*/

$config['kirchfeld']['local_non_longitude_west_border']	= '6.78250000';
$config['kirchfeld']['local_non_longitude_center']		= '6.78350000';
$config['kirchfeld']['local_non_longitude_east_border']	= '6.78450000';

/*
|--------------------------------------------------------------------------
| local latitude
|--------------------------------------------------------------------------
|
| The location for the local non
|
*/
$config['kirchfeld']['local_non_latitude_south_border']		= '51.21100000';
$config['kirchfeld']['local_non_latitude_center']			= '51.21200000';
$config['kirchfeld']['local_non_latitude_north_border']		= '51.21300000';


/* Example values */

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

$config['antonius']['location'] = "antoniusstr-7";

/*
|--------------------------------------------------------------------------
| local longitude
|--------------------------------------------------------------------------
|
| The location for the local non
|
*/

$config['antonius']['local_non_longitude_west_border']	= '6.78450000';
$config['antonius']['local_non_longitude_center']		= '6.78665260';
$config['antonius']['local_non_longitude_east_border']	= '6.78823000';

/*
|--------------------------------------------------------------------------
| local latitude
|--------------------------------------------------------------------------
|
| The location for the local non
|
*/

$config['antonius']['local_non_latitude_south_border']		= '51.21200000';
$config['antonius']['local_non_latitude_center']		= '51.21291060';
$config['antonius']['local_non_latitude_north_border']		= '51.21500000';
