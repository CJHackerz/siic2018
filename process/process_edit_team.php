<?php

include './connect.php';
include './utils.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $team_name              =   test_input($_POST['team_name']);
    $team_desc              =   test_input($_POST['team_desc']);
    $team_contact           =   test_input($_POST['team_contact']);
    $team_website           =   test_input($_POST['team_website']);
    $team_fb                =   test_input($_POST['team_fb']);
    $team_id                =   $_SESSION['user_id'];
    $errors = "";

    if($errors == "") {
        $result = $conn->query("SELECT * from teams where team_id = '$team_id'");
        if($result->num_rows > 0) {
            $conn->query("UPDATE teams set team_name = '$team_name', description = '$team_desc', contact = '$team_contact', website = '$team_website', fb = '$team_fb'
                            WHERE team_id = '$team_id'");
        }
    }else{
        echo $errors;
    }

    header('Location: ../teampage.php?id=' . $team_id);
}
?>
