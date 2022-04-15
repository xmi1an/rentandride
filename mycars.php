<?php
session_start();
include('includes/config.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>About-Rent And Ride</title>
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
    <?php include('includes/header.php') ?>
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>My Cars <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">My Cars</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container my-5">
        <div class="row">
            <?php
            $user = $_SESSION['uid'];

            $sql = "SELECT * FROM tbl_vehicle where user_id='$user'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col">
                        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                            <div class="col-auto">
                                <div class="card mb-4 rounded-3 shadow-sm">
                                    <div class="card-header py-3">
                                        <h4 class="my-0 fw-normal"><strong><?php echo $row['v_brand']; ?>&nbsp;</strong><?php echo $row['v_name'] ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title pricing-card-title"></small></h1>
                                        <img src="<?php echo $row['v_image1']; ?>" class="img-thumbnail" alt="...">
                                        <ul class="list-group">
                                            <div class="d-inline-block text-truncate">
                                                <li class="list-group-item">
                                                    <span class="d-inline-block text-truncate" style="max-width: 150px;"><?php echo $row['v_overview']; ?></span>
                                                </li>
                                            </div>
                                            <li class="list-group-item">Rent : ₹<?php echo $row['v_rent']; ?></li>
                                        </ul>

                                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Edit Details</button>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                        </div>
                    </div>
        </div>
    </div>
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

<?php } ?>