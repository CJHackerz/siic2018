<?php

include './connect.php';
include './utils.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $uid = $_POST['uid'];
        $authkey = $_POST['authkey'];

        $user_password = test_input($_POST['user_password_forgot']);
        $user_password_confirmation = test_input($_POST['user_password_confirmation_forgot']);




    if($user_password != $user_password_confirmation) {
        header("Location: ../verify.php?error=pass_match");  // will be directed towards forgot_pass.php
        die();
    }
    $options = [
      'cost' => 12,
  ];
  $forgotten_pass = password_hash("$user_password", PASSWORD_BCRYPT, $options);
    //hash($user_password)

  $sql = "UPDATE users set password = '$forgotten_pass',reset =1 where uid = '$uid'";
    if($conn->query($sql)) {
        header('Location: ../signIn.php');
     }
 }

?>
