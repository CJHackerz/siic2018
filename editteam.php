<?php
    include './process/connect.php';
    include './process/utils.php';


    session_start();

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
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Team|SIIC</title>

    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/animations.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" style="padding: 0px;">
    <div id="wrapper">
        <div class="overlay"></div>
<?php
require "process/connect.php";
require "includes/nav.php";
?>

    <!-- /Navigation -->
<div id="page-content-wrapper">
<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
<br>
<center> <h4>Edit Team</h4> </center>
<center style="margin-top: -10px;"><hr></center>

<div style="padding: 10px;" class="researchClass">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default devise-bs">
                    <div class="panel-body">
                        <form class="new_research" id="new_research" enctype="multipart/form-data" action="./process/process_edit_team.php" accept-charset="UTF-8" method="post">

                            <!-- <label for="team_logo">Team/Startup Logo</label><br/>
                            <input type="file" name="team_logo" id="team_logo"  required/> -->
                            <br>
                            <label for="team_name">Team/Startup Name</label><br/>
                            <input class="form-control" type="text" name="team_name" id="team_name" required value="<?php echo $team_name; ?>"/><br/>

                            <label for="team_desc">Description</label><br/>
                            <small style="color:#666;">Write about your teams history, goals and achievements</small>
                            <textarea cols="80" rows="10" class="form-control" name="team_desc" id="team_desc" required><?php echo $team_desc; ?></textarea>

                            <label for="team_website">Website Link</label><br/>
                            <input class="form-control" type="text" name="team_website" id="team_website" required value="<?php echo $website; ?>"/><br/>

                            <label for="team_fb">Facebook Link</label><br/>
                            <input class="form-control" type="text" name="team_fb" id="team_fb" value="<?php echo $fb; ?>"/><br/>

                            <label for="team_contact">Contact No</label><br/>
                            <input class="form-control" type="number" name="team_contact" id="team_contact" required value="<?php echo $contact; ?>"/><br/>

                            <input type="submit" name="commit" value="Save" class="btn btn-primary rightBtn" />
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</body>

<?php include 'includes/footer.php';?>
</div><!-- Page content wrapper ends -->
</div><!-- wrapper ends -->
    <!-- Core JavaScript Files -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
	<script src="./js/jquery.sticky.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
	<script src="./js/jquery.scrollTo.js"></script>
	<script src="./js/jquery.appear.js"></script>
	<script src="./js/stellar.js"></script>
	<script src="./js/nivo-lightbox.min.js"></script>

    <script src="./js/custom.js"></script>
	<script src="./js/css3-animate-it.js"></script>
    <script src="contactform/contactform.js"></script>
    <script src="js/sidenav.js"></script>


</html>
