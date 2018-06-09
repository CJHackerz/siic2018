<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Announcements|SIIC</title>

    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link href="css/animations.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIIC - Announcements</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon Icon Add -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- All STYLESHEET CSS -->
    <link rel="stylesheet" href="css/element.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/signIn.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<style>
body{
  background-color: #ffffff;
}

 @media only screen and (max-width: 800px) {
    .upload-picture{
        padding-right:10%;
        padding-left:5%;
    }
    .new_user{
        padding-bottom:20%;
    }

}

@media only screen and (min-width: 800px) {
    .upload-picture{
        padding-right:67%;
    }
}
   </style>

</head>

<style type="text/css">
  .blogHead{
    background: url(img/blog-bg.jpg);
    max-height:304px;
    width: 100%;
    text-align: center;
    color:white;
  }


</style>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<div id="wrapper">

    <div class="overlay"></div>
    <?php
    require "process/connect.php";
    require "includes/nav.php";
    ?>
    <div id="page-content-wrapper">
        <div class="container container-fluid blogHead">

          <div class="row" style="padding: 0px;">
            <h2 style="font-family: 'Quicksand', sans-serif;font-weight: bold;color:white;"></h2>
          </div>

        </div>

        <div class="container-fluid" style="padding:30px 100px 30px 100px">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <h5 style="margin-bottom: 0px;text-align: center; font-size: 30px;"> Announcements </h5><br><center><hr style="height: 4px;"></center>
                    <p style="margin-bottom: 0px;margin-left: 3px;font-family: 'Quicksand', sans-serif;">  </p>
                    <p style="font-family: 'Quicksand', sans-serif;font-weight: bold; text-align:justify;">
                        <h5>What for announcements?</h5>
                        <p style="text-align: justify;">Anything upcoming in the college in the next few days .
                          Post it here. If you wanna spread anything in the college you can post it here.
                          Whether its a recruitment or a carnival or a information thats needs to be shared can go up here.
                          Feel free to whatever you wanna post.
</p>

    <br>
                        <p style="text-align: justify;">Spread the thing !! </p><br>
                        <p style="text-align: justify; font-size: 25px;">#BetheBoss</p><br>
                        <div class="text-center">
                            <a href="./announcements_form.php" class="btn btn-primary leftBtn">Post your announcement here!</a>
                        </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <h5 style="margin-bottom: 0px;text-align: center; font-size: 30px;"> Latest Announces </h5><br><center><hr style="height: 4px;"></center>
            <br>
            <br>
            <?php
                if(isset($_GET['error'])) {
                    if($_GET['error'] == 'success') {
                        echo '<div class="alert alert-danger" role="alert">Invalid Extension </div>';
                    }
                }
            ?>
            <div class="container">
              <?php
                $sql     =  "SELECT * from announcement";
                $result  =  $conn->query($sql);
                if($result->num_rows > 0)
                {
                  while($row = $result->fetch_assoc())
                  {
                  if($row['status']=='accepted')
                  {
                    echo '
                    <center><hr style="height: 4px;"></center>
                    <center><h3> '.$row['announce_title'] .'</h3></center>
                    <div class="row">';
                      if(!empty($row['project_bp']))
                      {
                        echo '<div class="col-sm-4 col-md-4 col-lg-4 col-xs-12" style="text-align:center;">
                            <a href="http://www.srmuniv.ac.in/dr-c-muthamizhchelvan"><img class="img-responsive img-circle" src="../uploads/project/" . '.$row['project_bp'].'" style="width: auto; height:200px;"></a>

                        </div>';
                      }
                        echo '<div class="col-sm-8 col-md-8 col-lg-8 col-xs-12" style="text-align:justify">
                            <p style=" font-style: italic;">" '.$row['announce_deescription'].' "</p>
                            <p align="right" style=" font-style: italic;">-'.$row['name'].'</p>
                        </div>
                    </div>';
                  }
                }
              }
              ?>
              <!-- <center><hr style="height: 4px;"></center>
              <center><h3> Director's Message </h3></center> -->
              <!-- <div class="row">
                  <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12" style="text-align:center;">
                      <a href="http://www.srmuniv.ac.in/dr-c-muthamizhchelvan"><img class="img-responsive img-circle" src="./img/boa/director.jpg" style="width: auto; height:200px;"></a>
                      <a href="http://www.srmuniv.ac.in/dr-c-muthamizhchelvan"><b><p>Dr. C. Muthamizhchelvan</p></b></a>
                  </div>
                  <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12" style="text-align:justify">
                      <p style=" font-style: italic;">" It's indeed a great pleasure for me to announce about initiative SRM Innovation and Incubation center. This initiative is taken in order to develop and awaken the student's talents and feed them with the required support and facilities. I'm sure that SIIC will bring out the entrepreneurial skills and also to develop them for their future endeavors. "</p>
                      <p align="right" style=" font-style: italic;">-MR. muthamizhchelvan</p>

                  </div>
              </div> -->
            </div>

        </div>

        <?php include 'includes/footer.php';?>

    </div><!-- Page content wrapper ends -->
</div><!-- wrapper ends -->




    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/sidenav.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/css3-animate-it.js"></script>

</body>

</html>