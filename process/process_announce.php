<?php
    require '../vendor/autoload.php';
    use Mailgun\Mailgun;

    include './connect.php';
    include './utils.php';

    # Instantiate the client.
    $mgClient = new Mailgun('key-28f57d982d256aa39f2fa195678151b3');
    $domain = "mail.srmiic.com";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title      =   test_input($_POST['title']);
        $name       =   test_input($_POST['profile_name']);
        $email      =   test_input($_POST['user_email']);
        $desc       =   test_input($_POST['profile_desc']);
        // $project_report     =   test_input($_POST['project_report'])

        session_start();

        $user   =   $_SESSION['user'];
        $team   =   $_SESSION['team'];

        $announce_id     =    uniqid('A');

        $file_name = $_FILES["project_bp"]['name'];
        $file_size = $_FILES["project_bp"]["size"];
        $file_tmp  = $_FILES["project_bp"]['tmp_name'];
        $file_type = $_FILES["project_bp"]['type'];
        $info = pathinfo($file_name);
        $ext= $info['extension'];
        $file_ext=strtolower($ext);

        $extensions= array("jpg","jpeg","JPEG","PNG","JPG","png","");


        if(empty($file_name) && $file_size==0) {
          $sql = "INSERT INTO announcement(announce_id, announce_title, announce_deescription,name, user, team)
                  VALUES('$announce_id', '$title', '$desc','$name', '$user', '$team')";

                    if($conn->query($sql)) {
                        header('Location: ../announcements.php?submission=success');
                    } else {
                        echo $conn->error;
                    }
        }else {
          if($_FILES['project_bp']['error'] === UPLOAD_ERR_OK) {
                if(in_array($file_ext,$extensions)=== false){
                    header('Location: ../announcements_form.php?error=ext');
                    die();
                }
                if($file_size > 4194304) {
                    header('Location: ../announcements_form.php?error=size');
                    die();
                }
          } else {
              header('Location: ../announcements_form.php?error=size');
              die();
          }
          $authkey = md5(uniqid());
          $project_bp = $announce_id . "." . $file_ext;
          $sql = "INSERT INTO announcement(announce_id, announce_title, announce_deescription,name, user, team,project_bp)
                  VALUES('$announce_id', '$title', '$desc','$name', '$user', '$team','$project_bp')";

                  if($conn->query($sql)) {
                      move_uploaded_file($file_tmp, "../uploads/project/" . $project_bp);
                      $result = $mgClient->sendMessage($domain, array(
                      'from'    =>    'SRMIIC NoReply <noreply@srmiic.com>',
                      'to'      =>    'Hello User <' . $_SESSION['user'] . '>',
                      'subject' =>    'Your project is under review',
                      'html'    =>    '<p>You are receiving this mail because you have sent us a announcement request. Your request has reached us successfully and is under review. Your announcement will be up soon in the announcement column.</p>'
                  ));
                     header('Location: ../announcements.php?submission=success');
                  } else {
                      echo $conn->error;
                  }
        }


    }
?>
