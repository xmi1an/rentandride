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

if( isset($_POST['submit']) ){
    $name = $_POST['name'];
    $uname = $_POST['uname'];
    $email =  $_POST['email'];
    $pass =  $_POST['password'];
    $city =  $_POST['city'];
$sql = "INSERT INTO tbl_user(u_name,u_username,u_password,u_email,u_city) VALUES ( '$name',  '$uname',  '$pass',  '$email',  '$city')";
$res = mysqli_query($conn, $sql);

if($res){
      echo ("<script> alert('Signup Successfull! Now you can Login');
            window.location.href = 'login.php';
      </script>");
      
}
else{
    echo $mysqli_error($conn);
}
$conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">    
<style>

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}

.btn-google {
  color: white !important;
  background-color: #ea4335;
}

.btn-facebook {
  color: white !important;
  background-color: #3b5998;
}
</style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Signup</h5>
            <form action="" method="POST">
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingPassword" >
                <label for="floatingPassword">Full Name</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" name="uname" class="form-control" id="floatingPassword">
                <label for="floatingPassword">Username</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput">
                <label for="floatingInput">Email address</label>
              </div>
              
              <div class="form-floating mb-3">
                <input type="text" name="city" class="form-control" id="floatingPassword">
                <label for="floatingPassword">City</label>
              </div>

              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="submit">Signup</button>
              </div>
            </form>

              <hr class="my-4">
              <div class="d-grid mb-2">
                <button onclick="window.location.href='login.php'" class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit"><i class="fab fa-google me-2"></i> Login With Username </button>
               </div>
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