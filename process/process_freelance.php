<?php
  include './connect.php';
  include './utils.php';
  require '../vendor/autoload.php';
  error_reporting(0);
  use Mailgun\Mailgun;
  $mgClient = new Mailgun('key-28f57d982d256aa39f2fa195678151b3');
  $domain = "mail.srmiic.com";

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
      $email =  $_POST['skills_email'];
      $arts = implode(",",$_POST['skills_arts']);
      $media =  implode(",",$_POST['skills_media']);
      $contentwriting= implode(",",$_POST['skills_content_writing']);
      $graphicdesign = implode(",",$_POST['skills_graphic_design']);
      $corporate =  implode(",",$_POST['skills_corporate']);
      $sandm =  implode(",",$_POST['skills_sandm']);
      $mechanical = implode(",",$_POST['skills_mechanical']);
      $threeD =  implode(",",$_POST['skills_threeD']);
      $mandf =  implode(",",$_POST['skills_mandf']);
      $automation = implode(",",$_POST['skills_automation']);
      $hardware =  implode(",",$_POST['skills_hardware']);
      $eda = implode(",",$_POST['skills_EDA']);
      $generalengg = implode(",",$_POST['skills_generalengg']);
      $websites =  implode(",",$_POST['skills_websites']);
      $proglang =  implode(",",$_POST['skills_proglang']);
      $mobappdev =  implode(",",$_POST['skills_mobappdev']);
      $interior =  implode(",",$_POST['skills_interior']);
      $trainer = implode(",",$_POST['skills_trainer']);
      $certifiedby =  implode(",",$_POST['skills_certifiedby']);
      $field =  implode(",",$_POST['skills_field']);
      $name = $_POST['skills_name'];
      $dept = $_POST['skills_dept'];
      $contactno = $_POST['skills_contactno'];


     $sql = "SELECT * FROM freelance where email = '$email'";
     $result = $conn->query($sql);

     if($result->num_rows > 0) {
          header('Location: ../freelance_form.php?user_exists');
      } else {
        $pass = md5(uniqid());
        $sql = "INSERT INTO freelance(email, password, arts, media, contentwriting, graphicdesign, corporate, sandm, mechanical, threeD, mandf, automation, hardware, EDA, generalengg, websites, proglang, mobappdev, interior , trainer, certifiedby, field, name, dept , contactno ) VALUES('$email','$pass', '$arts', '$media', '$contentwriting', '$graphicdesign', '$corporate', '$sandm', '$mechanical', '$threeD', '$mandf', '$automation', '$hardware', '$EDA', '$generalengg', '$websites', '$proglang', '$mobappdev', '$interior', '$trainer', '$certifiedby', '$field', '$name', '$dept', '$contactno')";

        if($conn->query($sql)) {
          header('Location: ../confirm_prompt.php');

          $result = $mgClient->sendMessage($domain, array(
            'from'    =>    'SRMIIC NoReply <noreply@srmiic.com>',
            'to'      =>    'Hello User <' . $email . '>',
            'subject' =>    'Welcome to SRMIIC Mentor!',
            'html'    =>    '<p>Thank you for registering for Be your own Prodigy! Your password is :' . $pass .'. The mentor site is currently under construction. You will be notified once it is ready! Thanks again!'
          ));
        } else {
          header('Location: ../_error/500.php?sql_failed');
        }
      }
    // } else {
    //   header('Location: ../freelance_form.php?params_missing');
    // }
  } else {
    header('Location: ../freelance_form.php');
  }
?>
