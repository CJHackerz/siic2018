<?php
include './connect.php';
include './utils.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $profile_name           =   test_input($_POST['profile_name']);
      $profile_register       =   test_input($_POST['profile_register']);
      $profile_department     =   test_input($_POST['profile_department']);
      $profile_year           =   test_input($_POST['profile_year']);
      $profile_description    =   test_input($_POST['profile_description']);
      $profile_dob            =   test_input($_POST['startup_datetime']);
      $profile_address        =   test_input($_POST['profile_address']);
      $profile_skills         =   test_input($_POST['profile_skills']);
      $profile_hobbies        =   test_input($_POST['profile_hobbies']);
      $profile_achievements   =   test_input($_POST['profile_achievements']);
      $profile_experience     =   test_input($_POST['profile_experience']);

      session_start();
      $user = $_SESSION['user'];

      $errors = array();;

      $file_name = $_FILES["profile_avatar"]['name'];
      $file_size = $_FILES["profile_avatar"]["size"];
      $file_tmp  = $_FILES["profile_avatar"]['tmp_name'];
      $file_type = $_FILES["profile_avatar"]['type'];
      $file_ext=strtolower(end(explode('.',$_FILES["profile_avatar"]['name'])));
      $extensions= array("jpeg","jpg","png");
      $sql = "SELECT * from user_profiles where email = '$user'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      $uid = $row['uid'];

      if($_FILES['profile_avatar']['error'] === UPLOAD_ERR_OK) {
            if(in_array($file_ext,$extensions)=== false){
                $errors[] ="extension not allowed";
            }
            if($file_size > 2097152) {
                $errors[] ='File size must be less than 2MB';
            }
      } else {
        $errors[] ="File size must be less than 2MB";
      }


      $count=count($errors);

      if(empty($file_name) && $file_size==0) {
        $profile_avatar ='images.jpg';
          $sql = "UPDATE user_profiles set name = '$profile_name', register_no = '$profile_register',
                  dept = '$profile_department', year = '$profile_year', description = '$profile_description',
                  dob = '$profile_dob', address = '$profile_address', skills = '$profile_skills', hobbies = '$profile_hobbies',
                  achievements = '$profile_achievements', experience = '$profile_experience', avatar  = '$profile_avatar' WHERE email='$user' ";

          if($conn->query($sql)) {
                header('Location: ../profile.php');
            } else {
                echo $conn->error;
            }
      }
      else {

          $profile_avatar = $uid . "." . $file_ext;
          if (count($errors) == 0) {
              $profile_avatar = $uid . "." . $file_ext;
              unlink("../profiles/img/" . $row['avatar']);
              $sql1 = "UPDATE user_profiles set name = '$profile_name', register_no = '$profile_register',
                        dept = '$profile_department', year = '$profile_year', description = '$profile_description', avatar  = '$profile_avatar',
                        dob = '$profile_dob', address = '$profile_address', skills = '$profile_skills', hobbies = '$profile_hobbies',
                        achievements = '$profile_achievements', experience = '$profile_experience' WHERE email='$user' ";

                if($conn->query($sql1)) {
                    move_uploaded_file($file_tmp, "../img/profiles/" . $profile_avatar);

                   header('Location: ../profile.php');
                } else {
                    echo $conn->error;
                }

            }
            else {
              foreach($errors as $e){
                  echo $e . "<br />";
              }
          }
      }
  }
?>
