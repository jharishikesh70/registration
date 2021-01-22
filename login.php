<?php include('server.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Admin Login Page</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  	<link rel="stylesheet" type="" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
  	<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
  .body{
  	font-family: 'Courgette', cursive;
    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm_8ApdxKCKrVduIu7ipHKq4BujKjDF2VQYQ&usqp=CAU");
  }
  .carousel-item {
  	height: 100vh;
  	min-height: 300px;
  }
  .carousel-caption {
  	bottom: 220px;
  }
  .carousel-caption h5 {
  	font-size: 45px;
  	letter-spacing: 2px;
  	margin-top: 25px;

  }
  .carousel-caption p {
  	width: 60%;
  	margin: auto;
  	font-size: 18px;
  	line-height: 1.9;
  }
  .carousel-caption a {
  	text-transform: uppercase;
  	background: #262626;
  	padding: 10px 30px;
  	display: inline-block;
  	color: #fff;
  	margin-top: 15px;
  }
  .navbar-nav a {
  	font-size: 18px;
  	font-weight: bold;
  }
  .navbar-light .navbar-brand {
  	color: #fff;
  	font-size: 25px;
  	font-weight: bold;
  	letter-spacing: 2px;
  }
  .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
  	color: #fff;
  }
  .navbar-light .navbar-nav .nav-link {
  	color: #fff;
  }
  .navbar-nav {
  	text-align: center;
  }
  .nav-link {
  	padding: .2rem 1rem;
  }
  .nav-link.active, .nav-link:focus {
  	color: #fff;
  }
  .navbar-toggler {
  	padding: 1px 5px;
  	font-size: 18px;
  	line-height: 0.3;
  	background: #fff;
  }
  .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
  	color: #fff;
  }
  .w-100 {
  	height: 100vh;
  }
  @media only screen and (max-width: 767px) {
  	.navbar-nav.ml-auto {
  		background: rgba(0, 0, 0, 0.5);
  	}
  	.navbar-nav a {
  		font-size: 14px;
  		font-weight: normal;
  	}
  }

  .image-style {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  }

  nav a {
    transition: 0.3s ease;
    color: white;
    font-size: 20px;
    text-decoration: none;
    border-top: 4px solid transparent;
    border-bottom: 4px solid transparent;
    padding: 20px 0;
    margin: 0 5px;
    font-size: 17px;
  }
  nav a:hover {
    border-top: 4px solid white;
    border-bottom: 4px solid white;
    padding: 6px 0;
  	background-color: transparent;
  	color: white;
  }
  </style>
  <body class="body ">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-danger">
  		<div class="container">
  			<a class="navbar-brand " href="#">
  				<img src="abhi.jpg" alt="" class="image-style">
  			</a>
  			<a class="navbar-brand text-light" href="#">Abhishek Jha</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
  				<ul class="navbar-nav ml-auto">
  					<li class="nav-item active">
  						<a class="nav-link" href="home.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a>
  					</li>
  					<li class="nav-item">
  						<a class="nav-link" href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;About</a>
  					</li>
  					<li class="nav-item">
  						<a class="nav-link" href="contact.php"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;Contact</a>
  					</li>
  					<li class="nav-item">
  						<a class="nav-link" href="login.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Login</a>
  					</li>
  					<li class="nav-item">
  						<a class="nav-link" href="register.php"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Sign Up</a>
  					</li>
  				</ul>
  			</div>
  		</div>
  	</nav>
    <br>
    <br>
    <br>
    <br>
    <div class="header">
      <h2>Admin Login </h2>
    </div>

    <form method="post" action="login.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label class="text-light"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Username</label>
        <input type="text" style="color:black;" name="username" placeholder="Please Enter Your Name.">
      </div>
      <div class="input-group">
        <label class="text-light"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;&nbsp;Password</label>
        <input type="password" style="color:black;" name="password"  placeholder="Please Enter Your Password." >
      </div>
      <br>
      <div class="input-group">
        <button type="submit" class="btn bg-success text-white" name="login_user">Login</button>
        <b class="text-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not yet a member? </b>
        &nbsp;&nbsp;<a href="register.php" class="btn bg-danger text-white">Sign up</a>
      </div>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
