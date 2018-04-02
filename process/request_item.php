<?php
include './connect.php';
include './utils.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $item_id = $_POST['id'];
   $uid       = $_POST['uid'] ;
  $sql = "INSERT INTO inventory_request(uid,item_id) values ('$uid','$item_id')";
  $conn->query($sql);

  $response_array['status'] = 'success';
  echo json_encode($response_array);
}
?>
