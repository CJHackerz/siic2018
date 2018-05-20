

  <?php
    include './process/connect.php';
    include './process/utils.php';
    $user = get_user();

    $sql = "SELECT * from users where email = '$user'";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

        // Get user profile details
        $sql = "SELECT * from user_profiles where email = '$user'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        $profile_name           =   $row['name'];
        $profile_register       =   $row['register_no'];
        $profile_department     =   $row['dept'];
        $profile_year           =   $row['year'];
        $profile_description    =   $row['description'];
        $profile_avatar         =   $row['avatar'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="img/favicon.ico">
    <title>SIIC - Profile</title>

     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- All STYLESHEET CSS -->
    <link rel="stylesheet" href="css/element.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="css/styleprofile.css"> 
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <style media="screen">
        h4 > a, .portfolio-category > li > a {
            color: #fff;
        }
        body{
        background-color: #f4f9fe;
    }


    </style>
  

<body>
   <?php include 'includes/nav.php' ?> 
  

 <nav class="w3-sidebar w3-bar-block  w3-collapse w3-top" style="position: absolute;z-index:3;width:300px;height:100%; background-color:#F4F9FE ;padding-top: 90px;" id="mySidebar1">

  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close1()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    
  </div>
  <div class="w3-container w3-row" style="font-size:12px;">
    <div class="w3-col s4" style="margin-left:20%;">
      <img src="cbo.jpg" class="w3-circle w3-margin-right" style="width:130px;">
    </div>
    </div> 
     <br>
    <div class="w3-bar-block" style="font-size:18px;">
      <span style="margin-left:8%">Welcome, <strong>Mike</strong></span><br><br>
      <span style="margin-left:6%"><button class="button active" onclick="joinTeam()">Join Team</button>
    </div>
  <br>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block" style="font-size:18px;">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>

    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i> About</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i> Project </a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Teams</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Startup</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Your Request</a>

  </div>
</nav>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br><br>
<br>
<br><br>
<br>
<br>
<br>

<br><br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>

   


<?php include 'includes/footer.php' ?>
<script type="text/javascript" src="js/hp_js.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/minix-map.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
  
  

</script>
</body>
</html>