<?php

include './connect.php';
include './utils.php';


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $profile_name           =   test_input($_POST['profile_name']);
  $profile_register       =   test_input($_POST['profile_register']);
  $profile_department     =   test_input($_POST['profile_department']);
  $profile_year           =   test_input($_POST['profile_year']);
  $profile_description    =   test_input($_POST['profile_description']);

  session_start();
  $user = $_SESSION['user'];

  $errors = array();

  $file_name = $_FILES["profile_avatar"]['name'];
  $file_size = $_FILES["profile_avatar"]['size'];
  $file_tmp  = $_FILES["profile_avatar"]['tmp_name'];
  $file_type = $_FILES["profile_avatar"]['type'];
  $file_ext=strtolower(end(explode('.',$_FILES["profile_avatar"]['name'])));
  $extensions= array("jpeg","jpg","png");

  $sql = "SELECT * from user_profiles where email = '$user'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $uid = $row['uid'];

  if (empty($file_name) && $file_size==0) {
    $sql = "UPDATE user_profiles set name = '$profile_name', register_no = '$profile_register',
            dept = '$profile_department', year = '$profile_year', description = '$profile_description' WHERE email='$user'";
    $conn->query($sql);
    header('Location: ../profile.php');
  }
  else {
          if(in_array($file_ext,$extensions)=== false){
              $errors[] ="extension not allowed";
          }
          if($file_size > 2097152) {
              $errors[] ='File size must be less than 2MB';
          }
          $count=count($errors);

          $profile_avatar = $uid . "." . $file_ext;

          if ($count == 0) {

              unlink("../profiles/img/" . $row['avatar']);

              $sql1 = "UPDATE user_profiles set name = '$profile_name', register_no = '$profile_register',
                      dept = '$profile_department', year = '$profile_year', description = '$profile_description', avatar  = '$profile_avatar' WHERE email='$user'";
              $conn->query($sql1);
              move_uploaded_file($file_tmp, "../profiles/img/" . $profile_avatar);
                header('Location: ../profile.php');
          }else {
            foreach ($errors as $e) {
              echo $e . "<br />";
            }
          }
  }
}

?>
