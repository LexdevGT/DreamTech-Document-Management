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


function category_graphic(){
   var doughnutPieData = {
    datasets: [{
      label:'Prueba',
      data: [12, 12, 12, 12],
      backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.5)',
        'rgba(255, 206, 86, 0.5)',
        'rgba(75, 192, 192, 0.5)',
        'rgba(153, 102, 255, 0.5)',
        'rgba(255, 159, 64, 0.5)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
      'Manual',
      'Institucional',
      'Facturacion',
      'MARN',
    ]
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