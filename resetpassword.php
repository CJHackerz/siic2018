<?php
    require './vendor/autoload.php';
    use Mailgun\Mailgun;

    include './process/connect.php';
    include './process/utils.php';

    session_start();
    if(isset($_SESSION['user'])) {
        header('Location: ./profile.php');
    }


    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $reset = false;

        $reset_email = test_input($_POST['user_email']);

        $result = $conn->query("SELECT * FROM users where email = '$reset_email'");
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $reset_key = md5(uniqid());
            if($conn->query("INSERT INTO user_resets(email, reset_key) VALUES('$reset_email', '$reset_key')")){

                # Instantiate the client.
                $mgClient = new Mailgun('key-28f57d982d256aa39f2fa195678151b3');
                $domain = "mail.srmiic.com";

                $result = $mgClient->sendMessage($domain, array(
                    'from'    =>    'SRMIIC NoReply <noreply@srmiic.com>',
                    'to'      =>    'Hello User <' . $reset_email . '>',
                    'subject' =>    'Reset Password',
                    'html'    =>    '<a href="www.srmiic.com/process_resetpassword.php?authkey=' . $reset_key . '&uid=' . $row['uid'] . '&reset=true">Click here to change your password</a>'
                ));

                $reset = true;
            }

        }
    }
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Reset Password</title>
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
        background-color:  #fefdf4;
    }
        .personal-info{
            align:center;
        }



@media only screen and (max-width: 800px) {
    .container-fluid{
        padding-left:20%;
        padding-right:20%;
    }
}
.ti-arrow-up:before {
    content: none;
}

    </style>
</head>

<body>
<!-- NAV BAR -->
    <?php
        require "process/connect.php";
        include './includes/nav.php';
    ?>
<!-- NAV BAR ENDS -->
<div class="main-content-wrapper">
    <div id="about" class="content-section-area pt-120 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <div class="main-heading-content text-center">
                        <h2>Reset Password<span>.</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Start Main Wrapper -->
    <div class="container">

        <div class="panel panel-default">
        <div class="panel-body">
            <form role="form" class="new_user" id="new_user" action="./resetpassword.php" accept-charset="UTF-8" method="post">
                <?php
                    if(isset($reset)) {
                        if($reset == true) {
                            echo '<div class="alert alert-success" role="alert">An Email has been sent to your account</div>';
                        } else {
                            echo '<div class="alert alert-danger" role="alert">Invalid email </div>';
                        }
                    }
                ?>
                <div class="form-group">
                    <label for="user_email">Email <span class="required"></span></label>
                    <input autofocus="autofocus" class="form-control inputBox" type="email" value="" name="user_email" id="user_email" style="border: 1px solid #EEAC58" required/>
                </div>
                <center><input type="submit" value="Reset" class="btn btn-primary rightBtn" /></center>
            </form>
        </div>
    </div>
        <!-- End Main Content Wrapper -->
    </div>
    <!-- End Main Wrapper -->
    <!-- ALL JQUERY  -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdRm-dm4ImhzWxMOy1_TyY6cQ3ZnVpw9E"></script>
    <script src="js/minix-map.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <?php
         include './includes/footer.php'
     ?>
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
     </style>
</body>
</html>
