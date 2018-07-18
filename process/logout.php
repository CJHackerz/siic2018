<?php
session_start();
unset($_SESSION["user"]);
unset($_SESSION['user_name']);
unset($_COOKIE['useremail']);
  header('Location: ../index.php');
?>
