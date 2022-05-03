<?php
session_start();
include('includes/config.php');

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $uname = $_POST['uname'];
  $email =  $_POST['email'];
  $pass =  $_POST['password'];
  $city =  $_POST['city'];
  $sql = "INSERT INTO tbl_user(u_name,u_username,u_password,u_email,u_city) VALUES ( '$name',  '$uname',  '$pass',  '$email',  '$city')";
  $res = mysqli_query($conn, $sql);

  if ($res) {
    echo ("<script> alert('Signup Successfull! *Now you can Login*');
            window.location.href = 'member-car-rent.php';
      </script>");
  } else {
    echo $mysqli_error($conn);
  }
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login-Rent And Ride</title>
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

  <!-- Nav -->
  <?php include('includes/header.php') ?>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Signup <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Signup</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-5 offset-md-3">
          <div class="card">
            <div class="card-body">
              <div class="card-header mb-4 text-center">
                <h4 class="">Signup</h4>
              </div>
              <form action="" method="POST">
                <div class="form-floating mb-3">
                  <label for="floatingPassword">Full Name</label>
                  <input type="text" name="name" class="form-control" id="floatingPassword">
                </div>

                <div class="form-floating mb-3">
                  <label for="floatingPassword">Username</label>
                  <input type="text" name="uname" class="form-control" id="floatingPassword">
                </div>

                <div class="form-floating mb-3">
                  <label for="floatingPassword">Password</label>
                  <input type="password" name="password" class="form-control" id="floatingPassword">
                </div>

                <div class="form-floating mb-3">
                  <label for="floatingInput">Email address</label>
                  <input type="email" name="email" class="form-control" id="floatingInput">
                </div>

                <div class="form-floating mb-3">
                  <label for="floatingPassword">City</label>
                  <input type="text" name="city" class="form-control" id="floatingPassword">
                </div>

                <div class="d-grid">
                  <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="submit">Signup</button>
                  

                </div>
              </form>

            </div>
          </div>

        </div>
      </div>
      
    </div>
  </section>

  <?php include('includes/footer.php'); ?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


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