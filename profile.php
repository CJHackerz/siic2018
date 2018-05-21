

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
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
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
      <img class="img-thumbnail" src="./profiles/img/<?php echo $profile_avatar;?>" alt="Profile Image" />
    </div>
    </div>
     <br>
    <div class="w3-bar-block" style="font-size:18px;">
      <span style="margin-left:8%">Welcome, <strong style="padding-top:3vh;"><?php echo $profile_name; ?></strong></span><br><br>
      <span style="margin-left:6%"><button class="btn btn-primary rightBtn" onclick="location.href='./teams.php'">Join Team</button>
    </div>
  <br>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block" style="font-size:18px;">
      <style media="screen">
          .fas{
              padding: 7px;
          }
      </style>
    <a href="./editProfile.php" class="w3-bar-item w3-button w3-padding" ><i class="fas fa-user-edit"></i> Edit Profile</a>
    <a id="viewProfile" onclick="viewProfile()" class="w3-bar-item w3-button w3-padding" ><i class="fas fa-info"></i> About</a>
    <a data-toggle="pill" class="w3-bar-item w3-button w3-padding" href="#menu2"><i class="fas fa-file"></i> Projects </a>
    <a class="w3-bar-item w3-button w3-padding"><i class="fas fa-users"></i>  Teams</a>
    <a data-toggle="pill"  class="w3-bar-item w3-button w3-padding" href="#menu3"><i class="fas fa-briefcase"></i>  Startup</a>
    <a data-toggle="pill"  class="w3-bar-item w3-button w3-padding" href="#menu4"><i class="fas fa-hand-pointer"></i> Your Request</a>


  </div>
</nav>

<center>
  <ul class="nav nav-pills padInLaptop" style="padding-top: 15vh;">

       <!--  <li class="active"><a data-toggle="pill" href="#menu2">Project</a></li>
        <li><a data-toggle="pill" href="#menu3">Startups</a></li>
        <li><a data-toggle="pill" href="#menu4">Your Requests</a></li> -->
        <!-- <li><a data-toggle="pill" href="#menu5" onclick="loadNotifs()">Notifications</a></li> -->
    </ul>



    <br>

    <div class="container container-fluid">
        <div class="panel panel-default" style="margin-left: 22%; max-width: 900px;">
            <div class="panel-body">
                <div class="tab-content">
                    <!-- <div id="menu1" class="tab-pane tab-pane fade in active">

                        <a class="btn btn-primary rightBtn" data-method="get" href="./newResearch.php">Apply for Research</a>
                        <br><br><br>
                        <div class="row">
                            <div id="researchList"> -->
                                <!--  Research list -->
                            <!-- </div>
                        </div>
                        <br><br>

                    </div> -->


                    <div id="menu2" class="tab-pane fade in active">
                        <!--<h3>Project</h3>-->

                        <a class="button active" data-method="get" href="./newProject.php">Apply for Project</a>
                        <br><br><br>
                        <div class="row">
                            <div id="projectList">
                                <!-- Project list -->
                            </div>
                        </div>
                        <br><br>
                    </div>

                    <div id="menu3" class="tab-pane fade">
                    <!--<h3>Startups</h3>-->

                        <a class="button active" data-method="get" href="./newStartup.php">Apply for Startup</a>
                        <br><br><br>
                        <div class="row">
                            <div id="startupList">
                                <!-- Startup list -->
                            </div>
                        </div>
                        <br><br>
                    </div>

                    <div id="menu4" class="tab-pane fade">

                        <a class="button active" data-method="get" href="./inventory.php">New Request</a>
                        <br>

                        <br><br>
                        <p><h6 style="text-align:center;">No Requests</h6></p>
                        <br><br>
                    </div>

                    <!-- <div id="menu5" class="tab-pane fade">

                        <br><br><br>

                        <div id="notifList">

                        </div>
                    </div> -->
            </div>
        </div>
    </div>
</div>
</div>

</center>

<!-- <?php include 'includes/footer.php' ?> -->

<script type="text/javascript" src="js/hp_js.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/minix-map.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <input type="hidden" id="uid" value="<?php echo $user;?>">
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

    <script src="js/sidenav.js"></script>

    <?php
        if(isset($_GET['submission'])) {
            if($_GET["submission"] === 'success') {
            ?>
        <script>
            swal("Success", "Your submission has been accepted", "success")
        </script>
    <?php
            }
        }
    ?>

    <script>
        $( document ).ready(function() {
            var uid = $("#uid").val();
            // Research list
            $.ajax({
                type : 'GET',
                url:  './process/get_research.php',
                dataType : 'html',
                data:  {
                    id : uid
                } ,
                error : function(XMLHttpRequest, textStatus, errorThrown) {
                alert('error'); },
                success : function(data) {
                    $("#researchList").html(data);
                }
            });

            // Project list
            $.ajax({
                type : 'GET',
                url:  './process/get_project.php',
                dataType : 'html',
                data:  {
                    id : uid
                } ,
                error : function(XMLHttpRequest, textStatus, errorThrown) {
                alert('error'); },
                success : function(data) {
                    $("#projectList").html(data);
                }
            });

            // Startup List
            $.ajax({
                type : 'GET',
                url:  './process/get_startup.php',
                dataType : 'html',
                data:  {
                    id : uid
                } ,
                error : function(XMLHttpRequest, textStatus, errorThrown) {
                alert('error'); },
                success : function(data) {
                    $("#startupList").html(data);
                }
            });
        });

        // User notifications
        // function loadNotifs() {
        //     var uid = $("#uid").val();
        //     $.ajax({
        //         type: "POST",
        //         url: "./process/load_notifications.php",
        //         data: {
        //             id  :   uid
        //         },
        //         beforeSend: function() {
        //             $('#notifList').html('<center>loading...</center>');
        //         },
        //         dataType: "html",
        //         success: function(data) {
        //             $("#notifList").html(data);
        //         }
        //     });
        // }

        function viewInstructions() {
            swal("Congratulations!", "Your idea has been accepted. Contact +91 8148606827", 'info');
        }
    </script>

    <script type="text/javascript">
        // View Profile click
        function viewProfile() {
            var uid = $("#uid").val();
            window.location = "./profile.php?uid=" + uid;
        }
    </script>

</script>
</body>
</html>
