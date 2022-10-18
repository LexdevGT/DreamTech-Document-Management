$(function(){
    load_user_picture();
    load_sidebar();
    load_headbar();

     const queryString = window.location.search;
            //console.log(queryString);
    if (queryString!=="") {
        shared_descarga(queryString);
    }

    viewcarpeta();

    $(".exportToExcel").click(function(e){
        //alert('something');
        var table = $('.table2excel');
        if(table && table.length){
            var preserveColors = (table.hasClass('table2excel_with_colors') ? true : false);
            $(table).table2excel({
                exclude: ".noExl",
                name: "Excel Document Name",
                filename: "suscripciones" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
                fileext: ".xls",
                exclude_img: true,
                exclude_links: true,
                exclude_inputs: true,
                preserveColors: preserveColors
            });
        }
    });

    $(".exportToExcel_filtros").click(function(e){
        //alert('something');
        var table1 = $('#tablareportes_descargas');
        var table2 = $('#tablareportes_categoria');
        var table3 = $('#tablareportes_usuario');
        if(table1 && table1.length){
            var preserveColors = (table1.hasClass('table2excel_with_colors') ? true : false);
            $(table1).table2excel({
                exclude: ".noExl",
                name: "Excel Document Name",
                filename: "Reporte_descargas" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
                fileext: ".xls",
                exclude_img: true,
                exclude_links: true,
                exclude_inputs: true,
                preserveColors: preserveColors
            });
        }

        if(table2 && table2.length){
            var preserveColors = (table2.hasClass('table2excel_with_colors') ? true : false);
            $(table2).table2excel({
                exclude: ".noExl",
                name: "Excel Document Name",
                filename: "Reporte_categorias" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
                fileext: ".xls",
                exclude_img: true,
                exclude_links: true,
                exclude_inputs: true,
                preserveColors: preserveColors
            });
        }

        if(table3 && table3.length){
            var preserveColors = (table3.hasClass('table2excel_with_colors') ? true : false);
            $(table3).table2excel({
                exclude: ".noExl",
                name: "Excel Document Name",
                filename: "Reporte_iniciosSesion" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
                fileext: ".xls",
                exclude_img: true,
                exclude_links: true,
                exclude_inputs: true,
                preserveColors: preserveColors
            });
        }
    });

    $('#enviar-email').click(function(){
        alert('click');
    });    

    $('#log_out').click(function(){
        log_out();
    });

    $('#ingresar').click(function(){
        log_in();
    });
    $('#iniciar_proceso').click(function(){
        alert('Felicidades por iniciar el proceso!');
        window.location.href = 'inicio_proceso.php';
    });

    $('#guardar-puesto').click(function(){
        //alert('Plaza guardada!');
        //window.location.href = 'catalogo.php';
        guardar_puesto();
    });    

    $('#nuevo-puesto').click(function(){
        window.location.href = 'ficha_catalogo.html';
    });  

    $('#nueva-etiqueta').click(function(){
        window.location.href = 'ficha_etiquetas.html';
    });

    $('#guardar-etiqueta').click(function(){
        guardar_etiqueta();
        //alert('Etiqueta guardada!');
        //window.location.href = 'manto_etiquetas.html';
    });

    $('#enviar-hojadevida').click(function(){
        //window.location.href = 'htmls/inicio_proceso.php';
        guardar_modal_hoja_vida();
    }); 

    $('#nueva-etapa').click(function(){
        
        window.location.href = 'ficha_etapa.html';
    });

    $('#guardar-etapa').click(function(){
        guardar_etapa();
    });

    $('#nueva-tarea').click(function(){
        window.location.href = 'ficha_tareas.html';
    });

    $('#guardar-tarea').click(function(){
        guardar_tarea();
        //alert('Tarea guardada!');
        //window.location.href = 'manto_tareas_etapa.html';
    });

    $('#nueva-empresa').click(function(){
        window.location.href = 'ficha_empresas.html';
    });

    $('#guardar-empresa').click(function(){
        guardar_empresa();
        //alert('Empresa guardada!');
        //window.location.href = 'manto_empresas.html';
    });

    $('#nuevo-usuario').click(function(){
        window.location.href = 'ficha_usuarios.html';
    });

    $('#guardar-usuario').click(function(){
        guardar_usuario();
        //alert('Usuario guardado!');
        //window.location.href = 'manto_usuarios.html';
    });

    $('#guardar-usuario-modificado').click(function(){
        guardar_usuario_modificado();
        //alert('Usuario guardado!');
        //window.location.href = 'manto_usuarios.html';
    });

    $('#nuevo-rol').click(function(){
        window.location.href = 'ficha_roles.html';
        
    });

    $('#guardar-rol').click(function(){
        guardar_rol();
    });

    $('#guardar-permiso').click(function(){
        guardar_permisos();
    });

    $('#guardar-formulario').click(function(){
        //alert('Formulario guardado!');
        //window.location.href = 'manto_formulario_inicial.html';
        guardar_formulario();
    });

    $('#guardar-diseno').click(function(){
        guardar_diseno();
    });

    $('#lista_roles_select').change(function(){
        load_permisos_info();
    });

    $('#etapas_manto_tareas').change(function(){
        load_tareas_etapa_change();
    });

    $('.add_field').click(function(){
        var field = $(this).parent().parent().clone(true);
        //console.log(field); alert('j');
        field.find('input:text').val(''); 
        //console.log(field);
        field.appendTo('.new_fields');

    });

    $('.delete_field').click(function(){
        $(this).parent().parent().remove();
    });

    $('#lista_plazas_select').change(function(){
        load_info_formulario();
    });

    $('#select_palabra_clave').change(function(){
        view_div_plazas();
    });

    $('#select_localidad').change(function(){
        view_div_plazas();
    });

    $('#suscripcion_landingpage').click(function(){
        suscripcion();
    });

    $("#ficha_select_etapas").change(function(){
        var id = $(this).val();
        change_etapa(id);
    });

    $('#hoja_vida_plazas_select').change(function() {
        get_hojas_vida_plazas(); 
    });

    $('#reportes_filtros_select_etapas').change(function(){
        load_filtros_table();
    });

    $('#reportes_filtros_select_plazas').change(function(){
        load_filtros_table();
    });

    $('#guardar-ciudadano-login').click(function(){
        save_ciudadano_login();
    });

    $('#select_categoria').change(function(){
        get_name_files();
    });

    $('#advanced_search_btn').click(function(){
        get_search_result();
    });

    $('#explorer_search').keyup(function(){
        var busqueda = $('#explorer_search').val();
        //alert('cambio: '+busqueda);
        interactive_search(busqueda);
    });

    $('.img-md').click(function(){
        window.location.replace('modificar_foto.html');
    });

    $('#modificar-foto').click(function(){
        upload_user_photo_ciudadano();
    });

});

function new_function(){
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'security'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                /* No code */
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function upload_user_photo_ciudadano(){
    //alert('haciendo upload de la photo');
    var form_data = new FormData();                  
    var totalfiles = document.getElementById('ficha_usuario_foto').files.length;

       for (var index = 0; index < totalfiles; index++) {
          form_data.append("ficha_usuario_foto[]", document.getElementById('ficha_usuario_foto').files[index]);
       }
                               
    $.ajax({
        url: '../assets/php/upload_usuario_photo_ciudadano.php', 
        dataType: 'text',  
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
            if (php_script_response == "No files") {
                alert('No se logro guardar tu imagen!!!');
                window.location.replace('dashboard.html');
            }else{
                alert('Tu foto fue modificada!');
                window.location.replace('dashboard.html');
            }
        }
    });
}

function load_user_picture(){
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_user_picture'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('.img-xs').attr("src",r.photo);
                $('.rounded-circle').attr("src",r.photo);
                $('.rounded-circle').attr("width",'50px');
                $('.rounded-circle').attr("height",'50px');
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function load_user_picture(){
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_user_picture'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('.img-xs').attr("src",r.photo);
                $('.rounded-circle').attr("src",r.photo);
                $('.rounded-circle').attr("width",'50px');
                $('.rounded-circle').attr("height",'50px');
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function interactive_search(b){
    /*
    var html = '<div class="row mt-2">'+
                    '<div class="col-sm-3 nav-item">'+
                        '<a class="nav-link" href="/documents/PUEBLOS INDÍGENAS/12_Agenda Socio Ambiental, desde el Pensamiento de los Pueblos Indígenas de Guatemala[1].pdf" target="_blank" onclick="insert_download(\'/documents/PUEBLOS INDÍGENAS/12_Agenda Socio Ambiental, desde el Pensamiento de los Pueblos Indígenas de Guatemala[1].pdf\',\'12_Agenda Socio Ambiental, desde el Pensamiento de los Pueblos Indígenas de Guatemala[1].pdf\',\'/documents/PUEBLOS INDÍGENAS/12_Agenda Socio Ambiental, desde el Pensamiento de los Pueblos Indígenas de Guatemala[1].pdf\',\'/documents/PUEBLOS INDÍGENAS/12_Agenda Socio Ambiental, desde el Pensamiento de los Pueblos Indígenas de Guatemala[1].pdf\');">'+
                            '<div class="card">'+
                                '<div class="card-body">'+
                                    '<i class=" mdi mdi-file-document menu-icon"><span class="menu-title">12_Agenda Socio Ambiental, desde el Pensamiento de los Pueblos Indígenas de Guatemala[1].pdf</span></i>'+
                                '</div>'+
                              '</div>'+
                            '</a>'+
                             '</div>'
    $('#data_explorer').html(html);*/

    if(b==''){
        window.location.replace('explorador.html');
    }

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'interactive_search',
            b            
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                //alert('llego');

                $('#data_explorer').html(r.html_eplorer);

            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function get_search_result(){
    var type_doc        = $('#select_tipo_doc').val();
    var category        = $('#select_categoria').val();
    var document_name   = $('#select_documento').val();
    //var publish_date    = $('#dtRange').val();
    var author          = $('#select_author').val();

    //alert(type_doc);
    //alert(category);
    //alert(document_name);
    //alert(publish_date);
    //alert(author);
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'get_search_result',
            type_doc,
            category,
            document_name,
            author
            //publish_date             
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                //alert('llego');
                $('#search_result').html(r.search_result);
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function get_name_files(){
    var category = $('#select_categoria').val();
    //alert(category);
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'get_files_names',
            category                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#select_documento').html(r.list_documentos);
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function load_busqueda_avanzada(){
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_busqueda_avanzada'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                //alert('llegamos');
                $('#select_categoria').html(r.list_categories);
                $('#select_author').html(r.list_author);
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}


function load_explorer(directory='',flag=0){

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_explorer',
            directory,
            flag
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                //alert(r.message);
                $('#data_explorer').html(r.html);
            }else{
                alert(r.error);
                window.location.replace('dashboard.html');
            }
        }    
    });
}

function save_ciudadano_login(){
    var email           = $('#ciudadano_email').val();
    var names           = $('#ciudadano_nombre').val();
    var last_names      = $('#ciudadano_apellido').val();
    var id_document     = $('#ciudadano_documento').val();
    var user_sex        = $('#ciudadano_sexo').val();
    var birthday        = $('#ciudadano_nacimiento').val();
    var academic_level  = $('#ciudadano_academico').val();
    var phone           = $('#ciudadano_telefono').val();
    var pass            = $('#ciudadano_contra').val();

    //alert("EMAIL: " + email + " Nombres: "+names);


    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'save_ciudadano_login',
            email,
            names,
            last_names,
            id_document,
            user_sex,
            birthday,
            academic_level,
            phone,
            pass
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                alert(r.message);
                window.location.replace('../');
            }else{
                alert(r.error);
                window.location.replace('dashboard.html');
            }
        }    
    });
    
}

function load_filtros_table(){
    var id_etapa = $('#reportes_filtros_select_etapas').val();
    var id_plaza = $('#reportes_filtros_select_plazas').val();

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_info_filtros',
            id_etapa,
            id_plaza
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                //código para alimentar la tabla de procesos
                $('#procesos_table_content').html(r.tabla);
            }else{
                alert(r.error);
                window.location.replace('dashboard.html');
            }
        }    
    });
}

function load_filtros(){

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_filtros'
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
            
                $('#procesos_table_content').html(r.tabla);
                $('#reportes_filtros_select_etapas').html(r.lista_etapas);
                $('#reportes_filtros_select_plazas').html(r.lista_plazas);
            }else{
                alert(r.error);
                window.location.replace('dashboard.html');
            }
        }    
    });
}

function insert_download(file_path,file_name,dir,pandora){
    //alert('FILE_PATH: '+file_path+' FILE_NAME: '+file_name+' DIRICTORY: '+dir+' PANDORA: '+dir);
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'insert_download',
            file_path,
            file_name,
            dir,
            pandora
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                alert(r.message);
            }else{
                alert(r.error);
                window.location.replace('dashboard.html');
            }
        }    
    });
    
}

function load_dashboard(){
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_dashboard'
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                //[12, 12, 12, 12]

                category_graphic(r.data_info,r.data_names);
                //alert('info bien');
            }else{
                alert(r.error);
                window.location.replace('dashboard.html');
            }
        }    
    });
}

function load_reporte_graf(){
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_reporte_grafica'
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                //[12, 12, 12, 12]

                //category_graphic_reporte(r.data_info,r.data_names);
                //alert('info bien');
            }else{
                alert(r.error);
                //window.location.replace('dashboard.html');
            }
        }    
    });
}

function load_suscripciones(){
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_suscripciones'
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#lista_suscripciones').html(r.tabla);
                $('#tabla_suscripciones').addClass("table2excel");
            }else{
                alert(r.error);
                window.location.replace('dashboard.html');
            }
        }    
    });
}

function get_hojas_vida_plazas(){
    var plaza = $('#hoja_vida_plazas_select').val();

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'get_hojas_vida_plazas',
            plaza
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#lista_cvs').html(r.tabla);
            }else{
                alert(r.error);
                window.location.replace('dashboard.html');
            }
        }    
    });
}

function load_hojas_de_vida(){

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_hoja_vida_plazas_select'
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                //código para alimentar la tabla de procesos
                $('#hoja_vida_plazas_select').html(r.lista);
                $('#lista_cvs').html('');
            }else{
                alert(r.error);
                window.location.replace('dashboard.html');
            }
        }    
    });
}

function load_procesos_table(id){

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_info_process',
            id
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                //código para alimentar la tabla de procesos
                $('#procesos_table_content').html(r.tabla);
            }else{
                alert(r.error);
                window.location.replace('dashboard.html');
            }
        }    
    });
}

function load_procesos(){

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_procesos'
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#botonera_procesos').html(r.botonera);
                $('#procesos_table_content').html(r.tabla);
                $('.btn-proceso').click(function(){
                    var id = $(this).attr('data-info');
                    //alert(id);
                    load_procesos_table(id);
                });
            }else{
                alert(r.error);
                window.location.replace('dashboard.html');
            }
        }    
    });
}

function modalProperties(){
    $('#propModal').modal('show'); 
}

function modalComments(){
    $("#comentModal").modal('show');
}


function notify_info() {
    
   $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'notificacion_leer'
        }),
        dataType: "json",        
        success: function(r) {                                                   
          
            //alert(r.notificacion_read);
            if(r.contador>0){
                window.setInterval(function() {$('#notify_info').effect( "shake",1000);}, 5000);
                $("#info_notify").append(r.notificacion_read);
                $('#notify_info').css({ color: "red"});
                $('#notify_info').click(function() {
                       $("#dropdownNotify").show();
                });
            }
            
            
           $("#read_notify").click(function() {
                   $("#dropdownNotify").hide();
                   read_notifications();
                   //$('#notify_info').css({ color: "grey"});
                   //$('#notify_info').effect( "shake", {times:3}, 10);
            });
             

        
        }    
    });

}

function read_notification() {
   
   //alert('lectura');
    
   $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'user_read_notification'
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                //$('#notify_info').effect( "shake");
                $('#notify_info').css({ color: "grey"});
                location.reload(true)
            }else{
                alert(r.error);
                window.location.replace('notificacion.html');
            }

        
        }    
    });
    
}

/*
function notification_send(title,notification){

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'notificacion_leida'
        }),
        dataType: "json",        
        success: function(r) {                                                   
            
                $alert("ok");
        }    
    });

}
*/

function notification_send(title,notification){

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'notificacion',
            title: title,
            notification: notification
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                
                $('#notify_title').val('');
                $('#notify').val('');
                alert('Notificación enviada');


            }else{
                alert(r.error);
                window.location.replace('notificacion.html');
            }

        
        }    
    });

}



function buscar_documentos(nombre){
    var order = '';

    $("input:radio").each(function(){

        var name = $(this).attr("id");


        if($("[id="+name+"]:checked").length == 1)
        {
            var src = $('#' + name).attr("datasrc")                                                                                                                                                                                                                                                                                                                                                                                                                                                                     

            order = name;                

        }               

        $(this).prop('checked', false);                                                                                                                                                                                                                                                                                                                                                                                                                                                      
    });

    $("#itemsFiles").empty();

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'buscar_todo',
            nombre: nombre,
            order: order
        }),
        dataType: "json",        
        success: function(r) {                                                   
            
            //console.log(r.todo);
            $("#itemsFiles").append(r.todo);

        
        },
        error: function (r) {
            let text = r.responseText;
            let result = text.includes('{"todo":"');

            if(result == true){
                $("#itemsFiles").append('No hay coincidencia de texto');
            }else{

                $("#itemsFiles").append(r.responseText);
               //console.log(r);
            }
        }
    });
}

function busqueda_avanzada(tipo,categoria,nombre,fecha,autor){

    $('#rsl_b_avanzada').empty();

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/busqueda_avanzada.php",
        data: ({
            option: 'autor',
            tipo: tipo,
            categoria: categoria,
            nombre: nombre,
            fecha: fecha,
            autor: autor
        }),
        dataType: "json",        
        success: function(r) {                                                   
            
           // alert(r.files);
        
              $('#rsl_b_avanzada').append(r.files);
                
        
        },
        error: function(r){
            //alert(r.responseText);
            let arr = r.responseText.split('{');
        
                    
            //console.log(r);
            $('#rsl_b_avanzada').append(arr[1]);
            //console.log(r.responseText);
    

        }  
    });
}

function display_author(){
     $('#rsl_b_avanzada').empty();
     $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/autor.php",
        data: ({
            option: 'autor'
        }),
        dataType: "json",        
        success: function(r) {                                                   
            
            //alert(r);
            var result = [];

            for (var i in r.table_content){
                result.push([i, r.table_content[i]]);
            }


            //alert(r.table_content);

           
            $('#select_author').append(r.table_content);

              
                
        
        },
        error: function(r){
            //alert(r);
            let arr = r.responseText.split('{');
        
                    
            //console.log(r);
            $('#select_author').append(arr[0]);
            //console.log(r.responseText);
    

        }  
    });

}

function display_categoria(){

     $('#rsl_b_avanzada').empty();
     $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/categorias.php",
        data: ({
            option: 'categorias'
        }),
        dataType: "json",        
        success: function(r) {                                                   
            

            var result = [];

            for (var i in r.table_content){
                result.push([i, r.table_content[i]]);
            }


            //alert(r.table_content);

           
            $('#select_categoria').append(r.table_content);

              
                
        
        },
        error: function(r){
            //alert(r.responseText);
            let arr = r.responseText.split('{');
        
                    
            //console.log(r);
            $('#select_categoria').append(arr[0]);
            //console.log(r.responseText);
    

        }  
    });

}

function display_busqueda(){
     var categoria = $("#select_categoria").val();
     $('#select_documento').empty();

     $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/busqueda.php",
        data: ({
            option: 'resultado_busqueda',
            categoria: categoria
        }),
        dataType: "json",        
        success: function(r) {                                                   
            

            var result = [];

            for (var i in r.table_content){
                result.push([i, r.table_content[i]]);
            }


            //alert(r.table_content);

           
            $('#select_documento').append(r.table_content);

              
                
        
        },
        error: function(r){
            //console.log(r);
            let arr = r.responseText.split('{');
            $('#select_documento').append(arr[0]);
            //console.log(r.responseText);
        }  
    });

}

function seach_result_display(){
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/busqueda.php",
        data: ({
            option: 'resultado_busqueda'
        }),
        dataType: "json",        
        success: function(r) {                                                   
            

            var result = [];

            for (var i in r.table_content){
                result.push([i, r.table_content[i]]);
            }


            //alert(result);

            $.each(r.table_content, function (x, item) {
            

                if(item!=="."&&item!==".."){
                    //alert(item);
                    //$('#ul_result_busqueda').append('<li class="item"><i class="mdi mdi-file menu-icon mdi-48px mdi-set"></i><b>'+item+'</b></li>');

                }
                


            });
                
        
        }    
    });

}


function seach_result_display_1(){
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/busqueda.php",
        data: ({
            option: 'resultado_busqueda'
        }),
        dataType: "json",        
        success: function(r) {                                                   
            
            //alert()
            $('#spnFileselected').append(r.file1);
            $('#propName').append(r.file1);

        
        }    
    });

}

function standar_display(){

    $('#standar').show();
    $('#avanzado').hide();
    $('#avanzado1').hide();

    $('#avanzado2').hide();
    $('#avanzado3').hide();


}



function avanzado_display(){

    $('#standar').hide();
    $('#avanzado').show();
    $('#avanzado1').show();

    $('#avanzado2').show();
    $('#avanzado3').show();


}

function change_etapa(id_etapa){

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'change_etapa_progreso',
            id_etapa
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                alert(r.message);
                load_ficha_candidato(id_etapa);
            }else{
                alert(r.error);
                load_ficha_candidato();
            }
        }    
    });
}

function change_task_status(id_task,status){

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'save_task_status',
            id_task,
            status
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                load_ficha_candidato();
            }else{
                alert(r.error);
                window.location.replace('dashboard.html');
            }
        }    
    });
}

function actions_tareas(){
    $(".checkbox").click(function(){
        var check_name = $(this).prop('name');
        var checkValue = $(this).prop('checked');
        //alert(check_name + '-' + checkValue);
        if(checkValue){
            checkValue = 0;
        }else{
            checkValue = 1;
        }
        change_task_status(check_name,checkValue);
    });
    /*

    $("#ficha_select_etapas").change(function(){
        var id = $(this).val();
        change_etapa(id);
    });
    */
}

function enviar_email_inicial(){
    //alert('Iniciando carga...');
    var message      = $('#email').val();
    var etapa_mail   = $('#ficha_select_etapas').val();
    var etapa_nombre = $("#ficha_select_etapas option:selected").text();
    //alert('Nombre:'+nombre+' Email:'+email);
    //alert(message);

    //alert('mensaje a enviar: ' + etapa_mail);

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'send_mail_patsy',
            etapa_mail,
            etapa_nombre,
            message
            //email
        }),
        dataType: "json",        
        success: function(r) {  
            //alert('Recibiendo email...');                                                 
            if(r.error == ''){
                alert('mail enviado!');
            }else{
                alert(r.error);
                //window.location.replace('dashboard.html');
            }
        },
        error: function(r){
            alert('Correo enviado!');
        }    
    });

}


function load_ficha_candidato(etapa = 0){
    //alert('Iniciando carga...');
    var nombre  = '';
    var email   = '';
    var message = '';

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_ficha_candidato',
            etapa
        }),
        dataType: "json",        
        success: function(r) {  
           // alert('Recibiendo carga...');                                                 
            if(r.error == ''){
                $('#div_candidato_info').html(r.contenido_div);
                $('#ficha_select_etapas').html(r.select_etapas);
                $('#ficha_todo_list').html(r.todo_text);
                nombre = r.name;
                email  = r.email;
                //etapa_actual = r.etapa_actual;
                actions_tareas();
                
            }else{
                alert(r.error);
                window.location.replace('dashboard.html');
            }
        }    
    });
}

function ficha_candidato(id){
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'get_candidato_info',
            id                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                window.location.replace('ficha.html');
            }else{
                alert(r.error);
                window.location.replace('dashboard.html');
            }
        }    
    });
}

function load_candidatos_info(id){

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_candidatos_info',
            id           
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#titulos_candidatos_tabla').html(r.lista_titulos);
                $('#contenido_candidatos').html(r.candidatos_data);
            }else{
                alert(r.error);
                window.location.replace('dashboard.html');
            }
        }    
    });
}

function load_candidatos(){

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_candidatos'           
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#contenido_candidatos').html('');
                $('#candidatos_botones_div').prepend(r.lista_botones);
                $('.candidatos-botonera').click(function(){
                    var id = $(this).prop('id');
                    load_candidatos_info(id);
                });
            }else{
                alert(r.error);
                window.location.replace('dashboard.html');
            }
        }    
    });
}

function suscripcion(){
    
    var email = $('#suscribete_input').val();

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "assets/php/services.php",
        data: ({
            option: 'guardar_suscripcion',
            email                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                alert(r.message);
                $('#suscribete_input').val('');
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function upload_modal_cv(plaza,sucursal){
    var form_data = new FormData();                  
    var totalfiles = document.getElementById('modal_hoja_de_vida').files.length;

    for (var index = 0; index < totalfiles; index++) {
        form_data.append("modal_hoja_de_vida[]", document.getElementById('modal_hoja_de_vida').files[index]);
        var file_actual = document.getElementById('modal_hoja_de_vida').files[index];
        var size = Math.round(file_actual.size/1024/1024);
    }

    form_data.append("plaza",plaza);
    form_data.append("sucursal",sucursal); 
    
    if(size <=5){
        $.ajax({
            url: 'assets/php/upload_hoja_de_vida.php', 
            dataType: 'text',  
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,                         
            type: 'post',
            success: function(php_script_response){
                if (php_script_response == "No files") {
                    //alert('NO SE LOGRO GUARDAR SLIDER PRINCIPAL');
                    return 0;
                }else{
                    alert('Hoja de vida enviada!');
                    return 1;
                }
            }
        });
    }else{
        alert('Tu archivo pesa mas de 5 megas');
    }      
    
}

function guardar_modal_hoja_vida(){

    var plaza       = $('#select_modal_plazas').val();
    var sucursal    = $('#select_modal_sucursales').val();
    upload_modal_cv(plaza,sucursal);

}

function view_div_plazas(){
    var palabras_clave  = $('#select_palabra_clave').val();
    var localidad       = $('#select_localidad').val();
    var company         = $('#select_palabra_clave').prop("name");
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "assets/php/services.php",
        data: ({
            option: 'load_div_plazas',
            palabras_clave,
            company,
            localidad                
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#index_plazas_iniciales').html(r.div_plazas_iniciales);
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
    
}

function insert_formulario_plaza_field(v,id,plaza){
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'save_plaza_field',
            v,
            id,
            plaza                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                /* No code */
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function delete_formulario_plaza(plaza){
    //alert('delete: '+plaza);
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'delete_formulario_plaza',
            plaza                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                /* No code */
            }else{
                alert(r.error);
                //window.location.replace('../dashboard.html');
            }
        }    
    });
}

function guardar_formulario_plaza(id_plaza){

    var inputValues = $(':input').map(function() {
        var type  = $(this).prop("type");
        //alert("TYPE:"+type);
        if(type == "text"){
            var value = $(this).val();
            var name  = $(this).prop("name");
            //alert("value:"+value+" Name:"+name);
            insert_formulario_plaza_field(value,name,id_plaza);

        }
       
    });

    alert("Tu aplicación se envío con éxito!");
    window.location.href = '../';

}

$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null) {
       return null;
    }
    return decodeURI(results[1]) || 0;
}

function load_formulario_plaza(){
    var serial = $.urlParam('id');
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_formulario_plaza',
            serial                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#div_formulario_plaza').html(r.table_content);
                $('#aplicar-puesto').click(function(){
                    guardar_formulario_plaza(serial);
                    //alert('Tu aplicación se envío con éxito!');
                    //window.location.href = '../';
                });
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function aplicar(id){
    //alert('ID:'+id);
    window.location.replace('htmls/inicio_proceso.html?id='+id);
}

function upload_plaza_icono(id){
    var form_data = new FormData();                  
    var totalfiles = document.getElementById('ficha_catalogo_icono').files.length;

       for (var index = 0; index < totalfiles; index++) {
          form_data.append("ficha_catalogo_icono[]", document.getElementById('ficha_catalogo_icono').files[index]);
       }
                               
    $.ajax({
        url: '../assets/php/upload_plaza_icono.php', 
        dataType: 'text',  
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
            if (php_script_response == "No files") {
                //alert('NO SE LOGRO GUARDAR SLIDER PRINCIPAL');
                return 0;
            }else{
                //alert('OK Slider Principal');
                return 1;
            }
        }
    });
}

function guardar_puesto(){

    var empresa         = $('#ficha_catalogo_empresas').val();
    var etiqueta        = $('#ficha_catalogo_etiquetas').val();
    var departamento    = $('#ficha_catalogo_departamento').val();
    var orden           = $('#ficha_catalogo_orden').val();
    var plaza           = $('#ficha_catalogo_plaza').val();
    var id_plaza        = $('#id_plaza').val();
    var categoria       = $('#ficha_catalogo_categoria').val();
    var descripcion     = $('#ficha_catalogo_descripcion').val();
    var salario         = $('#ficha_catalogo_salario').val();
    var estatus         = $('#ficha_catalogo_estatus').val();
    var icono           = $('#ficha_catalogo_icono').val();

    

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'guardar_catalogo',
            empresa,
            etiqueta,
            departamento,
            orden,
            plaza,
            id_plaza,
            categoria,
            descripcion,
            salario,
            estatus,
            icono                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                upload_plaza_icono();
                alert(r.message);
                window.location.replace('catalogo.html');
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function load_ficha_catalogo(){
    //alert('cargando ...');
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_ficha_catalogo'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#ficha_catalogo_orden').val(r.orden);
                $('#ficha_catalogo_empresas').html(r.lista_empresas);
                $('#ficha_catalogo_etiquetas').html(r.etiquetas_lista);
                $('#ficha_catalogo_departamento').val(r.departamento_plaza);
                $('#ficha_catalogo_plaza').val(r.nombre_plaza);
                $('#id_plaza').val(r.id_plaza);
                $('#ficha_catalogo_categoria').val(r.categoria_plaza);
                $('#ficha_catalogo_descripcion').html(r.descripcion_plaza);
                $('#ficha_catalogo_salario').val(r.salario_plaza);
                $('#ficha_catalogo_estatus').html(r.lista_estatus);
                $('#ficha_catalogo_icono').val(r.icono_plaza);
                if(r.vista_empresa){
                    $("#div_lista_empresas").show();
                }else{
                    $("#div_lista_empresas").hide();
                }
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}



function ficha_catalogo(id){
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'get_catalogo_info',
            id                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                window.location.replace('ficha_catalogo.html');
            }else{
                alert(r.error);
                window.location.replace('../index.html');
            }
        }    
    });
}

function load_catalogo(){

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_catalogo'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#lista_catalogo').html(r.table_content);
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function insert_field(str){

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'insert_field',
            str                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });

}

function guardar_formulario(){
    //alert('vamos');
    contador = 1;
    var lista = '';
    var plaza = $('#lista_plazas_select').val();

    delete_formulario_plaza(plaza);

    var inputValues = $('.new_fields :input').map(function() {
        var type  = $(this).prop("type");
        //alert("TYPE:"+type);
        if(type == "text"){
            var value = $(this).val();
            //alert(value);
            lista = lista + value + ",";
            if (contador % 3 ==0) {
                lista = lista + plaza + ",";
                lista = lista.slice(0,-1);
                //alert(lista);
                insert_field(lista);
                lista = '';
            }
            contador = contador + 1;
        }
       
    });

    alert('Formulario Guardado');
}

function add_functions(){
    
    $('.add_field').click(function(){
        var field = $(this).parent().parent().clone(true);
        //console.log(field); alert('j');
        field.find('input:text').val(''); 
        field.appendTo('.new_fields');
    });

    $('.delete_field').click(function(){
        $(this).parent().parent().remove();
    });
}

function load_info_formulario(){
    
    var plaza_id = $('#lista_plazas_select').val();

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_info_formulario',
            plaza_id              
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('.new_fields').empty();
                $('.new_fields').html(r.lista);
                add_functions();
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}
 

function guardar_empresa(){

    var ficha_nombre_empresa   = $('#ficha_nombre_empresa').val();
    var id_empresa             = $('#id_empresa').val();
    var ficha_phone_empresa    = $('#ficha_phone_empresa').val();
    var ficha_web_empresa      = $('#ficha_web_empresa').val();
    var ficha_moneda_empresa   = $('#ficha_moneda_empresa').val();
    var ficha_pais_empresa     = $('#ficha_pais_empresa').val();
    var lista_estatus          = $('#lista_estatus').val();
    var ficha_moneda_empresa   = $('#ficha_moneda_empresa').val();
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'guardar_empresa',
            ficha_nombre_empresa,
            id_empresa,
            ficha_phone_empresa,
            ficha_web_empresa,
            ficha_pais_empresa,
            lista_estatus,
            ficha_moneda_empresa
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                alert('Empresa guardada!');
                window.location.href = 'manto_empresas.html';
            }else{
                alert(r.error);
                window.location.replace('/');
            }
        }    
    });
}

function load_formulario(){
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_formulario'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#lista_plazas_select').html(r.lista);
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function load_ficha_empresas(){
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_ficha_empresa'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#ficha_nombre_empresa').val(r.ficha_nombre_empresa);
                $('#ficha_phone_empresa').val(r.ficha_phone_empresa);
                $('#ficha_web_empresa').val(r.ficha_web_empresa);
                $('#ficha_moneda_empresa').val(r.ficha_moneda_empresa);
                $('#ficha_pais_empresa').val(r.ficha_pais_empresa);
                $('#lista_estatus').html(r.lista_estatus);
                $('#id_empresa').val(r.id_empresa);

                if(r.vista_empresa){
                    $("#div_lista_empresas").show();
                }else{
                    $("#div_lista_empresas").hide();
                }
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function ficha_empresa(id){
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'get_empresa_info',
            id                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                window.location.replace('ficha_empresas.html');
            }else{
                alert(r.error);
                window.location.replace('../index.html');
            }
        }    
    });
}

function load_empresas(){
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_empresas'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                //alert('llegamos')
                $('#manto_empresas_table_content').html(r.table_content);

            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function guardar_tarea(){

    var etapas_ficha_tareas_lista   = $('#etapas_ficha_tareas_lista').val();
    var nombre_tarea                = $('#nombre_tarea').val();
    var orden_tarea                 = $('#orden_tarea').val();
    var lista_empresas              = $('#lista_empresas').val();
    var lista_estatus               = $('#lista_estatus').val();
    var id_tarea                    = $('#id_tarea').val();
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'guardar_tarea',
            etapas_ficha_tareas_lista,
            nombre_tarea,
            orden_tarea,
            lista_empresas,
            lista_estatus,
            id_tarea
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                alert('Tarea guardada!');
                window.location.href = 'manto_tareas_etapa.html';
            }else{
                alert(r.error);
                window.location.replace('/');
            }
        }    
    });
}

function load_ficha_tareas_etapa(){
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_ficha_tareas_etapa'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#etapas_ficha_tareas_lista').html(r.etapas_ficha_tareas_lista);
                $('#nombre_tarea').val(r.nombre_tarea);
                $('#orden_tarea').val(r.orden_tarea);
                $('#lista_empresas').html(r.lista_empresas);
                $('#lista_estatus').html(r.lista_estatus);
                $('#id_tarea').val(r.id_tarea);

                if(r.vista_empresa){
                    $("#div_lista_empresas").show();
                }else{
                    $("#div_lista_empresas").hide();
                }
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function ficha_tareas_etapa(id){
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'get_tarea_info',
            id                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                window.location.replace('ficha_tareas.html');
            }else{
                alert(r.error);
                window.location.replace('../index.html');
            }
        }    
    });
}

function load_tareas_etapa_change(){
    var etapa_id = $('#etapas_manto_tareas').val();

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_tareas_etapa_change',
            etapa_id                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                //alert('llegamos')
                $('#manto_tareas_table_content').html(r.lista_tareas_table);

            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function load_tareas_etapa(){
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_tareas_por_etapa'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                //alert('llegamos')
                $('#etapas_manto_tareas').html(r.etapas_manto_tareas);

            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function guardar_etiqueta(){

    var nombre_etiqueta = $('#nombre_etiqueta').val();
    var lista_empresas  = $('#lista_empresas').val();
    var lista_estatus   = $('#lista_estatus').val();
    var id_etiqueta     = $('#id_etiqueta').val();
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'guardar_etiqueta',
            nombre_etiqueta,
            lista_empresas,
            lista_estatus,
            id_etiqueta         
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                alert('Etiqueta guardada!');
                window.location.href = 'manto_etiquetas.html';
            }else{
                alert(r.error);
                window.location.replace('/');
            }
        }    
    });
}

function load_ficha_etiquetas(){
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_ficha_etiquetas'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#nombre_etiqueta').val(r.nombre_etiqueta);
                $('#lista_empresas').html(r.lista_empresas);
                $('#lista_estatus').html(r.lista_estatus);
                $('#id_etiqueta').val(r.id_etiqueta);

                if(r.vista_empresa){
                    $("#div_lista_empresas").show();
                }else{
                    $("#div_lista_empresas").hide();
                }
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function ficha_etiquetas(etiqueta_id){
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'get_etiqueta_info',
            etiqueta_id                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                window.location.replace('ficha_etiquetas.html');
            }else{
                alert(r.error);
                window.location.replace('../index.html');
            }
        }    
    });
}

function load_etiquetas(){
    
     $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_etiquetas'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#manto_etiquetas_table_content').html(r.lista_etiquetas);
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function guardar_etapa(){

    var nombre_etapa    = $('#nombre_etapa').val();
    var orden_etapa     = $('#orden_etapa').val();
    var lista_empresas  = $('#lista_empresas').val();
    var lista_estatus   = $('#lista_estatus').val();
    var id_etapa        = $('#id_etapa').val();
    var email_txt       = $('#correo_a_enviar').val(); 
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'guardar_etapa',
            nombre_etapa,
            orden_etapa,
            lista_empresas,
            lista_estatus,
            id_etapa,
            email_txt               
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                alert('Etapa guardada!');
                window.location.href = 'manto_etapas.html';
            }else{
                alert(r.error);
                window.location.replace('/');
            }
        }    
    });
}

function load_ficha_etapa(){
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_ficha_etapa'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#nombre_etapa').val(r.nombre_etapa);
                $('#orden_etapa').val(r.orden_etapa);
                $('#lista_empresas').html(r.lista_empresas);
                $('#lista_estatus').html(r.lista_estatus);
                $('#id_etapa').val(r.id_etapa);
                $('#correo_a_enviar').html(r.correoaenviar);
                if(r.vista_empresa){
                    $("#div_lista_empresas").show();
                }else{
                    $("#div_lista_empresas").hide();
                }
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function ficha_etapas(etapa_id){
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'get_etapa_info',
            etapa_id                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                window.location.replace('ficha_etapa.html');
            }else{
                alert(r.error);
                window.location.replace('../index.html');
            }
        }    
    });
}

function load_etapas(){
    
     $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_etapas'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#manto_etapas_table_content').html(r.lista_etapas);
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function load_index(company){
    window.location.replace('htmls/');
    var c = company
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "assets/php/services.php",
        data: ({
            option: 'load_index',
            c                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#slider_principal').attr("src", "htmls/images/slider_img/"+r.img_slider_principal);
                $('#slider_principal').addClass("img-fluid rounded w-100");
                $('#title_com_interna').html('<b>'+r.titulo_com_interna+'</b>');
                $('#com_interna').html(r.com_interna);
                //$('#img_com_interna').attr("src", "htmls/images/com_interna_img/"+r.img_com_interna);
                //$('#img_com_interna').addClass("img-fluid rounded w-100");
                $('#img_news').attr("src", "htmls/images/news_img/"+r.img_news);
                $('#img_news').addClass("img-fluid rounded w-100");
                //$('#index_plazas_iniciales').empty();
                $('#index_plazas_iniciales').html(r.div_plazas_iniciales);
                $('#select_palabra_clave').html(r.lista_palabra_clave);
                $('#select_palabra_clave').attr('name',company);
                $('#select_localidad').html(r.lista_localidad);
                $('#select_modal_plazas').html(r.lista_modal_plazas);
                //$('#index_plazas_iniciales').append(r.img_com_interna);
                $('#img_com_interna').addClass("img-fluid rounded w-100");
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
    
}

function upload_img_newsletter(){
    var form_data = new FormData();                  
    var totalfiles = document.getElementById('newsletter').files.length;

       for (var index = 0; index < totalfiles; index++) {
          form_data.append("newsletter[]", document.getElementById('newsletter').files[index]);
       }
                               
    $.ajax({
        url: '../assets/php/upload_img_newsletter.php', 
        dataType: 'text',  
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
            if (php_script_response == "No files") {
                //alert('NO SE LOGRO GUARDAR IMAGEN NEWSLETTER');
                return 0;
            }else{
                //alert('OK IMAGEN NEWSLETTER');
                return 1;
            }
        }
    });
}

function upload_img_com_interna(){
    var form_data = new FormData();                  
    var totalfiles = document.getElementById('img_com_interna').files.length;

       for (var index = 0; index < totalfiles; index++) {
          form_data.append("img_com_interna[]", document.getElementById('img_com_interna').files[index]);
       }
                               
    $.ajax({
        url: '../assets/php/upload_img_com_interna.php', 
        dataType: 'text',  
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
            if (php_script_response == "No files") {
                //alert('NO SE LOGRO GUARDAR IMAGEN COM INTERNA');
                return 0;
            }else{
                //alert('OK IMAGEN COM INTERNA');
                return 1;
            }
        }
    });
}

function upload_slider_principal(){
    var form_data = new FormData();                  
    var totalfiles = document.getElementById('img_slider_principal').files.length;

       for (var index = 0; index < totalfiles; index++) {
          form_data.append("img_slider_principal[]", document.getElementById('img_slider_principal').files[index]);
       }
                               
    $.ajax({
        url: '../assets/php/upload_slider_principal.php', 
        dataType: 'text',  
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
            if (php_script_response == "No files") {
                //alert('NO SE LOGRO GUARDAR SLIDER PRINCIPAL');
                return 0;
            }else{
                //alert('OK Slider Principal');
                return 1;
            }
        }
    });
}

function guardar_diseno(){

    var titulo         = $('#title_com_interna').val();
    var com_interna    = $('#com_interna').val();

    upload_slider_principal();
    upload_img_com_interna();
    upload_img_newsletter();


    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'guardar_diseno',
            titulo,
            com_interna          
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                alert('Diseño guardado!');
                //window.location.href = '../';
            }else{
                alert(r.error);
                window.location.replace('index.html');
            }
        }    
    });
}

function load_design(){
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_design'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                //alert('regresando');
                //$('#img_slider_principal').val(r.img_slider_principal);
                $('#title_com_interna').val(r.titulo_com_interna);
                $('#com_interna').html(r.com_interna);
                /*
                if(r.vista_empresa){
                    $("#div_lista_empresas").show();
                }else{
                    $("#div_lista_empresas").hide();
                }
                */
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function guardar_permisos(){

     var id_rol         = $('#lista_roles_select').val();
     var catalogo       = $('#catalogo_box').is(":checked");
     var procesos       = $('#procesos_box').is(":checked");
     var candidatos     = $('#candidatos_box').is(":checked");
     var hojas_vida     = $('#hojas_de_vida_box').is(":checked");
     var suscripciones  = $('#suscripciones_box').is(":checked");
     var etiquetas      = $('#etiquetas_box').is(":checked");
     var etapas         = $('#etapas_box').is(":checked");
     var tareas_etapas  = $('#tareas_etapas_box').is(":checked");
     var empresas       = $('#empresas_box').is(":checked");
     var roles          = $('#roles_box').is(":checked");
     var usuarios       = $('#usuarios_box').is(":checked");
     var privilegios    = $('#privilegios_box').is(":checked");
     var formulario     = $('#formulario_box').is(":checked");
     var diseno         = $('#diseno_box').is(":checked");
     var filtros        = $('#filtros_box').is(":checked");

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'guardar_permisos',
            id_rol,
            catalogo,
            procesos,
            candidatos,
            hojas_vida,
            suscripciones,
            etiquetas,
            etapas,
            tareas_etapas,
            empresas,
            roles,
            usuarios,
            privilegios,
            formulario,
            diseno,
            filtros       
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                alert('Permisos guardados!');
                window.location.href = 'manto_privilegios.html';
            }else{
                alert(r.error);
                window.location.replace('/');
            }
        }    
    });
}

function load_permisos_info(){

    var id_rol = $('#lista_roles_select').val();
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_permisos_info',
            id_rol                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
               $('#catalogo_box').attr( 'checked', r.catalogo_box );
               $('#mantenimiento_box').attr( 'checked', r.mantenimiento_box );
               $('#reportes_box').attr( 'checked', r.reportes_box );
               $('#candidatos_box').attr( 'checked', r.candidatos_box );
               $('#procesos_box').attr( 'checked', r.procesos_box );
               $('#etiquetas_box').attr( 'checked', r.etiquetas_box );
               $('#etapas_box').attr( 'checked', r.etapas_box );
               $('#tareas_etapas_box').attr( 'checked', r.tareas_etapas_box );
               $('#empresas_box').attr( 'checked', r.empresas_box );
               $('#roles_box').attr( 'checked', r.roles_box );
               $('#usuarios_box').attr( 'checked', r.usuarios_box );
               $('#privilegios_box').attr( 'checked', r.privilegios_box );
               $('#formulario_box').attr( 'checked', r.formulario_box );
               $('#diseno_box').attr( 'checked', r.diseno_box );
               $('#hojas_de_vida_box').attr( 'checked', r.hoja_vida_box );
               $('#suscripciones_box').attr( 'checked', r.suscripciones_box );
               $('#filtros_box').attr( 'checked', r.filtros_box );
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function load_permisos(){
    
     $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_permisos'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#lista_roles_select').html(r.lista_roles);
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function guardar_rol(){

    var nombre         = $('#nombres').val();
    var lista_estatus  = $('#lista_estatus').val();

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'guardar_rol',
            nombre,
            lista_estatus,             
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                alert('Rol guardado!');
                window.location.href = 'manto_roles.html';
            }else{
                alert(r.error);
                window.location.replace('/');
            }
        }    
    });
}

function load_ficha_roles(){
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_ficha_roles'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#nombres').val(r.nombres);
                $('#lista_estatus').html(r.lista_estatus);
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function ficha_roles(rol_id){
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'get_rol_info',
            rol_id                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                window.location.replace('ficha_roles.html');
            }else{
                alert(r.error);
                window.location.replace('../index.html');
            }
        }    
    });
}

function load_roles(){
    
     $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_roles'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#manto_roles_table_content').html(r.lista_roles);
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function upload_user_photo(){
    //alert('haciendo upload de la photo');
    var form_data = new FormData();                  
    var totalfiles = document.getElementById('ficha_usuario_foto').files.length;

       for (var index = 0; index < totalfiles; index++) {
          form_data.append("ficha_usuario_foto[]", document.getElementById('ficha_usuario_foto').files[index]);
       }
                               
    $.ajax({
        url: '../assets/php/upload_usuario_photo.php', 
        dataType: 'text',  
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
            if (php_script_response == "No files") {D
                //alert('NO SE LOGRO GUARDAR SLIDER PRINCIPAL');
                return 0;
            }else{
                //alert('OK Slider Principal');
                return 1;
            }
        }
    });
}

function guardar_usuario(){

    var nombre          = $('#nombres').val();
    var apellidos       = $('#apellidos').val();
    var correo          = $('#correo').val();
    var identification  = $('#identification').val();
    var lista_roles     = $('#lista_roles').val();
    var lista_empresas  = $('#lista_empresas').val();
    var lista_sexo      = $('#lista_sexo').val();
    var lista_estatus   = $('#lista_estatus').val();
    var pass            = $('#pass').val();
    var nivel_academico = $('#lista_nivel_academico').val();
    var phone           = $('#phone').val();
    var dependencia     = $('#dependencia').val();
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'guardar_usuario',
            nombre,
            apellidos,
            correo,
            identification,
            lista_roles,
            lista_empresas,
            lista_sexo,
            lista_estatus,
            pass,
            nivel_academico,
            phone,
            dependencia          
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                upload_user_photo();
                alert('Usuario guardado!');
                window.location.href = 'manto_usuarios.html';
            }else{
                alert(r.error);
                window.location.replace('/');
            }
        }    
    });
}

function guardar_usuario_modificado(){

    
    var correo          = $('#correo').val();
    var lista_roles     = $('#lista_roles').val();
    var lista_estatus   = $('#lista_estatus').val();
    var pass            = $('#pass').val();
  
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'guardar_usuario_modificado',
            correo,
            lista_roles,
            lista_estatus,
            pass
       }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                alert('Usuario modificado!');
                window.location.href = 'manto_usuarios.html';
            }else{
                alert(r.error);
                window.location.replace('/');
            }
        }    
    });
}

function load_ficha_usuario(){
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_ficha_usuarios'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#nombres').val(r.nombres);
                $('#apellidos').val(r.apellidos);
                $('#correo').val(r.correo);
                $('#region').val(r.region);
                $('#lista_roles').html(r.lista_roles);
                $('#lista_empresas').html(r.lista_empresas);
                $('#lista_estatus').html(r.lista_estatus);
                if(r.vista_empresa){
                    $("#div_lista_empresas").show();
                }else{
                    $("#div_lista_empresas").hide();
                }
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function ficha_usuarios(email){
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'get_user_info',
            email                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                window.location.replace('ficha_usuarios_modificar.html');
            }else{
                alert(r.error);
                window.location.replace('../index.html');
            }
        }    
    });
}

function load_users(){
    
     $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_users'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#manto_usuarios_table_content').html(r.lista_usuarios);
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function log_out(){
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'log_out'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                window.location.replace('index.html');
            }else{
                alert(r.error);
                
            }
        }    
    });
}


function security(access=0,action=''){

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'security',
            access,
            action                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                /* No code */
            }else{
                alert(r.error);
                window.location.replace('./');
            }
        }    
    });
}

function log_in(){

    var u = $('#user_input').val();
    var p = $('#user_password').val();
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            u,
            p,
            option: 'log_in'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                alert(r.message);
                window.location.replace('dashboard.html');
            }else{
                alert(r.error);
                $('#user_input').val('');
                $('#user_password').val('');
                window.location.replace('index.html');
            }
        }    
    });
}


function load_sidebar(){

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_side_bar'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('#sidebar').html(r.bar);
            }else{
                alert(r.error);
            }
        }    
    });
}


function load_sidebar1(){
    if(u=="ciudadano"){
        var sidebar_text = '    <ul class="nav">'+
                              '<li class="nav-item">'+
                                '<a class="nav-link" href="dashboard.html">'+
                                  '<i class="mdi mdi-view-dashboard menu-icon"></i>'+
                                  '<span class="menu-title">DASHBOARD</span>'+
                                '</a>'+
                              '</li>'+
                              '<li class="nav-item">'+
                                '<a class="nav-link" href="quienes_somos.html">'+
                                  '<i class="mdi mdi-barley  menu-icon"></i>'+
                                  '<span class="menu-title">QUIENES SOMOS</span>'+
                                '</a>'+
                              '</li>'+
                              '<li class="nav-item">'+
                                '<a class="nav-link" data-bs-toggle="collapse" href="#documents" aria-expanded="false" aria-controls="documents">'+
                                  '<i class="mdi mdi-folder-open menu-icon"></i>'+
                                  '<span class="menu-title">DOCUMENTOS</span>'+
                                '<i class="menu-arrow"></i> '+
                                '</a>'+
                                '<div class="collapse" id="documents">'+
                                  '<ul class="nav flex-column sub-menu">'+
                                    '<!--<li class="item"><a class="nav-link" onclick="standar_display();"><i class="mdi mdi-folder-open menu-icon"><span class="menu-title">Explorador</span></i></a></li>-->'+
                                    '<li class="item"> <a class="nav-link" href="explorador.html"><i class="mdi mdi-folder-search menu-icon"><span class="menu-title">Explorador</span></i></a></li>'+
                                    '<li class="item"> <a class="nav-link" href="biblioteca.html"><i class="mdi mdi-folder-search menu-icon"><span class="menu-title">Buscador</span></i></a></li>'+
                                  '</ul>'+
                                '</div>'+
                              '</li>'+
                              '<li class="nav-item">'+
                                '<a class="nav-link" href="reportes.html">'+
                                  '<i class="mdi mdi-chart-pie menu-icon"></i>'+
                                  '<span class="menu-title">REPORTES</span>'+
                              '</li>'+
                             
                              '<!--<li class="nav-item">'+
                                '<a class="nav-link" href="#">'+
                                  '<i class="mdi mdi-shield-key menu-icon"></i>'+
                                  '<span class="menu-title">Seguridad</span>'+
                                '</a>'+
                              '</li>-->'+
                            '</ul>';
    }else{
         var sidebar_text = '    <ul class="nav">'+
                              '<li class="nav-item">'+
                                '<a class="nav-link" href="dashboard.html">'+
                                  '<i class="mdi mdi-view-dashboard menu-icon"></i>'+
                                  '<span class="menu-title">DASHBOARD</span>'+
                                '</a>'+
                              '</li>'+
                              '<li class="nav-item">'+
                                '<a class="nav-link" href="quienes_somos.html">'+
                                  '<i class="mdi mdi-barley  menu-icon"></i>'+
                                  '<span class="menu-title">QUIENES SOMOS</span>'+
                                '</a>'+
                              '</li>'+
                              '<li class="nav-item">'+
                                '<a class="nav-link" data-bs-toggle="collapse" href="#documents" aria-expanded="false" aria-controls="documents">'+
                                  '<i class="mdi mdi-folder-open menu-icon"></i>'+
                                  '<span class="menu-title">DOCUMENTOS</span>'+
                                '<i class="menu-arrow"></i> '+
                                '</a>'+
                                '<div class="collapse" id="documents">'+
                                  '<ul class="nav flex-column sub-menu">'+
                                    '<!--<li class="item"><a class="nav-link" onclick="standar_display();"><i class="mdi mdi-folder-open menu-icon"><span class="menu-title">Explorador</span></i></a></li>-->'+
                                    '<li class="item"> <a class="nav-link" href="explorador.html"><i class="mdi mdi-folder-search menu-icon"><span class="menu-title">Explorador</span></i></a></li>'+
                                    '<li class="item"> <a class="nav-link" href="biblioteca.html"><i class="mdi mdi-folder-search menu-icon"><span class="menu-title">Buscador</span></i></a></li>'+
                                  '</ul>'+
                                '</div>'+
                              '</li>'+
                              '<li class="nav-item">'+
                                '<a class="nav-link" href="reportes.html">'+
                                  '<i class="mdi mdi-chart-pie menu-icon"></i>'+
                                  '<span class="menu-title">REPORTES</span>'+
                              '</li>'+
                              '<li class="nav-item">'+
                                '<a class="nav-link" data-bs-toggle="collapse" href="#reports-menu" aria-expanded="false" aria-controls="ui-basic">'+
                                  '<i class="menu-icon mdi mdi-settings "></i>'+
                                  '<span class="menu-title">AJUSTES</span>'+
                                  '<i class="menu-arrow"></i> '+
                                '</a>'+
                                '<div class="collapse" id="reports-menu">'+
                                  '<ul class="nav flex-column sub-menu">'+
                                    '<!--<li class="item"><a class="nav-link" href="#"><i class="mdi mdi-google-assistant menu-icon"><span class="menu-title">Roles</span></i></a></li>-->'+
                                    '<li class="item"> <a class="nav-link" href="manto_usuarios.html"><i class="mdi mdi-account-multiple menu-icon"><span class="menu-title">Usuarios</span></i></a></li>'+
                                    '<li class="item"> <a class="nav-link" href="manto_documentos.html"><i class="mdi mdi-account-multiple menu-icon"><span class="menu-title">Edición documentos</span></i></a></li>'+
                                    '<li class="item"> <a class="nav-link" href="categorias.html"><i class="mdi mdi-account-multiple menu-icon"><span class="menu-title">Categoria</span></i></a></li>'+
                                    '<li class="item"> <a class="nav-link" href="notificacion.html"><i class="mdi mdi-bell-ring menu-icon"><span class="menu-title">Notificaciones</span></i></a></li>'+
                                  '</ul>'+
                                '</div>'+
                              '</li>'+
                              '</li>'+
                              '<!--<li class="nav-item">'+
                                '<a class="nav-link" href="#">'+
                                  '<i class="mdi mdi-shield-key menu-icon"></i>'+
                                  '<span class="menu-title">Seguridad</span>'+
                                '</a>'+
                              '</li>-->'+
                            '</ul>';
    }
   
    $('#sidebar').html(sidebar_text);

}


function load_headbar(){
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'load_headbar'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('.headerbar_user_name').html(r.name);
                $('.headerbar_email').html(r.email_id);
            }else{
                alert(r.error);
                window.location.replace('index.html');
            }
        }    
    });
}

function crear_categoria(accion,pathcat){
    
    //var pathcat = $('.pathCat').val.();
    //alert(pathcat);

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            pathcat,
            accion,
            option: 'crear_categoria'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                $('.datos_categoria').html(r.message);
                $('.modal-footer').html(r.botones);
                /* No code */
            }else{
                alert(r.error);
//                window.location.replace('../dashboard.html');
            }
        }    
    });
}

function CrearCarpeta(action,pathcat){

    var categoria = $('#nombre_categoria').val();
    //alert(categoria);

    //alert(pathcat);     
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            pathcat,
            categoria,
            action,
            option: 'crearcarpeta'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                if (r.nosave == '') {
                    alert(r.sucess);
                    $('#exampleModal').modal('hide');
                    window.location.replace('categorias.html');
                }else{
                    alert(r.nosave);
                }
                /* No code */
            }else{
                alert(r.error);
                //window.location.replace('../dashboard.html');
            }
        }    
    });
}

function viewcarpeta(directorio){

    //var directorio = $('.directorio').val();

    if (typeof directorio === 'undefined') { 
            var directorio = "../../htmls/documents/"; 
        } 

    //alert(directorio);

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            directorio,
            option: 'viewCategoria'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                //alert('prueba');
                $('.viewcategoria').html(r.carpetas);
                $('.patchbtn').html(r.pathbtn);
                /* No code */
            }else{
                alert(r.error);
                //window.location.replace('../dashboard.html');
            }
        }    
    });
}

function descargar_archivo(link){

    //alert('pulsaste boton para descargar');
    //alert(link);

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            link,
            option: 'descargar_archivos'                   
        }),
        dataType: "json",        
        success: function(r) {

            //alert(link);                                                   
            if(r.error == ''){
                
                var a = document.createElement('a');
                
                a.href = link;
                a.target = '_blank';
                a.download = r.name;

                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                
            }else{
                alert(r.error);
                //window.location.replace('../dashboard.html');
            }
        }    
    });

}

function compartir(link,type){
    //alert('preciono el boton de compartir');
    //alert(link);
    var url_actual = window.location.href;
   //alert(url_actual);

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            link,
            type,
            url_actual,
            option: 'compartir'                   
        }),
        dataType: "json",        
        success: function(r) {

            //alert(r.link);                                                   
            if(r.error == ''){
               var content = r.share;
               //alert(content);
               $("#modal-share").modal('show');
               $('.share-link').html(r.modal);

               /* navigator.clipboard.writeText(content)
                    .then(() => {
                    //console.log("link copiado al portapapel...")
                    alert('LINK COPIADO PARA COMPARTIR');
                })
                    .catch(err => {
                    console.log('No se copio el URL', err);
                })*/
                
            }else{
                alert(r.error);
                //window.location.replace('../dashboard.html');
            }
        }    
    });

    }

    function shared_descarga(veri){
       
        console.log('Entro a descargar shared');
        const urlParams = new URLSearchParams(veri);

        const pandora = urlParams.get('share')
        console.log(pandora);
        const type = urlParams.get('type')
        console.log(type);

        $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            pandora,
            type,
            option: 'shared_archivo'                   
        }),
        dataType: "json",        
        success: function(r) {

            //alert(r.link);                                                   
            if(r.error == ''){

                //alert(r.share);
                
                var a = document.createElement('a');
                
                a.href = r.share;
                a.target = '_blank';
                a.download = r.name;

                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                
            }else{
                alert(r.error);
                //window.location.replace('../dashboard.html');
            }
        }    
    });

    }

    function subir_archivos(){
        //alert('subir archivos');
        $('#upload').modal('show');
            $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'mostrar_upload'                   
        }),
        dataType: "json",        
        success: function(r) {

            //alert(r.link);                                                   
            if(r.error == ''){
                $('.subir_archivos').html(r.form);
             
            }else{
                alert(r.error);
                //window.location.replace('../dashboard.html');
            }
        }    
    });

    }

    function uploadarchivos() {
        // body...

        var nombre_doc = $('#name_document').val();
        var autor      = $('#autor').val();
        var f_publi    = $('#f_public').val();
        var isbn       = $('#isbn').val();
        var pag        = $('#page').val();
        var descrp     = $('#descripcion').val();
        var cat        = $('#cat').val();
        var subcat1    = $('#sub1').val();
        var subcat2    = $('#sub2').val();
        var file       = $('#formFileSm').val();
        //alert(file);

        var formData = new FormData();
        formData.append("formFileSm[]", document.getElementById('formFileSm').files[0]);

        formData.append('autor',autor);
        formData.append('f_publi',f_publi);
        formData.append('isbn',isbn);
        formData.append('pag',pag);
        formData.append('descrp',descrp);
        formData.append('cat',cat);
        formData.append('subcat1',subcat1);
        formData.append('subcat2',subcat2);
        formData.append('nombre_doc',nombre_doc);

        //alert(files);
        //console.log(formData['formFileSm']);
        $.ajax({
            url: '../assets/php/upload_archivo.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(r) {
                alert('Se guardo exitosamente el archivo');
                
                $('#upload').modal('hide');
                window.location.replace('dashboard.html');
            }
        });
        return false;

    }


function filtros() {
    // body...
    var fecha_rango = $('#date_range').val();
    var select_cat = $('#reportes_filtros_select_categoria').val();
    var select_arch = $('#reportes_filtros_select_archivo').val();
   //alert(f_inicio); 
   //alert(select_cat);
   //alert(select_arch);
   $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            fecha_rango,
            select_cat,
            select_arch,
            option: 'datos_filtros'                   
        }),
        dataType: "json",        
        success: function(r) {

            //alert(r.link);                                                   
            if(r.error == ''){
                $('#tablareportes_usuario').html(r.filtro_usuarios);
                $('#tablareportes_categoria').html(r.filtro_categorias);
                $('#tablareportes_descargas').html(r.filtro_descargas);

                category_graphic_reporte(r.data_info,r.data_names);
             
            }else{
                alert(r.error);
                //window.location.replace('../dashboard.html');
            }
        }    
    }); return false;

}

function select_filtro_categoria() {
    // body...

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            
            option: 'MostrarSelect'                   
        }),
        dataType: "json",        
        success: function(r) {

            //alert(r.link);                                                   
            if(r.error == ''){
                $('.select_categorias').html(r.selectCat);
                
             
            }else{
                alert(r.error);
                //window.location.replace('../dashboard.html');
            }
        }    
    }); return false;
}

function select_filtro_archivo(cat=0) {
    // body...

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            cat,
            option: 'select_view_archivo'                   
        }),
        dataType: "json",        
        success: function(r) {

            //alert(r.link);                                                   
            if(r.error == ''){
                
                $('.select_archivo').html(r.selecArchivo);
             
            }else{
                alert(r.error);
                //window.location.replace('../dashboard.html');
            }
        }    
    }); return false;
}

function select_subcat1(){

    var cat1 = $('#cat').val();
    //alert(cat1);

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            cat1,
            option: 'subcat1_upload'                   
        }),
        dataType: "json",        
        success: function(r) {

            //alert(r.link);                                                   
            if(r.error == ''){
                //alert(r.selectSubCat1);
                $('#sub1').html(r.selectSubCat1);
             
            }else{
                alert(r.error);
                //window.location.replace('../dashboard.html');
            }
        }    
    }); return false;
}
function select_subcat2(){

    var subcat1 = $('#sub1').val();
    //alert(cat1);

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            subcat1,
            option: 'update_subcat2'                   
        }),
        dataType: "json",        
        success: function(r) {

            //alert(r.link);                                                   
            if(r.error == ''){
                //alert(r.selectSubCat1);
                $('#sub2').html(r.selectSubCat2);
             
            }else{
                alert(r.error);
                //window.location.replace('../dashboard.html');
            }
        }    
    }); return false;
}
