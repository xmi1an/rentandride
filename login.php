<?php
session_start();
include('includes/config.php');
if (isset($_POST['submit'])) {
  $uname = $_POST['uname'];
  $pass =  $_POST['password'];

  $query = mysqli_query($conn, "select * FROM tbl_user where u_username='$uname' && u_password  ='$pass' ");
  $rows = mysqli_fetch_array($query);
  if ($rows > 0) {
    $_SESSION['uid'] = $rows['u_id'];
    $_SESSION['uname'] = $rows['u_name'];
    echo ("<script> alert('welcome to Rent and Ride');
            window.location.href = 'index.php';
      </script>");
  } else {
    echo ("
    <script> 
    alert ('Invalid Details! Try Again');
    window.location.href='login.php';
    </script>");
    echo mysqli_error($conn);
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
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span> <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Log In</h1>
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
                <h4 class="">Login</h4>
              </div>
              <form action="" method="POST" name="myForm">
                <div class="form-floating mb-3">
                  <input type="text" name="uname" pattern="[a-zA-Z'-'\s]*" id="uname" class="form-control" id="floatingPassword">
                  <label for="floatingPassword">Username</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Eight or more characters" id="password" class="form-control" id="floatingPassword">
                  <label for="floatingPassword">Password</label>
                </div>

                <div class="d-grid">
                  <button name="submit" id="submit" onclick="validateForm()" class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Login</button>
                  <div class="form-floating mb-3">
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <script>
    // validate form
  </script>
  <?php include('includes/footer.php'); ?>

  <!-- loader -->
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
  <script src="js/main.js"></script>

</body>

</html>