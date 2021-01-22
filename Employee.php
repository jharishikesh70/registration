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

<?php include('studentdbs.php') ?>
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

  .register {
    background-color: red;
    border: none;
    margin-left: 400px;
    margin-bottom: 50px;
    cursor: pointer;
    color: #fff;
    outline: none;
    font-size: 20px;
    font-weight: normal;
    text-transform: uppercase;
    transition: all 0.5s ease-in-out;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    border-radius: 30px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -o-border-radius: 30px;
    -ms-border-radius: 30px;
    font-family: 'Muli', sans-serif;

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
        <li class="nav-item active button_slide slide_right"style="background-color: #EF1E06;">
          <a class="nav-link" >
            <i class="fa fa-bars " aria-hidden="true"></i>
            <span><strong>Navigation</strong></span>
          </a>
        </li>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active button_slide slide_right" >
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
              <a class="collapse-item  text-white" href="login.php">Login</a>
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
                  <h3 class="page-title"> <i class="fas fa-user-tie"></i> &nbsp; Employee Job Application Form </h3>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a class="collapse-item btn bg-primary text-light" href="index.php">Back</a>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card" style="color: black;>
                  <div class="card-body">

                    <form class="form-sample" action="studentdbs.php" method="POST">
                      <br>
                      <div class="col-md-12 ml-3 mr-3">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Are you working? <b style="color:red;">*</b></label>
                          <div class="col-sm-8">
                            <div class="form-check ml-3 mr-3">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios1" id="membershipRadios1" value="Yes" required >Yes
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="form-check ml-3 mr-3">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios1" id="membershipRadios1" value="No" required> No
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <br>
                      <div class="row ml-3 mr-3">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">First Name <b style="color:red;">*</b></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control " style="color:black;"  name="first_name" placeholder="Please enter your first name" >
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Last Name <b style="color:red;">*</b></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control " style="color:black;" name="last_name" placeholder=" Please enter your last name" >
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>

                      <div class="col-md-12 ml-3 mr-3">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">What is your Gender?</label>
                          <div class="col-sm-8">
                            <div class="form-check ml-3 mr-3">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios2" id="membershipRadios2" value="Male" >Male
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="form-check ml-3 mr-3">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios2" id="membershipRadios2" value="Female" >Female
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="form-check ml-3 mr-3">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios2" id="membershipRadios2" value="Others" >Others
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>

                      <div class="col-md-6 ml-3 mr-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Age </label>
                          <div class="col-sm-9">
                            <input type="int" class="form-control " style="color:black;"  name="age" placeholder="Please enter your age name" >
                          </div>
                        </div>
                      </div>
                      <br>

                      <div class="col-md-6 ml-3 mr-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control " style="color:black;" name="email"  placeholder="Ex : JamesSmith4566@gmail.com">
                          </div>
                        </div>
                      </div>

                      <br>
                      <div class="col-md-6 ml-3 mr-3">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mobile No</label>
                          <div class="col-sm-9">
                            <input type="tel" class="form-control " style="color:black;" name="phone"  placeholder="Please enter mobile no.">
                          </div>
                        </div>
                      </div>

                      <br>
                      <div class="col-md-12 ml-3 mr-3">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label " >What position are you applying for?</label>
                          <div class="col-sm-9">
                            <select class="form-dropdown " name="job_position" >
                              <option value=""> Please Select </option>
                              <option value="Marketing Coordinator"> Marketing Coordinator </option>
                              <option value="Web Designer"> Web Designer </option>
                              <option value="Project Manager"> Project Manager </option>
                              <option value="Computer Scientist"> Computer Scientist </option>
                              <option value="IT Professional"> IT Professional </option>
                              <option value="UX Designer & UI Developer"> UX Designer & UI Developer </option>
                              <option value="SQL Developer"> SQL Developer </option>
                              <option value="Web Developer"> Web Developer </option>
                              <option value="Help Desk Worker/Desktop Support"> Help Desk Worker/Desktop Support </option>
                              <option value="Software Engineer"> Software Engineer </option>
                              <option value="Data Entry"> Data Entry </option>
                              <option value="DevOps Engineer"> DevOps Engineer </option>
                              <option value="Computer Programmer"> Computer Programmer </option>
                              <option value="Network Administrator"> Network Administrator </option>
                              <option value="Information Security Analyst"> Information Security Analyst </option>
                              <option value="Artificial Intelligence Engineer"> Artificial Intelligence Engineer </option>
                              <option value="Cloud Architect"> Cloud Architect </option>
                              <option value="IT Manager"> IT Manager </option>
                              <option value="Technical Specialist"> Technical Specialist </option>
                              <option value="Application Developer"> Application Developer </option>
                              <option value="Chief Technology Officer (CTO)"> Chief Technology Officer (CTO) </option>
                              <option value="Chief Information Officer (CIO)"> Chief Information Officer (CIO) </option>
                              <option value="Hr Manager"> Hr Manager </option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <br>
                      <div class="col-md-6 ml-3 mr-3">
                        <div class="form-group row">
                          <label class="col-sm-8 col-form-label">What is your company name? <b style="color:red;">*</b></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control " style="color:black;" name="company_name"  placeholder=" Please enter company name " >
                          </div>
                        </div>
                      </div>

                      <br>
                      <div class="col-md-6 ml-3 mr-3">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Job start date <b style="color:red;">*</b></label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control " style="color:black;" name="Starting_Date"  placeholder="(dd--mm--year)">
                          </div>
                        </div>
                      </div>

                      <br>
                      <div class="col-md-6 ml-3 mr-3">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Job End date <b style="color:red;">*</b></label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control " style="color:black;" name="Ending_Date"  placeholder="(dd--mm--year)" >
                          </div>
                        </div>
                      </div>

                      <br>
                      <div class="col-md-12 ml-3 mr-3">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">What is your current employment status? <b style="color:red;">*</b></label>
                          <div class="col-sm-8">
                            <div class="form-check ml-3 mr-3">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios3" id="membershipRadios3" value="Employed" > Employed
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="form-check ml-3 mr-3">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios3" id="membershipRadios3" value="Unemployed"> Unemployed
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="form-check ml-3 mr-3">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios3" id="membershipRadios3" value="Self-Employed"> Self-Employed
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="form-check ml-3 mr-3">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios3" id="membershipRadios3" value="Student"> Student
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="form-check ml-3 mr-3">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input " name="membershipRadios3" id="membershipRadios3" value="Internship"> Internship
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <br>
                      <div class="row ml-4">
                        <div class="col-md-2">
                          <button type="submit" class="btn register  form-control"  name="emp_button">Submit
                          </button>
                        </div>
                      </div>
                    </form>
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
