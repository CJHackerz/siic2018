<?php
    include './process/connect.php';
    include './process/utils.php';
    $user = get_user();

    $sql = "SELECT * from users where email = '$user'";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

        // Get user profile details
        $sql = "SELECT * from user_profiles where email = '$user'";
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
    <title>SIIC - Profile</title>

     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- All STYLESHEET CSS -->
    <link rel="stylesheet" href="css/element.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
======================================================-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true" >
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                      <div class="rl"></div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                          <div class="modal-body">
                              <div class="title-bar">
                                <div class="col-md-12">
                                  <h2 class="text-center">Our Project</h2>
                                  <div class="heading-border"></div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <img class="img-fluid img-centered" src="img/portfolio/p-1.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                  <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                  <ul class="list-inline item-details">
                                      <li>Client:
                                          <strong>
                                            <a href="#">Techs Soft</a>
                                          </strong>
                                      </li>
                                      <li>Date:
                                          <strong>
                                            <a href="#">April 2018</a>
                                          </strong>
                                      </li>
                                      <li>Service:
                                          <strong>
                                            <a href="#">Web Development</a>
                                          </strong>
                                      </li>
                                  </ul>
                                  <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                      <i class="fa fa-times"></i> Close
                                  </button>
                              </div>
                            </div>
                          </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/portfolio/p-2.jpg" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                          <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                          <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                          <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/portfolio/p-3.jpg" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                          <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                          <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                          <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                              </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/portfolio/p-4.jpg" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                          <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                          <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                          <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                              </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/portfolio/p-5.jpg" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                          <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                          <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                          <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/portfolio/p-6.jpg" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                          <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                          <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                          <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/portfolio/p-7.jpg" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                          <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                          <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                          <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/portfolio/p-8.jpg" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                          <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                          <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                          <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                <div class="row">
                        <div class="modal-body">
                            <div class="title-bar">
                              <div class="col-md-12">
                                <h2 class="text-center">Our Project</h2>
                                <div class="heading-border"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <img class="img-fluid img-centered" src="img/portfolio/p-9.jpg" alt="">
                              </div>
                              <div class="col-md-6">
                                <p>Our new Project every processes had become fragmented; meaning quality and service were inconsistent. This lack of standardization was adversely impacting operating costs, productivity and customer satisfaction. For several years now Payfast has worked strategically with innovations as a means of developing new solutions, products and services. In line with this vision, Success was approached to find new payments solutions to offer Payfast customers on their website, including open invoice and partial payments options.</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong>
                                          <a href="#">Techs Soft</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong>
                                          <a href="#">April 2018</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong>
                                          <a href="#">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button class="btn btn-general btn-white" type="button" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Close
                                </button>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
  <?php include 'includes/footer.php' ?>

    <!-- Global javascript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/counter/jquery.waypoints.min.js"></script>
    <script src="js/counter/jquery.counterup.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).ready(function(){

        $(".filter-b").click(function(){
            var value = $(this).attr('data-filter');
            if(value == "all")
            {
                $('.filter').show('1000');
            }
            else
=======
    <style media="screen">
        h4 > a, .portfolio-category > li > a {
            color: #fff;
        }
        body
            {
            background-color:blue;
            }

    </style>
<body>
<?php include 'includes/nav.php' ?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br><br>
<br>

<br>
<br>
<br>
<br>
<br><br>
<br>
<br>

<br>
<br>
<br>

<?php include 'includes/footer.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/minix-map.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
