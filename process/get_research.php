<?php
include 'connect.php';

$user = $_GET['id'];

$sql = "SELECT * from research where user='$user' order by timestamp desc";
$result = $conn->query($sql);

 $sql1 = "SELECT * from research where user = '$user'";
 $result1 = $conn->query($sql);
 $row1 = $result1->fetch_assoc();
 $pid=$row1['research_id'];

    if (isset($_GET['pid'])) {
    $pid=$_GET['pid'];
    $sql = "SELECT * from research where research_id = '$pid'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $project_title=$row['research_title'];
    // $project_report=$row['project_report'];
    $project_requirement=$row['research_requirement'];
    $project_bp=$row['research_bp'];
    $project_user=$row['user'];
    $timestamp=$row['timestamp'];
  }



if($result->num_rows > 0) {
    echo '<ul class="list-group">';

    while($row = $result->fetch_assoc()) {
        echo '<div class="col-md-4 col-xs-12">';
        if($row['research_status'] == 'unread') {
            echo        '<div class="panel panel-default">
                            <div class="panel-heading">
                                Under Review
                            </div>';
        } else if($row['research_status'] == 'accepted') {
            echo        '<div class="panel panel-success">
                            <div class="panel-heading">
                                Accepted

                            </div>';
        } else if($row['research_status'] == 'rejected') {
            echo        '<div class="panel panel-danger">
                            <div class="panel-heading">
                                Rejected
                            </div>';
        }

        echo        '<div class="panel-body">' .
                        '<h7>' . $row['research_title'] . '</h7>' .
                    '</div>' .
                    '<div class="panel-footer">' .
                        $row['timestamp'] .
                        '<div class="pull-right">' .

                          '<button class="btn btn-primary" data-toggle="modal" data-target="#viewModal" style="padding-left:10px;">View</button></tr>' .
                        '</div>' .
                    '</div>' .
                '</div>';

                  echo    '<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-hidden="true">' .
                                                                '<div class="modal-dialog">' .
                                                                    '<div class="modal-content">' .
                                                                         '<div class="modal-header">' .
                                                        '<h2 class="modal-title" id="exampleModalLabel" style="text-align:left;">' . $row['research_title'] . '</h2>' .
        '<h5 class="modal-title" id="exampleModalLabel" style="text-align:left;">' . $row['timestamp'] .'</h5>' .

        '</div>' .
      '<div class="modal-body">' .
      '<h5 style="text-align:left;">Research Requirement- ' . $row['research_requirement'] . '</h5>' .
      '<br>' .
      '</div>' .
      '<div class="modal-footer">' .
       '<a class="btn btn-primary" href="./uploads/research/<?php echo $research_bp; ?>">Research Report </a>' .
      '</div>' .
    '</div>' .
  '</div>' .
'</div>' ;


        echo '</div>';
    }
} else {
    echo '<p><h6 style="text-align:center;">No Research Form added yet.</h6></p>';
}
?>
