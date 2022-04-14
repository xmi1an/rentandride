<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="rent&ride";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }else 
//   echo "Connected successfully"; 

if( isset($_POST['submit']) ){
    $uname = $_POST['uname'];
    $pass =  $_POST['password'];

    $query = mysqli_query($conn, "select * FROM tbl_user where u_username='$uname' && u_password  ='$pass' ");
    $rows = mysqli_fetch_array($query);
    if ($rows > 0) {
      $_SESSION['uid'] = $rows['u_id'];
      echo ("<script> alert('welcome to Rent and Ride');
            window.location.href = 'index.php';
      </script>");
    }
    else{    
          echo "Invalid Details! Try Again";
          echo mysqli_error($conn);
        }

$conn->close();

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login-Rent & Ride</title>
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
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
            <form action="" method="POST">
              <div class="form-floating mb-3">
                <input type="text" name="uname" class="form-control" id="floatingPassword">
                <label for="floatingPassword">Username</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="d-grid">
                <button name="submit" class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Login</button>
              </form>
              </div>
                <hr class="my-4">
                <div class="d-grid mb-2">
                <button onclick="window.location.href='signup.php'" class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit"><i class="fab fa-google me-2"></i> Signup </button>
               </div>
              <hr class="my-4">
              <div class="d-grid mb-2">
                <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-google me-2"></i> Sign in with Google
                </button>
              </div>

              <div class="d-grid">
                <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-facebook-f me-2"></i> Sign in with Facebook
                </button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>