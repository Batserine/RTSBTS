<?php
include("session.php");
             if(isset($_SESSION['id'])){
              $username=($_SESSION['username']);
              $userId=($_SESSION['id']);
            }
            else{
              header("Location:parent_login.php");
            }
?>
<!DOCTYPE html>
<html lang= "en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RTSBTS</title>
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
 
  body 
  {

      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
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
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */ 
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
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
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
 
}
  </style>
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">RTSBTS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">HOME</a></li>
        <li><a href="#businfo">BUS info</a></li> 
        <li><a href="#tracking">TRACKING</a></li>
         <li><a href="#Contact">CONTACT</a></li>
        <li><a href="parent_logout.php">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>

<br>
<br>

<style type="text/css">
/* ------ Carousel ----- */

#templatemo-carousel {
    background: url('3.jpg') no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    overflow-x: hidden;
    margin-bottom:0;
    height: 500px;
}

#templatemo-carousel .carousel-caption {
    z-index: 10;
}

#templatemo-carousel .item {
    height: 500px;
}
#templatemo-carousel .carousel-inner > .item > img {
    position: absolute;
    min-width: 100%;
    height: 500px;
    left: 0;
    top: 0;
}

@media (min-width: 768px) {
    #templatemo-carousel .carousel-caption p {
        margin-bottom: 20px;
        line-height: 1.4;
        font-size: 21px;
    }

    #templatemo-carousel .carousel-caption {
        padding-bottom: 140px;
        right: 20%;
        left: 20%;
    }
}

@media (max-width: 768px) {
    #templatemo-carousel .carousel-caption {
        padding-bottom: 120px;
    }
}
#map {
        height: 400px;
        width: 100%;
       }

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

  <div id="templatemo-carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    
      <li data-target="#templatemo-carousel" data-slide-to="0" class="active"></li>
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      	<div class="container">
        <div class="carousel-caption" >
          <h3>Bus Tracking System</h3>
         
        </div>      
    </div>
      </div>
</div>
</div>
      
    
<br>
<br>
<div id= "businfo">
<div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-container">
         
		<h2>Bus and Driver info</h2>
	
	<?php
		include("config.php");
		$query1=mysqli_query($success, "select * from student where username='$username'");
		$row=mysqli_fetch_row($query1);
		$query2=mysqli_query($success, "select * from driver where username='$row[6]'");
		$row1=mysqli_fetch_row($query2);
		$query3=mysqli_query($success, "select * from bus_details where ID='$row1[8]'");
		$row2=mysqli_fetch_row($query3);
	?>	
  <table>	
   <tr>
    <th>BUS ID</th>
    <th>Driver Name</th>
    <th>Driver ID</th>
    <th>BUS No.</th>
    <th>Engine No.</th>
    <th>Driver Contact No.</th>
  </tr>
  <tr>
    <td><?php echo $row1[8] ?></td>
    <td><?php echo $row1[0] ?></td>
    <td><?php echo $row1[8] ?></td>
    <td><?php echo $row2[1] ?></td>
    <td><?php echo $row2[2] ?></td>
    <td><?php echo $row1[2] ?></td>
  </tr>
  </table>
</div>
</div>
</div>
<div id="tracking">
<div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-container">
	<h1 align="center">Tracking</h1>
	<?php
$_SESSION['variable_name_1'] = "$row1[8]"; 
?>
<iframe src ="map1.php?id=<?php echo $row[6];?>" width="1300" height="420" align="center"></iframe>
	</div>
</div>
</div>
<!-- Container (Contact Section) -->
<div class="container-fluid"
<div id="Contact" align="center">
  <h3 class="text-center">Contact</h3>
  <div class="row">
    <div class="col-sm-4">
      <p><span class="glyphicon glyphicon-map-marker"></span>Bangkok, Thailand</p>
          </div>
		  <div class="col-sm-4">
		  <p><span class="glyphicon glyphicon-phone"></span>Phone: +66 7846184684</p>
          </div>
		  <div class="col-sm-4">
	  <p><span class="glyphicon glyphicon-envelope"></span>Email: contact@gmail.com</p>
    </div>
</div>
</div>
</body> 