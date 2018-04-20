<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    
	
    <div id="map"></div>

    <div id="show">
	<?php		 
		include("config.php");
if(isset($_GET['id']))
{
	$xy = $_GET['id'];
}
else
	$xy= "st";
		echo "Driver ID:";echo $xy;
		$query = mysqli_query($success, "select * from location_point where driver_id = '$xy' and Date = (
  select max(Date) 
  from location_point 
  where driver_id = '$xy') ");
		$rowc = mysqli_fetch_row($query);
		$x = $rowc[1];
		$y = $rowc[2];
	?> 	
	</div>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbjSxlc2nVXatou-hZcu2AXGN0ceXaEUE&callback=initMap">
    </script>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script>
		function initMap() {
		var xv = "<?php echo $x ?>";
		  var yv = "<?php echo $y ?>";
			  
		  var xva = parseFloat(xv);
		  var yva = parseFloat(yv);	  
		  
				  var uluru = {lat: 0, lng: 0};
		   
			var map = new google.maps.Map(document.getElementById('map'), {
			  zoom: 10,
			  center: uluru
			});
			var marker = new google.maps.Marker({
			  position: uluru,
			  map: map
			});
			

			
		setInterval(function(){
			var reqData = {};
			reqData.id = "<?php echo $xy ?>";
			console.log(reqData);
			jQuery.ajax({
				type:"GET",
				url:"mappingex.php",
				dataType: "json",
				data: reqData,
				success: function(response) {
					console.log(response.x, response.y);
					marker.setPosition( new google.maps.LatLng( {lat:parseFloat(response.x) , lng: parseFloat(response.y)} ) );
					map.panTo( new google.maps.LatLng( {lat:parseFloat(response.x) , lng: parseFloat(response.y)} ));
				},
				error: function(xr, ajaxOptions, error) {
					alert(error);
				}
			});	
		}, 5000);
			
		}
		</script>
	<script>
/*	setTimeout(function(){
   window.location.reload(1);
}, 5000);*/
	</script>
	
  </body>
</html>