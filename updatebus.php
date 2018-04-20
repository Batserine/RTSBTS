<?php
include 'config1.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "GET") 
{
   //$School_Employee_ID = mysqli_real_escape_string($db,$_GET['id']); 
  $id = mysqli_real_escape_string($db,$_GET['namea']); 
  $Bus_number = mysqli_real_escape_string($db,$_GET['namea']); 
  $number_of_trip = mysqli_real_escape_string($db,$_GET['age']); 
 
  $Engine_number = mysqli_real_escape_string($db,$_GET['id']); 
    $assigned_area = mysqli_real_escape_string($db,$_GET['name']); 
     
      $Manufacturing_year = mysqli_real_escape_string($db,$_GET['age1']); 


 
 $query = "UPDATE bus_details SET  bus_number = '$Bus_number',Engine_Number='$Engine_number',manufacturing_year= '$Manufacturing_year',Area_of_assigning= '$assigned_area',Number_of_trips= '$number_of_trip' WHERE bus_number = '$id'";
 //'". mysql_real_escape_string($sender_id)  ."'
 $response = @mysqli_query($db, $query);
 if($response){
   echo "Updated Sucessfully.";
   $query1 = "SELECT * FROM bus_details WHERE bus_number = '$id'";

   $response1 = @mysqli_query($db, $query1);
   if ($response1){
     while($row = mysqli_fetch_array($response1)){
     echo "Bus registered<br> You are being Redirected. Please wait.";
     header( "refresh:3; url=viewandUpdate.php" );
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