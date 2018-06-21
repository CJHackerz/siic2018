<?php
include './process/connect.php';
include './process/utils.php';

if($_SERVER['REQUEST_METHOD'] == 'GET'){
  if (isset($_GET['pid'])) {
    $pid=$_GET['pid'];
    $sql = "SELECT * from startup where startup_id = '$pid'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $startup_title=$row['startup_title'];
    // $startup_report=$row['startup_report'];
    $startup_bp=$row['startup_bp'];
    $startup_user=$row['user'];
    $timestamp=$row['timestamp'];

    if($row['startup_status'] == 'unread') {
            $startup_status="Under Review";
    } else if($row['startup_status'] == 'accepted') {
        $startup_status="Accepted";
    } else if($row['startup_status'] == 'rejected') {
        $startup_status="Rejected";
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
                        <h2>Startup Details<span>.</span></h2>
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
            <h2><?php echo $startup_title; ?></h2>
            <small><?php echo $timestamp;?></small>
            <hr>
            <a class="btn btn-primary" href="./uploads/startup/<?php echo $startup_bp; ?>">Startup Report</a>
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
        position: fixed;
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
