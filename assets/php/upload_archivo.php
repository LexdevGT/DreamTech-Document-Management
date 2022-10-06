<?php
	session_start();
	date_default_timezone_set('America/Guatemala');
	require_once('connect.php');
$nombre_doc  = $_POST['nombre_doc'];
  $autor       = $_POST['autor'];
  $f_publi     = $_POST['f_publi'];
  $isbn        = $_POST['isbn'];
  $pag         = $_POST['pag'];
  $descrp      = $_POST['descrp'];
  $cat         = $_POST['cat'];
  $username   = $_SESSION['username'];

//error_log("CAT: $cat");
/*
  $query = "SELECT
  								path_cat,
                  name_cat
  								FROM 
  								categoria
  								WHERE
  								idCat = '$cat'";
error_log($query);
*/
/*
  		$execute_query = mysqli_query($conn,$query);
  		$rquery = mysqli_fetch_array($execute_query);

  	$pathcat = $rquery['path_cat'];
    $name_cat = $rquery['name_cat'];
*/
  if (!empty($nombre_doc)) {
  	// code...
  	$nombre_archivo = $_FILES['formFileSm']['name'];
		$tipo_archivo = $_FILES['formFileSm']['type'];
		$tamano_archivo = $_FILES['formFileSm']['size'];
		$tempo  =  $_FILES['formFileSm']['tmp_name'];
		$tipoArch = explode('/',$tipo_archivo[0]);

		$extension = $tipoArch[1];
		//error_log(print_r($extension));
  	if ($extension === "pdf" || $extension=== "vnd.openxmlformats-officedocument.spreadsheetml.sheet" || $extension ==='vnd.openxmlformats-officedocument.wordprocessingml.document' || $extension === 'jpg' || $extension==='jpeg'|| $extension==='png') {
  		
  		/*$ruta = $pathcat .$name_cat."/". $nombre_archivo[0];*/
      $ruta = $cat."/". $nombre_archivo[0];;
  		//error_log(print_r($ruta));
//error_log("RUTA: $ruta");
    if (move_uploaded_file($_FILES['formFileSm']['tmp_name'][0], $ruta)) {
        //more code here...
      $nom = explode(".",$nombre_archivo[0]);
      $nomb= $nom[0];
      /*$aut = $pathcat .$name_cat;*/
      $aut = $cat;
      $expl = explode("htmls",$aut);
      $expl2= explode("/", $expl[1]);

//error_log(print_r($exp1,true));

      $count_array = count($expl2);

      $count_name = $count_array - 1;


    $i=1;
    $link="";
    while ($i<$count_array) {
      // code...
      $link .= $expl2[$i]."/";
      //error_log($carpeta);
      $i++;
      
    }

    $categoria_array = explode("../../htmls/documents/",$cat);
//error_log(print_r($categoria_array,true));
    $categoria = array_pop($categoria_array);
//error_log($categoria);
    $ruta_cat = str_replace('../../htmls', '', $cat).'/';
//error_log($ruta_cat);

    $linkcomplete = $link.$nombre_archivo[0];

      $query1 = "INSERT INTO documentation (`display_name`, `file_name`, `description`, `size`, `cat1`, `ISBN`, `pages_qty`, `publish_date`, `author`, `file_path`)VALUES('$nomb','$nombre_archivo[0]','$descrp','$tamano_archivo[0]','$categoria','$isbn','$pag','$f_publi','$autor','$ruta_cat')";

      
/*
      $query2 = "INSERT INTO downloads (file_name,file_path,file_path_carpeta,pandora)VALUES('$nombre_archivo[0]','$linkcomplete','$link',MD5('$ruta'))";*/
      $execute_query = mysqli_query($conn,$query1);
     /* $execute_query2 = mysqli_query($conn,$query2);*/

      $descrip = "Upload-$nombre_archivo[0]-$username-1";

//      insert_log($descrip);
      //error_log($query2);
        echo $ruta;
    } else {
        echo "NO es formato";
    }
}else{echo "no es archivo";}
}else{
	echo "nombre vacio";
}

?>
