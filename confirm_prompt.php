<!DOCTYPE html>
<html lang="en">
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
      <style media="screen">
         h4 > a, .portfolio-category > li > a {
         color: #fff;
         }
      </style>
   </head>
   <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
      <div id="wrapper">
         <div class="overlay"></div>
         <?php
            require "process/connect.php";
            require "includes/nav.php";
            ?>
         <div id="page-content-wrapper">
            <br><br>
            <p align="center" style="font-size: 30px; padding: 100px;">Your response has been submitted.</p>
         </div>
         <!-- Page content wrapper ends -->
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br>
      <!-- wrapper ends -->
      <?php include 'includes/footer.php' ?>
      <!-- Core JavaScript Files -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
      <script src="js/vendor/jquery-1.12.0.min.js"></script>
      <script src="js/minix-map.js"></script>
      <script src="js/plugins.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>
