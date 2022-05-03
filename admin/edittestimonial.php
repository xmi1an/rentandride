<?php
session_start();
include('../includes/config.php');

if (isset($_POST['update'])) {
  $tid = intval($_GET['t_id']);
  //getting post values
  $name = $_POST['name'];
  $testimonial = $_POST['testimonial'];

  $query = "update tbl_testimonial set t_name='$name',t_feedback= '$testimonial' where t_id='$tid'";
  $result = mysqli_query($conn, $query);
  if ($result) {
    echo '<script>alert("Testimonial updated successfully.")</script>';
    echo "<script>window.location.href='testimonial.php'</script>";
  } else {
    echo "<script>alert('Something went wrong. Please try again.');</script>";
    echo "<script>window.location.href='edittestimonial.php'</script>";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Car Rental System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../userpanel/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="../userpanel/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../userpanel/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../userpanel/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../userpanel/dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="../userpanel/bower_components/jquery/dist/jquery.min.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">

  <?php include('includes/header.php') ?>
  <?php include('includes/sidebar.php') ?>
  <div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1 align="center">
          <i class="fa fa-cab"></i>Edit Testimonial
          <small></small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"><i class="fa fa-cab"></i> Edit Testimonial </h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <?php
                $t_id = intval($_GET['t_id']);
                $query = mysqli_query($conn, "select * from tbl_testimonial where t_id='$t_id'");
                $cnt = 1;
                while ($row = mysqli_fetch_array($query)) {
                ?>
                  <h1 class="h3 mb-4 text-gray-800"><?php echo $row['t_name']; ?>'s Testimonial</h1>
                  <form action="" method="post">
                    <div class="row">
                      <div class="col-lg-8">

                        <!-- Basic Card Example -->
                        <div class="card shadow mb-4">

                          <div class="card-body">

                            <div class="form-group">
                              <label>Customer Name</label>
                              <input type="text" class="form-control" name="name" value="<?php echo $row['t_name']; ?>">

                            </div>

                            <div class="form-group">
                              <label>Testimonial</label>
                              <input type="text" class="form-control" name="testimonial" value="<?php echo $row['t_feedback']; ?>" required="true">
                            </div>


                            <div class="form-group">
                              <input type="submit" class="btn btn-primary btn-user btn-block" name="update" id="update" value="Update">
                            </div>

                          </div>
                        </div>

                      </div>
                    </div>
                  </form>
                <?php } ?>


              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">Car Rental System</a>.</strong> All rights
      reserved.
    </footer>

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->


  <!-- jQuery 3 -->
  <script src="../userpanel/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../userpanel/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- DataTables -->
  <script src="../userpanel/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../userpanel/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="../userpanel/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="../userpanel/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../userpanel/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../userpanel/dist/js/demo.js"></script>
  <!-- page script -->

</body>

</html>