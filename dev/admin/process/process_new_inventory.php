<?php
include './connect.php';
include './utils.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item_id        =   test_input($_POST['item_id']);
    $item_name      =   test_input($_POST['item_name']);
    $item_desc      =   test_input($_POST['item_description']);
    $item_quant     =   test_input($_POST['item_quantity']);

    $sql = "SELECT * FROM inventory where item_id = '$item_id'";
    $result = $conn->query($sql);
    $errors = "";

    $file_name = $_FILES["item_image"]['name'];
    $file_size = $_FILES["item_image"]['size'];
    $file_tmp  = $_FILES["item_image"]['tmp_name'];
    $file_type = $_FILES["item_image"]['type'];
    $file_ext=strtolower(end(explode('.',$_FILES["item_image"]['name'])));
    $extensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)=== false){
        $errors ="extension not allowed";
    }
    if($file_size > 1048576) {
        $errors ='File size must be less than 1MB';
    }
    if($errors == "") {
        $sql = "SELECT * from inventory where item_name = '$item_name'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            // Item already exists
            header('Location: ../pages/inventory.php?status=error&error=id_exists');
        } else {
            $item_image = $item_id . "." . $file_ext;
            $sql = "INSERT INTO inventory(item_id, item_name, item_description, item_quantity, item_availability, item_image)
                    VALUES('$item_id', '$item_name', '$item_desc', $item_quant, $item_quant,'$item_image')";
            $conn->query($sql);
            move_uploaded_file($file_tmp, "../../../items/img/" . $item_image);
            header('Location: ../pages/inventory.php?status=submitted');
        }
    }
}
?>
