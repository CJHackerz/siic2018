<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Verify</title>
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
    <style media="screen">
    body{
         background-color: #fefdf4;
    }
    .ti-arrow-up:before {
        content: none;
    }
    </style>
</head>
<body>
    <!-- Start Main Wrapper -->
    <div class="main-wrapper">
        <!-- Start Header Section -->
        <?php
        require "includes/nav.php";
        require './process/connect.php';
        ?>
        <!-- End Header Section -->
        <br><br>
        <!-- Start Main Content Wrapper -->
        <div class="main-content-wrapper">
            <!-- multistep form -->
            <?php
            if($_SERVER['REQUEST_METHOD'] == 'GET') {
                $authkey    = $_GET['authkey'];
                $uid        = $_GET['uid'];
                $sql = "SELECT * FROM users where authkey = '$authkey' AND uid = '$uid' AND status = 'unset'";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                    $sql = "UPDATE users set status = 'set' where uid = '$uid'";
                    if($conn->query($sql)) {
                        echo '<h3 align="center" style="padding-top: 100px;">Email Verification Successful!<br> You may continue to login to your account</h3>';
                    } else {
                        echo '<h3 align="center" style="padding-top: 100px;">Unable to process please try again later</h3>';
                    }
                } else {
                    echo '<h3 align="center" style="padding-top: 100px;">Invalid Credentials</h3>';
                }
            }
            ?>

        <?php include 'includes/footer.php' ?>
        <style>
           .footer {
           position: fixed;
           left: 0;
           bottom: 0;
           width: 100%;
           background-color:#333;
           color: white;
           text-align: center;
           }
           .copyright{
               margin-bottom: 1em;
           }
        </style>
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
