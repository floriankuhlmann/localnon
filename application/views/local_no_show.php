<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>HTTP ERROR 452 - BAD LOCATION</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/foundation.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/localnonsculpture.css"/>

</head>
<body>

<div class="container">

	<div class="row">			
		<div class="large-10 large-offset-1 small-10 small-offset-1 columns margin-bottom-2-em">
			<h1>452 ERROR - NO ACCESS | TOTALY BAD LOCATION</h1>
			<address>Apache/2.2.22 (Debian) Server at <?PHP echo $_SERVER['SERVER_ADDR']; ?> Port 80</address>
			<p class="margin-top-2-em">This Netart show is not avalailable at your location.<br>
			Time to leave your desktop and move your flesh and bones?</p>
			<p><a href="<?php echo base_url();?>">try to get access again</a></p>
		</div>
		<?php if (!empty($lat_center)) { ?>
		<div class="large-10 large-offset-1 small-10 small-offset-1 columns margin-bottom-2-em">
			<img src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $lat_center;?>,<?php echo $long_center;?>&zoom=14&size=1024x768&maptype=hybrid&style=saturation:-100&sensor=false&markers=color:white%7Clabel:L%7C<?php echo $lat_center;?>,<?php echo $long_center;?>&path=color:0x00000000|weight:5|fillcolor:0xa35518|<?php echo $lat_south;?>,<?php echo $long_west;?>|<?php echo $lat_south;?>,<?php echo $long_east;?>|<?php echo $lat_north;?>,<?php echo $long_east;?>|<?php echo $lat_north;?>,<?php echo $long_west;?>">
		</div>
		<?php } ?>
		<div class="large-10 large-offset-1 small-10 small-offset-1 columns margin-bottom-2-em">
			<hr>
		</div>
	</div>
</div>



</body></html>