<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIIC</title>

    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/nivo-lightbox.css" rel="stylesheet" />
    <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="css/animations.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="./css/sweetalert.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

</head>
<style type="text/css">
  .blogHead{
    background: url(img/blog-bg.jpg);
    max-height:304px;
    width: 100%;
    text-align: center;
    color:white;
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
    if(isset($_GET['reset'])) {
        $result = $conn->query("SELECT * from user_resets where reset_key = '$authkey' and email = '$uid'");

        if($result->num_rows > 0) {
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-default devise-bs">
                            <div class="panel-body">
                                <h1>Reset your password</h1>
                                <label>Enter New password</label>
                                <input type="password" id="pass1" class="form-control"></input>
                                <label>Repeat password</label>
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

?>

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
