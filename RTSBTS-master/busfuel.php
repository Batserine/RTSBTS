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
  .modal-header, .modal-body {
      padding: 40px 50px;
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
  .modal-body .form-horizontal  .col-sm-2,
.modal-body .form-horizontal .col-sm-10 {
    width: 100%
}

.modal-body .form-horizontal .control-label {
    text-align: left;
}
.modal-body .form-horizontal .col-sm-offset-2 {
    margin-left: 15px;
}

 .modal-body .form-horizontal2  .col-sm-2,
.modal-body .form-horizontal2 .col-sm-10 {
    width: 100%
}

.modal-body .form-horizontal2 .control-label {
    text-align: left;
}
.modal-body .form-horizontal2 .col-sm-offset-2 {
    margin-left: 15px;
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
            <li><a href="DriverHomePage.html">DRIVER</a></li>
            <li><a href="#student">STUDENT</a></li> 
          </ul>
        </li>
        <li><a href="#googleMap">TRACK</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="#logout">LOGOUT</a></li>
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

<div id="bus" class="container text-center">
  
  <h2>BUS INFO</h2>
 <br>
  <div>
    

<div class="row">
  <div class="col-sm-4">
  <!-- Button trigger modal for adding bus -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal">
    Bus Fuel Details
</button>
</div>

 
<div class="col-md-2">
<!-- Button trigger modal for remove bus -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal1">
    update Bus
</button>

</div>
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
                    Fuel Details
                </h2>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">


        
        <?php
include 'config.php';
//session_start();
//$Bus_number = mysqli_real_escape_string($db,$_GET['namea']);
$sqlselect = "SELECT * FROM fuel_details";

$result = mysqli_query($db,$sqlselect);
?>
<table>
  <thead>
    <th>Fuel Quantity </th>
    <th>Price </th>
    <th>Total </th>
    <th>Bill Number</th>
    <th>Date </th>
    <th>Bus number </th>
   
  </thead>
  <tbody>

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
</tbody>

</table>
 </div>
    
</div>
</div>
<br>
<br>
<br>
<br>

 <br>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</body>
</html>
