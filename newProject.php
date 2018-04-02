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
    <title>New Project|SIIC</title>
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

        .personal-info{
            align:center;
        }

        @media only screen and (min-width: 500px) {
    .file_input {
        padding-left:12rem;
    }
}


@media only screen and (max-width: 600px) {
    .file_input {
        padding-left:3rem;
    }
}
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
        
        
        <!-- Start Main Content Wrapper -->
        <div class="main-content-wrapper">
            <div id="about" class="content-section-area pt-120 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="main-heading-content text-center">
                                <h2>Project Idea<span>.</span></h2>
                                <p>Note: Be very sure that all your information about you and and your Project will remain confidential and will not be passed to anyone without your prior permission.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- FORM -->
        <div class="col-md-8 personal-info">
        
        <form class="form-horizontal" role="form" id="new_project" enctype="multipart/form-data" action="./process/process_new_project.php" accept-charset="UTF-8" method="post">
          <div class="form-group">
            <label class="col-lg-3 control-label"placeholder="Title" type="text" name="project_title" id="project_title">Title</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="Enter Project Title">
            </div>
          </div>
          <div class="form-group">
            <label for="project_requirements" class="col-lg-3 control-label">Requirements</label>
            <div class="col-lg-8">
            <textarea cols="80" rows="10" class="form-control bootsy_text_area" placeholder="Requirements" name="project_requirement" id="project_requirements"></textarea>
            </div>
          

          <div class="form-group col-lg-8 file_input" >
          <label for="project_bp" class="control-label">Upload your Project report (4MB File Size Limit)(pdf, ppt, doc, docx)</label><br/>
                    <input type="file" accept=".pdf, .ppt, .doc, .docx" name="project_bp" id="project_bp"/><br/>
          </div>
          </div>
          
          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="Submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous">
</script>

         <!--form ends-->
         
         


            
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