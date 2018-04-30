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
            $reset_key = md5(uniqid());
            if($conn->query("INSERT INTO user_resets(email, reset_key) VALUES('$reset_email', '$reset_key')")){

                # Instantiate the client.
                $mgClient = new Mailgun('key-28f57d982d256aa39f2fa195678151b3');
                $domain = "mail.srmiic.com";

                $result = $mgClient->sendMessage($domain, array(
                    'from'    =>    'SRMIIC NoReply <noreply@srmiic.com>',
                    'to'      =>    'Hello User <' . $reset_email . '>',
                    'subject' =>    'Reset Email',
                    'html'    =>    '<a href="www.srmiic.com/verify.php?authkey=' . $reset_key . '&uid=' . $reset_email . '&reset=true">Click here to change your password</a>'
                ));

                $reset = true;
            }

        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign In|SIIC</title>

    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/animations.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" style="padding: 0px;">
    <div id="wrapper">
        <div class="overlay"></div>
<?php
require "process/connect.php";
require "includes/nav.php";
?>

    <!-- /Navigation -->
<div id="page-content-wrapper">
<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
<style>
 .researchClass{
  font-family: 'Dosis', sans-serif;
 }
  .form-control{
    font-size: 14px;
    line-height: 1.6em;
    border: 1px solid #eee;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 2px;
    border-left: 4px solid #ffc400;
  }

  .form-control:focus{

    background-color: #F5F5F5;
    border: 1px solid #ffc400;
    border-left: 4px solid #ffc400;
    box-shadow:none;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: border 0.5s; /* Safari */
    transition: border 0.5s;
  }
  hr{
    width: 10%;
    height: 8px;
    background-color: #ffc400;
  }
  textarea:focus, input:focus{
    outline: none;
}

.rightBtn{
  float: right;
  background-color: #ffc400;
   border: 2px solid #ffc400;
}
.rightBtn:active{
  background-color: #ffab00;
  border: 2px solid #ffc400;
}
.rightBtn:hover{
  background-color: #ffab00;
  border: 2px solid #ffc400;
}

footer{
  display: none;
}
.inputBox{
  height: 40px;
  font-size: 15px;
}

.inlineTxt{
  display: inline;
}
.rightInlineTxt{
  float: right;
}
</style>
<br>
<center> <h4>Reset</h4> </center>
<center style="margin-top: -10px;"><hr></center>

<div style="padding: 10px;" class="researchClass">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default devise-bs">
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
                                <label for="user_email">Email <span class="required">*</span></label>
                                <input autofocus="autofocus" class="form-control inputBox" type="email" value="" name="user_email" id="user_email" required/>
                            </div>
                            <input type="submit" value="Reset" class="btn btn-primary rightBtn" />
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</body>

<?php include 'includes/footer.php';?>
</div><!-- Page content wrapper ends -->
</div><!-- wrapper ends -->
    <!-- Core JavaScript Files -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
	<script src="./js/jquery.sticky.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
	<script src="./js/jquery.scrollTo.js"></script>
	<script src="./js/jquery.appear.js"></script>
	<script src="./js/stellar.js"></script>
	<script src="./js/nivo-lightbox.min.js"></script>

    <script src="./js/custom.js"></script>
	<script src="./js/css3-animate-it.js"></script>
    <script src="contactform/contactform.js"></script>
    <script src="js/sidenav.js"></script>


</html>
