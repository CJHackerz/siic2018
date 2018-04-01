<?php
include './connect.php';
include './utils.php';
require_once './parsecsv.lib.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$csv_name = $_FILES['items_csv']['name'];
	$csv_tmp  = $_FILES['items_csv']['tmp_name'];
	$csv_ext  = strtolower(end(explode('.', $_FILES['items_csv']['name'])));
	
	$errors   = "";

	if(strcmp($csv_ext, '.csv') === false){
		$errors[] = 'file must be a .csv';
		print_r($errors);
	}
	
	if($errors == ""){
		$csv_file = new parseCSV($csv_tmp);
		echo sizeof($csv_file->data);
		sizeof($csv_file->data);
		for($i=0; $i<sizeof($csv_file->data); $i++){
			$sql = "INSERT INTO inventory (unique_id, entered_by, product_name, image_url, specs, quantity, price, entered_on) 
					VALUES('" . $csv_file->data[$i]['UNIQUE_ID'] . "', '" . $csv_file->data[$i]['ENTERED_BY'] . "', '" . $csv_file->data[$i]['NAME_OF_PRODUCT'] . "', '" . $csv_file->data[$i]['IMAGES'] . "', '" . $csv_file->data[$i]['SPECIFICATIONS'] . "', '" . $csv_file->data[$i]['QTY'] . "', '" . $csv_file->data[$i]['PRICE'] . "', '" . $csv_file->data[$i]['ENTERED_ON'] . "')";

			$conn->query($sql);
		}
		header('Location: ../pages/inventory.php?status=success');
	}	
}		
?>

