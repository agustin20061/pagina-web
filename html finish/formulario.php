<?php
	$nombre= $_GET["nombre"];
	$apellido = $_GET["apellido"];
    $edad = $_GET["edad"];
    $email = $_GET["email"];
    $telefono = $_GET["telefono"];
    $monto = $_GET["monto"];
    $servername = "127.0.0.1";
    $database = "formulario";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion


    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        //insertamos el resultado del formulario
        $resultado=mysqli_query($conexion,"insert into formulario values(null, '$apellido','$edad' ,'$email','$telefono','$nombre','$monto');");
        //seleccionamos todas las filas que haya en usuarios
		$resultado = mysqli_query($conexion,"select * from formulario;");
        
        /*echo "Datos que hay en la base:\n";
        while($fila=mysqli_fetch_assoc($resultado)){ // recorremos cada fila obtenida y mostramos el nombre y el apellido
            ?>
            <p><?php echo $fila['nombre']. " " .$fila['apellido']?></p>
            <?php
        }*/
    }
    
    echo "enviado";
    
    //mysqli_close($conexion);
?>