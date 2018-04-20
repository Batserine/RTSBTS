<?php
include 'config.php';
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $School_Employee_ID = mysqli_real_escape_string($db,$_POST['id']); 
  $name = mysqli_real_escape_string($db,$_POST['name']); 
  $Age = mysqli_real_escape_string($db,$_POST['age']); 
   $Gender = mysqli_real_escape_string($db,$_POST['gender']); 
  $Phoneno = mysqli_real_escape_string($db,$_POST['phone number']); 
    $address = mysqli_real_escape_string($db,$_POST['name']); 
     $password = mysqli_real_escape_string($db,$_POST['pwd']); 
      $School_Branch = mysqli_real_escape_string($db,$_POST['name']); 
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
   $query = "INSERT INTO `school administration` (`School_Employee_ID`, `Name`, `Age`, `Gender`,
    `Phone_number`, `address`, `password`, `School_Branch`) VALUES ( '$School_Employee_ID', '$name', '$Age', '$Gender', '$Phoneno',
    '$address', '$password', '$School_Branch')";
   $response = @mysqli_query($db, $query);
   if($response){
     echo "Success <br>";
     $_SESSION['login_user'] = $School_Employee_ID;
     $_SESSION['user_name'] = $name;
 $_SESSION['password'] = $password;
     echo "Welcome <b> ". $_SESSION['user_name'] . "</b><br> You are being Redirected. Please wait.";
     header( "refresh:3; url=login.html" ); 
   } else { echo mysqli_error($db);}
 }


}
else{
  echo mysqli_error($db);
}


// Close connection to the database
mysqli_close($db);

?>