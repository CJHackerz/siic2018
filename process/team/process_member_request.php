<?php
include '../connect.php';

session_start();
$team   =   $_SESSION['user'];
$email  =   $_POST['email'];
$type   =   $_POST['type'];

if($type == "accept") {
    $sql = "SELECT members_wait from teams where team_email = '$team'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    $members_wait = explode(',', $row['members_wait']);
    $new_members_wait = "";
    foreach ($members_wait as $m) {
        if($m != $email) {
            $new_members_wait += $m + ",";
        }
    }
    if($new_members_wait == "0") {
        $new_members_wait = "";
    }

    $sql = "UPDATE teams set members_wait = '$new_members_wait', members = CONCAT(members, '$email,') where team_email = '$team'";
    $conn->query($sql);

    $sql = "SELECT teams_wait from user_profiles where email = '$email'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    $teams_wait = explode(',', $row['teams_wait']);
    $new_teams_wait = "";
    foreach ($teams_wait as $t) {
        if($t != $team) {
            $new_teams_wait += $t + ",";
        }
    }

    if($new_teams_wait == "0") {
        $new_teams_wait = "";
    }

    $sql = "UPDATE user_profiles set teams_wait = '$new_teams_wait', teams = CONCAT(teams, '$team,') where email = '$email'";
    $conn->query($sql);

    $notif_id = uniqid('NOTIF');

    $sql = "INSERT INTO notifications(id,sender_email,sender_type,receiver_email,receiver_type,notif_type,notif_body)
            VALUES('$notif_id', '$team', 'team', '$email', 'user', 'JOIN_TEAM_REQUEST', 'ACCEPT')";

    $conn->query($sql);

    $response_array['status'] = 'success';
    echo json_encode($response_array);
} else {
    $sql = "SELECT members_wait from teams where team_email = '$team'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    $members_wait = explode(',', $row['members_wait']);
    $new_members_wait = "";
    foreach ($members_wait as $m) {
        if($m != $email) {
            $new_members_wait += $m + ",";
        }
    }
    if($new_members_wait == "0") {
        $new_members_wait = "";
    }

    $sql = "UPDATE teams set members_wait = '$new_members_wait' where team_email = '$team'";
    $conn->query($sql);

    $sql = "SELECT teams_wait from user_profiles where email = '$email'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    $teams_wait = explode(',', $row['teams_wait']);
    $new_teams_wait = "";
    foreach ($teams_wait as $t) {
        if($t != $team) {
            $new_teams_wait += $t + ",";
        }
    }

    if($new_teams_wait == "0") {
        $new_teams_wait = "";
    }

    $sql = "UPDATE user_profiles set teams_wait = '$new_teams_wait' where email = '$email'";
    $conn->query($sql);

    $notif_id = uniqid('NOTIF');

    $sql = "INSERT INTO notifications(id,sender_email,sender_type,receiver_email,receiver_type,notif_type,notif_body)
            VALUES('$notif_id', '$team', 'team', '$email', 'user', 'JOIN_TEAM_REQUEST', 'REJECT')";

    $conn->query($sql);

    $response_array['status'] = 'success';
    echo json_encode($response_array);
}
?>