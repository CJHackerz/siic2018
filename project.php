<?php
include './process/connect.php';
include './process/utils.php';

if($_SERVER['REQUEST_METHOD'] == 'GET'){
  if (isset($_GET['pid'])) {
    $pid=$_GET['pid'];
    $sql = "SELECT * from project where project_id = '$pid'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $project_title=$row['project_title'];
    // $project_report=$row['project_report'];
    $project_requirement=$row['project_requirement'];
    $project_bp=$row['project_bp'];
    $project_user=$row['user'];
    $timestamp=$row['timestamp'];

    if($row['project_status'] == 'unread') {
            $project_status="Under Review";
    } else if($row['project_status'] == 'accepted') {
        $project_status="Accepted";
    } else if($row['project_status'] == 'rejected') {
        $project_status="Rejected";
    }
  }
}

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIIC</title>
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
        background-color:  #fefdf4;
    }
        .personal-info{
            align:center;
        }



@media only screen and (max-width: 800px) {
    .container-fluid{
        padding-left:20%;
        padding-right:20%;
    }
}
.ti-arrow-up:before {
    content: none;
}

    </style>
</head>

<body>
<!-- NAV BAR -->
    <?php
        include './includes/nav.php';
    ?>
<!-- NAV BAR ENDS -->
<div class="main-content-wrapper">
    <div id="about" class="content-section-area pt-120 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <div class="main-heading-content text-center">
                        <h2>Project Details<span>.</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Start Main Wrapper -->
    <div class="container">

        <div class="panel panel-default">
        <div class="panel-body">
            <h2><?php echo $project_title; ?></h2>
            <small><?php echo $timestamp;?></small>
            <hr>
            <h6>Requirements : </h6><p><?php echo $project_requirement; ?></p>
            <h6>Status: </h6><p><?php echo $project_status; ?></p>
            <a class="btn btn-primary" href="./uploads/project/<?php echo $project_bp; ?>">Project Report</a>
        </div>
    </div>
        <!-- End Main Content Wrapper -->
    </div>
    <!-- End Main Wrapper -->
    <!-- ALL JQUERY  -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdRm-dm4ImhzWxMOy1_TyY6cQ3ZnVpw9E"></script>
    <script src="js/minix-map.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <?php
         include './includes/footer.php'
     ?>
     <style>
        .footer {
        left: 0;
        bottom: 0;
        width: 100%;
        background-color:#333;
        color: white;
        text-align: center;
        }
     </style>
</body>
</html>
