<?php
session_start();
include('includes/config.php');
if (!isset($_SESSION['uid'])) {
    header('location:logout.php');
} else {

    //Code for updation
    if (isset($_POST['update'])) {
        $pid = intval($_GET['pid']);
        //getting post values
        $vehibrand = $_POST['vehibrand'];
        $vehiname = $_POST['vehiname'];
        $vehioverview =  $_POST['vehioverview'];
        $vehifueltype =  $_POST['vehifueltype'];
        $vehirent =  $_POST['vehirent'];
        $vehicapicity = $_POST['vehiseatingcap'];


        $query = "update tbl_vehicle set `v_brand`='$vehibrand', `v_name`='$vehiname, `v_overview`='$vehioverview', `v_rent`='$vehirent, `v_fueltype`='$vehiname, `v_seatingcapacity`='$vehicapicity";

        $result = mysqli_query($con, $query);
        if ($result) {
            echo '<script>alert("Car Record updated successfully.")</script>';
            echo "<script>window.location.href='manage-phlebotomist.php'</script>";
        } else {
            echo "<script>alert('Something went wrong. Please try again.');</script>";
            echo "<script>window.location.href='mycars.php'</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Cars</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

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
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">About Us</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container my-5">
        <div class="row">
            <div class="col">
                <?php
                $user = $_SESSION['uid'];
                $sql = "SELECT * FROM tbl_vehicle where user_id='$user'";
                $result = mysqli_query($conn, $sql);
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

                                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="w-100 btn btn-lg btn-outline-primary">Edit Details</button>
                                    </div>
                                </div>
                            </div>
                        <?php
                    } ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- end container -->
    <!-- Model For Edit Details -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Car Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="name" class="control-label">Vehicle Brand</label><br>
                            <input type="text" class="form-control" name="vehibrand" id="name" placeholder="Suzuki, Honda, Volkswagen, etc... ">
                        </div> <!-- form-group // -->

                        <div class="form-group">
                            <label for="name" class="control-label">Vehicle Name</label>
                            <input type="text" class="form-control" name="vehiname" id="name" placeholder="Baleno, WagonR, Scorpio, etc..">
                        </div> <!-- form-group // -->
                        <div class="form-group">
                            <label for="name" class="control-label">Vehicle overview</label>
                            <textarea type="text" placeholder="About Your Vehicle" class="form-control" name="vehioverview" id="name"> </textarea>
                        </div> <!-- form-group // -->
                        <div class="form-group">
                            <label for="about" class="control-label">Vehicle Rent</label>
                            <input type="number" class="form-control" name="vehirent" placeholder="Enter price per day"></textarea>
                        </div> <!-- form-group // -->
                        <div class="form-group">
                            <label class="control-label">Vehicle Fueltype</label>
                            <input type="text" class="form-control" name="vehifueltype" id="qty" placeholder="CNG, Petrol, Diesal Etc...">
                        </div> <!-- form-group // -->
                        <div class="form-group">
                            <label class="control-label">Seating Capacity</label>
                            <input type="number" class="form-control" name="vehiseatingcap" id="date_finish" placeholder="Number of seats in car">
                        </div>

                        <!-- form-group // -->

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Image 1</label>
                            <input name="vehiimg1" type="file" class="form-control" id="inputGroupFile01">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Image 2</label>
                            <input name="vehiimg2" type="file" class="form-control" id="inputGroupFile01">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Image 3</label>
                            <input name="vehiimg3" type="file" class="form-control" id="inputGroupFile01">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Image 4</label>
                            <input name="vehiimg4" type="file" class="form-control" id="inputGroupFile01">
                        </div>

                        <!-- <div class="form-group">
                            <label class="control-label small" for="file_img">Image 2 (jpg/png)</label> <input type="file" name="vehiimg2">
                        </div>
                        <label class="control-label small" for="file_img">Image 3 (jpg/png):</label> <input type="file" name="vehiimg3">

                        <div class="form-group">
                            <label class="control-label small" for="file_img">Image 4 (jpg/png)</label> <input type="file" name="vehiimg4">
                        </div> -->


                </div> <!-- form-group // -->
            </div>
        </div> <!-- form-group // -->
        <hr>
        <div class="form-group">
            <div class="form-group">
                <button type="submit" name="submitreq" class="btn btn-primary">Submit Car Details</button>
            </div>
        </div> <!-- form-group // -->
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
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