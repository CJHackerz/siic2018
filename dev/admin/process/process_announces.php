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
    $announce_id = test_input($_POST['project_id']);
    $sql = "";
    $status = "";
    if (isset($_POST['accept'])) {
        $sql = "UPDATE announcement set status = 'accepted' where announce_id='$announce_id' " ;
        $status = "accepted";
    } elseif (isset($_POST['reject'])) {
        $sql = "UPDATE announcement set status = 'rejected' where announce_id='$announce_id' " ;
        $status = "rejected";
    }

    if($status=="accepted")
        $text = "Congratulations,Your request is posted in the announcements!!";
    else
        $text = "Sorry,We did not accept it.";

    if ($conn-> query($sql) ) {

         $result = $mgClient->sendMessage($domain, array(
                      'from'    =>    'SRMIIC NoReply <noreply@srmiic.com>',
                      'to'      =>    'Hello User <' . $email . '>',
                      'subject' =>    'Your project is ' . $status,
                      'html'    =>    '<p>' . $text . '</p>'
                  ));
      header('Location: ../pages/announcement.php?status=' . $status);
    }
}
?>
