<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Home</title>
    <link rel="stylesheet" type="" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>
  <style>
  .body{
    font-family: 'Courgette', cursive;
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
  ul {
  margin: 0px;
  padding: 0px;
  }
  .footer-section {
  background: #151414;
  position: relative;
  }
  .footer-cta {
  border-bottom: 1px solid #373636;
  }
  .single-cta i {
  color: #ff5e14;
  font-size: 30px;
  float: left;
  margin-top: 8px;
  }
  .cta-text {
  padding-left: 15px;
  display: inline-block;
  }
  .cta-text h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 2px;
  }
  .cta-text span {
  color: #757575;
  font-size: 15px;
  }
  .footer-content {
  position: relative;
  z-index: 2;
  }
  .footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
  }
  .footer-logo {
  margin-bottom: 30px;
  }
  .footer-logo img {
  max-width: 200px;
  }
  .footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
  color: #7e7e7e;
  line-height: 28px;
  }
  .footer-social-icon span {
  color: #fff;
  display: block;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
  }
  .footer-social-icon a {
  color: #fff;
  font-size: 16px;
  margin-right: 15px;
  }
  .footer-social-icon i {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
  }
  .facebook-bg{
  background: #3B5998;
  }
  .twitter-bg{
  background: #55ACEE;
  }
  .google-bg{
  background: #DD4B39;
  }
  .footer-widget-heading h3 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
  }
  .footer-widget-heading h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #ff5e14;
  }
  .footer-widget ul li {
  display: inline-block;
  float: left;
  width: 50%;
  margin-bottom: 12px;
  }
  .footer-widget ul li a:hover{
  color: #ff5e14;
  }
  .footer-widget ul li a {
  color: #878787;
  text-transform: capitalize;
  }
  .subscribe-form {
  position: relative;
  overflow: hidden;
  }
  .subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
  }
  .subscribe-form button {
  position: absolute;
  right: 0;
  background: #ff5e14;
  padding: 13px 20px;
  border: 1px solid #ff5e14;
  top: 0;
  }
  .subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
  }
  .copyright-area{
  background: #202020;
  padding: 25px 0;
  }
  .copyright-text p {
  margin: 0;
  font-size: 14px;
  color: #878787;
  }
  .copyright-text p a{
  color: #ff5e14;
  }
  .footer-menu li {
  display: inline-block;
  margin-left: 20px;
  }
  .footer-menu li:hover a{
  color: #ff5e14;
  }
  .footer-menu li a {
  font-size: 14px;
  color: #878787;
  }
  /*
  *
  * ==========================================
  * FOR DEMO PURPOSES
  * ==========================================
  *
  */
  .social-link {
  width: 30px;
  height: 30px;
  border: 1px solid #ddd;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #666;
  border-radius: 50%;
  transition: all 0.3s;
  font-size: 0.9rem;
  }
  .social-link:hover,
  .social-link:focus {
  background: black;
  text-decoration: none;
  color: white;
  }
  </style>
  <body class="body">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-danger">
      <div class="container">
        <a class="navbar-brand " href="#">
          <img src="abhi.jpg" alt="" class="image-style">
        </a>
        <div>
          <a class="navbar-brand text-light" href="#">Abhishek Jha</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
        </div>
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
    <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
      <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
        <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
        <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
        <li data-slide-to="3" data-target="#carouselExampleIndicators"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img alt="First slide" class="d-block w-100" src="android.jpg" he>
          <div class="carousel-caption d-none d-md-block">
            <h5 class="animated bounceInRight" style="animation-delay: 1s">Web Development</h5>
            <p class="animated bounceInLeft" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
            <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">More Info</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img alt="Second slide" class="d-block w-100" src="school.jpg">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="animated slideInDown" style="animation-delay: 1s">web design</h5>
            <p class="animated fadeInUp" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
            <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img alt="Third slide" class="d-block w-100" src="joker.jpg">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="animated zoomIn" style="animation-delay: 1s">Digital Marketing</h5>
            <p class="animated fadeInLeft" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
            <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img alt="Third slide" class="d-block w-100" src="login.jpeg">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="animated zoomIn" style="animation-delay: 1s">Digital Marketing</h5>
            <p class="animated fadeInLeft" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
            <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
          </div>
        </div>
        </div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
      </div>
      <div class="bg-light">
        <div class="container py-5">
          <div class="row h-100 align-items-center py-5">
            <div class="col-lg-6">
              <h1 class="display-4">About us page</h1>
              <p class="lead text-muted mb-0">Create a minimal about us page using Bootstrap 4.</p>
              <p class="lead text-muted">Snippet by <a href="https://bootstrapious.com/snippets" class="text-muted">
              <u>Bootstrapious</u></a>
            </p>
          </div>
          <div class="col-lg-6 d-none d-lg-block"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/illus_kftyh4.png" alt="" class="img-fluid"></div>
        </div>
      </div>
    </div>
    <div class="bg-white py-5">
      <div class="container py-5">
        <div class="row align-items-center mb-5">
          <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
            <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
            <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
          </div>
          <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834139/img-1_e25nvh.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-5 px-5 mx-auto"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/img-2_vdgqgn.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
          <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
            <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
            <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-light py-5">
      <div class="container py-5">
        <div class="row mb-4">
          <div class="col-lg-5">
            <h2 class="display-4 font-weight-light">Our team</h2>
            <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="row text-center">
          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834132/avatar-4_ozhrib.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">Manuella Nevoresky</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
              <ul class="social mb-0 list-inline mt-3">
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- End-->
          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834130/avatar-3_hzlize.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">Samuel Hardy</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
              <ul class="social mb-0 list-inline mt-3">
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- End-->
          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834133/avatar-2_f8dowd.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">Tom Sunderland</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
              <ul class="social mb-0 list-inline mt-3">
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- End-->
          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834133/avatar-1_s02nlg.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">John Tarly</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
              <ul class="social mb-0 list-inline mt-3">
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- End-->
        </div>
      </div>
    </div>
    <footer class="footer-section">
      <div class="container">
        <div class="footer-cta pt-5 pb-5">
          <div class="row">
            <div class="col-xl-4 col-md-4 mb-30">
              <div class="single-cta">
                <i class="fas fa-map-marker-alt"></i>
                <div class="cta-text">
                  <h4>Find us</h4>
                  <span>1010 Avenue, sw 54321, chandigarh</span>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 mb-30">
              <div class="single-cta">
                <i class="fas fa-phone"></i>
                <div class="cta-text">
                  <h4>Call us</h4>
                  <span>9876543210 0</span>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 mb-30">
              <div class="single-cta">
                <i class="far fa-envelope-open"></i>
                <div class="cta-text">
                  <h4>Mail us</h4>
                  <span>mail@info.com</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-content pt-5 pb-5">
          <div class="row">
            <div class="col-xl-4 col-lg-4 mb-50">
              <div class="footer-widget">
                <div class="footer-logo">
                  <a href="index.html"><img src="https://i.ibb.co/QDy827D/ak-logo.png" class="img-fluid" alt="logo"></a>
                </div>
                <div class="footer-text">
                  <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                  elit,Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="footer-social-icon">
                  <span>Follow us</span>
                  <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                  <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                  <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
              <div class="footer-widget">
                <div class="footer-widget-heading">
                  <h3>Useful Links</h3>
                </div>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">about</a></li>
                  <li><a href="#">services</a></li>
                  <li><a href="#">portfolio</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Our Services</a></li>
                  <li><a href="#">Expert Team</a></li>
                  <li><a href="#">Contact us</a></li>
                  <li><a href="#">Latest News</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
              <div class="footer-widget">
                <div class="footer-widget-heading">
                  <h3>Subscribe</h3>
                </div>
                <div class="footer-text mb-25">
                  <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                </div>
                <div class="subscribe-form">
                  <form action="#">
                    <input type="text" placeholder="Email Address">
                    <button><i class="fab fa-telegram-plane"></i></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright-area">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6 text-center text-lg-left">
              <div class="copyright-text">
                <p>Copyright &copy; 2018, All Right Reserved <a href="https://codepen.io/anupkumar92/">Abhishek Jha</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
    </script>
  </body>
</html>