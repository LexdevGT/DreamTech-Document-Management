$(function(){
    load_sidebar();
    load_headbar();

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
        var table = $('#tablareportes');
        if(table && table.length){
            var preserveColors = (table.hasClass('table2excel_with_colors') ? true : false);
            $(table).table2excel({
                exclude: ".noExl",
                name: "Excel Document Name",
                filename: "Reporte" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
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
                $('#plazas_activas_conteo').html(r.plazas_activas);
                var plazas_activas = r.plazas_activas_graph;
                load_plazas_activas(plazas_activas);
                $('#total_aplicantes_conteo').html(r.total_aplicantes);
                var total_aplicantes = r.total_aplicantes_graph;
                load_total_aplicantes(total_aplicantes);
                $('#tiempo_contratacion').html(r.tiempo_medio + " días");
                var d = r.embudo_graph;
                var l = r.embudo_labels;
                load_embudo(d);
            }else{
                alert(r.error);
                window.location.replace('dashboard.html');
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

function guardar_usuario(){

    var nombre         = $('#nombres').val();
    var apellidos      = $('#apellidos').val();
    var correo         = $('#correo').val();
    var region         = $('#region').val();
    var lista_roles    = $('#lista_roles').val();
    var lista_empresas = $('#lista_empresas').val();
    var lista_estatus  = $('#lista_estatus').val();
    var pass           = $('#pass').val();
    
    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'guardar_usuario',
            nombre,
            apellidos,
            correo,
            region,
            lista_roles,
            lista_empresas,
            lista_estatus,
            pass                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                alert('Usuario guardado!');
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
                window.location.replace('ficha_usuarios.html');
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


function security(access=0){

    $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'security',
            access                   
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
    var sidebar_text = '    <ul class="nav">'+
                              '<li class="nav-item">'+
                                '<a class="nav-link" href="dashboard.html">'+
                                  '<i class="mdi mdi-view-dashboard menu-icon"></i>'+
                                  '<span class="menu-title">DASHBOARD</span>'+
                                '</a>'+
                              '</li>'+
                              '<li class="nav-item">'+
                                '<a class="nav-link" data-bs-toggle="collapse" href="#documents" aria-expanded="false" aria-controls="documents">'+
                                  '<i class="mdi mdi-folder-open menu-icon"></i>'+
                                  '<span class="menu-title">Documentos</span>'+
                                '<i class="menu-arrow"></i> '+
                                '</a>'+
                                '<div class="collapse" id="documents">'+
                                  '<ul class="nav flex-column sub-menu">'+
                                    '<li class="item"><a class="nav-link" href="biblioteca.html"><i class="mdi mdi-folder-open menu-icon"><span class="menu-title">Explorador</span></i></a></li>'+
                                    '<li class="item"> <a class="nav-link" href="biblioteca.html"><i class="mdi mdi-folder-search menu-icon"><span class="menu-title">Buscador</span></i></a></li>'+
                                  '</ul>'+
                                '</div>'+
                              '</li>'+
                              '<li class="nav-item">'+
                                '<a class="nav-link" href="reportes.html">'+
                                  '<i class="mdi mdi-chart-pie menu-icon"></i>'+
                                  '<span class="menu-title">Reportes</span>'+

                              '</li>'+
                             
                              
                              
                              '<li class="nav-item">'+
                                '<a class="nav-link" data-bs-toggle="collapse" href="#reports-menu" aria-expanded="false" aria-controls="ui-basic">'+
                                  '<i class="menu-icon mdi mdi-settings "></i>'+
                                  '<span class="menu-title">Ajustes</span>'+
                                  '<i class="menu-arrow"></i> '+
                                '</a>'+
                                '<div class="collapse" id="reports-menu">'+
                                  '<ul class="nav flex-column sub-menu">'+
                                    '<li class="item"><a class="nav-link" href="#"><i class="mdi mdi-google-assistant menu-icon"><span class="menu-title">Roles</span></i></a></li>'+
                                    '<li class="item"> <a class="nav-link" href="#"><i class="mdi mdi-account-multiple menu-icon"><span class="menu-title">Usuarios</span></i></a></li>'+

                                    '<li class="item"> <a class="nav-link" href="categorias.html"><i class="mdi mdi-account-multiple menu-icon"><span class="menu-title">Categoria</span></i></a></li>'+

                                    '<li class="item"> <a class="nav-link" href="notificacion.html"><i class="mdi mdi-bell-ring menu-icon"><span class="menu-title">Notificaciones</span></i></a></li>'+
                                    

                                  '</ul>'+
                                '</div>'+
                              '</li>'+
                              '</li>'+
                              '<li class="nav-item">'+
                                '<a class="nav-link" href="#">'+
                                  '<i class="mdi mdi-shield-key menu-icon"></i>'+
                                  '<span class="menu-title">Seguridad</span>'+
                                '</a>'+
                              '</li>'+
                            '</ul>';
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