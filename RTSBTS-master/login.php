
<?php
include 'config.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
$myusername = mysqli_real_escape_string($db,$_POST['id']);

$mypassword = mysqli_real_escape_string($db,$_POST['pwd']); 



	

		
	//	$School_Employee_ID = $_POST['School_Employee_ID'];
	//	$password = $_POST['Password'];
		
	    
		//$num='0';
		$query = "SELECT * FROM `school administration` where School_Employee_ID='$myusername' AND  password='$mypassword'";
		$response = @mysqli_query($db, $query);
//echo $response->num_rows;
if($response->num_rows > 0)
{
echo mysqli_error($db);
   while($row = mysqli_fetch_array($response))
   

{echo mysqli_error($db);

 $_SESSION['login_user'] = $myusername;
          $_SESSION['user_name'] = $row['Name'];
// echo "Welcome <b> ". $_SESSION['user_name'] . "</b><br>";

          header( "refresh:1; url=BusHome.php" ); 


}

} else {

echo 'Invalid Username or Password. Please <a href = "login.html"> LOGIN </a> again.<br />';

echo mysqli_error($db);

}

}
 else{
echo mysqli_error($db);}
// Close connection to the database
mysqli_close($db);






		/*$result = $conn->query($sel);
		 $result->num_rows;
	
		while($row = $result->fetch_array()){
			$num='1';
	       //echo "working...";
		echo "Welcome <b> ". $_SESSION['user_name'] . "</b><br> You are being Redirected. Please wait.";

         header("location:/sdqi project/BusRegistration.html");
         /* html file for PHD*/

		/*if ($row['role']="FAC") {
			$sel ="Select Supervisor from faculty ";
			if ($row['Supervisor']=1){
    header("location:/isdm/Supervisor/studentmanagement.html");}
    else{header("location:/isdm/Supervisor/facultyinfo.html");}
} elseif ($row['role']="PG") {
  header("location:/isdm/Supervisor/studentmanagement.html"); 
} else {
  
}*/
/*} 
$conn->close();

if($num=='0'){
	echo '<h2>Not a Valid Credentails.</h2>';
}

	}*/

?>
