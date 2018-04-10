<?php
   include './process/connect.php';
   include './process/utils.php';
   ?>
<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>SIIC</title>
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
      </style>
   </head>
   <body>
      <!-- Start Main Wrapper -->
      <div class="main-wrapper">
         <!-- NAV BAR -->
         <?php
            include './includes/nav.php';
         ?>
         <!-- NAV BAR ENDS -->
         <!-- DISPLAY TEAMS -->
         <div id="blog" class="content-section-area ptb-120  gray-bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <div class="main-heading-content text-center">
                        <h2>100+ Teams<span>.</span></h2>
                        <p>Here are the following teams that can be joined. </p>
                     </div>
                  </div>
               </div>
               <?php
                  $sql = "SELECT * from teams where type = 'team'";
                  $result = $conn->query($sql);
                  if($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                          echo        ' <div class="row">
                          <div class="col-md-4 col-sm-6">
                              <article class="blog-post">
                                  <div class="post-thumbnail">
                                      <a href="./teampage.php?id=' . $row['team_id'] . '">
                                          <img  style="height:30rem; width:50rem" src="./teams/img/' . $row['logo'] . '" alt="">
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
      </div>
      </div>
      <!-- End Latest Blog Area -->
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
</html>
