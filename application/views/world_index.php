<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LOCAL NON OFF LINE</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/foundation"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontcss"/>

	<script src="<?php echo base_url();?>assets/jquery"></script>
	<script src="<?php echo base_url();?>assets/javascript_min"></script>
		<script src="<?php echo base_url();?>assets/js_sonic"></script>
	<script type="text/javascript">
		$(document).ready(function(){ 
			if($("#startgeochecking").length) {
				$("#startgeochecking").click(function() {
					geoFindMe();
				});
			} else {
				geoFindMe();
			}
		});
	</script>	
</head>
<body>
<div class="container">

	<div class="row">			

		<div class="large-12 small-10 small-offset-1 columns border-left-open margin-bottom-2-em">
			<h1 class="text-center">#LocalNon</h1>
		</div>
		<div class="large-12 small-10 small-offset-1 columns">
		<p class="text-center">
a local-non is a site specific netbased installation. this installation incorporates a webpage that presents digital artwork 
<span class="background">only accessible via location-check</span> at ebertplatz in cologne, germany.</p>
		</div>
		<div class="large-12 small-10 small-offset-1 columns checkin margin-bottom-5-em">
			<span id="startgeochecking">			
			<h1 class="text-center">#ClickHeretoEnter<br>this #LocalNon</h1>
			<h2 class="text-center"><span class="background">Access via<br>GeoLocationCheck<span></h2>
			</span>
			<br>
			<h2 class="text-center" id="output"></h2>
			<br>
			<br>
		</div>

		<div class="large-12 small-10 small-offset-1 columns margin-bottom-5-em ">
			<form id="loginform" method="post" action="<?php echo base_url();?>world/checking_location" name="form">
				<input type="hidden"  name="longitude" id="longitude">
				<input type="hidden"  name="latitude" id="latitude">
			</form>
		</div>
	</div>

</div><!-- ende .container -->
</body>
</html>