<?php
  include('security.php');
?>
<?php include('code.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us Page</title>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>


  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
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

  #success-message {
    opacity: 0;
  }

  .col-xs-12.col-sm-12.col-md-12.col-lg-12 {
    padding: 0 20% 0 20%;
  }

  .margin-top-25 {
    margin-top: 25px;
  }

  .form-title {
    padding: 25px;
    font-size: 30px;
    font-weight: 300;

  }

  .form-group .form-control {
    -webkit-box-shadow: none;
    border-bottom: 1px;
    border-style: none none solid none;
    border-radius:25px;
    border-color: #000;
  }

  .form-group .form-control:focus {
    box-shadow: none;
    border-width: 0 0 2px 0;
    border-color: #000;
  }

  textarea {
    resize: none;
  }

  .register {
    background-color: red;
    border: none;
    margin-left: 30px;
    margin-bottom: 50px;
    cursor: pointer;
    color: #fff;
    outline: none;
    font-size: 20px;
    font-weight: normal;
    transition: all 0.5s ease-in-out;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    border-radius: 30px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -o-border-radius: 30px;
    -ms-border-radius: 30px;
  }
  
  .register:hover {
    background-color:#36b051;
    color:#fff;
  }

  @media only screen and (max-width: 500px) {
    .btn-mod.btn-large {
       padding: 6px 16px;
       font-size: 11px;
    }

    .form-title {
      font-size: 20px;
    }
  }
  
</style>

<body class="body">

  <!-- Start nav -->
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
  <!-- End nav -->

  <br>
  <br>
  <br>
  <br>
  <br>
  <!-- Start container -->
  <div class="container text-light">

    <!-- Start row -->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
          <h2 class="form-title">Get in Touch</h2>
        </div>
    </div>

    <div class="row ">

      <!-- Start col -->
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <!-- Start form -->
        <form id="contact-form" name="myForm" class="form" action="contact.php" onsubmit="return validateForm()" method="POST" role="form">

          <div class="form-group">
            <label class="form-label" id="nameLabel" for="name"><i class="fas fa-user-check text-light"></i>&nbsp; User Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1">
          </div>

          <br>
          <div class="form-group">
            <label class="form-label" id="emailLabel" for="email"><i class="fas fa-envelope text-light"></i>&nbsp; Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2">
          </div>

          <br>
          <div class="form-group">
            <label class="form-label" id="subjectLabel" for="sublect"></i><i class="fas fa-pencil-alt text-light"></i>&nbsp; Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3">
          </div>

          <br>
          <div class="form-group">
            <label class="form-label" id="messageLabel" for="message"><i class="far fa-comments text-light"></i>&nbsp; Message</label>
            <textarea rows="6" cols="60" name="message" class="form-control" id="message" placeholder="Your message" tabindex="4"></textarea>
          </div>

          <br>
          <div class="text-center margin-top-25">
            <button type="submit" class="btn register" name="Sent_message"><i class="fas fa-share"></i>&nbsp;Send Message</button>
          </div>

        </form>
        <!-- End form -->
      </div>
      <!-- End col -->
    </div>
    <!-- End row -->
  </div>
  <!-- End container -->

  <script>
  function validateForm() {
    var n = document.getElementById('name').value;
    var e = document.getElementById('email').value;
    var s = document.getElementById('subject').value;
    var m = document.getElementById('message').value;
    var onlyLetters =/^[a-zA-Z\s]*$/;
    var onlyEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(n == "" || n == null){
      document.getElementById('nameLabel').innerHTML = ('Please enter your name');
      document.getElementById('name').style.borderColor = "red";
      return false;
    }

    if (!n.match(onlyLetters)) {
      document.getElementById('nameLabel').innerHTML = ('Please enter only letters');
      document.getElementById('name').style.borderColor = "red";
      return false;
    }

    if(e == "" || e == null ){
      document.getElementById('emailLabel').innerHTML = ('Please enter your email');
      document.getElementById('email').style.borderColor = "red";
      return false;
    }

    if (!e.match(onlyEmail)) {
      document.getElementById('emailLabel').innerHTML = ('Please enter a valid email address');
      document.getElementById('email').style.borderColor = "red";
      return false;
    }

    if(s == "" || s == null ){
      document.getElementById('subjectLabel').innerHTML = ('Please enter your subject');
      document.getElementById('subject').style.borderColor = "red";
      return false;
    }

    if (!s.match(onlyLetters)) {
      document.getElementById('subjectLabel').innerHTML = ('Please enter only letters');
      document.getElementById('subject').style.borderColor = "red";
      return false;
    }

    if(m == "" || m == null){
      document.getElementById('messageLabel').innerHTML = ('Please enter your message');
      document.getElementById('message').style.borderColor = "red";
      return false;
    }
    else{
      return true;
    }
  }
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
  <script src="contact.js"></script>

</body>
</html>
