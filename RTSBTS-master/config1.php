<?php 
#phpinfo();
@mysqli_connect("localhost","root","", "rtsbts" ) or die("Connection problem");

$db = mysqli_connect("localhost","root","", "rtsbts" );

mysqli_select_db($db, "rtsbts") or die("Database not found");
 ?>