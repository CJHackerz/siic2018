<?php
require '../vendor/autoload.php';
use Mailgun\Mailgun;
include './connect.php';
include './utils.php';
# Instantiate the client.
$mgClient = new Mailgun('key-28f57d982d256aa39f2fa195678151b3');
$domain = "mail.srmiic.com";
$flag = 0;
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_email     = test_input($_POST['user_email']);
    $user_password  = test_input($_POST['user_password']);
    $user_password_confirmation = test_input($_POST['user_password_confirmation']);
    $user_email     = $user_email . '@srmuniv.edu.in';
    if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signUp.php?error=invalid_email");
        die();
    }
    // set uniq id
    $uid = uniqid('S');
    $role = 3;
    if($user_password != $user_password_confirmation) {
        header("Location: ../signUp.php?error=pass_match");
        die();
    }
    $options = [
      'cost' => 12,
                ];
    $encrypt_pass = password_hash("$user_password", PASSWORD_BCRYPT, $options);
    //$reset_pass=$encrypt_pass;
    $sql = "SELECT * from users where email = '$user_email'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        header("Location: ../signUp.php?error=user_exists");
        die();
    }
    $authkey = md5(uniqid());
    $sql = "INSERT INTO users(uid, email, password, role,status, authkey,reset) values('$uid', '$user_email', '$encrypt_pass', $role, 'unset', '$authkey','1')";
    if($conn->query($sql)) {
        // Send Verification Mailgun
        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from'    =>    'SRMIIC NoReply <noreply@srmiic.com>',
            'to'      =>    'Hello User <' . $user_email . '>',
            'subject' =>    'Welcome to SRMIIC! Please verify your email',
            'html'    =>    '<p>Thank you for registering for SRM Innovation and Incubation Center! Please click on the link below to continue</p><a href="www.srmiic.com/verify.php?authkey=' . $authkey . '&uid=' . $uid . '">Click Here to Verify</a>'
        ));
        // session_start();
        // $_SESSION["user"]       =   $user_email;
        // $_SESSION["user_id"]    =   $uid;
        // $_SESSION["team"]       =   "false";
        $profile_name           =   test_input($_POST['profile_name']);
        $profile_register       =   test_input($_POST['profile_register']);
        $profile_department     =   test_input($_POST['profile_department']);
        $profile_year           =   test_input($_POST['profile_year']);
        $profile_description    =   test_input($_POST['profile_description']);
        $profile_dob            =   test_input($_POST['profile_dob']);
        $profile_address        =   test_input($_POST['profile_address']);
        $profile_skills         =   test_input($_POST['profile_skills']);
        $profile_hobbies        =   test_input($_POST['profile_hobbies']);
        $profile_achievements   =   test_input($_POST['profile_achievements']);
        $profile_experience     =   test_input($_POST['profile_experience']);
        // $user = $_SESSION['user'];
        $errors = array();
        $file_name = $_FILES["profile_avatar"]['name'];
        $file_size = $_FILES["profile_avatar"]['size'];
        $file_tmp  = $_FILES["profile_avatar"]['tmp_name'];
        $file_type = $_FILES["profile_avatar"]['type'];
        $ttt=end(((explode('.',$file_name))));
	$file_ext=strtolower($ttt);
	 $extensions= array("jpeg","jpg","png");
        // Check if file is ready
        if (!empty($file_name) && $file_size!=0) {
            if(in_array($file_ext,$extensions)=== false){
                $errors[] ="extension not allowed";
            }
            if($file_size > 2097152) {
                $errors[] ='File size must be less than 2MB';
            }
            $count=count($errors);
            $profile_avatar = $uid . "." . $file_ext;
            // If no errors in file
            if ($count == 0) {
                $sql = "INSERT INTO user_profiles(uid, email, name, avatar, register_no, dept, year, dob, description, address, skills, hobbies, achievements, experience)
                        VALUES('$uid', '$user_email', '$profile_name', '$profile_avatar', '$profile_register', '$profile_department', $profile_year, '$profile_dob', '$profile_description', '$profile_address', '$profile_skills', '$profile_hobbies', '$profile_achievements', '$profile_experience')";
                if($conn->query($sql)) {
                    if(move_uploaded_file($file_tmp, "../img/profiles/" . $profile_avatar)) {
                        $flag = 1;
                    } else {
                        $flag = 1;
                    }
                } else {
                    $sql = "INSERT INTO user_profiles(uid, email, name, register_no, dept,year,dob, description, address, skills, hobbies, achievements, experience)
                            VALUES('$uid', '$user_email', '$profile_name', '$profile_register', '$profile_department', $profile_year, '$profile_dob', '$profile_description', '$profile_address', '$profile_skills', '$profile_hobbies', '$profile_achievements', '$profile_experience')";
                    $conn->query($sql);
                    $flag = 1;
                }
            }else {
                foreach ($errors as $e) {
                    echo $e . "<br />";
                }
            }
        }
        else {
            $sql = "INSERT INTO user_profiles(uid, email, name, register_no, dept,year,dob, description, address, skills, hobbies, achievements, experience)
                    VALUES('$uid', '$user_email', '$profile_name', '$profile_register', '$profile_department', $profile_year, '$profile_dob', '$profile_description', '$profile_address', '$profile_skills', '$profile_hobbies', '$profile_achievements', '$profile_experience')";
            if($conn->query($sql)){
                $flag = 1;
            }
        }
        if($flag == 1) {
            header('Location: ../index.php?isset=new_user');
        }
    } else {
        die("Connection failed" . $conn->connect_error);
    }
}
?>
