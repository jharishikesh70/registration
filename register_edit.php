<?php
session_start();
if (!isset($_SESSION['username'])) {
$_SESSION['msg'] = "You must log in first";
header('location: login.php');
}
if (isset($_GET['logout'])) {
session_destroy();
unset($_SESSION['username']);
header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
  </head>
  <style>
  .body{
  color:  orangered;
  font-size: 20px;
  font-family: 'Courgette', cursive;
  }
  .image-style {
   width: 80px;
   height: 80px;
   border-radius: 50%;
  }
  .font-style {
  color: whitesmoke;
  font-weight: 900;
  margin-bottom: 10px;
  }
  .button_slide {
    cursor: pointer;
    box-shadow: inset 0 0 0 0 #058F07;
    -webkit-transition: ease-out 0.4s;
    -moz-transition: ease-out 0.4s;
    transition: ease-out 0.4s;
    border-radius: 25px;
    display: inline-block;
    text-align: justify;
  }

  .slide_right:hover {
    box-shadow: inset 400px 0 0 0 #058F07;
  }
  </style>
  <body id="page-top" class="body">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav  sidebar sidebar-dark accordion "  style="background-color: black;"  id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink fa-3x"></i>
          </div>
          <div class="sidebar-brand-text mx-3 " style="color:white;">
            <h3>Welcome </h3>
          </div>
        </a>
        <!-- logged in user information -->
        <center>
        <?php  if (isset($_SESSION['username'])) : ?>
        <img class="image-style " src="https://pickaface.net/gallery/avatar/unr_admin_171016_2225_zewhi.png">
        <h3 class="text-white">
        <strong><?php echo $_SESSION['username']; ?></strong>
        </h3>
        <?php endif ?>
        </center>
        <br>
        <!-- Nav Item - Navbar -->
        <li class="nav-item active button_slide slide_right" style="background-color: #EF1E06;">
          <a class="nav-link" >
            <i class="fa fa-bars " aria-hidden="true"></i>
            <span><strong>Navigation</strong></span>
          </a>
        </li>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active button_slide slide_right">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span><strong>Dashboard</strong></span>
          </a>
        </li>

        <!-- Nav Item - Admin Profile -->
        <li class="nav-item active button_slide slide_right">
            <a class="nav-link" href="admin_profile.php">
                <i class="fas fa-users-cog"></i>
                <span><strong> Admin Profile</strong></span>
            </a>
        </li>
        <!-- Nav Item -Student Database -->
        <li class="nav-item active button_slide slide_right">
          <a class="nav-link" href="Student_Database.php">
            <i class="fas fa-users"></i>
            <span><strong>Student</strong></span>
          </a>
        </li>
        <!-- Nav Item -Employees Database -->
        <li class="nav-item active button_slide slide_right">
          <a class="nav-link" href="Employee.php">
            <i class="fas fa-user-tie"></i>
            <span><strong>Employee</strong></span>
          </a>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item button_slide slide_right">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-user-shield"></i>
            <span>Administrators</span>
          </a>
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-transparent py-2 collapse-inner rounded">
              <h4 class="text-white">Login Screens:</h4>
              <a class="collapse-item btn text-white" href="login.php">Login</a>
              <br>
              <a class="collapse-item  text-white" href="register.php">Sign in</a>
              <br>
              <a class="collapse-item  text-white" href="forgot-password.php">Forgot Password</a>
              <div class="collapse-divider"></div>
              <br>
              <h4 class="text-white">Other Pages:</h4>
              <a class="collapse-item text-white" href="index.php?logout='1'">Logout</a>
            </div>
          </div>
        </li>
        <br>
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" style="background-color: #EF1E06;" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->
      <!-- partial -->
      <div class="container-fluid page-body-wrapper sm-5 mt-3" >
        <div class="main-panel ">
          <div class="content-wrapper">
            <div class="page-header ">
              <nav aria-label="breadcrumb ">
                <ol class="breadcrumb  text-light" style="background-color:#cc0000;">
                  <h3 class="page-title"> <i class="fas fa-user-tie"></i> &nbsp; Edit Admin Users </h3>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <?php
                  include('security.php');
                ?>
                <div class="card-body">
                  <?php
                    if(isset($_POST['edit_btn']))
                    {
                      $id = $_POST['edit_id'];
                      $query = "SELECT * FROM users WHERE id='$id' ";
                      $query_run = mysqli_query($connection, $query);

                      foreach($query_run as $row)
                      {
                        ?>
                        <form action="code.php" method="POST">
                          <div class="form-group">
                            <label>User Id</label>
                            <input type="text" name="edit_id" value="<?php echo $row['id'] ?>" class="form-control">
                          </div>
                          <div class="form-group">
                            <label> Username </label>
                            <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control"
                              placeholder="Enter Username">
                          </div>
                          <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control"
                              placeholder="Enter Email">
                          </div>
                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="edit_password" value="<?php echo $row['password'] ?>"
                              class="form-control" placeholder="Enter Password">
                          </div>
                          <a href="index.php" class="btn btn-danger"> CANCEL </a>
                          <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>
                        </form>
                        <?php
                      }
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- partial:../../partials/_footer.html -->
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>
      </div>
      <!-- content-wrapper ends -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
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
              <button class="btn btn-secondary button " type="button" data-dismiss="modal">Cancel</button>
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
      <script src="vendor/chart.js/Chart.min.js"></script>
      <!-- Page level custom scripts -->
      <script src="js/demo/chart-area-demo.js"></script>
      <script src="js/demo/chart-pie-demo.js"></script>
      <!-- container-scroller -->

    </body>
  </html>
