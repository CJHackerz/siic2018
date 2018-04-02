<?php


  @session_start();
  include("feedback_modal.php");

?>
<div id="navigation">
    <nav class="navbar navbar-custom" role="navigation">
        <div class="container">
            <div class="row" style="height: 50px;">
                <div class="col-md-2">
                    <div class="site-logo">
                        <a href="./index.php"><img src="./siiclogo.jpg" height="50px" width="50px"><span style="padding-left: 10px;">SIIC</span></a>
                    </div>
                </div>
                <div class="col-md-10">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="offcanvas">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="./aboutPage.php">ABOUT</a></li>
                            <li><a href="./contactUs.php">CONTACT</a></li>
                            <!-- <li><a href="./teams.html">TEAM</a> </li> -->
                            <li><a href="./blog.php">BLOG</a></li>
                            <li><a href="#container" data-toggle="modal" data-target="#popUpWindow">Feedback</a></li>
                            <?php
                            if(isset($_SESSION["user"])) {
                            ?>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION["user"];?><i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="./profile.php"><i class="fa fa-user fa-fw"></i>Profile</a></li>
                                    <li><a href="./process/process_logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                                </ul>
                                <!-- /.dropdown-user -->
                            </li>
                            <?php
                            } else {
                            ?>
                            <li><?php echo "<a href='./signIn.php'>LOGIN/SIGNUP</a>"; ?></li>
                            <?php  }?>
                            <li><a href="http://mentor.srmiic.com/auth/signup.php" class="btn btn-warning leftBtn" style="background-color:#FFC107; color: #ffffff;">Become a mentor</a></li>

                        </ul>
                    </div>
                    <!-- /.Navbar-collapse -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <nav class="navbar navbar-nav navbar-fixed-top" id="sidebar-wrapper" role="navigation">
                        <ul class="nav sidebar-nav">
                            <li class="sidebar-brand">
                                <a href="./index.php"><img src="./siiclogo.jpg" height="50px" width="50px"><span style="padding-left: 10px;">SIIC</span></a>
                            </li>
                            <li><a href="./aboutPage.php">ABOUT</a></li>
                            <li><a href="./contactUs.php">CONTACT</a></li>
                            <!-- <li><a href="./teams.html">TEAM</a> </li> -->
                            <li><a href="./blog.php">BLOG</a></li>
                            <li><a href="#container" data-toggle="modal" data-target="#popUpWindow" onclick="$('.navbar-toggle').click();">Feedback</a></li>
                            <?php if(isset($_SESSION["user"])) { ?>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <i class="fa fa-user fa-fw"></i><?php echo $_SESSION["user"];?> <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="./profile.php"><i class="fa fa-user fa-fw"></i>Profile</a></li>
                                    <li><a href="./process/process_logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                                </ul>
                                <!-- /.dropdown-user -->
                            </li>
                            <?php } else { ?>
                            <li>
                                <?php echo "<a href='./signIn.php'>LOGIN/SIGNUP</a>"; ?>
                            </li>
                            <?php  }?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </nav>
</div>
<!-- /Navigation -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-57882122-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-57882122-6');
</script>
