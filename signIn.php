<?php
    session_start();
    if(isset($_SESSION['user']) || isset($_COOKIE['useremail'])) {
      setcookie('useremail',$_SESSION['user'],time() + (86400*7));
        header('Location: ./profile.php');
    }
?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign In</title>
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
    <style media="screen">
    .ti-arrow-up:before {
        content: none;
    }
    </style>
</head>

<body>
    <!-- Start Main Wrapper -->
    <div class="main-wrapper">
        <!-- Start Header Section -->
        <?php include 'includes/nav.php' ?>
        <?php
        require "process/connect.php";
        ?>
        <!-- End Header Section -->
        <br><br>
        <!-- Start Main Content Wrapper -->
        <div class="main-content-wrapper">
            <!-- multistep form -->
            <div id="msform" style="padding-bottom:0%;">
            <form role="form" style="margin-top:15%;" class="new_user" id="new_user" action="./process/process_login.php" enctype="multipart/form-data" accept-charset="UTF-8" method="post">
              <!-- progressbar -->
              <?php
                                if(isset($_GET['error'])) {
                                    if($_GET['error'] == 'true') {
                                        echo '<div class="alert alert-danger" role="alert">Username or Password incorrect </div>';
                                    }
                                    if($_GET['error'] == 'not_validate') {
                                        echo '<div class="alert alert-info" role="alert">Please verify your email </div>';
                                    }
                                }
                            ?>

              <!-- fieldsets -->
              <fieldset>
                <h2 class="fs-title" style="font-family: 'Open Sans', sans-serif;">Sign In</h2>
                <h3 class="fs-subtitle" style="font-family: 'Open Sans', sans-serif;">Enter the details to sign in</h3>
                <input type="email" name="user_email" placeholder="Email" required>
                <!-- <input type="text" placeholder="test123"> -->
                <input type="password" name="user_password" placeholder="Password" required />

               <input type="submit" name=""  class="next action-button" value="SUBMIT" required />
                <p>Don't have an account? <a href="./signUp.php" style="text-decoration: none; color:#53a846;"><strong>Register here</strong></a></p>
                <p>Forgot Password? <a href="./resetpassword.php" style="text-decoration: none; color:#53a846;"><strong>Click here</strong></a></p>
              </fieldset>

            </form>
        </div>
        </div>
        <!-- End Main Content Wrapper -->
    </div>
    <!-- End Main Wrapper -->
    <?php include 'includes/footer.php' ?>
    <style>
       .footer {
       left: 0;
       bottom: 0;
       width: 100%;
       background-color:#333;
       color: white;
       text-align: center;
       }
    </style>
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
