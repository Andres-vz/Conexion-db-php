<?php
// Conexión a la base de datos por medio de PDO (PHP Data Objects)
$db_username = "root";
$db_password = "";

try {
    $conn = new PDO('mysql:host=localhost;db_name=db-conexion', $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Si la conexion es exitosa, imprime un mensaje
    echo "CONEXION EXITOSA A LA BASE DE DATOS";
} catch (PDOException $e) {
    // Si hay un error, caputra la excepcion
}

?>