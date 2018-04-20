<?php
include 'config1.php';
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $name = mysqli_real_escape_string($db,$_POST['name']); 
  $gender = mysqli_real_escape_string($db,$_POST['gender']);
  $assigned_bus = mysqli_real_escape_string($db,$_POST['bus']);  
  $age = mysqli_real_escape_string($db,$_POST['age']);  
  $phone = mysqli_real_escape_string($db,$_POST['phone_number']); 
$username = mysqli_real_escape_string($db,$_POST['uname']); 
  $address = mysqli_real_escape_string($db,$_POST['aname']); 
  
  $assigned_area = mysqli_real_escape_string($db,$_POST['name1']); 
  $picking_time = mysqli_real_escape_string($db,$_POST['time1']); 
  $dropping_time = mysqli_real_escape_string($db,$_POST['time2']); 
 
  $password = mysqli_real_escape_string($db,$_POST['pwd']);       

 /* $username = mysqli_real_escape_string($db,$_POST['id']);
  $password = mysqli_real_escape_string($db,$_POST['pwd']); 
  $email = mysqli_real_escape_string($db,$_POST['email']); 
  */

    //See Whether is user is already exists..

  $validate = "SELECT * FROM `driver` where username = '$username'";
  $result_sel = @mysqli_query($db, $validate);
  if(!$result_sel)
  {
   echo "User Already Exists.Please <a href = 'login.html'> LOGIN </a> !";

   echo mysqli_error($db);
   
 } else {

     //include 'first_time.php';

   $query = "INSERT INTO `driver` (`name`, `gender`, `age`, `phone`, `address`, `assigned_area`, `picking_time`, `dropping_time`,
    `assigned_bus`, `username`, `password`) VALUES ( '$name', '$gender', '$age', $phone ,  '$address',  '$assigned_area', 
     '$picking_time', '$dropping_time', '$assigned_bus','$username', '$password')";
   $response = @mysqli_query($db, $query);
   if($response){
     echo "Success <br>";
     //$_SESSION['login_user'] = $School_Employee_ID;
    
     echo "Welcome <b></b><br> You are being Redirected. Please wait.";
     header( "refresh:3; url=bushome.php" ); 
   } else { echo mysqli_error($db);}
 }


}
else{
  echo mysqli_error($db);
}


// Close connection to the database
mysqli_close($db);

?>