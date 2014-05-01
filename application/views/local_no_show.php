<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
// Connect to the database
$user_name = "localnonaccess";
$password = "localnonaccess";
$database = "localnonaccess";
$server = "localhost";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

// Check connection
/*
if (mysqli_connect_errno($db_handle)) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	echo "Database working!\n";
}
if ($db_found) {
	print "Database Found\n";
}
else {
	print "Database NOT Found";
}
*/

$locations = array();
// Query the database
$sql = "SELECT * FROM geodata";
$result = mysql_query($sql);
$n = 0;
while ($row = mysql_fetch_row($result)) {
    $lon = $row[1];
    $lat = $row[2];
    $date = $row[3];
    // Add to array
    $locations[$n] = array( $date, $lat.','.$lon); 
    $n++;
}

//Remove lat0,lon0
$count = count($locations);
for ($k = 0; $k < $count; $k++) {
    if ($locations[$k][1] == "0,0") {
       unset($locations[$k]);
    }
}
$locations = array_values($locations);

//Remove the first element (because it's without date)
array_shift($locations);

mysql_free_result($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LOCAL NON OFF LINE</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/foundation"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontcss"/>
	<script src="<?php echo base_url();?>assets/jquery"></script>
	<script src="<?php echo base_url();?>assets/javascript_min"></script>
	
			<style type="text/css">

			#map-canvas { height: 500px; border:3px solid #a35518; }
		</style>
	<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDEV1PyedkFuxVn3lKLOL8OgkDtwkoBH0&sensor=false">
	</script>
	<script type="text/javascript">
		myZoom = 4;
		function initialize() {
			var MY_MAPTYPE_ID = 'localnonaccess'; 
			var featureOpts = [
    			{
      				featureType: 'all',
      				elementType: 'all',
      				stylers: [ 
      					{ saturation: -100 },{ "gamma": 0.8 } 
      				]
				}
  			];
  			var kmTemporaer = new google.maps.LatLng(52.5394708,13.4023245);
			var mapOptions = {
				// km temporear
				center: kmTemporaer,
				zoom: myZoom,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
          		mapTypeControlOptions: {
      				mapTypeIds: [MY_MAPTYPE_ID]
    			},
          		mapTypeId: MY_MAPTYPE_ID
			};
			var map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);
			var customMapType = new google.maps.StyledMapType(featureOpts, {name: 'local.#non.access'});
			map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
  			var image = new google.maps.MarkerImage("<?php base_url();?>/img/spotlight-poi-grey2x.png", null, null, null, new google.maps.Size(22,40));  
  			function makeLocations(latLng, digit, myMarker, date, infoWindow) {
	  			var coordInfoWindow = new google.maps.InfoWindow({
					content: 'No access granted on ' + date,
					position: latLng,
					zIndex: 1,
					maxWidth: 70,
				});
				speed = 2000;
				timeout = (digit * speed) + 3000;
				setTimeout(function(){
					var marker = new google.maps.Marker({
						position: latLng,
						map: map,
						icon: image,
						title: 'No access granted on: ' + date
					});
					myMarker = marker;
					infoWindow = coordInfoWindow;
					infoWindow.open(map,myMarker);
					map.panTo(latLng);
					setTimeout(function(){ 
						infoWindow.close();
					},speed);
					google.maps.event.addListener(myMarker, 'click', function() {
						infoWindow.open(myMarker.get('map'), myMarker);
					});
				},timeout);
  			}
  			google.maps.event.addListenerOnce(map, 'tilesloaded', function(){
				<?php 
					// Add locations
					for ($i = 0; $i < sizeof($locations); $i++) {
						$coord = $locations[$i][1];
						$date = $locations[$i][0];
						$marker = <<<EOT
					var marker$i;
					var coordInfoWindow$i;
					var myLatLng$i = new google.maps.LatLng($coord);
					makeLocations(myLatLng$i, $i, marker$i, '$date', coordInfoWindow$i);
					\n
EOT;
						echo $marker;
					}
			    ?>
			    setTimeout(function(){
					map.panTo(kmTemporaer);
				},(timeout + speed));
	  			var kmMarker = new google.maps.Marker({
	     			 	position: kmTemporaer,
	      				map: map,
	      				title:".local#non.access",
	      				zIndex: 1000
	  			});
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	
	
</head>
<body>
<div class="container">

	<div class="row">			

		<div class="large-10 small-10 large-offset-1 columns border-left-open margin-bottom-2-em">
			<h1 class="text-center">Sorry world, no access :-(</h1>
			<h2 class="text-center"><span class="background">Access to #LocalNonOffLine is only possible at Ebertplatz Cologne.<span></h2>
		</div>
		<div class="large-10 small-10 large-offset-1 columns margin-bottom-2-em">
		    <p>But you are not alone. This piece from Silvio Lorusso named 'A Here Implies a There' shows the people who tried to get access without success.</p>
		    <div id="map-canvas"></div>
		</div>
		<div class="large-10 small-10 large-offset-1 columns margin-bottom-2-em">
			<p>And now stand up, leave your desktop and move your flesh to Ebertplatz Cologne to see the show.</p>
			<p class="text-center"><a href="<?php echo base_url();?>">>> Back to Startpage <<</a></p>
		</div>
		<div class="large-10 small-10 large-offset-1 columns margin-bottom-5-em">
			<p></p>
		</div>
		
	</div>
</div><!-- ende .container -->
</body>
</html>