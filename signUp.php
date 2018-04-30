<?php
    session_start();
    if(isset($_SESSION['user'])) {
        header('Location: ./profile.php');
    }
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIIC - Sign Up</title>
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
</head>

<body>

    <!-- Start Main Wrapper -->
    <div class="main-wrapper">

        <!-- Start Header Section -->
        <?php
          require "process/connect.php";
          include 'includes/nav.php' ?>
        <!-- End Header Section -->
        <br><br>
        <!-- Start Main Content Wrapper -->
        <div class="main-content-wrapper">
            <!-- multistep form -->
            <div id="msform">
            <form role="form" class="new_user" id="new_user" action="./process/process_register.php" enctype="multipart/form-data" accept-charset="UTF-8" method="post">
              <!-- progressbar -->
              <ul id="progressbar">
                <li class="active">Personal Details</li>
                <li>Your Profile</li>
                <li>Account Setup</li>
              </ul>
              <!-- fieldsets -->
              <fieldset >
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">This is step 1</h3>
                <input type="file" name="profile_avatar" id="profile_avatar" value="Select your profile Photo">
                <input type="text" name="profile_name" id="profile_name" placeholder="Name" required>
                <!-- <input type="text" placeholder="test123"> -->
                <input type="text" name="profile_register" id="profile_register" placeholder="Registration Number" required />
                <input type="text" name="profile_department" id="profile_department" placeholder="Department" required/>
                <input type="number" name="profile_year" min="1" max="5" id="profile_year" placeholder="Year[1-5]" required/>
                <input type="date" name="profile_dob" id="profile_dob" placeholder="Date Of Birth" required/>
                <input type="button" name="" class="next action-button" value="Next" required />
                <p>Already have an account? <a href="./signIn.php" style="text-decoration: none; color:green;"><strong>Sign in</strong></a></p>
              </fieldset>
              <fieldset>
                <h2 class="fs-title">Create your Account</h2>
                <h3 class="fs-subtitle">Step 2 out of 3</h3>
                <input type="text" name="profile_address" id="profile_address" placeholder="Address"/>
                <input type="text" name="profile_skills" id="profile_skills" placeholder="Skills" required/>
                <input type="text" name="profile_hobbies" id="profile_hobbies" placeholder="Hobbies" />
                <input type="text" name="profile_achievements" id="profile_achievements" placeholder="Achievements" />
                <input type="text" name="profile_experience" id="profile_experience" placeholder="Experience"/>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
                <p>Already have an account? <a href="./signIn.php" style="text-decoration: none; color:green;"><strong>Sign in</strong></a></p>
              </fieldset>
              <fieldset>
                <h2 class="fs-title">Create your Account</h2>
                <h3 class="fs-subtitle">Step 3 out of 3</h3>

                <textarea name="profile_description" placeholder="Description/Bio" required></textarea>
                <input type="text" class="email-adjust" name="user_email" id="user_email" placeholder="Email" required />
                <span class="email-link">@srmuniv.edu.in</span>
                <input type="password" name="user_password" placeholder="Password" id="user_password" required/>
                <input type="password" name="user_password_confirmation" id="user_password_confirmation" placeholder="Re-enter Password" required />

                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="submit" name="commit" class="submit action-button" value="Submit" />
                <p>Already have an account? <a href="./signIn.php" style="text-decoration: none; color:green;"><strong>Sign in</strong></a></p>
              </fieldset>
            </form>
            </div>

        <?php include 'includes/footer.php' ?>

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
     <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
<?php
// alerts
if(isset($_GET['error'])) {
    if($_GET['error'] == 'pass_match') {
        ?>
        <script type="text/javascript">
            swal("Try again!", "Passwords do not match!", "error");
        </script>
        <?php
    } else if($_GET['error'] == 'user_exists') {
        ?>
        <script type="text/javascript">
            swal("Try again!", "User already exists!", "error");
        </script>
        <?php
    } else if($_GET['error'] == 'invalid_email') {
        ?>
        <script type="text/javascript">
            swal("Invalid email address!", "Make sure you DONT add @srmuniv.edu.in to your email!", "error");
        </script>
        <?php
    }
}
?>
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
        // 'position': 'absolute'
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
