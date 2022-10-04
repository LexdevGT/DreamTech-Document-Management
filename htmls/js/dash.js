(function($) {

//categorias_folder();
datos();
categorias_folder();


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
             
                $('.carp-reciente').html(r.categoria);
                //alert(categoria);
            }else{
                alert(r.error);
                //window.location.replace('../dashboard.html');
                location.reload();
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


function category_graphic(data_info,data_names){
   var doughnutPieData = {
    datasets: [{
      label:'Grafica',
      //data: [12, 12, 12, 12],
      data: data_info,
      backgroundColor: ["#0074D9", 
      "#FF4136", 
      "#2ECC40", 
      "#FF851B", 
      "#7FDBFF", 
      "#B10DC9", 
      "#FFDC00", 
      "#001f3f", 
      "#39CCCC", 
      "#01FF70", 
      "#85144b", 
      "#F012BE", 
      "#3D9970", 
      "#111111", 
      "#AAAAAA"
      ],
      borderColor: ["#0074D9", 
      "#FF4136", 
      "#2ECC40", 
      "#FF851B", 
      "#7FDBFF", 
      "#B10DC9", 
      "#FFDC00", 
      "#001f3f", 
      "#39CCCC", 
      "#01FF70", 
      "#85144b", 
      "#F012BE", 
      "#3D9970", 
      "#111111", 
      "#AAAAAA"
      ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: data_names
  };
  var doughnutPieOptions = {
    responsive: true,
    animation: {
      animateScale: true,
      animateRotate: true
    }
  };

    if ($("#pieChart").length) {
        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: doughnutPieData,
            options: doughnutPieOptions
        });
    }


}