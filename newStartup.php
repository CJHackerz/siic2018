<?php
   include './process/connect.php';
   include './process/utils.php';
   $user = get_user();
   ?>
<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>New Startup</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Favicon Icon Add -->
      <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
      <!-- All STYLESHEET CSS -->
      <link rel="stylesheet" href="css/element.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <script src="js/vendor/modernizr-2.8.3.min.js"></script>
      <style>
          body{
          background-color:#fefdf4;
          }
         .personal-info{
         align:center;
         }
         @media only screen and (min-width: 800px) {
             .file_input {
             padding-left:50%;
             }
             #startup_bp {
             padding-left:30%;
             }
             }
             @media only screen and (max-width: 800px) {
                #startup_bp {
        padding-left:30%;
    }
    .sub-btn{
        margin-left:-65%;
    }
    .file_input{
        padding-left:8%;
        padding-right:8%;
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
            <form class="form-horizontal" role="form" id="new_startup" enctype="multipart/form-data" action="./process/process_new_startup.php" accept-charset="UTF-8" method="post">
               <div class="form-group">
                  <label class="col-lg-3 control-label"placeholder="Title" type="text">Title</label>
                  <div class="col-lg-8">
                     <input class="form-control" type="text"  name="startup_title" id="startup_title" placeholder="Enter Startup Title" required>
                  </div>
                  <div class="form-group text-center col-lg-13 file_input" >
                     <label for="startup_bp" class="control-label">Upload your Start up idea (4MB File Size Limit)(pdf, ppt, doc, docx)</label><br/>
                     <input type="file" accept=".pdf, .ppt, .doc, .docx" name="startup_bp" id="startup_bp" required/><br/>
                  </div>
               </div>
         </div>
         <?php
                  if(isset($_GET['error'])) {
                      if($_GET['error'] == 'ext') {
                          echo '<div class="alert alert-danger" role="alert">Invalid Extension </div>';
                      }
                      if($_GET['error'] == 'size') {
                          echo '<div class="alert alert-danger" role="alert">Size of the file should be less than 4 mb </div>';
                      }
                  }
              ?>
         <div class="form-group text-center sub-btn" style="padding-left:25%">
         <label class="col-md-4 control-label"></label>
         <div class="col-md-8">
         <input type="Submit" class="btn btn-primary" value="Create Startup">
         <span></span>
         <input type="reset" class="btn btn-default" value="Cancel">
         </div>
         </div>
         </form>
      </div>
      </div>
      </div>
      <br>
      </div>
      </div>
      <!-- Start Footer Section -->
      <?php
         include './includes/footer.php'
         ?>
      <!-- end Footer Section -->
      <!-- End Main Wrapper -->
      <!-- ALL JQUERY  -->
      <script src="js/vendor/jquery-1.12.0.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdRm-dm4ImhzWxMOy1_TyY6cQ3ZnVpw9E"></script>
      <script src="js/minix-map.js"></script>
      <script src="js/plugins.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>
