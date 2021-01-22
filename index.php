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
<?php
include('security.php');
?>
<?php
include('studentdbs.php');
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

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

  <style>
  .body{
  font-family: 'Courgette', cursive;
  font-size:20px;
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
  .msg {
  margin: 30px auto;
  padding: 10px;
  border-radius: 5px;
  color: #3c763d;
  background: #dff0d8;
  border: 1px solid #3c763d;
  width: 50%;
  text-align: center;
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
  #chartdiv {
    width: 500px;
    height: 500px
  }


  </style>
  <body id="page-top" class="body ">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav  sidebar sidebar-dark accordion "  id="accordionSidebar" style="background-color: black;">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink fa-3x"></i>
          </div>
          <div class="sidebar-brand-text mx-3 " style="color:white;">
            <h3>Welcome </h3>
          </div>
        </a>

        <center>
        <!-- logged in user information -->
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
            <span><strong>Navigation</strong></span></a>
          </li>
          <!-- Nav Item - Dashboard -->
          <li class="nav-item active button_slide slide_right">
            <a class="nav-link" href="index.php">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span><strong>Dashboard</strong></span></a>
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
                <span><strong>Employee </strong></span>
              </a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item button_slide slide_right">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-user-shield"></i>
                <span>Administrators</span>
              </a>
              <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-transparent py-2 collapse-inner rounded">
                  <h4 class="text-white">Login Screens:</h4>
                  <a class="collapse-item " style="color: white;" href="login.php">Login</a>
                  <br>
                  <a class="collapse-item " style="color: white;" href="register.php">Sign in</a>
                  <br>
                  <a class="collapse-item " style="color: white;" href="forgot-password.php">Forgot Password</a>
                  <div class="collapse-divider"></div>
                  <br>
                  <h4 class="text-white">Other Pages:</h4>
                  <a class="collapse-item" style="color: white;" href="home.php">Logout</a>
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
          <!-- Content Wrapper -->
          <div id="content-wrapper"  class="d-flex flex-column sm-5 mt-3">
            <!-- Main Content -->
            <div id="content">
              <!-- Begin Page Content -->
              <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <!-- Content Row -->
                  <div class="row ">
                    <nav aria-label="breadcrumb ">
                      <ol class="breadcrumb text-white"
                        style="background-color:#ff3300;">
                        <h3 class="page-title">
                        <i class="fas fa-user-tie"></i> &nbsp;&nbsp; Welcome &nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="collapse-item btn glyphicon glyphicon-log-out text-white bg-primary" href="home.php"> <i class="fa fa-user-plus" aria-hidden="true"></i>
                        &nbsp;Log Out</a>
                        </h3>
                      </ol>
                    </nav>
                    <div class="col-xl-3 col-md-6 mb-4" >
                      <div class="card border-left-primary shadow h-100 py-2" style="background-color:#369708;">
                        <div class="card-body" >
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2 text-white">
                              <div class="text-xs font-weight-bold   mb-1">Total  Admin</div>
                              <div class="h5 mb-0 font-weight-bold ">
                                <?php
                                $query = "SELECT id FROM users ORDER BY id";
                                $query_run = mysqli_query($connection, $query);
                                $row = mysqli_num_rows($query_run);
                                echo '<h4> Register Admin: '.$row.'</h4>';
                                ?>
                              </div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-user fa-3x text-light-400"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4" >
                      <div class="card border-left-primary shadow h-100 py-" style="background-color:#369708;">
                        <div class="card-body" >
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2 text-white">
                              <div class="text-xs font-weight-bold   mb-1">Total Student</div>
                              <div class="h5 mb-0 font-weight-bold ">
                                <?php
                                $query = "SELECT id FROM student ORDER BY id";
                                $query_run = mysqli_query($db, $query);
                                $row = mysqli_num_rows($query_run);
                                echo '<h4> Total Student: '.$row.'</h4>';
                                ?>
                              </div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-users fa-3x text-light-400"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4" >
                      <div class="card border-left-primary shadow h-100 " style="background-color:#369708;">
                        <div class="card-body" >
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2 text-white">
                              <div class="text-xs font-weight-bold   mb-1">Total Employee</div>
                              <div class="h5 mb-0 font-weight-bold ">
                                <?php
                                $query = "SELECT id FROM employee ORDER BY id";
                                $query_run = mysqli_query($db, $query);
                                $row = mysqli_num_rows($query_run);
                                echo '<h4> Register Employees: '.$row.'</h4>';
                                ?>
                              </div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-user-tie fa-3x text-light-400"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4" >
                      <div class="card border-left-primary shadow h-100 " style="background-color:#369708;">
                        <div class="card-body" >
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2 text-white">
                              <div class="text-xs font-weight-bold   mb-1">Total Comments</div>
                              <div class="h5 mb-0 font-weight-bold ">
                                <?php
                                $query = "SELECT id FROM contact ORDER BY id";
                                $query_run = mysqli_query($db, $query);
                                $row = mysqli_num_rows($query_run);
                                echo '<h4> Total messages: '.$row.'</h4>';
                                ?>
                              </div>
                            </div>
                            <div class="col-auto">
                              <i class="far fa-comments fa-3x text-light-400"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <div class="page-header ">
                        <nav aria-label="breadcrumb ">
                          <ol class="breadcrumb  text-light" style="background-color:purple;">
                            <h3 class="page-title"> <i class="fas fa-user-tie"></i> &nbsp;Student Details</h3>
                          </ol>
                        </nav>
                      </div>
                      <a href="Student_Database.php" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i>
                        <span>&nbsp;Add Student</span>
                      </a>
                      <?php
                      $query = "SELECT * FROM student";
                      $query_run = mysqli_query($db, $query);
                      ?>
                      <table class="table  table-hover " style="color: black;" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th> ID </th>
                            <th> First Name </th>
                            <th> Last Name </th>
                            <th> Email </th>
                            <th> Phone </th>
                            <th> View </th>
                            <th> Edit </th>
                            <th> Delete </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          if(mysqli_num_rows($query_run) > 0)
                          {
                          while($row = mysqli_fetch_assoc($query_run))
                          {
                          ?>
                          <tr>
                            <td><?php  echo $row['id']; ?></td>
                            <td><?php  echo $row['first_name']; ?></td>
                            <td><?php  echo $row['last_name']; ?></td>
                            <td><?php  echo $row['email']; ?></td>
                            <td><?php  echo $row['phone']; ?></td>
                            <td>
                              <form action="user_view.php" method="post">
                                <input type="hidden" name="view_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="view_btn" class="btn btn-primary"><i class="fas fa-eye"></i></button>
                              </form>
                            </td>
                            <td>
                              <form action="student_edit.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="edit_btn" class="btn btn-success"><i class="fas fa-user-edit"></i></button>
                              </form>
                            </td>
                            <td>
                              <form action="studentdbs.php" method="post">
                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="delete_btn" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                              </form>
                            </td>
                          </tr>
                          <?php
                          }
                          }
                          else {
                          echo "No Record Found";
                          }
                          ?>
                        </tbody>
                      </table>
                      <?php if (isset($_SESSION['message'])): ?>
                      <div class="msg">
                        <?php
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        ?>
                      </div>
                      <?php endif ?>
                    </div>
                    <!---Here Starting Employee Table--------->
                    <div class="table-responsive">
                      <div class="page-header ">
                        <nav aria-label="breadcrumb ">
                          <ol class="breadcrumb  text-light" style="background-color:red;">
                            <h3 class="page-title"> <i class="fas fa-user-tie"></i> &nbsp;Employees Details</h3>
                          </ol>
                        </nav>
                      </div>
                      <a href="Employee.php" class="btn btn-primary">
                        <i class="fas fa-user-tie"></i> <span>
                        &nbsp;Add Employee</span>
                      </a>
                      <?php
                      $query = "SELECT * FROM employee";
                      $query_run = mysqli_query($db, $query);
                      ?>
                      <table class="table table-hover " style="color: black;" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th> Employee ID </th>
                            <th> Employee Name </th>
                            <th> Employee Email </th>
                            <th> Job Position </th>
                            <th> Company Name </th>
                            <th> Starting Data</th>
                            <th> Ending Date </th>
                            <th> Job Status </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          if(mysqli_num_rows($query_run) > 0)
                          {
                          while($row = mysqli_fetch_assoc($query_run))
                          {
                          ?>
                          <tr>
                            <td><?php  echo $row['id']; ?></td>
                            <td><?php  echo $row['first_name']; ?></td>
                            <td><?php  echo $row['email']; ?></td>
                            <td><?php  echo $row['job_position']; ?></td>
                            <td><?php  echo $row['company_name']; ?></td>
                            <td><?php  echo $row['Starting_Date']; ?></td>
                            <td><?php  echo $row['Ending_Date']; ?></td>
                            <td><?php  echo $row['membershipRadios3']; ?></td>
                          </tr>
                          <?php
                          }
                          }
                          else {
                          echo "No Record Found";
                          }
                          ?>
                        </tbody>
                      </table>
                      <?php if (isset($_SESSION['message'])): ?>
                      <div class="msg">
                        <?php
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        ?>
                      </div>
                      <?php endif ?>
                    </div>

                    <div class="page-header ">
                      <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb  text-light" style="background-color:purple;">
                          <h3 class="page-title"> <i class="fas fa-user-tie"></i> &nbsp;Student Analytics Section</h3>
                        </ol>
                      </nav>
                    </div>

                    <script src="https://www.amcharts.com/lib/4/core.js"></script>
                    <script src="https://www.amcharts.com/lib/4/maps.js"></script>
                    <script src="https://www.amcharts.com/lib/4/geodata/india2019High.js"></script>
                    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
                    <h1 style="color:black">India</h1>
                    <div id="chartdiv" ></div>

                 </div>
                </div>
              </div>
              <!---container-fluid -->
            </div>
            <!-- End of Main Content -->
          </div>
          <!-- End of Content Wrapper -->
        </li>
      </ul>
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <script>
    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end

    // Create map instance
    var chart = am4core.create("chartdiv", am4maps.MapChart);

    // Set map definition
    chart.geodata = am4geodata_india2019High;



    // Create map polygon series
    var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

    //Set min/max fill color for each area
    polygonSeries.heatRules.push({
    property: "fill",
    target: polygonSeries.mapPolygons.template,
    min: chart.colors.getIndex(1).brighten(1),
    max: chart.colors.getIndex(1).brighten(-0.3)
    });

    // Make map load polygon data (state shapes and names) from GeoJSON
    polygonSeries.useGeodata = true;

    // Set heatmap values for each state
    polygonSeries.data = [
    {
      id: "IN-JK",
      value: 8798861,
      name1 :"District",
      value1: 796233,

    },
    {
      id: "IN-MH",
      value: 6269321325,
      name1 :"District",
      value1: 421354,
      name2: "Taluka",
      value2: 4522,
    },
    {
      id: "IN-UP",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "US-AR",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-RJ",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-AP",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-MP",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-TN",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-JH",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-WB",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-GJ",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-BR",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-TG",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-GA",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-DN",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-DL",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-DD",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-CH",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-CT",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-AS",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-AR",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-AN",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-KA",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-KL",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-OR",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-SK",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-HP",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-PB",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-HR",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-UT",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-LK",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-MN",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-TR",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-MZ",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-NL",
      value: 0,
      name1 :"District",
      value1: 0,

    },
    {
      id: "IN-ML",
      value: 0,
      name1 :"District",
      value1: 0,

    }
    ];



    // Configure series tooltip
    var polygonTemplate = polygonSeries.mapPolygons.template;
    polygonTemplate.tooltipText = "{name}:{value},{name1}:{value1},{name2}:{value2}";
    polygonTemplate.nonScalingStroke = true;
    polygonTemplate.strokeWidth = 0.5;


    // Create hover state and set alternative fill color
    var hs = polygonTemplate.states.create("hover");
    hs.properties.fill = am4core.color("green");
    </script>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
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
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <!-- container-scroller -->

  </body>
</html>
