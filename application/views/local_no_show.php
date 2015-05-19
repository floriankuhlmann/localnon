<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <!-- If you delete this meta tag World War Z will become a reality -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HTTP ERROR 452 - BAD LOCATION</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/foundation.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/localnonsculpture.css"/>

</head>
<body>

<div class="container">

	<div class="row">			
		<div class="large-10 large-offset-1 small-10 small-offset-1 columns margin-bottom-2-em">
			<h1 class="text-center">452 ERROR - NO ACCESS | TOTALY BAD LOCATION</h1>
			<address class="text-center">Apache/2.2.22 (Debian) Server 176.9.25.202 at Port 80</address>
			<p class="margin-top-2-em text-center">This netart show is not avalailable at your location.<br>
			Time to leave your desktop and move your flesh and bones?</p>
			<p class="text-center"><a href="<?php echo base_url();?>">try to get access again</a></p>
		</div>
		<?php if (!empty($lat_center)) { ?>
		<div class="large-10 large-offset-1 small-10 small-offset-1 columns margin-bottom-2-em">
			<hr>
		</div>
		<div class="large-10 large-offset-1 small-10 small-offset-1 columns margin-bottom-2-em">
			<p class="text-center">You should better be here:</p>
			<p class="text-center">
				<a href="http://www.adaf.gr/programme-2015/">
				<img src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $lat_center;?>,<?php echo $long_center;?>&zoom=14&size=1024x768&maptype=hybrid&style=saturation:-100&sensor=false&markers=color:white%7Clabel:L%7C<?php echo $lat_center;?>,<?php echo $long_center;?>&path=color:0x00000000|weight:5|fillcolor:0xa35518|<?php echo $lat_south;?>,<?php echo $long_west;?>|<?php echo $lat_south;?>,<?php echo $long_east;?>|<?php echo $lat_north;?>,<?php echo $long_east;?>|<?php echo $lat_north;?>,<?php echo $long_west;?>">
				</a>
			</p>
		</div>
		<?php } ?>
		<div class="large-10 large-offset-1 small-10 small-offset-1 columns margin-bottom-2-em">
			<hr>
		</div>
		<div class="large-10 large-offset-1 small-10 small-offset-1 columns margin-bottom-2-em">

		</div>
	</div>
</div>



</body></html>