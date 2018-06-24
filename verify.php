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
            <form role="form" style="margin-top:15%;" class="new_user" id="new_user" action="./process/process_verify.php" enctype="multipart/form-data" accept-charset="UTF-8" method="post">
              <div id="page-content-wrapper">
                <?php
                                  if(isset($_GET['error'])) {
                                      if($_GET['error'] == 'pass_match') {
                                          echo '<div class="alert alert-danger" role="alert">Username or Password incorrect </div>';
                                      }

                                  }
                              ?>
         <?php
         if($_SERVER['REQUEST_METHOD'] == 'GET') {
             $authkey    = $_GET['authkey'];
             $uid        = $_GET['uid'];
             if(isset($_GET['reset'])) {
                 $result = $conn->query("SELECT * from users where authkey = '$authkey' and uid = '$uid'");

                 if($result->num_rows > 0) {
                     ?>
                     <div class="container">
                         <div class="row">
                             <div class="col-md-6 col-md-offset-3">
                                 <div class="panel panel-default devise-bs">
                                     <div class="panel-body">
                                         <h1>Reset Password</h1>
                                         <label>Enter New password</label>
                                         <input type="password" id="pass1" class="form-control"></input>
                                         <label>Retype password</label>
                                         <input type="password" id="pass2" class="form-control"></input>

                                         <input type="button" value="Reset Password" id="reset_sub" class="btn btn-primary rightBtn" />

                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <?php
                 }

             } else {
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
         }
         else {
             header('Location ./404.php');
         }

         ?>


            </form>
            </div>

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

<input type="hidden" id="uid" value="<?php echo $uid;?>">
<input type="hidden" id="auth" value="<?php echo $authkey;?>">

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
    <script src="js/sweetalert.min.js"></script>
    <script src="js/css3-animate-it.js"></script>
    <script src="js/sidenav.js"></script>

    <script type="text/javascript">

        $("#reset_sub").click(function() {
            var uid = $("#uid").val();
            var key = $("#auth").val();

            var newpass = $("#pass1").val();
            var retype = $("#pass2").val();

            if(newpass != retype) {
                swal('Passwords do not match','', "error");
            } else {
                $.ajax({
                    type : 'POST',
                    url:  './process/reset_pass.php',
                    dataType : 'json',
                    data:  {
                        uid     : uid,
                        key     : key,
                        newpass : newpass
                    },
                    error : function(XMLHttpRequest, textStatus, errorThrown) {
                    alert(errorThrown); },
                    success : function(response) {
                        console.log(response);
                        if(response.status == 200) {
                            swal('Password has been reset', '', 'success');
                        } else if(response.status == 400) {
                            swal('Password reset fail', 'This link has already been used', 'error');
                        }
                    }
                });
            }
        });
    </script>
</body>

</html>
