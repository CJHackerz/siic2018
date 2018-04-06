<?php
include './connect.php';
include './utils.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username   =   test_input($_POST['username']);
    $password   =   test_input($_POST['password']);
     $encrypt_pass = md5($password);

    $sql = "SELECT * FROM admins where username = '$username' and password = '$encrypt_pass'";

    $result = $conn->query($sql);

    if($result->num_rows == 1) {
        // Login successful
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['admin']  =   $row['username'];
        $_SESSION['role']   =   $row['role'];
        header('Location: ../pages/index.php');
    } else {
        header('Location: ../pages/login.php?error=invalid');
    }
}
?>
