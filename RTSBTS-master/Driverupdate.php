<?php
include 'config.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "GET") 
{
   //$School_Employee_ID = mysqli_real_escape_string($db,$_GET['id']); 
  $id = mysqli_real_escape_string($db,$_GET['name']); 
   $name = mysqli_real_escape_string($db,$_GET['name']); 
  //$gender = mysqli_real_escape_string($db,$_GET['gender']);
  $assigned_bus = mysqli_real_escape_string($db,$_GET['bus']);  
  $age = mysqli_real_escape_string($db,$_GET['age']);  
  $phone = mysqli_real_escape_string($db,$_GET['phone_number']); 
$username = mysqli_real_escape_string($db,$_GET['uname']); 
  $address = mysqli_real_escape_string($db,$_GET['aname']); 
  
  $assigned_area = mysqli_real_escape_string($db,$_GET['name1']); 
  $picking_time = mysqli_real_escape_string($db,$_GET['time1']); 
  $dropping_time = mysqli_real_escape_string($db,$_GET['time2']); 
 
  $password = mysqli_real_escape_string($db,$_GET['pwd']);       



 
 $query = "UPDATE driver SET name = '$name' ,  assigned_bus='$assigned_bus' , age ='$age' , phone = '$phone' ,  assigned_area='$assigned_area' ,picking_time ='$picking_time' ,dropping_time='$dropping_time' ,address='$address' ,username='$username' ,password='$password' WHERE name='$id'";



 
 //'". mysql_real_escape_string($sender_id)  ."'
 $response = @mysqli_query($db, $query);
 if($response){
   echo "Updated Sucessfully.";
   $query1 = "SELECT * FROM driver WHERE name = '$id'";

   $response1 = @mysqli_query($db, $query1);
   if ($response1){
     while($row = mysqli_fetch_array($response1)){
     echo "Bus registered<br> You are being Redirected. Please wait.";
     header( "refresh:3; url=BusHome.php" );
    }
   
  }
  else {
    echo "Failed.";
    echo mysqli_error($db);
  }
}
else{
  echo " at line 42";
  echo mysqli_error($db);
}
}
else{
  echo "at line 47";
  echo mysqli_error($db);
}

// Close connection to the database
mysqli_close($db);

?>