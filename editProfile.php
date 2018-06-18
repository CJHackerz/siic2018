<?php
    include './process/connect.php';
    include './process/utils.php';

    $user = get_user();
    $sql    = "SELECT * from user_profiles WHERE email='$user'";
    $result = $conn->query($sql);
    $row    = $result->fetch_assoc();
    $name   = $row['name'];
    $email  = $row['email'];
    $regno  = $row['register_no'];
    $dept   = $row['dept'];
    $year   = $row['year'];
    $dob    = $row['dob'];
    $address= $row['address'];
    $skills = $row['skills'];
    $hobbies= $row['hobbies'];
    $achiev = $row['achievements'];
    $exper  = $row['experience'];
    $desc   = $row['description'];
    $profile_avatar = $row['avatar'];
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edit Profile|SIIC</title>
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
                                <h2>Edit Profile<span>.</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






      <!-- edit form column -->
      <div class="col-md-9 personal-info">


        <form class="form-horizontal" role="form" action="./process/process_edit_profile.php" enctype="multipart/form-data"  method="post">

           <div class="form-group image">
           <div class="col-md-8">
           <div class="text-center">
          <img src="./img/profiles/<?php echo $profile_avatar;?>" style="height: 100px; width: 100px;" class="avatar img-circle" alt="avatar" >
          <br><br>
          <h6>Upload a different photo</h6>

          <input type="file" class="form-control">
            </div>
          </div>
          </div>


          <div class="form-group">
            <label class="col-lg-3 control-label">Full name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text"  name="profile_name" value="<?php echo $name ?>">
            </div>
          </div>
          <!-- <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div> -->
          <div class="form-group">
            <label class="col-lg-3 control-label">Register Number:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="profile_register" value="<?php echo $regno ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Department:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="profile_department" value="<?php echo $dept ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $email ?>" disabled>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Year:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="profile_year" value="<?php echo $year ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Date Of Birth:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="startup_datetime" value="<?php echo $dob ?>" disabled>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="profile_address" value="<?php echo $address ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Skills:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="profile_skills" value="<?php echo $skills ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Hobbies:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="profile_hobbies" value="<?php echo $hobbies ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Achievements:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="profile_achievements" value="<?php echo $achiev ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Experience:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="profile_experience" value="<?php echo $exper ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Description:</label>
            <div class="col-lg-8">
            <!-- <textarea cols="80" rows="10" class="form-control" name="profile_description" id="profile_description" value="<?php echo $desc ?>"></textarea> -->
            <input class="form-control" type="text" style="height:150px;width:350px;" name="profile_description" value="<?php echo $desc ?>">
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

   <!-- ALL JQUERY  -->
   <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdRm-dm4ImhzWxMOy1_TyY6cQ3ZnVpw9E"></script>
    <script src="js/minix-map.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
