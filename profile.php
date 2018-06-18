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
    <style media="screen">
    .ti-arrow-up:before {
        content: none;
    }
    </style>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/tabstyle.css">
    <!-- <link rel="stylesheet" href="css/tabs.scss"> -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/styleprofile.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <style media="screen">
        h4 > a, .portfolio-category > li > a {
            color: #fff;
        }
        body{
        background-color:  #fefdf4;
    }

    }*/
@media only screen and  (max-width: 767px) {
#bt{
    margin-left: 0%;
  }
}
#bt{
    margin-left: 35%;"
}
#st{
            border-radius: 50%;
            border-width: 0px;
}
/* @media only screen and  (max-width: 1024px){
  centre{
    padding-left: 4%;
  }
  centre1{padding-left: 8%;}
} */
    </style>
    <style>
    .but{
       border-bottom: 3px solid #F5BA54;
       padding-bottom: 12px;
     }
     .rig{font-size: 18px;
     }
    .centre{
      padding-left: 45%;
    }
    .centre1{margin-left:27%;}
    .centre2{padding-left:43%;}
    .res1{margin-left: 38%;}
    @media only screen and  (max-width: 900px){
      .centre{
        padding-left: 32%;    }
      .centre1{margin-left:12%;}
      .centre2{padding-left: 24%;}
      .res1{
      width: 100%;
    text-align: center;
  margin-left: 0%;}
  .rig{font-size: 18px;
padding-right: 12px;
  }
    }
    @media only screen and  (max-width: 400px){
      .centre{
        margin-left: -4%;  }
      .centre1{padding-left: 0%;}
      .centre2{margin-left: -4%;}
      .res1{
      width: 100%;
    text-align: center;
    margin-left: 0%;
  }
  .rig{font-size: 16px;
padding-right: 8px;
  }
    }
    </style>

</head>

<body>

   <?php include 'includes/nav.php' ?>




<div class="main-wrapper">
<div align="center">
 <ul style="padding-top: 25vh;width: 100%;">

        <img id="st" style="height: 150px; width: 150px;" class="img-thumbnail" src="./img/profiles/<?php echo $profile_avatar;?>" alt="Profile Image" /></ul>
    </div><br>
      <div align="center">
<ul  style="font-size: 20px; font-family: 'Amiko';"><strong><?php echo $profile_name; ?></strong></ul>
      <br>

  </div><br>
  <div style="margin-bottom:30px;margin-top:-20px;margin-left:9%;">
    <a class="button active res1"  href="./teampage.php">JOIN TEAM</a>
</div>
<div class="tab-wrap centre1" style="padding-top: 15vh;">

    <div class="tab-label-content " id="tab1-content" >
      <label for="tab1" class="rig"><a data-toggle="pill" class="xyz but" href="#menu2" >Project</label></a>
      <div class="tab-content"></div>
    </div>

    <div class="tab-label-content " id="tab2-content" >
      <label for="tab2" class="rig"><a data-toggle="pill" class="xyz"  href="#menu3">Startup</label></a>
      <div class="tab-content"></div>
    </div>



     <div class="tab-label-content" id="tab4-content" style=" width:110%">
      <label for="tab4" class="rig"><a    class="xyz"  href="./editProfile.php"  >Edit Profile</label></a>
      <div class="tab-content"></div>
     </div>

     <div class="tab-label-content" id="tab5-content">
<label for="tab5" class="rig"><a data-toggle="pill" href="#menu5">About</label></a>
        <div class="tab-content"></div>
    </div>

     <div class="tab-label-content" id="tab6-content">

      <label for="tab6" class="rig"><a data-toggle="pill"  href="#menu6">Teams</label></a>
<div class="tab-content"></div>
    </div>

   <!--  <div class="slide"></div> -->

</div>

























    <div class="container">
        <div class="panel panel-default" >
            <div class="panel-body">
                <div class="tab-content">


                    <div id="menu2" class="tab-pane fade in active">
                        <!--<h3>Project</h3>-->

                        <a class="button active res1" data-method="get" href="./newProject.php">Apply for Projects</a>
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

                        <a class="button active res1" data-method="get" href="./newStartup.php">Apply for Startup</a>
                        <br><br><br>
                        <div class="row">
                            <div id="startupList">
                                <!-- Startup list -->
                            </div>
                        </div>
                        <br><br>
                    </div>
                    <!-- </div> -->




                   <div id="menu5" class="tab-pane fade">

                      <!-- <br><br><br> -->
                      <div class="panel panel-info"><!-- <div class="card text-white bg-info mb-3" style="max-width: 18rem;"> -->
                      <div class="panel-heading"><strong>Your Details</strong></div>
                        <div class="panel-body">


                              <?php
                              $sql = "SELECT * from user_profiles where email = '$user'";
                              $result = $conn->query($sql);
                              $row = $result->fetch_assoc();
                              $address=$row['address'];
                              $skills=$row['skills'];
                              $hobbies=$row['hobbies'];
                              $achievements=$row['achievements'];
                              $experience=$row['experience'];
                              $description=$row['description'];
                              echo "<p>Address :$address</p>";
                              echo "<p>Skills :$skills</p>";
                              echo "<p>Hobbies :$hobbies</p>";
                              echo "<p>Achievements :$achievements</p>";
                              echo "<p>Experience :$experience</p>";
                              echo "<p>Description :$description</p>";


                              ?>

                          </div>
                      </div>







              <div id="menu6" class="tab-pane fade">

                      <br><br><br>
                      <div class="row">
                          <div id="">

                          </div>
                      </div>
                      <br><br>
                  </div>



            </div>
        </div>
    </div>
</div>
</div>
<?php include 'includes/footer.php' ?>

<!-- </center> -->

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
            swal("Success", "Your project has been submitted", "success")
        </script>
    <?php
            }
        }
    ?>
    <script>
    var elements = document.getElementsByClassName("xyz");
    for(var i = 0; i < elements.length;i++)
    {
    elements[i].onclick=function(){
    var cur= document.getElementsByClassName("but");
    cur[0].classList.remove("but");
    this.classList.add("but");
    };
    }
</script>

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

        function viewInstructions() {
            swal("Congratulations!", "Your idea has been submitted. Contact +91 8148606827", 'info');
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
<!-- nav bar drop down script -->
<script src="js/plugins.js"></script>
</body>
</html>
