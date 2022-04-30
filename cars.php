<?php
session_start();
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cars-Rent And Ride</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- /Bootstrap CSS -->

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
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Choose Your Car From <?php echo $_GET['city'] ?></h1>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section bg-light">
    <div class="container">
   
      <div class="row">
        <?php
           $city = $_GET['city'];
        $sql = "SELECT * FROM tbl_vehicle where v_city='$city'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-4">
              <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end">
                  <img src="<?php echo $row['v_image1']; ?>" class="img-fluid" alt="...">
                </div>
                <div class="text">
                  <h2 class="mb-0 text-info"><a href="car-single.html"><?php echo $row['v_brand']; ?></a></h2>
                  <div class="d-flex mb-3">
                    <span class="text-dark"><?php echo $row['v_name']; ?></span>
                    <p class="price ml-auto"><?php echo $row['v_rent']; ?> <span class="text-dark">/day</span></p>
                  </div>
                  <p class="d-flex mb-0 d-block"><a data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.php?car=<?php echo $row['v_id'];  ?>" class="btn btn-secondary py-2 ml-1">Details</a></p>
                </div>
              </div>
            </div>

        <?php  }
        } else {
          echo "<h2 class='mb-2 mx-2'>Currently No Cars Available in $city.</h2>";
        }
        ?>

      </div>
      <!-- Pagination -->
      <!-- <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div> -->
    </div>
  </section>
  <?php include('includes/footer.php'); ?>

  <!-- Modal -->
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Booking Details</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group">
            <label for="a" class="label">Pick-up location</label>
            <input type="text" class="form-control" placeholder="City, Airport, Station, etc">
          </div>
          <div class="form-group">
            <label for="" class="label">Drop-off location</label>
            <input type="text" class="form-control" placeholder="City, Airport, Station, etc">
          </div>
          <div class="d-flex">
            <div class="form-group mr-2">
              <label for="" class="label">Pick-up date</label>
              <input type="text" class="form-control" id="book_pick_date" placeholder="Date">
            </div>
            <div class="form-group ml-2">
              <label for="" class="label">Drop-off date</label>
              <input type="text" class="form-control" id="book_off_date" placeholder="Date">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="label">Pick-up time</label>
            <input type="text" class="form-control" id="time_pick" placeholder="Time">
          </div>
          <div class="form-group">
            <label for="" class="label">License Number</label>
            <input type="text" class="form-control" id="license_no" placeholder="">
          </div>
          <div class="form-group">
            <labehicle for="" class="label">license image</label>
              <label class="control-label small" for="file_img">Image 1 (jpg/png):</label>
              <input type="file" name="licenseimg">
          </div>
          <div class="form-group">
            <input type="submit" value="Rent A Car Now" class="btn btn-secondary py-3 px-4" />
          </div>
          </form>
        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

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