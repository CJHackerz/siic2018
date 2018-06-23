<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>SIIC - Sign In</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon Icon Add -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <!-- All STYLESHEET CSS -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="css/element.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/signIn.css">
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>
<style media="screen">
.ti-arrow-up:before {
    content: none;
}
</style>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        <div class="overlay"></div>
<?php
require "includes/nav.php";
require './process/connect.php';
?>
<div id="page-content-wrapper">
<?php
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $authkey    = $_GET['authkey'];
    $uid        = $_GET['uid'];
    $sql = "SELECT * FROM users where authkey = '$authkey' AND uid = '$uid' AND status = 'unset'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $sql = "UPDATE users set status = 'set' where uid = '$uid'";
        if($conn->query($sql)) {
            echo '<h1 align="center" style="font-size: 50px; padding: 100px;">Email Verification Successful!<br> You may continue to login to your account</h1>';
        } else {
            echo '<h1 align="center" style="font-size: 50px; padding: 100px;">Unable to process please try again later</h1>';
        }
    } else {
        echo '<h1 align="center" style="font-size: 50px; padding: 100px;">Invalid Credentials</h1>';
    }
}
?>

</div><!-- Page content wrapper ends -->
</div><!-- wrapper ends -->
    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/css3-animate-it.js"></script>
    <script src="contactform/contactform.js"></script>
    <script src="js/sidenav.js"></script>

</body>

</html>
