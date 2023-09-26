<?php
// Conexion a la base de datos
$host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "db-conexion";

// Intentar establecer la conexion
$conn = new mysqli($host, $db_username, $db_password, $db_name);

// Verificar la conexión
if ($conn->connect_error) {
    die("No se ha podido conectar al servidor:" . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos";
}

?>