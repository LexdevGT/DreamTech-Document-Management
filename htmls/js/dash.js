(function($) {

//categorias_folder();
datos();



  })(jQuery);

function categorias_folder(){
  $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'view_categorias_folder'                   
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

function datos(){
  $.ajax({
        contentType: "application/x-www-form-urlencoded",
        type: "POST",
        url: "../assets/php/services.php",
        data: ({
            option: 'viewgatget'                   
        }),
        dataType: "json",        
        success: function(r) {                                                   
            if(r.error == ''){
                //alert(r.datos2);
              $('.gatget').html(r.datos2);
                /* No code */
            }else{
                alert(r.error);
                window.location.replace('../dashboard.html');
            }
        }    
    });

}