<?php

		include("config.php");
if(isset($_GET['id']))
{
	$xy = $_GET['id'];
}
else
	$xy= "st";
		$query = mysqli_query($success, "select * from location_point where driver_id = '$xy' and Date = (
		  select max(Date) 
		  from location_point 
		  where driver_id = '$xy') ");
		$rowc = mysqli_fetch_row($query);
		$x = $rowc[1];
		$y = $rowc[2];
		$data = array(
			'x' => $x,
			'y' => $y
		);
		echo json_encode($data);
		?> 