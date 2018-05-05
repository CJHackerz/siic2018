<?php
    require '../vendor/autoload.php';
    use Mailgun\Mailgun;

    # Instantiate the client.
    $mgClient = new Mailgun('key-28f57d982d256aa39f2fa195678151b3');
    $domain = "webarchsrm.com";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']))  {
            # Make the call to the client.
            $result = $mgClient->sendMessage($domain, array(
                'from'    => $_POST['name'].' '.$_POST['email'],
                'to'      => 'gupta.mohit0210@gmail.com',
                'subject' => 'Mail from SIIC contact form',
                'text'    => $_POST['message']
            ));

            header('Location: ../index.php?mail=sent');
        } else {
            header('Location: ../index.php?mail=error');
        }
    }
?>
