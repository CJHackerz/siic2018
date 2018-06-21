<?php
   include './process/connect.php';
   include './process/utils.php';
     $user = get_user();
   if(isset($_GET["id"])) {
       session_start();
       $team_id = $_GET["id"];
       $sql = "SELECT * from teams where team_id = '$team_id'";
       $result = $conn->query($sql);
       $row = $result->fetch_assoc();
       $team_email     = $row['team_email'];
       $team_name      = $row["team_name"];
       $description    = $row['description'];
       $logo           = $row['logo'];
       $contact        = $row['contact'];
       $website        = $row['website'];
       $fb             = $row['fb'];
       if (strpos($website, 'http') === false) {
           $website = 'http://' . $website;
       }
   } else {
       header('Location ./404.php');
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>SIIC</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

      <!-- All STYLESHEET CSS -->
      <link rel="stylesheet" href="css/element.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <script src="js/vendor/modernizr-2.8.3.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <style>
         .social_media_icons{
         display: none;
         position: absolute;
         bottom: 15px;
         width: 50%;
         left:25%;
         text-align: center;
         opacity: 1;
         /* background-color:grey; */
         height:47px;
         margin-bottom:5px;
         border-radius:5px;
         }
         .social_media_icons{
         display: inline-block;
         }
         .fa-facebook{
         padding-right:20px;
         height:20px;
         }
         .fa-globe{
         padding-left:20px;
         height:20px;
         }
         .fa-linkedin{
         padding-left:10px;
         height:20px;
         }
         .email_number{
         font-size:20px;
         }
         body{
             background-color:#fefdf4;
         }

      </style>
   </head>
   <body>
      <?php include 'includes/nav.php' ?>
      <!-- Page Container -->
      <div class="w3-content w3-margin-top" style="max-width:1400px; position:relative; top:50px;">
      <!-- The Grid -->
      <div class="w3-row-padding" >
         <!-- Left Column -->
         <div class="w3-third">
            <div class="w3-white w3-text-grey w3-card-4" style="border-radius:5px;">
               <div class="w3-display-container" >
                  <ul class="list-group list-group-flush">
                     <li class="list-group-item">
                        <div style="padding: 0px 0px 0px 0px;" align="center" class='team_image_hover'>
                           <img class="img-thumbnail" src="./teams/img/<?php echo $logo; ?>" alt="Team Logo"; height="100px" width="100%">
                           <div style="font-size: 30px; text-align: center;" class='social_media_icons'>
                              <a href="<?php echo $fb; ?>" style="color:#3b5998"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                              <a href="#" style="color:#007bb5;"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                              <a href="<?php echo $website; ?>" style="color:#333;"><i class="fa fa-globe" aria-hidden="true" style="color: #fff;"></i></a>
                              <!--<i class="fa fa-phone" aria-hidden="true"></i>-->
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="w3-container" >
                  <p><i class="fa fa-envelope fa-fw w3-margin-right "style="color:#3A6EE8; margin-top:20px;" ></i><a href="mailto:<?php $team_email; ?>"><?php echo $team_email; ?></a></p>
                  <p><i class="fa fa-phone fa-fw w3-margin-right " style="color:#3A6EE8"></i><?php echo $contact; ?></p>
                  <hr style="border-color:#3A6EE8">
                  <div class="main-heading-content text-center" >
                     <h3><?php echo $team_name;?></h3>
                  </div>
               </div>
            </div>
            <br>
            <!-- End Left Column -->
         </div>


         <!-- Right Column -->
         <div class="w3-twothird" >
            <div class="w3-container w3-card w3-white w3-margin-bottom" style="border-radius:5px;">

              <?php
                 if($_SESSION["team"] == "true") {
                     if($_SESSION['user_id'] == $_GET['id']) {
                         // Show private content
                         ?>


                         <ul class="nav nav-pills padInLaptop">
                            <li class="active"><a data-toggle="pill" href="#about-menu">About</a></li>
                            <!-- <li><a data-toggle="pill" href="#feed-menu">Feed</a></li> -->
                            <li><a data-toggle="pill" href="#notif-menu" onClick="loadNotifs()">Notifications</a></li>
                            <li><a data-toggle="pill" href="#request-menu" onClick="loadRequests()">Requests</a></li>
                            <a href="./editteam.php" style="margin-top:5px;margin-left:10px;" class="btn btn-primary">Edit</a>
                            <!-- <a data-toggle="pill" href="./editteam.php">Edit</a> -->
                         </ul>
                         <div id="about-menu" class="tab-pane tab-pane fade in active">
                         <div class="main-heading-content text-center">
                            <h2 class=" w3-padding-16">Description<span>.</span></h2>
                         </div>
                         <div class="w3-container" style="margin-top:-20px">
                            <p><?php echo $description; ?></p>
                            <hr style="border-color:#3A6EE8">
                         </div>
                       </div>
                       <div id="request-menu" style="margin-top:-100px;" class="tab-pane fade">
                          <div class="row">
                             <div id="requestList" onload="countRequests()">
                                <!-- Notification list -->
                             </div>
                          </div>
                          <br><br>
                       </div>
               <div id="feed-menu" class="tab-pane fade">
                  <div class="row">
                     <div id="feedList" onload="loadFeed()">
                        <!--  Feed list -->
                     </div>
                  </div>
                  <br><br>
               </div>
               <div id="notif-menu" class="tab-pane fade">
                  <div class="row">
                     <div id="notifList" onload="countNotifs()">
                        <!-- Notification list -->
                     </div>
                  </div>
                  <br><br>
               </div>

               <?php
                  }
                  } else {
                  // Show public content
                     if(!empty($_SESSION['user']) && $_SESSION['team'] == 'false') {
                       ?>

                       <div class="main-heading-content text-center">
                          <h2 class=" w3-padding-16">Description<span>.</span></h2>
                       </div>
                       <div class="w3-container" style="margin-top:-20px">
                          <p><?php echo $description; ?></p>
                          <hr style="border-color:#3A6EE8">
                       </div>
                       <?php
                               $sql = "SELECT * from team_members where uid = '" . $_SESSION['user_id'] . "' AND team_id = '$team_id'";
                               $result = $conn->query($sql);
                               if($result->num_rows > 0) {
                                   $rows = $result->fetch_assoc();
                                   if($rows['status'] == 'ACCEPTED') {
                                       echo '<center><button class="button active" onclick="leaveTeam()">Leave</button></center>';
                                   } else {
                                       echo '<center><button class="button active" onclick="joinTeam()">Join</button></center><br>';
                                   }
                               } else {
                                   echo '<center><button class="button active" onclick="joinTeam()">Join</button></center><br>';
                               }
                           }
                           else {
                             echo'
                             <div class="main-heading-content text-center">
                                <h2 class=" w3-padding-16">Description<span>.</span></h2>
                             </div>
                             <div class="w3-container" style="margin-top:-20px">
                                <p>'. $description.' </p>
                                <hr style="border-color:#3A6EE8">
                             </div>';
                           }
                      ?>
               <!-- End Grid -->
            </div>


            <?php
               }
               ?>
         </div>
         <input type="hidden" id="uid" value="<?php echo $_SESSION['user'];?>">
       <input type="hidden" id="tid" value="<?php echo $_GET['id'];?>">

       </div>
       <?php include 'includes/footer.php' ?>
         <!-- End Page Container -->
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
      <script src="js/vendor/jquery-1.12.0.min.js"></script>
      <script src="js/minix-map.js"></script>
      <script src="js/plugins.js"></script>
      <script src="js/main.js"></script>
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <?php
        if(isset($_GET['stat'])) {
            if($_GET["stat"] === 'nc') {
            ?>
        <script>
            swal("Success", "Congratulations you have created a new team!", "success")
        </script>
    <?php
            }
        }
    ?>

    <script>
        $( document ).ready(function() {
            var uid = $("#uid").val();
            var tid = $("#tid").val();
            loadRequests();
        });
        function joinTeam() {
            var uid = $("#uid").val();
            var tid = $("#tid").val();
            $.ajax({
                type: "post",
                url: "./process/join_team.php",
                data: {
                    id: uid,
                    team_id : tid
                },
                dataType: "json",
                success : function(data) {
                    if(data.status == 'success'){
                        swal('Request Sent', '', 'success');
                    }else if(data.status == 'error'){
                        swal('Request Already Sent or You are already a member', '', 'error');
                    }
                }
            });
        }
        // function loadFeed() {
        //     var tid = $("#tid").val();
        //     console.log("Loading feed");
        //     $.ajax({
        //         type: "post",
        //         url: "./process/team/load_feed.php",
        //         data: {
        //             id  :   tid
        //         },
        //         dataType: "html",
        //         success: function(data) {
        //             $("#feedList").html(data);
        //         }
        //     });
        // }
        //
        // function countNotifs() {
        //     console.log('countNotifs : ');
        // }
        //
        // function loadNotfs() {
        //     var tid = $("#tid").val();
        //     console.log("Loading notifications");
        //     $.ajax({
        //         type: "post",
        //         url: "./process/team/load_notifs.php",
        //         data: {
        //             id  :   tid
        //         },
        //         dataType: "html",
        //         success: function(data) {
        //             $("#notifList").html(data);
        //         }
        //     });
        // }
        //
        // function countRequests() {
        //     console.log('countNotifs : ');
        // }
        function loadRequests() {
            var tid = $("#tid").val();
            console.log("Loading requests");
            $.ajax({
                type: "POST",
                url: "./process/team/load_requests.php",
                data: {
                    id  :   tid
                },
                beforeSend: function() {
                    $('#requestList').html('<center>loading...</center>');
                },
                dataType: "html",
                success: function(data) {
                    $("#requestList").html(data);
                }
            });
        }
        function acceptRequest(accept_email) {
            console.log(accept_email);
            $.ajax({
                type: "POST",
                url: "./process/team/process_member_request.php",
                data: {
                    email: accept_email,
                    type : 'accept'
                },
                dataType: 'json',
                success: function(data) {
                    if(data.status == 'success') {
                        console.log("accepted : " + accept_email);
                    }
                },
                complete() {
                    loadRequests();
                }
            });
        }
        function rejectRequest(reject_email) {
            console.log(reject_email);
            $.ajax({
                type: "POST",
                url: "./process/team/process_member_request.php",
                data: {
                    email: reject_email,
                    type : 'reject'
                },
                dataType: 'json',
                success: function(data) {
                    if(data.status == 'success') {
                        console.log("reject : " + reject_email);
                    }
                },
                complete() {
                    loadRequests();
                }
            });
        }
    </script>
   </body>
</html>
