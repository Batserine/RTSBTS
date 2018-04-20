<?php
include 'config1.php';
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $ID = mysqli_real_escape_string($db,$_POST['namea']); 
  $Bus_number = mysqli_real_escape_string($db,$_POST['namea']); 
  $number_of_trip = mysqli_real_escape_string($db,$_POST['age']); 
 
  $Engine_number = mysqli_real_escape_string($db,$_POST['schoolemployeeID']); 
    $assigned_area = mysqli_real_escape_string($db,$_POST['name']); 
     
      $Manufacturing_year = mysqli_real_escape_string($db,$_POST['age1']); 
 /* $username = mysqli_real_escape_string($db,$_POST['id']);
  $password = mysqli_real_escape_string($db,$_POST['pwd']); 
  $email = mysqli_real_escape_string($db,$_POST['email']); 
  */

    //See Whether is user is already exists..
  $validate = "SELECT * FROM `bus_details` where bus_number = '$ID'";
  $result_sel = @mysqli_query($db, $validate);
  if(!$result_sel)
  {
   echo "Bus Already Exists.Please <a href = 'BusHome.php'> change bus number </a> !";

   echo mysqli_error($db);
   
 } else {
     //include 'first_time.php';
   $query = "INSERT INTO `bus_details` (`bus_number`, `Engine_Number`, `manufacturing_year`, `Area_of_assigning`,
    `Number_of_trips`) VALUES ( '$Bus_number', '$Engine_number', '$Manufacturing_year', '$assigned_area', '$number_of_trip')";
   $response = @mysqli_query($db, $query);
   if($response){
     echo "Success <br>";
   // $_SESSION['bus_number'] = $Bus_number;
     echo "Bus registered<b> </b><br> You are being Redirected. Please wait.";
   
    header( "refresh:3; url=BusHome.php" ); 
   } else { echo mysqli_error($db);}
 }


}
else{
  echo mysqli_error($db);
}


// Close connection to the database
mysqli_close($db);

?>