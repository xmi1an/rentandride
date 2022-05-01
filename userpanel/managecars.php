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
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">

  <?php include('../includes/sidebar.php'); ?>

  <div class="wrapper">
    <!-- Left side column. contains the logo and sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1 align="center">
          <i class="fa fa-cab"></i> Manage Cars
          <small></small>
        </h1>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"><i class="fa fa-car"></i> Manage Cars </h3><button type="button" class="btn btn-success btn-sm" style="margin-left: 2%" data-toggle="modal" data-target="#add">
                  <i class="fa fa-plus"></i> Add
                </button>
                <div class="modal fade" id="add">
                  <div class="modal-dialog">
                    <form role="form">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Add Car Gallery</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box box-primary">
                            <div class="box-header with-border">
                              <h3 class="box-title">Fill In : </h3>
                            </div>
                            <div class="box-body">
                              <div class="form-group">
                                <label>Select Car</label>
                                <select class="form-control">
                                  <option>Rusco</option>
                                  <option>option 2</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Select Model</label>
                                <select class="form-control">
                                  <option>Car 123-MVS</option>
                                  <option>option 2</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Select Color</label>
                                <select class="form-control">
                                  <option>Red</option>
                                  <option>option 2</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputFile">Image input</label>
                                <input type="file" id="exampleInputFile">
                              </div>
                              <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
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
                      <th style="width: 10%"><i class="fa fa-image"></i> Image</th>
                      <th style="width: 35%"><i class="fa fa-list-alt"></i> Description</th>
                      <th style="width: 20%"><i class="fa fa-car"></i> Car Name</th>
                      <th style="width: 20%"><i class="fa fa-car"></i> Brand</th>
                      <th style="width: 20%"><i class="fa fa-paint-brush"></i> Fuel type</th>
                      <th style="width: 11.8%"> </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php
                      $userid = $_SESSION['uid'];
                      $query = "select * from tbl_vehicle where user_id = '$userid' ";
                      $result = mysqli_query($conn, $query);
                      while ($row = mysqli_fetch_array($result)) {
                      ?>
                        <td><img src="../<?php echo ($row['v_image1']); ?>" class="img-square" alt="Car Image" style="width: 100%"></td>
                        <td><?php echo ($row['v_overview']); ?></td>
                        <td><?php echo ($row['v_name']); ?></td>
                        <td><?php echo ($row['v_brand']); ?></td>
                        <td><?php echo ($row['v_fueltype']); ?></td>


                        <td align="center"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button> <button type="button" style="background-color: #c3039e;" class="btn btn-sm"><i class="fa fa-eye" style="color: white"></i></button></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr style="background-color: #c5c5c5;">
                      <th>Image</th>
                      <th>Description</th>
                      <th>Car Name</th>
                      <th>Model</th>
                      <th>Color</th>
                      <th> </th>
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
                          <h4 class="modal-title">Update Car Gallery</h4>
                        </div>
                        <div class="modal-body">
                          <div class="box box-warning">
                            <div class="box-header with-border">
                            </div>
                            <div class="box-body">
                              <div class="form-group">
                                <label>Select Car</label>
                                <select class="form-control">
                                  <option>Rusco</option>
                                  <option>option 2</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Select Model</label>
                                <select class="form-control">
                                  <option>Car 123-MVS</option>
                                  <option>option 2</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Select Color</label>
                                <select class="form-control">
                                  <option>Red</option>
                                  <option>option 2</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputFile">Image input</label>
                                <input type="file" id="exampleInputFile">
                              </div>
                              <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
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
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
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