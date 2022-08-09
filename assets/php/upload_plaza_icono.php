<?php
	session_start();
	date_default_timezone_set('America/Guatemala');
	require_once('connect.php');
if (isset($_FILES['ficha_catalogo_icono'])) {

	$countfiles = count($_FILES['ficha_catalogo_icono']['name']);
	$upload_location = '../../htmls/images/plazas_icons/';
//error_log($_SESSION['id']);
	$u 	= $_SESSION['company_id'];
	$id = $_SESSION['id_plaza_icono'];
	if(!isset($_SESSION['id_plaza_icono'])){
		unset($_SESSION['ficha_catalogo_id']);
	}
//error_log("EL ID: $id");

	// To store uploaded files path
	$files_arr = array();

	// Loop all files
	for($index = 0;$index < $countfiles;$index++){

	   // File name
	   $filename = $_FILES['ficha_catalogo_icono']['name'][$index];
//error_log($filename);
	   // Get extension
	   $ext = pathinfo($filename, PATHINFO_EXTENSION);
	   $new_name = $u.time().'.'.$ext;
	   // Valid image extension
	   $valid_ext = array("png","jpg","gif","jpeg");

	   // Check extension
	   if(in_array($ext,$valid_ext)){

	     // File path
	     //$path = $upload_location.$filename;
	   	$path = $upload_location.$new_name;

	     // Upload file
		     if(move_uploaded_file($_FILES['ficha_catalogo_icono']['tmp_name'][$index],$path)){
		        $files_arr[] = $path;
		        $query = "
							UPDATE plazas
							SET plaza_icono = '$new_name'
							WHERE plaza_id = $id
					   ";
		        $conn->query($query);
				echo "Icono guardado!";
		     }
		}
	}
}else{
	echo "No files";
}
?>
