<?php
    include './process/connect.php';
    include './process/utils.php';

    $user = get_user();
?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from themecoffer.com/html/dot-preview/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Mar 2018 11:39:02 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIIC</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon Icon Add -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.html">
    <!-- All STYLESHEET CSS -->
    <link rel="stylesheet" href="css/element.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    
    <style>

        
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
    <!-- Start Main Wrapper -->
    <div class="main-wrapper">
        <!-- Start Header Section -->
        <header>
            <div id="sticky-header" class="header-area header-style-one gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <!-- insert SIIC logo -->
                                <a href="index-2.html"><h2>Dot<span>.</span></h2></a>
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
                                        <li class="active"><a href="#home">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#portfolio">Portfolio</a></li>
                                        <li><a href="#team">Team</a></li>
                                        <li><a href="#blog">Blog</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Start Mobile Menu -->
                        <div class="mobile-menu-area">
                            <div class="mobile-menu">
                                <ul>
                                    <li class="active"><a href="#home">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#team">Team</a></li>
                                    <li><a href="#portfolio">Portfolio</a></li>
                                    <li><a href="#blog">Blog</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Section -->
 
        
       
            <!-- DISPLAY TEAMS -->








            
            <div id="blog" class="content-section-area ptb-120  gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="main-heading-content text-center">
                                <h2>Teams<span>.</span></h2>
                                <p>Here are the following teams that can be joined. </p>
                            </div>
                        </div>
                    </div>
                    <?php
        $sql = "SELECT * from teams where team_id = '1'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo        ' <div class="row" style="">
                <div class="col-md-4 col-sm-6">
                    <article class="blog-post">
                        <div class="post-thumbnail">
                            <a href="./teampage.php?id=' . $row['team_id'] . '">
                                <img class="img-responsive" src="./teams/img/' . $row['logo'] . '" alt="">
                        </div>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <center><h3 ><a href="#">'.$row['team_name'].'</a></h3></center>      
                            </div>
                        </div>
                            </a>
                    </article>
                </div>';
            }
        }
    ?>




    
                    </div>
                </div>
            </div>






            
            <!-- End Latest Blog Area -->



             <!-- Start Footer Section -->
        <div class="clearfix"></div>
        <footer>
            <div class="footer-bottom ptb-120 text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="footer">
                                <h2 class="footer-logo">
                                    Dot<span>.</span>
                                </h2>
                                <div class="footer-social black">
                                    <ul class="social-bookmarkas">
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-google"></i></a></li>
                                        <li><a href="#"><i class="ti-youtube"></i></a></li>
                                    </ul>
                                </div>
                                <p class="copyright">
                                    ALL RIGHTS RESERVED. © <a target="_blank" href="www.bigtechit.html">BIGRECHIT</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer Section -->
        <!-- End Main Content Wrapper -->
    </div>
    <!-- End Main Wrapper -->
    <!-- ALL JQUERY  -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdRm-dm4ImhzWxMOy1_TyY6cQ3ZnVpw9E"></script>
    <script src="js/minix-map.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>


<!-- Mirrored from themecoffer.com/html/dot-preview/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Mar 2018 11:39:51 GMT -->
</html>