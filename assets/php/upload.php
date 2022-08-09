<?php
	session_start();
	date_default_timezone_set('America/Guatemala');
	require_once('connect.php');
if (isset($_FILES['img_slider_principal'])) {
	# code...

	$countfiles = count($_FILES['img_slider_principal']['name']);
	$upload_location = '../../htmls/images/slider_img/';
//error_log($_SESSION['id']);
	$u = $_SESSION['company_id'];

	/*
    if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
        //echo "ERROR!";
    }
    else {
        move_uploaded_file($_FILES['file']['tmp_name'], '../../uploads/' . $_FILES['file']['name']);
    }
	*/
	// To store uploaded files path
	$files_arr = array();

	// Loop all files
	for($index = 0;$index < $countfiles;$index++){

	   // File name
	   $filename = $_FILES['img_slider_principal']['name'][$index];
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
		     if(move_uploaded_file($_FILES['img_slider_principal']['tmp_name'][$index],$path)){
		        $files_arr[] = $path;
		        $query = "
							INSERT INTO design(object,path_text,company_id)
							VALUES
							('SLIDER_PRINCIPAL','$new_name',$u)
							ON DUPLICATE KEY UPDATE path_text = '$new_name'
					   ";
		        $conn->query($query);
				echo "Slider principal guardado!";
		     }
		}
	}
}else{
	echo "No files";
}
?>
