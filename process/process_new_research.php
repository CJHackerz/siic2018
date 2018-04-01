<?php
    include './connect.php';
    include './utils.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $research_title     =   test_input($_POST['research_title']);
        $research_report    =   test_input($_POST['research_report']);
        $research_requirement   =   test_input($_POST['research_requirement']);

        session_start();

        $user   =   $_SESSION['user'];
        $team   =   $_SESSION['team'];

        $research_id     =    uniqid('RE');

        $sql = "INSERT INTO research(research_id, research_title, research_report, research_requirement, user, team)
                VALUES('$research_id', '$research_title', '$research_report', '$research_requirement', '$user', '$team')";

        if($conn->query($sql)) {
            header('Location: ../profile.php?submission=success');
        } else {
            header('Location: ../profile.php?submission=error');
        }
    }
?>
