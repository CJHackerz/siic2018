<?php
    require '../vendor/autoload.php';
    use Mailgun\Mailgun;

    include './connect.php';
    include './utils.php';

    # Instantiate the client.
    $mgClient = new Mailgun('key-28f57d982d256aa39f2fa195678151b3');
    $domain = "mail.srmiic.com";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $startup_title      =   test_input($_POST['startup_title']);
        // $startup_report     =   test_input($_POST['startup_report']);
        // $startup_datetime       =   $_POST['startup_datetime'];
        session_start();

        $user   =   $_SESSION['user'];
        $team   =   $_SESSION['team'];

        $startup_id     =    uniqid('ST');

        $file_name = $_FILES["startup_bp"]['name'];
        $file_size = $_FILES["startup_bp"]["size"];
        $file_tmp  = $_FILES["startup_bp"]['tmp_name'];
        $file_type = $_FILES["startup_bp"]['type'];
        $info = pathinfo($file_name);
        $ext= $info['extension'];
        $file_ext=strtolower($ext);

        $extensions= array("doc","docx","pdf","ppt");

        $authkey = md5(uniqid());

        if(empty($file_name) && $file_size==0) {
            $sql = "INSERT INTO startup(startup_id, startup_title, user, team)
                    VALUES('$startup_id', '$startup_title', '$user', '$team')";

                    if($conn->query($sql)) {
                        header('Location: ../profile.php?submission=success');
                    } else {
                        echo $conn->error;
                    }
        }else {
          if($_FILES['startup_bp']['error'] === UPLOAD_ERR_OK) {
                if(in_array($file_ext,$extensions)=== false){
                    header('Location: ../newStartup.php?error=ext');
                    die();
                }
                if($file_size > 4194304) {
                    header('Location: ../newStartup.php?error=size');
                    die();
                }
          } else {
              header('Location: ../newStartup.php?error=size');
              die();
          }
          $startup_bp = $startup_id . "." . $file_ext;
          $sql = "INSERT INTO startup(startup_id, startup_title, user, team,startup_bp)
                  VALUES('$startup_id', '$startup_title', '$user', '$team','$startup_bp')";

                  if($conn->query($sql)) {

                        $result = $mgClient->sendMessage($domain, array(
                            'from'    =>    'SRMIIC NoReply <noreply@srmiic.com>',
                            'to'      =>    'Hello User <' . $_SESSION['user'] . '>',
                            'subject' =>    'Your Startup proposal is under review is under review',
                            'html'    =>    '<p>You are receiving this mail because you have sent us a startup request. Your request has reached us successfully and is under review. You shall receive a notification within a couple of days regarding your startup proposal status.</p>'
                        ));

                      move_uploaded_file($file_tmp, "../uploads/startup/" . $startup_bp);

                     header('Location: ../profile.php?submission=success');
                  } else {
                      echo $conn->error;
                  }
        }

    }
?>
