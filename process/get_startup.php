<?php
include 'connect.php';

$user = $_GET['id'];

$sql = "SELECT * from startup where user='$user' order by timestamp desc";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    echo '<ul class="list-group">';

    while($row = $result->fetch_assoc()) {
        echo '<div class="col-md-4 col-xs-12">';
        if($row['startup_status'] == 'unread') {
            echo        '<div class="panel panel-default">
                            <div class="panel-heading">
                                Under Review
                            </div>';
        } else if($row['startup_status'] == 'accepted') {
            echo        '<div class="panel panel-success">
                            <div class="panel-heading">
                                Accepted
                                <div class="pull-right">
                                    <button class="btn btn-success" onclick="viewInstructions()">Instructions</button>
                                </div>
                            </div>';
        } else if($row['startup_status'] == 'rejected') {
            echo        '<div class="panel panel-danger">
                            <div class="panel-heading">
                                Rejected
                            </div>';
        }

        echo        '<div class="panel-body">' .
                        '<h5>' . $row['startup_title'] . '</h5>' .
                    '</div>' .
                    '<div class="panel-footer">' .
                        $row['timestamp'] .
                        '<div class="pull-right">' .
                            '<button class="btn btn-primary">View</button>'.
                        '</div>' .
                    '</div>' .
                '</div>';
        echo '</div>';
    }

} else {
    echo '<p><h6 style="text-align:center;">No Startup Form added yet.</h6></p>';
}
?>
