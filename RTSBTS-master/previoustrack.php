<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Traffic layer</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map">
		<?php		 
		include("config.php");
if(isset($_GET['id']))
{
	$xy = $_GET['id'];
 }
else
	echo "No Bus Selected!!";
	//$xy= "st";
		echo "Driver ID:";echo $xy;
		$query = mysqli_query($success, "select * from location_point where driver_id = '$xy'");
		
	/*	$rowc = mysqli_fetch_row($query);
		$x = $rowc[1];
		$y = $rowc[2];*/
	?> 	
	</div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: {lat: 14.0761, lng: 100.6145}
		  
        });

        var trafficLayer = new google.maps.TrafficLayer();
        trafficLayer.setMap(map);
      /*
	  	var marker = new google.maps.Marker({
			  position: {lat: 17.79, lng: 73.56},
			  map: map
			});*/
			  var flightPlanCoordinates = [
        
<?php
if($rowc = mysqli_fetch_row($query))
{
	while($rowc = mysqli_fetch_row($query))
	{
		echo '{lat: parseFloat('. $rowc[1]. '), lng: parseFloat('. $rowc[2] .')},'  ; 
	}
}
else
	echo "SORRY, NO DATA AVAILABLE!!!";
	?>
	
		
 ];
        var flightPath = new google.maps.Polyline({
          path: flightPlanCoordinates,
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 4
        });

        flightPath.setMap(map);
	  }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbjSxlc2nVXatou-hZcu2AXGN0ceXaEUE&callback=initMap">
    </script>
  </body>
</html>