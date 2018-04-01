<?php
include './connect.php';
include './utils.php';
require '../../../vendor/autoload.php';
use Mailgun\Mailgun;

$mgClient = new Mailgun('key-28f57d982d256aa39f2fa195678151b3');
    $domain = "mail.srmiic.com";
    $email = $_POST['user_email'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sql = "";
        $startup_id = test_input($_POST["startup_id"]);
        if(isset($_POST["accept"]))
        { $status = "accepted";
          $sql =" UPDATE startup
                SET startup_status = 'accepted'
                WHERE startup_id = '$startup_id'";
        }
        if(isset($_POST["reject"]))
        { $status= "rejected";
          $sql =" UPDATE startup
                SET startup_status = 'rejected'
                WHERE startup_id = '$startup_id'";
        }

        if($status=="accepted")
            $text = "Congratulations,We will contact you further!!";
        else
            $text = "Sorry,We did not accept it.";

        if ($conn->query($sql))
        {

          $result = $mgClient->sendMessage($domain, array(
                      'from'    =>    'SRMIIC NoReply <noreply@srmiic.com>',
                      'to'      =>    'Hello User <' . $email . '>',
                      'subject' =>    'Your startup idea is ' . $status,
                      'html'    =>    '<p>' . $text . '</p>'
                  ));
                  header('Location: ../pages/startup.php?status='.$status);
        }
}
?>
