<?php
include 'connect.php';

$user = $_GET['id'];

$sql = "SELECT * from project where user='$user' order by timestamp desc";
$result = $conn->query($sql);

 $sql1 = "SELECT * from project where user = '$user'";
 $result1 = $conn->query($sql);
 $row1 = $result1->fetch_assoc();
 $pid=$row1['project_id'];

    if (isset($_GET['pid'])) {
    $pid=$_GET['pid'];
    $sql = "SELECT * from project where project_id = '$pid'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $project_title=$row['project_title'];
    // $project_report=$row['project_report'];
    $project_requirement=$row['project_requirement'];
    $project_bp=$row['project_bp'];
    $project_user=$row['user'];
    $timestamp=$row['timestamp'];
  }



if($result->num_rows > 0) {
    echo '<ul class="list-group">';

    while($row = $result->fetch_assoc()) {
        $pid = $row['project_id'];
        echo '<div class="col-md-4  " >';
        if($row['project_status'] == 'unread') {
            echo        '<div class="panel panel-default">
                            <div class="panel-heading">
                                Under Review
                            </div>';
        } else if($row['project_status'] == 'accepted') {
            echo        '<div class="panel panel-success">
                            <div class="panel-heading">
                                Accepted

                            </div>';
        } else if($row['project_status'] == 'rejected') {
            echo        '<div class="panel panel-danger">
                            <div class="panel-heading">
                                Rejected
                            </div>';
        }

        echo        '<div class="panel-body">' .
                        '<h7>' . $row['project_title'] . '</h7>' .
                    '</div>' .
                    '<div class="panel-footer">' .
                        $row['timestamp'] .
                        '<div class="pull-right">' .
                          "<a class='btn btn-primary' href='./project.php?pid=$pid' name='test_btn'>View</a>".
                        '</div>' .
                    '</div>' .
                '</div>';

        echo '</div>';
    }
} else {
    echo '<p><h6 style="text-align:center;">No Project Form added yet.</h6></p>';
}
?>
