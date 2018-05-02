<?php
    session_start();
    if(isset($_SESSION['user'])) {
        echo $_SESSION['user'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign Up|SIIC</title>

    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/nivo-lightbox.css" rel="stylesheet" />
    <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="css/animations.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
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
<center> <h4>Sign Up <br><br> Become a Mentor</h4> </center>
<center style="margin-top: -10px;"><hr></center>
<div style="padding: 10px;" class="researchClass">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default devise-bs">
                    <div class="panel-body">
                        <form role="form" class="new_user" id="new_user" action="fr2.php" enctype="multipart/form-data" accept-charset="UTF-8" method="post">
                            <?php
                            // alerts
                            if(isset($_GET['error'])) {
                                if($_GET['error'] == 'pass_match') {
                                    echo '<div class="alert alert-danger" role="alert"><center>Password doesnt match</center></div>';
                                } else if($_GET['error'] == 'user_exists') {
                                    echo '<div class="alert alert-danger" role="alert"><center>User already exists</center></div>';
                                } else if($_GET['error'] == 'invalid_email') {
                                    echo '<div class="alert alert-danger" role="alert"><center>Invalid email address. Make sure you DONT add @srmuniv.edu.in to your email</center></div>';
                                }
                            }
                            ?>

                            <!-- <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="profile_avatar">Profile Image (Maximum size of 2MB)(JPEG, JPG, PNG)</label><br/>
                                <input type="file" accept=".jpeg, .jpg, .png" name="profile_avatar" id="profile_avatar"/>
                            </div> -->

                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="profile_name">Email address<span color="red">*<span></label><br/>
                                <input class="form-control" type="text" name="profile_name" id="profile_name" required/><br/>
                            </div>

                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="profile_register">Name</label><br/>
                                <input class="form-control" type="text" name="profile_register" id="profile_register" required/><br/>
                            </div>

                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="profile_department">Employee ID</label><br/>
                                <input class="form-control" type="text" name="profile_department" id="profile_department" required/><br/>
                            </div>

                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="profile_year">Department</label><br/>
                                <input class="form-control" type="number" name="profile_year" min=1 max=5 id="profile_year" required/><br/>
                            </div>

                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="profile_dob">Designation</label><br/>
                                <div class='input-group date col-sm-4' id="profile_dob">
                                    <input name="profile_dob" type='text' class="form-control" required/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>

                            <!-- <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="specialisation">Specialisation</label><br/>
                                <input class="form-control" type="text" name="specialisation" id="specialisation" /><br/>
                            </div> -->

                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="profile_skills">Highest Qualifications</label><br/>
                                <input class="form-control" type="text" name="profile_skills" id="profile_skills" required/><br/>
                            </div>

                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
<<<<<<< HEAD:fr.php
                                <label for="profile_hobbies">Total Years of Experience</label><br/>
                                <input class="form-control" type="text" name="profile_hobbies" id="profile_hobbies" /><br/>
=======
                                <label for="profile_aoi">Areas of interests</label><br/>
                                <input class="form-control" type="text" name="profile_aoi" id="profile_aoi" required/><br/>
>>>>>>> 7ee33431c190d3f53789a2c7a5ce29ba021370f3:mentor_signup.php
                            </div>

                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="profile_startup_exp">Do you have experience in mentoring startup or working with startups?</label><br/>
                                <input class="form-control" type="text" name="profile_startup_exp" id="profile_value_add" required/><br/>
                            </div>

                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="profile_value_add">What kind of value addition you can make to a startup team?</label><br/>
                                <input class="form-control" type="text" name="profile_value_add" id="profile_value_add" required/><br/>
                            </div>

                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="profile_hours">What will be your comfortable hours of mentoring per week?</label><br/>
                                <input class="form-control" type="text" name="profile_hours" id="profile_value_add" required/><br/>
                            </div>

                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="profile_spec_train">Are you interested to take special training to mentor startups?</label><br/>
                                <input class="form-control" type="text" name="profile_spec_train" id="profile_spec_train" required/><br/>
                            </div>
                            <!-- <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="profile_acheivements">Acheivements</label><br/>
                                <input class="form-control" type="text" name="profile_achievements" id="achievements" /><br/>
                            </div> -->

                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
<<<<<<< HEAD:fr.php
                                <label for="phone_number">Contact no</label><br/>
                                <input class="form-control" type="text" name="phone_number" id="phone_number" /><br/>
=======
                                <label for="phone_number">Phone number</label><br/>
                                <input class="form-control" type="text" name="phone_number" id="phone_number" required/><br/>
>>>>>>> 7ee33431c190d3f53789a2c7a5ce29ba021370f3:mentor_signup.php
                            </div>

                            <div class="form-group col-md-7 col-lg-7 col-sm-12 col-xs-12">
                                <label for="user_password">Password (Minimum 6 characters)</label><br />
                                <input class="form-control" type="password" name="user_password" id="user_password" required/>
                            </div>

                            <div class="form-group col-md-7 col-lg-7 col-sm-12 col-xs-12">
                                <label for="user_password_confirmation">Re-enter Password</label>
                                <input class="form-control" type="password" name="user_password_confirmation" id="user_password_confirmation" required/>
                            </div>

                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <input type="submit" name="commit" value="Next" class="btn btn-primary rightBtn" onclick="validator();" />
                            </div>
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

    <script src="js/moment.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <script src="js/sidenav.js"></script>

    <script type="text/javascript">
        $(function () {
            $('#profile_dob').datetimepicker({
                format: 'DD-MM-YYYY',
                useCurrent: true,
                icons: {
                    time        : 'fa fa-clock-o',
                    date        : 'fa fa-calendar',
                    up          : 'fa fa-arrow-up',
                    down        : 'fa fa-arrow-down',
                    previous    : 'fa fa-arrow-left',
                    next        : 'fa fa-arrow-right',
                    today       : 'glyphicon glyphicon-screenshot',
                    clear       : 'fa fa-trash-o',
                    close       : 'fa fa-times'
                }
            });
        });
    </script>

</html>
