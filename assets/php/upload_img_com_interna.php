<?php
	session_start();
	date_default_timezone_set('America/Guatemala');
	require_once('connect.php');
if (isset($_FILES['img_com_interna'])) {

	$countfiles = count($_FILES['img_com_interna']['name']);
	$upload_location = '../../htmls/images/com_interna_img/';

	$u = $_SESSION['company_id'];


	// To store uploaded files path
	$files_arr = array();

	// Loop all files
	for($index = 0;$index < $countfiles;$index++){

	   // File name
	   $filename = $_FILES['img_com_interna']['name'][$index];

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
		     if(move_uploaded_file($_FILES['img_com_interna']['tmp_name'][$index],$path)){
		        $files_arr[] = $path;
		        $query = "
							INSERT INTO design(object,path_text,company_id)
							VALUES
							('IMG_COM_INTERNA','$new_name',$u)
							ON DUPLICATE KEY UPDATE path_text = '$new_name'
					   ";
		        $conn->query($query);
				echo "Imagen com interna guardada!";
		     }
		}
	}
}else{
	echo "No files";
}
?>
