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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
    </head>
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
    <body id="page-top" class="body ">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav  sidebar sidebar-dark accordion"  id="accordionSidebar" style="background-color: black;">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
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
                                    <a class="collapse-item text-white" href="login.php">Login</a>
                                    <br>
                                    <a class="collapse-item text-white" href="register.php">Sign in</a>
                                    <br>
                                    <a class="collapse-item text-white" href="forgot-password.php">Forgot Password</a>
                                    <div class="collapse-divider"></div>
                                    <br>
                                    <h4 class="text-white">Other Pages:</h4>
                                    <a class="collapse-item text-white" href="home.php">Logout</a>
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
                    <div id="content-wrapper" class="d-flex flex-column sm-5 mt-3">
                      <!-- Main Content -->
                      <div id="content">
                        <!-- Begin Page Content -->
                        <div class="container-fluid">
                          <!-- Page Heading -->
                          <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <!-- Content Row -->
                            <div class="row ">

                              <div class="page-header ">
                                <nav aria-label="breadcrumb ">
                                  <ol class="breadcrumb  text-light" style="background-color:#F90401;">
                                    <h3 class="page-title"> <i class="fas fa-user-tie"></i> &nbsp;Edit Student Details </h3>

                                  </ol>
                                </nav>

                                <div class="card-body">
                                  <?php
                                    if(isset($_POST['edit_btn']))
                                    {
                                      $id = $_POST['edit_id'];

                                      $query = "SELECT * FROM student WHERE id='$id' ";
                                      $query_run = mysqli_query($db, $query);

                                      foreach($query_run as $row)
                                      {
                                        ?>
                                        <h4 class="card-title" style="color:black;"> <i class="fas fa-user"></i>&nbsp;&nbsp;Student Information</h4>

                                        <hr class="mb-5 " color="dark">

                                         <!---Here Starting the Student Database Section---------->
                                        <form class="form-sample " action="index.php" method="POST"  style="color:black;">

                                          <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                                          <div class="row col-md-12">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">First Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" style="color:black;" value="<?php echo $row['first_name'] ?>" name="edit_first_name" placeholder="Ex : James">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Last Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" style="color:black;" value="<?php echo $row['last_name'] ?>" name="edit_last_name" placeholder="Ex : Smith">
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="row col-md-12">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                  <input type="email" class="form-control" style="color:black;" value="<?php echo $row['email'] ?>" name="edit_email"  placeholder="Ex : JamesSmith4566@gmail.com">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Mobile No</label>
                                                <div class="col-sm-9">
                                                  <input type="tel" class="form-control" style="color:black;" value="<?php echo $row['phone'] ?>" name="edit_phone"  placeholder="Ex : 1023456879">
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          <br>
                                          <h4 class="card-title"> <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Address Information</i></h4>
                                          <hr class="mb-5 " >
                                          <div class="row ">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Permanent Address</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" style="color:black;" value="<?php echo $row['address1'] ?>" name="edit_address1"  placeholder="Enter Your Permament Address.">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">State</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" style="color:black;" value="<?php echo $row['state'] ?>" name="edit_state"  placeholder="Enter Your State.">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row ">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" style="color:black;">Temporary Address</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" style="color:black;" value="<?php echo $row['address2'] ?>" name="edit_address2" placeholder="Enter Your Temporary Address.">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6 ">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" style="color:black;">Pin code</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control " style="color:black;" value="<?php echo $row['postcode'] ?>" name="edit_postcode" placeholder="Enter Your Postcodes.">
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          <br>
                                          <div class="row ">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" style="color:black;">City</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control " style="color:black;" value="<?php echo $row['city'] ?>" name="edit_city" placeholder="Enter Your city.">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label" style="color:black;">Country</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" style="color:black;" value="<?php echo $row['country'] ?>" name="edit_country">
                                                  <select class="form-dropdown col-md-8"  >
                                                    <option value=""> Please Select country </option>
                                                    <option value="United States"> United States </option>
                                                    <option value="Afghanistan"> Afghanistan </option>
                                                    <option value="Albania"> Albania </option>
                                                    <option value="American Samoa"> American Samoa </option>
                                                    <option value="Algeria"> Algeria </option>
                                                    <option value="Andorra"> Andorra </option>
                                                    <option value="Angola"> Angola </option>
                                                    <option value="Anguilla"> Anguilla </option>
                                                    <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                                                    <option value="Armenia"> Armenia </option>
                                                    <option value="Aruba"> Aruba </option>
                                                    <option value="Argentina"> Argentina </option>
                                                    <option value="Australia"> Australia </option>
                                                    <option value="Austria"> Austria </option>
                                                    <option value="Azerbaijan"> Azerbaijan </option>
                                                    <option value="The Bahamas"> The Bahamas </option>
                                                    <option value="Bahrain"> Bahrain </option>
                                                    <option value="Bangladesh"> Bangladesh </option>
                                                    <option value="Barbados"> Barbados </option>
                                                    <option value="Belarus"> Belarus </option>
                                                    <option value="Belgium"> Belgium </option>
                                                    <option value="Belize"> Belize </option>
                                                    <option value="Benin"> Benin </option>
                                                    <option value="Bermuda"> Bermuda </option>
                                                    <option value="Bhutan"> Bhutan </option>
                                                    <option value="Bolivia"> Bolivia </option>
                                                    <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                                                    <option value="Botswana"> Botswana </option>
                                                    <option value="Brazil"> Brazil </option>
                                                    <option value="Brunei"> Brunei </option>
                                                    <option value="Bulgaria"> Bulgaria </option>
                                                    <option value="Burkina Faso"> Burkina Faso </option>
                                                    <option value="Burundi"> Burundi </option>
                                                    <option value="Cambodia"> Cambodia </option>
                                                    <option value="Cameroon"> Cameroon </option>
                                                    <option value="Canada"> Canada </option>
                                                    <option value="Cape Verde"> Cape Verde </option>
                                                    <option value="Cayman Islands"> Cayman Islands </option>
                                                    <option value="Central African Republic"> Central African Republic </option>
                                                    <option value="Chad"> Chad </option>
                                                    <option value="Chile"> Chile </option>
                                                    <option value="China"> China </option>
                                                    <option value="Christmas Island"> Christmas Island </option>
                                                    <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                                                    <option value="Colombia"> Colombia </option>
                                                    <option value="Comoros"> Comoros </option>
                                                    <option value="Congo"> Congo </option>
                                                    <option value="Cook Islands"> Cook Islands </option>
                                                    <option value="Costa Rica"> Costa Rica </option>
                                                    <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                                                    <option value="Croatia"> Croatia </option>
                                                    <option value="Cuba"> Cuba </option>
                                                    <option value="Curacao"> Curacao </option>
                                                    <option value="Cyprus"> Cyprus </option>
                                                    <option value="Czech Republic"> Czech Republic </option>
                                                    <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                                                    <option value="Denmark"> Denmark </option>
                                                    <option value="Djibouti"> Djibouti </option>
                                                    <option value="Dominica"> Dominica </option>
                                                    <option value="Dominican Republic"> Dominican Republic </option>
                                                    <option value="Ecuador"> Ecuador </option>
                                                    <option value="Egypt"> Egypt </option>
                                                    <option value="El Salvador"> El Salvador </option>
                                                    <option value="Equatorial Guinea"> Equatorial Guinea </option>
                                                    <option value="Eritrea"> Eritrea </option>
                                                    <option value="Estonia"> Estonia </option>
                                                    <option value="Ethiopia"> Ethiopia </option>
                                                    <option value="Falkland Islands"> Falkland Islands </option>
                                                    <option value="Faroe Islands"> Faroe Islands </option>
                                                    <option value="Fiji"> Fiji </option>
                                                    <option value="Finland"> Finland </option>
                                                    <option value="France"> France </option>
                                                    <option value="French Polynesia"> French Polynesia </option>
                                                    <option value="Gabon"> Gabon </option>
                                                    <option value="The Gambia"> The Gambia </option>
                                                    <option value="Georgia"> Georgia </option>
                                                    <option value="Germany"> Germany </option>
                                                    <option value="Ghana"> Ghana </option>
                                                    <option value="Gibraltar"> Gibraltar </option>
                                                    <option value="Greece"> Greece </option>
                                                    <option value="Greenland"> Greenland </option>
                                                    <option value="Grenada"> Grenada </option>
                                                    <option value="Guadeloupe"> Guadeloupe </option>
                                                    <option value="Guam"> Guam </option>
                                                    <option value="Guatemala"> Guatemala </option>
                                                    <option value="Guernsey"> Guernsey </option>
                                                    <option value="Guinea"> Guinea </option>
                                                    <option value="Guinea-Bissau"> Guinea-Bissau </option>
                                                    <option value="Guyana"> Guyana </option>
                                                    <option value="Haiti"> Haiti </option>
                                                    <option value="Honduras"> Honduras </option>
                                                    <option value="Hong Kong"> Hong Kong </option>
                                                    <option value="Hungary"> Hungary </option>
                                                    <option value="Iceland"> Iceland </option>
                                                    <option value="India"> India </option>
                                                    <option value="Indonesia"> Indonesia </option>
                                                    <option value="Iran"> Iran </option>
                                                    <option value="Iraq"> Iraq </option>
                                                    <option value="Ireland"> Ireland </option>
                                                    <option value="Israel"> Israel </option>
                                                    <option value="Italy"> Italy </option>
                                                    <option value="Jamaica"> Jamaica </option>
                                                    <option value="Japan"> Japan </option>
                                                    <option value="Jersey"> Jersey </option>
                                                    <option value="Jordan"> Jordan </option>
                                                    <option value="Kazakhstan"> Kazakhstan </option>
                                                    <option value="Kenya"> Kenya </option>
                                                    <option value="Kiribati"> Kiribati </option>
                                                    <option value="North Korea"> North Korea </option>
                                                    <option value="South Korea"> South Korea </option>
                                                    <option value="Kosovo"> Kosovo </option>
                                                    <option value="Kuwait"> Kuwait </option>
                                                    <option value="Kyrgyzstan"> Kyrgyzstan </option>
                                                    <option value="Laos"> Laos </option>
                                                    <option value="Latvia"> Latvia </option>
                                                    <option value="Lebanon"> Lebanon </option>
                                                    <option value="Lesotho"> Lesotho </option>
                                                    <option value="Liberia"> Liberia </option>
                                                    <option value="Libya"> Libya </option>
                                                    <option value="Liechtenstein"> Liechtenstein </option>
                                                    <option value="Lithuania"> Lithuania </option>
                                                    <option value="Luxembourg"> Luxembourg </option>
                                                    <option value="Macau"> Macau </option>
                                                    <option value="Macedonia"> Macedonia </option>
                                                    <option value="Madagascar"> Madagascar </option>
                                                    <option value="Malawi"> Malawi </option>
                                                    <option value="Malaysia"> Malaysia </option>
                                                    <option value="Maldives"> Maldives </option>
                                                    <option value="Mali"> Mali </option>
                                                    <option value="Malta"> Malta </option>
                                                    <option value="Marshall Islands"> Marshall Islands </option>
                                                    <option value="Martinique"> Martinique </option>
                                                    <option value="Mauritania"> Mauritania </option>
                                                    <option value="Mauritius"> Mauritius </option>
                                                    <option value="Mayotte"> Mayotte </option>
                                                    <option value="Mexico"> Mexico </option>
                                                    <option value="Micronesia"> Micronesia </option>
                                                    <option value="Moldova"> Moldova </option>
                                                    <option value="Monaco"> Monaco </option>
                                                    <option value="Mongolia"> Mongolia </option>
                                                    <option value="Montenegro"> Montenegro </option>
                                                    <option value="Montserrat"> Montserrat </option>
                                                    <option value="Morocco"> Morocco </option>
                                                    <option value="Mozambique"> Mozambique </option>
                                                    <option value="Myanmar"> Myanmar </option>
                                                    <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                                                    <option value="Namibia"> Namibia </option>
                                                    <option value="Nauru"> Nauru </option>
                                                    <option value="Nepal"> Nepal </option>
                                                    <option value="Netherlands"> Netherlands </option>
                                                    <option value="Netherlands Antilles"> Netherlands Antilles </option>
                                                    <option value="New Caledonia"> New Caledonia </option>
                                                    <option value="New Zealand"> New Zealand </option>
                                                    <option value="Nicaragua"> Nicaragua </option>
                                                    <option value="Niger"> Niger </option>
                                                    <option value="Nigeria"> Nigeria </option>
                                                    <option value="Niue"> Niue </option>
                                                    <option value="Norfolk Island"> Norfolk Island </option>
                                                    <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                                                    <option value="Northern Mariana"> Northern Mariana </option>
                                                    <option value="Norway"> Norway </option>
                                                    <option value="Oman"> Oman </option>
                                                    <option value="Pakistan"> Pakistan </option>
                                                    <option value="Palau"> Palau </option>
                                                    <option value="Palestine"> Palestine </option>
                                                    <option value="Panama"> Panama </option>
                                                    <option value="Papua New Guinea"> Papua New Guinea </option>
                                                    <option value="Paraguay"> Paraguay </option>
                                                    <option value="Peru"> Peru </option>
                                                    <option value="Philippines"> Philippines </option>
                                                    <option value="Pitcairn Islands"> Pitcairn Islands </option>
                                                    <option value="Poland"> Poland </option>
                                                    <option value="Portugal"> Portugal </option>
                                                    <option value="Puerto Rico"> Puerto Rico </option>
                                                    <option value="Qatar"> Qatar </option>
                                                    <option value="Republic of the Congo"> Republic of the Congo </option>
                                                    <option value="Romania"> Romania </option>
                                                    <option value="Russia"> Russia </option>
                                                    <option value="Rwanda"> Rwanda </option>
                                                    <option value="Saint Barthelemy"> Saint Barthelemy </option>
                                                    <option value="Saint Helena"> Saint Helena </option>
                                                    <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                                                    <option value="Saint Lucia"> Saint Lucia </option>
                                                    <option value="Saint Martin"> Saint Martin </option>
                                                    <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                                                    <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                                                    <option value="Samoa"> Samoa </option>
                                                    <option value="San Marino"> San Marino </option>
                                                    <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                                                    <option value="Saudi Arabia"> Saudi Arabia </option>
                                                    <option value="Senegal"> Senegal </option>
                                                    <option value="Serbia"> Serbia </option>
                                                    <option value="Seychelles"> Seychelles </option>
                                                    <option value="Sierra Leone"> Sierra Leone </option>
                                                    <option value="Singapore"> Singapore </option>
                                                    <option value="Slovakia"> Slovakia </option>
                                                    <option value="Slovenia"> Slovenia </option>
                                                    <option value="Solomon Islands"> Solomon Islands </option>
                                                    <option value="Somalia"> Somalia </option>
                                                    <option value="Somaliland"> Somaliland </option>
                                                    <option value="South Africa"> South Africa </option>
                                                    <option value="South Ossetia"> South Ossetia </option>
                                                    <option value="South Sudan"> South Sudan </option>
                                                    <option value="Spain"> Spain </option>
                                                    <option value="Sri Lanka"> Sri Lanka </option>
                                                    <option value="Sudan"> Sudan </option>
                                                    <option value="Suriname"> Suriname </option>
                                                    <option value="Svalbard"> Svalbard </option>
                                                    <option value="eSwatini"> eSwatini </option>
                                                    <option value="Sweden"> Sweden </option>
                                                    <option value="Switzerland"> Switzerland </option>
                                                    <option value="Syria"> Syria </option>
                                                    <option value="Taiwan"> Taiwan </option>
                                                    <option value="Tajikistan"> Tajikistan </option>
                                                    <option value="Tanzania"> Tanzania </option>
                                                    <option value="Thailand"> Thailand </option>
                                                    <option value="Timor-Leste"> Timor-Leste </option>
                                                    <option value="Togo"> Togo </option>
                                                    <option value="Tokelau"> Tokelau </option>
                                                    <option value="Tonga"> Tonga </option>
                                                    <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                                                    <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                                                    <option value="Tristan da Cunha"> Tristan da Cunha </option>
                                                    <option value="Tunisia"> Tunisia </option>
                                                    <option value="Turkey"> Turkey </option>
                                                    <option value="Turkmenistan"> Turkmenistan </option>
                                                    <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                                                    <option value="Tuvalu"> Tuvalu </option>
                                                    <option value="Uganda"> Uganda </option>
                                                    <option value="Ukraine"> Ukraine </option>
                                                    <option value="United Arab Emirates"> United Arab Emirates </option>
                                                    <option value="United Kingdom"> United Kingdom </option>
                                                    <option value="Uruguay"> Uruguay </option>
                                                    <option value="Uzbekistan"> Uzbekistan </option>
                                                    <option value="Vanuatu"> Vanuatu </option>
                                                    <option value="Vatican City"> Vatican City </option>
                                                    <option value="Venezuela"> Venezuela </option>
                                                    <option value="Vietnam"> Vietnam </option>
                                                    <option value="British Virgin Islands"> British Virgin Islands </option>
                                                    <option value="Isle of Man"> Isle of Man </option>
                                                    <option value="US Virgin Islands"> US Virgin Islands </option>
                                                    <option value="Wallis and Futuna"> Wallis and Futuna </option>
                                                    <option value="Western Sahara"> Western Sahara </option>
                                                    <option value="Yemen"> Yemen </option>
                                                    <option value="Zambia"> Zambia </option>
                                                    <option value="Zimbabwe"> Zimbabwe </option>
                                                    <option value="other"> Other </option>
                                                  </select>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          <br>
                                          <h4 class="page-title "><i class="fas fa-user-graduate ml-3 mr3" style="color:black;"></i>&nbsp; Student Education </h4>
                                          <hr class="mb-5 " >
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;">*Are You 10th Completed?</label>
                                              <div class="col-sm-4">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" <?php if($row['membershipRadios1']=="Yes") {?> <?php echo "checked";?> <?php }?> name="edit_membershipRadios1" id="membershipRadios1" value="Yes" checked> Yes
                                                  </label>
                                                </div>
                                              </div>
                                              <div class="col-sm-5">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" <?php if($row['membershipRadios1']=="No") {?> <?php echo "checked";?> <?php }?> name="edit_membershipRadios1" id="membershipRadios2" value="No"> No
                                                  </label>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;">School Name</label>
                                              <div class="col-sm-9">
                                                <input type="text" class="form-control " style="color:black;" value="<?php echo $row['school_name'] ?>" name="edit_school_name" placeholder="Enter Your School Name.">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;">Board Name</label>
                                              <div class="col-sm-9">
                                                <input type="text" class="form-control " style="color:black;" value="<?php echo $row['Board_Name_1'] ?>" name="edit_Board_Name_1" placeholder="Enter Your Board Name.">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;">Percentage</label>
                                              <div class="col-sm-9">
                                                <input type="float" class="form-control " style="color:black;" value="<?php echo $row['Percentage_1'] ?>" name="edit_Percentage_1" placeholder="Enter Your 10th Percentage.">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;">Passing Academic Year</label>
                                              <div class="col-sm-9">
                                                <input type="date" class="form-control " style="color:black;" value="<?php echo $row['Academic_Year_1'] ?>" name="edit_Academic_Year_1" placeholder="dd-mm-yyyy" value="" >
                                              </div>
                                            </div>
                                          </div>

                                          <br>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <hr class="mb-5 " color="white">
                                              <label class="col-sm-3 col-form-label" style="color:black;">*Are You 12th Completed?</label>
                                              <div class="col-sm-4">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" <?php if($row['membershipRadios2']=="Yes") {?> <?php echo "checked";?> <?php }?> name="edit_membershipRadios2" id="membershipRadios2" value="Yes"> Yes
                                                  </label>
                                                </div>
                                              </div>
                                              <div class="col-sm-5">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" <?php if($row['membershipRadios2']=="No") {?> <?php echo "checked";?> <?php }?> name="edit_membershipRadios2" id="membershipRadios2" value=" No "> No
                                                  </label>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;">College Name</label>
                                              <div class="col-sm-9">
                                                <input type="text" class="form-control" style="color:black;" value="<?php echo $row['college_name_1'] ?>" name="edit_college_name_1" placeholder="Enter Your College Name.">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;">Board Name</label>
                                              <div class="col-sm-9">
                                                <input type="text" class="form-control" style="color:black;" value="<?php echo $row['Board_Name_2'] ?>" name="edit_Board_Name_2" placeholder="Enter Your Board Name.">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;">Percentage</label>
                                              <div class="col-sm-9">
                                                <input type="float" class="form-control " style="color:black;" value="<?php echo $row['Percentage_2'] ?>" name="edit_Percentage_2" placeholder="Enter Your 12th Percentage..">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;">Passing Academic Year</label>
                                              <div class="col-sm-9">
                                                <input type="date" class="form-control " style="color:black;" value="<?php echo $row['Academic_Year_2'] ?>" name="edit_Academic_Year_2" placeholder="dd-mm-yyyy" value="" >
                                              </div>
                                            </div>
                                          </div>

                                          <br>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <hr class="mb-5 " color="white">
                                              <label class="col-sm-3 col-form-label" style="color:black;">* Are You Diploma Completed? </label>
                                              <div class="col-sm-4">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" <?php if($row['membershipRadios3']=="Yes") {?> <?php echo "checked";?> <?php }?> name="edit_membershipRadios3" id="membershipRadios3" value="Yes"> Yes
                                                  </label>
                                                </div>
                                              </div>
                                              <div class="col-sm-5">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" <?php if($row['membershipRadios3']=="No") {?> <?php echo "checked";?> <?php }?> name="edit_membershipRadios3" id="membershipRadios3" value="No"> No
                                                  </label>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;">College Name</label>
                                              <div class="col-sm-9">
                                                <input type="text" class="form-control" style="color:black;" value="<?php echo $row['college_name_2'] ?>" name="edit_college_name_2" placeholder="Enter Your College Name.">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;">  Board Name</label>
                                              <div class="col-sm-9">
                                                <input type="text" class="form-control" style="color:black;" value="<?php echo $row['Board_Name_3'] ?>" name="edit_Board_Name_3" placeholder="Enter Your Board Name.">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;">Percentage</label>
                                              <div class="col-sm-9">
                                                <input type="float" class="form-control " style="color:black;" value="<?php echo $row['Percentage_3'] ?>" name="edit_Percentage_3" placeholder="Enter Your Diploma Percentage..">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;">Passing Academic Year</label>
                                              <div class="col-sm-9">
                                                <input type="date" class="form-control " style="color:black;" value="<?php echo $row['Academic_Year_3'] ?>" name="edit_Academic_Year_3" placeholder="dd-mm-yyyy" value="" >
                                              </div>
                                            </div>
                                          </div>

                                          <br>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <hr class="mb-5 " color="white">
                                              <label class="col-sm-3 col-form-label" style="color:black;">* Are You Gratuation Completed?</label>
                                              <div class="col-sm-4">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" <?php if($row['membershipRadios4']=="Yes") {?> <?php echo "checked";?> <?php }?> name="edit_membershipRadios4" id="membershipRadios4" value="Yes"> Yes
                                                  </label>
                                                </div>
                                              </div>
                                              <div class="col-sm-5">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" <?php if($row['membershipRadios4']=="No") {?> <?php echo "checked";?> <?php }?> name="edit_membershipRadios4" id="membershipRadios4" value="No"> No
                                                  </label>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;">College Name</label>
                                              <div class="col-sm-9">
                                                <input type="text" class="form-control" style="color:black;" value="<?php echo $row['college_name_3'] ?>" name="edit_college_name_3" placeholder="Enter Your College Name.">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;"> University Name</label>
                                              <div class="col-sm-9">
                                                <input type="text" class="form-control " style="color:black;" value="<?php echo $row['University_Name'] ?>" name="edit_University_Name" placeholder="Enter Your University Name.">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;">Graduation Course</label>
                                              <div class="col-sm-9">
                                                <input type="text" class="form-control " style="color:black;" value="<?php echo $row['Graduation_Course'] ?>" name="edit_Graduation_Course">
                                                <select class ="form-dropdown col-md-6"  >
                                                  <option value="">Please Select Graduation Course.</option>
                                                  <option value="BE/B.Tech- Bachelor of Technology">BE/B.Tech- Bachelor of Technology</option>
                                                  <option value="B.Arch- Bachelor of Architecture">B.Arch- Bachelor of Architecture</option>
                                                  <option value="BE/B.Tech- Bachelor of Technology">BCA- Bachelor of Computer Applications</option>
                                                  <option value="B.Sc.- Information Technology">B.Sc.- Information Technology</option>
                                                  <option value="B.Sc- Nursing">B.Sc- Nursing</option>
                                                  <option value="BPharma- Bachelor of Pharmacy">BPharma- Bachelor of Pharmacy</option>
                                                  <option value="B.Sc- Interior Design">B.Sc- Interior Design</option>
                                                  <option value="BDS- Bachelor of Dental Surgery">BDS- Bachelor of Dental Surgery</option>
                                                  <option value="Animation, Graphics and Multimedia">Animation, Graphics and Multimedia</option>
                                                  <option value="B.Sc. – Nutrition & Dietetics">B.Sc. – Nutrition & Dietetics</option>
                                                  <option value="BPT- Bachelor of Physiotherapy">BPT- Bachelor of Physiotherapy</option>
                                                  <option value="B.Sc- Applied Geology">B.Sc- Applied Geology</option>
                                                  <option value="BA/B.Sc. Liberal Arts">BA/B.Sc. Liberal Arts</option>
                                                  <option value="B.Sc.- Physics">B.Sc.- Physics</option>
                                                  <option value="B.Sc. Chemistry">B.Sc. Chemistry</option>
                                                  <option value="B.Sc. Mathematics">B.Sc. Mathematics</option>
                                                  <option value="Aeronautical Engineering">Aeronautical Engineering</option>
                                                  <option value="Automobile Engineering">Automobile Engineering</option>
                                                  <option value="Civil Engineering">Civil Engineering</option>
                                                  <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                                                  <option value="Biotechnology Engineering">Biotechnology Engineering</option>
                                                  <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                                                  <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                                                  <option value="Robotics Engineering">Robotics Engineering</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;">Percentage</label>
                                              <div class="col-sm-9">
                                                <input type="float" class="form-control" style="color:black;" value="<?php echo $row['Percentage_4'] ?>" name="edit_Percentage_4" placeholder="Enter Your Graduation Percentage..">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group row">
                                              <label class="col-sm-3 col-form-label" style="color:black;">Passing Academic Year</label>
                                              <div class="col-sm-9">
                                                <input type="date" class="form-control " style="color:black;" value="<?php echo $row['Academic_Year_4'] ?>" name="edit_Academic_Year_4" placeholder="dd-mm-yyyy" value="" >
                                              </div>
                                            </div>
                                          </div>
                                          <br>
                                          <div class="col-sm-3">
                                            <a href="index.php" class="btn btn-danger"> CANCEL </a>
                                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>
                                          </div>
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
                        <!-- /.container-fluid -->
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
