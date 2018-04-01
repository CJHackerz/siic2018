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
    $team_email = test_input($_POST['team_email']);
    $authkey = md5(uniqid());

    $sql = "SELECT * from team_invites where email = '$team_email'";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        $sql = "DELETE * from team_invites where email = '$team_email'";
        $conn->query($sql);
    }

    $sql = "INSERT INTO team_invites(email, authkey, valid) VALUES('$team_email', '$authkey', 1)";

    if ($conn->query($sql) ) {
         $result = $mgClient->sendMessage($domain, array(
                      'from'    =>    'SRMIIC NoReply <noreply@srmiic.com>',
                      'to'      =>    'Hello User <' . $team_email . '>',
                      'subject' =>    'SIIC Team Invite',
                      'html'    =>    '<p>Greetings from team SIIC. We have sent you an invite to create your team. Please <a href="https://srmiic.com/newteam.php?email=' . $team_email . '&auth=' . $authkey . '">Click Here</a> to join</p>'
                  ));

          header('Location: ../pages/teams.php?invite=sent');
    }
}
?>
