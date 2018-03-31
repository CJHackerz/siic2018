<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIIC</title>
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
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Preloader -->
    <!--<div class="loader-wrapper">
        <div class="loader"></div>
    </div>-->
    <!-- End Preloader -->
    <!-- Start Main Wrapper -->
    <div class="main-wrapper">
        <!-- Start Header Section -->
        <header>
            <div id="sticky-header" class="header-area header-style-one gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <a href="index.html"><h2>SIIC<span>.</span></h2></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 main-menu-wrapper">
                            <div class="main-menu-wrapper">
                                <button class="hamburger hamburger--slider" type="button">
                                    <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                                <div class="homepage-menu-style-two mobile-menu">
                                    <ul class="main-menu ">
                                        <li class="active"><a href="#home">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="index.html#contact">Feedback</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Sign Up</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Start Mobile Menu -->
                        <div class="mobile-menu-area">
                            <div class="mobile-menu">
                                <ul>
                                    <li class="active"><a href="#home">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="index.html#contact">Feedback</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Sign Up</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Section -->
        <br><br>
        <!-- Start Main Content Wrapper -->
        <div class="main-content-wrapper">
            <!-- multistep form -->
            <form id="msform">
              <!-- progressbar -->
              <ul id="progressbar">
                <li class="active">Account Setup</li>
                <li>Personal Details</li>
                <li>Your Profile</li>
              </ul>
              <!-- fieldsets -->
              <fieldset>
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">This is step 1</h3>
                <input type="text" name="name" placeholder="Name"/>
                <input type="text" name="regno" placeholder="Registration Number" />
                <input type="text" name="cpass" placeholder="Department"/>
                <input type="button" name="next" class="next action-button" value="Next" />
              </fieldset>
              <fieldset>
                <h2 class="fs-title">Social Profiles</h2>
                <h3 class="fs-subtitle">Your presence on the social network</h3>
                <input type="text" name="twitter" placeholder="Twitter" />
                <input type="text" name="facebook" placeholder="Facebook" />
                <input type="text" name="gplus" placeholder="Google Plus" />
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
              </fieldset>
              <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle">We will never sell it</h3>
                <input type="text" name="fname" placeholder="First Name" />
                <input type="text" name="lname" placeholder="Last Name" />
                <input type="text" name="phone" placeholder="Phone" />
                <textarea name="address" placeholder="Address"></textarea>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="submit" name="submit" class="submit action-button" value="Submit" />
              </fieldset>
            </form>

        <!-- Start Footer Section -->
        <div class="clearfix"></div>

        <footer>
            <div class="footer-bottom ptb-30 text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="footer">
                                <p class="copyright">
                                    All rights reserved &copy; <a target="_blank" href="www.bigtechit.html">Webarch</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer Section -->
        </div>
        <!-- End Main Content Wrapper -->
    </div>
    <!-- End Main Wrapper -->

    <!-- ALL JQUERY  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/minix-map.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
<script type="text/javascript">

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
    if(animating) return false;
    animating = true;

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
            next_fs.css({'left': left, 'opacity': opacity});
        },
        duration: 800,
        complete: function(){
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".previous").click(function(){
    if(animating) return false;
    animating = true;

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        },
        duration: 800,
        complete: function(){
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".submit").click(function(){
    return false;
})

</script>
</html>
