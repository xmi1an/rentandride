<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="rent&ride";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else
  echo "Connected successfully"; 

if( isset($_POST['submitreq']) ){
  $vehibrand = $_POST['vehibrand'];
  $vehiname = $_POST['vehiname'];
  $vehioverview =  $_POST['vehioverview'];
  $vehifueltype =  $_POST['vehifueltype'];
  $vehirent =  $_POST['vehirent'];
  $vehicapicity = $_POST['vehiseatingcap'];

  $sql = "INSERT INTO `tbl_vehicle` (`v_brand`, `v_name`, `v_overview`, `v_rent`, `v_fueltype`, `v_seatingcapacity`) VALUES ('$vehibrand','$vehiname','$vehioverview','$vehifueltype','$vehirent','$vehicapicity')";
  $res = mysqli_query($conn, $sql);

  if($res){
    echo ("<script> alert('Reqeste Submited Succesfully! It will Be Accepted in 5-7 Working Houres');
          window.location.href = 'member-car-rent.php';
          </script>");
  
}
else{
    echo mysqli_error($conn);
    echo "System Error Try Again";
}
$conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Earn with Rent & Ride</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Rent & Ride</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="pricing.php" class="nav-link">Pricing</a></li>
	          <li class="nav-item"><a href="car.php" class="nav-link">Cars</a></li>
	          <li class="nav-item active"><a href="member-car-rent.php" class="nav-link">Earn by your car</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Earn By Your Car <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Earn Money By Giving <br> <br>Your Vehicle On Rent</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
      <div class="container">
  
  <section class="panel panel-default">
<div class="panel-heading"> 
<h3 class="panel-title">&nbsp; Fill Details To Post A Vehicle Advertisement</h3> 
</div> 
<div class="panel-body">
  
<form action="#" method="POST" class="form-horizontal" role="form">

<div class="form-group">
	<label for="name" class="col-sm-3 control-label">Vehicle Brand</label><br>
  <div class="col-sm-4">
      <input type="text" class="form-control" name="vehibrand" id="name" placeholder="Suzuki,Honda,Volkswagen,Etc... ">
    </div>
</div> <!-- form-group // -->

   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Vehicle Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="vehiname" id="name" placeholder="Baleno,WagonR,Scorpio,Etc..">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Vehicle overview</label>
    <div class="col-sm-4">
      <textarea type="text"  placeholder="About Your Vehicle" class="form-control" name="vehioverview" id="name"> </textarea>
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="about" class="col-sm-3 control-label">Vehicle Rent</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" name="vehirent" placeholder="Enter price per day"></textarea>
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label class="col-sm-3 control-label">Vehicle Fueltype</label>
    <div class="col-sm-4">
   <input type="text" class="form-control" name="vehifueltype" id="qty" placeholder="CNG,Petrol,Diesal Etc...">
    </div>
  </div> <!-- form-group // -->
	<div class="col-sm-4">   
	  <label class="control-label">Seating Capacity</label>
	  <input type="number" class="form-control" name="vehiseatingcap" id="date_finish" placeholder="Number of seats in car">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Upload Vehicle image</label>
    <div class="col-sm-4">
      <label class="control-label small" for="file_img">Image 1 (jpg/png):</label> <input type="file" name="vehiimg1">
    </div>
	<div class="col-sm-4">
      <label class="control-label small" for="file_img">Image 2 (jpg/png)</label>  <input type="file" name="vehiimg2">
    </div>
    <div class="col-sm-4">
      <label class="control-label small" for="file_img">Image 3 (jpg/png):</label> <input type="file" name="vehiimg3">
    </div>
	<div class="col-sm-4">
      <label class="control-label small" for="file_img">Image 4 (jpg/png)</label>  <input type="file" name="vehiimg4">
    </div>
  </div> <!-- form-group // -->
  
  </div> <!-- form-group // -->
  <hr>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" name="submitreq" class="btn btn-primary">Submit Request</button>
    </div>
  </div> <!-- form-group // -->
</form>
  
</div><!-- panel-body // -->
</section><!-- panel// -->

  
</div> <!-- container// -->
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo">Rent And Ride</a></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>