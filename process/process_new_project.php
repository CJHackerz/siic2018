<?php
    require '../vendor/autoload.php';
    use Mailgun\Mailgun;

    include './connect.php';
    include './utils.php';

    # Instantiate the client.
    $mgClient = new Mailgun('key-28f57d982d256aa39f2fa195678151b3');
    $domain = "mail.srmiic.com";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $project_title      =   test_input($_POST['project_title']);
        // $project_report     =   test_input($_POST['project_report']);
        $project_requirement    =   test_input($_POST['project_requirement']);

        session_start();

        $user   =   $_SESSION['user'];
        $team   =   $_SESSION['team'];

        $project_id     =    uniqid('PR');

        $file_name = $_FILES["project_bp"]['name'];
        $file_size = $_FILES["project_bp"]["size"];
        $file_tmp  = $_FILES["project_bp"]['tmp_name'];
        $file_type = $_FILES["project_bp"]['type'];
        $info = pathinfo($file_name);
        $ext= $info['extension'];
        $file_ext=strtolower($ext);

        $extensions= array("doc","docx","pdf","ppt");


        if(empty($file_name) && $file_size==0) {
          $sql = "INSERT INTO project(project_id, project_title, project_requirement, user, team)
                  VALUES('$project_id', '$project_title', '$project_requirement', '$user', '$team')";

                    if($conn->query($sql)) {
                        header('Location: ../profile.php?submission=success');
                    } else {
                        echo $conn->error;
                    }
        }else {
          if($_FILES['project_bp']['error'] === UPLOAD_ERR_OK) {
                if(in_array($file_ext,$extensions)=== false){
                    header('Location: ../newProject.php?error=ext');
                    die();
                }
                if($file_size > 4194304) {
                    header('Location: ../newProject.php?error=size');
                    die();
                }
          } else {
              header('Location: ../newProject.php?error=size');
              die();
          }
          $authkey = md5(uniqid());
          $project_bp = $project_id . "." . $file_ext;
          $sql = "INSERT INTO project(project_id, project_title, project_requirement, user, team,project_bp)
                  VALUES('$project_id', '$project_title', '$project_requirement', '$user', '$team','$project_bp')";

                  if($conn->query($sql)) {
                      move_uploaded_file($file_tmp, "../uploads/project/" . $project_bp);
                      $result = $mgClient->sendMessage($domain, array(
                      'from'    =>    'SRMIIC NoReply <noreply@srmiic.com>',
                      'to'      =>    'Hello User <' . $_SESSION['user'] . '>',
                      'subject' =>    'Your project is under review',
                      'html'    =>    '<p>You are receiving this mail because you have sent us a project request. Your request has reached us successfully and is under review. You shall receive a notification within a couple of days regarding your project status.</p>'
                  ));
                     header('Location: ../profile.php?submission=success');
                  } else {
                      echo $conn->error;
                  }
        }


    }
?>
