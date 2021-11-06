<?php  
require_once '../model/model.php';


if (isset($_POST['updateProduct'])) {
	$data['name'] = $_POST['name'];
	$data['Buying Price'] = $_POST['Buying Price'];
	$data['Selling Price'] = $_POST['Selling Price'];
	


  if (updateProduct($_POST['name'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../showProduct.php?id=' . $_POST["name"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>