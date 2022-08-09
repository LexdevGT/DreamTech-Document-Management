<?php
	session_start();

	date_default_timezone_set('America/Guatemala');
	require_once('connect.php');

if (isset($_POST['plaza'])) {
	$plaza = $_POST['plaza'];
}else{
	$plaza = '';
}

if (isset($_POST['sucursal'])) {
	$sucursal = $_POST['sucursal'];
}else{
	$sucursal = '';
}

if (isset($_FILES['modal_hoja_de_vida'])) {

	$countfiles = count($_FILES['modal_hoja_de_vida']['name']);
	$upload_location = '../../htmls/hojas_de_vida/';

	// To store uploaded files path
	$files_arr = array();

	// Loop all files
	for($index = 0;$index < $countfiles;$index++){

	   // File name
	   $filename = $_FILES['modal_hoja_de_vida']['name'][$index];
		
	   // Get extension
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
		$dir = pathinfo($filename, PATHINFO_DIRNAME);

		$new_name = $plaza.'_'.$sucursal.'_'.time().'.'.$ext;
	

		$path = $upload_location.$new_name;

		 // Upload file
		 if(move_uploaded_file($_FILES['modal_hoja_de_vida']['tmp_name'][$index],$path)){

			echo "Hoja de vida guardada!";
		 }
	}
}else{
	echo "No files";
}
?>
