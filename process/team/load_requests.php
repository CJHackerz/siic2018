<?php
include '../connect.php';
include '../utils.php';

$team_id    =   $_POST['id'];

$sql = "SELECT * from team_members INNER JOIN user_profiles ON team_members.uid = user_profiles.uid and team_members.status = 'requested' and team_members.team_id = '$team_id' "; //

$result = $conn->query($sql);

if($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

                echo
                            '<div style="margin-top:-370px;position:relative" class="well" id="' . $row['email'] . '">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" >
                                        <a href="./viewProfile.php?uid=' . $row['email'] . '">' . $row['name'] . '</a> wants to join your team
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                                        <button class="btn btn-red pull-right" onclick="rejectRequest(this.value)" value="' . $row['email'] . '">Delete Request</button>
                                        <button class="btn btn-success pull-right" onclick="acceptRequest(this.value)" value="' . $row['email'] . '">Accept</button>
                                    </div>
                                </div>
                            </div>';
                }
}
?>
