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
    <title>New Startup|SIIC</title>
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
<!-- NAV BAR -->
    <?php
        include './includes/nav.php';
    ?>
<!-- NAV BAR ENDS -->
    
    <!-- Start Main Wrapper -->
    <div class="main-wrapper">
               
        
        <!-- Start Main Content Wrapper -->
        <div class="main-content-wrapper">
            <div id="about" class="content-section-area pt-120 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="main-heading-content text-center">
                                <h2>Startup Idea<span>.</span></h2>
                                <p> Be very sure that all your information about you and and your startup will remain confidential and will not be passed to anyone without your prior permission.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- FORM -->
        <div class="col-md-8 personal-info">
        
        <form class="form-horizontal" role="form" id="new_project" enctype="multipart/form-data" action="./process/process_new_startup.php" accept-charset="UTF-8" method="post">
          <div class="form-group">
            <label class="col-lg-3 control-label"placeholder="Title" type="text" name="project_title" id="project_title">Title</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="Enter Startup Title">
            </div>
          </div>
          
          

          <div class="form-group col-lg-9 file_input" >
          <label for="project_bp" class="control-label">Upload your Project report (4MB File Size Limit)(pdf, ppt, doc, docx)</label><br/>
                    <input type="file" accept=".pdf, .ppt, .doc, .docx" name="project_bp" id="project_bp"/><br/>
          </div>
                  
          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8" style="padding-left:13rem">
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


<center><label style="padding-top:10rem"for="startup_datetime">Setup an appointment using calendly! After doing so submit your form.</label><br/>
                <!-- Calendly inline widget begin -->
                <center><div class="calendly-inline-widget" data-url="https://calendly.com/siic/score" style="min-width:320px;height:300px;"></div>
                <script type="text/javascript" src="https://calendly.com/assets/external/widget.js"></script>
                <!-- Calendly inline widget end -->
          </div>
 


<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous">
</script>

         <!--form ends-->
         
         


       <!-- Start Footer Section -->
       <?php
            include './includes/footer.php'
        ?>
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