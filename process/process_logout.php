<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION["user_id"]);
    unset($_SESSION['team']);
    unset($_COOKIE['useremail']);
    header('Location: ../index.php');
?>
