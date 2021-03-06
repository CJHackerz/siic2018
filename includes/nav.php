<?php
    @session_start();
?>
<header>
    <div id="sticky-header" class="header-area header-style-two sticky gray-bg sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <div class="logo">
                        <a href="index.php"><img src="./siiclogo.jpg" height="50px" width="50px" style="border-radius:100px;margin-right:10px;margin-bottom:10px;"><h2 style="font-family:Segoe UI;">SIIC</h2></a>
                    </div>
                </div>
                <div class="col-md-10 col-sm-10 main-menu-wrapper">
                    <div class="main-menu-wrapper">
                        <!-- <button class="hamburger hamburger-slider" type="button"> -->
                            <!-- <span class="hamburger-box"> -->
                            <!-- <span class="hamburger-inner"></span> -->
                            <!-- </span> -->
                        <!-- </button> -->
                        <div >
                            <ul class="main-menu ">
                                <li><a href="aboutPage.php">About</a></li>
                                <li><a href="announcements.php">Announcements</a></li>
                                  <li><a href="https://forum.srmiic.com" target="_blank">Forum</a></li>
                                  <li><a href="./freelance.php">Freelance</a></li>
                                <li><a href="index.php#contact">Contact</a></li>
                                <!--<li><a href="blog.php">Blog</a></li>-->

                                <?php
                            if(isset($_SESSION["user"])) {
                            ?>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION["user_name"];?> <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="./profile.php">Dashboard</a></li>
                                    <li><a href="./viewProfile.php?uid=<?php echo $_SESSION['user'] ?>">View Profile</a></li>
                                    <li><a href="./editProfile.php">Edit Profile</a></li>
                                    <li><a href="./process/process_logout.php">Logout</a></li>
                                </ul>
                                <!-- /.dropdown-user -->
                            </li>
                            <?php
                            } else {
                            ?>
                           <li><?php echo "<a href='./signIn.php'>Login/Register</a>"; ?></li>


                            <?php  }?>


                            <li><a href="https://mentor.srmiic.com/auth/signup.php" target="_blank" style=" color:red; font-size:14px">Become a mentor</a></li>

                        </ul>

                        </div>
                    </div>
                </div>
                <!-- Start Mobile Menu -->
                <div class="mobile-menu-area">
                    <div class="mobile-menu">
                        <ul class="main-menu ">
                            <li><a href="aboutPage.php">About</a></li>
                              <li><a href="announcements.php">Announcements</a></li>
                                <li><a href="https://forum.srmiic.com" target="_blank">Forum</a></li>
                                <li><a href="./freelance.php">Freelance</a></li>
                            <li><a href="index.php#contact">Contact</a></li>
                            <!--<li><a href="blog.php">Blog</a></li>-->

                            <?php
                        if(isset($_SESSION["user"])) {
                        ?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION["user_name"];?>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="./profile.php">Dashboard</a></li>
                                <li><a href="./viewProfile.php?uid=<?php echo $_SESSION['user'] ?>">View Profile</a></li>
                                <li><a href="./editProfile.php">Edit Profile</a></li>
                                <li><a href="./process/process_logout.php">Logout</a></li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <?php
                        } else {
                        ?>
                       <li><?php echo "<a href='./signIn.php'>Login/Register</a>"; ?></li>


                        <?php  }?>


                        <li><a href="https://mentor.srmiic.com/auth/signup.php" target="_blank" style=" color: red;">Become a mentor</a></li>

                    </ul>
                    </div>
                </div>
                <!-- End Mobile Menu -->
            </div>
        </div>
    </div>
</header>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
