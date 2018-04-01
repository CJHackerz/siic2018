<?php
    session_start();
    unset($_SESSION['admin']);
    unset($_SESSION['role']);
    header('Location: ../pages/login.php');
?>
