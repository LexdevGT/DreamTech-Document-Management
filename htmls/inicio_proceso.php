<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="base-uri 'self'">

    <link rel="stylesheet" href="../assets/css/style.css">
    <!--<link rel="shortcut icon" href="imgs/logo/UTZ-Box-09.png" type="image/x-icon">-->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <!-- Libreria JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- font awesome -->
    <link href="../assets/fontawesome-free-5/css/all.css" rel="stylesheet"> <!--load all styles -->
    <link href="../assets/fontawesome-free-5/css/fontawesome.min.css" rel="stylesheet">

    <title>OWL ATS - INICIO</title>
</head>
<body>
    <div class="container-fluid"> <!-- *** INICIO DEL CONTENEDOR PRINCIPAL *** -->
        <div class="navigation-bar row"> <!-- *** INICIO DEL NAV BAR *** -->
            <nav class="navbar navbar-expand-lg navbar-light col">
                <span class="navbar-brand">
                    <img src="../assets/images/bootstrap-logo.svg" alt="" width="40" height="34">
                    LOGO
                </span>
            </nav>          
        </div> <!-- *** FIN DEL NAV BAR *** -->

        <div class="row mt-4 d-flex justify-content-center"> <!-- ** INICIO DE CARTA PRINCIPAL ** -->
            <div class="col-sm-6">
                <div class="card redondo">
                    <div class="card-body">
                        <div class="row mt-1">  
                            <div class="col-sm">
                                <label>Nombre:</label>
                            </div>
                            <div class="col-sm">
                                <input class="form-control" type="text" name="nombre" id="nombre">
                            </div>
                        </div>
                        <div class="row mt-1">  
                            <div class="col-sm">
                                <label>Plaza:</label>
                            </div>
                            <div class="col-sm">
                                <input class="form-control" type="text" name="nombre" id="nombre">
                            </div>
                        </div>
                        <div class="row mt-1">  
                            <div class="col-sm">
                                <label>DPI:</label>
                            </div>
                            <div class="col-sm">
                                <input class="form-control" type="text" name="nombre" id="nombre">
                            </div>
                        </div>
                        <div class="row mt-1">  
                            <div class="col-sm">
                                <label>Ubicación de vivienda:</label>
                            </div>
                            <div class="col-sm">
                                <input class="form-control" type="text" name="nombre" id="nombre">
                            </div>
                        </div>
                        <div class="row mt-1">  
                            <div class="col-sm">
                                <label>Área de experiencia:</label>
                            </div>
                            <div class="col-sm">
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mt-1">  
                            <div class="col-sm">
                                <label>Solicitud de empleo:</label>
                            </div>
                            <div class="col-sm">
                                <input type="file" class="form-control" id="customFile" />
                            </div>
                        </div>
                        <div class="row mt-1">  
                            <div class="col-sm">
                                <a class="btn btn-outline-primary btn-redondo" href="../assets/files/SOLICITUD_DE_EMPLEO.pdf">Descargar solicitud</a>
                            </div>
                            <div class="col-sm">
                                <button id='aplicar-puesto' class="btn btn-outline-primary btn-redondo">Aplicar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ** FIN DE CARTA PRINCIPAL -->
    </div> <!-- *** FIN DEL CONTENEDOR PRINCIPAL *** -->
   
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="../assets/js/core.js"></script>
</body>
</html>