<?php
    include './process/connect.php';
    include './process/utils.php';

    //$user = get_user();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Freelance|SIIC</title>
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
        background-color: #f4f9fe;
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

    </style>
</head>

<body>
<!-- NAV BAR -->
    <?php
        include './includes/nav.php';
    ?>
<!-- NAV BAR ENDS -->

    <!-- Start Main Wrapper -->
    <div class="main-wrapper">
        <!-- Start Main Content Wrapper -->
        <div class="main-content-wrapper">
            <div id="about" class="content-section-area pt-120 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="main-heading-content text-center">
                                <h2>Become a Freelancer haha<span>.</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content of the page-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

        <p style="margin-bottom: 0px;margin-left: 3px;font-family: 'Quicksand', sans-serif;">  </p>
                    <p style="font-family: 'Quicksand', sans-serif;font-weight: bold; text-align:justify;">
                        <h5>What is Freelancer?</h5>
                        <p style="text-align: justify;">Freelancing has become incredibly popular in recent years, with some people using it to supplement
their monthly income and others pursuing it full-time for the freedom it accords them. This surge in
popularity is understandable seeing that freelancers get to choose the projects they work on,
schedule their own hours, work from new locations each day, and charge their own fees.
</p>
                        <br><br><h5>Why at out campus?</h5>
                        <p style="text-align: justify;">We feel many of us have enough skills to make something /sell something/brand something and
many other .What if we get platform where you got a chance to create your values in different
organisation or get paid for the hard work you have put up. Everyday there are lot many new
opportunities and startups/projects are coming up, everyone of them look for
smartest/skilled/enthusiastic members who can help them to achieve their dreams. But they end up
finding none and same problem faced by other side. So by this platform we would like to connect
experts to needy & needy to experts.
</p>
                        <br><br><h5>How it will work?</h5>
                        <p style="text-align: justify;">At SIIC we get everyday many applications for startups/projects and we are also in touch with many
other startups(off campus) who look for experts. Once you share details about your expertisation
with us , whenever we get any kind of new requirement or opportunity , based on specialization
required we will send notifications through e-mail/sms individually to everyone based on
specialisation(all the details about project or task will be mentioned along with details of Startups). if
you are interested you may accept offer and proceed.
    <br>
                        <p style="text-align: justify;">Let's Create Value by Skills !! </p><br>
                        <p style="text-align: justify; font-size: 25px;">#BetheBoss</p><br>
                        <div class="text-center">
                            <a href="freelance_form.php" class="btn btn-primary leftBtn">Become a Freelancer?</a>
                        </div>
                </div>
            </div>
            <br>
        </div>

        <!-- content of the page ends-->

       <?php
            include './includes/footer.php'
        ?>
        <!-- End Main Content Wrapper -->
    </div>
    <!-- End Main Wrapper -->
    <!-- ALL JQUERY  -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdRm-dm4ImhzWxMOy1_TyY6cQ3ZnVpw9E"></script>
    <script src="js/minix-map.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
