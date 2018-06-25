<?php
include 'connect.php';
include 'utils.php';

header('Content-type: application/json');


if($_SERVER["REQUEST_METHOD"] == 'POST') {
    $user   = test_input($_POST['uid']);
    $key    = test_input($_POST['key']);


    $result = $conn->query("SELECT * from user_resets where email = '$user' and reset_key = '$key' and valid = 1");

    if($result->num_rows > 0) {
      $user_password = test_input($_POST['newpass']);

      $options = [
      'cost' => 12,
  ];
  $pass = password_hash("$user_password", PASSWORD_BCRYPT, $options);



        $conn->query("UPDATE users set password = '$pass' where email = '$user'");
        $conn->query("UPDATE user_resets set valid = 0 where email = '$user'");

        $arrData = [
            'status'    => 200,
            'message'   => 'reset password success'
        ];
        echo json_encode($arrData);
    } else {
        $arrData = [
            'status'    => 400,
            'message'   => 'reset password fail',
            'data'      => [
                'uid'   => $user,
                'key'   => $key,
            ]
        ];
        echo json_encode($arrData);
    }
} else {
    $arrData = array(
        'status'    => 400,
        'message'   => 'bad request'
    );
    echo json_encode($arrData);
}

?>
