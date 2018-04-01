<?php
include './connect.php';
include './utils.php';

session_start();

if(!isset($_SESSION['admin'])) {
    echo "Unauthorized";
    die();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $old_password   =   md5(test_input($_POST['old_password']));
    $new_password   =   md5(test_input($_POST['new_password']));
    $new_password1  =   md5(test_input($_POST['new_password1']));

    $username = $_SESSION['admin'];

    if (!empty($old_password)&&!empty($new_password)&&!empty($new_password1)) {
        $sql = "SELECT * from admins where username = '$username'";

        $result= $conn->query($sql);

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if($old_password != $row['password']){
                echo "The typed password does not match with your current password";
                die();
            }
            if($new_password!=$new_password1) {
                header('Location: ../pages/settings.php?error=pass_mismatch');
                die();
            }
            $sql = "UPDATE admins set password = '$new_password' where username = '$username'";
            if($conn->query($sql)) {
                header('Location: ../pages/index.php?stat=change_pass');
                die();
            }
        } else {
            echo "Fatal error. Contact Dev team";
            die();
        }
    } else {
        echo 'Error : inputs not valid';
    }
}
    ?>
