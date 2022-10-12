<?php
	session_start();
//error_log('INICIANDO....');
	date_default_timezone_set('America/Guatemala');
	require_once('connect.php');
if (isset($_FILES['ficha_usuario_foto'])) {

	$countfiles = count($_FILES['ficha_usuario_foto']['name']);
	//error_log('count: '.$countfiles);
	$upload_location = '../../htmls/images/faces/';
//error_log($_SESSION['id']);
	$u 	= $_SESSION['company_id'];
	$id = $_SESSION['id_user_photo'];
	
	if(!isset($_SESSION['id_user_photo'])){
		unset($_SESSION['id_user_photo']);
	}
//error_log("EL ID: $id");

	// To store uploaded files path
	$files_arr = array();

	// Loop all files
	for($index = 0;$index < $countfiles;$index++){
//error_log('Entramos al FOR');
	   // File name
	   $filename = $_FILES['ficha_usuario_foto']['name'][$index];
//error_log($filename);
	   // Get extension
	   $ext = pathinfo($filename, PATHINFO_EXTENSION);
	   $new_name = $id.time().'.'.$ext;
	   // Valid image extension
	   $valid_ext = array("png","jpg","gif","jpeg");

	   // Check extension
	   if(in_array($ext,$valid_ext)){

	     // File path
	     //$path = $upload_location.$filename;
	   	$path = $upload_location.$new_name;

	     // Upload file
		     if(move_uploaded_file($_FILES['ficha_usuario_foto']['tmp_name'][$index],$path)){
		        $files_arr[] = $path;
		        $query = "
							UPDATE users
							SET user_photo = '$new_name'
							WHERE user_email = '$id'
					   ";
					   //error_log($query);
		        $conn->query($query);
				echo "Foto guardada!";
		     }
		}
	}
}else{
	//error_log('No entro en el IF');
	echo "No files";

}
?>
