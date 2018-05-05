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

    <style media="screen">
        h4 > a, .portfolio-category > li > a {
            color: #fff;
        }
        body{
        background-color: #f4f9fe;
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


<?php include 'includes/footer.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/minix-map.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
