<?php
include 'connect.php';
$user = $_GET['id'];
$sql = "SELECT * from research where user='$user' order by timestamp desc";
$result = $conn->query($sql);
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
                                <div class="pull-right">
                                    <button class="btn btn-success" onclick="viewInstructions()">Instructions</button>
                                </div>
                            </div>';
        } else if($row['research_status'] == 'rejected') {
            echo        '<div class="panel panel-danger">
                            <div class="panel-heading">
                                Rejected
                            </div>';
        }
        echo        '<div class="panel-body">' .
                        '<h5>' . $row['research_title'] . '</h5>' .
                    '</div>' .
                    '<div class="panel-footer">' .
                        $row['timestamp'] .
                        '<div class="pull-right">' .
                        '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">open</button>'.
                        '<div id="myModal" class="modal fade" role="dialog">'.
                        '<div class="modal-dialog">'.
                        '<div class="modal-content">'.
                        '<button type="button" class="close" data-dismiss="modal">&times;</button>';
                        $row1=mysqli_fetch_array($result);
      if($row1)
      {
      ?>
      <form method="get" action"get_research.php">
        <pre>
      <label>Research ID</label></br>
      <input type="text" value="<?php echo"$row1[0]"?>" name="t1"/></br>
      <label>Research Title</label></br>
      <input type="text" value="<?php echo"$row1[1]"?>" name="t2"/></br>
      <label>Research Report</label></br>
      <input type="text" value="<?php echo"$row1[2]"?>" name="t3"/></br>
      <label>Research requirement</label></br>
      <input type="text" value="<?php echo"$row1[3]"?>" name="t4"/></br>
      <label>User</label></br>
      <input type="text" value="<?php echo"$row1[4]"?>" name="t5"/></br>
      <label>Research status</label></br>
      <input type="text" value="<?php echo"$row1[6]"?>" name="t7"/></br>
    </pre>
  </form>
      <?php
    }
    ?>
    <?php
        echo
                      '<span style="margin-left:5px;"><button type="button" class="btn btn-primary" data-dismiss="modal">Close</button></span>'.
                        '</div>'.
                        '</div>'.
                        '</div>'.
                        '</div>'.
                    '</div>'.
                '</div>';
        echo '</div>';
    }
} else {
    echo '<p><h6 style="text-align:center;">No Research Form added yet.</h6></p>';
}
?>
