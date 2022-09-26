
<?php
	session_start();
	date_default_timezone_set('America/Guatemala');
	require_once('connect.php');
	//require_once('../../htmls/mail_test.php');
	//error_log("hello: " . $_POST['option']);
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;

	require '../../htmls/PHPMailer/src/Exception.php';
	require '../../htmls/PHPMailer/src/PHPMailer.php';
	require '../../htmls/PHPMailer/src/SMTP.php';

	if(isset($_POST['option'])){
		$option = $_POST['option'];
	
		switch ($option) {
			case 'log_in':
				logInFunction();
				break;
			case 'log_out':
				logOutFunction();
				break;
			case 'security':
				securityFunction();
				break;
			case 'load_headbar':
				loadHeaderBarFunction();
				break;
			case 'load_users':
				loadUsersFunction();
				break;
			case 'get_user_info':
				getUserInfoFunction();
				break;
			case 'load_ficha_usuarios':
				loadFichaUsuariosFunction();
				break;
			case 'guardar_usuario':
				saveUserFunction();
				break;
			case 'load_roles':
				loadRolesFunction();
				break;
			case 'get_rol_info':
				getRolInfoFunction();
				break;
			case 'load_ficha_roles':
				loadFichaRolesFunction();
				break;
			case 'guardar_rol':
				saveRolFunction();
				break;
			case 'load_permisos':
				loadPermisosFunction();
				break;
			case 'load_permisos_info':
				loadPermisosInfoFunction();
				break;
			case 'guardar_permisos':
				savePermisosFunction();
				break;
			case 'load_design':
				loadDesignFunction();
				break;
			case 'guardar_diseno':
				saveDisenoFunction();
				break;
			case 'load_index':
				loadIndexFunction();
				break;
			case 'load_etapas':
				loadEtapasFunction();
				break;
			case 'get_etapa_info':
				getEtapaInfoFunction();
				break;
			case 'load_ficha_etapa':
				loadFichaEtapaFunction();
				break;
			case 'guardar_etapa':
				saveEtapaFunction();
				break;
			case 'load_etiquetas':
				loadEtiquetasFunction();
				break;
			case 'get_etiqueta_info':
				getEtiquetaInfoFunction();
				break;
			case 'load_ficha_etiquetas':
				loadFichaEtiquetasFunction();
				break;
			case 'guardar_etiqueta':
				saveEtiquetaFunction();
				break;
			case 'load_tareas_por_etapa':
				loadTareasPorEtapaFunction();
				break;
			case 'load_tareas_etapa_change':
				loadTareasPorEtapaChangeFunction();
				break;
			case 'get_tarea_info':
				getTareaInfoFunction();
				break;
			case 'load_ficha_tareas_etapa':
				loadFichaTareasEtapaFunction();
				break;
			case 'guardar_tarea':
				saveTareaFunction();
				break;
			case 'load_empresas':
				loadEmpresasFunction();
				break;
			case 'get_empresa_info':
				getEmpresaInfoFunction();
				break;
			case 'load_ficha_empresa':
				loadFichaEmpresaFunction();
				break;
			case 'guardar_empresa':
				saveEmpresaFunction();
				break;
			case 'load_formulario':
				loadFormularioFunction();
				break;
			case 'load_info_formulario':
				loadInfoFormularioFunction();
				break;
			case 'insert_field':
				insertFieldFunction();
				break;
			case 'load_catalogo':
				loadCatalogoFunction();
				break;
			case 'get_catalogo_info':
				getCatalogoInfoFunction();
				break;
			case 'load_ficha_catalogo':
				loadFichaCatalogoFunction();
				break;
			case 'guardar_catalogo':
				saveCatalogoFunction();
				break;
			case 'load_formulario_plaza':
				loadFormularioPlazaFunction();
				break;
			case 'save_plaza_field':
				savePlazaFieldFunction();
				break;
			case 'load_div_plazas':
				loadDivPlazasFunction();
				break;
			case 'guardar_suscripcion':
				saveSuscripcionFunction();
				break;
			case 'load_candidatos':
				loadCandidatosFunction();
				break;
			case 'load_candidatos_info':
				loadCandidatosInfoFunction();
				break;
			case 'get_candidato_info':
				getCandidatoInfoFunction();
				break;
			case 'load_ficha_candidato':
				loadFichaCandidatoFunction();
				break;
			case 'save_task_status':
				saveTaskStatusFunction();
				break;
			case 'change_etapa_progreso':
				changeEtapaProgresoFunction();
				break;
			case 'load_procesos':
				loadProcesosFunction();
				break;
			case 'load_info_process':
				loadInfoProcessFunction();
				break;
			case 'load_hoja_vida_plazas_select':
				loadHojaVidaPlazasSelectFunction();
				break;
			case 'get_hojas_vida_plazas':
				getHojasVidaPlazasFunction();
				break;
			case 'load_suscripciones':
				loadSuscripcionesFunction();
				break;
			case 'load_dashboard':
				
				break;
			case 'load_filtros':
				loadFiltrosFunction();
				break;
			case 'load_info_filtros':
				loadInfoFiltrosFunction();
				break;
			case 'delete_formulario_plaza':
				deleteFormularioPlazaFunction();
				break;
			case 'send_mail_patsy':
				sendMailPatsy();
				break;
			case 'crear_categoria':
				CrearCategoria();
				break;
			case 'crearcarpeta':
				crearcarpeta();
				break;
			case 'view_categorias_folder':
				viewCategoriaDash();
				break;
			case 'viewgatget':
				viewgatget();
				break;
			case 'viewCategoria':
				viewcategoria();
				break;
			case 'save_ciudadano_login':
				saveCiudadanoLogin();
				break;
			case 'descargar_archivos':
				DescargaArchivo();
			break;
			case 'compartir':
				// code...
				compartir();
				break;
			case 'shared_archivo';
					descargar_shared();
					break;
			case 'mostrar_upload':
						mostrar_upload();
				break;
      case 'notificacion':
			    newnotificacion();
			    break;
			case 'notificacion_leer':
				readnotification();
				break;
			case 'buscar_todo':
				busqueda_todo();
				break;
			case 'load_explorer':
				loadExplorerFunction();
				break;

			case 'upload_Archivos':
				// code...
			upload_archivos();
				break;
		}
		
	}

	function nueva(){
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';

		#codigo................;

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadExplorerFunction(){
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';
		$html = '';
		$retorno = '';
		//unset($_SESSION['exp_path']);
		$dir_var = $_POST['directory'];
		if(isset($_SESSION['exp_path'])){
			$dir = $_SESSION['exp_path'];
			$retorno = $dir;
		}else{
			$dir = "../../htmls/documents/"; 
			$retorno = "../../htmls/documents/";
		}
		
		if($dir_var != ''){
			$dir .= "$dir_var/";
		}

		$_SESSION['exp_path'] = $dir;

error_log($dir);
		$data = scandir($dir);
error_log(print_r($data,true));
		$count = 0;

		$html .= "
			<div class=\"row\">
        <div class=\"col-sm-3 nav-item\">
						<a class=\"nav-link\" href='$retorno'>
           <i class=\"mdi mdi-step-backward menu-icon\"><span class=\"menu-title\">Regresar</span></i>
            </a>
        </div>
      </div>
			";
		
		foreach ($data as $key => $value) {
			if($value !== '.' && $value !== '..'){
				
				if($count ==0){
					$html .= '<div class="row mt-2">';
				}

				if($count <=3){
					$html .= "
						<div class=\"col-sm-3 nav-item\">
						<a class=\"nav-link\" onclick=\"load_explorer('$value')\" href='#'>
              <div class=\"card\">
                <div class=\"card-body\">
                  <i class=\"mdi mdi-folder-outline menu-icon\"><span class=\"menu-title\">$value</span></i>
                </div>
              </div>
            </a>
             </div>
					";
				$count++;
				}else{
					$count = 0;
					$html .= '</div>';
				}
				
			}
		}

		$jsondata['retorno'] = $retorno;
		$jsondata['html']		 = $html;
		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function busqueda_todo(){
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';
		$archivos_recientes = "";
		$permiso  = "";
		$graficas = "";
		$archi  = 'Nuevo Archivo';
		$cat1 = '';
		$cat2 = '';
		$cat3	= '';
		$ar ="";
		$rol_name = $_SESSION['rol_name'];
		$rol_id   = $_SESSION['rol_id'];
		$name = $_POST['nombre'];
		$order = $_POST['order'];



		switch ($rol_name) {
			case 'Administrador':
				// code...
				$n = 4;
				break;
			case 'Ciudadano';
				// code...
				$n = 6;
				break;
			default:
				// code...
				$n = 4;
				break;
		}


		$logquery  	="SELECT UPPER(file_name) as name_file, display_name FROM documentation";

		if(!empty($name)){
			$logquery .= " WHERE LOCATE(UPPER('".$name."'), file_name) > 0";
		}else{
			$logquery .= " WHERE 1=1";
			$message = 'Ingrese texto para la búsqueda';
		}

		if(!empty($order)&&$order!=='all'){
			$logquery .= " ORDER BY ".$order." ASC  ";
		}else{
			$logquery .= " ORDER BY file_name ASC  "; 
		}
		
		$execute_rquery 	= mysqli_query($conn, $logquery);
		
		//print_r($logquery);
		
		$x = 0;
        while($fetch_query = mysqli_fetch_array($execute_rquery)){

        	$file_c = strtolower(substr($fetch_query['name_file'], -3));
												//if ($file_c == "pdf" || $file_c == "jpg" || $file_c == "png" || $file_c == "xls" ||$file_c == "doc" || $file_c== "ocx" || $file_c == "lsx")

        	switch ($file_c) {
					case 'pdf':
						// code...
						$image_ico = "mdi-file-pdf";
						break;

					case 'png':
						// code...
					$image_ico = "mdi-file-image";
						break;

					case 'ocx':
						// code...
					$image_ico = "mdi-file-word";
						break;

					case 'jpg':
						// code...
					$image_ico = "mdi-file-image";
						break;

					case 'xls':
						// code...
					$image_ico = "mdi-file-excel";
						break;
					
					default:
						// code...
					$image_ico = "mdi-file-image";
						break;
				}


        	$file_name = $fetch_query['name_file'];

        	$archivos_recientes .= "<li class=\"item\">
                                  <iconify-icon icon=\"feather:more-vertical\" style=\"padding-bottom: 3%;\" type=\"button\" id=\"fileName$x\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></iconify-icon>
                                  <i class=\"mdi $image_ico menu-icon mdi-48px mdi-set\"></i> <b>$file_name</b>
                                </li>";

            $x= $x+1;

        }


        $segundafila = $archivos_recientes;


        

        print($segundafila);//die();

        $jsondata['todo'] = $segundafila;
		$jsondata['message'] = $message;
		$jsondata['error']   = $error;


		echo json_encode($jsondata);
}

	function readnotification(){

		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';
		$notificacion = '';
		

		$readnotquery  	="SELECT * FROM notifications WHERE estado = 0";
		$execute_rquery 	= mysqli_query($conn, $readnotquery);

		$notificacion .='<div id = "dropdownNotify" class="dropdown-menu dropdown-menu-right navbar-dropdown">';
		$notificacion .=  '<div class="dropdown-header text-center">';

		while($fetch_query = mysqli_fetch_array($execute_rquery)){

			$title	=	$fetch_query['title'];
			$notification   = $fetch_query['notification'];
			$user    = $fetch_query['user'];
			
			$notificacion .=	'<p class="mb-1 mt-3 font-weight-semibold">'.$title.'</p>';
			$notificacion .=	'<p class="fw-light text-muted mb-0">'.$notification.'</p>';

		}


		$notificacion .= '</div>';
		$notificacion .=  '<a class="dropdown-item"href="#" id="read_notify"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Entendido</a>';
		$notificacion .= '</div>';



		$jsondata['notificacion_read']= $notificacion;
		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);

	}
	

	function newnotificacion()
	{
		global $conn;

		$jsondata = array();
		$error 	  = '';
		$message  = '';
		$notificacion = isset($_POST['notification'])?$_POST['notification']:"";
		$title = isset($_POST['title'])?$_POST['title']:"";
		$datetm = "CURRENT_TIMESTAMP";
		$user = $_SESSION['user_email'];

		if(!empty($notificacion)&&!empty($user)){

		$query_insert_notify = "
					INSERT INTO notifications (notification,title,date_time,estado,user)
					VALUES ('$notificacion','$title',$datetm,0,'$user')
							   ";

							   //print_r($query_insert_notify);
					$execute_insert_access = $conn->query($query_insert_notify);
		}

		if($execute_insert_access){
			$message = "Notificación enviada";
		}else{
			$error = "No se pudo enviar la notificación";
		}


		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function saveCiudadanoLogin(){
		global $conn;
		$jsondata = array();
		$error 	  				= '';
		$message  				= '';
		$email 						= $_POST['email'];
		$names 						= $_POST['names'];
		$last_names 			= $_POST['last_names'];
		$id_document 			= $_POST['id_document'];
		$user_sex 				= $_POST['user_sex'];
		$birthday 				= $_POST['birthday'];
		$academic_level 	= $_POST['academic_level'];
		$phone 						= $_POST['phone'];
		$pass 						= $_POST['pass'];

		$query_save_ciudadano = "
				INSERT INTO users (user_email,user_name,user_last_name,user_company,user_rol,user_password,user_status,user_id_document,user_sex,user_birthday,user_academic_level,user_phone)
				VALUES ('$email','$names','$last_names',1,5,MD5('$pass'),1,'$id_document','$user_sex','$birthday','$academic_level',$phone)
			";

//error_log($query_save_ciudadano);
		$execute_save_ciudadano = $conn->query($query_save_ciudadano);

		if($execute_save_ciudadano){
			$message = "Ciudadano guardado";
		}else{
			$error = "No se pudo guardar ciudadano!";
		}

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function deleteFormularioPlazaFunction(){
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';
		$plaza    = $_POST['plaza'];

		$query_delete = "
			DELETE
			FROM formularios
			WHERE campo_plaza = $plaza
						";
	error_log($query_delete);
		if($execute=$conn->query($query_delete)){
			$error = '';
		}else{
			$error = 'Ya existe infromación de candidatos en ese campo, no se borrara.';
		}

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadInfoFiltrosFunction(){
		global $conn;
		$jsondata 		= array();
		$error 	  		= '';
		$message  		= '';
		$id_search_etapa	= $_POST['id_etapa'];
		$id_search_plaza	= $_POST['id_plaza'];
		//error_log("ETAPA: $id_search_etapa PLAZA: $id_search_plaza");
		$etapa_add_query 	= '';
		$plaza_add_query 	= '';

		if ($id_search_etapa != '') {
			$etapa_add_query = "AND etapa = $id_search_etapa";
		}

		if ($id_search_plaza != '') {
			$plaza_add_query = "AND id_plaza = $id_search_plaza";
		}
		
		$query_tabla_procesos = "
			SELECT plaza_name
				,plaza_categoria
				,plaza_departamento
				,etiqueta_name
				,cantidad
				,plaza_status
			FROM plazas
			INNER JOIN etiquetas
			ON plazas.plaza_etiqueta = etiquetas.etiqueta_id
			INNER JOIN (
				SELECT count(id_candidato) cantidad
					,id_plaza
				FROM (
					SELECT id_candidato
						,MAX(id_etapa) etapa
						,id_plaza
					FROM formulario_data
					INNER JOIN progreso_candidatos
					ON formulario_data.id_save = progreso_candidatos.id_candidato
					GROUP BY id_candidato
				) candidatos
				WHERE 1 = 1
				$etapa_add_query
				$plaza_add_query
				GROUP BY id_plaza
			) cantidad_candidatos
			ON plazas.plaza_id = cantidad_candidatos.id_plaza
					";
//error_log($query_tabla_procesos);

		$execute_tabla_procesos = $conn->query($query_tabla_procesos);
		$tabla = '';
		while($row = $execute_tabla_procesos->fetch_array()){
			$name 		= $row['plaza_name'];
			$categoria 	= $row['plaza_categoria'];
			$localidad 	= $row['plaza_departamento'];
			$etiqueta 	= $row['etiqueta_name'];
			$candidatos 	= $row['cantidad'];
			$estatus 	= $row['plaza_status'];

			if($estatus == 1){
				$estatus = "<h6 class='text-success'>Activo</h6>";
			}else{
				$estatus = "<h6 class='text-danger'>Inactivo</h6>";
			}

			$tabla .= "
				<tr>
	                                <td>
	                                  <h6>
	                                    <!--<a href=\"#\">UI UX Designer</a>-->
	                                    $name
	                                  </h6>
	                                </td>
	                                <td>
	                                  <h6>$categoria</h6>
	                                </td>
	                                <td>
	                                  <h6>$localidad</h6>
	                                </td>
	                                <td>
	                                  <h6>$etiqueta</h6>
	                                </td>
	                                <td>
	                                  <h6>$candidatos</h6>
	                                </td>
	                                <td>
	                                  <h6>$estatus</h6>
	                                </td>
                              	</tr>
				  ";
		}

		$jsondata['tabla'] 	= $tabla;
		$jsondata['message'] 	= $message;
		$jsondata['error']   	= $error;
		echo json_encode($jsondata);
	}

	function loadFiltrosFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$id_company	= $_SESSION['company_id'];
		$rol_id  	= $_SESSION['rol_id'];
		$lista_etapas 	= '';
		$lista_plazas 	= '';

		if($rol_id == 1){
			$query_search_botones = "
				SELECT etapa_id
					,etapa_name
				FROM etapas
				WHERE etapa_status = 1
				ORDER BY etapa_order ASC
					";

			$query_search_plazas = "
				SELECT plaza_name
					,plaza_id
				FROM plazas
				WHERE plaza_status = 1

					       ";
		}else{
			
			$query_search_botones = "
				SELECT etapa_id
					,etapa_name
				FROM etapas
				WHERE etapa_company = $id_company
				AND etapa_status = 1
				ORDER BY etapa_order ASC
					";

			$query_search_plazas = "
				SELECT plaza_name
					,plaza_id
				FROM plazas
				WHERE plaza_status = 1
				AND plaza_empresa = $id_company
					       ";
		}
/*
		$execute_search_botones = $conn->query($query_search_botones);
		
		$lista_etapas .= "<option value=''>Selecciona una etapa...</option>";
		while ($row = $execute_search_botones->fetch_array()) {
			$etapa_id 	= $row['etapa_id'];
			$etapa_name 	= $row['etapa_name'];

			$lista_etapas .= "
				<option value=\"$etapa_id\">$etapa_name</option>
				";
		}

		$execute_search_plazas = $conn->query($query_search_plazas);
		
		$lista_plazas .= "<option value=''>Selecciona una plaza...</option>";
		while ($row = $execute_search_plazas->fetch_array()) {
			$plaza_id 	= $row['plaza_id'];
			$plaza_name 	= $row['plaza_name'];

			$lista_plazas .= "
				<option value=\"$plaza_id\">$plaza_name</option>
				";
			
		}
*/
/*
		$query_tabla_procesos = "
			SELECT plaza_name
				,plaza_categoria
				,plaza_departamento
				,etiqueta_name
				,cantidad
				,plaza_status
			FROM plazas
			INNER JOIN etiquetas
			ON plazas.plaza_etiqueta = etiquetas.etiqueta_id
			INNER JOIN (
				SELECT count(DISTINCT id_candidato) cantidad, id_plaza
				FROM formulario_data
				INNER JOIN progreso_candidatos
				ON formulario_data.id_save = progreso_candidatos.id_candidato
				WHERE progreso_candidatos.id_estatus = 1
				GROUP BY id_plaza
			) cantidad_candidatos
			ON plazas.plaza_id = cantidad_candidatos.id_plaza
					";

		$execute_tabla_procesos = $conn->query($query_tabla_procesos);
		$tabla = '';
		while($row = $execute_tabla_procesos->fetch_array()){
			$name 		= $row['plaza_name'];
			$categoria 	= $row['plaza_categoria'];
			$localidad 	= $row['plaza_departamento'];
			$etiqueta 	= $row['etiqueta_name'];
			$candidatos 	= $row['cantidad'];
			$estatus 	= $row['plaza_status'];

			if($estatus == 1){
				$estatus = "<h6 class='text-success'>Activo</h6>";
			}else{
				$estatus = "<h6 class='text-danger'>Inactivo</h6>";
			}

			$tabla .= "
				<tr>
	                                <td>
	                                  <h6>
	                                    <!--<a href=\"#\">UI UX Designer</a>-->
	                                    $name
	                                  </h6>
	                                </td>
	                                <td>
	                                  <h6>$categoria</h6>
	                                </td>
	                                <td>
	                                  <h6>$localidad</h6>
	                                </td>
	                                <td>
	                                  <h6>$etiqueta</h6>
	                                </td>
	                                <td>
	                                  <h6>$candidatos</h6>
	                                </td>
	                                <td>
	                                  <h6>$estatus</h6>
	                                </td>
                              	</tr>
				  ";
		}*/
/*
		$jsondata['tabla'] 		= $tabla;
		$jsondata['lista_etapas'] 	= $lista_etapas;
		$jsondata['lista_plazas'] 	= $lista_plazas;*/
		$jsondata['message'] 		= $message;
		$jsondata['error']   		= $error;
		echo json_encode($jsondata);
	}

	

	function loadSuscripcionesFunction(){
		global $conn;
		$jsondata 	= array();
		$error 		= '';
		$message 	= '';
		$tabla 		= '';

		$query_get_suscripciones = "
			SELECT email, date_time
			FROM suscripciones
					   ";
		$execute_get_suscripciones = $conn->query($query_get_suscripciones);
		while($row_get_suscripciones = $execute_get_suscripciones->fetch_array()){
			$email = $row_get_suscripciones['email'];
			$date  = $row_get_suscripciones['date_time'];
			$tabla .= "
				<tr>
					<td>
						<h6>
						$email
						</h6>
					</td>
					<td>
						$date
					</td>
				</tr>
				  ";
		}
		
		$jsondata['tabla'] 	= $tabla;
		$jsondata['message'] 	= $message;
		$jsondata['error']   	= $error;
		echo json_encode($jsondata);
	}

	function getHojasVidaPlazasFunction(){
		global $conn;
		$jsondata 	= array();
		$error 		= '';
		$message 	= '';
		$tabla 		= '';
		$plaza 		= $_POST['plaza'];

		$dir = "../../htmls/hojas_de_vida/";
		$archivos = scandir($dir);

		foreach ($archivos as $key => $value) {
			if($value != "." && $value != ".."){
				$nombre_partes = explode('_',$value);
				$nombre = $nombre_partes[0];
				if($nombre ==$plaza){
					$directory = "../htmls/hojas_de_vida/";
					$file = $directory.$value;
					$tabla .= "
					<tr>
                                        <td>
                                          <h6>
                                             $value
                                          </h6>
                                        </td>
                                        <td>
                                          <button class=\"btn btn-primary\">
                                          	<a href=\"$file\" target=\"_blank\">
                                          	<i class=\"mdi mdi-cloud-download\"></i>
                                          	</a>
                          		  </button>
                                        </td>
                                        <!--<td>
                                          <i class=\"mdi mdi-delete-forever\"></i>
                                        </td>-->
                                      </tr>
					  ";
				}
				
			}
		}
		
		$jsondata['tabla'] 	= $tabla;
		$jsondata['message'] 	= $message;
		$jsondata['error']   	= $error;
		echo json_encode($jsondata);
	}

	function loadHojaVidaPlazasSelectFunction(){
		global $conn;
		$jsondata 	= array();
		$error 		= '';
		$message 	= '';
		$lista 		= '<option value=\'\'>Selecciona una plaza</option>';
		$lista_matriz	= array();

		$dir = "../../htmls/hojas_de_vida/";
		$archivos = scandir($dir);
//error_log(print_r($archivos,TRUE));
		foreach ($archivos as $key => $value) {
			if($value != "." && $value != ".."){
				$nombre_partes = explode('_',$value);
				$nombre = $nombre_partes[0];
				if (!in_array($nombre, $lista_matriz)) {
					array_push($lista_matriz,$nombre);
					$lista .= "<option value='$nombre'>$nombre</option>";
				}
			}
		}
//error_log(print_r($lista_matriz,TRUE));
		
		$jsondata['lista'] 	= $lista;
		$jsondata['message'] 	= $message;
		$jsondata['error']   	= $error;
		echo json_encode($jsondata);
	}

	function loadInfoProcessFunction(){
		global $conn;
		$jsondata 		= array();
		$error 	  		= '';
		$message  		= '';
		$id_search_etapa	= $_POST['id'];
		
		$query_tabla_procesos = "
			SELECT plaza_name
				,plaza_categoria
				,plaza_departamento
				,etiqueta_name
				,cantidad
				,plaza_status
			FROM plazas
			INNER JOIN etiquetas
			ON plazas.plaza_etiqueta = etiquetas.etiqueta_id
			INNER JOIN (
				SELECT count(id_candidato) cantidad
					,id_plaza
				FROM (
					SELECT id_candidato
						,MAX(id_etapa) etapa
						,id_plaza
					FROM formulario_data
					INNER JOIN progreso_candidatos
					ON formulario_data.id_save = progreso_candidatos.id_candidato
					GROUP BY id_candidato
				) candidatos
				WHERE etapa = $id_search_etapa
				GROUP BY id_plaza
			) cantidad_candidatos
			ON plazas.plaza_id = cantidad_candidatos.id_plaza
					";
//error_log($query_tabla_procesos);

		$execute_tabla_procesos = $conn->query($query_tabla_procesos);
		$tabla = '';
		while($row = $execute_tabla_procesos->fetch_array()){
			$name 		= $row['plaza_name'];
			$categoria 	= $row['plaza_categoria'];
			$localidad 	= $row['plaza_departamento'];
			$etiqueta 	= $row['etiqueta_name'];
			$candidatos 	= $row['cantidad'];
			$estatus 	= $row['plaza_status'];

			if($estatus == 1){
				$estatus = "<h6 class='text-success'>Activo</h6>";
			}else{
				$estatus = "<h6 class='text-danger'>Inactivo</h6>";
			}

			$tabla .= "
				<tr>
	                                <td>
	                                  <h6>
	                                    <!--<a href=\"#\">UI UX Designer</a>-->
	                                    $name
	                                  </h6>
	                                </td>
	                                <td>
	                                  <h6>$categoria</h6>
	                                </td>
	                                <td>
	                                  <h6>$localidad</h6>
	                                </td>
	                                <td>
	                                  <h6>$etiqueta</h6>
	                                </td>
	                                <td>
	                                  <h6>$candidatos</h6>
	                                </td>
	                                <td>
	                                  <h6>$estatus</h6>
	                                </td>
                              	</tr>
				  ";
		}

		$jsondata['tabla'] 	= $tabla;
		$jsondata['message'] 	= $message;
		$jsondata['error']   	= $error;
		echo json_encode($jsondata);
	}

	function loadProcesosFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$id_company	= $_SESSION['company_id'];
		$rol_id  	= $_SESSION['rol_id'];
		$colors   	= array("#cd6155","#ec7063","#af7ac5","#a569bd","#5499c7","#5dade2","#48c9b0","#45b39d","#52be80","#58d68d","#f4d03f","#f5b041","#eb984e","#dc7633","#f0f3f4","#cacfd2","#aab7b8");

		if($rol_id == 1){
			$query_search_botones = "
				SELECT etapa_id
					,etapa_name
				FROM etapas
				WHERE etapa_status = 1
				ORDER BY etapa_order ASC
					";
		}else{
			
			$query_search_botones = "
				SELECT etapa_id
					,etapa_name
				FROM etapas
				WHERE etapa_company = $id_company
				AND etapa_status = 1
				ORDER BY etapa_order ASC
					";
		}

		$execute_search_botones = $conn->query($query_search_botones);
		$lista_botones = '';
		$c = 0;
		while ($row = $execute_search_botones->fetch_array()) {
			$etapa_id 	= $row['etapa_id'];
			$etapa_name 	= $row['etapa_name'];
			$color 		= $colors[$c];

			$lista_botones .= "
				<div class=\"col-sm\">
					<button class=\"btn btn-primary btn-proceso\" data-info=\"$etapa_id\" style=\"width: 100%; height: 100%; background-color: $color;\">$etapa_name</button>
				</div>
				";
			$c++;
		}

		$query_tabla_procesos = "
			SELECT plaza_name
				,plaza_categoria
				,plaza_departamento
				,etiqueta_name
				,cantidad
				,plaza_status
			FROM plazas
			INNER JOIN etiquetas
			ON plazas.plaza_etiqueta = etiquetas.etiqueta_id
			INNER JOIN (
				SELECT count(DISTINCT id_candidato) cantidad, id_plaza
				FROM formulario_data
				INNER JOIN progreso_candidatos
				ON formulario_data.id_save = progreso_candidatos.id_candidato
				WHERE progreso_candidatos.id_estatus = 1
				GROUP BY id_plaza
			) cantidad_candidatos
			ON plazas.plaza_id = cantidad_candidatos.id_plaza
					";

		$execute_tabla_procesos = $conn->query($query_tabla_procesos);
		$tabla = '';
		while($row = $execute_tabla_procesos->fetch_array()){
			$name 		= $row['plaza_name'];
			$categoria 	= $row['plaza_categoria'];
			$localidad 	= $row['plaza_departamento'];
			$etiqueta 	= $row['etiqueta_name'];
			$candidatos 	= $row['cantidad'];
			$estatus 	= $row['plaza_status'];

			if($estatus == 1){
				$estatus = "<h6 class='text-success'>Activo</h6>";
			}else{
				$estatus = "<h6 class='text-danger'>Inactivo</h6>";
			}

			$tabla .= "
				<tr>
	                                <td>
	                                  <h6>
	                                    <!--<a href=\"#\">UI UX Designer</a>-->
	                                    $name
	                                  </h6>
	                                </td>
	                                <td>
	                                  <h6>$categoria</h6>
	                                </td>
	                                <td>
	                                  <h6>$localidad</h6>
	                                </td>
	                                <td>
	                                  <h6>$etiqueta</h6>
	                                </td>
	                                <td>
	                                  <h6>$candidatos</h6>
	                                </td>
	                                <td>
	                                  <h6>$estatus</h6>
	                                </td>
                              	</tr>
				  ";
		}

		$jsondata['tabla'] 	= $tabla;
		$jsondata['botonera'] 	= $lista_botones;
		$jsondata['message'] 	= $message;
		$jsondata['error']   	= $error;
		echo json_encode($jsondata);
	}

	function changeEtapaProgresoFunction(){
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';
		$candidato_id 	= $_SESSION['ficha_candidato_id'];
		$id_etapa = $_POST['id_etapa'];
		$id_company = $_SESSION['company_id'];

		$query_search_primera_etapa = 	"
			SELECT etapa_id
			FROM etapas
			WHERE etapa_company = $id_company
			AND etapa_status = 1
			ORDER BY etapa_order ASC
			LIMIT 1
					";
//error_log("Query: $query_search_primera_etapa");
		$execute_search_primera_etapa = $conn->query($query_search_primera_etapa);
		$row_data = $execute_search_primera_etapa->fetch_array();
		$primera_etapa = $row_data['etapa_id'];
//error_log("Primera etapa: $primera_etapa");
//error_log("Etapa recibida: $id_etapa");
		$etapa_recibida = $id_etapa;
		if ($primera_etapa != $id_etapa) {
			$id_etapa = $id_etapa - 1;
		}

//error_log("ID Etapa que queda para el resto del programa: $id_etapa");

		$query_search_cantidad_tareas = "
			SELECT count(*) c
			FROM tareas_por_etapa
			WHERE tarea_etapa = $id_etapa
			AND tarea_status = 1
						";
		$execute_search_cantidad_tareas = $conn->query($query_search_cantidad_tareas);
		$row_data_tareas = $execute_search_cantidad_tareas->fetch_array();
		$cantidad_tareas = $row_data_tareas['c'];

		$query_search_progreso = "
			SELECT count(*) c
			FROM progreso_candidatos
			WHERE id_candidato = $candidato_id
			AND id_etapa = $id_etapa
			AND id_estatus = 0
					";
//error_log($query_search_progreso);
		$execute_search_progreso = $conn->query($query_search_progreso);
		$row_data_progreso = $execute_search_progreso->fetch_array();
		$cantidad_progreso = $row_data_progreso['c'];
//error_log("Cantidad Progreso: $cantidad_progreso VRS Cantidad tareas: $cantidad_tareas");
		if($cantidad_progreso == $cantidad_tareas){
			
			$query_get_last_etapa = "
				SELECT id_etapa
				FROM progreso_candidatos
				WHERE id_candidato = $candidato_id
				ORDER BY id_etapa DESC
				LIMIT 1
						";
			$execute_get_last_etapa = $conn->query($query_get_last_etapa);
			$data = $execute_get_last_etapa->fetch_array();
			$last_etapa = $data['id_etapa'];
//error_log("Etapa actual: $last_etapa VRS etapa deseada: $etapa_recibida");
			if($last_etapa < $etapa_recibida){
				$message = 'Inicia nueva etapa';
			}else{
				$error = 'No puedes regresar a etapas completadas';
			}

		}else{
			$error = 'Debes terminar la etapa antes de seguir adelante!';
		}

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function saveTaskStatusFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$id_task  	= $_POST['id_task'];
		$status   	= $_POST['status'];
		$candidato_id 	= $_SESSION['ficha_candidato_id'];

		$query_update_task = 	"
			UPDATE progreso_candidatos
			SET id_estatus = $status,
				change_status = NOW()
			WHERE id_candidato = $candidato_id
			AND id_tarea = $id_task
					";
//error_log($query_update_task);
		$execute_update_task = $conn->query($query_update_task);

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

function sendMailPatsy(){
	global $conn;
	$message 	  = '';
	$error 		  = '';
	$result_execute[0] = 1;
	//$subject 	  = 'Testing mail function';
	//$messge 	  = 'Esto es una prueba de que por fin sirve';
	$messge 	  = $_POST['message'];
	//$email  	  = $_POST['email'];
	$etapa 		  = $_POST['etapa_mail'];
	$etapa_nombre = $_POST['etapa_nombre'];

	if(isset($_SESSION['email_nombre'])){
		$nombre = $_SESSION['email_nombre'];
	}else{
		$nombre = '';
	}

	$subject 	  = $etapa_nombre . ' ' . $nombre;
	
	if(isset($_SESSION['email_email'])){
		$email 	= $_SESSION['email_email'];	
	}else{
		$email = '';
	}
	
	//$messge = $_SESSION['email_toSend'];

	if($email != ''){
		$query_search_email_sent = "
		SELECT count(*) c
		FROM emails_sent
		WHERE email = '$email'
		AND etapa = $etapa";
error_log($query_search_email_sent);
		$execute_search_email_sent = $conn->query($query_search_email_sent);
		$result_execute = $execute_search_email_sent->fetch_array();
//error_log('Result: '.$result_execute[0]);
	}else{
		$result_execute[0]==1;	
	}
	
	if($result_execute[0]==0){
		$query_insert_email_sent = "INSERT INTO emails_sent(email,datetime,etapa) VALUES ('$email',NOW(),$etapa)";
//error_log($query_insert_email_sent);
		$execute_insert_email_sent = $conn->query($query_insert_email_sent);

	//error_log('Function send email');

			$mail = new PHPMailer();

			//if(isset($_POST['email'])){
			if(true){
				//$email = $_POST['email'];
				//$email = 'bryan.ja@alliedglobal.com';

				//if(isset($_POST['name'])){
				if(true){
					//$name    	= utf8_decode("Alexander");
					//$name 		= $_POST['name'];
					//if(isset($_POST['message'])){
					//	$messge = utf8_decode($_POST['message']);	
						//$messge = utf8_decode($messge);	
					//}else{
					//	$messge = '';
					//}
					//$subject 	= utf8_decode($_POST['subject']);

					$subject 	= utf8_decode($subject);
					$error 		= '';
					try{	
	//error_log('In the try part!');
					$mail->isSMTP();
					$mail->SMTPDebug = 1;
					$mail->SMTPAuth = true; // auth habilitada
					//$mail->SMTPSecure = 'tls';
					$mail->SMTPSecure = 'ssl';
					$mail->Host = 'smtp.globat.com';
					//$mail->Port = '587';
					$mail->Port = '465';
					$mail->SMTPAuth = true;
					$mail->isHTML(TRUE);
					$mail->Username = 'empleospatsy@patsy.com.gt';
					//$mail->Password = 'ckxujygdytphrgbu';
					$mail->Password = 'Empl3os#2022';
					//$mail->From = 'lextefasu@gmail.com';
					$mail->SetFrom('empleospatsy@patsy.com.gt');
					$mail->Subject = $subject;
					$mail->Body = $messge;
					//$mail->AddAddress($email);
					$mail->AddAddress($email);
					
					$mail->Send();
					//header("Location: http://www.pagina.com/");
					//$jsondata['message'] = 'SENT!!';

					//echo json_encode($jsondata);
					//echo "Mensaje enviado a $email";
	//error_log("Mensaje enviado a $email");
					//error_log(print_r($mail,true));
					//return 'OK';
					unset($_SESSION['email_nombre']);
					unset($_SESSION['email_email']);
					$message = 'Correo enviado!';
					}catch (Exception $e) {
				    	$error = "Message could not be sent. Mailer Error: $mail->ErrorInfo";
						//echo $error;
						error_log($error);
						//$jsondata['error'] = $error;
					}
				}else{
					$error = 'Please enter your name!';
					//$jsondata['error'] = $error;
				}
				
			}else{
				$error = 'Please enter an email!';
				//$jsondata['error'] = $error;
			}
			$error = '';
		}else{
			$error = 'El correo de esta etapa ya fue enviado al candidato actual.';
		}

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
		//error_log(print_r($jsondata,true));
	}

	function loadFichaCandidatoFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$fields 	= array();
		$content        = '';
		$select_etapas	= '';
		$todo_text 	= '';
		$id_company 	= $_SESSION['company_id'];
		$insert_matrix	= array();
		$etapa_in 	= $_POST['etapa'];
		$email_result = '';
		$email = '';
		$email_toSend = '';
		$name  = '';
		$etapa_actual = '';
		if(isset($_SESSION['ficha_candidato_id'])){
			$id_candidato 	= $_SESSION['ficha_candidato_id'];	
			//unset($_SESSION['ficha_candidato_id']);
		}

		$query_search_id_plaza = "
			SELECT id_plaza
			FROM formulario_data
			WHERE id_save = $id_candidato
					 ";
		$execute_search_id_plaza = $conn->query($query_search_id_plaza);
		$row_data = $execute_search_id_plaza->fetch_array();
		$id_plaza = $row_data['id_plaza'];
//error_log("Plaza ID: $id_plaza");

		$query_quantity = "
			SELECT count(*) c
			FROM formularios 
			WHERE campo_plaza = $id_plaza
				  ";
		$execute_quantity = $conn->query($query_quantity);
		$row_data = $execute_quantity->fetch_array();
		$quantity = $row_data['c'];
//error_log("Cuantos campos son: $quantity");
		$query_know_fields_quantity = "
			SELECT campo_order,campo_name,valores.value
			FROM (
				SELECT campo_id,campo_name,campo_order
				FROM formularios
				WHERE campo_plaza = $id_plaza
				ORDER BY campo_order ASC
			) base
			INNER JOIN (
				SELECT id_field,value
				FROM (
					SELECT *
					FROM formulario_data
					WHERE id_plaza = $id_plaza
					AND id_save >= $id_candidato
					LIMIT $quantity
				) base
				ORDER BY id_field ASC
			) valores
			ON valores.id_field = base.campo_id
			ORDER BY campo_order ASC
					     ";
//error_log($query_know_fields_quantity);
		$execute_know_fields_quantity = $conn->query($query_know_fields_quantity);
		$c = 0;
		$lineas = 1;
		while($row_data = $execute_know_fields_quantity->fetch_array()){
			$field_name = $row_data['campo_name'];
			$field_value = $row_data['value'];
			$fields[$field_name] = $field_value;

			if($field_name == 'Email'){
				$email = $field_value;	
			}

			if(strpos($field_name, 'Nombre') !== false){
				$name = $field_value;
			}

			if($c == 0){
				$content .= "
					<div class=\"row d-flex justify-content-center \">
				            <div class=\"col justify-content-center\">
				                <h2 class=\"text-center \">
				                    $field_value
				                </h2>
				            </div>
				        </div> 
				    ";
			}else{
				if($lineas == 1){
					$content .= 	"
					<div class=\"row mt-2 d-flex justify-content-center \"> 
						<div class=\"col justify-content-center\">
							<label class=\"d-flex justify-content-center \">$field_name</label>
							<h4 class=\"text-center text-muted\">
							$field_value
							</h4>
						</div>
							";
				}else{
					$content .= "
				
					<div class=\"col justify-content-center\">
						<label class=\"d-flex justify-content-center \">$field_name</label>
						<h4 class=\"text-center text-muted\">
						$field_value
						</h4>
					</div>
				    ";
				}
				if($lineas == 3){
					$content .= "
						</div> 
						";
					$lineas = 0;
				}
				$lineas++;
			}
			
			$c++;
			
		}

//error_log("Contenido: ".$content);

	//error_log(print_r($fields,TRUE));

		$query_search_progress = "
			SELECT count(*) c
			FROM progreso_candidatos
			WHERE id_candidato = $id_candidato
					 ";
		$execute_search_progress = $conn->query($query_search_progress);
		$row_data = $execute_search_progress->fetch_array();
		$existe = $row_data['c'];
//error_log("EXISTE: $existe & ETAPA_IN: $etapa_in");
		if ($existe == 0 || $etapa_in != 0) {
			
			if($etapa_in == 0){
				$etapa_in = 1;
			}

			$query_search_etapas = "
				SELECT etapa_name
					,etapa_id
					,etapa_order
				FROM etapas
				WHERE etapa_status = 1
				AND etapa_company = $id_company
				AND etapa_id IN ($etapa_in)
				UNION
				SELECT etapa_name
					,etapa_id
					,etapa_order
				FROM etapas
				WHERE etapa_status = 1
				AND etapa_company = $id_company
				AND etapa_id NOT IN ($etapa_in)
				ORDER BY etapa_order
						";
//error_log($query_search_etapas);
			$execute_search_etapas = $conn->query($query_search_etapas);
			$count = 1;
			while($row_data = $execute_search_etapas->fetch_array()){
				$nombre_etapa 	= $row_data['etapa_name'];
				$id_etapa 	= $row_data['etapa_id'];
				$orden_etapa 	= $row_data['etapa_order'];

				if($count == 1){
					array_push($insert_matrix, $etapa_in);
				}

				if($id_etapa == $etapa_in){
					$select_etapas .= "<option value=\"$id_etapa\" selected>$nombre_etapa</option>";
				}else{
					$select_etapas .= "<option value=\"$id_etapa\">$nombre_etapa</option>";	
				}
				
				$count++;
			}


			$query_know_tareas = 	"
				SELECT tarea_id
					,tarea_name
				FROM tareas_por_etapa
				WHERE tarea_status = 1
				AND tarea_etapa = $etapa_in
				AND tarea_company = $id_company
				ORDER BY tarea_orden
						";	
//error_log($query_know_tareas);
			$etapa_id = $insert_matrix[0];
			$insert_matrix = array();
			$execute_know_tareas = $conn->query($query_know_tareas);
			while($row_data = $execute_know_tareas->fetch_array()){
				$tarea_id 	= $row_data['tarea_id'];
				$tarea_name 	= $row_data['tarea_name'];
				array_push($insert_matrix,array($id_candidato,$etapa_id,$tarea_id,1));
				$todo_text .= 	"
					<li class=\"d-block tareas_check\">
			                  <div class=\"form-check w-100\">
			                    <label class=\"form-check-label\">
			                      <input class=\"checkbox\" name=\"$tarea_id\" type=\"checkbox\">$tarea_name <i class=\"input-helper rounded\"></i>
			                      <div class=\"badge badge-opacity-danger me-3\">Falta</div>
			                    </label>
			                  </div>
			                </li>
						";
			}
//error_log(print_r($insert_matrix,TRUE));
//error_log($todo_text);
			$insert_tareas = 	"
				INSERT INTO progreso_candidatos(id_candidato,id_etapa,id_tarea,id_estatus,date_time)
				VALUES
						";
			$insert_values = "";
			foreach ($insert_matrix as $key => $value) {
				foreach ($value as $k => $v) {
					$insert_values .= "$v,";
				}
			$insert_values = substr($insert_values, 0,-1);
//error_log($insert_values);
				$insert_tareas .= 	"($insert_values,NOW()),";
				$insert_values = '';
			}
			$insert_tareas = substr($insert_tareas, 0,-1);
//error_log($insert_tareas);
			$execute_insert_tareas = $conn->query($insert_tareas);
		}else{
			$query_etapa_actual = 	"
				SELECT id_etapa
				FROM progreso_candidatos
				WHERE id_candidato = $id_candidato
				ORDER BY id_etapa DESC
				LIMIT 1
						";
//error_log($query_etapa_actual);
			$execute_etapa_actual = $conn->query($query_etapa_actual);
			$row_etapa_actual = $execute_etapa_actual->fetch_array();
			$etapa_actual = $row_etapa_actual['id_etapa'];
//error_log('ETAPA: ' . $etapa_actual);
			$query_search_etapas = "
				SELECT etapa_name
					,etapa_id
					,etapa_order
				FROM etapas
				WHERE etapa_status = 1
				AND etapa_company = $id_company
				-- AND etapa_id IN (@etapa)
				AND etapa_id IN ($etapa_actual)
				UNION
				SELECT etapa_name
					,etapa_id
					,etapa_order
				FROM etapas
				WHERE etapa_status = 1
				AND etapa_company = $id_company
				-- AND etapa_id NOT IN (@etapa)
				AND etapa_id NOT IN ($etapa_actual)
				ORDER BY etapa_order
						";
//error_log($query_search_etapas);
			$execute_search_etapas = $conn->query($query_search_etapas);

			while($row_data = $execute_search_etapas->fetch_array()){
				$nombre_etapa 	= $row_data['etapa_name'];
				$id_etapa 	    = $row_data['etapa_id'];
				$orden_etapa 	= $row_data['etapa_order'];

				if($id_etapa == $etapa_actual){
					$select_etapas .= "<option value=\"$id_etapa\" selected>$nombre_etapa</option>";
				}else{
					$select_etapas .= "<option value=\"$id_etapa\">$nombre_etapa</option>";	
				}
				
			}

			$query_know_tareas = 	"
				SELECT id_tarea
					,id_estatus
					,tarea_name
				FROM progreso_candidatos
				INNER JOIN tareas_por_etapa
				ON tareas_por_etapa.tarea_id = progreso_candidatos.id_tarea
				WHERE id_candidato = $id_candidato
				AND id_etapa = $etapa_actual
				ORDER BY tarea_orden";
//error_log($query_know_tareas);
			$execute_know_tareas = $conn->query($query_know_tareas);
			while($row_data = $execute_know_tareas->fetch_array()){
				$tarea_id 	= $row_data['id_tarea'];
				$tarea_name 	= $row_data['tarea_name'];
				$estatus 	= $row_data['id_estatus'];
				if ($estatus == 1) {
					$estado = "<div class=\"badge badge-opacity-danger me-3\">Falta</div>";
					$check = '';
					$class = '';
				}else{
					$estado = "<div class=\"badge badge-opacity-success me-3\">Terminado</div>";
					$check = "checked=\"checked\"";
					$class = "completed";
				}
				$todo_text .= 	"
					<li class=\"d-block $class tareas_check\">
			                  <div class=\"form-check w-100\">
			                    <label class=\"form-check-label\">
			                      <input class=\"checkbox\" $check name=\"$tarea_id\" type=\"checkbox\">$tarea_name <i class=\"input-helper rounded\"></i>
			                      	$estado
			                    </label>
			                  </div>
			                </li>
						";
			}
		}

//error_log('Estos son los echos:');
if($etapa_actual == ''){
	$etapa_actual = $etapa_in;
}
		$query_email_etapa = "
			SELECT email
			FROM etapas
			WHERE etapa_id  = $etapa_actual
							 ";
//error_log($query_email_etapa);
	$execute_email_etapa = $conn->query($query_email_etapa);
	$row_email_etapa = $execute_email_etapa->fetch_array();
	$email_toSend = utf8_decode($row_email_etapa['email']);
//error_log($email);
	$email_toSend = str_replace('(Nombre)',$name,$email_toSend);
		
		$todo_text .= "
			<li>
				<div style='width:100%;'>
					<label for='email'>Correo a enviar al finalizar etapa</label>
					<br>
    				<textarea id='email' rows='4' style='width:100%;'>$email_toSend</textarea>
				</div>
			</li>
			<li>
				<div class='col-sm d-flex justify-content-end'>
					<button class='btn btn-primary' onclick='enviar_email_inicial()' style='color: white;''><b>Enviar correo</b></button>
				</div>
			</li>
					  ";

					  $_SESSION['email_nombre']  = $name;
					  $_SESSION['email_email']	 = $email;
					  $_SESSION['email_toSend']	 = $email_toSend;	

		$jsondata['todo_text'] = $todo_text;
		$jsondata['select_etapas'] = $select_etapas;
		$jsondata['contenido_div'] = $content;
		$jsondata['email'] = $email;
	    $jsondata['name'] = $name;
	    $jsondata['etapa_actual'] = $etapa_actual;
		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		
		echo json_encode($jsondata);
//error_log(print_r($jsondata,true));
	}

	function getCandidatoInfoFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$id 	   	= $_POST['id'];

		$_SESSION['ficha_candidato_id'] = $id ;

		if(!isset($_SESSION['ficha_candidato_id'])){
			$error = "Error no se puede verificar el candidato seleccionado!";
		}

		//error_log("etiqueta_id: $etiqueta_id");

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadCandidatosInfoFunction(){
		global $conn;
		$jsondata 		= array();
		$error 	  		= '';
		$message  		= '';
		$company_id 		= $_SESSION['company_id']; 
		$lista_titulos 		= '';
		$id_plaza 		= $_POST['id'];
		$lista_contenido 	= '';
		$ids_campos 		= array();
		$cantidad_campos 	= 0;
		$first_ids 		= array();
		$matriz[0] 		= array();
		$contador_matriz 	= 0; 		
		$valor 			= '';	

		$query_titulos = "
			SELECT campo_name
				,campo_id
			FROM formularios
			WHERE campo_plaza = $id_plaza
			ORDER BY campo_order
			LIMIT 5
					";
//error_log($query_titulos);
		$execute_titulos = $conn->query($query_titulos);
		$lista_titulos .= "<tr>";

		while($row = $execute_titulos->fetch_array()){
			$plaza_name 	= $row['campo_name'];
			$id 		= $row['campo_id'];

			array_push($ids_campos, $id);
			
			$lista_titulos .= "<th>$plaza_name</th>";

		}
//error_log(print_r($ids_campos,TRUE));

		$lista_titulos .= "</tr>";

		$query_contador = "
			SELECT count(*) c
			FROM formularios
			WHERE campo_plaza = $id_plaza 
				  ";

		$execute_contador = $conn->query($query_contador);
		$data = $execute_contador->fetch_array();
		$cantidad_campos = $data['c'];
//error_log("Cantidad campos: $cantidad_campos");

		foreach($ids_campos as $value){
			$query_cantidad_filas = "
				SELECT count(*) c
				FROM formulario_data
				WHERE id_plaza = $id_plaza 
				AND id_field = $value
						";
			$execute_cantidad_filas = $conn->query($query_cantidad_filas);
			$data_cantidad_filas = $execute_cantidad_filas->fetch_array();
			$cantidad_filas = $data_cantidad_filas['c'];
//error_log("Cantidad Filas: $cantidad_filas");
			
			$query_search_ids = 	"
				SELECT id_save,value
				FROM formulario_data
				WHERE id_plaza = $id_plaza 
				AND id_field = $value 
						";
			$execute_search_ids = $conn->query($query_search_ids);
			while($data = $execute_search_ids->fetch_array()){
				$id = $data['id_save'];
				$value = $data['value'];
				if($contador_matriz==0){
					array_push($first_ids,"$id,$value");
				}else{
					array_push($first_ids,"$value");
				}
				
			}
//error_log(print_r($first_ids,TRUE));
			$matriz[$contador_matriz] = $first_ids;
			$contador_matriz++;
			unset($first_ids);
			$first_ids = array();
		}
//error_log(print_r($matriz,TRUE));

		$t_columnas = count($matriz)-1;
//error_log("Tamaño Matriz COLUMNAS: $t_columnas");
		if(isset($matriz[$t_columnas-1])){
			$t_filas = count($matriz[$t_columnas-1])-1;
//error_log("Tamaño Matriz FILAS: $t_filas");

		}else{
			$t_filas = 0;
		}
		
		$recorrer_columnas = 0;
		$recorrer_filas    = 0;
		$linea = '';
		while($recorrer_filas <= $t_filas){
			//error_log("Recorrer Columnas: $recorrer_columnas");
			//error_log("Recorrer Filass: $recorrer_filas");
			if(isset($matriz[$recorrer_columnas][$recorrer_filas])){
				$valor = $matriz[$recorrer_columnas][$recorrer_filas];
			}
			if($recorrer_columnas == 0){
				$linea .="<tr>";
			}
			
			if($recorrer_columnas<=$t_columnas&&$valor !=''){
				
				if($recorrer_columnas == 0){
					$values = explode(',', $valor);
					$id  = $values[0];
					$txt = $values[1];
					$linea .= "
						<td>
							<a href=\"#\" onclick=\"ficha_candidato($id)\">
								$txt
							</a>
						</td>
					";
					
				}else{
					$linea .= "
						<td>
							<h6>
								$valor
							</h6>
						</td>
					";
				}
				$recorrer_columnas++;
				
			}else{
				$recorrer_columnas = 0;
				$recorrer_filas++;
				$linea .= "
					</tr>
					";
				//$linea = substr($linea, 0,-1);
				//error_log("LINEA: $linea");
				//$linea = "";
			}

		}

		//error_log("LINEA: $linea");


		$jsondata['candidatos_data'] 	= $linea;
		$jsondata['lista_titulos'] 	= $lista_titulos;
		$jsondata['message'] 		= $message;
		$jsondata['error']   		= $error;
		echo json_encode($jsondata);
	}

	function loadCandidatosFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$company_id 	= $_SESSION['company_id']; 
		$colors   	= array("#cd6155","#ec7063","#af7ac5","#a569bd","#5499c7","#5dade2","#48c9b0","#45b39d","#52be80","#58d68d","#f4d03f","#f5b041","#eb984e","#dc7633","#f0f3f4","#cacfd2","#aab7b8");
		$lista_botones 	= '';

		$query_botones_plazas = "
			SELECT plaza_id
				,plaza_name
			FROM plazas
			WHERE plaza_status = 1
			AND plaza_empresa = $company_id
					";

		$execute_botones_plazas = $conn->query($query_botones_plazas);
		$count = 1;
		$c = 1;
		while($row = $execute_botones_plazas->fetch_array()){
			$plaza_id 	= $row['plaza_id'];
			$plaza_name 	= $row['plaza_name'];

			if($count == 1){
				$lista_botones .= '<div class="row">';	
			}

			$color = $colors[$c];
			$lista_botones .= "
				<div class=\"col-sm\">
                            		<button class=\"btn candidatos-botonera\" style=\"width: 100%; height: 100%; background-color: $color;\" id=\"$plaza_id\">$plaza_name</button>
                          	</div>
					  ";
			
			if($count == 5){
				$lista_botones .= '</div>';	
				$count = 0;
			}

			$count++;
			$c++;
		}

		$jsondata['lista_botones'] 	= $lista_botones;
		$jsondata['message'] 		= $message;
		$jsondata['error']   		= $error;
		echo json_encode($jsondata);
	}

	function saveSuscripcionFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$email  	= $_POST['email'];
		
		
		$query_save = "
				INSERT INTO suscripciones(email,date_time)
				VALUES
				('$email',NOW())
				   ";
		

		$execute_save = $conn->query($query_save);
			if($execute_save != 1){
				$error = "Correo ya existe!";
			}else{
				$message = "Suscripción exitosa!";	
			}
		

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadDivPlazasFunction(){
		global $conn;
		$jsondata 		= array();
		$error 	  		= '';
		$message  		= '';
		$div_plazas_iniciales 	= '';
		$company 		= $_POST['company'];
		$lista_palabras 	= '';
		$lista_localidad 	= '';

		if(isset($_POST['palabras_clave'])){
			$ids_palabras = $_POST['palabras_clave'];
			foreach ($ids_palabras as $valor){
				$lista_palabras .= $valor.',';
			}

			$lista_palabras = substr($lista_palabras, 0,-1);
		}else{
			$ids_palabras = '';
		}

		if(isset($_POST['localidad'])){
			$localidades = $_POST['localidad'];
			foreach ($localidades as $valor){
				$lista_localidad .= "'$valor'".',';
			}

			$lista_localidad = substr($lista_localidad, 0,-1);
		}else{
			$localidades = '';
		}

		//******* INICIA CODIGO PARA DIV DE PLAZAS INICIALES ********
		

		if($lista_palabras == ''){
			$linea_query = '';
		}else{
			$linea_query = "AND etiqueta_id IN ($lista_palabras)";
		}

		if($localidades == ''){
			$linea_query2 = '';
		}else{
			$linea_query2 = "AND plaza_departamento IN ($lista_localidad)";
		}

		$query_get_plazas = "
			SELECT plaza_icono
				,plaza_empresa
				,plaza_categoria
				,plaza_etiqueta
				,plaza_name
				,plaza_departamento
				,plaza_name
				,plaza_descripcion
				,company_name
				,etiqueta_name
				,plaza_salario
				,plaza_id
			FROM plazas
			INNER JOIN company
			ON company.company_id = plazas.plaza_empresa
			INNER JOIN etiquetas
			ON etiquetas.etiqueta_id = plazas.plaza_etiqueta
			WHERE plaza_empresa = $company
			$linea_query
			$linea_query2
			AND etiqueta_status = 1
			AND plaza_status = 1
			ORDER BY plaza_orden DESC
			";
//error_log($query_get_plazas);
		
		
		$execute_get_plazas = $conn->query($query_get_plazas);

		$count_control = 1;
		while($row_data = $execute_get_plazas->fetch_array()){


			$icono 	 	= $row_data['plaza_icono'];
			$empresa 	= $row_data['company_name'];
			$categoria 	= $row_data['plaza_categoria'];
			$etiqueta 	= $row_data['etiqueta_name'];
			$plaza 		= $row_data['plaza_name'];
			$departamento   = $row_data['plaza_departamento'];
			$descripcion 	= $row_data['plaza_descripcion'];
			$salario 	= $row_data['plaza_salario'];
			$id_plaza 	= $row_data['plaza_id'];

			if ($count_control == 1) {
				$div_plazas_iniciales .= "<div class=\"row mt-3\">";
			}

			$div_plazas_iniciales .= "
				<div class=\"col-sm-4 row-eq-height\">
		                        <div class=\"card redondo w-100\">
		                            <div class=\"card-body\">
		                                <div class=\"row \">
		                                    <div class=\"col-sm-3\">
		                                        <img src=\"htmls/images/plazas_icons/$icono\" class=\"img-card\">
		                                    </div>
		                                    <div class=\"col-sm\">
		                                        <h5 class=\"card-title\">$empresa</h5>
		                                        <h6 class=\"card-subtitle mb-2 text-muted\">$departamento</h6>
		                                    </div>
		                                    <div class=\"col-sm\">
		                                        <span class=\"badge rounded-pill bg-operativos\">$etiqueta</span>
		                                    </div>
		                                </div>
		                                <div class=\"row mt-3\">
		                                    <div class=\"col\">
		                                        <strong><h5 class=\"card-title\">$plaza</h5></strong>
		                                    </div>
		                                </div>
		                                <div class=\"row mt-3\">
		                                    <div class=\"col\">
		                                        <h6 class=\"card-subtitle mb-2 text-muted\">$categoria</h6>
		                                    </div>
		                                </div>
		                                <div class=\"row mt-3\">
		                                    <div class=\"col\">
		                                        <p class=\"card-text\">$descripcion</p>
		                                    </div>
		                                </div>
		                                <div class=\"row mt-3 \">
		                                    <div class=\"col-sm\">
		                                        <h5>Q$salario</h5>
		                                    </div>
		                                    <div class=\"col-sm d-flex justify-content-end\">
		                                        <a href=\"#\" class=\"btn btn-card\" onclick=\"aplicar($id_plaza)\">Aplica</a>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
					         ";

			if ($count_control >=3) {
				$div_plazas_iniciales .= "</div>";
				$count_control = 1;
			}else{
				$count_control++;
			}
			
		}
				    
		//******* FIN CODIGO PARA DIV DE PLAZAS INICIALES ********

		$jsondata['div_plazas_iniciales'] 	= $div_plazas_iniciales;
		$jsondata['message'] 			= $message;
		$jsondata['error']   			= $error;
		echo json_encode($jsondata);
	}

	function savePlazaFieldFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$value 		= $_POST['v'];
		$id 	 	= $_POST['id'];
		$id_plaza 	= $_POST['plaza'];
		$id_save 	= '';

		
		$query_save = "
			INSERT INTO formulario_data(id_field,value,id_plaza,formulario_datetime)
			VALUES
			($id,'$value',$id_plaza,NOW())
			      ";
		
//error_log($query_save);
		$execute_save = $conn->query($query_save);
		if($execute_save != 1){
			$error = "No se pudo guardar la infromación";
		}else{
			$message = "Tu aplicación se envío con éxito!";
		}
		
		
		$jsondata['message'] 	= $message;
		$jsondata['error']   	= $error;
		echo json_encode($jsondata);
	}

	function loadFormularioPlazaFunction(){
		//error_log('llegando');
		global $conn;
		$jsondata 		= array();
		$error 	  		= '';
		$message  		= '';
		$plaza_id 		= $_POST['serial'];
		$lista 			= "";

		
		$query_get = "
					SELECT campo_id
						,campo_name
						,campo_order
						,campo_plaza
					FROM formularios
					WHERE campo_plaza = $plaza_id
					ORDER BY campo_order
				   ";
	
		
		$execute_get = $conn->query($query_get);

		while($row_data = $execute_get->fetch_array()){

			$nombre 	= $row_data['campo_name'];
			$id 		= $row_data['campo_id'];

			$lista .= "
				<div class=\"row mt-1\">  
	                            <div class=\"col-sm\">
	                                <label>$nombre:</label>
	                            </div>
	                            <div class=\"col-sm\">
	                                <input class=\"form-control\" type=\"text\" name=\"$id\">
	                            </div>
	                        </div>	
				  ";
		}

		$lista .= "
			<div class=\"row mt-3\">  
	                    <div class=\"col-sm d-flex justify-content-end\">
	                        <button id=\"aplicar-puesto\" class=\"btn btn-outline-primary btn-redondo\">Aplicar</button>
	                    </div>
	                </div>
			  ";

		$jsondata['table_content'] 	= $lista;
		$jsondata['message'] 	  	= $message;
		$jsondata['error']  	  	= $error;
		echo json_encode($jsondata);
	}

	function saveCatalogoFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$nombre 	= $_POST['plaza'];
		$empresa 	= $_POST['empresa'];
		$etiqueta 	= $_POST['etiqueta'];
		$id_plaza 	= $_POST['id_plaza'];
		$categoria 	= $_POST['categoria'];
		$descripcion 	= $_POST['descripcion'];
		$departamento 	= $_POST['departamento'];
		$salario 	= $_POST['salario'];
		$estatus 	= $_POST['estatus'];
		$orden 		= $_POST['orden'];

		if($salario == ''){
			$salario = 0;
		}

		
		if($id_plaza != ''){
			$query_save = "
						UPDATE plazas
						SET plaza_name = '$nombre'
							,plaza_empresa 		= $empresa
							,plaza_departamento 	= '$departamento'
							,plaza_categoria 	= '$categoria'
							,plaza_descripcion 	= '$descripcion'
							,plaza_salario 		= $salario
							,plaza_etiqueta 	= $etiqueta
							,plaza_status 		= $estatus
							,plaza_orden 		= $orden
							,plaza_date_time 	= NOW()
						WHERE plaza_id = $id_plaza
					    ";
			
		}else{
			$query_save = "
					INSERT INTO plazas(plaza_name,plaza_departamento,plaza_categoria,plaza_descripcion,plaza_salario,plaza_etiqueta,plaza_status,plaza_empresa,plaza_orden,plaza_date_time)
					VALUES
					('$nombre','$departamento','$categoria','$descripcion',$salario,$etiqueta,$estatus,$empresa,$orden,NOW())
					   ";
		}
//error_log($query_save);
		$execute_save = $conn->query($query_save);
		if($execute_save != 1){
			$error = "No se pudo guardar/editar la plaza!";
		}else{
			$message = "Se guardo la plaza!";
		}
		
		if($id_plaza == ''){
			$last_id = $conn->insert_id;
		}else{
			$last_id = $id_plaza;
		}

		$_SESSION['id_plaza_icono'] = $last_id;
		
		$jsondata['message'] 	= $message;
		$jsondata['error']   	= $error;
		echo json_encode($jsondata);
	}

	function loadFichaCatalogoFunction(){
		global $conn;
		$jsondata 		= array();
		$error 	  		= '';
		$message  		= '';
		$lista_empresas 	= '';
		$lista_estatus  	= '';
		$nombre 	 	= '';
		$user_company   	= $_SESSION['company_id'];
		$rol_id 		= $_SESSION['rol_id'];
		$search 		= '';
		$lista_etiquetas 	= '';
		$orden 			= '';
		$departamento 		= '';
		$descripcion 		= '';
		$categoria 		= '';
		$salario 		= '';
		$icono 			= '';
		$orden 			= '';

		if(isset($_SESSION['ficha_catalogo_id'])){
			$search = $_SESSION['ficha_catalogo_id'];

			$query_get = "
						SELECT plaza_id
							,plaza_name
							,plaza_empresa
							,plaza_departamento
							,plaza_categoria
							,plaza_descripcion
							,plaza_salario
							,plaza_icono
							,plaza_etiqueta
							,plaza_orden
							,CASE
								WHEN plaza_status = 1 THEN \"Activo\"
								ELSE \"Inactivo\"
							END estatus_name
						FROM plazas
						WHERE plaza_id = $search
						";
//error_log($query_get);
			$execute_get = $conn->query($query_get);
			$data_get    = $execute_get->fetch_array();

			$nombre   	= $data_get['plaza_name'];
			$estaus   	= $data_get['estatus_name'];
			$company  	= $data_get['plaza_empresa'];
			$departamento  	= $data_get['plaza_departamento'];
			$categoria 	= $data_get['plaza_categoria'];
			$descripcion 	= $data_get['plaza_descripcion'];
			$salario 	= $data_get['plaza_salario'];
			$icono 	 	= $data_get['plaza_icono'];
			$etiqueta 	= $data_get['plaza_etiqueta'];
			$orden 		= $data_get['plaza_orden'];
//error_log("Si esta: $orden");
			unset($_SESSION['ficha_catalogo_id']);
		}else{
			//error_log("no esta");
					
			unset($_SESSION['ficha_catalogo_id']);
		}

		if(isset($data_get['plaza_etiqueta'])){
			
			$etiqueta = $data_get['plaza_etiqueta'];

			$query_lista = "SELECT etiqueta_name name,etiqueta_id id
						FROM etiquetas
						WHERE etiqueta_id = $etiqueta
						UNION
						SELECT etiqueta_name name,etiqueta_id id
						FROM etiquetas
						WHERE etiqueta_id NOT IN ($etiqueta)";
		}else{
			if($rol_id == 1){
				$query_lista = "
						SELECT etiqueta_name name,etiqueta_id id
						FROM etiquetas
						WHERE etiqueta_status = 1
						";
			}else{
				$query_lista = "
						SELECT etiqueta_name name,etiqueta_id id
						FROM etiquetas
						WHERE etiqueta_status = 1
						AND etiqueta_company = $user_company
						";
			}
			
		}

		$execute_lista = $conn->query($query_lista);
		while($row_lista = $execute_lista->fetch_array()){
			$id   = $row_lista['id'];
			$name = $row_lista['name'];
			$lista_etiquetas .= "<option value='$id'>$name</option>";
		}

		if(isset($data_get['plaza_empresa'])){
			
			$empresa = $data_get['plaza_empresa'];

			$query_lista_empresa = "SELECT company_name,company_id
						FROM company
						WHERE company_id = $empresa
						UNION
						SELECT company_name,company_id
						FROM company
						WHERE company_id NOT IN ($empresa)";
		}else{
			$query_lista_empresa = "
						SELECT company_name,company_id
						FROM company
						";
		}

		$execute_lista_company = $conn->query($query_lista_empresa);
		while($row_lista_company = $execute_lista_company->fetch_array()){
			$id   = $row_lista_company['company_id'];
			$name = $row_lista_company['company_name'];
			$lista_empresas .= "<option value='$id'>$name</option>";
		}

		if(isset($data_get['plaza_status'])){
		
			$query_lista_estatus = "SELECT CASE
							WHEN plaza_status = 1 THEN \"Activo\"
							ELSE \"Inactivo\"
						END estatus_name,plaza_status estatus_id
						FROM plazas
						WHERE plaza_id = $search
						UNION
						SELECT estatus_name, estatus_id
						FROM (
							SELECT 'Activo' estatus_name,1 estatus_id
							UNION
							SELECT 'Inactivo' estatus_name,0 estatus_id
						)t_estatus
						WHERE t_estatus.estatus_id NOT IN (
									SELECT plaza_status
									FROM plazas
									WHERE plaza_id = $search
										)";
		}else{
			$query_lista_estatus = "SELECT 'Activo' estatus_name,1 estatus_id
						UNION
						SELECT 'Inactivo' estatus_name,0 estatus_id
						
						";
		}
//error_log($query_lista_estatus);
		$execute_lista_estatus = $conn->query($query_lista_estatus);
		while($row_lista_estatus = $execute_lista_estatus->fetch_array()){
			$id   = $row_lista_estatus['estatus_id'];
			$name = $row_lista_estatus['estatus_name'];
			$lista_estatus .= "<option value='$id'>$name</option>";
		}

		
		if($rol_id == 1){
			$vista_empresa = true;
		}else{
			$vista_empresa = false;
		}

		$jsondata['orden']	    		= $orden;
		$jsondata['id_plaza']    		= $search;
		$jsondata['vista_empresa']    		= $vista_empresa;
		$jsondata['lista_estatus']    		= $lista_estatus;
		$jsondata['lista_empresas']    		= $lista_empresas;
		$jsondata['etiquetas_lista']		= $lista_etiquetas;
		$jsondata['nombre_plaza']		= $nombre;
		$jsondata['departamento_plaza']		= $departamento;
		$jsondata['descripcion_plaza']		= $descripcion;
		$jsondata['categoria_plaza']		= $categoria;
		$jsondata['salario_plaza']		= $salario;
		$jsondata['icono_plaza']		= $icono;
		$jsondata['etiquetas_lista']		= $lista_etiquetas;
		$jsondata['message']        		= $message;
		$jsondata['error']          		= $error;
		echo json_encode($jsondata);
	}

	function getCatalogoInfoFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$id 	   	= $_POST['id'];

		$_SESSION['ficha_catalogo_id'] = $id ;

		if(!isset($_SESSION['ficha_catalogo_id'])){
			$error = "Error no se puede verificar la plaza seleccionada!";
		}

		//error_log("etiqueta_id: $etiqueta_id");

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadCatalogoFunction(){
		//error_log('llegando');
		global $conn;
		$jsondata 		= array();
		$error 	  		= '';
		$message  		= '';
		$rol_id	  		= $_SESSION['rol_id'];
		$company_id 		= $_SESSION['company_id'];
		$lista 			= "";

		if($rol_id == 1){
			$query_get = "
						SELECT plaza_id
							,plaza_name
							,plaza_empresa
							,plaza_departamento
							,plaza_categoria
							,plaza_descripcion
							,plaza_salario
							,plaza_icono
							,plaza_etiqueta
							,CASE
								WHEN plaza_status = 1 THEN \"Activo\"
								ELSE \"Inactivo\"
							END estatus_name
						FROM plazas
						
					   ";
			
		}else{
			$query_get = "
						SELECT plaza_id
							,plaza_name
							,plaza_empresa
							,plaza_departamento
							,plaza_categoria
							,plaza_descripcion
							,plaza_salario
							,plaza_icono
							,plaza_etiqueta
							,CASE
								WHEN plaza_status = 1 THEN \"Activo\"
								ELSE \"Inactivo\"
							END estatus_name
						FROM plazas
						WHERE plaza_empresa = $company_id
					   ";
		}
		//error_log($query_get);
		
		$execute_get = $conn->query($query_get);

		while($row_data = $execute_get->fetch_array()){

			$nombre 	= $row_data['plaza_name'];
			$id 		= $row_data['plaza_id'];
			$departamento 	= $row_data['plaza_departamento'];
			$categoria 	= $row_data['plaza_categoria'];
			$salario 	= $row_data['plaza_salario'];
			$estatus 	= $row_data['estatus_name'];

			if($estatus == 'Activo'){
				$estatus = "<h6 class='text-success'>Activo</h6>";
			}else{
				$estatus = "<h6 class='text-danger'>Inactivo</h6>";
			}

			$lista .= "
					<tr>
                                        <td>
                                          <h6>
                                            <a href='#' onclick='ficha_catalogo(\"$id\")'>
                                              $nombre
                                            </a>
                                          </h6>
                                        </td>
                                        <td>
                                          <h6>$departamento</h6>
                                        </td>
                                        <td>
                                          <h6>$categoria</h6>
                                        </td>
                                        <td>
                                          <h6>Q$salario</h6>
                                        </td>
                                        <td>
                                          $estatus
                                        </td>
                                      </tr>
						";
		}

		$jsondata['table_content'] 	= $lista;
		$jsondata['message'] 	  	= $message;
		$jsondata['error']  	  	= $error;
		echo json_encode($jsondata);
	}

	function insertFieldFunction(){
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';
		$str      = $_POST['str'];

		//error_log("string: $str");
		$data = explode(",",$str);
		//error_log(print_r($data, TRUE));
		$name 	= $data[0];
		$id 	= $data[1];
		$order 	= $data[2];
		$plaza  = $data[3];

		if($id != ''){
			$query_insert = "
			INSERT INTO formularios(campo_id,campo_name,campo_order,campo_plaza)
			VALUES
			($id,'$name',$order,$plaza)
			ON DUPLICATE KEY UPDATE campo_name  = '$name'
						,campo_order = $order
						,campo_plaza = $plaza
				   ";
		}else{
			$query_insert = "
			INSERT INTO formularios(campo_name,campo_order,campo_plaza)
			VALUES ('$name',$order,$plaza)
				   ";
		}

		
				   //error_log($query_insert);
		$execute_query_insert = $conn->query($query_insert);

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadInfoFormularioFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$plaza 		= $_POST['plaza_id'];
		$lista 		= '';
		$flag       = false;

		$query_lista = "
				SELECT campo_id id
					,campo_name 'name'
					,campo_order 'order'
				FROM formularios
				WHERE campo_plaza = $plaza
				ORDER BY campo_order ASC
				";	
/*
		$lista .= "<div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"Nombre y apellido\">
                                  <input type=\"text\" class=\"form-control\" value=\"\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"1\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>
                              <div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"Email\">
                                  <input type=\"text\" class=\"form-control\" value=\"\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"2\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>
                              <div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"Número de teléfono\">
                                  <input type=\"text\" class=\"form-control\" value=\"\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"3\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>
                              <div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"Edad\">
                                  <input type=\"text\" class=\"form-control\" value=\"\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"4\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>
                              <div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"Escolaridad\">
                                  <input type=\"text\" class=\"form-control\" value=\"\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"5\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>
                              <div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"Experiencia\">
                                  <input type=\"text\" class=\"form-control\" value=\"\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"6\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>
                              <div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"Dirección de vivienda\">
                                  <input type=\"text\" class=\"form-control\" value=\"\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"7\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>
                              <div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"Medio de transporte\">
                                  <input type=\"text\" class=\"form-control\" value=\"\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"8\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>";			
                              */
	
		$execute_lista = $conn->query($query_lista);
		while($row_lista = $execute_lista->fetch_array()){
			$id    = $row_lista['id'];
			$name  = $row_lista['name'];
			$order = $row_lista['order'];
			$lista .= "<div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"$name\">
                                  <input type=\"text\" class=\"form-control\" value=\"$id\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"$order\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>";
            if($name == 'Email'){
            	$flag = true;
            }
		}

        if($flag == false){
        	$lista .= "<div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"Nombre y apellido\">
                                  <input type=\"text\" class=\"form-control\" value=\"\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"1\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>
                              <div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"Email\">
                                  <input type=\"text\" class=\"form-control\" value=\"\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"2\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>
                              <div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"Número de teléfono\">
                                  <input type=\"text\" class=\"form-control\" value=\"\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"3\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>
                              <div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"Edad\">
                                  <input type=\"text\" class=\"form-control\" value=\"\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"4\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>
                              <div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"Escolaridad\">
                                  <input type=\"text\" class=\"form-control\" value=\"\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"5\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>
                              <div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"Experiencia\">
                                  <input type=\"text\" class=\"form-control\" value=\"\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"6\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>
                              <div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"Dirección de vivienda\">
                                  <input type=\"text\" class=\"form-control\" value=\"\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"7\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>
                              <div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"Medio de transporte\">
                                  <input type=\"text\" class=\"form-control\" value=\"\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"8\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>";			
        }

        $lista .= "<div class=\"row mt-3\">
                                <div class=\"col-sm\">
                                  <label>Etiqueta:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"\">
                                  <input type=\"text\" class=\"form-control\" value=\"\" hidden>
                                </div>
                                <div class=\"col-sm\">
                                  <label>Orden:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"\">
                                </div>
                                <div class=\"col-sm\">
                                  <br>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p add_field\" ><i class=\"mdi mdi-plus\"></i></button>
                                  <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p delete_field\"><i class=\"mdi mdi-minus \"></i></button>
                                </div>
                              </div>";

		$jsondata['lista'] 		= $lista;
		$jsondata['message'] 	= $message;
		$jsondata['error']   	= $error;
		echo json_encode($jsondata);
	}

	function loadFormularioFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$company_id 	= $_SESSION['company_id'];
		$lista 		= '';

		$query_lista = "
				SELECT plaza_id id
					,plaza_name name
				FROM plazas
				WHERE plaza_empresa = $company_id
				";
	

		$execute_lista = $conn->query($query_lista);
		$lista .= "<option value='0'>---</option>";
		while($row_lista = $execute_lista->fetch_array()){
			$id   = $row_lista['id'];
			$name = $row_lista['name'];
			$lista .= "<option value='$id'>$name</option>";
		}

		$jsondata['lista'] 	= $lista;
		$jsondata['message'] 	= $message;
		$jsondata['error']   	= $error;
		echo json_encode($jsondata);
	}

	
	function saveEmpresaFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$nombre 	= $_POST['ficha_nombre_empresa'];
		$lista_estatus 	= $_POST['lista_estatus'];
		$id_empresa 	= $_POST['id_empresa'];
		$phone  	= $_POST['ficha_phone_empresa'];
		$web 	 	= $_POST['ficha_web_empresa'];
		$country 	= $_POST['ficha_pais_empresa'];
		$coin 		= $_POST['ficha_moneda_empresa'];
		
		if($id_empresa != ''){
			$query_save = "
						UPDATE company
						SET company_name 	= '$nombre',
							company_status 	= $lista_estatus,
							company_phone	= $phone,
							company_coin	= '$coin',
							company_web 	= '$web',
							company_country = '$country'
						WHERE company_id = $id_empresa
					    ";
			
		}else{
			$query_save = "
					INSERT INTO company(company_name,company_status,company_phone,company_coin,company_web,company_country)
					VALUES
					('$nombre',$lista_estatus,$phone,'$coin','$web','$country')
					   ";
		}
//error_log($query_save);
		$execute_save = $conn->query($query_save);
			if($execute_save != 1){
				$error = "No se pudo guardar/editar la empresa!";
			}
		

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadFichaEmpresaFunction(){
		global $conn;
		$jsondata 		= array();
		$error 	  		= '';
		$message  		= '';
		$nombre 	 	= '';
		$user_company   	= $_SESSION['company_id'];
		$rol_id 		= $_SESSION['rol_id'];
		$search 		= '';
		$phone  		= '';
		$web 			= '';
		$coin 	 		= '';
		$country 		= '';
		$lista_estatus 		= '';

		if(isset($_SESSION['ficha_empresa_id'])){
			$search = $_SESSION['ficha_empresa_id'];

			$query_get = "
						SELECT company_id
							,company_name
							,company_phone
							,company_coin
							,company_web
							,company_status
							,company_country
						FROM company
						WHERE company_id = $search
						";
						//error_log($query_get_etiqueta_info);
			$execute_get = $conn->query($query_get);
			$data_get    = $execute_get->fetch_array();

			$nombre   = $data_get['company_name'];
			$estaus   = $data_get['company_status'];
			$web 	  = $data_get['company_web'];
			$phone 	  = $data_get['company_phone'];
			$coin 	  = $data_get['company_coin'];
			$country  = $data_get['company_country'];

			unset($_SESSION['ficha_empresa_id']);
		}else{
			//error_log("no esta");
					
			unset($_SESSION['ficha_empresa_id']);
		}


		if(isset($data_get['tarea_status'])){
		
			$query_lista_estatus = "SELECT CASE
							WHEN company_status = 1 THEN \"Activo\"
							ELSE \"Inactivo\"
						END estatus_name,company_status estatus_id
						FROM company
						WHERE company_id = $search
						UNION
						SELECT estatus_name, estatus_id
						FROM (
							SELECT 'Activo' estatus_name,1 estatus_id
							UNION
							SELECT 'Inactivo' estatus_name,0 estatus_id
						)t_estatus
						WHERE t_estatus.estatus_id NOT IN (
									SELECT company_status
									FROM company
									WHERE company_id = $search
										)";
		}else{
			$query_lista_estatus = "SELECT 'Activo' estatus_name,1 estatus_id
						UNION
						SELECT 'Inactivo' estatus_name,0 estatus_id
						
						";
		}
//error_log($query_lista_estatus);
		$execute_lista_estatus = $conn->query($query_lista_estatus);
		while($row_lista_estatus = $execute_lista_estatus->fetch_array()){
			$id   = $row_lista_estatus['estatus_id'];
			$name = $row_lista_estatus['estatus_name'];
			$lista_estatus .= "<option value='$id'>$name</option>";
		}

		$jsondata['id_empresa']    		= $search;
		$jsondata['lista_estatus']    		= $lista_estatus;
		$jsondata['ficha_nombre_empresa']	= $nombre;
		$jsondata['ficha_phone_empresa']	= $phone;
		$jsondata['ficha_web_empresa']		= $web;
		$jsondata['ficha_moneda_empresa']	= $coin;
		$jsondata['ficha_web_empresa']		= $web;
		$jsondata['ficha_pais_empresa']		= $country;
		$jsondata['message']        		= $message;
		$jsondata['error']          		= $error;
		echo json_encode($jsondata);
	}

	function getEmpresaInfoFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$id 	   	= $_POST['id'];

		$_SESSION['ficha_empresa_id'] = $id ;

		if(!isset($_SESSION['ficha_empresa_id'])){
			$error = "Error no se puede verificar la empresa seleccionada!";
		}

		//error_log("etiqueta_id: $etiqueta_id");

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadEmpresasFunction(){
		global $conn;
		$jsondata 		= array();
		$error 	  		= '';
		$message  		= '';
		$rol_id	  		= $_SESSION['rol_id'];
		$company_id 		= $_SESSION['company_id'];
		$lista 			= "";

		if($rol_id == 1){
			$query_get = "
						SELECT company_id
							,company_name
							,company_phone
							,company_coin
							,CASE
								WHEN company_status = 1 THEN \"Activo\"
								ELSE \"Inactivo\"
							END estatus_name
						FROM company
						
					   ";
			
		}else{
			$query_get = "
						SELECT company_id
							,company_name
							,company_phone
							,company_coin
							,CASE
								WHEN company_status = 1 THEN \"Activo\"
								ELSE \"Inactivo\"
							END estatus_name
						FROM company
						WHERE company_id = $company_id
					   ";
		}
		
		$execute_get = $conn->query($query_get);

		while($row_data = $execute_get->fetch_array()){

			$nombre 	= $row_data['company_name'];
			$id 		= $row_data['company_id'];
			$estatus 	= $row_data['estatus_name'];
			$coin 	  	= $row_data['company_coin'];
			$phone 	  	= $row_data['company_phone'];

			if($estatus == 'Activo'){
				$estatus = "<h6 class='text-success'>Activo</h6>";
			}else{
				$estatus = "<h6 class='text-danger'>Inactivo</h6>";
			}

			$lista .= "
					<tr>
	                                        <td>
	                                          <h6>
	                                            <a href='#' onclick='ficha_empresa(\"$id\")'>
	                                              $nombre
	                                            </a>
	                                          </h6>
	                                        </td>
	                                        <td>
	                                          <h6>$phone</h6>
	                                        </td>
	                                        <td>
	                                          <h6>$coin</h6>
	                                        </td>
	                                        <td>
	                                          $estatus
	                                        </td>
                                      	</tr>
						";
		}

		$jsondata['table_content'] = $lista;
		$jsondata['message'] 	  	= $message;
		$jsondata['error']  	  	= $error;
		echo json_encode($jsondata);
	}

	function saveTareaFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$nombre 	= $_POST['nombre_tarea'];
		$lista_empresas = $_POST['lista_empresas'];
		$lista_estatus 	= $_POST['lista_estatus'];
		$id_tarea 	= $_POST['id_tarea'];
		$orden_tarea 	= $_POST['orden_tarea'];
		$etapa_id 	= $_POST['etapas_ficha_tareas_lista'];
		
		if($id_tarea != ''){
			$query_save = "
						UPDATE tareas_por_etapa
						SET tarea_name 		= '$nombre',
							tarea_status 	= $lista_estatus,
							tarea_company	= $lista_estatus,
							tarea_orden	= $orden_tarea,
							tarea_etapa 	= $etapa_id
						WHERE tarea_id = $id_tarea
					    ";
			
		}else{
			$query_save = "
					INSERT INTO tareas_por_etapa(tarea_name,tarea_status,tarea_company,tarea_orden,tarea_etapa)
					VALUES
					('$nombre',$lista_estatus,$lista_empresas,$orden_tarea,$etapa_id)
					   ";
		}

		$execute_save = $conn->query($query_save);
			if($execute_save != 1){
				$error = "No se pudo guardar/editar la tarea!";
			}
		

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadFichaTareasEtapaFunction(){
		global $conn;
		$jsondata 		= array();
		$error 	  		= '';
		$message  		= '';
		$lista_empresas 	= '';
		$lista_estatus  	= '';
		$nombre 	 	= '';
		$user_company   	= $_SESSION['company_id'];
		$rol_id 		= $_SESSION['rol_id'];
		$search 		= '';
		$lista_etapas 		= '';
		$orden 			= '';

		if(isset($_SESSION['ficha_tarea_id'])){
			$search = $_SESSION['ficha_tarea_id'];

			$query_get = "
						SELECT tarea_id
							,tarea_name
							,tarea_orden
							,tarea_status
							,tarea_company
							,tarea_etapa
						FROM tareas_por_etapa
						WHERE tarea_id = $search
						";
						//error_log($query_get_etiqueta_info);
			$execute_get = $conn->query($query_get);
			$data_get    = $execute_get->fetch_array();

			$nombre   = $data_get['tarea_name'];
			$estaus   = $data_get['tarea_status'];
			$company  = $data_get['tarea_company'];
			$orden 	  = $data_get['tarea_orden'];
			$etapa 	  = $data_get['tarea_etapa'];
			//error_log("Si esta: $nombre");
			unset($_SESSION['ficha_tarea_id']);
		}else{
			//error_log("no esta");
					
			unset($_SESSION['ficha_tarea_id']);
		}

		if(isset($data_get['tarea_etapa'])){
			
			$etapa = $data_get['tarea_etapa'];

			$query_lista_etapas = "SELECT etapa_name name,etapa_id id
						FROM etapas
						WHERE etapa_id = $etapa
						UNION
						SELECT etapa_name name,etapa_id id
						FROM etapas
						WHERE etapa_id NOT IN ($etapa)";
		}else{
			if($rol_id == 1){
				$query_lista_etapas = "
						SELECT etapa_name name,etapa_id id
						FROM etapas
						WHERE etapa_status = 1
						";
			}else{
				$query_lista_etapas = "
						SELECT etapa_name name,etapa_id id
						FROM etapas
						WHERE etapa_status = 1
						AND etapa_company = $user_company
						";
			}
			
		}

		$execute_lista = $conn->query($query_lista_etapas);
		while($row_lista = $execute_lista->fetch_array()){
			$id   = $row_lista['id'];
			$name = $row_lista['name'];
			$lista_etapas .= "<option value='$id'>$name</option>";
		}

		if(isset($data_get['tarea_company'])){
			
			$empresa = $data_get['tarea_company'];

			$query_lista_empresa = "SELECT company_name,company_id
						FROM company
						WHERE company_id = $empresa
						UNION
						SELECT company_name,company_id
						FROM company
						WHERE company_id NOT IN ($empresa)";
		}else{
			$query_lista_empresa = "
						SELECT company_name,company_id
						FROM company
						";
		}

		$execute_lista_company = $conn->query($query_lista_empresa);
		while($row_lista_company = $execute_lista_company->fetch_array()){
			$id   = $row_lista_company['company_id'];
			$name = $row_lista_company['company_name'];
			$lista_empresas .= "<option value='$id'>$name</option>";
		}

		if(isset($data_get['tarea_status'])){
		
			$query_lista_estatus = "SELECT CASE
							WHEN tarea_status = 1 THEN \"Activo\"
							ELSE \"Inactivo\"
						END estatus_name,tarea_status estatus_id
						FROM tareas_por_etapa
						WHERE tarea_id = $search
						UNION
						SELECT estatus_name, estatus_id
						FROM (
							SELECT 'Activo' estatus_name,1 estatus_id
							UNION
							SELECT 'Inactivo' estatus_name,0 estatus_id
						)t_estatus
						WHERE t_estatus.estatus_id NOT IN (
									SELECT tarea_status
									FROM tareas_por_etapa
									WHERE tarea_id = $search
										)";
		}else{
			$query_lista_estatus = "SELECT 'Activo' estatus_name,1 estatus_id
						UNION
						SELECT 'Inactivo' estatus_name,0 estatus_id
						
						";
		}
//error_log($query_lista_estatus);
		$execute_lista_estatus = $conn->query($query_lista_estatus);
		while($row_lista_estatus = $execute_lista_estatus->fetch_array()){
			$id   = $row_lista_estatus['estatus_id'];
			$name = $row_lista_estatus['estatus_name'];
			$lista_estatus .= "<option value='$id'>$name</option>";
		}

		
		if($rol_id == 1){
			$vista_empresa = true;
		}else{
			$vista_empresa = false;
		}

		$jsondata['id_tarea']    		= $search;
		$jsondata['vista_empresa']    		= $vista_empresa;
		$jsondata['lista_estatus']    		= $lista_estatus;
		$jsondata['lista_empresas']    		= $lista_empresas;
		$jsondata['nombre_tarea']		= $nombre;
		$jsondata['orden_tarea']		= $orden;
		$jsondata['etapas_ficha_tareas_lista']	= $lista_etapas;
		$jsondata['message']        		= $message;
		$jsondata['error']          		= $error;
		echo json_encode($jsondata);
	}

	function getTareaInfoFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$id 	   	= $_POST['id'];

		$_SESSION['ficha_tarea_id'] = $id ;

		if(!isset($_SESSION['ficha_tarea_id'])){
			$error = "Error no se puede verificar la tarea seleccionada!";
		}

		//error_log("etiqueta_id: $etiqueta_id");

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadTareasPorEtapaChangeFunction(){
		global $conn;
		$jsondata 		= array();
		$error 	  		= '';
		$message  		= '';
		$rol_id	  		= $_SESSION['rol_id'];
		$company_id 		= $_SESSION['company_id'];
		$lista_tareas		= "";
		$etapa_id 		= $_POST['etapa_id'];

		if($rol_id == 1){
			$query_get = "
						SELECT tarea_id
							,tarea_name
							,tarea_orden
							,CASE
								WHEN tarea_status = 1 THEN \"Activo\"
								ELSE \"Inactivo\"
							END estatus_name
							,tarea_company
						FROM tareas_por_etapa
						WHERE tarea_etapa = $etapa_id
						
					   ";
			
		}else{
			$query_get = "
						SELECT tarea_id
							,tarea_name
							,tarea_orden
							,CASE
								WHEN tarea_status = 1 THEN \"Activo\"
								ELSE \"Inactivo\"
							END estatus_name
							,tarea_company
						FROM tareas_por_etapa
						WHERE tarea_etapa = $etapa_id
						AND tarea_company = $company_id
					   ";
		}
		
		$execute_get = $conn->query($query_get);

		while($row_data = $execute_get->fetch_array()){

			$nombre 	= $row_data['tarea_name'];
			$id 		= $row_data['tarea_id'];
			$estatus 	= $row_data['estatus_name'];
			$orden  	= $row_data['tarea_orden'];

			if($estatus == 'Activo'){
				$estatus = "<h6 class='text-success'>Activo</h6>";
			}else{
				$estatus = "<h6 class='text-danger'>Inactivo</h6>";
			}

			$lista_tareas .= "
					<tr>
	                                        <td>
	                                          <h6>
	                                            <a href='#' onclick='ficha_tareas_etapa(\"$id\")'>
	                                              $nombre
	                                            </a>
	                                          </h6>
	                                        </td>
	                                        <td>
	                                          $orden
	                                        </td>
	                                        <td>
	                                          $estatus
	                                        </td>
                                      	</tr>
						";
		}

		$jsondata['lista_tareas_table'] = $lista_tareas;
		$jsondata['message'] 	  	= $message;
		$jsondata['error']  	  	= $error;
		echo json_encode($jsondata);
	}

	function loadTareasPorEtapaFunction(){
		global $conn;
		$jsondata    = array();
		$error 	     = '';
		$message     = '';
		$lista_etapas= '';
		$company_id  = $_SESSION['company_id'];
		$rol_id	     = $_SESSION['rol_id'];

		if($rol_id==1){
			$query_lista_etapas = "
					SELECT etapa_name
						,etapa_id
					FROM etapas

					   ";
		}else{
			$query_lista_etapas = "
					SELECT etapa_name
						,etapa_id
					FROM etapas
					WHERE etapa_company = $company_id
					   ";
		}

		$execute_lista_etapas = $conn->query($query_lista_etapas);
		$lista_etapas .= "<option value='0'>---</option>";
		while ($row_data = $execute_lista_etapas->fetch_array()) {
			$id   = $row_data['etapa_id'];
			$name = $row_data['etapa_name'];

			$lista_etapas .= "<option value='$id'>$name</option>";
		}
		
		//error_log($lista_etapas);
		$jsondata['etapas_manto_tareas'] = $lista_etapas;
		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function saveEtiquetaFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$nombre_etiqueta 	= $_POST['nombre_etiqueta'];
		$lista_empresas = $_POST['lista_empresas'];
		$lista_estatus 	= $_POST['lista_estatus'];
		$id_etiqueta 	= $_POST['id_etiqueta'];
		
		if($id_etiqueta != ''){
			$query_save_etiqueta = "
						UPDATE etiquetas
						SET etiqueta_name 	= '$nombre_etiqueta',
							etiqueta_status = $lista_estatus,
							etiqueta_company= $lista_empresas
						WHERE etiqueta_id = $id_etiqueta
					    ";
			
		}else{
			$query_save_etiqueta = "
					INSERT INTO etiquetas(etiqueta_name,etiqueta_status,etiqueta_company)
					VALUES
					('$nombre_etiqueta',$lista_estatus,$lista_empresas)
					   ";
		}

		error_log($query_save_etiqueta);

		$execute_save_etiqueta = $conn->query($query_save_etiqueta);
			if($execute_save_etiqueta != 1){
				$error = "No se pudo guardar/editar la etiqueta!";
			}
		

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadFichaEtiquetasFunction(){
		global $conn;
		$jsondata 		= array();
		$error 	  		= '';
		$message  		= '';
		$lista_empresas 	= '';
		$lista_estatus  	= '';
		$nombre 	 	= '';
		$user_company   	= $_SESSION['company_id'];
		$rol_id 		= $_SESSION['rol_id'];
		$etiqueta_search 	= '';

		if(isset($_SESSION['ficha_etiqueta_id'])){
			$etiqueta_search = $_SESSION['ficha_etiqueta_id'];

			$query_get_etiqueta_info = "
						SELECT etiqueta_id
							,etiqueta_name
							,etiqueta_status
							,etiqueta_company
						FROM etiquetas
						WHERE etiqueta_id = $etiqueta_search
						";
						//error_log($query_get_etiqueta_info);
			$execute_get_etiqueta_info = $conn->query($query_get_etiqueta_info);
			$data_get_etiqueta_info = $execute_get_etiqueta_info->fetch_array();

			$nombre   = $data_get_etiqueta_info['etiqueta_name'];
			$estaus   = $data_get_etiqueta_info['etiqueta_status'];
			$company  = $data_get_etiqueta_info['etiqueta_company'];
			//error_log("Si esta: $nombre");
			unset($_SESSION['ficha_etiqueta_id']);
		}else{
			//error_log("no esta");
					
			unset($_SESSION['ficha_etiqueta_id']);
		}


		if(isset($data_get_etiqueta_info['etiqueta_company'])){
			
			$empresa = $data_get_etiqueta_info['etiqueta_company'];

			$query_lista_empresa = "SELECT company_name,company_id
						FROM company
						WHERE company_id = $empresa
						UNION
						SELECT company_name,company_id
						FROM company
						WHERE company_id NOT IN ($empresa)";
		}else{
			$query_lista_empresa = "
						SELECT company_name,company_id
						FROM company
						";
		}

		$execute_lista_company = $conn->query($query_lista_empresa);
		while($row_lista_company = $execute_lista_company->fetch_array()){
			$id   = $row_lista_company['company_id'];
			$name = $row_lista_company['company_name'];
			$lista_empresas .= "<option value='$id'>$name</option>";
		}

		if(isset($data_get_etiqueta_info['etiqueta_company'])){
		
			$query_lista_estatus = "SELECT CASE
							WHEN etiqueta_status = 1 THEN \"Activo\"
							ELSE \"Inactivo\"
						END estatus_name,etiqueta_status estatus_id
						FROM etiquetas
						WHERE etiqueta_id = $etiqueta_search
						UNION
						SELECT estatus_name, estatus_id
						FROM (
							SELECT 'Activo' estatus_name,1 estatus_id
							UNION
							SELECT 'Inactivo' estatus_name,0 estatus_id
						)t_estatus
						WHERE t_estatus.estatus_id NOT IN (
									SELECT etiqueta_status
									FROM etiquetas
									WHERE etiqueta_id = $etiqueta_search
										)";
		}else{
			$query_lista_estatus = "SELECT 'Activo' estatus_name,1 estatus_id
						UNION
						SELECT 'Inactivo' estatus_name,0 estatus_id
						
						";
		}
//error_log($query_lista_estatus);
		$execute_lista_estatus = $conn->query($query_lista_estatus);
		while($row_lista_estatus = $execute_lista_estatus->fetch_array()){
			$id   = $row_lista_estatus['estatus_id'];
			$name = $row_lista_estatus['estatus_name'];
			$lista_estatus .= "<option value='$id'>$name</option>";
		}

		
		if($rol_id == 1){
			$vista_empresa = true;
		}else{
			$vista_empresa = false;
		}

		$jsondata['id_etiqueta']    	= $etiqueta_search;
		$jsondata['vista_empresa']    	= $vista_empresa;
		$jsondata['lista_estatus']    	= $lista_estatus;
		$jsondata['lista_empresas']    	= $lista_empresas;
		$jsondata['nombre_etiqueta']    = $nombre;
		//error_log("nombre: $nombre_etiqueta");
		$jsondata['message']        	= $message;
		$jsondata['error']          	= $error;
		echo json_encode($jsondata);
	}

	function getEtiquetaInfoFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$etiqueta_id   	= $_POST['etiqueta_id'];

		$_SESSION['ficha_etiqueta_id'] = $etiqueta_id ;

		if(!isset($_SESSION['ficha_etiqueta_id'])){
			$error = "Error no se puede verificar la etiqueta seleccionada!";
		}

		//error_log("etiqueta_id: $etiqueta_id");

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadEtiquetasFunction(){
		global $conn;
		$jsondata 		= array();
		$error 	  		= '';
		$message  		= '';
		$rol_id	  		= $_SESSION['rol_id'];
		$company_id 		= $_SESSION['company_id'];
		$lista_etiquetas	= "";

		if($rol_id == 1){
			$query_get_etiquetas = "
						SELECT etiqueta_id
							,etiqueta_name
							,CASE
								WHEN etiqueta_status = 1 THEN \"Activo\"
								ELSE \"Inactivo\"
							END estatus_name
							,etiqueta_company
						FROM etiquetas
						
					   ";
			
		}else{
			$query_get_etiquetas = "
						SELECT etiqueta_id
							,etiqueta_name
							,CASE
								WHEN etiqueta_status = 1 THEN \"Activo\"
								ELSE \"Inactivo\"
							END estatus_name
							,etiqueta_company
						FROM etiquetas
						WHERE etiqueta_company = $company_id
					   ";
		}
		
		$execute_get_etiquetas = $conn->query($query_get_etiquetas);

		while($row_data = $execute_get_etiquetas->fetch_array()){

			$nombre 	= $row_data['etiqueta_name'];
			$id 		= $row_data['etiqueta_id'];
			$estatus 	= $row_data['estatus_name'];

			if($estatus == 'Activo'){
				$estatus = "<h6 class='text-success'>Activo</h6>";
			}else{
				$estatus = "<h6 class='text-danger'>Inactivo</h6>";
			}

			$lista_etiquetas .= "
					<tr>
	                                        <td>
	                                          <h6>
	                                            <a href='#' onclick='ficha_etiquetas(\"$id\")'>
	                                              $nombre
	                                            </a>
	                                          </h6>
	                                        </td>
	                                        <td>
	                                          $estatus
	                                        </td>
                                      	</tr>
						";
		}

		$jsondata['lista_etiquetas'] 	= $lista_etiquetas;
		$jsondata['message'] 	  	= $message;
		$jsondata['error']  	  	= $error;
		echo json_encode($jsondata);
	}

	function saveEtapaFunction(){
		global $conn;
		$jsondata 		= array();
		$error 	  		= '';
		$message  		= '';
		$nombre_etapa 	= $_POST['nombre_etapa'];
		$orden_etapa 	= $_POST['orden_etapa'];
		$lista_empresas = $_POST['lista_empresas'];
		$lista_estatus 	= $_POST['lista_estatus'];
		$id_etapa 		= $_POST['id_etapa'];
		$mail_txt 		= utf8_encode($_POST['email_txt']);
		
		if($id_etapa != ''){
			$query_save_etapa = "
						UPDATE etapas
						SET etapa_name 	= '$nombre_etapa',
							etapa_order 	= $orden_etapa,
							etapa_status 	= $lista_estatus,
							etapa_company	= $lista_estatus,
							email 			= '$mail_txt'
						WHERE etapa_id = $id_etapa
					    ";
			
		}else{
			$query_save_etapa = "
					INSERT INTO etapas(etapa_name,etapa_order,etapa_status,etapa_company,email)
					VALUES
					('$nombre_etapa',$orden_etapa,$lista_estatus,$lista_empresas,'$mail_txt')
				
					   ";
		}

		$execute_save_etapa = $conn->query($query_save_etapa);
			if($execute_save_etapa != 1){
				$error = "No se pudo guardar/editar la etapa!";
			}
//error_log("$query_save_etapa" . 'exe: ' . "$execute_save_etapa");
		

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadFichaEtapaFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$lista_empresas = '';
		$lista_estatus  = '';
		$nombre_etapa 	= '';
		$user_company   = $_SESSION['company_id'];
		$rol_id 	    = $_SESSION['rol_id'];
		$order_etapa    = '';
		$etapa_search   = '';
		$email_a_enviar = '';

		if(isset($_SESSION['ficha_etapa_id'])){
			$etapa_search = $_SESSION['ficha_etapa_id'];
			$query_get_etapa_info = "
						SELECT etapa_name
							,etapa_order
							,etapa_status
							,etapa_company
							,email
						FROM etapas
						WHERE etapa_id = $etapa_search
						";
						error_log($query_get_etapa_info);
			$execute_get_etapa_info = $conn->query($query_get_etapa_info);
			$data_get_etapa_info = $execute_get_etapa_info->fetch_array();

			$nombre_etapa   = $data_get_etapa_info['etapa_name'];
			$order_etapa 	= $data_get_etapa_info['etapa_order'];
			$estaus_etapa   = $data_get_etapa_info['etapa_status'];
			$company_etapa  = $data_get_etapa_info['etapa_company'];
			$email_a_enviar = $data_get_etapa_info['email'];

			unset($_SESSION['ficha_etapa_id']);
		}else{
					
			unset($_SESSION['ficha_etapa_id']);
		}


		if(isset($data_get_etapa_info['etapa_company'])){
			
			$empresa = $data_get_etapa_info['etapa_company'];

			$query_lista_empresa = "SELECT company_name,company_id
						FROM company
						WHERE company_id = $empresa
						UNION
						SELECT company_name,company_id
						FROM company
						WHERE company_id NOT IN ($empresa)";
		}else{
			$query_lista_empresa = "
						SELECT company_name,company_id
						FROM company
						";
		}

		$execute_lista_company = $conn->query($query_lista_empresa);
		while($row_lista_company = $execute_lista_company->fetch_array()){
			$id   = $row_lista_company['company_id'];
			$name = $row_lista_company['company_name'];
			$lista_empresas .= "<option value='$id'>$name</option>";
		}

		if(isset($data_get_data_info['etapa_status'])){
			$etapa_search = $_SESSION['ficha_etapa_id'];
			$query_lista_estatus = "SELECT CASE
							WHEN etapa_status = 1 THEN \"Activo\"
							ELSE \"Inactivo\"
						END estatus_name,etapa_status estatus_id
						FROM etapas
						WHERE etapa_id = $etapa_search
						UNION
						SELECT estatus_name,etapa_status estatus_id
						FROM (
							SELECT 'Activo' estatus_name,1 estatus_id
							UNION
							SELECT 'Inactivo' estatus_name,0 estatus_id
						)t_estatus
						WHERE t_estatus.estatus_id NOT IN (
									SELECT etapa_status
									FROM etapas
									WHERE etapa_id = $etapa_search'
										)";
		}else{
			$query_lista_estatus = "SELECT 'Activo' estatus_name,1 estatus_id
						UNION
						SELECT 'Inactivo' estatus_name,0 estatus_id
						
						";
		}

//error_log($query_lista_estatus);

		$execute_lista_estatus = $conn->query($query_lista_estatus);
		while($row_lista_estatus = $execute_lista_estatus->fetch_array()){
			$id   = $row_lista_estatus['estatus_id'];
			$name = $row_lista_estatus['estatus_name'];
			$lista_estatus .= "<option value='$id'>$name</option>";
		}

		
		if($rol_id == 1){
			$vista_empresa = true;
		}else{
			$vista_empresa = false;
		}

		$jsondata['id_etapa']    	    = $etapa_search;
		$jsondata['vista_empresa']    	= $vista_empresa;
		$jsondata['lista_estatus']    	= $lista_estatus;
		$jsondata['lista_empresas']    	= $lista_empresas;
		$jsondata['nombre_etapa']      	= $nombre_etapa;
		$jsondata['orden_etapa']	    = $order_etapa;
		$jsondata['correoaenviar'] 		= utf8_decode($email_a_enviar);
		$jsondata['message']        	= $message;
		$jsondata['error']          	= $error;
		echo json_encode($jsondata);
//error_log(print_r($jsondata,true));
	}

	function getEtapaInfoFunction(){
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';
		$etapa_id   = $_POST['etapa_id'];

		$_SESSION['ficha_etapa_id'] = $etapa_id;

		if(!isset($_SESSION['ficha_etapa_id'])){
			$error = "Error no se puede verificar la etapa seleccionada!";
		}

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadEtapasFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$rol_id	  	= $_SESSION['rol_id'];
		$company_id 	= $_SESSION['company_id'];
		$lista_etapas	= "";

		if($rol_id == 1){
			$query_get_etapas = "
						SELECT etapa_name
							,etapa_id
							,etapa_order
							,CASE
								WHEN etapa_status = 1 THEN \"Activo\"
								ELSE \"Inactivo\"
							END estatus_name
							,etapa_name
						FROM etapas
						ORDER BY etapa_order ASC
					   ";
			
		}else{
			$query_get_etapas = "
						SELECT etapa_name
							,etapa_id
							,etapa_order
							,CASE
								WHEN etapa_status = 1 THEN \"Activo\"
								ELSE \"Inactivo\"
							END estatus_name
							,etapa_name
						FROM etapas
						WHERE etapa_company = $company_id
						ORDER BY etapa_order ASC
					   ";
		}
		
		$execute_get_etapas = $conn->query($query_get_etapas);

		while($row_data = $execute_get_etapas->fetch_array()){

			$nombre 	= $row_data['etapa_name'];
			$id 		= $row_data['etapa_id'];
			$estatus 	= $row_data['estatus_name'];
			$order 		= $row_data['etapa_order'];

			if($estatus == 'Activo'){
				$estatus = "<h6 class='text-success'>Activo</h6>";
			}else{
				$estatus = "<h6 class='text-danger'>Inactivo</h6>";
			}

			$lista_etapas .= "
					<tr>
	                                        <td>
	                                          <h6>
	                                            <a href='#' onclick='ficha_etapas(\"$id\")'>
	                                              $nombre
	                                            </a>
	                                          </h6>
	                                        </td>
	                                        <td>
	                                          <h6>
	                                              $order
	                                          </h6>
	                                        </td>
	                                        <td>
	                                          $estatus
	                                        </td>
                                      	</tr>
						";
		}

		$jsondata['lista_etapas'] = $lista_etapas;
		$jsondata['message'] 	  = $message;
		$jsondata['error']  	  = $error;
		echo json_encode($jsondata);
	}

	function loadIndexFunction(){
		global $conn;
		$jsondata 		= array();
		$error 	  		= '';
		$message  		= '';
		$company_id 		= $_POST['c'];
		$lista_empresas 	= '';
		$img_slider_principal	= '';
		$titulo_com_interna	= '';
		$com_interna 		= '';
		$img_com_interna	= '';
		$img_news		= '';
		$div_plazas_iniciales	= '';
		$lista_palabra_clave 	= '';
		$lista_localidad 	= '';
		$lista_modal_plazas 	= '';
	
		$query_get_design = "SELECT object
					,path_text
					,company_name
				  FROM design
				  INNER JOIN company
				  ON company.company_id = design.company_id
				  WHERE design.company_id = $company_id
				 ";
		
//error_log($query_get_design);
		$execute_get_design = $conn->query($query_get_design);

		while($row_data = $execute_get_design->fetch_array()){

			$object 	= $row_data['object'];
			$path_text 	= $row_data['path_text'];
			//error_log($object);
			switch ($object) {
				case 'SLIDER_PRINCIPAL':
					$img_slider_principal = $path_text;
					break;
				case 'COM_INTERNA_TITULO':
					$titulo_com_interna = $path_text;
					break;
				case 'COM_INTERNA':
					$com_interna = $path_text;
					break;
				case 'IMG_COM_INTERNA':
					//$img_com_interna = $path_text;
					$img_com_interna = "
						<div class=\"col-sm \"> 
				                        <img src=\"htmls/images/com_interna_img/$path_text\" class=\"img-fluid\" id=\"img_com_interna\">  
				                    </div>
							   ";
					break;
				case 'IMG_NEWS':
					$img_news = $path_text;
					break;

			}
		}

		//******* INICIA CODIGO PARA DIV DE PLAZAS INICIALES ********

		$query_get_plazas_cantidad = "
			SELECT count(*) cantidad
			FROM plazas
			INNER JOIN company
			ON company.company_id = plazas.plaza_empresa
			INNER JOIN etiquetas
			ON etiquetas.etiqueta_id = plazas.plaza_etiqueta
			WHERE plaza_empresa = $company_id
			AND etiqueta_status = 1
			AND plaza_status = 1
			";
		$execute_get_plazas_cantidad = $conn->query($query_get_plazas_cantidad);
		$resultado_get_plazas_cantidad = $execute_get_plazas_cantidad->fetch_array();
		$data_plazas_cantidad = $resultado_get_plazas_cantidad['cantidad'];
//error_log($query_get_plazas_cantidad);

		$query_get_plazas = "
			SELECT plaza_icono
				,plaza_empresa
				,plaza_categoria
				,plaza_etiqueta
				,plaza_name
				,plaza_departamento
				,plaza_name
				,plaza_descripcion
				,company_name
				,etiqueta_name
				,plaza_salario
				,plaza_id
			FROM plazas
			INNER JOIN company
			ON company.company_id = plazas.plaza_empresa
			INNER JOIN etiquetas
			ON etiquetas.etiqueta_id = plazas.plaza_etiqueta
			WHERE plaza_empresa = $company_id
			AND etiqueta_status = 1
			AND plaza_status = 1
			ORDER BY plaza_orden
			";
		
//error_log($query_get_plazas);
		$execute_get_plazas = $conn->query($query_get_plazas);

		$count_control = 1;
		$count_img = 1;
		while($row_data = $execute_get_plazas->fetch_array()){


			$icono 	 	= $row_data['plaza_icono'];
			$empresa 	= $row_data['company_name'];
			$categoria 	= $row_data['plaza_categoria'];
			$etiqueta 	= $row_data['etiqueta_name'];
			$plaza 		= $row_data['plaza_name'];
			$departamento   = $row_data['plaza_departamento'];
			$descripcion 	= nl2br($row_data['plaza_descripcion']);
			$salario 	= $row_data['plaza_salario'];
			$id_plaza 	= $row_data['plaza_id'];

			$lista_modal_plazas .= "<option value=\"$plaza\">$plaza</option>";

			if ($count_control == 1) {
				$div_plazas_iniciales .= "<div class=\"row mt-3\" >";
			}

			$div_plazas_iniciales .= "
				<div class=\"col-sm-4 row-eq-height\">
		                        <div class=\"card redondo w-100\">
		                            <div class=\"card-body\">
		                                <div class=\"row \">
		                                    <div class=\"col-sm-3\">
		                                        <img src=\"htmls/images/plazas_icons/$icono\" class=\"img-card\">
		                                    </div>
		                                    <div class=\"col-sm\">
		                                        <h5 class=\"card-title\">$empresa</h5>
		                                        <h6 class=\"card-subtitle mb-2 text-muted\">$departamento</h6>
		                                    </div>
		                                    <div class=\"col-sm\">
		                                        <span class=\"badge rounded-pill bg-operativos\">$etiqueta</span>
		                                    </div>
		                                </div>
		                                <div class=\"row mt-3\">
		                                    <div class=\"col\">
		                                        <strong><h5 class=\"card-title\">$plaza</h5></strong>
		                                    </div>
		                                </div>
		                                <div class=\"row mt-3\">
		                                    <div class=\"col\">
		                                        <h6 class=\"card-subtitle mb-2 text-muted\">$categoria</h6>
		                                    </div>
		                                </div>
		                                <div class=\"row mt-3\">
		                                    <div class=\"col\">
		                                        <p class=\"card-text\">$descripcion</p>
		                                    </div>
		                                </div>
		                                <div class=\"row mt-3 \">
		                                    <div class=\"col-sm\">
		                                        <h5>Q$salario</h5>
		                                    </div>
		                                    <div class=\"col-sm d-flex justify-content-end\">
		                                        <a href=\"#\" class=\"btn btn-card\" onclick=\"aplicar($id_plaza)\">Aplica</a>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
					         ";

			if ($count_control >=3) {
				$div_plazas_iniciales .= "</div>";
				$count_control = 1;
			}else{
				$count_control++;
			}

			if ($count_img >=$data_plazas_cantidad) {
				$div_plazas_iniciales .= "$img_com_interna";
				$count_img++;
			}else{
				$count_img++;
			}
			
		}

				    
		//******* FIN CODIGO PARA DIV DE PLAZAS INICIALES ********

		//******* INICIO CODIGO PARA SELECT PALABRA CLAVE ********
		$query_select_palabra_clave = "
			SELECT etiqueta_id
				,etiqueta_name
			FROM etiquetas
			WHERE etiqueta_status = 1
			AND etiqueta_company = $company_id
				     	      ";

//error_log($query_select_palabra_clave);
		$execute_select_palabra_clave = $conn->query($query_select_palabra_clave);
		while($row = $execute_select_palabra_clave->fetch_array()){
			$id 	= $row['etiqueta_id'];
			$name 	= $row['etiqueta_name'];

			$lista_palabra_clave .= "<option value=\"$id\">$name</option>";
		}
		//******* FIN CODIGO PARA SELECT PALABRA CLAVE ********

		//******* INICIO CODIGO PARA SELECT LOCALIDAD ********
		$query_select_localidad = "
			SELECT DISTINCT plaza_departamento
			FROM plazas
			WHERE plaza_status = 1
			AND plaza_empresa = $company_id
				     	      ";

//error_log($query_select_localidad);

		$execute_select_localidad = $conn->query($query_select_localidad);
		while($row = $execute_select_localidad->fetch_array()){
			
			$name 	= $row['plaza_departamento'];

			$lista_localidad .= "<option value=\"$name\">$name</option>";
		}
		
		//******* FIN CODIGO PARA SELECT LOCALIDAD ********

		$jsondata['lista_modal_plazas']		= $lista_modal_plazas;
		$jsondata['lista_localidad']		= $lista_localidad;
		$jsondata['lista_palabra_clave']	= $lista_palabra_clave;
		$jsondata['div_plazas_iniciales']	= $div_plazas_iniciales;
		$jsondata['img_news']		 	= $img_news;
		$jsondata['img_com_interna']	 	= $img_com_interna;
		$jsondata['img_slider_principal'] 	= $img_slider_principal;
		$jsondata['titulo_com_interna'] 	= $titulo_com_interna;
		$jsondata['com_interna'] 		= $com_interna;
		$jsondata['message'] 			= $message;
		$jsondata['error']   			= $error;
		echo json_encode($jsondata);
	}

	function saveDisenoFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$titulo   	= $_POST['titulo'];
		$com_interna   	= $_POST['com_interna'];
		$company_id	= $_SESSION['company_id'];
	
		$query_insert_design = "
			INSERT INTO design(object,path_text,company_id)
			VALUES
			('COM_INTERNA_TITULO','$titulo',$company_id)
			ON DUPLICATE KEY UPDATE path_text = '$titulo'
				   ";
		$execute_insert_design = $conn->query($query_insert_design);
//error_log($query_insert_design);
		if($execute_insert_design == 1){
			$query_insert_design = "
				INSERT INTO design(object,path_text,company_id)
				VALUES
				('COM_INTERNA','$com_interna',$company_id)
				ON DUPLICATE KEY UPDATE path_text = '$com_interna'
				   ";
			$execute_insert_design = $conn->query($query_insert_design);
		}else{
			$error = "No se pudo guardar el título!!!";
		}

		
		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadDesignFunction(){
		global $conn;
		$jsondata 		= array();
		$error 	  		= '';
		$message  		= '';
		$rol_id	  		= $_SESSION['rol_id'];
		$company_id 		= $_SESSION['company_id'];
		$lista_empresas 	= '';
		$img_slider_principal	= '';
		$titulo_com_interna	= '';
		$com_interna 		= '';
		$vista_empresa 		= false;
	
		$query_get_design = "SELECT object
					,path_text
					,company_name
				  FROM design
				  INNER JOIN company
				  ON company.company_id = design.company_id
				  WHERE design.company_id = $company_id
				 ";
		
		//error_log($query_get_design);
		$execute_get_design = $conn->query($query_get_design);

		while($row_data = $execute_get_design->fetch_array()){

			$object 	= $row_data['object'];
			$path_text 	= $row_data['path_text'];
			//error_log($object);
			switch ($object) {
				case 'SLIDER_PRINCIPAL':
					$img_slider_principal = $path_text;
					break;
				case 'COM_INTERNA_TITULO':
					$titulo_com_interna = $path_text;
					break;
				case 'COM_INTERNA':
					$com_interna = $path_text;
					break;

			}
		}

		if($rol_id == 1){
			$vista_empresa = true;
		}else{
			$vista_empresa = false;
		}

		//error_log(utf8_encode($com_interna));

		//error_log(utf8_encode($com_interna));
		$jsondata['vista_empresa'] 		= $vista_empresa;
		$jsondata['img_slider_principal'] 	= $img_slider_principal;
		$jsondata['titulo_com_interna'] 	= $titulo_com_interna;
		$jsondata['com_interna'] 		= $com_interna;
		//$jsondata['com_interna'] 		= 'test';
		//$jsondata['lista_empresas'] 		= $lista_empresas;
		$jsondata['message'] 			= $message;
		$jsondata['error']   			= $error;
		echo json_encode($jsondata);
	}



	function savePermisosFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$id_rol   	= $_POST['id_rol'];
		$catalogo 	= $_POST['catalogo'];
		$procesos 	= $_POST['procesos'];
		$candidatos 	= $_POST['candidatos'];
		$hojas_vida 	= $_POST['hojas_vida'];
		$suscripciones 	= $_POST['suscripciones'];
		$etiquetas 	= $_POST['etiquetas'];
		$etapas 	= $_POST['etapas'];
		$tareas_etapas 	= $_POST['tareas_etapas'];
		$empresas 	= $_POST['empresas'];
		$rol 	 	= $_POST['roles'];
		$usuarios 	= $_POST['usuarios'];
		$privilegios 	= $_POST['privilegios'];
		$formulario 	= $_POST['formulario'];
		$diseno   	= $_POST['diseno'];
		$filtros   	= $_POST['filtros'];

		//error_log("Catalogo: $catalogo, Procesos: $procesos");
		
		$query_delete_all_access = "
			DELETE FROM access
			WHERE id_rol = $id_rol
					   ";
		$execute_delete_all_access = $conn->query($query_delete_all_access);

		//error_log($query_delete_all_access);
		if($filtros=='true'){
			$query_insert_access = "
			INSERT INTO access (id_rol,id_menu)
			VALUES ($id_rol,17)
					   ";
			$execute_insert_access = $conn->query($query_insert_access);
		}

		if($suscripciones=='true'){
			$query_insert_access = "
			INSERT INTO access (id_rol,id_menu)
			VALUES ($id_rol,16)
					   ";
			$execute_insert_access = $conn->query($query_insert_access);
		}

		if($hojas_vida=='true'){
			$query_insert_access = "
			INSERT INTO access (id_rol,id_menu)
			VALUES ($id_rol,15)
					   ";
			$execute_insert_access = $conn->query($query_insert_access);
		}

		if($diseno=='true'){
			$query_insert_access = "
			INSERT INTO access (id_rol,id_menu)
			VALUES ($id_rol,14)
					   ";
			$execute_insert_access = $conn->query($query_insert_access);
		}

		if($formulario=='true'){
			$query_insert_access = "
			INSERT INTO access (id_rol,id_menu)
			VALUES ($id_rol,13)
					   ";
			$execute_insert_access = $conn->query($query_insert_access);
		}

		if($privilegios=='true'){
			$query_insert_access = "
			INSERT INTO access (id_rol,id_menu)
			VALUES ($id_rol,12)
					   ";
			$execute_insert_access = $conn->query($query_insert_access);
		}

		if($usuarios=='true'){
			$query_insert_access = "
			INSERT INTO access (id_rol,id_menu)
			VALUES ($id_rol,11)
					   ";
			$execute_insert_access = $conn->query($query_insert_access);
		}

		if($rol=='true'){
			$query_insert_access = "
			INSERT INTO access (id_rol,id_menu)
			VALUES ($id_rol,10)
					   ";
			$execute_insert_access = $conn->query($query_insert_access);
		}

		if($catalogo=='true'){
			$query_insert_access = "
			INSERT INTO access (id_rol,id_menu)
			VALUES ($id_rol,5)
					   ";
			$execute_insert_access = $conn->query($query_insert_access);
		}

		if($procesos=='true'){
			$query_insert_access = "
			INSERT INTO access (id_rol,id_menu)
			VALUES ($id_rol,4)
					   ";
			$execute_insert_access = $conn->query($query_insert_access);
		}

		if($candidatos=='true'){
			$query_insert_access = "
			INSERT INTO access (id_rol,id_menu)
			VALUES ($id_rol,3)
					   ";
			$execute_insert_access = $conn->query($query_insert_access);
		}

		if($etiquetas=='true'){
			$query_insert_access = "
			INSERT INTO access (id_rol,id_menu)
			VALUES ($id_rol,6)
					   ";
			$execute_insert_access = $conn->query($query_insert_access);
		}

		if($etapas=='true'){
			$query_insert_access = "
			INSERT INTO access (id_rol,id_menu)
			VALUES ($id_rol,7)
					   ";
			$execute_insert_access = $conn->query($query_insert_access);
		}

		if($tareas_etapas=='true'){
			$query_insert_access = "
			INSERT INTO access (id_rol,id_menu)
			VALUES ($id_rol,8)
					   ";
			$execute_insert_access = $conn->query($query_insert_access);
		}

		if($empresas=='true'){
			$query_insert_access = "
			INSERT INTO access (id_rol,id_menu)
			VALUES ($id_rol,9)
					   ";
			$execute_insert_access = $conn->query($query_insert_access);
		}

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadPermisosInfoFunction(){
		global $conn;
		$jsondata     	   = array();
		$error 	      	   = '';
		$message      	   = '';
		$lista_roles  	   = '';
		$rol_id	      	   = $_POST['id_rol'];
		$catalogo_box 	   = false;
		$etiquetas_box 	   = false;
		$reportes_box	   = false;
		$candidatos_box    = false;
		$procesos_box      = false;
		$etapas_box 	   = false;
		$mantenimiento_box = false;
		$tareas_etapas_box = false;
		$empresas_box	   = false;
		$roles_box 	   = false;
		$usuarios_box	   = false;
		$privilegios_box   = false;
		$formulario_box    = false;
		$diseno_box 	   = false;
		$hoja_vida_box 	   = false;
		$suscripciones_box = false;
		$filtros_box = false;

		
		$query_lista_permisos = "
				SELECT id_rol,id_menu
				FROM access
				WHERE id_rol = $rol_id
				";
	

		$execute_lista_permisos = $conn->query($query_lista_permisos);
		
		while ($row_data = $execute_lista_permisos->fetch_array()) {
			
			switch ($row_data['id_menu']) {
				case 1:
					$mantenimiento_box = true;
					break;
				case 2:
					$reportes_box = true;
					break;
				case 3:
					$candidatos_box = true;
					break;
				case 4:
					$procesos_box = true;
					break;
				case 5:
					$catalogo_box = true;
					break;
				case 6:
					$etiquetas_box = true;
					break;
				case 7:
					$etapas_box = true;
					break;
				case 8:
					$tareas_etapas_box = true;
					break;
				case 9:
					$empresas_box = true;
					break;
				case 10:
					$roles_box = true;
					break;
				case 11:
					$usuarios_box = true;
					break;
				case 12:
					$privilegios_box = true;
					break;
				case 13:
					$formulario_box = true;
					break;
				case 14:
					$diseno_box = true;
					break;
				case 15:
					$hoja_vida_box = true;
					break;
				case 16:
					$suscripciones_box = true;
					break;
				case 17:
					$filtros_box = true;
					break;
			}
			
		}

		$jsondata['filtros_box']	= $filtros_box;
		$jsondata['suscripciones_box']	= $suscripciones_box;
		$jsondata['hoja_vida_box']	= $hoja_vida_box;
		$jsondata['diseno_box']		= $diseno_box;
		$jsondata['formulario_box']	= $formulario_box;
		$jsondata['privilegios_box'] 	= $privilegios_box;
		$jsondata['usuarios_box'] 	= $usuarios_box;
		$jsondata['roles_box'] 		= $roles_box;
		$jsondata['empresas_box'] 	= $empresas_box;
		$jsondata['tareas_etapas_box'] 	= $tareas_etapas_box;
		$jsondata['etapas_box'] 	= $etapas_box;
		$jsondata['etiquetas_box'] 	= $etiquetas_box;
		$jsondata['procesos_box'] 	= $procesos_box;
		$jsondata['candidatos_box'] 	= $candidatos_box;
		$jsondata['reportes_box'] 	= $reportes_box;
		$jsondata['mantenimiento_box'] 	= $mantenimiento_box;
		$jsondata['catalogo_box'] 	= $catalogo_box;
		$jsondata['message'] 		= $message;
		$jsondata['error']   		= $error;
		echo json_encode($jsondata);
	}

	function loadPermisosFunction(){
		global $conn;
		$jsondata    = array();
		$error 	     = '';
		$message     = '';
		$lista_roles = '';
		$company_id  = $_SESSION['company_id'];
		$rol_id	     = $_SESSION['rol_id'];

		if($rol_id==1){
			$query_lista_rol = "
					SELECT rol_id,rol_name
					FROM rol
					WHERE rol_status = 1
					   ";
		}else{
			$query_lista_rol = "
					SELECT rol_id,rol_name
					FROM rol
					WHERE rol_status = 1
					AND rol_company = $company_id
					   ";
		}

		$execute_lista_rol = $conn->query($query_lista_rol);
		$lista_roles .= "<option value='0'>---</option>";
		while ($row_data = $execute_lista_rol->fetch_array()) {
			$id   = $row_data['rol_id'];
			$name = $row_data['rol_name'];

			$lista_roles .= "<option value='$id'>$name</option>";
		}
		

		$jsondata['lista_roles'] = $lista_roles;
		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function saveRolFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$nombre 	= $_POST['nombre'];
		$lista_estatus 	= $_POST['lista_estatus'];
		$company_id     = $_SESSION['company_id'];
		//error_log('estamos llegando');
		if($nombre != ''){

			if(isset($_SESSION['ficha_rol_id_search'])){
				$rol_id = $_SESSION['ficha_rol_id_search'];
				//error_log("rol_id: $rol_id");
				unset($_SESSION['ficha_rol_id_search']);
				$query_save_rol = "
					UPDATE rol
					SET rol_name = '$nombre',rol_status = $lista_estatus
					WHERE rol_id = $rol_id
				   ";
				
				}else{
					$query_save_rol = "
						INSERT INTO rol(rol_company,rol_name,rol_status)
						VALUES
						($company_id,'$nombre',$lista_estatus)
						
				   ";
				}
			

			//error_log($query_save_rol);
			$execute_save_rol = $conn->query($query_save_rol);
			if($execute_save_rol != 1){
				$error = "No se pudo editar el rol!";
			}
		}else{
			$error = "No se pudo guardar el rol! Nombre esta vacío";
		}
		

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadFichaRolesFunction(){
		global $conn;
		$jsondata 	      = array();
		$error 	  	      = '';
		$message  	      = '';
		$lista_estatus        = '';
		$user_company         = $_SESSION['company_id'];
		$rol_search_principal = $_SESSION['rol_id'];
		$nombres              = '';


		if(isset($_SESSION['ficha_rol_id'])){
			$rol_search = $_SESSION['ficha_rol_id'];
			$query_get_rol_info = "
						SELECT rol_name
						,rol_status
						FROM rol
						WHERE rol_id = $rol_search
						
						";
			$execute_get_rol_info = $conn->query($query_get_rol_info);
			$data_get_rol_info = $execute_get_rol_info->fetch_array();

			$nombres   = $data_get_rol_info['rol_name'];
			$estatus   = $data_get_rol_info['rol_status'];
			$_SESSION['ficha_rol_id_search'] = $rol_search;
			unset($_SESSION['ficha_rol_id']);
		}else{
					
			unset($_SESSION['ficha_rol_id']);
		}

		if(isset($data_get_rol_info['rol_status'])){
			$query_lista_estatus = "SELECT CASE
							WHEN rol_status = 1 THEN \"Activo\"
							ELSE \"Inactivo\"
						END estatus_name,rol_status estatus_id
						FROM rol
						WHERE rol_id = '$rol_search'
						UNION
						SELECT estatus_name,estatus_id
						FROM (
							SELECT 'Activo' estatus_name,1 estatus_id
							UNION
							SELECT 'Inactivo' estatus_name,0 estatus_id
						)t_estatus
						WHERE t_estatus.estatus_id NOT IN (
									SELECT rol_status
									FROM rol
									WHERE rol_id = '$rol_search'
										)";
		}else{
			$query_lista_estatus = "SELECT 'Activo' estatus_name,1 estatus_id
						UNION
						SELECT 'Inactivo' estatus_name,0 estatus_id
						
						";
		}
		//error_log($query_lista_estatus);
		$execute_lista_estatus = $conn->query($query_lista_estatus);
		while($row_lista_estatus = $execute_lista_estatus->fetch_array()){
			$id   = $row_lista_estatus['estatus_id'];
			$name = $row_lista_estatus['estatus_name'];
			$lista_estatus .= "<option value='$id'>$name</option>";
		}
		
		
		
		$jsondata['lista_estatus']    	= $lista_estatus;
		$jsondata['nombres']        	= $nombres;
		$jsondata['message']        	= $message;
		$jsondata['error']          	= $error;
		echo json_encode($jsondata);
	}

	function getRolInfoFunction(){
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';
		$rol_id   = $_POST['rol_id'];

		$_SESSION['ficha_rol_id'] = $rol_id;

		if(!isset($_SESSION['ficha_rol_id'])){
			$error = "Error no se puede verificar rol seleccionado!";
		}

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadRolesFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$rol_id	  	= $_SESSION['rol_id'];
		$company_id 	= $_SESSION['company_id'];
		$lista_roles    = "";

		if($rol_id == 1){
			$query_get_rol = "SELECT rol_name
							,rol_id
							,CASE
							WHEN rol_status = 1 THEN \"Activo\"
							ELSE \"Inactivo\"
						END estatus_name
						FROM rol
						";
			
		}else{
			$query_get_rol = "SELECT rol_name
							,rol_id
							,CASE
							WHEN rol_status = 1 THEN \"Activo\"
							ELSE \"Inactivo\"
						END estatus_name
						FROM rol
						WHERE rol_company = $company_id";
		}
		
		$execute_get_rol = $conn->query($query_get_rol);

		while($row_data = $execute_get_rol->fetch_array()){

			$nombre 	= $row_data['rol_name'];
			$rol_search 	= $row_data['rol_id'];
			$rol_estatus    = $row_data['estatus_name'];

			if($rol_estatus == 'Activo'){
				$rol_estatus = "<h6 class='text-success'>Activo</h6>";
			}else{
				$rol_estatus = "<h6 class='text-danger'>Inactivo</h6>";
			}

			$lista_roles .= "
					<tr>
	                                        <td>
	                                          <h6>
	                                            <a href='#' onclick='ficha_roles(\"$rol_search\")'>
	                                              $nombre
	                                            </a>
	                                          </h6>
	                                        </td>
	                                        <td>
	                                          $rol_estatus
	                                        </td>
                                      	</tr>
						";
		}

		$jsondata['lista_roles'] = $lista_roles;
		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function saveUserFunction(){
		global $conn;
		$jsondata 				= array();
		$error 	  				= '';
		$message  				= '';
		$nombre 					= $_POST['nombre'];
		$apellidos 				= $_POST['apellidos'];
		$correo 					= $_POST['correo'];
		$identification 	= $_POST['identification'];
		$lista_roles 			= $_POST['lista_roles'];
		$lista_empresas 	= $_POST['lista_empresas'];
		$lista_sexo			 	= $_POST['lista_sexo'];
		$lista_estatus 		= $_POST['lista_estatus'];
		$pass 						= $_POST['pass'];
		$nivel_academico 	= $_POST['nivel_academico'];
		$phone 					 	= $_POST['phone'];
		$dependencia		 	= $_POST['dependencia'];

		if($correo != ''){


			if($pass == ''){
				$query_save_user = "
					INSERT INTO users(user_email,user_name,user_last_name,user_company,user_rol,user_password,user_status,user_id_document,user_sex,user_academic_level,user_phone,user_dependencia)
					VALUES
					('$correo','$nombre','$apellidos',$lista_empresas,$lista_roles,MD5('$pass'),$lista_estatus,'$identification','$lista_sexo','$nivel_academico','$phone','$dependencia')
					ON DUPLICATE KEY UPDATE user_name = '$nombre'
					, user_last_name 			= '$apellidos'
					, user_company   			= $lista_empresas
					, user_rol       			= $lista_roles
					, user_status    			= $lista_estatus
					, user_id_document		= '$identification'
					, user_sex						= '$lista_sexo'
					, user_academic_level	= '$nivel_academico'
					, user_phone 					= '$phone'
					, user_dependencia		= '$dependencia'
					   ";
			}else{
				$query_save_user = "
					INSERT INTO users(user_email,user_name,user_last_name,user_company,user_rol,user_password,user_status,user_id_document,user_sex,user_academic_level,user_phone,user_dependencia)
					VALUES
					('$correo','$nombre','$apellidos',$lista_empresas,$lista_roles,MD5('$pass'),$lista_estatus,'$identification','$lista_sexo','$nivel_academico','$phone','$dependencia')
					ON DUPLICATE KEY UPDATE user_name = '$nombre'
					, user_last_name 			= '$apellidos'
					, user_company   			= $lista_empresas
					, user_rol       			= $lista_roles
					, user_status    			= $lista_estatus
					, user_id_document		= '$identification'
					, user_sex						= '$lista_sexo'
					, user_academic_level	= '$nivel_academico'
					, user_phone 					= '$phone'
					, user_dependencia		= '$dependencia'
					, user_password  			= MD5('$pass')
					   ";
			}

			//error_log($query_save_user);
			$execute_save_user = $conn->query($query_save_user);
			if($execute_save_user != 1){
				$error = "No se pudo editar el usuario!";
			}
		}else{
			$error = "No se pudo guardar el usuario! correo esta vacío";
		}
		

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadFichaUsuariosFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$lista_roles 	= '';
		$lista_empresas = '';
		$lista_estatus  = '';
		$email          = '';
		$region 	= '';
		$apellidos	= '';
		$nombres 	= '';
		$user_company   = $_SESSION['company_id'];

		if(isset($_SESSION['ficha_usuario_email'])){
			$email_search = $_SESSION['ficha_usuario_email'];
			$query_get_user_info = "
						SELECT user_name
							, user_last_name
							, user_company
							, user_rol
							, user_status
							, user_region
						FROM users
						WHERE user_email = '$email_search'
						";
			$execute_get_user_info = $conn->query($query_get_user_info);
			$data_get_user_info = $execute_get_user_info->fetch_array();

			$nombres   = $data_get_user_info['user_name'];
			$apellidos = $data_get_user_info['user_last_name'];
			$region    = $data_get_user_info['user_region'];
			$rol 	   = $data_get_user_info['user_rol'];
			$empresa   = $data_get_user_info['user_company'];
			$estatus   = $data_get_user_info['user_status'];
			$email 	   = $_SESSION['ficha_usuario_email'];

			unset($_SESSION['ficha_usuario_email']);
		}else{
					
			unset($_SESSION['ficha_usuario_email']);
		}

		if(isset($data_get_user_info['user_rol'])){
			if($_SESSION['rol_id']==1){
				$query_lista_rol = "SELECT rol_name,rol_id
						FROM rol
						WHERE rol_id = $rol
						UNION
						SELECT rol_name,rol_id
						FROM rol
						WHERE rol_id NOT IN ($rol)
						AND rol_status = 1
						";
			}else{
				$query_lista_rol = "SELECT rol_name,rol_id
						FROM rol
						WHERE rol_id = $rol
						UNION
						SELECT rol_name,rol_id
						FROM rol
						WHERE rol_id NOT IN ($rol)
						AND rol_status = 1
						AND rol_company = $user_company;
						";
			}
			
		}else{
			if($_SESSION['rol_id']==1){
				$query_lista_rol = "
						SELECT rol_name,rol_id
						FROM rol
						WHERE rol_status = 1
						";
			}else{
				$query_lista_rol = "
						SELECT rol_name,rol_id
						FROM rol
						WHERE rol_status = 1
						AND rol_company = $user_company;
						";
			}
		}
		//error_log($query_lista_rol);
		$execute_lista_rol = $conn->query($query_lista_rol);
		while($row_lista_rol = $execute_lista_rol->fetch_array()){
			$id   = $row_lista_rol['rol_id'];
			$name = $row_lista_rol['rol_name'];
			$lista_roles .= "<option value='$id'>$name</option>";
		}

		if(isset($data_get_user_info['user_company'])){
			$query_lista_empresa = "SELECT company_name,company_id
						FROM company
						WHERE company_id = $empresa
						UNION
						SELECT company_name,company_id
						FROM company
						WHERE company_id NOT IN ($empresa)";
		}else{
			$query_lista_empresa = "
						SELECT company_name,company_id
						FROM company
						";
		}

		$execute_lista_company = $conn->query($query_lista_empresa);
		while($row_lista_company = $execute_lista_company->fetch_array()){
			$id   = $row_lista_company['company_id'];
			$name = $row_lista_company['company_name'];
			$lista_empresas .= "<option value='$id'>$name</option>";
		}

		if(isset($data_get_user_info['user_status'])){
			$query_lista_estatus = "SELECT CASE
							WHEN user_status = 1 THEN \"Activo\"
							ELSE \"Inactivo\"
						END estatus_name,user_status estatus_id
						FROM users
						WHERE user_email = '$email'
						UNION
						SELECT estatus_name,estatus_id
						FROM (
							SELECT 'Activo' estatus_name,1 estatus_id
							UNION
							SELECT 'Inactivo' estatus_name,0 estatus_id
						)t_estatus
						WHERE t_estatus.estatus_id NOT IN (
									SELECT user_status
									FROM users
									WHERE user_email = '$email'
										)";
		}else{
			$query_lista_estatus = "SELECT 'Activo' estatus_name,1 estatus_id
						UNION
						SELECT 'Inactivo' estatus_name,0 estatus_id
						
						";
		}

		$execute_lista_estatus = $conn->query($query_lista_estatus);
		while($row_lista_estatus = $execute_lista_estatus->fetch_array()){
			$id   = $row_lista_estatus['estatus_id'];
			$name = $row_lista_estatus['estatus_name'];
			$lista_estatus .= "<option value='$id'>$name</option>";
		}

		$rol_search = $_SESSION['rol_id'];
		
		if($rol_search == 1){
			$vista_empresa = true;
		}else{
			$vista_empresa = false;
		}

		$jsondata['vista_empresa']    	= $vista_empresa;
		$jsondata['lista_estatus']    	= $lista_estatus;
		$jsondata['lista_empresas']    	= $lista_empresas;
		$jsondata['lista_roles']    	= $lista_roles;
		$jsondata['correo']    	    	= $email;
		$jsondata['region']    	    	= $region;
		$jsondata['apellidos']      	= $apellidos;
		$jsondata['nombres']        	= $nombres;
		$jsondata['message']        	= $message;
		$jsondata['error']          	= $error;
		echo json_encode($jsondata);
	}

	function getUserInfoFunction(){
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';
		$email    = $_POST['email'];

		$_SESSION['ficha_usuario_email'] = $email;

		if(!isset($_SESSION['ficha_usuario_email'])){
			$error = "Error no se puede verificar usuario seleccionado!";
		}

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadUsersFunction(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$rol_id	  	= $_SESSION['rol_id'];
		$company_id 	= $_SESSION['company_id'];
		$lista_usuarios = "";

		if($rol_id == 1){
			$query_get_users = "SELECT CONCAT(user_name,' ',user_last_name) name
						,user_email
						,user_id_document
						,rol_name
						,user_academic_level
						,CASE
							WHEN user_status = 1 THEN \"Activo\"
							ELSE \"Inactivo\"
						END status
						FROM users
						INNER JOIN rol
						ON rol.rol_id = users.user_rol";
			
		}else{
			$query_get_users = "SELECT CONCAT(user_name,' ',user_last_name) name
						,user_email
						,user_id_document
						,rol_name
						,user_academic_level
						,CASE
							WHEN user_status = 1 THEN \"Activo\"
							ELSE \"Inactivo\"
						END status
						FROM users
						INNER JOIN rol
						ON rol.rol_id = users.user_rol
						WHERE user_company = $company_id";
		}
		
		$execute_get_users = $conn->query($query_get_users);

		while($row_data = $execute_get_users->fetch_array()){

			$nombre 				= $row_data['name'];
			$email_usuario 	= $row_data['user_email'];
			$identification = $row_data['user_id_document'];
			$rol_usuario 		= $row_data['rol_name'];
			$academic_level = $row_data['user_academic_level'];
			$estatus 				= $row_data['status'];

			if($estatus == 'Activo'){
				$estatus = "<h6 class='text-success'>Activo</h6>";
			}else{
				$estatus = "<h6 class='text-danger'>Inactivo</h6>";
			}

			$lista_usuarios .= "
					<tr>
	                                        <td>
	                                          <h6>
	                                            <!--<a href='#' onclick='ficha_usuarios(\"$email_usuario\")'>-->
	                                            <a href='#'>
	                                              $nombre
	                                            </a>
	                                          </h6>
	                                        </td>
	                                        <td>
	                                          <h6>
	                                              $email_usuario
	                                          </h6>
	                                        </td>
	                                        <td>
	                                          <h6>
	                                              $identification
	                                          </h6>
	                                        </td>
	                                        <td>
	                                          <h6>
	                                              $rol_usuario
	                                          </h6>
	                                        </td>
	                                        <td>
	                                          <h6>
	                                              $academic_level
	                                          </h6>
	                                        </td>
	                                        <td>
	                                          $estatus
	                                        </td>
                                      	</tr>
						";
		}

		$jsondata['lista_usuarios'] = $lista_usuarios;
		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function loadHeaderBarFunction(){
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';
		if (isset($_SESSION['username'])) {
			$u = $_SESSION['username'];
			$e = $_SESSION['user_email'];
		}else{
			$u = '';
			$e = '';
		}
		

		$jsondata['name'] 	= $u;
		$jsondata['email_id'] 	= $e;
		$jsondata['message'] 	= $message;
		$jsondata['error']   	= $error;
		echo json_encode($jsondata);
	}

	function securityFunction(){
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';
		$access   = $_POST['access'];
		$action   = $_POST['action'];

		
		if(isset($_SESSION['username'])){
			$u = $_SESSION['username'];
			insert_log(" Security Check-$action-$u");
			$rol_id = $_SESSION['rol_id'];
			if($access > 0){
				$query_secure_page = "SELECT count(*) n
							FROM access 
							WHERE id_rol = $rol_id
							AND id_menu = $access";
//error_log($query_secure_page);
				$execute_query_secure_page = $conn->query($query_secure_page);
				$result_query_secure_page =$execute_query_secure_page->fetch_array();
				if($result_query_secure_page['n']>0){

				}else{
					$error = 'Usuario sin acceso';
					insert_log(" Security NOT Check-$action-$u");
				}
			}
		}else{
			$error = 'Usuario sin acceso';
			insert_log(" Security NOT Check-unknown user try to enter!");
		}

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}

	function insert_log($des){
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';

		$query = "INSERT INTO log (date_time,description) VALUES (NOW(),'$des');";
		//error_log($query);
		$execute = $conn->query($query);
	}


	function logOutFunction(){
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';

		$u = $_SESSION['username'];
		insert_log("LOG OUT - $u");
		session_destroy();

		$jsondata['error'] = $error;
		echo json_encode($jsondata);
	}

	function logInFunction(){
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';
		$u 		  = $_POST['u'];
		$p 		  = $_POST['p'];

		$query = "
				SELECT count(*) c
				FROM users
				WHERE user_email = '$u'
				AND user_password = MD5('$p')
				AND user_status = 1	
			";

			//error_log($query);

		$execute 	= $conn->query($query);
		$query_data 	= $execute->fetch_array();
		$count  	= $query_data['c'];
		//error_log("Count:$count");
		if($count > 0){
		
			$query = "
					SELECT CONCAT(user_name,' ',user_last_name) nombre
						,rol_name
						,rol_id
						,company_name
						,company_id
						,user_email
					FROM users
					INNER JOIN rol
					ON rol.rol_id = users.user_rol
					INNER JOIN company
					ON company.company_id = users.user_company
					WHERE user_email ='$u'
				 ";
//error_log($query);
			$execute 	= $conn->query($query);
			$query_data 	= $execute->fetch_array();
			$user_name 	= $query_data['nombre'];
			$rol_name  	= $query_data['rol_name'];
			$rol_id  	= $query_data['rol_id'];
			$company_name  	= $query_data['company_name'];
			$company_id  	= $query_data['company_id'];
			$user_email  	= $query_data['user_email'];

			$message = "Welcome $user_name";
			$_SESSION['username']   	= $user_name;
			$_SESSION['rol_name'] 		= $rol_name;
			$_SESSION['rol_id']   		= $rol_id;
			$_SESSION['company_name']   	= $company_name;
			$_SESSION['company_id']   	= $company_id;
			$_SESSION['user_email']   	= $user_email;
			
			//error_log("LOG IN - $user_name");
			$des = "LOG IN - $user_name";
			insert_log($des);
		}else{
			$error = "Usuario o contraseña errónea!";
			//error_log("NOT LOG IN - $u");
			$des = "NOT LOG IN - $u";
			insert_log($des);

		}

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
	}


function CrearCategoria(){
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';
		$button   = '';
		$path     = $_POST['pathcat'];

		

		if(isset($_POST['accion'])){
		$action = $_POST['accion'];

		switch ($action) {
			case 'categoria':
				// code...
				$message .= '<div class="form-group">
                                <input type="text" class="form-control" id="nombre_categoria" placeholder="Categoria" />
                                <input type="hidden" class="form-control" value="'.$path.'" id="path" placeholder="direccion" />
                            </div>';


                $button .= "<button type='button' class='btn btn-outline-danger' data-bs-dismiss='modal'>Close</button>
                            <button type='button' class='btn btn-outline-success' onclick=\"CrearCarpeta('categoria',document.getElementById('pathCat').value)\">Crear</button>";
				break;
			case 'subcategoria':
				// code...
				$message .= "
									<div class=\"col-sm-12 form-group\">
                                    	<select class=\"form-control select2  \" id=\"reportes_filtros_select_categoria\">
	                                      <option>Seleccione Categoria...</option>
	                                      <option>Manual</option>
	                                      <option>Institucional</option>
	                                      <option>Facturas</option>
	                                      <option>MARN</option>
                                    	</select>
                                  </div>
							<div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"subcategoria\" />
                            </div>";

                $button .= "<button type='button' class='btn btn-outline-danger' data-bs-dismiss='modal'>Close</button>
                            <button type='button' class='btn btn-outline-success' onclick=\"CrearCarpeta('subcategoria')\">Crear</button>";
				break;
		}

		}

		#codigo................;

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		$jsondata['botones']   = $button;
		echo json_encode($jsondata);
	}

function crearcarpeta(){
	global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';
		$sucess   = '';
		$nosave   = '';
		
		$raiz 	  = '';
		$categoria= "";

		if(isset($_POST['action'])){
			$action = $_POST['action'];

			switch ($action) {
				case 'categoria':
					// code...
					$raiz 	  = $_POST['pathcat'];
					$categoria= $_POST['categoria'];

					$carpeta= $raiz . "/" . $categoria;

					//error_log($carpeta);
					if(!file_exists($carpeta)) {
    					if(mkdir($carpeta, 0777, true)){

    						$query  = "INSERT INTO `categoria`(`name_cat`, `path_cat`) VALUES ('$categoria','$raiz')";
    						$resultado = mysqli_query($conn,$query);

    						error_log($query);

    						if($resultado){
    							$query = "SELECT * FROM categoria where name_cat = '$categoria' AND path_cat='$raiz'";
    							error_log($query);
    							$rquery = mysqli_query($conn,$query);
    							$resultado = mysqli_fetch_array($rquery);

    							$id  =  $resultado['idCat'];
    							$msg = "Se creo la categoria-$categoria-$raiz-$id";

    						insert_log($msg);
    						$sucess .= "La categoria se creo exitosamente";
    						}

    						
    					}else{
    						$nosave .= "La carpeta ya existe";
    					}
					}

					break;

				case 'subcategoria':
					// code...
					break;
				
				default:
					// code...

				$error .= 'No se a declarado si es categoria o subcategoria';
					break;
			}

		}

		

		#codigo................;

		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		$jsondata['sucess']  = $sucess;
		$jsondata['nosave']  = $nosave;
		echo json_encode($jsondata);


}


function viewgatget(){
	//error_log('entramos');
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';
		$archivos_recientes = "";
		$permiso  = "";
		$graficas = "";
		$archi  = 'Nuevo Archivo';
		$cat1 = '';
		$cat2 = '';
		$cat3	= '';
		$ar ="";
		$rol_name = $_SESSION['rol_name'];
		$rol_id   = $_SESSION['rol_id'];
		$name = array();
		$num = array();
		$row = array();



		switch ($rol_name) {
			case 'Administrador':
				// code...
				$n = 4;
				break;
			case 'Ciudadano';
				// code...
				$n = 6;
				break;
			default:
				// code...
				$n = 4;
				break;
		}


		$logquery  	="SELECT * FROM documentation ORDER BY data_creation DESC  Limit 7 ";
		//error_log($logquery);
		$execute_rquery 	= mysqli_query($conn, $logquery);
		


		$archivos_recientes .= "<div class=\"col-sm-$n stretch-card \">
                        <div class=\"card card-rounded\">
                          <div class=\"card-head p-3\" >
                            <div class=\"row justify-content-end\">
                              <div class=\"col-6\">
                            <h4><b>Archivos recientes</b></h4>
                            </div>
                            <div class=\"col-3\">
                            </div>
                                    <div class=\"col-3\">
                                      <span>Ver todo<i class=\"menu-icon mdi mdi-chevron-right\"></i></span>
                                    </div>
                                  </div>
                          </div>
                          <div class=\"card-body\">
                            <div class=\"row\" >
                              <div class=\"col-lg-12\">
                                
                              <ul class=\"list-group list-group-flush nav\">";

// iNICIA PRUEBA fINAL

 		$download = "../../htmls/";
 		//$download = "documents/";

 			$query = "SELECT
 									file_name,
 									file_path
 								FROM
 									downloads
 								ORDER BY
 									file_download_amount
 									DESC LIMIT 5";

 			$execute_query = mysqli_query($conn,$query);

 			while ($rquery = mysqli_fetch_array($execute_query)) {
 				// code...
 				$file   = $rquery['file_name'];
 				$url_archivo = $rquery['file_path'];
 				$file_c = strtolower(substr($file, -3));
 				if ($file_c == "pdf" || $file_c == "xls" ||$file_c == "doc" || $file_c== "ocx" || $file_c == "lsx")
					{
						$link_descarga = $download . $url_archivo;
						switch ($file_c) {
																			case 'pdf':
																				// code...
																				$image_ico = "mdi-file-pdf";
																				break;

																			case 'png':
																				// code...
																			$image_ico = "mdi-file-image";
																				break;

																			case 'ocx':
																				// code...
																			$image_ico = "mdi-file-word";
																				break;

																			case 'jpg':
																				// code...
																			$image_ico = "mdi-file-image";
																				break;

																			case 'xls':
																				// code...
																			$image_ico = "mdi-file-excel";
																				break;
																			
																			default:
																				// code...
																			$image_ico = "mdi-file-image";
																				break;
																		}

						$archivos_recientes .= "<li class=\"item\">
                                  <iconify-icon icon=\"feather:more-vertical\" style=\"padding-bottom: 3%;\" type=\"button\" id=\"archivosRecientes1\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></iconify-icon>
                                  <div class=\"dropdown-menu\" aria-labelledby=\"archivosRecientes1\">
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"descargar_archivo('$url_archivo');return false;\">Descargar</a>
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"compartir('$url_archivo','archivo');return false;\">Compartir Link</a>
                                  </div>
                                  <i class=\"mdi $image_ico menu-icon mdi-48px mdi-set\"></i> <b>$file</b>
                                </li>";

					}


 			}

 								


        

         
                                
        $archivos_recientes .= "</ul>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>";
		#codigo................;
       $query = "SELECT 
       							c.name_cat As nameCat, 
       							count('d.cat1') As conteo 
       						FROM 
       							categoria c 
       						INNER JOIN documentation d 
       						ON c.idCat = d.cat1 
       						group by d.cat1 ";
       	$execute_query = mysqli_query($conn,$query);

       //$cont = 0;
$row = mysqli_fetch_assoc($execute_query);
   $names = $row['nameCat'];
   $nume = $row['conteo'];
   //$cont++;

   

//error_log(print_r($row));
        $graficas .=  "<div class=\"col-sm-$n stretch-card \">
                      <div class=\"card card-rounded\">
                        <div class=\"card-head p-3\" >
                          <div class=\"row justify-content-end\">
                            <div class=\"col-6\">
                              <h4><b>Categorias y archivos</b></h4>
                            </div>
                            <div class=\"col-3\">
                            </div>
                            <div class=\"col-3\">
                            </div>
                          </div>
                        </div>
                        <div class=\"card-body p-6\">
                          <canvas id=\"GraphDash\"  ></canvas>
                        </div>
                      </div>
                    </div>";

          $graficas.= "<script >
    
											$(function() {
												var ctx = $('#GraphDash');
											        

											        var grafica = new Chart(ctx,{
											            type:\"pie\",
											            data:{
											                labels:".$names.",
											                datasets:[{
											                    label:'num datos',
											                    data:".$nume.",
											                }],
											            }
											        });
											        });
											</script>
        												";

         	if ($rol_id == "1") {
       		// code...

         		$graficas .= "<div class=\"col-sm-4 stretch-card\">
                        <div class=\"card card-rounded\">
                          <div class=\"card-head p-3\" >
                            <div class=\"row justify-content-end\">
                              <div class=\"col-6\">
                                <h4><b>Subir archivo</b></h4>
                              </div>
                              <div class=\"col-3\">
                              </div>
                              <div class=\"col-3\">
                              </div>
                            </div>
                          </div>
                          <div class=\"card-body p-6\">
                            <div class=\"drop-area\">
                            	
                            	<span></span>
                            	<button type=\"submit\" id=\"subir_archivos\" onclick=\"subir_archivos();return false;\">Sube tu archivos</button>
                            	
                            </div>
                            <div id=\"preview\"></div>
                          </div>
                        </div>
                      </div>";
       		}


        $segundafila = $archivos_recientes . $graficas;


        $jsondata['datos2'] = $segundafila;
		$jsondata['message'] = $message;
		$jsondata['error']   = $error;
		echo json_encode($jsondata);
}


function viewcategoria(){
		global $conn;
		$jsondata = array();
		$error 	  = '';
		$message  = '';
		$carpetas = "";
		$path = $_POST['directorio'];
		$pathbtn = "";

		#codigo................;
		
		
				$pathbtn .= "<input type=\"hidden\" id=\"pathCat\" value=\"$path\">
											<button type=\"submit\" class=\"form-control btn btn-outline-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\"><i class=\"ti ti-plus\"> </i>Agregar</button>";

			



		    //Asignamos la ruta a la variable path
				//$path="../../htmls/documents/";
				//asignamos a $directorio el objeto dir creado con la ruta
				$directorio=dir($path);

				
				$carpetas .= "
                          
                          	<div class=\"row\">";

				//y ahora lo vamos leyendo hasta el final
				while ($archivo = $directorio->read())
				{//
				if($archivo!="." AND $archivo!=".."){
						$file_c = strtolower(substr($archivo, -3));
						//error_log($file_c);
	if ($file_c != "pdf" && $file_c != "jpg" && $file_c != "png" && $file_c != "xls" && $file_c != "doc"  && $file_c!= "ocx" && $file_c != "lsx" && $file_c != ".db")
		{
					$path_n = $path . $archivo . "/";

				$carpetas .= "
                       <div class=\"col-sm-3 stretch-card\">

                       <input type=\"hidden\" class=\"directorio\" value=\"$path_n\">

                       <button type=\"submit\" class=\"form-control btn btn-outline-dark\" onclick=\"viewcarpeta(this.value)\" value=\"$path_n\"><i class=\"ti ti-folder\"></i><b>$archivo</b></button>
                       
                      	</div>
                      	";

				//error_log($archivos_reciente);
				}
				}
				}
				//descargo el objeto
				$directorio->close();

	
		   // $carpetas .= "</div>";


    //Termina prueba semi final

		$jsondata['pathbtn'] = $pathbtn;
		$jsondata['carpetas'] = $carpetas;
		$jsondata['message'] 	= $message;
		$jsondata['error']   	= $error;
		echo json_encode($jsondata);
}


function viewCategoriaDash(){
		global $conn;
		$jsondata 	= array();
		$error 	  	= '';
		$message  	= '';
		$categoria 	= "";
		$rol_id   	= $_SESSION['rol_id'];
		
		$query = "SELECT file_path_carpeta,SUM(file_download_amount) AS total, count(file_path_carpeta) As total_arch FROM downloads GROUP BY file_path_carpeta ORDER BY total DESC LIMIT 4";

		$execute_query =  mysqli_query($conn, $query);

		while($fetch_query = mysqli_fetch_array($execute_query)){
			$total_archivos = $fetch_query['total_arch'];
			$dir_cat	=	$fetch_query['file_path_carpeta'];
			$divide = explode('/',$dir_cat);
			$count_array = count($divide);
			$count_name = $count_array - 2;
			$name_cat = mysqli_real_escape_string($conn,$divide[$count_name]);
			//$id_cat   = $fetch_query['idCat'];
		//	$path     = $fetch_query['path_cat'];

			//$divi_path = explode("htmls", $path);

			//$data = $divi_path[1];

			$categoria .= "<div class=\"col-md-3 col-lg-3 row-eq-height\">
                              <div class=\"card  w-100 \">
                                <div class=\"card-body pb-0\">
                                  <div class=\"row justify-content-end\">
                                    <div class=\"col-1\">
                                      <div class=\"dropdown\">
                                       
                                      <iconify-icon icon=\"feather:more-vertical\" type=\"button\" id=\"dropdownMenuIconButton1\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></iconify-icon>
                                      <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuIconButton1\">
                                          
                                          
                                          <a class=\"dropdown-item\" href=\"#\">Compartir Link</a>
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <img src=\"images/folder/folder_azul.png\" width=\"20%\">
                                  <h4 class=\"card-title card-title-dash \">$name_cat</h4>
                                  
                                </div>";
          if ($rol_id == "1" || $rol_id == "4") {
           $categoria .="       <div class=\"card-footer pb-0\">
                                  <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                      <p class=\"\" id=\"manual_conteo\">$total_archivos Archivos</p>
                                    </div>
                                    
                                    
                                  </div>
                                </div>";
                              }
            $categoria .="    </div>
                            </div>";

		}

		//error_log($categoria);

		
		$jsondata['categoria'] = $categoria;
		$jsondata['message'] 	= $message;
		$jsondata['error']   	= $error;
		echo json_encode($jsondata);

}

function DescargaArchivo(){
	global $conn;
	$jsondata 	= array();
	$error 	  	= '';
	$message  	= '';
	$url      	= "";
	$carpeta 		= "";
	$username   = $_SESSION['username'];
	$link_archivo = "";

	if (isset($_POST['link'])) {
		$url = $_POST['link'];
		// code...

		$divide = explode('/',$url);


		$count_array = count($divide);

		$count_name = $count_array - 1;

		$i=1;
		$c=0;
		while ($i<$count_array) {
			// code...
			$carpeta .= $divide[$c]."/";
			//error_log($carpeta);
			$i++;
			$c++;
		}



		$name = mysqli_real_escape_string($conn,$divide[$count_name]);

		$display_name = explode('.', $name);

		$name_download = $display_name[0];

		if ($name !="") {
			// code...
			$query = "INSERT INTO downloads(file_name,file_path,file_download_amount,file_path_carpeta,pandora)
					VALUES
					('$name','$url','1','$carpeta',MD5('$url'))
					ON DUPLICATE KEY UPDATE 
					file_download_amount	= file_download_amount + VALUES(file_download_amount),
					file_path_carpeta = '$carpeta',
					pandora = MD5('$url')";
					error_log($query);
					$insert_query = mysqli_query($conn, $query);

		if ($insert_query) {
			// code...
			$link_archivo = $url;
			$loginsert = "Download-$url-1-$username";
//			error_log($loginsert);
			insert_log($loginsert);
		}

		
		}else{
			$error .= "No se encontro el archivo descargable";
		}

		

	}
		
	$jsondata['name']			=	$name;
	$jsondata['link'] 		= $link_archivo;
	$jsondata['message'] 	= $message;
	$jsondata['error']   	= $error;
	echo json_encode($jsondata);

}

function compartir(){
	global $conn;
	$jsondata 	= array();
	$error 	  	= '';
	$message  	= '';
	$url      	= "";
	$carpeta 		= "";
	$rol_id   	= $_SESSION['rol_id'];
	$link_archivo = "";
	$compartir = '';

	if (isset($_POST['link'])) {
		$url = $_POST['link'];

		$query = "SELECT
								pandora,
								shared
							FROM
								downloads
							WHERE
								file_path = '$url'";
error_log($query);
		$execute_pandora = mysqli_query($conn,$query);

		$fquery  = mysqli_fetch_array($execute_pandora);

		$pandora = $fquery['pandora'];
		$shared = $fquery['shared'];

		if ($pandora!="") {
			// code...
			$raiz = "http://161.35.13.96/htmls/dashboard.html?share=";
			$compartir = $raiz.$pandora."&type=archivo";
			$query = "UPDATE downloads set shared = '$shared'+1 where pandora = '$pandora'";
			//error_log($query);
					
					$insert_query = mysqli_query($conn, $query);
		}

	}



	$jsondata['share'] 		= $compartir;
	$jsondata['message'] 	= $message;
	$jsondata['error']   	= $error;
	echo json_encode($jsondata);
}

function descargar_shared(){
	global $conn;
	$jsondata 	= array();
	$error 	  	= '';
	$message  	= '';
	$url      	= "";
	$carpeta 		= "";
	$username   = $_SESSION['username'];
	$link_archivo = "";
	$compartir = "";
	$pandora = "";
	$type	   = "";
	$name 	 = "";

	if (isset($_POST['pandora'])) {
		if (isset($_POST['type'])) {
			$pandora = $_POST['pandora'];
			$type = $_POST['type'];

			$query = "SELECT * 
									FROM
									downloads
									WHERE 
									pandora = '$pandora'";
			//error_log($query);
			$execute_query = mysqli_query($conn, $query);
			$fquery  = mysqli_fetch_array($execute_query);

			$link_archivo = $fquery['file_path'];
			//$adicion = "../../htmls/";
			//$link_archivo = $adicion.$link_archivo;
			error_log($link_archivo);
			$file_download_amount=$fquery['file_download_amount'];
			$name = $fquery['file_name'];

			//$compartir .= $link_archivo;

			if ($fquery) {
			// code...
			$query = "UPDATE downloads set file_download_amount = '$file_download_amount'+1 where pandora = '$pandora'";
					
					$insert_query = mysqli_query($conn, $query);

		if ($insert_query) {
			// code...
			$link = $link_archivo;
			$loginsert = "Download-$url-1-$username";
			error_log($loginsert);
			insert_log($loginsert);
		}

		
		}

		}
		// code...
	}

	






	$jsondata['name']			=	$name;
	$jsondata['share'] 		= $link;
	$jsondata['message'] 	= $message;
	$jsondata['error']   	= $error;
	echo json_encode($jsondata);
}

function	mostrar_upload(){
	global $conn;
	$jsondata 	 = array();
	$error 	  	 = '';
	$message  	 = '';
	$form_upload = "";
	
		$query = "SELECT	
								*
								FROM
								categoria 
								";
		$execute_query = mysqli_query($conn,$query);


		$form_upload .= "
				<div class=\"row\">
        <div class=\"col-md-12\">
          <label for=\"inputEmail4\" class=\"form-label\">Nombre de Documento</label>
          <input type=\"text\" class=\"form-control\" id=\"name_document\" required>
        </div>
        <div class=\"col-md-6\">
          <label for=\"inputPassword4\" class=\"form-label\">Autor</label>
          <input type=\"text\" class=\"form-control\" id=\"autor\" required>
        </div>
        <div class=\"col-6\">
          <label for=\"inputAddress\" class=\"form-label\">Fecha de publicacion</label>
          <input type=\"date\" class=\"form-control\" id=\"f_public\" required>
        </div>
        <div class=\"col-6\">
          <label for=\"inputAddress\" class=\"form-label\">ISBN</label>
          <input type=\"text\" class=\"form-control\" id=\"isbn\" required>
        </div>
        <div class=\"col-6\">
          <label for=\"inputAddress\" class=\"form-label\">cantidad de paginas</label>
          <input type=\"number\" class=\"form-control\" id=\"page\" required>
        </div>
        <div class=\"col-12\">
          <label for=\"exampleFormControlTextarea1\" class=\"form-label\">descripcion</label>
          <textarea class=\"form-control\" id=\"descripcion\" rows=\"3\" required></textarea>
        </div>
        
        <div class=\"col-md-12 sele_cat\">
          <label for=\"inputState\" class=\"form-label\">Categoria</label>
          <select id=\"cat\" class=\"form-select\" required>
          <option value=\"\" selected>Selecciona una opcion</option>";


        while ($fquery = mysqli_fetch_array($execute_query)) {
        	// code...
        	$name_cat = $fquery['name_cat'];
        	$path_cat = $fquery['path_cat'];
        	$id_cat = $fquery['idCat'];
        	$form_upload .= "<option value=\"$id_cat\">$name_cat</option>";
        }
    
    $form_upload .= "
    		</select>
    		</div>
        <div class=\"col-md-12\">
         
          <input class=\"form-control form-control-sm\" id=\"formFileSm\" type=\"file\" required >
        </div>
        
        
        <div class=\"col-12\">
          <button type=\"submit\" class=\"form-control btn btn-outline-primary\" onclick=\"uploadarchivos();return false;\">Subir Archivo</button>
        </div>
        <div>
      ";
	$jsondata	['form']		= $form_upload;
	$jsondata['message'] 	= $message;
	$jsondata['error']   	= $error;
	echo json_encode($jsondata);
}

function upload_archivos(){
	global $conn;
	$jsondata 	 = array();
	$error 	  	 = '';
	$message  	 = '';
	$form_upload = "";
	$nombre_doc  = $_POST['nombre_doc'];
  $autor       = $_POST['autor'];
  $f_publi     = $_POST['f_publi'];
  $isbn        = $_POST['isbn'];
  $pag         = $_POST['pag'];
  $descrp      = $_POST['descrp'];
  $cat         = $_POST['cat'];
  

  $query = "SELECT
  								path_cat
  								FROM 
  								categoria
  								WHERE
  								idCat = '$cat'";
error_log($query);

  		$execute_query = mysqli_query($conn,$query);
  		$rquery = mysqli_fetch_array($execute_query);

  		$pathcat = $rquery['path_cat'];

  if (!empty($nombre_doc)) {
  	// code...
  	$nombre_archivo = $_FILES['file']['name'];
		$tipo_archivo = $_FILES['file']['type'];
		$tamano_archivo = $_FILES['file']['size'];

		error_log($tipo_archivo);
  	if (!((strpos($tipo_archivo, "png") || strpos($tipo_archivo, "jpeg")))) {
  		$error.="no es archivo";
  	}else{
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $pathcat.$_FILES['file']['name'])) {
        //more code here...
        echo $pathcat.$_FILES['file']['name'];
    } else {
        $error.="NO es formato";
    }
} /*else {
    $error.="no hay archivo";
}*/
  	/*if (isset($_FILES['file'])) {

  		$query = "SELECT
  								path_cat
  								FROM 
  								categoria
  								WHERE
  								idCat = '$cat'";
error_log($query);

  		$execute_query = mysqli_query($conn,$query);
  		$rquery = mysqli_fetch_array($execute_query);

  		$pathcat = $rquery['path_cat'];

error_log($pathcat);


  		$countfiles = count($_FILES['file']['name']);
			//$upload_location = '../../htmls/hojas_de_vida/';
error_log($countfiles);
			for($index = 0;$index < $countfiles;$index++){

	   // File name
	   $filename = $_FILES['file']['name'][$index];
	   $sizefile = $_FILES['file']['size'][$index];
//error_log($filename);
	   // Get extension
	   $ext = pathinfo($filename, PATHINFO_EXTENSION);
	   //$new_name = $u.time().'.'.$ext;
	   // Valid image extension
	   $valid_ext = array("pdf","jpg","xlsx","jpeg","xls","doc","docx","png");

	   // Check extension
	   if(in_array($ext,$valid_ext)){

	     // File path
	     //$path = $upload_location.$filename;
	   	$path = $upload_location.$new_name;

	     // Upload file
		     if(move_uploaded_file($_FILES['file']['tmp_name'][$index],$pathcat)){
		        $files_arr[] = $path;
		        $query = "
							INSERT INTO documentation(display_name,file_name,description,size,cat1,ISBN,pages_qty,author,file_path)
							VALUES
							('$filename','$filename','$descrp','$sizefile','$cat','$isbn','$pag','$autor','$pathcat')";
							error_log($query);
		        $conn->query($query);
				//echo "Archivo Subido!";
		     }
		}
	}


  }else{
  	$error.="no hay archivo";
  }*/
}else{
	$error.="nombre vacio";
}


	

	//$jsondata	['form']		= $form_upload;
	$jsondata['message'] 	= $message;
	$jsondata['error']   	= $error;
	echo json_encode($jsondata);

}
  
?>
