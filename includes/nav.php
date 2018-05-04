<header>
    <div id="sticky-header" class="header-area header-style-one gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="logo">
                        <a href="index.php"><img src="./siiclogo.jpg" height="50px" width="50px" style="border-radius:100px;margin-right:10px;margin-bottom:10px;"><h2>SIIC<span>.</span></h2></a>
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
                                <li><a href="aboutPage.php">About</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="index.php#contact">Feedback</a></li>
                                <?php
                            if(isset($_SESSION["user"])) {
                            ?>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION["user"];?><i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="./profile.php">Profile</a></li>
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
                            <li><a href="http://mentor.srmiic.com/auth/signup.php"  style=" color: red;">Become a mentor</a></li>

                        </ul>



                        </div>
                    </div>
                </div>
                <!-- Start Mobile Menu -->
                <div class="mobile-menu-area">
                    <div class="mobile-menu">
                        <ul>
                            <li><a href="aboutPage.php">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="index.html#contact">Feedback</a></li>
                            <li><a href="signUp.php">Sign Up</a></li>
                            <li><a href="#" style="color: #f00;">Become a Mentor</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Mobile Menu -->
            </div>
        </div>
    </div>
</header>
