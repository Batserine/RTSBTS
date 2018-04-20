<?php
include 'config.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "GET") 
{
   
 //$School_Employee_ID = mysqli_real_escape_string($db,$_POST['id']); 
   $id = mysqli_real_escape_string($db,$_GET['name']); 
  $student_name = mysqli_real_escape_string($db,$_GET['namea']); 
  $parent_name = mysqli_real_escape_string($db,$_GET['name']);  
  $contact = mysqli_real_escape_string($db,$_GET['phone_number']); 
  $address = mysqli_real_escape_string($db,$_GET['namec']); 
  $username = mysqli_real_escape_string($db,$_GET['named']);
  $password = mysqli_real_escape_string($db,$_GET['pwd']); 
  $student_id = mysqli_real_escape_string($db,$_GET['nameb']);    

   //$School_Employee_ID = mysqli_real_escape_string($db,$_GET['id']); 
  



 
 $query = "UPDATE student SET parent_name = '$parent_name' ,student_name='$student_name' ,contact = '$contact' ,address='$address' ,username='$username' ,password='$password' ,driver_id='$student_id' WHERE parent_name='$id'";



 
 //'". mysql_real_escape_string($sender_id)  ."'
 $response = @mysqli_query($db, $query);
 if($response){
   echo "Updated Sucessfully.";
   $query1 = "SELECT * FROM student WHERE parent_name = '$id'";

   $response1 = @mysqli_query($db, $query1);
   if ($response1){
     while($row = mysqli_fetch_array($response1)){
     echo "Bus registered<br> You are being Redirected. Please wait.";
     header( "refresh:3; BusHome.php" );
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