<?php
    include './process/connect.php';
    include './process/utils.php';
    $user = get_user();
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Announcement Form|SIIC</title>

    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/nivo-lightbox.css" rel="stylesheet" />
    <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="css/animations.css" rel="stylesheet" /><link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link href="css/animations.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
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
<style>
body{
  background-color: #42cbf4;
}

 @media only screen and (max-width: 800px) {
    .upload-picture{
        padding-right:10%;
        padding-left:5%;
    }
    .new_user{
        padding-bottom:20%;
    }

}

@media only screen and (min-width: 800px) {
    .upload-picture{
        padding-right:67%;
    }
}
   </style>

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
    <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
        <link rel="icon" href="./favicon.ico" type="image/x-icon">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" style="padding: 0px;">
  <  <div id="wrapper">
        <div class="overlay"></div>-->
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
<center> <h4></h4> </center>
<center style="margin-top: -10px;"><hr></center>
<div style="padding: 10px;" class="researchClass">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default devise-bs">
                  <!--  <div class="panel-body">
                        <form role="form" class="new_user" id="new_user" action="./process/process_announce.php" enctype="multipart/form-data" accept-charset="UTF-8" method="post">



                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="profile_name">Name</label><br/>
                                <input class="form-control" type="text" name="profile_name" id="profile_name" required/><br/>
                            </div>


                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="title">Title</label><br/>
                                <input type="text" class="form-control" rows="5" columns="5" name="title" id="profile_title" required/><br/>
                            </div>


                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="profile_desc">Description of the announcement/ Message you want to put up</label><br/>
                                <textarea class="form-control" type="textarea" rows="5" columns="5" name="profile_desc" id="profile_name" required/></textarea><br/>
                            </div>
                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <label for="project_bp">Image if any (Maximum size of 2MB)(JPEG, JPG, PNG)</label><br/>
                                <input type="file" accept=".jpeg, .jpg, .png" name="project_bp" id="profile_avatar"/>
                            </div>

                            <?php
                                if(isset($_GET['error'])) {
                                    if($_GET['error'] == 'ext') {
                                        echo '<div class="alert alert-danger" role="alert">Invalid Extension </div>';
                                    }
                                    if($_GET['error'] == 'size') {
                                        echo '<div class="alert alert-danger" role="alert">Size of the file should be less than 2 mb </div>';
                                    }
                                }
                            ?>

                            <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">

                                <input type="submit" name="commit" value="Submit" class="btn btn-primary rightBtn" />
                            </div>
                        </form>
                    </div>-->









                </div>
            </div>




        <div id="msform2">
        <form role="form" class="new_user" id="new_user" action="./process/process_register.php" enctype="multipart/form-data" accept-charset="UTF-8" method="post">
          <!-- progressbar -->

          <!-- fieldsets -->
          <fieldset >
            <h2 class="fs-title">Create your announcement</h2>

            <input type="text" name="profile_name" id="profile_name" placeholder="Name" required>
            <!-- <input type="text" placeholder="test123"> -->
          <!--  <input type="text" name="profile_desc" id="profile_register" placeholder="Registration Number" required />-->
          <input type="text" name="title" id="profile_title" placeholder="Title" required>

            <textarea class="form-control" type="textarea" rows="5" columns="5" name="profile_desc" id="profile_name" required/>Description of the announcement/ Message you want to put up</textarea>



            <label for="form-control">Image if any (Maximum size of 2MB)(JPEG, JPG, PNG)</label><br/>
            <input type="file" accept=".jpeg, .jpg, .png" name="project_bp" id="profile_avatar"/>
            <input type="button" name="" class="next action-button" value="Submit" required />

          </fieldset>

        </form>
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
