<?php
    include './process/connect.php';
    include './process/utils.php';

    $user = get_user();
?>

<!doctype html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>New Team|SIIC</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon Icon Add -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.html">
    <!-- All STYLESHEET CSS -->
    <link rel="stylesheet" href="css/element.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <style>
    body{
    background-color:#fefdf4;
    }
        .personal-info{
            align:center;
        }

        @media only screen and (min-width: 800px) {
    .file_input {
        padding-left:12rem;
    }
}


@media only screen and (max-width: 800px) {
    .file_input {
        padding-left:3rem;
    }
}

@media only screen and (max-width: 800px) {
    .create-button{
        padding-right:25%;
    }
}
    </style>
</head>

<body>
<!-- NAV BAR -->
    <?php
        include './includes/nav.php';
    ?>
<!-- NAV BAR ENDS -->

    <!-- Start Main Wrapper -->
    <div class="main-wrapper">


        <!-- Start Main Content Wrapper -->
        <div class="main-content-wrapper">
            <div id="about" class="content-section-area pt-120 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="main-heading-content text-center">
                                <h2>New Team<span>.</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- FORM -->
        <div class="col-md-8 personal-info">

        <form class="form-horizontal new_research" id="new_research" enctype="multipart/form-data" action="./dev/admin/process/process_new_team.php" accept-charset="UTF-8" method="post">
      
        <?php
                                if($_SERVER['REQUEST_METHOD'] == 'GET') {
                                    if(isset($_GET['status'])) {
                                        if($_GET['status'] == 'email_conf') {
                                            echo '<p style="color:red">This Email is already in use</p>';
                                        }
                                    }
                                }
        ?>
          <!-- <div class="form-group">
          <div class="col-lg-5 control-label">
          <label for="">Are you registering as a Team or a Startup?</label>
                                <br>
                                <label class="radio-inline">
                                    <input type="radio" name="userType" value="team" required> Team
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="userType" value="startup" required> Startup
                                </label>
          </div>
          </div> -->

        <div class="form-group">
            <label class="col-lg-3 control-label" for="team_logo">Team/Startup Logo</label>
                <input class="col-lg-3" type="file" name="team_logo" id="team_logo"/>
        </div>



          <div class="form-group">
            <label class="col-lg-3 control-label" for="team_name">Team/Startup name</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="team_name" id="team_name" placeholder="Enter Title" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Team Id</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="team_id" id="team_id" placeholder="Enter Team ID" required>
            </div>
          </div>



          <div class="form-group">
            <label for="team_desc" class="col-lg-3 control-label">Description</label>
            <div class="col-lg-8">
            <textarea cols="80" rows="10" class="form-control bootsy_text_area" name="team_desc" id="team_desc" placeholder="Write about your teams history, goals and achievements" required></textarea>
            </div>
            </div>

            <div class="form-group">
            <label class="col-lg-3 control-label" for="team_website">Website Link</label>
            <div class="col-lg-8">
              <input class="form-control" name="team_website" id="team_website" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Facebook Link</label>
            <div class="col-lg-8">
              <input class="form-control" name="team_fb" id="team_fb" type="text" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Contact no</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="team_contact" id="team_contact" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Team/Startup Email</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" placeholder="This is the email you will use to access your team account"name="team_email" id="team_email" value="" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Password</label>
            <div class="col-lg-8">
              <input class="form-control"  type="password" name="team_password" id="team_password" value="" required/>
            </div>
          </div>

          </div>


          <div class="form-group text-center create-button" style="padding-left:25%">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-8">
              <input type="Submit" name="commit" value="Create" class="btn btn-primary" value="Create">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
<hr>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous">
</script>

         <!--form ends-->

       <?php
            include './includes/footer.php'
        ?>
        <!-- End Main Content Wrapper -->
    </div>
    <!-- End Main Wrapper -->
    <!-- ALL JQUERY  -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdRm-dm4ImhzWxMOy1_TyY6cQ3ZnVpw9E"></script>
    <script src="js/minix-map.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
