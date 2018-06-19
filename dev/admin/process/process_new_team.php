<?php
require '../../../vendor/autoload.php';
use Mailgun\Mailgun;

include './connect.php';
include './utils.php';

$mgClient = new Mailgun('key-28f57d982d256aa39f2fa195678151b3');
$domain = "mail.srmiic.com";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(isset($_POST['team_name']))
  {
    echo $_POST['team_name'];
    $team_name              =   $_POST['team_name'];
  }
  else{
    echo "hello";
  }
    $user_password              =   test_input($_POST['team_password']);
    $options = [
      'cost' => 12,
                ];
    $team_passs = password_hash("$user_password", PASSWORD_BCRYPT, $options);
    $team_desc              =   test_input($_POST['team_desc']);
    $team_email             =   test_input($_POST['team_email']);
    $team_passs              =   md5(test_input($_POST['team_password']));
    $team_type              =   test_input($_POST['userType']);
    $team_contact           =   test_input($_POST['team_contact']);
    $team_website           =   test_input($_POST['team_link']);
    $team_fb                =   test_input($_POST['team_fb_link']);
    $errors = "";

    $file_name = $_FILES["team_logo"]['name'];
    $file_size = $_FILES["team_logo"]['size'];
    $file_tmp  = $_FILES["team_logo"]['tmp_name'];
    $file_type = $_FILES["team_logo"]['type'];
    $t=end(explode('.',$file_name));
    $file_ext=strtolower($t);
    $extensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)=== false){
        $errors ="extension not allowed";
    }
    if($file_size > 2097152) {
        $errors ='File size must be less than 2MB';
    }
    if($errors == "") {
        $result = $conn->query("SELECT * from teams where team_email = " . $team_email);
        if($result->num_rows > 0) {
            header('Location: ../../../newteam.php?status=email_conf');
            die();
        }

        //$team_id = uniqid('ST');

        $team_logo  = $team_id . "." . $file_ext;

        $sql = "INSERT INTO teams(team_id,team_name,password,description,team_email,logo, type, website, contact, fb)
                VALUES('$team_id', '$team_name', '$team_password','$team_desc','$team_email','$team_logo', '$team_type', '$team_website', '$team_contact', '$team_fb_link')";

        $conn->query($sql);
        $mgClient->sendMessage($domain, array(
                     'from'    =>    'SRMIIC NoReply <noreply@srmiic.com>',
                     'to'      =>    'Hello User <' . $team_email . '>',
                     'subject' =>    'Welcome to SIIC',
                     'html'    =>    '<p>You can now login to your Team Account <a href="https://srmiic.com/signIn.php?email=' . $team_email . '">Click Here</a> to continue</p>'
                 ));
        // $sql = "UPDATE user_profiles set teams = CONCAT(teams, '$team_id,') where email = '$user'";
        // $conn->query($sql);

        move_uploaded_file($file_tmp, "../../../teams/img/" . $team_logo);
        // header to team page stat = nc triggers success msg
        header('Location: ../../../teampage.php?id=' . $team_id . '&stat=nc');
    }else{
        echo $errors;
    }
}
?>
