<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>REAL TIME SCHOOL BUS TRACKING SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 2px;      
      font-size: 20px;
      color: #111;
  }

  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      /*-webkit-filter: grayscale(90%);
      filter: grayscale(90%);*/ /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
   .modal-header-1, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 10px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      /*-webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  */}  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  .modal-body .form-horizontal  .col-sm-4,
.modal-body .form-horizontal .col-sm-16 {
    width: 100%
}

.modal-body .form-horizontal .control-label {
    text-align: left;
}
.modal-body .form-horizontal .col-sm-offset-6 {
    margin-left: 15px;
}

 .modal-body .form-horizontal6  .col-sm-4,
.modal-body .form-horizontal6 .col-sm-16 {
    width: 100%
}

.modal-body .form-horizontal2 .control-label {
    text-align: left;
}
.modal-body .form-horizontal2 .col-sm-offset-6 {
    margin-left: 15px;
}
 /*.modal-body-1 .form-horizontal  .col-sm-4,
.modal-body-1 .form-horizontal .col-sm-12 {
    width: 100%
}

.modal-body-1 .form-horizontal .control-label {
    text-align: left;
}
.modal-body-1 .form-horizontal .col-sm-offset-6 {
    margin-left: 15px;
}
.modal-body-1 .form-horizontal6  .col-sm-4,
.modal-body-1 .form-horizontal6 .col-sm-12 {
    width: 100%
}

.modal-body-1 .form-horizontal2 .control-label {
    text-align: left;
}
.modal-body-1 .form-horizontal2 .col-sm-offset-6 {
    margin-left: 15px;
}*/

  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 3px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

  </style>
<script type="text/javascript">
  function removebus() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("remove").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "removebus.php", true);
  xhttp.send();
}
</script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">RTSBTS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#info">INFO
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#bus">BUS</a></li>
            <li><a href="#driver">DRIVER</a></li>
           
          </ul>
        </li>
        <li><a href="#googleMap">TRACK</a></li>
        
        <li><a href="login.html">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="rtsbts1.jpg" alt="Bus" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Bus</h3>
        </div>      
      </div>

      <div class="item">
        <img src="rtsbts.jpg" alt="Tracking" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Tracking</h3>
        </div>      
      </div>
    
      <div class="item">
        <img src="rtsbts1.jpg" alt="System" width="1200" height="700">
        <div class="carousel-caption">
          <h3>System</h3>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<?php
include 'config1.php';

$sqlselect = "SELECT * FROM bus_details";

$result = mysqli_query($db, $sqlselect);
?>

<!-- Container (The INFO Section) -->
<div id="bus" class="container text-center">
  
  <h2>BUS INFO</h2>
 <br>
 
<br>
<table>
  <tr>
<div class="row">
  <div class="col-sm-8">
  <!-- Button trigger modal for adding bus -->
<td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal">
    Add Bus
</button></td>
</div>

 
<div class="col-md-2">
<!-- Button trigger modal for remove bus -->
<td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal1">
    View and Update Bus
</button></td>
</div>
<br>
<br>

<div class="col-md-8">
<!-- Button trigger modal for remove bus -->
<td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal2">
     Fuel Details
</button></td>
</div>
<div class="col-md-2">
<!-- Button trigger modal for remove bus -->
<td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal3">
   Maintenance Details
</button></td>
</div>
</tr>
</table>
<br>
<br>
<div class="col-sm-6 ">
            <?php
             include("config.php");
            $query = "SELECT * FROM driver";
            $result1 = mysqli_query($success, $query) or die("Access failed");
          ?>
         
         <h3>Select a Bus number to view current location</h3>
         
 <select class='form-control' name='field' onChange="window.location.href=this.value" id='select'>

            <?php
              include("config.php");
             while($row1 = mysqli_fetch_array($result1)):;?>
            <option value="map1.php?id=<?php echo $row1['username'];?>"><?php echo $row1['assigned_bus'];?></option>
            <?php endwhile;?>

        </select>

</div>

<div class="col-sm-6">
		<h3>Select a Bus number to view its previous data</h3>
         
 <select class='form-control' name='field' onChange="window.location.href=this.value" id='select'>

            <?php
			include("config.php");
            $query1 = "SELECT * FROM driver";
            $result2 = mysqli_query($success, $query1) or die("Access failed");
             while($row2 = mysqli_fetch_array($result2)):;?>
            <option value="previoustrack.php?id=<?php echo $row2['username'];?>"><?php echo $row2['assigned_bus'];?></option>
            <?php endwhile;?>

        </select>
</div>
<!-- Modal for adding new bus-->
<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h2 class="modal-title" id="myModalLabel">
                    New Bus
                </h2>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              
                <div class="form-container">
                  <div class="row">
                    <form class="form-signin" action="bus.php" method="post">

                       
                      <div class="form-group">

                          <label  class="col-sm-4 control-label"
                              for="namea">Bus Number:</label>
                          <div class="col-sm-6">
                           <input type="text" class="form-control" 
                            id="namea" name="namea" placeholder="Enter Bus Number">
                          </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                          <label  class="col-sm-4 control-label"
                              for="schoolemployeeID">Engine Number:</label>
                          <div class="col-sm-6">
                           <input type="text" class="form-control" 
                            id="schoolemployeeID" name="schoolemployeeID" placeholder="Enter Engine Number"/>
                          </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                          <label  class="col-sm-4 control-label"
                              for="age">Number Of Trips:</label>
                          <div class="col-sm-6">
                           <input type="number" class="form-control" 
                            id="age" name="age" placeholder="Enter Number of trips"/>
                          </div>
                        </div>
                        <br>
                        <br>
                        
                        <div class="form-group">
                          <label  class="col-sm-4 control-label"
                              for="age1">Manufacturing Year:</label>
                          <div class="col-sm-6">
                           <input type="number" name="age1" class="form-control" 
                            id="age1" placeholder="Enter Manufacturing Year"/>
                          </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                          <label  class="col-sm-4 control-label"
                              for="name">Assigned Areas:</label>
                          <div class="col-sm-6">
                           <input type="text" class="form-control" 
                            id="name" name="name" placeholder="Enter Assigned Areas"/>
                          </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                          <button  align="left" type="submit" class="btn btn-default" >Submit</button>
                        </div>
                      </div>
                        </form>
              </div>
                      
                   
         
            </div>
</div>
</div>
</div>
</div>
<br>

 
<!-- Modal for adding new bus-->
<div class="modal fade" id="myModalHorizontal1" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h2 class="modal-title" id="myModalLabel">
                    New Bus
                </h2>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
<?php
//include 'config1.php';
//session_start();
//$Bus_number = mysqli_real_escape_string($db,$_GET['namea']);
$sqlselect = "SELECT * FROM bus_details";

$result1 = mysqli_query($db, $sqlselect);
?>
<table>
  <tr>
    <th>Bus Number </th>
    <th>Engine number </th>
    <th>Manufacturing year </th>
    <th>Area assigned </th>
    <th>Number of Trips </th>
   </tr>
  
<?php
while($row = mysqli_fetch_assoc($result1)){
?>
<tr>
  <td><?php echo $row['bus_number']; ?></td>
  <td><?php echo $row['Engine_Number']; ?></td>
  <td><?php echo $row['Manufacturing_year']; ?></td>
  <td><?php echo $row['Area_of_assigning']; ?></td>
  <td><?php echo $row['Number_of_trips']; ?></td>
  
<?php } ?>


</table>
<!--<div class="container">
      </div>-->  
        <form class="form-signin" action="editbusnew.php" method="post">
           
            <div class="form-group">

            <label for="namea">Bus Number :</label>
            <!--<label for="name" class="sr-only">Name : </label> -->
            <input type="text" id="namea" name="namea" 
            class="form-control" placeholder="Enter Bus Number you want to update" required autofocus>
            </div>
             <?php

 //$_SESSION['bus_number'] = $Bus_number;
           ?>
            <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">UPDATE</button>
          </form>
        
               
</div>
</div>
</div>
</div>
<br>



<div class="modal fade" id="myModalHorizontal2" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h2 class="modal-title" id="myModalLabel">
                    Fuel Details
                </h2>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
<?php
//include 'config1.php';
//session_start();
//$Bus_number = mysqli_real_escape_string($db,$_GET['namea']);
$sqlselect = "SELECT * FROM fuel_details";

$result = mysqli_query($db,$sqlselect);
?>
<table>
  <tr>
     <th>Fuel Quantity </th>
    <th>Price </th>
    <th>Total </th>
    <th>Bill Number</th>
    <th>Date </th>
    <th>Bus number </th>
   </tr>
  
  

<?php
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?php echo $row['fuel_quantity']; ?></td>
  <td><?php echo $row['price']; ?></td>
  <td><?php echo $row['total']; ?></td>
  <td><?php echo $row['bill_number']; ?></td>
  <td><?php echo $row['Date']; ?></td>
  <td><?php echo $row['bus_number']; ?></td>
  
  
<?php } ?>


</table>
<!--<div class="container">
      </div>-->  
        
        
               
</div>
</div>
</div>
</div>
<br>


<div class="modal fade" id="myModalHorizontal3" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h2 class="modal-title" id="myModalLabel">
                    Maintenance details
                </h2>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
<?php
//include 'config1.php';
//session_start();
//$Bus_number = mysqli_real_escape_string($db,$_GET['namea']);
$sqlselect = "SELECT * FROM maintenance_details ";

$result = mysqli_query($db,$sqlselect);
?>
<table>
  <tr>
     <th>ISSUE </th>
    <th>Expenses</th>
    <th>Date</th>
    <th>Bus number </th>
   
   </tr>
  
  

<?php
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
   <td><?php echo $row['issue']; ?></td>
  <td><?php echo $row['expenses']; ?></td>
  
  
  <td><?php echo $row['Date']; ?></td>
  <td><?php echo $row['bus_number']; ?></td>
  </tr>
  
<?php } ?>


</table>
<!--<div class="container">
      </div>--> 
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<br>


<div id="driver"  align="text-center">
  
  <h2>PARENT AND DRIVER INFO</h2>
 <br>
<table>
  <tr>
<div class="row">
  <div class="col-sm-8">
  <!-- Button trigger modal for adding bus -->
<td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal6">
    Add Driver
</button></td>
</div>

 
<div class="col-md-2">
<!-- Button trigger modal for remove bus -->
<td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal7">
    View and Update Driver
</button></td>
</div>
<br>
<br>
 <div class="col-sm-8">
  <!-- Button trigger modal for adding bus -->
<td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal8">
    Add Parent
</button></td>
</div>
<div class="col-md-2">
<!-- Button trigger modal for remove bus -->
<td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal9">
    View and Update Parent
</button></td>
</div>
</tr>
</table>
  

<!-- Modal for adding new bus-->
<div class="modal fade" id="myModalHorizontal6" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h2 class="modal-title" id="myModalLabel">
                    New Driver
                </h2>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              
                 <h3 class="form-signin-heading" , align="center">Please Enter the following details.</h3>
        <form class="form-signin" action="driver.php" method="post">
                
                <div class="form-container">
                  <div class="row">
                    <div class="column left" >

                       <div class="form-group">
                          <label  class="col-sm-4 control-label"
                              for="name">Name</label>
                          <div class="col-sm-6">
                           <input type="text" class="form-control" 
                            id="name" name="name" placeholder="Enter Driver name"/>
                          </div>
                       </div>
                       <br>
                       <br>
                    <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="bus" >Bus No.</label>
                  <div class="col-sm-6">
                        <input type="text" class="form-control"
                             id="bus" name="bus" placeholder="Enter Bus Number"/>
                </div>
                </div>
                <br>
                <br>
                <div class="form-group">
            <label class="col-sm-4 control-label" for="age">Age :</label>
            <div class="col-sm-6">
                        <input class="form-control" id="age" type="number" name="age" value="age"
                               placeholder="Enter Age" required>
            </div>
          </div>
          <br>
          <br>
          
                   <fieldset class="form-group">
                        <label class="col-sm-4 control-label"
                          for="gender" >Gender</label>
                        <div class="form-check">
                          <div class="col-sm-2">
                            <label class="form-check-label" >
                                <input type="radio" class="form-check-input" name="gender" id="male" value="male" checked>
                                Male
                            </label>
                        </div>

                        <div class="form-check">
                           <div class="col-sm-4">
                            <label class="form-check-label" class="col-sm-2 control-label">
                                <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                                Female
                            </label>
                        </div>
                        </div>
                      </div>
                    </fieldset>   
                    </div>   
                 
                  
                 <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="phone_number" >Phone no.</label>
                  <div class="col-sm-6">
                        <input type=" " class="form-control"
                            id="phone_number" name="phone number" placeholder="Enter phone Number"/>
                </div>
                </div>
                <br>
                <br>
              </div>
            </div>  
               <div class="row">
                 <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="uname">Username</label>
                  <div class="col-sm-6">
                        <input type="text" id="uname" name="uname" class="form-control"
                             placeholder="Enter Username"/>
                </div>
                </div>
                
                <br>
              </div>
                <div class="column right" >
                  <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="name1">Assigned Areas</label>
                  <div class="col-sm-6">
                        <input type="text" id="name1" name="name1" class="form-control"
                             placeholder="Enter Assigned Address"/>
                </div>
                </div>
                <br>
                <br>
               


                 <div class="form-group">


                    <label class="col-sm-4 control-label"
                          for="aname" >Address </label>
                  <div class="col-sm-6">
                        <input type="text" class="form-control"
                            id="aname" name="aname" placeholder="Enter Address"/>
                </div>
                </div>
                <br>
                <br>
                 <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="time1" >Picking time</label>
                  <div class="col-sm-6">
                        <input type="time" class="form-control"
                            id="time1" name="time1" placeholder="Enter Picking time"/>
                </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="time2" >Dropping time</label>
                  <div class="col-sm-6">
                        <input type="time" class="form-control"
                            id="time2" name="time2" placeholder="Enter Dropping time"/>
                </div>
                </div>
                <br>
                <br>

                <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="pwd" >Password</label>
                  <div class="col-sm-6">
                        <input type="password" class="form-control"
                            id="pwd" name="pwd" placeholder="password"/>

                </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="pwd" > Retype-Password</label>
                  <div class="col-sm-6">
                        <input type="password" class="form-control"
                            id="pwd" name="pwd" placeholder=" Retype-password"/>
                            
                </div>
                </div>
                <br>
                <br>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-1 col-sm-10">
                      <button type="submit" class="btn btn-default">Add Dirver</button>

                    </div>
                  </div>
                  </div>
                </form>  
        </div>
      </div>
                      
</div>
</div>
</div>
</div>
<br>


<div class="modal fade" id="myModalHorizontal7" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h2 class="modal-title" id="myModalLabel">
                    View Driver
                </h2>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
<?php
//include 'config1.php';
//session_start();
//$Bus_number = mysqli_real_escape_string($db,$_GET['namea']);
$sqlselect = "SELECT * FROM driver ";

$result = mysqli_query($db,$sqlselect);
?>
<table>
  <tr>
      <th>Driver Name </th>
    <th>Gender </th>
    <th>Age </th>
    <th>Phone number </th>
    <th>Address </th>
    <th>Assigned area </th>
    <th>Picking time </th>
    <th>Droping Time </th>
    <th>Assigned Bus </th>
   
   </tr>
  
  

<?php
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
   <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['gender']; ?></td>
  <td><?php echo $row['age']; ?></td>
  <td><?php echo $row['phone']; ?></td>
  <td><?php echo $row['address']; ?></td>
  <td><?php echo $row['assigned_area']; ?></td>
  <td><?php echo $row['picking_time']; ?></td>
  <td><?php echo $row['dropping_time']; ?></td>
   <td><?php echo $row['assigned_bus']; ?></td>
  
<?php } ?>
</tr>
</table>
<div class="row">

<form class="form-signin" action="editDriver.php" method="post">
           
            <div class="form-group">

            <label class="col-sm-4 control-label" for="name">Driver name:</label>
            <!--<label for="name" class="sr-only">Name : </label> -->
             <div class="col-sm-6">
            <input type="text" id="name" name="name" class="form-control" placeholder="driver name to update" required autofocus>
            <br>
             <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">UPDATE</button></div></div>
          </form>
<!--<div class="container">
      </div>-->  
        
  </div>  
  </div>
</div>
</div>
</div>
<br>


<div class="modal fade" id="myModalHorizontal8" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h2 class="modal-title" id="myModalLabel">
                    New STUDENT
                </h2>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              
                 <h3 class="form-signin-heading" , align="center">Please Enter the following details.</h3>
        <form class="form-signin" action="adminparent.php" method="post">
                
                <div class="form-container">
                  <div class="row">
                    <div class="column left" >

                       <div class="form-group">
                          <label  class="col-sm-4 control-label"
                              for="name">Name</label>
                          <div class="col-sm-6">
                           <input type="text" class="form-control" 
                            id="name" name="name" placeholder="Enter Parent name"/>
                          </div>
                       </div>
                       <br>
                       <br>
                    <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="namea" >Student name</label>
                  <div class="col-sm-6">
                        <input type="text" class="form-control"
                             id="namea" name="namea" placeholder="Enter student name"/>
                </div>
                </div>
                <br>
               <br>
                 <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="phone_number" >Phone no.</label>
                  <div class="col-sm-6">
                        <input type=" " class="form-control"
                            id="phone_number" name="phone number" placeholder="Enter phone number"/>
                </div>
                </div>
                <br>
                 <br>
                 <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="named">Username</label>
                  <div class="col-sm-6">
                        <input type="text" id="named" name="named" class="form-control"
                             placeholder="Enter Username"/>
                </div>
                </div>
                
                 <br>
              </div>
                <div class="column right" >
                  
                


                 <div class="form-group">


                    <label class="col-sm-4 control-label"
                          for="namec" >Address </label>
                  <div class="col-sm-6">
                        <input type="text" class="form-control"
                            id="namec" name="namec" placeholder="Enter Address"/>
                </div>
                </div>
                <br>
                 <br>
                <div class="form-group">


                    <label class="col-sm-4 control-label"
                          for="nameb" >Student ID </label>
                  <div class="col-sm-6">
                        <input type="text" class="form-control"
                            id="nameb" name="nameb" placeholder="Enter Address"/>
                </div>
                </div>
                <br>
                 

                

                <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="pwd" >Password</label>
                  <div class="col-sm-6">
                        <input type="password" class="form-control"
                            id="pwd" name="pwd" placeholder="password"/>

                </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="pwd" > Retype-Password</label>
                  <div class="col-sm-6">
                        <input type="password" class="form-control"
                            id="pwd" name="pwd" placeholder=" Retype-password"/>
                            
                </div>
                </div>
                <br>
                <br>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-5 control-label"
                          for="" >  </label>
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-default">Register</button>

                    </div>
                  </div>
                  </div>
                </form>  
        </div>
                      
                   
         
</div>
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<br>

<div class="modal fade" id="myModalHorizontal9" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h2 class="modal-title" id="myModalLabel">
                    View Parent
                </h2>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
<?php
//include 'config1.php';
//session_start();
//$Bus_number = mysqli_real_escape_string($db,$_GET['namea']);
$sqlselect = "SELECT * FROM student ";

$result = mysqli_query($db,$sqlselect);
?>
<table>
  <tr>
    <th>Parent Name </th>
    <th>Student Name </th>
    <th>Contact</th>
    <th>Address </th>
    <th>Student ID </th>
      
   
   </tr>
  
  

<?php
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
   <td><?php echo $row['parent_name']; ?></td>
  <td><?php echo $row['student_name']; ?></td>
  <td><?php echo $row['contact']; ?></td>
  <td><?php echo $row['address']; ?></td>
  <td><?php echo $row['driver_id']; ?></td>
<?php } ?>


</table>
<br>
<form class="form-signin" action="adminparentedit.php" method="post">
           
            <div class="form-group">

                          <label  class="col-sm-4 control-label"
                              for="name">Name</label>
                          <div class="col-sm-6">
                           <input type="text" class="form-control" 
                            id="name" name="name" placeholder="Enter Parent name"/>
                          </div>
             <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">UPDATE</button></div>
          </form>
<!--<div class="container">
      </div>-->  
</div>
</div>
</div>
</div>
<br>
</div>
 <br>  
</body>
</html>