<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Announcements</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon Icon Add -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- All STYLESHEET CSS -->
    <link rel="stylesheet" href="css/element.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<style>
body{
  background-color:  #fefdf4;
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
  <?php
     require 'process/connect.php';
     include 'includes/nav.php' ?>

<div id="main-wrapper">


    <div class="overlay"></div>

    <div id="page-content-wrapper">
        <!-- <div class="container blogHead">

          <div class="row" style="padding: 0px;">
            <h2 style="font-family: 'Quicksand', sans-serif;font-weight: bold;color:white;"></h2>
          </div>

        </div> -->
        <div class="container" style="margin-top:130px; margin-bottom:-30px;">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <div class="main-heading-content text-center">
                        <h2> Announcements<span>.</span></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

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
            <br>
            <br>
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
                    echo '<div class="row">
                       <div class="col-md-4 col-sm-5 col-md-offset-1 " style="margin-top:-100px;">
                          <article class="blog-post">';
                          if(!empty($row['project_bp']))
                          {
                             echo '<div class="post-thumbnail">

                                <img style="margin:auto;" class="img-responsive" src="./uploads/announces/'.$row['project_bp'].'" alt="no image">

                             </div>';
                           }
                             echo '<div class="post-content">
                                <div class="post-content-inner">
                                   <center>
                                      <h3>'.$row['announce_title'].'</h3>
                                   </center>
                                </div>
                             </div>
                          </article>
                       </div>
                       <div class="col-md-5 col-sm-5 col-md-offset-1 ">
                          <center>
                             <p>
                                '.$row['announce_deescription'].'
                             </p>
                          </center>
                       </div>
                       <div class="col-md-5 col-sm-5 col-md-offset-1 align="right" ">

                             <p>
                                '.$row['name'].'
                             </p>

                       </div>
                    </div>';
                    echo '<br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>';

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/minix-map.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <?php
       if(isset($_GET['submission'])) {
           if($_GET['submission'] == 'success') {
       ?>
    <script type="text/javascript">
       swal("Announcement Submitted !", "Wait for Admin's approval to get it posted.", "success");
    </script>
    <?php
       } else {
       ?>
    <script type="text/javascript">
       swal("Oops!", "Announcement not sent !", "error");
    </script>
    <?php
       }
       }
       ?>
</body>

</html>
