<!DOCTYPE html>
<html lang="en">
    
<head>
    <?php include 'funcionesmysql.php'; ?>
    <?php include 'funcionesposiciones.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Posiciones</title>
</head>
<header>
    <div class="container">
    <img  class="logo"src="img/Logo.png"height="100px" width="100px">
    <header>
        <h1 class="titulo">BFSport</h1>
        <center>
            
            <a class="opciones" href="partidos.html">Partidos</a>
            <a class="opciones" href="index.html">Inicio</a>
            <a class="opciones" href="estadisticas.html">Estadisticas</a>
            <div class="btn-group btn-group-toggle" data-toggle="buttons"></div>
        </center>
    </div>
    </header> 
    <main>
        
          <div class="container"> 
            <table class="table table-striped table-dark">
                
            <tr><th>Equipos</th><th>PJ</th><th>G</th><th>P</th><th>Pts</th></tr>
            
            <?php obtenerDatosDePosiciones() ?>
            
            </table>
            <table class="table table-striped table-dark">
                
            <tr><th>Equipos</th><th>PJ</th><th>G</th><th>E</th><th>P</th><th>Pts</th></tr>
            
            <?php obtenerDatosDePosicionesfutbol() ?>
            
            </table>
        
        </div>
        <div class="redes">
            <img src="img/gorjeo.png"height="30px" width="30px">
            <img src="img/facebook.png"height="30px" width="30px">
            <img src="img/youtube.png"height="30px" width="30px">
            <img src="img/instagram.png"height="30px" width="30px">
            <a href="form.html"><img src="img/png-transparent-dollar-sign-united-states-dollar-dollar-coin-computer-icons-coin-text-trademark-logo.png"height="30px"width="45px"></div></div></a>
        </div>
    </main> 
    <footer>
    </footer>


</html>