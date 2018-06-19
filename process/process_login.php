<?php
include './connect.php';
include './utils.php';
require '../vendor/autoload.php';
use Mailgun\Mailgun;
$mgClient = new Mailgun('key-28f57d982d256aa39f2fa195678151b3');
$domain = "mail.srmiic.com";
$flag = 0;
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_email     = test_input($_POST["user_email"]);
    $user_password  = test_input($_POST["user_password"]);
    $sql1 = "SELECT * from users where email = '$user_email'";
  $result1 = $conn->query($sql1);
    if($result1->num_rows > 0) {
        $row1 = $result1->fetch_assoc();
        if($row1['reset'] == 0)
      {
        $encrypt_pass = md5($user_password);
        if($encrypt_pass == $row1['password'])
        {
          $authkey=md5(uniqid());
          $uid = $row1['uid'];
          $sql2 = "INSERT INTO users(authkey) values('$authkey')";
          $result = $mgClient->sendMessage($domain, array(
            'from'    =>    'SRMIIC NoReply <noreply@srmiic.com>',
            'to'      =>    $user_email,
            'subject' =>    'Welcome to SRMIIC! Please change your password',
            'html'    =>    '<p>For security reasons the password change request is generated. Click on the link below to change your password.</p><a href="www.srmiic.com/verify.php?authkey=' . $authkey . '&uid=' . $uid . '&reset">Click here</a>'
          ));
          header('Location: ../prompt.php');
        }
        else {
          header('Location:../signIn.php?error=true');
        }
      }
      else
      {
        $sql = "SELECT * FROM users where email = '$user_email'";
        $sql3 = "SELECT * from user_profiles WHERE email = '$user_email'";
        $result = $conn->query($sql);
        $result3 = $conn->query($sql3);
        $row  = $result->fetch_assoc();
        $user_name = $result3->fetch_assoc();
        if(password_verify($user_password, $row['password']))
        {
          session_start();
          $_SESSION["user_name"]  = $user_name['name'];
          $_SESSION["user"]       = $user_email;
          $_SESSION["user_id"]    = $row["uid"];
          $_SESSION["team"]       = "false";
          setcookie('user',$_SESSION['user'],time() + (86400*7));
          header('Location: ../profile.php');
        }
        else {
          header('Location: ../signIn.php?error=true');
        }
      }
    } else {
        $sql1 = "SELECT * from teams where team_email = '$user_email'";
        $result1 = $conn->query($sql1);
        if($result1->num_rows > 0) {
            $row1 = $result1->fetch_assoc();
            if($row1['reset'] == 0)
          {
            $encrypt_pass = md5($user_password);
            if($encrypt_pass == $row1['password'])
            {
              $authkey=md5(uniqid());
              $uid = $row1['uid'];
              $sql2 = "INSERT INTO users(authkey) values('$authkey')";
              $result = $mgClient->sendMessage($domain, array(
                'from'    =>    'SRMIIC NoReply <noreply@srmiic.com>',
                'to'      =>    $user_email,
                'subject' =>    'Welcome to SRMIIC! Please change your password',
                'html'    =>    '<p>For security reasons the password change request is generated. Click on the link below to change your password.</p><a href="www.srmiic.com/verify.php?authkey=' . $authkey . '&uid=' . $uid . '&reset">Click here</a>'
              ));
              header('Location: ../prompt.php');
            }
            else {
              header('Location:../signIn.php?error=true');
            }
          }
          else
          {
            $sql = "SELECT * FROM teams where team_email = '$user_email'";
            $sql3 = "SELECT * from user_profiles WHERE email = '$user_email'";
            $result = $conn->query($sql);
            $result3 = $conn->query($sql3);
            $row  = $result->fetch_assoc();
            $user_name = $result3->fetch_assoc();
            if(password_verify($user_password, $row['password']))
            {
              session_start();
              $_SESSION["user_name"]  = $row['team_name'];
              $_SESSION["user"]       = $user_email;
              $_SESSION["user_id"]    = $row["team_id"];
              $_SESSION["team"]       = "true";
              setcookie('user',$_SESSION['user'],time() + (86400*7));
              header('Location: ../teampage.php?id=' . $row['team_id']);
            }
            else {
              header('Location: ../signIn.php?error=true');
            }
          }
          }
        else {
            header('Location: ../signIn.php?error=true');
        }
    }
}
?>
