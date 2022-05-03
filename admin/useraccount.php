<?php
session_start();
include('../includes/config.php');

if (isset($_GET['action'])) {
  $pid = intval($_GET['id']);
  $query = mysqli_query($con, "delete from tbl_user where id='$pid'");
  echo '<script>alert("Record deleted")</script>';
  echo "<script>window.location.href='useraccount.php'</script>";
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
</head>
<?php include('includes/header.php') ?>
<?php include('includes/sidebar.php') ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1 align="center">
          <i class="fa fa-user-secret"></i> User Account
          <small></small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"><i class="fa fa-users"></i> User Accounts Data</h3>

                <!-- <button type="button" class="btn btn-success btn-sm" style="margin-left: 2%" data-toggle="modal" data-target="#add">
                  <i class="fa fa-plus"></i> Add
                </button> -->
                <!-- Model for adding new user account -->
                <div class="modal fade" id="add">
                  <div class="modal-dialog">
                    <form role="form">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Add User Account</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box box-primary">
                            <div class="box-header with-border">
                              <h3 class="box-title">Fill In : </h3>
                            </div>
                            <div class="box-body">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" placeholder="Lastname       -      Firstname        -        Middlename">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">City</label>
                                <input type="text" class="form-control" placeholder="Enter Contact">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" placeholder="Enter Address">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control" placeholder="Enter Username">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr style="background-color: #c5c5c5;">
                      <th style="width: 30%"><i class="fa fa-user"></i> Name</th>
                      <th style="width: 15%"><i class="fa fa-user"></i> Username</th>
                      <th style="width: 15%"><i class="fa fa-lock"></i> Password</th>
                      <th style="width: 15%"><i class="fa-solid fa-envelope"></i> Email</th>
                      <th style="width: 15%"><i class="fa fa-map-marker"></i> City</th>
                      <th style="width: 15%"><i class="fa-solid fa-calendar-check me-1"></i> Reg. Date</th>
                      <th style="width: 50%"><i class="fa fa-map-marker"></i> Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = "SELECT * FROM tbl_user";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                      <tr>
                        <td><?php echo $row['u_name']; ?></td>
                        <td><?php echo $row['u_username']; ?></td>
                        <td><?php echo $row['u_password']; ?></td>
                        <td><?php echo $row['u_email']; ?></td>
                        <td><?php echo $row['u_city']; ?></td>
                        <td><?php echo $row['u_RegDate']; ?></td>
                        <td align="center">
                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button>

                          <a class="dropdown-item" onclick="return confirm('Do you really want to delete this record?');" href="useraccount.php?id=<?php echo $row['u_id']; ?>&action=delete"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
                        </td>
                      </tr>
                    <?php } ?>

                  </tbody>
                  <tfoot>
                    <tr style="background-color: #c5c5c5;">
                      <th style="width: 30%"><i class="fa fa-user"></i> Name</th>
                      <th style="width: 15%"><i class="fa fa-user"></i> Username</th>
                      <th style="width: 15%"><i class="fa fa-lock"></i> Password</th>
                      <th style="width: 15%"><i class="fa-solid fa-envelope"></i> Email</th>
                      <th style="width: 15%"><i class="fa fa-map-marker"></i> City</th>
                      <th style="width: 15%"><i class="fa-solid fa-calendar-check me-1"></i> Reg. Date</th>
                      <th style="width: 50%"><i class="fa fa-map-marker"></i> Action</th>
                    </tr>
                  </tfoot>
                </table>
                <div class="modal fade" id="edit">
                  <div class="modal-dialog">
                    <form role="form">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Update User Account</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box box-warning">
                            <div class="box-header with-border">
                            </div>
                            <div class="box-body">
                              <div class="form-group">
                                <label for="exampleInputEmail1"></label>
                                <input type="text" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Contact</label>
                                <input type="text" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
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
  <script>
    $(function() {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
      })
    })
  </script>
</body>

</html>