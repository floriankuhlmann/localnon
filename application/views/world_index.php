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
			$("#startgeochecking").click(function() {
				geoFindMe();
			});
		});
	</script>	
</head>
<body>
<div class="container">

	<div class="row">			

		<div class="large-12 small-10 small-offset-1 columns border-left-open margin-bottom-2-em">
			<h1 class="text-center">#1<br>LocalNonOffLine</h1>
			<h2 class="text-center "><span class="background">Cologne, Ebertplatz<span></h2>
		</div>
		<div class="large-10 large-offset-2 small-10 small-offset-1 columns margin-bottom-2-em">
			<img class="text-center" src="<?php echo base_url();?>img/00_local_non/local_non_Ebertplatz.jpg" class="margin-top-5-em margin-bottom-5-em">
		</div>
		<div class="large-12 small-10 small-offset-1 columns margin-bottom-10-em">
		<p class="text-center">
local-non-off-line is a site specific netbased installation. the second in a series of local-non projects, this installation incorporates a webpage that presents digital artworks <span class="background">only accessible via location-check</span> at ebertplatz in cologne, germany.</p>
		</div>
		
		<div class="large-12 small-10 small-offset-1 columns margin-bottom-5-em border-right-open">
		<h1 class="text-center">#2<br>ParticipatingArtists</h1>
		<h2 class="text-center "><span class="background">audio, video, pics, anigifs and text<span></h2>
		</div>
		<div class="large-12 small-10 small-offset-1 columns margin-bottom-10-em">
<p class="text-center">Sebastian Blank, Laura Brothers, Browser Based Foundation, Jennifer Chan, Florian Egermann, Dorotea Etzler, Manuel Fernandez, Thomas Hawarnke, Katrin Herzner, Yvonne Klasen, Christoph Knoth, Jan Robert Leegte, Peter Luining, Jonas Lund, Lorna Mills, Diane Mueller, Niko Princen, Oliver Salkic, Nicolas Sassoon, Julia Scher, Sebastian Schmieg, Vera Tan Hoveling, Johannes Thies, Sebastian Thewes, Damien Weber, Joonas Westerlund, Joubin Zargarbashi</p>
		</div>
		<hr>
		
		<div class="large-12 small-10 small-offset-1 columns checkin margin-bottom-5-em">
			<br>
			<br>
			<span id="startgeochecking">			
			<h1 class="text-center">#3<br>ClicktoEnter<br>TheShow</h1>
			<h2 class="text-center"><span class="background">Access via<br>GeoLocationCheck<span></h2>
			</span>
			<br>
			<h2 class="text-center" id="output"></h2>
			<br>
			<br>
		</div>

		<hr>
		<div class="large-12 small-10 small-offset-1 columns border-left-open ">
			<h1 class="text-center">#3<br>About</h1>
			<h2 class="text-center"><span class="background">Wtf?! Who did this?<span></h2>
			<br>
			<p class="text-center">Concept & idea: <a href="http://www.floriankuhlmann.com">Florian Kuhlmann</a></p>
		<p class="text-center">
Design & code: <a href="http://www.mrgn.de">Studio Morgen</a></p>
		<p class="text-center">
Supported by <a href="http://www.boutique-koeln.de/">Boutique</a>, <a href="http://goldundbeton.de/wordpress/">Bruch&Dallas</a> and <a href="http://www.bruchunddallas.de/">Gold&Beton</a></p>
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