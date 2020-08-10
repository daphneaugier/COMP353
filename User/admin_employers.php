<?php
//just used for error checking
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('process_employers.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modify Employers</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Welcome!</div>
      </a>



      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="user_dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->

      <!-- Nav Item - Search for Jobs -->
      <li class="nav-item active">
        <a class="nav-link active" href="admin_employers.php">
          <i class="fas fa-fw fa-user-tie"></i>
          <span>Employers</span></a>
      </li>

      <!-- Nav Item - View Applied Jobs -->
      <li class="nav-item">
        <a class="nav-link" href="admin_users.php">
          <i class="fas fa-fw fa-users"></i>
          <span>Users</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Users</h1>
          <body id="page-top">
          <p class="mb-4">Use the table below to modify, delete, or add employers.</a></p>

          <!-- DataTales Example -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <?php if(isset($_SESSION['message'])):?>
              <div class="alert alert-<?php echo $_SESSION['msg_type'];?>">
                <?php 
                  echo $_SESSION['message'];
                  unset($_SESSION['message']);
                ?>          
              </div>
            <?php endif ?>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-light">
                    <tr>
                     <th>Employer ID </th>
                      <th>Name</th>
                      <th>Password</th>
                      <th>Number</th>
                      <th>Email</th>
                      <th>Create Date</th>
                      <th>Update Date</th>
                      <th> Action </th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Employer ID </th>
                      <th>Name</th>
                      <th>Password</th>
                      <th>Number</th>
                      <th>Email</th>
                      <th>Create Date</th>
                      <th>Update Date</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                     while($row = mysqli_fetch_assoc($result)):
                    ?>
                      <tr>
                        <td><?php echo $row['EMPLOYER_ID'] ?></td>
                        <td><?php echo $row['EMPLOYER_NAME'] ?></td>
                        <td><?php echo $row['PASSWORD'] ?></td>
                        <td><?php echo $row['CONTACT_NUMBER'] ?></td>
                        <td><?php echo $row['EMAIL_ID'] ?></td>
                        <td><?php echo $row['CREATE_DATE'] ?></td>
                        <td><?php echo $row['UPDATE_DATE'] ?></td>
                        <td>
                        <div class="row">
                        <a href="admin_employers.php?edit=<?php echo $row['EMPLOYER_ID'];?>" class="btn btn-info">Edit</a>
                        <a href="process_employers.php?delete=<?php echo $row['EMPLOYER_ID']; ?>" class="btn btn-danger">Delete</a>
                      </div>
                        </td>
                      </tr>

                  <?php endwhile; ?>
                  </tbody>
                </table>
              <div class="row justify-content-center">
                <form action="process_employers.php" method="POST">
                  <input type="hidden" name="hidden_employer_id" value="<?php echo $employer_id;?>">
                  <div class="form-group">
                  <label> Employer ID </label>
                  <input type="text" name="employer_id" class="form-control" placeholder="Enter employer id" value="<?php echo $employer_id; ?>">
                  </div>
                  <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter name" value="<?php echo $name; ?>">
                  </div>
                  <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="password" class="form-control" placeholder="Enter password" value="<?php echo $password; ?>">
                  </div>
                  <div class="form-group">
                  <label>Number</label>
                  <input type="text" name="phone_num" class="form-control" placeholder="Enter phone number" value="<?php echo $phone_num; ?>">
                  </div>
                  <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" placeholder="Enter email" value="<?php echo $email; ?>">
                  </div class="form-group">
                  <div class="form-group">
                  <label>Create Date</label>
                  <input type="date" name="create_date" class="form-control" value="<?php echo $create_date; ?>">
                  </div>
                  <div class="form-group">
                   <label>Update Date</label>
                  <input type="date" name="update_date" class="form-control" value="<?php echo $update_date; ?>">
                  </div>
                  <div class="form-group">
                  <?php 
                    if($update==true):
                  ?>
                  <button type="submit" class="btn btn-info" name="update">Update</button>
                  <?php 
                    else:
                  ?>
                  <button type="submit" class="btn btn-primary" name="save">Save</button>
                  <?php endif ?>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
          <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <!--<script src="js/demo/datatables-demo.js"></script>-->
  <script>

    $(document).ready(function() {
    $('#dataTable').DataTable( {
      statesave: true,
        initComplete: function () {
            this.api().columns(":not(':first,:last')" ).every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
     } );
} );
  </script>
</body>

</html>
