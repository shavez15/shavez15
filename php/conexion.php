<?php
function conectarDBS() : mysqli {
    // Datos de conexión a la base de datos
    $host = 'localhost'; 
    $usuario = 'root';   
    $password = '';      



    $db = 'aespa';      




    
    // Crear la conexión
    $conexion = new mysqli($host, $usuario, $password, $db);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Hubo un error al conectar la base de datos: " . $conexion->connect_error);
    }

    return $conexion;
}
?>
