	<?php 
	@mysqli_connect("localhost","root", "", "rtsbts") or die("connection_problem");

$conn=mysqli_connect("localhost","root", "", "rtsbts") or die("you Lose");

mysqli_select_db($conn, "rtsbts") or die("connection_problem");
/*if(!$conn)
	echo"success";
else
echo"lost";*/
$query = mysqli_query($conn, "select * from location_point where id ='30' ");
$row = mysqli_fetch_row($query);
		$x = $row[1];
		$y = $row[2];
		?> 	
<script type="text/javascript">
  setTimeout(function () { location.reload(true); }, 5000);
</script>