<!doctype html>
<?php
    require 'vendor/autoload.php';
?>
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
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <style media="screen">
        h4 > a, .portfolio-category > li > a {
            color: #fff;
        }
        .effect1{
        background:linear-gradient(rgba(196,171,164,0.75),rgba(196,171,164,0.75)),url(img/portfolio/p-1/1.jpg);
        }
         .effect1 :hover{
           background:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(img/portfolio/p-1/1.jpg);
         }
         .effect2{
         background:linear-gradient(rgba(136,161,164,0.45),rgba(136,161,164,0.75)),url(img/portfolio/p-1/2.jpg);
         }
          .effect2 :hover{
            background:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(img/portfolio/p-1/2.jpg);
          }
          .effect3{
          background:linear-gradient(rgba(196,171,164,0.45),rgba(196,171,164,0.75)),url(img/portfolio/p-1/3.jpg);
          }
           .effect3 :hover{
             background:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(img/portfolio/p-1/3.jpg);
           }
           .effect4{
           background:linear-gradient(rgba(196,171,164,0.45),rgba(196,171,164,0.75)),url(img/portfolio/p-1/4.jpg);
           }
            .effect4 :hover{
              background:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(img/portfolio/p-1/4.jpg);
            }
            .effect5{
            background:linear-gradient(rgba(96,71,64,0.45),rgba(96,71,64,0.75)),url(img/achievements.jpg);
            }
             .effect5 :hover{
               background:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(img/achievements.jpg);
             }
             .effect6{
             background:linear-gradient(rgba(196,171,164,0.45),rgba(196,171,164,0.75)),url(img/learnmore.jpg);
             }
              .effect6 :hover{
                background:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(img/learnmore.jpg);
              }
              .effect7{
              background:linear-gradient(rgba(16,31,44,0.45),rgba(16,31,44,0.75)),url(img/feedback.jpg);
              }
               .effect7 :hover{
                 background:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(img/feedback.jpg);
               }
               .effect8{
               background:linear-gradient(rgba(6,7,6,0.45),rgba(9,7,6,0.75)),url(img/insights.jpg);
               }
                .effect8 :hover{
                  background:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(img/portfolio/p-1/2.jpg);
                }
    </style>


</head>

<body>
    <!-- Start Preloader -->
    <!--<div class="loader-wrapper">
        <div class="loader"></div>
    </div>-->
    <!-- End Preloader -->
    <!-- Start Main Wrapper -->
    <div class="main-wrapper">
        <!-- Start Header Section -->
        <?php
                        require 'process/connect.php';
                        include 'includes/nav.php' ?>
        <!-- End Header Section -->
        <!-- Start Slider Area -->
        <div id="home" class="slider-area bg-4" data-stellar-background-ratio="0.5">
                    <div class="slider-main-wrapper slider-wrapper-two">
                        <div class="container">
                            <div class="row">
                                <div class="slider-item">
                                    <h1 class="cd-headline letters type is-full-width">
                                        <span><span class="main-heading-logo"></span></span>
                                        <span class="cd-words-wrapper">
                                            <b class="is-visible">SIIC<span>.</span></b>
                                            <b>SIIC<span>.</span></b>
                                        </span>
                                    </h1>
                                    <h2>Innovate | Incubate | Inspire</h2>
                                    <div class="slider-btn">
                                        <a class="button active" href="signUp.php">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sheep-bottom">
                        <img src="img/bg/shap.png" alt="">
                    </div>
                </div>
        <!-- End Slider Area -->
        <!-- Start Main Content Wrapper -->
        <div class="main-content-wrapper">
            <div id="about" class="content-section-area ptb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="main-heading-content text-center">
                                <h2>about Us<span>.</span></h2>
                                <p>
SIIC is SRM's official and independent Incubation and Innovation center. We integrate and develop an atmosphere for budding entrepreneurs and techies. Vision of SIIC is to make all the SRMites fit for the competitive entrepreneurial society. The Mission of SIIC is to Incubate each and every talented individual and validate their ideas for the betterment of the society. We at SIIC provide facilities like Fab lab access, Incubation Center, Bank of inventory, Internship opportunities and Financial assistance for start-ups and tech teams. The findings under SIIC are purely based on the viability and persistence of their ideas. Students with innovative and sustaining ideas can apply for SIIC's incubation and assistance, and rest will be given with a privilege of memberships and befits according to their category of membership.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Portfolio Area -->
            <div id="portfolio" class="content-section-area ptb-120 gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="main-heading-content text-center">
                                <h2>What we do<span>.</span></h2>
                            </div>
                        </div>
                    </div>
                    <!-- Start portfolio Wrapper -->

                    <div class="row portfolio-content  ">

                       <div class="col-lg-12 ">
                           <div class="col-lg-6 col-md-6 col-sm-12  effect1" style="height:220px;;">

                                              <div class="portfolio-details">
                                               <div class="portfolio-details-inner" style="padding:15% 34%">
                                                   <h4><a href="javascript:void(0)">Tech Teams</a></h4>
                                                   <ul class="portfolio-category">
                                                       <li><a href="javascript:void(0)">We make mind blowing stuffs and amazing techies.</a></li>
                                                   </ul>
                                               </div>
                                             </div>

                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-12  effect2" style=" height:220px;; ">
                                              <div class="portfolio-details">
                                               <div class="portfolio-details-inner" style="padding:15% 34%">
                                                   <h4><a href="javascript:void(0)">SIIC Start-ups</a></h4>
                                                   <ul class="portfolio-category">
                                                       <li><a href="javascript:void(0)">We are developing Zero cool products for incredible people.</a></li>
                                                   </ul>
                                               </div>
                                           </div>
                           </div>
                       </div>

                       <div class="col-lg-12">
                           <div class="col-lg-8 col-md-8 col-sm-12  effect3" style="background-color:#84B79B; height:220px;;">
                                        <div class="portfolio-details">
                                              <div class="portfolio-details-inner" style="padding:11% 34%">
                                                  <h4><a href="javascript:void(0)" >SIIC Facilities</a></h4>
                                                  <ul class="portfolio-category">
                                                      <li><a href="javascript:void(0)">We have top notch world class facilities to serve you with.</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                           </div>
                           <div class="col-lg-4  col-md-4 col-sm-12  effect4" style="background-color:#7E7582; height:220px;;">
                                       <div class="portfolio-details">
                                              <div class="portfolio-details-inner"style="padding:25% 34%">
                                                  <h4><a href="javascript:void(0)" >Announcements</a></h4>
                                                  <ul class="portfolio-category">
                                                      <li><a href="javascript:void(0)">Something Important!!</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                           </div>
                       </div>
                       <div class="col-lg-12 ">
                           <div class="col-lg-6 col-md-6 col-sm-12 effect5" style="background-color:#7E97CF; height:220px;;">
                             <div class="portfolio-details">
                                                <div class="portfolio-details-inner" style="padding:15% 34%">
                                                    <h4><a href="javascript:void(0)" >Achievements</a></h4>
                                                    <ul class="portfolio-category">
                                                        <li><a href="javascript:void(0)">Catch a glimpse of our milestones.</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-12  effect6" style="background-color:#C4ABA4; height:220px;;">
                             <div class="portfolio-details">
                                               <div class="portfolio-details-inner" style="padding:13% 34%">
                                                   <h4><a href="javascript:void(0)">Learn</a></h4>
                                                   <ul class="portfolio-category">
                                                       <li><a href="javascript:void(0)">Explore projects and guidances from innovators</a></li>
                                                   </ul>
                                               </div>
                                           </div>
                           </div>
                       </div>
                       <div class="col-lg-12">
                           <div class="col-lg-8 col-md-8 col-sm-12  effect7" style="background-color:#84B79B; height:220px;;">
                             <div class="portfolio-details">
                                               <div class="portfolio-details-inner" style="padding:13% 34%">
                                                   <h4><a href="javascript:void(0)" >Feedback</a></h4>
                                                   <ul class="portfolio-category">
                                                       <li><a href="javascript:void(0)">Help us to serve you better.</a></li>
                                                   </ul>
                                               </div>
                                           </div>
                           </div>
                           <div class="col-lg-4  col-md-4 col-sm-12 effect8" style="background-color:#7E7582; height:220px;;">
                             <div class="portfolio-details">
                                               <div class="portfolio-details-inner"  style="padding:23% 34%">
                                                   <h4><a href="javascript:void(0)" >Insights</a></h4>
                                                   <ul class="portfolio-category">
                                                       <li><a href="javascript:void(0)">Have a look, what we have done till now!</a></li>
                                                   </ul>
                                               </div>
                                           </div>
                           </div>
                       </div>
                    </div>

                <!-- portfolio wrapper end -->
            </div>
            </div>


            <!-- End Portfolio Area -->

            <!-- Start Contact area -->
            <div class="contact-area gray-bg">
                <div class="google-map-area">
                    <div class="control-map">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- End Contact area -->
            <div id="contact" class="contact-form-area ptb-100 gray-bg">
                <div class="container">
                    <div class="container-wrapper">
                        <div class="row">
                            <div class="col-md-5 col-sm-5">
                                <div class="get-in-tuch">
                                    <h2>Get In Touch<span>.</span></h2>
                                    <ul class="address-line">
                                        <li><i class="fa fa-map-marker"></i>SIIC Address</li>
                                        <li><i class="fa fa-user"></i>Nikunj Panchal</li>
                                        <li><i class="fa fa-envelope"></i>manager@srmiic.com</li>
                                        <li><i class="fa fa-phone"></i>+91 8148606827</li>
                                    </ul>
                                    <div class="footer-social">
                                        <ul class="social-bookmarkas">
                                            <li><a href="https://m.facebook.com/nikunj7panchal"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7">
                                <div class="contact-form-wrapper">
                                    <div class="contact-form">
                                        <form id="minix-contact-form"  action="process/send_mail.php" method="POST">
                                            <input class="form-control" name="name" type="text" placeholder="Your Name" required>
                                            <input class="form-control" name="email" type="email" placeholder="Email Address" required>
                                            <textarea class="form-control" name="message" cols="30" rows="2" placeholder="Write Message" required></textarea>
                                            <button class="button form-btn" type="submit">SEND MESSAGE</button>
                                            <p class="minix-send-message"></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'includes/footer.php' ?>
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
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD81iwuCfGQVC8_rhwNYRaJBadTfuZNDyI&callback=initMap">
</script>
<script>
     function initMap() {
       var srm = {lat: 12.8231047, lng: 80.04528010000001};
       var map = new google.maps.Map(document.getElementById('map'), {
         zoom: 16,
         center: srm
       });
       var marker = new google.maps.Marker({
         position: srm,
         map: map
       });
     }

 </script>
 <?php
if(isset($_GET['mail'])) {
    if($_GET['mail'] == 'sent') {
?>
<script type="text/javascript">
swal("Nice!", "Message Sent !", "success");
</script>
<?php
    } else {
?>
<script type="text/javascript">
swal("Oops!", "Message not sent !", "error");
</script>
<?php
    }
}
?>
</html>
