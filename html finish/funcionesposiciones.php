<?php 
function conectar_con_base_de_datosfutbol($nombre_db,$servername,$username,$password){
    
    $conexion = mysqli_connect($servername, $username, $password, $nombre_db);
    if ($conexion) {
        echo "<h3> Futbol </h3>";
    } else {
        echo "<p> Error de conexión: " . mysqli_error() . "</p>";
    }
    return $conexion;
}

function seleccionar_todof($conexion,$nombre_de_tabla,$consulta_sql){
    
    $result = mysqli_query($conexion, $consulta_sql);

    if (mysqli_num_rows($result) > 0) {

        $respuesta = '';

        for ($i = 0; $i < mysqli_num_rows($result); $i++) {
            $fila = mysqli_fetch_assoc($result);
            $dni = $fila["num"];
            $url = $fila["url"];
            $equipos = $fila["equipo"];

            $respuesta .= '<tr>';
            $respuesta .= '<td>';
            $respuesta .= $dni;
            $respuesta .= '<img class="imagen" src= ';
            $respuesta .=$url;
            $respuesta .= ' >';
            $respuesta .= $equipos;
            $respuesta .= '</td>';
            $respuesta .= '<td>';
            $respuesta .= $fila["pj"];
            $respuesta .= '</td>';
            $respuesta .= '<td>';
            $respuesta .= $fila["g"];
            $respuesta .= '</td>';
            $respuesta .= '<td>';
            $respuesta .= $fila["e"];
            $respuesta .= '</td>';
            $respuesta .= '<td>';
            $respuesta .= $fila["p"];
            $respuesta .= '</td>';
            $respuesta .= '<td>';
            $respuesta .= $fila["pts"];
            $respuesta .= '</td>';
            $respuesta .= '</tr>';
                            
                              
        }

        echo $respuesta;

    } else {
        echo "<p> No se han encontrado resultados. </p>";
    }
}
function conectar_y_obtener_datosf($nombre_de_base_de_datos,$nombre_tabla) {
    $conexion = conectar_con_base_de_datosfutbol($nombre_de_base_de_datos);
    seleccionar_todof($conexion,$nombre_tabla);
}

function obtenerDatosDePosicionesfutbol(){
    $conexion = conectar_con_base_de_datosfutbol('formulario','127.0.0.1','alumno','alumnoipm');
    seleccionar_todof($conexion,'posicionesfutbol','select * from posicionesfutbol');
}
?>
