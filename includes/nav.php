<?php

  @session_start();
?>
<header>
    <div id="sticky-header" class="header-area header-style-two gray-bg sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="logo">
                        <a href="index.php"><img src="./siiclogo.jpg" height="50px" width="50px" style="border-radius:100px;margin-right:10px;margin-bottom:10px;"><h2>SIIC<span>.</span></h2></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 main-menu-wrapper">
                    <div class="main-menu-wrapper">
                        <!-- <button class="hamburger hamburger-slider" type="button"> -->
                            <!-- <span class="hamburger-box"> -->
                            <!-- <span class="hamburger-inner"></span> -->
                            <!-- </span> -->
                        <!-- </button> -->
                        <div >
                            <ul class="main-menu ">
                                <li><a href="aboutPage.php" style="font-size:14px">About</a></li>
                                <li><a href="index.php#contact" style="font-size:14px">Contact</a></li>
                                <li><a href="blog.php" style="font-size:14px">Blog</a></li>
                                <li><a href="index.php#contact" style="font-size:14px">Feedback</a></li>
                                <?php
                            if(isset($_SESSION["user"])) {
                            ?>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION["user_name"];?><i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="./profile.php">View Profile</a></li>
                                    <li><a href="./process/process_logout.php">Logout</a></li>
                                </ul>
                                <!-- /.dropdown-user -->
                            </li>
                            <?php
                            } else {
                            ?>
                           <li><?php echo "<a href='./signIn.php'>Login</a>"; ?></li>


                            <?php  }?>
                            <li><a href="./freelance.php"style="font-size:14px">Freelance</a></li>
                            <li><a href="./forum"style="font-size:14px;padding-left:5px">Forum</a></li>
                            <li><a href="http://mentor.srmiic.com/auth/signup.php"  style=" color:red; font-size:14px">Become a mentor</a></li>

                        </ul>

                        </div>
                    </div>
                </div>
                <!-- Start Mobile Menu -->
                <div class="mobile-menu-area">
                    <div class="mobile-menu">
                        <ul class="main-menu ">
                            <li><a href="aboutPage.php">About</a></li>
                            <li><a href="index.php#contact">Contact</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="index.php#contact">Feedback</a></li>
                            <?php
                        if(isset($_SESSION["user"])) {
                        ?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION["user_name"];?><i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="./editProfile.php">Edit Profile</a></li>
                                <li><a href="./process/process_logout.php">Logout</a></li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <?php
                        } else {
                        ?>
                       <li><?php echo "<a href='./signIn.php'>Login</a>"; ?></li>


                        <?php  }?>
                        <li><a href="./freelance.php">Freelance</a></li>
                        <li><a href="./forum">Forum</a></li>
                        <li><a href="http://mentor.srmiic.com/auth/signup.php"  style=" color: red;">Become a mentor</a></li>

                    </ul>
                    </div>
                </div>
                <!-- End Mobile Menu -->
            </div>
        </div>
    </div>
</header>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
