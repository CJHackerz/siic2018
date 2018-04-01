<?php

include './connect.php';
include './utils.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $user_email = test_input($_POST["user_email"]);
  $user_subject  = test_input($_POST["user_subject"]);
  $user_feedback = test_input($_POST["user_feedback"]);

  $id = uniqid('FEEDBACK');
  $sql = "INSERT INTO feedback(id,email, name, feedback) values('$id', '$user_email', '$user_subject', '$user_feedback')";
  $conn->query($sql);
}

?>
