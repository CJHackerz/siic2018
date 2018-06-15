<?php

include './connect.php';
include './utils.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_email     = test_input($_POST["user_email"]);
    $user_password  = test_input($_POST["user_password"]);
        $encrypt_pass   = md5($user_password);
    $sql = "SELECT * from users where email = '$user_email' AND password = '$encrypt_pass'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $status=$row['status'];
        if ($status=='set') {
          $sql2 = "SELECT * from user_profiles WHERE email = '$user_email'";
          $result2 = $conn->query($sql2);
          $user_name = $result2->fetch_assoc();
          $_SESSION["user_name"]  = $user_name['name'];
          $_SESSION["user"]       = $user_email;
          $_SESSION["user_id"]    = $row["uid"];
          $_SESSION["team"]       = "false";
          setcookie('useremail',$_SESSION['user'],time() + (86400*7));
          header('Location: ../profile.php');
        }else {
          header('Location: ../signIn.php?error=not_validate');
        }
    } else {
        $sql = "SELECT * from teams where team_email = '$user_email' AND password = '$encrypt_pass'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION["user"]   =   $user_email;
            $_SESSION["user_id"]     =   $row["team_id"];
            $_SESSION["team"]   =   "true";
            setcookie('useremail',$_SESSION['user'],time() + (86400*7));
            header('Location: ../teampage.php?id=' . $row['team_id']);
        } else {
            header('Location: ../signIn.php?error=true');
        }
    }

}
?>
