<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <!-- If you delete this meta tag World War Z will become a reality -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOCAL NON OFF LINE</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/foundation.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/localnonsculpture.css"/>

	<script src="<?php echo base_url();?>assets/js/vendor/modernizr.js"></script>
	<script src="<?php echo base_url();?>assets/js/vendor/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/sonic.js"></script>
	<script src="<?php echo base_url();?>assets/js/geofinder.js"></script>
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
<body class="start">
<div class="container">

	<div class="row">			
		<!-- about -->
		<div class="large-12 large-offset-0 medium-10 medium-offset-1 small-10 small-offset-1 border-left-open columns margin-bottom-5-em">
			<h1 class="text-center">#LocalNon #Sculpture</h1>
			<h2 class="text-center">#ADAF2015 #ThisIsSculpture</h2>
		</div>
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 small-10 small-offset-1 margin-bottom-5-em">
			<h2 class="text-center">1. WTF?!?</h2><br><br>
			<p class="text-center">
			A #LocalNon is a site specific netbased online installation. This installation incorporates a www-webpage that presents digital artwork 
only accessible via location-check at the area of the <a href="http://www.adaf.gr/">11th Athens Digital Arts Festival, Greek</a>.</p>
		</div>
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 small-10 small-offset-1 margin-bottom-10-em">
		<p class="text-center">A #LocalNon is a sculpture made out of pure information, its dimensions in space are defined by bits, bytes, longitude and latitude and refers to the possibility of getting access to it.
		</div>
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 small-10 small-offset-1 columns margin-bottom-10-em">
		<hr>
		</div>
		<!-- about -->

		<!-- artists -->		
		<div class="large-12 large-offset-0 medium-10 medium-offset-1 small-10 small-offset-1 columns margin-bottom-5-em border-right-open">
		<h1 class="text-center">Participating artists</h1>
		</div>
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 small-10 small-offset-1 columns margin-bottom-10-em">
			<h2 class="text-center">2. WHO?</h2><br><br>
			<p class="text-center">
				
				Banz & Bowinkel, Claudia Mate, Dominik Podsiadly, Eva Papamargariti, Florian Meisenberg, Galleryfist, Isabella Fürnkäs, Lorna Mills, Manuel Rossner, Ole Fach, Olia Lialina, Paul Soulellis, Ronny Szillo, Thomas Artur Spallek, Tobias Rothe, Zsolt Mesterhazy
			</p>
		</div>
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 small-10 small-offset-1 margin-bottom-10-em columns">
		<hr>
		</div>

		<!-- artists -->
		
		<!-- check in -->
		<div class="large-12 large-offset-0 medium-10 medium-offset-1 small-10 small-offset-1 columns margin-bottom-5-em border-left-open">
			<h1 class="text-center">The location</h1>
		</div>
		
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 small-10 small-offset-1 columns margin-bottom-10-em">
			<h2 class="text-center">3. WHERE?</h2><br><br>
			<p class="text-center">
				<img class="location" src="assets/img/location_athens.jpg">
			</p><br>
			<h2 class="text-center">ATHENS DIGITAL ARTS FESTIVAL 2015</h2>
			<p class="text-center"><br> Menandrou 6, Athens</p>
			<p  class="text-center">Lat: 37.980817 | Long: 23.724399</p>
		</div>
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 small-10 small-offset-1 margin-bottom-10-em columns">
		<hr>
		</div>
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 small-10 small-offset-1 columns margin-bottom-5-em">
			<div id="startgeochecking" class="margin-bottom-5-em">			
			<h1 class="text-center">Click here to enter this show</h1>
			<h2 class="text-center">Check access now via<br><span></span>GeoLocation-Check</h2>
			</div>
			<br>
			<h2 class="text-center" id="output"></h2>
			<br>
			<br>
		</div>
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 small-10 small-offset-1 margin-bottom-10-em columns">
		<hr>
		</div>
		<div class="medium-10 medium-offset-1 small-10 small-offset-1 columns margin-bottom-5-em">
			<p class="text-center">Idea & concept by<br><a href="http://www.floriankuhlmann.com">Florian Kuhlmann</a></p><br>
			<p class="text-center">Supported by<br><a href="http://www.adaf.gr/2015-edition/m">ADAF 2015</a></p>
		</div>
		<!-- check in -->
		<div class="large-8 large-offset-2 medium-10 medium-offset-1 small-10 small-offset-1 columns margin-bottom-5-em ">
			<form id="loginform" method="post" action="<?php echo base_url();?>world/checking_location" name="form">
				<input type="hidden"  name="longitude" id="longitude">
				<input type="hidden"  name="latitude" id="latitude">
			</form>
		</div>
	</div>

</div><!-- ende .container -->
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//www.meta-unlimited.com/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 61]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//www.meta-unlimited.com/piwik/piwik.php?idsite=61" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

</body>
</html>
