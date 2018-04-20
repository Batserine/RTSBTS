<?php 
#phpinfo();
@mysqli_connect("localhost","root","", "rtsbts" ) or die("Connection problem");

$success = mysqli_connect("localhost","root","", "rtsbts" );

mysqli_select_db($success, "rtsbts") or die("Database not found");
 ?>