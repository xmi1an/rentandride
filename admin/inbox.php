<?php
session_start();
include('../includes/config.php');

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
          <i class="fa fa-cab"></i>Messages from Users
          <small></small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <!-- <h3 class="box-title"><i class="fa fa-cab"></i> Edit Testimonial </h3> -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <form action="" method="post">
                  <div class="row">
                    <div class="col-lg-8">
                      <!-- Basic Card Example -->
                      <div class="card shadow mb-4">

                        <div class="table-responsive text-nowrap">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Reason</th>
                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Reason</th>
                              </tr>
                            </tfoot>
                            <tbody>
                              <?php
                              $sql = "select * from tbl_contactus";
                              $query = mysqli_query($conn, $sql);
                              while ($row = mysqli_fetch_array($query)) {
                              ?>
                                <tr>
                                  <td><?php echo $row['c_name']; ?></td>
                                  <td><a href="mailto: <?php echo $row['c_email']; ?>"><?php echo $row['c_email']; ?></a></td>
                                  <td><?php echo $row['c_reason']; ?></td>
                                </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>

                      </div>

                    </div>
                  </div>
                </form>



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