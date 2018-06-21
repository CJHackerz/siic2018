<?php
    include './process/connect.php';
    include './process/utils.php';

    include './includes/nav.php';


    // session_start();

    if($_SESSION['team'] != 'true') {
        echo "Not a valid account";
        die();
    }

    $uid = $_SESSION['user_id'];
    $sql = "SELECT * from teams where team_id = '$uid'";

    $result = $conn->query($sql);

    if($result->num_rows == 0) {
        echo "Team not found";
        die();
    }

    $row = $result->fetch_assoc();

    $team_name = $row['team_name'];
    $team_desc = $row['description'];
    $website = $row['website'];
    $fb = $row['fb'];
    $contact = $row['contact'];

?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edit Profile</title>
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
        background-color: #f4f9fe;
    }
        .personal-info{
            align:center;
        }

@media only screen and (min-width: 800px) {
    .personal-info{
        padding-left:15%;
    }
    .image{
      padding-left:40%;
    }

}

@media only screen and (min-width: 800px) {
    .personal-info{
        padding-left:15%;
    }
    .image{
      padding-left:40%;
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
                                <h2>Edit Team Profile<span>.</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






      <!-- edit form column -->
      <div class="col-md-9 personal-info">


        <form class="form-horizontal" role="form" action="./process/process_edit_profile.php" enctype="multipart/form-data"  method="post">




          <div class="form-group">
            <label class="col-lg-3 control-label">Team/Startup Name</label>
            <div class="col-lg-8">
              <input class="form-control" type="text"  name="team_name" value="<?php echo $team_name ?>">
            </div>
          </div>
          <!-- <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div> -->
          <div class="form-group">
            <label class="col-lg-3 control-label">Website link</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="team_website" value="<?php echo $website ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Facebook link</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="team_fb" value="<?php echo $fb ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Contact no</label>
            <div class="col-lg-8">
              <input class="form-control" name="team_contact" type="text" value="<?php echo $contact ?>" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Description:</label>
            <div class="col-lg-8">
              <small style="color:#666;">Write about your teams history, goals and achievements</small>
            <textarea cols="80" rows="10" class="form-control" name="team_desc" id="team_desc" value="<?php echo $team_desc ?>"></textarea>
          </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
<hr>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

  <!-- footer -->
  <?php
            include './includes/footer.php'
  ?>
</body>
   <!-- ALL JQUERY  -->
   <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdRm-dm4ImhzWxMOy1_TyY6cQ3ZnVpw9E"></script>
    <script src="js/minix-map.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>




</html>
