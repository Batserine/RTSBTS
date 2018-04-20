<?php
include 'config.php';
//session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") 
{
   $School_Employee_ID = mysqli_real_escape_string($db,$_POST['id']); 
  $student_name = mysqli_real_escape_string($db,$_POST['namea']); 
  $parent_name = mysqli_real_escape_string($db,$_POST['name']);  
  $contact = mysqli_real_escape_string($db,$_POST['phone_number']); 
  $address = mysqli_real_escape_string($db,$_POST['namec']); 
  $username = mysqli_real_escape_string($db,$_POST['named']);
  $password = mysqli_real_escape_string($db,$_POST['pwd']); 
  $driver_id = mysqli_real_escape_string($db,$_POST['nameb']);    

 /* $username = mysqli_real_escape_string($db,$_POST['id']);
  $password = mysqli_real_escape_string($db,$_POST['pwd']); 
  $email = mysqli_real_escape_string($db,$_POST['email']); 
  */

    //See Whether is user is already exists..

   $validate = "SELECT * FROM `school administration` where School_Employee_ID = '$School_Employee_ID'";
  $result_sel = @mysqli_query($db, $validate);
  if(!$result_sel)
  {
   echo "User Already Exists.Please <a href = 'login.html'> LOGIN </a> !";

   echo mysqli_error($db);
   
 } else {

     //include 'first_time.php';

   $query = "INSERT INTO `student` (`student_name`, `parent_name`, `contact`, `address`,
    `username`, `password`, `driver_id`) VALUES ( '$student_name', '$parent_name', '$contact', '$address', '$username',
     '$password', '$driver_id')";
   $response = @mysqli_query($db, $query);
   if($response){
     echo "Success <br>";
    
     echo "Welcome <br> You are being Redirected. Please wait.";
     header( "refresh:0.5; url=BusHome.php" ); 
   } else { echo mysqli_error($db);}
 }


}
else{
  echo mysqli_error($db);
}


// Close connection to the database
mysqli_close($db);

?>