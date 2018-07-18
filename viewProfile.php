<?php
    include './process/connect.php';
    include './process/utils.php';
    $user = get_user();
    $user_email = $_GET["uid"];
    if($user != $user_email)
    {
      header('Location: ./profile.php');
    }



    $sql = "SELECT * from user_profiles where email = '$user_email'";

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
      <title>Profile</title>
      <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
      <!-- All STYLESHEET CSS -->
      <link rel="stylesheet" href="css/element.css">
      <style media="screen">
         .ti-arrow-up:before {
         content: none;
         }
      </style>
      <!-- css -->
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
      @media only screen and  (max-width: 900px){

.cls{width:100%;}

      }
         .but{
         border-bottom: 3px solid #F5BA54;
         padding-bottom: 12px;
         }
         .rig{font-size: 18px;
         }
         .centre{
         padding-left: 45%;
         }
         .centre1{margin-left:15.5%;}
         .centre2{padding-left:43%;}
         .res1{margin-left: 38%;}
         @media only screen and  (max-width: 900px){
         .centre{
         padding-left: 32%;    }
         .centre1{margin-left:2%;}
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
         .centre1{padding-left: 0%;
         margin-left: -0%;}
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
         ul, p{
         color: #000;
         }
      </style>
   </head>
   <?php
      require "includes/nav.php";
      ?>
   <!-- /Navigation -->
   <div class="main-wrapper">
   <div align="center">
      <ul style="padding-top: 20vh;width: 100%;">
         <img id="st" style="height: 150px; width: 150px;" class="img-thumbnail" src="./img/profiles/<?php echo $profile_avatar;?>" alt="Profile Image" />
      </ul>
   </div>
   <br>
   <div align="center">
      <ul  style="font-size: 20px; font-family: 'Amiko';"><strong><?php echo $profile_name; ?></strong></ul>
      <br>
   </div>
   <br>
   <div class="tab-wrap centre1" style="padding-top: 15vh; padding-left:20%;">
      <div class="tab-label-content " id="tab1-content" >
         <label for="tab1" class="rig"><a data-toggle="pill" class="xyz but" href="#menu2" >About</label></a>
         <div class="tab-content"></div>
      </div>
      <div class="tab-label-content " id="tab2-content" >
         <label for="tab2" class="rig"><a data-toggle="pill" class="xyz"  href="#menu3">Teams</label></a>
         <div class="tab-content"></div>
      </div>
      <!--  <div class="slide"></div> -->
   </div>
   <div class="container cls" >
   <!-- <div class="panel panel-default"  > -->
      <div class="panel-body">
         <div class="tab-content">
            <div id="menu2" class="tab-pane fade in active">
               <div class="panel panel-info">
                  <div class="panel-heading"><strong>Your Details</strong></div>
                  <div class="panel-body">
                     <?php
                        $sql = "SELECT * from user_profiles where email = '$user_email'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $dept=$row['dept'];
                        $year=$row['year'];
                        $address=$row['address'];
                        $skills=$row['skills'];
                        $hobbies=$row['hobbies'];
                        $achievements=$row['achievements'];
                        $experience=$row['experience'];
                        $description=$row['description'];
                        echo "<p>Department : $dept</p>";
                        echo "<p>Year : $year</p>";
                        echo "<p>Address : $address</p>";
                        echo "<p>Skills : $skills</p>";
                        echo "<p>Hobbies : $hobbies</p>";
                        echo "<p>Achievements : $achievements</p>";
                        echo "<p>Experience : $experience</p>";
                         echo "<p>Description : $description</p>";


                        ?>
                  </div>
               </div>
               <!--
                  <div id="menu3" class="tab-pane fade">

                  <br><br><br>
                  <div class="row">
                   <div id="">

                   </div>
                  </div>
                  <br><br>
                  </div> -->
            </div>
            <div id="menu3" class="tab-pane fade ">
               <div class="panel panel-info">
                  <div class="panel-heading"><strong>Joined Teams</strong></div>
                  <div class="panel-body">
                     <?php
                        $user_id = $_SESSION['user_id'];
                        $sql = "SELECT  * from teams INNER JOIN team_members ON teams.team_id=team_members.team_id and team_members.uid='$user_id' and team_members.status='accepted'";
                        // $sql = "SELECT * from teams where type = 'team'";
                        // $sql1= "SELECT * from team_members where uid = '$user_id'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo        ' <div class="row-teams">
                                <div class="col-md-3 col-sm-6" style="padding-bottom:30px;">
                                    <article class="blog-post">
                                        <div class="post-thumbnail">
                                            <a href="./teampage.php?id=' . $row['team_id'] . '">
                                                <img class="img-responsive" src="./teams/img/' . $row['logo'] . '" alt="">
                                        </div>
                                        <div class="post-content">
                                            <div class="post-content-inner" style="width:100%; height:5rem;">
                                                <center><h3 ><a href="#">'.$row['team_name'].'</a></h3></center>
                                            </div>
                                        </div>
                                            </a>
                                    </article>
                                </div>';
                            }
                        }


                    else
                    {
                      echo "<center>No teams joined yet</center>";
                    }
                    ?>

                 </div>
             <!-- </div> -->
           </div>
               <!--
                  <div id="menu3" class="tab-pane fade">

                  <br><br><br>
                  <div class="row">
                   <div id="">

                   </div>
                  </div>
                  <br><br>
                  </div> -->
            </div>
         </div>
      </div>
</div>

<?php include 'includes/footer.php';?>
   <!-- <input type="hidden" id="uid" value="<?php echo $user;?>"> -->
   <!-- wrapper ends -->
   <!-- Core JavaScript Files -->
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
      function viewInstructions() {
              swal("Congratulations!", "Your idea has been submitted. Contact +91 8148606827", 'info');
          }
   </script>
   </script>
   <!-- nav bar drop down script -->
   <script src="js/plugins.js"></script>
   </body>
</html>
