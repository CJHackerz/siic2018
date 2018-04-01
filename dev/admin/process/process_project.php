<?php
include './connect.php';
include './utils.php';
require '../../../vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
    $mgClient = new Mailgun('key-28f57d982d256aa39f2fa195678151b3');
    $domain = "mail.srmiic.com";

    $email = $_POST['user_email'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $project_id = test_input($_POST['project_id']);
    $sql = "";
    $status = "";
    if (isset($_POST['accept'])) {
        $sql = "UPDATE project set project_status = 'accepted' where project_id='$project_id' " ;
        $status = "accepted";
    } elseif (isset($_POST['reject'])) {
        $sql = "UPDATE project set project_status = 'rejected' where project_id='$project_id' " ;
        $status = "rejected";
    }

    if($status=="accepted")
        $text = "Congratulations,We will contact you further!!";
    else
        $text = "Sorry,We did not accept it.";

    if ($conn-> query($sql) ) {

         $result = $mgClient->sendMessage($domain, array(
                      'from'    =>    'SRMIIC NoReply <noreply@srmiic.com>',
                      'to'      =>    'Hello User <' . $email . '>',
                      'subject' =>    'Your project is ' . $status,
                      'html'    =>    '<p>' . $text . '</p>'
                  ));
      header('Location: ../pages/project.php?status=' . $status);
    }
}
?>
