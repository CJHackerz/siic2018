<?php
    session_start();
    if(isset($_SESSION['user'])) {
        header('Location: ./profile.php');
    }
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIIC - Sign Up</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon Icon Add -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- All STYLESHEET CSS -->
    <link rel="stylesheet" href="css/element.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/signIn.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Preloader -->
    <!--<div class="loader-wrapper">
        <div class="loader"></div>
    </div>-->
    <!-- End Preloader -->
    <!-- Start Main Wrapper -->
    <div class="main-wrapper">
        <?php
//   require "process/connect.php";
//   require "includes/nav.php";
  ?>
        <!-- Start Header Section -->
        <header>
            <div id="sticky-header" class="header-area header-style-one gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <a href="index.html"><h2>SIIC<span>.</span></h2></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 main-menu-wrapper">
                            <div class="main-menu-wrapper">
                                <button class="hamburger hamburger--slider" type="button">
                                    <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                                <div class="homepage-menu-style-two mobile-menu">
                                    <ul class="main-menu ">
                                        <li class="active"><a href="#about">About</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="index.html#contact">Feedback</a></li>
                                        <li><a href="#">Sign Up</a></li>
                                        <li><a href="#" style="color: #f00;">Become a Mentor</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Start Mobile Menu -->
                        <div class="mobile-menu-area">
                            <div class="mobile-menu">
                                <ul>
                                    <li class="active"><a href="#about">About</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="index.html#contact">Feedback</a></li>
                                    <li><a href="#">Sign Up</a></li>
                                    <li><a href="#" style="color: #f00;">Become a Mentor</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Section -->
        <br><br>
        <!-- Start Main Content Wrapper -->
        <div class="main-content-wrapper">
            <!-- multistep form -->
            <div id="msform" style="padding-bottom:0%;">
            <form role="form" class="new_user" id="new_user" action="./process/process_register.php" enctype="multipart/form-data" accept-charset="UTF-8" method="post">
              <!-- progressbar -->
             
              <!-- fieldsets -->
              <fieldset>
                <h2 class="fs-title">SignIn</h2>
                <h3 class="fs-subtitle">Enter the details to sign in</h3>
                <input type="email" name="user_email" placeholder="Email" required>
                <!-- <input type="text" placeholder="test123"> -->
                <input type="password" name="user_password" placeholder="Password" required />
                
                <input type="submit" name="" class="next action-button" value="SUBMIT" required />
              </fieldset>
             
            </form>
            </div>

        <!-- Start Footer Section -->
        <div class="clearfix"></div>

        <footer style=" margin-top: 5%;">
            <div class="footer-bottom ptb-30 text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="footer">
                                <p class="copyright" style="color: #fff;">
                                    &copy; Webarch 2018
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer Section -->
        </div>
        <!-- End Main Content Wrapper -->
    </div>
    <!-- End Main Wrapper -->

    <!-- ALL JQUERY  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/minix-map.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
</body>

</html>
