<?php
include './connect.php';

$email    =   $_POST['id'];

$sql = "SELECT * from notifications where receiver_id = '$email'";

$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $temp_row = $conn->query("SELECT team_id,team_name from teams where team_email='$row[sender_email]'")->fetch_assoc();
        if($row['notif_body'] == 'ACCEPT') {
            echo
                        '<div class="well" id="' . $row['sender_email'] . '">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <a href="./teampage.php?id=' . $temp_row['team_id'] . '">' . $temp_row['team_name'] . '</a> has accepted your request to join their team
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                                </div>
                            </div>
                        </div>';
        } else if($row['notif_body'] == 'REJECT') {
            echo
                        '<div class="well" id="' . $row['sender_email'] . '">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <a href="./teampage.php?id=' . $temp_row['team_id'] . '">' . $temp_row['team_name'] . '</a> has rejected your request to join their team
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                                </div>
                            </div>
                        </div>';
        }
    }
} else {
    echo '<p><h6 style="text-align:center;">No new notifications</h6></p>';
}

?>
