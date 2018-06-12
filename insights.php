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
         .img-responsive{
         height:25rem;
         width:50rem;
         }
         @media only screen and (max-width: 800px) {
         .img-responsive{
         height:35rem;
         width:40rem;
         }
         }
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
               <div class="row-teams">
                  <div class="col-md-3 col-sm-6" style="padding-bottom:30px;">
                     <article class="blog-post">
                        <div class="post-thumbnail">
                           <a href="javascript:void(0)">
                              <img class="img-responsive"  src="./teams/img/ST599b00a12e387.jpg" alt="">
                        </div>
                        <div class="post-content">
                        <div class="post-content-inner" style="width:100%; height:5rem;">
                        <center><h3 ><a href="#">SRM ROBOCON</a></h3></center>
                        </div>
                        </div>
                        </a>
                     </article>
                  </div>
                  <div class="row-teams">
                     <div class="col-md-3 col-sm-6" style="padding-bottom:30px;">
                        <article class="blog-post">
                           <div class="post-thumbnail">
                              <a href="javascript:void(0)">
                                 <img class="img-responsive" src="./teams/img/ST5a054490149b6.jpg" alt="">
                           </div>
                           <div class="post-content">
                           <div class="post-content-inner" style="width:100%; height:5rem;">
                           <center><h3 ><a href="#">SquarePig</a></h3></center>
                           </div>
                           </div>
                           </a>
                        </article>
                     </div>
                     <div class="row-teams">
                        <div class="col-md-3 col-sm-6" style="padding-bottom:30px;">
                           <article class="blog-post">
                              <div class="post-thumbnail">
                                 <a href="javascript:void(0)">
                                    <img class="img-responsive" src="./teams/img/ST5991918d7949c.jpg" alt="">
                              </div>
                              <div class="post-content">
                              <div class="post-content-inner" style="width:100%; height:5rem;">
                              <center><h3 ><a href="#">Cambrionics Life Science</a></h3></center>
                              </div>
                              </div>
                              </a>
                           </article>
                        </div>
                        <div class="row-teams">
                           <div class="col-md-3 col-sm-6" style="padding-bottom:30px;">
                              <article class="blog-post">
                                 <div class="post-thumbnail">
                                    <a href="javascript:void(0)">
                                       <img class="img-responsive" src="./teams/img/ST5ac7c224055d9.jpg" alt="">
                                 </div>
                                 <div class="post-content">
                                 <div class="post-content-inner" style="width:100%; height:5rem;">
                                 <center><h3 ><a href="#">Random_name</a></h3></center>
                                 </div>
                                 </div>
                                 </a>
                              </article>
                           </div>
                        </div>
                     </div>
                  </div>
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
